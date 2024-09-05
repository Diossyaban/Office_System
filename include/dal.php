<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers(Security::loginTable());
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tblu736239518tsundbat154412412__get_images;
	var $tblu736239518tsundbat154412412__tblm_announcement;
	var $tblu736239518tsundbat154412412__tblm_announcement_view;
	var $tblu736239518tsundbat154412412__tblm_asuransi;
	var $tblu736239518tsundbat154412412__tblm_bank;
	var $tblu736239518tsundbat154412412__tblm_category;
	var $tblu736239518tsundbat154412412__tblm_client_profile;
	var $tblu736239518tsundbat154412412__tblm_countries;
	var $tblu736239518tsundbat154412412__tblm_courier;
	var $tblu736239518tsundbat154412412__tblm_currency;
	var $tblu736239518tsundbat154412412__tblm_customer;
	var $tblu736239518tsundbat154412412__tblm_disposition;
	var $tblu736239518tsundbat154412412__tblm_disposition_type;
	var $tblu736239518tsundbat154412412__tblm_division;
	var $tblu736239518tsundbat154412412__tblm_domestic_type;
	var $tblu736239518tsundbat154412412__tblm_employee;
	var $tblu736239518tsundbat154412412__tblm_kabupaten;
	var $tblu736239518tsundbat154412412__tblm_kecamatan;
	var $tblu736239518tsundbat154412412__tblm_kelurahan;
	var $tblu736239518tsundbat154412412__tblm_language;
	var $tblu736239518tsundbat154412412__tblm_letter_pic;
	var $tblu736239518tsundbat154412412__tblm_location_office;
	var $tblu736239518tsundbat154412412__tblm_login;
	var $tblu736239518tsundbat154412412__tblm_mapping_disposition;
	var $tblu736239518tsundbat154412412__tblm_mapping_letter;
	var $tblu736239518tsundbat154412412__tblm_mapping_letter_pic;
	var $tblu736239518tsundbat154412412__tblm_meeting_room;
	var $tblu736239518tsundbat154412412__tblm_mypage;
	var $tblu736239518tsundbat154412412__tblm_overseas_type;
	var $tblu736239518tsundbat154412412__tblm_participant_type;
	var $tblu736239518tsundbat154412412__tblm_payment_term;
	var $tblu736239518tsundbat154412412__tblm_position_siganture;
	var $tblu736239518tsundbat154412412__tblm_producer;
	var $tblu736239518tsundbat154412412__tblm_provinsi;
	var $tblu736239518tsundbat154412412__tblm_status;
	var $tblu736239518tsundbat154412412__tblm_supplier;
	var $tblu736239518tsundbat154412412__tblm_template;
	var $tblu736239518tsundbat154412412__tblm_ticket_category;
	var $tblu736239518tsundbat154412412__tblm_ticket_subcategory;
	var $tblu736239518tsundbat154412412__tblm_type;
	var $tblu736239518tsundbat154412412__tblm_user_guide;
	var $tblu736239518tsundbat154412412__tblm_vehicle;
	var $tblu736239518tsundbat154412412__t_booking;
	var $tblu736239518tsundbat154412412__t_delivery;
	var $tblu736239518tsundbat154412412__t_delivery_address;
	var $tblu736239518tsundbat154412412__t_delivery_details;
	var $tblu736239518tsundbat154412412__t_delivery_expedition;
	var $tblu736239518tsundbat154412412__t_delivery_feedback;
	var $tblu736239518tsundbat154412412__t_delivery_internal;
	var $tblu736239518tsundbat154412412__t_invoice;
	var $tblu736239518tsundbat154412412__t_invoice_det;
	var $tblu736239518tsundbat154412412__t_letter;
	var $tblu736239518tsundbat154412412__t_letter_flow;
	var $tblu736239518tsundbat154412412__t_meeting_book;
	var $tblu736239518tsundbat154412412__t_output_client_profile;
	var $tblu736239518tsundbat154412412__t_purchase;
	var $tblu736239518tsundbat154412412__t_purchase_det;
	var $tblu736239518tsundbat154412412__t_register;
	var $tblu736239518tsundbat154412412__t_register_mapping;
	var $tblu736239518tsundbat154412412__t_ticket;
	var $tblu736239518tsundbat154412412__tsun_gen2__audit;
	var $tblu736239518tsundbat154412412__tsun_noti;
	var $tblu736239518tsundbat154412412__Tsun_uggroups;
	var $tblu736239518tsundbat154412412__Tsun_ugmembers;
	var $tblu736239518tsundbat154412412__Tsun_ugrights;
	var $tblu736239518tsundbat154412412__v_delivery_list;
	var $tblu736239518tsundbat154412412__view_delivery_history;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "get_images", "varname" => "u736239518tsundbat154412412__get_images", "altvarname" => "get_images", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_announcement", "varname" => "u736239518tsundbat154412412__tblm_announcement", "altvarname" => "tblm_announcement", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_announcement_view", "varname" => "u736239518tsundbat154412412__tblm_announcement_view", "altvarname" => "tblm_announcement_view", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_asuransi", "varname" => "u736239518tsundbat154412412__tblm_asuransi", "altvarname" => "tblm_asuransi", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_bank", "varname" => "u736239518tsundbat154412412__tblm_bank", "altvarname" => "tblm_bank", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_category", "varname" => "u736239518tsundbat154412412__tblm_category", "altvarname" => "tblm_category", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_client_profile", "varname" => "u736239518tsundbat154412412__tblm_client_profile", "altvarname" => "tblm_client_profile", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_countries", "varname" => "u736239518tsundbat154412412__tblm_countries", "altvarname" => "tblm_countries", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_courier", "varname" => "u736239518tsundbat154412412__tblm_courier", "altvarname" => "tblm_courier", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_currency", "varname" => "u736239518tsundbat154412412__tblm_currency", "altvarname" => "tblm_currency", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_customer", "varname" => "u736239518tsundbat154412412__tblm_customer", "altvarname" => "tblm_customer", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_disposition", "varname" => "u736239518tsundbat154412412__tblm_disposition", "altvarname" => "tblm_disposition", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_disposition_type", "varname" => "u736239518tsundbat154412412__tblm_disposition_type", "altvarname" => "tblm_disposition_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_division", "varname" => "u736239518tsundbat154412412__tblm_division", "altvarname" => "tblm_division", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_domestic_type", "varname" => "u736239518tsundbat154412412__tblm_domestic_type", "altvarname" => "tblm_domestic_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_employee", "varname" => "u736239518tsundbat154412412__tblm_employee", "altvarname" => "tblm_employee", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_kabupaten", "varname" => "u736239518tsundbat154412412__tblm_kabupaten", "altvarname" => "tblm_kabupaten", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_kecamatan", "varname" => "u736239518tsundbat154412412__tblm_kecamatan", "altvarname" => "tblm_kecamatan", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_kelurahan", "varname" => "u736239518tsundbat154412412__tblm_kelurahan", "altvarname" => "tblm_kelurahan", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_language", "varname" => "u736239518tsundbat154412412__tblm_language", "altvarname" => "tblm_language", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_letter_pic", "varname" => "u736239518tsundbat154412412__tblm_letter_pic", "altvarname" => "tblm_letter_pic", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_location_office", "varname" => "u736239518tsundbat154412412__tblm_location_office", "altvarname" => "tblm_location_office", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_login", "varname" => "u736239518tsundbat154412412__tblm_login", "altvarname" => "tblm_login", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_mapping_disposition", "varname" => "u736239518tsundbat154412412__tblm_mapping_disposition", "altvarname" => "tblm_mapping_disposition", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_mapping_letter", "varname" => "u736239518tsundbat154412412__tblm_mapping_letter", "altvarname" => "tblm_mapping_letter", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_mapping_letter_pic", "varname" => "u736239518tsundbat154412412__tblm_mapping_letter_pic", "altvarname" => "tblm_mapping_letter_pic", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_meeting_room", "varname" => "u736239518tsundbat154412412__tblm_meeting_room", "altvarname" => "tblm_meeting_room", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_mypage", "varname" => "u736239518tsundbat154412412__tblm_mypage", "altvarname" => "tblm_mypage", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_overseas_type", "varname" => "u736239518tsundbat154412412__tblm_overseas_type", "altvarname" => "tblm_overseas_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_participant_type", "varname" => "u736239518tsundbat154412412__tblm_participant_type", "altvarname" => "tblm_participant_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_payment_term", "varname" => "u736239518tsundbat154412412__tblm_payment_term", "altvarname" => "tblm_payment_term", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_position_siganture", "varname" => "u736239518tsundbat154412412__tblm_position_siganture", "altvarname" => "tblm_position_siganture", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_producer", "varname" => "u736239518tsundbat154412412__tblm_producer", "altvarname" => "tblm_producer", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_provinsi", "varname" => "u736239518tsundbat154412412__tblm_provinsi", "altvarname" => "tblm_provinsi", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_status", "varname" => "u736239518tsundbat154412412__tblm_status", "altvarname" => "tblm_status", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_supplier", "varname" => "u736239518tsundbat154412412__tblm_supplier", "altvarname" => "tblm_supplier", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_template", "varname" => "u736239518tsundbat154412412__tblm_template", "altvarname" => "tblm_template", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_ticket_category", "varname" => "u736239518tsundbat154412412__tblm_ticket_category", "altvarname" => "tblm_ticket_category", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_ticket_subcategory", "varname" => "u736239518tsundbat154412412__tblm_ticket_subcategory", "altvarname" => "tblm_ticket_subcategory", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_type", "varname" => "u736239518tsundbat154412412__tblm_type", "altvarname" => "tblm_type", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_user_guide", "varname" => "u736239518tsundbat154412412__tblm_user_guide", "altvarname" => "tblm_user_guide", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "m_vehicle", "varname" => "u736239518tsundbat154412412__tblm_vehicle", "altvarname" => "tblm_vehicle", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_booking", "varname" => "u736239518tsundbat154412412__t_booking", "altvarname" => "t_booking", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_delivery", "varname" => "u736239518tsundbat154412412__t_delivery", "altvarname" => "t_delivery", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_delivery_address", "varname" => "u736239518tsundbat154412412__t_delivery_address", "altvarname" => "t_delivery_address", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_delivery_details", "varname" => "u736239518tsundbat154412412__t_delivery_details", "altvarname" => "t_delivery_details", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_delivery_expedition", "varname" => "u736239518tsundbat154412412__t_delivery_expedition", "altvarname" => "t_delivery_expedition", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_delivery_feedback", "varname" => "u736239518tsundbat154412412__t_delivery_feedback", "altvarname" => "t_delivery_feedback", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_delivery_internal", "varname" => "u736239518tsundbat154412412__t_delivery_internal", "altvarname" => "t_delivery_internal", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_invoice", "varname" => "u736239518tsundbat154412412__t_invoice", "altvarname" => "t_invoice", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_invoice_det", "varname" => "u736239518tsundbat154412412__t_invoice_det", "altvarname" => "t_invoice_det", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_letter", "varname" => "u736239518tsundbat154412412__t_letter", "altvarname" => "t_letter", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_letter_flow", "varname" => "u736239518tsundbat154412412__t_letter_flow", "altvarname" => "t_letter_flow", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_meeting_book", "varname" => "u736239518tsundbat154412412__t_meeting_book", "altvarname" => "t_meeting_book", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_output_client_profile", "varname" => "u736239518tsundbat154412412__t_output_client_profile", "altvarname" => "t_output_client_profile", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_purchase", "varname" => "u736239518tsundbat154412412__t_purchase", "altvarname" => "t_purchase", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_purchase_det", "varname" => "u736239518tsundbat154412412__t_purchase_det", "altvarname" => "t_purchase_det", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_register", "varname" => "u736239518tsundbat154412412__t_register", "altvarname" => "t_register", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_register_mapping", "varname" => "u736239518tsundbat154412412__t_register_mapping", "altvarname" => "t_register_mapping", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "t_ticket", "varname" => "u736239518tsundbat154412412__t_ticket", "altvarname" => "t_ticket", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "tsun_gen2__audit", "varname" => "u736239518tsundbat154412412__tsun_gen2__audit", "altvarname" => "tsun_gen2__audit", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "tsun_noti", "varname" => "u736239518tsundbat154412412__tsun_noti", "altvarname" => "tsun_noti", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "Tsun_uggroups", "varname" => "u736239518tsundbat154412412__Tsun_uggroups", "altvarname" => "Tsun_uggroups", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "Tsun_ugmembers", "varname" => "u736239518tsundbat154412412__Tsun_ugmembers", "altvarname" => "Tsun_ugmembers", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "Tsun_ugrights", "varname" => "u736239518tsundbat154412412__Tsun_ugrights", "altvarname" => "Tsun_ugrights", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "v_delivery_list", "varname" => "u736239518tsundbat154412412__v_delivery_list", "altvarname" => "v_delivery_list", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
		$this->lstTables[] = array("name" => "view_delivery_history", "varname" => "u736239518tsundbat154412412__view_delivery_history", "altvarname" => "view_delivery_history", "connId" => "u736239518tsundbat154412412", "schema" => "", "connName" => "u736239518_tsundb at 154.41.24");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>