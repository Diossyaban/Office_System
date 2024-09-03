<?php
$tdatareport_outmail_list = array();
$tdatareport_outmail_list[".searchableFields"] = array();
$tdatareport_outmail_list[".ShortName"] = "report_outmail_list";
$tdatareport_outmail_list[".OwnerID"] = "";
$tdatareport_outmail_list[".OriginalTable"] = "t_delivery";


$tdatareport_outmail_list[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareport_outmail_list[".originalPagesByType"] = $tdatareport_outmail_list[".pagesByType"];
$tdatareport_outmail_list[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareport_outmail_list[".originalPages"] = $tdatareport_outmail_list[".pages"];
$tdatareport_outmail_list[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareport_outmail_list[".originalDefaultPages"] = $tdatareport_outmail_list[".defaultPages"];

//	field labels
$fieldLabelsreport_outmail_list = array();
$fieldToolTipsreport_outmail_list = array();
$pageTitlesreport_outmail_list = array();
$placeHoldersreport_outmail_list = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreport_outmail_list["English"] = array();
	$fieldToolTipsreport_outmail_list["English"] = array();
	$placeHoldersreport_outmail_list["English"] = array();
	$pageTitlesreport_outmail_list["English"] = array();
	$fieldLabelsreport_outmail_list["English"]["t_delivery_no"] = "No";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_no"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_no"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_date"] = "Date";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_date"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_date"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_type"] = "Type";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_type"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_type"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_id"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_id"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_token"] = "T Delivery Token";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_token"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_token"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_location_id"] = "Origin";
	$fieldToolTipsreport_outmail_list["English"]["t_location_id"] = "";
	$placeHoldersreport_outmail_list["English"]["t_location_id"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_select_table_text"] = "Destinations Method";
	$fieldToolTipsreport_outmail_list["English"]["t_select_table_text"] = "";
	$placeHoldersreport_outmail_list["English"]["t_select_table_text"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_to_table"] = "To";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_to_table"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_to_table"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_to_text"] = "To (free text)";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_to_text"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_to_text"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_address"] = "Address";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_address"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_address"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_desc"] = "Description";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_desc"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_desc"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_status"] = "Status";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_status"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_status"] = "";
	$fieldLabelsreport_outmail_list["English"]["add_user"] = "Add User";
	$fieldToolTipsreport_outmail_list["English"]["add_user"] = "";
	$placeHoldersreport_outmail_list["English"]["add_user"] = "";
	$fieldLabelsreport_outmail_list["English"]["add_date"] = "Add Date";
	$fieldToolTipsreport_outmail_list["English"]["add_date"] = "";
	$placeHoldersreport_outmail_list["English"]["add_date"] = "";
	$fieldLabelsreport_outmail_list["English"]["edit_user"] = "Edit User";
	$fieldToolTipsreport_outmail_list["English"]["edit_user"] = "";
	$placeHoldersreport_outmail_list["English"]["edit_user"] = "";
	$fieldLabelsreport_outmail_list["English"]["edit_date"] = "Edit Date";
	$fieldToolTipsreport_outmail_list["English"]["edit_date"] = "";
	$placeHoldersreport_outmail_list["English"]["edit_date"] = "";
	$fieldLabelsreport_outmail_list["English"]["process_user"] = "Process User";
	$fieldToolTipsreport_outmail_list["English"]["process_user"] = "";
	$placeHoldersreport_outmail_list["English"]["process_user"] = "";
	$fieldLabelsreport_outmail_list["English"]["process_date"] = "Process Date";
	$fieldToolTipsreport_outmail_list["English"]["process_date"] = "";
	$placeHoldersreport_outmail_list["English"]["process_date"] = "";
	$fieldLabelsreport_outmail_list["English"]["kepada"] = "To";
	$fieldToolTipsreport_outmail_list["English"]["kepada"] = "";
	$placeHoldersreport_outmail_list["English"]["kepada"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_category_code"] = "Category Code";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_category_code"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_category_code"] = "";
	$fieldLabelsreport_outmail_list["English"]["last_user"] = "Last User";
	$fieldToolTipsreport_outmail_list["English"]["last_user"] = "";
	$placeHoldersreport_outmail_list["English"]["last_user"] = "";
	$fieldLabelsreport_outmail_list["English"]["last_date"] = "Last Date";
	$fieldToolTipsreport_outmail_list["English"]["last_date"] = "";
	$placeHoldersreport_outmail_list["English"]["last_date"] = "";
	$fieldLabelsreport_outmail_list["English"]["t_delivery_location_address"] = "Address";
	$fieldToolTipsreport_outmail_list["English"]["t_delivery_location_address"] = "";
	$placeHoldersreport_outmail_list["English"]["t_delivery_location_address"] = "";
	$fieldLabelsreport_outmail_list["English"]["status"] = "Status";
	$fieldToolTipsreport_outmail_list["English"]["status"] = "";
	$placeHoldersreport_outmail_list["English"]["status"] = "";
	$fieldLabelsreport_outmail_list["English"]["fullname"] = "Add User";
	$fieldToolTipsreport_outmail_list["English"]["fullname"] = "";
	$placeHoldersreport_outmail_list["English"]["fullname"] = "";
	$fieldLabelsreport_outmail_list["English"]["m_location_name"] = "Location";
	$fieldToolTipsreport_outmail_list["English"]["m_location_name"] = "";
	$placeHoldersreport_outmail_list["English"]["m_location_name"] = "";
	if (count($fieldToolTipsreport_outmail_list["English"]))
		$tdatareport_outmail_list[".isUseToolTips"] = true;
}


	$tdatareport_outmail_list[".NCSearch"] = true;



$tdatareport_outmail_list[".shortTableName"] = "report_outmail_list";
$tdatareport_outmail_list[".nSecOptions"] = 0;

$tdatareport_outmail_list[".mainTableOwnerID"] = "";
$tdatareport_outmail_list[".entityType"] = 1;
$tdatareport_outmail_list[".connId"] = "u736239518tsundbat154412412";


$tdatareport_outmail_list[".strOriginalTableName"] = "t_delivery";

	



$tdatareport_outmail_list[".showAddInPopup"] = false;

$tdatareport_outmail_list[".showEditInPopup"] = false;

$tdatareport_outmail_list[".showViewInPopup"] = false;

$tdatareport_outmail_list[".listAjax"] = false;
//	temporary
//$tdatareport_outmail_list[".listAjax"] = false;

	$tdatareport_outmail_list[".audit"] = false;

	$tdatareport_outmail_list[".locking"] = false;


$pages = $tdatareport_outmail_list[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareport_outmail_list[".edit"] = true;
	$tdatareport_outmail_list[".afterEditAction"] = 1;
	$tdatareport_outmail_list[".closePopupAfterEdit"] = 1;
	$tdatareport_outmail_list[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareport_outmail_list[".add"] = true;
$tdatareport_outmail_list[".afterAddAction"] = 1;
$tdatareport_outmail_list[".closePopupAfterAdd"] = 1;
$tdatareport_outmail_list[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareport_outmail_list[".list"] = true;
}



$tdatareport_outmail_list[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatareport_outmail_list[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareport_outmail_list[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareport_outmail_list[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareport_outmail_list[".printFriendly"] = true;
}



$tdatareport_outmail_list[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareport_outmail_list[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareport_outmail_list[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareport_outmail_list[".isUseAjaxSuggest"] = true;



																																																			

$tdatareport_outmail_list[".ajaxCodeSnippetAdded"] = false;

$tdatareport_outmail_list[".buttonsAdded"] = false;

$tdatareport_outmail_list[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_outmail_list[".isUseTimeForSearch"] = false;


$tdatareport_outmail_list[".badgeColor"] = "6B8E23";


$tdatareport_outmail_list[".allSearchFields"] = array();
$tdatareport_outmail_list[".filterFields"] = array();
$tdatareport_outmail_list[".requiredSearchFields"] = array();

$tdatareport_outmail_list[".googleLikeFields"] = array();
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_id";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_token";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_no";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_date";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_type";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_location_id";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_select_table_text";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_to_table";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_to_text";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_address";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_desc";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_status";
$tdatareport_outmail_list[".googleLikeFields"][] = "add_user";
$tdatareport_outmail_list[".googleLikeFields"][] = "add_date";
$tdatareport_outmail_list[".googleLikeFields"][] = "edit_user";
$tdatareport_outmail_list[".googleLikeFields"][] = "edit_date";
$tdatareport_outmail_list[".googleLikeFields"][] = "process_user";
$tdatareport_outmail_list[".googleLikeFields"][] = "process_date";
$tdatareport_outmail_list[".googleLikeFields"][] = "kepada";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_category_code";
$tdatareport_outmail_list[".googleLikeFields"][] = "last_user";
$tdatareport_outmail_list[".googleLikeFields"][] = "last_date";
$tdatareport_outmail_list[".googleLikeFields"][] = "t_delivery_location_address";
$tdatareport_outmail_list[".googleLikeFields"][] = "status";
$tdatareport_outmail_list[".googleLikeFields"][] = "fullname";
$tdatareport_outmail_list[".googleLikeFields"][] = "m_location_name";



$tdatareport_outmail_list[".tableType"] = "list";

$tdatareport_outmail_list[".printerPageOrientation"] = 0;
$tdatareport_outmail_list[".nPrinterPageScale"] = 100;

$tdatareport_outmail_list[".nPrinterSplitRecords"] = 40;

$tdatareport_outmail_list[".geocodingEnabled"] = false;




$tdatareport_outmail_list[".isDisplayLoading"] = true;



$tdatareport_outmail_list[".noRecordsFirstPage"] = true;



$tdatareport_outmail_list[".pageSize"] = 20;

$tdatareport_outmail_list[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareport_outmail_list[".strOrderBy"] = $tstrOrderBy;

$tdatareport_outmail_list[".orderindexes"] = array();


$tdatareport_outmail_list[".sqlHead"] = "SELECT t_delivery.t_delivery_id,  t_delivery.t_delivery_token,  t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  t_delivery.t_delivery_type,  t_delivery.t_location_id,  t_delivery.t_select_table_text,  t_delivery.t_delivery_to_table,  t_delivery.t_delivery_to_text,  t_delivery.t_delivery_address,  t_delivery.t_delivery_desc,  t_delivery.t_delivery_status,  t_delivery.add_user,  t_delivery.add_date,  t_delivery.edit_user,  t_delivery.edit_date,  t_delivery.process_user,  t_delivery.process_date,  CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END AS kepada,  t_delivery.t_delivery_category_code,  t_delivery.last_user,  t_delivery.last_date,  t_delivery.t_delivery_location_address,  m_status.status,  m_login.fullname,  m_location_office.m_location_name";
$tdatareport_outmail_list[".sqlFrom"] = "FROM t_delivery  INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id  INNER JOIN m_login ON t_delivery.add_user = m_login.username  INNER JOIN m_location_office ON t_delivery.t_location_id = m_location_office.id";
$tdatareport_outmail_list[".sqlWhereExpr"] = "";
$tdatareport_outmail_list[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_outmail_list[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_outmail_list[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_outmail_list[".highlightSearchResults"] = true;

$tableKeysreport_outmail_list = array();
$tdatareport_outmail_list[".Keys"] = $tableKeysreport_outmail_list;


$tdatareport_outmail_list[".hideMobileList"] = array();




//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_id";

		$fdata["sourceSingle"] = "t_delivery_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_id"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_id";
//	t_delivery_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_token";
	$fdata["GoodName"] = "t_delivery_token";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_token";

		$fdata["sourceSingle"] = "t_delivery_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_token";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_token"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_token";
//	t_delivery_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_no";
	$fdata["GoodName"] = "t_delivery_no";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_no";

		$fdata["sourceSingle"] = "t_delivery_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_no";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_no"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_no";
//	t_delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_date";
	$fdata["GoodName"] = "t_delivery_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_delivery_date";

		$fdata["sourceSingle"] = "t_delivery_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Between";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Between";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_date"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_date";
//	t_delivery_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_delivery_type";
	$fdata["GoodName"] = "t_delivery_type";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_type";

		$fdata["sourceSingle"] = "t_delivery_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_type";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_type"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_type";
//	t_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_location_id";
	$fdata["GoodName"] = "t_location_id";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_location_id";

		$fdata["sourceSingle"] = "t_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_location_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_location_id"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_location_id";
//	t_select_table_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_select_table_text";
	$fdata["GoodName"] = "t_select_table_text";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_select_table_text");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_select_table_text";

		$fdata["sourceSingle"] = "t_select_table_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_select_table_text";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_select_table_text"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_select_table_text";
//	t_delivery_to_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_delivery_to_table";
	$fdata["GoodName"] = "t_delivery_to_table";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_to_table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_to_table";

		$fdata["sourceSingle"] = "t_delivery_to_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_to_table";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_to_table"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_to_table";
//	t_delivery_to_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_delivery_to_text";
	$fdata["GoodName"] = "t_delivery_to_text";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_to_text");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_to_text";

		$fdata["sourceSingle"] = "t_delivery_to_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_to_text";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_to_text"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_to_text";
//	t_delivery_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_delivery_address";
	$fdata["GoodName"] = "t_delivery_address";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_address";

		$fdata["sourceSingle"] = "t_delivery_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_address";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=200";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_address"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_address";
//	t_delivery_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_delivery_desc";
	$fdata["GoodName"] = "t_delivery_desc";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_desc";

		$fdata["sourceSingle"] = "t_delivery_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_desc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_desc"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_desc";
//	t_delivery_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_delivery_status";
	$fdata["GoodName"] = "t_delivery_status";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_status";

		$fdata["sourceSingle"] = "t_delivery_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_status"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

		$fdata["sourceSingle"] = "add_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.add_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["add_user"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.add_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["add_date"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","edit_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edit_user";

		$fdata["sourceSingle"] = "edit_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.edit_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["edit_user"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","edit_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.edit_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["edit_date"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "edit_date";
//	process_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "process_user";
	$fdata["GoodName"] = "process_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","process_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "process_user";

		$fdata["sourceSingle"] = "process_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.process_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["process_user"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "process_user";
//	process_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "process_date";
	$fdata["GoodName"] = "process_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","process_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "process_date";

		$fdata["sourceSingle"] = "process_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.process_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["process_date"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "process_date";
//	kepada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "kepada";
	$fdata["GoodName"] = "kepada";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","kepada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "kepada";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["kepada"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "kepada";
//	t_delivery_category_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "t_delivery_category_code";
	$fdata["GoodName"] = "t_delivery_category_code";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_category_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_category_code";

		$fdata["sourceSingle"] = "t_delivery_category_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_category_code";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_category_code"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_category_code";
//	last_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "last_user";
	$fdata["GoodName"] = "last_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","last_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_user";

		$fdata["sourceSingle"] = "last_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.last_user";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["last_user"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "last_user";
//	last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "last_date";
	$fdata["GoodName"] = "last_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","last_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_date";

		$fdata["sourceSingle"] = "last_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.last_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["last_date"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "last_date";
//	t_delivery_location_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "t_delivery_location_address";
	$fdata["GoodName"] = "t_delivery_location_address";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","t_delivery_location_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_location_address";

		$fdata["sourceSingle"] = "t_delivery_location_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_location_address";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["t_delivery_location_address"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "t_delivery_location_address";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_status.status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["status"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "status";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_login.fullname";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["fullname"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "fullname";
//	m_location_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "m_location_name";
	$fdata["GoodName"] = "m_location_name";
	$fdata["ownerTable"] = "m_location_office";
	$fdata["Label"] = GetFieldLabel("report_outmail_list","m_location_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_location_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_location_office.m_location_name";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatareport_outmail_list["m_location_name"] = $fdata;
		$tdatareport_outmail_list[".searchableFields"][] = "m_location_name";


$tables_data["report_outmail_list"]=&$tdatareport_outmail_list;
$field_labels["report_outmail_list"] = &$fieldLabelsreport_outmail_list;
$fieldToolTips["report_outmail_list"] = &$fieldToolTipsreport_outmail_list;
$placeHolders["report_outmail_list"] = &$placeHoldersreport_outmail_list;
$page_titles["report_outmail_list"] = &$pageTitlesreport_outmail_list;


changeTextControlsToDate( "report_outmail_list" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["report_outmail_list"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["report_outmail_list"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_report_outmail_list()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery.t_delivery_id,  t_delivery.t_delivery_token,  t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  t_delivery.t_delivery_type,  t_delivery.t_location_id,  t_delivery.t_select_table_text,  t_delivery.t_delivery_to_table,  t_delivery.t_delivery_to_text,  t_delivery.t_delivery_address,  t_delivery.t_delivery_desc,  t_delivery.t_delivery_status,  t_delivery.add_user,  t_delivery.add_date,  t_delivery.edit_user,  t_delivery.edit_date,  t_delivery.process_user,  t_delivery.process_date,  CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END AS kepada,  t_delivery.t_delivery_category_code,  t_delivery.last_user,  t_delivery.last_date,  t_delivery.t_delivery_location_address,  m_status.status,  m_login.fullname,  m_location_office.m_location_name";
$proto0["m_strFrom"] = "FROM t_delivery  INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id  INNER JOIN m_login ON t_delivery.add_user = m_login.username  INNER JOIN m_location_office ON t_delivery.t_location_id = m_location_office.id";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto6["m_sql"] = "t_delivery.t_delivery_id";
$proto6["m_srcTableName"] = "report_outmail_list";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_token",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto8["m_sql"] = "t_delivery.t_delivery_token";
$proto8["m_srcTableName"] = "report_outmail_list";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_no",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto10["m_sql"] = "t_delivery.t_delivery_no";
$proto10["m_srcTableName"] = "report_outmail_list";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto12["m_sql"] = "t_delivery.t_delivery_date";
$proto12["m_srcTableName"] = "report_outmail_list";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_type",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto14["m_sql"] = "t_delivery.t_delivery_type";
$proto14["m_srcTableName"] = "report_outmail_list";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_location_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto16["m_sql"] = "t_delivery.t_location_id";
$proto16["m_srcTableName"] = "report_outmail_list";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_select_table_text",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto18["m_sql"] = "t_delivery.t_select_table_text";
$proto18["m_srcTableName"] = "report_outmail_list";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_to_table",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto20["m_sql"] = "t_delivery.t_delivery_to_table";
$proto20["m_srcTableName"] = "report_outmail_list";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_to_text",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto22["m_sql"] = "t_delivery.t_delivery_to_text";
$proto22["m_srcTableName"] = "report_outmail_list";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_address",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto24["m_sql"] = "t_delivery.t_delivery_address";
$proto24["m_srcTableName"] = "report_outmail_list";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_desc",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto26["m_sql"] = "t_delivery.t_delivery_desc";
$proto26["m_srcTableName"] = "report_outmail_list";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_status",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto28["m_sql"] = "t_delivery.t_delivery_status";
$proto28["m_srcTableName"] = "report_outmail_list";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto30["m_sql"] = "t_delivery.add_user";
$proto30["m_srcTableName"] = "report_outmail_list";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto32["m_sql"] = "t_delivery.add_date";
$proto32["m_srcTableName"] = "report_outmail_list";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto34["m_sql"] = "t_delivery.edit_user";
$proto34["m_srcTableName"] = "report_outmail_list";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto36["m_sql"] = "t_delivery.edit_date";
$proto36["m_srcTableName"] = "report_outmail_list";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "process_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto38["m_sql"] = "t_delivery.process_user";
$proto38["m_srcTableName"] = "report_outmail_list";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "process_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto40["m_sql"] = "t_delivery.process_date";
$proto40["m_srcTableName"] = "report_outmail_list";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END"
));

$proto42["m_sql"] = "CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END";
$proto42["m_srcTableName"] = "report_outmail_list";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "kepada";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_category_code",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto44["m_sql"] = "t_delivery.t_delivery_category_code";
$proto44["m_srcTableName"] = "report_outmail_list";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto46["m_sql"] = "t_delivery.last_user";
$proto46["m_srcTableName"] = "report_outmail_list";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "last_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto48["m_sql"] = "t_delivery.last_date";
$proto48["m_srcTableName"] = "report_outmail_list";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_location_address",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_outmail_list"
));

$proto50["m_sql"] = "t_delivery.t_delivery_location_address";
$proto50["m_srcTableName"] = "report_outmail_list";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "m_status",
	"m_srcTableName" => "report_outmail_list"
));

$proto52["m_sql"] = "m_status.status";
$proto52["m_srcTableName"] = "report_outmail_list";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "m_login",
	"m_srcTableName" => "report_outmail_list"
));

$proto54["m_sql"] = "m_login.fullname";
$proto54["m_srcTableName"] = "report_outmail_list";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "m_location_name",
	"m_strTable" => "m_location_office",
	"m_srcTableName" => "report_outmail_list"
));

$proto56["m_sql"] = "m_location_office.m_location_name";
$proto56["m_srcTableName"] = "report_outmail_list";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto58=array();
$proto58["m_link"] = "SQLL_MAIN";
			$proto59=array();
$proto59["m_strName"] = "t_delivery";
$proto59["m_srcTableName"] = "report_outmail_list";
$proto59["m_columns"] = array();
$proto59["m_columns"][] = "t_delivery_id";
$proto59["m_columns"][] = "t_delivery_token";
$proto59["m_columns"][] = "t_delivery_no";
$proto59["m_columns"][] = "t_delivery_date";
$proto59["m_columns"][] = "t_delivery_type";
$proto59["m_columns"][] = "t_location_id";
$proto59["m_columns"][] = "t_select_table_text";
$proto59["m_columns"][] = "t_delivery_to_table";
$proto59["m_columns"][] = "t_delivery_to_text";
$proto59["m_columns"][] = "t_delivery_address";
$proto59["m_columns"][] = "t_delivery_desc";
$proto59["m_columns"][] = "t_delivery_status";
$proto59["m_columns"][] = "add_user";
$proto59["m_columns"][] = "add_date";
$proto59["m_columns"][] = "edit_user";
$proto59["m_columns"][] = "edit_date";
$proto59["m_columns"][] = "process_user";
$proto59["m_columns"][] = "process_date";
$proto59["m_columns"][] = "t_delivery_category_code";
$proto59["m_columns"][] = "last_user";
$proto59["m_columns"][] = "last_date";
$proto59["m_columns"][] = "nomor";
$proto59["m_columns"][] = "nomorurut";
$proto59["m_columns"][] = "t_delivery_location_address";
$proto59["m_columns"][] = "get_fl";
$obj = new SQLTable($proto59);

$proto58["m_table"] = $obj;
$proto58["m_sql"] = "t_delivery";
$proto58["m_alias"] = "";
$proto58["m_srcTableName"] = "report_outmail_list";
$proto60=array();
$proto60["m_sql"] = "";
$proto60["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto60["m_column"]=$obj;
$proto60["m_contained"] = array();
$proto60["m_strCase"] = "";
$proto60["m_havingmode"] = false;
$proto60["m_inBrackets"] = false;
$proto60["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto60);

$proto58["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto58);

$proto0["m_fromlist"][]=$obj;
												$proto62=array();
$proto62["m_link"] = "SQLL_INNERJOIN";
			$proto63=array();
$proto63["m_strName"] = "m_status";
$proto63["m_srcTableName"] = "report_outmail_list";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "m_status_id";
$proto63["m_columns"][] = "status";
$proto63["m_columns"][] = "m_status_desc";
$proto63["m_columns"][] = "m_status_basic_flag";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "report_outmail_list";
$proto64=array();
$proto64["m_sql"] = "m_status.m_status_id = t_delivery.t_delivery_status";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "report_outmail_list"
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "= t_delivery.t_delivery_status";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
												$proto66=array();
$proto66["m_link"] = "SQLL_INNERJOIN";
			$proto67=array();
$proto67["m_strName"] = "m_login";
$proto67["m_srcTableName"] = "report_outmail_list";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "id";
$proto67["m_columns"][] = "username";
$proto67["m_columns"][] = "password";
$proto67["m_columns"][] = "fullname";
$proto67["m_columns"][] = "email";
$proto67["m_columns"][] = "isactive";
$proto67["m_columns"][] = "add_user";
$proto67["m_columns"][] = "add_date";
$proto67["m_columns"][] = "edit_user";
$proto67["m_columns"][] = "edit_date";
$proto67["m_columns"][] = "ext_security_id";
$proto67["m_columns"][] = "m_employee_id";
$proto67["m_columns"][] = "last_login_date";
$proto67["m_columns"][] = "apikey";
$proto67["m_columns"][] = "is_active";
$proto67["m_columns"][] = "is_delete";
$proto67["m_columns"][] = "deleted_date";
$proto67["m_columns"][] = "created_date";
$proto67["m_columns"][] = "created_by";
$proto67["m_columns"][] = "last_update_by";
$proto67["m_columns"][] = "last_update_date";
$proto67["m_columns"][] = "userpic";
$proto67["m_columns"][] = "url_calender";
$proto67["m_columns"][] = "two_factor";
$proto67["m_columns"][] = "totp";
$proto67["m_columns"][] = "reset_token";
$proto67["m_columns"][] = "reset_date";
$proto67["m_columns"][] = "phone";
$proto67["m_columns"][] = "login_type";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "INNER JOIN m_login ON t_delivery.add_user = m_login.username";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "report_outmail_list";
$proto68=array();
$proto68["m_sql"] = "m_login.username = t_delivery.add_user";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "m_login",
	"m_srcTableName" => "report_outmail_list"
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "= t_delivery.add_user";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
												$proto70=array();
$proto70["m_link"] = "SQLL_INNERJOIN";
			$proto71=array();
$proto71["m_strName"] = "m_location_office";
$proto71["m_srcTableName"] = "report_outmail_list";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "id";
$proto71["m_columns"][] = "m_location_name";
$proto71["m_columns"][] = "m_location_address";
$proto71["m_columns"][] = "m_location_kabupaten";
$proto71["m_columns"][] = "m_location_provinsi";
$proto71["m_columns"][] = "is_active";
$proto71["m_columns"][] = "is_delete";
$proto71["m_columns"][] = "deleted_date";
$proto71["m_columns"][] = "created_date";
$proto71["m_columns"][] = "created_by";
$proto71["m_columns"][] = "last_update_by";
$proto71["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "INNER JOIN m_location_office ON t_delivery.t_location_id = m_location_office.id";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "report_outmail_list";
$proto72=array();
$proto72["m_sql"] = "m_location_office.id = t_delivery.t_location_id";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "m_location_office",
	"m_srcTableName" => "report_outmail_list"
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "= t_delivery.t_location_id";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="report_outmail_list";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_outmail_list = createSqlQuery_report_outmail_list();


	
				;

																										

$tdatareport_outmail_list[".sqlquery"] = $queryData_report_outmail_list;



$tdatareport_outmail_list[".hasEvents"] = false;

?>