<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT"); 

//	CSRF protection
if( !isPostRequest() )
	return;

if(!isLogged())
{ 
	return;
}
if( !Security::isAdmin() )
{
	return;
}
$nonAdminTablesArr = array();
$nonAdminTablesArr[] = "v1";
$nonAdminTablesArr[] = "m_client_profile";
$nonAdminTablesArr[] = "m_producer";
$nonAdminTablesArr[] = "m_login";
$nonAdminTablesArr[] = "m_bank";
$nonAdminTablesArr[] = "m_asuransi";
$nonAdminTablesArr[] = "m_kabupaten";
$nonAdminTablesArr[] = "t_letter";
$nonAdminTablesArr[] = "t_letter_flow";
$nonAdminTablesArr[] = "m_type";
$nonAdminTablesArr[] = "m_mapping_letter";
$nonAdminTablesArr[] = "Category";
$nonAdminTablesArr[] = "m_category";
$nonAdminTablesArr[] = "Type";
$nonAdminTablesArr[] = "template";
$nonAdminTablesArr[] = "m_template";
$nonAdminTablesArr[] = "m_language";
$nonAdminTablesArr[] = "m_position_siganture";
$nonAdminTablesArr[] = "m_mapping_letter_pic";
$nonAdminTablesArr[] = "Language";
$nonAdminTablesArr[] = "Siganture";
$nonAdminTablesArr[] = "m_letter_pic";
$nonAdminTablesArr[] = "m_status";
$nonAdminTablesArr[] = "m_announcement";
$nonAdminTablesArr[] = "m_announcement_view";
$nonAdminTablesArr[] = "home";
$nonAdminTablesArr[] = "t_delivery";
$nonAdminTablesArr[] = "t_delivery_details";
$nonAdminTablesArr[] = "m_location_office";
$nonAdminTablesArr[] = "t_delivery_address";
$nonAdminTablesArr[] = "m_provinsi";
$nonAdminTablesArr[] = "v_m_provinsi";
$nonAdminTablesArr[] = "v_m_kecamatan";
$nonAdminTablesArr[] = "v_m_kabupaten";
$nonAdminTablesArr[] = "m_kecamatan";
$nonAdminTablesArr[] = "m_kelurahan";
$nonAdminTablesArr[] = "m_disposition_type";
$nonAdminTablesArr[] = "m_disposition_inmail";
$nonAdminTablesArr[] = "mp_tmail";
$nonAdminTablesArr[] = "View";
$nonAdminTablesArr[] = "m_mapping_disposition";
$nonAdminTablesArr[] = "m_division";
$nonAdminTablesArr[] = "t_delivery_view";
$nonAdminTablesArr[] = "t_delivery_type_user";
$nonAdminTablesArr[] = "v_status";
$nonAdminTablesArr[] = "mp_marketing";
$nonAdminTablesArr[] = "m_domestic_type";
$nonAdminTablesArr[] = "m_overseas_type";
$nonAdminTablesArr[] = "m_countries";
$nonAdminTablesArr[] = "v_countries";
$nonAdminTablesArr[] = "v_states";
$nonAdminTablesArr[] = "partnership_view";
$nonAdminTablesArr[] = "sp_disposition_flow";
$nonAdminTablesArr[] = "t_delivery_x";
$nonAdminTablesArr[] = "t_delivery_expedition";
$nonAdminTablesArr[] = "t_delivery_internal";
$nonAdminTablesArr[] = "members";
$nonAdminTablesArr[] = "t_output_client_profile";
$nonAdminTablesArr[] = "outmail_maps";
$nonAdminTablesArr[] = "m_disposition_profile";
$nonAdminTablesArr[] = "t_register";
$nonAdminTablesArr[] = "t_in_mail";
$nonAdminTablesArr[] = "t_delivery_feedback";
$nonAdminTablesArr[] = "mypage_tmail";
$nonAdminTablesArr[] = "t_register_view";
$nonAdminTablesArr[] = "tsun_noti";
$nonAdminTablesArr[] = "m_disposition_register";
$nonAdminTablesArr[] = "v_status_register";
$nonAdminTablesArr[] = "c_out_mail";
$nonAdminTablesArr[] = "sp_notif_t_mail";
$nonAdminTablesArr[] = "t_delivery_feedback_view";
$nonAdminTablesArr[] = "t_delivery_feedback_view1";
$nonAdminTablesArr[] = "m_courier";
$nonAdminTablesArr[] = "t_delivery_internal_view";
$nonAdminTablesArr[] = "t_delivery_expedition_view";
$nonAdminTablesArr[] = "v_location_registration";
$nonAdminTablesArr[] = "t_register_mapping";
$nonAdminTablesArr[] = "report_outmail_list";
$nonAdminTablesArr[] = "get_images";
$nonAdminTablesArr[] = "t_delivery_feedback_view2";
$nonAdminTablesArr[] = "m_disposition_inmail_x";
$nonAdminTablesArr[] = "mp_ga";
$nonAdminTablesArr[] = "t_invoice";
$nonAdminTablesArr[] = "t_invoice_det";
$nonAdminTablesArr[] = "m_customer";
$nonAdminTablesArr[] = "m_currency";
$nonAdminTablesArr[] = "m_supplier";
$nonAdminTablesArr[] = "t_purchase";
$nonAdminTablesArr[] = "t_purchase_det";
$nonAdminTablesArr[] = "m_payment_term";
$nonAdminTablesArr[] = "mp_intech";
$nonAdminTablesArr[] = "mp_helpdesk";
$nonAdminTablesArr[] = "t_ticket";
$nonAdminTablesArr[] = "m_ticket_category";
$nonAdminTablesArr[] = "m_ticket_subcategory";
$nonAdminTablesArr[] = "m_user_guide";
$nonAdminTablesArr[] = "sp_get_disposition_status";
$nonAdminTablesArr[] = "t_delivery_label";
$nonAdminTablesArr[] = "m_meeting_room";
$nonAdminTablesArr[] = "t_booking";
$nonAdminTablesArr[] = "t_meeting_book";
$nonAdminTablesArr[] = "report_delivery_history_view";
$nonAdminTablesArr[] = "m_disposition";
$nonAdminTablesArr[] = "t_meeting_book_inqury";
$nonAdminTablesArr[] = "t_meeting_book_approval";
$nonAdminTablesArr[] = "m_participant_type";
$nonAdminTablesArr[] = "t_booking_inquiry";
$nonAdminTablesArr[] = "t_booking_approval";
$nonAdminTablesArr[] = "m_vehicle";
$nonAdminTablesArr[] = "disposisiBookingView";
$nonAdminTablesArr[] = "m_employee";

$ug_connection = $cman->getForUserGroups();

$cbxNames = array('add' => array('mask' => 'A', 'rightName' => 'add')
	, 'edt' => array('mask' => 'E', 'rightName' => 'edit')
	, 'del' => array('mask' => 'D', 'rightName' => 'delete')
	, 'lst' => array('mask' => 'S', 'rightName' => 'list')
	, 'exp' => array('mask' => 'P', 'rightName' => 'export')
	, 'imp' => array('mask' => 'I', 'rightName' => 'import')
	, 'adm' => array('mask' => 'M'));

$wGroupTableName = $ug_connection->addTableWrappers( "Tsun_uggroups" );
	
switch(postvalue("a"))
{
	case "add":
		$sql = "insert into ". $wGroupTableName ." (". $ug_connection->addFieldWrappers( "Label" ) .")"
			." values (". $ug_connection->prepareString( postvalue("name") ). ")";		
		$ug_connection->exec( $sql );

		$sql = "select max(". $ug_connection->addFieldWrappers( "GroupID") .") from ". $wGroupTableName;
		$data = $ug_connection->query( $sql )->fetchNumeric();
		
		echo printJSON( array('success' => true, 'id' => $data[0]) );
		break;
		
	case "del":
		$sql = "delete from ". $wGroupTableName ." where ". $ug_connection->addFieldWrappers("GroupID") ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		$sql = "delete from ". $ug_connection->addTableWrappers( "Tsun_ugrights" ) 
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );

		// delete records from ugmembers table	
		$dataSource = Security::getUgMembersDatasource();
		$dc = new DsCommand();
		$dc->filter = DataCondition::FieldEquals( "GroupID", postvalue_number("id") ); 
		$dataSource->deleteSingle( $dc, false );
		
		echo printJSON( array('success' => true) );
		break;
		
	case "rename":
		$sql = "update ". $wGroupTableName  
			." set ". $ug_connection->addFieldWrappers( "Label" ) ."=". $ug_connection->prepareString( postvalue("name") )
			." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=".(postvalue_number("id"));
		$ug_connection->exec( $sql );
		
		echo printJSON( array('success' => true) );
		break;
	
	// @deprecated 
	// see ug_rights
	case 'saveRights':
		$error = '';
		if( postvalue('state') )
		{	
			$allRights = array();
			$sql = "select ". $ug_connection->addFieldWrappers( "GroupID" ) 
				.", ". $ug_connection->addFieldWrappers( "TableName" ) 
				.", ". $ug_connection->addFieldWrappers( "AccessMask" ) ." from ". $wGroupTableName;
			
			$qResult = $ug_connection->query( $sql );
			// don't use fetchAssoc! because of ORACLE and PostgreSQL
			while( $rightsRow = $qResult->fetchNumeric() )
			{
				$allRights[] = $rightsRow;
			}
			
			$wRightsTableName = $ug_connection->addTableWrappers( "Tsun_ugrights" );
			
			$delGroupId = 0;
			$state = my_json_decode( postvalue('state') );
			// delete all extra permissions from db
			foreach($allRights as $i => $rightValue)
			{
				$groupIDInt = (int) $rightValue[0];
				
				if($groupIDInt == $delGroupId)
					continue;
					
				//delete all extra permissions for group
				if( !array_key_exists($groupIDInt, $state) )
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt;
					$ug_connection->exec( $sql );
				}
				//delete all extra permissions for table in group
				else if(!array_key_exists(GetTableId($data[1]), $state[$groupIDInt]))
				{
					$sql = "delete from ". $wRightsTableName 
						." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupIDInt 
						." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=".$ug_connection->prepareString( html_special_decode($data[1]) );				
					$ug_connection->exec( $sql );
				}
			}
			
			$realTables = GetRealValues();
			foreach ($state as $groupId => $groupRights)
			{
				foreach ($groupRights as $table => $mask)
				{
					if( !array_key_exists($table, $realTables) )
						continue;
					
					$ins = true;
					foreach($allRights as $i => $rightValue)
					{	
						if($rightValue[0] == $groupId && $rightValue[1] == $realTables[$table])	
						{
							$ins = false;
							if($data[2]!= $mask)
							{
								$sql ="update". $wRightsTableName 
									." set ". $ug_connection->addFieldWrappers( "AccessMask" ) ."=". $ug_connection->prepareString( $mask )
									." where ". $ug_connection->addFieldWrappers( "GroupID" ) ."=". $groupId 
									." and ". $ug_connection->addFieldWrappers( "TableName" ) ."=". $ug_connection->prepareString( html_special_decode($realTables[$table]) );
								$ug_connection->exec( $sql );
							}
						}
					}
					if($ins)
					{
						$sql = "insert into ". $wRightsTableName
							." (". $ug_connection->addFieldWrappers( "TableName" ) 
							.", ". $ug_connection->addFieldWrappers( "GroupID" ) 
							.", ". $ug_connection->addFieldWrappers( "AccessMask" ) .") " 
							."values (". $ug_connection->prepareString(html_special_decode($realTables[$table])) .", ". $groupId .", ". $ug_connection->prepareString($mask)  .")";
						$ug_connection->exec( $sql );
					}
					
					$error = $ug_connection->lastError();
				}
			}
		}
		
		getJSONResult($error);
		break;
}

function GetTableId($name)
{
	$tbls = GetRealValues();
	for($i = 0;$i < count($tbls); $i++)
	{
		if($tbls[$i] == $name)
			return $i;
	}
	return -1;
}

/**
 * GetRealValues
 * Form array with real users or tables names
 * @return {array} array of reaf names
 */
function GetRealValues()
{
	$result = array();
	if(postvalue('realValues'))
		$realValues = my_json_decode(postvalue('realValues'));
		foreach ($realValues as $key =>$value)
			$result[$key] = $value;
	return $result;
}

/**
 * getJSONResult
 * Form result as a JSON object according of errors
 * @param {string} list of errors
 */
function getJSONResult($error)
{
	$result['success'] = $error == '';
	$result['error'] = $error;	
	echo printJSON($result);
}