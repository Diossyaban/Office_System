<?php
$tdatam_client_profile = array();
$tdatam_client_profile[".searchableFields"] = array();
$tdatam_client_profile[".ShortName"] = "m_client_profile";
$tdatam_client_profile[".OwnerID"] = "";
$tdatam_client_profile[".OriginalTable"] = "m_client_profile";


$tdatam_client_profile[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_client_profile[".originalPagesByType"] = $tdatam_client_profile[".pagesByType"];
$tdatam_client_profile[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_client_profile[".originalPages"] = $tdatam_client_profile[".pages"];
$tdatam_client_profile[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_client_profile[".originalDefaultPages"] = $tdatam_client_profile[".defaultPages"];

//	field labels
$fieldLabelsm_client_profile = array();
$fieldToolTipsm_client_profile = array();
$pageTitlesm_client_profile = array();
$placeHoldersm_client_profile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_client_profile["English"] = array();
	$fieldToolTipsm_client_profile["English"] = array();
	$placeHoldersm_client_profile["English"] = array();
	$pageTitlesm_client_profile["English"] = array();
	$fieldLabelsm_client_profile["English"]["id"] = "Id";
	$fieldToolTipsm_client_profile["English"]["id"] = "";
	$placeHoldersm_client_profile["English"]["id"] = "";
	$fieldLabelsm_client_profile["English"]["client_type"] = "Client Type";
	$fieldToolTipsm_client_profile["English"]["client_type"] = "";
	$placeHoldersm_client_profile["English"]["client_type"] = "";
	$fieldLabelsm_client_profile["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_client_profile["English"]["is_active"] = "";
	$placeHoldersm_client_profile["English"]["is_active"] = "";
	$fieldLabelsm_client_profile["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_client_profile["English"]["is_delete"] = "";
	$placeHoldersm_client_profile["English"]["is_delete"] = "";
	$fieldLabelsm_client_profile["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_client_profile["English"]["deleted_date"] = "";
	$placeHoldersm_client_profile["English"]["deleted_date"] = "";
	$fieldLabelsm_client_profile["English"]["client_name"] = "Client Name";
	$fieldToolTipsm_client_profile["English"]["client_name"] = "";
	$placeHoldersm_client_profile["English"]["client_name"] = "";
	$fieldLabelsm_client_profile["English"]["domestic_type_id"] = "Domestic Type";
	$fieldToolTipsm_client_profile["English"]["domestic_type_id"] = "";
	$placeHoldersm_client_profile["English"]["domestic_type_id"] = "";
	$fieldLabelsm_client_profile["English"]["overseas_type_id"] = "Overseas Type ";
	$fieldToolTipsm_client_profile["English"]["overseas_type_id"] = "";
	$placeHoldersm_client_profile["English"]["overseas_type_id"] = "";
	$fieldLabelsm_client_profile["English"]["client_gender"] = "Gender";
	$fieldToolTipsm_client_profile["English"]["client_gender"] = "";
	$placeHoldersm_client_profile["English"]["client_gender"] = "";
	$fieldLabelsm_client_profile["English"]["address_domicile_street"] = "Street";
	$fieldToolTipsm_client_profile["English"]["address_domicile_street"] = "";
	$placeHoldersm_client_profile["English"]["address_domicile_street"] = "";
	$fieldLabelsm_client_profile["English"]["address_domicile_description"] = "Description";
	$fieldToolTipsm_client_profile["English"]["address_domicile_description"] = "";
	$placeHoldersm_client_profile["English"]["address_domicile_description"] = "";
	$fieldLabelsm_client_profile["English"]["address_domicile_postal_code"] = "Postal Code";
	$fieldToolTipsm_client_profile["English"]["address_domicile_postal_code"] = "";
	$placeHoldersm_client_profile["English"]["address_domicile_postal_code"] = "";
	$fieldLabelsm_client_profile["English"]["address_domicile_region_id"] = "Region";
	$fieldToolTipsm_client_profile["English"]["address_domicile_region_id"] = "";
	$placeHoldersm_client_profile["English"]["address_domicile_region_id"] = "";
	$fieldLabelsm_client_profile["English"]["address_domicile_city_id"] = "Cities";
	$fieldToolTipsm_client_profile["English"]["address_domicile_city_id"] = "";
	$placeHoldersm_client_profile["English"]["address_domicile_city_id"] = "";
	$fieldLabelsm_client_profile["English"]["address_domicile_province_id"] = "States";
	$fieldToolTipsm_client_profile["English"]["address_domicile_province_id"] = "";
	$placeHoldersm_client_profile["English"]["address_domicile_province_id"] = "";
	$fieldLabelsm_client_profile["English"]["address_domicile_country_id"] = "Countries";
	$fieldToolTipsm_client_profile["English"]["address_domicile_country_id"] = "";
	$placeHoldersm_client_profile["English"]["address_domicile_country_id"] = "";
	$fieldLabelsm_client_profile["English"]["address_correspondence_street"] = "Street";
	$fieldToolTipsm_client_profile["English"]["address_correspondence_street"] = "";
	$placeHoldersm_client_profile["English"]["address_correspondence_street"] = "";
	$fieldLabelsm_client_profile["English"]["address_correspondence_description"] = "Description";
	$fieldToolTipsm_client_profile["English"]["address_correspondence_description"] = "";
	$placeHoldersm_client_profile["English"]["address_correspondence_description"] = "";
	$fieldLabelsm_client_profile["English"]["address_correspondence_postal_code"] = "Postal Code";
	$fieldToolTipsm_client_profile["English"]["address_correspondence_postal_code"] = "";
	$placeHoldersm_client_profile["English"]["address_correspondence_postal_code"] = "";
	$fieldLabelsm_client_profile["English"]["address_correspondence_region_id"] = "Region";
	$fieldToolTipsm_client_profile["English"]["address_correspondence_region_id"] = "";
	$placeHoldersm_client_profile["English"]["address_correspondence_region_id"] = "";
	$fieldLabelsm_client_profile["English"]["address_correspondence_city_id"] = "City";
	$fieldToolTipsm_client_profile["English"]["address_correspondence_city_id"] = "";
	$placeHoldersm_client_profile["English"]["address_correspondence_city_id"] = "";
	$fieldLabelsm_client_profile["English"]["address_correspondence_province_id"] = "States";
	$fieldToolTipsm_client_profile["English"]["address_correspondence_province_id"] = "";
	$placeHoldersm_client_profile["English"]["address_correspondence_province_id"] = "";
	$fieldLabelsm_client_profile["English"]["address_correspondence_country_id"] = "Countries";
	$fieldToolTipsm_client_profile["English"]["address_correspondence_country_id"] = "";
	$placeHoldersm_client_profile["English"]["address_correspondence_country_id"] = "";
	$fieldLabelsm_client_profile["English"]["establishment_place"] = "Establishment Place";
	$fieldToolTipsm_client_profile["English"]["establishment_place"] = "";
	$placeHoldersm_client_profile["English"]["establishment_place"] = "";
	$fieldLabelsm_client_profile["English"]["establishment_date"] = "Establishment Date";
	$fieldToolTipsm_client_profile["English"]["establishment_date"] = "";
	$placeHoldersm_client_profile["English"]["establishment_date"] = "";
	$fieldLabelsm_client_profile["English"]["tax_number"] = "Tax Number";
	$fieldToolTipsm_client_profile["English"]["tax_number"] = "";
	$placeHoldersm_client_profile["English"]["tax_number"] = "";
	$fieldLabelsm_client_profile["English"]["tax_name"] = "Tax Name";
	$fieldToolTipsm_client_profile["English"]["tax_name"] = "";
	$placeHoldersm_client_profile["English"]["tax_name"] = "";
	$fieldLabelsm_client_profile["English"]["id_card_number"] = "Card Number";
	$fieldToolTipsm_client_profile["English"]["id_card_number"] = "";
	$placeHoldersm_client_profile["English"]["id_card_number"] = "";
	$fieldLabelsm_client_profile["English"]["id_card_name"] = "Card Name";
	$fieldToolTipsm_client_profile["English"]["id_card_name"] = "";
	$placeHoldersm_client_profile["English"]["id_card_name"] = "";
	$fieldLabelsm_client_profile["English"]["id_card_citizen"] = "Card Citizen";
	$fieldToolTipsm_client_profile["English"]["id_card_citizen"] = "";
	$placeHoldersm_client_profile["English"]["id_card_citizen"] = "";
	$fieldLabelsm_client_profile["English"]["id_card_expired_date"] = "Expired Date";
	$fieldToolTipsm_client_profile["English"]["id_card_expired_date"] = "";
	$placeHoldersm_client_profile["English"]["id_card_expired_date"] = "";
	$fieldLabelsm_client_profile["English"]["contact_pic_name"] = "Contact Pic Name";
	$fieldToolTipsm_client_profile["English"]["contact_pic_name"] = "";
	$placeHoldersm_client_profile["English"]["contact_pic_name"] = "";
	$fieldLabelsm_client_profile["English"]["contact_pic_number"] = "Contact Pic Number";
	$fieldToolTipsm_client_profile["English"]["contact_pic_number"] = "";
	$placeHoldersm_client_profile["English"]["contact_pic_number"] = "";
	$fieldLabelsm_client_profile["English"]["bank_id"] = "Bank Id";
	$fieldToolTipsm_client_profile["English"]["bank_id"] = "";
	$placeHoldersm_client_profile["English"]["bank_id"] = "";
	$fieldLabelsm_client_profile["English"]["bank_swift_code"] = "Bank Swift Code";
	$fieldToolTipsm_client_profile["English"]["bank_swift_code"] = "";
	$placeHoldersm_client_profile["English"]["bank_swift_code"] = "";
	$fieldLabelsm_client_profile["English"]["bank_currency"] = "Bank Currency";
	$fieldToolTipsm_client_profile["English"]["bank_currency"] = "";
	$placeHoldersm_client_profile["English"]["bank_currency"] = "";
	$fieldLabelsm_client_profile["English"]["bank_account_number"] = "Bank Account Number";
	$fieldToolTipsm_client_profile["English"]["bank_account_number"] = "";
	$placeHoldersm_client_profile["English"]["bank_account_number"] = "";
	$fieldLabelsm_client_profile["English"]["dob_place"] = "Dob Place";
	$fieldToolTipsm_client_profile["English"]["dob_place"] = "";
	$placeHoldersm_client_profile["English"]["dob_place"] = "";
	$fieldLabelsm_client_profile["English"]["dob_date"] = "Dob Date";
	$fieldToolTipsm_client_profile["English"]["dob_date"] = "";
	$placeHoldersm_client_profile["English"]["dob_date"] = "";
	$fieldLabelsm_client_profile["English"]["referral_type"] = "Referral Type";
	$fieldToolTipsm_client_profile["English"]["referral_type"] = "";
	$placeHoldersm_client_profile["English"]["referral_type"] = "";
	$fieldLabelsm_client_profile["English"]["referral_partnership"] = "Referral Partnership";
	$fieldToolTipsm_client_profile["English"]["referral_partnership"] = "";
	$placeHoldersm_client_profile["English"]["referral_partnership"] = "";
	$fieldLabelsm_client_profile["English"]["referral_marketing"] = "Referral Marketing";
	$fieldToolTipsm_client_profile["English"]["referral_marketing"] = "";
	$placeHoldersm_client_profile["English"]["referral_marketing"] = "";
	$fieldLabelsm_client_profile["English"]["referral_employee"] = "Referral Employee";
	$fieldToolTipsm_client_profile["English"]["referral_employee"] = "";
	$placeHoldersm_client_profile["English"]["referral_employee"] = "";
	$fieldLabelsm_client_profile["English"]["client_no"] = "Client No";
	$fieldToolTipsm_client_profile["English"]["client_no"] = "";
	$placeHoldersm_client_profile["English"]["client_no"] = "";
	$fieldLabelsm_client_profile["English"]["add_user"] = "Add User";
	$fieldToolTipsm_client_profile["English"]["add_user"] = "";
	$placeHoldersm_client_profile["English"]["add_user"] = "";
	$fieldLabelsm_client_profile["English"]["add_date"] = "Add Date";
	$fieldToolTipsm_client_profile["English"]["add_date"] = "";
	$placeHoldersm_client_profile["English"]["add_date"] = "";
	$fieldLabelsm_client_profile["English"]["edit_user"] = "Edit User";
	$fieldToolTipsm_client_profile["English"]["edit_user"] = "";
	$placeHoldersm_client_profile["English"]["edit_user"] = "";
	$fieldLabelsm_client_profile["English"]["edit_date"] = "Edit Date";
	$fieldToolTipsm_client_profile["English"]["edit_date"] = "";
	$placeHoldersm_client_profile["English"]["edit_date"] = "";
	$fieldLabelsm_client_profile["English"]["m_client_profilecol"] = "M Client Profilecol";
	$fieldToolTipsm_client_profile["English"]["m_client_profilecol"] = "";
	$placeHoldersm_client_profile["English"]["m_client_profilecol"] = "";
	$fieldLabelsm_client_profile["English"]["last_user"] = "Last User";
	$fieldToolTipsm_client_profile["English"]["last_user"] = "";
	$placeHoldersm_client_profile["English"]["last_user"] = "";
	$fieldLabelsm_client_profile["English"]["last_date"] = "Last Date";
	$fieldToolTipsm_client_profile["English"]["last_date"] = "";
	$placeHoldersm_client_profile["English"]["last_date"] = "";
	if (count($fieldToolTipsm_client_profile["English"]))
		$tdatam_client_profile[".isUseToolTips"] = true;
}


	$tdatam_client_profile[".NCSearch"] = true;



$tdatam_client_profile[".shortTableName"] = "m_client_profile";
$tdatam_client_profile[".nSecOptions"] = 0;

$tdatam_client_profile[".mainTableOwnerID"] = "";
$tdatam_client_profile[".entityType"] = 0;
$tdatam_client_profile[".connId"] = "u736239518tsundbat154412412";


$tdatam_client_profile[".strOriginalTableName"] = "m_client_profile";

	



$tdatam_client_profile[".showAddInPopup"] = false;

$tdatam_client_profile[".showEditInPopup"] = false;

$tdatam_client_profile[".showViewInPopup"] = false;

$tdatam_client_profile[".listAjax"] = false;
//	temporary
//$tdatam_client_profile[".listAjax"] = false;

	$tdatam_client_profile[".audit"] = true;

	$tdatam_client_profile[".locking"] = false;


$pages = $tdatam_client_profile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_client_profile[".edit"] = true;
	$tdatam_client_profile[".afterEditAction"] = 1;
	$tdatam_client_profile[".closePopupAfterEdit"] = 1;
	$tdatam_client_profile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_client_profile[".add"] = true;
$tdatam_client_profile[".afterAddAction"] = 3;
$tdatam_client_profile[".closePopupAfterAdd"] = 1;
$tdatam_client_profile[".afterAddActionDetTable"] = "m_disposition_profile";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_client_profile[".list"] = true;
}



$tdatam_client_profile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_client_profile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_client_profile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_client_profile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_client_profile[".printFriendly"] = true;
}



$tdatam_client_profile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_client_profile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_client_profile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_client_profile[".isUseAjaxSuggest"] = true;



											
				
																																						

$tdatam_client_profile[".ajaxCodeSnippetAdded"] = false;

$tdatam_client_profile[".buttonsAdded"] = true;

$tdatam_client_profile[".addPageEvents"] = true;

// use timepicker for search panel
$tdatam_client_profile[".isUseTimeForSearch"] = false;


$tdatam_client_profile[".badgeColor"] = "DAA520";


$tdatam_client_profile[".allSearchFields"] = array();
$tdatam_client_profile[".filterFields"] = array();
$tdatam_client_profile[".requiredSearchFields"] = array();

$tdatam_client_profile[".googleLikeFields"] = array();
$tdatam_client_profile[".googleLikeFields"][] = "id";
$tdatam_client_profile[".googleLikeFields"][] = "client_name";
$tdatam_client_profile[".googleLikeFields"][] = "client_type";
$tdatam_client_profile[".googleLikeFields"][] = "domestic_type_id";
$tdatam_client_profile[".googleLikeFields"][] = "overseas_type_id";
$tdatam_client_profile[".googleLikeFields"][] = "client_gender";
$tdatam_client_profile[".googleLikeFields"][] = "dob_place";
$tdatam_client_profile[".googleLikeFields"][] = "dob_date";
$tdatam_client_profile[".googleLikeFields"][] = "address_domicile_street";
$tdatam_client_profile[".googleLikeFields"][] = "address_domicile_description";
$tdatam_client_profile[".googleLikeFields"][] = "address_domicile_postal_code";
$tdatam_client_profile[".googleLikeFields"][] = "address_domicile_region_id";
$tdatam_client_profile[".googleLikeFields"][] = "address_domicile_city_id";
$tdatam_client_profile[".googleLikeFields"][] = "address_domicile_province_id";
$tdatam_client_profile[".googleLikeFields"][] = "address_domicile_country_id";
$tdatam_client_profile[".googleLikeFields"][] = "address_correspondence_street";
$tdatam_client_profile[".googleLikeFields"][] = "address_correspondence_description";
$tdatam_client_profile[".googleLikeFields"][] = "address_correspondence_postal_code";
$tdatam_client_profile[".googleLikeFields"][] = "address_correspondence_region_id";
$tdatam_client_profile[".googleLikeFields"][] = "address_correspondence_city_id";
$tdatam_client_profile[".googleLikeFields"][] = "address_correspondence_province_id";
$tdatam_client_profile[".googleLikeFields"][] = "address_correspondence_country_id";
$tdatam_client_profile[".googleLikeFields"][] = "establishment_place";
$tdatam_client_profile[".googleLikeFields"][] = "establishment_date";
$tdatam_client_profile[".googleLikeFields"][] = "tax_number";
$tdatam_client_profile[".googleLikeFields"][] = "tax_name";
$tdatam_client_profile[".googleLikeFields"][] = "id_card_number";
$tdatam_client_profile[".googleLikeFields"][] = "id_card_name";
$tdatam_client_profile[".googleLikeFields"][] = "id_card_citizen";
$tdatam_client_profile[".googleLikeFields"][] = "id_card_expired_date";
$tdatam_client_profile[".googleLikeFields"][] = "contact_pic_name";
$tdatam_client_profile[".googleLikeFields"][] = "contact_pic_number";
$tdatam_client_profile[".googleLikeFields"][] = "bank_id";
$tdatam_client_profile[".googleLikeFields"][] = "bank_swift_code";
$tdatam_client_profile[".googleLikeFields"][] = "bank_currency";
$tdatam_client_profile[".googleLikeFields"][] = "bank_account_number";
$tdatam_client_profile[".googleLikeFields"][] = "referral_type";
$tdatam_client_profile[".googleLikeFields"][] = "referral_partnership";
$tdatam_client_profile[".googleLikeFields"][] = "referral_marketing";
$tdatam_client_profile[".googleLikeFields"][] = "referral_employee";
$tdatam_client_profile[".googleLikeFields"][] = "is_active";
$tdatam_client_profile[".googleLikeFields"][] = "is_delete";
$tdatam_client_profile[".googleLikeFields"][] = "deleted_date";
$tdatam_client_profile[".googleLikeFields"][] = "add_user";
$tdatam_client_profile[".googleLikeFields"][] = "add_date";
$tdatam_client_profile[".googleLikeFields"][] = "edit_user";
$tdatam_client_profile[".googleLikeFields"][] = "edit_date";
$tdatam_client_profile[".googleLikeFields"][] = "client_no";
$tdatam_client_profile[".googleLikeFields"][] = "m_client_profilecol";
$tdatam_client_profile[".googleLikeFields"][] = "last_user";
$tdatam_client_profile[".googleLikeFields"][] = "last_date";



$tdatam_client_profile[".tableType"] = "list";

$tdatam_client_profile[".printerPageOrientation"] = 0;
$tdatam_client_profile[".nPrinterPageScale"] = 100;

$tdatam_client_profile[".nPrinterSplitRecords"] = 40;

$tdatam_client_profile[".geocodingEnabled"] = false;




$tdatam_client_profile[".isDisplayLoading"] = true;






$tdatam_client_profile[".pageSize"] = 20;

$tdatam_client_profile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_client_profile[".strOrderBy"] = $tstrOrderBy;

$tdatam_client_profile[".orderindexes"] = array();


$tdatam_client_profile[".sqlHead"] = "SELECT id,  	client_name,  	client_type,  	domestic_type_id,  	overseas_type_id,  	client_gender,  	dob_place,  	dob_date,  	address_domicile_street,  	address_domicile_description,  	address_domicile_postal_code,  	address_domicile_region_id,  	address_domicile_city_id,  	address_domicile_province_id,  	address_domicile_country_id,  	address_correspondence_street,  	address_correspondence_description,  	address_correspondence_postal_code,  	address_correspondence_region_id,  	address_correspondence_city_id,  	address_correspondence_province_id,  	address_correspondence_country_id,  	establishment_place,  	establishment_date,  	tax_number,  	tax_name,  	id_card_number,  	id_card_name,  	id_card_citizen,  	id_card_expired_date,  	contact_pic_name,  	contact_pic_number,  	bank_id,  	bank_swift_code,  	bank_currency,  	bank_account_number,  	referral_type,  	referral_partnership,  	referral_marketing,  	referral_employee,  	is_active,  	is_delete,  	deleted_date,  	add_user,  	add_date,  	edit_user,  	edit_date,  	client_no,  	m_client_profilecol,  	last_user,  	last_date";
$tdatam_client_profile[".sqlFrom"] = "FROM m_client_profile";
$tdatam_client_profile[".sqlWhereExpr"] = "";
$tdatam_client_profile[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Company",
	'nameType' => 'Text',
	'where' => "client_type = 'Company'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "2",
	'name' => "Individual",
	'nameType' => 'Text',
	'where' => "client_type = 'Individual'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatam_client_profile[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_client_profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_client_profile[".arrGroupsPerPage"] = $arrGPP;

$tdatam_client_profile[".highlightSearchResults"] = true;

$tableKeysm_client_profile = array();
$tableKeysm_client_profile[] = "id";
$tdatam_client_profile[".Keys"] = $tableKeysm_client_profile;


$tdatam_client_profile[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","id");
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


	$tdatam_client_profile["id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "id";
//	client_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "client_name";
	$fdata["GoodName"] = "client_name";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","client_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "client_name";

		$fdata["sourceSingle"] = "client_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_name";

	
	
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
			$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Value %value% already exists", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
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


	$tdatam_client_profile["client_name"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "client_name";
//	client_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "client_type";
	$fdata["GoodName"] = "client_type";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","client_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "client_type";

		$fdata["sourceSingle"] = "client_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_type";

	
	
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
	$eventsData[] = array( "name" => "client_type_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Company";
	$edata["LookupValues"][] = "Individual";

	
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


	$tdatam_client_profile["client_type"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "client_type";
//	domestic_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "domestic_type_id";
	$fdata["GoodName"] = "domestic_type_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","domestic_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "domestic_type_id";

		$fdata["sourceSingle"] = "domestic_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "domestic_type_id";

	
	
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
	$edata["LookupTable"] = "m_domestic_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "domestic_name";

	

	
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


	$tdatam_client_profile["domestic_type_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "domestic_type_id";
//	overseas_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "overseas_type_id";
	$fdata["GoodName"] = "overseas_type_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","overseas_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "overseas_type_id";

		$fdata["sourceSingle"] = "overseas_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "overseas_type_id";

	
	
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
	$edata["LookupTable"] = "m_overseas_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "overseas_name";

	

	
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


	$tdatam_client_profile["overseas_type_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "overseas_type_id";
//	client_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "client_gender";
	$fdata["GoodName"] = "client_gender";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","client_gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "client_gender";

		$fdata["sourceSingle"] = "client_gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_gender";

	
	
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
	$edata["LookupValues"][] = "Male";
	$edata["LookupValues"][] = "Female";

	
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


	$tdatam_client_profile["client_gender"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "client_gender";
//	dob_place
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "dob_place";
	$fdata["GoodName"] = "dob_place";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","dob_place");
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


	$tdatam_client_profile["dob_place"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "dob_place";
//	dob_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dob_date";
	$fdata["GoodName"] = "dob_date";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","dob_date");
	$fdata["FieldType"] = 7;


	
	
			

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


	$tdatam_client_profile["dob_date"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "dob_date";
//	address_domicile_street
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "address_domicile_street";
	$fdata["GoodName"] = "address_domicile_street";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_domicile_street");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_domicile_street";

		$fdata["sourceSingle"] = "address_domicile_street";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_domicile_street";

	
	
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


	$tdatam_client_profile["address_domicile_street"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_domicile_street";
//	address_domicile_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "address_domicile_description";
	$fdata["GoodName"] = "address_domicile_description";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_domicile_description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_domicile_description";

		$fdata["sourceSingle"] = "address_domicile_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_domicile_description";

	
	
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


	$tdatam_client_profile["address_domicile_description"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_domicile_description";
//	address_domicile_postal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "address_domicile_postal_code";
	$fdata["GoodName"] = "address_domicile_postal_code";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_domicile_postal_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_domicile_postal_code";

		$fdata["sourceSingle"] = "address_domicile_postal_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_domicile_postal_code";

	
	
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


	$tdatam_client_profile["address_domicile_postal_code"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_domicile_postal_code";
//	address_domicile_region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "address_domicile_region_id";
	$fdata["GoodName"] = "address_domicile_region_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_domicile_region_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_domicile_region_id";

		$fdata["sourceSingle"] = "address_domicile_region_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_domicile_region_id";

	
	
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


	$tdatam_client_profile["address_domicile_region_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_domicile_region_id";
//	address_domicile_city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "address_domicile_city_id";
	$fdata["GoodName"] = "address_domicile_city_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_domicile_city_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_domicile_city_id";

		$fdata["sourceSingle"] = "address_domicile_city_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_domicile_city_id";

	
	
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


	$tdatam_client_profile["address_domicile_city_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_domicile_city_id";
//	address_domicile_province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "address_domicile_province_id";
	$fdata["GoodName"] = "address_domicile_province_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_domicile_province_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_domicile_province_id";

		$fdata["sourceSingle"] = "address_domicile_province_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_domicile_province_id";

	
	
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
	$edata["LookupTable"] = "v_states";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "states";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "states";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "address_domicile_country_id", "lookup" => "countries" );

	
	

	
	
	
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


	$tdatam_client_profile["address_domicile_province_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_domicile_province_id";
//	address_domicile_country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "address_domicile_country_id";
	$fdata["GoodName"] = "address_domicile_country_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_domicile_country_id");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_domicile_country_id";

		$fdata["sourceSingle"] = "address_domicile_country_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_domicile_country_id";

	
	
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
	$edata["LookupTable"] = "v_countries";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "countries";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "countries";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "address_domicile_province_id";

	
	
	
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


	$tdatam_client_profile["address_domicile_country_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_domicile_country_id";
//	address_correspondence_street
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "address_correspondence_street";
	$fdata["GoodName"] = "address_correspondence_street";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_correspondence_street");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_correspondence_street";

		$fdata["sourceSingle"] = "address_correspondence_street";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_correspondence_street";

	
	
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


	$tdatam_client_profile["address_correspondence_street"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_correspondence_street";
//	address_correspondence_description
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "address_correspondence_description";
	$fdata["GoodName"] = "address_correspondence_description";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_correspondence_description");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_correspondence_description";

		$fdata["sourceSingle"] = "address_correspondence_description";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_correspondence_description";

	
	
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


	$tdatam_client_profile["address_correspondence_description"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_correspondence_description";
//	address_correspondence_postal_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "address_correspondence_postal_code";
	$fdata["GoodName"] = "address_correspondence_postal_code";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_correspondence_postal_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "address_correspondence_postal_code";

		$fdata["sourceSingle"] = "address_correspondence_postal_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_correspondence_postal_code";

	
	
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


	$tdatam_client_profile["address_correspondence_postal_code"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_correspondence_postal_code";
//	address_correspondence_region_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "address_correspondence_region_id";
	$fdata["GoodName"] = "address_correspondence_region_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_correspondence_region_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_correspondence_region_id";

		$fdata["sourceSingle"] = "address_correspondence_region_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_correspondence_region_id";

	
	
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


	$tdatam_client_profile["address_correspondence_region_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_correspondence_region_id";
//	address_correspondence_city_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "address_correspondence_city_id";
	$fdata["GoodName"] = "address_correspondence_city_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_correspondence_city_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_correspondence_city_id";

		$fdata["sourceSingle"] = "address_correspondence_city_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_correspondence_city_id";

	
	
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


	$tdatam_client_profile["address_correspondence_city_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_correspondence_city_id";
//	address_correspondence_province_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "address_correspondence_province_id";
	$fdata["GoodName"] = "address_correspondence_province_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_correspondence_province_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_correspondence_province_id";

		$fdata["sourceSingle"] = "address_correspondence_province_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_correspondence_province_id";

	
	
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
	$edata["LookupTable"] = "v_states";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "states";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "states";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "address_correspondence_country_id", "lookup" => "countries" );

	
	

	
	
	
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


	$tdatam_client_profile["address_correspondence_province_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_correspondence_province_id";
//	address_correspondence_country_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "address_correspondence_country_id";
	$fdata["GoodName"] = "address_correspondence_country_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","address_correspondence_country_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "address_correspondence_country_id";

		$fdata["sourceSingle"] = "address_correspondence_country_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "address_correspondence_country_id";

	
	
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
	$edata["LookupTable"] = "v_countries";
		$edata["listPageId"] = "list";
		$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "countries";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "countries";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "address_correspondence_province_id";

	
	
	
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


	$tdatam_client_profile["address_correspondence_country_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "address_correspondence_country_id";
//	establishment_place
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "establishment_place";
	$fdata["GoodName"] = "establishment_place";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","establishment_place");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "establishment_place";

		$fdata["sourceSingle"] = "establishment_place";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "establishment_place";

	
	
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


	$tdatam_client_profile["establishment_place"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "establishment_place";
//	establishment_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "establishment_date";
	$fdata["GoodName"] = "establishment_date";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","establishment_date");
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


	$tdatam_client_profile["establishment_date"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "establishment_date";
//	tax_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "tax_number";
	$fdata["GoodName"] = "tax_number";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","tax_number");
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


	$tdatam_client_profile["tax_number"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "tax_number";
//	tax_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "tax_name";
	$fdata["GoodName"] = "tax_name";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","tax_name");
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


	$tdatam_client_profile["tax_name"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "tax_name";
//	id_card_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "id_card_number";
	$fdata["GoodName"] = "id_card_number";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","id_card_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_card_number";

		$fdata["sourceSingle"] = "id_card_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_card_number";

	
	
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


	$tdatam_client_profile["id_card_number"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "id_card_number";
//	id_card_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "id_card_name";
	$fdata["GoodName"] = "id_card_name";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","id_card_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_card_name";

		$fdata["sourceSingle"] = "id_card_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_card_name";

	
	
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


	$tdatam_client_profile["id_card_name"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "id_card_name";
//	id_card_citizen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "id_card_citizen";
	$fdata["GoodName"] = "id_card_citizen";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","id_card_citizen");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "id_card_citizen";

		$fdata["sourceSingle"] = "id_card_citizen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_card_citizen";

	
	
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
	$edata["LookupTable"] = "v_countries";
			$edata["freeInput"] = true;
	$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 1;

	
		
	$edata["LinkField"] = "countries";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "countries";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatam_client_profile["id_card_citizen"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "id_card_citizen";
//	id_card_expired_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "id_card_expired_date";
	$fdata["GoodName"] = "id_card_expired_date";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","id_card_expired_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "id_card_expired_date";

		$fdata["sourceSingle"] = "id_card_expired_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_card_expired_date";

	
	
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


	$tdatam_client_profile["id_card_expired_date"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "id_card_expired_date";
//	contact_pic_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "contact_pic_name";
	$fdata["GoodName"] = "contact_pic_name";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","contact_pic_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact_pic_name";

		$fdata["sourceSingle"] = "contact_pic_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_pic_name";

	
	
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


	$tdatam_client_profile["contact_pic_name"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "contact_pic_name";
//	contact_pic_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "contact_pic_number";
	$fdata["GoodName"] = "contact_pic_number";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","contact_pic_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contact_pic_number";

		$fdata["sourceSingle"] = "contact_pic_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contact_pic_number";

	
	
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


	$tdatam_client_profile["contact_pic_number"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "contact_pic_number";
//	bank_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "bank_id";
	$fdata["GoodName"] = "bank_id";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","bank_id");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_bank";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "bank_name";

	

	
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


	$tdatam_client_profile["bank_id"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "bank_id";
//	bank_swift_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "bank_swift_code";
	$fdata["GoodName"] = "bank_swift_code";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","bank_swift_code");
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


	$tdatam_client_profile["bank_swift_code"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "bank_swift_code";
//	bank_currency
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "bank_currency";
	$fdata["GoodName"] = "bank_currency";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","bank_currency");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bank_currency";

		$fdata["sourceSingle"] = "bank_currency";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_currency";

	
	
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


	$tdatam_client_profile["bank_currency"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "bank_currency";
//	bank_account_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "bank_account_number";
	$fdata["GoodName"] = "bank_account_number";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","bank_account_number");
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


	$tdatam_client_profile["bank_account_number"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "bank_account_number";
//	referral_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "referral_type";
	$fdata["GoodName"] = "referral_type";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","referral_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referral_type";

		$fdata["sourceSingle"] = "referral_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referral_type";

	
	
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
	$eventsData[] = array( "name" => "referral_type_event", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;


// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Partnership";
	$edata["LookupValues"][] = "Marketing";
	$edata["LookupValues"][] = "Employee";

	
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


	$tdatam_client_profile["referral_type"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "referral_type";
//	referral_partnership
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "referral_partnership";
	$fdata["GoodName"] = "referral_partnership";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","referral_partnership");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referral_partnership";

		$fdata["sourceSingle"] = "referral_partnership";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referral_partnership";

	
	
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
	$edata["LookupTable"] = "partnership_view";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "producer_name";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "producer_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatam_client_profile["referral_partnership"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "referral_partnership";
//	referral_marketing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "referral_marketing";
	$fdata["GoodName"] = "referral_marketing";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","referral_marketing");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referral_marketing";

		$fdata["sourceSingle"] = "referral_marketing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referral_marketing";

	
	
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
	$edata["LookupTable"] = "View";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "t_employee_nik";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "t_employee_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatam_client_profile["referral_marketing"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "referral_marketing";
//	referral_employee
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "referral_employee";
	$fdata["GoodName"] = "referral_employee";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","referral_employee");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "referral_employee";

		$fdata["sourceSingle"] = "referral_employee";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "referral_employee";

	
	
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
	$edata["LookupTable"] = "View";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "t_employee_nik";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "t_employee_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatam_client_profile["referral_employee"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "referral_employee";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatam_client_profile["is_active"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","is_delete");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_delete";

		$fdata["sourceSingle"] = "is_delete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_delete";

	
	
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


	$tdatam_client_profile["is_delete"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","deleted_date");
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


	$tdatam_client_profile["deleted_date"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "deleted_date";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","add_user");
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


	$tdatam_client_profile["add_user"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","add_date");
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


	$tdatam_client_profile["add_date"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","edit_user");
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


	$tdatam_client_profile["edit_user"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","edit_date");
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


	$tdatam_client_profile["edit_date"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "edit_date";
//	client_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "client_no";
	$fdata["GoodName"] = "client_no";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","client_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "client_no";

		$fdata["sourceSingle"] = "client_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "client_no";

	
	
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


	$tdatam_client_profile["client_no"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "client_no";
//	m_client_profilecol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "m_client_profilecol";
	$fdata["GoodName"] = "m_client_profilecol";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","m_client_profilecol");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_client_profilecol";

		$fdata["sourceSingle"] = "m_client_profilecol";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_client_profilecol";

	
	
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


	$tdatam_client_profile["m_client_profilecol"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "m_client_profilecol";
//	last_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "last_user";
	$fdata["GoodName"] = "last_user";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","last_user");
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


	$tdatam_client_profile["last_user"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "last_user";
//	last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "last_date";
	$fdata["GoodName"] = "last_date";
	$fdata["ownerTable"] = "m_client_profile";
	$fdata["Label"] = GetFieldLabel("m_client_profile","last_date");
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


	$tdatam_client_profile["last_date"] = $fdata;
		$tdatam_client_profile[".searchableFields"][] = "last_date";


$tables_data["m_client_profile"]=&$tdatam_client_profile;
$field_labels["m_client_profile"] = &$fieldLabelsm_client_profile;
$fieldToolTips["m_client_profile"] = &$fieldToolTipsm_client_profile;
$placeHolders["m_client_profile"] = &$placeHoldersm_client_profile;
$page_titles["m_client_profile"] = &$pageTitlesm_client_profile;


changeTextControlsToDate( "m_client_profile" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_client_profile"] = array();
//	m_disposition_profile
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_disposition_profile";
		$detailsParam["dOriginalTable"] = "m_disposition";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_disposition_profile";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_disposition_profile");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["m_client_profile"][$dIndex] = $detailsParam;

	
		$detailsTablesData["m_client_profile"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["m_client_profile"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["m_client_profile"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["m_client_profile"][$dIndex]["detailKeys"][]="t_disposition_no";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_client_profile"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_client_profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	client_name,  	client_type,  	domestic_type_id,  	overseas_type_id,  	client_gender,  	dob_place,  	dob_date,  	address_domicile_street,  	address_domicile_description,  	address_domicile_postal_code,  	address_domicile_region_id,  	address_domicile_city_id,  	address_domicile_province_id,  	address_domicile_country_id,  	address_correspondence_street,  	address_correspondence_description,  	address_correspondence_postal_code,  	address_correspondence_region_id,  	address_correspondence_city_id,  	address_correspondence_province_id,  	address_correspondence_country_id,  	establishment_place,  	establishment_date,  	tax_number,  	tax_name,  	id_card_number,  	id_card_name,  	id_card_citizen,  	id_card_expired_date,  	contact_pic_name,  	contact_pic_number,  	bank_id,  	bank_swift_code,  	bank_currency,  	bank_account_number,  	referral_type,  	referral_partnership,  	referral_marketing,  	referral_employee,  	is_active,  	is_delete,  	deleted_date,  	add_user,  	add_date,  	edit_user,  	edit_date,  	client_no,  	m_client_profilecol,  	last_user,  	last_date";
$proto0["m_strFrom"] = "FROM m_client_profile";
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
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_client_profile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "client_name",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto8["m_sql"] = "client_name";
$proto8["m_srcTableName"] = "m_client_profile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "client_type",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto10["m_sql"] = "client_type";
$proto10["m_srcTableName"] = "m_client_profile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "domestic_type_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto12["m_sql"] = "domestic_type_id";
$proto12["m_srcTableName"] = "m_client_profile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "overseas_type_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto14["m_sql"] = "overseas_type_id";
$proto14["m_srcTableName"] = "m_client_profile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "client_gender",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto16["m_sql"] = "client_gender";
$proto16["m_srcTableName"] = "m_client_profile";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "dob_place",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto18["m_sql"] = "dob_place";
$proto18["m_srcTableName"] = "m_client_profile";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dob_date",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto20["m_sql"] = "dob_date";
$proto20["m_srcTableName"] = "m_client_profile";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "address_domicile_street",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto22["m_sql"] = "address_domicile_street";
$proto22["m_srcTableName"] = "m_client_profile";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "address_domicile_description",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto24["m_sql"] = "address_domicile_description";
$proto24["m_srcTableName"] = "m_client_profile";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "address_domicile_postal_code",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto26["m_sql"] = "address_domicile_postal_code";
$proto26["m_srcTableName"] = "m_client_profile";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "address_domicile_region_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto28["m_sql"] = "address_domicile_region_id";
$proto28["m_srcTableName"] = "m_client_profile";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "address_domicile_city_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto30["m_sql"] = "address_domicile_city_id";
$proto30["m_srcTableName"] = "m_client_profile";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "address_domicile_province_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto32["m_sql"] = "address_domicile_province_id";
$proto32["m_srcTableName"] = "m_client_profile";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "address_domicile_country_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto34["m_sql"] = "address_domicile_country_id";
$proto34["m_srcTableName"] = "m_client_profile";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "address_correspondence_street",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto36["m_sql"] = "address_correspondence_street";
$proto36["m_srcTableName"] = "m_client_profile";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "address_correspondence_description",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto38["m_sql"] = "address_correspondence_description";
$proto38["m_srcTableName"] = "m_client_profile";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "address_correspondence_postal_code",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto40["m_sql"] = "address_correspondence_postal_code";
$proto40["m_srcTableName"] = "m_client_profile";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "address_correspondence_region_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto42["m_sql"] = "address_correspondence_region_id";
$proto42["m_srcTableName"] = "m_client_profile";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "address_correspondence_city_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto44["m_sql"] = "address_correspondence_city_id";
$proto44["m_srcTableName"] = "m_client_profile";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "address_correspondence_province_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto46["m_sql"] = "address_correspondence_province_id";
$proto46["m_srcTableName"] = "m_client_profile";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "address_correspondence_country_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto48["m_sql"] = "address_correspondence_country_id";
$proto48["m_srcTableName"] = "m_client_profile";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "establishment_place",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto50["m_sql"] = "establishment_place";
$proto50["m_srcTableName"] = "m_client_profile";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "establishment_date",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto52["m_sql"] = "establishment_date";
$proto52["m_srcTableName"] = "m_client_profile";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_number",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto54["m_sql"] = "tax_number";
$proto54["m_srcTableName"] = "m_client_profile";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "tax_name",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto56["m_sql"] = "tax_name";
$proto56["m_srcTableName"] = "m_client_profile";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "id_card_number",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto58["m_sql"] = "id_card_number";
$proto58["m_srcTableName"] = "m_client_profile";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "id_card_name",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto60["m_sql"] = "id_card_name";
$proto60["m_srcTableName"] = "m_client_profile";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "id_card_citizen",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto62["m_sql"] = "id_card_citizen";
$proto62["m_srcTableName"] = "m_client_profile";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "id_card_expired_date",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto64["m_sql"] = "id_card_expired_date";
$proto64["m_srcTableName"] = "m_client_profile";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_pic_name",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto66["m_sql"] = "contact_pic_name";
$proto66["m_srcTableName"] = "m_client_profile";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "contact_pic_number",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto68["m_sql"] = "contact_pic_number";
$proto68["m_srcTableName"] = "m_client_profile";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_id",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto70["m_sql"] = "bank_id";
$proto70["m_srcTableName"] = "m_client_profile";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_swift_code",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto72["m_sql"] = "bank_swift_code";
$proto72["m_srcTableName"] = "m_client_profile";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_currency",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto74["m_sql"] = "bank_currency";
$proto74["m_srcTableName"] = "m_client_profile";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_account_number",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto76["m_sql"] = "bank_account_number";
$proto76["m_srcTableName"] = "m_client_profile";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "referral_type",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto78["m_sql"] = "referral_type";
$proto78["m_srcTableName"] = "m_client_profile";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "referral_partnership",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto80["m_sql"] = "referral_partnership";
$proto80["m_srcTableName"] = "m_client_profile";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "referral_marketing",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto82["m_sql"] = "referral_marketing";
$proto82["m_srcTableName"] = "m_client_profile";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "referral_employee",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto84["m_sql"] = "referral_employee";
$proto84["m_srcTableName"] = "m_client_profile";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto86["m_sql"] = "is_active";
$proto86["m_srcTableName"] = "m_client_profile";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto88["m_sql"] = "is_delete";
$proto88["m_srcTableName"] = "m_client_profile";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto90["m_sql"] = "deleted_date";
$proto90["m_srcTableName"] = "m_client_profile";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto92["m_sql"] = "add_user";
$proto92["m_srcTableName"] = "m_client_profile";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto94["m_sql"] = "add_date";
$proto94["m_srcTableName"] = "m_client_profile";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto96["m_sql"] = "edit_user";
$proto96["m_srcTableName"] = "m_client_profile";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto98["m_sql"] = "edit_date";
$proto98["m_srcTableName"] = "m_client_profile";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "client_no",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto100["m_sql"] = "client_no";
$proto100["m_srcTableName"] = "m_client_profile";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "m_client_profilecol",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto102["m_sql"] = "m_client_profilecol";
$proto102["m_srcTableName"] = "m_client_profile";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto104["m_sql"] = "last_user";
$proto104["m_srcTableName"] = "m_client_profile";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "last_date",
	"m_strTable" => "m_client_profile",
	"m_srcTableName" => "m_client_profile"
));

$proto106["m_sql"] = "last_date";
$proto106["m_srcTableName"] = "m_client_profile";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto108=array();
$proto108["m_link"] = "SQLL_MAIN";
			$proto109=array();
$proto109["m_strName"] = "m_client_profile";
$proto109["m_srcTableName"] = "m_client_profile";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "id";
$proto109["m_columns"][] = "client_name";
$proto109["m_columns"][] = "client_type";
$proto109["m_columns"][] = "domestic_type_id";
$proto109["m_columns"][] = "overseas_type_id";
$proto109["m_columns"][] = "client_gender";
$proto109["m_columns"][] = "dob_place";
$proto109["m_columns"][] = "dob_date";
$proto109["m_columns"][] = "address_domicile_street";
$proto109["m_columns"][] = "address_domicile_description";
$proto109["m_columns"][] = "address_domicile_postal_code";
$proto109["m_columns"][] = "address_domicile_region_id";
$proto109["m_columns"][] = "address_domicile_city_id";
$proto109["m_columns"][] = "address_domicile_province_id";
$proto109["m_columns"][] = "address_domicile_country_id";
$proto109["m_columns"][] = "address_correspondence_street";
$proto109["m_columns"][] = "address_correspondence_description";
$proto109["m_columns"][] = "address_correspondence_postal_code";
$proto109["m_columns"][] = "address_correspondence_region_id";
$proto109["m_columns"][] = "address_correspondence_city_id";
$proto109["m_columns"][] = "address_correspondence_province_id";
$proto109["m_columns"][] = "address_correspondence_country_id";
$proto109["m_columns"][] = "establishment_place";
$proto109["m_columns"][] = "establishment_date";
$proto109["m_columns"][] = "tax_number";
$proto109["m_columns"][] = "tax_name";
$proto109["m_columns"][] = "id_card_number";
$proto109["m_columns"][] = "id_card_name";
$proto109["m_columns"][] = "id_card_citizen";
$proto109["m_columns"][] = "id_card_expired_date";
$proto109["m_columns"][] = "contact_pic_name";
$proto109["m_columns"][] = "contact_pic_number";
$proto109["m_columns"][] = "bank_id";
$proto109["m_columns"][] = "bank_swift_code";
$proto109["m_columns"][] = "bank_currency";
$proto109["m_columns"][] = "bank_account_number";
$proto109["m_columns"][] = "referral_type";
$proto109["m_columns"][] = "referral_partnership";
$proto109["m_columns"][] = "referral_marketing";
$proto109["m_columns"][] = "referral_employee";
$proto109["m_columns"][] = "is_active";
$proto109["m_columns"][] = "is_delete";
$proto109["m_columns"][] = "deleted_date";
$proto109["m_columns"][] = "add_user";
$proto109["m_columns"][] = "add_date";
$proto109["m_columns"][] = "edit_user";
$proto109["m_columns"][] = "edit_date";
$proto109["m_columns"][] = "client_no";
$proto109["m_columns"][] = "m_client_profilecol";
$proto109["m_columns"][] = "last_user";
$proto109["m_columns"][] = "last_date";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "m_client_profile";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "m_client_profile";
$proto110=array();
$proto110["m_sql"] = "";
$proto110["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_client_profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_client_profile = createSqlQuery_m_client_profile();


	
				;

																																																			

$tdatam_client_profile[".sqlquery"] = $queryData_m_client_profile;



include_once(getabspath("include/m_client_profile_events.php"));
$tdatam_client_profile[".hasEvents"] = true;

?>