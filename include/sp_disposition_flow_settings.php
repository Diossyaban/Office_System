<?php
$tdatasp_disposition_flow = array();
$tdatasp_disposition_flow[".searchableFields"] = array();
$tdatasp_disposition_flow[".ShortName"] = "sp_disposition_flow";
$tdatasp_disposition_flow[".OwnerID"] = "";
$tdatasp_disposition_flow[".OriginalTable"] = "sp_disposition_flow";


$tdatasp_disposition_flow[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasp_disposition_flow[".originalPagesByType"] = $tdatasp_disposition_flow[".pagesByType"];
$tdatasp_disposition_flow[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasp_disposition_flow[".originalPages"] = $tdatasp_disposition_flow[".pages"];
$tdatasp_disposition_flow[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasp_disposition_flow[".originalDefaultPages"] = $tdatasp_disposition_flow[".defaultPages"];

//	field labels
$fieldLabelssp_disposition_flow = array();
$fieldToolTipssp_disposition_flow = array();
$pageTitlessp_disposition_flow = array();
$placeHolderssp_disposition_flow = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssp_disposition_flow["English"] = array();
	$fieldToolTipssp_disposition_flow["English"] = array();
	$placeHolderssp_disposition_flow["English"] = array();
	$pageTitlessp_disposition_flow["English"] = array();
	$fieldLabelssp_disposition_flow["English"]["kodeuser"] = "Kodeuser";
	$fieldToolTipssp_disposition_flow["English"]["kodeuser"] = "";
	$placeHolderssp_disposition_flow["English"]["kodeuser"] = "";
	$fieldLabelssp_disposition_flow["English"]["nama"] = "Nama";
	$fieldToolTipssp_disposition_flow["English"]["nama"] = "";
	$placeHolderssp_disposition_flow["English"]["nama"] = "";
	if (count($fieldToolTipssp_disposition_flow["English"]))
		$tdatasp_disposition_flow[".isUseToolTips"] = true;
}


	$tdatasp_disposition_flow[".NCSearch"] = true;



$tdatasp_disposition_flow[".shortTableName"] = "sp_disposition_flow";
$tdatasp_disposition_flow[".nSecOptions"] = 0;

$tdatasp_disposition_flow[".mainTableOwnerID"] = "";
$tdatasp_disposition_flow[".entityType"] = 6;
$tdatasp_disposition_flow[".connId"] = "u736239518tsundbat154412412";


$tdatasp_disposition_flow[".strOriginalTableName"] = "sp_disposition_flow";

	



$tdatasp_disposition_flow[".showAddInPopup"] = false;

$tdatasp_disposition_flow[".showEditInPopup"] = false;

$tdatasp_disposition_flow[".showViewInPopup"] = false;

$tdatasp_disposition_flow[".listAjax"] = false;
//	temporary
//$tdatasp_disposition_flow[".listAjax"] = false;

	$tdatasp_disposition_flow[".audit"] = false;

	$tdatasp_disposition_flow[".locking"] = false;


$pages = $tdatasp_disposition_flow[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasp_disposition_flow[".edit"] = true;
	$tdatasp_disposition_flow[".afterEditAction"] = 1;
	$tdatasp_disposition_flow[".closePopupAfterEdit"] = 1;
	$tdatasp_disposition_flow[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasp_disposition_flow[".add"] = true;
$tdatasp_disposition_flow[".afterAddAction"] = 1;
$tdatasp_disposition_flow[".closePopupAfterAdd"] = 1;
$tdatasp_disposition_flow[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasp_disposition_flow[".list"] = true;
}



$tdatasp_disposition_flow[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasp_disposition_flow[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasp_disposition_flow[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasp_disposition_flow[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasp_disposition_flow[".printFriendly"] = true;
}



$tdatasp_disposition_flow[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasp_disposition_flow[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasp_disposition_flow[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasp_disposition_flow[".isUseAjaxSuggest"] = false;



																																																			

$tdatasp_disposition_flow[".ajaxCodeSnippetAdded"] = false;

$tdatasp_disposition_flow[".buttonsAdded"] = false;

$tdatasp_disposition_flow[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasp_disposition_flow[".isUseTimeForSearch"] = false;


$tdatasp_disposition_flow[".badgeColor"] = "2F4F4F";


$tdatasp_disposition_flow[".allSearchFields"] = array();
$tdatasp_disposition_flow[".filterFields"] = array();
$tdatasp_disposition_flow[".requiredSearchFields"] = array();

$tdatasp_disposition_flow[".googleLikeFields"] = array();
$tdatasp_disposition_flow[".googleLikeFields"][] = "kodeuser";
$tdatasp_disposition_flow[".googleLikeFields"][] = "nama";




$tdatasp_disposition_flow[".printerPageOrientation"] = 0;
$tdatasp_disposition_flow[".nPrinterPageScale"] = 100;

$tdatasp_disposition_flow[".nPrinterSplitRecords"] = 40;

$tdatasp_disposition_flow[".geocodingEnabled"] = false;










$tdatasp_disposition_flow[".pageSize"] = 20;

$tdatasp_disposition_flow[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasp_disposition_flow[".strOrderBy"] = $tstrOrderBy;

$tdatasp_disposition_flow[".orderindexes"] = array();


$tdatasp_disposition_flow[".sqlHead"] = "";
$tdatasp_disposition_flow[".sqlFrom"] = "";
$tdatasp_disposition_flow[".sqlWhereExpr"] = "";
$tdatasp_disposition_flow[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasp_disposition_flow[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasp_disposition_flow[".arrGroupsPerPage"] = $arrGPP;

$tdatasp_disposition_flow[".highlightSearchResults"] = true;

$tableKeyssp_disposition_flow = array();
$tdatasp_disposition_flow[".Keys"] = $tableKeyssp_disposition_flow;


$tdatasp_disposition_flow[".hideMobileList"] = array();




//	kodeuser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "kodeuser";
	$fdata["GoodName"] = "kodeuser";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_disposition_flow","kodeuser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "kodeuser";

	
		$fdata["FullName"] = "kodeuser";

	
	
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


	$tdatasp_disposition_flow["kodeuser"] = $fdata;
		$tdatasp_disposition_flow[".searchableFields"][] = "kodeuser";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_disposition_flow","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

	
		$fdata["FullName"] = "nama";

	
	
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


	$tdatasp_disposition_flow["nama"] = $fdata;
		$tdatasp_disposition_flow[".searchableFields"][] = "nama";


$tables_data["sp_disposition_flow"]=&$tdatasp_disposition_flow;
$field_labels["sp_disposition_flow"] = &$fieldLabelssp_disposition_flow;
$fieldToolTips["sp_disposition_flow"] = &$fieldToolTipssp_disposition_flow;
$placeHolders["sp_disposition_flow"] = &$placeHolderssp_disposition_flow;
$page_titles["sp_disposition_flow"] = &$pageTitlessp_disposition_flow;


changeTextControlsToDate( "sp_disposition_flow" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sp_disposition_flow"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sp_disposition_flow"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/sp_disposition_flow_ops.php" ) );



	
				;

		

$tdatasp_disposition_flow[".sqlquery"] = $queryData_sp_disposition_flow;



$tdatasp_disposition_flow[".hasEvents"] = false;

?>