<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "u736239518tsundbat154412412" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "u736239518tsundbat154412412";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "u736239518tsundbat154412412" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "u736239518tsundbat154412412" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "u736239518tsundbat154412412";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "u736239518tsundbat154412412";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "u736239518tsundbat154412412";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["m_client_profile"] = "u736239518tsundbat154412412";
		$connectionsIds["m_producer"] = "u736239518tsundbat154412412";
		$connectionsIds["m_login"] = "u736239518tsundbat154412412";
		$connectionsIds["m_bank"] = "u736239518tsundbat154412412";
		$connectionsIds["m_asuransi"] = "u736239518tsundbat154412412";
		$connectionsIds["m_kabupaten"] = "u736239518tsundbat154412412";
		$connectionsIds["t_letter"] = "u736239518tsundbat154412412";
		$connectionsIds["t_letter_flow"] = "u736239518tsundbat154412412";
		$connectionsIds["m_type"] = "u736239518tsundbat154412412";
		$connectionsIds["m_mapping_letter"] = "u736239518tsundbat154412412";
		$connectionsIds["Category"] = "u736239518tsundbat154412412";
		$connectionsIds["m_category"] = "u736239518tsundbat154412412";
		$connectionsIds["Type"] = "u736239518tsundbat154412412";
		$connectionsIds["template"] = "u736239518tsundbat154412412";
		$connectionsIds["m_template"] = "u736239518tsundbat154412412";
		$connectionsIds["m_language"] = "u736239518tsundbat154412412";
		$connectionsIds["m_position_siganture"] = "u736239518tsundbat154412412";
		$connectionsIds["m_mapping_letter_pic"] = "u736239518tsundbat154412412";
		$connectionsIds["Language"] = "u736239518tsundbat154412412";
		$connectionsIds["Siganture"] = "u736239518tsundbat154412412";
		$connectionsIds["m_letter_pic"] = "u736239518tsundbat154412412";
		$connectionsIds["m_status"] = "u736239518tsundbat154412412";
		$connectionsIds["m_announcement"] = "u736239518tsundbat154412412";
		$connectionsIds["m_announcement_view"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_details"] = "u736239518tsundbat154412412";
		$connectionsIds["m_location_office"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_address"] = "u736239518tsundbat154412412";
		$connectionsIds["m_provinsi"] = "u736239518tsundbat154412412";
		$connectionsIds["v_m_provinsi"] = "u736239518tsundbat154412412";
		$connectionsIds["v_m_kecamatan"] = "u736239518tsundbat154412412";
		$connectionsIds["v_m_kabupaten"] = "u736239518tsundbat154412412";
		$connectionsIds["m_kecamatan"] = "u736239518tsundbat154412412";
		$connectionsIds["m_kelurahan"] = "u736239518tsundbat154412412";
		$connectionsIds["m_disposition_type"] = "u736239518tsundbat154412412";
		$connectionsIds["m_disposition_inmail"] = "u736239518tsundbat154412412";
		$connectionsIds["admin_rights"] = "u736239518tsundbat154412412";
		$connectionsIds["admin_members"] = "u736239518tsundbat154412412";
		$connectionsIds["admin_users"] = "u736239518tsundbat154412412";
		$connectionsIds["View"] = "rest";
		$connectionsIds["m_mapping_disposition"] = "u736239518tsundbat154412412";
		$connectionsIds["m_division"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_view"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_type_user"] = "u736239518tsundbat154412412";
		$connectionsIds["v_status"] = "u736239518tsundbat154412412";
		$connectionsIds["m_domestic_type"] = "u736239518tsundbat154412412";
		$connectionsIds["m_overseas_type"] = "u736239518tsundbat154412412";
		$connectionsIds["m_countries"] = "u736239518tsundbat154412412";
		$connectionsIds["v_countries"] = "u736239518tsundbat154412412";
		$connectionsIds["v_states"] = "u736239518tsundbat154412412";
		$connectionsIds["partnership_view"] = "u736239518tsundbat154412412";
		$connectionsIds["sp_disposition_flow"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_x"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_expedition"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_internal"] = "u736239518tsundbat154412412";
		$connectionsIds["members"] = "u736239518tsundbat154412412";
		$connectionsIds["t_output_client_profile"] = "u736239518tsundbat154412412";
		$connectionsIds["outmail_maps"] = "u736239518tsundbat154412412";
		$connectionsIds["m_disposition_profile"] = "u736239518tsundbat154412412";
		$connectionsIds["t_register"] = "u736239518tsundbat154412412";
		$connectionsIds["t_in_mail"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_feedback"] = "u736239518tsundbat154412412";
		$connectionsIds["mypage_tmail"] = "u736239518tsundbat154412412";
		$connectionsIds["t_register_view"] = "u736239518tsundbat154412412";
		$connectionsIds["tsun_noti"] = "u736239518tsundbat154412412";
		$connectionsIds["m_disposition_register"] = "u736239518tsundbat154412412";
		$connectionsIds["v_status_register"] = "u736239518tsundbat154412412";
		$connectionsIds["c_out_mail"] = "u736239518tsundbat154412412";
		$connectionsIds["sp_notif_t_mail"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_feedback_view"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_feedback_view1"] = "u736239518tsundbat154412412";
		$connectionsIds["m_courier"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_internal_view"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_expedition_view"] = "u736239518tsundbat154412412";
		$connectionsIds["v_location_registration"] = "u736239518tsundbat154412412";
		$connectionsIds["t_register_mapping"] = "u736239518tsundbat154412412";
		$connectionsIds["report_outmail_list"] = "u736239518tsundbat154412412";
		$connectionsIds["get_images"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_feedback_view2"] = "u736239518tsundbat154412412";
		$connectionsIds["m_disposition_inmail_x"] = "u736239518tsundbat154412412";
		$connectionsIds["t_invoice"] = "u736239518tsundbat154412412";
		$connectionsIds["t_invoice_det"] = "u736239518tsundbat154412412";
		$connectionsIds["m_customer"] = "u736239518tsundbat154412412";
		$connectionsIds["m_currency"] = "u736239518tsundbat154412412";
		$connectionsIds["m_supplier"] = "u736239518tsundbat154412412";
		$connectionsIds["t_purchase"] = "u736239518tsundbat154412412";
		$connectionsIds["t_purchase_det"] = "u736239518tsundbat154412412";
		$connectionsIds["m_payment_term"] = "u736239518tsundbat154412412";
		$connectionsIds["t_ticket"] = "u736239518tsundbat154412412";
		$connectionsIds["m_ticket_category"] = "u736239518tsundbat154412412";
		$connectionsIds["m_ticket_subcategory"] = "u736239518tsundbat154412412";
		$connectionsIds["m_user_guide"] = "u736239518tsundbat154412412";
		$connectionsIds["sp_get_disposition_status"] = "u736239518tsundbat154412412";
		$connectionsIds["t_delivery_label"] = "u736239518tsundbat154412412";
		$connectionsIds["m_meeting_room"] = "u736239518tsundbat154412412";
		$connectionsIds["t_booking"] = "u736239518tsundbat154412412";
		$connectionsIds["t_meeting_book"] = "u736239518tsundbat154412412";
		$connectionsIds["report_delivery_history_view"] = "u736239518tsundbat154412412";
		$connectionsIds["m_disposition"] = "u736239518tsundbat154412412";
		$connectionsIds["t_meeting_book_inqury"] = "u736239518tsundbat154412412";
		$connectionsIds["t_meeting_book_approval"] = "u736239518tsundbat154412412";
		$connectionsIds["m_participant_type"] = "u736239518tsundbat154412412";
		$connectionsIds["t_booking_inquiry"] = "u736239518tsundbat154412412";
		$connectionsIds["t_booking_approval"] = "u736239518tsundbat154412412";
		$connectionsIds["m_vehicle"] = "u736239518tsundbat154412412";
		$connectionsIds["disposisiBookingView"] = "u736239518tsundbat154412412";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>