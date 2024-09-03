<?php
$tdatav_countries = array();
$tdatav_countries[".searchableFields"] = array();
$tdatav_countries[".ShortName"] = "v_countries";
$tdatav_countries[".OwnerID"] = "";
$tdatav_countries[".OriginalTable"] = "m_countries";


$tdatav_countries[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatav_countries[".originalPagesByType"] = $tdatav_countries[".pagesByType"];
$tdatav_countries[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatav_countries[".originalPages"] = $tdatav_countries[".pages"];
$tdatav_countries[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatav_countries[".originalDefaultPages"] = $tdatav_countries[".defaultPages"];

//	field labels
$fieldLabelsv_countries = array();
$fieldToolTipsv_countries = array();
$pageTitlesv_countries = array();
$placeHoldersv_countries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_countries["English"] = array();
	$fieldToolTipsv_countries["English"] = array();
	$placeHoldersv_countries["English"] = array();
	$pageTitlesv_countries["English"] = array();
	$fieldLabelsv_countries["English"]["countries"] = "Countries";
	$fieldToolTipsv_countries["English"]["countries"] = "";
	$placeHoldersv_countries["English"]["countries"] = "";
	if (count($fieldToolTipsv_countries["English"]))
		$tdatav_countries[".isUseToolTips"] = true;
}


	$tdatav_countries[".NCSearch"] = true;



$tdatav_countries[".shortTableName"] = "v_countries";
$tdatav_countries[".nSecOptions"] = 0;

$tdatav_countries[".mainTableOwnerID"] = "";
$tdatav_countries[".entityType"] = 1;
$tdatav_countries[".connId"] = "u736239518tsundbat154412412";


$tdatav_countries[".strOriginalTableName"] = "m_countries";

	



$tdatav_countries[".showAddInPopup"] = false;

$tdatav_countries[".showEditInPopup"] = false;

$tdatav_countries[".showViewInPopup"] = false;

$tdatav_countries[".listAjax"] = false;
//	temporary
//$tdatav_countries[".listAjax"] = false;

	$tdatav_countries[".audit"] = false;

	$tdatav_countries[".locking"] = false;


$pages = $tdatav_countries[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_countries[".edit"] = true;
	$tdatav_countries[".afterEditAction"] = 1;
	$tdatav_countries[".closePopupAfterEdit"] = 1;
	$tdatav_countries[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_countries[".add"] = true;
$tdatav_countries[".afterAddAction"] = 1;
$tdatav_countries[".closePopupAfterAdd"] = 1;
$tdatav_countries[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_countries[".list"] = true;
}



$tdatav_countries[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_countries[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_countries[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_countries[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_countries[".printFriendly"] = true;
}



$tdatav_countries[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_countries[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_countries[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_countries[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_countries[".ajaxCodeSnippetAdded"] = false;

$tdatav_countries[".buttonsAdded"] = false;

$tdatav_countries[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_countries[".isUseTimeForSearch"] = false;


$tdatav_countries[".badgeColor"] = "778899";


$tdatav_countries[".allSearchFields"] = array();
$tdatav_countries[".filterFields"] = array();
$tdatav_countries[".requiredSearchFields"] = array();

$tdatav_countries[".googleLikeFields"] = array();
$tdatav_countries[".googleLikeFields"][] = "countries";



$tdatav_countries[".tableType"] = "list";

$tdatav_countries[".printerPageOrientation"] = 0;
$tdatav_countries[".nPrinterPageScale"] = 100;

$tdatav_countries[".nPrinterSplitRecords"] = 40;

$tdatav_countries[".geocodingEnabled"] = false;










$tdatav_countries[".pageSize"] = 20;

$tdatav_countries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_countries[".strOrderBy"] = $tstrOrderBy;

$tdatav_countries[".orderindexes"] = array();


$tdatav_countries[".sqlHead"] = "SELECT  	distinct countries";
$tdatav_countries[".sqlFrom"] = "FROM m_countries";
$tdatav_countries[".sqlWhereExpr"] = "";
$tdatav_countries[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_countries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_countries[".arrGroupsPerPage"] = $arrGPP;

$tdatav_countries[".highlightSearchResults"] = true;

$tableKeysv_countries = array();
$tdatav_countries[".Keys"] = $tableKeysv_countries;


$tdatav_countries[".hideMobileList"] = array();




//	countries
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "countries";
	$fdata["GoodName"] = "countries";
	$fdata["ownerTable"] = "m_countries";
	$fdata["Label"] = GetFieldLabel("v_countries","countries");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "countries";

		$fdata["sourceSingle"] = "countries";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "countries";

	
	
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


	$tdatav_countries["countries"] = $fdata;
		$tdatav_countries[".searchableFields"][] = "countries";


$tables_data["v_countries"]=&$tdatav_countries;
$field_labels["v_countries"] = &$fieldLabelsv_countries;
$fieldToolTips["v_countries"] = &$fieldToolTipsv_countries;
$placeHolders["v_countries"] = &$placeHoldersv_countries;
$page_titles["v_countries"] = &$pageTitlesv_countries;


changeTextControlsToDate( "v_countries" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_countries"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_countries"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT  	distinct";
$proto0["m_strFieldList"] = "countries";
$proto0["m_strFrom"] = "FROM m_countries";
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
	"m_strName" => "countries",
	"m_strTable" => "m_countries",
	"m_srcTableName" => "v_countries"
));

$proto6["m_sql"] = "countries";
$proto6["m_srcTableName"] = "v_countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "m_countries";
$proto9["m_srcTableName"] = "v_countries";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "m_countries_id";
$proto9["m_columns"][] = "countries";
$proto9["m_columns"][] = "states";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "m_countries";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "v_countries";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="v_countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_countries = createSqlQuery_v_countries();


	
				;

	

$tdatav_countries[".sqlquery"] = $queryData_v_countries;



$tdatav_countries[".hasEvents"] = false;

?>