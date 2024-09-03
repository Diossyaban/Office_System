<?php
$tdatam_countries = array();
$tdatam_countries[".searchableFields"] = array();
$tdatam_countries[".ShortName"] = "m_countries";
$tdatam_countries[".OwnerID"] = "";
$tdatam_countries[".OriginalTable"] = "m_countries";


$tdatam_countries[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_countries[".originalPagesByType"] = $tdatam_countries[".pagesByType"];
$tdatam_countries[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_countries[".originalPages"] = $tdatam_countries[".pages"];
$tdatam_countries[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_countries[".originalDefaultPages"] = $tdatam_countries[".defaultPages"];

//	field labels
$fieldLabelsm_countries = array();
$fieldToolTipsm_countries = array();
$pageTitlesm_countries = array();
$placeHoldersm_countries = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_countries["English"] = array();
	$fieldToolTipsm_countries["English"] = array();
	$placeHoldersm_countries["English"] = array();
	$pageTitlesm_countries["English"] = array();
	$fieldLabelsm_countries["English"]["m_countries_id"] = "M Countries Id";
	$fieldToolTipsm_countries["English"]["m_countries_id"] = "";
	$placeHoldersm_countries["English"]["m_countries_id"] = "";
	$fieldLabelsm_countries["English"]["countries"] = "Countries";
	$fieldToolTipsm_countries["English"]["countries"] = "";
	$placeHoldersm_countries["English"]["countries"] = "";
	$fieldLabelsm_countries["English"]["states"] = "States";
	$fieldToolTipsm_countries["English"]["states"] = "";
	$placeHoldersm_countries["English"]["states"] = "";
	if (count($fieldToolTipsm_countries["English"]))
		$tdatam_countries[".isUseToolTips"] = true;
}


	$tdatam_countries[".NCSearch"] = true;



$tdatam_countries[".shortTableName"] = "m_countries";
$tdatam_countries[".nSecOptions"] = 0;

$tdatam_countries[".mainTableOwnerID"] = "";
$tdatam_countries[".entityType"] = 0;
$tdatam_countries[".connId"] = "u736239518tsundbat154412412";


$tdatam_countries[".strOriginalTableName"] = "m_countries";

	



$tdatam_countries[".showAddInPopup"] = false;

$tdatam_countries[".showEditInPopup"] = false;

$tdatam_countries[".showViewInPopup"] = false;

$tdatam_countries[".listAjax"] = false;
//	temporary
//$tdatam_countries[".listAjax"] = false;

	$tdatam_countries[".audit"] = false;

	$tdatam_countries[".locking"] = false;


$pages = $tdatam_countries[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_countries[".edit"] = true;
	$tdatam_countries[".afterEditAction"] = 1;
	$tdatam_countries[".closePopupAfterEdit"] = 1;
	$tdatam_countries[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_countries[".add"] = true;
$tdatam_countries[".afterAddAction"] = 1;
$tdatam_countries[".closePopupAfterAdd"] = 1;
$tdatam_countries[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_countries[".list"] = true;
}



$tdatam_countries[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_countries[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_countries[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_countries[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_countries[".printFriendly"] = true;
}



$tdatam_countries[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_countries[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_countries[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_countries[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_countries[".ajaxCodeSnippetAdded"] = false;

$tdatam_countries[".buttonsAdded"] = false;

$tdatam_countries[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_countries[".isUseTimeForSearch"] = false;


$tdatam_countries[".badgeColor"] = "EDCA00";


$tdatam_countries[".allSearchFields"] = array();
$tdatam_countries[".filterFields"] = array();
$tdatam_countries[".requiredSearchFields"] = array();

$tdatam_countries[".googleLikeFields"] = array();
$tdatam_countries[".googleLikeFields"][] = "m_countries_id";
$tdatam_countries[".googleLikeFields"][] = "countries";
$tdatam_countries[".googleLikeFields"][] = "states";



$tdatam_countries[".tableType"] = "list";

$tdatam_countries[".printerPageOrientation"] = 0;
$tdatam_countries[".nPrinterPageScale"] = 100;

$tdatam_countries[".nPrinterSplitRecords"] = 40;

$tdatam_countries[".geocodingEnabled"] = false;










$tdatam_countries[".pageSize"] = 20;

$tdatam_countries[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_countries[".strOrderBy"] = $tstrOrderBy;

$tdatam_countries[".orderindexes"] = array();


$tdatam_countries[".sqlHead"] = "SELECT m_countries_id,  	countries,  	states";
$tdatam_countries[".sqlFrom"] = "FROM m_countries";
$tdatam_countries[".sqlWhereExpr"] = "";
$tdatam_countries[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_countries[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_countries[".arrGroupsPerPage"] = $arrGPP;

$tdatam_countries[".highlightSearchResults"] = true;

$tableKeysm_countries = array();
$tableKeysm_countries[] = "m_countries_id";
$tdatam_countries[".Keys"] = $tableKeysm_countries;


$tdatam_countries[".hideMobileList"] = array();




//	m_countries_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_countries_id";
	$fdata["GoodName"] = "m_countries_id";
	$fdata["ownerTable"] = "m_countries";
	$fdata["Label"] = GetFieldLabel("m_countries","m_countries_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_countries_id";

		$fdata["sourceSingle"] = "m_countries_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_countries_id";

	
	
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


	$tdatam_countries["m_countries_id"] = $fdata;
		$tdatam_countries[".searchableFields"][] = "m_countries_id";
//	countries
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "countries";
	$fdata["GoodName"] = "countries";
	$fdata["ownerTable"] = "m_countries";
	$fdata["Label"] = GetFieldLabel("m_countries","countries");
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


	$tdatam_countries["countries"] = $fdata;
		$tdatam_countries[".searchableFields"][] = "countries";
//	states
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "states";
	$fdata["GoodName"] = "states";
	$fdata["ownerTable"] = "m_countries";
	$fdata["Label"] = GetFieldLabel("m_countries","states");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "states";

		$fdata["sourceSingle"] = "states";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "states";

	
	
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


	$tdatam_countries["states"] = $fdata;
		$tdatam_countries[".searchableFields"][] = "states";


$tables_data["m_countries"]=&$tdatam_countries;
$field_labels["m_countries"] = &$fieldLabelsm_countries;
$fieldToolTips["m_countries"] = &$fieldToolTipsm_countries;
$placeHolders["m_countries"] = &$placeHoldersm_countries;
$page_titles["m_countries"] = &$pageTitlesm_countries;


changeTextControlsToDate( "m_countries" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_countries"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_countries"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_countries()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_countries_id,  	countries,  	states";
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
	"m_strName" => "m_countries_id",
	"m_strTable" => "m_countries",
	"m_srcTableName" => "m_countries"
));

$proto6["m_sql"] = "m_countries_id";
$proto6["m_srcTableName"] = "m_countries";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "countries",
	"m_strTable" => "m_countries",
	"m_srcTableName" => "m_countries"
));

$proto8["m_sql"] = "countries";
$proto8["m_srcTableName"] = "m_countries";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "states",
	"m_strTable" => "m_countries",
	"m_srcTableName" => "m_countries"
));

$proto10["m_sql"] = "states";
$proto10["m_srcTableName"] = "m_countries";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_countries";
$proto13["m_srcTableName"] = "m_countries";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_countries_id";
$proto13["m_columns"][] = "countries";
$proto13["m_columns"][] = "states";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_countries";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_countries";
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
$proto0["m_srcTableName"]="m_countries";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_countries = createSqlQuery_m_countries();


	
				;

			

$tdatam_countries[".sqlquery"] = $queryData_m_countries;



$tdatam_countries[".hasEvents"] = false;

?>