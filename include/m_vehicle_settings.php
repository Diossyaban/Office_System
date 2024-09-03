<?php
$tdatam_vehicle = array();
$tdatam_vehicle[".searchableFields"] = array();
$tdatam_vehicle[".ShortName"] = "m_vehicle";
$tdatam_vehicle[".OwnerID"] = "";
$tdatam_vehicle[".OriginalTable"] = "m_vehicle";


$tdatam_vehicle[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_vehicle[".originalPagesByType"] = $tdatam_vehicle[".pagesByType"];
$tdatam_vehicle[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_vehicle[".originalPages"] = $tdatam_vehicle[".pages"];
$tdatam_vehicle[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_vehicle[".originalDefaultPages"] = $tdatam_vehicle[".defaultPages"];

//	field labels
$fieldLabelsm_vehicle = array();
$fieldToolTipsm_vehicle = array();
$pageTitlesm_vehicle = array();
$placeHoldersm_vehicle = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_vehicle["English"] = array();
	$fieldToolTipsm_vehicle["English"] = array();
	$placeHoldersm_vehicle["English"] = array();
	$pageTitlesm_vehicle["English"] = array();
	$fieldLabelsm_vehicle["English"]["m_vehicle_id"] = "M Vehicle Id";
	$fieldToolTipsm_vehicle["English"]["m_vehicle_id"] = "";
	$placeHoldersm_vehicle["English"]["m_vehicle_id"] = "";
	$fieldLabelsm_vehicle["English"]["m_vehicle_name"] = "M Vehicle Name";
	$fieldToolTipsm_vehicle["English"]["m_vehicle_name"] = "";
	$placeHoldersm_vehicle["English"]["m_vehicle_name"] = "";
	$fieldLabelsm_vehicle["English"]["no"] = "No";
	$fieldToolTipsm_vehicle["English"]["no"] = "";
	$placeHoldersm_vehicle["English"]["no"] = "";
	$fieldLabelsm_vehicle["English"]["Seat"] = "Seat";
	$fieldToolTipsm_vehicle["English"]["Seat"] = "";
	$placeHoldersm_vehicle["English"]["Seat"] = "";
	$fieldLabelsm_vehicle["English"]["m_vehicle_driver"] = "M Vehicle Driver";
	$fieldToolTipsm_vehicle["English"]["m_vehicle_driver"] = "";
	$placeHoldersm_vehicle["English"]["m_vehicle_driver"] = "";
	$fieldLabelsm_vehicle["English"]["m_vehicle_img"] = "M Vehicle Img";
	$fieldToolTipsm_vehicle["English"]["m_vehicle_img"] = "";
	$placeHoldersm_vehicle["English"]["m_vehicle_img"] = "";
	if (count($fieldToolTipsm_vehicle["English"]))
		$tdatam_vehicle[".isUseToolTips"] = true;
}


	$tdatam_vehicle[".NCSearch"] = true;



$tdatam_vehicle[".shortTableName"] = "m_vehicle";
$tdatam_vehicle[".nSecOptions"] = 0;

$tdatam_vehicle[".mainTableOwnerID"] = "";
$tdatam_vehicle[".entityType"] = 0;
$tdatam_vehicle[".connId"] = "u736239518tsundbat154412412";


$tdatam_vehicle[".strOriginalTableName"] = "m_vehicle";

	



$tdatam_vehicle[".showAddInPopup"] = false;

$tdatam_vehicle[".showEditInPopup"] = false;

$tdatam_vehicle[".showViewInPopup"] = false;

$tdatam_vehicle[".listAjax"] = false;
//	temporary
//$tdatam_vehicle[".listAjax"] = false;

	$tdatam_vehicle[".audit"] = false;

	$tdatam_vehicle[".locking"] = false;


$pages = $tdatam_vehicle[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_vehicle[".edit"] = true;
	$tdatam_vehicle[".afterEditAction"] = 1;
	$tdatam_vehicle[".closePopupAfterEdit"] = 1;
	$tdatam_vehicle[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_vehicle[".add"] = true;
$tdatam_vehicle[".afterAddAction"] = 1;
$tdatam_vehicle[".closePopupAfterAdd"] = 1;
$tdatam_vehicle[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_vehicle[".list"] = true;
}



$tdatam_vehicle[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_vehicle[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_vehicle[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_vehicle[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_vehicle[".printFriendly"] = true;
}



$tdatam_vehicle[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_vehicle[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_vehicle[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_vehicle[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_vehicle[".ajaxCodeSnippetAdded"] = false;

$tdatam_vehicle[".buttonsAdded"] = false;

$tdatam_vehicle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_vehicle[".isUseTimeForSearch"] = false;


$tdatam_vehicle[".badgeColor"] = "9ACD32";


$tdatam_vehicle[".allSearchFields"] = array();
$tdatam_vehicle[".filterFields"] = array();
$tdatam_vehicle[".requiredSearchFields"] = array();

$tdatam_vehicle[".googleLikeFields"] = array();
$tdatam_vehicle[".googleLikeFields"][] = "m_vehicle_id";
$tdatam_vehicle[".googleLikeFields"][] = "m_vehicle_name";
$tdatam_vehicle[".googleLikeFields"][] = "no";
$tdatam_vehicle[".googleLikeFields"][] = "Seat";
$tdatam_vehicle[".googleLikeFields"][] = "m_vehicle_driver";
$tdatam_vehicle[".googleLikeFields"][] = "m_vehicle_img";



$tdatam_vehicle[".tableType"] = "list";

$tdatam_vehicle[".printerPageOrientation"] = 0;
$tdatam_vehicle[".nPrinterPageScale"] = 100;

$tdatam_vehicle[".nPrinterSplitRecords"] = 40;

$tdatam_vehicle[".geocodingEnabled"] = false;










$tdatam_vehicle[".pageSize"] = 20;

$tdatam_vehicle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_vehicle[".strOrderBy"] = $tstrOrderBy;

$tdatam_vehicle[".orderindexes"] = array();


$tdatam_vehicle[".sqlHead"] = "SELECT m_vehicle_id,  	m_vehicle_name,  	`no`,  	Seat,  	m_vehicle_driver,  	m_vehicle_img";
$tdatam_vehicle[".sqlFrom"] = "FROM m_vehicle";
$tdatam_vehicle[".sqlWhereExpr"] = "";
$tdatam_vehicle[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_vehicle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_vehicle[".arrGroupsPerPage"] = $arrGPP;

$tdatam_vehicle[".highlightSearchResults"] = true;

$tableKeysm_vehicle = array();
$tableKeysm_vehicle[] = "m_vehicle_id";
$tdatam_vehicle[".Keys"] = $tableKeysm_vehicle;


$tdatam_vehicle[".hideMobileList"] = array();




//	m_vehicle_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_vehicle_id";
	$fdata["GoodName"] = "m_vehicle_id";
	$fdata["ownerTable"] = "m_vehicle";
	$fdata["Label"] = GetFieldLabel("m_vehicle","m_vehicle_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_vehicle_id";

		$fdata["sourceSingle"] = "m_vehicle_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_id";

	
	
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


	$tdatam_vehicle["m_vehicle_id"] = $fdata;
		$tdatam_vehicle[".searchableFields"][] = "m_vehicle_id";
//	m_vehicle_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_vehicle_name";
	$fdata["GoodName"] = "m_vehicle_name";
	$fdata["ownerTable"] = "m_vehicle";
	$fdata["Label"] = GetFieldLabel("m_vehicle","m_vehicle_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_vehicle_name";

		$fdata["sourceSingle"] = "m_vehicle_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_name";

	
	
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


	$tdatam_vehicle["m_vehicle_name"] = $fdata;
		$tdatam_vehicle[".searchableFields"][] = "m_vehicle_name";
//	no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "no";
	$fdata["GoodName"] = "no";
	$fdata["ownerTable"] = "m_vehicle";
	$fdata["Label"] = GetFieldLabel("m_vehicle","no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "no";

		$fdata["sourceSingle"] = "no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`no`";

	
	
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


	$tdatam_vehicle["no"] = $fdata;
		$tdatam_vehicle[".searchableFields"][] = "no";
//	Seat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Seat";
	$fdata["GoodName"] = "Seat";
	$fdata["ownerTable"] = "m_vehicle";
	$fdata["Label"] = GetFieldLabel("m_vehicle","Seat");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "Seat";

		$fdata["sourceSingle"] = "Seat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Seat";

	
	
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


	$tdatam_vehicle["Seat"] = $fdata;
		$tdatam_vehicle[".searchableFields"][] = "Seat";
//	m_vehicle_driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_vehicle_driver";
	$fdata["GoodName"] = "m_vehicle_driver";
	$fdata["ownerTable"] = "m_vehicle";
	$fdata["Label"] = GetFieldLabel("m_vehicle","m_vehicle_driver");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_vehicle_driver";

		$fdata["sourceSingle"] = "m_vehicle_driver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_driver";

	
	
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


	$tdatam_vehicle["m_vehicle_driver"] = $fdata;
		$tdatam_vehicle[".searchableFields"][] = "m_vehicle_driver";
//	m_vehicle_img
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_vehicle_img";
	$fdata["GoodName"] = "m_vehicle_img";
	$fdata["ownerTable"] = "m_vehicle";
	$fdata["Label"] = GetFieldLabel("m_vehicle","m_vehicle_img");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_vehicle_img";

		$fdata["sourceSingle"] = "m_vehicle_img";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_img";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatam_vehicle["m_vehicle_img"] = $fdata;
		$tdatam_vehicle[".searchableFields"][] = "m_vehicle_img";


$tables_data["m_vehicle"]=&$tdatam_vehicle;
$field_labels["m_vehicle"] = &$fieldLabelsm_vehicle;
$fieldToolTips["m_vehicle"] = &$fieldToolTipsm_vehicle;
$placeHolders["m_vehicle"] = &$placeHoldersm_vehicle;
$page_titles["m_vehicle"] = &$pageTitlesm_vehicle;


changeTextControlsToDate( "m_vehicle" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_vehicle"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_vehicle"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_vehicle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_vehicle_id,  	m_vehicle_name,  	`no`,  	Seat,  	m_vehicle_driver,  	m_vehicle_img";
$proto0["m_strFrom"] = "FROM m_vehicle";
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
	"m_strName" => "m_vehicle_id",
	"m_strTable" => "m_vehicle",
	"m_srcTableName" => "m_vehicle"
));

$proto6["m_sql"] = "m_vehicle_id";
$proto6["m_srcTableName"] = "m_vehicle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_name",
	"m_strTable" => "m_vehicle",
	"m_srcTableName" => "m_vehicle"
));

$proto8["m_sql"] = "m_vehicle_name";
$proto8["m_srcTableName"] = "m_vehicle";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "no",
	"m_strTable" => "m_vehicle",
	"m_srcTableName" => "m_vehicle"
));

$proto10["m_sql"] = "`no`";
$proto10["m_srcTableName"] = "m_vehicle";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Seat",
	"m_strTable" => "m_vehicle",
	"m_srcTableName" => "m_vehicle"
));

$proto12["m_sql"] = "Seat";
$proto12["m_srcTableName"] = "m_vehicle";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_driver",
	"m_strTable" => "m_vehicle",
	"m_srcTableName" => "m_vehicle"
));

$proto14["m_sql"] = "m_vehicle_driver";
$proto14["m_srcTableName"] = "m_vehicle";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_img",
	"m_strTable" => "m_vehicle",
	"m_srcTableName" => "m_vehicle"
));

$proto16["m_sql"] = "m_vehicle_img";
$proto16["m_srcTableName"] = "m_vehicle";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "m_vehicle";
$proto19["m_srcTableName"] = "m_vehicle";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "m_vehicle_id";
$proto19["m_columns"][] = "m_vehicle_name";
$proto19["m_columns"][] = "no";
$proto19["m_columns"][] = "Seat";
$proto19["m_columns"][] = "m_vehicle_driver";
$proto19["m_columns"][] = "m_vehicle_img";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "m_vehicle";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "m_vehicle";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_vehicle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_vehicle = createSqlQuery_m_vehicle();


	
				;

						

$tdatam_vehicle[".sqlquery"] = $queryData_m_vehicle;



$tdatam_vehicle[".hasEvents"] = false;

?>