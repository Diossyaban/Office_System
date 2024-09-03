<?php
$tdatam_meeting_room = array();
$tdatam_meeting_room[".searchableFields"] = array();
$tdatam_meeting_room[".ShortName"] = "m_meeting_room";
$tdatam_meeting_room[".OwnerID"] = "";
$tdatam_meeting_room[".OriginalTable"] = "m_meeting_room";


$tdatam_meeting_room[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_meeting_room[".originalPagesByType"] = $tdatam_meeting_room[".pagesByType"];
$tdatam_meeting_room[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_meeting_room[".originalPages"] = $tdatam_meeting_room[".pages"];
$tdatam_meeting_room[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_meeting_room[".originalDefaultPages"] = $tdatam_meeting_room[".defaultPages"];

//	field labels
$fieldLabelsm_meeting_room = array();
$fieldToolTipsm_meeting_room = array();
$pageTitlesm_meeting_room = array();
$placeHoldersm_meeting_room = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_meeting_room["English"] = array();
	$fieldToolTipsm_meeting_room["English"] = array();
	$placeHoldersm_meeting_room["English"] = array();
	$pageTitlesm_meeting_room["English"] = array();
	$fieldLabelsm_meeting_room["English"]["id"] = "Id";
	$fieldToolTipsm_meeting_room["English"]["id"] = "";
	$placeHoldersm_meeting_room["English"]["id"] = "";
	$fieldLabelsm_meeting_room["English"]["m_meeting_room_name"] = "M Meeting Room Name";
	$fieldToolTipsm_meeting_room["English"]["m_meeting_room_name"] = "";
	$placeHoldersm_meeting_room["English"]["m_meeting_room_name"] = "";
	$fieldLabelsm_meeting_room["English"]["m_meeting_room_location_id"] = "M Meeting Room Location Id";
	$fieldToolTipsm_meeting_room["English"]["m_meeting_room_location_id"] = "";
	$placeHoldersm_meeting_room["English"]["m_meeting_room_location_id"] = "";
	$fieldLabelsm_meeting_room["English"]["m_meeting_room_isactive"] = "M Meeting Room Isactive";
	$fieldToolTipsm_meeting_room["English"]["m_meeting_room_isactive"] = "";
	$placeHoldersm_meeting_room["English"]["m_meeting_room_isactive"] = "";
	$fieldLabelsm_meeting_room["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_meeting_room["English"]["is_active"] = "";
	$placeHoldersm_meeting_room["English"]["is_active"] = "";
	$fieldLabelsm_meeting_room["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_meeting_room["English"]["is_delete"] = "";
	$placeHoldersm_meeting_room["English"]["is_delete"] = "";
	$fieldLabelsm_meeting_room["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_meeting_room["English"]["deleted_date"] = "";
	$placeHoldersm_meeting_room["English"]["deleted_date"] = "";
	$fieldLabelsm_meeting_room["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_meeting_room["English"]["created_date"] = "";
	$placeHoldersm_meeting_room["English"]["created_date"] = "";
	$fieldLabelsm_meeting_room["English"]["created_by"] = "Created By";
	$fieldToolTipsm_meeting_room["English"]["created_by"] = "";
	$placeHoldersm_meeting_room["English"]["created_by"] = "";
	$fieldLabelsm_meeting_room["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_meeting_room["English"]["last_update_by"] = "";
	$placeHoldersm_meeting_room["English"]["last_update_by"] = "";
	$fieldLabelsm_meeting_room["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_meeting_room["English"]["last_update_date"] = "";
	$placeHoldersm_meeting_room["English"]["last_update_date"] = "";
	$fieldLabelsm_meeting_room["English"]["capacity"] = "Capacity";
	$fieldToolTipsm_meeting_room["English"]["capacity"] = "";
	$placeHoldersm_meeting_room["English"]["capacity"] = "";
	if (count($fieldToolTipsm_meeting_room["English"]))
		$tdatam_meeting_room[".isUseToolTips"] = true;
}


	$tdatam_meeting_room[".NCSearch"] = true;



$tdatam_meeting_room[".shortTableName"] = "m_meeting_room";
$tdatam_meeting_room[".nSecOptions"] = 0;

$tdatam_meeting_room[".mainTableOwnerID"] = "";
$tdatam_meeting_room[".entityType"] = 0;
$tdatam_meeting_room[".connId"] = "u736239518tsundbat154412412";


$tdatam_meeting_room[".strOriginalTableName"] = "m_meeting_room";

	



$tdatam_meeting_room[".showAddInPopup"] = false;

$tdatam_meeting_room[".showEditInPopup"] = false;

$tdatam_meeting_room[".showViewInPopup"] = false;

$tdatam_meeting_room[".listAjax"] = false;
//	temporary
//$tdatam_meeting_room[".listAjax"] = false;

	$tdatam_meeting_room[".audit"] = false;

	$tdatam_meeting_room[".locking"] = false;


$pages = $tdatam_meeting_room[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_meeting_room[".edit"] = true;
	$tdatam_meeting_room[".afterEditAction"] = 1;
	$tdatam_meeting_room[".closePopupAfterEdit"] = 1;
	$tdatam_meeting_room[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_meeting_room[".add"] = true;
$tdatam_meeting_room[".afterAddAction"] = 1;
$tdatam_meeting_room[".closePopupAfterAdd"] = 1;
$tdatam_meeting_room[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_meeting_room[".list"] = true;
}



$tdatam_meeting_room[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_meeting_room[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_meeting_room[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_meeting_room[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_meeting_room[".printFriendly"] = true;
}



$tdatam_meeting_room[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_meeting_room[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_meeting_room[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_meeting_room[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatam_meeting_room[".ajaxCodeSnippetAdded"] = false;

$tdatam_meeting_room[".buttonsAdded"] = false;

$tdatam_meeting_room[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_meeting_room[".isUseTimeForSearch"] = false;


$tdatam_meeting_room[".badgeColor"] = "d2691e";


$tdatam_meeting_room[".allSearchFields"] = array();
$tdatam_meeting_room[".filterFields"] = array();
$tdatam_meeting_room[".requiredSearchFields"] = array();

$tdatam_meeting_room[".googleLikeFields"] = array();
$tdatam_meeting_room[".googleLikeFields"][] = "id";
$tdatam_meeting_room[".googleLikeFields"][] = "m_meeting_room_name";
$tdatam_meeting_room[".googleLikeFields"][] = "m_meeting_room_location_id";
$tdatam_meeting_room[".googleLikeFields"][] = "m_meeting_room_isactive";
$tdatam_meeting_room[".googleLikeFields"][] = "is_active";
$tdatam_meeting_room[".googleLikeFields"][] = "is_delete";
$tdatam_meeting_room[".googleLikeFields"][] = "deleted_date";
$tdatam_meeting_room[".googleLikeFields"][] = "created_date";
$tdatam_meeting_room[".googleLikeFields"][] = "created_by";
$tdatam_meeting_room[".googleLikeFields"][] = "last_update_by";
$tdatam_meeting_room[".googleLikeFields"][] = "last_update_date";
$tdatam_meeting_room[".googleLikeFields"][] = "capacity";



$tdatam_meeting_room[".tableType"] = "list";

$tdatam_meeting_room[".printerPageOrientation"] = 0;
$tdatam_meeting_room[".nPrinterPageScale"] = 100;

$tdatam_meeting_room[".nPrinterSplitRecords"] = 40;

$tdatam_meeting_room[".geocodingEnabled"] = false;










$tdatam_meeting_room[".pageSize"] = 20;

$tdatam_meeting_room[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_meeting_room[".strOrderBy"] = $tstrOrderBy;

$tdatam_meeting_room[".orderindexes"] = array();


$tdatam_meeting_room[".sqlHead"] = "SELECT id,  	m_meeting_room_name,  	m_meeting_room_location_id,  	m_meeting_room_isactive,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date,  	capacity";
$tdatam_meeting_room[".sqlFrom"] = "FROM m_meeting_room";
$tdatam_meeting_room[".sqlWhereExpr"] = "";
$tdatam_meeting_room[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_meeting_room[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_meeting_room[".arrGroupsPerPage"] = $arrGPP;

$tdatam_meeting_room[".highlightSearchResults"] = true;

$tableKeysm_meeting_room = array();
$tableKeysm_meeting_room[] = "id";
$tdatam_meeting_room[".Keys"] = $tableKeysm_meeting_room;


$tdatam_meeting_room[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","id");
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


	$tdatam_meeting_room["id"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "id";
//	m_meeting_room_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_meeting_room_name";
	$fdata["GoodName"] = "m_meeting_room_name";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","m_meeting_room_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_meeting_room_name";

		$fdata["sourceSingle"] = "m_meeting_room_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_meeting_room_name";

	
	
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


	$tdatam_meeting_room["m_meeting_room_name"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "m_meeting_room_name";
//	m_meeting_room_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_meeting_room_location_id";
	$fdata["GoodName"] = "m_meeting_room_location_id";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","m_meeting_room_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_meeting_room_location_id";

		$fdata["sourceSingle"] = "m_meeting_room_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_meeting_room_location_id";

	
	
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


	$tdatam_meeting_room["m_meeting_room_location_id"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "m_meeting_room_location_id";
//	m_meeting_room_isactive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_meeting_room_isactive";
	$fdata["GoodName"] = "m_meeting_room_isactive";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","m_meeting_room_isactive");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_meeting_room_isactive";

		$fdata["sourceSingle"] = "m_meeting_room_isactive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_meeting_room_isactive";

	
	
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


	$tdatam_meeting_room["m_meeting_room_isactive"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "m_meeting_room_isactive";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","is_active");
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


	$tdatam_meeting_room["is_active"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","is_delete");
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


	$tdatam_meeting_room["is_delete"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","deleted_date");
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


	$tdatam_meeting_room["deleted_date"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","created_date");
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


	$tdatam_meeting_room["created_date"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","created_by");
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


	$tdatam_meeting_room["created_by"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","last_update_by");
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


	$tdatam_meeting_room["last_update_by"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","last_update_date");
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


	$tdatam_meeting_room["last_update_date"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "last_update_date";
//	capacity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "capacity";
	$fdata["GoodName"] = "capacity";
	$fdata["ownerTable"] = "m_meeting_room";
	$fdata["Label"] = GetFieldLabel("m_meeting_room","capacity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "capacity";

		$fdata["sourceSingle"] = "capacity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "capacity";

	
	
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


	$tdatam_meeting_room["capacity"] = $fdata;
		$tdatam_meeting_room[".searchableFields"][] = "capacity";


$tables_data["m_meeting_room"]=&$tdatam_meeting_room;
$field_labels["m_meeting_room"] = &$fieldLabelsm_meeting_room;
$fieldToolTips["m_meeting_room"] = &$fieldToolTipsm_meeting_room;
$placeHolders["m_meeting_room"] = &$placeHoldersm_meeting_room;
$page_titles["m_meeting_room"] = &$pageTitlesm_meeting_room;


changeTextControlsToDate( "m_meeting_room" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_meeting_room"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_meeting_room"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_meeting_book";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_meeting_book";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_meeting_book";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["m_meeting_room"][0] = $masterParams;
				$masterTablesData["m_meeting_room"][0]["masterKeys"] = array();
	$masterTablesData["m_meeting_room"][0]["masterKeys"][]="t_meeting_roomid";
				$masterTablesData["m_meeting_room"][0]["detailKeys"] = array();
	$masterTablesData["m_meeting_room"][0]["detailKeys"][]="m_meeting_room_name";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_meeting_room()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	m_meeting_room_name,  	m_meeting_room_location_id,  	m_meeting_room_isactive,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date,  	capacity";
$proto0["m_strFrom"] = "FROM m_meeting_room";
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
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_meeting_room";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_name",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto8["m_sql"] = "m_meeting_room_name";
$proto8["m_srcTableName"] = "m_meeting_room";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_location_id",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto10["m_sql"] = "m_meeting_room_location_id";
$proto10["m_srcTableName"] = "m_meeting_room";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_meeting_room_isactive",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto12["m_sql"] = "m_meeting_room_isactive";
$proto12["m_srcTableName"] = "m_meeting_room";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto14["m_sql"] = "is_active";
$proto14["m_srcTableName"] = "m_meeting_room";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto16["m_sql"] = "is_delete";
$proto16["m_srcTableName"] = "m_meeting_room";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto18["m_sql"] = "deleted_date";
$proto18["m_srcTableName"] = "m_meeting_room";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto20["m_sql"] = "created_date";
$proto20["m_srcTableName"] = "m_meeting_room";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto22["m_sql"] = "created_by";
$proto22["m_srcTableName"] = "m_meeting_room";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto24["m_sql"] = "last_update_by";
$proto24["m_srcTableName"] = "m_meeting_room";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto26["m_sql"] = "last_update_date";
$proto26["m_srcTableName"] = "m_meeting_room";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "capacity",
	"m_strTable" => "m_meeting_room",
	"m_srcTableName" => "m_meeting_room"
));

$proto28["m_sql"] = "capacity";
$proto28["m_srcTableName"] = "m_meeting_room";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "m_meeting_room";
$proto31["m_srcTableName"] = "m_meeting_room";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "id";
$proto31["m_columns"][] = "m_meeting_room_name";
$proto31["m_columns"][] = "m_meeting_room_location_id";
$proto31["m_columns"][] = "m_meeting_room_isactive";
$proto31["m_columns"][] = "is_active";
$proto31["m_columns"][] = "is_delete";
$proto31["m_columns"][] = "deleted_date";
$proto31["m_columns"][] = "created_date";
$proto31["m_columns"][] = "created_by";
$proto31["m_columns"][] = "last_update_by";
$proto31["m_columns"][] = "last_update_date";
$proto31["m_columns"][] = "capacity";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "m_meeting_room";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "m_meeting_room";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_meeting_room";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_meeting_room = createSqlQuery_m_meeting_room();


	
				;

												

$tdatam_meeting_room[".sqlquery"] = $queryData_m_meeting_room;



$tdatam_meeting_room[".hasEvents"] = false;

?>