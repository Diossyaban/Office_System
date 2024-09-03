<?php
$tdatat_register_view = array();
$tdatat_register_view[".searchableFields"] = array();
$tdatat_register_view[".ShortName"] = "t_register_view";
$tdatat_register_view[".OwnerID"] = "";
$tdatat_register_view[".OriginalTable"] = "t_register";


$tdatat_register_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_register_view[".originalPagesByType"] = $tdatat_register_view[".pagesByType"];
$tdatat_register_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_register_view[".originalPages"] = $tdatat_register_view[".pages"];
$tdatat_register_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_register_view[".originalDefaultPages"] = $tdatat_register_view[".defaultPages"];

//	field labels
$fieldLabelst_register_view = array();
$fieldToolTipst_register_view = array();
$pageTitlest_register_view = array();
$placeHolderst_register_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_register_view["English"] = array();
	$fieldToolTipst_register_view["English"] = array();
	$placeHolderst_register_view["English"] = array();
	$pageTitlest_register_view["English"] = array();
	$fieldLabelst_register_view["English"]["t_register_id"] = "T Register Id";
	$fieldToolTipst_register_view["English"]["t_register_id"] = "";
	$placeHolderst_register_view["English"]["t_register_id"] = "";
	$fieldLabelst_register_view["English"]["t_register_id_x"] = "T Register Id X";
	$fieldToolTipst_register_view["English"]["t_register_id_x"] = "";
	$placeHolderst_register_view["English"]["t_register_id_x"] = "";
	$fieldLabelst_register_view["English"]["t_register_no"] = "In Mail No.";
	$fieldToolTipst_register_view["English"]["t_register_no"] = "";
	$placeHolderst_register_view["English"]["t_register_no"] = "";
	$fieldLabelst_register_view["English"]["t_register_date"] = "Date";
	$fieldToolTipst_register_view["English"]["t_register_date"] = "";
	$placeHolderst_register_view["English"]["t_register_date"] = "";
	$fieldLabelst_register_view["English"]["t_register_source"] = "T Register Source";
	$fieldToolTipst_register_view["English"]["t_register_source"] = "";
	$placeHolderst_register_view["English"]["t_register_source"] = "";
	$fieldLabelst_register_view["English"]["t_register_location_id"] = "T Register Location Id";
	$fieldToolTipst_register_view["English"]["t_register_location_id"] = "";
	$placeHolderst_register_view["English"]["t_register_location_id"] = "";
	$fieldLabelst_register_view["English"]["t_register_transfer_fl"] = "T Register Transfer Fl";
	$fieldToolTipst_register_view["English"]["t_register_transfer_fl"] = "";
	$placeHolderst_register_view["English"]["t_register_transfer_fl"] = "";
	$fieldLabelst_register_view["English"]["t_register_transfer_location_id"] = "T Register Transfer Location Id";
	$fieldToolTipst_register_view["English"]["t_register_transfer_location_id"] = "";
	$placeHolderst_register_view["English"]["t_register_transfer_location_id"] = "";
	$fieldLabelst_register_view["English"]["t_register_transfer_date"] = "T Register Transfer Date";
	$fieldToolTipst_register_view["English"]["t_register_transfer_date"] = "";
	$placeHolderst_register_view["English"]["t_register_transfer_date"] = "";
	$fieldLabelst_register_view["English"]["t_register_transfer_courier"] = "T Register Transfer Courier";
	$fieldToolTipst_register_view["English"]["t_register_transfer_courier"] = "";
	$placeHolderst_register_view["English"]["t_register_transfer_courier"] = "";
	$fieldLabelst_register_view["English"]["t_register_doc_from"] = "T Register Doc From";
	$fieldToolTipst_register_view["English"]["t_register_doc_from"] = "";
	$placeHolderst_register_view["English"]["t_register_doc_from"] = "";
	$fieldLabelst_register_view["English"]["t_register_doc_owner"] = "T Register Doc Owner";
	$fieldToolTipst_register_view["English"]["t_register_doc_owner"] = "";
	$placeHolderst_register_view["English"]["t_register_doc_owner"] = "";
	$fieldLabelst_register_view["English"]["t_register_images"] = "T Register Images";
	$fieldToolTipst_register_view["English"]["t_register_images"] = "";
	$placeHolderst_register_view["English"]["t_register_images"] = "";
	$fieldLabelst_register_view["English"]["t_register_note"] = "T Register Note";
	$fieldToolTipst_register_view["English"]["t_register_note"] = "";
	$placeHolderst_register_view["English"]["t_register_note"] = "";
	$fieldLabelst_register_view["English"]["t_register_status"] = "T Register Status";
	$fieldToolTipst_register_view["English"]["t_register_status"] = "";
	$placeHolderst_register_view["English"]["t_register_status"] = "";
	$fieldLabelst_register_view["English"]["add_user"] = "Add User";
	$fieldToolTipst_register_view["English"]["add_user"] = "";
	$placeHolderst_register_view["English"]["add_user"] = "";
	$fieldLabelst_register_view["English"]["add_date"] = "Add Date";
	$fieldToolTipst_register_view["English"]["add_date"] = "";
	$placeHolderst_register_view["English"]["add_date"] = "";
	$fieldLabelst_register_view["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_register_view["English"]["edit_user"] = "";
	$placeHolderst_register_view["English"]["edit_user"] = "";
	$fieldLabelst_register_view["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_register_view["English"]["edit_date"] = "";
	$placeHolderst_register_view["English"]["edit_date"] = "";
	$fieldLabelst_register_view["English"]["nomor"] = "Nomor";
	$fieldToolTipst_register_view["English"]["nomor"] = "";
	$placeHolderst_register_view["English"]["nomor"] = "";
	$fieldLabelst_register_view["English"]["digit"] = "Digit";
	$fieldToolTipst_register_view["English"]["digit"] = "";
	$placeHolderst_register_view["English"]["digit"] = "";
	$fieldLabelst_register_view["English"]["t_register_doc_user"] = "T Register Doc User";
	$fieldToolTipst_register_view["English"]["t_register_doc_user"] = "";
	$placeHolderst_register_view["English"]["t_register_doc_user"] = "";
	$fieldLabelst_register_view["English"]["add_sign_user"] = "Add Sign User";
	$fieldToolTipst_register_view["English"]["add_sign_user"] = "";
	$placeHolderst_register_view["English"]["add_sign_user"] = "";
	$fieldLabelst_register_view["English"]["add_sign_date"] = "Add Sign Date";
	$fieldToolTipst_register_view["English"]["add_sign_date"] = "";
	$placeHolderst_register_view["English"]["add_sign_date"] = "";
	$fieldLabelst_register_view["English"]["add_sign_fl"] = "Add Sign Fl";
	$fieldToolTipst_register_view["English"]["add_sign_fl"] = "";
	$placeHolderst_register_view["English"]["add_sign_fl"] = "";
	$fieldLabelst_register_view["English"]["last_user"] = "Last User";
	$fieldToolTipst_register_view["English"]["last_user"] = "";
	$placeHolderst_register_view["English"]["last_user"] = "";
	$fieldLabelst_register_view["English"]["last_date"] = "Last Date";
	$fieldToolTipst_register_view["English"]["last_date"] = "";
	$placeHolderst_register_view["English"]["last_date"] = "";
	$fieldLabelst_register_view["English"]["t_register_feedback_date"] = "T Register Feedback Date";
	$fieldToolTipst_register_view["English"]["t_register_feedback_date"] = "";
	$placeHolderst_register_view["English"]["t_register_feedback_date"] = "";
	$fieldLabelst_register_view["English"]["t_register_feedback_time"] = "T Register Feedback Time";
	$fieldToolTipst_register_view["English"]["t_register_feedback_time"] = "";
	$placeHolderst_register_view["English"]["t_register_feedback_time"] = "";
	$fieldLabelst_register_view["English"]["t_register_feedback_signature"] = "T Register Feedback Signature";
	$fieldToolTipst_register_view["English"]["t_register_feedback_signature"] = "";
	$placeHolderst_register_view["English"]["t_register_feedback_signature"] = "";
	$fieldLabelst_register_view["English"]["t_register_feedback_takephoto"] = "T Register Feedback Takephoto";
	$fieldToolTipst_register_view["English"]["t_register_feedback_takephoto"] = "";
	$placeHolderst_register_view["English"]["t_register_feedback_takephoto"] = "";
	if (count($fieldToolTipst_register_view["English"]))
		$tdatat_register_view[".isUseToolTips"] = true;
}


	$tdatat_register_view[".NCSearch"] = true;



$tdatat_register_view[".shortTableName"] = "t_register_view";
$tdatat_register_view[".nSecOptions"] = 0;

$tdatat_register_view[".mainTableOwnerID"] = "";
$tdatat_register_view[".entityType"] = 1;
$tdatat_register_view[".connId"] = "u736239518tsundbat154412412";


$tdatat_register_view[".strOriginalTableName"] = "t_register";

	



$tdatat_register_view[".showAddInPopup"] = false;

$tdatat_register_view[".showEditInPopup"] = false;

$tdatat_register_view[".showViewInPopup"] = false;

$tdatat_register_view[".listAjax"] = false;
//	temporary
//$tdatat_register_view[".listAjax"] = false;

	$tdatat_register_view[".audit"] = false;

	$tdatat_register_view[".locking"] = false;


$pages = $tdatat_register_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_register_view[".edit"] = true;
	$tdatat_register_view[".afterEditAction"] = 1;
	$tdatat_register_view[".closePopupAfterEdit"] = 1;
	$tdatat_register_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_register_view[".add"] = true;
$tdatat_register_view[".afterAddAction"] = 1;
$tdatat_register_view[".closePopupAfterAdd"] = 1;
$tdatat_register_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_register_view[".list"] = true;
}



$tdatat_register_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_register_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_register_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_register_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_register_view[".printFriendly"] = true;
}



$tdatat_register_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_register_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_register_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_register_view[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_register_view[".ajaxCodeSnippetAdded"] = false;

$tdatat_register_view[".buttonsAdded"] = false;

$tdatat_register_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_register_view[".isUseTimeForSearch"] = false;


$tdatat_register_view[".badgeColor"] = "CD5C5C";


$tdatat_register_view[".allSearchFields"] = array();
$tdatat_register_view[".filterFields"] = array();
$tdatat_register_view[".requiredSearchFields"] = array();

$tdatat_register_view[".googleLikeFields"] = array();
$tdatat_register_view[".googleLikeFields"][] = "t_register_doc_user";
$tdatat_register_view[".googleLikeFields"][] = "add_sign_user";
$tdatat_register_view[".googleLikeFields"][] = "add_sign_date";
$tdatat_register_view[".googleLikeFields"][] = "add_sign_fl";
$tdatat_register_view[".googleLikeFields"][] = "last_user";
$tdatat_register_view[".googleLikeFields"][] = "last_date";
$tdatat_register_view[".googleLikeFields"][] = "t_register_feedback_date";
$tdatat_register_view[".googleLikeFields"][] = "t_register_feedback_time";
$tdatat_register_view[".googleLikeFields"][] = "t_register_feedback_signature";
$tdatat_register_view[".googleLikeFields"][] = "t_register_feedback_takephoto";



$tdatat_register_view[".tableType"] = "list";

$tdatat_register_view[".printerPageOrientation"] = 0;
$tdatat_register_view[".nPrinterPageScale"] = 100;

$tdatat_register_view[".nPrinterSplitRecords"] = 40;

$tdatat_register_view[".geocodingEnabled"] = false;










$tdatat_register_view[".pageSize"] = 20;

$tdatat_register_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_register_view[".strOrderBy"] = $tstrOrderBy;

$tdatat_register_view[".orderindexes"] = array();


$tdatat_register_view[".sqlHead"] = "SELECT t_register_id,  	t_register_id_x,  	t_register_no,  	t_register_date,  	t_register_source,  	t_register_location_id,  	t_register_transfer_fl,  	t_register_transfer_location_id,  	t_register_transfer_date,  	t_register_transfer_courier,  	t_register_doc_from,  	t_register_doc_owner,  	t_register_doc_user,  	t_register_images,  	t_register_note,  	t_register_status,  	add_user,  	add_date,  	edit_user,  	edit_date,  	nomor,  	digit,  	add_sign_user,  	add_sign_date,  	add_sign_fl,  	last_user,  	last_date,  	t_register_feedback_date,  	t_register_feedback_time,  	t_register_feedback_signature,  	t_register_feedback_takephoto";
$tdatat_register_view[".sqlFrom"] = "FROM t_register";
$tdatat_register_view[".sqlWhereExpr"] = "";
$tdatat_register_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_register_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_register_view[".arrGroupsPerPage"] = $arrGPP;

$tdatat_register_view[".highlightSearchResults"] = true;

$tableKeyst_register_view = array();
$tableKeyst_register_view[] = "t_register_id";
$tdatat_register_view[".Keys"] = $tableKeyst_register_view;


$tdatat_register_view[".hideMobileList"] = array();




//	t_register_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_register_id";
	$fdata["GoodName"] = "t_register_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_id");
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


	$tdatat_register_view["t_register_id"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_id";
//	t_register_id_x
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_register_id_x";
	$fdata["GoodName"] = "t_register_id_x";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_id_x");
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


	$tdatat_register_view["t_register_id_x"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_id_x";
//	t_register_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_register_no";
	$fdata["GoodName"] = "t_register_no";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_no");
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
		$fdata["defaultSearchOption"] = "Equals";

			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "t_register_id";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatat_register_view["t_register_no"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_no";
//	t_register_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_register_date";
	$fdata["GoodName"] = "t_register_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_date");
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


	$tdatat_register_view["t_register_date"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_date";
//	t_register_source
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_register_source";
	$fdata["GoodName"] = "t_register_source";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_source");
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


	$tdatat_register_view["t_register_source"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_source";
//	t_register_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_register_location_id";
	$fdata["GoodName"] = "t_register_location_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_location_id");
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


	$tdatat_register_view["t_register_location_id"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_location_id";
//	t_register_transfer_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_register_transfer_fl";
	$fdata["GoodName"] = "t_register_transfer_fl";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_transfer_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_transfer_fl";

		$fdata["sourceSingle"] = "t_register_transfer_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_transfer_fl";

	
	
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


	$tdatat_register_view["t_register_transfer_fl"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_transfer_fl";
//	t_register_transfer_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_register_transfer_location_id";
	$fdata["GoodName"] = "t_register_transfer_location_id";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_transfer_location_id");
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


	$tdatat_register_view["t_register_transfer_location_id"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_transfer_location_id";
//	t_register_transfer_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_register_transfer_date";
	$fdata["GoodName"] = "t_register_transfer_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_transfer_date");
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


	$tdatat_register_view["t_register_transfer_date"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_transfer_date";
//	t_register_transfer_courier
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "t_register_transfer_courier";
	$fdata["GoodName"] = "t_register_transfer_courier";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_transfer_courier");
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


	$tdatat_register_view["t_register_transfer_courier"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_transfer_courier";
//	t_register_doc_from
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_register_doc_from";
	$fdata["GoodName"] = "t_register_doc_from";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_doc_from");
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


	$tdatat_register_view["t_register_doc_from"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_doc_from";
//	t_register_doc_owner
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_register_doc_owner";
	$fdata["GoodName"] = "t_register_doc_owner";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_doc_owner");
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


	$tdatat_register_view["t_register_doc_owner"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_doc_owner";
//	t_register_doc_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_register_doc_user";
	$fdata["GoodName"] = "t_register_doc_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_doc_user");
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


	$tdatat_register_view["t_register_doc_user"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_doc_user";
//	t_register_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "t_register_images";
	$fdata["GoodName"] = "t_register_images";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_images");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_images";

		$fdata["sourceSingle"] = "t_register_images";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_images";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatat_register_view["t_register_images"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_images";
//	t_register_note
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_register_note";
	$fdata["GoodName"] = "t_register_note";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_note");
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


	$tdatat_register_view["t_register_note"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_note";
//	t_register_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "t_register_status";
	$fdata["GoodName"] = "t_register_status";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_status";

		$fdata["sourceSingle"] = "t_register_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_status";

	
	
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


	$tdatat_register_view["t_register_status"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","add_user");
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


	$tdatat_register_view["add_user"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","add_date");
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


	$tdatat_register_view["add_date"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","edit_user");
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


	$tdatat_register_view["edit_user"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","edit_date");
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


	$tdatat_register_view["edit_date"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "edit_date";
//	nomor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "nomor";
	$fdata["GoodName"] = "nomor";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","nomor");
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


	$tdatat_register_view["nomor"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "nomor";
//	digit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "digit";
	$fdata["GoodName"] = "digit";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","digit");
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


	$tdatat_register_view["digit"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "digit";
//	add_sign_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "add_sign_user";
	$fdata["GoodName"] = "add_sign_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","add_sign_user");
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


	$tdatat_register_view["add_sign_user"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "add_sign_user";
//	add_sign_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "add_sign_date";
	$fdata["GoodName"] = "add_sign_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","add_sign_date");
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


	$tdatat_register_view["add_sign_date"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "add_sign_date";
//	add_sign_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "add_sign_fl";
	$fdata["GoodName"] = "add_sign_fl";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","add_sign_fl");
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


	$tdatat_register_view["add_sign_fl"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "add_sign_fl";
//	last_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "last_user";
	$fdata["GoodName"] = "last_user";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","last_user");
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


	$tdatat_register_view["last_user"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "last_user";
//	last_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "last_date";
	$fdata["GoodName"] = "last_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","last_date");
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


	$tdatat_register_view["last_date"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "last_date";
//	t_register_feedback_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "t_register_feedback_date";
	$fdata["GoodName"] = "t_register_feedback_date";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_feedback_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_register_feedback_date";

		$fdata["sourceSingle"] = "t_register_feedback_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_feedback_date";

	
	
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


	$tdatat_register_view["t_register_feedback_date"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_feedback_date";
//	t_register_feedback_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "t_register_feedback_time";
	$fdata["GoodName"] = "t_register_feedback_time";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_feedback_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "t_register_feedback_time";

		$fdata["sourceSingle"] = "t_register_feedback_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_feedback_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatat_register_view["t_register_feedback_time"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_feedback_time";
//	t_register_feedback_signature
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "t_register_feedback_signature";
	$fdata["GoodName"] = "t_register_feedback_signature";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_feedback_signature");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_feedback_signature";

		$fdata["sourceSingle"] = "t_register_feedback_signature";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_feedback_signature";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatat_register_view["t_register_feedback_signature"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_feedback_signature";
//	t_register_feedback_takephoto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "t_register_feedback_takephoto";
	$fdata["GoodName"] = "t_register_feedback_takephoto";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_register_view","t_register_feedback_takephoto");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_register_feedback_takephoto";

		$fdata["sourceSingle"] = "t_register_feedback_takephoto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_feedback_takephoto";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatat_register_view["t_register_feedback_takephoto"] = $fdata;
		$tdatat_register_view[".searchableFields"][] = "t_register_feedback_takephoto";


$tables_data["t_register_view"]=&$tdatat_register_view;
$field_labels["t_register_view"] = &$fieldLabelst_register_view;
$fieldToolTips["t_register_view"] = &$fieldToolTipst_register_view;
$placeHolders["t_register_view"] = &$placeHolderst_register_view;
$page_titles["t_register_view"] = &$pageTitlest_register_view;


changeTextControlsToDate( "t_register_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_register_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_register_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_register_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_register_id,  	t_register_id_x,  	t_register_no,  	t_register_date,  	t_register_source,  	t_register_location_id,  	t_register_transfer_fl,  	t_register_transfer_location_id,  	t_register_transfer_date,  	t_register_transfer_courier,  	t_register_doc_from,  	t_register_doc_owner,  	t_register_doc_user,  	t_register_images,  	t_register_note,  	t_register_status,  	add_user,  	add_date,  	edit_user,  	edit_date,  	nomor,  	digit,  	add_sign_user,  	add_sign_date,  	add_sign_fl,  	last_user,  	last_date,  	t_register_feedback_date,  	t_register_feedback_time,  	t_register_feedback_signature,  	t_register_feedback_takephoto";
$proto0["m_strFrom"] = "FROM t_register";
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
	"m_strName" => "t_register_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto6["m_sql"] = "t_register_id";
$proto6["m_srcTableName"] = "t_register_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_id_x",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto8["m_sql"] = "t_register_id_x";
$proto8["m_srcTableName"] = "t_register_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_no",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto10["m_sql"] = "t_register_no";
$proto10["m_srcTableName"] = "t_register_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto12["m_sql"] = "t_register_date";
$proto12["m_srcTableName"] = "t_register_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_source",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto14["m_sql"] = "t_register_source";
$proto14["m_srcTableName"] = "t_register_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_location_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto16["m_sql"] = "t_register_location_id";
$proto16["m_srcTableName"] = "t_register_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_fl",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto18["m_sql"] = "t_register_transfer_fl";
$proto18["m_srcTableName"] = "t_register_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_location_id",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto20["m_sql"] = "t_register_transfer_location_id";
$proto20["m_srcTableName"] = "t_register_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto22["m_sql"] = "t_register_transfer_date";
$proto22["m_srcTableName"] = "t_register_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_transfer_courier",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto24["m_sql"] = "t_register_transfer_courier";
$proto24["m_srcTableName"] = "t_register_view";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_from",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto26["m_sql"] = "t_register_doc_from";
$proto26["m_srcTableName"] = "t_register_view";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_owner",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto28["m_sql"] = "t_register_doc_owner";
$proto28["m_srcTableName"] = "t_register_view";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_doc_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto30["m_sql"] = "t_register_doc_user";
$proto30["m_srcTableName"] = "t_register_view";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_images",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto32["m_sql"] = "t_register_images";
$proto32["m_srcTableName"] = "t_register_view";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_note",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto34["m_sql"] = "t_register_note";
$proto34["m_srcTableName"] = "t_register_view";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_status",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto36["m_sql"] = "t_register_status";
$proto36["m_srcTableName"] = "t_register_view";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto38["m_sql"] = "add_user";
$proto38["m_srcTableName"] = "t_register_view";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto40["m_sql"] = "add_date";
$proto40["m_srcTableName"] = "t_register_view";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto42["m_sql"] = "edit_user";
$proto42["m_srcTableName"] = "t_register_view";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto44["m_sql"] = "edit_date";
$proto44["m_srcTableName"] = "t_register_view";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "nomor",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto46["m_sql"] = "nomor";
$proto46["m_srcTableName"] = "t_register_view";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "digit",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto48["m_sql"] = "digit";
$proto48["m_srcTableName"] = "t_register_view";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "add_sign_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto50["m_sql"] = "add_sign_user";
$proto50["m_srcTableName"] = "t_register_view";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "add_sign_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto52["m_sql"] = "add_sign_date";
$proto52["m_srcTableName"] = "t_register_view";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "add_sign_fl",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto54["m_sql"] = "add_sign_fl";
$proto54["m_srcTableName"] = "t_register_view";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto56["m_sql"] = "last_user";
$proto56["m_srcTableName"] = "t_register_view";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "last_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto58["m_sql"] = "last_date";
$proto58["m_srcTableName"] = "t_register_view";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_feedback_date",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto60["m_sql"] = "t_register_feedback_date";
$proto60["m_srcTableName"] = "t_register_view";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_feedback_time",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto62["m_sql"] = "t_register_feedback_time";
$proto62["m_srcTableName"] = "t_register_view";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_feedback_signature",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto64["m_sql"] = "t_register_feedback_signature";
$proto64["m_srcTableName"] = "t_register_view";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "t_register_feedback_takephoto",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_register_view"
));

$proto66["m_sql"] = "t_register_feedback_takephoto";
$proto66["m_srcTableName"] = "t_register_view";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "t_register";
$proto69["m_srcTableName"] = "t_register_view";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "t_register_id";
$proto69["m_columns"][] = "t_register_id_x";
$proto69["m_columns"][] = "t_register_no";
$proto69["m_columns"][] = "t_register_date";
$proto69["m_columns"][] = "t_register_source";
$proto69["m_columns"][] = "t_register_location_id";
$proto69["m_columns"][] = "t_register_transfer_fl";
$proto69["m_columns"][] = "t_register_transfer_location_id";
$proto69["m_columns"][] = "t_register_transfer_date";
$proto69["m_columns"][] = "t_register_transfer_courier";
$proto69["m_columns"][] = "t_register_doc_from";
$proto69["m_columns"][] = "t_register_doc_owner";
$proto69["m_columns"][] = "t_register_doc_user";
$proto69["m_columns"][] = "t_register_images";
$proto69["m_columns"][] = "t_register_note";
$proto69["m_columns"][] = "t_register_status";
$proto69["m_columns"][] = "add_user";
$proto69["m_columns"][] = "add_date";
$proto69["m_columns"][] = "edit_user";
$proto69["m_columns"][] = "edit_date";
$proto69["m_columns"][] = "nomor";
$proto69["m_columns"][] = "digit";
$proto69["m_columns"][] = "add_sign_user";
$proto69["m_columns"][] = "add_sign_date";
$proto69["m_columns"][] = "add_sign_fl";
$proto69["m_columns"][] = "last_user";
$proto69["m_columns"][] = "last_date";
$proto69["m_columns"][] = "t_register_feedback_date";
$proto69["m_columns"][] = "t_register_feedback_time";
$proto69["m_columns"][] = "t_register_feedback_signature";
$proto69["m_columns"][] = "t_register_feedback_takephoto";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "t_register";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "t_register_view";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_register_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_register_view = createSqlQuery_t_register_view();


	
				;

																															

$tdatat_register_view[".sqlquery"] = $queryData_t_register_view;



$tdatat_register_view[".hasEvents"] = false;

?>