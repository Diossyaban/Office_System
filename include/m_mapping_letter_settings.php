<?php
$tdatam_mapping_letter = array();
$tdatam_mapping_letter[".searchableFields"] = array();
$tdatam_mapping_letter[".ShortName"] = "m_mapping_letter";
$tdatam_mapping_letter[".OwnerID"] = "";
$tdatam_mapping_letter[".OriginalTable"] = "m_mapping_letter";


$tdatam_mapping_letter[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_mapping_letter[".originalPagesByType"] = $tdatam_mapping_letter[".pagesByType"];
$tdatam_mapping_letter[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_mapping_letter[".originalPages"] = $tdatam_mapping_letter[".pages"];
$tdatam_mapping_letter[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_mapping_letter[".originalDefaultPages"] = $tdatam_mapping_letter[".defaultPages"];

//	field labels
$fieldLabelsm_mapping_letter = array();
$fieldToolTipsm_mapping_letter = array();
$pageTitlesm_mapping_letter = array();
$placeHoldersm_mapping_letter = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_mapping_letter["English"] = array();
	$fieldToolTipsm_mapping_letter["English"] = array();
	$placeHoldersm_mapping_letter["English"] = array();
	$pageTitlesm_mapping_letter["English"] = array();
	$fieldLabelsm_mapping_letter["English"]["id"] = "Id";
	$fieldToolTipsm_mapping_letter["English"]["id"] = "";
	$placeHoldersm_mapping_letter["English"]["id"] = "";
	$fieldLabelsm_mapping_letter["English"]["m_division_id"] = "M Division Id";
	$fieldToolTipsm_mapping_letter["English"]["m_division_id"] = "";
	$placeHoldersm_mapping_letter["English"]["m_division_id"] = "";
	$fieldLabelsm_mapping_letter["English"]["m_work_unit_id"] = "M Work Unit Id";
	$fieldToolTipsm_mapping_letter["English"]["m_work_unit_id"] = "";
	$placeHoldersm_mapping_letter["English"]["m_work_unit_id"] = "";
	$fieldLabelsm_mapping_letter["English"]["m_template_id"] = "Template";
	$fieldToolTipsm_mapping_letter["English"]["m_template_id"] = "";
	$placeHoldersm_mapping_letter["English"]["m_template_id"] = "";
	$fieldLabelsm_mapping_letter["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_mapping_letter["English"]["is_active"] = "";
	$placeHoldersm_mapping_letter["English"]["is_active"] = "";
	$fieldLabelsm_mapping_letter["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_mapping_letter["English"]["deleted_date"] = "";
	$placeHoldersm_mapping_letter["English"]["deleted_date"] = "";
	$fieldLabelsm_mapping_letter["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_mapping_letter["English"]["created_date"] = "";
	$placeHoldersm_mapping_letter["English"]["created_date"] = "";
	$fieldLabelsm_mapping_letter["English"]["created_by"] = "Created By";
	$fieldToolTipsm_mapping_letter["English"]["created_by"] = "";
	$placeHoldersm_mapping_letter["English"]["created_by"] = "";
	$fieldLabelsm_mapping_letter["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_mapping_letter["English"]["last_update_by"] = "";
	$placeHoldersm_mapping_letter["English"]["last_update_by"] = "";
	$fieldLabelsm_mapping_letter["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_mapping_letter["English"]["last_update_date"] = "";
	$placeHoldersm_mapping_letter["English"]["last_update_date"] = "";
	$fieldLabelsm_mapping_letter["English"]["m_category_id"] = "Category";
	$fieldToolTipsm_mapping_letter["English"]["m_category_id"] = "";
	$placeHoldersm_mapping_letter["English"]["m_category_id"] = "";
	$fieldLabelsm_mapping_letter["English"]["m_type_id"] = "Type";
	$fieldToolTipsm_mapping_letter["English"]["m_type_id"] = "";
	$placeHoldersm_mapping_letter["English"]["m_type_id"] = "";
	$fieldLabelsm_mapping_letter["English"]["m_language_id"] = "Language";
	$fieldToolTipsm_mapping_letter["English"]["m_language_id"] = "";
	$placeHoldersm_mapping_letter["English"]["m_language_id"] = "";
	$fieldLabelsm_mapping_letter["English"]["m_signature_id"] = "Signature";
	$fieldToolTipsm_mapping_letter["English"]["m_signature_id"] = "";
	$placeHoldersm_mapping_letter["English"]["m_signature_id"] = "";
	$fieldLabelsm_mapping_letter["English"]["template_file"] = "Template File";
	$fieldToolTipsm_mapping_letter["English"]["template_file"] = "";
	$placeHoldersm_mapping_letter["English"]["template_file"] = "";
	$pageTitlesm_mapping_letter["English"]["add"] = "Add new";
	$pageTitlesm_mapping_letter["English"]["edit"] = "Edit [{%id}]";
	$pageTitlesm_mapping_letter["English"]["view"] = "{%id}";
	if (count($fieldToolTipsm_mapping_letter["English"]))
		$tdatam_mapping_letter[".isUseToolTips"] = true;
}


	$tdatam_mapping_letter[".NCSearch"] = true;


	$tdatam_mapping_letter[".scrollGridBody"] = true;

$tdatam_mapping_letter[".shortTableName"] = "m_mapping_letter";
$tdatam_mapping_letter[".nSecOptions"] = 0;

$tdatam_mapping_letter[".mainTableOwnerID"] = "";
$tdatam_mapping_letter[".entityType"] = 0;
$tdatam_mapping_letter[".connId"] = "u736239518tsundbat154412412";


$tdatam_mapping_letter[".strOriginalTableName"] = "m_mapping_letter";

	



$tdatam_mapping_letter[".showAddInPopup"] = false;

$tdatam_mapping_letter[".showEditInPopup"] = false;

$tdatam_mapping_letter[".showViewInPopup"] = false;

$tdatam_mapping_letter[".listAjax"] = false;
//	temporary
//$tdatam_mapping_letter[".listAjax"] = false;

	$tdatam_mapping_letter[".audit"] = true;

	$tdatam_mapping_letter[".locking"] = false;


$pages = $tdatam_mapping_letter[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_mapping_letter[".edit"] = true;
	$tdatam_mapping_letter[".afterEditAction"] = 1;
	$tdatam_mapping_letter[".closePopupAfterEdit"] = 1;
	$tdatam_mapping_letter[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_mapping_letter[".add"] = true;
$tdatam_mapping_letter[".afterAddAction"] = 3;
$tdatam_mapping_letter[".closePopupAfterAdd"] = 1;
$tdatam_mapping_letter[".afterAddActionDetTable"] = "m_mapping_letter_pic";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_mapping_letter[".list"] = true;
}



$tdatam_mapping_letter[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_mapping_letter[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_mapping_letter[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_mapping_letter[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_mapping_letter[".printFriendly"] = true;
}



$tdatam_mapping_letter[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_mapping_letter[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_mapping_letter[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_mapping_letter[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_mapping_letter[".ajaxCodeSnippetAdded"] = false;

$tdatam_mapping_letter[".buttonsAdded"] = false;

$tdatam_mapping_letter[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_mapping_letter[".isUseTimeForSearch"] = false;


$tdatam_mapping_letter[".badgeColor"] = "DAA520";


$tdatam_mapping_letter[".allSearchFields"] = array();
$tdatam_mapping_letter[".filterFields"] = array();
$tdatam_mapping_letter[".requiredSearchFields"] = array();

$tdatam_mapping_letter[".googleLikeFields"] = array();
$tdatam_mapping_letter[".googleLikeFields"][] = "id";
$tdatam_mapping_letter[".googleLikeFields"][] = "m_category_id";
$tdatam_mapping_letter[".googleLikeFields"][] = "m_type_id";
$tdatam_mapping_letter[".googleLikeFields"][] = "m_division_id";
$tdatam_mapping_letter[".googleLikeFields"][] = "m_work_unit_id";
$tdatam_mapping_letter[".googleLikeFields"][] = "m_template_id";
$tdatam_mapping_letter[".googleLikeFields"][] = "is_active";
$tdatam_mapping_letter[".googleLikeFields"][] = "m_language_id";
$tdatam_mapping_letter[".googleLikeFields"][] = "deleted_date";
$tdatam_mapping_letter[".googleLikeFields"][] = "created_date";
$tdatam_mapping_letter[".googleLikeFields"][] = "created_by";
$tdatam_mapping_letter[".googleLikeFields"][] = "last_update_by";
$tdatam_mapping_letter[".googleLikeFields"][] = "last_update_date";
$tdatam_mapping_letter[".googleLikeFields"][] = "m_signature_id";
$tdatam_mapping_letter[".googleLikeFields"][] = "template_file";



$tdatam_mapping_letter[".tableType"] = "list";

$tdatam_mapping_letter[".printerPageOrientation"] = 0;
$tdatam_mapping_letter[".nPrinterPageScale"] = 100;

$tdatam_mapping_letter[".nPrinterSplitRecords"] = 40;

$tdatam_mapping_letter[".geocodingEnabled"] = false;










$tdatam_mapping_letter[".pageSize"] = 20;

$tdatam_mapping_letter[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_mapping_letter[".strOrderBy"] = $tstrOrderBy;

$tdatam_mapping_letter[".orderindexes"] = array();


$tdatam_mapping_letter[".sqlHead"] = "SELECT id,  	m_category_id,  	m_type_id,  	m_division_id,  	m_work_unit_id,  	m_template_id,  	is_active,  	m_language_id,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date,  	m_signature_id,  	template_file";
$tdatam_mapping_letter[".sqlFrom"] = "FROM m_mapping_letter";
$tdatam_mapping_letter[".sqlWhereExpr"] = "";
$tdatam_mapping_letter[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_mapping_letter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_mapping_letter[".arrGroupsPerPage"] = $arrGPP;

$tdatam_mapping_letter[".highlightSearchResults"] = true;

$tableKeysm_mapping_letter = array();
$tableKeysm_mapping_letter[] = "id";
$tdatam_mapping_letter[".Keys"] = $tableKeysm_mapping_letter;


$tdatam_mapping_letter[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatam_mapping_letter["id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "id";
//	m_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_category_id";
	$fdata["GoodName"] = "m_category_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","m_category_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_category_id";

		$fdata["sourceSingle"] = "m_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_id";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_category";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_category_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatam_mapping_letter["m_category_id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "m_category_id";
//	m_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_type_id";
	$fdata["GoodName"] = "m_type_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","m_type_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_type_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_type_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatam_mapping_letter["m_type_id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "m_type_id";
//	m_division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_division_id";
	$fdata["GoodName"] = "m_division_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","m_division_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_division_id";

		$fdata["sourceSingle"] = "m_division_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_division_id";

	
	
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


	$tdatam_mapping_letter["m_division_id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "m_division_id";
//	m_work_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_work_unit_id";
	$fdata["GoodName"] = "m_work_unit_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","m_work_unit_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_work_unit_id";

		$fdata["sourceSingle"] = "m_work_unit_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_work_unit_id";

	
	
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


	$tdatam_mapping_letter["m_work_unit_id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "m_work_unit_id";
//	m_template_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_template_id";
	$fdata["GoodName"] = "m_template_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","m_template_id");
	$fdata["FieldType"] = 3;


	
	
			

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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_template";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_template_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "template_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatam_mapping_letter["m_template_id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "m_template_id";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatam_mapping_letter["is_active"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "is_active";
//	m_language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "m_language_id";
	$fdata["GoodName"] = "m_language_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","m_language_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_language_id";

		$fdata["sourceSingle"] = "m_language_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_language_id";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_language";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_language_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "m_language_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatam_mapping_letter["m_language_id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "m_language_id";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","deleted_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "deleted_date";

		$fdata["sourceSingle"] = "deleted_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deleted_date";

	
	
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


	$tdatam_mapping_letter["deleted_date"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_date";

	
	
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


	$tdatam_mapping_letter["created_date"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","created_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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


	$tdatam_mapping_letter["created_by"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","last_update_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "last_update_by";

		$fdata["sourceSingle"] = "last_update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_by";

	
	
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


	$tdatam_mapping_letter["last_update_by"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","last_update_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_update_date";

		$fdata["sourceSingle"] = "last_update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_date";

	
	
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


	$tdatam_mapping_letter["last_update_date"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "last_update_date";
//	m_signature_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "m_signature_id";
	$fdata["GoodName"] = "m_signature_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","m_signature_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_signature_id";

		$fdata["sourceSingle"] = "m_signature_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_signature_id";

	
	
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
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_position_siganture";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_position_siganture_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "m_position_siganture_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
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


	$tdatam_mapping_letter["m_signature_id"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "m_signature_id";
//	template_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "template_file";
	$fdata["GoodName"] = "template_file";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter","template_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "template_file";

		$fdata["sourceSingle"] = "template_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_file";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files/Templates";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
								$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatam_mapping_letter["template_file"] = $fdata;
		$tdatam_mapping_letter[".searchableFields"][] = "template_file";


$tables_data["m_mapping_letter"]=&$tdatam_mapping_letter;
$field_labels["m_mapping_letter"] = &$fieldLabelsm_mapping_letter;
$fieldToolTips["m_mapping_letter"] = &$fieldToolTipsm_mapping_letter;
$placeHolders["m_mapping_letter"] = &$placeHoldersm_mapping_letter;
$page_titles["m_mapping_letter"] = &$pageTitlesm_mapping_letter;


changeTextControlsToDate( "m_mapping_letter" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_mapping_letter"] = array();
//	m_mapping_letter_pic
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_mapping_letter_pic";
		$detailsParam["dOriginalTable"] = "m_mapping_letter_pic";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_mapping_letter_pic";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_mapping_letter_pic");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["m_mapping_letter"][$dIndex] = $detailsParam;

	
		$detailsTablesData["m_mapping_letter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["m_mapping_letter"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["m_mapping_letter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["m_mapping_letter"][$dIndex]["detailKeys"][]="m_mapping_letter_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_mapping_letter"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_mapping_letter()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	m_category_id,  	m_type_id,  	m_division_id,  	m_work_unit_id,  	m_template_id,  	is_active,  	m_language_id,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date,  	m_signature_id,  	template_file";
$proto0["m_strFrom"] = "FROM m_mapping_letter";
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
	"m_strName" => "id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_mapping_letter";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto8["m_sql"] = "m_category_id";
$proto8["m_srcTableName"] = "m_mapping_letter";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_type_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto10["m_sql"] = "m_type_id";
$proto10["m_srcTableName"] = "m_mapping_letter";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_division_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto12["m_sql"] = "m_division_id";
$proto12["m_srcTableName"] = "m_mapping_letter";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_work_unit_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto14["m_sql"] = "m_work_unit_id";
$proto14["m_srcTableName"] = "m_mapping_letter";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_template_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto16["m_sql"] = "m_template_id";
$proto16["m_srcTableName"] = "m_mapping_letter";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto18["m_sql"] = "is_active";
$proto18["m_srcTableName"] = "m_mapping_letter";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "m_language_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto20["m_sql"] = "m_language_id";
$proto20["m_srcTableName"] = "m_mapping_letter";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto22["m_sql"] = "deleted_date";
$proto22["m_srcTableName"] = "m_mapping_letter";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto24["m_sql"] = "created_date";
$proto24["m_srcTableName"] = "m_mapping_letter";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto26["m_sql"] = "created_by";
$proto26["m_srcTableName"] = "m_mapping_letter";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto28["m_sql"] = "last_update_by";
$proto28["m_srcTableName"] = "m_mapping_letter";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto30["m_sql"] = "last_update_date";
$proto30["m_srcTableName"] = "m_mapping_letter";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "m_signature_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto32["m_sql"] = "m_signature_id";
$proto32["m_srcTableName"] = "m_mapping_letter";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "template_file",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "m_mapping_letter"
));

$proto34["m_sql"] = "template_file";
$proto34["m_srcTableName"] = "m_mapping_letter";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "m_mapping_letter";
$proto37["m_srcTableName"] = "m_mapping_letter";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "id";
$proto37["m_columns"][] = "m_category_id";
$proto37["m_columns"][] = "m_type_id";
$proto37["m_columns"][] = "m_division_id";
$proto37["m_columns"][] = "m_work_unit_id";
$proto37["m_columns"][] = "m_template_id";
$proto37["m_columns"][] = "is_active";
$proto37["m_columns"][] = "m_language_id";
$proto37["m_columns"][] = "deleted_date";
$proto37["m_columns"][] = "created_date";
$proto37["m_columns"][] = "created_by";
$proto37["m_columns"][] = "last_update_by";
$proto37["m_columns"][] = "last_update_date";
$proto37["m_columns"][] = "m_signature_id";
$proto37["m_columns"][] = "template_file";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "m_mapping_letter";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "m_mapping_letter";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_mapping_letter";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_mapping_letter = createSqlQuery_m_mapping_letter();


	
				;

															

$tdatam_mapping_letter[".sqlquery"] = $queryData_m_mapping_letter;



$tdatam_mapping_letter[".hasEvents"] = false;

?>