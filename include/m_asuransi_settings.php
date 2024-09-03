<?php
$tdatam_asuransi = array();
$tdatam_asuransi[".searchableFields"] = array();
$tdatam_asuransi[".ShortName"] = "m_asuransi";
$tdatam_asuransi[".OwnerID"] = "";
$tdatam_asuransi[".OriginalTable"] = "m_asuransi";


$tdatam_asuransi[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_asuransi[".originalPagesByType"] = $tdatam_asuransi[".pagesByType"];
$tdatam_asuransi[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_asuransi[".originalPages"] = $tdatam_asuransi[".pages"];
$tdatam_asuransi[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_asuransi[".originalDefaultPages"] = $tdatam_asuransi[".defaultPages"];

//	field labels
$fieldLabelsm_asuransi = array();
$fieldToolTipsm_asuransi = array();
$pageTitlesm_asuransi = array();
$placeHoldersm_asuransi = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_asuransi["English"] = array();
	$fieldToolTipsm_asuransi["English"] = array();
	$placeHoldersm_asuransi["English"] = array();
	$pageTitlesm_asuransi["English"] = array();
	$fieldLabelsm_asuransi["English"]["id"] = "Id";
	$fieldToolTipsm_asuransi["English"]["id"] = "";
	$placeHoldersm_asuransi["English"]["id"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_type"] = "Asuransi Type";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_type"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_type"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_nama"] = "Asuransi Name";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_nama"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_nama"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_no"] = "Asuransi No";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_no"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_no"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_tgl"] = "Date";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_tgl"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_tgl"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_alamat"] = "Address";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_alamat"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_alamat"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_tlp"] = "Phone Number";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_tlp"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_tlp"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_fax"] = "Fax Number";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_fax"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_fax"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_email"] = "Email";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_email"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_email"] = "";
	$fieldLabelsm_asuransi["English"]["m_asuransi_fl"] = "M Asuransi Fl";
	$fieldToolTipsm_asuransi["English"]["m_asuransi_fl"] = "";
	$placeHoldersm_asuransi["English"]["m_asuransi_fl"] = "";
	$fieldLabelsm_asuransi["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_asuransi["English"]["is_active"] = "";
	$placeHoldersm_asuransi["English"]["is_active"] = "";
	$fieldLabelsm_asuransi["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_asuransi["English"]["is_delete"] = "";
	$placeHoldersm_asuransi["English"]["is_delete"] = "";
	$fieldLabelsm_asuransi["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_asuransi["English"]["deleted_date"] = "";
	$placeHoldersm_asuransi["English"]["deleted_date"] = "";
	$fieldLabelsm_asuransi["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_asuransi["English"]["created_date"] = "";
	$placeHoldersm_asuransi["English"]["created_date"] = "";
	$fieldLabelsm_asuransi["English"]["created_by"] = "Created By";
	$fieldToolTipsm_asuransi["English"]["created_by"] = "";
	$placeHoldersm_asuransi["English"]["created_by"] = "";
	$fieldLabelsm_asuransi["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_asuransi["English"]["last_update_by"] = "";
	$placeHoldersm_asuransi["English"]["last_update_by"] = "";
	$fieldLabelsm_asuransi["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_asuransi["English"]["last_update_date"] = "";
	$placeHoldersm_asuransi["English"]["last_update_date"] = "";
	if (count($fieldToolTipsm_asuransi["English"]))
		$tdatam_asuransi[".isUseToolTips"] = true;
}


	$tdatam_asuransi[".NCSearch"] = true;



$tdatam_asuransi[".shortTableName"] = "m_asuransi";
$tdatam_asuransi[".nSecOptions"] = 0;

$tdatam_asuransi[".mainTableOwnerID"] = "";
$tdatam_asuransi[".entityType"] = 0;
$tdatam_asuransi[".connId"] = "u736239518tsundbat154412412";


$tdatam_asuransi[".strOriginalTableName"] = "m_asuransi";

	



$tdatam_asuransi[".showAddInPopup"] = false;

$tdatam_asuransi[".showEditInPopup"] = false;

$tdatam_asuransi[".showViewInPopup"] = false;

$tdatam_asuransi[".listAjax"] = false;
//	temporary
//$tdatam_asuransi[".listAjax"] = false;

	$tdatam_asuransi[".audit"] = true;

	$tdatam_asuransi[".locking"] = false;


$pages = $tdatam_asuransi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_asuransi[".edit"] = true;
	$tdatam_asuransi[".afterEditAction"] = 1;
	$tdatam_asuransi[".closePopupAfterEdit"] = 1;
	$tdatam_asuransi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_asuransi[".add"] = true;
$tdatam_asuransi[".afterAddAction"] = 1;
$tdatam_asuransi[".closePopupAfterAdd"] = 1;
$tdatam_asuransi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_asuransi[".list"] = true;
}



$tdatam_asuransi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_asuransi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_asuransi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_asuransi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_asuransi[".printFriendly"] = true;
}



$tdatam_asuransi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_asuransi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_asuransi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_asuransi[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_asuransi[".ajaxCodeSnippetAdded"] = false;

$tdatam_asuransi[".buttonsAdded"] = false;

$tdatam_asuransi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_asuransi[".isUseTimeForSearch"] = false;


$tdatam_asuransi[".badgeColor"] = "8FBC8B";


$tdatam_asuransi[".allSearchFields"] = array();
$tdatam_asuransi[".filterFields"] = array();
$tdatam_asuransi[".requiredSearchFields"] = array();

$tdatam_asuransi[".googleLikeFields"] = array();
$tdatam_asuransi[".googleLikeFields"][] = "id";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_type";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_nama";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_no";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_tgl";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_alamat";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_tlp";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_fax";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_email";
$tdatam_asuransi[".googleLikeFields"][] = "m_asuransi_fl";
$tdatam_asuransi[".googleLikeFields"][] = "is_active";
$tdatam_asuransi[".googleLikeFields"][] = "is_delete";
$tdatam_asuransi[".googleLikeFields"][] = "deleted_date";
$tdatam_asuransi[".googleLikeFields"][] = "created_date";
$tdatam_asuransi[".googleLikeFields"][] = "created_by";
$tdatam_asuransi[".googleLikeFields"][] = "last_update_by";
$tdatam_asuransi[".googleLikeFields"][] = "last_update_date";



$tdatam_asuransi[".tableType"] = "list";

$tdatam_asuransi[".printerPageOrientation"] = 0;
$tdatam_asuransi[".nPrinterPageScale"] = 100;

$tdatam_asuransi[".nPrinterSplitRecords"] = 40;

$tdatam_asuransi[".geocodingEnabled"] = false;




$tdatam_asuransi[".isDisplayLoading"] = true;






$tdatam_asuransi[".pageSize"] = 20;

$tdatam_asuransi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_asuransi[".strOrderBy"] = $tstrOrderBy;

$tdatam_asuransi[".orderindexes"] = array();


$tdatam_asuransi[".sqlHead"] = "SELECT id,  	m_asuransi_type,  	m_asuransi_nama,  	m_asuransi_no,  	m_asuransi_tgl,  	m_asuransi_alamat,  	m_asuransi_tlp,  	m_asuransi_fax,  	m_asuransi_email,  	m_asuransi_fl,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$tdatam_asuransi[".sqlFrom"] = "FROM m_asuransi";
$tdatam_asuransi[".sqlWhereExpr"] = "";
$tdatam_asuransi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_asuransi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_asuransi[".arrGroupsPerPage"] = $arrGPP;

$tdatam_asuransi[".highlightSearchResults"] = true;

$tableKeysm_asuransi = array();
$tableKeysm_asuransi[] = "id";
$tdatam_asuransi[".Keys"] = $tableKeysm_asuransi;


$tdatam_asuransi[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","id");
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


	$tdatam_asuransi["id"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "id";
//	m_asuransi_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_asuransi_type";
	$fdata["GoodName"] = "m_asuransi_type";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_asuransi_type";

		$fdata["sourceSingle"] = "m_asuransi_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_type";

	
	
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


	$tdatam_asuransi["m_asuransi_type"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_type";
//	m_asuransi_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_asuransi_nama";
	$fdata["GoodName"] = "m_asuransi_nama";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_asuransi_nama";

		$fdata["sourceSingle"] = "m_asuransi_nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_nama";

	
	
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


	$tdatam_asuransi["m_asuransi_nama"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_nama";
//	m_asuransi_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_asuransi_no";
	$fdata["GoodName"] = "m_asuransi_no";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_asuransi_no";

		$fdata["sourceSingle"] = "m_asuransi_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_no";

	
	
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


	$tdatam_asuransi["m_asuransi_no"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_no";
//	m_asuransi_tgl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_asuransi_tgl";
	$fdata["GoodName"] = "m_asuransi_tgl";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_tgl");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "m_asuransi_tgl";

		$fdata["sourceSingle"] = "m_asuransi_tgl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_tgl";

	
	
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


	$tdatam_asuransi["m_asuransi_tgl"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_tgl";
//	m_asuransi_alamat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_asuransi_alamat";
	$fdata["GoodName"] = "m_asuransi_alamat";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_alamat");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_asuransi_alamat";

		$fdata["sourceSingle"] = "m_asuransi_alamat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_alamat";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatam_asuransi["m_asuransi_alamat"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_alamat";
//	m_asuransi_tlp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "m_asuransi_tlp";
	$fdata["GoodName"] = "m_asuransi_tlp";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_tlp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_asuransi_tlp";

		$fdata["sourceSingle"] = "m_asuransi_tlp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_tlp";

	
	
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


	$tdatam_asuransi["m_asuransi_tlp"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_tlp";
//	m_asuransi_fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "m_asuransi_fax";
	$fdata["GoodName"] = "m_asuransi_fax";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_fax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_asuransi_fax";

		$fdata["sourceSingle"] = "m_asuransi_fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_fax";

	
	
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


	$tdatam_asuransi["m_asuransi_fax"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_fax";
//	m_asuransi_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "m_asuransi_email";
	$fdata["GoodName"] = "m_asuransi_email";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_asuransi_email";

		$fdata["sourceSingle"] = "m_asuransi_email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_email";

	
	
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


	$tdatam_asuransi["m_asuransi_email"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_email";
//	m_asuransi_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "m_asuransi_fl";
	$fdata["GoodName"] = "m_asuransi_fl";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","m_asuransi_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_asuransi_fl";

		$fdata["sourceSingle"] = "m_asuransi_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_asuransi_fl";

	
	
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


	$tdatam_asuransi["m_asuransi_fl"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "m_asuransi_fl";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","is_active");
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


	$tdatam_asuransi["is_active"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","is_delete");
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


	$tdatam_asuransi["is_delete"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","deleted_date");
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


	$tdatam_asuransi["deleted_date"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","created_date");
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


	$tdatam_asuransi["created_date"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","created_by");
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


	$tdatam_asuransi["created_by"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","last_update_by");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatam_asuransi["last_update_by"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_asuransi";
	$fdata["Label"] = GetFieldLabel("m_asuransi","last_update_date");
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


	$tdatam_asuransi["last_update_date"] = $fdata;
		$tdatam_asuransi[".searchableFields"][] = "last_update_date";


$tables_data["m_asuransi"]=&$tdatam_asuransi;
$field_labels["m_asuransi"] = &$fieldLabelsm_asuransi;
$fieldToolTips["m_asuransi"] = &$fieldToolTipsm_asuransi;
$placeHolders["m_asuransi"] = &$placeHoldersm_asuransi;
$page_titles["m_asuransi"] = &$pageTitlesm_asuransi;


changeTextControlsToDate( "m_asuransi" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_asuransi"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_asuransi"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_asuransi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	m_asuransi_type,  	m_asuransi_nama,  	m_asuransi_no,  	m_asuransi_tgl,  	m_asuransi_alamat,  	m_asuransi_tlp,  	m_asuransi_fax,  	m_asuransi_email,  	m_asuransi_fl,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$proto0["m_strFrom"] = "FROM m_asuransi";
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
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_asuransi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_type",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto8["m_sql"] = "m_asuransi_type";
$proto8["m_srcTableName"] = "m_asuransi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_nama",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto10["m_sql"] = "m_asuransi_nama";
$proto10["m_srcTableName"] = "m_asuransi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_no",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto12["m_sql"] = "m_asuransi_no";
$proto12["m_srcTableName"] = "m_asuransi";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_tgl",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto14["m_sql"] = "m_asuransi_tgl";
$proto14["m_srcTableName"] = "m_asuransi";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_alamat",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto16["m_sql"] = "m_asuransi_alamat";
$proto16["m_srcTableName"] = "m_asuransi";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_tlp",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto18["m_sql"] = "m_asuransi_tlp";
$proto18["m_srcTableName"] = "m_asuransi";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_fax",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto20["m_sql"] = "m_asuransi_fax";
$proto20["m_srcTableName"] = "m_asuransi";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_email",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto22["m_sql"] = "m_asuransi_email";
$proto22["m_srcTableName"] = "m_asuransi";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "m_asuransi_fl",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto24["m_sql"] = "m_asuransi_fl";
$proto24["m_srcTableName"] = "m_asuransi";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto26["m_sql"] = "is_active";
$proto26["m_srcTableName"] = "m_asuransi";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto28["m_sql"] = "is_delete";
$proto28["m_srcTableName"] = "m_asuransi";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto30["m_sql"] = "deleted_date";
$proto30["m_srcTableName"] = "m_asuransi";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto32["m_sql"] = "created_date";
$proto32["m_srcTableName"] = "m_asuransi";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto34["m_sql"] = "created_by";
$proto34["m_srcTableName"] = "m_asuransi";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto36["m_sql"] = "last_update_by";
$proto36["m_srcTableName"] = "m_asuransi";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_asuransi",
	"m_srcTableName" => "m_asuransi"
));

$proto38["m_sql"] = "last_update_date";
$proto38["m_srcTableName"] = "m_asuransi";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "m_asuransi";
$proto41["m_srcTableName"] = "m_asuransi";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "id";
$proto41["m_columns"][] = "m_asuransi_type";
$proto41["m_columns"][] = "m_asuransi_nama";
$proto41["m_columns"][] = "m_asuransi_no";
$proto41["m_columns"][] = "m_asuransi_tgl";
$proto41["m_columns"][] = "m_asuransi_alamat";
$proto41["m_columns"][] = "m_asuransi_tlp";
$proto41["m_columns"][] = "m_asuransi_fax";
$proto41["m_columns"][] = "m_asuransi_email";
$proto41["m_columns"][] = "m_asuransi_fl";
$proto41["m_columns"][] = "is_active";
$proto41["m_columns"][] = "is_delete";
$proto41["m_columns"][] = "deleted_date";
$proto41["m_columns"][] = "created_date";
$proto41["m_columns"][] = "created_by";
$proto41["m_columns"][] = "last_update_by";
$proto41["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "m_asuransi";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "m_asuransi";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_asuransi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_asuransi = createSqlQuery_m_asuransi();


	
				;

																	

$tdatam_asuransi[".sqlquery"] = $queryData_m_asuransi;



$tdatam_asuransi[".hasEvents"] = false;

?>