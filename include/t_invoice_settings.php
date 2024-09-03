<?php
$tdatat_invoice = array();
$tdatat_invoice[".searchableFields"] = array();
$tdatat_invoice[".ShortName"] = "t_invoice";
$tdatat_invoice[".OwnerID"] = "";
$tdatat_invoice[".OriginalTable"] = "t_invoice";


$tdatat_invoice[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_invoice[".originalPagesByType"] = $tdatat_invoice[".pagesByType"];
$tdatat_invoice[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_invoice[".originalPages"] = $tdatat_invoice[".pages"];
$tdatat_invoice[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_invoice[".originalDefaultPages"] = $tdatat_invoice[".defaultPages"];

//	field labels
$fieldLabelst_invoice = array();
$fieldToolTipst_invoice = array();
$pageTitlest_invoice = array();
$placeHolderst_invoice = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_invoice["English"] = array();
	$fieldToolTipst_invoice["English"] = array();
	$placeHolderst_invoice["English"] = array();
	$pageTitlest_invoice["English"] = array();
	$fieldLabelst_invoice["English"]["t_invoice_id"] = "T Invoice Id";
	$fieldToolTipst_invoice["English"]["t_invoice_id"] = "";
	$placeHolderst_invoice["English"]["t_invoice_id"] = "";
	$fieldLabelst_invoice["English"]["invoice_no"] = "Invoice No";
	$fieldToolTipst_invoice["English"]["invoice_no"] = "";
	$placeHolderst_invoice["English"]["invoice_no"] = "";
	$fieldLabelst_invoice["English"]["invoice_date"] = "Invoice Date";
	$fieldToolTipst_invoice["English"]["invoice_date"] = "";
	$placeHolderst_invoice["English"]["invoice_date"] = "";
	$fieldLabelst_invoice["English"]["invoice_type"] = "Invoice Type";
	$fieldToolTipst_invoice["English"]["invoice_type"] = "";
	$placeHolderst_invoice["English"]["invoice_type"] = "";
	$fieldLabelst_invoice["English"]["invoice_to"] = "Invoice To";
	$fieldToolTipst_invoice["English"]["invoice_to"] = "";
	$placeHolderst_invoice["English"]["invoice_to"] = "";
	$fieldLabelst_invoice["English"]["invoice_address"] = "";
	$fieldToolTipst_invoice["English"]["invoice_address"] = "";
	$placeHolderst_invoice["English"]["invoice_address"] = "";
	$fieldLabelst_invoice["English"]["invoice_mobile_no"] = "Invoice Mobile No";
	$fieldToolTipst_invoice["English"]["invoice_mobile_no"] = "";
	$placeHolderst_invoice["English"]["invoice_mobile_no"] = "";
	$fieldLabelst_invoice["English"]["invoice_email"] = "Invoice Email";
	$fieldToolTipst_invoice["English"]["invoice_email"] = "";
	$placeHolderst_invoice["English"]["invoice_email"] = "";
	$fieldLabelst_invoice["English"]["invoice_currency"] = "Invoice Currency";
	$fieldToolTipst_invoice["English"]["invoice_currency"] = "";
	$placeHolderst_invoice["English"]["invoice_currency"] = "";
	$fieldLabelst_invoice["English"]["invoice_exchange_rate"] = "Invoice Exchange Rate";
	$fieldToolTipst_invoice["English"]["invoice_exchange_rate"] = "";
	$placeHolderst_invoice["English"]["invoice_exchange_rate"] = "";
	$fieldLabelst_invoice["English"]["invoice_original_currency"] = "Sub Total";
	$fieldToolTipst_invoice["English"]["invoice_original_currency"] = "";
	$placeHolderst_invoice["English"]["invoice_original_currency"] = "";
	$fieldLabelst_invoice["English"]["invoice_disc"] = "Discount";
	$fieldToolTipst_invoice["English"]["invoice_disc"] = "";
	$placeHolderst_invoice["English"]["invoice_disc"] = "";
	$fieldLabelst_invoice["English"]["invoice_tax"] = "Tax";
	$fieldToolTipst_invoice["English"]["invoice_tax"] = "";
	$placeHolderst_invoice["English"]["invoice_tax"] = "";
	$fieldLabelst_invoice["English"]["invoice_amount_nett"] = "Total";
	$fieldToolTipst_invoice["English"]["invoice_amount_nett"] = "";
	$placeHolderst_invoice["English"]["invoice_amount_nett"] = "";
	$fieldLabelst_invoice["English"]["invoice_idr"] = "Invoice Idr";
	$fieldToolTipst_invoice["English"]["invoice_idr"] = "";
	$placeHolderst_invoice["English"]["invoice_idr"] = "";
	$fieldLabelst_invoice["English"]["add_user"] = "Add User";
	$fieldToolTipst_invoice["English"]["add_user"] = "";
	$placeHolderst_invoice["English"]["add_user"] = "";
	$fieldLabelst_invoice["English"]["add_date"] = "Add Date";
	$fieldToolTipst_invoice["English"]["add_date"] = "";
	$placeHolderst_invoice["English"]["add_date"] = "";
	$fieldLabelst_invoice["English"]["last_user"] = "Last User";
	$fieldToolTipst_invoice["English"]["last_user"] = "";
	$placeHolderst_invoice["English"]["last_user"] = "";
	$fieldLabelst_invoice["English"]["last_date"] = "Last Date";
	$fieldToolTipst_invoice["English"]["last_date"] = "";
	$placeHolderst_invoice["English"]["last_date"] = "";
	$fieldLabelst_invoice["English"]["invoice_term"] = "Invoice Term";
	$fieldToolTipst_invoice["English"]["invoice_term"] = "";
	$placeHolderst_invoice["English"]["invoice_term"] = "";
	$fieldLabelst_invoice["English"]["invoice_disc_perc"] = "Invoice Disc Perc";
	$fieldToolTipst_invoice["English"]["invoice_disc_perc"] = "";
	$placeHolderst_invoice["English"]["invoice_disc_perc"] = "";
	$fieldLabelst_invoice["English"]["invoice_tax_perc"] = "Invoice Tax Perc";
	$fieldToolTipst_invoice["English"]["invoice_tax_perc"] = "";
	$placeHolderst_invoice["English"]["invoice_tax_perc"] = "";
	$fieldLabelst_invoice["English"]["invoice_payment_term"] = "Invoice Payment Term";
	$fieldToolTipst_invoice["English"]["invoice_payment_term"] = "";
	$placeHolderst_invoice["English"]["invoice_payment_term"] = "";
	$fieldLabelst_invoice["English"]["invoice_term_days"] = "Invoice Term Days";
	$fieldToolTipst_invoice["English"]["invoice_term_days"] = "";
	$placeHolderst_invoice["English"]["invoice_term_days"] = "";
	$fieldLabelst_invoice["English"]["invoice_due_date"] = "Invoice Due Date";
	$fieldToolTipst_invoice["English"]["invoice_due_date"] = "";
	$placeHolderst_invoice["English"]["invoice_due_date"] = "";
	if (count($fieldToolTipst_invoice["English"]))
		$tdatat_invoice[".isUseToolTips"] = true;
}


	$tdatat_invoice[".NCSearch"] = true;



$tdatat_invoice[".shortTableName"] = "t_invoice";
$tdatat_invoice[".nSecOptions"] = 0;

$tdatat_invoice[".mainTableOwnerID"] = "";
$tdatat_invoice[".entityType"] = 0;
$tdatat_invoice[".connId"] = "u736239518tsundbat154412412";


$tdatat_invoice[".strOriginalTableName"] = "t_invoice";

	



$tdatat_invoice[".showAddInPopup"] = false;

$tdatat_invoice[".showEditInPopup"] = false;

$tdatat_invoice[".showViewInPopup"] = false;

$tdatat_invoice[".listAjax"] = false;
//	temporary
//$tdatat_invoice[".listAjax"] = false;

	$tdatat_invoice[".audit"] = false;

	$tdatat_invoice[".locking"] = false;


$pages = $tdatat_invoice[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_invoice[".edit"] = true;
	$tdatat_invoice[".afterEditAction"] = 1;
	$tdatat_invoice[".closePopupAfterEdit"] = 1;
	$tdatat_invoice[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_invoice[".add"] = true;
$tdatat_invoice[".afterAddAction"] = 3;
$tdatat_invoice[".closePopupAfterAdd"] = 1;
$tdatat_invoice[".afterAddActionDetTable"] = "t_invoice_det";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_invoice[".list"] = true;
}



$tdatat_invoice[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_invoice[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_invoice[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_invoice[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_invoice[".printFriendly"] = true;
}



$tdatat_invoice[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_invoice[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_invoice[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_invoice[".isUseAjaxSuggest"] = true;



																																									
											

$tdatat_invoice[".ajaxCodeSnippetAdded"] = false;

$tdatat_invoice[".buttonsAdded"] = true;

$tdatat_invoice[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_invoice[".isUseTimeForSearch"] = false;


$tdatat_invoice[".badgeColor"] = "CFAE83";


$tdatat_invoice[".allSearchFields"] = array();
$tdatat_invoice[".filterFields"] = array();
$tdatat_invoice[".requiredSearchFields"] = array();

$tdatat_invoice[".googleLikeFields"] = array();
$tdatat_invoice[".googleLikeFields"][] = "t_invoice_id";
$tdatat_invoice[".googleLikeFields"][] = "invoice_no";
$tdatat_invoice[".googleLikeFields"][] = "invoice_term";
$tdatat_invoice[".googleLikeFields"][] = "invoice_date";
$tdatat_invoice[".googleLikeFields"][] = "invoice_type";
$tdatat_invoice[".googleLikeFields"][] = "invoice_to";
$tdatat_invoice[".googleLikeFields"][] = "invoice_address";
$tdatat_invoice[".googleLikeFields"][] = "invoice_mobile_no";
$tdatat_invoice[".googleLikeFields"][] = "invoice_email";
$tdatat_invoice[".googleLikeFields"][] = "invoice_currency";
$tdatat_invoice[".googleLikeFields"][] = "invoice_exchange_rate";
$tdatat_invoice[".googleLikeFields"][] = "invoice_original_currency";
$tdatat_invoice[".googleLikeFields"][] = "invoice_disc_perc";
$tdatat_invoice[".googleLikeFields"][] = "invoice_disc";
$tdatat_invoice[".googleLikeFields"][] = "invoice_tax_perc";
$tdatat_invoice[".googleLikeFields"][] = "invoice_tax";
$tdatat_invoice[".googleLikeFields"][] = "invoice_amount_nett";
$tdatat_invoice[".googleLikeFields"][] = "invoice_idr";
$tdatat_invoice[".googleLikeFields"][] = "invoice_payment_term";
$tdatat_invoice[".googleLikeFields"][] = "invoice_term_days";
$tdatat_invoice[".googleLikeFields"][] = "invoice_due_date";
$tdatat_invoice[".googleLikeFields"][] = "add_user";
$tdatat_invoice[".googleLikeFields"][] = "add_date";
$tdatat_invoice[".googleLikeFields"][] = "last_user";
$tdatat_invoice[".googleLikeFields"][] = "last_date";



$tdatat_invoice[".tableType"] = "list";

$tdatat_invoice[".printerPageOrientation"] = 0;
$tdatat_invoice[".nPrinterPageScale"] = 100;

$tdatat_invoice[".nPrinterSplitRecords"] = 40;

$tdatat_invoice[".geocodingEnabled"] = false;




$tdatat_invoice[".isDisplayLoading"] = true;






$tdatat_invoice[".pageSize"] = 20;

$tdatat_invoice[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_invoice[".strOrderBy"] = $tstrOrderBy;

$tdatat_invoice[".orderindexes"] = array();


$tdatat_invoice[".sqlHead"] = "SELECT t_invoice_id,  	invoice_no,  	invoice_term,  	invoice_date,  	invoice_type,  	invoice_to,  	invoice_address,  	invoice_mobile_no,  	invoice_email,  	invoice_currency,  	invoice_exchange_rate,  	invoice_original_currency,  	invoice_disc_perc,  	invoice_disc,  	invoice_tax_perc,  	invoice_tax,  	invoice_amount_nett,  	invoice_idr,  	invoice_payment_term,  	invoice_term_days,  	invoice_due_date,  	add_user,  	add_date,  	last_user,  	last_date";
$tdatat_invoice[".sqlFrom"] = "FROM t_invoice";
$tdatat_invoice[".sqlWhereExpr"] = "";
$tdatat_invoice[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_invoice[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_invoice[".arrGroupsPerPage"] = $arrGPP;

$tdatat_invoice[".highlightSearchResults"] = true;

$tableKeyst_invoice = array();
$tableKeyst_invoice[] = "t_invoice_id";
$tdatat_invoice[".Keys"] = $tableKeyst_invoice;


$tdatat_invoice[".hideMobileList"] = array();




//	t_invoice_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_invoice_id";
	$fdata["GoodName"] = "t_invoice_id";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","t_invoice_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatat_invoice["t_invoice_id"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "t_invoice_id";
//	invoice_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "invoice_no";
	$fdata["GoodName"] = "invoice_no";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_no";

		$fdata["sourceSingle"] = "invoice_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_no";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatat_invoice["invoice_no"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_no";
//	invoice_term
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "invoice_term";
	$fdata["GoodName"] = "invoice_term";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_term");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_term";

		$fdata["sourceSingle"] = "invoice_term";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_term";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "invoice_term_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_payment_term";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"invoice_term_days", 'lookupF'=>"m_payment_term_due_day");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_payment_term_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "m_payment_term_noted";

	

	
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


	$tdatat_invoice["invoice_term"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_term";
//	invoice_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "invoice_date";
	$fdata["GoodName"] = "invoice_date";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "invoice_date";

		$fdata["sourceSingle"] = "invoice_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatat_invoice["invoice_date"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_date";
//	invoice_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "invoice_type";
	$fdata["GoodName"] = "invoice_type";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_type";

		$fdata["sourceSingle"] = "invoice_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_type";

	
	
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
	$edata["LookupValues"][] = "RENT";
	$edata["LookupValues"][] = "SALES";

	
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


	$tdatat_invoice["invoice_type"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_type";
//	invoice_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "invoice_to";
	$fdata["GoodName"] = "invoice_to";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_to");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_to";

		$fdata["sourceSingle"] = "invoice_to";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_to";

	
	
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
	$edata["LookupTable"] = "m_customer";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"invoice_address", 'lookupF'=>"m_customer_billing_address");
	$edata["autoCompleteFields"][] = array('masterF'=>"invoice_mobile_no", 'lookupF'=>"m_customer_mobile_phone");
	$edata["autoCompleteFields"][] = array('masterF'=>"invoice_email", 'lookupF'=>"m_customer_email");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "m_customer_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_customer_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
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


	$tdatat_invoice["invoice_to"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_to";
//	invoice_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "invoice_address";
	$fdata["GoodName"] = "invoice_address";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_address";

		$fdata["sourceSingle"] = "invoice_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_address";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatat_invoice["invoice_address"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_address";
//	invoice_mobile_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "invoice_mobile_no";
	$fdata["GoodName"] = "invoice_mobile_no";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_mobile_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_mobile_no";

		$fdata["sourceSingle"] = "invoice_mobile_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_mobile_no";

	
	
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


	$tdatat_invoice["invoice_mobile_no"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_mobile_no";
//	invoice_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "invoice_email";
	$fdata["GoodName"] = "invoice_email";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_email";

		$fdata["sourceSingle"] = "invoice_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_email";

	
	
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


	$tdatat_invoice["invoice_email"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_email";
//	invoice_currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "invoice_currency";
	$fdata["GoodName"] = "invoice_currency";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_currency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_currency";

		$fdata["sourceSingle"] = "invoice_currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_currency";

	
	
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
	$edata["LookupTable"] = "m_currency";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "currency_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "currency_name";

	

	
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


	$tdatat_invoice["invoice_currency"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_currency";
//	invoice_exchange_rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "invoice_exchange_rate";
	$fdata["GoodName"] = "invoice_exchange_rate";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_exchange_rate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_exchange_rate";

		$fdata["sourceSingle"] = "invoice_exchange_rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_exchange_rate";

	
	
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


	$tdatat_invoice["invoice_exchange_rate"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_exchange_rate";
//	invoice_original_currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "invoice_original_currency";
	$fdata["GoodName"] = "invoice_original_currency";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_original_currency");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_original_currency";

		$fdata["sourceSingle"] = "invoice_original_currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_original_currency";

	
	
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


	$tdatat_invoice["invoice_original_currency"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_original_currency";
//	invoice_disc_perc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "invoice_disc_perc";
	$fdata["GoodName"] = "invoice_disc_perc";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_disc_perc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "invoice_disc_perc";

		$fdata["sourceSingle"] = "invoice_disc_perc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_disc_perc";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdatat_invoice["invoice_disc_perc"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_disc_perc";
//	invoice_disc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "invoice_disc";
	$fdata["GoodName"] = "invoice_disc";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_disc");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_disc";

		$fdata["sourceSingle"] = "invoice_disc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_disc";

	
	
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


	$tdatat_invoice["invoice_disc"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_disc";
//	invoice_tax_perc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "invoice_tax_perc";
	$fdata["GoodName"] = "invoice_tax_perc";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_tax_perc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "invoice_tax_perc";

		$fdata["sourceSingle"] = "invoice_tax_perc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_tax_perc";

	
	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdatat_invoice["invoice_tax_perc"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_tax_perc";
//	invoice_tax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "invoice_tax";
	$fdata["GoodName"] = "invoice_tax";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_tax");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_tax";

		$fdata["sourceSingle"] = "invoice_tax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_tax";

	
	
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


	$tdatat_invoice["invoice_tax"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_tax";
//	invoice_amount_nett
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "invoice_amount_nett";
	$fdata["GoodName"] = "invoice_amount_nett";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_amount_nett");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_amount_nett";

		$fdata["sourceSingle"] = "invoice_amount_nett";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_amount_nett";

	
	
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


	$tdatat_invoice["invoice_amount_nett"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_amount_nett";
//	invoice_idr
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "invoice_idr";
	$fdata["GoodName"] = "invoice_idr";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_idr");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "invoice_idr";

		$fdata["sourceSingle"] = "invoice_idr";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_idr";

	
	
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


		$edata["strEditMask"] = "000.000.000.000.000,00";

	



	
	
	
	
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


	$tdatat_invoice["invoice_idr"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_idr";
//	invoice_payment_term
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "invoice_payment_term";
	$fdata["GoodName"] = "invoice_payment_term";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_payment_term");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "invoice_payment_term";

		$fdata["sourceSingle"] = "invoice_payment_term";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_payment_term";

	
	
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


	$tdatat_invoice["invoice_payment_term"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_payment_term";
//	invoice_term_days
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "invoice_term_days";
	$fdata["GoodName"] = "invoice_term_days";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_term_days");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "invoice_term_days";

		$fdata["sourceSingle"] = "invoice_term_days";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_term_days";

	
	
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


	$tdatat_invoice["invoice_term_days"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_term_days";
//	invoice_due_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "invoice_due_date";
	$fdata["GoodName"] = "invoice_due_date";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","invoice_due_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "invoice_due_date";

		$fdata["sourceSingle"] = "invoice_due_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "invoice_due_date";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatat_invoice["invoice_due_date"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "invoice_due_date";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","add_user");
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


	$tdatat_invoice["add_user"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","add_date");
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


	$tdatat_invoice["add_date"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "add_date";
//	last_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "last_user";
	$fdata["GoodName"] = "last_user";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","last_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_user";

		$fdata["sourceSingle"] = "last_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_user";

	
	
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


	$tdatat_invoice["last_user"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "last_user";
//	last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "last_date";
	$fdata["GoodName"] = "last_date";
	$fdata["ownerTable"] = "t_invoice";
	$fdata["Label"] = GetFieldLabel("t_invoice","last_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_date";

		$fdata["sourceSingle"] = "last_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_date";

	
	
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


	$tdatat_invoice["last_date"] = $fdata;
		$tdatat_invoice[".searchableFields"][] = "last_date";


$tables_data["t_invoice"]=&$tdatat_invoice;
$field_labels["t_invoice"] = &$fieldLabelst_invoice;
$fieldToolTips["t_invoice"] = &$fieldToolTipst_invoice;
$placeHolders["t_invoice"] = &$placeHolderst_invoice;
$page_titles["t_invoice"] = &$pageTitlest_invoice;


changeTextControlsToDate( "t_invoice" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_invoice"] = array();
//	t_invoice_det
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_invoice_det";
		$detailsParam["dOriginalTable"] = "t_invoice_det";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_invoice_det";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_invoice_det");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_invoice"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_invoice"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_invoice"][$dIndex]["masterKeys"][]="t_invoice_id";

				$detailsTablesData["t_invoice"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_invoice"][$dIndex]["detailKeys"][]="t_invoice_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_invoice"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_invoice()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_invoice_id,  	invoice_no,  	invoice_term,  	invoice_date,  	invoice_type,  	invoice_to,  	invoice_address,  	invoice_mobile_no,  	invoice_email,  	invoice_currency,  	invoice_exchange_rate,  	invoice_original_currency,  	invoice_disc_perc,  	invoice_disc,  	invoice_tax_perc,  	invoice_tax,  	invoice_amount_nett,  	invoice_idr,  	invoice_payment_term,  	invoice_term_days,  	invoice_due_date,  	add_user,  	add_date,  	last_user,  	last_date";
$proto0["m_strFrom"] = "FROM t_invoice";
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
	"m_strName" => "t_invoice_id",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto6["m_sql"] = "t_invoice_id";
$proto6["m_srcTableName"] = "t_invoice";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_no",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto8["m_sql"] = "invoice_no";
$proto8["m_srcTableName"] = "t_invoice";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_term",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto10["m_sql"] = "invoice_term";
$proto10["m_srcTableName"] = "t_invoice";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_date",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto12["m_sql"] = "invoice_date";
$proto12["m_srcTableName"] = "t_invoice";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_type",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto14["m_sql"] = "invoice_type";
$proto14["m_srcTableName"] = "t_invoice";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_to",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto16["m_sql"] = "invoice_to";
$proto16["m_srcTableName"] = "t_invoice";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_address",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto18["m_sql"] = "invoice_address";
$proto18["m_srcTableName"] = "t_invoice";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_mobile_no",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto20["m_sql"] = "invoice_mobile_no";
$proto20["m_srcTableName"] = "t_invoice";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_email",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto22["m_sql"] = "invoice_email";
$proto22["m_srcTableName"] = "t_invoice";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_currency",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto24["m_sql"] = "invoice_currency";
$proto24["m_srcTableName"] = "t_invoice";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_exchange_rate",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto26["m_sql"] = "invoice_exchange_rate";
$proto26["m_srcTableName"] = "t_invoice";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_original_currency",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto28["m_sql"] = "invoice_original_currency";
$proto28["m_srcTableName"] = "t_invoice";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_disc_perc",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto30["m_sql"] = "invoice_disc_perc";
$proto30["m_srcTableName"] = "t_invoice";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_disc",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto32["m_sql"] = "invoice_disc";
$proto32["m_srcTableName"] = "t_invoice";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_tax_perc",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto34["m_sql"] = "invoice_tax_perc";
$proto34["m_srcTableName"] = "t_invoice";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_tax",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto36["m_sql"] = "invoice_tax";
$proto36["m_srcTableName"] = "t_invoice";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_amount_nett",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto38["m_sql"] = "invoice_amount_nett";
$proto38["m_srcTableName"] = "t_invoice";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_idr",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto40["m_sql"] = "invoice_idr";
$proto40["m_srcTableName"] = "t_invoice";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_payment_term",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto42["m_sql"] = "invoice_payment_term";
$proto42["m_srcTableName"] = "t_invoice";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_term_days",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto44["m_sql"] = "invoice_term_days";
$proto44["m_srcTableName"] = "t_invoice";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "invoice_due_date",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto46["m_sql"] = "invoice_due_date";
$proto46["m_srcTableName"] = "t_invoice";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto48["m_sql"] = "add_user";
$proto48["m_srcTableName"] = "t_invoice";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto50["m_sql"] = "add_date";
$proto50["m_srcTableName"] = "t_invoice";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto52["m_sql"] = "last_user";
$proto52["m_srcTableName"] = "t_invoice";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "last_date",
	"m_strTable" => "t_invoice",
	"m_srcTableName" => "t_invoice"
));

$proto54["m_sql"] = "last_date";
$proto54["m_srcTableName"] = "t_invoice";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "t_invoice";
$proto57["m_srcTableName"] = "t_invoice";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "t_invoice_id";
$proto57["m_columns"][] = "invoice_no";
$proto57["m_columns"][] = "invoice_term";
$proto57["m_columns"][] = "invoice_date";
$proto57["m_columns"][] = "invoice_type";
$proto57["m_columns"][] = "invoice_to";
$proto57["m_columns"][] = "invoice_address";
$proto57["m_columns"][] = "invoice_mobile_no";
$proto57["m_columns"][] = "invoice_email";
$proto57["m_columns"][] = "invoice_currency";
$proto57["m_columns"][] = "invoice_exchange_rate";
$proto57["m_columns"][] = "invoice_original_currency";
$proto57["m_columns"][] = "invoice_disc_perc";
$proto57["m_columns"][] = "invoice_disc";
$proto57["m_columns"][] = "invoice_tax_perc";
$proto57["m_columns"][] = "invoice_tax";
$proto57["m_columns"][] = "invoice_amount_nett";
$proto57["m_columns"][] = "invoice_idr";
$proto57["m_columns"][] = "invoice_payment_term";
$proto57["m_columns"][] = "invoice_term_days";
$proto57["m_columns"][] = "invoice_due_date";
$proto57["m_columns"][] = "add_user";
$proto57["m_columns"][] = "add_date";
$proto57["m_columns"][] = "last_user";
$proto57["m_columns"][] = "last_date";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "t_invoice";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "t_invoice";
$proto58=array();
$proto58["m_sql"] = "";
$proto58["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto58["m_column"]=$obj;
$proto58["m_contained"] = array();
$proto58["m_strCase"] = "";
$proto58["m_havingmode"] = false;
$proto58["m_inBrackets"] = false;
$proto58["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto58);

$proto56["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto56);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_invoice";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_invoice = createSqlQuery_t_invoice();


	
				;

																									

$tdatat_invoice[".sqlquery"] = $queryData_t_invoice;



include_once(getabspath("include/t_invoice_events.php"));
$tdatat_invoice[".hasEvents"] = true;

?>