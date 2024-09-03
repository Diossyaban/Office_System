<?php
$tdataview = array();
$tdataview[".searchableFields"] = array();
$tdataview[".ShortName"] = "view";
$tdataview[".OwnerID"] = "";
$tdataview[".OriginalTable"] = "View";


$tdataview[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataview[".originalPagesByType"] = $tdataview[".pagesByType"];
$tdataview[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataview[".originalPages"] = $tdataview[".pages"];
$tdataview[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataview[".originalDefaultPages"] = $tdataview[".defaultPages"];

//	field labels
$fieldLabelsview = array();
$fieldToolTipsview = array();
$pageTitlesview = array();
$placeHoldersview = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsview["English"] = array();
	$fieldToolTipsview["English"] = array();
	$placeHoldersview["English"] = array();
	$pageTitlesview["English"] = array();
	$fieldLabelsview["English"]["t_employee_nik"] = "Nik";
	$fieldToolTipsview["English"]["t_employee_nik"] = "";
	$placeHoldersview["English"]["t_employee_nik"] = "";
	$fieldLabelsview["English"]["t_employee_name"] = "Name";
	$fieldToolTipsview["English"]["t_employee_name"] = "";
	$placeHoldersview["English"]["t_employee_name"] = "";
	$fieldLabelsview["English"]["t_employee_agama"] = "T Employee Agama";
	$fieldToolTipsview["English"]["t_employee_agama"] = "";
	$placeHoldersview["English"]["t_employee_agama"] = "";
	$fieldLabelsview["English"]["t_employee_noktp"] = "T Employee Noktp";
	$fieldToolTipsview["English"]["t_employee_noktp"] = "";
	$placeHoldersview["English"]["t_employee_noktp"] = "";
	$fieldLabelsview["English"]["t_employee_email_company"] = "Emai";
	$fieldToolTipsview["English"]["t_employee_email_company"] = "";
	$placeHoldersview["English"]["t_employee_email_company"] = "";
	if (count($fieldToolTipsview["English"]))
		$tdataview[".isUseToolTips"] = true;
}


	$tdataview[".NCSearch"] = true;



$tdataview[".shortTableName"] = "view";
$tdataview[".nSecOptions"] = 0;

$tdataview[".mainTableOwnerID"] = "";
$tdataview[".entityType"] = 7;
$tdataview[".connId"] = "rest";


$tdataview[".strOriginalTableName"] = "View";

	



$tdataview[".showAddInPopup"] = false;

$tdataview[".showEditInPopup"] = false;

$tdataview[".showViewInPopup"] = false;

$tdataview[".listAjax"] = false;
//	temporary
//$tdataview[".listAjax"] = false;

	$tdataview[".audit"] = false;

	$tdataview[".locking"] = false;


$pages = $tdataview[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataview[".edit"] = true;
	$tdataview[".afterEditAction"] = 1;
	$tdataview[".closePopupAfterEdit"] = 1;
	$tdataview[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataview[".add"] = true;
$tdataview[".afterAddAction"] = 1;
$tdataview[".closePopupAfterAdd"] = 1;
$tdataview[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataview[".list"] = true;
}



$tdataview[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataview[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataview[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataview[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataview[".printFriendly"] = true;
}



$tdataview[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataview[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataview[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataview[".isUseAjaxSuggest"] = false;



																																																			

$tdataview[".ajaxCodeSnippetAdded"] = false;

$tdataview[".buttonsAdded"] = false;

$tdataview[".addPageEvents"] = false;

// use timepicker for search panel
$tdataview[".isUseTimeForSearch"] = false;


$tdataview[".badgeColor"] = "E07878";


$tdataview[".allSearchFields"] = array();
$tdataview[".filterFields"] = array();
$tdataview[".requiredSearchFields"] = array();

$tdataview[".googleLikeFields"] = array();
$tdataview[".googleLikeFields"][] = "t_employee_nik";
$tdataview[".googleLikeFields"][] = "t_employee_name";
$tdataview[".googleLikeFields"][] = "t_employee_agama";
$tdataview[".googleLikeFields"][] = "t_employee_noktp";
$tdataview[".googleLikeFields"][] = "t_employee_email_company";




$tdataview[".printerPageOrientation"] = 0;
$tdataview[".nPrinterPageScale"] = 100;

$tdataview[".nPrinterSplitRecords"] = 40;

$tdataview[".geocodingEnabled"] = false;










$tdataview[".pageSize"] = 20;

$tdataview[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataview[".strOrderBy"] = $tstrOrderBy;

$tdataview[".orderindexes"] = array();


$tdataview[".sqlHead"] = "";
$tdataview[".sqlFrom"] = "";
$tdataview[".sqlWhereExpr"] = "";
$tdataview[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataview[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataview[".arrGroupsPerPage"] = $arrGPP;

$tdataview[".highlightSearchResults"] = true;

$tableKeysview = array();
$tdataview[".Keys"] = $tableKeysview;


$tdataview[".hideMobileList"] = array();




//	t_employee_nik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_employee_nik";
	$fdata["GoodName"] = "t_employee_nik";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("View","t_employee_nik");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/t_employee_nik";

	
		$fdata["FullName"] = "t_employee_nik";

	
	
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


	$tdataview["t_employee_nik"] = $fdata;
		$tdataview[".searchableFields"][] = "t_employee_nik";
//	t_employee_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_employee_name";
	$fdata["GoodName"] = "t_employee_name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("View","t_employee_name");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/t_employee_name";

	
		$fdata["FullName"] = "t_employee_name";

	
	
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


	$tdataview["t_employee_name"] = $fdata;
		$tdataview[".searchableFields"][] = "t_employee_name";
//	t_employee_agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_employee_agama";
	$fdata["GoodName"] = "t_employee_agama";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("View","t_employee_agama");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/t_employee_agama";

	
		$fdata["FullName"] = "t_employee_agama";

	
	
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


	$tdataview["t_employee_agama"] = $fdata;
		$tdataview[".searchableFields"][] = "t_employee_agama";
//	t_employee_noktp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_employee_noktp";
	$fdata["GoodName"] = "t_employee_noktp";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("View","t_employee_noktp");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "data/*/t_employee_noktp";

	
		$fdata["FullName"] = "t_employee_noktp";

	
	
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


	$tdataview["t_employee_noktp"] = $fdata;
		$tdataview[".searchableFields"][] = "t_employee_noktp";
//	t_employee_email_company
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_employee_email_company";
	$fdata["GoodName"] = "t_employee_email_company";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("View","t_employee_email_company");
	$fdata["FieldType"] = 202;


	
	
			

		$fdata["strField"] = "data/*/t_employee_email_company";

	
		$fdata["FullName"] = "t_employee_email_company";

	
	
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


	$tdataview["t_employee_email_company"] = $fdata;
		$tdataview[".searchableFields"][] = "t_employee_email_company";


$tables_data["View"]=&$tdataview;
$field_labels["View"] = &$fieldLabelsview;
$fieldToolTips["View"] = &$fieldToolTipsview;
$placeHolders["View"] = &$placeHoldersview;
$page_titles["View"] = &$pageTitlesview;


changeTextControlsToDate( "View" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["View"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["View"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/view_ops.php" ) );



	
				;

					

$tdataview[".sqlquery"] = $queryData_view;



$tdataview[".hasEvents"] = false;

?>