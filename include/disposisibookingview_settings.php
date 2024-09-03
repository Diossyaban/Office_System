<?php
$tdatadisposisibookingview = array();
$tdatadisposisibookingview[".searchableFields"] = array();
$tdatadisposisibookingview[".ShortName"] = "disposisibookingview";
$tdatadisposisibookingview[".OwnerID"] = "";
$tdatadisposisibookingview[".OriginalTable"] = "disposisiBookingView";


$tdatadisposisibookingview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatadisposisibookingview[".originalPagesByType"] = $tdatadisposisibookingview[".pagesByType"];
$tdatadisposisibookingview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatadisposisibookingview[".originalPages"] = $tdatadisposisibookingview[".pages"];
$tdatadisposisibookingview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatadisposisibookingview[".originalDefaultPages"] = $tdatadisposisibookingview[".defaultPages"];

//	field labels
$fieldLabelsdisposisibookingview = array();
$fieldToolTipsdisposisibookingview = array();
$pageTitlesdisposisibookingview = array();
$placeHoldersdisposisibookingview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdisposisibookingview["English"] = array();
	$fieldToolTipsdisposisibookingview["English"] = array();
	$placeHoldersdisposisibookingview["English"] = array();
	$pageTitlesdisposisibookingview["English"] = array();
	$fieldLabelsdisposisibookingview["English"]["stat_id"] = "Stat Id";
	$fieldToolTipsdisposisibookingview["English"]["stat_id"] = "";
	$placeHoldersdisposisibookingview["English"]["stat_id"] = "";
	$fieldLabelsdisposisibookingview["English"]["stat"] = "Stat";
	$fieldToolTipsdisposisibookingview["English"]["stat"] = "";
	$placeHoldersdisposisibookingview["English"]["stat"] = "";
	if (count($fieldToolTipsdisposisibookingview["English"]))
		$tdatadisposisibookingview[".isUseToolTips"] = true;
}


	$tdatadisposisibookingview[".NCSearch"] = true;



$tdatadisposisibookingview[".shortTableName"] = "disposisibookingview";
$tdatadisposisibookingview[".nSecOptions"] = 0;

$tdatadisposisibookingview[".mainTableOwnerID"] = "";
$tdatadisposisibookingview[".entityType"] = 6;
$tdatadisposisibookingview[".connId"] = "u736239518tsundbat154412412";


$tdatadisposisibookingview[".strOriginalTableName"] = "disposisiBookingView";

	



$tdatadisposisibookingview[".showAddInPopup"] = false;

$tdatadisposisibookingview[".showEditInPopup"] = false;

$tdatadisposisibookingview[".showViewInPopup"] = false;

$tdatadisposisibookingview[".listAjax"] = false;
//	temporary
//$tdatadisposisibookingview[".listAjax"] = false;

	$tdatadisposisibookingview[".audit"] = false;

	$tdatadisposisibookingview[".locking"] = false;


$pages = $tdatadisposisibookingview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatadisposisibookingview[".edit"] = true;
	$tdatadisposisibookingview[".afterEditAction"] = 1;
	$tdatadisposisibookingview[".closePopupAfterEdit"] = 1;
	$tdatadisposisibookingview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatadisposisibookingview[".add"] = true;
$tdatadisposisibookingview[".afterAddAction"] = 1;
$tdatadisposisibookingview[".closePopupAfterAdd"] = 1;
$tdatadisposisibookingview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatadisposisibookingview[".list"] = true;
}



$tdatadisposisibookingview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatadisposisibookingview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatadisposisibookingview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatadisposisibookingview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatadisposisibookingview[".printFriendly"] = true;
}



$tdatadisposisibookingview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatadisposisibookingview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatadisposisibookingview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatadisposisibookingview[".isUseAjaxSuggest"] = false;



																																																			

$tdatadisposisibookingview[".ajaxCodeSnippetAdded"] = false;

$tdatadisposisibookingview[".buttonsAdded"] = false;

$tdatadisposisibookingview[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadisposisibookingview[".isUseTimeForSearch"] = false;


$tdatadisposisibookingview[".badgeColor"] = "CD5C5C";


$tdatadisposisibookingview[".allSearchFields"] = array();
$tdatadisposisibookingview[".filterFields"] = array();
$tdatadisposisibookingview[".requiredSearchFields"] = array();

$tdatadisposisibookingview[".googleLikeFields"] = array();
$tdatadisposisibookingview[".googleLikeFields"][] = "stat_id";
$tdatadisposisibookingview[".googleLikeFields"][] = "stat";




$tdatadisposisibookingview[".printerPageOrientation"] = 0;
$tdatadisposisibookingview[".nPrinterPageScale"] = 100;

$tdatadisposisibookingview[".nPrinterSplitRecords"] = 40;

$tdatadisposisibookingview[".geocodingEnabled"] = false;










$tdatadisposisibookingview[".pageSize"] = 20;

$tdatadisposisibookingview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatadisposisibookingview[".strOrderBy"] = $tstrOrderBy;

$tdatadisposisibookingview[".orderindexes"] = array();


$tdatadisposisibookingview[".sqlHead"] = "";
$tdatadisposisibookingview[".sqlFrom"] = "";
$tdatadisposisibookingview[".sqlWhereExpr"] = "";
$tdatadisposisibookingview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadisposisibookingview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadisposisibookingview[".arrGroupsPerPage"] = $arrGPP;

$tdatadisposisibookingview[".highlightSearchResults"] = true;

$tableKeysdisposisibookingview = array();
$tdatadisposisibookingview[".Keys"] = $tableKeysdisposisibookingview;


$tdatadisposisibookingview[".hideMobileList"] = array();




//	stat_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "stat_id";
	$fdata["GoodName"] = "stat_id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("disposisiBookingView","stat_id");
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


	$tdatadisposisibookingview["stat_id"] = $fdata;
		$tdatadisposisibookingview[".searchableFields"][] = "stat_id";
//	stat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "stat";
	$fdata["GoodName"] = "stat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("disposisiBookingView","stat");
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


	$tdatadisposisibookingview["stat"] = $fdata;
		$tdatadisposisibookingview[".searchableFields"][] = "stat";


$tables_data["disposisiBookingView"]=&$tdatadisposisibookingview;
$field_labels["disposisiBookingView"] = &$fieldLabelsdisposisibookingview;
$fieldToolTips["disposisiBookingView"] = &$fieldToolTipsdisposisibookingview;
$placeHolders["disposisiBookingView"] = &$placeHoldersdisposisibookingview;
$page_titles["disposisiBookingView"] = &$pageTitlesdisposisibookingview;


changeTextControlsToDate( "disposisiBookingView" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["disposisiBookingView"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["disposisiBookingView"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/disposisibookingview_ops.php" ) );



	
				;

		

$tdatadisposisibookingview[".sqlquery"] = $queryData_disposisibookingview;



$tdatadisposisibookingview[".hasEvents"] = false;

?>