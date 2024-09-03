<?php
$tdatav_m_kabupaten = array();
$tdatav_m_kabupaten[".searchableFields"] = array();
$tdatav_m_kabupaten[".ShortName"] = "v_m_kabupaten";
$tdatav_m_kabupaten[".OwnerID"] = "";
$tdatav_m_kabupaten[".OriginalTable"] = "t_delivery_address";


$tdatav_m_kabupaten[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatav_m_kabupaten[".originalPagesByType"] = $tdatav_m_kabupaten[".pagesByType"];
$tdatav_m_kabupaten[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatav_m_kabupaten[".originalPages"] = $tdatav_m_kabupaten[".pages"];
$tdatav_m_kabupaten[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatav_m_kabupaten[".originalDefaultPages"] = $tdatav_m_kabupaten[".defaultPages"];

//	field labels
$fieldLabelsv_m_kabupaten = array();
$fieldToolTipsv_m_kabupaten = array();
$pageTitlesv_m_kabupaten = array();
$placeHoldersv_m_kabupaten = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_m_kabupaten["English"] = array();
	$fieldToolTipsv_m_kabupaten["English"] = array();
	$placeHoldersv_m_kabupaten["English"] = array();
	$pageTitlesv_m_kabupaten["English"] = array();
	$fieldLabelsv_m_kabupaten["English"]["m_provinsi_id"] = "M Provinsi Id";
	$fieldToolTipsv_m_kabupaten["English"]["m_provinsi_id"] = "";
	$placeHoldersv_m_kabupaten["English"]["m_provinsi_id"] = "";
	$fieldLabelsv_m_kabupaten["English"]["m_kabupaten_nama"] = "M Kabupaten Nama";
	$fieldToolTipsv_m_kabupaten["English"]["m_kabupaten_nama"] = "";
	$placeHoldersv_m_kabupaten["English"]["m_kabupaten_nama"] = "";
	$fieldLabelsv_m_kabupaten["English"]["m_kabupaten_id"] = "M Kabupaten Id";
	$fieldToolTipsv_m_kabupaten["English"]["m_kabupaten_id"] = "";
	$placeHoldersv_m_kabupaten["English"]["m_kabupaten_id"] = "";
	if (count($fieldToolTipsv_m_kabupaten["English"]))
		$tdatav_m_kabupaten[".isUseToolTips"] = true;
}


	$tdatav_m_kabupaten[".NCSearch"] = true;



$tdatav_m_kabupaten[".shortTableName"] = "v_m_kabupaten";
$tdatav_m_kabupaten[".nSecOptions"] = 0;

$tdatav_m_kabupaten[".mainTableOwnerID"] = "";
$tdatav_m_kabupaten[".entityType"] = 1;
$tdatav_m_kabupaten[".connId"] = "u736239518tsundbat154412412";


$tdatav_m_kabupaten[".strOriginalTableName"] = "t_delivery_address";

	



$tdatav_m_kabupaten[".showAddInPopup"] = false;

$tdatav_m_kabupaten[".showEditInPopup"] = false;

$tdatav_m_kabupaten[".showViewInPopup"] = false;

$tdatav_m_kabupaten[".listAjax"] = false;
//	temporary
//$tdatav_m_kabupaten[".listAjax"] = false;

	$tdatav_m_kabupaten[".audit"] = false;

	$tdatav_m_kabupaten[".locking"] = false;


$pages = $tdatav_m_kabupaten[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_m_kabupaten[".edit"] = true;
	$tdatav_m_kabupaten[".afterEditAction"] = 1;
	$tdatav_m_kabupaten[".closePopupAfterEdit"] = 1;
	$tdatav_m_kabupaten[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_m_kabupaten[".add"] = true;
$tdatav_m_kabupaten[".afterAddAction"] = 1;
$tdatav_m_kabupaten[".closePopupAfterAdd"] = 1;
$tdatav_m_kabupaten[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_m_kabupaten[".list"] = true;
}



$tdatav_m_kabupaten[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_m_kabupaten[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_m_kabupaten[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_m_kabupaten[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_m_kabupaten[".printFriendly"] = true;
}



$tdatav_m_kabupaten[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_m_kabupaten[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_m_kabupaten[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_m_kabupaten[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_m_kabupaten[".ajaxCodeSnippetAdded"] = false;

$tdatav_m_kabupaten[".buttonsAdded"] = false;

$tdatav_m_kabupaten[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_m_kabupaten[".isUseTimeForSearch"] = false;


$tdatav_m_kabupaten[".badgeColor"] = "6493EA";


$tdatav_m_kabupaten[".allSearchFields"] = array();
$tdatav_m_kabupaten[".filterFields"] = array();
$tdatav_m_kabupaten[".requiredSearchFields"] = array();

$tdatav_m_kabupaten[".googleLikeFields"] = array();
$tdatav_m_kabupaten[".googleLikeFields"][] = "m_provinsi_id";
$tdatav_m_kabupaten[".googleLikeFields"][] = "m_kabupaten_nama";
$tdatav_m_kabupaten[".googleLikeFields"][] = "m_kabupaten_id";



$tdatav_m_kabupaten[".tableType"] = "list";

$tdatav_m_kabupaten[".printerPageOrientation"] = 0;
$tdatav_m_kabupaten[".nPrinterPageScale"] = 100;

$tdatav_m_kabupaten[".nPrinterSplitRecords"] = 40;

$tdatav_m_kabupaten[".geocodingEnabled"] = false;










$tdatav_m_kabupaten[".pageSize"] = 20;

$tdatav_m_kabupaten[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_m_kabupaten[".strOrderBy"] = $tstrOrderBy;

$tdatav_m_kabupaten[".orderindexes"] = array();


$tdatav_m_kabupaten[".sqlHead"] = "SELECT m_provinsi_id,  m_kabupaten_nama,  m_kabupaten_id";
$tdatav_m_kabupaten[".sqlFrom"] = "FROM m_kabupaten";
$tdatav_m_kabupaten[".sqlWhereExpr"] = "";
$tdatav_m_kabupaten[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_m_kabupaten[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_m_kabupaten[".arrGroupsPerPage"] = $arrGPP;

$tdatav_m_kabupaten[".highlightSearchResults"] = true;

$tableKeysv_m_kabupaten = array();
$tdatav_m_kabupaten[".Keys"] = $tableKeysv_m_kabupaten;


$tdatav_m_kabupaten[".hideMobileList"] = array();




//	m_provinsi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_provinsi_id";
	$fdata["GoodName"] = "m_provinsi_id";
	$fdata["ownerTable"] = "m_kabupaten";
	$fdata["Label"] = GetFieldLabel("v_m_kabupaten","m_provinsi_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_provinsi_id";

	
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


	$tdatav_m_kabupaten["m_provinsi_id"] = $fdata;
		$tdatav_m_kabupaten[".searchableFields"][] = "m_provinsi_id";
//	m_kabupaten_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_kabupaten_nama";
	$fdata["GoodName"] = "m_kabupaten_nama";
	$fdata["ownerTable"] = "m_kabupaten";
	$fdata["Label"] = GetFieldLabel("v_m_kabupaten","m_kabupaten_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kabupaten_nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_kabupaten_nama";

	
	
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


	$tdatav_m_kabupaten["m_kabupaten_nama"] = $fdata;
		$tdatav_m_kabupaten[".searchableFields"][] = "m_kabupaten_nama";
//	m_kabupaten_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_kabupaten_id";
	$fdata["GoodName"] = "m_kabupaten_id";
	$fdata["ownerTable"] = "m_kabupaten";
	$fdata["Label"] = GetFieldLabel("v_m_kabupaten","m_kabupaten_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_kabupaten_id";

	
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


	$tdatav_m_kabupaten["m_kabupaten_id"] = $fdata;
		$tdatav_m_kabupaten[".searchableFields"][] = "m_kabupaten_id";


$tables_data["v_m_kabupaten"]=&$tdatav_m_kabupaten;
$field_labels["v_m_kabupaten"] = &$fieldLabelsv_m_kabupaten;
$fieldToolTips["v_m_kabupaten"] = &$fieldToolTipsv_m_kabupaten;
$placeHolders["v_m_kabupaten"] = &$placeHoldersv_m_kabupaten;
$page_titles["v_m_kabupaten"] = &$pageTitlesv_m_kabupaten;


changeTextControlsToDate( "v_m_kabupaten" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_m_kabupaten"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_m_kabupaten"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_m_kabupaten()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_provinsi_id,  m_kabupaten_nama,  m_kabupaten_id";
$proto0["m_strFrom"] = "FROM m_kabupaten";
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
	"m_strName" => "m_provinsi_id",
	"m_strTable" => "m_kabupaten",
	"m_srcTableName" => "v_m_kabupaten"
));

$proto6["m_sql"] = "m_provinsi_id";
$proto6["m_srcTableName"] = "v_m_kabupaten";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kabupaten_nama",
	"m_strTable" => "m_kabupaten",
	"m_srcTableName" => "v_m_kabupaten"
));

$proto8["m_sql"] = "m_kabupaten_nama";
$proto8["m_srcTableName"] = "v_m_kabupaten";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kabupaten_id",
	"m_strTable" => "m_kabupaten",
	"m_srcTableName" => "v_m_kabupaten"
));

$proto10["m_sql"] = "m_kabupaten_id";
$proto10["m_srcTableName"] = "v_m_kabupaten";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_kabupaten";
$proto13["m_srcTableName"] = "v_m_kabupaten";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_kabupaten_id";
$proto13["m_columns"][] = "m_provinsi_id";
$proto13["m_columns"][] = "m_kabupaten_nama";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_kabupaten";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "v_m_kabupaten";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="v_m_kabupaten";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_m_kabupaten = createSqlQuery_v_m_kabupaten();


	
				;

			

$tdatav_m_kabupaten[".sqlquery"] = $queryData_v_m_kabupaten;



$tdatav_m_kabupaten[".hasEvents"] = false;

?>