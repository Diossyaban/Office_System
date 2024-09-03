<?php
$tdatat_delivery_internal = array();
$tdatat_delivery_internal[".searchableFields"] = array();
$tdatat_delivery_internal[".ShortName"] = "t_delivery_internal";
$tdatat_delivery_internal[".OwnerID"] = "";
$tdatat_delivery_internal[".OriginalTable"] = "t_delivery_internal";


$tdatat_delivery_internal[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatat_delivery_internal[".originalPagesByType"] = $tdatat_delivery_internal[".pagesByType"];
$tdatat_delivery_internal[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_internal[".originalPages"] = $tdatat_delivery_internal[".pages"];
$tdatat_delivery_internal[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatat_delivery_internal[".originalDefaultPages"] = $tdatat_delivery_internal[".defaultPages"];

//	field labels
$fieldLabelst_delivery_internal = array();
$fieldToolTipst_delivery_internal = array();
$pageTitlest_delivery_internal = array();
$placeHolderst_delivery_internal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_internal["English"] = array();
	$fieldToolTipst_delivery_internal["English"] = array();
	$placeHolderst_delivery_internal["English"] = array();
	$pageTitlest_delivery_internal["English"] = array();
	$fieldLabelst_delivery_internal["English"]["t_delivery_internal"] = "T Delivery Internal";
	$fieldToolTipst_delivery_internal["English"]["t_delivery_internal"] = "";
	$placeHolderst_delivery_internal["English"]["t_delivery_internal"] = "";
	$fieldLabelst_delivery_internal["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipst_delivery_internal["English"]["t_delivery_id"] = "";
	$placeHolderst_delivery_internal["English"]["t_delivery_id"] = "";
	$fieldLabelst_delivery_internal["English"]["messenger"] = "Courier Name";
	$fieldToolTipst_delivery_internal["English"]["messenger"] = "";
	$placeHolderst_delivery_internal["English"]["messenger"] = "";
	$fieldLabelst_delivery_internal["English"]["t_delivery_internal_fl"] = "Cancel";
	$fieldToolTipst_delivery_internal["English"]["t_delivery_internal_fl"] = "";
	$placeHolderst_delivery_internal["English"]["t_delivery_internal_fl"] = "";
	$fieldLabelst_delivery_internal["English"]["add_user"] = "Add User";
	$fieldToolTipst_delivery_internal["English"]["add_user"] = "";
	$placeHolderst_delivery_internal["English"]["add_user"] = "";
	$fieldLabelst_delivery_internal["English"]["add_date"] = "Add Date";
	$fieldToolTipst_delivery_internal["English"]["add_date"] = "";
	$placeHolderst_delivery_internal["English"]["add_date"] = "";
	$fieldLabelst_delivery_internal["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_delivery_internal["English"]["edit_user"] = "";
	$placeHolderst_delivery_internal["English"]["edit_user"] = "";
	$fieldLabelst_delivery_internal["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_delivery_internal["English"]["edit_date"] = "";
	$placeHolderst_delivery_internal["English"]["edit_date"] = "";
	$fieldLabelst_delivery_internal["English"]["username"] = "Username";
	$fieldToolTipst_delivery_internal["English"]["username"] = "";
	$placeHolderst_delivery_internal["English"]["username"] = "";
	$fieldLabelst_delivery_internal["English"]["get_date"] = "Get Date";
	$fieldToolTipst_delivery_internal["English"]["get_date"] = "";
	$placeHolderst_delivery_internal["English"]["get_date"] = "";
	$fieldLabelst_delivery_internal["English"]["get_user"] = "Get User";
	$fieldToolTipst_delivery_internal["English"]["get_user"] = "";
	$placeHolderst_delivery_internal["English"]["get_user"] = "";
	$fieldLabelst_delivery_internal["English"]["get_fl"] = "Get Fl";
	$fieldToolTipst_delivery_internal["English"]["get_fl"] = "";
	$placeHolderst_delivery_internal["English"]["get_fl"] = "";
	$pageTitlest_delivery_internal["English"]["list"] = "";
	if (count($fieldToolTipst_delivery_internal["English"]))
		$tdatat_delivery_internal[".isUseToolTips"] = true;
}


	$tdatat_delivery_internal[".NCSearch"] = true;



$tdatat_delivery_internal[".shortTableName"] = "t_delivery_internal";
$tdatat_delivery_internal[".nSecOptions"] = 0;

$tdatat_delivery_internal[".mainTableOwnerID"] = "";
$tdatat_delivery_internal[".entityType"] = 0;
$tdatat_delivery_internal[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_internal[".strOriginalTableName"] = "t_delivery_internal";

	



$tdatat_delivery_internal[".showAddInPopup"] = false;

$tdatat_delivery_internal[".showEditInPopup"] = false;

$tdatat_delivery_internal[".showViewInPopup"] = false;

$tdatat_delivery_internal[".listAjax"] = false;
//	temporary
//$tdatat_delivery_internal[".listAjax"] = false;

	$tdatat_delivery_internal[".audit"] = false;

	$tdatat_delivery_internal[".locking"] = false;


$pages = $tdatat_delivery_internal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_internal[".edit"] = true;
	$tdatat_delivery_internal[".afterEditAction"] = 1;
	$tdatat_delivery_internal[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_internal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_internal[".add"] = true;
$tdatat_delivery_internal[".afterAddAction"] = 1;
$tdatat_delivery_internal[".closePopupAfterAdd"] = 1;
$tdatat_delivery_internal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_internal[".list"] = true;
}



$tdatat_delivery_internal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_internal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_internal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_internal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_internal[".printFriendly"] = true;
}



$tdatat_delivery_internal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_internal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_internal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_internal[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatat_delivery_internal[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_internal[".buttonsAdded"] = false;

$tdatat_delivery_internal[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_internal[".isUseTimeForSearch"] = false;


$tdatat_delivery_internal[".badgeColor"] = "cfae83";


$tdatat_delivery_internal[".allSearchFields"] = array();
$tdatat_delivery_internal[".filterFields"] = array();
$tdatat_delivery_internal[".requiredSearchFields"] = array();

$tdatat_delivery_internal[".googleLikeFields"] = array();
$tdatat_delivery_internal[".googleLikeFields"][] = "t_delivery_internal";
$tdatat_delivery_internal[".googleLikeFields"][] = "t_delivery_id";
$tdatat_delivery_internal[".googleLikeFields"][] = "messenger";
$tdatat_delivery_internal[".googleLikeFields"][] = "t_delivery_internal_fl";
$tdatat_delivery_internal[".googleLikeFields"][] = "add_user";
$tdatat_delivery_internal[".googleLikeFields"][] = "add_date";
$tdatat_delivery_internal[".googleLikeFields"][] = "edit_user";
$tdatat_delivery_internal[".googleLikeFields"][] = "edit_date";
$tdatat_delivery_internal[".googleLikeFields"][] = "username";
$tdatat_delivery_internal[".googleLikeFields"][] = "get_date";
$tdatat_delivery_internal[".googleLikeFields"][] = "get_user";
$tdatat_delivery_internal[".googleLikeFields"][] = "get_fl";



$tdatat_delivery_internal[".tableType"] = "list";

$tdatat_delivery_internal[".printerPageOrientation"] = 0;
$tdatat_delivery_internal[".nPrinterPageScale"] = 100;

$tdatat_delivery_internal[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_internal[".geocodingEnabled"] = false;










$tdatat_delivery_internal[".pageSize"] = 20;

$tdatat_delivery_internal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery_internal[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_internal[".orderindexes"] = array();


$tdatat_delivery_internal[".sqlHead"] = "SELECT t_delivery_internal,  	t_delivery_id,  	messenger,  	t_delivery_internal_fl,  	add_user,  	add_date,  	edit_user,  	edit_date,  	username,  	get_date,  	get_user,  	get_fl";
$tdatat_delivery_internal[".sqlFrom"] = "FROM t_delivery_internal";
$tdatat_delivery_internal[".sqlWhereExpr"] = "";
$tdatat_delivery_internal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_internal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_internal[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_internal[".highlightSearchResults"] = true;

$tableKeyst_delivery_internal = array();
$tableKeyst_delivery_internal[] = "t_delivery_internal";
$tdatat_delivery_internal[".Keys"] = $tableKeyst_delivery_internal;


$tdatat_delivery_internal[".hideMobileList"] = array();




//	t_delivery_internal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_internal";
	$fdata["GoodName"] = "t_delivery_internal";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","t_delivery_internal");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_internal";

		$fdata["sourceSingle"] = "t_delivery_internal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_internal";

	
	
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


	$tdatat_delivery_internal["t_delivery_internal"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "t_delivery_internal";
//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","t_delivery_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_id";

		$fdata["sourceSingle"] = "t_delivery_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_id";

	
	
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


	$tdatat_delivery_internal["t_delivery_id"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "t_delivery_id";
//	messenger
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "messenger";
	$fdata["GoodName"] = "messenger";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","messenger");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "messenger";

		$fdata["sourceSingle"] = "messenger";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "messenger";

	
	
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
	$edata["LookupTable"] = "m_courier";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"username", 'lookupF'=>"m_courier_username");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_courier_name";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "m_courier_name";

	

	
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


	$tdatat_delivery_internal["messenger"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "messenger";
//	t_delivery_internal_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_internal_fl";
	$fdata["GoodName"] = "t_delivery_internal_fl";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","t_delivery_internal_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_internal_fl";

		$fdata["sourceSingle"] = "t_delivery_internal_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_internal_fl";

	
	
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


	$tdatat_delivery_internal["t_delivery_internal_fl"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "t_delivery_internal_fl";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

		$fdata["sourceSingle"] = "add_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_user";

	
	
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


	$tdatat_delivery_internal["add_user"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_date";

	
	
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


	$tdatat_delivery_internal["add_date"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","edit_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edit_user";

		$fdata["sourceSingle"] = "edit_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_user";

	
	
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


	$tdatat_delivery_internal["edit_user"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","edit_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_date";

	
	
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


	$tdatat_delivery_internal["edit_date"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "edit_date";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatat_delivery_internal["username"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "username";
//	get_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "get_date";
	$fdata["GoodName"] = "get_date";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","get_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "get_date";

		$fdata["sourceSingle"] = "get_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "get_date";

	
	
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


	$tdatat_delivery_internal["get_date"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "get_date";
//	get_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "get_user";
	$fdata["GoodName"] = "get_user";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","get_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "get_user";

		$fdata["sourceSingle"] = "get_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "get_user";

	
	
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


	$tdatat_delivery_internal["get_user"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "get_user";
//	get_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "get_fl";
	$fdata["GoodName"] = "get_fl";
	$fdata["ownerTable"] = "t_delivery_internal";
	$fdata["Label"] = GetFieldLabel("t_delivery_internal","get_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "get_fl";

		$fdata["sourceSingle"] = "get_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "get_fl";

	
	
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


	$tdatat_delivery_internal["get_fl"] = $fdata;
		$tdatat_delivery_internal[".searchableFields"][] = "get_fl";


$tables_data["t_delivery_internal"]=&$tdatat_delivery_internal;
$field_labels["t_delivery_internal"] = &$fieldLabelst_delivery_internal;
$fieldToolTips["t_delivery_internal"] = &$fieldToolTipst_delivery_internal;
$placeHolders["t_delivery_internal"] = &$placeHolderst_delivery_internal;
$page_titles["t_delivery_internal"] = &$pageTitlest_delivery_internal;


changeTextControlsToDate( "t_delivery_internal" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_internal"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_internal"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_delivery";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_delivery_x";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_delivery_x";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_delivery_internal"][0] = $masterParams;
				$masterTablesData["t_delivery_internal"][0]["masterKeys"] = array();
	$masterTablesData["t_delivery_internal"][0]["masterKeys"][]="t_delivery_id";
				$masterTablesData["t_delivery_internal"][0]["detailKeys"] = array();
	$masterTablesData["t_delivery_internal"][0]["detailKeys"][]="t_delivery_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_internal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery_internal,  	t_delivery_id,  	messenger,  	t_delivery_internal_fl,  	add_user,  	add_date,  	edit_user,  	edit_date,  	username,  	get_date,  	get_user,  	get_fl";
$proto0["m_strFrom"] = "FROM t_delivery_internal";
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
	"m_strName" => "t_delivery_internal",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto6["m_sql"] = "t_delivery_internal";
$proto6["m_srcTableName"] = "t_delivery_internal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto8["m_sql"] = "t_delivery_id";
$proto8["m_srcTableName"] = "t_delivery_internal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "messenger",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto10["m_sql"] = "messenger";
$proto10["m_srcTableName"] = "t_delivery_internal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_internal_fl",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto12["m_sql"] = "t_delivery_internal_fl";
$proto12["m_srcTableName"] = "t_delivery_internal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto14["m_sql"] = "add_user";
$proto14["m_srcTableName"] = "t_delivery_internal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto16["m_sql"] = "add_date";
$proto16["m_srcTableName"] = "t_delivery_internal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto18["m_sql"] = "edit_user";
$proto18["m_srcTableName"] = "t_delivery_internal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto20["m_sql"] = "edit_date";
$proto20["m_srcTableName"] = "t_delivery_internal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto22["m_sql"] = "username";
$proto22["m_srcTableName"] = "t_delivery_internal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "get_date",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto24["m_sql"] = "get_date";
$proto24["m_srcTableName"] = "t_delivery_internal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "get_user",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto26["m_sql"] = "get_user";
$proto26["m_srcTableName"] = "t_delivery_internal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "get_fl",
	"m_strTable" => "t_delivery_internal",
	"m_srcTableName" => "t_delivery_internal"
));

$proto28["m_sql"] = "get_fl";
$proto28["m_srcTableName"] = "t_delivery_internal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "t_delivery_internal";
$proto31["m_srcTableName"] = "t_delivery_internal";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "t_delivery_internal";
$proto31["m_columns"][] = "t_delivery_id";
$proto31["m_columns"][] = "messenger";
$proto31["m_columns"][] = "t_delivery_internal_fl";
$proto31["m_columns"][] = "add_user";
$proto31["m_columns"][] = "add_date";
$proto31["m_columns"][] = "edit_user";
$proto31["m_columns"][] = "edit_date";
$proto31["m_columns"][] = "username";
$proto31["m_columns"][] = "get_date";
$proto31["m_columns"][] = "get_user";
$proto31["m_columns"][] = "get_fl";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "t_delivery_internal";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "t_delivery_internal";
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
$proto0["m_srcTableName"]="t_delivery_internal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_internal = createSqlQuery_t_delivery_internal();


	
				;

												

$tdatat_delivery_internal[".sqlquery"] = $queryData_t_delivery_internal;



include_once(getabspath("include/t_delivery_internal_events.php"));
$tdatat_delivery_internal[".hasEvents"] = true;

?>