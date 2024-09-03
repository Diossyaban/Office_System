<?php
$tdatat_delivery_feedback = array();
$tdatat_delivery_feedback[".searchableFields"] = array();
$tdatat_delivery_feedback[".ShortName"] = "t_delivery_feedback";
$tdatat_delivery_feedback[".OwnerID"] = "";
$tdatat_delivery_feedback[".OriginalTable"] = "t_delivery_feedback";


$tdatat_delivery_feedback[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatat_delivery_feedback[".originalPagesByType"] = $tdatat_delivery_feedback[".pagesByType"];
$tdatat_delivery_feedback[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_feedback[".originalPages"] = $tdatat_delivery_feedback[".pages"];
$tdatat_delivery_feedback[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatat_delivery_feedback[".originalDefaultPages"] = $tdatat_delivery_feedback[".defaultPages"];

//	field labels
$fieldLabelst_delivery_feedback = array();
$fieldToolTipst_delivery_feedback = array();
$pageTitlest_delivery_feedback = array();
$placeHolderst_delivery_feedback = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_feedback["English"] = array();
	$fieldToolTipst_delivery_feedback["English"] = array();
	$placeHolderst_delivery_feedback["English"] = array();
	$pageTitlest_delivery_feedback["English"] = array();
	$fieldLabelst_delivery_feedback["English"]["t_delivery_feedback_id"] = "T Delivery Feedback Id";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_feedback_id"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_feedback_id"] = "";
	$fieldLabelst_delivery_feedback["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_id"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_id"] = "";
	$fieldLabelst_delivery_feedback["English"]["t_delivery_feedback"] = "Feedback";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_feedback"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_feedback"] = "";
	$fieldLabelst_delivery_feedback["English"]["t_delivery_feedback_images"] = "Images/Photo";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_feedback_images"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_feedback_images"] = "";
	$fieldLabelst_delivery_feedback["English"]["t_delivery_feedback_sign"] = "Signature";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_feedback_sign"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_feedback_sign"] = "";
	$fieldLabelst_delivery_feedback["English"]["t_delivery_feedback_log"] = "Maps Information";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_feedback_log"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_feedback_log"] = "";
	$fieldLabelst_delivery_feedback["English"]["t_delivery_feedback_lat"] = "T Delivery Feedback Lat";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_feedback_lat"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_feedback_lat"] = "";
	$fieldLabelst_delivery_feedback["English"]["add_user"] = "Add User";
	$fieldToolTipst_delivery_feedback["English"]["add_user"] = "";
	$placeHolderst_delivery_feedback["English"]["add_user"] = "";
	$fieldLabelst_delivery_feedback["English"]["add_date"] = "Add Date";
	$fieldToolTipst_delivery_feedback["English"]["add_date"] = "";
	$placeHolderst_delivery_feedback["English"]["add_date"] = "";
	$fieldLabelst_delivery_feedback["English"]["Lat"] = "Lat";
	$fieldToolTipst_delivery_feedback["English"]["Lat"] = "";
	$placeHolderst_delivery_feedback["English"]["Lat"] = "";
	$fieldLabelst_delivery_feedback["English"]["Lng"] = "Lng";
	$fieldToolTipst_delivery_feedback["English"]["Lng"] = "";
	$placeHolderst_delivery_feedback["English"]["Lng"] = "";
	$fieldLabelst_delivery_feedback["English"]["url"] = "Url";
	$fieldToolTipst_delivery_feedback["English"]["url"] = "";
	$placeHolderst_delivery_feedback["English"]["url"] = "";
	$fieldLabelst_delivery_feedback["English"]["photo"] = "Photo";
	$fieldToolTipst_delivery_feedback["English"]["photo"] = "";
	$placeHolderst_delivery_feedback["English"]["photo"] = "";
	$fieldLabelst_delivery_feedback["English"]["sign"] = "Sign";
	$fieldToolTipst_delivery_feedback["English"]["sign"] = "";
	$placeHolderst_delivery_feedback["English"]["sign"] = "";
	$fieldLabelst_delivery_feedback["English"]["t_delivery_feedback_penerima"] = "Penerima";
	$fieldToolTipst_delivery_feedback["English"]["t_delivery_feedback_penerima"] = "";
	$placeHolderst_delivery_feedback["English"]["t_delivery_feedback_penerima"] = "";
	$pageTitlest_delivery_feedback["English"]["list"] = "";
	if (count($fieldToolTipst_delivery_feedback["English"]))
		$tdatat_delivery_feedback[".isUseToolTips"] = true;
}


	$tdatat_delivery_feedback[".NCSearch"] = true;



$tdatat_delivery_feedback[".shortTableName"] = "t_delivery_feedback";
$tdatat_delivery_feedback[".nSecOptions"] = 0;

$tdatat_delivery_feedback[".mainTableOwnerID"] = "";
$tdatat_delivery_feedback[".entityType"] = 0;
$tdatat_delivery_feedback[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_feedback[".strOriginalTableName"] = "t_delivery_feedback";

	



$tdatat_delivery_feedback[".showAddInPopup"] = false;

$tdatat_delivery_feedback[".showEditInPopup"] = false;

$tdatat_delivery_feedback[".showViewInPopup"] = false;

$tdatat_delivery_feedback[".listAjax"] = false;
//	temporary
//$tdatat_delivery_feedback[".listAjax"] = false;

	$tdatat_delivery_feedback[".audit"] = false;

	$tdatat_delivery_feedback[".locking"] = false;


$pages = $tdatat_delivery_feedback[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_feedback[".edit"] = true;
	$tdatat_delivery_feedback[".afterEditAction"] = 1;
	$tdatat_delivery_feedback[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_feedback[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_feedback[".add"] = true;
$tdatat_delivery_feedback[".afterAddAction"] = 1;
$tdatat_delivery_feedback[".closePopupAfterAdd"] = 1;
$tdatat_delivery_feedback[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_feedback[".list"] = true;
}



$tdatat_delivery_feedback[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_feedback[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_feedback[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_feedback[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_feedback[".printFriendly"] = true;
}



$tdatat_delivery_feedback[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_feedback[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_feedback[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_feedback[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatat_delivery_feedback[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_feedback[".buttonsAdded"] = false;

$tdatat_delivery_feedback[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_feedback[".isUseTimeForSearch"] = false;

$tdatat_delivery_feedback[".isUseFieldsMaps"] = true;

$tdatat_delivery_feedback[".badgeColor"] = "9acd32";


$tdatat_delivery_feedback[".allSearchFields"] = array();
$tdatat_delivery_feedback[".filterFields"] = array();
$tdatat_delivery_feedback[".requiredSearchFields"] = array();

$tdatat_delivery_feedback[".googleLikeFields"] = array();
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_feedback_id";
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_id";
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_feedback";
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_feedback_images";
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_feedback_sign";
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_feedback_log";
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_feedback_lat";
$tdatat_delivery_feedback[".googleLikeFields"][] = "add_user";
$tdatat_delivery_feedback[".googleLikeFields"][] = "add_date";
$tdatat_delivery_feedback[".googleLikeFields"][] = "Lat";
$tdatat_delivery_feedback[".googleLikeFields"][] = "Lng";
$tdatat_delivery_feedback[".googleLikeFields"][] = "url";
$tdatat_delivery_feedback[".googleLikeFields"][] = "photo";
$tdatat_delivery_feedback[".googleLikeFields"][] = "sign";
$tdatat_delivery_feedback[".googleLikeFields"][] = "t_delivery_feedback_penerima";



$tdatat_delivery_feedback[".tableType"] = "list";

$tdatat_delivery_feedback[".printerPageOrientation"] = 0;
$tdatat_delivery_feedback[".nPrinterPageScale"] = 100;

$tdatat_delivery_feedback[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_feedback[".geocodingEnabled"] = true;
$tdatat_delivery_feedback[".geocodingData"] = array();
$tdatat_delivery_feedback[".geocodingData"]["latField"] = "Lat";
$tdatat_delivery_feedback[".geocodingData"]["lngField"] = "Lng";
$tdatat_delivery_feedback[".geocodingData"]["addressFields"] = array();
	$tdatat_delivery_feedback[".geocodingData"]["addressFields"][] = "Lat";
	$tdatat_delivery_feedback[".geocodingData"]["addressFields"][] = "Lng";










$tdatat_delivery_feedback[".pageSize"] = 20;

$tdatat_delivery_feedback[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery_feedback[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_feedback[".orderindexes"] = array();


$tdatat_delivery_feedback[".sqlHead"] = "SELECT t_delivery_feedback.t_delivery_feedback_id,  t_delivery_feedback.t_delivery_id,  t_delivery_feedback.t_delivery_feedback,  t_delivery_feedback.t_delivery_feedback_images,  t_delivery_feedback.t_delivery_feedback_sign,  t_delivery_feedback.t_delivery_feedback_log,  t_delivery_feedback.t_delivery_feedback_lat,  t_delivery_feedback.add_user,  t_delivery_feedback.add_date,  t_delivery_feedback.Lat,  t_delivery_feedback.Lng,  t_delivery_feedback.url,  concat('https://talisman.host/messenger/Internal/', get_images.imagesname) AS photo,  concat('https://talisman.host/messenger/files/', get_images.signname) AS sign,  t_delivery_feedback.t_delivery_feedback_penerima";
$tdatat_delivery_feedback[".sqlFrom"] = "FROM t_delivery_feedback  INNER JOIN get_images ON t_delivery_feedback.t_delivery_feedback_id = get_images.t_delivery_feedback_id";
$tdatat_delivery_feedback[".sqlWhereExpr"] = "";
$tdatat_delivery_feedback[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_feedback[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_feedback[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_feedback[".highlightSearchResults"] = true;

$tableKeyst_delivery_feedback = array();
$tableKeyst_delivery_feedback[] = "t_delivery_feedback_id";
$tdatat_delivery_feedback[".Keys"] = $tableKeyst_delivery_feedback;


$tdatat_delivery_feedback[".hideMobileList"] = array();




//	t_delivery_feedback_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_feedback_id";
	$fdata["GoodName"] = "t_delivery_feedback_id";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_feedback_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_feedback_id";

		$fdata["sourceSingle"] = "t_delivery_feedback_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_id";

	
	
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


	$tdatat_delivery_feedback["t_delivery_feedback_id"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_feedback_id";
//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_id";

		$fdata["sourceSingle"] = "t_delivery_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_id";

	
	
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


	$tdatat_delivery_feedback["t_delivery_id"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_id";
//	t_delivery_feedback
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_feedback";
	$fdata["GoodName"] = "t_delivery_feedback";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_feedback");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback";

		$fdata["sourceSingle"] = "t_delivery_feedback";

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


	$tdatat_delivery_feedback["t_delivery_feedback"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_feedback";
//	t_delivery_feedback_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_feedback_images";
	$fdata["GoodName"] = "t_delivery_feedback_images";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_feedback_images");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_images";

		$fdata["sourceSingle"] = "t_delivery_feedback_images";

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


	$tdatat_delivery_feedback["t_delivery_feedback_images"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_feedback_images";
//	t_delivery_feedback_sign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_delivery_feedback_sign";
	$fdata["GoodName"] = "t_delivery_feedback_sign";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_feedback_sign");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_sign";

		$fdata["sourceSingle"] = "t_delivery_feedback_sign";

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


	$tdatat_delivery_feedback["t_delivery_feedback_sign"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_feedback_sign";
//	t_delivery_feedback_log
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_delivery_feedback_log";
	$fdata["GoodName"] = "t_delivery_feedback_log";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_feedback_log");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_log";

		$fdata["sourceSingle"] = "t_delivery_feedback_log";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_log";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 250;
	$vdata["mapData"]['height'] = 200;
	$vdata["mapData"]['address'] = "";
	$vdata["mapData"]['lat'] = "t_delivery_feedback_lat";
	$vdata["mapData"]['lng'] = "t_delivery_feedback_log";
	$vdata["mapData"]['desc'] = "t_delivery_feedback";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 15;

	
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


	$tdatat_delivery_feedback["t_delivery_feedback_log"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_feedback_log";
//	t_delivery_feedback_lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_delivery_feedback_lat";
	$fdata["GoodName"] = "t_delivery_feedback_lat";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_feedback_lat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_lat";

		$fdata["sourceSingle"] = "t_delivery_feedback_lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "";
	$vdata["mapData"]['lat'] = "t_delivery_feedback_lat";
	$vdata["mapData"]['lng'] = "t_delivery_feedback_log";
	$vdata["mapData"]['desc'] = "t_delivery_feedback";
	$vdata["mapData"]['mapIcon'] = "";
	$vdata["mapData"]['isMapIconCustom'] = 0;
		$vdata["mapData"]['zoom'] = 15;

	
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


	$tdatat_delivery_feedback["t_delivery_feedback_lat"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_feedback_lat";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

		$fdata["sourceSingle"] = "add_user";

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


	$tdatat_delivery_feedback["add_user"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.add_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatat_delivery_feedback["add_date"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "add_date";
//	Lat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Lat";
	$fdata["GoodName"] = "Lat";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","Lat");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lat";

		$fdata["sourceSingle"] = "Lat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.Lat";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Map");

	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["mapData"] = array();
	$vdata["mapData"]['width'] = 300;
	$vdata["mapData"]['height'] = 225;
	$vdata["mapData"]['address'] = "";
	$vdata["mapData"]['lat'] = "Lat";
	$vdata["mapData"]['lng'] = "Lng";
	$vdata["mapData"]['desc'] = "t_delivery_feedback";
	$vdata["mapData"]['mapIcon'] = "\$icon = \"images/menuicons/Boss.png\";";
	$vdata["mapData"]['isMapIconCustom'] = 1;
		$vdata["mapData"]['zoom'] = 15;

	
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


	$tdatat_delivery_feedback["Lat"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "Lat";
//	Lng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Lng";
	$fdata["GoodName"] = "Lng";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","Lng");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Lng";

		$fdata["sourceSingle"] = "Lng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.Lng";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 10;

	
	
	
	
	
	
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


	$tdatat_delivery_feedback["Lng"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "Lng";
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","url");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "url";

		$fdata["sourceSingle"] = "url";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.url";

	
	
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


	$tdatat_delivery_feedback["url"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "url";
//	photo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "photo";
	$fdata["GoodName"] = "photo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","photo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "photo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat('https://talisman.host/messenger/Internal/', get_images.imagesname)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 300;
	$vdata["ImageHeight"] = 200;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
		$vdata["fieldIsImageUrl"] = true;

	
	
	
	
	
	
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


	$tdatat_delivery_feedback["photo"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "photo";
//	sign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sign";
	$fdata["GoodName"] = "sign";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","sign");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat('https://talisman.host/messenger/files/', get_images.signname)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 300;
	$vdata["ImageHeight"] = 200;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
		$vdata["fieldIsImageUrl"] = true;

	
	
	
	
	
	
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


	$tdatat_delivery_feedback["sign"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "sign";
//	t_delivery_feedback_penerima
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_delivery_feedback_penerima";
	$fdata["GoodName"] = "t_delivery_feedback_penerima";
	$fdata["ownerTable"] = "t_delivery_feedback";
	$fdata["Label"] = GetFieldLabel("t_delivery_feedback","t_delivery_feedback_penerima");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_penerima";

		$fdata["sourceSingle"] = "t_delivery_feedback_penerima";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback.t_delivery_feedback_penerima";

	
	
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


	$tdatat_delivery_feedback["t_delivery_feedback_penerima"] = $fdata;
		$tdatat_delivery_feedback[".searchableFields"][] = "t_delivery_feedback_penerima";


$tables_data["t_delivery_feedback"]=&$tdatat_delivery_feedback;
$field_labels["t_delivery_feedback"] = &$fieldLabelst_delivery_feedback;
$fieldToolTips["t_delivery_feedback"] = &$fieldToolTipst_delivery_feedback;
$placeHolders["t_delivery_feedback"] = &$placeHolderst_delivery_feedback;
$page_titles["t_delivery_feedback"] = &$pageTitlest_delivery_feedback;


changeTextControlsToDate( "t_delivery_feedback" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_feedback"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_feedback"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_delivery";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_delivery";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_delivery";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_delivery_feedback"][0] = $masterParams;
				$masterTablesData["t_delivery_feedback"][0]["masterKeys"] = array();
	$masterTablesData["t_delivery_feedback"][0]["masterKeys"][]="t_delivery_id";
				$masterTablesData["t_delivery_feedback"][0]["detailKeys"] = array();
	$masterTablesData["t_delivery_feedback"][0]["detailKeys"][]="t_delivery_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_feedback()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery_feedback.t_delivery_feedback_id,  t_delivery_feedback.t_delivery_id,  t_delivery_feedback.t_delivery_feedback,  t_delivery_feedback.t_delivery_feedback_images,  t_delivery_feedback.t_delivery_feedback_sign,  t_delivery_feedback.t_delivery_feedback_log,  t_delivery_feedback.t_delivery_feedback_lat,  t_delivery_feedback.add_user,  t_delivery_feedback.add_date,  t_delivery_feedback.Lat,  t_delivery_feedback.Lng,  t_delivery_feedback.url,  concat('https://talisman.host/messenger/Internal/', get_images.imagesname) AS photo,  concat('https://talisman.host/messenger/files/', get_images.signname) AS sign,  t_delivery_feedback.t_delivery_feedback_penerima";
$proto0["m_strFrom"] = "FROM t_delivery_feedback  INNER JOIN get_images ON t_delivery_feedback.t_delivery_feedback_id = get_images.t_delivery_feedback_id";
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
	"m_strName" => "t_delivery_feedback_id",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto6["m_sql"] = "t_delivery_feedback.t_delivery_feedback_id";
$proto6["m_srcTableName"] = "t_delivery_feedback";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto8["m_sql"] = "t_delivery_feedback.t_delivery_id";
$proto8["m_srcTableName"] = "t_delivery_feedback";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto10["m_sql"] = "t_delivery_feedback.t_delivery_feedback";
$proto10["m_srcTableName"] = "t_delivery_feedback";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_images",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto12["m_sql"] = "t_delivery_feedback.t_delivery_feedback_images";
$proto12["m_srcTableName"] = "t_delivery_feedback";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_sign",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto14["m_sql"] = "t_delivery_feedback.t_delivery_feedback_sign";
$proto14["m_srcTableName"] = "t_delivery_feedback";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_log",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto16["m_sql"] = "t_delivery_feedback.t_delivery_feedback_log";
$proto16["m_srcTableName"] = "t_delivery_feedback";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_lat",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto18["m_sql"] = "t_delivery_feedback.t_delivery_feedback_lat";
$proto18["m_srcTableName"] = "t_delivery_feedback";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto20["m_sql"] = "t_delivery_feedback.add_user";
$proto20["m_srcTableName"] = "t_delivery_feedback";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto22["m_sql"] = "t_delivery_feedback.add_date";
$proto22["m_srcTableName"] = "t_delivery_feedback";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Lat",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto24["m_sql"] = "t_delivery_feedback.Lat";
$proto24["m_srcTableName"] = "t_delivery_feedback";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Lng",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto26["m_sql"] = "t_delivery_feedback.Lng";
$proto26["m_srcTableName"] = "t_delivery_feedback";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "url",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto28["m_sql"] = "t_delivery_feedback.url";
$proto28["m_srcTableName"] = "t_delivery_feedback";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$proto31=array();
$proto31["m_functiontype"] = "SQLF_CUSTOM";
$proto31["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'https://talisman.host/messenger/Internal/'"
));

$proto31["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "get_images.imagesname"
));

$proto31["m_arguments"][]=$obj;
$proto31["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto31);

$proto30["m_sql"] = "concat('https://talisman.host/messenger/Internal/', get_images.imagesname)";
$proto30["m_srcTableName"] = "t_delivery_feedback";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "photo";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_CUSTOM";
$proto35["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "'https://talisman.host/messenger/files/'"
));

$proto35["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "get_images.signname"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "concat('https://talisman.host/messenger/files/', get_images.signname)";
$proto34["m_srcTableName"] = "t_delivery_feedback";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "sign";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_penerima",
	"m_strTable" => "t_delivery_feedback",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto38["m_sql"] = "t_delivery_feedback.t_delivery_feedback_penerima";
$proto38["m_srcTableName"] = "t_delivery_feedback";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "t_delivery_feedback";
$proto41["m_srcTableName"] = "t_delivery_feedback";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "t_delivery_feedback_id";
$proto41["m_columns"][] = "t_delivery_id";
$proto41["m_columns"][] = "t_delivery_feedback";
$proto41["m_columns"][] = "t_delivery_feedback_images";
$proto41["m_columns"][] = "t_delivery_feedback_sign";
$proto41["m_columns"][] = "t_delivery_feedback_log";
$proto41["m_columns"][] = "t_delivery_feedback_lat";
$proto41["m_columns"][] = "add_user";
$proto41["m_columns"][] = "add_date";
$proto41["m_columns"][] = "Lat";
$proto41["m_columns"][] = "Lng";
$proto41["m_columns"][] = "url";
$proto41["m_columns"][] = "filename";
$proto41["m_columns"][] = "t_delivery_feedback_penerima";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "t_delivery_feedback";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "t_delivery_feedback";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "get_images";
$proto45["m_srcTableName"] = "t_delivery_feedback";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "t_delivery_feedback_id";
$proto45["m_columns"][] = "imagesname";
$proto45["m_columns"][] = "signname";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN get_images ON t_delivery_feedback.t_delivery_feedback_id = get_images.t_delivery_feedback_id";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "t_delivery_feedback";
$proto46=array();
$proto46["m_sql"] = "get_images.t_delivery_feedback_id = t_delivery_feedback.t_delivery_feedback_id";
$proto46["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_delivery_feedback_id",
	"m_strTable" => "get_images",
	"m_srcTableName" => "t_delivery_feedback"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
$proto46["m_strCase"] = "= t_delivery_feedback.t_delivery_feedback_id";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery_feedback";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_feedback = createSqlQuery_t_delivery_feedback();


	
				;

															

$tdatat_delivery_feedback[".sqlquery"] = $queryData_t_delivery_feedback;



$tdatat_delivery_feedback[".hasEvents"] = false;

?>