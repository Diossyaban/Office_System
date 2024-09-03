<?php
$tdatam_mapping_disposition = array();
$tdatam_mapping_disposition[".searchableFields"] = array();
$tdatam_mapping_disposition[".ShortName"] = "m_mapping_disposition";
$tdatam_mapping_disposition[".OwnerID"] = "";
$tdatam_mapping_disposition[".OriginalTable"] = "m_mapping_disposition";


$tdatam_mapping_disposition[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_mapping_disposition[".originalPagesByType"] = $tdatam_mapping_disposition[".pagesByType"];
$tdatam_mapping_disposition[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_mapping_disposition[".originalPages"] = $tdatam_mapping_disposition[".pages"];
$tdatam_mapping_disposition[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_mapping_disposition[".originalDefaultPages"] = $tdatam_mapping_disposition[".defaultPages"];

//	field labels
$fieldLabelsm_mapping_disposition = array();
$fieldToolTipsm_mapping_disposition = array();
$pageTitlesm_mapping_disposition = array();
$placeHoldersm_mapping_disposition = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_mapping_disposition["English"] = array();
	$fieldToolTipsm_mapping_disposition["English"] = array();
	$placeHoldersm_mapping_disposition["English"] = array();
	$pageTitlesm_mapping_disposition["English"] = array();
	$fieldLabelsm_mapping_disposition["English"]["m_mapping_disposition_id"] = "M Mapping Disposition Id";
	$fieldToolTipsm_mapping_disposition["English"]["m_mapping_disposition_id"] = "";
	$placeHoldersm_mapping_disposition["English"]["m_mapping_disposition_id"] = "";
	$fieldLabelsm_mapping_disposition["English"]["m_division_id"] = "Division";
	$fieldToolTipsm_mapping_disposition["English"]["m_division_id"] = "";
	$placeHoldersm_mapping_disposition["English"]["m_division_id"] = "";
	$fieldLabelsm_mapping_disposition["English"]["m_work_unit_id"] = "Work Unit";
	$fieldToolTipsm_mapping_disposition["English"]["m_work_unit_id"] = "";
	$placeHoldersm_mapping_disposition["English"]["m_work_unit_id"] = "";
	$fieldLabelsm_mapping_disposition["English"]["pic_employee_username"] = "Pic Username";
	$fieldToolTipsm_mapping_disposition["English"]["pic_employee_username"] = "";
	$placeHoldersm_mapping_disposition["English"]["pic_employee_username"] = "";
	$fieldLabelsm_mapping_disposition["English"]["pic_employee_id"] = "Pic Employee ID";
	$fieldToolTipsm_mapping_disposition["English"]["pic_employee_id"] = "";
	$placeHoldersm_mapping_disposition["English"]["pic_employee_id"] = "";
	$fieldLabelsm_mapping_disposition["English"]["pic_employee_fullname"] = "Pic Fullname";
	$fieldToolTipsm_mapping_disposition["English"]["pic_employee_fullname"] = "";
	$placeHoldersm_mapping_disposition["English"]["pic_employee_fullname"] = "";
	$fieldLabelsm_mapping_disposition["English"]["pic_employee_email"] = "Pic Email";
	$fieldToolTipsm_mapping_disposition["English"]["pic_employee_email"] = "";
	$placeHoldersm_mapping_disposition["English"]["pic_employee_email"] = "";
	$fieldLabelsm_mapping_disposition["English"]["by_employee_username"] = "By Username";
	$fieldToolTipsm_mapping_disposition["English"]["by_employee_username"] = "";
	$placeHoldersm_mapping_disposition["English"]["by_employee_username"] = "";
	$fieldLabelsm_mapping_disposition["English"]["by_employee_id"] = "By Employee ID";
	$fieldToolTipsm_mapping_disposition["English"]["by_employee_id"] = "";
	$placeHoldersm_mapping_disposition["English"]["by_employee_id"] = "";
	$fieldLabelsm_mapping_disposition["English"]["by_employee_fullname"] = "By Fullname";
	$fieldToolTipsm_mapping_disposition["English"]["by_employee_fullname"] = "";
	$placeHoldersm_mapping_disposition["English"]["by_employee_fullname"] = "";
	$fieldLabelsm_mapping_disposition["English"]["by_employee_email"] = "By Email";
	$fieldToolTipsm_mapping_disposition["English"]["by_employee_email"] = "";
	$placeHoldersm_mapping_disposition["English"]["by_employee_email"] = "";
	$fieldLabelsm_mapping_disposition["English"]["m_mapping_disposition_fl"] = "is Active";
	$fieldToolTipsm_mapping_disposition["English"]["m_mapping_disposition_fl"] = "";
	$placeHoldersm_mapping_disposition["English"]["m_mapping_disposition_fl"] = "";
	$fieldLabelsm_mapping_disposition["English"]["pic_employee_level"] = "Pic Employee Level";
	$fieldToolTipsm_mapping_disposition["English"]["pic_employee_level"] = "";
	$placeHoldersm_mapping_disposition["English"]["pic_employee_level"] = "";
	$fieldLabelsm_mapping_disposition["English"]["by_employee_level"] = "By Employee Level";
	$fieldToolTipsm_mapping_disposition["English"]["by_employee_level"] = "";
	$placeHoldersm_mapping_disposition["English"]["by_employee_level"] = "";
	if (count($fieldToolTipsm_mapping_disposition["English"]))
		$tdatam_mapping_disposition[".isUseToolTips"] = true;
}


	$tdatam_mapping_disposition[".NCSearch"] = true;



$tdatam_mapping_disposition[".shortTableName"] = "m_mapping_disposition";
$tdatam_mapping_disposition[".nSecOptions"] = 0;

$tdatam_mapping_disposition[".mainTableOwnerID"] = "";
$tdatam_mapping_disposition[".entityType"] = 0;
$tdatam_mapping_disposition[".connId"] = "u736239518tsundbat154412412";


$tdatam_mapping_disposition[".strOriginalTableName"] = "m_mapping_disposition";

	



$tdatam_mapping_disposition[".showAddInPopup"] = false;

$tdatam_mapping_disposition[".showEditInPopup"] = false;

$tdatam_mapping_disposition[".showViewInPopup"] = false;

$tdatam_mapping_disposition[".listAjax"] = false;
//	temporary
//$tdatam_mapping_disposition[".listAjax"] = false;

	$tdatam_mapping_disposition[".audit"] = false;

	$tdatam_mapping_disposition[".locking"] = false;


$pages = $tdatam_mapping_disposition[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_mapping_disposition[".edit"] = true;
	$tdatam_mapping_disposition[".afterEditAction"] = 1;
	$tdatam_mapping_disposition[".closePopupAfterEdit"] = 1;
	$tdatam_mapping_disposition[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_mapping_disposition[".add"] = true;
$tdatam_mapping_disposition[".afterAddAction"] = 1;
$tdatam_mapping_disposition[".closePopupAfterAdd"] = 1;
$tdatam_mapping_disposition[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_mapping_disposition[".list"] = true;
}



$tdatam_mapping_disposition[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_mapping_disposition[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_mapping_disposition[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_mapping_disposition[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_mapping_disposition[".printFriendly"] = true;
}



$tdatam_mapping_disposition[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_mapping_disposition[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_mapping_disposition[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_mapping_disposition[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_mapping_disposition[".ajaxCodeSnippetAdded"] = false;

$tdatam_mapping_disposition[".buttonsAdded"] = false;

$tdatam_mapping_disposition[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_mapping_disposition[".isUseTimeForSearch"] = false;


$tdatam_mapping_disposition[".badgeColor"] = "DC143C";


$tdatam_mapping_disposition[".allSearchFields"] = array();
$tdatam_mapping_disposition[".filterFields"] = array();
$tdatam_mapping_disposition[".requiredSearchFields"] = array();

$tdatam_mapping_disposition[".googleLikeFields"] = array();
$tdatam_mapping_disposition[".googleLikeFields"][] = "m_mapping_disposition_id";
$tdatam_mapping_disposition[".googleLikeFields"][] = "m_division_id";
$tdatam_mapping_disposition[".googleLikeFields"][] = "m_work_unit_id";
$tdatam_mapping_disposition[".googleLikeFields"][] = "pic_employee_username";
$tdatam_mapping_disposition[".googleLikeFields"][] = "pic_employee_id";
$tdatam_mapping_disposition[".googleLikeFields"][] = "pic_employee_fullname";
$tdatam_mapping_disposition[".googleLikeFields"][] = "pic_employee_level";
$tdatam_mapping_disposition[".googleLikeFields"][] = "pic_employee_email";
$tdatam_mapping_disposition[".googleLikeFields"][] = "by_employee_username";
$tdatam_mapping_disposition[".googleLikeFields"][] = "by_employee_id";
$tdatam_mapping_disposition[".googleLikeFields"][] = "by_employee_fullname";
$tdatam_mapping_disposition[".googleLikeFields"][] = "by_employee_level";
$tdatam_mapping_disposition[".googleLikeFields"][] = "by_employee_email";
$tdatam_mapping_disposition[".googleLikeFields"][] = "m_mapping_disposition_fl";



$tdatam_mapping_disposition[".tableType"] = "list";

$tdatam_mapping_disposition[".printerPageOrientation"] = 0;
$tdatam_mapping_disposition[".nPrinterPageScale"] = 100;

$tdatam_mapping_disposition[".nPrinterSplitRecords"] = 40;

$tdatam_mapping_disposition[".geocodingEnabled"] = false;










$tdatam_mapping_disposition[".pageSize"] = 20;

$tdatam_mapping_disposition[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_mapping_disposition[".strOrderBy"] = $tstrOrderBy;

$tdatam_mapping_disposition[".orderindexes"] = array();


$tdatam_mapping_disposition[".sqlHead"] = "SELECT m_mapping_disposition_id,  	m_division_id,  	m_work_unit_id,  	pic_employee_username,  	pic_employee_id,  	pic_employee_fullname,  	pic_employee_level,  	pic_employee_email,  	by_employee_username,  	by_employee_id,  	by_employee_fullname,  	by_employee_level,  	by_employee_email,  	m_mapping_disposition_fl";
$tdatam_mapping_disposition[".sqlFrom"] = "FROM m_mapping_disposition";
$tdatam_mapping_disposition[".sqlWhereExpr"] = "";
$tdatam_mapping_disposition[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_mapping_disposition[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_mapping_disposition[".arrGroupsPerPage"] = $arrGPP;

$tdatam_mapping_disposition[".highlightSearchResults"] = true;

$tableKeysm_mapping_disposition = array();
$tableKeysm_mapping_disposition[] = "m_mapping_disposition_id";
$tdatam_mapping_disposition[".Keys"] = $tableKeysm_mapping_disposition;


$tdatam_mapping_disposition[".hideMobileList"] = array();




//	m_mapping_disposition_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_mapping_disposition_id";
	$fdata["GoodName"] = "m_mapping_disposition_id";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","m_mapping_disposition_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_mapping_disposition_id";

		$fdata["sourceSingle"] = "m_mapping_disposition_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_disposition_id";

	
	
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


	$tdatam_mapping_disposition["m_mapping_disposition_id"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "m_mapping_disposition_id";
//	m_division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_division_id";
	$fdata["GoodName"] = "m_division_id";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","m_division_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_division";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_division_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "m_division_name";

	

	
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


	$tdatam_mapping_disposition["m_division_id"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "m_division_id";
//	m_work_unit_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_work_unit_id";
	$fdata["GoodName"] = "m_work_unit_id";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","m_work_unit_id");
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


	$tdatam_mapping_disposition["m_work_unit_id"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "m_work_unit_id";
//	pic_employee_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pic_employee_username";
	$fdata["GoodName"] = "pic_employee_username";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","pic_employee_username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_employee_username";

		$fdata["sourceSingle"] = "pic_employee_username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_employee_username";

	
	
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
	$edata["LookupTable"] = "m_login";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"pic_employee_id", 'lookupF'=>"m_employee_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"pic_employee_fullname", 'lookupF'=>"fullname");
	$edata["autoCompleteFields"][] = array('masterF'=>"pic_employee_email", 'lookupF'=>"email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatam_mapping_disposition["pic_employee_username"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "pic_employee_username";
//	pic_employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "pic_employee_id";
	$fdata["GoodName"] = "pic_employee_id";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","pic_employee_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_employee_id";

		$fdata["sourceSingle"] = "pic_employee_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_employee_id";

	
	
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


	$tdatam_mapping_disposition["pic_employee_id"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "pic_employee_id";
//	pic_employee_fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "pic_employee_fullname";
	$fdata["GoodName"] = "pic_employee_fullname";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","pic_employee_fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_employee_fullname";

		$fdata["sourceSingle"] = "pic_employee_fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_employee_fullname";

	
	
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


	$tdatam_mapping_disposition["pic_employee_fullname"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "pic_employee_fullname";
//	pic_employee_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "pic_employee_level";
	$fdata["GoodName"] = "pic_employee_level";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","pic_employee_level");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_employee_level";

		$fdata["sourceSingle"] = "pic_employee_level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_employee_level";

	
	
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


	$tdatam_mapping_disposition["pic_employee_level"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "pic_employee_level";
//	pic_employee_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "pic_employee_email";
	$fdata["GoodName"] = "pic_employee_email";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","pic_employee_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_employee_email";

		$fdata["sourceSingle"] = "pic_employee_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_employee_email";

	
	
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


	$tdatam_mapping_disposition["pic_employee_email"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "pic_employee_email";
//	by_employee_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "by_employee_username";
	$fdata["GoodName"] = "by_employee_username";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","by_employee_username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_username";

		$fdata["sourceSingle"] = "by_employee_username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "by_employee_username";

	
	
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
	$edata["LookupTable"] = "m_login";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"by_employee_id", 'lookupF'=>"m_employee_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"by_employee_fullname", 'lookupF'=>"fullname");
	$edata["autoCompleteFields"][] = array('masterF'=>"by_employee_email", 'lookupF'=>"email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatam_mapping_disposition["by_employee_username"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "by_employee_username";
//	by_employee_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "by_employee_id";
	$fdata["GoodName"] = "by_employee_id";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","by_employee_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_id";

		$fdata["sourceSingle"] = "by_employee_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "by_employee_id";

	
	
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


	$tdatam_mapping_disposition["by_employee_id"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "by_employee_id";
//	by_employee_fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "by_employee_fullname";
	$fdata["GoodName"] = "by_employee_fullname";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","by_employee_fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_fullname";

		$fdata["sourceSingle"] = "by_employee_fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "by_employee_fullname";

	
	
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


	$tdatam_mapping_disposition["by_employee_fullname"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "by_employee_fullname";
//	by_employee_level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "by_employee_level";
	$fdata["GoodName"] = "by_employee_level";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","by_employee_level");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_level";

		$fdata["sourceSingle"] = "by_employee_level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "by_employee_level";

	
	
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


	$tdatam_mapping_disposition["by_employee_level"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "by_employee_level";
//	by_employee_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "by_employee_email";
	$fdata["GoodName"] = "by_employee_email";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","by_employee_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_email";

		$fdata["sourceSingle"] = "by_employee_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "by_employee_email";

	
	
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


	$tdatam_mapping_disposition["by_employee_email"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "by_employee_email";
//	m_mapping_disposition_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "m_mapping_disposition_fl";
	$fdata["GoodName"] = "m_mapping_disposition_fl";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("m_mapping_disposition","m_mapping_disposition_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_mapping_disposition_fl";

		$fdata["sourceSingle"] = "m_mapping_disposition_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_disposition_fl";

	
	
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


	$tdatam_mapping_disposition["m_mapping_disposition_fl"] = $fdata;
		$tdatam_mapping_disposition[".searchableFields"][] = "m_mapping_disposition_fl";


$tables_data["m_mapping_disposition"]=&$tdatam_mapping_disposition;
$field_labels["m_mapping_disposition"] = &$fieldLabelsm_mapping_disposition;
$fieldToolTips["m_mapping_disposition"] = &$fieldToolTipsm_mapping_disposition;
$placeHolders["m_mapping_disposition"] = &$placeHoldersm_mapping_disposition;
$page_titles["m_mapping_disposition"] = &$pageTitlesm_mapping_disposition;


changeTextControlsToDate( "m_mapping_disposition" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_mapping_disposition"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_mapping_disposition"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_mapping_disposition()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_mapping_disposition_id,  	m_division_id,  	m_work_unit_id,  	pic_employee_username,  	pic_employee_id,  	pic_employee_fullname,  	pic_employee_level,  	pic_employee_email,  	by_employee_username,  	by_employee_id,  	by_employee_fullname,  	by_employee_level,  	by_employee_email,  	m_mapping_disposition_fl";
$proto0["m_strFrom"] = "FROM m_mapping_disposition";
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
	"m_strName" => "m_mapping_disposition_id",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto6["m_sql"] = "m_mapping_disposition_id";
$proto6["m_srcTableName"] = "m_mapping_disposition";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_division_id",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto8["m_sql"] = "m_division_id";
$proto8["m_srcTableName"] = "m_mapping_disposition";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_work_unit_id",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto10["m_sql"] = "m_work_unit_id";
$proto10["m_srcTableName"] = "m_mapping_disposition";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_employee_username",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto12["m_sql"] = "pic_employee_username";
$proto12["m_srcTableName"] = "m_mapping_disposition";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_employee_id",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto14["m_sql"] = "pic_employee_id";
$proto14["m_srcTableName"] = "m_mapping_disposition";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_employee_fullname",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto16["m_sql"] = "pic_employee_fullname";
$proto16["m_srcTableName"] = "m_mapping_disposition";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_employee_level",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto18["m_sql"] = "pic_employee_level";
$proto18["m_srcTableName"] = "m_mapping_disposition";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_employee_email",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto20["m_sql"] = "pic_employee_email";
$proto20["m_srcTableName"] = "m_mapping_disposition";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "by_employee_username",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto22["m_sql"] = "by_employee_username";
$proto22["m_srcTableName"] = "m_mapping_disposition";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "by_employee_id",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto24["m_sql"] = "by_employee_id";
$proto24["m_srcTableName"] = "m_mapping_disposition";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "by_employee_fullname",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto26["m_sql"] = "by_employee_fullname";
$proto26["m_srcTableName"] = "m_mapping_disposition";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "by_employee_level",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto28["m_sql"] = "by_employee_level";
$proto28["m_srcTableName"] = "m_mapping_disposition";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "by_employee_email",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto30["m_sql"] = "by_employee_email";
$proto30["m_srcTableName"] = "m_mapping_disposition";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "m_mapping_disposition_fl",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "m_mapping_disposition"
));

$proto32["m_sql"] = "m_mapping_disposition_fl";
$proto32["m_srcTableName"] = "m_mapping_disposition";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "m_mapping_disposition";
$proto35["m_srcTableName"] = "m_mapping_disposition";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "m_mapping_disposition_id";
$proto35["m_columns"][] = "m_division_id";
$proto35["m_columns"][] = "m_work_unit_id";
$proto35["m_columns"][] = "pic_employee_username";
$proto35["m_columns"][] = "pic_employee_id";
$proto35["m_columns"][] = "pic_employee_fullname";
$proto35["m_columns"][] = "pic_employee_level";
$proto35["m_columns"][] = "pic_employee_email";
$proto35["m_columns"][] = "by_employee_username";
$proto35["m_columns"][] = "by_employee_id";
$proto35["m_columns"][] = "by_employee_fullname";
$proto35["m_columns"][] = "by_employee_level";
$proto35["m_columns"][] = "by_employee_email";
$proto35["m_columns"][] = "m_mapping_disposition_fl";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "m_mapping_disposition";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "m_mapping_disposition";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_mapping_disposition";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_mapping_disposition = createSqlQuery_m_mapping_disposition();


	
				;

														

$tdatam_mapping_disposition[".sqlquery"] = $queryData_m_mapping_disposition;



$tdatam_mapping_disposition[".hasEvents"] = false;

?>