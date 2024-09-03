<?php
$tdatam_kabupaten = array();
$tdatam_kabupaten[".searchableFields"] = array();
$tdatam_kabupaten[".ShortName"] = "m_kabupaten";
$tdatam_kabupaten[".OwnerID"] = "";
$tdatam_kabupaten[".OriginalTable"] = "m_kabupaten";


$tdatam_kabupaten[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_kabupaten[".originalPagesByType"] = $tdatam_kabupaten[".pagesByType"];
$tdatam_kabupaten[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_kabupaten[".originalPages"] = $tdatam_kabupaten[".pages"];
$tdatam_kabupaten[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_kabupaten[".originalDefaultPages"] = $tdatam_kabupaten[".defaultPages"];

//	field labels
$fieldLabelsm_kabupaten = array();
$fieldToolTipsm_kabupaten = array();
$pageTitlesm_kabupaten = array();
$placeHoldersm_kabupaten = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_kabupaten["English"] = array();
	$fieldToolTipsm_kabupaten["English"] = array();
	$placeHoldersm_kabupaten["English"] = array();
	$pageTitlesm_kabupaten["English"] = array();
	$fieldLabelsm_kabupaten["English"]["m_provinsi_id"] = "M Provinsi Id";
	$fieldToolTipsm_kabupaten["English"]["m_provinsi_id"] = "";
	$placeHoldersm_kabupaten["English"]["m_provinsi_id"] = "";
	$fieldLabelsm_kabupaten["English"]["m_kabupaten_nama"] = "M Kabupaten Nama";
	$fieldToolTipsm_kabupaten["English"]["m_kabupaten_nama"] = "";
	$placeHoldersm_kabupaten["English"]["m_kabupaten_nama"] = "";
	$fieldLabelsm_kabupaten["English"]["m_kabupaten_id"] = "M Kabupaten Id";
	$fieldToolTipsm_kabupaten["English"]["m_kabupaten_id"] = "";
	$placeHoldersm_kabupaten["English"]["m_kabupaten_id"] = "";
	if (count($fieldToolTipsm_kabupaten["English"]))
		$tdatam_kabupaten[".isUseToolTips"] = true;
}


	$tdatam_kabupaten[".NCSearch"] = true;


	$tdatam_kabupaten[".scrollGridBody"] = true;

$tdatam_kabupaten[".shortTableName"] = "m_kabupaten";
$tdatam_kabupaten[".nSecOptions"] = 0;

$tdatam_kabupaten[".mainTableOwnerID"] = "";
$tdatam_kabupaten[".entityType"] = 0;
$tdatam_kabupaten[".connId"] = "u736239518tsundbat154412412";


$tdatam_kabupaten[".strOriginalTableName"] = "m_kabupaten";

	



$tdatam_kabupaten[".showAddInPopup"] = false;

$tdatam_kabupaten[".showEditInPopup"] = false;

$tdatam_kabupaten[".showViewInPopup"] = false;

$tdatam_kabupaten[".listAjax"] = false;
//	temporary
//$tdatam_kabupaten[".listAjax"] = false;

	$tdatam_kabupaten[".audit"] = true;

	$tdatam_kabupaten[".locking"] = false;


$pages = $tdatam_kabupaten[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_kabupaten[".edit"] = true;
	$tdatam_kabupaten[".afterEditAction"] = 1;
	$tdatam_kabupaten[".closePopupAfterEdit"] = 1;
	$tdatam_kabupaten[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_kabupaten[".add"] = true;
$tdatam_kabupaten[".afterAddAction"] = 1;
$tdatam_kabupaten[".closePopupAfterAdd"] = 1;
$tdatam_kabupaten[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_kabupaten[".list"] = true;
}



$tdatam_kabupaten[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_kabupaten[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_kabupaten[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_kabupaten[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_kabupaten[".printFriendly"] = true;
}



$tdatam_kabupaten[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_kabupaten[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_kabupaten[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_kabupaten[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_kabupaten[".ajaxCodeSnippetAdded"] = false;

$tdatam_kabupaten[".buttonsAdded"] = false;

$tdatam_kabupaten[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_kabupaten[".isUseTimeForSearch"] = false;


$tdatam_kabupaten[".badgeColor"] = "778899";


$tdatam_kabupaten[".allSearchFields"] = array();
$tdatam_kabupaten[".filterFields"] = array();
$tdatam_kabupaten[".requiredSearchFields"] = array();

$tdatam_kabupaten[".googleLikeFields"] = array();
$tdatam_kabupaten[".googleLikeFields"][] = "m_kabupaten_id";
$tdatam_kabupaten[".googleLikeFields"][] = "m_provinsi_id";
$tdatam_kabupaten[".googleLikeFields"][] = "m_kabupaten_nama";



$tdatam_kabupaten[".tableType"] = "list";

$tdatam_kabupaten[".printerPageOrientation"] = 0;
$tdatam_kabupaten[".nPrinterPageScale"] = 100;

$tdatam_kabupaten[".nPrinterSplitRecords"] = 40;

$tdatam_kabupaten[".geocodingEnabled"] = false;










$tdatam_kabupaten[".pageSize"] = 20;

$tdatam_kabupaten[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_kabupaten[".strOrderBy"] = $tstrOrderBy;

$tdatam_kabupaten[".orderindexes"] = array();


$tdatam_kabupaten[".sqlHead"] = "SELECT m_kabupaten_id,  	m_provinsi_id,  	m_kabupaten_nama";
$tdatam_kabupaten[".sqlFrom"] = "FROM m_kabupaten";
$tdatam_kabupaten[".sqlWhereExpr"] = "";
$tdatam_kabupaten[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_kabupaten[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_kabupaten[".arrGroupsPerPage"] = $arrGPP;

$tdatam_kabupaten[".highlightSearchResults"] = true;

$tableKeysm_kabupaten = array();
$tdatam_kabupaten[".Keys"] = $tableKeysm_kabupaten;


$tdatam_kabupaten[".hideMobileList"] = array();




//	m_kabupaten_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_kabupaten_id";
	$fdata["GoodName"] = "m_kabupaten_id";
	$fdata["ownerTable"] = "m_kabupaten";
	$fdata["Label"] = GetFieldLabel("m_kabupaten","m_kabupaten_id");
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


	$tdatam_kabupaten["m_kabupaten_id"] = $fdata;
		$tdatam_kabupaten[".searchableFields"][] = "m_kabupaten_id";
//	m_provinsi_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_provinsi_id";
	$fdata["GoodName"] = "m_provinsi_id";
	$fdata["ownerTable"] = "m_kabupaten";
	$fdata["Label"] = GetFieldLabel("m_kabupaten","m_provinsi_id");
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


	$tdatam_kabupaten["m_provinsi_id"] = $fdata;
		$tdatam_kabupaten[".searchableFields"][] = "m_provinsi_id";
//	m_kabupaten_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_kabupaten_nama";
	$fdata["GoodName"] = "m_kabupaten_nama";
	$fdata["ownerTable"] = "m_kabupaten";
	$fdata["Label"] = GetFieldLabel("m_kabupaten","m_kabupaten_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_kabupaten_nama";

		$fdata["sourceSingle"] = "m_kabupaten_nama";

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


	$tdatam_kabupaten["m_kabupaten_nama"] = $fdata;
		$tdatam_kabupaten[".searchableFields"][] = "m_kabupaten_nama";


$tables_data["m_kabupaten"]=&$tdatam_kabupaten;
$field_labels["m_kabupaten"] = &$fieldLabelsm_kabupaten;
$fieldToolTips["m_kabupaten"] = &$fieldToolTipsm_kabupaten;
$placeHolders["m_kabupaten"] = &$placeHoldersm_kabupaten;
$page_titles["m_kabupaten"] = &$pageTitlesm_kabupaten;


changeTextControlsToDate( "m_kabupaten" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_kabupaten"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_kabupaten"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_kabupaten()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_kabupaten_id,  	m_provinsi_id,  	m_kabupaten_nama";
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
	"m_strName" => "m_kabupaten_id",
	"m_strTable" => "m_kabupaten",
	"m_srcTableName" => "m_kabupaten"
));

$proto6["m_sql"] = "m_kabupaten_id";
$proto6["m_srcTableName"] = "m_kabupaten";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_provinsi_id",
	"m_strTable" => "m_kabupaten",
	"m_srcTableName" => "m_kabupaten"
));

$proto8["m_sql"] = "m_provinsi_id";
$proto8["m_srcTableName"] = "m_kabupaten";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_kabupaten_nama",
	"m_strTable" => "m_kabupaten",
	"m_srcTableName" => "m_kabupaten"
));

$proto10["m_sql"] = "m_kabupaten_nama";
$proto10["m_srcTableName"] = "m_kabupaten";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_kabupaten";
$proto13["m_srcTableName"] = "m_kabupaten";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_kabupaten_id";
$proto13["m_columns"][] = "m_provinsi_id";
$proto13["m_columns"][] = "m_kabupaten_nama";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_kabupaten";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_kabupaten";
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
$proto0["m_srcTableName"]="m_kabupaten";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_kabupaten = createSqlQuery_m_kabupaten();


	
				;

			

$tdatam_kabupaten[".sqlquery"] = $queryData_m_kabupaten;



$tdatam_kabupaten[".hasEvents"] = false;

?>