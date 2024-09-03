<?php
$tdatav_m_kecamatan = array();
$tdatav_m_kecamatan[".searchableFields"] = array();
$tdatav_m_kecamatan[".ShortName"] = "v_m_kecamatan";
$tdatav_m_kecamatan[".OwnerID"] = "";
$tdatav_m_kecamatan[".OriginalTable"] = "t_delivery_address";


$tdatav_m_kecamatan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatav_m_kecamatan[".originalPagesByType"] = $tdatav_m_kecamatan[".pagesByType"];
$tdatav_m_kecamatan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatav_m_kecamatan[".originalPages"] = $tdatav_m_kecamatan[".pages"];
$tdatav_m_kecamatan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatav_m_kecamatan[".originalDefaultPages"] = $tdatav_m_kecamatan[".defaultPages"];

//	field labels
$fieldLabelsv_m_kecamatan = array();
$fieldToolTipsv_m_kecamatan = array();
$pageTitlesv_m_kecamatan = array();
$placeHoldersv_m_kecamatan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_m_kecamatan["English"] = array();
	$fieldToolTipsv_m_kecamatan["English"] = array();
	$placeHoldersv_m_kecamatan["English"] = array();
	$pageTitlesv_m_kecamatan["English"] = array();
	$fieldLabelsv_m_kecamatan["English"]["m_kabupaten_id"] = "M Kabupaten Id";
	$fieldToolTipsv_m_kecamatan["English"]["m_kabupaten_id"] = "";
	$placeHoldersv_m_kecamatan["English"]["m_kabupaten_id"] = "";
	$fieldLabelsv_m_kecamatan["English"]["m_kecamatan_nama"] = "Kecamatan";
	$fieldToolTipsv_m_kecamatan["English"]["m_kecamatan_nama"] = "";
	$placeHoldersv_m_kecamatan["English"]["m_kecamatan_nama"] = "";
	$fieldLabelsv_m_kecamatan["English"]["m_keluarahan_nama"] = "Keluarahan";
	$fieldToolTipsv_m_kecamatan["English"]["m_keluarahan_nama"] = "";
	$placeHoldersv_m_kecamatan["English"]["m_keluarahan_nama"] = "";
	$fieldLabelsv_m_kecamatan["English"]["m_keluarahan_kodepos"] = "Kodepos";
	$fieldToolTipsv_m_kecamatan["English"]["m_keluarahan_kodepos"] = "";
	$placeHoldersv_m_kecamatan["English"]["m_keluarahan_kodepos"] = "";
	$fieldLabelsv_m_kecamatan["English"]["m_kelurahan_id"] = "M Kelurahan Id";
	$fieldToolTipsv_m_kecamatan["English"]["m_kelurahan_id"] = "";
	$placeHoldersv_m_kecamatan["English"]["m_kelurahan_id"] = "";
	$fieldLabelsv_m_kecamatan["English"]["m_kecamatan_id"] = "M Kecamatan Id";
	$fieldToolTipsv_m_kecamatan["English"]["m_kecamatan_id"] = "";
	$placeHoldersv_m_kecamatan["English"]["m_kecamatan_id"] = "";
	if (count($fieldToolTipsv_m_kecamatan["English"]))
		$tdatav_m_kecamatan[".isUseToolTips"] = true;
}


	$tdatav_m_kecamatan[".NCSearch"] = true;



$tdatav_m_kecamatan[".shortTableName"] = "v_m_kecamatan";
$tdatav_m_kecamatan[".nSecOptions"] = 0;

$tdatav_m_kecamatan[".mainTableOwnerID"] = "";
$tdatav_m_kecamatan[".entityType"] = 1;
$tdatav_m_kecamatan[".connId"] = "u736239518tsundbat154412412";


$tdatav_m_kecamatan[".strOriginalTableName"] = "t_delivery_address";

	



$tdatav_m_kecamatan[".showAddInPopup"] = false;

$tdatav_m_kecamatan[".showEditInPopup"] = false;

$tdatav_m_kecamatan[".showViewInPopup"] = false;

$tdatav_m_kecamatan[".listAjax"] = false;
//	temporary
//$tdatav_m_kecamatan[".listAjax"] = false;

	$tdatav_m_kecamatan[".audit"] = false;

	$tdatav_m_kecamatan[".locking"] = false;


$pages = $tdatav_m_kecamatan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_m_kecamatan[".edit"] = true;
	$tdatav_m_kecamatan[".afterEditAction"] = 1;
	$tdatav_m_kecamatan[".closePopupAfterEdit"] = 1;
	$tdatav_m_kecamatan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_m_kecamatan[".add"] = true;
$tdatav_m_kecamatan[".afterAddAction"] = 1;
$tdatav_m_kecamatan[".closePopupAfterAdd"] = 1;
$tdatav_m_kecamatan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_m_kecamatan[".list"] = true;
}



$tdatav_m_kecamatan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_m_kecamatan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_m_kecamatan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_m_kecamatan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_m_kecamatan[".printFriendly"] = true;
}



$tdatav_m_kecamatan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_m_kecamatan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_m_kecamatan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_m_kecamatan[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_m_kecamatan[".ajaxCodeSnippetAdded"] = false;

$tdatav_m_kecamatan[".buttonsAdded"] = false;

$tdatav_m_kecamatan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_m_kecamatan[".isUseTimeForSearch"] = false;


$tdatav_m_kecamatan[".badgeColor"] = "DC143C";


$tdatav_m_kecamatan[".allSearchFields"] = array();
$tdatav_m_kecamatan[".filterFields"] = array();
$tdatav_m_kecamatan[".requiredSearchFields"] = array();

$tdatav_m_kecamatan[".googleLikeFields"] = array();
$tdatav_m_kecamatan[".googleLikeFields"][] = "m_kabupaten_id";
$tdatav_m_kecamatan[".googleLikeFields"][] = "m_kecamatan_nama";
$tdatav_m_kecamatan[".googleLikeFields"][] = "m_keluarahan_nama";
$tdatav_m_kecamatan[".googleLikeFields"][] = "m_keluarahan_kodepos";
$tdatav_m_kecamatan[".googleLikeFields"][] = "m_kelurahan_id";
$tdatav_m_kecamatan[".googleLikeFields"][] = "m_kecamatan_id";



$tdatav_m_kecamatan[".tableType"] = "list";

$tdatav_m_kecamatan[".printerPageOrientation"] = 0;
$tdatav_m_kecamatan[".nPrinterPageScale"] = 100;

$tdatav_m_kecamatan[".nPrinterSplitRecords"] = 40;

$tdatav_m_kecamatan[".geocodingEnabled"] = false;










$tdatav_m_kecamatan[".pageSize"] = 20;

$tdatav_m_kecamatan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_m_kecamatan[".strOrderBy"] = $tstrOrderBy;

$tdatav_m_kecamatan[".orderindexes"] = array();


$tdatav_m_kecamatan[".sqlHead"] = "SELECT m_kecamatan.m_kabupaten_id,  m_kecamatan.m_kecamatan_nama,  m_kelurahan.m_keluarahan_nama,  m_kelurahan.m_keluarahan_kodepos,  m_kelurahan.m_kelurahan_id,  m_kecamatan.m_kecamatan_id";
$tdatav_m_kecamatan[".sqlFrom"] = "FROM m_kecamatan  INNER JOIN m_kelurahan ON m_kecamatan.m_provinsi_id = m_kelurahan.m_provinsi_id AND m_kecamatan.m_kecamatan_id = m_kelurahan.m_kecamatan_id";
$tdatav_m_kecamatan[".sqlWhereExpr"] = "";
$tdatav_m_kecamatan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_m_kecamatan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_m_kecamatan[".arrGroupsPerPage"] = $arrGPP;

$tdatav_m_kecamatan[".highlightSearchResults"] = true;

$tableKeysv_m_kecamatan = array();
$tdatav_m_kecamatan[".Keys"] = $tableKeysv_m_kecamatan;


$tdatav_m_kecamatan[".hideMobileList"] = array();




//	m_kabupaten_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_kabupaten_id";
	$fdata["GoodName"] = "m_kabupaten_id";
	$fdata["ownerTable"] = "m_kecamatan";
	$fdata["Label"] = GetFieldLabel("v_m_kecamatan","m_kabupaten_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_kabupaten_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kecamatan.m_kabupaten_id";

	
	
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


	$tdatav_m_kecamatan["m_kabupaten_id"] = $fdata;
		$tdatav_m_kecamatan[".searchableFields"][] = "m_kabupaten_id";
//	m_kecamatan_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_kecamatan_nama";
	$fdata["GoodName"] = "m_kecamatan_nama";
	$fdata["ownerTable"] = "m_kecamatan";
	$fdata["Label"] = GetFieldLabel("v_m_kecamatan","m_kecamatan_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kecamatan_nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kecamatan.m_kecamatan_nama";

	
	
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


	$tdatav_m_kecamatan["m_kecamatan_nama"] = $fdata;
		$tdatav_m_kecamatan[".searchableFields"][] = "m_kecamatan_nama";
//	m_keluarahan_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_keluarahan_nama";
	$fdata["GoodName"] = "m_keluarahan_nama";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("v_m_kecamatan","m_keluarahan_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_keluarahan_nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kelurahan.m_keluarahan_nama";

	
	
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


	$tdatav_m_kecamatan["m_keluarahan_nama"] = $fdata;
		$tdatav_m_kecamatan[".searchableFields"][] = "m_keluarahan_nama";
//	m_keluarahan_kodepos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_keluarahan_kodepos";
	$fdata["GoodName"] = "m_keluarahan_kodepos";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("v_m_kecamatan","m_keluarahan_kodepos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_keluarahan_kodepos";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kelurahan.m_keluarahan_kodepos";

	
	
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


	$tdatav_m_kecamatan["m_keluarahan_kodepos"] = $fdata;
		$tdatav_m_kecamatan[".searchableFields"][] = "m_keluarahan_kodepos";
//	m_kelurahan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_kelurahan_id";
	$fdata["GoodName"] = "m_kelurahan_id";
	$fdata["ownerTable"] = "m_kelurahan";
	$fdata["Label"] = GetFieldLabel("v_m_kecamatan","m_kelurahan_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_kelurahan_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kelurahan.m_kelurahan_id";

	
	
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


	$tdatav_m_kecamatan["m_kelurahan_id"] = $fdata;
		$tdatav_m_kecamatan[".searchableFields"][] = "m_kelurahan_id";
//	m_kecamatan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_kecamatan_id";
	$fdata["GoodName"] = "m_kecamatan_id";
	$fdata["ownerTable"] = "m_kecamatan";
	$fdata["Label"] = GetFieldLabel("v_m_kecamatan","m_kecamatan_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_kecamatan_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kecamatan.m_kecamatan_id";

	
	
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


	$tdatav_m_kecamatan["m_kecamatan_id"] = $fdata;
		$tdatav_m_kecamatan[".searchableFields"][] = "m_kecamatan_id";


$tables_data["v_m_kecamatan"]=&$tdatav_m_kecamatan;
$field_labels["v_m_kecamatan"] = &$fieldLabelsv_m_kecamatan;
$fieldToolTips["v_m_kecamatan"] = &$fieldToolTipsv_m_kecamatan;
$placeHolders["v_m_kecamatan"] = &$placeHoldersv_m_kecamatan;
$page_titles["v_m_kecamatan"] = &$pageTitlesv_m_kecamatan;


changeTextControlsToDate( "v_m_kecamatan" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_m_kecamatan"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_m_kecamatan"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_m_kecamatan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_kecamatan.m_kabupaten_id,  m_kecamatan.m_kecamatan_nama,  m_kelurahan.m_keluarahan_nama,  m_kelurahan.m_keluarahan_kodepos,  m_kelurahan.m_kelurahan_id,  m_kecamatan.m_kecamatan_id";
$proto0["m_strFrom"] = "FROM m_kecamatan  INNER JOIN m_kelurahan ON m_kecamatan.m_provinsi_id = m_kelurahan.m_provinsi_id AND m_kecamatan.m_kecamatan_id = m_kelurahan.m_kecamatan_id";
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
	"m_strName" => "m_kabupaten_id",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto6["m_sql"] = "m_kecamatan.m_kabupaten_id";
$proto6["m_srcTableName"] = "v_m_kecamatan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kecamatan_nama",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto8["m_sql"] = "m_kecamatan.m_kecamatan_nama";
$proto8["m_srcTableName"] = "v_m_kecamatan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_keluarahan_nama",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto10["m_sql"] = "m_kelurahan.m_keluarahan_nama";
$proto10["m_srcTableName"] = "v_m_kecamatan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_keluarahan_kodepos",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto12["m_sql"] = "m_kelurahan.m_keluarahan_kodepos";
$proto12["m_srcTableName"] = "v_m_kecamatan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kelurahan_id",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto14["m_sql"] = "m_kelurahan.m_kelurahan_id";
$proto14["m_srcTableName"] = "v_m_kecamatan";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kecamatan_id",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto16["m_sql"] = "m_kecamatan.m_kecamatan_id";
$proto16["m_srcTableName"] = "v_m_kecamatan";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "m_kecamatan";
$proto19["m_srcTableName"] = "v_m_kecamatan";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "m_kecamatan_id";
$proto19["m_columns"][] = "m_provinsi_id";
$proto19["m_columns"][] = "m_kabupaten_id";
$proto19["m_columns"][] = "m_kecamatan_nama";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "m_kecamatan";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "v_m_kecamatan";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "m_kelurahan";
$proto23["m_srcTableName"] = "v_m_kecamatan";
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
$proto22["m_sql"] = "INNER JOIN m_kelurahan ON m_kecamatan.m_provinsi_id = m_kelurahan.m_provinsi_id AND m_kecamatan.m_kecamatan_id = m_kelurahan.m_kecamatan_id";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "v_m_kecamatan";
$proto24=array();
$proto24["m_sql"] = "m_kelurahan.m_provinsi_id = m_kecamatan.m_provinsi_id AND m_kelurahan.m_kecamatan_id = m_kecamatan.m_kecamatan_id";
$proto24["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "m_kelurahan.m_provinsi_id = m_kecamatan.m_provinsi_id AND m_kelurahan.m_kecamatan_id = m_kecamatan.m_kecamatan_id"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
						$proto26=array();
$proto26["m_sql"] = "m_kecamatan.m_provinsi_id = m_kelurahan.m_provinsi_id";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_provinsi_id",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "= m_kelurahan.m_provinsi_id";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

			$proto24["m_contained"][]=$obj;
						$proto28=array();
$proto28["m_sql"] = "m_kecamatan.m_kecamatan_id = m_kelurahan.m_kecamatan_id";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_kecamatan_id",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "= m_kelurahan.m_kecamatan_id";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

			$proto24["m_contained"][]=$obj;
						$proto30=array();
$proto30["m_sql"] = "m_kelurahan.m_provinsi_id = m_kecamatan.m_provinsi_id";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_provinsi_id",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "= m_kecamatan.m_provinsi_id";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

			$proto24["m_contained"][]=$obj;
						$proto32=array();
$proto32["m_sql"] = "m_kelurahan.m_kecamatan_id = m_kecamatan.m_kecamatan_id";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_kecamatan_id",
	"m_strTable" => "m_kelurahan",
	"m_srcTableName" => "v_m_kecamatan"
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "= m_kecamatan.m_kecamatan_id";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

			$proto24["m_contained"][]=$obj;
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
$proto0["m_srcTableName"]="v_m_kecamatan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_m_kecamatan = createSqlQuery_v_m_kecamatan();


	
				;

						

$tdatav_m_kecamatan[".sqlquery"] = $queryData_v_m_kecamatan;



$tdatav_m_kecamatan[".hasEvents"] = false;

?>