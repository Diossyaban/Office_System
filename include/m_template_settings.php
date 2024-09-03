<?php
$tdatam_template = array();
$tdatam_template[".searchableFields"] = array();
$tdatam_template[".ShortName"] = "m_template";
$tdatam_template[".OwnerID"] = "";
$tdatam_template[".OriginalTable"] = "m_template";


$tdatam_template[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_template[".originalPagesByType"] = $tdatam_template[".pagesByType"];
$tdatam_template[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_template[".originalPages"] = $tdatam_template[".pages"];
$tdatam_template[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_template[".originalDefaultPages"] = $tdatam_template[".defaultPages"];

//	field labels
$fieldLabelsm_template = array();
$fieldToolTipsm_template = array();
$pageTitlesm_template = array();
$placeHoldersm_template = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_template["English"] = array();
	$fieldToolTipsm_template["English"] = array();
	$placeHoldersm_template["English"] = array();
	$pageTitlesm_template["English"] = array();
	$fieldLabelsm_template["English"]["m_template_id"] = "M Template Id";
	$fieldToolTipsm_template["English"]["m_template_id"] = "";
	$placeHoldersm_template["English"]["m_template_id"] = "";
	$fieldLabelsm_template["English"]["m_type_id"] = "Type";
	$fieldToolTipsm_template["English"]["m_type_id"] = "";
	$placeHoldersm_template["English"]["m_type_id"] = "";
	$fieldLabelsm_template["English"]["template_name"] = "Template Name";
	$fieldToolTipsm_template["English"]["template_name"] = "";
	$placeHoldersm_template["English"]["template_name"] = "";
	$fieldLabelsm_template["English"]["template_master"] = "Template Master";
	$fieldToolTipsm_template["English"]["template_master"] = "";
	$placeHoldersm_template["English"]["template_master"] = "";
	$fieldLabelsm_template["English"]["template_language"] = "Template Language";
	$fieldToolTipsm_template["English"]["template_language"] = "";
	$placeHoldersm_template["English"]["template_language"] = "";
	$fieldLabelsm_template["English"]["m_template_fl"] = "is Active";
	$fieldToolTipsm_template["English"]["m_template_fl"] = "";
	$placeHoldersm_template["English"]["m_template_fl"] = "";
	$fieldLabelsm_template["English"]["template_signature"] = "Template Signature";
	$fieldToolTipsm_template["English"]["template_signature"] = "";
	$placeHoldersm_template["English"]["template_signature"] = "";
	$pageTitlesm_template["English"]["add"] = "Add new";
	$pageTitlesm_template["English"]["edit"] = "Edit [{%m_template_id}]";
	$pageTitlesm_template["English"]["view"] = "View {%m_template_id}";
	if (count($fieldToolTipsm_template["English"]))
		$tdatam_template[".isUseToolTips"] = true;
}


	$tdatam_template[".NCSearch"] = true;


	$tdatam_template[".scrollGridBody"] = true;

$tdatam_template[".shortTableName"] = "m_template";
$tdatam_template[".nSecOptions"] = 0;

$tdatam_template[".mainTableOwnerID"] = "";
$tdatam_template[".entityType"] = 0;
$tdatam_template[".connId"] = "u736239518tsundbat154412412";


$tdatam_template[".strOriginalTableName"] = "m_template";

	



$tdatam_template[".showAddInPopup"] = false;

$tdatam_template[".showEditInPopup"] = false;

$tdatam_template[".showViewInPopup"] = false;

$tdatam_template[".listAjax"] = false;
//	temporary
//$tdatam_template[".listAjax"] = false;

	$tdatam_template[".audit"] = true;

	$tdatam_template[".locking"] = false;


$pages = $tdatam_template[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_template[".edit"] = true;
	$tdatam_template[".afterEditAction"] = 1;
	$tdatam_template[".closePopupAfterEdit"] = 1;
	$tdatam_template[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_template[".add"] = true;
$tdatam_template[".afterAddAction"] = 1;
$tdatam_template[".closePopupAfterAdd"] = 1;
$tdatam_template[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_template[".list"] = true;
}



$tdatam_template[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_template[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_template[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_template[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_template[".printFriendly"] = true;
}



$tdatam_template[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_template[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_template[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_template[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_template[".ajaxCodeSnippetAdded"] = false;

$tdatam_template[".buttonsAdded"] = false;

$tdatam_template[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_template[".isUseTimeForSearch"] = false;


$tdatam_template[".badgeColor"] = "4682B4";


$tdatam_template[".allSearchFields"] = array();
$tdatam_template[".filterFields"] = array();
$tdatam_template[".requiredSearchFields"] = array();

$tdatam_template[".googleLikeFields"] = array();
$tdatam_template[".googleLikeFields"][] = "m_template_id";
$tdatam_template[".googleLikeFields"][] = "m_type_id";
$tdatam_template[".googleLikeFields"][] = "template_name";
$tdatam_template[".googleLikeFields"][] = "template_master";
$tdatam_template[".googleLikeFields"][] = "template_language";
$tdatam_template[".googleLikeFields"][] = "m_template_fl";
$tdatam_template[".googleLikeFields"][] = "template_signature";



$tdatam_template[".tableType"] = "list";

$tdatam_template[".printerPageOrientation"] = 0;
$tdatam_template[".nPrinterPageScale"] = 100;

$tdatam_template[".nPrinterSplitRecords"] = 40;

$tdatam_template[".geocodingEnabled"] = false;










$tdatam_template[".pageSize"] = 20;

$tdatam_template[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_template[".strOrderBy"] = $tstrOrderBy;

$tdatam_template[".orderindexes"] = array();


$tdatam_template[".sqlHead"] = "SELECT m_template_id,  	m_type_id,  	template_name,  	template_master,  	template_language,  	m_template_fl,  	template_signature";
$tdatam_template[".sqlFrom"] = "FROM m_template";
$tdatam_template[".sqlWhereExpr"] = "";
$tdatam_template[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_template[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_template[".arrGroupsPerPage"] = $arrGPP;

$tdatam_template[".highlightSearchResults"] = true;

$tableKeysm_template = array();
$tableKeysm_template[] = "m_template_id";
$tdatam_template[".Keys"] = $tableKeysm_template;


$tdatam_template[".hideMobileList"] = array();




//	m_template_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_template_id";
	$fdata["GoodName"] = "m_template_id";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("m_template","m_template_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_template_id";

		$fdata["sourceSingle"] = "m_template_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_template_id";

	
	
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


	$tdatam_template["m_template_id"] = $fdata;
		$tdatam_template[".searchableFields"][] = "m_template_id";
//	m_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_type_id";
	$fdata["GoodName"] = "m_type_id";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("m_template","m_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_type_id";

		$fdata["sourceSingle"] = "m_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_type_id";

	
	
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


	$tdatam_template["m_type_id"] = $fdata;
		$tdatam_template[".searchableFields"][] = "m_type_id";
//	template_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "template_name";
	$fdata["GoodName"] = "template_name";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("m_template","template_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "template_name";

		$fdata["sourceSingle"] = "template_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_name";

	
	
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


	$tdatam_template["template_name"] = $fdata;
		$tdatam_template[".searchableFields"][] = "template_name";
//	template_master
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "template_master";
	$fdata["GoodName"] = "template_master";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("m_template","template_master");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "template_master";

		$fdata["sourceSingle"] = "template_master";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_master";

	
	
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


	$tdatam_template["template_master"] = $fdata;
		$tdatam_template[".searchableFields"][] = "template_master";
//	template_language
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "template_language";
	$fdata["GoodName"] = "template_language";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("m_template","template_language");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "template_language";

		$fdata["sourceSingle"] = "template_language";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_language";

	
	
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


	$tdatam_template["template_language"] = $fdata;
		$tdatam_template[".searchableFields"][] = "template_language";
//	m_template_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_template_fl";
	$fdata["GoodName"] = "m_template_fl";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("m_template","m_template_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_template_fl";

		$fdata["sourceSingle"] = "m_template_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_template_fl";

	
	
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


	$tdatam_template["m_template_fl"] = $fdata;
		$tdatam_template[".searchableFields"][] = "m_template_fl";
//	template_signature
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "template_signature";
	$fdata["GoodName"] = "template_signature";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("m_template","template_signature");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "template_signature";

		$fdata["sourceSingle"] = "template_signature";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_signature";

	
	
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


	$tdatam_template["template_signature"] = $fdata;
		$tdatam_template[".searchableFields"][] = "template_signature";


$tables_data["m_template"]=&$tdatam_template;
$field_labels["m_template"] = &$fieldLabelsm_template;
$fieldToolTips["m_template"] = &$fieldToolTipsm_template;
$placeHolders["m_template"] = &$placeHoldersm_template;
$page_titles["m_template"] = &$pageTitlesm_template;


changeTextControlsToDate( "m_template" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_template"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_template"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_template()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_template_id,  	m_type_id,  	template_name,  	template_master,  	template_language,  	m_template_fl,  	template_signature";
$proto0["m_strFrom"] = "FROM m_template";
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
	"m_strName" => "m_template_id",
	"m_strTable" => "m_template",
	"m_srcTableName" => "m_template"
));

$proto6["m_sql"] = "m_template_id";
$proto6["m_srcTableName"] = "m_template";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_type_id",
	"m_strTable" => "m_template",
	"m_srcTableName" => "m_template"
));

$proto8["m_sql"] = "m_type_id";
$proto8["m_srcTableName"] = "m_template";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "template_name",
	"m_strTable" => "m_template",
	"m_srcTableName" => "m_template"
));

$proto10["m_sql"] = "template_name";
$proto10["m_srcTableName"] = "m_template";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "template_master",
	"m_strTable" => "m_template",
	"m_srcTableName" => "m_template"
));

$proto12["m_sql"] = "template_master";
$proto12["m_srcTableName"] = "m_template";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "template_language",
	"m_strTable" => "m_template",
	"m_srcTableName" => "m_template"
));

$proto14["m_sql"] = "template_language";
$proto14["m_srcTableName"] = "m_template";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_template_fl",
	"m_strTable" => "m_template",
	"m_srcTableName" => "m_template"
));

$proto16["m_sql"] = "m_template_fl";
$proto16["m_srcTableName"] = "m_template";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "template_signature",
	"m_strTable" => "m_template",
	"m_srcTableName" => "m_template"
));

$proto18["m_sql"] = "template_signature";
$proto18["m_srcTableName"] = "m_template";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "m_template";
$proto21["m_srcTableName"] = "m_template";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "m_template_id";
$proto21["m_columns"][] = "m_type_id";
$proto21["m_columns"][] = "template_name";
$proto21["m_columns"][] = "template_master";
$proto21["m_columns"][] = "template_language";
$proto21["m_columns"][] = "m_template_fl";
$proto21["m_columns"][] = "template_signature";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "m_template";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "m_template";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_template";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_template = createSqlQuery_m_template();


	
				;

							

$tdatam_template[".sqlquery"] = $queryData_m_template;



$tdatam_template[".hasEvents"] = false;

?>