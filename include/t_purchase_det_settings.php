<?php
$tdatat_purchase_det = array();
$tdatat_purchase_det[".searchableFields"] = array();
$tdatat_purchase_det[".ShortName"] = "t_purchase_det";
$tdatat_purchase_det[".OwnerID"] = "";
$tdatat_purchase_det[".OriginalTable"] = "t_purchase_det";


$tdatat_purchase_det[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_purchase_det[".originalPagesByType"] = $tdatat_purchase_det[".pagesByType"];
$tdatat_purchase_det[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_purchase_det[".originalPages"] = $tdatat_purchase_det[".pages"];
$tdatat_purchase_det[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_purchase_det[".originalDefaultPages"] = $tdatat_purchase_det[".defaultPages"];

//	field labels
$fieldLabelst_purchase_det = array();
$fieldToolTipst_purchase_det = array();
$pageTitlest_purchase_det = array();
$placeHolderst_purchase_det = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_purchase_det["English"] = array();
	$fieldToolTipst_purchase_det["English"] = array();
	$placeHolderst_purchase_det["English"] = array();
	$pageTitlest_purchase_det["English"] = array();
	$fieldLabelst_purchase_det["English"]["t_purchase_det_id"] = "T Purchase Det Id";
	$fieldToolTipst_purchase_det["English"]["t_purchase_det_id"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_det_id"] = "";
	$fieldLabelst_purchase_det["English"]["t_purchase_id"] = "T Purchase Id";
	$fieldToolTipst_purchase_det["English"]["t_purchase_id"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_id"] = "";
	$fieldLabelst_purchase_det["English"]["t_purchase_det_inv_id"] = "T Purchase Det Inv Id";
	$fieldToolTipst_purchase_det["English"]["t_purchase_det_inv_id"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_det_inv_id"] = "";
	$fieldLabelst_purchase_det["English"]["t_purchase_det_name"] = "T Purchase Det Name";
	$fieldToolTipst_purchase_det["English"]["t_purchase_det_name"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_det_name"] = "";
	$fieldLabelst_purchase_det["English"]["t_purchase_det_qty"] = "T Purchase Det Qty";
	$fieldToolTipst_purchase_det["English"]["t_purchase_det_qty"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_det_qty"] = "";
	$fieldLabelst_purchase_det["English"]["t_purchase_det_uom"] = "T Purchase Det Uom";
	$fieldToolTipst_purchase_det["English"]["t_purchase_det_uom"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_det_uom"] = "";
	$fieldLabelst_purchase_det["English"]["t_purchase_det_unit_price"] = "T Purchase Det Unit Price";
	$fieldToolTipst_purchase_det["English"]["t_purchase_det_unit_price"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_det_unit_price"] = "";
	$fieldLabelst_purchase_det["English"]["t_purchase_det_total"] = "T Purchase Det Total";
	$fieldToolTipst_purchase_det["English"]["t_purchase_det_total"] = "";
	$placeHolderst_purchase_det["English"]["t_purchase_det_total"] = "";
	if (count($fieldToolTipst_purchase_det["English"]))
		$tdatat_purchase_det[".isUseToolTips"] = true;
}


	$tdatat_purchase_det[".NCSearch"] = true;



$tdatat_purchase_det[".shortTableName"] = "t_purchase_det";
$tdatat_purchase_det[".nSecOptions"] = 0;

$tdatat_purchase_det[".mainTableOwnerID"] = "";
$tdatat_purchase_det[".entityType"] = 0;
$tdatat_purchase_det[".connId"] = "u736239518tsundbat154412412";


$tdatat_purchase_det[".strOriginalTableName"] = "t_purchase_det";

	



$tdatat_purchase_det[".showAddInPopup"] = false;

$tdatat_purchase_det[".showEditInPopup"] = false;

$tdatat_purchase_det[".showViewInPopup"] = false;

$tdatat_purchase_det[".listAjax"] = false;
//	temporary
//$tdatat_purchase_det[".listAjax"] = false;

	$tdatat_purchase_det[".audit"] = false;

	$tdatat_purchase_det[".locking"] = false;


$pages = $tdatat_purchase_det[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_purchase_det[".edit"] = true;
	$tdatat_purchase_det[".afterEditAction"] = 1;
	$tdatat_purchase_det[".closePopupAfterEdit"] = 1;
	$tdatat_purchase_det[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_purchase_det[".add"] = true;
$tdatat_purchase_det[".afterAddAction"] = 1;
$tdatat_purchase_det[".closePopupAfterAdd"] = 1;
$tdatat_purchase_det[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_purchase_det[".list"] = true;
}



$tdatat_purchase_det[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_purchase_det[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_purchase_det[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_purchase_det[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_purchase_det[".printFriendly"] = true;
}



$tdatat_purchase_det[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_purchase_det[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_purchase_det[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_purchase_det[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatat_purchase_det[".ajaxCodeSnippetAdded"] = false;

$tdatat_purchase_det[".buttonsAdded"] = false;

$tdatat_purchase_det[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_purchase_det[".isUseTimeForSearch"] = false;


$tdatat_purchase_det[".badgeColor"] = "00c2c5";


$tdatat_purchase_det[".allSearchFields"] = array();
$tdatat_purchase_det[".filterFields"] = array();
$tdatat_purchase_det[".requiredSearchFields"] = array();

$tdatat_purchase_det[".googleLikeFields"] = array();
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_det_id";
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_id";
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_det_inv_id";
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_det_name";
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_det_qty";
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_det_uom";
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_det_unit_price";
$tdatat_purchase_det[".googleLikeFields"][] = "t_purchase_det_total";



$tdatat_purchase_det[".tableType"] = "list";

$tdatat_purchase_det[".printerPageOrientation"] = 0;
$tdatat_purchase_det[".nPrinterPageScale"] = 100;

$tdatat_purchase_det[".nPrinterSplitRecords"] = 40;

$tdatat_purchase_det[".geocodingEnabled"] = false;










$tdatat_purchase_det[".pageSize"] = 20;

$tdatat_purchase_det[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_purchase_det[".strOrderBy"] = $tstrOrderBy;

$tdatat_purchase_det[".orderindexes"] = array();


$tdatat_purchase_det[".sqlHead"] = "SELECT t_purchase_det_id,  	t_purchase_id,  	t_purchase_det_inv_id,  	t_purchase_det_name,  	t_purchase_det_qty,  	t_purchase_det_uom,  	t_purchase_det_unit_price,  	t_purchase_det_total";
$tdatat_purchase_det[".sqlFrom"] = "FROM t_purchase_det";
$tdatat_purchase_det[".sqlWhereExpr"] = "";
$tdatat_purchase_det[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_purchase_det[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_purchase_det[".arrGroupsPerPage"] = $arrGPP;

$tdatat_purchase_det[".highlightSearchResults"] = true;

$tableKeyst_purchase_det = array();
$tableKeyst_purchase_det[] = "t_purchase_det_id";
$tdatat_purchase_det[".Keys"] = $tableKeyst_purchase_det;


$tdatat_purchase_det[".hideMobileList"] = array();




//	t_purchase_det_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_purchase_det_id";
	$fdata["GoodName"] = "t_purchase_det_id";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_det_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_purchase_det_id";

		$fdata["sourceSingle"] = "t_purchase_det_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_det_id";

	
	
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


	$tdatat_purchase_det["t_purchase_det_id"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_det_id";
//	t_purchase_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_purchase_id";
	$fdata["GoodName"] = "t_purchase_id";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_id");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdatat_purchase_det["t_purchase_id"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_id";
//	t_purchase_det_inv_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_purchase_det_inv_id";
	$fdata["GoodName"] = "t_purchase_det_inv_id";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_det_inv_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_purchase_det_inv_id";

		$fdata["sourceSingle"] = "t_purchase_det_inv_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_det_inv_id";

	
	
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


	$tdatat_purchase_det["t_purchase_det_inv_id"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_det_inv_id";
//	t_purchase_det_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_purchase_det_name";
	$fdata["GoodName"] = "t_purchase_det_name";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_det_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_purchase_det_name";

		$fdata["sourceSingle"] = "t_purchase_det_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_det_name";

	
	
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


	$tdatat_purchase_det["t_purchase_det_name"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_det_name";
//	t_purchase_det_qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_purchase_det_qty";
	$fdata["GoodName"] = "t_purchase_det_qty";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_det_qty");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_purchase_det_qty";

		$fdata["sourceSingle"] = "t_purchase_det_qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_det_qty";

	
	
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


	$tdatat_purchase_det["t_purchase_det_qty"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_det_qty";
//	t_purchase_det_uom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_purchase_det_uom";
	$fdata["GoodName"] = "t_purchase_det_uom";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_det_uom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_purchase_det_uom";

		$fdata["sourceSingle"] = "t_purchase_det_uom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_det_uom";

	
	
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


	$tdatat_purchase_det["t_purchase_det_uom"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_det_uom";
//	t_purchase_det_unit_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_purchase_det_unit_price";
	$fdata["GoodName"] = "t_purchase_det_unit_price";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_det_unit_price");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_purchase_det_unit_price";

		$fdata["sourceSingle"] = "t_purchase_det_unit_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_det_unit_price";

	
	
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


	$tdatat_purchase_det["t_purchase_det_unit_price"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_det_unit_price";
//	t_purchase_det_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_purchase_det_total";
	$fdata["GoodName"] = "t_purchase_det_total";
	$fdata["ownerTable"] = "t_purchase_det";
	$fdata["Label"] = GetFieldLabel("t_purchase_det","t_purchase_det_total");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_purchase_det_total";

		$fdata["sourceSingle"] = "t_purchase_det_total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_purchase_det_total";

	
	
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


	$tdatat_purchase_det["t_purchase_det_total"] = $fdata;
		$tdatat_purchase_det[".searchableFields"][] = "t_purchase_det_total";


$tables_data["t_purchase_det"]=&$tdatat_purchase_det;
$field_labels["t_purchase_det"] = &$fieldLabelst_purchase_det;
$fieldToolTips["t_purchase_det"] = &$fieldToolTipst_purchase_det;
$placeHolders["t_purchase_det"] = &$placeHolderst_purchase_det;
$page_titles["t_purchase_det"] = &$pageTitlest_purchase_det;


changeTextControlsToDate( "t_purchase_det" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_purchase_det"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_purchase_det"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_purchase";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_purchase";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_purchase";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_purchase_det"][0] = $masterParams;
				$masterTablesData["t_purchase_det"][0]["masterKeys"] = array();
	$masterTablesData["t_purchase_det"][0]["masterKeys"][]="t_purchase_id";
				$masterTablesData["t_purchase_det"][0]["detailKeys"] = array();
	$masterTablesData["t_purchase_det"][0]["detailKeys"][]="t_purchase_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_purchase_det()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_purchase_det_id,  	t_purchase_id,  	t_purchase_det_inv_id,  	t_purchase_det_name,  	t_purchase_det_qty,  	t_purchase_det_uom,  	t_purchase_det_unit_price,  	t_purchase_det_total";
$proto0["m_strFrom"] = "FROM t_purchase_det";
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
	"m_strName" => "t_purchase_det_id",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto6["m_sql"] = "t_purchase_det_id";
$proto6["m_srcTableName"] = "t_purchase_det";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_id",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto8["m_sql"] = "t_purchase_id";
$proto8["m_srcTableName"] = "t_purchase_det";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_det_inv_id",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto10["m_sql"] = "t_purchase_det_inv_id";
$proto10["m_srcTableName"] = "t_purchase_det";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_det_name",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto12["m_sql"] = "t_purchase_det_name";
$proto12["m_srcTableName"] = "t_purchase_det";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_det_qty",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto14["m_sql"] = "t_purchase_det_qty";
$proto14["m_srcTableName"] = "t_purchase_det";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_det_uom",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto16["m_sql"] = "t_purchase_det_uom";
$proto16["m_srcTableName"] = "t_purchase_det";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_det_unit_price",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto18["m_sql"] = "t_purchase_det_unit_price";
$proto18["m_srcTableName"] = "t_purchase_det";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_purchase_det_total",
	"m_strTable" => "t_purchase_det",
	"m_srcTableName" => "t_purchase_det"
));

$proto20["m_sql"] = "t_purchase_det_total";
$proto20["m_srcTableName"] = "t_purchase_det";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "t_purchase_det";
$proto23["m_srcTableName"] = "t_purchase_det";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "t_purchase_det_id";
$proto23["m_columns"][] = "t_purchase_id";
$proto23["m_columns"][] = "t_purchase_det_inv_id";
$proto23["m_columns"][] = "t_purchase_det_name";
$proto23["m_columns"][] = "t_purchase_det_qty";
$proto23["m_columns"][] = "t_purchase_det_uom";
$proto23["m_columns"][] = "t_purchase_det_unit_price";
$proto23["m_columns"][] = "t_purchase_det_total";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "t_purchase_det";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "t_purchase_det";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_purchase_det";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_purchase_det = createSqlQuery_t_purchase_det();


	
				;

								

$tdatat_purchase_det[".sqlquery"] = $queryData_t_purchase_det;



$tdatat_purchase_det[".hasEvents"] = false;

?>