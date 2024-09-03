<?php
$tdatat_letter_flow = array();
$tdatat_letter_flow[".searchableFields"] = array();
$tdatat_letter_flow[".ShortName"] = "t_letter_flow";
$tdatat_letter_flow[".OwnerID"] = "";
$tdatat_letter_flow[".OriginalTable"] = "t_letter_flow";


$tdatat_letter_flow[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_letter_flow[".originalPagesByType"] = $tdatat_letter_flow[".pagesByType"];
$tdatat_letter_flow[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_letter_flow[".originalPages"] = $tdatat_letter_flow[".pages"];
$tdatat_letter_flow[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_letter_flow[".originalDefaultPages"] = $tdatat_letter_flow[".defaultPages"];

//	field labels
$fieldLabelst_letter_flow = array();
$fieldToolTipst_letter_flow = array();
$pageTitlest_letter_flow = array();
$placeHolderst_letter_flow = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_letter_flow["English"] = array();
	$fieldToolTipst_letter_flow["English"] = array();
	$placeHolderst_letter_flow["English"] = array();
	$pageTitlest_letter_flow["English"] = array();
	$fieldLabelst_letter_flow["English"]["t_letter_flow_id"] = "T Letter Flow Id";
	$fieldToolTipst_letter_flow["English"]["t_letter_flow_id"] = "";
	$placeHolderst_letter_flow["English"]["t_letter_flow_id"] = "";
	$fieldLabelst_letter_flow["English"]["t_letter_flow_to_user"] = "Sender";
	$fieldToolTipst_letter_flow["English"]["t_letter_flow_to_user"] = "";
	$placeHolderst_letter_flow["English"]["t_letter_flow_to_user"] = "";
	$fieldLabelst_letter_flow["English"]["t_letter_flow_desc"] = "Recipient";
	$fieldToolTipst_letter_flow["English"]["t_letter_flow_desc"] = "";
	$placeHolderst_letter_flow["English"]["t_letter_flow_desc"] = "";
	$fieldLabelst_letter_flow["English"]["t_letter_flow_from"] = "T Letter Flow From";
	$fieldToolTipst_letter_flow["English"]["t_letter_flow_from"] = "";
	$placeHolderst_letter_flow["English"]["t_letter_flow_from"] = "";
	$fieldLabelst_letter_flow["English"]["t_letter_flow_date"] = "T Letter Flow Date";
	$fieldToolTipst_letter_flow["English"]["t_letter_flow_date"] = "";
	$placeHolderst_letter_flow["English"]["t_letter_flow_date"] = "";
	$fieldLabelst_letter_flow["English"]["letter_id"] = "Letter Id";
	$fieldToolTipst_letter_flow["English"]["letter_id"] = "";
	$placeHolderst_letter_flow["English"]["letter_id"] = "";
	$fieldLabelst_letter_flow["English"]["t_letter_flow_status"] = "Status";
	$fieldToolTipst_letter_flow["English"]["t_letter_flow_status"] = "";
	$placeHolderst_letter_flow["English"]["t_letter_flow_status"] = "";
	$pageTitlest_letter_flow["English"]["list"] = "";
	if (count($fieldToolTipst_letter_flow["English"]))
		$tdatat_letter_flow[".isUseToolTips"] = true;
}


	$tdatat_letter_flow[".NCSearch"] = true;


	$tdatat_letter_flow[".scrollGridBody"] = true;

$tdatat_letter_flow[".shortTableName"] = "t_letter_flow";
$tdatat_letter_flow[".nSecOptions"] = 0;

$tdatat_letter_flow[".mainTableOwnerID"] = "";
$tdatat_letter_flow[".entityType"] = 0;
$tdatat_letter_flow[".connId"] = "u736239518tsundbat154412412";


$tdatat_letter_flow[".strOriginalTableName"] = "t_letter_flow";

	



$tdatat_letter_flow[".showAddInPopup"] = false;

$tdatat_letter_flow[".showEditInPopup"] = false;

$tdatat_letter_flow[".showViewInPopup"] = false;

$tdatat_letter_flow[".listAjax"] = false;
//	temporary
//$tdatat_letter_flow[".listAjax"] = false;

	$tdatat_letter_flow[".audit"] = true;

	$tdatat_letter_flow[".locking"] = false;


$pages = $tdatat_letter_flow[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_letter_flow[".edit"] = true;
	$tdatat_letter_flow[".afterEditAction"] = 1;
	$tdatat_letter_flow[".closePopupAfterEdit"] = 1;
	$tdatat_letter_flow[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_letter_flow[".add"] = true;
$tdatat_letter_flow[".afterAddAction"] = 1;
$tdatat_letter_flow[".closePopupAfterAdd"] = 1;
$tdatat_letter_flow[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_letter_flow[".list"] = true;
}



$tdatat_letter_flow[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_letter_flow[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_letter_flow[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_letter_flow[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_letter_flow[".printFriendly"] = true;
}



$tdatat_letter_flow[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_letter_flow[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_letter_flow[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_letter_flow[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatat_letter_flow[".ajaxCodeSnippetAdded"] = false;

$tdatat_letter_flow[".buttonsAdded"] = false;

$tdatat_letter_flow[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_letter_flow[".isUseTimeForSearch"] = false;


$tdatat_letter_flow[".badgeColor"] = "db7093";


$tdatat_letter_flow[".allSearchFields"] = array();
$tdatat_letter_flow[".filterFields"] = array();
$tdatat_letter_flow[".requiredSearchFields"] = array();

$tdatat_letter_flow[".googleLikeFields"] = array();
$tdatat_letter_flow[".googleLikeFields"][] = "t_letter_flow_id";
$tdatat_letter_flow[".googleLikeFields"][] = "t_letter_flow_to_user";
$tdatat_letter_flow[".googleLikeFields"][] = "t_letter_flow_desc";
$tdatat_letter_flow[".googleLikeFields"][] = "t_letter_flow_from";
$tdatat_letter_flow[".googleLikeFields"][] = "t_letter_flow_date";
$tdatat_letter_flow[".googleLikeFields"][] = "letter_id";
$tdatat_letter_flow[".googleLikeFields"][] = "t_letter_flow_status";



$tdatat_letter_flow[".tableType"] = "list";

$tdatat_letter_flow[".printerPageOrientation"] = 0;
$tdatat_letter_flow[".nPrinterPageScale"] = 100;

$tdatat_letter_flow[".nPrinterSplitRecords"] = 40;

$tdatat_letter_flow[".geocodingEnabled"] = false;




$tdatat_letter_flow[".isDisplayLoading"] = true;






$tdatat_letter_flow[".pageSize"] = 20;

$tdatat_letter_flow[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_letter_flow[".strOrderBy"] = $tstrOrderBy;

$tdatat_letter_flow[".orderindexes"] = array();


$tdatat_letter_flow[".sqlHead"] = "SELECT t_letter_flow_id,  	t_letter_flow_to_user,  	t_letter_flow_desc,  	t_letter_flow_from,  	t_letter_flow_date,  	letter_id,  	t_letter_flow_status";
$tdatat_letter_flow[".sqlFrom"] = "FROM t_letter_flow";
$tdatat_letter_flow[".sqlWhereExpr"] = "";
$tdatat_letter_flow[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_letter_flow[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_letter_flow[".arrGroupsPerPage"] = $arrGPP;

$tdatat_letter_flow[".highlightSearchResults"] = true;

$tableKeyst_letter_flow = array();
$tableKeyst_letter_flow[] = "t_letter_flow_id";
$tdatat_letter_flow[".Keys"] = $tableKeyst_letter_flow;


$tdatat_letter_flow[".hideMobileList"] = array();




//	t_letter_flow_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_letter_flow_id";
	$fdata["GoodName"] = "t_letter_flow_id";
	$fdata["ownerTable"] = "t_letter_flow";
	$fdata["Label"] = GetFieldLabel("t_letter_flow","t_letter_flow_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_letter_flow_id";

		$fdata["sourceSingle"] = "t_letter_flow_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_letter_flow_id";

	
	
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


	$tdatat_letter_flow["t_letter_flow_id"] = $fdata;
		$tdatat_letter_flow[".searchableFields"][] = "t_letter_flow_id";
//	t_letter_flow_to_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_letter_flow_to_user";
	$fdata["GoodName"] = "t_letter_flow_to_user";
	$fdata["ownerTable"] = "t_letter_flow";
	$fdata["Label"] = GetFieldLabel("t_letter_flow","t_letter_flow_to_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_letter_flow_to_user";

		$fdata["sourceSingle"] = "t_letter_flow_to_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_letter_flow_to_user";

	
	
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


	$tdatat_letter_flow["t_letter_flow_to_user"] = $fdata;
		$tdatat_letter_flow[".searchableFields"][] = "t_letter_flow_to_user";
//	t_letter_flow_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_letter_flow_desc";
	$fdata["GoodName"] = "t_letter_flow_desc";
	$fdata["ownerTable"] = "t_letter_flow";
	$fdata["Label"] = GetFieldLabel("t_letter_flow","t_letter_flow_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_letter_flow_desc";

		$fdata["sourceSingle"] = "t_letter_flow_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_letter_flow_desc";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatat_letter_flow["t_letter_flow_desc"] = $fdata;
		$tdatat_letter_flow[".searchableFields"][] = "t_letter_flow_desc";
//	t_letter_flow_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_letter_flow_from";
	$fdata["GoodName"] = "t_letter_flow_from";
	$fdata["ownerTable"] = "t_letter_flow";
	$fdata["Label"] = GetFieldLabel("t_letter_flow","t_letter_flow_from");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_letter_flow_from";

		$fdata["sourceSingle"] = "t_letter_flow_from";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_letter_flow_from";

	
	
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


	$tdatat_letter_flow["t_letter_flow_from"] = $fdata;
		$tdatat_letter_flow[".searchableFields"][] = "t_letter_flow_from";
//	t_letter_flow_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_letter_flow_date";
	$fdata["GoodName"] = "t_letter_flow_date";
	$fdata["ownerTable"] = "t_letter_flow";
	$fdata["Label"] = GetFieldLabel("t_letter_flow","t_letter_flow_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_letter_flow_date";

		$fdata["sourceSingle"] = "t_letter_flow_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_letter_flow_date";

	
	
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


	$tdatat_letter_flow["t_letter_flow_date"] = $fdata;
		$tdatat_letter_flow[".searchableFields"][] = "t_letter_flow_date";
//	letter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "letter_id";
	$fdata["GoodName"] = "letter_id";
	$fdata["ownerTable"] = "t_letter_flow";
	$fdata["Label"] = GetFieldLabel("t_letter_flow","letter_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "letter_id";

		$fdata["sourceSingle"] = "letter_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_id";

	
	
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


	$tdatat_letter_flow["letter_id"] = $fdata;
		$tdatat_letter_flow[".searchableFields"][] = "letter_id";
//	t_letter_flow_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_letter_flow_status";
	$fdata["GoodName"] = "t_letter_flow_status";
	$fdata["ownerTable"] = "t_letter_flow";
	$fdata["Label"] = GetFieldLabel("t_letter_flow","t_letter_flow_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_letter_flow_status";

		$fdata["sourceSingle"] = "t_letter_flow_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_letter_flow_status";

	
	
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


	$tdatat_letter_flow["t_letter_flow_status"] = $fdata;
		$tdatat_letter_flow[".searchableFields"][] = "t_letter_flow_status";


$tables_data["t_letter_flow"]=&$tdatat_letter_flow;
$field_labels["t_letter_flow"] = &$fieldLabelst_letter_flow;
$fieldToolTips["t_letter_flow"] = &$fieldToolTipst_letter_flow;
$placeHolders["t_letter_flow"] = &$placeHolderst_letter_flow;
$page_titles["t_letter_flow"] = &$pageTitlest_letter_flow;


changeTextControlsToDate( "t_letter_flow" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_letter_flow"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_letter_flow"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_letter";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_letter";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_letter";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_letter_flow"][0] = $masterParams;
				$masterTablesData["t_letter_flow"][0]["masterKeys"] = array();
	$masterTablesData["t_letter_flow"][0]["masterKeys"][]="letter_id";
				$masterTablesData["t_letter_flow"][0]["detailKeys"] = array();
	$masterTablesData["t_letter_flow"][0]["detailKeys"][]="letter_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_letter_flow()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_letter_flow_id,  	t_letter_flow_to_user,  	t_letter_flow_desc,  	t_letter_flow_from,  	t_letter_flow_date,  	letter_id,  	t_letter_flow_status";
$proto0["m_strFrom"] = "FROM t_letter_flow";
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
	"m_strName" => "t_letter_flow_id",
	"m_strTable" => "t_letter_flow",
	"m_srcTableName" => "t_letter_flow"
));

$proto6["m_sql"] = "t_letter_flow_id";
$proto6["m_srcTableName"] = "t_letter_flow";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_letter_flow_to_user",
	"m_strTable" => "t_letter_flow",
	"m_srcTableName" => "t_letter_flow"
));

$proto8["m_sql"] = "t_letter_flow_to_user";
$proto8["m_srcTableName"] = "t_letter_flow";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_letter_flow_desc",
	"m_strTable" => "t_letter_flow",
	"m_srcTableName" => "t_letter_flow"
));

$proto10["m_sql"] = "t_letter_flow_desc";
$proto10["m_srcTableName"] = "t_letter_flow";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_letter_flow_from",
	"m_strTable" => "t_letter_flow",
	"m_srcTableName" => "t_letter_flow"
));

$proto12["m_sql"] = "t_letter_flow_from";
$proto12["m_srcTableName"] = "t_letter_flow";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_letter_flow_date",
	"m_strTable" => "t_letter_flow",
	"m_srcTableName" => "t_letter_flow"
));

$proto14["m_sql"] = "t_letter_flow_date";
$proto14["m_srcTableName"] = "t_letter_flow";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_id",
	"m_strTable" => "t_letter_flow",
	"m_srcTableName" => "t_letter_flow"
));

$proto16["m_sql"] = "letter_id";
$proto16["m_srcTableName"] = "t_letter_flow";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_letter_flow_status",
	"m_strTable" => "t_letter_flow",
	"m_srcTableName" => "t_letter_flow"
));

$proto18["m_sql"] = "t_letter_flow_status";
$proto18["m_srcTableName"] = "t_letter_flow";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "t_letter_flow";
$proto21["m_srcTableName"] = "t_letter_flow";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "t_letter_flow_id";
$proto21["m_columns"][] = "t_letter_flow_to_user";
$proto21["m_columns"][] = "t_letter_flow_desc";
$proto21["m_columns"][] = "t_letter_flow_from";
$proto21["m_columns"][] = "t_letter_flow_date";
$proto21["m_columns"][] = "letter_id";
$proto21["m_columns"][] = "t_letter_flow_status";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "t_letter_flow";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "t_letter_flow";
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
$proto0["m_srcTableName"]="t_letter_flow";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_letter_flow = createSqlQuery_t_letter_flow();


	
				;

							

$tdatat_letter_flow[".sqlquery"] = $queryData_t_letter_flow;



$tdatat_letter_flow[".hasEvents"] = false;

?>