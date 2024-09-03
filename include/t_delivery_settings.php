<?php
$tdatat_delivery = array();
$tdatat_delivery[".searchableFields"] = array();
$tdatat_delivery[".ShortName"] = "t_delivery";
$tdatat_delivery[".OwnerID"] = "";
$tdatat_delivery[".OriginalTable"] = "t_delivery";


$tdatat_delivery[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list1\",\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_delivery[".originalPagesByType"] = $tdatat_delivery[".pagesByType"];
$tdatat_delivery[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list1\",\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_delivery[".originalPages"] = $tdatat_delivery[".pages"];
$tdatat_delivery[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list1\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_delivery[".originalDefaultPages"] = $tdatat_delivery[".defaultPages"];

//	field labels
$fieldLabelst_delivery = array();
$fieldToolTipst_delivery = array();
$pageTitlest_delivery = array();
$placeHolderst_delivery = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery["English"] = array();
	$fieldToolTipst_delivery["English"] = array();
	$placeHolderst_delivery["English"] = array();
	$pageTitlest_delivery["English"] = array();
	$fieldLabelst_delivery["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipst_delivery["English"]["t_delivery_id"] = "";
	$placeHolderst_delivery["English"]["t_delivery_id"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_token"] = "T Delivery Token";
	$fieldToolTipst_delivery["English"]["t_delivery_token"] = "";
	$placeHolderst_delivery["English"]["t_delivery_token"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_no"] = "No";
	$fieldToolTipst_delivery["English"]["t_delivery_no"] = "";
	$placeHolderst_delivery["English"]["t_delivery_no"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_date"] = "Date";
	$fieldToolTipst_delivery["English"]["t_delivery_date"] = "";
	$placeHolderst_delivery["English"]["t_delivery_date"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_type"] = "Type";
	$fieldToolTipst_delivery["English"]["t_delivery_type"] = "";
	$placeHolderst_delivery["English"]["t_delivery_type"] = "";
	$fieldLabelst_delivery["English"]["t_location_id"] = "Origin";
	$fieldToolTipst_delivery["English"]["t_location_id"] = "";
	$placeHolderst_delivery["English"]["t_location_id"] = "";
	$fieldLabelst_delivery["English"]["t_select_table_text"] = "Destinations Method";
	$fieldToolTipst_delivery["English"]["t_select_table_text"] = "";
	$placeHolderst_delivery["English"]["t_select_table_text"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_to_table"] = "To";
	$fieldToolTipst_delivery["English"]["t_delivery_to_table"] = "";
	$placeHolderst_delivery["English"]["t_delivery_to_table"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_to_text"] = "To (free text)";
	$fieldToolTipst_delivery["English"]["t_delivery_to_text"] = "";
	$placeHolderst_delivery["English"]["t_delivery_to_text"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_address"] = "Address";
	$fieldToolTipst_delivery["English"]["t_delivery_address"] = "";
	$placeHolderst_delivery["English"]["t_delivery_address"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_desc"] = "Description";
	$fieldToolTipst_delivery["English"]["t_delivery_desc"] = "";
	$placeHolderst_delivery["English"]["t_delivery_desc"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_status"] = "Status";
	$fieldToolTipst_delivery["English"]["t_delivery_status"] = "";
	$placeHolderst_delivery["English"]["t_delivery_status"] = "";
	$fieldLabelst_delivery["English"]["add_user"] = "Add User";
	$fieldToolTipst_delivery["English"]["add_user"] = "";
	$placeHolderst_delivery["English"]["add_user"] = "";
	$fieldLabelst_delivery["English"]["add_date"] = "Add Date";
	$fieldToolTipst_delivery["English"]["add_date"] = "";
	$placeHolderst_delivery["English"]["add_date"] = "";
	$fieldLabelst_delivery["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_delivery["English"]["edit_user"] = "";
	$placeHolderst_delivery["English"]["edit_user"] = "";
	$fieldLabelst_delivery["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_delivery["English"]["edit_date"] = "";
	$placeHolderst_delivery["English"]["edit_date"] = "";
	$fieldLabelst_delivery["English"]["process_user"] = "Process User";
	$fieldToolTipst_delivery["English"]["process_user"] = "";
	$placeHolderst_delivery["English"]["process_user"] = "";
	$fieldLabelst_delivery["English"]["process_date"] = "Process Date";
	$fieldToolTipst_delivery["English"]["process_date"] = "";
	$placeHolderst_delivery["English"]["process_date"] = "";
	$fieldLabelst_delivery["English"]["kepada"] = "To";
	$fieldToolTipst_delivery["English"]["kepada"] = "";
	$placeHolderst_delivery["English"]["kepada"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_category_code"] = "Category Code";
	$fieldToolTipst_delivery["English"]["t_delivery_category_code"] = "";
	$placeHolderst_delivery["English"]["t_delivery_category_code"] = "";
	$fieldLabelst_delivery["English"]["last_user"] = "Last User";
	$fieldToolTipst_delivery["English"]["last_user"] = "";
	$placeHolderst_delivery["English"]["last_user"] = "";
	$fieldLabelst_delivery["English"]["last_date"] = "Last Date";
	$fieldToolTipst_delivery["English"]["last_date"] = "";
	$placeHolderst_delivery["English"]["last_date"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_location_address"] = "Address";
	$fieldToolTipst_delivery["English"]["t_delivery_location_address"] = "";
	$placeHolderst_delivery["English"]["t_delivery_location_address"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_expedition_name"] = "Name";
	$fieldToolTipst_delivery["English"]["t_delivery_expedition_name"] = "";
	$placeHolderst_delivery["English"]["t_delivery_expedition_name"] = "";
	$fieldLabelst_delivery["English"]["t_delivery_expedition_awb"] = "Awb";
	$fieldToolTipst_delivery["English"]["t_delivery_expedition_awb"] = "";
	$placeHolderst_delivery["English"]["t_delivery_expedition_awb"] = "";
	$fieldLabelst_delivery["English"]["edit_t_delivery_to_table"] = "Edit T Delivery To Table";
	$fieldToolTipst_delivery["English"]["edit_t_delivery_to_table"] = "";
	$placeHolderst_delivery["English"]["edit_t_delivery_to_table"] = "";
	$fieldLabelst_delivery["English"]["status_disposition"] = "Status Disposition";
	$fieldToolTipst_delivery["English"]["status_disposition"] = "";
	$placeHolderst_delivery["English"]["status_disposition"] = "";
	if (count($fieldToolTipst_delivery["English"]))
		$tdatat_delivery[".isUseToolTips"] = true;
}


	$tdatat_delivery[".NCSearch"] = true;



$tdatat_delivery[".shortTableName"] = "t_delivery";
$tdatat_delivery[".nSecOptions"] = 0;

$tdatat_delivery[".mainTableOwnerID"] = "";
$tdatat_delivery[".entityType"] = 0;
$tdatat_delivery[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery[".strOriginalTableName"] = "t_delivery";

	



$tdatat_delivery[".showAddInPopup"] = false;

$tdatat_delivery[".showEditInPopup"] = false;

$tdatat_delivery[".showViewInPopup"] = false;

$tdatat_delivery[".listAjax"] = false;
//	temporary
//$tdatat_delivery[".listAjax"] = false;

	$tdatat_delivery[".audit"] = false;

	$tdatat_delivery[".locking"] = false;


$pages = $tdatat_delivery[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery[".edit"] = true;
	$tdatat_delivery[".afterEditAction"] = 1;
	$tdatat_delivery[".closePopupAfterEdit"] = 1;
	$tdatat_delivery[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery[".add"] = true;
$tdatat_delivery[".afterAddAction"] = 3;
$tdatat_delivery[".closePopupAfterAdd"] = 1;
$tdatat_delivery[".afterAddActionDetTable"] = "t_delivery_details";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery[".list"] = true;
}



$tdatat_delivery[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery[".printFriendly"] = true;
}



$tdatat_delivery[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery[".isUseAjaxSuggest"] = true;



		
																																																		

$tdatat_delivery[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery[".buttonsAdded"] = true;

$tdatat_delivery[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_delivery[".isUseTimeForSearch"] = false;


$tdatat_delivery[".badgeColor"] = "DB7093";


$tdatat_delivery[".allSearchFields"] = array();
$tdatat_delivery[".filterFields"] = array();
$tdatat_delivery[".requiredSearchFields"] = array();

$tdatat_delivery[".googleLikeFields"] = array();
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_id";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_token";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_no";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_date";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_type";
$tdatat_delivery[".googleLikeFields"][] = "t_location_id";
$tdatat_delivery[".googleLikeFields"][] = "t_select_table_text";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_to_table";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_to_text";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_address";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_desc";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_status";
$tdatat_delivery[".googleLikeFields"][] = "add_user";
$tdatat_delivery[".googleLikeFields"][] = "add_date";
$tdatat_delivery[".googleLikeFields"][] = "edit_user";
$tdatat_delivery[".googleLikeFields"][] = "edit_date";
$tdatat_delivery[".googleLikeFields"][] = "process_user";
$tdatat_delivery[".googleLikeFields"][] = "process_date";
$tdatat_delivery[".googleLikeFields"][] = "kepada";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_category_code";
$tdatat_delivery[".googleLikeFields"][] = "last_user";
$tdatat_delivery[".googleLikeFields"][] = "last_date";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_location_address";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_expedition_name";
$tdatat_delivery[".googleLikeFields"][] = "t_delivery_expedition_awb";
$tdatat_delivery[".googleLikeFields"][] = "edit_t_delivery_to_table";
$tdatat_delivery[".googleLikeFields"][] = "status_disposition";



$tdatat_delivery[".tableType"] = "list";

$tdatat_delivery[".printerPageOrientation"] = 0;
$tdatat_delivery[".nPrinterPageScale"] = 100;

$tdatat_delivery[".nPrinterSplitRecords"] = 40;

$tdatat_delivery[".geocodingEnabled"] = false;




$tdatat_delivery[".isDisplayLoading"] = true;






$tdatat_delivery[".pageSize"] = 20;

$tdatat_delivery[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery[".orderindexes"] = array();


$tdatat_delivery[".sqlHead"] = "SELECT t_delivery.t_delivery_id,  t_delivery.t_delivery_token,  t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  t_delivery.t_delivery_type,  t_delivery.t_location_id,  t_delivery.t_select_table_text,  t_delivery.t_delivery_to_table,  t_delivery.t_delivery_to_text,  t_delivery.t_delivery_address,  t_delivery.t_delivery_desc,  t_delivery.t_delivery_status,  t_delivery.add_user,  t_delivery.add_date,  t_delivery.edit_user,  t_delivery.edit_date,  t_delivery.process_user,  t_delivery.process_date,  CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END AS kepada,  t_delivery.t_delivery_category_code,  t_delivery.last_user,  t_delivery.last_date,  t_delivery.t_delivery_location_address,  t_delivery_expedition.t_delivery_expedition_name,  t_delivery_expedition.t_delivery_expedition_awb,  t_delivery.t_delivery_to_table AS edit_t_delivery_to_table,  v_delivery_list.status_disposition";
$tdatat_delivery[".sqlFrom"] = "FROM t_delivery  LEFT OUTER JOIN t_delivery_expedition ON t_delivery.t_delivery_id = t_delivery_expedition.t_delivery_id  INNER JOIN v_delivery_list ON t_delivery.t_delivery_id = v_delivery_list.t_delivery_id";
$tdatat_delivery[".sqlWhereExpr"] = "(t_delivery.last_user = ':session.UserID') OR (t_delivery.add_user = ':session.UserID')";
$tdatat_delivery[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatat_delivery[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery[".highlightSearchResults"] = true;

$tableKeyst_delivery = array();
$tableKeyst_delivery[] = "t_delivery_id";
$tableKeyst_delivery[] = "t_delivery_token";
$tdatat_delivery[".Keys"] = $tableKeyst_delivery;


$tdatat_delivery[".hideMobileList"] = array();




//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_id");
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


	$tdatat_delivery["t_delivery_id"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_id";
//	t_delivery_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_token";
	$fdata["GoodName"] = "t_delivery_token";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_token");
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


	$tdatat_delivery["t_delivery_token"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_token";
//	t_delivery_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_no";
	$fdata["GoodName"] = "t_delivery_no";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_no");
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
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatat_delivery["t_delivery_no"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_no";
//	t_delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_date";
	$fdata["GoodName"] = "t_delivery_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_date");
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
	$edata["weekdays"] = "[1,2,3,4,5,6]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatat_delivery["t_delivery_date"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_date";
//	t_delivery_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_delivery_type";
	$fdata["GoodName"] = "t_delivery_type";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_type");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Expedition";
	$edata["LookupValues"][] = "Internal";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatat_delivery["t_delivery_type"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_type";
//	t_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_location_id";
	$fdata["GoodName"] = "t_location_id";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_location_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_location_office";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"t_delivery_location_address", 'lookupF'=>"m_location_address");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "m_location_name";

	

	
	$edata["LookupOrderBy"] = "id";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatat_delivery["t_location_id"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_location_id";
//	t_select_table_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_select_table_text";
	$fdata["GoodName"] = "t_select_table_text";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_select_table_text");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "t_select_table_text_event", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

		$edata["HorizontalLookup"] = true;

	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Address book";
	$edata["LookupValues"][] = "Free Text";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatat_delivery["t_select_table_text"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_select_table_text";
//	t_delivery_to_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_delivery_to_table";
	$fdata["GoodName"] = "t_delivery_to_table";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_to_table");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "t_delivery_address";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"t_delivery_address", 'lookupF'=>"t_delivery_address");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "t_delivery_address_to";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "t_delivery_address_to";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatat_delivery["t_delivery_to_table"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_to_table";
//	t_delivery_to_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_delivery_to_text";
	$fdata["GoodName"] = "t_delivery_to_text";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_to_text");
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


	$tdatat_delivery["t_delivery_to_text"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_to_text";
//	t_delivery_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_delivery_address";
	$fdata["GoodName"] = "t_delivery_address";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_address");
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

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatat_delivery["t_delivery_address"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_address";
//	t_delivery_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_delivery_desc";
	$fdata["GoodName"] = "t_delivery_desc";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_desc");
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


	$tdatat_delivery["t_delivery_desc"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_desc";
//	t_delivery_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_delivery_status";
	$fdata["GoodName"] = "t_delivery_status";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_status";

		$fdata["sourceSingle"] = "t_delivery_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_status_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

				$edata["LookupWhere"] = "m_status_desc='delivery'";


	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatat_delivery["t_delivery_status"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","add_user");
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatat_delivery["add_user"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","add_date");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatat_delivery["add_date"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","edit_user");
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatat_delivery["edit_user"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","edit_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.edit_date";

	
	
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


	$tdatat_delivery["edit_date"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "edit_date";
//	process_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "process_user";
	$fdata["GoodName"] = "process_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","process_user");
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


	$tdatat_delivery["process_user"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "process_user";
//	process_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "process_date";
	$fdata["GoodName"] = "process_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","process_date");
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


	$tdatat_delivery["process_date"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "process_date";
//	kepada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "kepada";
	$fdata["GoodName"] = "kepada";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_delivery","kepada");
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


	$tdatat_delivery["kepada"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "kepada";
//	t_delivery_category_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "t_delivery_category_code";
	$fdata["GoodName"] = "t_delivery_category_code";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_category_code");
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


	$tdatat_delivery["t_delivery_category_code"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_category_code";
//	last_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "last_user";
	$fdata["GoodName"] = "last_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","last_user");
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


	$tdatat_delivery["last_user"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "last_user";
//	last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "last_date";
	$fdata["GoodName"] = "last_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","last_date");
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


	$tdatat_delivery["last_date"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "last_date";
//	t_delivery_location_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "t_delivery_location_address";
	$fdata["GoodName"] = "t_delivery_location_address";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_location_address");
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

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatat_delivery["t_delivery_location_address"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_location_address";
//	t_delivery_expedition_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "t_delivery_expedition_name";
	$fdata["GoodName"] = "t_delivery_expedition_name";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_expedition_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_expedition_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_expedition.t_delivery_expedition_name";

	
	
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


	$tdatat_delivery["t_delivery_expedition_name"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_expedition_name";
//	t_delivery_expedition_awb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "t_delivery_expedition_awb";
	$fdata["GoodName"] = "t_delivery_expedition_awb";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery","t_delivery_expedition_awb");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_expedition_awb";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_expedition.t_delivery_expedition_awb";

	
	
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


	$tdatat_delivery["t_delivery_expedition_awb"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "t_delivery_expedition_awb";
//	edit_t_delivery_to_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "edit_t_delivery_to_table";
	$fdata["GoodName"] = "edit_t_delivery_to_table";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery","edit_t_delivery_to_table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_to_table";

	
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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatat_delivery["edit_t_delivery_to_table"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "edit_t_delivery_to_table";
//	status_disposition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "status_disposition";
	$fdata["GoodName"] = "status_disposition";
	$fdata["ownerTable"] = "v_delivery_list";
	$fdata["Label"] = GetFieldLabel("t_delivery","status_disposition");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status_disposition";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "v_delivery_list.status_disposition";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatat_delivery["status_disposition"] = $fdata;
		$tdatat_delivery[".searchableFields"][] = "status_disposition";


$tables_data["t_delivery"]=&$tdatat_delivery;
$field_labels["t_delivery"] = &$fieldLabelst_delivery;
$fieldToolTips["t_delivery"] = &$fieldToolTipst_delivery;
$placeHolders["t_delivery"] = &$placeHolderst_delivery;
$page_titles["t_delivery"] = &$pageTitlest_delivery;


changeTextControlsToDate( "t_delivery" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery"] = array();
//	t_delivery_details
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_delivery_details";
		$detailsParam["dOriginalTable"] = "t_delivery_details";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_delivery_details";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_delivery_details");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_delivery"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_delivery"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["masterKeys"][]="t_delivery_id";

				$detailsTablesData["t_delivery"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["detailKeys"][]="t_delivery_id";
//	m_disposition_inmail
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_disposition_inmail";
		$detailsParam["dOriginalTable"] = "m_disposition";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_disposition_inmail";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_disposition_inmail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_delivery"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_delivery"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["masterKeys"][]="t_delivery_id";

				$detailsTablesData["t_delivery"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["detailKeys"][]="t_disposition_no";
//	t_delivery_internal_view
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_delivery_internal_view";
		$detailsParam["dOriginalTable"] = "t_delivery_internal";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_delivery_internal_view";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_delivery_internal_view");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_delivery"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_delivery"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["masterKeys"][]="t_delivery_id";

				$detailsTablesData["t_delivery"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["detailKeys"][]="t_delivery_id";
//	t_delivery_expedition_view
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_delivery_expedition_view";
		$detailsParam["dOriginalTable"] = "t_delivery_expedition";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_delivery_expedition_view";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_delivery_expedition_view");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_delivery"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_delivery"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["masterKeys"][]="t_delivery_id";

				$detailsTablesData["t_delivery"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["detailKeys"][]="t_delivery_id";
//	t_delivery_feedback
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_delivery_feedback";
		$detailsParam["dOriginalTable"] = "t_delivery_feedback";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_delivery_feedback";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_delivery_feedback");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_delivery"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_delivery"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["masterKeys"][]="t_delivery_id";

				$detailsTablesData["t_delivery"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_delivery"][$dIndex]["detailKeys"][]="t_delivery_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery.t_delivery_id,  t_delivery.t_delivery_token,  t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  t_delivery.t_delivery_type,  t_delivery.t_location_id,  t_delivery.t_select_table_text,  t_delivery.t_delivery_to_table,  t_delivery.t_delivery_to_text,  t_delivery.t_delivery_address,  t_delivery.t_delivery_desc,  t_delivery.t_delivery_status,  t_delivery.add_user,  t_delivery.add_date,  t_delivery.edit_user,  t_delivery.edit_date,  t_delivery.process_user,  t_delivery.process_date,  CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END AS kepada,  t_delivery.t_delivery_category_code,  t_delivery.last_user,  t_delivery.last_date,  t_delivery.t_delivery_location_address,  t_delivery_expedition.t_delivery_expedition_name,  t_delivery_expedition.t_delivery_expedition_awb,  t_delivery.t_delivery_to_table AS edit_t_delivery_to_table,  v_delivery_list.status_disposition";
$proto0["m_strFrom"] = "FROM t_delivery  LEFT OUTER JOIN t_delivery_expedition ON t_delivery.t_delivery_id = t_delivery_expedition.t_delivery_id  INNER JOIN v_delivery_list ON t_delivery.t_delivery_id = v_delivery_list.t_delivery_id";
$proto0["m_strWhere"] = "(t_delivery.last_user = ':session.UserID') OR (t_delivery.add_user = ':session.UserID')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(t_delivery.last_user = ':session.UserID') OR (t_delivery.add_user = ':session.UserID')";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(t_delivery.last_user = ':session.UserID') OR (t_delivery.add_user = ':session.UserID')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "t_delivery.last_user = ':session.UserID'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= ':session.UserID'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "t_delivery.add_user = ':session.UserID'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= ':session.UserID'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto10["m_sql"] = "t_delivery.t_delivery_id";
$proto10["m_srcTableName"] = "t_delivery";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_token",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto12["m_sql"] = "t_delivery.t_delivery_token";
$proto12["m_srcTableName"] = "t_delivery";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_no",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto14["m_sql"] = "t_delivery.t_delivery_no";
$proto14["m_srcTableName"] = "t_delivery";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto16["m_sql"] = "t_delivery.t_delivery_date";
$proto16["m_srcTableName"] = "t_delivery";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_type",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto18["m_sql"] = "t_delivery.t_delivery_type";
$proto18["m_srcTableName"] = "t_delivery";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_location_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto20["m_sql"] = "t_delivery.t_location_id";
$proto20["m_srcTableName"] = "t_delivery";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_select_table_text",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto22["m_sql"] = "t_delivery.t_select_table_text";
$proto22["m_srcTableName"] = "t_delivery";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_to_table",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto24["m_sql"] = "t_delivery.t_delivery_to_table";
$proto24["m_srcTableName"] = "t_delivery";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_to_text",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto26["m_sql"] = "t_delivery.t_delivery_to_text";
$proto26["m_srcTableName"] = "t_delivery";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_address",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto28["m_sql"] = "t_delivery.t_delivery_address";
$proto28["m_srcTableName"] = "t_delivery";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_desc",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto30["m_sql"] = "t_delivery.t_delivery_desc";
$proto30["m_srcTableName"] = "t_delivery";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_status",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto32["m_sql"] = "t_delivery.t_delivery_status";
$proto32["m_srcTableName"] = "t_delivery";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto34["m_sql"] = "t_delivery.add_user";
$proto34["m_srcTableName"] = "t_delivery";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto36["m_sql"] = "t_delivery.add_date";
$proto36["m_srcTableName"] = "t_delivery";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto38["m_sql"] = "t_delivery.edit_user";
$proto38["m_srcTableName"] = "t_delivery";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto40["m_sql"] = "t_delivery.edit_date";
$proto40["m_srcTableName"] = "t_delivery";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "process_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto42["m_sql"] = "t_delivery.process_user";
$proto42["m_srcTableName"] = "t_delivery";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "process_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto44["m_sql"] = "t_delivery.process_date";
$proto44["m_srcTableName"] = "t_delivery";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END"
));

$proto46["m_sql"] = "CASE WHEN t_select_table_text = 'Address book' THEN t_delivery_to_table  WHEN t_select_table_text = 'Free text' THEN t_delivery_to_text  ELSE ''  END";
$proto46["m_srcTableName"] = "t_delivery";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "kepada";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_category_code",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto48["m_sql"] = "t_delivery.t_delivery_category_code";
$proto48["m_srcTableName"] = "t_delivery";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto50["m_sql"] = "t_delivery.last_user";
$proto50["m_srcTableName"] = "t_delivery";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "last_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto52["m_sql"] = "t_delivery.last_date";
$proto52["m_srcTableName"] = "t_delivery";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_location_address",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto54["m_sql"] = "t_delivery.t_delivery_location_address";
$proto54["m_srcTableName"] = "t_delivery";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_expedition_name",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery"
));

$proto56["m_sql"] = "t_delivery_expedition.t_delivery_expedition_name";
$proto56["m_srcTableName"] = "t_delivery";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_expedition_awb",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery"
));

$proto58["m_sql"] = "t_delivery_expedition.t_delivery_expedition_awb";
$proto58["m_srcTableName"] = "t_delivery";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_to_table",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery"
));

$proto60["m_sql"] = "t_delivery.t_delivery_to_table";
$proto60["m_srcTableName"] = "t_delivery";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "edit_t_delivery_to_table";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "status_disposition",
	"m_strTable" => "v_delivery_list",
	"m_srcTableName" => "t_delivery"
));

$proto62["m_sql"] = "v_delivery_list.status_disposition";
$proto62["m_srcTableName"] = "t_delivery";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto64=array();
$proto64["m_link"] = "SQLL_MAIN";
			$proto65=array();
$proto65["m_strName"] = "t_delivery";
$proto65["m_srcTableName"] = "t_delivery";
$proto65["m_columns"] = array();
$proto65["m_columns"][] = "t_delivery_id";
$proto65["m_columns"][] = "t_delivery_token";
$proto65["m_columns"][] = "t_delivery_no";
$proto65["m_columns"][] = "t_delivery_date";
$proto65["m_columns"][] = "t_delivery_type";
$proto65["m_columns"][] = "t_location_id";
$proto65["m_columns"][] = "t_select_table_text";
$proto65["m_columns"][] = "t_delivery_to_table";
$proto65["m_columns"][] = "t_delivery_to_text";
$proto65["m_columns"][] = "t_delivery_address";
$proto65["m_columns"][] = "t_delivery_desc";
$proto65["m_columns"][] = "t_delivery_status";
$proto65["m_columns"][] = "add_user";
$proto65["m_columns"][] = "add_date";
$proto65["m_columns"][] = "edit_user";
$proto65["m_columns"][] = "edit_date";
$proto65["m_columns"][] = "process_user";
$proto65["m_columns"][] = "process_date";
$proto65["m_columns"][] = "t_delivery_category_code";
$proto65["m_columns"][] = "last_user";
$proto65["m_columns"][] = "last_date";
$proto65["m_columns"][] = "nomor";
$proto65["m_columns"][] = "nomorurut";
$proto65["m_columns"][] = "t_delivery_location_address";
$proto65["m_columns"][] = "get_fl";
$obj = new SQLTable($proto65);

$proto64["m_table"] = $obj;
$proto64["m_sql"] = "t_delivery";
$proto64["m_alias"] = "";
$proto64["m_srcTableName"] = "t_delivery";
$proto66=array();
$proto66["m_sql"] = "";
$proto66["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto66["m_column"]=$obj;
$proto66["m_contained"] = array();
$proto66["m_strCase"] = "";
$proto66["m_havingmode"] = false;
$proto66["m_inBrackets"] = false;
$proto66["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto66);

$proto64["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto64);

$proto0["m_fromlist"][]=$obj;
												$proto68=array();
$proto68["m_link"] = "SQLL_LEFTJOIN";
			$proto69=array();
$proto69["m_strName"] = "t_delivery_expedition";
$proto69["m_srcTableName"] = "t_delivery";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "t_delivery_expedition";
$proto69["m_columns"][] = "t_delivery_id";
$proto69["m_columns"][] = "t_delivery_expedition_name";
$proto69["m_columns"][] = "t_delivery_expedition_type";
$proto69["m_columns"][] = "t_delivery_expedition_awb";
$proto69["m_columns"][] = "add_user";
$proto69["m_columns"][] = "add_date";
$proto69["m_columns"][] = "edit_user";
$proto69["m_columns"][] = "edit_date";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "LEFT OUTER JOIN t_delivery_expedition ON t_delivery.t_delivery_id = t_delivery_expedition.t_delivery_id";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "t_delivery";
$proto70=array();
$proto70["m_sql"] = "t_delivery_expedition.t_delivery_id = t_delivery.t_delivery_id";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery"
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "= t_delivery.t_delivery_id";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
												$proto72=array();
$proto72["m_link"] = "SQLL_INNERJOIN";
			$proto73=array();
$proto73["m_strName"] = "v_delivery_list";
$proto73["m_srcTableName"] = "t_delivery";
$proto73["m_columns"] = array();
$proto73["m_columns"][] = "t_delivery_id";
$proto73["m_columns"][] = "status_disposition";
$proto73["m_columns"][] = "status_delivery";
$obj = new SQLTable($proto73);

$proto72["m_table"] = $obj;
$proto72["m_sql"] = "INNER JOIN v_delivery_list ON t_delivery.t_delivery_id = v_delivery_list.t_delivery_id";
$proto72["m_alias"] = "";
$proto72["m_srcTableName"] = "t_delivery";
$proto74=array();
$proto74["m_sql"] = "v_delivery_list.t_delivery_id = t_delivery.t_delivery_id";
$proto74["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "v_delivery_list",
	"m_srcTableName" => "t_delivery"
));

$proto74["m_column"]=$obj;
$proto74["m_contained"] = array();
$proto74["m_strCase"] = "= t_delivery.t_delivery_id";
$proto74["m_havingmode"] = false;
$proto74["m_inBrackets"] = false;
$proto74["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto74);

$proto72["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto72);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery = createSqlQuery_t_delivery();


	
				;

																											

$tdatat_delivery[".sqlquery"] = $queryData_t_delivery;



include_once(getabspath("include/t_delivery_events.php"));
$tdatat_delivery[".hasEvents"] = true;

?>