<?php
$tdatam_kecamatan = array();
$tdatam_kecamatan[".searchableFields"] = array();
$tdatam_kecamatan[".ShortName"] = "m_kecamatan";
$tdatam_kecamatan[".OwnerID"] = "";
$tdatam_kecamatan[".OriginalTable"] = "m_kecamatan";


$tdatam_kecamatan[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_kecamatan[".originalPagesByType"] = $tdatam_kecamatan[".pagesByType"];
$tdatam_kecamatan[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_kecamatan[".originalPages"] = $tdatam_kecamatan[".pages"];
$tdatam_kecamatan[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_kecamatan[".originalDefaultPages"] = $tdatam_kecamatan[".defaultPages"];

//	field labels
$fieldLabelsm_kecamatan = array();
$fieldToolTipsm_kecamatan = array();
$pageTitlesm_kecamatan = array();
$placeHoldersm_kecamatan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_kecamatan["English"] = array();
	$fieldToolTipsm_kecamatan["English"] = array();
	$placeHoldersm_kecamatan["English"] = array();
	$pageTitlesm_kecamatan["English"] = array();
	$fieldLabelsm_kecamatan["English"]["m_kecamatan_id"] = "M Kecamatan Id";
	$fieldToolTipsm_kecamatan["English"]["m_kecamatan_id"] = "";
	$placeHoldersm_kecamatan["English"]["m_kecamatan_id"] = "";
	$fieldLabelsm_kecamatan["English"]["m_provinsi_id"] = "M Provinsi Id";
	$fieldToolTipsm_kecamatan["English"]["m_provinsi_id"] = "";
	$placeHoldersm_kecamatan["English"]["m_provinsi_id"] = "";
	$fieldLabelsm_kecamatan["English"]["m_kabupaten_id"] = "M Kabupaten Id";
	$fieldToolTipsm_kecamatan["English"]["m_kabupaten_id"] = "";
	$placeHoldersm_kecamatan["English"]["m_kabupaten_id"] = "";
	$fieldLabelsm_kecamatan["English"]["m_kecamatan_nama"] = "M Kecamatan Nama";
	$fieldToolTipsm_kecamatan["English"]["m_kecamatan_nama"] = "";
	$placeHoldersm_kecamatan["English"]["m_kecamatan_nama"] = "";
	if (count($fieldToolTipsm_kecamatan["English"]))
		$tdatam_kecamatan[".isUseToolTips"] = true;
}


	$tdatam_kecamatan[".NCSearch"] = true;



$tdatam_kecamatan[".shortTableName"] = "m_kecamatan";
$tdatam_kecamatan[".nSecOptions"] = 0;

$tdatam_kecamatan[".mainTableOwnerID"] = "";
$tdatam_kecamatan[".entityType"] = 0;
$tdatam_kecamatan[".connId"] = "u736239518tsundbat154412412";


$tdatam_kecamatan[".strOriginalTableName"] = "m_kecamatan";

	



$tdatam_kecamatan[".showAddInPopup"] = false;

$tdatam_kecamatan[".showEditInPopup"] = false;

$tdatam_kecamatan[".showViewInPopup"] = false;

$tdatam_kecamatan[".listAjax"] = false;
//	temporary
//$tdatam_kecamatan[".listAjax"] = false;

	$tdatam_kecamatan[".audit"] = false;

	$tdatam_kecamatan[".locking"] = false;


$pages = $tdatam_kecamatan[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_kecamatan[".edit"] = true;
	$tdatam_kecamatan[".afterEditAction"] = 1;
	$tdatam_kecamatan[".closePopupAfterEdit"] = 1;
	$tdatam_kecamatan[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_kecamatan[".add"] = true;
$tdatam_kecamatan[".afterAddAction"] = 1;
$tdatam_kecamatan[".closePopupAfterAdd"] = 1;
$tdatam_kecamatan[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_kecamatan[".list"] = true;
}



$tdatam_kecamatan[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_kecamatan[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_kecamatan[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_kecamatan[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_kecamatan[".printFriendly"] = true;
}



$tdatam_kecamatan[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_kecamatan[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_kecamatan[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_kecamatan[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_kecamatan[".ajaxCodeSnippetAdded"] = false;

$tdatam_kecamatan[".buttonsAdded"] = false;

$tdatam_kecamatan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_kecamatan[".isUseTimeForSearch"] = false;


$tdatam_kecamatan[".badgeColor"] = "7B68EE";


$tdatam_kecamatan[".allSearchFields"] = array();
$tdatam_kecamatan[".filterFields"] = array();
$tdatam_kecamatan[".requiredSearchFields"] = array();

$tdatam_kecamatan[".googleLikeFields"] = array();
$tdatam_kecamatan[".googleLikeFields"][] = "m_kecamatan_id";
$tdatam_kecamatan[".googleLikeFields"][] = "m_provinsi_id";
$tdatam_kecamatan[".googleLikeFields"][] = "m_kabupaten_id";
$tdatam_kecamatan[".googleLikeFields"][] = "m_kecamatan_nama";



$tdatam_kecamatan[".tableType"] = "list";

$tdatam_kecamatan[".printerPageOrientation"] = 0;
$tdatam_kecamatan[".nPrinterPageScale"] = 100;

$tdatam_kecamatan[".nPrinterSplitRecords"] = 40;

$tdatam_kecamatan[".geocodingEnabled"] = false;










$tdatam_kecamatan[".pageSize"] = 20;

$tdatam_kecamatan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_kecamatan[".strOrderBy"] = $tstrOrderBy;

$tdatam_kecamatan[".orderindexes"] = array();


$tdatam_kecamatan[".sqlHead"] = "SELECT m_kecamatan_id,  	m_provinsi_id,  	m_kabupaten_id,  	m_kecamatan_nama";
$tdatam_kecamatan[".sqlFrom"] = "FROM m_kecamatan";
$tdatam_kecamatan[".sqlWhereExpr"] = "";
$tdatam_kecamatan[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_kecamatan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_kecamatan[".arrGroupsPerPage"] = $arrGPP;

$tdatam_kecamatan[".highlightSearchResults"] = true;

$tableKeysm_kecamatan = array();
$tableKeysm_kecamatan[] = "m_kecamatan_id";
$tdatam_kecamatan[".Keys"] = $tableKeysm_kecamatan;


$tdatam_kecamatan[".hideMobileList"] = array();




//	m_kecamatan_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_kecamatan_id";
	$fdata["GoodName"] = "m_kecamatan_id";
	$fdata["ownerTable"] = "m_kecamatan";
	$fdata["Label"] = GetFieldLabel("m_kecamatan","m_kecamatan_id");
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


	$tdatam_kecamatan["m_kecamatan_id"] = $fdata;
		$tdatam_kecamatan[".searchableFields"][] = "m_kecamatan_id";
//	m_provinsi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_provinsi_id";
	$fdata["GoodName"] = "m_provinsi_id";
	$fdata["ownerTable"] = "m_kecamatan";
	$fdata["Label"] = GetFieldLabel("m_kecamatan","m_provinsi_id");
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


	$tdatam_kecamatan["m_provinsi_id"] = $fdata;
		$tdatam_kecamatan[".searchableFields"][] = "m_provinsi_id";
//	m_kabupaten_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_kabupaten_id";
	$fdata["GoodName"] = "m_kabupaten_id";
	$fdata["ownerTable"] = "m_kecamatan";
	$fdata["Label"] = GetFieldLabel("m_kecamatan","m_kabupaten_id");
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


	$tdatam_kecamatan["m_kabupaten_id"] = $fdata;
		$tdatam_kecamatan[".searchableFields"][] = "m_kabupaten_id";
//	m_kecamatan_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_kecamatan_nama";
	$fdata["GoodName"] = "m_kecamatan_nama";
	$fdata["ownerTable"] = "m_kecamatan";
	$fdata["Label"] = GetFieldLabel("m_kecamatan","m_kecamatan_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kecamatan_nama";

		$fdata["sourceSingle"] = "m_kecamatan_nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kecamatan_nama";

	
	
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


	$tdatam_kecamatan["m_kecamatan_nama"] = $fdata;
		$tdatam_kecamatan[".searchableFields"][] = "m_kecamatan_nama";


$tables_data["m_kecamatan"]=&$tdatam_kecamatan;
$field_labels["m_kecamatan"] = &$fieldLabelsm_kecamatan;
$fieldToolTips["m_kecamatan"] = &$fieldToolTipsm_kecamatan;
$placeHolders["m_kecamatan"] = &$placeHoldersm_kecamatan;
$page_titles["m_kecamatan"] = &$pageTitlesm_kecamatan;


changeTextControlsToDate( "m_kecamatan" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_kecamatan"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_kecamatan"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_kecamatan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_kecamatan_id,  	m_provinsi_id,  	m_kabupaten_id,  	m_kecamatan_nama";
$proto0["m_strFrom"] = "FROM m_kecamatan";
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
	"m_strName" => "m_kecamatan_id",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "m_kecamatan"
));

$proto6["m_sql"] = "m_kecamatan_id";
$proto6["m_srcTableName"] = "m_kecamatan";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_provinsi_id",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "m_kecamatan"
));

$proto8["m_sql"] = "m_provinsi_id";
$proto8["m_srcTableName"] = "m_kecamatan";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kabupaten_id",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "m_kecamatan"
));

$proto10["m_sql"] = "m_kabupaten_id";
$proto10["m_srcTableName"] = "m_kecamatan";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kecamatan_nama",
	"m_strTable" => "m_kecamatan",
	"m_srcTableName" => "m_kecamatan"
));

$proto12["m_sql"] = "m_kecamatan_nama";
$proto12["m_srcTableName"] = "m_kecamatan";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_kecamatan";
$proto15["m_srcTableName"] = "m_kecamatan";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_kecamatan_id";
$proto15["m_columns"][] = "m_provinsi_id";
$proto15["m_columns"][] = "m_kabupaten_id";
$proto15["m_columns"][] = "m_kecamatan_nama";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_kecamatan";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "m_kecamatan";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_kecamatan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_kecamatan = createSqlQuery_m_kecamatan();


	
				;

				

$tdatam_kecamatan[".sqlquery"] = $queryData_m_kecamatan;



$tdatam_kecamatan[".hasEvents"] = false;

?>