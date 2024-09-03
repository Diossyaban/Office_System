<?php
$tdatav_status = array();
$tdatav_status[".searchableFields"] = array();
$tdatav_status[".ShortName"] = "v_status";
$tdatav_status[".OwnerID"] = "";
$tdatav_status[".OriginalTable"] = "m_status";


$tdatav_status[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatav_status[".originalPagesByType"] = $tdatav_status[".pagesByType"];
$tdatav_status[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatav_status[".originalPages"] = $tdatav_status[".pages"];
$tdatav_status[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatav_status[".originalDefaultPages"] = $tdatav_status[".defaultPages"];

//	field labels
$fieldLabelsv_status = array();
$fieldToolTipsv_status = array();
$pageTitlesv_status = array();
$placeHoldersv_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_status["English"] = array();
	$fieldToolTipsv_status["English"] = array();
	$placeHoldersv_status["English"] = array();
	$pageTitlesv_status["English"] = array();
	$fieldLabelsv_status["English"]["m_status_id"] = "M Status Id";
	$fieldToolTipsv_status["English"]["m_status_id"] = "";
	$placeHoldersv_status["English"]["m_status_id"] = "";
	$fieldLabelsv_status["English"]["status"] = "Status";
	$fieldToolTipsv_status["English"]["status"] = "";
	$placeHoldersv_status["English"]["status"] = "";
	$fieldLabelsv_status["English"]["m_status_desc"] = "M Status Desc";
	$fieldToolTipsv_status["English"]["m_status_desc"] = "";
	$placeHoldersv_status["English"]["m_status_desc"] = "";
	if (count($fieldToolTipsv_status["English"]))
		$tdatav_status[".isUseToolTips"] = true;
}


	$tdatav_status[".NCSearch"] = true;



$tdatav_status[".shortTableName"] = "v_status";
$tdatav_status[".nSecOptions"] = 0;

$tdatav_status[".mainTableOwnerID"] = "";
$tdatav_status[".entityType"] = 1;
$tdatav_status[".connId"] = "u736239518tsundbat154412412";


$tdatav_status[".strOriginalTableName"] = "m_status";

	



$tdatav_status[".showAddInPopup"] = false;

$tdatav_status[".showEditInPopup"] = false;

$tdatav_status[".showViewInPopup"] = false;

$tdatav_status[".listAjax"] = false;
//	temporary
//$tdatav_status[".listAjax"] = false;

	$tdatav_status[".audit"] = false;

	$tdatav_status[".locking"] = false;


$pages = $tdatav_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_status[".edit"] = true;
	$tdatav_status[".afterEditAction"] = 1;
	$tdatav_status[".closePopupAfterEdit"] = 1;
	$tdatav_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_status[".add"] = true;
$tdatav_status[".afterAddAction"] = 1;
$tdatav_status[".closePopupAfterAdd"] = 1;
$tdatav_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_status[".list"] = true;
}



$tdatav_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_status[".printFriendly"] = true;
}



$tdatav_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_status[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_status[".ajaxCodeSnippetAdded"] = false;

$tdatav_status[".buttonsAdded"] = false;

$tdatav_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_status[".isUseTimeForSearch"] = false;


$tdatav_status[".badgeColor"] = "DB7093";


$tdatav_status[".allSearchFields"] = array();
$tdatav_status[".filterFields"] = array();
$tdatav_status[".requiredSearchFields"] = array();

$tdatav_status[".googleLikeFields"] = array();
$tdatav_status[".googleLikeFields"][] = "m_status_id";
$tdatav_status[".googleLikeFields"][] = "status";
$tdatav_status[".googleLikeFields"][] = "m_status_desc";



$tdatav_status[".tableType"] = "list";

$tdatav_status[".printerPageOrientation"] = 0;
$tdatav_status[".nPrinterPageScale"] = 100;

$tdatav_status[".nPrinterSplitRecords"] = 40;

$tdatav_status[".geocodingEnabled"] = false;










$tdatav_status[".pageSize"] = 20;

$tdatav_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_status[".strOrderBy"] = $tstrOrderBy;

$tdatav_status[".orderindexes"] = array();


$tdatav_status[".sqlHead"] = "SELECT m_status_id,  	status,  	m_status_desc";
$tdatav_status[".sqlFrom"] = "FROM m_status";
$tdatav_status[".sqlWhereExpr"] = "m_status_desc='inmail' and m_status_id in ( 8,9,10)";
$tdatav_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_status[".arrGroupsPerPage"] = $arrGPP;

$tdatav_status[".highlightSearchResults"] = true;

$tableKeysv_status = array();
$tableKeysv_status[] = "m_status_id";
$tdatav_status[".Keys"] = $tableKeysv_status;


$tdatav_status[".hideMobileList"] = array();




//	m_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_status_id";
	$fdata["GoodName"] = "m_status_id";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("v_status","m_status_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_status_id";

		$fdata["sourceSingle"] = "m_status_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_status_id";

	
	
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


	$tdatav_status["m_status_id"] = $fdata;
		$tdatav_status[".searchableFields"][] = "m_status_id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("v_status","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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


	$tdatav_status["status"] = $fdata;
		$tdatav_status[".searchableFields"][] = "status";
//	m_status_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_status_desc";
	$fdata["GoodName"] = "m_status_desc";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("v_status","m_status_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_status_desc";

		$fdata["sourceSingle"] = "m_status_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_status_desc";

	
	
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


	$tdatav_status["m_status_desc"] = $fdata;
		$tdatav_status[".searchableFields"][] = "m_status_desc";


$tables_data["v_status"]=&$tdatav_status;
$field_labels["v_status"] = &$fieldLabelsv_status;
$fieldToolTips["v_status"] = &$fieldToolTipsv_status;
$placeHolders["v_status"] = &$placeHoldersv_status;
$page_titles["v_status"] = &$pageTitlesv_status;


changeTextControlsToDate( "v_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_status_id,  	status,  	m_status_desc";
$proto0["m_strFrom"] = "FROM m_status";
$proto0["m_strWhere"] = "m_status_desc='inmail' and m_status_id in ( 8,9,10)";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "m_status_desc='inmail' and m_status_id in ( 8,9,10)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "m_status_desc='inmail' and m_status_id in ( 8,9,10)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "m_status_desc='inmail'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_desc",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "='inmail'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "m_status_id in ( 8,9,10)";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "in ( 8,9,10)";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = false;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status"
));

$proto10["m_sql"] = "m_status_id";
$proto10["m_srcTableName"] = "v_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status"
));

$proto12["m_sql"] = "status";
$proto12["m_srcTableName"] = "v_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_status_desc",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status"
));

$proto14["m_sql"] = "m_status_desc";
$proto14["m_srcTableName"] = "v_status";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "m_status";
$proto17["m_srcTableName"] = "v_status";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "m_status_id";
$proto17["m_columns"][] = "status";
$proto17["m_columns"][] = "m_status_desc";
$proto17["m_columns"][] = "m_status_basic_flag";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "m_status";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "v_status";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="v_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_status = createSqlQuery_v_status();


	
				;

			

$tdatav_status[".sqlquery"] = $queryData_v_status;



$tdatav_status[".hasEvents"] = false;

?>