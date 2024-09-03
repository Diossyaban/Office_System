<?php
$tdatasp_get_disposition_status = array();
$tdatasp_get_disposition_status[".searchableFields"] = array();
$tdatasp_get_disposition_status[".ShortName"] = "sp_get_disposition_status";
$tdatasp_get_disposition_status[".OwnerID"] = "";
$tdatasp_get_disposition_status[".OriginalTable"] = "sp_get_disposition_status";


$tdatasp_get_disposition_status[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasp_get_disposition_status[".originalPagesByType"] = $tdatasp_get_disposition_status[".pagesByType"];
$tdatasp_get_disposition_status[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasp_get_disposition_status[".originalPages"] = $tdatasp_get_disposition_status[".pages"];
$tdatasp_get_disposition_status[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasp_get_disposition_status[".originalDefaultPages"] = $tdatasp_get_disposition_status[".defaultPages"];

//	field labels
$fieldLabelssp_get_disposition_status = array();
$fieldToolTipssp_get_disposition_status = array();
$pageTitlessp_get_disposition_status = array();
$placeHolderssp_get_disposition_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssp_get_disposition_status["English"] = array();
	$fieldToolTipssp_get_disposition_status["English"] = array();
	$placeHolderssp_get_disposition_status["English"] = array();
	$pageTitlessp_get_disposition_status["English"] = array();
	$fieldLabelssp_get_disposition_status["English"]["stat_id"] = "Stat Id";
	$fieldToolTipssp_get_disposition_status["English"]["stat_id"] = "";
	$placeHolderssp_get_disposition_status["English"]["stat_id"] = "";
	$fieldLabelssp_get_disposition_status["English"]["stat"] = "Stat";
	$fieldToolTipssp_get_disposition_status["English"]["stat"] = "";
	$placeHolderssp_get_disposition_status["English"]["stat"] = "";
	if (count($fieldToolTipssp_get_disposition_status["English"]))
		$tdatasp_get_disposition_status[".isUseToolTips"] = true;
}


	$tdatasp_get_disposition_status[".NCSearch"] = true;



$tdatasp_get_disposition_status[".shortTableName"] = "sp_get_disposition_status";
$tdatasp_get_disposition_status[".nSecOptions"] = 0;

$tdatasp_get_disposition_status[".mainTableOwnerID"] = "";
$tdatasp_get_disposition_status[".entityType"] = 6;
$tdatasp_get_disposition_status[".connId"] = "u736239518tsundbat154412412";


$tdatasp_get_disposition_status[".strOriginalTableName"] = "sp_get_disposition_status";

	



$tdatasp_get_disposition_status[".showAddInPopup"] = false;

$tdatasp_get_disposition_status[".showEditInPopup"] = false;

$tdatasp_get_disposition_status[".showViewInPopup"] = false;

$tdatasp_get_disposition_status[".listAjax"] = false;
//	temporary
//$tdatasp_get_disposition_status[".listAjax"] = false;

	$tdatasp_get_disposition_status[".audit"] = false;

	$tdatasp_get_disposition_status[".locking"] = false;


$pages = $tdatasp_get_disposition_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasp_get_disposition_status[".edit"] = true;
	$tdatasp_get_disposition_status[".afterEditAction"] = 1;
	$tdatasp_get_disposition_status[".closePopupAfterEdit"] = 1;
	$tdatasp_get_disposition_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasp_get_disposition_status[".add"] = true;
$tdatasp_get_disposition_status[".afterAddAction"] = 1;
$tdatasp_get_disposition_status[".closePopupAfterAdd"] = 1;
$tdatasp_get_disposition_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasp_get_disposition_status[".list"] = true;
}



$tdatasp_get_disposition_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasp_get_disposition_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasp_get_disposition_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasp_get_disposition_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasp_get_disposition_status[".printFriendly"] = true;
}



$tdatasp_get_disposition_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasp_get_disposition_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasp_get_disposition_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasp_get_disposition_status[".isUseAjaxSuggest"] = false;



																																																			

$tdatasp_get_disposition_status[".ajaxCodeSnippetAdded"] = false;

$tdatasp_get_disposition_status[".buttonsAdded"] = false;

$tdatasp_get_disposition_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasp_get_disposition_status[".isUseTimeForSearch"] = false;


$tdatasp_get_disposition_status[".badgeColor"] = "3CB371";


$tdatasp_get_disposition_status[".allSearchFields"] = array();
$tdatasp_get_disposition_status[".filterFields"] = array();
$tdatasp_get_disposition_status[".requiredSearchFields"] = array();

$tdatasp_get_disposition_status[".googleLikeFields"] = array();
$tdatasp_get_disposition_status[".googleLikeFields"][] = "stat_id";
$tdatasp_get_disposition_status[".googleLikeFields"][] = "stat";




$tdatasp_get_disposition_status[".printerPageOrientation"] = 0;
$tdatasp_get_disposition_status[".nPrinterPageScale"] = 100;

$tdatasp_get_disposition_status[".nPrinterSplitRecords"] = 40;

$tdatasp_get_disposition_status[".geocodingEnabled"] = false;










$tdatasp_get_disposition_status[".pageSize"] = 20;

$tdatasp_get_disposition_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasp_get_disposition_status[".strOrderBy"] = $tstrOrderBy;

$tdatasp_get_disposition_status[".orderindexes"] = array();


$tdatasp_get_disposition_status[".sqlHead"] = "";
$tdatasp_get_disposition_status[".sqlFrom"] = "";
$tdatasp_get_disposition_status[".sqlWhereExpr"] = "";
$tdatasp_get_disposition_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasp_get_disposition_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasp_get_disposition_status[".arrGroupsPerPage"] = $arrGPP;

$tdatasp_get_disposition_status[".highlightSearchResults"] = true;

$tableKeyssp_get_disposition_status = array();
$tdatasp_get_disposition_status[".Keys"] = $tableKeyssp_get_disposition_status;


$tdatasp_get_disposition_status[".hideMobileList"] = array();




//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_get_disposition_status","stat_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "stat_id";

	
		$fdata["FullName"] = "stat_id";

	
	
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


	$tdatasp_get_disposition_status["stat_id"] = $fdata;
		$tdatasp_get_disposition_status[".searchableFields"][] = "stat_id";
//	stat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stat";
	$fdata["GoodName"] = "stat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_get_disposition_status","stat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "stat";

	
		$fdata["FullName"] = "stat";

	
	
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


	$tdatasp_get_disposition_status["stat"] = $fdata;
		$tdatasp_get_disposition_status[".searchableFields"][] = "stat";


$tables_data["sp_get_disposition_status"]=&$tdatasp_get_disposition_status;
$field_labels["sp_get_disposition_status"] = &$fieldLabelssp_get_disposition_status;
$fieldToolTips["sp_get_disposition_status"] = &$fieldToolTipssp_get_disposition_status;
$placeHolders["sp_get_disposition_status"] = &$placeHolderssp_get_disposition_status;
$page_titles["sp_get_disposition_status"] = &$pageTitlessp_get_disposition_status;


changeTextControlsToDate( "sp_get_disposition_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sp_get_disposition_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sp_get_disposition_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/sp_get_disposition_status_ops.php" ) );



	
				;

		

$tdatasp_get_disposition_status[".sqlquery"] = $queryData_sp_get_disposition_status;



$tdatasp_get_disposition_status[".hasEvents"] = false;

?>