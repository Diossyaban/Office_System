<?php
$tdatat_delivery_details = array();
$tdatat_delivery_details[".searchableFields"] = array();
$tdatat_delivery_details[".ShortName"] = "t_delivery_details";
$tdatat_delivery_details[".OwnerID"] = "";
$tdatat_delivery_details[".OriginalTable"] = "t_delivery_details";


$tdatat_delivery_details[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatat_delivery_details[".originalPagesByType"] = $tdatat_delivery_details[".pagesByType"];
$tdatat_delivery_details[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_details[".originalPages"] = $tdatat_delivery_details[".pages"];
$tdatat_delivery_details[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatat_delivery_details[".originalDefaultPages"] = $tdatat_delivery_details[".defaultPages"];

//	field labels
$fieldLabelst_delivery_details = array();
$fieldToolTipst_delivery_details = array();
$pageTitlest_delivery_details = array();
$placeHolderst_delivery_details = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_details["English"] = array();
	$fieldToolTipst_delivery_details["English"] = array();
	$placeHolderst_delivery_details["English"] = array();
	$pageTitlest_delivery_details["English"] = array();
	$fieldLabelst_delivery_details["English"]["t_delivery_detail_id"] = "T Delivery Detail Id";
	$fieldToolTipst_delivery_details["English"]["t_delivery_detail_id"] = "";
	$placeHolderst_delivery_details["English"]["t_delivery_detail_id"] = "";
	$fieldLabelst_delivery_details["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipst_delivery_details["English"]["t_delivery_id"] = "";
	$placeHolderst_delivery_details["English"]["t_delivery_id"] = "";
	$fieldLabelst_delivery_details["English"]["t_delivery_details_type"] = "Type";
	$fieldToolTipst_delivery_details["English"]["t_delivery_details_type"] = "";
	$placeHolderst_delivery_details["English"]["t_delivery_details_type"] = "";
	$fieldLabelst_delivery_details["English"]["t_delivery_details_desc"] = "Description";
	$fieldToolTipst_delivery_details["English"]["t_delivery_details_desc"] = "";
	$placeHolderst_delivery_details["English"]["t_delivery_details_desc"] = "";
	$fieldLabelst_delivery_details["English"]["t_delivery_details_qty"] = "Qty";
	$fieldToolTipst_delivery_details["English"]["t_delivery_details_qty"] = "";
	$placeHolderst_delivery_details["English"]["t_delivery_details_qty"] = "";
	$fieldLabelst_delivery_details["English"]["t_delivery_details_fl"] = "Cancel";
	$fieldToolTipst_delivery_details["English"]["t_delivery_details_fl"] = "";
	$placeHolderst_delivery_details["English"]["t_delivery_details_fl"] = "";
	$pageTitlest_delivery_details["English"]["list"] = "";
	if (count($fieldToolTipst_delivery_details["English"]))
		$tdatat_delivery_details[".isUseToolTips"] = true;
}


	$tdatat_delivery_details[".NCSearch"] = true;


	$tdatat_delivery_details[".scrollGridBody"] = true;

$tdatat_delivery_details[".shortTableName"] = "t_delivery_details";
$tdatat_delivery_details[".nSecOptions"] = 0;

$tdatat_delivery_details[".mainTableOwnerID"] = "";
$tdatat_delivery_details[".entityType"] = 0;
$tdatat_delivery_details[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_details[".strOriginalTableName"] = "t_delivery_details";

	



$tdatat_delivery_details[".showAddInPopup"] = false;

$tdatat_delivery_details[".showEditInPopup"] = false;

$tdatat_delivery_details[".showViewInPopup"] = false;

$tdatat_delivery_details[".listAjax"] = false;
//	temporary
//$tdatat_delivery_details[".listAjax"] = false;

	$tdatat_delivery_details[".audit"] = false;

	$tdatat_delivery_details[".locking"] = false;


$pages = $tdatat_delivery_details[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_details[".edit"] = true;
	$tdatat_delivery_details[".afterEditAction"] = 1;
	$tdatat_delivery_details[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_details[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_details[".add"] = true;
$tdatat_delivery_details[".afterAddAction"] = 1;
$tdatat_delivery_details[".closePopupAfterAdd"] = 1;
$tdatat_delivery_details[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_details[".list"] = true;
}



$tdatat_delivery_details[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_details[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_details[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_details[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_details[".printFriendly"] = true;
}



$tdatat_delivery_details[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_details[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_details[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_details[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatat_delivery_details[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_details[".buttonsAdded"] = false;

$tdatat_delivery_details[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_details[".isUseTimeForSearch"] = false;


$tdatat_delivery_details[".badgeColor"] = "4169e1";


$tdatat_delivery_details[".allSearchFields"] = array();
$tdatat_delivery_details[".filterFields"] = array();
$tdatat_delivery_details[".requiredSearchFields"] = array();

$tdatat_delivery_details[".googleLikeFields"] = array();
$tdatat_delivery_details[".googleLikeFields"][] = "t_delivery_detail_id";
$tdatat_delivery_details[".googleLikeFields"][] = "t_delivery_id";
$tdatat_delivery_details[".googleLikeFields"][] = "t_delivery_details_type";
$tdatat_delivery_details[".googleLikeFields"][] = "t_delivery_details_desc";
$tdatat_delivery_details[".googleLikeFields"][] = "t_delivery_details_qty";
$tdatat_delivery_details[".googleLikeFields"][] = "t_delivery_details_fl";



$tdatat_delivery_details[".tableType"] = "list";

$tdatat_delivery_details[".printerPageOrientation"] = 0;
$tdatat_delivery_details[".nPrinterPageScale"] = 100;

$tdatat_delivery_details[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_details[".geocodingEnabled"] = false;










$tdatat_delivery_details[".pageSize"] = 20;

$tdatat_delivery_details[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery_details[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_details[".orderindexes"] = array();


$tdatat_delivery_details[".sqlHead"] = "SELECT t_delivery_detail_id,  	t_delivery_id,  	t_delivery_details_type,  	t_delivery_details_desc,  	t_delivery_details_qty,  	t_delivery_details_fl";
$tdatat_delivery_details[".sqlFrom"] = "FROM t_delivery_details";
$tdatat_delivery_details[".sqlWhereExpr"] = "";
$tdatat_delivery_details[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_details[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_details[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_details[".highlightSearchResults"] = true;

$tableKeyst_delivery_details = array();
$tableKeyst_delivery_details[] = "t_delivery_detail_id";
$tableKeyst_delivery_details[] = "t_delivery_id";
$tdatat_delivery_details[".Keys"] = $tableKeyst_delivery_details;


$tdatat_delivery_details[".hideMobileList"] = array();




//	t_delivery_detail_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_detail_id";
	$fdata["GoodName"] = "t_delivery_detail_id";
	$fdata["ownerTable"] = "t_delivery_details";
	$fdata["Label"] = GetFieldLabel("t_delivery_details","t_delivery_detail_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_detail_id";

		$fdata["sourceSingle"] = "t_delivery_detail_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_detail_id";

	
	
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


	$tdatat_delivery_details["t_delivery_detail_id"] = $fdata;
		$tdatat_delivery_details[".searchableFields"][] = "t_delivery_detail_id";
//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery_details";
	$fdata["Label"] = GetFieldLabel("t_delivery_details","t_delivery_id");
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


	$tdatat_delivery_details["t_delivery_id"] = $fdata;
		$tdatat_delivery_details[".searchableFields"][] = "t_delivery_id";
//	t_delivery_details_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_details_type";
	$fdata["GoodName"] = "t_delivery_details_type";
	$fdata["ownerTable"] = "t_delivery_details";
	$fdata["Label"] = GetFieldLabel("t_delivery_details","t_delivery_details_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_details_type";

		$fdata["sourceSingle"] = "t_delivery_details_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_details_type";

	
	
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
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Document";
	$edata["LookupValues"][] = "Items";
	$edata["LookupValues"][] = "Other";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatat_delivery_details["t_delivery_details_type"] = $fdata;
		$tdatat_delivery_details[".searchableFields"][] = "t_delivery_details_type";
//	t_delivery_details_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_details_desc";
	$fdata["GoodName"] = "t_delivery_details_desc";
	$fdata["ownerTable"] = "t_delivery_details";
	$fdata["Label"] = GetFieldLabel("t_delivery_details","t_delivery_details_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_details_desc";

		$fdata["sourceSingle"] = "t_delivery_details_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_details_desc";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatat_delivery_details["t_delivery_details_desc"] = $fdata;
		$tdatat_delivery_details[".searchableFields"][] = "t_delivery_details_desc";
//	t_delivery_details_qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_delivery_details_qty";
	$fdata["GoodName"] = "t_delivery_details_qty";
	$fdata["ownerTable"] = "t_delivery_details";
	$fdata["Label"] = GetFieldLabel("t_delivery_details","t_delivery_details_qty");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_details_qty";

		$fdata["sourceSingle"] = "t_delivery_details_qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_details_qty";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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
		$fdata["filterTotalFields"] = "t_delivery_detail_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_delivery_details["t_delivery_details_qty"] = $fdata;
		$tdatat_delivery_details[".searchableFields"][] = "t_delivery_details_qty";
//	t_delivery_details_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_delivery_details_fl";
	$fdata["GoodName"] = "t_delivery_details_fl";
	$fdata["ownerTable"] = "t_delivery_details";
	$fdata["Label"] = GetFieldLabel("t_delivery_details","t_delivery_details_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_details_fl";

		$fdata["sourceSingle"] = "t_delivery_details_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_details_fl";

	
	
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


	$tdatat_delivery_details["t_delivery_details_fl"] = $fdata;
		$tdatat_delivery_details[".searchableFields"][] = "t_delivery_details_fl";


$tables_data["t_delivery_details"]=&$tdatat_delivery_details;
$field_labels["t_delivery_details"] = &$fieldLabelst_delivery_details;
$fieldToolTips["t_delivery_details"] = &$fieldToolTipst_delivery_details;
$placeHolders["t_delivery_details"] = &$placeHolderst_delivery_details;
$page_titles["t_delivery_details"] = &$pageTitlest_delivery_details;


changeTextControlsToDate( "t_delivery_details" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_details"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_details"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_delivery";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_delivery";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_delivery";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_delivery_details"][0] = $masterParams;
				$masterTablesData["t_delivery_details"][0]["masterKeys"] = array();
	$masterTablesData["t_delivery_details"][0]["masterKeys"][]="t_delivery_id";
				$masterTablesData["t_delivery_details"][0]["detailKeys"] = array();
	$masterTablesData["t_delivery_details"][0]["detailKeys"][]="t_delivery_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_details()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery_detail_id,  	t_delivery_id,  	t_delivery_details_type,  	t_delivery_details_desc,  	t_delivery_details_qty,  	t_delivery_details_fl";
$proto0["m_strFrom"] = "FROM t_delivery_details";
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
	"m_strName" => "t_delivery_detail_id",
	"m_strTable" => "t_delivery_details",
	"m_srcTableName" => "t_delivery_details"
));

$proto6["m_sql"] = "t_delivery_detail_id";
$proto6["m_srcTableName"] = "t_delivery_details";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery_details",
	"m_srcTableName" => "t_delivery_details"
));

$proto8["m_sql"] = "t_delivery_id";
$proto8["m_srcTableName"] = "t_delivery_details";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_details_type",
	"m_strTable" => "t_delivery_details",
	"m_srcTableName" => "t_delivery_details"
));

$proto10["m_sql"] = "t_delivery_details_type";
$proto10["m_srcTableName"] = "t_delivery_details";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_details_desc",
	"m_strTable" => "t_delivery_details",
	"m_srcTableName" => "t_delivery_details"
));

$proto12["m_sql"] = "t_delivery_details_desc";
$proto12["m_srcTableName"] = "t_delivery_details";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_details_qty",
	"m_strTable" => "t_delivery_details",
	"m_srcTableName" => "t_delivery_details"
));

$proto14["m_sql"] = "t_delivery_details_qty";
$proto14["m_srcTableName"] = "t_delivery_details";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_details_fl",
	"m_strTable" => "t_delivery_details",
	"m_srcTableName" => "t_delivery_details"
));

$proto16["m_sql"] = "t_delivery_details_fl";
$proto16["m_srcTableName"] = "t_delivery_details";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "t_delivery_details";
$proto19["m_srcTableName"] = "t_delivery_details";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "t_delivery_detail_id";
$proto19["m_columns"][] = "t_delivery_id";
$proto19["m_columns"][] = "t_delivery_details_type";
$proto19["m_columns"][] = "t_delivery_details_desc";
$proto19["m_columns"][] = "t_delivery_details_qty";
$proto19["m_columns"][] = "t_delivery_details_fl";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "t_delivery_details";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "t_delivery_details";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery_details";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_details = createSqlQuery_t_delivery_details();


	
				;

						

$tdatat_delivery_details[".sqlquery"] = $queryData_t_delivery_details;



$tdatat_delivery_details[".hasEvents"] = false;

?>