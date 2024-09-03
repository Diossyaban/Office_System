<?php
$tdatat_invoice_det = array();
$tdatat_invoice_det[".searchableFields"] = array();
$tdatat_invoice_det[".ShortName"] = "t_invoice_det";
$tdatat_invoice_det[".OwnerID"] = "";
$tdatat_invoice_det[".OriginalTable"] = "t_invoice_det";


$tdatat_invoice_det[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatat_invoice_det[".originalPagesByType"] = $tdatat_invoice_det[".pagesByType"];
$tdatat_invoice_det[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatat_invoice_det[".originalPages"] = $tdatat_invoice_det[".pages"];
$tdatat_invoice_det[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatat_invoice_det[".originalDefaultPages"] = $tdatat_invoice_det[".defaultPages"];

//	field labels
$fieldLabelst_invoice_det = array();
$fieldToolTipst_invoice_det = array();
$pageTitlest_invoice_det = array();
$placeHolderst_invoice_det = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_invoice_det["English"] = array();
	$fieldToolTipst_invoice_det["English"] = array();
	$placeHolderst_invoice_det["English"] = array();
	$pageTitlest_invoice_det["English"] = array();
	$fieldLabelst_invoice_det["English"]["t_invoice_id_det"] = "T Invoice Id Det";
	$fieldToolTipst_invoice_det["English"]["t_invoice_id_det"] = "";
	$placeHolderst_invoice_det["English"]["t_invoice_id_det"] = "";
	$fieldLabelst_invoice_det["English"]["t_invoice_id"] = "T Invoice Id";
	$fieldToolTipst_invoice_det["English"]["t_invoice_id"] = "";
	$placeHolderst_invoice_det["English"]["t_invoice_id"] = "";
	$fieldLabelst_invoice_det["English"]["invoice_det_name"] = "Description";
	$fieldToolTipst_invoice_det["English"]["invoice_det_name"] = "";
	$placeHolderst_invoice_det["English"]["invoice_det_name"] = "";
	$fieldLabelst_invoice_det["English"]["invoice_det_qty"] = "Qty";
	$fieldToolTipst_invoice_det["English"]["invoice_det_qty"] = "";
	$placeHolderst_invoice_det["English"]["invoice_det_qty"] = "";
	$fieldLabelst_invoice_det["English"]["invoice_det_price"] = "Price";
	$fieldToolTipst_invoice_det["English"]["invoice_det_price"] = "";
	$placeHolderst_invoice_det["English"]["invoice_det_price"] = "";
	$fieldLabelst_invoice_det["English"]["invoice_det_total"] = "Total Price";
	$fieldToolTipst_invoice_det["English"]["invoice_det_total"] = "";
	$placeHolderst_invoice_det["English"]["invoice_det_total"] = "";
	$pageTitlest_invoice_det["English"]["list"] = "";
	if (count($fieldToolTipst_invoice_det["English"]))
		$tdatat_invoice_det[".isUseToolTips"] = true;
}


	$tdatat_invoice_det[".NCSearch"] = true;



$tdatat_invoice_det[".shortTableName"] = "t_invoice_det";
$tdatat_invoice_det[".nSecOptions"] = 0;

$tdatat_invoice_det[".mainTableOwnerID"] = "";
$tdatat_invoice_det[".entityType"] = 0;
$tdatat_invoice_det[".connId"] = "u736239518tsundbat154412412";


$tdatat_invoice_det[".strOriginalTableName"] = "t_invoice_det";

	



$tdatat_invoice_det[".showAddInPopup"] = false;

$tdatat_invoice_det[".showEditInPopup"] = false;

$tdatat_invoice_det[".showViewInPopup"] = false;

$tdatat_invoice_det[".listAjax"] = false;
//	temporary
//$tdatat_invoice_det[".listAjax"] = false;

	$tdatat_invoice_det[".audit"] = false;

	$tdatat_invoice_det[".locking"] = false;


$pages = $tdatat_invoice_det[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_invoice_det[".edit"] = true;
	$tdatat_invoice_det[".afterEditAction"] = 1;
	$tdatat_invoice_det[".closePopupAfterEdit"] = 1;
	$tdatat_invoice_det[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_invoice_det[".add"] = true;
$tdatat_invoice_det[".afterAddAction"] = 1;
$tdatat_invoice_det[".closePopupAfterAdd"] = 1;
$tdatat_invoice_det[".afterAddActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_invoice_det[".list"] = true;
}



$tdatat_invoice_det[".strSortControlSettingsJSON"] = "";

$tdatat_invoice_det[".strClickActionJSON"] = "{\"fields\":{\"invoice_det_name\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"invoice_det_price\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"invoice_det_qty\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"invoice_det_total\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"t_invoice_id\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"t_invoice_id_det\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"popup\",\"page\":\"edit\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatat_invoice_det[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_invoice_det[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_invoice_det[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_invoice_det[".printFriendly"] = true;
}



$tdatat_invoice_det[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_invoice_det[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_invoice_det[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_invoice_det[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatat_invoice_det[".ajaxCodeSnippetAdded"] = false;

$tdatat_invoice_det[".buttonsAdded"] = false;

$tdatat_invoice_det[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_invoice_det[".isUseTimeForSearch"] = false;


$tdatat_invoice_det[".badgeColor"] = "6da5c8";


$tdatat_invoice_det[".allSearchFields"] = array();
$tdatat_invoice_det[".filterFields"] = array();
$tdatat_invoice_det[".requiredSearchFields"] = array();

$tdatat_invoice_det[".googleLikeFields"] = array();
$tdatat_invoice_det[".googleLikeFields"][] = "t_invoice_id_det";
$tdatat_invoice_det[".googleLikeFields"][] = "t_invoice_id";
$tdatat_invoice_det[".googleLikeFields"][] = "invoice_det_name";
$tdatat_invoice_det[".googleLikeFields"][] = "invoice_det_qty";
$tdatat_invoice_det[".googleLikeFields"][] = "invoice_det_price";
$tdatat_invoice_det[".googleLikeFields"][] = "invoice_det_total";



$tdatat_invoice_det[".tableType"] = "list";

$tdatat_invoice_det[".printerPageOrientation"] = 0;
$tdatat_invoice_det[".nPrinterPageScale"] = 100;

$tdatat_invoice_det[".nPrinterSplitRecords"] = 40;

$tdatat_invoice_det[".geocodingEnabled"] = false;




$tdatat_invoice_det[".isDisplayLoading"] = true;






$tdatat_invoice_det[".pageSize"] = 20;

$tdatat_invoice_det[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_invoice_det[".strOrderBy"] = $tstrOrderBy;

$tdatat_invoice_det[".orderindexes"] = array();


$tdatat_invoice_det[".sqlHead"] = "SELECT t_invoice_id_det,  	t_invoice_id,  	invoice_det_name,  	invoice_det_qty,  	invoice_det_price,  	invoice_det_total";
$tdatat_invoice_det[".sqlFrom"] = "FROM t_invoice_det";
$tdatat_invoice_det[".sqlWhereExpr"] = "";
$tdatat_invoice_det[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_invoice_det[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_invoice_det[".arrGroupsPerPage"] = $arrGPP;

$tdatat_invoice_det[".highlightSearchResults"] = true;

$tableKeyst_invoice_det = array();
$tableKeyst_invoice_det[] = "t_invoice_id_det";
$tdatat_invoice_det[".Keys"] = $tableKeyst_invoice_det;


$tdatat_invoice_det[".hideMobileList"] = array();




//	t_invoice_id_det
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_invoice_id_det";
	$fdata["GoodName"] = "t_invoice_id_det";
	$fdata["ownerTable"] = "t_invoice_det";
	$fdata["Label"] = GetFieldLabel("t_invoice_det","t_invoice_id_det");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_invoice_id_det";

		$fdata["sourceSingle"] = "t_invoice_id_det";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_invoice_id_det";

	
	
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


	$tdatat_invoice_det["t_invoice_id_det"] = $fdata;
		$tdatat_invoice_det[".searchableFields"][] = "t_invoice_id_det";
//	t_invoice_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_invoice_id";
	$fdata["GoodName"] = "t_invoice_id";
	$fdata["ownerTable"] = "t_invoice_det";
	$fdata["Label"] = GetFieldLabel("t_invoice_det","t_invoice_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_invoice_id";

		$fdata["sourceSingle"] = "t_invoice_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_invoice_id";

	
	
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


	$tdatat_invoice_det["t_invoice_id"] = $fdata;
		$tdatat_invoice_det[".searchableFields"][] = "t_invoice_id";
//	invoice_det_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "invoice_det_name";
	$fdata["GoodName"] = "invoice_det_name";
	$fdata["ownerTable"] = "t_invoice_det";
	$fdata["Label"] = GetFieldLabel("t_invoice_det","invoice_det_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_det_name";

		$fdata["sourceSingle"] = "invoice_det_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_det_name";

	
	
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


	$tdatat_invoice_det["invoice_det_name"] = $fdata;
		$tdatat_invoice_det[".searchableFields"][] = "invoice_det_name";
//	invoice_det_qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "invoice_det_qty";
	$fdata["GoodName"] = "invoice_det_qty";
	$fdata["ownerTable"] = "t_invoice_det";
	$fdata["Label"] = GetFieldLabel("t_invoice_det","invoice_det_qty");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "invoice_det_qty";

		$fdata["sourceSingle"] = "invoice_det_qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_det_qty";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatat_invoice_det["invoice_det_qty"] = $fdata;
		$tdatat_invoice_det[".searchableFields"][] = "invoice_det_qty";
//	invoice_det_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "invoice_det_price";
	$fdata["GoodName"] = "invoice_det_price";
	$fdata["ownerTable"] = "t_invoice_det";
	$fdata["Label"] = GetFieldLabel("t_invoice_det","invoice_det_price");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_det_price";

		$fdata["sourceSingle"] = "invoice_det_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_det_price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatat_invoice_det["invoice_det_price"] = $fdata;
		$tdatat_invoice_det[".searchableFields"][] = "invoice_det_price";
//	invoice_det_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "invoice_det_total";
	$fdata["GoodName"] = "invoice_det_total";
	$fdata["ownerTable"] = "t_invoice_det";
	$fdata["Label"] = GetFieldLabel("t_invoice_det","invoice_det_total");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_det_total";

		$fdata["sourceSingle"] = "invoice_det_total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_det_total";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "number";

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


	$tdatat_invoice_det["invoice_det_total"] = $fdata;
		$tdatat_invoice_det[".searchableFields"][] = "invoice_det_total";


$tables_data["t_invoice_det"]=&$tdatat_invoice_det;
$field_labels["t_invoice_det"] = &$fieldLabelst_invoice_det;
$fieldToolTips["t_invoice_det"] = &$fieldToolTipst_invoice_det;
$placeHolders["t_invoice_det"] = &$placeHolderst_invoice_det;
$page_titles["t_invoice_det"] = &$pageTitlest_invoice_det;


changeTextControlsToDate( "t_invoice_det" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_invoice_det"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_invoice_det"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_invoice";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_invoice";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_invoice";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_invoice_det"][0] = $masterParams;
				$masterTablesData["t_invoice_det"][0]["masterKeys"] = array();
	$masterTablesData["t_invoice_det"][0]["masterKeys"][]="t_invoice_id";
				$masterTablesData["t_invoice_det"][0]["detailKeys"] = array();
	$masterTablesData["t_invoice_det"][0]["detailKeys"][]="t_invoice_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_invoice_det()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_invoice_id_det,  	t_invoice_id,  	invoice_det_name,  	invoice_det_qty,  	invoice_det_price,  	invoice_det_total";
$proto0["m_strFrom"] = "FROM t_invoice_det";
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
	"m_strName" => "t_invoice_id_det",
	"m_strTable" => "t_invoice_det",
	"m_srcTableName" => "t_invoice_det"
));

$proto6["m_sql"] = "t_invoice_id_det";
$proto6["m_srcTableName"] = "t_invoice_det";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_invoice_id",
	"m_strTable" => "t_invoice_det",
	"m_srcTableName" => "t_invoice_det"
));

$proto8["m_sql"] = "t_invoice_id";
$proto8["m_srcTableName"] = "t_invoice_det";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_det_name",
	"m_strTable" => "t_invoice_det",
	"m_srcTableName" => "t_invoice_det"
));

$proto10["m_sql"] = "invoice_det_name";
$proto10["m_srcTableName"] = "t_invoice_det";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_det_qty",
	"m_strTable" => "t_invoice_det",
	"m_srcTableName" => "t_invoice_det"
));

$proto12["m_sql"] = "invoice_det_qty";
$proto12["m_srcTableName"] = "t_invoice_det";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_det_price",
	"m_strTable" => "t_invoice_det",
	"m_srcTableName" => "t_invoice_det"
));

$proto14["m_sql"] = "invoice_det_price";
$proto14["m_srcTableName"] = "t_invoice_det";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_det_total",
	"m_strTable" => "t_invoice_det",
	"m_srcTableName" => "t_invoice_det"
));

$proto16["m_sql"] = "invoice_det_total";
$proto16["m_srcTableName"] = "t_invoice_det";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "t_invoice_det";
$proto19["m_srcTableName"] = "t_invoice_det";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "t_invoice_id_det";
$proto19["m_columns"][] = "t_invoice_id";
$proto19["m_columns"][] = "invoice_det_name";
$proto19["m_columns"][] = "invoice_det_qty";
$proto19["m_columns"][] = "invoice_det_price";
$proto19["m_columns"][] = "invoice_det_total";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "t_invoice_det";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "t_invoice_det";
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
$proto0["m_srcTableName"]="t_invoice_det";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_invoice_det = createSqlQuery_t_invoice_det();


	
				;

						

$tdatat_invoice_det[".sqlquery"] = $queryData_t_invoice_det;



include_once(getabspath("include/t_invoice_det_events.php"));
$tdatat_invoice_det[".hasEvents"] = true;

?>