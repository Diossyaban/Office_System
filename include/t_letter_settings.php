<?php
$tdatat_letter = array();
$tdatat_letter[".searchableFields"] = array();
$tdatat_letter[".ShortName"] = "t_letter";
$tdatat_letter[".OwnerID"] = "";
$tdatat_letter[".OriginalTable"] = "t_letter";


$tdatat_letter[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_letter[".originalPagesByType"] = $tdatat_letter[".pagesByType"];
$tdatat_letter[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_letter[".originalPages"] = $tdatat_letter[".pages"];
$tdatat_letter[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_letter[".originalDefaultPages"] = $tdatat_letter[".defaultPages"];

//	field labels
$fieldLabelst_letter = array();
$fieldToolTipst_letter = array();
$pageTitlest_letter = array();
$placeHolderst_letter = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_letter["English"] = array();
	$fieldToolTipst_letter["English"] = array();
	$placeHolderst_letter["English"] = array();
	$pageTitlest_letter["English"] = array();
	$fieldLabelst_letter["English"]["letter_id"] = "Letter Id";
	$fieldToolTipst_letter["English"]["letter_id"] = "";
	$placeHolderst_letter["English"]["letter_id"] = "";
	$fieldLabelst_letter["English"]["t_letter_no"] = "Letter No.";
	$fieldToolTipst_letter["English"]["t_letter_no"] = "";
	$placeHolderst_letter["English"]["t_letter_no"] = "";
	$fieldLabelst_letter["English"]["m_category_code"] = "M Category Code";
	$fieldToolTipst_letter["English"]["m_category_code"] = "";
	$placeHolderst_letter["English"]["m_category_code"] = "";
	$fieldLabelst_letter["English"]["m_category_id"] = "Category";
	$fieldToolTipst_letter["English"]["m_category_id"] = "";
	$placeHolderst_letter["English"]["m_category_id"] = "";
	$fieldLabelst_letter["English"]["letter_reg_date"] = "Reg Date";
	$fieldToolTipst_letter["English"]["letter_reg_date"] = "";
	$placeHolderst_letter["English"]["letter_reg_date"] = "";
	$fieldLabelst_letter["English"]["letter_kepada"] = "To";
	$fieldToolTipst_letter["English"]["letter_kepada"] = "";
	$placeHolderst_letter["English"]["letter_kepada"] = "";
	$fieldLabelst_letter["English"]["letter_alamat"] = "Address";
	$fieldToolTipst_letter["English"]["letter_alamat"] = "";
	$placeHolderst_letter["English"]["letter_alamat"] = "";
	$fieldLabelst_letter["English"]["letter_attn"] = "Attn";
	$fieldToolTipst_letter["English"]["letter_attn"] = "";
	$placeHolderst_letter["English"]["letter_attn"] = "";
	$fieldLabelst_letter["English"]["add_user"] = "Create by";
	$fieldToolTipst_letter["English"]["add_user"] = "";
	$placeHolderst_letter["English"]["add_user"] = "";
	$fieldLabelst_letter["English"]["add_date"] = "Add Date";
	$fieldToolTipst_letter["English"]["add_date"] = "";
	$placeHolderst_letter["English"]["add_date"] = "";
	$fieldLabelst_letter["English"]["letter_perihal"] = "Subject";
	$fieldToolTipst_letter["English"]["letter_perihal"] = "";
	$placeHolderst_letter["English"]["letter_perihal"] = "";
	$fieldLabelst_letter["English"]["letter_ttg"] = "Sign by";
	$fieldToolTipst_letter["English"]["letter_ttg"] = "";
	$placeHolderst_letter["English"]["letter_ttg"] = "";
	$fieldLabelst_letter["English"]["letter_ttgjwb"] = "Title";
	$fieldToolTipst_letter["English"]["letter_ttgjwb"] = "";
	$placeHolderst_letter["English"]["letter_ttgjwb"] = "";
	$fieldLabelst_letter["English"]["letter_kota"] = "Letter Kota";
	$fieldToolTipst_letter["English"]["letter_kota"] = "";
	$placeHolderst_letter["English"]["letter_kota"] = "";
	$fieldLabelst_letter["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_letter["English"]["edit_user"] = "";
	$placeHolderst_letter["English"]["edit_user"] = "";
	$fieldLabelst_letter["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_letter["English"]["edit_date"] = "";
	$placeHolderst_letter["English"]["edit_date"] = "";
	$fieldLabelst_letter["English"]["letter_status"] = "Status";
	$fieldToolTipst_letter["English"]["letter_status"] = "";
	$placeHolderst_letter["English"]["letter_status"] = "";
	$fieldLabelst_letter["English"]["letter_token"] = "Letter Token";
	$fieldToolTipst_letter["English"]["letter_token"] = "";
	$placeHolderst_letter["English"]["letter_token"] = "";
	$fieldLabelst_letter["English"]["m_type_id"] = "Type";
	$fieldToolTipst_letter["English"]["m_type_id"] = "";
	$placeHolderst_letter["English"]["m_type_id"] = "";
	$fieldLabelst_letter["English"]["m_template_id"] = "Templates";
	$fieldToolTipst_letter["English"]["m_template_id"] = "";
	$placeHolderst_letter["English"]["m_template_id"] = "";
	$fieldLabelst_letter["English"]["letter_language"] = "Language Options";
	$fieldToolTipst_letter["English"]["letter_language"] = "";
	$placeHolderst_letter["English"]["letter_language"] = "";
	$fieldLabelst_letter["English"]["letter_signature"] = "Signature Options";
	$fieldToolTipst_letter["English"]["letter_signature"] = "";
	$placeHolderst_letter["English"]["letter_signature"] = "";
	$fieldLabelst_letter["English"]["template_file"] = "Template File";
	$fieldToolTipst_letter["English"]["template_file"] = "";
	$placeHolderst_letter["English"]["template_file"] = "";
	$fieldLabelst_letter["English"]["review_file"] = "Review File";
	$fieldToolTipst_letter["English"]["review_file"] = "";
	$placeHolderst_letter["English"]["review_file"] = "";
	$fieldLabelst_letter["English"]["result_file"] = "Result File";
	$fieldToolTipst_letter["English"]["result_file"] = "";
	$placeHolderst_letter["English"]["result_file"] = "";
	$fieldLabelst_letter["English"]["merge_file"] = "Merge File";
	$fieldToolTipst_letter["English"]["merge_file"] = "";
	$placeHolderst_letter["English"]["merge_file"] = "";
	$fieldLabelst_letter["English"]["end_file"] = "End File";
	$fieldToolTipst_letter["English"]["end_file"] = "";
	$placeHolderst_letter["English"]["end_file"] = "";
	$fieldLabelst_letter["English"]["pdf_file"] = "Pdf File";
	$fieldToolTipst_letter["English"]["pdf_file"] = "";
	$placeHolderst_letter["English"]["pdf_file"] = "";
	$fieldLabelst_letter["English"]["last_user_flow"] = "Last User Flow";
	$fieldToolTipst_letter["English"]["last_user_flow"] = "";
	$placeHolderst_letter["English"]["last_user_flow"] = "";
	$fieldLabelst_letter["English"]["last_user_date"] = "Last User Date";
	$fieldToolTipst_letter["English"]["last_user_date"] = "";
	$placeHolderst_letter["English"]["last_user_date"] = "";
	$fieldLabelst_letter["English"]["qr_sign_text"] = "Qr Sign Text";
	$fieldToolTipst_letter["English"]["qr_sign_text"] = "";
	$placeHolderst_letter["English"]["qr_sign_text"] = "";
	$fieldLabelst_letter["English"]["qr_sign_file"] = "Qr Sign File";
	$fieldToolTipst_letter["English"]["qr_sign_file"] = "";
	$placeHolderst_letter["English"]["qr_sign_file"] = "";
	$fieldLabelst_letter["English"]["qr_validation_text"] = "Qr Validation Text";
	$fieldToolTipst_letter["English"]["qr_validation_text"] = "";
	$placeHolderst_letter["English"]["qr_validation_text"] = "";
	$fieldLabelst_letter["English"]["qr_validation_file"] = "Qr Validation File";
	$fieldToolTipst_letter["English"]["qr_validation_file"] = "";
	$placeHolderst_letter["English"]["qr_validation_file"] = "";
	$fieldLabelst_letter["English"]["category_no"] = "Category No";
	$fieldToolTipst_letter["English"]["category_no"] = "";
	$placeHolderst_letter["English"]["category_no"] = "";
	if (count($fieldToolTipst_letter["English"]))
		$tdatat_letter[".isUseToolTips"] = true;
}


	$tdatat_letter[".NCSearch"] = true;


	$tdatat_letter[".scrollGridBody"] = true;

$tdatat_letter[".shortTableName"] = "t_letter";
$tdatat_letter[".nSecOptions"] = 0;

$tdatat_letter[".mainTableOwnerID"] = "";
$tdatat_letter[".entityType"] = 0;
$tdatat_letter[".connId"] = "u736239518tsundbat154412412";


$tdatat_letter[".strOriginalTableName"] = "t_letter";

	



$tdatat_letter[".showAddInPopup"] = false;

$tdatat_letter[".showEditInPopup"] = false;

$tdatat_letter[".showViewInPopup"] = false;

$tdatat_letter[".listAjax"] = false;
//	temporary
//$tdatat_letter[".listAjax"] = false;

	$tdatat_letter[".audit"] = true;

	$tdatat_letter[".locking"] = false;


$pages = $tdatat_letter[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_letter[".edit"] = true;
	$tdatat_letter[".afterEditAction"] = 1;
	$tdatat_letter[".closePopupAfterEdit"] = 1;
	$tdatat_letter[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_letter[".add"] = true;
$tdatat_letter[".afterAddAction"] = 3;
$tdatat_letter[".closePopupAfterAdd"] = 1;
$tdatat_letter[".afterAddActionDetTable"] = "t_letter_flow";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_letter[".list"] = true;
}



$tdatat_letter[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_letter[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_letter[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_letter[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_letter[".printFriendly"] = true;
}



$tdatat_letter[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_letter[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_letter[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_letter[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_letter[".ajaxCodeSnippetAdded"] = false;

$tdatat_letter[".buttonsAdded"] = false;

$tdatat_letter[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_letter[".isUseTimeForSearch"] = false;


$tdatat_letter[".badgeColor"] = "D2AF80";


$tdatat_letter[".allSearchFields"] = array();
$tdatat_letter[".filterFields"] = array();
$tdatat_letter[".requiredSearchFields"] = array();

$tdatat_letter[".googleLikeFields"] = array();
$tdatat_letter[".googleLikeFields"][] = "letter_id";
$tdatat_letter[".googleLikeFields"][] = "t_letter_no";
$tdatat_letter[".googleLikeFields"][] = "m_category_code";
$tdatat_letter[".googleLikeFields"][] = "m_category_id";
$tdatat_letter[".googleLikeFields"][] = "letter_reg_date";
$tdatat_letter[".googleLikeFields"][] = "letter_kepada";
$tdatat_letter[".googleLikeFields"][] = "letter_alamat";
$tdatat_letter[".googleLikeFields"][] = "letter_attn";
$tdatat_letter[".googleLikeFields"][] = "add_user";
$tdatat_letter[".googleLikeFields"][] = "add_date";
$tdatat_letter[".googleLikeFields"][] = "letter_perihal";
$tdatat_letter[".googleLikeFields"][] = "letter_ttg";
$tdatat_letter[".googleLikeFields"][] = "letter_ttgjwb";
$tdatat_letter[".googleLikeFields"][] = "letter_kota";
$tdatat_letter[".googleLikeFields"][] = "edit_user";
$tdatat_letter[".googleLikeFields"][] = "edit_date";
$tdatat_letter[".googleLikeFields"][] = "letter_status";
$tdatat_letter[".googleLikeFields"][] = "letter_token";
$tdatat_letter[".googleLikeFields"][] = "m_type_id";
$tdatat_letter[".googleLikeFields"][] = "m_template_id";
$tdatat_letter[".googleLikeFields"][] = "letter_language";
$tdatat_letter[".googleLikeFields"][] = "letter_signature";
$tdatat_letter[".googleLikeFields"][] = "template_file";
$tdatat_letter[".googleLikeFields"][] = "review_file";
$tdatat_letter[".googleLikeFields"][] = "result_file";
$tdatat_letter[".googleLikeFields"][] = "merge_file";
$tdatat_letter[".googleLikeFields"][] = "end_file";
$tdatat_letter[".googleLikeFields"][] = "pdf_file";
$tdatat_letter[".googleLikeFields"][] = "last_user_flow";
$tdatat_letter[".googleLikeFields"][] = "last_user_date";
$tdatat_letter[".googleLikeFields"][] = "qr_sign_text";
$tdatat_letter[".googleLikeFields"][] = "qr_sign_file";
$tdatat_letter[".googleLikeFields"][] = "qr_validation_text";
$tdatat_letter[".googleLikeFields"][] = "qr_validation_file";
$tdatat_letter[".googleLikeFields"][] = "category_no";



$tdatat_letter[".tableType"] = "list";

$tdatat_letter[".printerPageOrientation"] = 0;
$tdatat_letter[".nPrinterPageScale"] = 100;

$tdatat_letter[".nPrinterSplitRecords"] = 40;

$tdatat_letter[".geocodingEnabled"] = false;




$tdatat_letter[".isDisplayLoading"] = true;






$tdatat_letter[".pageSize"] = 20;

$tdatat_letter[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_letter[".strOrderBy"] = $tstrOrderBy;

$tdatat_letter[".orderindexes"] = array();


$tdatat_letter[".sqlHead"] = "SELECT letter_id,  t_letter_no,  m_category_code,  m_category_id,  letter_reg_date,  letter_kepada,  letter_alamat,  letter_attn,  add_user,  add_date,  letter_perihal,  letter_ttg,  letter_ttgjwb,  letter_kota,  edit_user,  edit_date,  letter_status,  letter_token,  m_type_id,  m_template_id,  letter_language,  letter_signature,  template_file,  review_file,  result_file,  merge_file,  end_file,  pdf_file,  last_user_flow,  last_user_date,  qr_sign_text,  qr_sign_file,  qr_validation_text,  qr_validation_file,  category_no";
$tdatat_letter[".sqlFrom"] = "FROM t_letter";
$tdatat_letter[".sqlWhereExpr"] = "(last_user_flow = ':session.UserID')";
$tdatat_letter[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "1",
	'name' => "Draft",
	'nameType' => 'Text',
	'where' => "letter_status='Draft'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "2",
	'name' => "Approved",
	'nameType' => 'Text',
	'where' => "letter_status='Approved'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$arrGridTabs[] = array(
	'tabId' => "3",
	'name' => "Decline",
	'nameType' => 'Text',
	'where' => "letter_status='Decline'",
	'showRowCount' => 1,
	'hideEmpty' => 0,
);
$tdatat_letter[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_letter[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_letter[".arrGroupsPerPage"] = $arrGPP;

$tdatat_letter[".highlightSearchResults"] = true;

$tableKeyst_letter = array();
$tableKeyst_letter[] = "letter_id";
$tableKeyst_letter[] = "letter_token";
$tdatat_letter[".Keys"] = $tableKeyst_letter;


$tdatat_letter[".hideMobileList"] = array();




//	letter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "letter_id";
	$fdata["GoodName"] = "letter_id";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "letter_id";

		$fdata["sourceSingle"] = "letter_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_id";

	
	
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


	$tdatat_letter["letter_id"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_id";
//	t_letter_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_letter_no";
	$fdata["GoodName"] = "t_letter_no";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","t_letter_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_letter_no";

		$fdata["sourceSingle"] = "t_letter_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_letter_no";

	
	
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


	$tdatat_letter["t_letter_no"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "t_letter_no";
//	m_category_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_category_code";
	$fdata["GoodName"] = "m_category_code";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","m_category_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_category_code";

		$fdata["sourceSingle"] = "m_category_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_code";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatat_letter["m_category_code"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "m_category_code";
//	m_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_category_id";
	$fdata["GoodName"] = "m_category_id";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","m_category_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_category_id";

		$fdata["sourceSingle"] = "m_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_id";

	
	
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
	$edata["LookupTable"] = "Category";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_category_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_category_name";

	

	
	$edata["LookupOrderBy"] = "m_category_id";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "m_type_id";

	
	
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


	$tdatat_letter["m_category_id"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "m_category_id";
//	letter_reg_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "letter_reg_date";
	$fdata["GoodName"] = "letter_reg_date";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_reg_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "letter_reg_date";

		$fdata["sourceSingle"] = "letter_reg_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_reg_date";

	
	
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


	$tdatat_letter["letter_reg_date"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_reg_date";
//	letter_kepada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "letter_kepada";
	$fdata["GoodName"] = "letter_kepada";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_kepada");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_kepada";

		$fdata["sourceSingle"] = "letter_kepada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_kepada";

	
	
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


	$tdatat_letter["letter_kepada"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_kepada";
//	letter_alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "letter_alamat";
	$fdata["GoodName"] = "letter_alamat";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_alamat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_alamat";

		$fdata["sourceSingle"] = "letter_alamat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_alamat";

	
	
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


	$tdatat_letter["letter_alamat"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_alamat";
//	letter_attn
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "letter_attn";
	$fdata["GoodName"] = "letter_attn";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_attn");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_attn";

		$fdata["sourceSingle"] = "letter_attn";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_attn";

	
	
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


	$tdatat_letter["letter_attn"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_attn";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","add_user");
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatat_letter["add_user"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","add_date");
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


	$tdatat_letter["add_date"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "add_date";
//	letter_perihal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "letter_perihal";
	$fdata["GoodName"] = "letter_perihal";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_perihal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_perihal";

		$fdata["sourceSingle"] = "letter_perihal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_perihal";

	
	
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


	$tdatat_letter["letter_perihal"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_perihal";
//	letter_ttg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "letter_ttg";
	$fdata["GoodName"] = "letter_ttg";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_ttg");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_ttg";

		$fdata["sourceSingle"] = "letter_ttg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_ttg";

	
	
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
	$edata["LookupTable"] = "m_letter_pic";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"letter_ttgjwb", 'lookupF'=>"pic_title_eng");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "m_letter_username";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "pic_name";

	

	
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


	$tdatat_letter["letter_ttg"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_ttg";
//	letter_ttgjwb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "letter_ttgjwb";
	$fdata["GoodName"] = "letter_ttgjwb";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_ttgjwb");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_ttgjwb";

		$fdata["sourceSingle"] = "letter_ttgjwb";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_ttgjwb";

	
	
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


	$tdatat_letter["letter_ttgjwb"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_ttgjwb";
//	letter_kota
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "letter_kota";
	$fdata["GoodName"] = "letter_kota";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_kota");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_kota";

		$fdata["sourceSingle"] = "letter_kota";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_kota";

	
	
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


	$tdatat_letter["letter_kota"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_kota";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","edit_user");
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


	$tdatat_letter["edit_user"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","edit_date");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_date";

	
	
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


	$tdatat_letter["edit_date"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "edit_date";
//	letter_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "letter_status";
	$fdata["GoodName"] = "letter_status";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_status";

		$fdata["sourceSingle"] = "letter_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_status";

	
	
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
	$edata["LookupTable"] = "m_status";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "status";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "status";

				$edata["LookupWhere"] = "m_status_desc='Letter'";


	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatat_letter["letter_status"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_status";
//	letter_token
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "letter_token";
	$fdata["GoodName"] = "letter_token";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_token");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_token";

		$fdata["sourceSingle"] = "letter_token";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_token";

	
	
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


	$tdatat_letter["letter_token"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_token";
//	m_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "m_type_id";
	$fdata["GoodName"] = "m_type_id";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","m_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_type_id";

		$fdata["sourceSingle"] = "m_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_type_id";

	
	
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
	$edata["LookupTable"] = "Type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_type_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_type_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "m_category_id", "lookup" => "m_category_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "m_template_id";

	
	
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


	$tdatat_letter["m_type_id"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "m_type_id";
//	m_template_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "m_template_id";
	$fdata["GoodName"] = "m_template_id";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","m_template_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_template_id";

		$fdata["sourceSingle"] = "m_template_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_template_id";

	
	
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
	$edata["LookupTable"] = "template";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_template_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "template_name";

	

	
	$edata["LookupOrderBy"] = "m_template_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "m_type_id", "lookup" => "m_type_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "letter_language";
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "letter_signature";

	
	
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


	$tdatat_letter["m_template_id"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "m_template_id";
//	letter_language
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "letter_language";
	$fdata["GoodName"] = "letter_language";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_language");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_language";

		$fdata["sourceSingle"] = "letter_language";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_language";

	
	
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
	$edata["LookupTable"] = "Language";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_language_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_language_name";

	

	
	$edata["LookupOrderBy"] = "m_language_id";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "m_template_id", "lookup" => "m_template_id" );

	
	

	
	
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


	$tdatat_letter["letter_language"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_language";
//	letter_signature
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "letter_signature";
	$fdata["GoodName"] = "letter_signature";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","letter_signature");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "letter_signature";

		$fdata["sourceSingle"] = "letter_signature";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "letter_signature";

	
	
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
	$edata["LookupTable"] = "Siganture";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_position_siganture_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_position_siganture_name";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "m_template_id", "lookup" => "m_template_id" );

	
	

	
	
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


	$tdatat_letter["letter_signature"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "letter_signature";
//	template_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "template_file";
	$fdata["GoodName"] = "template_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","template_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "template_file";

		$fdata["sourceSingle"] = "template_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "template_file";

	
	
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


	$tdatat_letter["template_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "template_file";
//	review_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "review_file";
	$fdata["GoodName"] = "review_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","review_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "review_file";

		$fdata["sourceSingle"] = "review_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "review_file";

	
	
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


	$tdatat_letter["review_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "review_file";
//	result_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "result_file";
	$fdata["GoodName"] = "result_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","result_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "result_file";

		$fdata["sourceSingle"] = "result_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "result_file";

	
	
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


	$tdatat_letter["result_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "result_file";
//	merge_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "merge_file";
	$fdata["GoodName"] = "merge_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","merge_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "merge_file";

		$fdata["sourceSingle"] = "merge_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "merge_file";

	
	
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


	$tdatat_letter["merge_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "merge_file";
//	end_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "end_file";
	$fdata["GoodName"] = "end_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","end_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "end_file";

		$fdata["sourceSingle"] = "end_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "end_file";

	
	
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


	$tdatat_letter["end_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "end_file";
//	pdf_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "pdf_file";
	$fdata["GoodName"] = "pdf_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","pdf_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pdf_file";

		$fdata["sourceSingle"] = "pdf_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pdf_file";

	
	
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


	$tdatat_letter["pdf_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "pdf_file";
//	last_user_flow
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "last_user_flow";
	$fdata["GoodName"] = "last_user_flow";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","last_user_flow");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "last_user_flow";

		$fdata["sourceSingle"] = "last_user_flow";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_user_flow";

	
	
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


	$tdatat_letter["last_user_flow"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "last_user_flow";
//	last_user_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "last_user_date";
	$fdata["GoodName"] = "last_user_date";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","last_user_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_user_date";

		$fdata["sourceSingle"] = "last_user_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_user_date";

	
	
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


	$tdatat_letter["last_user_date"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "last_user_date";
//	qr_sign_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "qr_sign_text";
	$fdata["GoodName"] = "qr_sign_text";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","qr_sign_text");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qr_sign_text";

		$fdata["sourceSingle"] = "qr_sign_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qr_sign_text";

	
	
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


	$tdatat_letter["qr_sign_text"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "qr_sign_text";
//	qr_sign_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "qr_sign_file";
	$fdata["GoodName"] = "qr_sign_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","qr_sign_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qr_sign_file";

		$fdata["sourceSingle"] = "qr_sign_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qr_sign_file";

	
	
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


	$tdatat_letter["qr_sign_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "qr_sign_file";
//	qr_validation_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "qr_validation_text";
	$fdata["GoodName"] = "qr_validation_text";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","qr_validation_text");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qr_validation_text";

		$fdata["sourceSingle"] = "qr_validation_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qr_validation_text";

	
	
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


	$tdatat_letter["qr_validation_text"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "qr_validation_text";
//	qr_validation_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "qr_validation_file";
	$fdata["GoodName"] = "qr_validation_file";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","qr_validation_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "qr_validation_file";

		$fdata["sourceSingle"] = "qr_validation_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "qr_validation_file";

	
	
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


	$tdatat_letter["qr_validation_file"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "qr_validation_file";
//	category_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "category_no";
	$fdata["GoodName"] = "category_no";
	$fdata["ownerTable"] = "t_letter";
	$fdata["Label"] = GetFieldLabel("t_letter","category_no");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "category_no";

		$fdata["sourceSingle"] = "category_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "category_no";

	
	
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


	$tdatat_letter["category_no"] = $fdata;
		$tdatat_letter[".searchableFields"][] = "category_no";


$tables_data["t_letter"]=&$tdatat_letter;
$field_labels["t_letter"] = &$fieldLabelst_letter;
$fieldToolTips["t_letter"] = &$fieldToolTipst_letter;
$placeHolders["t_letter"] = &$placeHolderst_letter;
$page_titles["t_letter"] = &$pageTitlest_letter;


changeTextControlsToDate( "t_letter" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_letter"] = array();
//	t_letter_flow
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="t_letter_flow";
		$detailsParam["dOriginalTable"] = "t_letter_flow";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "t_letter_flow";
	$detailsParam["dCaptionTable"] = GetTableCaption("t_letter_flow");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_letter"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_letter"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_letter"][$dIndex]["masterKeys"][]="letter_id";

				$detailsTablesData["t_letter"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_letter"][$dIndex]["detailKeys"][]="letter_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_letter"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_letter()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "letter_id,  t_letter_no,  m_category_code,  m_category_id,  letter_reg_date,  letter_kepada,  letter_alamat,  letter_attn,  add_user,  add_date,  letter_perihal,  letter_ttg,  letter_ttgjwb,  letter_kota,  edit_user,  edit_date,  letter_status,  letter_token,  m_type_id,  m_template_id,  letter_language,  letter_signature,  template_file,  review_file,  result_file,  merge_file,  end_file,  pdf_file,  last_user_flow,  last_user_date,  qr_sign_text,  qr_sign_file,  qr_validation_text,  qr_validation_file,  category_no";
$proto0["m_strFrom"] = "FROM t_letter";
$proto0["m_strWhere"] = "(last_user_flow = ':session.UserID')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "last_user_flow = ':session.UserID'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "last_user_flow",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= ':session.UserID'";
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
	"m_strName" => "letter_id",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto6["m_sql"] = "letter_id";
$proto6["m_srcTableName"] = "t_letter";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_letter_no",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto8["m_sql"] = "t_letter_no";
$proto8["m_srcTableName"] = "t_letter";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_code",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto10["m_sql"] = "m_category_code";
$proto10["m_srcTableName"] = "t_letter";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_id",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto12["m_sql"] = "m_category_id";
$proto12["m_srcTableName"] = "t_letter";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_reg_date",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto14["m_sql"] = "letter_reg_date";
$proto14["m_srcTableName"] = "t_letter";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_kepada",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto16["m_sql"] = "letter_kepada";
$proto16["m_srcTableName"] = "t_letter";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_alamat",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto18["m_sql"] = "letter_alamat";
$proto18["m_srcTableName"] = "t_letter";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_attn",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto20["m_sql"] = "letter_attn";
$proto20["m_srcTableName"] = "t_letter";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto22["m_sql"] = "add_user";
$proto22["m_srcTableName"] = "t_letter";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto24["m_sql"] = "add_date";
$proto24["m_srcTableName"] = "t_letter";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_perihal",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto26["m_sql"] = "letter_perihal";
$proto26["m_srcTableName"] = "t_letter";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_ttg",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto28["m_sql"] = "letter_ttg";
$proto28["m_srcTableName"] = "t_letter";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_ttgjwb",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto30["m_sql"] = "letter_ttgjwb";
$proto30["m_srcTableName"] = "t_letter";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_kota",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto32["m_sql"] = "letter_kota";
$proto32["m_srcTableName"] = "t_letter";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto34["m_sql"] = "edit_user";
$proto34["m_srcTableName"] = "t_letter";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto36["m_sql"] = "edit_date";
$proto36["m_srcTableName"] = "t_letter";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_status",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto38["m_sql"] = "letter_status";
$proto38["m_srcTableName"] = "t_letter";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_token",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto40["m_sql"] = "letter_token";
$proto40["m_srcTableName"] = "t_letter";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "m_type_id",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto42["m_sql"] = "m_type_id";
$proto42["m_srcTableName"] = "t_letter";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "m_template_id",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto44["m_sql"] = "m_template_id";
$proto44["m_srcTableName"] = "t_letter";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_language",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto46["m_sql"] = "letter_language";
$proto46["m_srcTableName"] = "t_letter";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "letter_signature",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto48["m_sql"] = "letter_signature";
$proto48["m_srcTableName"] = "t_letter";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "template_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto50["m_sql"] = "template_file";
$proto50["m_srcTableName"] = "t_letter";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "review_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto52["m_sql"] = "review_file";
$proto52["m_srcTableName"] = "t_letter";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "result_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto54["m_sql"] = "result_file";
$proto54["m_srcTableName"] = "t_letter";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "merge_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto56["m_sql"] = "merge_file";
$proto56["m_srcTableName"] = "t_letter";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "end_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto58["m_sql"] = "end_file";
$proto58["m_srcTableName"] = "t_letter";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "pdf_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto60["m_sql"] = "pdf_file";
$proto60["m_srcTableName"] = "t_letter";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user_flow",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto62["m_sql"] = "last_user_flow";
$proto62["m_srcTableName"] = "t_letter";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "last_user_date",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto64["m_sql"] = "last_user_date";
$proto64["m_srcTableName"] = "t_letter";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "qr_sign_text",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto66["m_sql"] = "qr_sign_text";
$proto66["m_srcTableName"] = "t_letter";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "qr_sign_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto68["m_sql"] = "qr_sign_file";
$proto68["m_srcTableName"] = "t_letter";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "qr_validation_text",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto70["m_sql"] = "qr_validation_text";
$proto70["m_srcTableName"] = "t_letter";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "qr_validation_file",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto72["m_sql"] = "qr_validation_file";
$proto72["m_srcTableName"] = "t_letter";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "category_no",
	"m_strTable" => "t_letter",
	"m_srcTableName" => "t_letter"
));

$proto74["m_sql"] = "category_no";
$proto74["m_srcTableName"] = "t_letter";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto76=array();
$proto76["m_link"] = "SQLL_MAIN";
			$proto77=array();
$proto77["m_strName"] = "t_letter";
$proto77["m_srcTableName"] = "t_letter";
$proto77["m_columns"] = array();
$proto77["m_columns"][] = "letter_id";
$proto77["m_columns"][] = "t_letter_no";
$proto77["m_columns"][] = "m_category_code";
$proto77["m_columns"][] = "m_category_id";
$proto77["m_columns"][] = "letter_reg_date";
$proto77["m_columns"][] = "letter_kepada";
$proto77["m_columns"][] = "letter_alamat";
$proto77["m_columns"][] = "letter_attn";
$proto77["m_columns"][] = "add_user";
$proto77["m_columns"][] = "add_date";
$proto77["m_columns"][] = "letter_perihal";
$proto77["m_columns"][] = "letter_ttg";
$proto77["m_columns"][] = "letter_ttgjwb";
$proto77["m_columns"][] = "letter_kota";
$proto77["m_columns"][] = "edit_user";
$proto77["m_columns"][] = "edit_date";
$proto77["m_columns"][] = "letter_status";
$proto77["m_columns"][] = "letter_token";
$proto77["m_columns"][] = "m_type_id";
$proto77["m_columns"][] = "m_template_id";
$proto77["m_columns"][] = "letter_language";
$proto77["m_columns"][] = "letter_signature";
$proto77["m_columns"][] = "template_file";
$proto77["m_columns"][] = "review_file";
$proto77["m_columns"][] = "result_file";
$proto77["m_columns"][] = "merge_file";
$proto77["m_columns"][] = "end_file";
$proto77["m_columns"][] = "pdf_file";
$proto77["m_columns"][] = "last_user_flow";
$proto77["m_columns"][] = "last_user_date";
$proto77["m_columns"][] = "qr_sign_text";
$proto77["m_columns"][] = "qr_sign_file";
$proto77["m_columns"][] = "qr_validation_text";
$proto77["m_columns"][] = "qr_validation_file";
$proto77["m_columns"][] = "category_no";
$obj = new SQLTable($proto77);

$proto76["m_table"] = $obj;
$proto76["m_sql"] = "t_letter";
$proto76["m_alias"] = "";
$proto76["m_srcTableName"] = "t_letter";
$proto78=array();
$proto78["m_sql"] = "";
$proto78["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto78["m_column"]=$obj;
$proto78["m_contained"] = array();
$proto78["m_strCase"] = "";
$proto78["m_havingmode"] = false;
$proto78["m_inBrackets"] = false;
$proto78["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto78);

$proto76["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto76);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_letter";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_letter = createSqlQuery_t_letter();


	
				;

																																			

$tdatat_letter[".sqlquery"] = $queryData_t_letter;



include_once(getabspath("include/t_letter_events.php"));
$tdatat_letter[".hasEvents"] = true;

?>