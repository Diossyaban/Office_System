<?php
$tdatav_states = array();
$tdatav_states[".searchableFields"] = array();
$tdatav_states[".ShortName"] = "v_states";
$tdatav_states[".OwnerID"] = "";
$tdatav_states[".OriginalTable"] = "m_countries";


$tdatav_states[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatav_states[".originalPagesByType"] = $tdatav_states[".pagesByType"];
$tdatav_states[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatav_states[".originalPages"] = $tdatav_states[".pages"];
$tdatav_states[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatav_states[".originalDefaultPages"] = $tdatav_states[".defaultPages"];

//	field labels
$fieldLabelsv_states = array();
$fieldToolTipsv_states = array();
$pageTitlesv_states = array();
$placeHoldersv_states = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_states["English"] = array();
	$fieldToolTipsv_states["English"] = array();
	$placeHoldersv_states["English"] = array();
	$pageTitlesv_states["English"] = array();
	$fieldLabelsv_states["English"]["m_countries_id"] = "M Countries Id";
	$fieldToolTipsv_states["English"]["m_countries_id"] = "";
	$placeHoldersv_states["English"]["m_countries_id"] = "";
	$fieldLabelsv_states["English"]["countries"] = "Countries";
	$fieldToolTipsv_states["English"]["countries"] = "";
	$placeHoldersv_states["English"]["countries"] = "";
	$fieldLabelsv_states["English"]["states"] = "States";
	$fieldToolTipsv_states["English"]["states"] = "";
	$placeHoldersv_states["English"]["states"] = "";
	if (count($fieldToolTipsv_states["English"]))
		$tdatav_states[".isUseToolTips"] = true;
}


	$tdatav_states[".NCSearch"] = true;



$tdatav_states[".shortTableName"] = "v_states";
$tdatav_states[".nSecOptions"] = 0;

$tdatav_states[".mainTableOwnerID"] = "";
$tdatav_states[".entityType"] = 1;
$tdatav_states[".connId"] = "u736239518tsundbat154412412";


$tdatav_states[".strOriginalTableName"] = "m_countries";

	



$tdatav_states[".showAddInPopup"] = false;

$tdatav_states[".showEditInPopup"] = false;

$tdatav_states[".showViewInPopup"] = false;

$tdatav_states[".listAjax"] = false;
//	temporary
//$tdatav_states[".listAjax"] = false;

	$tdatav_states[".audit"] = false;

	$tdatav_states[".locking"] = false;


$pages = $tdatav_states[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_states[".edit"] = true;
	$tdatav_states[".afterEditAction"] = 1;
	$tdatav_states[".closePopupAfterEdit"] = 1;
	$tdatav_states[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_states[".add"] = true;
$tdatav_states[".afterAddAction"] = 1;
$tdatav_states[".closePopupAfterAdd"] = 1;
$tdatav_states[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_states[".list"] = true;
}



$tdatav_states[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_states[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_states[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_states[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_states[".printFriendly"] = true;
}



$tdatav_states[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_states[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_states[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_states[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_states[".ajaxCodeSnippetAdded"] = false;

$tdatav_states[".buttonsAdded"] = false;

$tdatav_states[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_states[".isUseTimeForSearch"] = false;


$tdatav_states[".badgeColor"] = "E07878";


$tdatav_states[".allSearchFields"] = array();
$tdatav_states[".filterFields"] = array();
$tdatav_states[".requiredSearchFields"] = array();

$tdatav_states[".googleLikeFields"] = array();
$tdatav_states[".googleLikeFields"][] = "m_countries_id";
$tdatav_states[".googleLikeFields"][] = "countries";
$tdatav_states[".googleLikeFields"][] = "states";



$tdatav_states[".tableType"] = "list";

$tdatav_states[".printerPageOrientation"] = 0;
$tdatav_states[".nPrinterPageScale"] = 100;

$tdatav_states[".nPrinterSplitRecords"] = 40;

$tdatav_states[".geocodingEnabled"] = false;










$tdatav_states[".pageSize"] = 20;

$tdatav_states[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_states[".strOrderBy"] = $tstrOrderBy;

$tdatav_states[".orderindexes"] = array();


$tdatav_states[".sqlHead"] = "SELECT m_countries_id,  	countries,  	states";
$tdatav_states[".sqlFrom"] = "FROM m_countries";
$tdatav_states[".sqlWhereExpr"] = "";
$tdatav_states[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_states[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_states[".arrGroupsPerPage"] = $arrGPP;

$tdatav_states[".highlightSearchResults"] = true;

$tableKeysv_states = array();
$tableKeysv_states[] = "m_countries_id";
$tdatav_states[".Keys"] = $tableKeysv_states;


$tdatav_states[".hideMobileList"] = array();




//	m_countries_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_countries_id";
	$fdata["GoodName"] = "m_countries_id";
	$fdata["ownerTable"] = "m_countries";
	$fdata["Label"] = GetFieldLabel("v_states","m_countries_id");
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


	$tdatav_states["m_countries_id"] = $fdata;
		$tdatav_states[".searchableFields"][] = "m_countries_id";
//	countries
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "countries";
	$fdata["GoodName"] = "countries";
	$fdata["ownerTable"] = "m_countries";
	$fdata["Label"] = GetFieldLabel("v_states","countries");
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


	$tdatav_states["countries"] = $fdata;
		$tdatav_states[".searchableFields"][] = "countries";
//	states
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "states";
	$fdata["GoodName"] = "states";
	$fdata["ownerTable"] = "m_countries";
	$fdata["Label"] = GetFieldLabel("v_states","states");
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


	$tdatav_states["states"] = $fdata;
		$tdatav_states[".searchableFields"][] = "states";


$tables_data["v_states"]=&$tdatav_states;
$field_labels["v_states"] = &$fieldLabelsv_states;
$fieldToolTips["v_states"] = &$fieldToolTipsv_states;
$placeHolders["v_states"] = &$placeHoldersv_states;
$page_titles["v_states"] = &$pageTitlesv_states;


changeTextControlsToDate( "v_states" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_states"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_states"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_states()
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
	"m_srcTableName" => "v_states"
));

$proto6["m_sql"] = "m_countries_id";
$proto6["m_srcTableName"] = "v_states";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "countries",
	"m_strTable" => "m_countries",
	"m_srcTableName" => "v_states"
));

$proto8["m_sql"] = "countries";
$proto8["m_srcTableName"] = "v_states";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "states",
	"m_strTable" => "m_countries",
	"m_srcTableName" => "v_states"
));

$proto10["m_sql"] = "states";
$proto10["m_srcTableName"] = "v_states";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_countries";
$proto13["m_srcTableName"] = "v_states";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_countries_id";
$proto13["m_columns"][] = "countries";
$proto13["m_columns"][] = "states";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_countries";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "v_states";
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
$proto0["m_srcTableName"]="v_states";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_states = createSqlQuery_v_states();


	
				;

			

$tdatav_states[".sqlquery"] = $queryData_v_states;



$tdatav_states[".hasEvents"] = false;

?>