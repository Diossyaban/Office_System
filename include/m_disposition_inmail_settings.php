<?php
$tdatam_disposition_inmail = array();
$tdatam_disposition_inmail[".searchableFields"] = array();
$tdatam_disposition_inmail[".ShortName"] = "m_disposition_inmail";
$tdatam_disposition_inmail[".OwnerID"] = "";
$tdatam_disposition_inmail[".OriginalTable"] = "m_disposition";


$tdatam_disposition_inmail[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_disposition_inmail[".originalPagesByType"] = $tdatam_disposition_inmail[".pagesByType"];
$tdatam_disposition_inmail[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_disposition_inmail[".originalPages"] = $tdatam_disposition_inmail[".pages"];
$tdatam_disposition_inmail[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_disposition_inmail[".originalDefaultPages"] = $tdatam_disposition_inmail[".defaultPages"];

//	field labels
$fieldLabelsm_disposition_inmail = array();
$fieldToolTipsm_disposition_inmail = array();
$pageTitlesm_disposition_inmail = array();
$placeHoldersm_disposition_inmail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_disposition_inmail["English"] = array();
	$fieldToolTipsm_disposition_inmail["English"] = array();
	$placeHoldersm_disposition_inmail["English"] = array();
	$pageTitlesm_disposition_inmail["English"] = array();
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_id"] = "T Disposition Id";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_id"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_id"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_no"] = "T Disposition No";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_no"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_no"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_type"] = "T Disposition Type";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_type"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_type"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_from"] = "Disposition From";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_from"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_from"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_from_date"] = "Date";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_from_date"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_from_date"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_to"] = "Disposition To";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_to"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_to"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_to_date"] = "Date";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_to_date"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_to_date"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_desc"] = "Reason";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_desc"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_desc"] = "";
	$fieldLabelsm_disposition_inmail["English"]["t_disposition_status"] = "Status";
	$fieldToolTipsm_disposition_inmail["English"]["t_disposition_status"] = "";
	$placeHoldersm_disposition_inmail["English"]["t_disposition_status"] = "";
	$pageTitlesm_disposition_inmail["English"]["list"] = "";
	if (count($fieldToolTipsm_disposition_inmail["English"]))
		$tdatam_disposition_inmail[".isUseToolTips"] = true;
}


	$tdatam_disposition_inmail[".NCSearch"] = true;



$tdatam_disposition_inmail[".shortTableName"] = "m_disposition_inmail";
$tdatam_disposition_inmail[".nSecOptions"] = 0;

$tdatam_disposition_inmail[".mainTableOwnerID"] = "";
$tdatam_disposition_inmail[".entityType"] = 1;
$tdatam_disposition_inmail[".connId"] = "u736239518tsundbat154412412";


$tdatam_disposition_inmail[".strOriginalTableName"] = "m_disposition";

	



$tdatam_disposition_inmail[".showAddInPopup"] = false;

$tdatam_disposition_inmail[".showEditInPopup"] = false;

$tdatam_disposition_inmail[".showViewInPopup"] = false;

$tdatam_disposition_inmail[".listAjax"] = false;
//	temporary
//$tdatam_disposition_inmail[".listAjax"] = false;

	$tdatam_disposition_inmail[".audit"] = false;

	$tdatam_disposition_inmail[".locking"] = false;


$pages = $tdatam_disposition_inmail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_disposition_inmail[".edit"] = true;
	$tdatam_disposition_inmail[".afterEditAction"] = 1;
	$tdatam_disposition_inmail[".closePopupAfterEdit"] = 1;
	$tdatam_disposition_inmail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_disposition_inmail[".add"] = true;
$tdatam_disposition_inmail[".afterAddAction"] = 1;
$tdatam_disposition_inmail[".closePopupAfterAdd"] = 1;
$tdatam_disposition_inmail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_disposition_inmail[".list"] = true;
}



$tdatam_disposition_inmail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_disposition_inmail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_disposition_inmail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_disposition_inmail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_disposition_inmail[".printFriendly"] = true;
}



$tdatam_disposition_inmail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_disposition_inmail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_disposition_inmail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_disposition_inmail[".isUseAjaxSuggest"] = true;



																																																														
																																									

$tdatam_disposition_inmail[".ajaxCodeSnippetAdded"] = false;

$tdatam_disposition_inmail[".buttonsAdded"] = true;

$tdatam_disposition_inmail[".addPageEvents"] = true;

// use timepicker for search panel
$tdatam_disposition_inmail[".isUseTimeForSearch"] = false;


$tdatam_disposition_inmail[".badgeColor"] = "00c2c5";


$tdatam_disposition_inmail[".allSearchFields"] = array();
$tdatam_disposition_inmail[".filterFields"] = array();
$tdatam_disposition_inmail[".requiredSearchFields"] = array();

$tdatam_disposition_inmail[".googleLikeFields"] = array();
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_id";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_no";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_type";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_from";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_from_date";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_to";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_to_date";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_desc";
$tdatam_disposition_inmail[".googleLikeFields"][] = "t_disposition_status";



$tdatam_disposition_inmail[".tableType"] = "list";

$tdatam_disposition_inmail[".printerPageOrientation"] = 0;
$tdatam_disposition_inmail[".nPrinterPageScale"] = 100;

$tdatam_disposition_inmail[".nPrinterSplitRecords"] = 40;

$tdatam_disposition_inmail[".geocodingEnabled"] = false;










$tdatam_disposition_inmail[".pageSize"] = 20;

$tdatam_disposition_inmail[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY t_disposition_id DESC";
$tdatam_disposition_inmail[".strOrderBy"] = $tstrOrderBy;

$tdatam_disposition_inmail[".orderindexes"] = array();
	$tdatam_disposition_inmail[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "t_disposition_id");



$tdatam_disposition_inmail[".sqlHead"] = "SELECT t_disposition_id,  t_disposition_no,  t_disposition_type,  t_disposition_from,  t_disposition_from_date,  t_disposition_to,  t_disposition_to_date,  t_disposition_desc,  CASE WHEN t_disposition_status = '11' THEN \"Draft\"    ELSE t_disposition_status  END AS t_disposition_status";
$tdatam_disposition_inmail[".sqlFrom"] = "FROM m_disposition";
$tdatam_disposition_inmail[".sqlWhereExpr"] = "(t_disposition_type =1)";
$tdatam_disposition_inmail[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatam_disposition_inmail[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_disposition_inmail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_disposition_inmail[".arrGroupsPerPage"] = $arrGPP;

$tdatam_disposition_inmail[".highlightSearchResults"] = true;

$tableKeysm_disposition_inmail = array();
$tableKeysm_disposition_inmail[] = "t_disposition_id";
$tdatam_disposition_inmail[".Keys"] = $tableKeysm_disposition_inmail;


$tdatam_disposition_inmail[".hideMobileList"] = array();




//	t_disposition_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_disposition_id";
	$fdata["GoodName"] = "t_disposition_id";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_disposition_id";

		$fdata["sourceSingle"] = "t_disposition_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_id";

	
	
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


	$tdatam_disposition_inmail["t_disposition_id"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_id";
//	t_disposition_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_disposition_no";
	$fdata["GoodName"] = "t_disposition_no";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_no");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_disposition_no";

		$fdata["sourceSingle"] = "t_disposition_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_no";

	
	
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


	$tdatam_disposition_inmail["t_disposition_no"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_no";
//	t_disposition_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_disposition_type";
	$fdata["GoodName"] = "t_disposition_type";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_disposition_type";

		$fdata["sourceSingle"] = "t_disposition_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_type";

	
	
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


	$tdatam_disposition_inmail["t_disposition_type"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_type";
//	t_disposition_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_disposition_from";
	$fdata["GoodName"] = "t_disposition_from";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_from");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_from";

		$fdata["sourceSingle"] = "t_disposition_from";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_from";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
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


	$tdatam_disposition_inmail["t_disposition_from"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_from";
//	t_disposition_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_disposition_from_date";
	$fdata["GoodName"] = "t_disposition_from_date";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_from_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_disposition_from_date";

		$fdata["sourceSingle"] = "t_disposition_from_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_from_date";

	
	
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


	$tdatam_disposition_inmail["t_disposition_from_date"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_from_date";
//	t_disposition_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_disposition_to";
	$fdata["GoodName"] = "t_disposition_to";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_to");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_to";

		$fdata["sourceSingle"] = "t_disposition_to";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_to";

	
	
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
	$edata["LookupTable"] = "sp_disposition_flow";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "kodeuser";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nama";

	

	
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


	$tdatam_disposition_inmail["t_disposition_to"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_to";
//	t_disposition_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_disposition_to_date";
	$fdata["GoodName"] = "t_disposition_to_date";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_to_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_disposition_to_date";

		$fdata["sourceSingle"] = "t_disposition_to_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_to_date";

	
	
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

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatam_disposition_inmail["t_disposition_to_date"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_to_date";
//	t_disposition_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_disposition_desc";
	$fdata["GoodName"] = "t_disposition_desc";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_desc";

		$fdata["sourceSingle"] = "t_disposition_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_desc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 200;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatam_disposition_inmail["t_disposition_desc"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_desc";
//	t_disposition_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_disposition_status";
	$fdata["GoodName"] = "t_disposition_status";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("m_disposition_inmail","t_disposition_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_status";

		$fdata["sourceSingle"] = "t_disposition_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CASE WHEN t_disposition_status = '11' THEN \"Draft\"    ELSE t_disposition_status  END";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
		$eventsData = array();
	$eventsData[] = array( "name" => "t_disposition_status_event", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "sp_get_disposition_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stat_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stat";

				$edata["LookupWhere"] = "m_status_desc='delivery'";


	
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


	$tdatam_disposition_inmail["t_disposition_status"] = $fdata;
		$tdatam_disposition_inmail[".searchableFields"][] = "t_disposition_status";


$tables_data["m_disposition_inmail"]=&$tdatam_disposition_inmail;
$field_labels["m_disposition_inmail"] = &$fieldLabelsm_disposition_inmail;
$fieldToolTips["m_disposition_inmail"] = &$fieldToolTipsm_disposition_inmail;
$placeHolders["m_disposition_inmail"] = &$placeHoldersm_disposition_inmail;
$page_titles["m_disposition_inmail"] = &$pageTitlesm_disposition_inmail;


changeTextControlsToDate( "m_disposition_inmail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_disposition_inmail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_disposition_inmail"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_delivery";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_delivery";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_delivery";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["m_disposition_inmail"][0] = $masterParams;
				$masterTablesData["m_disposition_inmail"][0]["masterKeys"] = array();
	$masterTablesData["m_disposition_inmail"][0]["masterKeys"][]="t_delivery_id";
				$masterTablesData["m_disposition_inmail"][0]["detailKeys"] = array();
	$masterTablesData["m_disposition_inmail"][0]["detailKeys"][]="t_disposition_no";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_disposition_inmail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_disposition_id,  t_disposition_no,  t_disposition_type,  t_disposition_from,  t_disposition_from_date,  t_disposition_to,  t_disposition_to_date,  t_disposition_desc,  CASE WHEN t_disposition_status = '11' THEN \"Draft\"    ELSE t_disposition_status  END AS t_disposition_status";
$proto0["m_strFrom"] = "FROM m_disposition";
$proto0["m_strWhere"] = "(t_disposition_type =1)";
$proto0["m_strOrderBy"] = "ORDER BY t_disposition_id DESC";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_disposition_type =1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_disposition_type",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strName" => "t_disposition_id",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto6["m_sql"] = "t_disposition_id";
$proto6["m_srcTableName"] = "m_disposition_inmail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_no",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto8["m_sql"] = "t_disposition_no";
$proto8["m_srcTableName"] = "m_disposition_inmail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_type",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto10["m_sql"] = "t_disposition_type";
$proto10["m_srcTableName"] = "m_disposition_inmail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_from",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto12["m_sql"] = "t_disposition_from";
$proto12["m_srcTableName"] = "m_disposition_inmail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_from_date",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto14["m_sql"] = "t_disposition_from_date";
$proto14["m_srcTableName"] = "m_disposition_inmail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_to",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto16["m_sql"] = "t_disposition_to";
$proto16["m_srcTableName"] = "m_disposition_inmail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_to_date",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto18["m_sql"] = "t_disposition_to_date";
$proto18["m_srcTableName"] = "m_disposition_inmail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_desc",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto20["m_sql"] = "t_disposition_desc";
$proto20["m_srcTableName"] = "m_disposition_inmail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "CASE WHEN t_disposition_status = '11' THEN \"Draft\"    ELSE t_disposition_status  END"
));

$proto22["m_sql"] = "CASE WHEN t_disposition_status = '11' THEN \"Draft\"    ELSE t_disposition_status  END";
$proto22["m_srcTableName"] = "m_disposition_inmail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "t_disposition_status";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "m_disposition";
$proto25["m_srcTableName"] = "m_disposition_inmail";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "t_disposition_id";
$proto25["m_columns"][] = "t_disposition_no";
$proto25["m_columns"][] = "t_disposition_type";
$proto25["m_columns"][] = "t_disposition_from";
$proto25["m_columns"][] = "t_disposition_from_date";
$proto25["m_columns"][] = "t_disposition_to";
$proto25["m_columns"][] = "t_disposition_to_date";
$proto25["m_columns"][] = "t_disposition_desc";
$proto25["m_columns"][] = "t_disposition_status";
$proto25["m_columns"][] = "t_disposition_no_doc";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "m_disposition";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "m_disposition_inmail";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto28=array();
						$obj = new SQLField(array(
	"m_strName" => "t_disposition_id",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition_inmail"
));

$proto28["m_column"]=$obj;
$proto28["m_bAsc"] = 0;
$proto28["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto28);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="m_disposition_inmail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_disposition_inmail = createSqlQuery_m_disposition_inmail();


	
				;

									

$tdatam_disposition_inmail[".sqlquery"] = $queryData_m_disposition_inmail;



include_once(getabspath("include/m_disposition_inmail_events.php"));
$tdatam_disposition_inmail[".hasEvents"] = true;

?>