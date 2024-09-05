<?php
class DB
{
	public static function CurrentConnection()
	{
		global $currentConnection;
		return $currentConnection ? $currentConnection : DB::DefaultConnection();
	}

	public static function CurrentConnectionId()
	{
		$conn = DB::CurrentConnection();
		return $conn->connId;
	}

	public static function DefaultConnection()
	{
		global $cman;
		return $cman->getDefault();
	}

	public static function ConnectionByTable( $table )
	{
		global $cman;
		return $cman->byTable($table);
	}

	public static function ConnectionByName( $name )
	{
		global $cman;
		return $cman->byName( $name );
	}

	public static function SetConnection( $connection )
	{
		global $currentConnection;
		if ( is_string( $connection ) )
		{
			$currentConnection = DB::ConnectionByName( $connection );
		}
		else if ( is_a($connection, 'Connection') ) {
		 	$currentConnection = $connection;
		}
	}

	public static function LastId()
	{
		return DB::CurrentConnection()->getInsertedId();
	}

	public static function Query( $sql )
	{
		return DB::CurrentConnection()->querySilent( $sql );
	}

	public static function Exec( $sql )
	{
		return DB::CurrentConnection()->execSilent( $sql ) != NULL;
	}

	public static function LastError()
	{
		return DB::CurrentConnection()->lastError();
	}
	/**
	 * @param Array $userOrders array("field1", "field2") -> ORDER BY field1, field2
	 * array( array( "field1", "d" ), "field2" ) -> ORDER BY field1 DESC, field2
	 * array( array( "field1", "a" ), array( "field2", "d" ) ) -> ORDER BY field1 ASC, field2 DESC
	*/
	public static function Select( $table, $userConditions = array(), $userOrders = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$dc->order = array();

		foreach( $userOrders as $userOrder ){
			if( is_array( $userOrder ) ){
				$orderClause = array( "column" => $userOrder[0] );
				$dir = $userOrder[1];
				switch ( $dir ) {
					case "a":
						$orderClause["dir"] = "ASC";
						break;
					case "d":
						$orderClause["dir"] = "DESC";
						break;
				}
			}	
			else
				$orderClause = array( "column" => $userOrder );
			
			$dc->order[] = $orderClause;
		}
		$queryResult = $dataSource->getList( $dc );
		return $queryResult;
	}

	public static function SelectValue( $field, $table, $userConditions = array(), $order = array() ){
		$rs = DB::Select( $table, $userConditions, $order );
		if( !$rs )
			return false;
		$data = $rs->fetchAssoc();
		if( $data[ $field ] )
			return $data[ $field ];
		return false;
	}

	public static function Delete($table, $userConditions = array() )
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource )
			return false;
		
		$dc = new DsCommand();
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$prep = $dataSource->prepareSQL( $dc );
		if( $prep["where"] == "" )
			return false;
		$ret = $dataSource->deleteSingle( $dc, false );
		return $ret;
	}

	public static function Insert($table, $data)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$result = $dataSource->insertSingle( $dc );
		return !!$result;
	}

	public static function Update($table, $data, $userConditions)
	{
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
		if( !$dataSource ) {
			return false;
		}
		if( !$userConditions ) {
			return false;
		}
		$dc = new DsCommand();
		$dc->values = $data;
		$dc->filter = DB::_createFilterCondition( $userConditions );
		$result = $dataSource->updateSingle( $dc, false );
		return !!$result;
	}

	public static function Count( $table, $userConditions = array() ){
		$dataSource = getDbTableDataSource( $table, DB::CurrentConnectionId() );
        if( !$dataSource )
            return false;
        $dc = new DsCommand();
        $dc->filter = DB::_createFilterCondition( $userConditions );
        $count = $dataSource->getCount( $dc );
        return $count;
	}
	protected static function _createFilterCondition( $userConditions )
	{
		if( !is_array( $userConditions ) ) {
			return DataCondition::SQLCondition( $userConditions );
		}

		$conditions = array();
		foreach($userConditions as $fieldName => $value)
		{
			if ( is_null($value) ) {
				$conditions[] = DataCondition::FieldIs( $fieldName, dsopEMPTY, '' );
			} else {
				$conditions[] = DataCondition::FieldEquals( $fieldName, $value );
			}
		}
		return DataCondition::_And( $conditions );
	}


	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected static function _execSilentWithBlobProcessing($blobs, $dalSQL, $tableinfo, $autoincField = null)
	{
		$blobTypes = array();
		if( DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		DB::CurrentConnection()->execSilentWithBlobProcessing( $dalSQL, $blobs, $blobTypes, $autoincField );
	}

	protected static function _prepareValue($value, $type)
	{
		if ( is_null($value) )
			return "NULL";

		if( DB::CurrentConnection()->dbType == nDATABASE_Oracle || DB::CurrentConnection()->dbType == nDATABASE_DB2 || DB::CurrentConnection()->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( DB::CurrentConnection()->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";

				return "?";
			}

			if( DB::CurrentConnection()->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}

		if( IsNumberType($type) && !is_numeric($value) )
		{
			$value = trim($value);
			$value = str_replace(",", ".", $value);
			if ( !is_numeric($value) )
				return "NULL";
		}

		if( IsDateFieldType($type) || IsTimeType($type) )
		{
			if( !$value )
				return "NULL";

			// timestamp
			if ( is_int($value) )
			{
				if ( IsDateFieldType($type) )
				{
					$value = getYMDdate($value) . " " . getHISdate($value);
				}
				else if ( IsTimeType($type) )
				{
					$value = getHISdate($value);
				}
			}

			return DB::CurrentConnection()->addDateQuotes( $value );
		}

		if( NeedQuotes($type) )
			return DB::CurrentConnection()->prepareString( $value );

		return $value;
	}

	/**
	 * 	Find table info stored in the project file
	 *
	 */
	public static function _findDalTable( $table, $conn = null )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		$tableName = $conn->getTableNameComponents( $table );

		DB::_fillTablesList( $conn );

		//	exact match
		foreach( $dalTables[$conn->connId] as $t ) {
			if( ( !$tableName["schema"] || $t["schema"] == $tableName["schema"] )
				&& $t["name"] == $tableName["table"] )
				return $t;
		}

		//	case-insensitive
		$tableName["schema"] = strtoupper( $tableName["schema"] );
		$tableName["table"] = strtoupper( $tableName["table"] );

		foreach( $dalTables[$conn->connId] as $t )
		{
			if( ( !$tableName["schema"] || strtoupper( $t["schema"] ) == $tableName["schema"] )
				&& strtoupper( $t["name"] ) == $tableName["table"] )
				return $t;
		}
		return null;
	}

	/**
	 * 	Get list of table field names and types
	 *	Check tables stored in the project first, then fetch it from the database.
	 *
	 */
	public static function _getTableInfo($table, $connId = null )
	{
		global $dal_info, $tableinfo_cache, $cman;
		if( !$connId )
			$connId = DB::CurrentConnectionId();

		//	prepare cache
		if( !isset($tableinfo_cache[ $connId ] ) )
			$tableinfo_cache[ $connId ] = array();

		$tableInfo = array();


		$tableDescriptor = DB::_findDalTable( $table, $cman->byId( $connId ) );

		if ( $tableDescriptor )
		{
			importTableInfo( $tableDescriptor["varname"] );

			$tableInfo["fields"] = $dal_info[ $tableDescriptor["varname"] ];

			if( $tableDescriptor["schema"] )
				$tableInfo["fullName"] = $tableDescriptor["schema"] . "." . $tableDescriptor["name"];
			else
				$tableInfo["fullName"] = $tableDescriptor["name"];
		}
		else
		{
			//	check cache first
			if( isset($tableinfo_cache[ $connId ][ $table ] ) )
				return $tableinfo_cache[ $connId ][ $table ];

			//	fetch table info from the database
			$helpSql = "select * from " . DB::CurrentConnection()->addTableWrappers( $table ) . " where 1=0";

			$tableInfo["fullName"] = $table;
			$tableInfo["fields"] = array();

			// in case getFieldsList throws error
			$tableinfo_cache[ $connId ][ $table ] = false;

			$fieldList = DB::CurrentConnection()->getFieldsList($helpSql);
			foreach ($fieldList as $f )
			{
				$tableInfo["fields"][ $f["fieldname"] ] = array( "type" => $f["type"], "name" => $f["fieldname"] );
			}
			$tableinfo_cache[ $connId ][ $table ] = $tableInfo;
		}

		return $tableInfo;
	}


	protected static function _fillTablesList( $conn )
	{
		global $dalTables;
		if( !$conn )
			$conn = DB::CurrentConnection();
		if( $dalTables[ $conn->connId ] )
			return;
		$dalTables[ $conn->connId ] = array();
		if( "u736239518tsundbat154412412" == $conn->connId )
		{
			$dalTables[$conn->connId][] = array("name" => "get_images", "varname" => "u736239518tsundbat154412412__get_images", "altvarname" => "get_images", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_announcement", "varname" => "u736239518tsundbat154412412__tblm_announcement", "altvarname" => "tblm_announcement", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_announcement_view", "varname" => "u736239518tsundbat154412412__tblm_announcement_view", "altvarname" => "tblm_announcement_view", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_asuransi", "varname" => "u736239518tsundbat154412412__tblm_asuransi", "altvarname" => "tblm_asuransi", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_bank", "varname" => "u736239518tsundbat154412412__tblm_bank", "altvarname" => "tblm_bank", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_category", "varname" => "u736239518tsundbat154412412__tblm_category", "altvarname" => "tblm_category", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_client_profile", "varname" => "u736239518tsundbat154412412__tblm_client_profile", "altvarname" => "tblm_client_profile", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_countries", "varname" => "u736239518tsundbat154412412__tblm_countries", "altvarname" => "tblm_countries", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_courier", "varname" => "u736239518tsundbat154412412__tblm_courier", "altvarname" => "tblm_courier", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_currency", "varname" => "u736239518tsundbat154412412__tblm_currency", "altvarname" => "tblm_currency", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_customer", "varname" => "u736239518tsundbat154412412__tblm_customer", "altvarname" => "tblm_customer", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_disposition", "varname" => "u736239518tsundbat154412412__tblm_disposition", "altvarname" => "tblm_disposition", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_disposition_type", "varname" => "u736239518tsundbat154412412__tblm_disposition_type", "altvarname" => "tblm_disposition_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_division", "varname" => "u736239518tsundbat154412412__tblm_division", "altvarname" => "tblm_division", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_domestic_type", "varname" => "u736239518tsundbat154412412__tblm_domestic_type", "altvarname" => "tblm_domestic_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_employee", "varname" => "u736239518tsundbat154412412__tblm_employee", "altvarname" => "tblm_employee", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_kabupaten", "varname" => "u736239518tsundbat154412412__tblm_kabupaten", "altvarname" => "tblm_kabupaten", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_kecamatan", "varname" => "u736239518tsundbat154412412__tblm_kecamatan", "altvarname" => "tblm_kecamatan", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_kelurahan", "varname" => "u736239518tsundbat154412412__tblm_kelurahan", "altvarname" => "tblm_kelurahan", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_language", "varname" => "u736239518tsundbat154412412__tblm_language", "altvarname" => "tblm_language", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_letter_pic", "varname" => "u736239518tsundbat154412412__tblm_letter_pic", "altvarname" => "tblm_letter_pic", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_location_office", "varname" => "u736239518tsundbat154412412__tblm_location_office", "altvarname" => "tblm_location_office", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_login", "varname" => "u736239518tsundbat154412412__tblm_login", "altvarname" => "tblm_login", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_mapping_disposition", "varname" => "u736239518tsundbat154412412__tblm_mapping_disposition", "altvarname" => "tblm_mapping_disposition", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_mapping_letter", "varname" => "u736239518tsundbat154412412__tblm_mapping_letter", "altvarname" => "tblm_mapping_letter", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_mapping_letter_pic", "varname" => "u736239518tsundbat154412412__tblm_mapping_letter_pic", "altvarname" => "tblm_mapping_letter_pic", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_meeting_room", "varname" => "u736239518tsundbat154412412__tblm_meeting_room", "altvarname" => "tblm_meeting_room", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_mypage", "varname" => "u736239518tsundbat154412412__tblm_mypage", "altvarname" => "tblm_mypage", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_overseas_type", "varname" => "u736239518tsundbat154412412__tblm_overseas_type", "altvarname" => "tblm_overseas_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_participant_type", "varname" => "u736239518tsundbat154412412__tblm_participant_type", "altvarname" => "tblm_participant_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_payment_term", "varname" => "u736239518tsundbat154412412__tblm_payment_term", "altvarname" => "tblm_payment_term", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_position_siganture", "varname" => "u736239518tsundbat154412412__tblm_position_siganture", "altvarname" => "tblm_position_siganture", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_producer", "varname" => "u736239518tsundbat154412412__tblm_producer", "altvarname" => "tblm_producer", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_provinsi", "varname" => "u736239518tsundbat154412412__tblm_provinsi", "altvarname" => "tblm_provinsi", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_status", "varname" => "u736239518tsundbat154412412__tblm_status", "altvarname" => "tblm_status", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_supplier", "varname" => "u736239518tsundbat154412412__tblm_supplier", "altvarname" => "tblm_supplier", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_template", "varname" => "u736239518tsundbat154412412__tblm_template", "altvarname" => "tblm_template", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_ticket_category", "varname" => "u736239518tsundbat154412412__tblm_ticket_category", "altvarname" => "tblm_ticket_category", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_ticket_subcategory", "varname" => "u736239518tsundbat154412412__tblm_ticket_subcategory", "altvarname" => "tblm_ticket_subcategory", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_type", "varname" => "u736239518tsundbat154412412__tblm_type", "altvarname" => "tblm_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_user_guide", "varname" => "u736239518tsundbat154412412__tblm_user_guide", "altvarname" => "tblm_user_guide", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "m_vehicle", "varname" => "u736239518tsundbat154412412__tblm_vehicle", "altvarname" => "tblm_vehicle", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_booking", "varname" => "u736239518tsundbat154412412__t_booking", "altvarname" => "t_booking", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_delivery", "varname" => "u736239518tsundbat154412412__t_delivery", "altvarname" => "t_delivery", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_delivery_address", "varname" => "u736239518tsundbat154412412__t_delivery_address", "altvarname" => "t_delivery_address", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_delivery_details", "varname" => "u736239518tsundbat154412412__t_delivery_details", "altvarname" => "t_delivery_details", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_delivery_expedition", "varname" => "u736239518tsundbat154412412__t_delivery_expedition", "altvarname" => "t_delivery_expedition", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_delivery_feedback", "varname" => "u736239518tsundbat154412412__t_delivery_feedback", "altvarname" => "t_delivery_feedback", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_delivery_internal", "varname" => "u736239518tsundbat154412412__t_delivery_internal", "altvarname" => "t_delivery_internal", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_invoice", "varname" => "u736239518tsundbat154412412__t_invoice", "altvarname" => "t_invoice", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_invoice_det", "varname" => "u736239518tsundbat154412412__t_invoice_det", "altvarname" => "t_invoice_det", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_letter", "varname" => "u736239518tsundbat154412412__t_letter", "altvarname" => "t_letter", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_letter_flow", "varname" => "u736239518tsundbat154412412__t_letter_flow", "altvarname" => "t_letter_flow", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_meeting_book", "varname" => "u736239518tsundbat154412412__t_meeting_book", "altvarname" => "t_meeting_book", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_output_client_profile", "varname" => "u736239518tsundbat154412412__t_output_client_profile", "altvarname" => "t_output_client_profile", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_purchase", "varname" => "u736239518tsundbat154412412__t_purchase", "altvarname" => "t_purchase", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_purchase_det", "varname" => "u736239518tsundbat154412412__t_purchase_det", "altvarname" => "t_purchase_det", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_register", "varname" => "u736239518tsundbat154412412__t_register", "altvarname" => "t_register", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_register_mapping", "varname" => "u736239518tsundbat154412412__t_register_mapping", "altvarname" => "t_register_mapping", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "t_ticket", "varname" => "u736239518tsundbat154412412__t_ticket", "altvarname" => "t_ticket", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "tsun_gen2__audit", "varname" => "u736239518tsundbat154412412__tsun_gen2__audit", "altvarname" => "tsun_gen2__audit", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "tsun_noti", "varname" => "u736239518tsundbat154412412__tsun_noti", "altvarname" => "tsun_noti", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "Tsun_uggroups", "varname" => "u736239518tsundbat154412412__Tsun_uggroups", "altvarname" => "Tsun_uggroups", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "Tsun_ugmembers", "varname" => "u736239518tsundbat154412412__Tsun_ugmembers", "altvarname" => "Tsun_ugmembers", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "Tsun_ugrights", "varname" => "u736239518tsundbat154412412__Tsun_ugrights", "altvarname" => "Tsun_ugrights", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "v_delivery_list", "varname" => "u736239518tsundbat154412412__v_delivery_list", "altvarname" => "v_delivery_list", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
			$dalTables[$conn->connId][] = array("name" => "view_delivery_history", "varname" => "u736239518tsundbat154412412__view_delivery_history", "altvarname" => "view_delivery_history", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		}
	}

	public static function PrepareConnectionSQL( $conn, $sql, 
		$arg1 = null,
		$arg2 = null, 
		$arg3 = null, 
		$arg4 = null, 
		$arg5 = null, 
		$arg6 = null, 
		$arg7 = null, 
		$arg8 = null, 
		$arg9 = null, 
		$arg10 = null ) {

		$prevConn = DB::CurrentConnection();
		DB::SetConnection( $conn );
		$result = DB::PrepareSQL( $sql, $arg1, $arg2, $arg3, $arg4, $arg5, $arg6, $arg7, $arg8, $arg9, $arg10 );
		DB::SetConnection( $prevConn );
		return $result;
	}

	public static function PrepareSQL( $sql )
	{
		$args = func_get_args();

		$conn = DB::CurrentConnection();

		$tokens = DB::scanTokenString($sql);

		$replacements = array();
		// build array of replacements in this format:
		//	"offset" => position in the string where replacement should be done
		//  "len" => length of original substring to cut out
		//  "insert" => string to insert in place of cut out

		foreach ($tokens["matches"] as $i => $match) {
			$offset = $tokens["offsets"][$i];
			$token = $tokens["tokens"][$i];

			$repl = array(
				"offset" => $offset,
				"len" => strlen($match)
			);
			
			$val = "";
			if (is_numeric($token) && count( $args ) > $token) {
				$val = $args[(int)$token];
			} else {
				$val = RunnerContext::getValue($token);
			}
			
			
			/**
			 * Don't ever dare to alter this code!
			 * Everything outside quotes must be converted to number to avoid SQL injection
			 */
			 $inQuotes = $conn->positionQuoted( $sql, $offset );
			 if( is_array( $val ) ) {
				$_values = array();
				foreach( $val as $v ) {
					if ( $inQuotes ) {
						$_values[] = '\''.$conn->addSlashes( $v ).'\'';
					} else {
						$_values[] = DB::prepareNumberValue( $v );
					}
				}
				$glued = implode( ",", $_values );
				$repl["insert"] = $inQuotes ? substr( $glued, 1, strlen( $glued ) - 2 ) : $glued;
			} else {
				if( $inQuotes ) {
					$repl["insert"] = $conn->addSlashes( $val );
				} else {
					$repl["insert"] = DB::prepareNumberValue( $val );
				}
			}
			
			$replacements[] = $repl;
		}

		//	do replacements
		return RunnerContext::doReplacements( $sql, $replacements );
	}

	/**
	 *	@return Array
	 */
	public static function readSQLTokens( $sql )
	{
		$arr = DB::scanTokenString( $sql );
		return $arr["tokens"];
	}

	/**
	 *	@return Array
	 */
	public static function readMasterTokens( $sql )
	{
		$masterTokens = array();

		$allTokens = DB::readSQLTokens( $sql );
		foreach ( $allTokens as $key => $token )
		{
			$dotPos = strpos(  $token, "." );
			if( $dotPos !== FALSE && strtolower( substr( $token, 0, $dotPos ) ) == "master")
			{
				$masterTokens[] = $token;
			}
		}

		return $masterTokens;
	}

	/**
	 *	Scans SQL string, finds all tokens. Returns three arrays - 'tokens', 'matches' and 'offsets'
	 *  Offsets are positions of corresponding 'matches' items in the string
	 *  Example:
	 *  insert into table values (':aaa', :old.bbb, ':{master.order date}')
	 *  tokens: ["aaa", "old.bbb", "master.order date"]
	 *  matches: [":aaa", ":old.bbb", ":{master.order date}"]
	 *  offsets: [28, 35, 46]
	 *
	 *	Exceptions for tokens without {}
	 *	1. shouldn't start with number
	*		:62aaa
	 *	2. shouldn't follow letter
	 *		x:aaa
	 *	3. shouldn't follow :
	 *		::aaa
	 *
 	 *	@return Array [ "tokens" => Array, "matches" => Array, "offsets" => Array ]
	 */
	public static function scanTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = '/(?:[^\w\:]|^)(\:([a-zA-Z_]{1}[\w\.]*))|\:\{([^\:]*?)\}|(?:[^\w\:]|^)(\:([1-9]+[0-9]*))/';

		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			if ($m["submatches"][0] != "") {
				// first variant, no {}
				$matches[] = $m["submatches"][0];
				$tokens[] = $m["submatches"][1];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][0]);
			} else if ($m["submatches"][2] != "") {
				// second variant, in {}
				$matches[] = $m["match"];
				$tokens[] = $m["submatches"][2];
				$offsets[] = $m["offset"];
			} else if ($m["submatches"][3] != "") {
				// third variant, numeric like (:1, ':2')
				$matches[] = $m["submatches"][3];
				$tokens[] = $m["submatches"][4];
				$offsets[] = $m["offset"] + strpos($m["match"], $m["submatches"][3]);
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}

	public static function scanNewTokenString($sql)
	{
		$tokens = array();
		$offsets = array();
		$matches = array();

		//	match aaa, old.bbb, master.order date from:
		//	insert into table values (':aaa', :old.bbb, ':{master.order date}')

		$pattern = "/\\\${[^\\s\{\\}]+}/";


		$result = findMatches($pattern, $sql);
		foreach ($result as $m) {
			$match = $m["match"];
			if ( $match != "" ) {
				$matches[] = $match;
				$tokens[] = substr( $match, 2, strlen( $match ) - 3 );
				$offsets[] = $m["offset"];
			}
		}

		return array("tokens" => $tokens, "matches" => $matches, "offsets" => $offsets);
	}


	public static function prepareNumberValue( $value )
	{
		$strvalue = str_replace( ",", ".", (string)$value );
		if( is_numeric($strvalue) )
			return $strvalue;
		return 0;
	}

	public static function Lookup( $sql ) {
		$result = DB::Query( $sql );
		if( !$result ) {
			return null;
		}
		$data = $result->fetchNumeric();
		if( !$data ) {
			return null;
		}
		return $data[0];
	}

	public static function DBLookup( $sql ) {
		return DB::Lookup( $sql );
	}

}

?>