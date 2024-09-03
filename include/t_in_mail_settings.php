<?php
$tdatat_in_mail = array();
$tdatat_in_mail[".searchableFields"] = array();
$tdatat_in_mail[".ShortName"] = "t_in_mail";
$tdatat_in_mail[".OwnerID"] = "";
$tdatat_in_mail[".OriginalTable"] = "t_register";


$tdatat_in_mail[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_in_mail[".originalPagesByType"] = $tdatat_in_mail[".pagesByType"];
$tdatat_in_mail[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_in_mail[".originalPages"] = $tdatat_in_mail[".pages"];
$tdatat_in_mail[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_in_mail[".originalDefaultPages"] = $tdatat_in_mail[".defaultPages"];

//	field labels
$fieldLabelst_in_mail = array();
$fieldToolTipst_in_mail = array();
$pageTitlest_in_mail = array();
$placeHolderst_in_mail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_in_mail["English"] = array();
	$fieldToolTipst_in_mail["English"] = array();
	$placeHolderst_in_mail["English"] = array();
	$pageTitlest_in_mail["English"] = array();
	$fieldLabelst_in_mail["English"]["t_register_id"] = "T Register Id";
	$fieldToolTipst_in_mail["English"]["t_register_id"] = "";
	$placeHolderst_in_mail["English"]["t_register_id"] = "";
	$fieldLabelst_in_mail["English"]["t_register_id_x"] = "T Register Id X";
	$fieldToolTipst_in_mail["English"]["t_register_id_x"] = "";
	$placeHolderst_in_mail["English"]["t_register_id_x"] = "";
	$fieldLabelst_in_mail["English"]["t_register_no"] = "Registration No";
	$fieldToolTipst_in_mail["English"]["t_register_no"] = "";
	$placeHolderst_in_mail["English"]["t_register_no"] = "";
	$fieldLabelst_in_mail["English"]["t_register_date"] = "Date";
	$fieldToolTipst_in_mail["English"]["t_register_date"] = "";
	$placeHolderst_in_mail["English"]["t_register_date"] = "";
	$fieldLabelst_in_mail["English"]["t_register_source"] = "Pickup";
	$fieldToolTipst_in_mail["English"]["t_register_source"] = "";
	$placeHolderst_in_mail["English"]["t_register_source"] = "";
	$fieldLabelst_in_mail["English"]["t_register_location_id"] = "Location";
	$fieldToolTipst_in_mail["English"]["t_register_location_id"] = "";
	$placeHolderst_in_mail["English"]["t_register_location_id"] = "";
	$fieldLabelst_in_mail["English"]["t_register_transfer_fl"] = "Transfer";
	$fieldToolTipst_in_mail["English"]["t_register_transfer_fl"] = "";
	$placeHolderst_in_mail["English"]["t_register_transfer_fl"] = "";
	$fieldLabelst_in_mail["English"]["t_register_transfer_location_id"] = "Transfer Location";
	$fieldToolTipst_in_mail["English"]["t_register_transfer_location_id"] = "";
	$placeHolderst_in_mail["English"]["t_register_transfer_location_id"] = "";
	$fieldLabelst_in_mail["English"]["t_register_transfer_date"] = "Transfer Date";
	$fieldToolTipst_in_mail["English"]["t_register_transfer_date"] = "";
	$placeHolderst_in_mail["English"]["t_register_transfer_date"] = "";
	$fieldLabelst_in_mail["English"]["t_register_transfer_courier"] = "Transfer Courier";
	$fieldToolTipst_in_mail["English"]["t_register_transfer_courier"] = "";
	$placeHolderst_in_mail["English"]["t_register_transfer_courier"] = "";
	$fieldLabelst_in_mail["English"]["t_register_doc_from"] = "Document From";
	$fieldToolTipst_in_mail["English"]["t_register_doc_from"] = "";
	$placeHolderst_in_mail["English"]["t_register_doc_from"] = "";
	$fieldLabelst_in_mail["English"]["t_register_doc_owner"] = "Document To";
	$fieldToolTipst_in_mail["English"]["t_register_doc_owner"] = "";
	$placeHolderst_in_mail["English"]["t_register_doc_owner"] = "";
	$fieldLabelst_in_mail["English"]["t_register_images"] = "Images";
	$fieldToolTipst_in_mail["English"]["t_register_images"] = "";
	$placeHolderst_in_mail["English"]["t_register_images"] = "";
	$fieldLabelst_in_mail["English"]["t_register_note"] = "Note";
	$fieldToolTipst_in_mail["English"]["t_register_note"] = "";
	$placeHolderst_in_mail["English"]["t_register_note"] = "";
	$fieldLabelst_in_mail["English"]["t_register_status"] = "Status";
	$fieldToolTipst_in_mail["English"]["t_register_status"] = "";
	$placeHolderst_in_mail["English"]["t_register_status"] = "";
	$fieldLabelst_in_mail["English"]["add_user"] = "Add User";
	$fieldToolTipst_in_mail["English"]["add_user"] = "";
	$placeHolderst_in_mail["English"]["add_user"] = "";
	$fieldLabelst_in_mail["English"]["add_date"] = "Add Date";
	$fieldToolTipst_in_mail["English"]["add_date"] = "";
	$placeHolderst_in_mail["English"]["add_date"] = "";
	$fieldLabelst_in_mail["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_in_mail["English"]["edit_user"] = "";
	$placeHolderst_in_mail["English"]["edit_user"] = "";
	$fieldLabelst_in_mail["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_in_mail["English"]["edit_date"] = "";
	$placeHolderst_in_mail["English"]["edit_date"] = "";
	$fieldLabelst_in_mail["English"]["nomor"] = "Nomor";
	$fieldToolTipst_in_mail["English"]["nomor"] = "";
	$placeHolderst_in_mail["English"]["nomor"] = "";
	$fieldLabelst_in_mail["English"]["digit"] = "Digit";
	$fieldToolTipst_in_mail["English"]["digit"] = "";
	$placeHolderst_in_mail["English"]["digit"] = "";
	$fieldLabelst_in_mail["English"]["t_register_doc_user"] = "Doc User";
	$fieldToolTipst_in_mail["English"]["t_register_doc_user"] = "";
	$placeHolderst_in_mail["English"]["t_register_doc_user"] = "";
	$fieldLabelst_in_mail["English"]["add_sign_user"] = "Add Sign User";
	$fieldToolTipst_in_mail["English"]["add_sign_user"] = "";
	$placeHolderst_in_mail["English"]["add_sign_user"] = "";
	$fieldLabelst_in_mail["English"]["add_sign_date"] = "Add Sign Date";
	$fieldToolTipst_in_mail["English"]["add_sign_date"] = "";
	$placeHolderst_in_mail["English"]["add_sign_date"] = "";
	$fieldLabelst_in_mail["English"]["add_sign_fl"] = "Add Sign Fl";
	$fieldToolTipst_in_mail["English"]["add_sign_fl"] = "";
	$placeHolderst_in_mail["English"]["add_sign_fl"] = "";
	$fieldLabelst_in_mail["English"]["last_user"] = "Last User";
	$fieldToolTipst_in_mail["English"]["last_user"] = "";
	$placeHolderst_in_mail["English"]["last_user"] = "";
	$fieldLabelst_in_mail["English"]["last_date"] = "Last Date";
	$fieldToolTipst_in_mail["English"]["last_date"] = "";
	$placeHolderst_in_mail["English"]["last_date"] = "";
	$fieldLabelst_in_mail["English"]["sign"] = "Sign";
	$fieldToolTipst_in_mail["English"]["sign"] = "";
	$placeHolderst_in_mail["English"]["sign"] = "";
	if (count($fieldToolTipst_in_mail["English"]))
		$tdatat_in_mail[".isUseToolTips"] = true;
}


	$tdatat_in_mail[".NCSearch"] = true;



$tdatat_in_mail[".shortTableName"] = "t_in_mail";
$tdatat_in_mail[".nSecOptions"] = 0;

$tdatat_in_mail[".mainTableOwnerID"] = "";
$tdatat_in_mail[".entityType"] = 1;
$tdatat_in_mail[".connId"] = "u736239518tsundbat154412412";


$tdatat_in_mail[".strOriginalTableName"] = "t_register";

	



$tdatat_in_mail[".showAddInPopup"] = false;

$tdatat_in_mail[".showEditInPopup"] = false;

$tdatat_in_mail[".showViewInPopup"] = false;

$tdatat_in_mail[".listAjax"] = false;
//	temporary
//$tdatat_in_mail[".listAjax"] = false;

	$tdatat_in_mail[".audit"] = false;

	$tdatat_in_mail[".locking"] = false;


$pages = $tdatat_in_mail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_in_mail[".edit"] = true;
	$tdatat_in_mail[".afterEditAction"] = 1;
	$tdatat_in_mail[".closePopupAfterEdit"] = 1;
	$tdatat_in_mail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_in_mail[".add"] = true;
$tdatat_in_mail[".afterAddAction"] = 1;
$tdatat_in_mail[".closePopupAfterAdd"] = 1;
$tdatat_in_mail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_in_mail[".list"] = true;
}



$tdatat_in_mail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_in_mail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_in_mail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_in_mail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_in_mail[".printFriendly"] = true;
}



$tdatat_in_mail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_in_mail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_in_mail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_in_mail[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_in_mail[".ajaxCodeSnippetAdded"] = false;

$tdatat_in_mail[".buttonsAdded"] = false;

$tdatat_in_mail[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_in_mail[".isUseTimeForSearch"] = false;


$tdatat_in_mail[".badgeColor"] = "6B8E23";


$tdatat_in_mail[".allSearchFields"] = array();
$tdatat_in_mail[".filterFields"] = array();
$tdatat_in_mail[".requiredSearchFields"] = array();

$tdatat_in_mail[".googleLikeFields"] = array();
$tdatat_in_mail[".googleLikeFields"][] = "t_register_id";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_id_x";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_no";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_date";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_source";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_location_id";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_transfer_fl";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_transfer_location_id";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_transfer_date";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_transfer_courier";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_doc_from";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_doc_owner";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_images";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_note";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_status";
$tdatat_in_mail[".googleLikeFields"][] = "add_user";
$tdatat_in_mail[".googleLikeFields"][] = "add_date";
$tdatat_in_mail[".googleLikeFields"][] = "edit_user";
$tdatat_in_mail[".googleLikeFields"][] = "edit_date";
$tdatat_in_mail[".googleLikeFields"][] = "nomor";
$tdatat_in_mail[".googleLikeFields"][] = "digit";
$tdatat_in_mail[".googleLikeFields"][] = "t_register_doc_user";
$tdatat_in_mail[".googleLikeFields"][] = "add_sign_user";
$tdatat_in_mail[".googleLikeFields"][] = "add_sign_date";
$tdatat_in_mail[".googleLikeFields"][] = "add_sign_fl";
$tdatat_in_mail[".googleLikeFields"][] = "last_user";
$tdatat_in_mail[".googleLikeFields"][] = "last_date";
$tdatat_in_mail[".googleLikeFields"][] = "sign";



$tdatat_in_mail[".tableType"] = "list";

$tdatat_in_mail[".printerPageOrientation"] = 0;
$tdatat_in_mail[".nPrinterPageScale"] = 100;

$tdatat_in_mail[".nPrinterSplitRecords"] = 40;

$tdatat_in_mail[".geocodingEnabled"] = false;




$tdatat_in_mail[".isDisplayLoading"] = true;






$tdatat_in_mail[".pageSize"] = 20;

$tdatat_in_mail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_in_mail[".strOrderBy"] = $tstrOrderBy;

$tdatat_in_mail[".orderindexes"] = array();


$tdatat_in_mail[".sqlHead"] = "SELECT t_register_id,  t_register_id_x,  t_register_no,  t_register_date,  t_register_source,  t_register_location_id,  t_register_transfer_fl,  t_register_transfer_location_id,  t_register_transfer_date,  t_register_transfer_courier,  t_register_doc_from,  t_register_doc_owner,  t_register_images,  t_register_note,  t_register_status,  add_user,  add_date,  edit_user,  edit_date,  nomor,  digit,  t_register_doc_user,  add_sign_user,  add_sign_date,  add_sign_fl,  last_user,  last_date, concat( t_register_no, ' ',add_sign_user, ' ', add_sign_date) as sign";
$tdatat_in_mail[".sqlFrom"] = "FROM t_register";
$tdatat_in_mail[".sqlWhereExpr"] = "(t_register_doc_user =':session.UserID') or (last_user =':session.UserID')";
$tdatat_in_mail[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatat_in_mail[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_in_mail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_in_mail[".arrGroupsPerPage"] = $arrGPP;

$tdatat_in_mail[".highlightSearchResults"] = true;

$tableKeyst_in_mail = array();
$tableKeyst_in_mail[] = "t_register_id";
$tdatat_in_mail[".Keys"] = $tableKeyst_in_mail;


$tdatat_in_mail[".hideMobileList"] = array();




//	t_register_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_register_id";
	$fdata["GoodName"] = "t_register_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_register_id";

		$fdata["sourceSingle"] = "t_register_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_id";

	
	
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


	$tdatat_in_mail["t_register_id"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_id";
//	t_register_id_x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_register_id_x";
	$fdata["GoodName"] = "t_register_id_x";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_id_x");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_id_x";

		$fdata["sourceSingle"] = "t_register_id_x";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_id_x";

	
	
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


	$tdatat_in_mail["t_register_id_x"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_id_x";
//	t_register_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_register_no";
	$fdata["GoodName"] = "t_register_no";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_no";

		$fdata["sourceSingle"] = "t_register_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_no";

	
	
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


	$tdatat_in_mail["t_register_no"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_no";
//	t_register_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_register_date";
	$fdata["GoodName"] = "t_register_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_register_date";

		$fdata["sourceSingle"] = "t_register_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_date";

	
	
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


	$tdatat_in_mail["t_register_date"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_date";
//	t_register_source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_register_source";
	$fdata["GoodName"] = "t_register_source";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_source");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_source";

		$fdata["sourceSingle"] = "t_register_source";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_source";

	
	
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


	$tdatat_in_mail["t_register_source"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_source";
//	t_register_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_register_location_id";
	$fdata["GoodName"] = "t_register_location_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_location_id";

		$fdata["sourceSingle"] = "t_register_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_location_id";

	
	
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
	$edata["LookupTable"] = "m_location_office";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_location_name";

	

	
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


	$tdatat_in_mail["t_register_location_id"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_location_id";
//	t_register_transfer_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_register_transfer_fl";
	$fdata["GoodName"] = "t_register_transfer_fl";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_transfer_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_transfer_fl";

		$fdata["sourceSingle"] = "t_register_transfer_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_transfer_fl";

	
	
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


	$tdatat_in_mail["t_register_transfer_fl"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_transfer_fl";
//	t_register_transfer_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_register_transfer_location_id";
	$fdata["GoodName"] = "t_register_transfer_location_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_transfer_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_transfer_location_id";

		$fdata["sourceSingle"] = "t_register_transfer_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_transfer_location_id";

	
	
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
	$edata["LookupTable"] = "m_location_office";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_location_name";

	

	
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


	$tdatat_in_mail["t_register_transfer_location_id"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_transfer_location_id";
//	t_register_transfer_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_register_transfer_date";
	$fdata["GoodName"] = "t_register_transfer_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_transfer_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_register_transfer_date";

		$fdata["sourceSingle"] = "t_register_transfer_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_transfer_date";

	
	
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


	$tdatat_in_mail["t_register_transfer_date"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_transfer_date";
//	t_register_transfer_courier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_register_transfer_courier";
	$fdata["GoodName"] = "t_register_transfer_courier";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_transfer_courier");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_transfer_courier";

		$fdata["sourceSingle"] = "t_register_transfer_courier";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_transfer_courier";

	
	
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


	$tdatat_in_mail["t_register_transfer_courier"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_transfer_courier";
//	t_register_doc_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_register_doc_from";
	$fdata["GoodName"] = "t_register_doc_from";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_doc_from");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_doc_from";

		$fdata["sourceSingle"] = "t_register_doc_from";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_doc_from";

	
	
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


	$tdatat_in_mail["t_register_doc_from"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_doc_from";
//	t_register_doc_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_register_doc_owner";
	$fdata["GoodName"] = "t_register_doc_owner";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_doc_owner");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_doc_owner";

		$fdata["sourceSingle"] = "t_register_doc_owner";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_doc_owner";

	
	
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
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "t_employee_nik";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "t_employee_name";

	

	
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


	$tdatat_in_mail["t_register_doc_owner"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_doc_owner";
//	t_register_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_register_images";
	$fdata["GoodName"] = "t_register_images";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_images");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_images";

		$fdata["sourceSingle"] = "t_register_images";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_images";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatat_in_mail["t_register_images"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_images";
//	t_register_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "t_register_note";
	$fdata["GoodName"] = "t_register_note";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_note");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_note";

		$fdata["sourceSingle"] = "t_register_note";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_note";

	
	
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


	$tdatat_in_mail["t_register_note"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_note";
//	t_register_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_register_status";
	$fdata["GoodName"] = "t_register_status";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_status";

		$fdata["sourceSingle"] = "t_register_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
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
	$edata["LookupTable"] = "m_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_status_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

				$edata["LookupWhere"] = "m_status_desc = 'outmail'";


	
	$edata["LookupOrderBy"] = "m_status_desc";

	
	
	
	

	
	
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


	$tdatat_in_mail["t_register_status"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","add_user");
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


	$tdatat_in_mail["add_user"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","add_date");
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


	$tdatat_in_mail["add_date"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","edit_user");
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


	$tdatat_in_mail["edit_user"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","edit_date");
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


	$tdatat_in_mail["edit_date"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "edit_date";
//	nomor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nomor";
	$fdata["GoodName"] = "nomor";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","nomor");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "nomor";

		$fdata["sourceSingle"] = "nomor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nomor";

	
	
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


	$tdatat_in_mail["nomor"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "nomor";
//	digit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "digit";
	$fdata["GoodName"] = "digit";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","digit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "digit";

		$fdata["sourceSingle"] = "digit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "digit";

	
	
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
			$edata["EditParams"].= " maxlength=4";

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


	$tdatat_in_mail["digit"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "digit";
//	t_register_doc_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "t_register_doc_user";
	$fdata["GoodName"] = "t_register_doc_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","t_register_doc_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_doc_user";

		$fdata["sourceSingle"] = "t_register_doc_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_doc_user";

	
	
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


	$tdatat_in_mail["t_register_doc_user"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "t_register_doc_user";
//	add_sign_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "add_sign_user";
	$fdata["GoodName"] = "add_sign_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","add_sign_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_sign_user";

		$fdata["sourceSingle"] = "add_sign_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_sign_user";

	
	
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


	$tdatat_in_mail["add_sign_user"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "add_sign_user";
//	add_sign_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "add_sign_date";
	$fdata["GoodName"] = "add_sign_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","add_sign_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_sign_date";

		$fdata["sourceSingle"] = "add_sign_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_sign_date";

	
	
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


	$tdatat_in_mail["add_sign_date"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "add_sign_date";
//	add_sign_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "add_sign_fl";
	$fdata["GoodName"] = "add_sign_fl";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","add_sign_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "add_sign_fl";

		$fdata["sourceSingle"] = "add_sign_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_sign_fl";

	
	
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


	$tdatat_in_mail["add_sign_fl"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "add_sign_fl";
//	last_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "last_user";
	$fdata["GoodName"] = "last_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","last_user");
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


	$tdatat_in_mail["last_user"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "last_user";
//	last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "last_date";
	$fdata["GoodName"] = "last_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_in_mail","last_date");
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


	$tdatat_in_mail["last_date"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "last_date";
//	sign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "sign";
	$fdata["GoodName"] = "sign";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_in_mail","sign");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat( t_register_no, ' ',add_sign_user, ' ', add_sign_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatat_in_mail["sign"] = $fdata;
		$tdatat_in_mail[".searchableFields"][] = "sign";


$tables_data["t_in_mail"]=&$tdatat_in_mail;
$field_labels["t_in_mail"] = &$fieldLabelst_in_mail;
$fieldToolTips["t_in_mail"] = &$fieldToolTipst_in_mail;
$placeHolders["t_in_mail"] = &$placeHolderst_in_mail;
$page_titles["t_in_mail"] = &$pageTitlest_in_mail;


changeTextControlsToDate( "t_in_mail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_in_mail"] = array();
//	m_disposition_register
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_disposition_register";
		$detailsParam["dOriginalTable"] = "m_disposition";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_disposition_register";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_disposition_register");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_in_mail"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_in_mail"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_in_mail"][$dIndex]["masterKeys"][]="t_register_id";

				$detailsTablesData["t_in_mail"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_in_mail"][$dIndex]["detailKeys"][]="t_disposition_no";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_in_mail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_in_mail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_register_id,  t_register_id_x,  t_register_no,  t_register_date,  t_register_source,  t_register_location_id,  t_register_transfer_fl,  t_register_transfer_location_id,  t_register_transfer_date,  t_register_transfer_courier,  t_register_doc_from,  t_register_doc_owner,  t_register_images,  t_register_note,  t_register_status,  add_user,  add_date,  edit_user,  edit_date,  nomor,  digit,  t_register_doc_user,  add_sign_user,  add_sign_date,  add_sign_fl,  last_user,  last_date, concat( t_register_no, ' ',add_sign_user, ' ', add_sign_date) as sign";
$proto0["m_strFrom"] = "FROM t_register";
$proto0["m_strWhere"] = "(t_register_doc_user =':session.UserID') or (last_user =':session.UserID')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(t_register_doc_user =':session.UserID') or (last_user =':session.UserID')";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(t_register_doc_user =':session.UserID') or (last_user =':session.UserID')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "t_register_doc_user =':session.UserID'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_register_doc_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=':session.UserID'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "last_user =':session.UserID'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=':session.UserID'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto10["m_sql"] = "t_register_id";
$proto10["m_srcTableName"] = "t_in_mail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_id_x",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto12["m_sql"] = "t_register_id_x";
$proto12["m_srcTableName"] = "t_in_mail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_no",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto14["m_sql"] = "t_register_no";
$proto14["m_srcTableName"] = "t_in_mail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto16["m_sql"] = "t_register_date";
$proto16["m_srcTableName"] = "t_in_mail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_source",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto18["m_sql"] = "t_register_source";
$proto18["m_srcTableName"] = "t_in_mail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_location_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto20["m_sql"] = "t_register_location_id";
$proto20["m_srcTableName"] = "t_in_mail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_fl",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto22["m_sql"] = "t_register_transfer_fl";
$proto22["m_srcTableName"] = "t_in_mail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_location_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto24["m_sql"] = "t_register_transfer_location_id";
$proto24["m_srcTableName"] = "t_in_mail";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto26["m_sql"] = "t_register_transfer_date";
$proto26["m_srcTableName"] = "t_in_mail";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_courier",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto28["m_sql"] = "t_register_transfer_courier";
$proto28["m_srcTableName"] = "t_in_mail";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_from",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto30["m_sql"] = "t_register_doc_from";
$proto30["m_srcTableName"] = "t_in_mail";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_owner",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto32["m_sql"] = "t_register_doc_owner";
$proto32["m_srcTableName"] = "t_in_mail";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_images",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto34["m_sql"] = "t_register_images";
$proto34["m_srcTableName"] = "t_in_mail";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_note",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto36["m_sql"] = "t_register_note";
$proto36["m_srcTableName"] = "t_in_mail";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_status",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto38["m_sql"] = "t_register_status";
$proto38["m_srcTableName"] = "t_in_mail";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto40["m_sql"] = "add_user";
$proto40["m_srcTableName"] = "t_in_mail";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto42["m_sql"] = "add_date";
$proto42["m_srcTableName"] = "t_in_mail";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto44["m_sql"] = "edit_user";
$proto44["m_srcTableName"] = "t_in_mail";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto46["m_sql"] = "edit_date";
$proto46["m_srcTableName"] = "t_in_mail";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto48["m_sql"] = "nomor";
$proto48["m_srcTableName"] = "t_in_mail";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "digit",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto50["m_sql"] = "digit";
$proto50["m_srcTableName"] = "t_in_mail";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto52["m_sql"] = "t_register_doc_user";
$proto52["m_srcTableName"] = "t_in_mail";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "add_sign_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto54["m_sql"] = "add_sign_user";
$proto54["m_srcTableName"] = "t_in_mail";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "add_sign_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto56["m_sql"] = "add_sign_date";
$proto56["m_srcTableName"] = "t_in_mail";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "add_sign_fl",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto58["m_sql"] = "add_sign_fl";
$proto58["m_srcTableName"] = "t_in_mail";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto60["m_sql"] = "last_user";
$proto60["m_srcTableName"] = "t_in_mail";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "last_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_in_mail"
));

$proto62["m_sql"] = "last_date";
$proto62["m_srcTableName"] = "t_in_mail";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$proto65=array();
$proto65["m_functiontype"] = "SQLF_CUSTOM";
$proto65["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_register_no"
));

$proto65["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto65["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "add_sign_user"
));

$proto65["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto65["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "add_sign_date"
));

$proto65["m_arguments"][]=$obj;
$proto65["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto65);

$proto64["m_sql"] = "concat( t_register_no, ' ',add_sign_user, ' ', add_sign_date)";
$proto64["m_srcTableName"] = "t_in_mail";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "sign";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto71=array();
$proto71["m_link"] = "SQLL_MAIN";
			$proto72=array();
$proto72["m_strName"] = "t_register";
$proto72["m_srcTableName"] = "t_in_mail";
$proto72["m_columns"] = array();
$proto72["m_columns"][] = "t_register_id";
$proto72["m_columns"][] = "t_register_id_x";
$proto72["m_columns"][] = "t_register_no";
$proto72["m_columns"][] = "t_register_date";
$proto72["m_columns"][] = "t_register_source";
$proto72["m_columns"][] = "t_register_location_id";
$proto72["m_columns"][] = "t_register_transfer_fl";
$proto72["m_columns"][] = "t_register_transfer_location_id";
$proto72["m_columns"][] = "t_register_transfer_date";
$proto72["m_columns"][] = "t_register_transfer_courier";
$proto72["m_columns"][] = "t_register_doc_from";
$proto72["m_columns"][] = "t_register_doc_owner";
$proto72["m_columns"][] = "t_register_doc_user";
$proto72["m_columns"][] = "t_register_images";
$proto72["m_columns"][] = "t_register_note";
$proto72["m_columns"][] = "t_register_status";
$proto72["m_columns"][] = "add_user";
$proto72["m_columns"][] = "add_date";
$proto72["m_columns"][] = "edit_user";
$proto72["m_columns"][] = "edit_date";
$proto72["m_columns"][] = "nomor";
$proto72["m_columns"][] = "digit";
$proto72["m_columns"][] = "add_sign_user";
$proto72["m_columns"][] = "add_sign_date";
$proto72["m_columns"][] = "add_sign_fl";
$proto72["m_columns"][] = "last_user";
$proto72["m_columns"][] = "last_date";
$proto72["m_columns"][] = "t_register_feedback_date";
$proto72["m_columns"][] = "t_register_feedback_time";
$proto72["m_columns"][] = "t_register_feedback_signature";
$proto72["m_columns"][] = "t_register_feedback_takephoto";
$obj = new SQLTable($proto72);

$proto71["m_table"] = $obj;
$proto71["m_sql"] = "t_register";
$proto71["m_alias"] = "";
$proto71["m_srcTableName"] = "t_in_mail";
$proto73=array();
$proto73["m_sql"] = "";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = "";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

$proto71["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto71);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_in_mail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_in_mail = createSqlQuery_t_in_mail();


	
				;

																												

$tdatat_in_mail[".sqlquery"] = $queryData_t_in_mail;



include_once(getabspath("include/t_in_mail_events.php"));
$tdatat_in_mail[".hasEvents"] = true;

?>