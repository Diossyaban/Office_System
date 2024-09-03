<?php
$tdatat_register = array();
$tdatat_register[".searchableFields"] = array();
$tdatat_register[".ShortName"] = "t_register";
$tdatat_register[".OwnerID"] = "";
$tdatat_register[".OriginalTable"] = "t_register";


$tdatat_register[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_register[".originalPagesByType"] = $tdatat_register[".pagesByType"];
$tdatat_register[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_register[".originalPages"] = $tdatat_register[".pages"];
$tdatat_register[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_register[".originalDefaultPages"] = $tdatat_register[".defaultPages"];

//	field labels
$fieldLabelst_register = array();
$fieldToolTipst_register = array();
$pageTitlest_register = array();
$placeHolderst_register = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_register["English"] = array();
	$fieldToolTipst_register["English"] = array();
	$placeHolderst_register["English"] = array();
	$pageTitlest_register["English"] = array();
	$fieldLabelst_register["English"]["t_register_id"] = "T Register Id";
	$fieldToolTipst_register["English"]["t_register_id"] = "";
	$placeHolderst_register["English"]["t_register_id"] = "";
	$fieldLabelst_register["English"]["t_register_id_x"] = "T Register Id X";
	$fieldToolTipst_register["English"]["t_register_id_x"] = "";
	$placeHolderst_register["English"]["t_register_id_x"] = "";
	$fieldLabelst_register["English"]["t_register_no"] = "Registration No";
	$fieldToolTipst_register["English"]["t_register_no"] = "";
	$placeHolderst_register["English"]["t_register_no"] = "";
	$fieldLabelst_register["English"]["t_register_date"] = "Date";
	$fieldToolTipst_register["English"]["t_register_date"] = "";
	$placeHolderst_register["English"]["t_register_date"] = "";
	$fieldLabelst_register["English"]["t_register_source"] = "Pickup";
	$fieldToolTipst_register["English"]["t_register_source"] = "";
	$placeHolderst_register["English"]["t_register_source"] = "";
	$fieldLabelst_register["English"]["t_register_location_id"] = "Location";
	$fieldToolTipst_register["English"]["t_register_location_id"] = "";
	$placeHolderst_register["English"]["t_register_location_id"] = "";
	$fieldLabelst_register["English"]["t_register_transfer_fl"] = "Transfer";
	$fieldToolTipst_register["English"]["t_register_transfer_fl"] = "";
	$placeHolderst_register["English"]["t_register_transfer_fl"] = "";
	$fieldLabelst_register["English"]["t_register_transfer_location_id"] = "Transfer Location";
	$fieldToolTipst_register["English"]["t_register_transfer_location_id"] = "";
	$placeHolderst_register["English"]["t_register_transfer_location_id"] = "";
	$fieldLabelst_register["English"]["t_register_transfer_date"] = "Transfer Date";
	$fieldToolTipst_register["English"]["t_register_transfer_date"] = "";
	$placeHolderst_register["English"]["t_register_transfer_date"] = "";
	$fieldLabelst_register["English"]["t_register_transfer_courier"] = "Transfer Courier";
	$fieldToolTipst_register["English"]["t_register_transfer_courier"] = "";
	$placeHolderst_register["English"]["t_register_transfer_courier"] = "";
	$fieldLabelst_register["English"]["t_register_doc_from"] = "Document From";
	$fieldToolTipst_register["English"]["t_register_doc_from"] = "";
	$placeHolderst_register["English"]["t_register_doc_from"] = "";
	$fieldLabelst_register["English"]["t_register_doc_owner"] = "Document To";
	$fieldToolTipst_register["English"]["t_register_doc_owner"] = "";
	$placeHolderst_register["English"]["t_register_doc_owner"] = "";
	$fieldLabelst_register["English"]["t_register_images"] = "Images";
	$fieldToolTipst_register["English"]["t_register_images"] = "";
	$placeHolderst_register["English"]["t_register_images"] = "";
	$fieldLabelst_register["English"]["t_register_note"] = "Note";
	$fieldToolTipst_register["English"]["t_register_note"] = "";
	$placeHolderst_register["English"]["t_register_note"] = "";
	$fieldLabelst_register["English"]["t_register_status"] = "Status";
	$fieldToolTipst_register["English"]["t_register_status"] = "";
	$placeHolderst_register["English"]["t_register_status"] = "";
	$fieldLabelst_register["English"]["add_user"] = "Add User";
	$fieldToolTipst_register["English"]["add_user"] = "";
	$placeHolderst_register["English"]["add_user"] = "";
	$fieldLabelst_register["English"]["add_date"] = "Add Date";
	$fieldToolTipst_register["English"]["add_date"] = "";
	$placeHolderst_register["English"]["add_date"] = "";
	$fieldLabelst_register["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_register["English"]["edit_user"] = "";
	$placeHolderst_register["English"]["edit_user"] = "";
	$fieldLabelst_register["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_register["English"]["edit_date"] = "";
	$placeHolderst_register["English"]["edit_date"] = "";
	$fieldLabelst_register["English"]["nomor"] = "Nomor";
	$fieldToolTipst_register["English"]["nomor"] = "";
	$placeHolderst_register["English"]["nomor"] = "";
	$fieldLabelst_register["English"]["digit"] = "Digit";
	$fieldToolTipst_register["English"]["digit"] = "";
	$placeHolderst_register["English"]["digit"] = "";
	$fieldLabelst_register["English"]["sign"] = "Sign";
	$fieldToolTipst_register["English"]["sign"] = "";
	$placeHolderst_register["English"]["sign"] = "";
	$fieldLabelst_register["English"]["add_sign_user"] = "Add Sign User";
	$fieldToolTipst_register["English"]["add_sign_user"] = "";
	$placeHolderst_register["English"]["add_sign_user"] = "";
	if (count($fieldToolTipst_register["English"]))
		$tdatat_register[".isUseToolTips"] = true;
}


	$tdatat_register[".NCSearch"] = true;



$tdatat_register[".shortTableName"] = "t_register";
$tdatat_register[".nSecOptions"] = 0;

$tdatat_register[".mainTableOwnerID"] = "";
$tdatat_register[".entityType"] = 0;
$tdatat_register[".connId"] = "u736239518tsundbat154412412";


$tdatat_register[".strOriginalTableName"] = "t_register";

	



$tdatat_register[".showAddInPopup"] = false;

$tdatat_register[".showEditInPopup"] = false;

$tdatat_register[".showViewInPopup"] = false;

$tdatat_register[".listAjax"] = false;
//	temporary
//$tdatat_register[".listAjax"] = false;

	$tdatat_register[".audit"] = false;

	$tdatat_register[".locking"] = false;


$pages = $tdatat_register[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_register[".edit"] = true;
	$tdatat_register[".afterEditAction"] = 1;
	$tdatat_register[".closePopupAfterEdit"] = 1;
	$tdatat_register[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_register[".add"] = true;
$tdatat_register[".afterAddAction"] = 1;
$tdatat_register[".closePopupAfterAdd"] = 1;
$tdatat_register[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_register[".list"] = true;
}



$tdatat_register[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_register[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_register[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_register[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_register[".printFriendly"] = true;
}



$tdatat_register[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_register[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_register[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_register[".isUseAjaxSuggest"] = true;



																	
																																			

$tdatat_register[".ajaxCodeSnippetAdded"] = false;

$tdatat_register[".buttonsAdded"] = true;

$tdatat_register[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_register[".isUseTimeForSearch"] = false;


$tdatat_register[".badgeColor"] = "CFAE83";


$tdatat_register[".allSearchFields"] = array();
$tdatat_register[".filterFields"] = array();
$tdatat_register[".requiredSearchFields"] = array();

$tdatat_register[".googleLikeFields"] = array();
$tdatat_register[".googleLikeFields"][] = "t_register_id";
$tdatat_register[".googleLikeFields"][] = "t_register_id_x";
$tdatat_register[".googleLikeFields"][] = "t_register_no";
$tdatat_register[".googleLikeFields"][] = "t_register_date";
$tdatat_register[".googleLikeFields"][] = "t_register_source";
$tdatat_register[".googleLikeFields"][] = "t_register_location_id";
$tdatat_register[".googleLikeFields"][] = "t_register_transfer_fl";
$tdatat_register[".googleLikeFields"][] = "t_register_transfer_location_id";
$tdatat_register[".googleLikeFields"][] = "t_register_transfer_date";
$tdatat_register[".googleLikeFields"][] = "t_register_transfer_courier";
$tdatat_register[".googleLikeFields"][] = "t_register_doc_from";
$tdatat_register[".googleLikeFields"][] = "t_register_doc_owner";
$tdatat_register[".googleLikeFields"][] = "t_register_images";
$tdatat_register[".googleLikeFields"][] = "t_register_note";
$tdatat_register[".googleLikeFields"][] = "t_register_status";
$tdatat_register[".googleLikeFields"][] = "add_user";
$tdatat_register[".googleLikeFields"][] = "add_date";
$tdatat_register[".googleLikeFields"][] = "edit_user";
$tdatat_register[".googleLikeFields"][] = "edit_date";
$tdatat_register[".googleLikeFields"][] = "nomor";
$tdatat_register[".googleLikeFields"][] = "digit";
$tdatat_register[".googleLikeFields"][] = "sign";
$tdatat_register[".googleLikeFields"][] = "add_sign_user";



$tdatat_register[".tableType"] = "list";

$tdatat_register[".printerPageOrientation"] = 0;
$tdatat_register[".nPrinterPageScale"] = 100;

$tdatat_register[".nPrinterSplitRecords"] = 40;

$tdatat_register[".geocodingEnabled"] = false;










$tdatat_register[".pageSize"] = 20;

$tdatat_register[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_register[".strOrderBy"] = $tstrOrderBy;

$tdatat_register[".orderindexes"] = array();


$tdatat_register[".sqlHead"] = "SELECT t_register_id,  t_register_id_x,  t_register_no,  t_register_date,  t_register_source,  t_register_location_id,  t_register_transfer_fl,  t_register_transfer_location_id,  t_register_transfer_date,  t_register_transfer_courier,  t_register_doc_from,  t_register_doc_owner,  t_register_images,  t_register_note,  t_register_status,  add_user,  add_date,  edit_user,  edit_date,  nomor,  digit,  concat(t_register_no, ' ', add_sign_user, ' ', add_sign_date) AS sign,  add_sign_user";
$tdatat_register[".sqlFrom"] = "FROM t_register";
$tdatat_register[".sqlWhereExpr"] = "(t_register_location_id in (select location_id from t_register_mapping where username = ':session.UserID'))";
$tdatat_register[".sqlTail"] = "";

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
$tdatat_register[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_register[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_register[".arrGroupsPerPage"] = $arrGPP;

$tdatat_register[".highlightSearchResults"] = true;

$tableKeyst_register = array();
$tableKeyst_register[] = "t_register_id";
$tdatat_register[".Keys"] = $tableKeyst_register;


$tdatat_register[".hideMobileList"] = array();




//	t_register_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_register_id";
	$fdata["GoodName"] = "t_register_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_id");
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


	$tdatat_register["t_register_id"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_id";
//	t_register_id_x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_register_id_x";
	$fdata["GoodName"] = "t_register_id_x";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_id_x");
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


	$tdatat_register["t_register_id_x"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_id_x";
//	t_register_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_register_no";
	$fdata["GoodName"] = "t_register_no";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_no");
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


	$tdatat_register["t_register_no"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_no";
//	t_register_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_register_date";
	$fdata["GoodName"] = "t_register_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_date");
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


	$tdatat_register["t_register_date"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_date";
//	t_register_source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_register_source";
	$fdata["GoodName"] = "t_register_source";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_source");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Messenger";
	$edata["LookupValues"][] = "Driver";
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


	$tdatat_register["t_register_source"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_source";
//	t_register_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_register_location_id";
	$fdata["GoodName"] = "t_register_location_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_location_id");
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
	$edata["LookupTable"] = "v_location_registration";
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


	$tdatat_register["t_register_location_id"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_location_id";
//	t_register_transfer_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_register_transfer_fl";
	$fdata["GoodName"] = "t_register_transfer_fl";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_transfer_fl");
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "t_register_transfer_fl_event", "type" => "click" );
	$edata["fieldEvents"] = $eventsData;




	
	
	
	
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


	$tdatat_register["t_register_transfer_fl"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_transfer_fl";
//	t_register_transfer_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_register_transfer_location_id";
	$fdata["GoodName"] = "t_register_transfer_location_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_transfer_location_id");
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


	$tdatat_register["t_register_transfer_location_id"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_transfer_location_id";
//	t_register_transfer_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_register_transfer_date";
	$fdata["GoodName"] = "t_register_transfer_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_transfer_date");
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


	$tdatat_register["t_register_transfer_date"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_transfer_date";
//	t_register_transfer_courier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_register_transfer_courier";
	$fdata["GoodName"] = "t_register_transfer_courier";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_transfer_courier");
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


	$tdatat_register["t_register_transfer_courier"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_transfer_courier";
//	t_register_doc_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_register_doc_from";
	$fdata["GoodName"] = "t_register_doc_from";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_doc_from");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatat_register["t_register_doc_from"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_doc_from";
//	t_register_doc_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_register_doc_owner";
	$fdata["GoodName"] = "t_register_doc_owner";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_doc_owner");
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
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "t_employee_nik";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "t_employee_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatat_register["t_register_doc_owner"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_doc_owner";
//	t_register_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_register_images";
	$fdata["GoodName"] = "t_register_images";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_images");
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

	
	
				$vdata["ImageWidth"] = 300;
	$vdata["ImageHeight"] = 100;

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


	$tdatat_register["t_register_images"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_images";
//	t_register_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "t_register_note";
	$fdata["GoodName"] = "t_register_note";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_note");
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


	$tdatat_register["t_register_note"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_note";
//	t_register_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_register_status";
	$fdata["GoodName"] = "t_register_status";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","t_register_status");
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


	$tdatat_register["t_register_status"] = $fdata;
		$tdatat_register[".searchableFields"][] = "t_register_status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","add_user");
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


	$tdatat_register["add_user"] = $fdata;
		$tdatat_register[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","add_date");
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


	$tdatat_register["add_date"] = $fdata;
		$tdatat_register[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","edit_user");
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


	$tdatat_register["edit_user"] = $fdata;
		$tdatat_register[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","edit_date");
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


	$tdatat_register["edit_date"] = $fdata;
		$tdatat_register[".searchableFields"][] = "edit_date";
//	nomor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "nomor";
	$fdata["GoodName"] = "nomor";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","nomor");
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


	$tdatat_register["nomor"] = $fdata;
		$tdatat_register[".searchableFields"][] = "nomor";
//	digit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "digit";
	$fdata["GoodName"] = "digit";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","digit");
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


	$tdatat_register["digit"] = $fdata;
		$tdatat_register[".searchableFields"][] = "digit";
//	sign
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sign";
	$fdata["GoodName"] = "sign";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_register","sign");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sign";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "concat(t_register_no, ' ', add_sign_user, ' ', add_sign_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "QRCode");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatat_register["sign"] = $fdata;
		$tdatat_register[".searchableFields"][] = "sign";
//	add_sign_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "add_sign_user";
	$fdata["GoodName"] = "add_sign_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register","add_sign_user");
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


	$tdatat_register["add_sign_user"] = $fdata;
		$tdatat_register[".searchableFields"][] = "add_sign_user";


$tables_data["t_register"]=&$tdatat_register;
$field_labels["t_register"] = &$fieldLabelst_register;
$fieldToolTips["t_register"] = &$fieldToolTipst_register;
$placeHolders["t_register"] = &$placeHolderst_register;
$page_titles["t_register"] = &$pageTitlest_register;


changeTextControlsToDate( "t_register" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_register"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_register"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_register()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_register_id,  t_register_id_x,  t_register_no,  t_register_date,  t_register_source,  t_register_location_id,  t_register_transfer_fl,  t_register_transfer_location_id,  t_register_transfer_date,  t_register_transfer_courier,  t_register_doc_from,  t_register_doc_owner,  t_register_images,  t_register_note,  t_register_status,  add_user,  add_date,  edit_user,  edit_date,  nomor,  digit,  concat(t_register_no, ' ', add_sign_user, ' ', add_sign_date) AS sign,  add_sign_user";
$proto0["m_strFrom"] = "FROM t_register";
$proto0["m_strWhere"] = "(t_register_location_id in (select location_id from t_register_mapping where username = ':session.UserID'))";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_register_location_id in (select location_id from t_register_mapping where username = ':session.UserID')";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_register_location_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "in (select location_id from t_register_mapping where username = ':session.UserID')";
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
	"m_strName" => "t_register_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto6["m_sql"] = "t_register_id";
$proto6["m_srcTableName"] = "t_register";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_id_x",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto8["m_sql"] = "t_register_id_x";
$proto8["m_srcTableName"] = "t_register";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_no",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto10["m_sql"] = "t_register_no";
$proto10["m_srcTableName"] = "t_register";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto12["m_sql"] = "t_register_date";
$proto12["m_srcTableName"] = "t_register";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_source",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto14["m_sql"] = "t_register_source";
$proto14["m_srcTableName"] = "t_register";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_location_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto16["m_sql"] = "t_register_location_id";
$proto16["m_srcTableName"] = "t_register";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_fl",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto18["m_sql"] = "t_register_transfer_fl";
$proto18["m_srcTableName"] = "t_register";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_location_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto20["m_sql"] = "t_register_transfer_location_id";
$proto20["m_srcTableName"] = "t_register";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto22["m_sql"] = "t_register_transfer_date";
$proto22["m_srcTableName"] = "t_register";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_courier",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto24["m_sql"] = "t_register_transfer_courier";
$proto24["m_srcTableName"] = "t_register";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_from",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto26["m_sql"] = "t_register_doc_from";
$proto26["m_srcTableName"] = "t_register";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_owner",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto28["m_sql"] = "t_register_doc_owner";
$proto28["m_srcTableName"] = "t_register";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_images",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto30["m_sql"] = "t_register_images";
$proto30["m_srcTableName"] = "t_register";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_note",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto32["m_sql"] = "t_register_note";
$proto32["m_srcTableName"] = "t_register";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_status",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto34["m_sql"] = "t_register_status";
$proto34["m_srcTableName"] = "t_register";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto36["m_sql"] = "add_user";
$proto36["m_srcTableName"] = "t_register";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto38["m_sql"] = "add_date";
$proto38["m_srcTableName"] = "t_register";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto40["m_sql"] = "edit_user";
$proto40["m_srcTableName"] = "t_register";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto42["m_sql"] = "edit_date";
$proto42["m_srcTableName"] = "t_register";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto44["m_sql"] = "nomor";
$proto44["m_srcTableName"] = "t_register";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "digit",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto46["m_sql"] = "digit";
$proto46["m_srcTableName"] = "t_register";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$proto49=array();
$proto49["m_functiontype"] = "SQLF_CUSTOM";
$proto49["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_register_no"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "add_sign_user"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "' '"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "add_sign_date"
));

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "concat";
$obj = new SQLFunctionCall($proto49);

$proto48["m_sql"] = "concat(t_register_no, ' ', add_sign_user, ' ', add_sign_date)";
$proto48["m_srcTableName"] = "t_register";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "sign";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "add_sign_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register"
));

$proto55["m_sql"] = "add_sign_user";
$proto55["m_srcTableName"] = "t_register";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "t_register";
$proto58["m_srcTableName"] = "t_register";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "t_register_id";
$proto58["m_columns"][] = "t_register_id_x";
$proto58["m_columns"][] = "t_register_no";
$proto58["m_columns"][] = "t_register_date";
$proto58["m_columns"][] = "t_register_source";
$proto58["m_columns"][] = "t_register_location_id";
$proto58["m_columns"][] = "t_register_transfer_fl";
$proto58["m_columns"][] = "t_register_transfer_location_id";
$proto58["m_columns"][] = "t_register_transfer_date";
$proto58["m_columns"][] = "t_register_transfer_courier";
$proto58["m_columns"][] = "t_register_doc_from";
$proto58["m_columns"][] = "t_register_doc_owner";
$proto58["m_columns"][] = "t_register_doc_user";
$proto58["m_columns"][] = "t_register_images";
$proto58["m_columns"][] = "t_register_note";
$proto58["m_columns"][] = "t_register_status";
$proto58["m_columns"][] = "add_user";
$proto58["m_columns"][] = "add_date";
$proto58["m_columns"][] = "edit_user";
$proto58["m_columns"][] = "edit_date";
$proto58["m_columns"][] = "nomor";
$proto58["m_columns"][] = "digit";
$proto58["m_columns"][] = "add_sign_user";
$proto58["m_columns"][] = "add_sign_date";
$proto58["m_columns"][] = "add_sign_fl";
$proto58["m_columns"][] = "last_user";
$proto58["m_columns"][] = "last_date";
$proto58["m_columns"][] = "t_register_feedback_date";
$proto58["m_columns"][] = "t_register_feedback_time";
$proto58["m_columns"][] = "t_register_feedback_signature";
$proto58["m_columns"][] = "t_register_feedback_takephoto";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "t_register";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "t_register";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_register";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_register = createSqlQuery_t_register();


	
				;

																							

$tdatat_register[".sqlquery"] = $queryData_t_register;



include_once(getabspath("include/t_register_events.php"));
$tdatat_register[".hasEvents"] = true;

?>