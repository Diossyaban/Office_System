<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamp_tmail = array();
$tdatamp_tmail[".ShortName"] = "mp_tmail";

$tdatamp_tmail[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard1\",\"dashboard\",\"dashboard2\"]}" );
$tdatamp_tmail[".originalPagesByType"] = $tdatamp_tmail[".pagesByType"];
$tdatamp_tmail[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard1\",\"dashboard\",\"dashboard2\"]}" ) );
$tdatamp_tmail[".originalPages"] = $tdatamp_tmail[".pages"];
$tdatamp_tmail[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard1\"}" );
$tdatamp_tmail[".originalDefaultPages"] = $tdatamp_tmail[".defaultPages"];


//	field labels
$fieldLabelsmp_tmail = array();
$pageTitlesmp_tmail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmp_tmail["English"] = array();
	$fieldLabelsmp_tmail["English"]["t_delivery_view_status"] = "Status";
	$fieldLabelsmp_tmail["English"]["t_delivery_view_t_register_status"] = "T Register Status";
	$fieldLabelsmp_tmail["English"]["c_out_mail_status"] = "Status";
	$fieldLabelsmp_tmail["English"]["c_out_mail_t_delivery_id"] = "T Delivery Id";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_kodeuser"] = "Kodeuser";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_nama"] = "Nama";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_id"] = "Id";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_message"] = "Message";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_user"] = "User";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_provider"] = "Provider";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_title"] = "Title";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_url"] = "Url";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_icon"] = "Icon";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_created"] = "Created";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_expire"] = "Expire";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_type"] = "Type";
	$fieldLabelsmp_tmail["English"]["sp_notif_t_mail_group"] = "Group";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_feedback_id"] = "T Delivery Feedback Id";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_id"] = "T Delivery Id";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_feedback"] = "T Delivery Feedback";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_feedback_images"] = "T Delivery Feedback Images";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_feedback_sign"] = "T Delivery Feedback Sign";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_feedback_log"] = "T Delivery Feedback Log";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_feedback_lat"] = "T Delivery Feedback Lat";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_add_user"] = "Add User";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_add_date"] = "Add Date";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_Lat"] = "Lat";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_Lng"] = "Lng";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_t_delivery_no"] = "T Delivery No";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_usercreate"] = "Usercreate";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view_description"] = "Description";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_feedback_id"] = "T Delivery Feedback Id";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_id"] = "T Delivery Id";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_feedback"] = "T Delivery Feedback";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_feedback_images"] = "T Delivery Feedback Images";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_feedback_sign"] = "T Delivery Feedback Sign";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_feedback_log"] = "T Delivery Feedback Log";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_feedback_lat"] = "T Delivery Feedback Lat";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_add_user"] = "Courier";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_add_date"] = "Add Date";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_Lat"] = "Lat";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_Lng"] = "Lng";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_no"] = "No";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_date"] = "Date";
	$fieldLabelsmp_tmail["English"]["t_delivery_feedback_view1_t_delivery_address"] = "Address";
}

/*
//	search fields
$tdatamp_tmail[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_view", "field"=>"status" );
$tdatamp_tmail[".searchFields"]["t_delivery_view_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_view", "field"=>"t_register_status" );
$tdatamp_tmail[".searchFields"]["t_delivery_view_t_register_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"c_out_mail", "field"=>"status" );
$tdatamp_tmail[".searchFields"]["c_out_mail_status"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"c_out_mail", "field"=>"t_delivery_id" );
$tdatamp_tmail[".searchFields"]["c_out_mail_t_delivery_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"kodeuser" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_kodeuser"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"nama" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_nama"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"id" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"message" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_message"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"user" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_user"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"provider" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_provider"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"title" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_title"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"url" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_url"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"icon" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_icon"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"created" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_created"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"expire" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_expire"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"type" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_type"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"sp_notif_t_mail", "field"=>"group" );
$tdatamp_tmail[".searchFields"]["sp_notif_t_mail_group"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_feedback_id" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_feedback_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_id" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_feedback" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_feedback"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_feedback_images" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_feedback_images"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_feedback_sign" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_feedback_sign"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_feedback_log" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_feedback_log"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_feedback_lat" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_feedback_lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"add_user" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_add_user"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"add_date" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_add_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"Lat" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"Lng" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"t_delivery_no" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_t_delivery_no"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"usercreate" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_usercreate"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view", "field"=>"description" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view_description"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_feedback_id" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_feedback_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_id" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_feedback" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_feedback"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_feedback_images" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_feedback_images"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_feedback_sign" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_feedback_sign"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_feedback_log" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_feedback_log"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_feedback_lat" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_feedback_lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"add_user" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_add_user"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"add_date" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_add_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"Lat" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_Lat"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"Lng" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_Lng"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_no" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_no"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_date" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_date"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"t_delivery_feedback_view1", "field"=>"t_delivery_address" );
$tdatamp_tmail[".searchFields"]["t_delivery_feedback_view1_t_delivery_address"] = $dashField;

// all search fields
$tdatamp_tmail[".allSearchFields"] = array();
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_view_status";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_view_t_register_status";
$tdatamp_tmail[".allSearchFields"][] = "c_out_mail_status";
$tdatamp_tmail[".allSearchFields"][] = "c_out_mail_t_delivery_id";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_kodeuser";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_nama";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_id";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_message";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_user";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_provider";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_title";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_url";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_icon";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_created";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_expire";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_type";
$tdatamp_tmail[".allSearchFields"][] = "sp_notif_t_mail_group";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_feedback_id";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_id";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_feedback";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_feedback_images";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_feedback_sign";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_feedback_log";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_feedback_lat";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_add_user";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_add_date";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_Lat";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_Lng";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_t_delivery_no";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_usercreate";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view_description";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_feedback_id";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_id";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_feedback";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_feedback_images";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_feedback_sign";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_feedback_log";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_feedback_lat";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_add_user";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_add_date";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_Lat";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_Lng";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_no";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_date";
$tdatamp_tmail[".allSearchFields"][] = "t_delivery_feedback_view1_t_delivery_address";

// good like search fields
$tdatamp_tmail[".googleLikeFields"] = array();
$tdatamp_tmail[".googleLikeFields"][] = "t_delivery_view_status";
*/

/*
$tdatamp_tmail[".dashElements"] = array();

	$dbelement = array( "elementName" => "v1_snippet", "table" => "v1",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "mp_tmail_snippet3";


	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "v1_snippet1", "table" => "v1",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "mp_tmail_snippet4";


	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "v1_snippet2", "table" => "v1",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "mp_tmail_snippet5";


	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "t_delivery_view_chart", "table" => "t_delivery_view",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "t_delivery_feedback_view_map", "table" => "t_delivery_feedback_view",
		 "pageName" => "","type" => 6);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
		$dbelement["zoom"] = "auto";
	$dbelement["addressF"] = "";
	$dbelement["latF"] = "";
	$dbelement["lonF"] = "";
	$dbelement["descF"] = "";
	$dbelement["mapMarkerCount"] = 50;
	$dbelement["isMarkerIconCustom"] = 0;
			$dbelement["updateMoved"] = true;

	$dbelement["isLocationMarkerIconCustom"] = 0;
	$dbelement["showCurrentLocation"] = 0;
	

	// Advanced map options
	

	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "c_out_mail_chart", "table" => "c_out_mail",
		 "pageName" => "","type" => 1);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;


	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "v1_snippet3", "table" => "v1",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "mp_tmail_snippet9";


	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "sp_notif_t_mail_grid", "table" => "sp_notif_t_mail",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "v1_snippet2", "table" => "v1",
		 "pageName" => "","type" => 7);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	$dbelement["snippetId"] = "mp_tmail_snippet5";


	$tdatamp_tmail[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "t_delivery_feedback_view1_grid", "table" => "t_delivery_feedback_view1",
		 "pageName" => "","type" => 0);
	$dbelement["cellName"] = "";

		$dbelement["reload"] = 60;
		$dbelement["width"] = 800;
		$dbelement["height"] = 600;
	

	$tdatamp_tmail[".dashElements"][] = $dbelement;
*/
$tdatamp_tmail[".shortTableName"] = "mp_tmail";
$tdatamp_tmail[".entityType"] = 4;










include_once(getabspath("include/mp_tmail_events.php"));
$tdatamp_tmail[".hasEvents"] = true;


$tdatamp_tmail[".tableType"] = "dashboard";


										
$tdatamp_tmail[".addPageEvents"] = false;

$tdatamp_tmail[".isUseAjaxSuggest"] = true;

$tables_data["mp_tmail"]=&$tdatamp_tmail;
$field_labels["mp_tmail"] = &$fieldLabelsmp_tmail;
$page_titles["mp_tmail"] = &$pageTitlesmp_tmail;

?>