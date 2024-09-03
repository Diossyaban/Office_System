<?php
$tdataoutmail_maps = array();
$tdataoutmail_maps[".searchableFields"] = array();
$tdataoutmail_maps[".ShortName"] = "outmail_maps";
$tdataoutmail_maps[".OwnerID"] = "";
$tdataoutmail_maps[".OriginalTable"] = "Tsun_uggroups";


$tdataoutmail_maps[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataoutmail_maps[".originalPagesByType"] = $tdataoutmail_maps[".pagesByType"];
$tdataoutmail_maps[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataoutmail_maps[".originalPages"] = $tdataoutmail_maps[".pages"];
$tdataoutmail_maps[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataoutmail_maps[".originalDefaultPages"] = $tdataoutmail_maps[".defaultPages"];

//	field labels
$fieldLabelsoutmail_maps = array();
$fieldToolTipsoutmail_maps = array();
$pageTitlesoutmail_maps = array();
$placeHoldersoutmail_maps = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoutmail_maps["English"] = array();
	$fieldToolTipsoutmail_maps["English"] = array();
	$placeHoldersoutmail_maps["English"] = array();
	$pageTitlesoutmail_maps["English"] = array();
	$fieldLabelsoutmail_maps["English"]["t_delivery_no"] = "T Delivery No";
	$fieldToolTipsoutmail_maps["English"]["t_delivery_no"] = "";
	$placeHoldersoutmail_maps["English"]["t_delivery_no"] = "";
	$fieldLabelsoutmail_maps["English"]["t_delivery_date"] = "T Delivery Date";
	$fieldToolTipsoutmail_maps["English"]["t_delivery_date"] = "";
	$placeHoldersoutmail_maps["English"]["t_delivery_date"] = "";
	$fieldLabelsoutmail_maps["English"]["t_delivery_feedback"] = "T Delivery Feedback";
	$fieldToolTipsoutmail_maps["English"]["t_delivery_feedback"] = "";
	$placeHoldersoutmail_maps["English"]["t_delivery_feedback"] = "";
	$fieldLabelsoutmail_maps["English"]["t_delivery_feedback_images"] = "T Delivery Feedback Images";
	$fieldToolTipsoutmail_maps["English"]["t_delivery_feedback_images"] = "";
	$placeHoldersoutmail_maps["English"]["t_delivery_feedback_images"] = "";
	$fieldLabelsoutmail_maps["English"]["t_delivery_feedback_sign"] = "T Delivery Feedback Sign";
	$fieldToolTipsoutmail_maps["English"]["t_delivery_feedback_sign"] = "";
	$placeHoldersoutmail_maps["English"]["t_delivery_feedback_sign"] = "";
	$fieldLabelsoutmail_maps["English"]["t_delivery_feedback_log"] = "T Delivery Feedback Log";
	$fieldToolTipsoutmail_maps["English"]["t_delivery_feedback_log"] = "";
	$placeHoldersoutmail_maps["English"]["t_delivery_feedback_log"] = "";
	$fieldLabelsoutmail_maps["English"]["t_delivery_feedback_lat"] = "T Delivery Feedback Lat";
	$fieldToolTipsoutmail_maps["English"]["t_delivery_feedback_lat"] = "";
	$placeHoldersoutmail_maps["English"]["t_delivery_feedback_lat"] = "";
	$fieldLabelsoutmail_maps["English"]["add_user"] = "Add User";
	$fieldToolTipsoutmail_maps["English"]["add_user"] = "";
	$placeHoldersoutmail_maps["English"]["add_user"] = "";
	$fieldLabelsoutmail_maps["English"]["add_date"] = "Add Date";
	$fieldToolTipsoutmail_maps["English"]["add_date"] = "";
	$placeHoldersoutmail_maps["English"]["add_date"] = "";
	if (count($fieldToolTipsoutmail_maps["English"]))
		$tdataoutmail_maps[".isUseToolTips"] = true;
}


	$tdataoutmail_maps[".NCSearch"] = true;



$tdataoutmail_maps[".shortTableName"] = "outmail_maps";
$tdataoutmail_maps[".nSecOptions"] = 0;

$tdataoutmail_maps[".mainTableOwnerID"] = "";
$tdataoutmail_maps[".entityType"] = 1;
$tdataoutmail_maps[".connId"] = "u736239518tsundbat154412412";


$tdataoutmail_maps[".strOriginalTableName"] = "Tsun_uggroups";

	



$tdataoutmail_maps[".showAddInPopup"] = false;

$tdataoutmail_maps[".showEditInPopup"] = false;

$tdataoutmail_maps[".showViewInPopup"] = false;

$tdataoutmail_maps[".listAjax"] = false;
//	temporary
//$tdataoutmail_maps[".listAjax"] = false;

	$tdataoutmail_maps[".audit"] = false;

	$tdataoutmail_maps[".locking"] = false;


$pages = $tdataoutmail_maps[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoutmail_maps[".edit"] = true;
	$tdataoutmail_maps[".afterEditAction"] = 1;
	$tdataoutmail_maps[".closePopupAfterEdit"] = 1;
	$tdataoutmail_maps[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoutmail_maps[".add"] = true;
$tdataoutmail_maps[".afterAddAction"] = 1;
$tdataoutmail_maps[".closePopupAfterAdd"] = 1;
$tdataoutmail_maps[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoutmail_maps[".list"] = true;
}



$tdataoutmail_maps[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoutmail_maps[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoutmail_maps[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoutmail_maps[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoutmail_maps[".printFriendly"] = true;
}



$tdataoutmail_maps[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoutmail_maps[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoutmail_maps[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoutmail_maps[".isUseAjaxSuggest"] = true;



																																																			

$tdataoutmail_maps[".ajaxCodeSnippetAdded"] = false;

$tdataoutmail_maps[".buttonsAdded"] = false;

$tdataoutmail_maps[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoutmail_maps[".isUseTimeForSearch"] = false;


$tdataoutmail_maps[".badgeColor"] = "E8926F";


$tdataoutmail_maps[".allSearchFields"] = array();
$tdataoutmail_maps[".filterFields"] = array();
$tdataoutmail_maps[".requiredSearchFields"] = array();

$tdataoutmail_maps[".googleLikeFields"] = array();
$tdataoutmail_maps[".googleLikeFields"][] = "t_delivery_no";
$tdataoutmail_maps[".googleLikeFields"][] = "t_delivery_date";
$tdataoutmail_maps[".googleLikeFields"][] = "t_delivery_feedback";
$tdataoutmail_maps[".googleLikeFields"][] = "t_delivery_feedback_images";
$tdataoutmail_maps[".googleLikeFields"][] = "t_delivery_feedback_sign";
$tdataoutmail_maps[".googleLikeFields"][] = "t_delivery_feedback_log";
$tdataoutmail_maps[".googleLikeFields"][] = "t_delivery_feedback_lat";
$tdataoutmail_maps[".googleLikeFields"][] = "add_user";
$tdataoutmail_maps[".googleLikeFields"][] = "add_date";



$tdataoutmail_maps[".tableType"] = "list";

$tdataoutmail_maps[".printerPageOrientation"] = 0;
$tdataoutmail_maps[".nPrinterPageScale"] = 100;

$tdataoutmail_maps[".nPrinterSplitRecords"] = 40;

$tdataoutmail_maps[".geocodingEnabled"] = true;
$tdataoutmail_maps[".geocodingData"] = array();
$tdataoutmail_maps[".geocodingData"]["latField"] = "Lat";
$tdataoutmail_maps[".geocodingData"]["lngField"] = "Lng";
$tdataoutmail_maps[".geocodingData"]["addressFields"] = array();
	$tdataoutmail_maps[".geocodingData"]["addressFields"][] = "t_delivery_feedback_lat";
	$tdataoutmail_maps[".geocodingData"]["addressFields"][] = "t_delivery_feedback_log";










$tdataoutmail_maps[".pageSize"] = 20;

$tdataoutmail_maps[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoutmail_maps[".strOrderBy"] = $tstrOrderBy;

$tdataoutmail_maps[".orderindexes"] = array();


$tdataoutmail_maps[".sqlHead"] = "SELECT t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  t_delivery_feedback.t_delivery_feedback,  t_delivery_feedback.t_delivery_feedback_images,  t_delivery_feedback.t_delivery_feedback_sign,  t_delivery_feedback.t_delivery_feedback_log,  t_delivery_feedback.t_delivery_feedback_lat,  t_delivery_feedback.add_user,  t_delivery_feedback.add_date";
$tdataoutmail_maps[".sqlFrom"] = "FROM t_delivery_feedback  INNER JOIN t_delivery ON t_delivery_feedback.t_delivery_id = t_delivery.t_delivery_id";
$tdataoutmail_maps[".sqlWhereExpr"] = "(t_delivery.add_user = ':session.UserID')";
$tdataoutmail_maps[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoutmail_maps[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoutmail_maps[".arrGroupsPerPage"] = $arrGPP;

$tdataoutmail_maps[".highlightSearchResults"] = true;

$tableKeysoutmail_maps = array();
$tdataoutmail_maps[".Keys"] = $tableKeysoutmail_maps;


$tdataoutmail_maps[".hideMobileList"] = array();




//	t_delivery_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_no";
	$fdata["GoodName"] = "t_delivery_no";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("outmail_maps","t_delivery_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_no";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_no";

	
	
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


	$tdataoutmail_maps["t_delivery_no"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "t_delivery_no";
//	t_delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_date";
	$fdata["GoodName"] = "t_delivery_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("outmail_maps","t_delivery_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_delivery_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_date";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataoutmail_maps["t_delivery_date"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "t_delivery_date";
//	t_delivery_feedback
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_feedback";
	$fdata["GoodName"] = "t_delivery_feedback";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("outmail_maps","t_delivery_feedback");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback";

	
	
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


	$tdataoutmail_maps["t_delivery_feedback"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "t_delivery_feedback";
//	t_delivery_feedback_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_feedback_images";
	$fdata["GoodName"] = "t_delivery_feedback_images";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("outmail_maps","t_delivery_feedback_images");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_images";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_images";

	
	
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


	$tdataoutmail_maps["t_delivery_feedback_images"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "t_delivery_feedback_images";
//	t_delivery_feedback_sign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_delivery_feedback_sign";
	$fdata["GoodName"] = "t_delivery_feedback_sign";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("outmail_maps","t_delivery_feedback_sign");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_sign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_sign";

	
	
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


	$tdataoutmail_maps["t_delivery_feedback_sign"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "t_delivery_feedback_sign";
//	t_delivery_feedback_log
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_delivery_feedback_log";
	$fdata["GoodName"] = "t_delivery_feedback_log";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("outmail_maps","t_delivery_feedback_log");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_log";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_log";

	
	
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


	$tdataoutmail_maps["t_delivery_feedback_log"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "t_delivery_feedback_log";
//	t_delivery_feedback_lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_delivery_feedback_lat";
	$fdata["GoodName"] = "t_delivery_feedback_lat";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("outmail_maps","t_delivery_feedback_lat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_lat";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_lat";

	
	
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


	$tdataoutmail_maps["t_delivery_feedback_lat"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "t_delivery_feedback_lat";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("outmail_maps","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.add_user";

	
	
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


	$tdataoutmail_maps["add_user"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("outmail_maps","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.add_date";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataoutmail_maps["add_date"] = $fdata;
		$tdataoutmail_maps[".searchableFields"][] = "add_date";


$tables_data["outmail_maps"]=&$tdataoutmail_maps;
$field_labels["outmail_maps"] = &$fieldLabelsoutmail_maps;
$fieldToolTips["outmail_maps"] = &$fieldToolTipsoutmail_maps;
$placeHolders["outmail_maps"] = &$placeHoldersoutmail_maps;
$page_titles["outmail_maps"] = &$pageTitlesoutmail_maps;


changeTextControlsToDate( "outmail_maps" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["outmail_maps"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["outmail_maps"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_outmail_maps()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery.t_delivery_no,  t_delivery.t_delivery_date,  t_delivery_feedback.t_delivery_feedback,  t_delivery_feedback.t_delivery_feedback_images,  t_delivery_feedback.t_delivery_feedback_sign,  t_delivery_feedback.t_delivery_feedback_log,  t_delivery_feedback.t_delivery_feedback_lat,  t_delivery_feedback.add_user,  t_delivery_feedback.add_date";
$proto0["m_strFrom"] = "FROM t_delivery_feedback  INNER JOIN t_delivery ON t_delivery_feedback.t_delivery_id = t_delivery.t_delivery_id";
$proto0["m_strWhere"] = "(t_delivery.add_user = ':session.UserID')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_delivery.add_user = ':session.UserID'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "outmail_maps"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= ':session.UserID'";
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
	"m_strName" => "t_delivery_no",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "outmail_maps"
));

$proto6["m_sql"] = "t_delivery.t_delivery_no";
$proto6["m_srcTableName"] = "outmail_maps";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "outmail_maps"
));

$proto8["m_sql"] = "t_delivery.t_delivery_date";
$proto8["m_srcTableName"] = "outmail_maps";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "outmail_maps"
));

$proto10["m_sql"] = "t_delivery_feedback.t_delivery_feedback";
$proto10["m_srcTableName"] = "outmail_maps";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_images",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "outmail_maps"
));

$proto12["m_sql"] = "t_delivery_feedback.t_delivery_feedback_images";
$proto12["m_srcTableName"] = "outmail_maps";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_sign",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "outmail_maps"
));

$proto14["m_sql"] = "t_delivery_feedback.t_delivery_feedback_sign";
$proto14["m_srcTableName"] = "outmail_maps";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_log",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "outmail_maps"
));

$proto16["m_sql"] = "t_delivery_feedback.t_delivery_feedback_log";
$proto16["m_srcTableName"] = "outmail_maps";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_lat",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "outmail_maps"
));

$proto18["m_sql"] = "t_delivery_feedback.t_delivery_feedback_lat";
$proto18["m_srcTableName"] = "outmail_maps";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "outmail_maps"
));

$proto20["m_sql"] = "t_delivery_feedback.add_user";
$proto20["m_srcTableName"] = "outmail_maps";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "outmail_maps"
));

$proto22["m_sql"] = "t_delivery_feedback.add_date";
$proto22["m_srcTableName"] = "outmail_maps";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "t_delivery_feedback";
$proto25["m_srcTableName"] = "outmail_maps";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "t_delivery_feedback_id";
$proto25["m_columns"][] = "t_delivery_id";
$proto25["m_columns"][] = "t_delivery_feedback";
$proto25["m_columns"][] = "t_delivery_feedback_images";
$proto25["m_columns"][] = "t_delivery_feedback_sign";
$proto25["m_columns"][] = "t_delivery_feedback_log";
$proto25["m_columns"][] = "t_delivery_feedback_lat";
$proto25["m_columns"][] = "add_user";
$proto25["m_columns"][] = "add_date";
$proto25["m_columns"][] = "Lat";
$proto25["m_columns"][] = "Lng";
$proto25["m_columns"][] = "url";
$proto25["m_columns"][] = "filename";
$proto25["m_columns"][] = "t_delivery_feedback_penerima";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "t_delivery_feedback";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "outmail_maps";
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
												$proto28=array();
$proto28["m_link"] = "SQLL_INNERJOIN";
			$proto29=array();
$proto29["m_strName"] = "t_delivery";
$proto29["m_srcTableName"] = "outmail_maps";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "t_delivery_id";
$proto29["m_columns"][] = "t_delivery_token";
$proto29["m_columns"][] = "t_delivery_no";
$proto29["m_columns"][] = "t_delivery_date";
$proto29["m_columns"][] = "t_delivery_type";
$proto29["m_columns"][] = "t_location_id";
$proto29["m_columns"][] = "t_select_table_text";
$proto29["m_columns"][] = "t_delivery_to_table";
$proto29["m_columns"][] = "t_delivery_to_text";
$proto29["m_columns"][] = "t_delivery_address";
$proto29["m_columns"][] = "t_delivery_desc";
$proto29["m_columns"][] = "t_delivery_status";
$proto29["m_columns"][] = "add_user";
$proto29["m_columns"][] = "add_date";
$proto29["m_columns"][] = "edit_user";
$proto29["m_columns"][] = "edit_date";
$proto29["m_columns"][] = "process_user";
$proto29["m_columns"][] = "process_date";
$proto29["m_columns"][] = "t_delivery_category_code";
$proto29["m_columns"][] = "last_user";
$proto29["m_columns"][] = "last_date";
$proto29["m_columns"][] = "nomor";
$proto29["m_columns"][] = "nomorurut";
$proto29["m_columns"][] = "t_delivery_location_address";
$proto29["m_columns"][] = "get_fl";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "INNER JOIN t_delivery ON t_delivery_feedback.t_delivery_id = t_delivery.t_delivery_id";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "outmail_maps";
$proto30=array();
$proto30["m_sql"] = "t_delivery.t_delivery_id = t_delivery_feedback.t_delivery_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "outmail_maps"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= t_delivery_feedback.t_delivery_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="outmail_maps";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_outmail_maps = createSqlQuery_outmail_maps();


	
				;

									

$tdataoutmail_maps[".sqlquery"] = $queryData_outmail_maps;



$tdataoutmail_maps[".hasEvents"] = false;

?>