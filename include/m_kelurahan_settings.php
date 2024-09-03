<?php
$tdatam_kelurahan = array();
$tdatam_kelurahan[".searchableFields"] = array();
$tdatam_kelurahan[".ShortName"] = "m_kelurahan";
$tdatam_kelurahan[".OwnerID"] = "";
$tdatam_kelurahan[".OriginalTable"] = "m_kelurahan";


$tdatam_kelurahan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_kelurahan[".originalPagesByType"] = $tdatam_kelurahan[".pagesByType"];
$tdatam_kelurahan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_kelurahan[".originalPages"] = $tdatam_kelurahan[".pages"];
$tdatam_kelurahan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_kelurahan[".originalDefaultPages"] = $tdatam_kelurahan[".defaultPages"];

//	field labels
$fieldLabelsm_kelurahan = array();
$fieldToolTipsm_kelurahan = array();
$pageTitlesm_kelurahan = array();
$placeHoldersm_kelurahan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_kelurahan["English"] = array();
	$fieldToolTipsm_kelurahan["English"] = array();
	$placeHoldersm_kelurahan["English"] = array();
	$pageTitlesm_kelurahan["English"] = array();
	$fieldLabelsm_kelurahan["English"]["m_kelurahan_id"] = "M Kelurahan Id";
	$fieldToolTipsm_kelurahan["English"]["m_kelurahan_id"] = "";
	$placeHoldersm_kelurahan["English"]["m_kelurahan_id"] = "";
	$fieldLabelsm_kelurahan["English"]["m_provinsi_id"] = "M Provinsi Id";
	$fieldToolTipsm_kelurahan["English"]["m_provinsi_id"] = "";
	$placeHoldersm_kelurahan["English"]["m_provinsi_id"] = "";
	$fieldLabelsm_kelurahan["English"]["m_kabupaten_id"] = "M Kabupaten Id";
	$fieldToolTipsm_kelurahan["English"]["m_kabupaten_id"] = "";
	$placeHoldersm_kelurahan["English"]["m_kabupaten_id"] = "";
	$fieldLabelsm_kelurahan["English"]["m_kecamatan_id"] = "M Kecamatan Id";
	$fieldToolTipsm_kelurahan["English"]["m_kecamatan_id"] = "";
	$placeHoldersm_kelurahan["English"]["m_kecamatan_id"] = "";
	$fieldLabelsm_kelurahan["English"]["m_keluarahan_nama"] = "M Keluarahan Nama";
	$fieldToolTipsm_kelurahan["English"]["m_keluarahan_nama"] = "";
	$placeHoldersm_kelurahan["English"]["m_keluarahan_nama"] = "";
	$fieldLabelsm_kelurahan["English"]["m_keluarahan_kodepos"] = "M Keluarahan Kodepos";
	$fieldToolTipsm_kelurahan["English"]["m_keluarahan_kodepos"] = "";
	$placeHoldersm_kelurahan["English"]["m_keluarahan_kodepos"] = "";
	$fieldLabelsm_kelurahan["English"]["m_keluarahan_latitude"] = "M Keluarahan Latitude";
	$fieldToolTipsm_kelurahan["English"]["m_keluarahan_latitude"] = "";
	$placeHoldersm_kelurahan["English"]["m_keluarahan_latitude"] = "";
	$fieldLabelsm_kelurahan["English"]["m_kelurahan__longitude"] = "M Kelurahan  Longitude";
	$fieldToolTipsm_kelurahan["English"]["m_kelurahan__longitude"] = "";
	$placeHoldersm_kelurahan["English"]["m_kelurahan__longitude"] = "";
	if (count($fieldToolTipsm_kelurahan["English"]))
		$tdatam_kelurahan[".isUseToolTips"] = true;
}


	$tdatam_kelurahan[".NCSearch"] = true;



$tdatam_kelurahan[".shortTableName"] = "m_kelurahan";
$tdatam_kelurahan[".nSecOptions"] = 0;

$tdatam_kelurahan[".mainTableOwnerID"] = "";
$tdatam_kelurahan[".entityType"] = 0;
$tdatam_kelurahan[".connId"] = "u736239518tsundbat154412412";


$tdatam_kelurahan[".strOriginalTableName"] = "m_kelurahan";

	



$tdatam_kelurahan[".showAddInPopup"] = false;

$tdatam_kelurahan[".showEditInPopup"] = false;

$tdatam_kelurahan[".showViewInPopup"] = false;

$tdatam_kelurahan[".listAjax"] = false;
//	temporary
//$tdatam_kelurahan[".listAjax"] = false;

	$tdatam_kelurahan[".audit"] = false;

	$tdatam_kelurahan[".locking"] = false;


$pages = $tdatam_kelurahan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_kelurahan[".edit"] = true;
	$tdatam_kelurahan[".afterEditAction"] = 1;
	$tdatam_kelurahan[".closePopupAfterEdit"] = 1;
	$tdatam_kelurahan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_kelurahan[".add"] = true;
$tdatam_kelurahan[".afterAddAction"] = 1;
$tdatam_kelurahan[".closePopupAfterAdd"] = 1;
$tdatam_kelurahan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_kelurahan[".list"] = true;
}



$tdatam_kelurahan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_kelurahan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_kelurahan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_kelurahan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_kelurahan[".printFriendly"] = true;
}



$tdatam_kelurahan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_kelurahan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_kelurahan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_kelurahan[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_kelurahan[".ajaxCodeSnippetAdded"] = false;

$tdatam_kelurahan[".buttonsAdded"] = false;

$tdatam_kelurahan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_kelurahan[".isUseTimeForSearch"] = false;


$tdatam_kelurahan[".badgeColor"] = "778899";


$tdatam_kelurahan[".allSearchFields"] = array();
$tdatam_kelurahan[".filterFields"] = array();
$tdatam_kelurahan[".requiredSearchFields"] = array();

$tdatam_kelurahan[".googleLikeFields"] = array();
$tdatam_kelurahan[".googleLikeFields"][] = "m_kelurahan_id";
$tdatam_kelurahan[".googleLikeFields"][] = "m_provinsi_id";
$tdatam_kelurahan[".googleLikeFields"][] = "m_kabupaten_id";
$tdatam_kelurahan[".googleLikeFields"][] = "m_kecamatan_id";
$tdatam_kelurahan[".googleLikeFields"][] = "m_keluarahan_nama";
$tdatam_kelurahan[".googleLikeFields"][] = "m_keluarahan_kodepos";
$tdatam_kelurahan[".googleLikeFields"][] = "m_keluarahan_latitude";
$tdatam_kelurahan[".googleLikeFields"][] = "m_kelurahan_ longitude";



$tdatam_kelurahan[".tableType"] = "list";

$tdatam_kelurahan[".printerPageOrientation"] = 0;
$tdatam_kelurahan[".nPrinterPageScale"] = 100;

$tdatam_kelurahan[".nPrinterSplitRecords"] = 40;

$tdatam_kelurahan[".geocodingEnabled"] = false;










$tdatam_kelurahan[".pageSize"] = 20;

$tdatam_kelurahan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_kelurahan[".strOrderBy"] = $tstrOrderBy;

$tdatam_kelurahan[".orderindexes"] = array();


$tdatam_kelurahan[".sqlHead"] = "SELECT m_kelurahan_id,  	m_provinsi_id,  	m_kabupaten_id,  	m_kecamatan_id,  	m_keluarahan_nama,  	m_keluarahan_kodepos,  	m_keluarahan_latitude,  	`m_kelurahan_ longitude`";
$tdatam_kelurahan[".sqlFrom"] = "FROM m_kelurahan";
$tdatam_kelurahan[".sqlWhereExpr"] = "";
$tdatam_kelurahan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_kelurahan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_kelurahan[".arrGroupsPerPage"] = $arrGPP;

$tdatam_kelurahan[".highlightSearchResults"] = true;

$tableKeysm_kelurahan = array();
$tableKeysm_kelurahan[] = "m_kelurahan_id";
$tdatam_kelurahan[".Keys"] = $tableKeysm_kelurahan;


$tdatam_kelurahan[".hideMobileList"] = array();




//	m_kelurahan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_kelurahan_id";
	$fdata["GoodName"] = "m_kelurahan_id";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_kelurahan_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_kelurahan_id";

		$fdata["sourceSingle"] = "m_kelurahan_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kelurahan_id";

	
	
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


	$tdatam_kelurahan["m_kelurahan_id"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_kelurahan_id";
//	m_provinsi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_provinsi_id";
	$fdata["GoodName"] = "m_provinsi_id";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_provinsi_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_provinsi_id";

		$fdata["sourceSingle"] = "m_provinsi_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_provinsi_id";

	
	
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


	$tdatam_kelurahan["m_provinsi_id"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_provinsi_id";
//	m_kabupaten_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_kabupaten_id";
	$fdata["GoodName"] = "m_kabupaten_id";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_kabupaten_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_kabupaten_id";

		$fdata["sourceSingle"] = "m_kabupaten_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kabupaten_id";

	
	
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


	$tdatam_kelurahan["m_kabupaten_id"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_kabupaten_id";
//	m_kecamatan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_kecamatan_id";
	$fdata["GoodName"] = "m_kecamatan_id";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_kecamatan_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_kecamatan_id";

		$fdata["sourceSingle"] = "m_kecamatan_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kecamatan_id";

	
	
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


	$tdatam_kelurahan["m_kecamatan_id"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_kecamatan_id";
//	m_keluarahan_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_keluarahan_nama";
	$fdata["GoodName"] = "m_keluarahan_nama";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_keluarahan_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_keluarahan_nama";

		$fdata["sourceSingle"] = "m_keluarahan_nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_keluarahan_nama";

	
	
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


	$tdatam_kelurahan["m_keluarahan_nama"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_keluarahan_nama";
//	m_keluarahan_kodepos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_keluarahan_kodepos";
	$fdata["GoodName"] = "m_keluarahan_kodepos";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_keluarahan_kodepos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_keluarahan_kodepos";

		$fdata["sourceSingle"] = "m_keluarahan_kodepos";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_keluarahan_kodepos";

	
	
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


	$tdatam_kelurahan["m_keluarahan_kodepos"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_keluarahan_kodepos";
//	m_keluarahan_latitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "m_keluarahan_latitude";
	$fdata["GoodName"] = "m_keluarahan_latitude";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_keluarahan_latitude");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_keluarahan_latitude";

		$fdata["sourceSingle"] = "m_keluarahan_latitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_keluarahan_latitude";

	
	
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


	$tdatam_kelurahan["m_keluarahan_latitude"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_keluarahan_latitude";
//	m_kelurahan_ longitude
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "m_kelurahan_ longitude";
	$fdata["GoodName"] = "m_kelurahan__longitude";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("m_kelurahan","m_kelurahan__longitude");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kelurahan_ longitude";

		$fdata["sourceSingle"] = "m_kelurahan_ longitude";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`m_kelurahan_ longitude`";

	
	
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


	$tdatam_kelurahan["m_kelurahan_ longitude"] = $fdata;
		$tdatam_kelurahan[".searchableFields"][] = "m_kelurahan_ longitude";


$tables_data["m_kelurahan"]=&$tdatam_kelurahan;
$field_labels["m_kelurahan"] = &$fieldLabelsm_kelurahan;
$fieldToolTips["m_kelurahan"] = &$fieldToolTipsm_kelurahan;
$placeHolders["m_kelurahan"] = &$placeHoldersm_kelurahan;
$page_titles["m_kelurahan"] = &$pageTitlesm_kelurahan;


changeTextControlsToDate( "m_kelurahan" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_kelurahan"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_kelurahan"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_kelurahan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_kelurahan_id,  	m_provinsi_id,  	m_kabupaten_id,  	m_kecamatan_id,  	m_keluarahan_nama,  	m_keluarahan_kodepos,  	m_keluarahan_latitude,  	`m_kelurahan_ longitude`";
$proto0["m_strFrom"] = "FROM m_kelurahan";
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
	"m_strName" => "m_kelurahan_id",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto6["m_sql"] = "m_kelurahan_id";
$proto6["m_srcTableName"] = "m_kelurahan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_provinsi_id",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto8["m_sql"] = "m_provinsi_id";
$proto8["m_srcTableName"] = "m_kelurahan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kabupaten_id",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto10["m_sql"] = "m_kabupaten_id";
$proto10["m_srcTableName"] = "m_kelurahan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kecamatan_id",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto12["m_sql"] = "m_kecamatan_id";
$proto12["m_srcTableName"] = "m_kelurahan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_keluarahan_nama",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto14["m_sql"] = "m_keluarahan_nama";
$proto14["m_srcTableName"] = "m_kelurahan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_keluarahan_kodepos",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto16["m_sql"] = "m_keluarahan_kodepos";
$proto16["m_srcTableName"] = "m_kelurahan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "m_keluarahan_latitude",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto18["m_sql"] = "m_keluarahan_latitude";
$proto18["m_srcTableName"] = "m_kelurahan";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kelurahan_ longitude",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "m_kelurahan"
));

$proto20["m_sql"] = "`m_kelurahan_ longitude`";
$proto20["m_srcTableName"] = "m_kelurahan";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "m_kelurahan";
$proto23["m_srcTableName"] = "m_kelurahan";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "m_kelurahan_id";
$proto23["m_columns"][] = "m_provinsi_id";
$proto23["m_columns"][] = "m_kabupaten_id";
$proto23["m_columns"][] = "m_kecamatan_id";
$proto23["m_columns"][] = "m_keluarahan_nama";
$proto23["m_columns"][] = "m_keluarahan_kodepos";
$proto23["m_columns"][] = "m_keluarahan_latitude";
$proto23["m_columns"][] = "m_kelurahan_ longitude";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "m_kelurahan";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "m_kelurahan";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_kelurahan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_kelurahan = createSqlQuery_m_kelurahan();


	
				;

								

$tdatam_kelurahan[".sqlquery"] = $queryData_m_kelurahan;



$tdatam_kelurahan[".hasEvents"] = false;

?>