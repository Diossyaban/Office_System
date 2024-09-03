<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["m_domestic_type"] ) ) {
			$lookupTableLinks["m_domestic_type"] = array();
		}
		if( !isset( $lookupTableLinks["m_domestic_type"]["m_client_profile.domestic_type_id"] )) {
			$lookupTableLinks["m_domestic_type"]["m_client_profile.domestic_type_id"] = array();
		}
		$lookupTableLinks["m_domestic_type"]["m_client_profile.domestic_type_id"]["edit"] = array("table" => "m_client_profile", "field" => "domestic_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_overseas_type"] ) ) {
			$lookupTableLinks["m_overseas_type"] = array();
		}
		if( !isset( $lookupTableLinks["m_overseas_type"]["m_client_profile.overseas_type_id"] )) {
			$lookupTableLinks["m_overseas_type"]["m_client_profile.overseas_type_id"] = array();
		}
		$lookupTableLinks["m_overseas_type"]["m_client_profile.overseas_type_id"]["edit"] = array("table" => "m_client_profile", "field" => "overseas_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["v_states"] ) ) {
			$lookupTableLinks["v_states"] = array();
		}
		if( !isset( $lookupTableLinks["v_states"]["m_client_profile.address_domicile_province_id"] )) {
			$lookupTableLinks["v_states"]["m_client_profile.address_domicile_province_id"] = array();
		}
		$lookupTableLinks["v_states"]["m_client_profile.address_domicile_province_id"]["edit"] = array("table" => "m_client_profile", "field" => "address_domicile_province_id", "page" => "edit");
		if( !isset( $lookupTableLinks["v_countries"] ) ) {
			$lookupTableLinks["v_countries"] = array();
		}
		if( !isset( $lookupTableLinks["v_countries"]["m_client_profile.address_domicile_country_id"] )) {
			$lookupTableLinks["v_countries"]["m_client_profile.address_domicile_country_id"] = array();
		}
		$lookupTableLinks["v_countries"]["m_client_profile.address_domicile_country_id"]["edit"] = array("table" => "m_client_profile", "field" => "address_domicile_country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["v_states"] ) ) {
			$lookupTableLinks["v_states"] = array();
		}
		if( !isset( $lookupTableLinks["v_states"]["m_client_profile.address_correspondence_province_id"] )) {
			$lookupTableLinks["v_states"]["m_client_profile.address_correspondence_province_id"] = array();
		}
		$lookupTableLinks["v_states"]["m_client_profile.address_correspondence_province_id"]["edit"] = array("table" => "m_client_profile", "field" => "address_correspondence_province_id", "page" => "edit");
		if( !isset( $lookupTableLinks["v_countries"] ) ) {
			$lookupTableLinks["v_countries"] = array();
		}
		if( !isset( $lookupTableLinks["v_countries"]["m_client_profile.address_correspondence_country_id"] )) {
			$lookupTableLinks["v_countries"]["m_client_profile.address_correspondence_country_id"] = array();
		}
		$lookupTableLinks["v_countries"]["m_client_profile.address_correspondence_country_id"]["edit"] = array("table" => "m_client_profile", "field" => "address_correspondence_country_id", "page" => "edit");
		if( !isset( $lookupTableLinks["v_countries"] ) ) {
			$lookupTableLinks["v_countries"] = array();
		}
		if( !isset( $lookupTableLinks["v_countries"]["m_client_profile.id_card_citizen"] )) {
			$lookupTableLinks["v_countries"]["m_client_profile.id_card_citizen"] = array();
		}
		$lookupTableLinks["v_countries"]["m_client_profile.id_card_citizen"]["edit"] = array("table" => "m_client_profile", "field" => "id_card_citizen", "page" => "edit");
		if( !isset( $lookupTableLinks["m_bank"] ) ) {
			$lookupTableLinks["m_bank"] = array();
		}
		if( !isset( $lookupTableLinks["m_bank"]["m_client_profile.bank_id"] )) {
			$lookupTableLinks["m_bank"]["m_client_profile.bank_id"] = array();
		}
		$lookupTableLinks["m_bank"]["m_client_profile.bank_id"]["edit"] = array("table" => "m_client_profile", "field" => "bank_id", "page" => "edit");
		if( !isset( $lookupTableLinks["partnership_view"] ) ) {
			$lookupTableLinks["partnership_view"] = array();
		}
		if( !isset( $lookupTableLinks["partnership_view"]["m_client_profile.referral_partnership"] )) {
			$lookupTableLinks["partnership_view"]["m_client_profile.referral_partnership"] = array();
		}
		$lookupTableLinks["partnership_view"]["m_client_profile.referral_partnership"]["edit"] = array("table" => "m_client_profile", "field" => "referral_partnership", "page" => "edit");
		if( !isset( $lookupTableLinks["View"] ) ) {
			$lookupTableLinks["View"] = array();
		}
		if( !isset( $lookupTableLinks["View"]["m_client_profile.referral_marketing"] )) {
			$lookupTableLinks["View"]["m_client_profile.referral_marketing"] = array();
		}
		$lookupTableLinks["View"]["m_client_profile.referral_marketing"]["edit"] = array("table" => "m_client_profile", "field" => "referral_marketing", "page" => "edit");
		if( !isset( $lookupTableLinks["View"] ) ) {
			$lookupTableLinks["View"] = array();
		}
		if( !isset( $lookupTableLinks["View"]["m_client_profile.referral_employee"] )) {
			$lookupTableLinks["View"]["m_client_profile.referral_employee"] = array();
		}
		$lookupTableLinks["View"]["m_client_profile.referral_employee"]["edit"] = array("table" => "m_client_profile", "field" => "referral_employee", "page" => "edit");
		if( !isset( $lookupTableLinks["View"] ) ) {
			$lookupTableLinks["View"] = array();
		}
		if( !isset( $lookupTableLinks["View"]["m_login.m_employee_id"] )) {
			$lookupTableLinks["View"]["m_login.m_employee_id"] = array();
		}
		$lookupTableLinks["View"]["m_login.m_employee_id"]["edit"] = array("table" => "m_login", "field" => "m_employee_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Category"] ) ) {
			$lookupTableLinks["Category"] = array();
		}
		if( !isset( $lookupTableLinks["Category"]["t_letter.m_category_id"] )) {
			$lookupTableLinks["Category"]["t_letter.m_category_id"] = array();
		}
		$lookupTableLinks["Category"]["t_letter.m_category_id"]["edit"] = array("table" => "t_letter", "field" => "m_category_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_letter_pic"] ) ) {
			$lookupTableLinks["m_letter_pic"] = array();
		}
		if( !isset( $lookupTableLinks["m_letter_pic"]["t_letter.letter_ttg"] )) {
			$lookupTableLinks["m_letter_pic"]["t_letter.letter_ttg"] = array();
		}
		$lookupTableLinks["m_letter_pic"]["t_letter.letter_ttg"]["edit"] = array("table" => "t_letter", "field" => "letter_ttg", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["t_letter.letter_status"] )) {
			$lookupTableLinks["m_status"]["t_letter.letter_status"] = array();
		}
		$lookupTableLinks["m_status"]["t_letter.letter_status"]["edit"] = array("table" => "t_letter", "field" => "letter_status", "page" => "edit");
		if( !isset( $lookupTableLinks["Type"] ) ) {
			$lookupTableLinks["Type"] = array();
		}
		if( !isset( $lookupTableLinks["Type"]["t_letter.m_type_id"] )) {
			$lookupTableLinks["Type"]["t_letter.m_type_id"] = array();
		}
		$lookupTableLinks["Type"]["t_letter.m_type_id"]["edit"] = array("table" => "t_letter", "field" => "m_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["template"] ) ) {
			$lookupTableLinks["template"] = array();
		}
		if( !isset( $lookupTableLinks["template"]["t_letter.m_template_id"] )) {
			$lookupTableLinks["template"]["t_letter.m_template_id"] = array();
		}
		$lookupTableLinks["template"]["t_letter.m_template_id"]["edit"] = array("table" => "t_letter", "field" => "m_template_id", "page" => "edit");
		if( !isset( $lookupTableLinks["Language"] ) ) {
			$lookupTableLinks["Language"] = array();
		}
		if( !isset( $lookupTableLinks["Language"]["t_letter.letter_language"] )) {
			$lookupTableLinks["Language"]["t_letter.letter_language"] = array();
		}
		$lookupTableLinks["Language"]["t_letter.letter_language"]["edit"] = array("table" => "t_letter", "field" => "letter_language", "page" => "edit");
		if( !isset( $lookupTableLinks["Siganture"] ) ) {
			$lookupTableLinks["Siganture"] = array();
		}
		if( !isset( $lookupTableLinks["Siganture"]["t_letter.letter_signature"] )) {
			$lookupTableLinks["Siganture"]["t_letter.letter_signature"] = array();
		}
		$lookupTableLinks["Siganture"]["t_letter.letter_signature"]["edit"] = array("table" => "t_letter", "field" => "letter_signature", "page" => "edit");
		if( !isset( $lookupTableLinks["m_category"] ) ) {
			$lookupTableLinks["m_category"] = array();
		}
		if( !isset( $lookupTableLinks["m_category"]["m_mapping_letter.m_category_id"] )) {
			$lookupTableLinks["m_category"]["m_mapping_letter.m_category_id"] = array();
		}
		$lookupTableLinks["m_category"]["m_mapping_letter.m_category_id"]["edit"] = array("table" => "m_mapping_letter", "field" => "m_category_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_type"] ) ) {
			$lookupTableLinks["m_type"] = array();
		}
		if( !isset( $lookupTableLinks["m_type"]["m_mapping_letter.m_type_id"] )) {
			$lookupTableLinks["m_type"]["m_mapping_letter.m_type_id"] = array();
		}
		$lookupTableLinks["m_type"]["m_mapping_letter.m_type_id"]["edit"] = array("table" => "m_mapping_letter", "field" => "m_type_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_template"] ) ) {
			$lookupTableLinks["m_template"] = array();
		}
		if( !isset( $lookupTableLinks["m_template"]["m_mapping_letter.m_template_id"] )) {
			$lookupTableLinks["m_template"]["m_mapping_letter.m_template_id"] = array();
		}
		$lookupTableLinks["m_template"]["m_mapping_letter.m_template_id"]["edit"] = array("table" => "m_mapping_letter", "field" => "m_template_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_language"] ) ) {
			$lookupTableLinks["m_language"] = array();
		}
		if( !isset( $lookupTableLinks["m_language"]["m_mapping_letter.m_language_id"] )) {
			$lookupTableLinks["m_language"]["m_mapping_letter.m_language_id"] = array();
		}
		$lookupTableLinks["m_language"]["m_mapping_letter.m_language_id"]["edit"] = array("table" => "m_mapping_letter", "field" => "m_language_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_position_siganture"] ) ) {
			$lookupTableLinks["m_position_siganture"] = array();
		}
		if( !isset( $lookupTableLinks["m_position_siganture"]["m_mapping_letter.m_signature_id"] )) {
			$lookupTableLinks["m_position_siganture"]["m_mapping_letter.m_signature_id"] = array();
		}
		$lookupTableLinks["m_position_siganture"]["m_mapping_letter.m_signature_id"]["edit"] = array("table" => "m_mapping_letter", "field" => "m_signature_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["m_mapping_letter_pic.m_letter_pic"] )) {
			$lookupTableLinks["m_login"]["m_mapping_letter_pic.m_letter_pic"] = array();
		}
		$lookupTableLinks["m_login"]["m_mapping_letter_pic.m_letter_pic"]["edit"] = array("table" => "m_mapping_letter_pic", "field" => "m_letter_pic", "page" => "edit");
		if( !isset( $lookupTableLinks["m_location_office"] ) ) {
			$lookupTableLinks["m_location_office"] = array();
		}
		if( !isset( $lookupTableLinks["m_location_office"]["t_delivery.t_location_id"] )) {
			$lookupTableLinks["m_location_office"]["t_delivery.t_location_id"] = array();
		}
		$lookupTableLinks["m_location_office"]["t_delivery.t_location_id"]["edit"] = array("table" => "t_delivery", "field" => "t_location_id", "page" => "edit");
		if( !isset( $lookupTableLinks["t_delivery_address"] ) ) {
			$lookupTableLinks["t_delivery_address"] = array();
		}
		if( !isset( $lookupTableLinks["t_delivery_address"]["t_delivery.t_delivery_to_table"] )) {
			$lookupTableLinks["t_delivery_address"]["t_delivery.t_delivery_to_table"] = array();
		}
		$lookupTableLinks["t_delivery_address"]["t_delivery.t_delivery_to_table"]["edit"] = array("table" => "t_delivery", "field" => "t_delivery_to_table", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["t_delivery.t_delivery_status"] )) {
			$lookupTableLinks["m_status"]["t_delivery.t_delivery_status"] = array();
		}
		$lookupTableLinks["m_status"]["t_delivery.t_delivery_status"]["edit"] = array("table" => "t_delivery", "field" => "t_delivery_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_kabupaten"] ) ) {
			$lookupTableLinks["m_kabupaten"] = array();
		}
		if( !isset( $lookupTableLinks["m_kabupaten"]["m_location_office.m_location_kabupaten"] )) {
			$lookupTableLinks["m_kabupaten"]["m_location_office.m_location_kabupaten"] = array();
		}
		$lookupTableLinks["m_kabupaten"]["m_location_office.m_location_kabupaten"]["edit"] = array("table" => "m_location_office", "field" => "m_location_kabupaten", "page" => "edit");
		if( !isset( $lookupTableLinks["m_provinsi"] ) ) {
			$lookupTableLinks["m_provinsi"] = array();
		}
		if( !isset( $lookupTableLinks["m_provinsi"]["m_location_office.m_location_provinsi"] )) {
			$lookupTableLinks["m_provinsi"]["m_location_office.m_location_provinsi"] = array();
		}
		$lookupTableLinks["m_provinsi"]["m_location_office.m_location_provinsi"]["edit"] = array("table" => "m_location_office", "field" => "m_location_provinsi", "page" => "edit");
		if( !isset( $lookupTableLinks["v_m_provinsi"] ) ) {
			$lookupTableLinks["v_m_provinsi"] = array();
		}
		if( !isset( $lookupTableLinks["v_m_provinsi"]["t_delivery_address.m_provinsi"] )) {
			$lookupTableLinks["v_m_provinsi"]["t_delivery_address.m_provinsi"] = array();
		}
		$lookupTableLinks["v_m_provinsi"]["t_delivery_address.m_provinsi"]["edit"] = array("table" => "t_delivery_address", "field" => "m_provinsi", "page" => "edit");
		if( !isset( $lookupTableLinks["v_m_kabupaten"] ) ) {
			$lookupTableLinks["v_m_kabupaten"] = array();
		}
		if( !isset( $lookupTableLinks["v_m_kabupaten"]["t_delivery_address.m_kabupaten"] )) {
			$lookupTableLinks["v_m_kabupaten"]["t_delivery_address.m_kabupaten"] = array();
		}
		$lookupTableLinks["v_m_kabupaten"]["t_delivery_address.m_kabupaten"]["edit"] = array("table" => "t_delivery_address", "field" => "m_kabupaten", "page" => "edit");
		if( !isset( $lookupTableLinks["v_m_kecamatan"] ) ) {
			$lookupTableLinks["v_m_kecamatan"] = array();
		}
		if( !isset( $lookupTableLinks["v_m_kecamatan"]["t_delivery_address.m_kecamatan"] )) {
			$lookupTableLinks["v_m_kecamatan"]["t_delivery_address.m_kecamatan"] = array();
		}
		$lookupTableLinks["v_m_kecamatan"]["t_delivery_address.m_kecamatan"]["edit"] = array("table" => "t_delivery_address", "field" => "m_kecamatan", "page" => "edit");
		if( !isset( $lookupTableLinks["m_kelurahan"] ) ) {
			$lookupTableLinks["m_kelurahan"] = array();
		}
		if( !isset( $lookupTableLinks["m_kelurahan"]["t_delivery_address.m_kelurahan"] )) {
			$lookupTableLinks["m_kelurahan"]["t_delivery_address.m_kelurahan"] = array();
		}
		$lookupTableLinks["m_kelurahan"]["t_delivery_address.m_kelurahan"]["edit"] = array("table" => "t_delivery_address", "field" => "m_kelurahan", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["m_disposition_inmail.t_disposition_from"] )) {
			$lookupTableLinks["m_login"]["m_disposition_inmail.t_disposition_from"] = array();
		}
		$lookupTableLinks["m_login"]["m_disposition_inmail.t_disposition_from"]["edit"] = array("table" => "m_disposition_inmail", "field" => "t_disposition_from", "page" => "edit");
		if( !isset( $lookupTableLinks["sp_disposition_flow"] ) ) {
			$lookupTableLinks["sp_disposition_flow"] = array();
		}
		if( !isset( $lookupTableLinks["sp_disposition_flow"]["m_disposition_inmail.t_disposition_to"] )) {
			$lookupTableLinks["sp_disposition_flow"]["m_disposition_inmail.t_disposition_to"] = array();
		}
		$lookupTableLinks["sp_disposition_flow"]["m_disposition_inmail.t_disposition_to"]["edit"] = array("table" => "m_disposition_inmail", "field" => "t_disposition_to", "page" => "edit");
		if( !isset( $lookupTableLinks["sp_get_disposition_status"] ) ) {
			$lookupTableLinks["sp_get_disposition_status"] = array();
		}
		if( !isset( $lookupTableLinks["sp_get_disposition_status"]["m_disposition_inmail.t_disposition_status"] )) {
			$lookupTableLinks["sp_get_disposition_status"]["m_disposition_inmail.t_disposition_status"] = array();
		}
		$lookupTableLinks["sp_get_disposition_status"]["m_disposition_inmail.t_disposition_status"]["edit"] = array("table" => "m_disposition_inmail", "field" => "t_disposition_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_division"] ) ) {
			$lookupTableLinks["m_division"] = array();
		}
		if( !isset( $lookupTableLinks["m_division"]["m_mapping_disposition.m_division_id"] )) {
			$lookupTableLinks["m_division"]["m_mapping_disposition.m_division_id"] = array();
		}
		$lookupTableLinks["m_division"]["m_mapping_disposition.m_division_id"]["edit"] = array("table" => "m_mapping_disposition", "field" => "m_division_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["m_mapping_disposition.pic_employee_username"] )) {
			$lookupTableLinks["m_login"]["m_mapping_disposition.pic_employee_username"] = array();
		}
		$lookupTableLinks["m_login"]["m_mapping_disposition.pic_employee_username"]["edit"] = array("table" => "m_mapping_disposition", "field" => "pic_employee_username", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["m_mapping_disposition.by_employee_username"] )) {
			$lookupTableLinks["m_login"]["m_mapping_disposition.by_employee_username"] = array();
		}
		$lookupTableLinks["m_login"]["m_mapping_disposition.by_employee_username"]["edit"] = array("table" => "m_mapping_disposition", "field" => "by_employee_username", "page" => "edit");
		if( !isset( $lookupTableLinks["m_location_office"] ) ) {
			$lookupTableLinks["m_location_office"] = array();
		}
		if( !isset( $lookupTableLinks["m_location_office"]["t_delivery_x.t_location_id"] )) {
			$lookupTableLinks["m_location_office"]["t_delivery_x.t_location_id"] = array();
		}
		$lookupTableLinks["m_location_office"]["t_delivery_x.t_location_id"]["edit"] = array("table" => "t_delivery_x", "field" => "t_location_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["t_delivery_x.t_delivery_status"] )) {
			$lookupTableLinks["m_status"]["t_delivery_x.t_delivery_status"] = array();
		}
		$lookupTableLinks["m_status"]["t_delivery_x.t_delivery_status"]["edit"] = array("table" => "t_delivery_x", "field" => "t_delivery_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_courier"] ) ) {
			$lookupTableLinks["m_courier"] = array();
		}
		if( !isset( $lookupTableLinks["m_courier"]["t_delivery_internal.messenger"] )) {
			$lookupTableLinks["m_courier"]["t_delivery_internal.messenger"] = array();
		}
		$lookupTableLinks["m_courier"]["t_delivery_internal.messenger"]["edit"] = array("table" => "t_delivery_internal", "field" => "messenger", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["m_disposition_profile.t_disposition_from"] )) {
			$lookupTableLinks["m_login"]["m_disposition_profile.t_disposition_from"] = array();
		}
		$lookupTableLinks["m_login"]["m_disposition_profile.t_disposition_from"]["edit"] = array("table" => "m_disposition_profile", "field" => "t_disposition_from", "page" => "edit");
		if( !isset( $lookupTableLinks["sp_disposition_flow"] ) ) {
			$lookupTableLinks["sp_disposition_flow"] = array();
		}
		if( !isset( $lookupTableLinks["sp_disposition_flow"]["m_disposition_profile.t_disposition_to"] )) {
			$lookupTableLinks["sp_disposition_flow"]["m_disposition_profile.t_disposition_to"] = array();
		}
		$lookupTableLinks["sp_disposition_flow"]["m_disposition_profile.t_disposition_to"]["edit"] = array("table" => "m_disposition_profile", "field" => "t_disposition_to", "page" => "edit");
		if( !isset( $lookupTableLinks["v_status"] ) ) {
			$lookupTableLinks["v_status"] = array();
		}
		if( !isset( $lookupTableLinks["v_status"]["m_disposition_profile.t_disposition_status"] )) {
			$lookupTableLinks["v_status"]["m_disposition_profile.t_disposition_status"] = array();
		}
		$lookupTableLinks["v_status"]["m_disposition_profile.t_disposition_status"]["edit"] = array("table" => "m_disposition_profile", "field" => "t_disposition_status", "page" => "edit");
		if( !isset( $lookupTableLinks["v_location_registration"] ) ) {
			$lookupTableLinks["v_location_registration"] = array();
		}
		if( !isset( $lookupTableLinks["v_location_registration"]["t_register.t_register_location_id"] )) {
			$lookupTableLinks["v_location_registration"]["t_register.t_register_location_id"] = array();
		}
		$lookupTableLinks["v_location_registration"]["t_register.t_register_location_id"]["edit"] = array("table" => "t_register", "field" => "t_register_location_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_location_office"] ) ) {
			$lookupTableLinks["m_location_office"] = array();
		}
		if( !isset( $lookupTableLinks["m_location_office"]["t_register.t_register_transfer_location_id"] )) {
			$lookupTableLinks["m_location_office"]["t_register.t_register_transfer_location_id"] = array();
		}
		$lookupTableLinks["m_location_office"]["t_register.t_register_transfer_location_id"]["edit"] = array("table" => "t_register", "field" => "t_register_transfer_location_id", "page" => "edit");
		if( !isset( $lookupTableLinks["View"] ) ) {
			$lookupTableLinks["View"] = array();
		}
		if( !isset( $lookupTableLinks["View"]["t_register.t_register_doc_owner"] )) {
			$lookupTableLinks["View"]["t_register.t_register_doc_owner"] = array();
		}
		$lookupTableLinks["View"]["t_register.t_register_doc_owner"]["edit"] = array("table" => "t_register", "field" => "t_register_doc_owner", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["t_register.t_register_status"] )) {
			$lookupTableLinks["m_status"]["t_register.t_register_status"] = array();
		}
		$lookupTableLinks["m_status"]["t_register.t_register_status"]["edit"] = array("table" => "t_register", "field" => "t_register_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_location_office"] ) ) {
			$lookupTableLinks["m_location_office"] = array();
		}
		if( !isset( $lookupTableLinks["m_location_office"]["t_in_mail.t_register_location_id"] )) {
			$lookupTableLinks["m_location_office"]["t_in_mail.t_register_location_id"] = array();
		}
		$lookupTableLinks["m_location_office"]["t_in_mail.t_register_location_id"]["edit"] = array("table" => "t_in_mail", "field" => "t_register_location_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_location_office"] ) ) {
			$lookupTableLinks["m_location_office"] = array();
		}
		if( !isset( $lookupTableLinks["m_location_office"]["t_in_mail.t_register_transfer_location_id"] )) {
			$lookupTableLinks["m_location_office"]["t_in_mail.t_register_transfer_location_id"] = array();
		}
		$lookupTableLinks["m_location_office"]["t_in_mail.t_register_transfer_location_id"]["edit"] = array("table" => "t_in_mail", "field" => "t_register_transfer_location_id", "page" => "edit");
		if( !isset( $lookupTableLinks["View"] ) ) {
			$lookupTableLinks["View"] = array();
		}
		if( !isset( $lookupTableLinks["View"]["t_in_mail.t_register_doc_owner"] )) {
			$lookupTableLinks["View"]["t_in_mail.t_register_doc_owner"] = array();
		}
		$lookupTableLinks["View"]["t_in_mail.t_register_doc_owner"]["edit"] = array("table" => "t_in_mail", "field" => "t_register_doc_owner", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["t_in_mail.t_register_status"] )) {
			$lookupTableLinks["m_status"]["t_in_mail.t_register_status"] = array();
		}
		$lookupTableLinks["m_status"]["t_in_mail.t_register_status"]["edit"] = array("table" => "t_in_mail", "field" => "t_register_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["m_disposition_register.t_disposition_from"] )) {
			$lookupTableLinks["m_login"]["m_disposition_register.t_disposition_from"] = array();
		}
		$lookupTableLinks["m_login"]["m_disposition_register.t_disposition_from"]["edit"] = array("table" => "m_disposition_register", "field" => "t_disposition_from", "page" => "edit");
		if( !isset( $lookupTableLinks["sp_disposition_flow"] ) ) {
			$lookupTableLinks["sp_disposition_flow"] = array();
		}
		if( !isset( $lookupTableLinks["sp_disposition_flow"]["m_disposition_register.t_disposition_to"] )) {
			$lookupTableLinks["sp_disposition_flow"]["m_disposition_register.t_disposition_to"] = array();
		}
		$lookupTableLinks["sp_disposition_flow"]["m_disposition_register.t_disposition_to"]["edit"] = array("table" => "m_disposition_register", "field" => "t_disposition_to", "page" => "edit");
		if( !isset( $lookupTableLinks["v_status_register"] ) ) {
			$lookupTableLinks["v_status_register"] = array();
		}
		if( !isset( $lookupTableLinks["v_status_register"]["m_disposition_register.t_disposition_status"] )) {
			$lookupTableLinks["v_status_register"]["m_disposition_register.t_disposition_status"] = array();
		}
		$lookupTableLinks["v_status_register"]["m_disposition_register.t_disposition_status"]["edit"] = array("table" => "m_disposition_register", "field" => "t_disposition_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_status"] ) ) {
			$lookupTableLinks["m_status"] = array();
		}
		if( !isset( $lookupTableLinks["m_status"]["m_disposition_inmail_x.t_disposition_status"] )) {
			$lookupTableLinks["m_status"]["m_disposition_inmail_x.t_disposition_status"] = array();
		}
		$lookupTableLinks["m_status"]["m_disposition_inmail_x.t_disposition_status"]["edit"] = array("table" => "m_disposition_inmail_x", "field" => "t_disposition_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_payment_term"] ) ) {
			$lookupTableLinks["m_payment_term"] = array();
		}
		if( !isset( $lookupTableLinks["m_payment_term"]["t_invoice.invoice_term"] )) {
			$lookupTableLinks["m_payment_term"]["t_invoice.invoice_term"] = array();
		}
		$lookupTableLinks["m_payment_term"]["t_invoice.invoice_term"]["edit"] = array("table" => "t_invoice", "field" => "invoice_term", "page" => "edit");
		if( !isset( $lookupTableLinks["m_customer"] ) ) {
			$lookupTableLinks["m_customer"] = array();
		}
		if( !isset( $lookupTableLinks["m_customer"]["t_invoice.invoice_to"] )) {
			$lookupTableLinks["m_customer"]["t_invoice.invoice_to"] = array();
		}
		$lookupTableLinks["m_customer"]["t_invoice.invoice_to"]["edit"] = array("table" => "t_invoice", "field" => "invoice_to", "page" => "edit");
		if( !isset( $lookupTableLinks["m_currency"] ) ) {
			$lookupTableLinks["m_currency"] = array();
		}
		if( !isset( $lookupTableLinks["m_currency"]["t_invoice.invoice_currency"] )) {
			$lookupTableLinks["m_currency"]["t_invoice.invoice_currency"] = array();
		}
		$lookupTableLinks["m_currency"]["t_invoice.invoice_currency"]["edit"] = array("table" => "t_invoice", "field" => "invoice_currency", "page" => "edit");
		if( !isset( $lookupTableLinks["m_ticket_category"] ) ) {
			$lookupTableLinks["m_ticket_category"] = array();
		}
		if( !isset( $lookupTableLinks["m_ticket_category"]["t_ticket.catId"] )) {
			$lookupTableLinks["m_ticket_category"]["t_ticket.catId"] = array();
		}
		$lookupTableLinks["m_ticket_category"]["t_ticket.catId"]["edit"] = array("table" => "t_ticket", "field" => "catId", "page" => "edit");
		if( !isset( $lookupTableLinks["m_ticket_subcategory"] ) ) {
			$lookupTableLinks["m_ticket_subcategory"] = array();
		}
		if( !isset( $lookupTableLinks["m_ticket_subcategory"]["t_ticket.catSubId"] )) {
			$lookupTableLinks["m_ticket_subcategory"]["t_ticket.catSubId"] = array();
		}
		$lookupTableLinks["m_ticket_subcategory"]["t_ticket.catSubId"]["edit"] = array("table" => "t_ticket", "field" => "catSubId", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["t_booking.t_booking_user"] )) {
			$lookupTableLinks["m_login"]["t_booking.t_booking_user"] = array();
		}
		$lookupTableLinks["m_login"]["t_booking.t_booking_user"]["edit"] = array("table" => "t_booking", "field" => "t_booking_user", "page" => "edit");
		if( !isset( $lookupTableLinks["m_meeting_room"] ) ) {
			$lookupTableLinks["m_meeting_room"] = array();
		}
		if( !isset( $lookupTableLinks["m_meeting_room"]["t_meeting_book.t_meeting_roomid"] )) {
			$lookupTableLinks["m_meeting_room"]["t_meeting_book.t_meeting_roomid"] = array();
		}
		$lookupTableLinks["m_meeting_room"]["t_meeting_book.t_meeting_roomid"]["edit"] = array("table" => "t_meeting_book", "field" => "t_meeting_roomid", "page" => "edit");
		if( !isset( $lookupTableLinks["m_login"] ) ) {
			$lookupTableLinks["m_login"] = array();
		}
		if( !isset( $lookupTableLinks["m_login"]["t_meeting_book.t_meeting_user"] )) {
			$lookupTableLinks["m_login"]["t_meeting_book.t_meeting_user"] = array();
		}
		$lookupTableLinks["m_login"]["t_meeting_book.t_meeting_user"]["edit"] = array("table" => "t_meeting_book", "field" => "t_meeting_user", "page" => "edit");
		if( !isset( $lookupTableLinks["View"] ) ) {
			$lookupTableLinks["View"] = array();
		}
		if( !isset( $lookupTableLinks["View"]["t_meeting_book.user_participant_list"] )) {
			$lookupTableLinks["View"]["t_meeting_book.user_participant_list"] = array();
		}
		$lookupTableLinks["View"]["t_meeting_book.user_participant_list"]["edit"] = array("table" => "t_meeting_book", "field" => "user_participant_list", "page" => "edit");
		if( !isset( $lookupTableLinks["m_participant_type"] ) ) {
			$lookupTableLinks["m_participant_type"] = array();
		}
		if( !isset( $lookupTableLinks["m_participant_type"]["t_meeting_book.t_meeting_participant_type"] )) {
			$lookupTableLinks["m_participant_type"]["t_meeting_book.t_meeting_participant_type"] = array();
		}
		$lookupTableLinks["m_participant_type"]["t_meeting_book.t_meeting_participant_type"]["edit"] = array("table" => "t_meeting_book", "field" => "t_meeting_participant_type", "page" => "edit");
		if( !isset( $lookupTableLinks["disposisiBookingView"] ) ) {
			$lookupTableLinks["disposisiBookingView"] = array();
		}
		if( !isset( $lookupTableLinks["disposisiBookingView"]["m_disposition.t_disposition_status"] )) {
			$lookupTableLinks["disposisiBookingView"]["m_disposition.t_disposition_status"] = array();
		}
		$lookupTableLinks["disposisiBookingView"]["m_disposition.t_disposition_status"]["edit"] = array("table" => "m_disposition", "field" => "t_disposition_status", "page" => "edit");
		if( !isset( $lookupTableLinks["m_meeting_room"] ) ) {
			$lookupTableLinks["m_meeting_room"] = array();
		}
		if( !isset( $lookupTableLinks["m_meeting_room"]["t_meeting_book_approval.t_meeting_roomid"] )) {
			$lookupTableLinks["m_meeting_room"]["t_meeting_book_approval.t_meeting_roomid"] = array();
		}
		$lookupTableLinks["m_meeting_room"]["t_meeting_book_approval.t_meeting_roomid"]["edit"] = array("table" => "t_meeting_book_approval", "field" => "t_meeting_roomid", "page" => "edit");
		if( !isset( $lookupTableLinks["m_vehicle"] ) ) {
			$lookupTableLinks["m_vehicle"] = array();
		}
		if( !isset( $lookupTableLinks["m_vehicle"]["t_booking_approval.m_vehicle_id"] )) {
			$lookupTableLinks["m_vehicle"]["t_booking_approval.m_vehicle_id"] = array();
		}
		$lookupTableLinks["m_vehicle"]["t_booking_approval.m_vehicle_id"]["edit"] = array("table" => "t_booking_approval", "field" => "m_vehicle_id", "page" => "edit");
		if( !isset( $lookupTableLinks["m_vehicle"] ) ) {
			$lookupTableLinks["m_vehicle"] = array();
		}
		if( !isset( $lookupTableLinks["m_vehicle"]["t_booking_approval.m_vehicle_driver"] )) {
			$lookupTableLinks["m_vehicle"]["t_booking_approval.m_vehicle_driver"] = array();
		}
		$lookupTableLinks["m_vehicle"]["t_booking_approval.m_vehicle_driver"]["edit"] = array("table" => "t_booking_approval", "field" => "m_vehicle_driver", "page" => "edit");
}

?>