<?php
$tdatareport_delivery_history_view = array();
$tdatareport_delivery_history_view[".searchableFields"] = array();
$tdatareport_delivery_history_view[".ShortName"] = "report_delivery_history_view";
$tdatareport_delivery_history_view[".OwnerID"] = "";
$tdatareport_delivery_history_view[".OriginalTable"] = "view_delivery_history";


$tdatareport_delivery_history_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatareport_delivery_history_view[".originalPagesByType"] = $tdatareport_delivery_history_view[".pagesByType"];
$tdatareport_delivery_history_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatareport_delivery_history_view[".originalPages"] = $tdatareport_delivery_history_view[".pages"];
$tdatareport_delivery_history_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatareport_delivery_history_view[".originalDefaultPages"] = $tdatareport_delivery_history_view[".defaultPages"];

//	field labels
$fieldLabelsreport_delivery_history_view = array();
$fieldToolTipsreport_delivery_history_view = array();
$pageTitlesreport_delivery_history_view = array();
$placeHoldersreport_delivery_history_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsreport_delivery_history_view["English"] = array();
	$fieldToolTipsreport_delivery_history_view["English"] = array();
	$placeHoldersreport_delivery_history_view["English"] = array();
	$pageTitlesreport_delivery_history_view["English"] = array();
	$fieldLabelsreport_delivery_history_view["English"]["dari"] = "From";
	$fieldToolTipsreport_delivery_history_view["English"]["dari"] = "";
	$placeHoldersreport_delivery_history_view["English"]["dari"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["daridate"] = "From date";
	$fieldToolTipsreport_delivery_history_view["English"]["daridate"] = "";
	$placeHoldersreport_delivery_history_view["English"]["daridate"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["kepada"] = "To ";
	$fieldToolTipsreport_delivery_history_view["English"]["kepada"] = "";
	$placeHoldersreport_delivery_history_view["English"]["kepada"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["kepadadate"] = "To Date";
	$fieldToolTipsreport_delivery_history_view["English"]["kepadadate"] = "";
	$placeHoldersreport_delivery_history_view["English"]["kepadadate"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["KODE"] = "Description";
	$fieldToolTipsreport_delivery_history_view["English"]["KODE"] = "";
	$placeHoldersreport_delivery_history_view["English"]["KODE"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["t_delivery_no"] = "No";
	$fieldToolTipsreport_delivery_history_view["English"]["t_delivery_no"] = "";
	$placeHoldersreport_delivery_history_view["English"]["t_delivery_no"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["t_delivery_date"] = "Outmail date";
	$fieldToolTipsreport_delivery_history_view["English"]["t_delivery_date"] = "";
	$placeHoldersreport_delivery_history_view["English"]["t_delivery_date"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["status"] = "Outmail status";
	$fieldToolTipsreport_delivery_history_view["English"]["status"] = "";
	$placeHoldersreport_delivery_history_view["English"]["status"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["add_user"] = "Add User";
	$fieldToolTipsreport_delivery_history_view["English"]["add_user"] = "";
	$placeHoldersreport_delivery_history_view["English"]["add_user"] = "";
	$fieldLabelsreport_delivery_history_view["English"]["add_date"] = "Add Date";
	$fieldToolTipsreport_delivery_history_view["English"]["add_date"] = "";
	$placeHoldersreport_delivery_history_view["English"]["add_date"] = "";
	if (count($fieldToolTipsreport_delivery_history_view["English"]))
		$tdatareport_delivery_history_view[".isUseToolTips"] = true;
}


	$tdatareport_delivery_history_view[".NCSearch"] = true;



$tdatareport_delivery_history_view[".shortTableName"] = "report_delivery_history_view";
$tdatareport_delivery_history_view[".nSecOptions"] = 0;

$tdatareport_delivery_history_view[".mainTableOwnerID"] = "";
$tdatareport_delivery_history_view[".entityType"] = 1;
$tdatareport_delivery_history_view[".connId"] = "u736239518tsundbat154412412";


$tdatareport_delivery_history_view[".strOriginalTableName"] = "view_delivery_history";

	



$tdatareport_delivery_history_view[".showAddInPopup"] = false;

$tdatareport_delivery_history_view[".showEditInPopup"] = false;

$tdatareport_delivery_history_view[".showViewInPopup"] = false;

$tdatareport_delivery_history_view[".listAjax"] = false;
//	temporary
//$tdatareport_delivery_history_view[".listAjax"] = false;

	$tdatareport_delivery_history_view[".audit"] = false;

	$tdatareport_delivery_history_view[".locking"] = false;


$pages = $tdatareport_delivery_history_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatareport_delivery_history_view[".edit"] = true;
	$tdatareport_delivery_history_view[".afterEditAction"] = 1;
	$tdatareport_delivery_history_view[".closePopupAfterEdit"] = 1;
	$tdatareport_delivery_history_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatareport_delivery_history_view[".add"] = true;
$tdatareport_delivery_history_view[".afterAddAction"] = 1;
$tdatareport_delivery_history_view[".closePopupAfterAdd"] = 1;
$tdatareport_delivery_history_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatareport_delivery_history_view[".list"] = true;
}



$tdatareport_delivery_history_view[".strSortControlSettingsJSON"] = "";

$tdatareport_delivery_history_view[".strClickActionJSON"] = "{\"fields\":{\"KODE\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"add_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"add_user\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"dari\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"daridate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kepada\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"kepadadate\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"status\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"t_delivery_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"t_delivery_no\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"url\",\"table\":null,\"url\":\"\"}}},\"row\":{\"action\":\"noaction\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"url\",\"table\":null,\"url\":\"t_delivery_view.php\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatareport_delivery_history_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatareport_delivery_history_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatareport_delivery_history_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatareport_delivery_history_view[".printFriendly"] = true;
}



$tdatareport_delivery_history_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatareport_delivery_history_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatareport_delivery_history_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatareport_delivery_history_view[".isUseAjaxSuggest"] = true;



																																																			

$tdatareport_delivery_history_view[".ajaxCodeSnippetAdded"] = false;

$tdatareport_delivery_history_view[".buttonsAdded"] = false;

$tdatareport_delivery_history_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatareport_delivery_history_view[".isUseTimeForSearch"] = false;


$tdatareport_delivery_history_view[".badgeColor"] = "778899";


$tdatareport_delivery_history_view[".allSearchFields"] = array();
$tdatareport_delivery_history_view[".filterFields"] = array();
$tdatareport_delivery_history_view[".requiredSearchFields"] = array();

$tdatareport_delivery_history_view[".googleLikeFields"] = array();
$tdatareport_delivery_history_view[".googleLikeFields"][] = "dari";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "daridate";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "kepada";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "kepadadate";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "KODE";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "t_delivery_no";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "t_delivery_date";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "status";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "add_user";
$tdatareport_delivery_history_view[".googleLikeFields"][] = "add_date";



$tdatareport_delivery_history_view[".tableType"] = "list";

$tdatareport_delivery_history_view[".printerPageOrientation"] = 0;
$tdatareport_delivery_history_view[".nPrinterPageScale"] = 100;

$tdatareport_delivery_history_view[".nPrinterSplitRecords"] = 40;

$tdatareport_delivery_history_view[".geocodingEnabled"] = false;




$tdatareport_delivery_history_view[".isDisplayLoading"] = true;



$tdatareport_delivery_history_view[".noRecordsFirstPage"] = true;



$tdatareport_delivery_history_view[".pageSize"] = 20;

$tdatareport_delivery_history_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatareport_delivery_history_view[".strOrderBy"] = $tstrOrderBy;

$tdatareport_delivery_history_view[".orderindexes"] = array();


$tdatareport_delivery_history_view[".sqlHead"] = "SELECT view_delivery_history.dari,  view_delivery_history.daridate,  view_delivery_history.kepada,  view_delivery_history.kepadadate,  view_delivery_history.KODE,  t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  m_status.status,  t_delivery.add_user,  t_delivery.add_date";
$tdatareport_delivery_history_view[".sqlFrom"] = "FROM view_delivery_history  INNER JOIN t_delivery ON view_delivery_history.nomor = t_delivery.t_delivery_id  INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id";
$tdatareport_delivery_history_view[".sqlWhereExpr"] = "t_delivery.add_user = ':session.UserID' OR view_delivery_history.kepada = ':session.UserID' OR view_delivery_history.dari=':session.UserID'";
$tdatareport_delivery_history_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatareport_delivery_history_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatareport_delivery_history_view[".arrGroupsPerPage"] = $arrGPP;

$tdatareport_delivery_history_view[".highlightSearchResults"] = true;

$tableKeysreport_delivery_history_view = array();
$tdatareport_delivery_history_view[".Keys"] = $tableKeysreport_delivery_history_view;


$tdatareport_delivery_history_view[".hideMobileList"] = array();




//	dari
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "dari";
	$fdata["GoodName"] = "dari";
	$fdata["ownerTable"] = "view_delivery_history";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","dari");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dari";

		$fdata["sourceSingle"] = "dari";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "view_delivery_history.dari";

	
	
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


	$tdatareport_delivery_history_view["dari"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "dari";
//	daridate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "daridate";
	$fdata["GoodName"] = "daridate";
	$fdata["ownerTable"] = "view_delivery_history";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","daridate");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "daridate";

		$fdata["sourceSingle"] = "daridate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "view_delivery_history.daridate";

	
	
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


	$tdatareport_delivery_history_view["daridate"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "daridate";
//	kepada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "kepada";
	$fdata["GoodName"] = "kepada";
	$fdata["ownerTable"] = "view_delivery_history";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","kepada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "kepada";

		$fdata["sourceSingle"] = "kepada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "view_delivery_history.kepada";

	
	
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


	$tdatareport_delivery_history_view["kepada"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "kepada";
//	kepadadate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kepadadate";
	$fdata["GoodName"] = "kepadadate";
	$fdata["ownerTable"] = "view_delivery_history";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","kepadadate");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "kepadadate";

		$fdata["sourceSingle"] = "kepadadate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "view_delivery_history.kepadadate";

	
	
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=19";

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


	$tdatareport_delivery_history_view["kepadadate"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "kepadadate";
//	KODE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "KODE";
	$fdata["GoodName"] = "KODE";
	$fdata["ownerTable"] = "view_delivery_history";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","KODE");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "KODE";

		$fdata["sourceSingle"] = "KODE";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "view_delivery_history.KODE";

	
	
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
			$edata["EditParams"].= " maxlength=93";

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


	$tdatareport_delivery_history_view["KODE"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "KODE";
//	t_delivery_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_delivery_no";
	$fdata["GoodName"] = "t_delivery_no";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","t_delivery_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_no";

	
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


	$tdatareport_delivery_history_view["t_delivery_no"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "t_delivery_no";
//	t_delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_delivery_date";
	$fdata["GoodName"] = "t_delivery_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","t_delivery_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_delivery_date";

	
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

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
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


	$tdatareport_delivery_history_view["t_delivery_date"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "t_delivery_date";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","status");
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


	$tdatareport_delivery_history_view["status"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

	
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


	$tdatareport_delivery_history_view["add_user"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("report_delivery_history_view","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.add_date";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatareport_delivery_history_view["add_date"] = $fdata;
		$tdatareport_delivery_history_view[".searchableFields"][] = "add_date";


$tables_data["report_delivery_history_view"]=&$tdatareport_delivery_history_view;
$field_labels["report_delivery_history_view"] = &$fieldLabelsreport_delivery_history_view;
$fieldToolTips["report_delivery_history_view"] = &$fieldToolTipsreport_delivery_history_view;
$placeHolders["report_delivery_history_view"] = &$placeHoldersreport_delivery_history_view;
$page_titles["report_delivery_history_view"] = &$pageTitlesreport_delivery_history_view;


changeTextControlsToDate( "report_delivery_history_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["report_delivery_history_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["report_delivery_history_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_report_delivery_history_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "view_delivery_history.dari,  view_delivery_history.daridate,  view_delivery_history.kepada,  view_delivery_history.kepadadate,  view_delivery_history.KODE,  t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  m_status.status,  t_delivery.add_user,  t_delivery.add_date";
$proto0["m_strFrom"] = "FROM view_delivery_history  INNER JOIN t_delivery ON view_delivery_history.nomor = t_delivery.t_delivery_id  INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id";
$proto0["m_strWhere"] = "t_delivery.add_user = ':session.UserID' OR view_delivery_history.kepada = ':session.UserID' OR view_delivery_history.dari=':session.UserID'";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_delivery.add_user = ':session.UserID' OR view_delivery_history.kepada = ':session.UserID' OR view_delivery_history.dari=':session.UserID'";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "t_delivery.add_user = ':session.UserID' OR view_delivery_history.kepada = ':session.UserID' OR view_delivery_history.dari=':session.UserID'"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "t_delivery.add_user = ':session.UserID'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= ':session.UserID'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "view_delivery_history.kepada = ':session.UserID'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "kepada",
	"m_strTable" => "view_delivery_history",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "= ':session.UserID'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
						$proto8=array();
$proto8["m_sql"] = "view_delivery_history.dari=':session.UserID'";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dari",
	"m_strTable" => "view_delivery_history",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "=':session.UserID'";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "dari",
	"m_strTable" => "view_delivery_history",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto12["m_sql"] = "view_delivery_history.dari";
$proto12["m_srcTableName"] = "report_delivery_history_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "daridate",
	"m_strTable" => "view_delivery_history",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto14["m_sql"] = "view_delivery_history.daridate";
$proto14["m_srcTableName"] = "report_delivery_history_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "kepada",
	"m_strTable" => "view_delivery_history",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto16["m_sql"] = "view_delivery_history.kepada";
$proto16["m_srcTableName"] = "report_delivery_history_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "kepadadate",
	"m_strTable" => "view_delivery_history",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto18["m_sql"] = "view_delivery_history.kepadadate";
$proto18["m_srcTableName"] = "report_delivery_history_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "KODE",
	"m_strTable" => "view_delivery_history",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto20["m_sql"] = "view_delivery_history.KODE";
$proto20["m_srcTableName"] = "report_delivery_history_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_no",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto22["m_sql"] = "t_delivery.t_delivery_no";
$proto22["m_srcTableName"] = "report_delivery_history_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto24["m_sql"] = "t_delivery.t_delivery_date";
$proto24["m_srcTableName"] = "report_delivery_history_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "m_status",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto26["m_sql"] = "m_status.status";
$proto26["m_srcTableName"] = "report_delivery_history_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto28["m_sql"] = "t_delivery.add_user";
$proto28["m_srcTableName"] = "report_delivery_history_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto30["m_sql"] = "t_delivery.add_date";
$proto30["m_srcTableName"] = "report_delivery_history_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "view_delivery_history";
$proto33["m_srcTableName"] = "report_delivery_history_view";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "nomor";
$proto33["m_columns"][] = "dari";
$proto33["m_columns"][] = "daridate";
$proto33["m_columns"][] = "kepada";
$proto33["m_columns"][] = "kepadadate";
$proto33["m_columns"][] = "KODE";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "view_delivery_history";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "report_delivery_history_view";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_INNERJOIN";
			$proto37=array();
$proto37["m_strName"] = "t_delivery";
$proto37["m_srcTableName"] = "report_delivery_history_view";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "t_delivery_id";
$proto37["m_columns"][] = "t_delivery_token";
$proto37["m_columns"][] = "t_delivery_no";
$proto37["m_columns"][] = "t_delivery_date";
$proto37["m_columns"][] = "t_delivery_type";
$proto37["m_columns"][] = "t_location_id";
$proto37["m_columns"][] = "t_select_table_text";
$proto37["m_columns"][] = "t_delivery_to_table";
$proto37["m_columns"][] = "t_delivery_to_text";
$proto37["m_columns"][] = "t_delivery_address";
$proto37["m_columns"][] = "t_delivery_desc";
$proto37["m_columns"][] = "t_delivery_status";
$proto37["m_columns"][] = "add_user";
$proto37["m_columns"][] = "add_date";
$proto37["m_columns"][] = "edit_user";
$proto37["m_columns"][] = "edit_date";
$proto37["m_columns"][] = "process_user";
$proto37["m_columns"][] = "process_date";
$proto37["m_columns"][] = "t_delivery_category_code";
$proto37["m_columns"][] = "last_user";
$proto37["m_columns"][] = "last_date";
$proto37["m_columns"][] = "nomor";
$proto37["m_columns"][] = "nomorurut";
$proto37["m_columns"][] = "t_delivery_location_address";
$proto37["m_columns"][] = "get_fl";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "INNER JOIN t_delivery ON view_delivery_history.nomor = t_delivery.t_delivery_id";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "report_delivery_history_view";
$proto38=array();
$proto38["m_sql"] = "t_delivery.t_delivery_id = view_delivery_history.nomor";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= view_delivery_history.nomor";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
												$proto40=array();
$proto40["m_link"] = "SQLL_INNERJOIN";
			$proto41=array();
$proto41["m_strName"] = "m_status";
$proto41["m_srcTableName"] = "report_delivery_history_view";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "m_status_id";
$proto41["m_columns"][] = "status";
$proto41["m_columns"][] = "m_status_desc";
$proto41["m_columns"][] = "m_status_basic_flag";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "report_delivery_history_view";
$proto42=array();
$proto42["m_sql"] = "m_status.m_status_id = t_delivery.t_delivery_status";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "report_delivery_history_view"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= t_delivery.t_delivery_status";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="report_delivery_history_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_report_delivery_history_view = createSqlQuery_report_delivery_history_view();


	
				;

										

$tdatareport_delivery_history_view[".sqlquery"] = $queryData_report_delivery_history_view;



$tdatareport_delivery_history_view[".hasEvents"] = false;

?>