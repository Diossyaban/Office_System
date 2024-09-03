<?php
$tdatam_domestic_type = array();
$tdatam_domestic_type[".searchableFields"] = array();
$tdatam_domestic_type[".ShortName"] = "m_domestic_type";
$tdatam_domestic_type[".OwnerID"] = "";
$tdatam_domestic_type[".OriginalTable"] = "m_domestic_type";


$tdatam_domestic_type[".pagesByType"] = my_json_decode( "{}" );
$tdatam_domestic_type[".originalPagesByType"] = $tdatam_domestic_type[".pagesByType"];
$tdatam_domestic_type[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_domestic_type[".originalPages"] = $tdatam_domestic_type[".pages"];
$tdatam_domestic_type[".defaultPages"] = my_json_decode( "{}" );
$tdatam_domestic_type[".originalDefaultPages"] = $tdatam_domestic_type[".defaultPages"];

//	field labels
$fieldLabelsm_domestic_type = array();
$fieldToolTipsm_domestic_type = array();
$pageTitlesm_domestic_type = array();
$placeHoldersm_domestic_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_domestic_type["English"] = array();
	$fieldToolTipsm_domestic_type["English"] = array();
	$placeHoldersm_domestic_type["English"] = array();
	$pageTitlesm_domestic_type["English"] = array();
	$fieldLabelsm_domestic_type["English"]["id"] = "Id";
	$fieldToolTipsm_domestic_type["English"]["id"] = "";
	$placeHoldersm_domestic_type["English"]["id"] = "";
	$fieldLabelsm_domestic_type["English"]["domestic_name"] = "Domestic Name";
	$fieldToolTipsm_domestic_type["English"]["domestic_name"] = "";
	$placeHoldersm_domestic_type["English"]["domestic_name"] = "";
	$fieldLabelsm_domestic_type["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_domestic_type["English"]["is_active"] = "";
	$placeHoldersm_domestic_type["English"]["is_active"] = "";
	$fieldLabelsm_domestic_type["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_domestic_type["English"]["is_delete"] = "";
	$placeHoldersm_domestic_type["English"]["is_delete"] = "";
	$fieldLabelsm_domestic_type["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_domestic_type["English"]["deleted_date"] = "";
	$placeHoldersm_domestic_type["English"]["deleted_date"] = "";
	$fieldLabelsm_domestic_type["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_domestic_type["English"]["created_date"] = "";
	$placeHoldersm_domestic_type["English"]["created_date"] = "";
	$fieldLabelsm_domestic_type["English"]["created_by"] = "Created By";
	$fieldToolTipsm_domestic_type["English"]["created_by"] = "";
	$placeHoldersm_domestic_type["English"]["created_by"] = "";
	$fieldLabelsm_domestic_type["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_domestic_type["English"]["last_update_by"] = "";
	$placeHoldersm_domestic_type["English"]["last_update_by"] = "";
	$fieldLabelsm_domestic_type["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_domestic_type["English"]["last_update_date"] = "";
	$placeHoldersm_domestic_type["English"]["last_update_date"] = "";
	if (count($fieldToolTipsm_domestic_type["English"]))
		$tdatam_domestic_type[".isUseToolTips"] = true;
}


	$tdatam_domestic_type[".NCSearch"] = true;



$tdatam_domestic_type[".shortTableName"] = "m_domestic_type";
$tdatam_domestic_type[".nSecOptions"] = 0;

$tdatam_domestic_type[".mainTableOwnerID"] = "";
$tdatam_domestic_type[".entityType"] = 0;
$tdatam_domestic_type[".connId"] = "u736239518tsundbat154412412";


$tdatam_domestic_type[".strOriginalTableName"] = "m_domestic_type";

	



$tdatam_domestic_type[".showAddInPopup"] = false;

$tdatam_domestic_type[".showEditInPopup"] = false;

$tdatam_domestic_type[".showViewInPopup"] = false;

$tdatam_domestic_type[".listAjax"] = false;
//	temporary
//$tdatam_domestic_type[".listAjax"] = false;

	$tdatam_domestic_type[".audit"] = false;

	$tdatam_domestic_type[".locking"] = false;


$pages = $tdatam_domestic_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_domestic_type[".edit"] = true;
	$tdatam_domestic_type[".afterEditAction"] = 1;
	$tdatam_domestic_type[".closePopupAfterEdit"] = 1;
	$tdatam_domestic_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_domestic_type[".add"] = true;
$tdatam_domestic_type[".afterAddAction"] = 1;
$tdatam_domestic_type[".closePopupAfterAdd"] = 1;
$tdatam_domestic_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_domestic_type[".list"] = true;
}



$tdatam_domestic_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_domestic_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_domestic_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_domestic_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_domestic_type[".printFriendly"] = true;
}



$tdatam_domestic_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_domestic_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_domestic_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_domestic_type[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_domestic_type[".ajaxCodeSnippetAdded"] = false;

$tdatam_domestic_type[".buttonsAdded"] = false;

$tdatam_domestic_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_domestic_type[".isUseTimeForSearch"] = false;


$tdatam_domestic_type[".badgeColor"] = "EDCA00";


$tdatam_domestic_type[".allSearchFields"] = array();
$tdatam_domestic_type[".filterFields"] = array();
$tdatam_domestic_type[".requiredSearchFields"] = array();

$tdatam_domestic_type[".googleLikeFields"] = array();
$tdatam_domestic_type[".googleLikeFields"][] = "id";
$tdatam_domestic_type[".googleLikeFields"][] = "domestic_name";
$tdatam_domestic_type[".googleLikeFields"][] = "is_active";
$tdatam_domestic_type[".googleLikeFields"][] = "is_delete";
$tdatam_domestic_type[".googleLikeFields"][] = "deleted_date";
$tdatam_domestic_type[".googleLikeFields"][] = "created_date";
$tdatam_domestic_type[".googleLikeFields"][] = "created_by";
$tdatam_domestic_type[".googleLikeFields"][] = "last_update_by";
$tdatam_domestic_type[".googleLikeFields"][] = "last_update_date";



$tdatam_domestic_type[".tableType"] = "list";

$tdatam_domestic_type[".printerPageOrientation"] = 0;
$tdatam_domestic_type[".nPrinterPageScale"] = 100;

$tdatam_domestic_type[".nPrinterSplitRecords"] = 40;

$tdatam_domestic_type[".geocodingEnabled"] = false;










$tdatam_domestic_type[".pageSize"] = 20;

$tdatam_domestic_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_domestic_type[".strOrderBy"] = $tstrOrderBy;

$tdatam_domestic_type[".orderindexes"] = array();


$tdatam_domestic_type[".sqlHead"] = "SELECT id,  	domestic_name,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$tdatam_domestic_type[".sqlFrom"] = "FROM m_domestic_type";
$tdatam_domestic_type[".sqlWhereExpr"] = "";
$tdatam_domestic_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_domestic_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_domestic_type[".arrGroupsPerPage"] = $arrGPP;

$tdatam_domestic_type[".highlightSearchResults"] = true;

$tableKeysm_domestic_type = array();
$tableKeysm_domestic_type[] = "id";
$tdatam_domestic_type[".Keys"] = $tableKeysm_domestic_type;


$tdatam_domestic_type[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","id");
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


	$tdatam_domestic_type["id"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "id";
//	domestic_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "domestic_name";
	$fdata["GoodName"] = "domestic_name";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","domestic_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "domestic_name";

		$fdata["sourceSingle"] = "domestic_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domestic_name";

	
	
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


	$tdatam_domestic_type["domestic_name"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "domestic_name";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatam_domestic_type["is_active"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","is_delete");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_delete";

		$fdata["sourceSingle"] = "is_delete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_delete";

	
	
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


	$tdatam_domestic_type["is_delete"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","deleted_date");
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


	$tdatam_domestic_type["deleted_date"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","created_date");
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


	$tdatam_domestic_type["created_date"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","created_by");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatam_domestic_type["created_by"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","last_update_by");
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


	$tdatam_domestic_type["last_update_by"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_domestic_type";
	$fdata["Label"] = GetFieldLabel("m_domestic_type","last_update_date");
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


	$tdatam_domestic_type["last_update_date"] = $fdata;
		$tdatam_domestic_type[".searchableFields"][] = "last_update_date";


$tables_data["m_domestic_type"]=&$tdatam_domestic_type;
$field_labels["m_domestic_type"] = &$fieldLabelsm_domestic_type;
$fieldToolTips["m_domestic_type"] = &$fieldToolTipsm_domestic_type;
$placeHolders["m_domestic_type"] = &$placeHoldersm_domestic_type;
$page_titles["m_domestic_type"] = &$pageTitlesm_domestic_type;


changeTextControlsToDate( "m_domestic_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_domestic_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_domestic_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_domestic_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	domestic_name,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$proto0["m_strFrom"] = "FROM m_domestic_type";
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
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_domestic_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "domestic_name",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto8["m_sql"] = "domestic_name";
$proto8["m_srcTableName"] = "m_domestic_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto10["m_sql"] = "is_active";
$proto10["m_srcTableName"] = "m_domestic_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto12["m_sql"] = "is_delete";
$proto12["m_srcTableName"] = "m_domestic_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto14["m_sql"] = "deleted_date";
$proto14["m_srcTableName"] = "m_domestic_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto16["m_sql"] = "created_date";
$proto16["m_srcTableName"] = "m_domestic_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto18["m_sql"] = "created_by";
$proto18["m_srcTableName"] = "m_domestic_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto20["m_sql"] = "last_update_by";
$proto20["m_srcTableName"] = "m_domestic_type";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_domestic_type",
	"m_srcTableName" => "m_domestic_type"
));

$proto22["m_sql"] = "last_update_date";
$proto22["m_srcTableName"] = "m_domestic_type";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "m_domestic_type";
$proto25["m_srcTableName"] = "m_domestic_type";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "domestic_name";
$proto25["m_columns"][] = "is_active";
$proto25["m_columns"][] = "is_delete";
$proto25["m_columns"][] = "deleted_date";
$proto25["m_columns"][] = "created_date";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "last_update_by";
$proto25["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "m_domestic_type";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "m_domestic_type";
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
$proto0["m_srcTableName"]="m_domestic_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_domestic_type = createSqlQuery_m_domestic_type();


	
				;

									

$tdatam_domestic_type[".sqlquery"] = $queryData_m_domestic_type;



$tdatam_domestic_type[".hasEvents"] = false;

?>