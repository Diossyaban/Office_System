<?php
$tdatam_supplier = array();
$tdatam_supplier[".searchableFields"] = array();
$tdatam_supplier[".ShortName"] = "m_supplier";
$tdatam_supplier[".OwnerID"] = "";
$tdatam_supplier[".OriginalTable"] = "m_supplier";


$tdatam_supplier[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_supplier[".originalPagesByType"] = $tdatam_supplier[".pagesByType"];
$tdatam_supplier[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_supplier[".originalPages"] = $tdatam_supplier[".pages"];
$tdatam_supplier[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_supplier[".originalDefaultPages"] = $tdatam_supplier[".defaultPages"];

//	field labels
$fieldLabelsm_supplier = array();
$fieldToolTipsm_supplier = array();
$pageTitlesm_supplier = array();
$placeHoldersm_supplier = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_supplier["English"] = array();
	$fieldToolTipsm_supplier["English"] = array();
	$placeHoldersm_supplier["English"] = array();
	$pageTitlesm_supplier["English"] = array();
	$fieldLabelsm_supplier["English"]["m_supplier_id"] = "M Supplier Id";
	$fieldToolTipsm_supplier["English"]["m_supplier_id"] = "";
	$placeHoldersm_supplier["English"]["m_supplier_id"] = "";
	$fieldLabelsm_supplier["English"]["m_supplier_no"] = "Supplier No";
	$fieldToolTipsm_supplier["English"]["m_supplier_no"] = "";
	$placeHoldersm_supplier["English"]["m_supplier_no"] = "";
	$fieldLabelsm_supplier["English"]["m_supplier_name"] = "Name";
	$fieldToolTipsm_supplier["English"]["m_supplier_name"] = "";
	$placeHoldersm_supplier["English"]["m_supplier_name"] = "";
	$fieldLabelsm_supplier["English"]["m_supplier_business_phone"] = "Business Phone";
	$fieldToolTipsm_supplier["English"]["m_supplier_business_phone"] = "";
	$placeHoldersm_supplier["English"]["m_supplier_business_phone"] = "";
	$fieldLabelsm_supplier["English"]["m_supplier_mobile_phone"] = "Mobile Phone";
	$fieldToolTipsm_supplier["English"]["m_supplier_mobile_phone"] = "";
	$placeHoldersm_supplier["English"]["m_supplier_mobile_phone"] = "";
	$fieldLabelsm_supplier["English"]["m_supplier_WhatsApp"] = "WhatsApp";
	$fieldToolTipsm_supplier["English"]["m_supplier_WhatsApp"] = "";
	$placeHoldersm_supplier["English"]["m_supplier_WhatsApp"] = "";
	if (count($fieldToolTipsm_supplier["English"]))
		$tdatam_supplier[".isUseToolTips"] = true;
}


	$tdatam_supplier[".NCSearch"] = true;



$tdatam_supplier[".shortTableName"] = "m_supplier";
$tdatam_supplier[".nSecOptions"] = 0;

$tdatam_supplier[".mainTableOwnerID"] = "";
$tdatam_supplier[".entityType"] = 0;
$tdatam_supplier[".connId"] = "u736239518tsundbat154412412";


$tdatam_supplier[".strOriginalTableName"] = "m_supplier";

	



$tdatam_supplier[".showAddInPopup"] = false;

$tdatam_supplier[".showEditInPopup"] = false;

$tdatam_supplier[".showViewInPopup"] = false;

$tdatam_supplier[".listAjax"] = false;
//	temporary
//$tdatam_supplier[".listAjax"] = false;

	$tdatam_supplier[".audit"] = false;

	$tdatam_supplier[".locking"] = false;


$pages = $tdatam_supplier[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_supplier[".edit"] = true;
	$tdatam_supplier[".afterEditAction"] = 1;
	$tdatam_supplier[".closePopupAfterEdit"] = 1;
	$tdatam_supplier[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_supplier[".add"] = true;
$tdatam_supplier[".afterAddAction"] = 1;
$tdatam_supplier[".closePopupAfterAdd"] = 1;
$tdatam_supplier[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_supplier[".list"] = true;
}



$tdatam_supplier[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_supplier[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_supplier[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_supplier[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_supplier[".printFriendly"] = true;
}



$tdatam_supplier[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_supplier[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_supplier[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_supplier[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_supplier[".ajaxCodeSnippetAdded"] = false;

$tdatam_supplier[".buttonsAdded"] = false;

$tdatam_supplier[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_supplier[".isUseTimeForSearch"] = false;


$tdatam_supplier[".badgeColor"] = "8FBC8B";


$tdatam_supplier[".allSearchFields"] = array();
$tdatam_supplier[".filterFields"] = array();
$tdatam_supplier[".requiredSearchFields"] = array();

$tdatam_supplier[".googleLikeFields"] = array();
$tdatam_supplier[".googleLikeFields"][] = "m_supplier_id";
$tdatam_supplier[".googleLikeFields"][] = "m_supplier_no";
$tdatam_supplier[".googleLikeFields"][] = "m_supplier_name";
$tdatam_supplier[".googleLikeFields"][] = "m_supplier_business_phone";
$tdatam_supplier[".googleLikeFields"][] = "m_supplier_mobile_phone";
$tdatam_supplier[".googleLikeFields"][] = "m_supplier_WhatsApp";



$tdatam_supplier[".tableType"] = "list";

$tdatam_supplier[".printerPageOrientation"] = 0;
$tdatam_supplier[".nPrinterPageScale"] = 100;

$tdatam_supplier[".nPrinterSplitRecords"] = 40;

$tdatam_supplier[".geocodingEnabled"] = false;










$tdatam_supplier[".pageSize"] = 20;

$tdatam_supplier[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_supplier[".strOrderBy"] = $tstrOrderBy;

$tdatam_supplier[".orderindexes"] = array();


$tdatam_supplier[".sqlHead"] = "SELECT m_supplier_id,  	m_supplier_no,  	m_supplier_name,  	m_supplier_business_phone,  	m_supplier_mobile_phone,  	m_supplier_WhatsApp";
$tdatam_supplier[".sqlFrom"] = "FROM m_supplier";
$tdatam_supplier[".sqlWhereExpr"] = "";
$tdatam_supplier[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_supplier[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_supplier[".arrGroupsPerPage"] = $arrGPP;

$tdatam_supplier[".highlightSearchResults"] = true;

$tableKeysm_supplier = array();
$tableKeysm_supplier[] = "m_supplier_id";
$tdatam_supplier[".Keys"] = $tableKeysm_supplier;


$tdatam_supplier[".hideMobileList"] = array();




//	m_supplier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_supplier_id";
	$fdata["GoodName"] = "m_supplier_id";
	$fdata["ownerTable"] = "m_supplier";
	$fdata["Label"] = GetFieldLabel("m_supplier","m_supplier_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_supplier_id";

		$fdata["sourceSingle"] = "m_supplier_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_supplier_id";

	
	
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


	$tdatam_supplier["m_supplier_id"] = $fdata;
		$tdatam_supplier[".searchableFields"][] = "m_supplier_id";
//	m_supplier_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_supplier_no";
	$fdata["GoodName"] = "m_supplier_no";
	$fdata["ownerTable"] = "m_supplier";
	$fdata["Label"] = GetFieldLabel("m_supplier","m_supplier_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_supplier_no";

		$fdata["sourceSingle"] = "m_supplier_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_supplier_no";

	
	
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


	$tdatam_supplier["m_supplier_no"] = $fdata;
		$tdatam_supplier[".searchableFields"][] = "m_supplier_no";
//	m_supplier_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_supplier_name";
	$fdata["GoodName"] = "m_supplier_name";
	$fdata["ownerTable"] = "m_supplier";
	$fdata["Label"] = GetFieldLabel("m_supplier","m_supplier_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_supplier_name";

		$fdata["sourceSingle"] = "m_supplier_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_supplier_name";

	
	
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


	$tdatam_supplier["m_supplier_name"] = $fdata;
		$tdatam_supplier[".searchableFields"][] = "m_supplier_name";
//	m_supplier_business_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_supplier_business_phone";
	$fdata["GoodName"] = "m_supplier_business_phone";
	$fdata["ownerTable"] = "m_supplier";
	$fdata["Label"] = GetFieldLabel("m_supplier","m_supplier_business_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_supplier_business_phone";

		$fdata["sourceSingle"] = "m_supplier_business_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_supplier_business_phone";

	
	
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


	$tdatam_supplier["m_supplier_business_phone"] = $fdata;
		$tdatam_supplier[".searchableFields"][] = "m_supplier_business_phone";
//	m_supplier_mobile_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_supplier_mobile_phone";
	$fdata["GoodName"] = "m_supplier_mobile_phone";
	$fdata["ownerTable"] = "m_supplier";
	$fdata["Label"] = GetFieldLabel("m_supplier","m_supplier_mobile_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_supplier_mobile_phone";

		$fdata["sourceSingle"] = "m_supplier_mobile_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_supplier_mobile_phone";

	
	
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


	$tdatam_supplier["m_supplier_mobile_phone"] = $fdata;
		$tdatam_supplier[".searchableFields"][] = "m_supplier_mobile_phone";
//	m_supplier_WhatsApp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_supplier_WhatsApp";
	$fdata["GoodName"] = "m_supplier_WhatsApp";
	$fdata["ownerTable"] = "m_supplier";
	$fdata["Label"] = GetFieldLabel("m_supplier","m_supplier_WhatsApp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_supplier_WhatsApp";

		$fdata["sourceSingle"] = "m_supplier_WhatsApp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_supplier_WhatsApp";

	
	
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


	$tdatam_supplier["m_supplier_WhatsApp"] = $fdata;
		$tdatam_supplier[".searchableFields"][] = "m_supplier_WhatsApp";


$tables_data["m_supplier"]=&$tdatam_supplier;
$field_labels["m_supplier"] = &$fieldLabelsm_supplier;
$fieldToolTips["m_supplier"] = &$fieldToolTipsm_supplier;
$placeHolders["m_supplier"] = &$placeHoldersm_supplier;
$page_titles["m_supplier"] = &$pageTitlesm_supplier;


changeTextControlsToDate( "m_supplier" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_supplier"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_supplier"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_supplier()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_supplier_id,  	m_supplier_no,  	m_supplier_name,  	m_supplier_business_phone,  	m_supplier_mobile_phone,  	m_supplier_WhatsApp";
$proto0["m_strFrom"] = "FROM m_supplier";
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
	"m_strName" => "m_supplier_id",
	"m_strTable" => "m_supplier",
	"m_srcTableName" => "m_supplier"
));

$proto6["m_sql"] = "m_supplier_id";
$proto6["m_srcTableName"] = "m_supplier";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_supplier_no",
	"m_strTable" => "m_supplier",
	"m_srcTableName" => "m_supplier"
));

$proto8["m_sql"] = "m_supplier_no";
$proto8["m_srcTableName"] = "m_supplier";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_supplier_name",
	"m_strTable" => "m_supplier",
	"m_srcTableName" => "m_supplier"
));

$proto10["m_sql"] = "m_supplier_name";
$proto10["m_srcTableName"] = "m_supplier";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_supplier_business_phone",
	"m_strTable" => "m_supplier",
	"m_srcTableName" => "m_supplier"
));

$proto12["m_sql"] = "m_supplier_business_phone";
$proto12["m_srcTableName"] = "m_supplier";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_supplier_mobile_phone",
	"m_strTable" => "m_supplier",
	"m_srcTableName" => "m_supplier"
));

$proto14["m_sql"] = "m_supplier_mobile_phone";
$proto14["m_srcTableName"] = "m_supplier";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_supplier_WhatsApp",
	"m_strTable" => "m_supplier",
	"m_srcTableName" => "m_supplier"
));

$proto16["m_sql"] = "m_supplier_WhatsApp";
$proto16["m_srcTableName"] = "m_supplier";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "m_supplier";
$proto19["m_srcTableName"] = "m_supplier";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "m_supplier_id";
$proto19["m_columns"][] = "m_supplier_no";
$proto19["m_columns"][] = "m_supplier_name";
$proto19["m_columns"][] = "m_supplier_business_phone";
$proto19["m_columns"][] = "m_supplier_mobile_phone";
$proto19["m_columns"][] = "m_supplier_WhatsApp";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "m_supplier";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "m_supplier";
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
$proto0["m_srcTableName"]="m_supplier";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_supplier = createSqlQuery_m_supplier();


	
				;

						

$tdatam_supplier[".sqlquery"] = $queryData_m_supplier;



$tdatam_supplier[".hasEvents"] = false;

?>