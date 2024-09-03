<?php
$tdatam_producer = array();
$tdatam_producer[".searchableFields"] = array();
$tdatam_producer[".ShortName"] = "m_producer";
$tdatam_producer[".OwnerID"] = "";
$tdatam_producer[".OriginalTable"] = "m_producer";


$tdatam_producer[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_producer[".originalPagesByType"] = $tdatam_producer[".pagesByType"];
$tdatam_producer[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_producer[".originalPages"] = $tdatam_producer[".pages"];
$tdatam_producer[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_producer[".originalDefaultPages"] = $tdatam_producer[".defaultPages"];

//	field labels
$fieldLabelsm_producer = array();
$fieldToolTipsm_producer = array();
$pageTitlesm_producer = array();
$placeHoldersm_producer = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_producer["English"] = array();
	$fieldToolTipsm_producer["English"] = array();
	$placeHoldersm_producer["English"] = array();
	$pageTitlesm_producer["English"] = array();
	$fieldLabelsm_producer["English"]["id"] = "Id";
	$fieldToolTipsm_producer["English"]["id"] = "";
	$placeHoldersm_producer["English"]["id"] = "";
	$fieldLabelsm_producer["English"]["producer_name"] = "Producer Name";
	$fieldToolTipsm_producer["English"]["producer_name"] = "";
	$placeHoldersm_producer["English"]["producer_name"] = "";
	$fieldLabelsm_producer["English"]["producer_category_id"] = "Producer Category Id";
	$fieldToolTipsm_producer["English"]["producer_category_id"] = "";
	$placeHoldersm_producer["English"]["producer_category_id"] = "";
	$fieldLabelsm_producer["English"]["producer_type_id"] = "Producer Type Id";
	$fieldToolTipsm_producer["English"]["producer_type_id"] = "";
	$placeHoldersm_producer["English"]["producer_type_id"] = "";
	$fieldLabelsm_producer["English"]["producer_domestic_type_id"] = "Producer Domestic Type Id";
	$fieldToolTipsm_producer["English"]["producer_domestic_type_id"] = "";
	$placeHoldersm_producer["English"]["producer_domestic_type_id"] = "";
	$fieldLabelsm_producer["English"]["producer_overseas_type_id"] = "Producer Overseas Type Id";
	$fieldToolTipsm_producer["English"]["producer_overseas_type_id"] = "";
	$placeHoldersm_producer["English"]["producer_overseas_type_id"] = "";
	$fieldLabelsm_producer["English"]["producer_network_association"] = "Producer Network Association";
	$fieldToolTipsm_producer["English"]["producer_network_association"] = "";
	$placeHoldersm_producer["English"]["producer_network_association"] = "";
	$fieldLabelsm_producer["English"]["producer_network_company_name"] = "Producer Network Company Name";
	$fieldToolTipsm_producer["English"]["producer_network_company_name"] = "";
	$placeHoldersm_producer["English"]["producer_network_company_name"] = "";
	$fieldLabelsm_producer["English"]["producer_gender"] = "Producer Gender";
	$fieldToolTipsm_producer["English"]["producer_gender"] = "";
	$placeHoldersm_producer["English"]["producer_gender"] = "";
	$fieldLabelsm_producer["English"]["dob_place"] = "Dob Place";
	$fieldToolTipsm_producer["English"]["dob_place"] = "";
	$placeHoldersm_producer["English"]["dob_place"] = "";
	$fieldLabelsm_producer["English"]["dob_date"] = "Dob Date";
	$fieldToolTipsm_producer["English"]["dob_date"] = "";
	$placeHoldersm_producer["English"]["dob_date"] = "";
	$fieldLabelsm_producer["English"]["address_street"] = "Address Street";
	$fieldToolTipsm_producer["English"]["address_street"] = "";
	$placeHoldersm_producer["English"]["address_street"] = "";
	$fieldLabelsm_producer["English"]["address_description"] = "Address Description";
	$fieldToolTipsm_producer["English"]["address_description"] = "";
	$placeHoldersm_producer["English"]["address_description"] = "";
	$fieldLabelsm_producer["English"]["address_postal_code"] = "Address Postal Code";
	$fieldToolTipsm_producer["English"]["address_postal_code"] = "";
	$placeHoldersm_producer["English"]["address_postal_code"] = "";
	$fieldLabelsm_producer["English"]["address_region_id"] = "Address Region Id";
	$fieldToolTipsm_producer["English"]["address_region_id"] = "";
	$placeHoldersm_producer["English"]["address_region_id"] = "";
	$fieldLabelsm_producer["English"]["address_city_id"] = "Address City Id";
	$fieldToolTipsm_producer["English"]["address_city_id"] = "";
	$placeHoldersm_producer["English"]["address_city_id"] = "";
	$fieldLabelsm_producer["English"]["address_province_id"] = "Address Province Id";
	$fieldToolTipsm_producer["English"]["address_province_id"] = "";
	$placeHoldersm_producer["English"]["address_province_id"] = "";
	$fieldLabelsm_producer["English"]["address_country_id"] = "Address Country Id";
	$fieldToolTipsm_producer["English"]["address_country_id"] = "";
	$placeHoldersm_producer["English"]["address_country_id"] = "";
	$fieldLabelsm_producer["English"]["establishment_country_id"] = "Establishment Country Id";
	$fieldToolTipsm_producer["English"]["establishment_country_id"] = "";
	$placeHoldersm_producer["English"]["establishment_country_id"] = "";
	$fieldLabelsm_producer["English"]["establishment_date"] = "Establishment Date";
	$fieldToolTipsm_producer["English"]["establishment_date"] = "";
	$placeHoldersm_producer["English"]["establishment_date"] = "";
	$fieldLabelsm_producer["English"]["licence_nib"] = "Licence Nib";
	$fieldToolTipsm_producer["English"]["licence_nib"] = "";
	$placeHoldersm_producer["English"]["licence_nib"] = "";
	$fieldLabelsm_producer["English"]["tax_number"] = "Tax Number";
	$fieldToolTipsm_producer["English"]["tax_number"] = "";
	$placeHoldersm_producer["English"]["tax_number"] = "";
	$fieldLabelsm_producer["English"]["tax_name"] = "Tax Name";
	$fieldToolTipsm_producer["English"]["tax_name"] = "";
	$placeHoldersm_producer["English"]["tax_name"] = "";
	$fieldLabelsm_producer["English"]["pic_name"] = "Pic Name";
	$fieldToolTipsm_producer["English"]["pic_name"] = "";
	$placeHoldersm_producer["English"]["pic_name"] = "";
	$fieldLabelsm_producer["English"]["pic_phone_number"] = "Pic Phone Number";
	$fieldToolTipsm_producer["English"]["pic_phone_number"] = "";
	$placeHoldersm_producer["English"]["pic_phone_number"] = "";
	$fieldLabelsm_producer["English"]["agreement_number"] = "Agreement Number";
	$fieldToolTipsm_producer["English"]["agreement_number"] = "";
	$placeHoldersm_producer["English"]["agreement_number"] = "";
	$fieldLabelsm_producer["English"]["agreement_period_start"] = "Agreement Period Start";
	$fieldToolTipsm_producer["English"]["agreement_period_start"] = "";
	$placeHoldersm_producer["English"]["agreement_period_start"] = "";
	$fieldLabelsm_producer["English"]["agreement_period_end"] = "Agreement Period End";
	$fieldToolTipsm_producer["English"]["agreement_period_end"] = "";
	$placeHoldersm_producer["English"]["agreement_period_end"] = "";
	$fieldLabelsm_producer["English"]["bank_id"] = "Bank Id";
	$fieldToolTipsm_producer["English"]["bank_id"] = "";
	$placeHoldersm_producer["English"]["bank_id"] = "";
	$fieldLabelsm_producer["English"]["bank_swift_code"] = "Bank Swift Code";
	$fieldToolTipsm_producer["English"]["bank_swift_code"] = "";
	$placeHoldersm_producer["English"]["bank_swift_code"] = "";
	$fieldLabelsm_producer["English"]["bank_account_number"] = "Bank Account Number";
	$fieldToolTipsm_producer["English"]["bank_account_number"] = "";
	$placeHoldersm_producer["English"]["bank_account_number"] = "";
	$fieldLabelsm_producer["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_producer["English"]["is_active"] = "";
	$placeHoldersm_producer["English"]["is_active"] = "";
	$fieldLabelsm_producer["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_producer["English"]["is_delete"] = "";
	$placeHoldersm_producer["English"]["is_delete"] = "";
	$fieldLabelsm_producer["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_producer["English"]["deleted_date"] = "";
	$placeHoldersm_producer["English"]["deleted_date"] = "";
	$fieldLabelsm_producer["English"]["created_by"] = "Created By";
	$fieldToolTipsm_producer["English"]["created_by"] = "";
	$placeHoldersm_producer["English"]["created_by"] = "";
	$fieldLabelsm_producer["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_producer["English"]["created_date"] = "";
	$placeHoldersm_producer["English"]["created_date"] = "";
	$fieldLabelsm_producer["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_producer["English"]["last_update_by"] = "";
	$placeHoldersm_producer["English"]["last_update_by"] = "";
	$fieldLabelsm_producer["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_producer["English"]["last_update_date"] = "";
	$placeHoldersm_producer["English"]["last_update_date"] = "";
	$fieldLabelsm_producer["English"]["user_id_tsun"] = "User Id Tsun";
	$fieldToolTipsm_producer["English"]["user_id_tsun"] = "";
	$placeHoldersm_producer["English"]["user_id_tsun"] = "";
	if (count($fieldToolTipsm_producer["English"]))
		$tdatam_producer[".isUseToolTips"] = true;
}


	$tdatam_producer[".NCSearch"] = true;


	$tdatam_producer[".scrollGridBody"] = true;

$tdatam_producer[".shortTableName"] = "m_producer";
$tdatam_producer[".nSecOptions"] = 0;

$tdatam_producer[".mainTableOwnerID"] = "";
$tdatam_producer[".entityType"] = 0;
$tdatam_producer[".connId"] = "u736239518tsundbat154412412";


$tdatam_producer[".strOriginalTableName"] = "m_producer";

	



$tdatam_producer[".showAddInPopup"] = false;

$tdatam_producer[".showEditInPopup"] = false;

$tdatam_producer[".showViewInPopup"] = false;

$tdatam_producer[".listAjax"] = false;
//	temporary
//$tdatam_producer[".listAjax"] = false;

	$tdatam_producer[".audit"] = true;

	$tdatam_producer[".locking"] = false;


$pages = $tdatam_producer[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_producer[".edit"] = true;
	$tdatam_producer[".afterEditAction"] = 1;
	$tdatam_producer[".closePopupAfterEdit"] = 1;
	$tdatam_producer[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_producer[".add"] = true;
$tdatam_producer[".afterAddAction"] = 1;
$tdatam_producer[".closePopupAfterAdd"] = 1;
$tdatam_producer[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_producer[".list"] = true;
}



$tdatam_producer[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_producer[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_producer[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_producer[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_producer[".printFriendly"] = true;
}



$tdatam_producer[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_producer[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_producer[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_producer[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_producer[".ajaxCodeSnippetAdded"] = false;

$tdatam_producer[".buttonsAdded"] = false;

$tdatam_producer[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_producer[".isUseTimeForSearch"] = false;


$tdatam_producer[".badgeColor"] = "1E90FF";


$tdatam_producer[".allSearchFields"] = array();
$tdatam_producer[".filterFields"] = array();
$tdatam_producer[".requiredSearchFields"] = array();

$tdatam_producer[".googleLikeFields"] = array();
$tdatam_producer[".googleLikeFields"][] = "id";
$tdatam_producer[".googleLikeFields"][] = "user_id_tsun";
$tdatam_producer[".googleLikeFields"][] = "producer_name";
$tdatam_producer[".googleLikeFields"][] = "producer_category_id";
$tdatam_producer[".googleLikeFields"][] = "producer_type_id";
$tdatam_producer[".googleLikeFields"][] = "producer_domestic_type_id";
$tdatam_producer[".googleLikeFields"][] = "producer_overseas_type_id";
$tdatam_producer[".googleLikeFields"][] = "producer_network_association";
$tdatam_producer[".googleLikeFields"][] = "producer_network_company_name";
$tdatam_producer[".googleLikeFields"][] = "producer_gender";
$tdatam_producer[".googleLikeFields"][] = "dob_place";
$tdatam_producer[".googleLikeFields"][] = "dob_date";
$tdatam_producer[".googleLikeFields"][] = "address_street";
$tdatam_producer[".googleLikeFields"][] = "address_description";
$tdatam_producer[".googleLikeFields"][] = "address_postal_code";
$tdatam_producer[".googleLikeFields"][] = "address_region_id";
$tdatam_producer[".googleLikeFields"][] = "address_city_id";
$tdatam_producer[".googleLikeFields"][] = "address_province_id";
$tdatam_producer[".googleLikeFields"][] = "address_country_id";
$tdatam_producer[".googleLikeFields"][] = "establishment_country_id";
$tdatam_producer[".googleLikeFields"][] = "establishment_date";
$tdatam_producer[".googleLikeFields"][] = "licence_nib";
$tdatam_producer[".googleLikeFields"][] = "tax_number";
$tdatam_producer[".googleLikeFields"][] = "tax_name";
$tdatam_producer[".googleLikeFields"][] = "pic_name";
$tdatam_producer[".googleLikeFields"][] = "pic_phone_number";
$tdatam_producer[".googleLikeFields"][] = "agreement_number";
$tdatam_producer[".googleLikeFields"][] = "agreement_period_start";
$tdatam_producer[".googleLikeFields"][] = "agreement_period_end";
$tdatam_producer[".googleLikeFields"][] = "bank_id";
$tdatam_producer[".googleLikeFields"][] = "bank_swift_code";
$tdatam_producer[".googleLikeFields"][] = "bank_account_number";
$tdatam_producer[".googleLikeFields"][] = "is_active";
$tdatam_producer[".googleLikeFields"][] = "is_delete";
$tdatam_producer[".googleLikeFields"][] = "deleted_date";
$tdatam_producer[".googleLikeFields"][] = "created_by";
$tdatam_producer[".googleLikeFields"][] = "created_date";
$tdatam_producer[".googleLikeFields"][] = "last_update_by";
$tdatam_producer[".googleLikeFields"][] = "last_update_date";



$tdatam_producer[".tableType"] = "list";

$tdatam_producer[".printerPageOrientation"] = 0;
$tdatam_producer[".nPrinterPageScale"] = 100;

$tdatam_producer[".nPrinterSplitRecords"] = 40;

$tdatam_producer[".geocodingEnabled"] = false;




$tdatam_producer[".isDisplayLoading"] = true;






$tdatam_producer[".pageSize"] = 20;

$tdatam_producer[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_producer[".strOrderBy"] = $tstrOrderBy;

$tdatam_producer[".orderindexes"] = array();


$tdatam_producer[".sqlHead"] = "SELECT id,  	user_id_tsun,  	producer_name,  	producer_category_id,  	producer_type_id,  	producer_domestic_type_id,  	producer_overseas_type_id,  	producer_network_association,  	producer_network_company_name,  	producer_gender,  	dob_place,  	dob_date,  	address_street,  	address_description,  	address_postal_code,  	address_region_id,  	address_city_id,  	address_province_id,  	address_country_id,  	establishment_country_id,  	establishment_date,  	licence_nib,  	tax_number,  	tax_name,  	pic_name,  	pic_phone_number,  	agreement_number,  	agreement_period_start,  	agreement_period_end,  	bank_id,  	bank_swift_code,  	bank_account_number,  	is_active,  	is_delete,  	deleted_date,  	created_by,  	created_date,  	last_update_by,  	last_update_date";
$tdatam_producer[".sqlFrom"] = "FROM m_producer";
$tdatam_producer[".sqlWhereExpr"] = "";
$tdatam_producer[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_producer[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_producer[".arrGroupsPerPage"] = $arrGPP;

$tdatam_producer[".highlightSearchResults"] = true;

$tableKeysm_producer = array();
$tableKeysm_producer[] = "id";
$tdatam_producer[".Keys"] = $tableKeysm_producer;


$tdatam_producer[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatam_producer["id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "id";
//	user_id_tsun
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "user_id_tsun";
	$fdata["GoodName"] = "user_id_tsun";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","user_id_tsun");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user_id_tsun";

		$fdata["sourceSingle"] = "user_id_tsun";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_id_tsun";

	
	
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


	$tdatam_producer["user_id_tsun"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "user_id_tsun";
//	producer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "producer_name";
	$fdata["GoodName"] = "producer_name";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "producer_name";

		$fdata["sourceSingle"] = "producer_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_name";

	
	
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


	$tdatam_producer["producer_name"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_name";
//	producer_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "producer_category_id";
	$fdata["GoodName"] = "producer_category_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_category_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "producer_category_id";

		$fdata["sourceSingle"] = "producer_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_category_id";

	
	
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


	$tdatam_producer["producer_category_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_category_id";
//	producer_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "producer_type_id";
	$fdata["GoodName"] = "producer_type_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "producer_type_id";

		$fdata["sourceSingle"] = "producer_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_type_id";

	
	
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


	$tdatam_producer["producer_type_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_type_id";
//	producer_domestic_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "producer_domestic_type_id";
	$fdata["GoodName"] = "producer_domestic_type_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_domestic_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "producer_domestic_type_id";

		$fdata["sourceSingle"] = "producer_domestic_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_domestic_type_id";

	
	
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


	$tdatam_producer["producer_domestic_type_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_domestic_type_id";
//	producer_overseas_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "producer_overseas_type_id";
	$fdata["GoodName"] = "producer_overseas_type_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_overseas_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "producer_overseas_type_id";

		$fdata["sourceSingle"] = "producer_overseas_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_overseas_type_id";

	
	
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


	$tdatam_producer["producer_overseas_type_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_overseas_type_id";
//	producer_network_association
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "producer_network_association";
	$fdata["GoodName"] = "producer_network_association";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_network_association");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "producer_network_association";

		$fdata["sourceSingle"] = "producer_network_association";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_network_association";

	
	
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


	$tdatam_producer["producer_network_association"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_network_association";
//	producer_network_company_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "producer_network_company_name";
	$fdata["GoodName"] = "producer_network_company_name";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_network_company_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "producer_network_company_name";

		$fdata["sourceSingle"] = "producer_network_company_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_network_company_name";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatam_producer["producer_network_company_name"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_network_company_name";
//	producer_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "producer_gender";
	$fdata["GoodName"] = "producer_gender";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","producer_gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "producer_gender";

		$fdata["sourceSingle"] = "producer_gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_gender";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatam_producer["producer_gender"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "producer_gender";
//	dob_place
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "dob_place";
	$fdata["GoodName"] = "dob_place";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","dob_place");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dob_place";

		$fdata["sourceSingle"] = "dob_place";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dob_place";

	
	
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


	$tdatam_producer["dob_place"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "dob_place";
//	dob_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "dob_date";
	$fdata["GoodName"] = "dob_date";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","dob_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "dob_date";

		$fdata["sourceSingle"] = "dob_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dob_date";

	
	
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


	$tdatam_producer["dob_date"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "dob_date";
//	address_street
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "address_street";
	$fdata["GoodName"] = "address_street";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","address_street");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_street";

		$fdata["sourceSingle"] = "address_street";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_street";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatam_producer["address_street"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "address_street";
//	address_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "address_description";
	$fdata["GoodName"] = "address_description";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","address_description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_description";

		$fdata["sourceSingle"] = "address_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_description";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatam_producer["address_description"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "address_description";
//	address_postal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "address_postal_code";
	$fdata["GoodName"] = "address_postal_code";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","address_postal_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_postal_code";

		$fdata["sourceSingle"] = "address_postal_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_postal_code";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatam_producer["address_postal_code"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "address_postal_code";
//	address_region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "address_region_id";
	$fdata["GoodName"] = "address_region_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","address_region_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_region_id";

		$fdata["sourceSingle"] = "address_region_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_region_id";

	
	
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


	$tdatam_producer["address_region_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "address_region_id";
//	address_city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "address_city_id";
	$fdata["GoodName"] = "address_city_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","address_city_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_city_id";

		$fdata["sourceSingle"] = "address_city_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_city_id";

	
	
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


	$tdatam_producer["address_city_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "address_city_id";
//	address_province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "address_province_id";
	$fdata["GoodName"] = "address_province_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","address_province_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_province_id";

		$fdata["sourceSingle"] = "address_province_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_province_id";

	
	
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


	$tdatam_producer["address_province_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "address_province_id";
//	address_country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "address_country_id";
	$fdata["GoodName"] = "address_country_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","address_country_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_country_id";

		$fdata["sourceSingle"] = "address_country_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_country_id";

	
	
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


	$tdatam_producer["address_country_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "address_country_id";
//	establishment_country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "establishment_country_id";
	$fdata["GoodName"] = "establishment_country_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","establishment_country_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "establishment_country_id";

		$fdata["sourceSingle"] = "establishment_country_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "establishment_country_id";

	
	
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


	$tdatam_producer["establishment_country_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "establishment_country_id";
//	establishment_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "establishment_date";
	$fdata["GoodName"] = "establishment_date";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","establishment_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "establishment_date";

		$fdata["sourceSingle"] = "establishment_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "establishment_date";

	
	
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


	$tdatam_producer["establishment_date"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "establishment_date";
//	licence_nib
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "licence_nib";
	$fdata["GoodName"] = "licence_nib";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","licence_nib");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "licence_nib";

		$fdata["sourceSingle"] = "licence_nib";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "licence_nib";

	
	
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


	$tdatam_producer["licence_nib"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "licence_nib";
//	tax_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "tax_number";
	$fdata["GoodName"] = "tax_number";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","tax_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tax_number";

		$fdata["sourceSingle"] = "tax_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tax_number";

	
	
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


	$tdatam_producer["tax_number"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "tax_number";
//	tax_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "tax_name";
	$fdata["GoodName"] = "tax_name";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","tax_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "tax_name";

		$fdata["sourceSingle"] = "tax_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tax_name";

	
	
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


	$tdatam_producer["tax_name"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "tax_name";
//	pic_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "pic_name";
	$fdata["GoodName"] = "pic_name";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","pic_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_name";

		$fdata["sourceSingle"] = "pic_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_name";

	
	
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


	$tdatam_producer["pic_name"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "pic_name";
//	pic_phone_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "pic_phone_number";
	$fdata["GoodName"] = "pic_phone_number";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","pic_phone_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_phone_number";

		$fdata["sourceSingle"] = "pic_phone_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_phone_number";

	
	
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


	$tdatam_producer["pic_phone_number"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "pic_phone_number";
//	agreement_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "agreement_number";
	$fdata["GoodName"] = "agreement_number";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","agreement_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "agreement_number";

		$fdata["sourceSingle"] = "agreement_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agreement_number";

	
	
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


	$tdatam_producer["agreement_number"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "agreement_number";
//	agreement_period_start
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "agreement_period_start";
	$fdata["GoodName"] = "agreement_period_start";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","agreement_period_start");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "agreement_period_start";

		$fdata["sourceSingle"] = "agreement_period_start";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agreement_period_start";

	
	
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


	$tdatam_producer["agreement_period_start"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "agreement_period_start";
//	agreement_period_end
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "agreement_period_end";
	$fdata["GoodName"] = "agreement_period_end";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","agreement_period_end");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "agreement_period_end";

		$fdata["sourceSingle"] = "agreement_period_end";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agreement_period_end";

	
	
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


	$tdatam_producer["agreement_period_end"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "agreement_period_end";
//	bank_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "bank_id";
	$fdata["GoodName"] = "bank_id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","bank_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "bank_id";

		$fdata["sourceSingle"] = "bank_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_id";

	
	
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


	$tdatam_producer["bank_id"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "bank_id";
//	bank_swift_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "bank_swift_code";
	$fdata["GoodName"] = "bank_swift_code";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","bank_swift_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bank_swift_code";

		$fdata["sourceSingle"] = "bank_swift_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_swift_code";

	
	
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


	$tdatam_producer["bank_swift_code"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "bank_swift_code";
//	bank_account_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "bank_account_number";
	$fdata["GoodName"] = "bank_account_number";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","bank_account_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bank_account_number";

		$fdata["sourceSingle"] = "bank_account_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_account_number";

	
	
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


	$tdatam_producer["bank_account_number"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "bank_account_number";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatam_producer["is_active"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","is_delete");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_delete";

		$fdata["sourceSingle"] = "is_delete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_delete";

	
	
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


	$tdatam_producer["is_delete"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","deleted_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "deleted_date";

		$fdata["sourceSingle"] = "deleted_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deleted_date";

	
	
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


	$tdatam_producer["deleted_date"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "deleted_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","created_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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


	$tdatam_producer["created_by"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "created_by";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_date";

	
	
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


	$tdatam_producer["created_date"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "created_date";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","last_update_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "last_update_by";

		$fdata["sourceSingle"] = "last_update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_by";

	
	
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


	$tdatam_producer["last_update_by"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("m_producer","last_update_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_update_date";

		$fdata["sourceSingle"] = "last_update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_date";

	
	
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


	$tdatam_producer["last_update_date"] = $fdata;
		$tdatam_producer[".searchableFields"][] = "last_update_date";


$tables_data["m_producer"]=&$tdatam_producer;
$field_labels["m_producer"] = &$fieldLabelsm_producer;
$fieldToolTips["m_producer"] = &$fieldToolTipsm_producer;
$placeHolders["m_producer"] = &$placeHoldersm_producer;
$page_titles["m_producer"] = &$pageTitlesm_producer;


changeTextControlsToDate( "m_producer" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_producer"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_producer"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_producer()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	user_id_tsun,  	producer_name,  	producer_category_id,  	producer_type_id,  	producer_domestic_type_id,  	producer_overseas_type_id,  	producer_network_association,  	producer_network_company_name,  	producer_gender,  	dob_place,  	dob_date,  	address_street,  	address_description,  	address_postal_code,  	address_region_id,  	address_city_id,  	address_province_id,  	address_country_id,  	establishment_country_id,  	establishment_date,  	licence_nib,  	tax_number,  	tax_name,  	pic_name,  	pic_phone_number,  	agreement_number,  	agreement_period_start,  	agreement_period_end,  	bank_id,  	bank_swift_code,  	bank_account_number,  	is_active,  	is_delete,  	deleted_date,  	created_by,  	created_date,  	last_update_by,  	last_update_date";
$proto0["m_strFrom"] = "FROM m_producer";
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
	"m_strName" => "id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_producer";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "user_id_tsun",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto8["m_sql"] = "user_id_tsun";
$proto8["m_srcTableName"] = "m_producer";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_name",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto10["m_sql"] = "producer_name";
$proto10["m_srcTableName"] = "m_producer";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_category_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto12["m_sql"] = "producer_category_id";
$proto12["m_srcTableName"] = "m_producer";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_type_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto14["m_sql"] = "producer_type_id";
$proto14["m_srcTableName"] = "m_producer";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_domestic_type_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto16["m_sql"] = "producer_domestic_type_id";
$proto16["m_srcTableName"] = "m_producer";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_overseas_type_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto18["m_sql"] = "producer_overseas_type_id";
$proto18["m_srcTableName"] = "m_producer";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_network_association",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto20["m_sql"] = "producer_network_association";
$proto20["m_srcTableName"] = "m_producer";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_network_company_name",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto22["m_sql"] = "producer_network_company_name";
$proto22["m_srcTableName"] = "m_producer";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_gender",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto24["m_sql"] = "producer_gender";
$proto24["m_srcTableName"] = "m_producer";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "dob_place",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto26["m_sql"] = "dob_place";
$proto26["m_srcTableName"] = "m_producer";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "dob_date",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto28["m_sql"] = "dob_date";
$proto28["m_srcTableName"] = "m_producer";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "address_street",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto30["m_sql"] = "address_street";
$proto30["m_srcTableName"] = "m_producer";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "address_description",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto32["m_sql"] = "address_description";
$proto32["m_srcTableName"] = "m_producer";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "address_postal_code",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto34["m_sql"] = "address_postal_code";
$proto34["m_srcTableName"] = "m_producer";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "address_region_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto36["m_sql"] = "address_region_id";
$proto36["m_srcTableName"] = "m_producer";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "address_city_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto38["m_sql"] = "address_city_id";
$proto38["m_srcTableName"] = "m_producer";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "address_province_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto40["m_sql"] = "address_province_id";
$proto40["m_srcTableName"] = "m_producer";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "address_country_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto42["m_sql"] = "address_country_id";
$proto42["m_srcTableName"] = "m_producer";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "establishment_country_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto44["m_sql"] = "establishment_country_id";
$proto44["m_srcTableName"] = "m_producer";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "establishment_date",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto46["m_sql"] = "establishment_date";
$proto46["m_srcTableName"] = "m_producer";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "licence_nib",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto48["m_sql"] = "licence_nib";
$proto48["m_srcTableName"] = "m_producer";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_number",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto50["m_sql"] = "tax_number";
$proto50["m_srcTableName"] = "m_producer";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_name",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto52["m_sql"] = "tax_name";
$proto52["m_srcTableName"] = "m_producer";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_name",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto54["m_sql"] = "pic_name";
$proto54["m_srcTableName"] = "m_producer";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_phone_number",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto56["m_sql"] = "pic_phone_number";
$proto56["m_srcTableName"] = "m_producer";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "agreement_number",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto58["m_sql"] = "agreement_number";
$proto58["m_srcTableName"] = "m_producer";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "agreement_period_start",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto60["m_sql"] = "agreement_period_start";
$proto60["m_srcTableName"] = "m_producer";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "agreement_period_end",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto62["m_sql"] = "agreement_period_end";
$proto62["m_srcTableName"] = "m_producer";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto64["m_sql"] = "bank_id";
$proto64["m_srcTableName"] = "m_producer";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_swift_code",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto66["m_sql"] = "bank_swift_code";
$proto66["m_srcTableName"] = "m_producer";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_account_number",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto68["m_sql"] = "bank_account_number";
$proto68["m_srcTableName"] = "m_producer";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto70["m_sql"] = "is_active";
$proto70["m_srcTableName"] = "m_producer";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto72["m_sql"] = "is_delete";
$proto72["m_srcTableName"] = "m_producer";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto74["m_sql"] = "deleted_date";
$proto74["m_srcTableName"] = "m_producer";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto76["m_sql"] = "created_by";
$proto76["m_srcTableName"] = "m_producer";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto78["m_sql"] = "created_date";
$proto78["m_srcTableName"] = "m_producer";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto80["m_sql"] = "last_update_by";
$proto80["m_srcTableName"] = "m_producer";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "m_producer"
));

$proto82["m_sql"] = "last_update_date";
$proto82["m_srcTableName"] = "m_producer";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "m_producer";
$proto85["m_srcTableName"] = "m_producer";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id";
$proto85["m_columns"][] = "user_id_tsun";
$proto85["m_columns"][] = "producer_name";
$proto85["m_columns"][] = "producer_category_id";
$proto85["m_columns"][] = "producer_type_id";
$proto85["m_columns"][] = "producer_domestic_type_id";
$proto85["m_columns"][] = "producer_overseas_type_id";
$proto85["m_columns"][] = "producer_network_association";
$proto85["m_columns"][] = "producer_network_company_name";
$proto85["m_columns"][] = "producer_gender";
$proto85["m_columns"][] = "dob_place";
$proto85["m_columns"][] = "dob_date";
$proto85["m_columns"][] = "address_street";
$proto85["m_columns"][] = "address_description";
$proto85["m_columns"][] = "address_postal_code";
$proto85["m_columns"][] = "address_region_id";
$proto85["m_columns"][] = "address_city_id";
$proto85["m_columns"][] = "address_province_id";
$proto85["m_columns"][] = "address_country_id";
$proto85["m_columns"][] = "establishment_country_id";
$proto85["m_columns"][] = "establishment_date";
$proto85["m_columns"][] = "licence_nib";
$proto85["m_columns"][] = "tax_number";
$proto85["m_columns"][] = "tax_name";
$proto85["m_columns"][] = "pic_name";
$proto85["m_columns"][] = "pic_phone_number";
$proto85["m_columns"][] = "agreement_number";
$proto85["m_columns"][] = "agreement_period_start";
$proto85["m_columns"][] = "agreement_period_end";
$proto85["m_columns"][] = "bank_id";
$proto85["m_columns"][] = "bank_swift_code";
$proto85["m_columns"][] = "bank_account_number";
$proto85["m_columns"][] = "is_active";
$proto85["m_columns"][] = "is_delete";
$proto85["m_columns"][] = "deleted_date";
$proto85["m_columns"][] = "created_by";
$proto85["m_columns"][] = "created_date";
$proto85["m_columns"][] = "last_update_by";
$proto85["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "m_producer";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "m_producer";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_producer";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_producer = createSqlQuery_m_producer();


	
				;

																																							

$tdatam_producer[".sqlquery"] = $queryData_m_producer;



$tdatam_producer[".hasEvents"] = false;

?>