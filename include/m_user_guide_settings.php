<?php
$tdatam_user_guide = array();
$tdatam_user_guide[".searchableFields"] = array();
$tdatam_user_guide[".ShortName"] = "m_user_guide";
$tdatam_user_guide[".OwnerID"] = "";
$tdatam_user_guide[".OriginalTable"] = "m_user_guide";


$tdatam_user_guide[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_user_guide[".originalPagesByType"] = $tdatam_user_guide[".pagesByType"];
$tdatam_user_guide[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_user_guide[".originalPages"] = $tdatam_user_guide[".pages"];
$tdatam_user_guide[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_user_guide[".originalDefaultPages"] = $tdatam_user_guide[".defaultPages"];

//	field labels
$fieldLabelsm_user_guide = array();
$fieldToolTipsm_user_guide = array();
$pageTitlesm_user_guide = array();
$placeHoldersm_user_guide = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_user_guide["English"] = array();
	$fieldToolTipsm_user_guide["English"] = array();
	$placeHoldersm_user_guide["English"] = array();
	$pageTitlesm_user_guide["English"] = array();
	$fieldLabelsm_user_guide["English"]["m_user_guide_id"] = "M User Guide Id";
	$fieldToolTipsm_user_guide["English"]["m_user_guide_id"] = "";
	$placeHoldersm_user_guide["English"]["m_user_guide_id"] = "";
	$fieldLabelsm_user_guide["English"]["m_user_guide_name"] = "Name";
	$fieldToolTipsm_user_guide["English"]["m_user_guide_name"] = "";
	$placeHoldersm_user_guide["English"]["m_user_guide_name"] = "";
	$fieldLabelsm_user_guide["English"]["m_user_guide_file"] = "File";
	$fieldToolTipsm_user_guide["English"]["m_user_guide_file"] = "";
	$placeHoldersm_user_guide["English"]["m_user_guide_file"] = "";
	$fieldLabelsm_user_guide["English"]["m_user_guide_seo"] = "Seo";
	$fieldToolTipsm_user_guide["English"]["m_user_guide_seo"] = "";
	$placeHoldersm_user_guide["English"]["m_user_guide_seo"] = "";
	$fieldLabelsm_user_guide["English"]["m_user_guide_fl"] = "Active";
	$fieldToolTipsm_user_guide["English"]["m_user_guide_fl"] = "";
	$placeHoldersm_user_guide["English"]["m_user_guide_fl"] = "";
	$fieldLabelsm_user_guide["English"]["m_user_guide_module"] = "Menu";
	$fieldToolTipsm_user_guide["English"]["m_user_guide_module"] = "";
	$placeHoldersm_user_guide["English"]["m_user_guide_module"] = "";
	if (count($fieldToolTipsm_user_guide["English"]))
		$tdatam_user_guide[".isUseToolTips"] = true;
}


	$tdatam_user_guide[".NCSearch"] = true;



$tdatam_user_guide[".shortTableName"] = "m_user_guide";
$tdatam_user_guide[".nSecOptions"] = 0;

$tdatam_user_guide[".mainTableOwnerID"] = "";
$tdatam_user_guide[".entityType"] = 0;
$tdatam_user_guide[".connId"] = "u736239518tsundbat154412412";


$tdatam_user_guide[".strOriginalTableName"] = "m_user_guide";

	



$tdatam_user_guide[".showAddInPopup"] = false;

$tdatam_user_guide[".showEditInPopup"] = false;

$tdatam_user_guide[".showViewInPopup"] = false;

$tdatam_user_guide[".listAjax"] = false;
//	temporary
//$tdatam_user_guide[".listAjax"] = false;

	$tdatam_user_guide[".audit"] = false;

	$tdatam_user_guide[".locking"] = false;


$pages = $tdatam_user_guide[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_user_guide[".edit"] = true;
	$tdatam_user_guide[".afterEditAction"] = 1;
	$tdatam_user_guide[".closePopupAfterEdit"] = 1;
	$tdatam_user_guide[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_user_guide[".add"] = true;
$tdatam_user_guide[".afterAddAction"] = 1;
$tdatam_user_guide[".closePopupAfterAdd"] = 1;
$tdatam_user_guide[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_user_guide[".list"] = true;
}



$tdatam_user_guide[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_user_guide[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_user_guide[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_user_guide[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_user_guide[".printFriendly"] = true;
}



$tdatam_user_guide[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_user_guide[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_user_guide[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_user_guide[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_user_guide[".ajaxCodeSnippetAdded"] = false;

$tdatam_user_guide[".buttonsAdded"] = false;

$tdatam_user_guide[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_user_guide[".isUseTimeForSearch"] = false;


$tdatam_user_guide[".badgeColor"] = "4169E1";


$tdatam_user_guide[".allSearchFields"] = array();
$tdatam_user_guide[".filterFields"] = array();
$tdatam_user_guide[".requiredSearchFields"] = array();

$tdatam_user_guide[".googleLikeFields"] = array();
$tdatam_user_guide[".googleLikeFields"][] = "m_user_guide_id";
$tdatam_user_guide[".googleLikeFields"][] = "m_user_guide_name";
$tdatam_user_guide[".googleLikeFields"][] = "m_user_guide_file";
$tdatam_user_guide[".googleLikeFields"][] = "m_user_guide_seo";
$tdatam_user_guide[".googleLikeFields"][] = "m_user_guide_fl";
$tdatam_user_guide[".googleLikeFields"][] = "m_user_guide_module";



$tdatam_user_guide[".tableType"] = "list";

$tdatam_user_guide[".printerPageOrientation"] = 0;
$tdatam_user_guide[".nPrinterPageScale"] = 100;

$tdatam_user_guide[".nPrinterSplitRecords"] = 40;

$tdatam_user_guide[".geocodingEnabled"] = false;




$tdatam_user_guide[".isDisplayLoading"] = true;






$tdatam_user_guide[".pageSize"] = 20;

$tdatam_user_guide[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_user_guide[".strOrderBy"] = $tstrOrderBy;

$tdatam_user_guide[".orderindexes"] = array();


$tdatam_user_guide[".sqlHead"] = "SELECT m_user_guide_id,  	m_user_guide_name,  	m_user_guide_file,  	m_user_guide_seo,  	m_user_guide_fl,  	m_user_guide_module";
$tdatam_user_guide[".sqlFrom"] = "FROM m_user_guide";
$tdatam_user_guide[".sqlWhereExpr"] = "";
$tdatam_user_guide[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_user_guide[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_user_guide[".arrGroupsPerPage"] = $arrGPP;

$tdatam_user_guide[".highlightSearchResults"] = true;

$tableKeysm_user_guide = array();
$tableKeysm_user_guide[] = "m_user_guide_id";
$tdatam_user_guide[".Keys"] = $tableKeysm_user_guide;


$tdatam_user_guide[".hideMobileList"] = array();




//	m_user_guide_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_user_guide_id";
	$fdata["GoodName"] = "m_user_guide_id";
	$fdata["ownerTable"] = "m_user_guide";
	$fdata["Label"] = GetFieldLabel("m_user_guide","m_user_guide_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_user_guide_id";

		$fdata["sourceSingle"] = "m_user_guide_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_user_guide_id";

	
	
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


	$tdatam_user_guide["m_user_guide_id"] = $fdata;
		$tdatam_user_guide[".searchableFields"][] = "m_user_guide_id";
//	m_user_guide_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_user_guide_name";
	$fdata["GoodName"] = "m_user_guide_name";
	$fdata["ownerTable"] = "m_user_guide";
	$fdata["Label"] = GetFieldLabel("m_user_guide","m_user_guide_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_user_guide_name";

		$fdata["sourceSingle"] = "m_user_guide_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_user_guide_name";

	
	
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


	$tdatam_user_guide["m_user_guide_name"] = $fdata;
		$tdatam_user_guide[".searchableFields"][] = "m_user_guide_name";
//	m_user_guide_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_user_guide_file";
	$fdata["GoodName"] = "m_user_guide_file";
	$fdata["ownerTable"] = "m_user_guide";
	$fdata["Label"] = GetFieldLabel("m_user_guide","m_user_guide_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_user_guide_file";

		$fdata["sourceSingle"] = "m_user_guide_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_user_guide_file";

	
	
				$fdata["UploadFolder"] = "userguide";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
			$vdata["DisplayPDF"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



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


	$tdatam_user_guide["m_user_guide_file"] = $fdata;
		$tdatam_user_guide[".searchableFields"][] = "m_user_guide_file";
//	m_user_guide_seo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_user_guide_seo";
	$fdata["GoodName"] = "m_user_guide_seo";
	$fdata["ownerTable"] = "m_user_guide";
	$fdata["Label"] = GetFieldLabel("m_user_guide","m_user_guide_seo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_user_guide_seo";

		$fdata["sourceSingle"] = "m_user_guide_seo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_user_guide_seo";

	
	
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


	$tdatam_user_guide["m_user_guide_seo"] = $fdata;
		$tdatam_user_guide[".searchableFields"][] = "m_user_guide_seo";
//	m_user_guide_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_user_guide_fl";
	$fdata["GoodName"] = "m_user_guide_fl";
	$fdata["ownerTable"] = "m_user_guide";
	$fdata["Label"] = GetFieldLabel("m_user_guide","m_user_guide_fl");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_user_guide_fl";

		$fdata["sourceSingle"] = "m_user_guide_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_user_guide_fl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatam_user_guide["m_user_guide_fl"] = $fdata;
		$tdatam_user_guide[".searchableFields"][] = "m_user_guide_fl";
//	m_user_guide_module
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_user_guide_module";
	$fdata["GoodName"] = "m_user_guide_module";
	$fdata["ownerTable"] = "m_user_guide";
	$fdata["Label"] = GetFieldLabel("m_user_guide","m_user_guide_module");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_user_guide_module";

		$fdata["sourceSingle"] = "m_user_guide_module";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_user_guide_module";

	
	
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
	$edata["LookupValues"][] = "e-Marketing";
	$edata["LookupValues"][] = "e-Placment&Servicing";
	$edata["LookupValues"][] = "e-Claim";
	$edata["LookupValues"][] = "e-Human Capital";
	$edata["LookupValues"][] = "e-General Affairs";
	$edata["LookupValues"][] = "e-Legal";
	$edata["LookupValues"][] = "e-Compliance";
	$edata["LookupValues"][] = "e-Internal Audit";
	$edata["LookupValues"][] = "e-Risk Management";
	$edata["LookupValues"][] = "e-IN Tech";
	$edata["LookupValues"][] = "e-Finance&Accounting";
	$edata["LookupValues"][] = "T-Office";
	$edata["LookupValues"][] = "T-Mail";
	$edata["LookupValues"][] = "T-Partner";
	$edata["LookupValues"][] = "T-Helpdesk";

	
		$edata["SelectSize"] = 1;

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


	$tdatam_user_guide["m_user_guide_module"] = $fdata;
		$tdatam_user_guide[".searchableFields"][] = "m_user_guide_module";


$tables_data["m_user_guide"]=&$tdatam_user_guide;
$field_labels["m_user_guide"] = &$fieldLabelsm_user_guide;
$fieldToolTips["m_user_guide"] = &$fieldToolTipsm_user_guide;
$placeHolders["m_user_guide"] = &$placeHoldersm_user_guide;
$page_titles["m_user_guide"] = &$pageTitlesm_user_guide;


changeTextControlsToDate( "m_user_guide" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_user_guide"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_user_guide"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_user_guide()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_user_guide_id,  	m_user_guide_name,  	m_user_guide_file,  	m_user_guide_seo,  	m_user_guide_fl,  	m_user_guide_module";
$proto0["m_strFrom"] = "FROM m_user_guide";
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
	"m_strName" => "m_user_guide_id",
	"m_strTable" => "m_user_guide",
	"m_srcTableName" => "m_user_guide"
));

$proto6["m_sql"] = "m_user_guide_id";
$proto6["m_srcTableName"] = "m_user_guide";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_user_guide_name",
	"m_strTable" => "m_user_guide",
	"m_srcTableName" => "m_user_guide"
));

$proto8["m_sql"] = "m_user_guide_name";
$proto8["m_srcTableName"] = "m_user_guide";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_user_guide_file",
	"m_strTable" => "m_user_guide",
	"m_srcTableName" => "m_user_guide"
));

$proto10["m_sql"] = "m_user_guide_file";
$proto10["m_srcTableName"] = "m_user_guide";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_user_guide_seo",
	"m_strTable" => "m_user_guide",
	"m_srcTableName" => "m_user_guide"
));

$proto12["m_sql"] = "m_user_guide_seo";
$proto12["m_srcTableName"] = "m_user_guide";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_user_guide_fl",
	"m_strTable" => "m_user_guide",
	"m_srcTableName" => "m_user_guide"
));

$proto14["m_sql"] = "m_user_guide_fl";
$proto14["m_srcTableName"] = "m_user_guide";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_user_guide_module",
	"m_strTable" => "m_user_guide",
	"m_srcTableName" => "m_user_guide"
));

$proto16["m_sql"] = "m_user_guide_module";
$proto16["m_srcTableName"] = "m_user_guide";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "m_user_guide";
$proto19["m_srcTableName"] = "m_user_guide";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "m_user_guide_id";
$proto19["m_columns"][] = "m_user_guide_name";
$proto19["m_columns"][] = "m_user_guide_file";
$proto19["m_columns"][] = "m_user_guide_seo";
$proto19["m_columns"][] = "m_user_guide_fl";
$proto19["m_columns"][] = "m_user_guide_module";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "m_user_guide";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "m_user_guide";
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
$proto0["m_srcTableName"]="m_user_guide";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_user_guide = createSqlQuery_m_user_guide();


	
				;

						

$tdatam_user_guide[".sqlquery"] = $queryData_m_user_guide;



$tdatam_user_guide[".hasEvents"] = false;

?>