<?php
$tdatam_overseas_type = array();
$tdatam_overseas_type[".searchableFields"] = array();
$tdatam_overseas_type[".ShortName"] = "m_overseas_type";
$tdatam_overseas_type[".OwnerID"] = "";
$tdatam_overseas_type[".OriginalTable"] = "m_overseas_type";


$tdatam_overseas_type[".pagesByType"] = my_json_decode( "{}" );
$tdatam_overseas_type[".originalPagesByType"] = $tdatam_overseas_type[".pagesByType"];
$tdatam_overseas_type[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_overseas_type[".originalPages"] = $tdatam_overseas_type[".pages"];
$tdatam_overseas_type[".defaultPages"] = my_json_decode( "{}" );
$tdatam_overseas_type[".originalDefaultPages"] = $tdatam_overseas_type[".defaultPages"];

//	field labels
$fieldLabelsm_overseas_type = array();
$fieldToolTipsm_overseas_type = array();
$pageTitlesm_overseas_type = array();
$placeHoldersm_overseas_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_overseas_type["English"] = array();
	$fieldToolTipsm_overseas_type["English"] = array();
	$placeHoldersm_overseas_type["English"] = array();
	$pageTitlesm_overseas_type["English"] = array();
	$fieldLabelsm_overseas_type["English"]["id"] = "Id";
	$fieldToolTipsm_overseas_type["English"]["id"] = "";
	$placeHoldersm_overseas_type["English"]["id"] = "";
	$fieldLabelsm_overseas_type["English"]["overseas_name"] = "Overseas Name";
	$fieldToolTipsm_overseas_type["English"]["overseas_name"] = "";
	$placeHoldersm_overseas_type["English"]["overseas_name"] = "";
	$fieldLabelsm_overseas_type["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_overseas_type["English"]["is_active"] = "";
	$placeHoldersm_overseas_type["English"]["is_active"] = "";
	$fieldLabelsm_overseas_type["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_overseas_type["English"]["is_delete"] = "";
	$placeHoldersm_overseas_type["English"]["is_delete"] = "";
	$fieldLabelsm_overseas_type["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_overseas_type["English"]["deleted_date"] = "";
	$placeHoldersm_overseas_type["English"]["deleted_date"] = "";
	$fieldLabelsm_overseas_type["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_overseas_type["English"]["created_date"] = "";
	$placeHoldersm_overseas_type["English"]["created_date"] = "";
	$fieldLabelsm_overseas_type["English"]["created_by"] = "Created By";
	$fieldToolTipsm_overseas_type["English"]["created_by"] = "";
	$placeHoldersm_overseas_type["English"]["created_by"] = "";
	$fieldLabelsm_overseas_type["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_overseas_type["English"]["last_update_by"] = "";
	$placeHoldersm_overseas_type["English"]["last_update_by"] = "";
	$fieldLabelsm_overseas_type["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_overseas_type["English"]["last_update_date"] = "";
	$placeHoldersm_overseas_type["English"]["last_update_date"] = "";
	if (count($fieldToolTipsm_overseas_type["English"]))
		$tdatam_overseas_type[".isUseToolTips"] = true;
}


	$tdatam_overseas_type[".NCSearch"] = true;



$tdatam_overseas_type[".shortTableName"] = "m_overseas_type";
$tdatam_overseas_type[".nSecOptions"] = 0;

$tdatam_overseas_type[".mainTableOwnerID"] = "";
$tdatam_overseas_type[".entityType"] = 0;
$tdatam_overseas_type[".connId"] = "u736239518tsundbat154412412";


$tdatam_overseas_type[".strOriginalTableName"] = "m_overseas_type";

	



$tdatam_overseas_type[".showAddInPopup"] = false;

$tdatam_overseas_type[".showEditInPopup"] = false;

$tdatam_overseas_type[".showViewInPopup"] = false;

$tdatam_overseas_type[".listAjax"] = false;
//	temporary
//$tdatam_overseas_type[".listAjax"] = false;

	$tdatam_overseas_type[".audit"] = false;

	$tdatam_overseas_type[".locking"] = false;


$pages = $tdatam_overseas_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_overseas_type[".edit"] = true;
	$tdatam_overseas_type[".afterEditAction"] = 1;
	$tdatam_overseas_type[".closePopupAfterEdit"] = 1;
	$tdatam_overseas_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_overseas_type[".add"] = true;
$tdatam_overseas_type[".afterAddAction"] = 1;
$tdatam_overseas_type[".closePopupAfterAdd"] = 1;
$tdatam_overseas_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_overseas_type[".list"] = true;
}



$tdatam_overseas_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_overseas_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_overseas_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_overseas_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_overseas_type[".printFriendly"] = true;
}



$tdatam_overseas_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_overseas_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_overseas_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_overseas_type[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_overseas_type[".ajaxCodeSnippetAdded"] = false;

$tdatam_overseas_type[".buttonsAdded"] = false;

$tdatam_overseas_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_overseas_type[".isUseTimeForSearch"] = false;


$tdatam_overseas_type[".badgeColor"] = "D2691E";


$tdatam_overseas_type[".allSearchFields"] = array();
$tdatam_overseas_type[".filterFields"] = array();
$tdatam_overseas_type[".requiredSearchFields"] = array();

$tdatam_overseas_type[".googleLikeFields"] = array();
$tdatam_overseas_type[".googleLikeFields"][] = "id";
$tdatam_overseas_type[".googleLikeFields"][] = "overseas_name";
$tdatam_overseas_type[".googleLikeFields"][] = "is_active";
$tdatam_overseas_type[".googleLikeFields"][] = "is_delete";
$tdatam_overseas_type[".googleLikeFields"][] = "deleted_date";
$tdatam_overseas_type[".googleLikeFields"][] = "created_date";
$tdatam_overseas_type[".googleLikeFields"][] = "created_by";
$tdatam_overseas_type[".googleLikeFields"][] = "last_update_by";
$tdatam_overseas_type[".googleLikeFields"][] = "last_update_date";



$tdatam_overseas_type[".tableType"] = "list";

$tdatam_overseas_type[".printerPageOrientation"] = 0;
$tdatam_overseas_type[".nPrinterPageScale"] = 100;

$tdatam_overseas_type[".nPrinterSplitRecords"] = 40;

$tdatam_overseas_type[".geocodingEnabled"] = false;










$tdatam_overseas_type[".pageSize"] = 20;

$tdatam_overseas_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_overseas_type[".strOrderBy"] = $tstrOrderBy;

$tdatam_overseas_type[".orderindexes"] = array();


$tdatam_overseas_type[".sqlHead"] = "SELECT id,  	overseas_name,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$tdatam_overseas_type[".sqlFrom"] = "FROM m_overseas_type";
$tdatam_overseas_type[".sqlWhereExpr"] = "";
$tdatam_overseas_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_overseas_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_overseas_type[".arrGroupsPerPage"] = $arrGPP;

$tdatam_overseas_type[".highlightSearchResults"] = true;

$tableKeysm_overseas_type = array();
$tableKeysm_overseas_type[] = "id";
$tdatam_overseas_type[".Keys"] = $tableKeysm_overseas_type;


$tdatam_overseas_type[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","id");
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


	$tdatam_overseas_type["id"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "id";
//	overseas_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "overseas_name";
	$fdata["GoodName"] = "overseas_name";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","overseas_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "overseas_name";

		$fdata["sourceSingle"] = "overseas_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "overseas_name";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatam_overseas_type["overseas_name"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "overseas_name";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","is_active");
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


	$tdatam_overseas_type["is_active"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","is_delete");
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


	$tdatam_overseas_type["is_delete"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","deleted_date");
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


	$tdatam_overseas_type["deleted_date"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","created_date");
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


	$tdatam_overseas_type["created_date"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","created_by");
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


	$tdatam_overseas_type["created_by"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","last_update_by");
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


	$tdatam_overseas_type["last_update_by"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_overseas_type";
	$fdata["Label"] = GetFieldLabel("m_overseas_type","last_update_date");
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


	$tdatam_overseas_type["last_update_date"] = $fdata;
		$tdatam_overseas_type[".searchableFields"][] = "last_update_date";


$tables_data["m_overseas_type"]=&$tdatam_overseas_type;
$field_labels["m_overseas_type"] = &$fieldLabelsm_overseas_type;
$fieldToolTips["m_overseas_type"] = &$fieldToolTipsm_overseas_type;
$placeHolders["m_overseas_type"] = &$placeHoldersm_overseas_type;
$page_titles["m_overseas_type"] = &$pageTitlesm_overseas_type;


changeTextControlsToDate( "m_overseas_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_overseas_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_overseas_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_overseas_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	overseas_name,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$proto0["m_strFrom"] = "FROM m_overseas_type";
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
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_overseas_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "overseas_name",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto8["m_sql"] = "overseas_name";
$proto8["m_srcTableName"] = "m_overseas_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto10["m_sql"] = "is_active";
$proto10["m_srcTableName"] = "m_overseas_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto12["m_sql"] = "is_delete";
$proto12["m_srcTableName"] = "m_overseas_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto14["m_sql"] = "deleted_date";
$proto14["m_srcTableName"] = "m_overseas_type";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto16["m_sql"] = "created_date";
$proto16["m_srcTableName"] = "m_overseas_type";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto18["m_sql"] = "created_by";
$proto18["m_srcTableName"] = "m_overseas_type";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto20["m_sql"] = "last_update_by";
$proto20["m_srcTableName"] = "m_overseas_type";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_overseas_type",
	"m_srcTableName" => "m_overseas_type"
));

$proto22["m_sql"] = "last_update_date";
$proto22["m_srcTableName"] = "m_overseas_type";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "m_overseas_type";
$proto25["m_srcTableName"] = "m_overseas_type";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "overseas_name";
$proto25["m_columns"][] = "is_active";
$proto25["m_columns"][] = "is_delete";
$proto25["m_columns"][] = "deleted_date";
$proto25["m_columns"][] = "created_date";
$proto25["m_columns"][] = "created_by";
$proto25["m_columns"][] = "last_update_by";
$proto25["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "m_overseas_type";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "m_overseas_type";
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
$proto0["m_srcTableName"]="m_overseas_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_overseas_type = createSqlQuery_m_overseas_type();


	
				;

									

$tdatam_overseas_type[".sqlquery"] = $queryData_m_overseas_type;



$tdatam_overseas_type[".hasEvents"] = false;

?>