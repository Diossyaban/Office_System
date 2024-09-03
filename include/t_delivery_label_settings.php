<?php
$tdatat_delivery_label = array();
$tdatat_delivery_label[".searchableFields"] = array();
$tdatat_delivery_label[".ShortName"] = "t_delivery_label";
$tdatat_delivery_label[".OwnerID"] = "";
$tdatat_delivery_label[".OriginalTable"] = "t_delivery";


$tdatat_delivery_label[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatat_delivery_label[".originalPagesByType"] = $tdatat_delivery_label[".pagesByType"];
$tdatat_delivery_label[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_label[".originalPages"] = $tdatat_delivery_label[".pages"];
$tdatat_delivery_label[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatat_delivery_label[".originalDefaultPages"] = $tdatat_delivery_label[".defaultPages"];

//	field labels
$fieldLabelst_delivery_label = array();
$fieldToolTipst_delivery_label = array();
$pageTitlest_delivery_label = array();
$placeHolderst_delivery_label = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_label["English"] = array();
	$fieldToolTipst_delivery_label["English"] = array();
	$placeHolderst_delivery_label["English"] = array();
	$pageTitlest_delivery_label["English"] = array();
	$fieldLabelst_delivery_label["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipst_delivery_label["English"]["t_delivery_id"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_id"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_token"] = "T Delivery Token";
	$fieldToolTipst_delivery_label["English"]["t_delivery_token"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_token"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_no"] = "T Delivery No";
	$fieldToolTipst_delivery_label["English"]["t_delivery_no"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_no"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_date"] = "T Delivery Date";
	$fieldToolTipst_delivery_label["English"]["t_delivery_date"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_date"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_type"] = "T Delivery Type";
	$fieldToolTipst_delivery_label["English"]["t_delivery_type"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_type"] = "";
	$fieldLabelst_delivery_label["English"]["t_location_id"] = "T Location Id";
	$fieldToolTipst_delivery_label["English"]["t_location_id"] = "";
	$placeHolderst_delivery_label["English"]["t_location_id"] = "";
	$fieldLabelst_delivery_label["English"]["t_select_table_text"] = "T Select Table Text";
	$fieldToolTipst_delivery_label["English"]["t_select_table_text"] = "";
	$placeHolderst_delivery_label["English"]["t_select_table_text"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_to_table"] = "T Delivery To Table";
	$fieldToolTipst_delivery_label["English"]["t_delivery_to_table"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_to_table"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_to_text"] = "T Delivery To Text";
	$fieldToolTipst_delivery_label["English"]["t_delivery_to_text"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_to_text"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_address"] = "T Delivery Address";
	$fieldToolTipst_delivery_label["English"]["t_delivery_address"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_address"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_desc"] = "T Delivery Desc";
	$fieldToolTipst_delivery_label["English"]["t_delivery_desc"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_desc"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_status"] = "T Delivery Status";
	$fieldToolTipst_delivery_label["English"]["t_delivery_status"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_status"] = "";
	$fieldLabelst_delivery_label["English"]["add_user"] = "Add User";
	$fieldToolTipst_delivery_label["English"]["add_user"] = "";
	$placeHolderst_delivery_label["English"]["add_user"] = "";
	$fieldLabelst_delivery_label["English"]["add_date"] = "Add Date";
	$fieldToolTipst_delivery_label["English"]["add_date"] = "";
	$placeHolderst_delivery_label["English"]["add_date"] = "";
	$fieldLabelst_delivery_label["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_delivery_label["English"]["edit_user"] = "";
	$placeHolderst_delivery_label["English"]["edit_user"] = "";
	$fieldLabelst_delivery_label["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_delivery_label["English"]["edit_date"] = "";
	$placeHolderst_delivery_label["English"]["edit_date"] = "";
	$fieldLabelst_delivery_label["English"]["process_user"] = "Process User";
	$fieldToolTipst_delivery_label["English"]["process_user"] = "";
	$placeHolderst_delivery_label["English"]["process_user"] = "";
	$fieldLabelst_delivery_label["English"]["process_date"] = "Process Date";
	$fieldToolTipst_delivery_label["English"]["process_date"] = "";
	$placeHolderst_delivery_label["English"]["process_date"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_category_code"] = "T Delivery Category Code";
	$fieldToolTipst_delivery_label["English"]["t_delivery_category_code"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_category_code"] = "";
	$fieldLabelst_delivery_label["English"]["last_user"] = "Last User";
	$fieldToolTipst_delivery_label["English"]["last_user"] = "";
	$placeHolderst_delivery_label["English"]["last_user"] = "";
	$fieldLabelst_delivery_label["English"]["last_date"] = "Last Date";
	$fieldToolTipst_delivery_label["English"]["last_date"] = "";
	$placeHolderst_delivery_label["English"]["last_date"] = "";
	$fieldLabelst_delivery_label["English"]["nomor"] = "Nomor";
	$fieldToolTipst_delivery_label["English"]["nomor"] = "";
	$placeHolderst_delivery_label["English"]["nomor"] = "";
	$fieldLabelst_delivery_label["English"]["nomorurut"] = "Nomorurut";
	$fieldToolTipst_delivery_label["English"]["nomorurut"] = "";
	$placeHolderst_delivery_label["English"]["nomorurut"] = "";
	$fieldLabelst_delivery_label["English"]["t_delivery_location_address"] = "T Delivery Location Address";
	$fieldToolTipst_delivery_label["English"]["t_delivery_location_address"] = "";
	$placeHolderst_delivery_label["English"]["t_delivery_location_address"] = "";
	$fieldLabelst_delivery_label["English"]["get_fl"] = "Get Fl";
	$fieldToolTipst_delivery_label["English"]["get_fl"] = "";
	$placeHolderst_delivery_label["English"]["get_fl"] = "";
	if (count($fieldToolTipst_delivery_label["English"]))
		$tdatat_delivery_label[".isUseToolTips"] = true;
}


	$tdatat_delivery_label[".NCSearch"] = true;



$tdatat_delivery_label[".shortTableName"] = "t_delivery_label";
$tdatat_delivery_label[".nSecOptions"] = 0;

$tdatat_delivery_label[".mainTableOwnerID"] = "";
$tdatat_delivery_label[".entityType"] = 1;
$tdatat_delivery_label[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_label[".strOriginalTableName"] = "t_delivery";

	



$tdatat_delivery_label[".showAddInPopup"] = false;

$tdatat_delivery_label[".showEditInPopup"] = false;

$tdatat_delivery_label[".showViewInPopup"] = false;

$tdatat_delivery_label[".listAjax"] = false;
//	temporary
//$tdatat_delivery_label[".listAjax"] = false;

	$tdatat_delivery_label[".audit"] = false;

	$tdatat_delivery_label[".locking"] = false;


$pages = $tdatat_delivery_label[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_label[".edit"] = true;
	$tdatat_delivery_label[".afterEditAction"] = 1;
	$tdatat_delivery_label[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_label[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_label[".add"] = true;
$tdatat_delivery_label[".afterAddAction"] = 1;
$tdatat_delivery_label[".closePopupAfterAdd"] = 1;
$tdatat_delivery_label[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_label[".list"] = true;
}



$tdatat_delivery_label[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_label[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_label[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_label[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_label[".printFriendly"] = true;
}



$tdatat_delivery_label[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_label[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_label[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_label[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_delivery_label[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_label[".buttonsAdded"] = false;

$tdatat_delivery_label[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_label[".isUseTimeForSearch"] = false;


$tdatat_delivery_label[".badgeColor"] = "EDCA00";


$tdatat_delivery_label[".allSearchFields"] = array();
$tdatat_delivery_label[".filterFields"] = array();
$tdatat_delivery_label[".requiredSearchFields"] = array();

$tdatat_delivery_label[".googleLikeFields"] = array();
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_id";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_token";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_no";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_date";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_type";
$tdatat_delivery_label[".googleLikeFields"][] = "t_location_id";
$tdatat_delivery_label[".googleLikeFields"][] = "t_select_table_text";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_to_table";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_to_text";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_address";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_desc";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_status";
$tdatat_delivery_label[".googleLikeFields"][] = "add_user";
$tdatat_delivery_label[".googleLikeFields"][] = "add_date";
$tdatat_delivery_label[".googleLikeFields"][] = "edit_user";
$tdatat_delivery_label[".googleLikeFields"][] = "edit_date";
$tdatat_delivery_label[".googleLikeFields"][] = "process_user";
$tdatat_delivery_label[".googleLikeFields"][] = "process_date";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_category_code";
$tdatat_delivery_label[".googleLikeFields"][] = "last_user";
$tdatat_delivery_label[".googleLikeFields"][] = "last_date";
$tdatat_delivery_label[".googleLikeFields"][] = "nomor";
$tdatat_delivery_label[".googleLikeFields"][] = "nomorurut";
$tdatat_delivery_label[".googleLikeFields"][] = "t_delivery_location_address";
$tdatat_delivery_label[".googleLikeFields"][] = "get_fl";



$tdatat_delivery_label[".tableType"] = "list";

$tdatat_delivery_label[".printerPageOrientation"] = 0;
$tdatat_delivery_label[".nPrinterPageScale"] = 100;

$tdatat_delivery_label[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_label[".geocodingEnabled"] = false;










$tdatat_delivery_label[".pageSize"] = 20;

$tdatat_delivery_label[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery_label[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_label[".orderindexes"] = array();


$tdatat_delivery_label[".sqlHead"] = "SELECT t_delivery_id,  	t_delivery_token,  	t_delivery_no,  	t_delivery_date,  	t_delivery_type,  	t_location_id,  	t_select_table_text,  	t_delivery_to_table,  	t_delivery_to_text,  	t_delivery_address,  	t_delivery_desc,  	t_delivery_status,  	add_user,  	add_date,  	edit_user,  	edit_date,  	process_user,  	process_date,  	t_delivery_category_code,  	last_user,  	last_date,  	nomor,  	nomorurut,  	t_delivery_location_address,  	get_fl";
$tdatat_delivery_label[".sqlFrom"] = "FROM t_delivery";
$tdatat_delivery_label[".sqlWhereExpr"] = "";
$tdatat_delivery_label[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_label[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_label[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_label[".highlightSearchResults"] = true;

$tableKeyst_delivery_label = array();
$tableKeyst_delivery_label[] = "t_delivery_id";
$tdatat_delivery_label[".Keys"] = $tableKeyst_delivery_label;


$tdatat_delivery_label[".hideMobileList"] = array();




//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_id";

		$fdata["sourceSingle"] = "t_delivery_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_id";

	
	
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


	$tdatat_delivery_label["t_delivery_id"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_id";
//	t_delivery_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_token";
	$fdata["GoodName"] = "t_delivery_token";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_token";

		$fdata["sourceSingle"] = "t_delivery_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_token";

	
	
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


	$tdatat_delivery_label["t_delivery_token"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_token";
//	t_delivery_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_no";
	$fdata["GoodName"] = "t_delivery_no";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_no";

		$fdata["sourceSingle"] = "t_delivery_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_no";

	
	
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


	$tdatat_delivery_label["t_delivery_no"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_no";
//	t_delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_date";
	$fdata["GoodName"] = "t_delivery_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_delivery_date";

		$fdata["sourceSingle"] = "t_delivery_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_date";

	
	
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


	$tdatat_delivery_label["t_delivery_date"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_date";
//	t_delivery_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_delivery_type";
	$fdata["GoodName"] = "t_delivery_type";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_type";

		$fdata["sourceSingle"] = "t_delivery_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_type";

	
	
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


	$tdatat_delivery_label["t_delivery_type"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_type";
//	t_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_location_id";
	$fdata["GoodName"] = "t_location_id";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_location_id";

		$fdata["sourceSingle"] = "t_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_location_id";

	
	
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


	$tdatat_delivery_label["t_location_id"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_location_id";
//	t_select_table_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_select_table_text";
	$fdata["GoodName"] = "t_select_table_text";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_select_table_text");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_select_table_text";

		$fdata["sourceSingle"] = "t_select_table_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_select_table_text";

	
	
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


	$tdatat_delivery_label["t_select_table_text"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_select_table_text";
//	t_delivery_to_table
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_delivery_to_table";
	$fdata["GoodName"] = "t_delivery_to_table";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_to_table");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_to_table";

		$fdata["sourceSingle"] = "t_delivery_to_table";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_to_table";

	
	
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


	$tdatat_delivery_label["t_delivery_to_table"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_to_table";
//	t_delivery_to_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_delivery_to_text";
	$fdata["GoodName"] = "t_delivery_to_text";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_to_text");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_to_text";

		$fdata["sourceSingle"] = "t_delivery_to_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_to_text";

	
	
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


	$tdatat_delivery_label["t_delivery_to_text"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_to_text";
//	t_delivery_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_delivery_address";
	$fdata["GoodName"] = "t_delivery_address";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_address";

		$fdata["sourceSingle"] = "t_delivery_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_address";

	
	
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


	$tdatat_delivery_label["t_delivery_address"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_address";
//	t_delivery_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_delivery_desc";
	$fdata["GoodName"] = "t_delivery_desc";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_desc";

		$fdata["sourceSingle"] = "t_delivery_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_desc";

	
	
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


	$tdatat_delivery_label["t_delivery_desc"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_desc";
//	t_delivery_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_delivery_status";
	$fdata["GoodName"] = "t_delivery_status";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_status";

		$fdata["sourceSingle"] = "t_delivery_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_status";

	
	
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


	$tdatat_delivery_label["t_delivery_status"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

		$fdata["sourceSingle"] = "add_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_user";

	
	
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


	$tdatat_delivery_label["add_user"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_date";

	
	
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


	$tdatat_delivery_label["add_date"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","edit_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edit_user";

		$fdata["sourceSingle"] = "edit_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_user";

	
	
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


	$tdatat_delivery_label["edit_user"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","edit_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_date";

	
	
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


	$tdatat_delivery_label["edit_date"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "edit_date";
//	process_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "process_user";
	$fdata["GoodName"] = "process_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","process_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "process_user";

		$fdata["sourceSingle"] = "process_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "process_user";

	
	
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


	$tdatat_delivery_label["process_user"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "process_user";
//	process_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "process_date";
	$fdata["GoodName"] = "process_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","process_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "process_date";

		$fdata["sourceSingle"] = "process_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "process_date";

	
	
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


	$tdatat_delivery_label["process_date"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "process_date";
//	t_delivery_category_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "t_delivery_category_code";
	$fdata["GoodName"] = "t_delivery_category_code";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_category_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_category_code";

		$fdata["sourceSingle"] = "t_delivery_category_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_category_code";

	
	
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


	$tdatat_delivery_label["t_delivery_category_code"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_category_code";
//	last_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "last_user";
	$fdata["GoodName"] = "last_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","last_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_user";

		$fdata["sourceSingle"] = "last_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_user";

	
	
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


	$tdatat_delivery_label["last_user"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "last_user";
//	last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "last_date";
	$fdata["GoodName"] = "last_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","last_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_date";

		$fdata["sourceSingle"] = "last_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_date";

	
	
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


	$tdatat_delivery_label["last_date"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "last_date";
//	nomor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "nomor";
	$fdata["GoodName"] = "nomor";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","nomor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nomor";

		$fdata["sourceSingle"] = "nomor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomor";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatat_delivery_label["nomor"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "nomor";
//	nomorurut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "nomorurut";
	$fdata["GoodName"] = "nomorurut";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","nomorurut");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nomorurut";

		$fdata["sourceSingle"] = "nomorurut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomorurut";

	
	
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


	$tdatat_delivery_label["nomorurut"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "nomorurut";
//	t_delivery_location_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "t_delivery_location_address";
	$fdata["GoodName"] = "t_delivery_location_address";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","t_delivery_location_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_location_address";

		$fdata["sourceSingle"] = "t_delivery_location_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_location_address";

	
	
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


	$tdatat_delivery_label["t_delivery_location_address"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "t_delivery_location_address";
//	get_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "get_fl";
	$fdata["GoodName"] = "get_fl";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_label","get_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "get_fl";

		$fdata["sourceSingle"] = "get_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "get_fl";

	
	
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


	$tdatat_delivery_label["get_fl"] = $fdata;
		$tdatat_delivery_label[".searchableFields"][] = "get_fl";


$tables_data["t_delivery_label"]=&$tdatat_delivery_label;
$field_labels["t_delivery_label"] = &$fieldLabelst_delivery_label;
$fieldToolTips["t_delivery_label"] = &$fieldToolTipst_delivery_label;
$placeHolders["t_delivery_label"] = &$placeHolderst_delivery_label;
$page_titles["t_delivery_label"] = &$pageTitlest_delivery_label;


changeTextControlsToDate( "t_delivery_label" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_label"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_label"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_label()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery_id,  	t_delivery_token,  	t_delivery_no,  	t_delivery_date,  	t_delivery_type,  	t_location_id,  	t_select_table_text,  	t_delivery_to_table,  	t_delivery_to_text,  	t_delivery_address,  	t_delivery_desc,  	t_delivery_status,  	add_user,  	add_date,  	edit_user,  	edit_date,  	process_user,  	process_date,  	t_delivery_category_code,  	last_user,  	last_date,  	nomor,  	nomorurut,  	t_delivery_location_address,  	get_fl";
$proto0["m_strFrom"] = "FROM t_delivery";
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
	"m_srcTableName" => "t_delivery_label"
));

$proto6["m_sql"] = "t_delivery_id";
$proto6["m_srcTableName"] = "t_delivery_label";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_token",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto8["m_sql"] = "t_delivery_token";
$proto8["m_srcTableName"] = "t_delivery_label";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_no",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto10["m_sql"] = "t_delivery_no";
$proto10["m_srcTableName"] = "t_delivery_label";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto12["m_sql"] = "t_delivery_date";
$proto12["m_srcTableName"] = "t_delivery_label";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_type",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto14["m_sql"] = "t_delivery_type";
$proto14["m_srcTableName"] = "t_delivery_label";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_location_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto16["m_sql"] = "t_location_id";
$proto16["m_srcTableName"] = "t_delivery_label";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_select_table_text",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto18["m_sql"] = "t_select_table_text";
$proto18["m_srcTableName"] = "t_delivery_label";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_to_table",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto20["m_sql"] = "t_delivery_to_table";
$proto20["m_srcTableName"] = "t_delivery_label";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_to_text",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto22["m_sql"] = "t_delivery_to_text";
$proto22["m_srcTableName"] = "t_delivery_label";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_address",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto24["m_sql"] = "t_delivery_address";
$proto24["m_srcTableName"] = "t_delivery_label";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_desc",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto26["m_sql"] = "t_delivery_desc";
$proto26["m_srcTableName"] = "t_delivery_label";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_status",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto28["m_sql"] = "t_delivery_status";
$proto28["m_srcTableName"] = "t_delivery_label";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto30["m_sql"] = "add_user";
$proto30["m_srcTableName"] = "t_delivery_label";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto32["m_sql"] = "add_date";
$proto32["m_srcTableName"] = "t_delivery_label";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto34["m_sql"] = "edit_user";
$proto34["m_srcTableName"] = "t_delivery_label";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto36["m_sql"] = "edit_date";
$proto36["m_srcTableName"] = "t_delivery_label";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "process_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto38["m_sql"] = "process_user";
$proto38["m_srcTableName"] = "t_delivery_label";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "process_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto40["m_sql"] = "process_date";
$proto40["m_srcTableName"] = "t_delivery_label";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_category_code",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto42["m_sql"] = "t_delivery_category_code";
$proto42["m_srcTableName"] = "t_delivery_label";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto44["m_sql"] = "last_user";
$proto44["m_srcTableName"] = "t_delivery_label";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "last_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto46["m_sql"] = "last_date";
$proto46["m_srcTableName"] = "t_delivery_label";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto48["m_sql"] = "nomor";
$proto48["m_srcTableName"] = "t_delivery_label";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "nomorurut",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto50["m_sql"] = "nomorurut";
$proto50["m_srcTableName"] = "t_delivery_label";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_location_address",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto52["m_sql"] = "t_delivery_location_address";
$proto52["m_srcTableName"] = "t_delivery_label";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "get_fl",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_label"
));

$proto54["m_sql"] = "get_fl";
$proto54["m_srcTableName"] = "t_delivery_label";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "t_delivery";
$proto57["m_srcTableName"] = "t_delivery_label";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "t_delivery_id";
$proto57["m_columns"][] = "t_delivery_token";
$proto57["m_columns"][] = "t_delivery_no";
$proto57["m_columns"][] = "t_delivery_date";
$proto57["m_columns"][] = "t_delivery_type";
$proto57["m_columns"][] = "t_location_id";
$proto57["m_columns"][] = "t_select_table_text";
$proto57["m_columns"][] = "t_delivery_to_table";
$proto57["m_columns"][] = "t_delivery_to_text";
$proto57["m_columns"][] = "t_delivery_address";
$proto57["m_columns"][] = "t_delivery_desc";
$proto57["m_columns"][] = "t_delivery_status";
$proto57["m_columns"][] = "add_user";
$proto57["m_columns"][] = "add_date";
$proto57["m_columns"][] = "edit_user";
$proto57["m_columns"][] = "edit_date";
$proto57["m_columns"][] = "process_user";
$proto57["m_columns"][] = "process_date";
$proto57["m_columns"][] = "t_delivery_category_code";
$proto57["m_columns"][] = "last_user";
$proto57["m_columns"][] = "last_date";
$proto57["m_columns"][] = "nomor";
$proto57["m_columns"][] = "nomorurut";
$proto57["m_columns"][] = "t_delivery_location_address";
$proto57["m_columns"][] = "get_fl";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "t_delivery";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "t_delivery_label";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery_label";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_label = createSqlQuery_t_delivery_label();


	
				;

																									

$tdatat_delivery_label[".sqlquery"] = $queryData_t_delivery_label;



$tdatat_delivery_label[".hasEvents"] = false;

?>