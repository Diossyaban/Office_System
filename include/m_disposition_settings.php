<?php
$tdatam_disposition = array();
$tdatam_disposition[".searchableFields"] = array();
$tdatam_disposition[".ShortName"] = "m_disposition";
$tdatam_disposition[".OwnerID"] = "";
$tdatam_disposition[".OriginalTable"] = "m_disposition";


$tdatam_disposition[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_disposition[".originalPagesByType"] = $tdatam_disposition[".pagesByType"];
$tdatam_disposition[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_disposition[".originalPages"] = $tdatam_disposition[".pages"];
$tdatam_disposition[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_disposition[".originalDefaultPages"] = $tdatam_disposition[".defaultPages"];

//	field labels
$fieldLabelsm_disposition = array();
$fieldToolTipsm_disposition = array();
$pageTitlesm_disposition = array();
$placeHoldersm_disposition = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_disposition["English"] = array();
	$fieldToolTipsm_disposition["English"] = array();
	$placeHoldersm_disposition["English"] = array();
	$pageTitlesm_disposition["English"] = array();
	$fieldLabelsm_disposition["English"]["t_disposition_id"] = "T Disposition Id";
	$fieldToolTipsm_disposition["English"]["t_disposition_id"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_id"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_no"] = "T Disposition No";
	$fieldToolTipsm_disposition["English"]["t_disposition_no"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_no"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_type"] = "T Disposition Type";
	$fieldToolTipsm_disposition["English"]["t_disposition_type"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_type"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_from"] = "Sender";
	$fieldToolTipsm_disposition["English"]["t_disposition_from"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_from"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_from_date"] = "Disposition From Date";
	$fieldToolTipsm_disposition["English"]["t_disposition_from_date"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_from_date"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_to"] = "Recipient";
	$fieldToolTipsm_disposition["English"]["t_disposition_to"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_to"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_to_date"] = "T Disposition To Date";
	$fieldToolTipsm_disposition["English"]["t_disposition_to_date"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_to_date"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_desc"] = "Note";
	$fieldToolTipsm_disposition["English"]["t_disposition_desc"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_desc"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_status"] = "Status";
	$fieldToolTipsm_disposition["English"]["t_disposition_status"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_status"] = "";
	$fieldLabelsm_disposition["English"]["t_disposition_no_doc"] = "T Disposition No Doc";
	$fieldToolTipsm_disposition["English"]["t_disposition_no_doc"] = "";
	$placeHoldersm_disposition["English"]["t_disposition_no_doc"] = "";
	$pageTitlesm_disposition["English"]["list"] = "";
	if (count($fieldToolTipsm_disposition["English"]))
		$tdatam_disposition[".isUseToolTips"] = true;
}


	$tdatam_disposition[".NCSearch"] = true;



$tdatam_disposition[".shortTableName"] = "m_disposition";
$tdatam_disposition[".nSecOptions"] = 0;

$tdatam_disposition[".mainTableOwnerID"] = "";
$tdatam_disposition[".entityType"] = 0;
$tdatam_disposition[".connId"] = "u736239518tsundbat154412412";


$tdatam_disposition[".strOriginalTableName"] = "m_disposition";

	



$tdatam_disposition[".showAddInPopup"] = false;

$tdatam_disposition[".showEditInPopup"] = false;

$tdatam_disposition[".showViewInPopup"] = false;

$tdatam_disposition[".listAjax"] = false;
//	temporary
//$tdatam_disposition[".listAjax"] = false;

	$tdatam_disposition[".audit"] = false;

	$tdatam_disposition[".locking"] = false;


$pages = $tdatam_disposition[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_disposition[".edit"] = true;
	$tdatam_disposition[".afterEditAction"] = 1;
	$tdatam_disposition[".closePopupAfterEdit"] = 1;
	$tdatam_disposition[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_disposition[".add"] = true;
$tdatam_disposition[".afterAddAction"] = 1;
$tdatam_disposition[".closePopupAfterAdd"] = 1;
$tdatam_disposition[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_disposition[".list"] = true;
}



$tdatam_disposition[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_disposition[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_disposition[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_disposition[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_disposition[".printFriendly"] = true;
}



$tdatam_disposition[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_disposition[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_disposition[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_disposition[".isUseAjaxSuggest"] = true;



																																																																																																																																																																																																												

$tdatam_disposition[".ajaxCodeSnippetAdded"] = false;

$tdatam_disposition[".buttonsAdded"] = false;

$tdatam_disposition[".addPageEvents"] = true;

// use timepicker for search panel
$tdatam_disposition[".isUseTimeForSearch"] = false;


$tdatam_disposition[".badgeColor"] = "3cb371";


$tdatam_disposition[".allSearchFields"] = array();
$tdatam_disposition[".filterFields"] = array();
$tdatam_disposition[".requiredSearchFields"] = array();

$tdatam_disposition[".googleLikeFields"] = array();
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_id";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_no";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_type";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_from";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_from_date";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_to";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_to_date";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_desc";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_status";
$tdatam_disposition[".googleLikeFields"][] = "t_disposition_no_doc";



$tdatam_disposition[".tableType"] = "list";

$tdatam_disposition[".printerPageOrientation"] = 0;
$tdatam_disposition[".nPrinterPageScale"] = 100;

$tdatam_disposition[".nPrinterSplitRecords"] = 40;

$tdatam_disposition[".geocodingEnabled"] = false;










$tdatam_disposition[".pageSize"] = 20;

$tdatam_disposition[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY t_disposition_from_date DESC";
$tdatam_disposition[".strOrderBy"] = $tstrOrderBy;

$tdatam_disposition[".orderindexes"] = array();
	$tdatam_disposition[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "t_disposition_from_date");



$tdatam_disposition[".sqlHead"] = "SELECT t_disposition_id,  t_disposition_no,  t_disposition_type,  t_disposition_from,  t_disposition_from_date,  t_disposition_to,  t_disposition_to_date,  t_disposition_desc,  t_disposition_status,  t_disposition_no_doc";
$tdatam_disposition[".sqlFrom"] = "FROM m_disposition";
$tdatam_disposition[".sqlWhereExpr"] = "(t_disposition_type = 6)";
$tdatam_disposition[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_disposition[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_disposition[".arrGroupsPerPage"] = $arrGPP;

$tdatam_disposition[".highlightSearchResults"] = true;

$tableKeysm_disposition = array();
$tableKeysm_disposition[] = "t_disposition_id";
$tdatam_disposition[".Keys"] = $tableKeysm_disposition;


$tdatam_disposition[".hideMobileList"] = array();




//	t_disposition_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_disposition_id";
	$fdata["GoodName"] = "t_disposition_id";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_id");
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


	$tdatam_disposition["t_disposition_id"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_id";
//	t_disposition_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_disposition_no";
	$fdata["GoodName"] = "t_disposition_no";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_no");
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


	$tdatam_disposition["t_disposition_no"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_no";
//	t_disposition_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_disposition_type";
	$fdata["GoodName"] = "t_disposition_type";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_type");
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


	$tdatam_disposition["t_disposition_type"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_type";
//	t_disposition_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_disposition_from";
	$fdata["GoodName"] = "t_disposition_from";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_from");
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatam_disposition["t_disposition_from"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_from";
//	t_disposition_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_disposition_from_date";
	$fdata["GoodName"] = "t_disposition_from_date";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_from_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_disposition_from_date";

		$fdata["sourceSingle"] = "t_disposition_from_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_from_date";

	
	
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


	$tdatam_disposition["t_disposition_from_date"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_from_date";
//	t_disposition_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_disposition_to";
	$fdata["GoodName"] = "t_disposition_to";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_to");
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
	$edata["DisplayField"] = "kodeuser";

	

	
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


	$tdatam_disposition["t_disposition_to"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_to";
//	t_disposition_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_disposition_to_date";
	$fdata["GoodName"] = "t_disposition_to_date";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_to_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_disposition_to_date";

		$fdata["sourceSingle"] = "t_disposition_to_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_to_date";

	
	
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


	$tdatam_disposition["t_disposition_to_date"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_to_date";
//	t_disposition_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_disposition_desc";
	$fdata["GoodName"] = "t_disposition_desc";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_desc");
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatam_disposition["t_disposition_desc"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_desc";
//	t_disposition_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_disposition_status";
	$fdata["GoodName"] = "t_disposition_status";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_status";

		$fdata["sourceSingle"] = "t_disposition_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_status";

	
	
			
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


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "disposisiBookingView";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "stat_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "stat";

	

	
	$edata["LookupOrderBy"] = "stat";

	
	
	
	

	
	
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


	$tdatam_disposition["t_disposition_status"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_status";
//	t_disposition_no_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_disposition_no_doc";
	$fdata["GoodName"] = "t_disposition_no_doc";
	$fdata["ownerTable"] = "m_disposition";
	$fdata["Label"] = GetFieldLabel("m_disposition","t_disposition_no_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_disposition_no_doc";

		$fdata["sourceSingle"] = "t_disposition_no_doc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_disposition_no_doc";

	
	
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


	$tdatam_disposition["t_disposition_no_doc"] = $fdata;
		$tdatam_disposition[".searchableFields"][] = "t_disposition_no_doc";


$tables_data["m_disposition"]=&$tdatam_disposition;
$field_labels["m_disposition"] = &$fieldLabelsm_disposition;
$fieldToolTips["m_disposition"] = &$fieldToolTipsm_disposition;
$placeHolders["m_disposition"] = &$placeHoldersm_disposition;
$page_titles["m_disposition"] = &$pageTitlesm_disposition;


changeTextControlsToDate( "m_disposition" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_disposition"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_disposition"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_booking";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_booking";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_booking";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["m_disposition"][0] = $masterParams;
				$masterTablesData["m_disposition"][0]["masterKeys"] = array();
	$masterTablesData["m_disposition"][0]["masterKeys"][]="t_booking_id";
				$masterTablesData["m_disposition"][0]["detailKeys"] = array();
	$masterTablesData["m_disposition"][0]["detailKeys"][]="t_disposition_no";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_booking";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_booking_inquiry";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_booking_inquiry";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["m_disposition"][1] = $masterParams;
				$masterTablesData["m_disposition"][1]["masterKeys"] = array();
	$masterTablesData["m_disposition"][1]["masterKeys"][]="t_booking_id";
				$masterTablesData["m_disposition"][1]["detailKeys"] = array();
	$masterTablesData["m_disposition"][1]["detailKeys"][]="t_disposition_no";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_booking";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_booking_approval";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_booking_approval";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["m_disposition"][2] = $masterParams;
				$masterTablesData["m_disposition"][2]["masterKeys"] = array();
	$masterTablesData["m_disposition"][2]["masterKeys"][]="t_booking_id";
				$masterTablesData["m_disposition"][2]["detailKeys"] = array();
	$masterTablesData["m_disposition"][2]["detailKeys"][]="t_disposition_no";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_disposition()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_disposition_id,  t_disposition_no,  t_disposition_type,  t_disposition_from,  t_disposition_from_date,  t_disposition_to,  t_disposition_to_date,  t_disposition_desc,  t_disposition_status,  t_disposition_no_doc";
$proto0["m_strFrom"] = "FROM m_disposition";
$proto0["m_strWhere"] = "(t_disposition_type = 6)";
$proto0["m_strOrderBy"] = "ORDER BY t_disposition_from_date DESC";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_disposition_type = 6";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_disposition_type",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 6";
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
	"m_srcTableName" => "m_disposition"
));

$proto6["m_sql"] = "t_disposition_id";
$proto6["m_srcTableName"] = "m_disposition";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_no",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto8["m_sql"] = "t_disposition_no";
$proto8["m_srcTableName"] = "m_disposition";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_type",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto10["m_sql"] = "t_disposition_type";
$proto10["m_srcTableName"] = "m_disposition";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_from",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto12["m_sql"] = "t_disposition_from";
$proto12["m_srcTableName"] = "m_disposition";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_from_date",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto14["m_sql"] = "t_disposition_from_date";
$proto14["m_srcTableName"] = "m_disposition";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_to",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto16["m_sql"] = "t_disposition_to";
$proto16["m_srcTableName"] = "m_disposition";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_to_date",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto18["m_sql"] = "t_disposition_to_date";
$proto18["m_srcTableName"] = "m_disposition";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_desc",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto20["m_sql"] = "t_disposition_desc";
$proto20["m_srcTableName"] = "m_disposition";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_status",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto22["m_sql"] = "t_disposition_status";
$proto22["m_srcTableName"] = "m_disposition";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_disposition_no_doc",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto24["m_sql"] = "t_disposition_no_doc";
$proto24["m_srcTableName"] = "m_disposition";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "m_disposition";
$proto27["m_srcTableName"] = "m_disposition";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "t_disposition_id";
$proto27["m_columns"][] = "t_disposition_no";
$proto27["m_columns"][] = "t_disposition_type";
$proto27["m_columns"][] = "t_disposition_from";
$proto27["m_columns"][] = "t_disposition_from_date";
$proto27["m_columns"][] = "t_disposition_to";
$proto27["m_columns"][] = "t_disposition_to_date";
$proto27["m_columns"][] = "t_disposition_desc";
$proto27["m_columns"][] = "t_disposition_status";
$proto27["m_columns"][] = "t_disposition_no_doc";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "m_disposition";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "m_disposition";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto30=array();
						$obj = new SQLField(array(
	"m_strName" => "t_disposition_from_date",
	"m_strTable" => "m_disposition",
	"m_srcTableName" => "m_disposition"
));

$proto30["m_column"]=$obj;
$proto30["m_bAsc"] = 0;
$proto30["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto30);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="m_disposition";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_disposition = createSqlQuery_m_disposition();


	
				;

										

$tdatam_disposition[".sqlquery"] = $queryData_m_disposition;



include_once(getabspath("include/m_disposition_events.php"));
$tdatam_disposition[".hasEvents"] = true;

?>