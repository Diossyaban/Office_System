<?php
$tdatat_delivery_address = array();
$tdatat_delivery_address[".searchableFields"] = array();
$tdatat_delivery_address[".ShortName"] = "t_delivery_address";
$tdatat_delivery_address[".OwnerID"] = "";
$tdatat_delivery_address[".OriginalTable"] = "t_delivery_address";


$tdatat_delivery_address[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatat_delivery_address[".originalPagesByType"] = $tdatat_delivery_address[".pagesByType"];
$tdatat_delivery_address[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_address[".originalPages"] = $tdatat_delivery_address[".pages"];
$tdatat_delivery_address[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatat_delivery_address[".originalDefaultPages"] = $tdatat_delivery_address[".defaultPages"];

//	field labels
$fieldLabelst_delivery_address = array();
$fieldToolTipst_delivery_address = array();
$pageTitlest_delivery_address = array();
$placeHolderst_delivery_address = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_address["English"] = array();
	$fieldToolTipst_delivery_address["English"] = array();
	$placeHolderst_delivery_address["English"] = array();
	$pageTitlest_delivery_address["English"] = array();
	$fieldLabelst_delivery_address["English"]["t_delivery_address_id"] = "T Delivery Address Id";
	$fieldToolTipst_delivery_address["English"]["t_delivery_address_id"] = "";
	$placeHolderst_delivery_address["English"]["t_delivery_address_id"] = "";
	$fieldLabelst_delivery_address["English"]["t_delivery_address_to"] = "To";
	$fieldToolTipst_delivery_address["English"]["t_delivery_address_to"] = "";
	$placeHolderst_delivery_address["English"]["t_delivery_address_to"] = "";
	$fieldLabelst_delivery_address["English"]["t_delivery_address"] = "Address";
	$fieldToolTipst_delivery_address["English"]["t_delivery_address"] = "";
	$placeHolderst_delivery_address["English"]["t_delivery_address"] = "";
	$fieldLabelst_delivery_address["English"]["m_provinsi"] = "Provinsi";
	$fieldToolTipst_delivery_address["English"]["m_provinsi"] = "";
	$placeHolderst_delivery_address["English"]["m_provinsi"] = "";
	$fieldLabelst_delivery_address["English"]["m_kabupaten"] = "Kabupaten";
	$fieldToolTipst_delivery_address["English"]["m_kabupaten"] = "";
	$placeHolderst_delivery_address["English"]["m_kabupaten"] = "";
	$fieldLabelst_delivery_address["English"]["m_kecamatan"] = "Kecamatan";
	$fieldToolTipst_delivery_address["English"]["m_kecamatan"] = "";
	$placeHolderst_delivery_address["English"]["m_kecamatan"] = "";
	$fieldLabelst_delivery_address["English"]["m_kelurahan"] = "Kelurahan";
	$fieldToolTipst_delivery_address["English"]["m_kelurahan"] = "";
	$placeHolderst_delivery_address["English"]["m_kelurahan"] = "";
	$fieldLabelst_delivery_address["English"]["post_code"] = "Post Code";
	$fieldToolTipst_delivery_address["English"]["post_code"] = "";
	$placeHolderst_delivery_address["English"]["post_code"] = "";
	$fieldLabelst_delivery_address["English"]["add_user"] = "Add User";
	$fieldToolTipst_delivery_address["English"]["add_user"] = "";
	$placeHolderst_delivery_address["English"]["add_user"] = "";
	$fieldLabelst_delivery_address["English"]["add_date"] = "Add Date";
	$fieldToolTipst_delivery_address["English"]["add_date"] = "";
	$placeHolderst_delivery_address["English"]["add_date"] = "";
	if (count($fieldToolTipst_delivery_address["English"]))
		$tdatat_delivery_address[".isUseToolTips"] = true;
}


	$tdatat_delivery_address[".NCSearch"] = true;



$tdatat_delivery_address[".shortTableName"] = "t_delivery_address";
$tdatat_delivery_address[".nSecOptions"] = 0;

$tdatat_delivery_address[".mainTableOwnerID"] = "";
$tdatat_delivery_address[".entityType"] = 0;
$tdatat_delivery_address[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_address[".strOriginalTableName"] = "t_delivery_address";

	



$tdatat_delivery_address[".showAddInPopup"] = false;

$tdatat_delivery_address[".showEditInPopup"] = false;

$tdatat_delivery_address[".showViewInPopup"] = false;

$tdatat_delivery_address[".listAjax"] = false;
//	temporary
//$tdatat_delivery_address[".listAjax"] = false;

	$tdatat_delivery_address[".audit"] = false;

	$tdatat_delivery_address[".locking"] = false;


$pages = $tdatat_delivery_address[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_address[".edit"] = true;
	$tdatat_delivery_address[".afterEditAction"] = 1;
	$tdatat_delivery_address[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_address[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_address[".add"] = true;
$tdatat_delivery_address[".afterAddAction"] = 1;
$tdatat_delivery_address[".closePopupAfterAdd"] = 1;
$tdatat_delivery_address[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_address[".list"] = true;
}



$tdatat_delivery_address[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_address[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_address[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_address[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_address[".printFriendly"] = true;
}



$tdatat_delivery_address[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_address[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_address[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_address[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_delivery_address[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_address[".buttonsAdded"] = false;

$tdatat_delivery_address[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_address[".isUseTimeForSearch"] = false;


$tdatat_delivery_address[".badgeColor"] = "DAA520";


$tdatat_delivery_address[".allSearchFields"] = array();
$tdatat_delivery_address[".filterFields"] = array();
$tdatat_delivery_address[".requiredSearchFields"] = array();

$tdatat_delivery_address[".googleLikeFields"] = array();
$tdatat_delivery_address[".googleLikeFields"][] = "t_delivery_address_id";
$tdatat_delivery_address[".googleLikeFields"][] = "t_delivery_address_to";
$tdatat_delivery_address[".googleLikeFields"][] = "t_delivery_address";
$tdatat_delivery_address[".googleLikeFields"][] = "m_provinsi";
$tdatat_delivery_address[".googleLikeFields"][] = "m_kabupaten";
$tdatat_delivery_address[".googleLikeFields"][] = "m_kecamatan";
$tdatat_delivery_address[".googleLikeFields"][] = "m_kelurahan";
$tdatat_delivery_address[".googleLikeFields"][] = "post_code";
$tdatat_delivery_address[".googleLikeFields"][] = "add_user";
$tdatat_delivery_address[".googleLikeFields"][] = "add_date";



$tdatat_delivery_address[".tableType"] = "list";

$tdatat_delivery_address[".printerPageOrientation"] = 0;
$tdatat_delivery_address[".nPrinterPageScale"] = 100;

$tdatat_delivery_address[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_address[".geocodingEnabled"] = false;




$tdatat_delivery_address[".isDisplayLoading"] = true;






$tdatat_delivery_address[".pageSize"] = 20;

$tdatat_delivery_address[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery_address[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_address[".orderindexes"] = array();


$tdatat_delivery_address[".sqlHead"] = "SELECT t_delivery_address_id,  t_delivery_address_to,  t_delivery_address,  m_provinsi,  m_kabupaten,  m_kecamatan,  m_kelurahan,  post_code,  add_user,  add_date";
$tdatat_delivery_address[".sqlFrom"] = "FROM t_delivery_address";
$tdatat_delivery_address[".sqlWhereExpr"] = "(add_user = ':session.UserID')";
$tdatat_delivery_address[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_address[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_address[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_address[".highlightSearchResults"] = true;

$tableKeyst_delivery_address = array();
$tableKeyst_delivery_address[] = "t_delivery_address_id";
$tdatat_delivery_address[".Keys"] = $tableKeyst_delivery_address;


$tdatat_delivery_address[".hideMobileList"] = array();




//	t_delivery_address_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_address_id";
	$fdata["GoodName"] = "t_delivery_address_id";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","t_delivery_address_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_address_id";

		$fdata["sourceSingle"] = "t_delivery_address_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_address_id";

	
	
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


	$tdatat_delivery_address["t_delivery_address_id"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "t_delivery_address_id";
//	t_delivery_address_to
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_address_to";
	$fdata["GoodName"] = "t_delivery_address_to";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","t_delivery_address_to");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_address_to";

		$fdata["sourceSingle"] = "t_delivery_address_to";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_address_to";

	
	
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


	$tdatat_delivery_address["t_delivery_address_to"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "t_delivery_address_to";
//	t_delivery_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_address";
	$fdata["GoodName"] = "t_delivery_address";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","t_delivery_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_address";

		$fdata["sourceSingle"] = "t_delivery_address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_address";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatat_delivery_address["t_delivery_address"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "t_delivery_address";
//	m_provinsi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_provinsi";
	$fdata["GoodName"] = "m_provinsi";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","m_provinsi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_provinsi";

		$fdata["sourceSingle"] = "m_provinsi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_provinsi";

	
	
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
	$edata["LookupTable"] = "v_m_provinsi";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_provinsi_nama";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "m_kabupaten";

	
	
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


	$tdatat_delivery_address["m_provinsi"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "m_provinsi";
//	m_kabupaten
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_kabupaten";
	$fdata["GoodName"] = "m_kabupaten";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","m_kabupaten");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kabupaten";

		$fdata["sourceSingle"] = "m_kabupaten";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kabupaten";

	
	
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
	$edata["LookupTable"] = "v_m_kabupaten";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_kabupaten_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_kabupaten_nama";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "m_provinsi", "lookup" => "m_provinsi_id" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "m_kecamatan";

	
	
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


	$tdatat_delivery_address["m_kabupaten"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "m_kabupaten";
//	m_kecamatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_kecamatan";
	$fdata["GoodName"] = "m_kecamatan";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","m_kecamatan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kecamatan";

		$fdata["sourceSingle"] = "m_kecamatan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kecamatan";

	
	
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
	$edata["LookupTable"] = "v_m_kecamatan";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"m_kelurahan", 'lookupF'=>"m_kelurahan_id");
	$edata["autoCompleteFields"][] = array('masterF'=>"post_code", 'lookupF'=>"m_keluarahan_kodepos");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "m_kecamatan_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_kecamatan_nama";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "m_kabupaten", "lookup" => "m_kabupaten_id" );

	
	

	
	
	
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


	$tdatat_delivery_address["m_kecamatan"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "m_kecamatan";
//	m_kelurahan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "m_kelurahan";
	$fdata["GoodName"] = "m_kelurahan";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","m_kelurahan");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kelurahan";

		$fdata["sourceSingle"] = "m_kelurahan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kelurahan";

	
	
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
	$edata["LookupTable"] = "m_kelurahan";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_kelurahan_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_keluarahan_nama";

	

	
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


	$tdatat_delivery_address["m_kelurahan"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "m_kelurahan";
//	post_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "post_code";
	$fdata["GoodName"] = "post_code";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","post_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "post_code";

		$fdata["sourceSingle"] = "post_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "post_code";

	
	
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


	$tdatat_delivery_address["post_code"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "post_code";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","add_user");
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


	$tdatat_delivery_address["add_user"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery_address";
	$fdata["Label"] = GetFieldLabel("t_delivery_address","add_date");
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


	$tdatat_delivery_address["add_date"] = $fdata;
		$tdatat_delivery_address[".searchableFields"][] = "add_date";


$tables_data["t_delivery_address"]=&$tdatat_delivery_address;
$field_labels["t_delivery_address"] = &$fieldLabelst_delivery_address;
$fieldToolTips["t_delivery_address"] = &$fieldToolTipst_delivery_address;
$placeHolders["t_delivery_address"] = &$placeHolderst_delivery_address;
$page_titles["t_delivery_address"] = &$pageTitlest_delivery_address;


changeTextControlsToDate( "t_delivery_address" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_address"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_address"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_address()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery_address_id,  t_delivery_address_to,  t_delivery_address,  m_provinsi,  m_kabupaten,  m_kecamatan,  m_kelurahan,  post_code,  add_user,  add_date";
$proto0["m_strFrom"] = "FROM t_delivery_address";
$proto0["m_strWhere"] = "(add_user = ':session.UserID')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "add_user = ':session.UserID'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
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
	"m_strName" => "t_delivery_address_id",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto6["m_sql"] = "t_delivery_address_id";
$proto6["m_srcTableName"] = "t_delivery_address";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_address_to",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto8["m_sql"] = "t_delivery_address_to";
$proto8["m_srcTableName"] = "t_delivery_address";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_address",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto10["m_sql"] = "t_delivery_address";
$proto10["m_srcTableName"] = "t_delivery_address";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_provinsi",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto12["m_sql"] = "m_provinsi";
$proto12["m_srcTableName"] = "t_delivery_address";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kabupaten",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto14["m_sql"] = "m_kabupaten";
$proto14["m_srcTableName"] = "t_delivery_address";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kecamatan",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto16["m_sql"] = "m_kecamatan";
$proto16["m_srcTableName"] = "t_delivery_address";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kelurahan",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto18["m_sql"] = "m_kelurahan";
$proto18["m_srcTableName"] = "t_delivery_address";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "post_code",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto20["m_sql"] = "post_code";
$proto20["m_srcTableName"] = "t_delivery_address";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto22["m_sql"] = "add_user";
$proto22["m_srcTableName"] = "t_delivery_address";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery_address",
	"m_srcTableName" => "t_delivery_address"
));

$proto24["m_sql"] = "add_date";
$proto24["m_srcTableName"] = "t_delivery_address";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "t_delivery_address";
$proto27["m_srcTableName"] = "t_delivery_address";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "t_delivery_address_id";
$proto27["m_columns"][] = "t_delivery_address_to";
$proto27["m_columns"][] = "t_delivery_address";
$proto27["m_columns"][] = "m_provinsi";
$proto27["m_columns"][] = "m_kabupaten";
$proto27["m_columns"][] = "m_kecamatan";
$proto27["m_columns"][] = "m_kelurahan";
$proto27["m_columns"][] = "post_code";
$proto27["m_columns"][] = "add_user";
$proto27["m_columns"][] = "add_date";
$proto27["m_columns"][] = "t_delivery_address_company";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "t_delivery_address";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "t_delivery_address";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery_address";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_address = createSqlQuery_t_delivery_address();


	
				;

										

$tdatat_delivery_address[".sqlquery"] = $queryData_t_delivery_address;



include_once(getabspath("include/t_delivery_address_events.php"));
$tdatat_delivery_address[".hasEvents"] = true;

?>