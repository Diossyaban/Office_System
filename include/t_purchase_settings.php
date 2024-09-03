<?php
$tdatat_purchase = array();
$tdatat_purchase[".searchableFields"] = array();
$tdatat_purchase[".ShortName"] = "t_purchase";
$tdatat_purchase[".OwnerID"] = "";
$tdatat_purchase[".OriginalTable"] = "t_purchase";


$tdatat_purchase[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_purchase[".originalPagesByType"] = $tdatat_purchase[".pagesByType"];
$tdatat_purchase[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_purchase[".originalPages"] = $tdatat_purchase[".pages"];
$tdatat_purchase[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_purchase[".originalDefaultPages"] = $tdatat_purchase[".defaultPages"];

//	field labels
$fieldLabelst_purchase = array();
$fieldToolTipst_purchase = array();
$pageTitlest_purchase = array();
$placeHolderst_purchase = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_purchase["English"] = array();
	$fieldToolTipst_purchase["English"] = array();
	$placeHolderst_purchase["English"] = array();
	$pageTitlest_purchase["English"] = array();
	$fieldLabelst_purchase["English"]["t_purchase_id"] = "T Purchase Id";
	$fieldToolTipst_purchase["English"]["t_purchase_id"] = "";
	$placeHolderst_purchase["English"]["t_purchase_id"] = "";
	$fieldLabelst_purchase["English"]["t_purchase_no"] = "Purchase No";
	$fieldToolTipst_purchase["English"]["t_purchase_no"] = "";
	$placeHolderst_purchase["English"]["t_purchase_no"] = "";
	$fieldLabelst_purchase["English"]["t_purchase_date"] = "Date";
	$fieldToolTipst_purchase["English"]["t_purchase_date"] = "";
	$placeHolderst_purchase["English"]["t_purchase_date"] = "";
	$fieldLabelst_purchase["English"]["t_purchase_supplier"] = "Supplier";
	$fieldToolTipst_purchase["English"]["t_purchase_supplier"] = "";
	$placeHolderst_purchase["English"]["t_purchase_supplier"] = "";
	$fieldLabelst_purchase["English"]["t_purchase_currency"] = "Currency";
	$fieldToolTipst_purchase["English"]["t_purchase_currency"] = "";
	$placeHolderst_purchase["English"]["t_purchase_currency"] = "";
	$fieldLabelst_purchase["English"]["t_purchase_rate"] = "Rate";
	$fieldToolTipst_purchase["English"]["t_purchase_rate"] = "";
	$placeHolderst_purchase["English"]["t_purchase_rate"] = "";
	$fieldLabelst_purchase["English"]["add_user"] = "Add User";
	$fieldToolTipst_purchase["English"]["add_user"] = "";
	$placeHolderst_purchase["English"]["add_user"] = "";
	$fieldLabelst_purchase["English"]["add_date"] = "Add Date";
	$fieldToolTipst_purchase["English"]["add_date"] = "";
	$placeHolderst_purchase["English"]["add_date"] = "";
	$fieldLabelst_purchase["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_purchase["English"]["edit_user"] = "";
	$placeHolderst_purchase["English"]["edit_user"] = "";
	$fieldLabelst_purchase["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_purchase["English"]["edit_date"] = "";
	$placeHolderst_purchase["English"]["edit_date"] = "";
	if (count($fieldToolTipst_purchase["English"]))
		$tdatat_purchase[".isUseToolTips"] = true;
}


	$tdatat_purchase[".NCSearch"] = true;



$tdatat_purchase[".shortTableName"] = "t_purchase";
$tdatat_purchase[".nSecOptions"] = 0;

$tdatat_purchase[".mainTableOwnerID"] = "";
$tdatat_purchase[".entityType"] = 0;
$tdatat_purchase[".connId"] = "u736239518tsundbat154412412";


$tdatat_purchase[".strOriginalTableName"] = "t_purchase";

	



$tdatat_purchase[".showAddInPopup"] = false;

$tdatat_purchase[".showEditInPopup"] = false;

$tdatat_purchase[".showViewInPopup"] = false;

$tdatat_purchase[".listAjax"] = false;
//	temporary
//$tdatat_purchase[".listAjax"] = false;

	$tdatat_purchase[".audit"] = false;

	$tdatat_purchase[".locking"] = false;


$pages = $tdatat_purchase[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_purchase[".edit"] = true;
	$tdatat_purchase[".afterEditAction"] = 1;
	$tdatat_purchase[".closePopupAfterEdit"] = 1;
	$tdatat_purchase[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_purchase[".add"] = true;
$tdatat_purchase[".afterAddAction"] = 1;
$tdatat_purchase[".closePopupAfterAdd"] = 1;
$tdatat_purchase[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_purchase[".list"] = true;
}



$tdatat_purchase[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_purchase[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_purchase[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_purchase[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_purchase[".printFriendly"] = true;
}



$tdatat_purchase[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_purchase[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_purchase[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_purchase[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_purchase[".ajaxCodeSnippetAdded"] = false;

$tdatat_purchase[".buttonsAdded"] = false;

$tdatat_purchase[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_purchase[".isUseTimeForSearch"] = false;


$tdatat_purchase[".badgeColor"] = "1E90FF";


$tdatat_purchase[".allSearchFields"] = array();
$tdatat_purchase[".filterFields"] = array();
$tdatat_purchase[".requiredSearchFields"] = array();

$tdatat_purchase[".googleLikeFields"] = array();
$tdatat_purchase[".googleLikeFields"][] = "t_purchase_id";
$tdatat_purchase[".googleLikeFields"][] = "t_purchase_no";
$tdatat_purchase[".googleLikeFields"][] = "t_purchase_date";
$tdatat_purchase[".googleLikeFields"][] = "t_purchase_supplier";
$tdatat_purchase[".googleLikeFields"][] = "t_purchase_currency";
$tdatat_purchase[".googleLikeFields"][] = "t_purchase_rate";
$tdatat_purchase[".googleLikeFields"][] = "add_user";
$tdatat_purchase[".googleLikeFields"][] = "add_date";
$tdatat_purchase[".googleLikeFields"][] = "edit_user";
$tdatat_purchase[".googleLikeFields"][] = "edit_date";



$tdatat_purchase[".tableType"] = "list";

$tdatat_purchase[".printerPageOrientation"] = 0;
$tdatat_purchase[".nPrinterPageScale"] = 100;

$tdatat_purchase[".nPrinterSplitRecords"] = 40;

$tdatat_purchase[".geocodingEnabled"] = false;










$tdatat_purchase[".pageSize"] = 20;

$tdatat_purchase[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_purchase[".strOrderBy"] = $tstrOrderBy;

$tdatat_purchase[".orderindexes"] = array();


$tdatat_purchase[".sqlHead"] = "SELECT t_purchase_id,  	t_purchase_no,  	t_purchase_date,  	t_purchase_supplier,  	t_purchase_currency,  	t_purchase_rate,  	add_user,  	add_date,  	edit_user,  	edit_date";
$tdatat_purchase[".sqlFrom"] = "FROM t_purchase";
$tdatat_purchase[".sqlWhereExpr"] = "";
$tdatat_purchase[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_purchase[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_purchase[".arrGroupsPerPage"] = $arrGPP;

$tdatat_purchase[".highlightSearchResults"] = true;

$tableKeyst_purchase = array();
$tableKeyst_purchase[] = "t_purchase_id";
$tdatat_purchase[".Keys"] = $tableKeyst_purchase;


$tdatat_purchase[".hideMobileList"] = array();




//	t_purchase_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_purchase_id";
	$fdata["GoodName"] = "t_purchase_id";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","t_purchase_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_purchase_id";

		$fdata["sourceSingle"] = "t_purchase_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_id";

	
	
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


	$tdatat_purchase["t_purchase_id"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "t_purchase_id";
//	t_purchase_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_purchase_no";
	$fdata["GoodName"] = "t_purchase_no";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","t_purchase_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_purchase_no";

		$fdata["sourceSingle"] = "t_purchase_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_no";

	
	
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


	$tdatat_purchase["t_purchase_no"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "t_purchase_no";
//	t_purchase_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_purchase_date";
	$fdata["GoodName"] = "t_purchase_date";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","t_purchase_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_purchase_date";

		$fdata["sourceSingle"] = "t_purchase_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_date";

	
	
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


	$tdatat_purchase["t_purchase_date"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "t_purchase_date";
//	t_purchase_supplier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_purchase_supplier";
	$fdata["GoodName"] = "t_purchase_supplier";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","t_purchase_supplier");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_purchase_supplier";

		$fdata["sourceSingle"] = "t_purchase_supplier";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_supplier";

	
	
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


	$tdatat_purchase["t_purchase_supplier"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "t_purchase_supplier";
//	t_purchase_currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_purchase_currency";
	$fdata["GoodName"] = "t_purchase_currency";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","t_purchase_currency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_purchase_currency";

		$fdata["sourceSingle"] = "t_purchase_currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_currency";

	
	
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


	$tdatat_purchase["t_purchase_currency"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "t_purchase_currency";
//	t_purchase_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_purchase_rate";
	$fdata["GoodName"] = "t_purchase_rate";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","t_purchase_rate");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_purchase_rate";

		$fdata["sourceSingle"] = "t_purchase_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_rate";

	
	
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


	$tdatat_purchase["t_purchase_rate"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "t_purchase_rate";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","add_user");
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


	$tdatat_purchase["add_user"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_date";

	
	
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


	$tdatat_purchase["add_date"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","edit_user");
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


	$tdatat_purchase["edit_user"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_purchase";
	$fdata["Label"] = GetFieldLabel("t_purchase","edit_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_date";

	
	
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


	$tdatat_purchase["edit_date"] = $fdata;
		$tdatat_purchase[".searchableFields"][] = "edit_date";


$tables_data["t_purchase"]=&$tdatat_purchase;
$field_labels["t_purchase"] = &$fieldLabelst_purchase;
$fieldToolTips["t_purchase"] = &$fieldToolTipst_purchase;
$placeHolders["t_purchase"] = &$placeHolderst_purchase;
$page_titles["t_purchase"] = &$pageTitlest_purchase;


changeTextControlsToDate( "t_purchase" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_purchase"] = array();
//	t_purchase_det
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_purchase_det";
		$detailsParam["dOriginalTable"] = "t_purchase_det";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_purchase_det";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_purchase_det");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_purchase"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_purchase"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_purchase"][$dIndex]["masterKeys"][]="t_purchase_id";

				$detailsTablesData["t_purchase"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_purchase"][$dIndex]["detailKeys"][]="t_purchase_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_purchase"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_purchase()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_purchase_id,  	t_purchase_no,  	t_purchase_date,  	t_purchase_supplier,  	t_purchase_currency,  	t_purchase_rate,  	add_user,  	add_date,  	edit_user,  	edit_date";
$proto0["m_strFrom"] = "FROM t_purchase";
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
	"m_strName" => "t_purchase_id",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto6["m_sql"] = "t_purchase_id";
$proto6["m_srcTableName"] = "t_purchase";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_no",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto8["m_sql"] = "t_purchase_no";
$proto8["m_srcTableName"] = "t_purchase";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_date",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto10["m_sql"] = "t_purchase_date";
$proto10["m_srcTableName"] = "t_purchase";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_supplier",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto12["m_sql"] = "t_purchase_supplier";
$proto12["m_srcTableName"] = "t_purchase";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_currency",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto14["m_sql"] = "t_purchase_currency";
$proto14["m_srcTableName"] = "t_purchase";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_rate",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto16["m_sql"] = "t_purchase_rate";
$proto16["m_srcTableName"] = "t_purchase";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto18["m_sql"] = "add_user";
$proto18["m_srcTableName"] = "t_purchase";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto20["m_sql"] = "add_date";
$proto20["m_srcTableName"] = "t_purchase";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto22["m_sql"] = "edit_user";
$proto22["m_srcTableName"] = "t_purchase";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_purchase",
	"m_srcTableName" => "t_purchase"
));

$proto24["m_sql"] = "edit_date";
$proto24["m_srcTableName"] = "t_purchase";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "t_purchase";
$proto27["m_srcTableName"] = "t_purchase";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "t_purchase_id";
$proto27["m_columns"][] = "t_purchase_no";
$proto27["m_columns"][] = "t_purchase_date";
$proto27["m_columns"][] = "t_purchase_supplier";
$proto27["m_columns"][] = "t_purchase_currency";
$proto27["m_columns"][] = "t_purchase_rate";
$proto27["m_columns"][] = "add_user";
$proto27["m_columns"][] = "add_date";
$proto27["m_columns"][] = "edit_user";
$proto27["m_columns"][] = "edit_date";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "t_purchase";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "t_purchase";
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
$proto0["m_srcTableName"]="t_purchase";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_purchase = createSqlQuery_t_purchase();


	
				;

										

$tdatat_purchase[".sqlquery"] = $queryData_t_purchase;



$tdatat_purchase[".hasEvents"] = false;

?>