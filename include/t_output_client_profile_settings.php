<?php
$tdatat_output_client_profile = array();
$tdatat_output_client_profile[".searchableFields"] = array();
$tdatat_output_client_profile[".ShortName"] = "t_output_client_profile";
$tdatat_output_client_profile[".OwnerID"] = "";
$tdatat_output_client_profile[".OriginalTable"] = "t_output_client_profile";


$tdatat_output_client_profile[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_output_client_profile[".originalPagesByType"] = $tdatat_output_client_profile[".pagesByType"];
$tdatat_output_client_profile[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_output_client_profile[".originalPages"] = $tdatat_output_client_profile[".pages"];
$tdatat_output_client_profile[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_output_client_profile[".originalDefaultPages"] = $tdatat_output_client_profile[".defaultPages"];

//	field labels
$fieldLabelst_output_client_profile = array();
$fieldToolTipst_output_client_profile = array();
$pageTitlest_output_client_profile = array();
$placeHolderst_output_client_profile = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_output_client_profile["English"] = array();
	$fieldToolTipst_output_client_profile["English"] = array();
	$placeHolderst_output_client_profile["English"] = array();
	$pageTitlest_output_client_profile["English"] = array();
	$fieldLabelst_output_client_profile["English"]["idt_output"] = "Idt Output";
	$fieldToolTipst_output_client_profile["English"]["idt_output"] = "";
	$placeHolderst_output_client_profile["English"]["idt_output"] = "";
	$fieldLabelst_output_client_profile["English"]["dtexe"] = "Dtexe";
	$fieldToolTipst_output_client_profile["English"]["dtexe"] = "";
	$placeHolderst_output_client_profile["English"]["dtexe"] = "";
	$fieldLabelst_output_client_profile["English"]["id_client_profile"] = "Id Client Profile";
	$fieldToolTipst_output_client_profile["English"]["id_client_profile"] = "";
	$placeHolderst_output_client_profile["English"]["id_client_profile"] = "";
	$fieldLabelst_output_client_profile["English"]["client_name"] = "Client Name";
	$fieldToolTipst_output_client_profile["English"]["client_name"] = "";
	$placeHolderst_output_client_profile["English"]["client_name"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_client_type"] = "Flag Client Type";
	$fieldToolTipst_output_client_profile["English"]["flag_client_type"] = "";
	$placeHolderst_output_client_profile["English"]["flag_client_type"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_domestic_type_id"] = "Flag Domestic Type Id";
	$fieldToolTipst_output_client_profile["English"]["flag_domestic_type_id"] = "";
	$placeHolderst_output_client_profile["English"]["flag_domestic_type_id"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_overseas_type_id"] = "Flag Overseas Type Id";
	$fieldToolTipst_output_client_profile["English"]["flag_overseas_type_id"] = "";
	$placeHolderst_output_client_profile["English"]["flag_overseas_type_id"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_client_gender"] = "Flag Client Gender";
	$fieldToolTipst_output_client_profile["English"]["flag_client_gender"] = "";
	$placeHolderst_output_client_profile["English"]["flag_client_gender"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_dob_place"] = "Flag Dob Place";
	$fieldToolTipst_output_client_profile["English"]["flag_dob_place"] = "";
	$placeHolderst_output_client_profile["English"]["flag_dob_place"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_dob_date"] = "Flag Dob Date";
	$fieldToolTipst_output_client_profile["English"]["flag_dob_date"] = "";
	$placeHolderst_output_client_profile["English"]["flag_dob_date"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_address_domicile"] = "Flag Address Domicile";
	$fieldToolTipst_output_client_profile["English"]["flag_address_domicile"] = "";
	$placeHolderst_output_client_profile["English"]["flag_address_domicile"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_address_correspondence"] = "Flag Address Correspondence";
	$fieldToolTipst_output_client_profile["English"]["flag_address_correspondence"] = "";
	$placeHolderst_output_client_profile["English"]["flag_address_correspondence"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_establishment_place"] = "Flag Establishment Place";
	$fieldToolTipst_output_client_profile["English"]["flag_establishment_place"] = "";
	$placeHolderst_output_client_profile["English"]["flag_establishment_place"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_establishment_date"] = "Flag Establishment Date";
	$fieldToolTipst_output_client_profile["English"]["flag_establishment_date"] = "";
	$placeHolderst_output_client_profile["English"]["flag_establishment_date"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_tax_number"] = "Flag Tax Number";
	$fieldToolTipst_output_client_profile["English"]["flag_tax_number"] = "";
	$placeHolderst_output_client_profile["English"]["flag_tax_number"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_tax_name"] = "Flag Tax Name";
	$fieldToolTipst_output_client_profile["English"]["flag_tax_name"] = "";
	$placeHolderst_output_client_profile["English"]["flag_tax_name"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_id_card_number"] = "Flag Id Card Number";
	$fieldToolTipst_output_client_profile["English"]["flag_id_card_number"] = "";
	$placeHolderst_output_client_profile["English"]["flag_id_card_number"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_id_card_name"] = "Flag Id Card Name";
	$fieldToolTipst_output_client_profile["English"]["flag_id_card_name"] = "";
	$placeHolderst_output_client_profile["English"]["flag_id_card_name"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_id_card_citizen"] = "Flag Id Card Citizen";
	$fieldToolTipst_output_client_profile["English"]["flag_id_card_citizen"] = "";
	$placeHolderst_output_client_profile["English"]["flag_id_card_citizen"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_id_card_expired_date"] = "Flag Id Card Expired Date";
	$fieldToolTipst_output_client_profile["English"]["flag_id_card_expired_date"] = "";
	$placeHolderst_output_client_profile["English"]["flag_id_card_expired_date"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_contact_pic_name"] = "Flag Contact Pic Name";
	$fieldToolTipst_output_client_profile["English"]["flag_contact_pic_name"] = "";
	$placeHolderst_output_client_profile["English"]["flag_contact_pic_name"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_contact_pic_number"] = "Flag Contact Pic Number";
	$fieldToolTipst_output_client_profile["English"]["flag_contact_pic_number"] = "";
	$placeHolderst_output_client_profile["English"]["flag_contact_pic_number"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_bank_info"] = "Flag Bank Info";
	$fieldToolTipst_output_client_profile["English"]["flag_bank_info"] = "";
	$placeHolderst_output_client_profile["English"]["flag_bank_info"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_refferral"] = "Flag Refferral";
	$fieldToolTipst_output_client_profile["English"]["flag_refferral"] = "";
	$placeHolderst_output_client_profile["English"]["flag_refferral"] = "";
	$fieldLabelst_output_client_profile["English"]["flag_fill"] = "Flag Fill";
	$fieldToolTipst_output_client_profile["English"]["flag_fill"] = "";
	$placeHolderst_output_client_profile["English"]["flag_fill"] = "";
	if (count($fieldToolTipst_output_client_profile["English"]))
		$tdatat_output_client_profile[".isUseToolTips"] = true;
}


	$tdatat_output_client_profile[".NCSearch"] = true;



$tdatat_output_client_profile[".shortTableName"] = "t_output_client_profile";
$tdatat_output_client_profile[".nSecOptions"] = 0;

$tdatat_output_client_profile[".mainTableOwnerID"] = "";
$tdatat_output_client_profile[".entityType"] = 0;
$tdatat_output_client_profile[".connId"] = "u736239518tsundbat154412412";


$tdatat_output_client_profile[".strOriginalTableName"] = "t_output_client_profile";

	



$tdatat_output_client_profile[".showAddInPopup"] = false;

$tdatat_output_client_profile[".showEditInPopup"] = false;

$tdatat_output_client_profile[".showViewInPopup"] = false;

$tdatat_output_client_profile[".listAjax"] = false;
//	temporary
//$tdatat_output_client_profile[".listAjax"] = false;

	$tdatat_output_client_profile[".audit"] = false;

	$tdatat_output_client_profile[".locking"] = false;


$pages = $tdatat_output_client_profile[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_output_client_profile[".edit"] = true;
	$tdatat_output_client_profile[".afterEditAction"] = 1;
	$tdatat_output_client_profile[".closePopupAfterEdit"] = 1;
	$tdatat_output_client_profile[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_output_client_profile[".add"] = true;
$tdatat_output_client_profile[".afterAddAction"] = 1;
$tdatat_output_client_profile[".closePopupAfterAdd"] = 1;
$tdatat_output_client_profile[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_output_client_profile[".list"] = true;
}



$tdatat_output_client_profile[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_output_client_profile[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_output_client_profile[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_output_client_profile[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_output_client_profile[".printFriendly"] = true;
}



$tdatat_output_client_profile[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_output_client_profile[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_output_client_profile[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_output_client_profile[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_output_client_profile[".ajaxCodeSnippetAdded"] = false;

$tdatat_output_client_profile[".buttonsAdded"] = false;

$tdatat_output_client_profile[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_output_client_profile[".isUseTimeForSearch"] = false;


$tdatat_output_client_profile[".badgeColor"] = "4682B4";


$tdatat_output_client_profile[".allSearchFields"] = array();
$tdatat_output_client_profile[".filterFields"] = array();
$tdatat_output_client_profile[".requiredSearchFields"] = array();

$tdatat_output_client_profile[".googleLikeFields"] = array();
$tdatat_output_client_profile[".googleLikeFields"][] = "idt_output";
$tdatat_output_client_profile[".googleLikeFields"][] = "dtexe";
$tdatat_output_client_profile[".googleLikeFields"][] = "id_client_profile";
$tdatat_output_client_profile[".googleLikeFields"][] = "client_name";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_client_type";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_domestic_type_id";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_overseas_type_id";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_client_gender";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_dob_place";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_dob_date";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_address_domicile";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_address_correspondence";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_establishment_place";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_establishment_date";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_tax_number";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_tax_name";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_id_card_number";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_id_card_name";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_id_card_citizen";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_id_card_expired_date";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_contact_pic_name";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_contact_pic_number";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_bank_info";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_refferral";
$tdatat_output_client_profile[".googleLikeFields"][] = "flag_fill";



$tdatat_output_client_profile[".tableType"] = "list";

$tdatat_output_client_profile[".printerPageOrientation"] = 0;
$tdatat_output_client_profile[".nPrinterPageScale"] = 100;

$tdatat_output_client_profile[".nPrinterSplitRecords"] = 40;

$tdatat_output_client_profile[".geocodingEnabled"] = false;










$tdatat_output_client_profile[".pageSize"] = 20;

$tdatat_output_client_profile[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_output_client_profile[".strOrderBy"] = $tstrOrderBy;

$tdatat_output_client_profile[".orderindexes"] = array();


$tdatat_output_client_profile[".sqlHead"] = "SELECT idt_output,  	dtexe,  	id_client_profile,  	client_name,  	flag_client_type,  	flag_domestic_type_id,  	flag_overseas_type_id,  	flag_client_gender,  	flag_dob_place,  	flag_dob_date,  	flag_address_domicile,  	flag_address_correspondence,  	flag_establishment_place,  	flag_establishment_date,  	flag_tax_number,  	flag_tax_name,  	flag_id_card_number,  	flag_id_card_name,  	flag_id_card_citizen,  	flag_id_card_expired_date,  	flag_contact_pic_name,  	flag_contact_pic_number,  	flag_bank_info,  	flag_refferral,  	flag_fill";
$tdatat_output_client_profile[".sqlFrom"] = "FROM t_output_client_profile";
$tdatat_output_client_profile[".sqlWhereExpr"] = "";
$tdatat_output_client_profile[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_output_client_profile[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_output_client_profile[".arrGroupsPerPage"] = $arrGPP;

$tdatat_output_client_profile[".highlightSearchResults"] = true;

$tableKeyst_output_client_profile = array();
$tableKeyst_output_client_profile[] = "idt_output";
$tdatat_output_client_profile[".Keys"] = $tableKeyst_output_client_profile;


$tdatat_output_client_profile[".hideMobileList"] = array();




//	idt_output
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "idt_output";
	$fdata["GoodName"] = "idt_output";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","idt_output");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "idt_output";

		$fdata["sourceSingle"] = "idt_output";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idt_output";

	
	
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


	$tdatat_output_client_profile["idt_output"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "idt_output";
//	dtexe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "dtexe";
	$fdata["GoodName"] = "dtexe";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","dtexe");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "dtexe";

		$fdata["sourceSingle"] = "dtexe";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dtexe";

	
	
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


	$tdatat_output_client_profile["dtexe"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "dtexe";
//	id_client_profile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_client_profile";
	$fdata["GoodName"] = "id_client_profile";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","id_client_profile");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_client_profile";

		$fdata["sourceSingle"] = "id_client_profile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_client_profile";

	
	
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


	$tdatat_output_client_profile["id_client_profile"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "id_client_profile";
//	client_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "client_name";
	$fdata["GoodName"] = "client_name";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","client_name");
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2000";

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


	$tdatat_output_client_profile["client_name"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "client_name";
//	flag_client_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "flag_client_type";
	$fdata["GoodName"] = "flag_client_type";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_client_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_client_type";

		$fdata["sourceSingle"] = "flag_client_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_client_type";

	
	
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


	$tdatat_output_client_profile["flag_client_type"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_client_type";
//	flag_domestic_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "flag_domestic_type_id";
	$fdata["GoodName"] = "flag_domestic_type_id";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_domestic_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_domestic_type_id";

		$fdata["sourceSingle"] = "flag_domestic_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_domestic_type_id";

	
	
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


	$tdatat_output_client_profile["flag_domestic_type_id"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_domestic_type_id";
//	flag_overseas_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "flag_overseas_type_id";
	$fdata["GoodName"] = "flag_overseas_type_id";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_overseas_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_overseas_type_id";

		$fdata["sourceSingle"] = "flag_overseas_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_overseas_type_id";

	
	
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


	$tdatat_output_client_profile["flag_overseas_type_id"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_overseas_type_id";
//	flag_client_gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "flag_client_gender";
	$fdata["GoodName"] = "flag_client_gender";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_client_gender");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_client_gender";

		$fdata["sourceSingle"] = "flag_client_gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_client_gender";

	
	
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


	$tdatat_output_client_profile["flag_client_gender"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_client_gender";
//	flag_dob_place
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "flag_dob_place";
	$fdata["GoodName"] = "flag_dob_place";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_dob_place");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_dob_place";

		$fdata["sourceSingle"] = "flag_dob_place";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_dob_place";

	
	
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


	$tdatat_output_client_profile["flag_dob_place"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_dob_place";
//	flag_dob_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "flag_dob_date";
	$fdata["GoodName"] = "flag_dob_date";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_dob_date");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_dob_date";

		$fdata["sourceSingle"] = "flag_dob_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_dob_date";

	
	
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


	$tdatat_output_client_profile["flag_dob_date"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_dob_date";
//	flag_address_domicile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "flag_address_domicile";
	$fdata["GoodName"] = "flag_address_domicile";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_address_domicile");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_address_domicile";

		$fdata["sourceSingle"] = "flag_address_domicile";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_address_domicile";

	
	
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


	$tdatat_output_client_profile["flag_address_domicile"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_address_domicile";
//	flag_address_correspondence
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "flag_address_correspondence";
	$fdata["GoodName"] = "flag_address_correspondence";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_address_correspondence");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_address_correspondence";

		$fdata["sourceSingle"] = "flag_address_correspondence";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_address_correspondence";

	
	
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


	$tdatat_output_client_profile["flag_address_correspondence"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_address_correspondence";
//	flag_establishment_place
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "flag_establishment_place";
	$fdata["GoodName"] = "flag_establishment_place";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_establishment_place");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_establishment_place";

		$fdata["sourceSingle"] = "flag_establishment_place";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_establishment_place";

	
	
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


	$tdatat_output_client_profile["flag_establishment_place"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_establishment_place";
//	flag_establishment_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "flag_establishment_date";
	$fdata["GoodName"] = "flag_establishment_date";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_establishment_date");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_establishment_date";

		$fdata["sourceSingle"] = "flag_establishment_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_establishment_date";

	
	
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


	$tdatat_output_client_profile["flag_establishment_date"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_establishment_date";
//	flag_tax_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "flag_tax_number";
	$fdata["GoodName"] = "flag_tax_number";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_tax_number");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_tax_number";

		$fdata["sourceSingle"] = "flag_tax_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_tax_number";

	
	
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


	$tdatat_output_client_profile["flag_tax_number"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_tax_number";
//	flag_tax_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "flag_tax_name";
	$fdata["GoodName"] = "flag_tax_name";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_tax_name");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_tax_name";

		$fdata["sourceSingle"] = "flag_tax_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_tax_name";

	
	
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


	$tdatat_output_client_profile["flag_tax_name"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_tax_name";
//	flag_id_card_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "flag_id_card_number";
	$fdata["GoodName"] = "flag_id_card_number";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_id_card_number");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_id_card_number";

		$fdata["sourceSingle"] = "flag_id_card_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_id_card_number";

	
	
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


	$tdatat_output_client_profile["flag_id_card_number"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_id_card_number";
//	flag_id_card_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "flag_id_card_name";
	$fdata["GoodName"] = "flag_id_card_name";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_id_card_name");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_id_card_name";

		$fdata["sourceSingle"] = "flag_id_card_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_id_card_name";

	
	
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


	$tdatat_output_client_profile["flag_id_card_name"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_id_card_name";
//	flag_id_card_citizen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "flag_id_card_citizen";
	$fdata["GoodName"] = "flag_id_card_citizen";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_id_card_citizen");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_id_card_citizen";

		$fdata["sourceSingle"] = "flag_id_card_citizen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_id_card_citizen";

	
	
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


	$tdatat_output_client_profile["flag_id_card_citizen"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_id_card_citizen";
//	flag_id_card_expired_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "flag_id_card_expired_date";
	$fdata["GoodName"] = "flag_id_card_expired_date";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_id_card_expired_date");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_id_card_expired_date";

		$fdata["sourceSingle"] = "flag_id_card_expired_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_id_card_expired_date";

	
	
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


	$tdatat_output_client_profile["flag_id_card_expired_date"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_id_card_expired_date";
//	flag_contact_pic_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "flag_contact_pic_name";
	$fdata["GoodName"] = "flag_contact_pic_name";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_contact_pic_name");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_contact_pic_name";

		$fdata["sourceSingle"] = "flag_contact_pic_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_contact_pic_name";

	
	
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


	$tdatat_output_client_profile["flag_contact_pic_name"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_contact_pic_name";
//	flag_contact_pic_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "flag_contact_pic_number";
	$fdata["GoodName"] = "flag_contact_pic_number";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_contact_pic_number");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_contact_pic_number";

		$fdata["sourceSingle"] = "flag_contact_pic_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_contact_pic_number";

	
	
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


	$tdatat_output_client_profile["flag_contact_pic_number"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_contact_pic_number";
//	flag_bank_info
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "flag_bank_info";
	$fdata["GoodName"] = "flag_bank_info";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_bank_info");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_bank_info";

		$fdata["sourceSingle"] = "flag_bank_info";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_bank_info";

	
	
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


	$tdatat_output_client_profile["flag_bank_info"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_bank_info";
//	flag_refferral
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "flag_refferral";
	$fdata["GoodName"] = "flag_refferral";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_refferral");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_refferral";

		$fdata["sourceSingle"] = "flag_refferral";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_refferral";

	
	
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


	$tdatat_output_client_profile["flag_refferral"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_refferral";
//	flag_fill
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "flag_fill";
	$fdata["GoodName"] = "flag_fill";
	$fdata["ownerTable"] = "t_output_client_profile";
	$fdata["Label"] = GetFieldLabel("t_output_client_profile","flag_fill");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag_fill";

		$fdata["sourceSingle"] = "flag_fill";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag_fill";

	
	
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


	$tdatat_output_client_profile["flag_fill"] = $fdata;
		$tdatat_output_client_profile[".searchableFields"][] = "flag_fill";


$tables_data["t_output_client_profile"]=&$tdatat_output_client_profile;
$field_labels["t_output_client_profile"] = &$fieldLabelst_output_client_profile;
$fieldToolTips["t_output_client_profile"] = &$fieldToolTipst_output_client_profile;
$placeHolders["t_output_client_profile"] = &$placeHolderst_output_client_profile;
$page_titles["t_output_client_profile"] = &$pageTitlest_output_client_profile;


changeTextControlsToDate( "t_output_client_profile" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_output_client_profile"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_output_client_profile"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_output_client_profile()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "idt_output,  	dtexe,  	id_client_profile,  	client_name,  	flag_client_type,  	flag_domestic_type_id,  	flag_overseas_type_id,  	flag_client_gender,  	flag_dob_place,  	flag_dob_date,  	flag_address_domicile,  	flag_address_correspondence,  	flag_establishment_place,  	flag_establishment_date,  	flag_tax_number,  	flag_tax_name,  	flag_id_card_number,  	flag_id_card_name,  	flag_id_card_citizen,  	flag_id_card_expired_date,  	flag_contact_pic_name,  	flag_contact_pic_number,  	flag_bank_info,  	flag_refferral,  	flag_fill";
$proto0["m_strFrom"] = "FROM t_output_client_profile";
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
	"m_strName" => "idt_output",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto6["m_sql"] = "idt_output";
$proto6["m_srcTableName"] = "t_output_client_profile";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "dtexe",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto8["m_sql"] = "dtexe";
$proto8["m_srcTableName"] = "t_output_client_profile";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_client_profile",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto10["m_sql"] = "id_client_profile";
$proto10["m_srcTableName"] = "t_output_client_profile";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "client_name",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto12["m_sql"] = "client_name";
$proto12["m_srcTableName"] = "t_output_client_profile";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_client_type",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto14["m_sql"] = "flag_client_type";
$proto14["m_srcTableName"] = "t_output_client_profile";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_domestic_type_id",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto16["m_sql"] = "flag_domestic_type_id";
$proto16["m_srcTableName"] = "t_output_client_profile";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_overseas_type_id",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto18["m_sql"] = "flag_overseas_type_id";
$proto18["m_srcTableName"] = "t_output_client_profile";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_client_gender",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto20["m_sql"] = "flag_client_gender";
$proto20["m_srcTableName"] = "t_output_client_profile";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_dob_place",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto22["m_sql"] = "flag_dob_place";
$proto22["m_srcTableName"] = "t_output_client_profile";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_dob_date",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto24["m_sql"] = "flag_dob_date";
$proto24["m_srcTableName"] = "t_output_client_profile";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_address_domicile",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto26["m_sql"] = "flag_address_domicile";
$proto26["m_srcTableName"] = "t_output_client_profile";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_address_correspondence",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto28["m_sql"] = "flag_address_correspondence";
$proto28["m_srcTableName"] = "t_output_client_profile";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_establishment_place",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto30["m_sql"] = "flag_establishment_place";
$proto30["m_srcTableName"] = "t_output_client_profile";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_establishment_date",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto32["m_sql"] = "flag_establishment_date";
$proto32["m_srcTableName"] = "t_output_client_profile";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_tax_number",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto34["m_sql"] = "flag_tax_number";
$proto34["m_srcTableName"] = "t_output_client_profile";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_tax_name",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto36["m_sql"] = "flag_tax_name";
$proto36["m_srcTableName"] = "t_output_client_profile";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_id_card_number",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto38["m_sql"] = "flag_id_card_number";
$proto38["m_srcTableName"] = "t_output_client_profile";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_id_card_name",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto40["m_sql"] = "flag_id_card_name";
$proto40["m_srcTableName"] = "t_output_client_profile";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_id_card_citizen",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto42["m_sql"] = "flag_id_card_citizen";
$proto42["m_srcTableName"] = "t_output_client_profile";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_id_card_expired_date",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto44["m_sql"] = "flag_id_card_expired_date";
$proto44["m_srcTableName"] = "t_output_client_profile";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_contact_pic_name",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto46["m_sql"] = "flag_contact_pic_name";
$proto46["m_srcTableName"] = "t_output_client_profile";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_contact_pic_number",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto48["m_sql"] = "flag_contact_pic_number";
$proto48["m_srcTableName"] = "t_output_client_profile";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_bank_info",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto50["m_sql"] = "flag_bank_info";
$proto50["m_srcTableName"] = "t_output_client_profile";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_refferral",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto52["m_sql"] = "flag_refferral";
$proto52["m_srcTableName"] = "t_output_client_profile";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "flag_fill",
	"m_strTable" => "t_output_client_profile",
	"m_srcTableName" => "t_output_client_profile"
));

$proto54["m_sql"] = "flag_fill";
$proto54["m_srcTableName"] = "t_output_client_profile";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto56=array();
$proto56["m_link"] = "SQLL_MAIN";
			$proto57=array();
$proto57["m_strName"] = "t_output_client_profile";
$proto57["m_srcTableName"] = "t_output_client_profile";
$proto57["m_columns"] = array();
$proto57["m_columns"][] = "idt_output";
$proto57["m_columns"][] = "dtexe";
$proto57["m_columns"][] = "id_client_profile";
$proto57["m_columns"][] = "client_name";
$proto57["m_columns"][] = "flag_client_type";
$proto57["m_columns"][] = "flag_domestic_type_id";
$proto57["m_columns"][] = "flag_overseas_type_id";
$proto57["m_columns"][] = "flag_client_gender";
$proto57["m_columns"][] = "flag_dob_place";
$proto57["m_columns"][] = "flag_dob_date";
$proto57["m_columns"][] = "flag_address_domicile";
$proto57["m_columns"][] = "flag_address_correspondence";
$proto57["m_columns"][] = "flag_establishment_place";
$proto57["m_columns"][] = "flag_establishment_date";
$proto57["m_columns"][] = "flag_tax_number";
$proto57["m_columns"][] = "flag_tax_name";
$proto57["m_columns"][] = "flag_id_card_number";
$proto57["m_columns"][] = "flag_id_card_name";
$proto57["m_columns"][] = "flag_id_card_citizen";
$proto57["m_columns"][] = "flag_id_card_expired_date";
$proto57["m_columns"][] = "flag_contact_pic_name";
$proto57["m_columns"][] = "flag_contact_pic_number";
$proto57["m_columns"][] = "flag_bank_info";
$proto57["m_columns"][] = "flag_refferral";
$proto57["m_columns"][] = "flag_fill";
$obj = new SQLTable($proto57);

$proto56["m_table"] = $obj;
$proto56["m_sql"] = "t_output_client_profile";
$proto56["m_alias"] = "";
$proto56["m_srcTableName"] = "t_output_client_profile";
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
$proto0["m_srcTableName"]="t_output_client_profile";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_output_client_profile = createSqlQuery_t_output_client_profile();


	
				;

																									

$tdatat_output_client_profile[".sqlquery"] = $queryData_t_output_client_profile;



$tdatat_output_client_profile[".hasEvents"] = false;

?>