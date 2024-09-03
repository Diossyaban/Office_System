<?php
$tdatam_customer = array();
$tdatam_customer[".searchableFields"] = array();
$tdatam_customer[".ShortName"] = "m_customer";
$tdatam_customer[".OwnerID"] = "";
$tdatam_customer[".OriginalTable"] = "m_customer";


$tdatam_customer[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_customer[".originalPagesByType"] = $tdatam_customer[".pagesByType"];
$tdatam_customer[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_customer[".originalPages"] = $tdatam_customer[".pages"];
$tdatam_customer[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_customer[".originalDefaultPages"] = $tdatam_customer[".defaultPages"];

//	field labels
$fieldLabelsm_customer = array();
$fieldToolTipsm_customer = array();
$pageTitlesm_customer = array();
$placeHoldersm_customer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_customer["English"] = array();
	$fieldToolTipsm_customer["English"] = array();
	$placeHoldersm_customer["English"] = array();
	$pageTitlesm_customer["English"] = array();
	$fieldLabelsm_customer["English"]["m_customer_id"] = "M Customer Id";
	$fieldToolTipsm_customer["English"]["m_customer_id"] = "";
	$placeHoldersm_customer["English"]["m_customer_id"] = "";
	$fieldLabelsm_customer["English"]["m_customer_name"] = "Name";
	$fieldToolTipsm_customer["English"]["m_customer_name"] = "";
	$placeHoldersm_customer["English"]["m_customer_name"] = "";
	$fieldLabelsm_customer["English"]["m_customer_business_phone"] = "Business Phone";
	$fieldToolTipsm_customer["English"]["m_customer_business_phone"] = "";
	$placeHoldersm_customer["English"]["m_customer_business_phone"] = "";
	$fieldLabelsm_customer["English"]["m_customer_mobile_phone"] = "Mobile Phone";
	$fieldToolTipsm_customer["English"]["m_customer_mobile_phone"] = "";
	$placeHoldersm_customer["English"]["m_customer_mobile_phone"] = "";
	$fieldLabelsm_customer["English"]["m_customer_whatsApp"] = "WhatsApp";
	$fieldToolTipsm_customer["English"]["m_customer_whatsApp"] = "";
	$placeHoldersm_customer["English"]["m_customer_whatsApp"] = "";
	$fieldLabelsm_customer["English"]["m_customer_email"] = "Email";
	$fieldToolTipsm_customer["English"]["m_customer_email"] = "";
	$placeHoldersm_customer["English"]["m_customer_email"] = "";
	$fieldLabelsm_customer["English"]["m_customer_website"] = "Website";
	$fieldToolTipsm_customer["English"]["m_customer_website"] = "";
	$placeHoldersm_customer["English"]["m_customer_website"] = "";
	$fieldLabelsm_customer["English"]["m_customer_billing_address"] = "Address";
	$fieldToolTipsm_customer["English"]["m_customer_billing_address"] = "";
	$placeHoldersm_customer["English"]["m_customer_billing_address"] = "";
	$fieldLabelsm_customer["English"]["m_customer_billing_city"] = "City";
	$fieldToolTipsm_customer["English"]["m_customer_billing_city"] = "";
	$placeHoldersm_customer["English"]["m_customer_billing_city"] = "";
	$fieldLabelsm_customer["English"]["m_customer_billing_zipcode"] = "Zipcode";
	$fieldToolTipsm_customer["English"]["m_customer_billing_zipcode"] = "";
	$placeHoldersm_customer["English"]["m_customer_billing_zipcode"] = "";
	$fieldLabelsm_customer["English"]["m_customer_billing_province"] = "Province";
	$fieldToolTipsm_customer["English"]["m_customer_billing_province"] = "";
	$placeHoldersm_customer["English"]["m_customer_billing_province"] = "";
	$fieldLabelsm_customer["English"]["m_customer_billing_country"] = "Country";
	$fieldToolTipsm_customer["English"]["m_customer_billing_country"] = "";
	$placeHoldersm_customer["English"]["m_customer_billing_country"] = "";
	$fieldLabelsm_customer["English"]["m_customer_currency"] = "Currency";
	$fieldToolTipsm_customer["English"]["m_customer_currency"] = "";
	$placeHoldersm_customer["English"]["m_customer_currency"] = "";
	$fieldLabelsm_customer["English"]["m_customer_contact_fullname"] = "Fullname";
	$fieldToolTipsm_customer["English"]["m_customer_contact_fullname"] = "";
	$placeHoldersm_customer["English"]["m_customer_contact_fullname"] = "";
	$fieldLabelsm_customer["English"]["m_customer_contact_position"] = "Position";
	$fieldToolTipsm_customer["English"]["m_customer_contact_position"] = "";
	$placeHoldersm_customer["English"]["m_customer_contact_position"] = "";
	$fieldLabelsm_customer["English"]["m_customer_contact_email"] = "Email";
	$fieldToolTipsm_customer["English"]["m_customer_contact_email"] = "";
	$placeHoldersm_customer["English"]["m_customer_contact_email"] = "";
	$fieldLabelsm_customer["English"]["m_customer_contact_mobile_phone"] = "Mobile Phone";
	$fieldToolTipsm_customer["English"]["m_customer_contact_mobile_phone"] = "";
	$placeHoldersm_customer["English"]["m_customer_contact_mobile_phone"] = "";
	$fieldLabelsm_customer["English"]["add_user"] = "Add User";
	$fieldToolTipsm_customer["English"]["add_user"] = "";
	$placeHoldersm_customer["English"]["add_user"] = "";
	$fieldLabelsm_customer["English"]["add_date"] = "Add Date";
	$fieldToolTipsm_customer["English"]["add_date"] = "";
	$placeHoldersm_customer["English"]["add_date"] = "";
	$fieldLabelsm_customer["English"]["edit_user"] = "Edit User";
	$fieldToolTipsm_customer["English"]["edit_user"] = "";
	$placeHoldersm_customer["English"]["edit_user"] = "";
	$fieldLabelsm_customer["English"]["edit_date"] = "Edit Date";
	$fieldToolTipsm_customer["English"]["edit_date"] = "";
	$placeHoldersm_customer["English"]["edit_date"] = "";
	$fieldLabelsm_customer["English"]["m_customer_status"] = "Status";
	$fieldToolTipsm_customer["English"]["m_customer_status"] = "";
	$placeHoldersm_customer["English"]["m_customer_status"] = "";
	$fieldLabelsm_customer["English"]["m_customer_no"] = "Customer No";
	$fieldToolTipsm_customer["English"]["m_customer_no"] = "";
	$placeHoldersm_customer["English"]["m_customer_no"] = "";
	if (count($fieldToolTipsm_customer["English"]))
		$tdatam_customer[".isUseToolTips"] = true;
}


	$tdatam_customer[".NCSearch"] = true;



$tdatam_customer[".shortTableName"] = "m_customer";
$tdatam_customer[".nSecOptions"] = 0;

$tdatam_customer[".mainTableOwnerID"] = "";
$tdatam_customer[".entityType"] = 0;
$tdatam_customer[".connId"] = "u736239518tsundbat154412412";


$tdatam_customer[".strOriginalTableName"] = "m_customer";

	



$tdatam_customer[".showAddInPopup"] = false;

$tdatam_customer[".showEditInPopup"] = false;

$tdatam_customer[".showViewInPopup"] = false;

$tdatam_customer[".listAjax"] = false;
//	temporary
//$tdatam_customer[".listAjax"] = false;

	$tdatam_customer[".audit"] = false;

	$tdatam_customer[".locking"] = false;


$pages = $tdatam_customer[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_customer[".edit"] = true;
	$tdatam_customer[".afterEditAction"] = 1;
	$tdatam_customer[".closePopupAfterEdit"] = 1;
	$tdatam_customer[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_customer[".add"] = true;
$tdatam_customer[".afterAddAction"] = 1;
$tdatam_customer[".closePopupAfterAdd"] = 1;
$tdatam_customer[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_customer[".list"] = true;
}



$tdatam_customer[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_customer[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_customer[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_customer[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_customer[".printFriendly"] = true;
}



$tdatam_customer[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_customer[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_customer[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_customer[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_customer[".ajaxCodeSnippetAdded"] = false;

$tdatam_customer[".buttonsAdded"] = false;

$tdatam_customer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_customer[".isUseTimeForSearch"] = false;


$tdatam_customer[".badgeColor"] = "CD853F";


$tdatam_customer[".allSearchFields"] = array();
$tdatam_customer[".filterFields"] = array();
$tdatam_customer[".requiredSearchFields"] = array();

$tdatam_customer[".googleLikeFields"] = array();
$tdatam_customer[".googleLikeFields"][] = "m_customer_id";
$tdatam_customer[".googleLikeFields"][] = "m_customer_name";
$tdatam_customer[".googleLikeFields"][] = "m_customer_business_phone";
$tdatam_customer[".googleLikeFields"][] = "m_customer_mobile_phone";
$tdatam_customer[".googleLikeFields"][] = "m_customer_whatsApp";
$tdatam_customer[".googleLikeFields"][] = "m_customer_email";
$tdatam_customer[".googleLikeFields"][] = "m_customer_website";
$tdatam_customer[".googleLikeFields"][] = "m_customer_billing_address";
$tdatam_customer[".googleLikeFields"][] = "m_customer_billing_city";
$tdatam_customer[".googleLikeFields"][] = "m_customer_billing_zipcode";
$tdatam_customer[".googleLikeFields"][] = "m_customer_billing_province";
$tdatam_customer[".googleLikeFields"][] = "m_customer_billing_country";
$tdatam_customer[".googleLikeFields"][] = "m_customer_currency";
$tdatam_customer[".googleLikeFields"][] = "m_customer_contact_fullname";
$tdatam_customer[".googleLikeFields"][] = "m_customer_contact_position";
$tdatam_customer[".googleLikeFields"][] = "m_customer_contact_email";
$tdatam_customer[".googleLikeFields"][] = "m_customer_contact_mobile_phone";
$tdatam_customer[".googleLikeFields"][] = "add_user";
$tdatam_customer[".googleLikeFields"][] = "add_date";
$tdatam_customer[".googleLikeFields"][] = "edit_user";
$tdatam_customer[".googleLikeFields"][] = "edit_date";
$tdatam_customer[".googleLikeFields"][] = "m_customer_status";
$tdatam_customer[".googleLikeFields"][] = "m_customer_no";



$tdatam_customer[".tableType"] = "list";

$tdatam_customer[".printerPageOrientation"] = 0;
$tdatam_customer[".nPrinterPageScale"] = 100;

$tdatam_customer[".nPrinterSplitRecords"] = 40;

$tdatam_customer[".geocodingEnabled"] = false;




$tdatam_customer[".isDisplayLoading"] = true;






$tdatam_customer[".pageSize"] = 20;

$tdatam_customer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_customer[".strOrderBy"] = $tstrOrderBy;

$tdatam_customer[".orderindexes"] = array();


$tdatam_customer[".sqlHead"] = "SELECT m_customer_id,  	m_customer_name,  	m_customer_business_phone,  	m_customer_mobile_phone,  	m_customer_whatsApp,  	m_customer_email,  	m_customer_website,  	m_customer_billing_address,  	m_customer_billing_city,  	m_customer_billing_zipcode,  	m_customer_billing_province,  	m_customer_billing_country,  	m_customer_currency,  	m_customer_contact_fullname,  	m_customer_contact_position,  	m_customer_contact_email,  	m_customer_contact_mobile_phone,  	add_user,  	add_date,  	edit_user,  	edit_date,  	m_customer_status,  	m_customer_no";
$tdatam_customer[".sqlFrom"] = "FROM m_customer";
$tdatam_customer[".sqlWhereExpr"] = "";
$tdatam_customer[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_customer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_customer[".arrGroupsPerPage"] = $arrGPP;

$tdatam_customer[".highlightSearchResults"] = true;

$tableKeysm_customer = array();
$tableKeysm_customer[] = "m_customer_id";
$tdatam_customer[".Keys"] = $tableKeysm_customer;


$tdatam_customer[".hideMobileList"] = array();




//	m_customer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_customer_id";
	$fdata["GoodName"] = "m_customer_id";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_customer_id";

		$fdata["sourceSingle"] = "m_customer_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_id";

	
	
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


	$tdatam_customer["m_customer_id"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_id";
//	m_customer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_customer_name";
	$fdata["GoodName"] = "m_customer_name";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_name";

		$fdata["sourceSingle"] = "m_customer_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_name";

	
	
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


	$tdatam_customer["m_customer_name"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_name";
//	m_customer_business_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_customer_business_phone";
	$fdata["GoodName"] = "m_customer_business_phone";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_business_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_business_phone";

		$fdata["sourceSingle"] = "m_customer_business_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_business_phone";

	
	
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


	$tdatam_customer["m_customer_business_phone"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_business_phone";
//	m_customer_mobile_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_customer_mobile_phone";
	$fdata["GoodName"] = "m_customer_mobile_phone";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_mobile_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_mobile_phone";

		$fdata["sourceSingle"] = "m_customer_mobile_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_mobile_phone";

	
	
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


	$tdatam_customer["m_customer_mobile_phone"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_mobile_phone";
//	m_customer_whatsApp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_customer_whatsApp";
	$fdata["GoodName"] = "m_customer_whatsApp";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_whatsApp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_whatsApp";

		$fdata["sourceSingle"] = "m_customer_whatsApp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_whatsApp";

	
	
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


	$tdatam_customer["m_customer_whatsApp"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_whatsApp";
//	m_customer_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_customer_email";
	$fdata["GoodName"] = "m_customer_email";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_email";

		$fdata["sourceSingle"] = "m_customer_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_email";

	
	
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


	$tdatam_customer["m_customer_email"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_email";
//	m_customer_website
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "m_customer_website";
	$fdata["GoodName"] = "m_customer_website";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_website");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_website";

		$fdata["sourceSingle"] = "m_customer_website";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_website";

	
	
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


	$tdatam_customer["m_customer_website"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_website";
//	m_customer_billing_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "m_customer_billing_address";
	$fdata["GoodName"] = "m_customer_billing_address";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_billing_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_billing_address";

		$fdata["sourceSingle"] = "m_customer_billing_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_billing_address";

	
	
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


	$tdatam_customer["m_customer_billing_address"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_billing_address";
//	m_customer_billing_city
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "m_customer_billing_city";
	$fdata["GoodName"] = "m_customer_billing_city";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_billing_city");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_billing_city";

		$fdata["sourceSingle"] = "m_customer_billing_city";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_billing_city";

	
	
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


	$tdatam_customer["m_customer_billing_city"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_billing_city";
//	m_customer_billing_zipcode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "m_customer_billing_zipcode";
	$fdata["GoodName"] = "m_customer_billing_zipcode";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_billing_zipcode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_billing_zipcode";

		$fdata["sourceSingle"] = "m_customer_billing_zipcode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_billing_zipcode";

	
	
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


	$tdatam_customer["m_customer_billing_zipcode"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_billing_zipcode";
//	m_customer_billing_province
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "m_customer_billing_province";
	$fdata["GoodName"] = "m_customer_billing_province";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_billing_province");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_billing_province";

		$fdata["sourceSingle"] = "m_customer_billing_province";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_billing_province";

	
	
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


	$tdatam_customer["m_customer_billing_province"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_billing_province";
//	m_customer_billing_country
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "m_customer_billing_country";
	$fdata["GoodName"] = "m_customer_billing_country";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_billing_country");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_billing_country";

		$fdata["sourceSingle"] = "m_customer_billing_country";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_billing_country";

	
	
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


	$tdatam_customer["m_customer_billing_country"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_billing_country";
//	m_customer_currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "m_customer_currency";
	$fdata["GoodName"] = "m_customer_currency";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_currency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_currency";

		$fdata["sourceSingle"] = "m_customer_currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_currency";

	
	
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


	$tdatam_customer["m_customer_currency"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_currency";
//	m_customer_contact_fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "m_customer_contact_fullname";
	$fdata["GoodName"] = "m_customer_contact_fullname";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_contact_fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_contact_fullname";

		$fdata["sourceSingle"] = "m_customer_contact_fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_contact_fullname";

	
	
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


	$tdatam_customer["m_customer_contact_fullname"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_contact_fullname";
//	m_customer_contact_position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "m_customer_contact_position";
	$fdata["GoodName"] = "m_customer_contact_position";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_contact_position");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_contact_position";

		$fdata["sourceSingle"] = "m_customer_contact_position";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_contact_position";

	
	
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


	$tdatam_customer["m_customer_contact_position"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_contact_position";
//	m_customer_contact_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "m_customer_contact_email";
	$fdata["GoodName"] = "m_customer_contact_email";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_contact_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_contact_email";

		$fdata["sourceSingle"] = "m_customer_contact_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_contact_email";

	
	
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


	$tdatam_customer["m_customer_contact_email"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_contact_email";
//	m_customer_contact_mobile_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "m_customer_contact_mobile_phone";
	$fdata["GoodName"] = "m_customer_contact_mobile_phone";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_contact_mobile_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_contact_mobile_phone";

		$fdata["sourceSingle"] = "m_customer_contact_mobile_phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_contact_mobile_phone";

	
	
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


	$tdatam_customer["m_customer_contact_mobile_phone"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_contact_mobile_phone";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","add_user");
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


	$tdatam_customer["add_user"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","add_date");
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


	$tdatam_customer["add_date"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","edit_user");
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


	$tdatam_customer["edit_user"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","edit_date");
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


	$tdatam_customer["edit_date"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "edit_date";
//	m_customer_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "m_customer_status";
	$fdata["GoodName"] = "m_customer_status";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_customer_status";

		$fdata["sourceSingle"] = "m_customer_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_status";

	
	
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


	$tdatam_customer["m_customer_status"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_status";
//	m_customer_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "m_customer_no";
	$fdata["GoodName"] = "m_customer_no";
	$fdata["ownerTable"] = "m_customer";
	$fdata["Label"] = GetFieldLabel("m_customer","m_customer_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_customer_no";

		$fdata["sourceSingle"] = "m_customer_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_customer_no";

	
	
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


	$tdatam_customer["m_customer_no"] = $fdata;
		$tdatam_customer[".searchableFields"][] = "m_customer_no";


$tables_data["m_customer"]=&$tdatam_customer;
$field_labels["m_customer"] = &$fieldLabelsm_customer;
$fieldToolTips["m_customer"] = &$fieldToolTipsm_customer;
$placeHolders["m_customer"] = &$placeHoldersm_customer;
$page_titles["m_customer"] = &$pageTitlesm_customer;


changeTextControlsToDate( "m_customer" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_customer"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_customer"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_customer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_customer_id,  	m_customer_name,  	m_customer_business_phone,  	m_customer_mobile_phone,  	m_customer_whatsApp,  	m_customer_email,  	m_customer_website,  	m_customer_billing_address,  	m_customer_billing_city,  	m_customer_billing_zipcode,  	m_customer_billing_province,  	m_customer_billing_country,  	m_customer_currency,  	m_customer_contact_fullname,  	m_customer_contact_position,  	m_customer_contact_email,  	m_customer_contact_mobile_phone,  	add_user,  	add_date,  	edit_user,  	edit_date,  	m_customer_status,  	m_customer_no";
$proto0["m_strFrom"] = "FROM m_customer";
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
	"m_strName" => "m_customer_id",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto6["m_sql"] = "m_customer_id";
$proto6["m_srcTableName"] = "m_customer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_name",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto8["m_sql"] = "m_customer_name";
$proto8["m_srcTableName"] = "m_customer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_business_phone",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto10["m_sql"] = "m_customer_business_phone";
$proto10["m_srcTableName"] = "m_customer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_mobile_phone",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto12["m_sql"] = "m_customer_mobile_phone";
$proto12["m_srcTableName"] = "m_customer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_whatsApp",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto14["m_sql"] = "m_customer_whatsApp";
$proto14["m_srcTableName"] = "m_customer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_email",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto16["m_sql"] = "m_customer_email";
$proto16["m_srcTableName"] = "m_customer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_website",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto18["m_sql"] = "m_customer_website";
$proto18["m_srcTableName"] = "m_customer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_billing_address",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto20["m_sql"] = "m_customer_billing_address";
$proto20["m_srcTableName"] = "m_customer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_billing_city",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto22["m_sql"] = "m_customer_billing_city";
$proto22["m_srcTableName"] = "m_customer";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_billing_zipcode",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto24["m_sql"] = "m_customer_billing_zipcode";
$proto24["m_srcTableName"] = "m_customer";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_billing_province",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto26["m_sql"] = "m_customer_billing_province";
$proto26["m_srcTableName"] = "m_customer";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_billing_country",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto28["m_sql"] = "m_customer_billing_country";
$proto28["m_srcTableName"] = "m_customer";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_currency",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto30["m_sql"] = "m_customer_currency";
$proto30["m_srcTableName"] = "m_customer";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_contact_fullname",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto32["m_sql"] = "m_customer_contact_fullname";
$proto32["m_srcTableName"] = "m_customer";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_contact_position",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto34["m_sql"] = "m_customer_contact_position";
$proto34["m_srcTableName"] = "m_customer";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_contact_email",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto36["m_sql"] = "m_customer_contact_email";
$proto36["m_srcTableName"] = "m_customer";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_contact_mobile_phone",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto38["m_sql"] = "m_customer_contact_mobile_phone";
$proto38["m_srcTableName"] = "m_customer";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto40["m_sql"] = "add_user";
$proto40["m_srcTableName"] = "m_customer";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto42["m_sql"] = "add_date";
$proto42["m_srcTableName"] = "m_customer";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto44["m_sql"] = "edit_user";
$proto44["m_srcTableName"] = "m_customer";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto46["m_sql"] = "edit_date";
$proto46["m_srcTableName"] = "m_customer";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_status",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto48["m_sql"] = "m_customer_status";
$proto48["m_srcTableName"] = "m_customer";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "m_customer_no",
	"m_strTable" => "m_customer",
	"m_srcTableName" => "m_customer"
));

$proto50["m_sql"] = "m_customer_no";
$proto50["m_srcTableName"] = "m_customer";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto52=array();
$proto52["m_link"] = "SQLL_MAIN";
			$proto53=array();
$proto53["m_strName"] = "m_customer";
$proto53["m_srcTableName"] = "m_customer";
$proto53["m_columns"] = array();
$proto53["m_columns"][] = "m_customer_id";
$proto53["m_columns"][] = "m_customer_name";
$proto53["m_columns"][] = "m_customer_business_phone";
$proto53["m_columns"][] = "m_customer_mobile_phone";
$proto53["m_columns"][] = "m_customer_whatsApp";
$proto53["m_columns"][] = "m_customer_email";
$proto53["m_columns"][] = "m_customer_website";
$proto53["m_columns"][] = "m_customer_billing_address";
$proto53["m_columns"][] = "m_customer_billing_city";
$proto53["m_columns"][] = "m_customer_billing_zipcode";
$proto53["m_columns"][] = "m_customer_billing_province";
$proto53["m_columns"][] = "m_customer_billing_country";
$proto53["m_columns"][] = "m_customer_currency";
$proto53["m_columns"][] = "m_customer_contact_fullname";
$proto53["m_columns"][] = "m_customer_contact_position";
$proto53["m_columns"][] = "m_customer_contact_email";
$proto53["m_columns"][] = "m_customer_contact_mobile_phone";
$proto53["m_columns"][] = "add_user";
$proto53["m_columns"][] = "add_date";
$proto53["m_columns"][] = "edit_user";
$proto53["m_columns"][] = "edit_date";
$proto53["m_columns"][] = "m_customer_status";
$proto53["m_columns"][] = "m_customer_no";
$obj = new SQLTable($proto53);

$proto52["m_table"] = $obj;
$proto52["m_sql"] = "m_customer";
$proto52["m_alias"] = "";
$proto52["m_srcTableName"] = "m_customer";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto52["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto52);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_customer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_customer = createSqlQuery_m_customer();


	
				;

																							

$tdatam_customer[".sqlquery"] = $queryData_m_customer;



$tdatam_customer[".hasEvents"] = false;

?>