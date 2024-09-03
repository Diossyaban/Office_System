<?php
$tdatav_status_register = array();
$tdatav_status_register[".searchableFields"] = array();
$tdatav_status_register[".ShortName"] = "v_status_register";
$tdatav_status_register[".OwnerID"] = "";
$tdatav_status_register[".OriginalTable"] = "m_status";


$tdatav_status_register[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatav_status_register[".originalPagesByType"] = $tdatav_status_register[".pagesByType"];
$tdatav_status_register[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatav_status_register[".originalPages"] = $tdatav_status_register[".pages"];
$tdatav_status_register[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatav_status_register[".originalDefaultPages"] = $tdatav_status_register[".defaultPages"];

//	field labels
$fieldLabelsv_status_register = array();
$fieldToolTipsv_status_register = array();
$pageTitlesv_status_register = array();
$placeHoldersv_status_register = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_status_register["English"] = array();
	$fieldToolTipsv_status_register["English"] = array();
	$placeHoldersv_status_register["English"] = array();
	$pageTitlesv_status_register["English"] = array();
	$fieldLabelsv_status_register["English"]["m_status_id"] = "M Status Id";
	$fieldToolTipsv_status_register["English"]["m_status_id"] = "";
	$placeHoldersv_status_register["English"]["m_status_id"] = "";
	$fieldLabelsv_status_register["English"]["status"] = "Status";
	$fieldToolTipsv_status_register["English"]["status"] = "";
	$placeHoldersv_status_register["English"]["status"] = "";
	$fieldLabelsv_status_register["English"]["m_status_desc"] = "M Status Desc";
	$fieldToolTipsv_status_register["English"]["m_status_desc"] = "";
	$placeHoldersv_status_register["English"]["m_status_desc"] = "";
	if (count($fieldToolTipsv_status_register["English"]))
		$tdatav_status_register[".isUseToolTips"] = true;
}


	$tdatav_status_register[".NCSearch"] = true;



$tdatav_status_register[".shortTableName"] = "v_status_register";
$tdatav_status_register[".nSecOptions"] = 0;

$tdatav_status_register[".mainTableOwnerID"] = "";
$tdatav_status_register[".entityType"] = 1;
$tdatav_status_register[".connId"] = "u736239518tsundbat154412412";


$tdatav_status_register[".strOriginalTableName"] = "m_status";

	



$tdatav_status_register[".showAddInPopup"] = false;

$tdatav_status_register[".showEditInPopup"] = false;

$tdatav_status_register[".showViewInPopup"] = false;

$tdatav_status_register[".listAjax"] = false;
//	temporary
//$tdatav_status_register[".listAjax"] = false;

	$tdatav_status_register[".audit"] = false;

	$tdatav_status_register[".locking"] = false;


$pages = $tdatav_status_register[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_status_register[".edit"] = true;
	$tdatav_status_register[".afterEditAction"] = 1;
	$tdatav_status_register[".closePopupAfterEdit"] = 1;
	$tdatav_status_register[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_status_register[".add"] = true;
$tdatav_status_register[".afterAddAction"] = 1;
$tdatav_status_register[".closePopupAfterAdd"] = 1;
$tdatav_status_register[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_status_register[".list"] = true;
}



$tdatav_status_register[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_status_register[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_status_register[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_status_register[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_status_register[".printFriendly"] = true;
}



$tdatav_status_register[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_status_register[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_status_register[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_status_register[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_status_register[".ajaxCodeSnippetAdded"] = false;

$tdatav_status_register[".buttonsAdded"] = false;

$tdatav_status_register[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_status_register[".isUseTimeForSearch"] = false;


$tdatav_status_register[".badgeColor"] = "EDCA00";


$tdatav_status_register[".allSearchFields"] = array();
$tdatav_status_register[".filterFields"] = array();
$tdatav_status_register[".requiredSearchFields"] = array();

$tdatav_status_register[".googleLikeFields"] = array();
$tdatav_status_register[".googleLikeFields"][] = "m_status_id";
$tdatav_status_register[".googleLikeFields"][] = "status";
$tdatav_status_register[".googleLikeFields"][] = "m_status_desc";



$tdatav_status_register[".tableType"] = "list";

$tdatav_status_register[".printerPageOrientation"] = 0;
$tdatav_status_register[".nPrinterPageScale"] = 100;

$tdatav_status_register[".nPrinterSplitRecords"] = 40;

$tdatav_status_register[".geocodingEnabled"] = false;










$tdatav_status_register[".pageSize"] = 20;

$tdatav_status_register[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_status_register[".strOrderBy"] = $tstrOrderBy;

$tdatav_status_register[".orderindexes"] = array();


$tdatav_status_register[".sqlHead"] = "SELECT m_status_id,  status,  m_status_desc";
$tdatav_status_register[".sqlFrom"] = "FROM m_status";
$tdatav_status_register[".sqlWhereExpr"] = "(m_status_id in (23,24)) AND (m_status_desc ='register')";
$tdatav_status_register[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_status_register[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_status_register[".arrGroupsPerPage"] = $arrGPP;

$tdatav_status_register[".highlightSearchResults"] = true;

$tableKeysv_status_register = array();
$tableKeysv_status_register[] = "m_status_id";
$tdatav_status_register[".Keys"] = $tableKeysv_status_register;


$tdatav_status_register[".hideMobileList"] = array();




//	m_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_status_id";
	$fdata["GoodName"] = "m_status_id";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("v_status_register","m_status_id");
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


	$tdatav_status_register["m_status_id"] = $fdata;
		$tdatav_status_register[".searchableFields"][] = "m_status_id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("v_status_register","status");
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


	$tdatav_status_register["status"] = $fdata;
		$tdatav_status_register[".searchableFields"][] = "status";
//	m_status_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_status_desc";
	$fdata["GoodName"] = "m_status_desc";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("v_status_register","m_status_desc");
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


	$tdatav_status_register["m_status_desc"] = $fdata;
		$tdatav_status_register[".searchableFields"][] = "m_status_desc";


$tables_data["v_status_register"]=&$tdatav_status_register;
$field_labels["v_status_register"] = &$fieldLabelsv_status_register;
$fieldToolTips["v_status_register"] = &$fieldToolTipsv_status_register;
$placeHolders["v_status_register"] = &$placeHoldersv_status_register;
$page_titles["v_status_register"] = &$pageTitlesv_status_register;


changeTextControlsToDate( "v_status_register" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_status_register"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_status_register"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_status_register()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_status_id,  status,  m_status_desc";
$proto0["m_strFrom"] = "FROM m_status";
$proto0["m_strWhere"] = "(m_status_id in (23,24)) AND (m_status_desc ='register')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(m_status_id in (23,24)) AND (m_status_desc ='register')";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(m_status_id in (23,24)) AND (m_status_desc ='register')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "m_status_id in (23,24)";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status_register"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "in (23,24)";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "m_status_desc ='register'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_desc",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status_register"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "='register'";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
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
	"m_srcTableName" => "v_status_register"
));

$proto10["m_sql"] = "m_status_id";
$proto10["m_srcTableName"] = "v_status_register";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status_register"
));

$proto12["m_sql"] = "status";
$proto12["m_srcTableName"] = "v_status_register";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_status_desc",
	"m_strTable" => "m_status",
	"m_srcTableName" => "v_status_register"
));

$proto14["m_sql"] = "m_status_desc";
$proto14["m_srcTableName"] = "v_status_register";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "m_status";
$proto17["m_srcTableName"] = "v_status_register";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "m_status_id";
$proto17["m_columns"][] = "status";
$proto17["m_columns"][] = "m_status_desc";
$proto17["m_columns"][] = "m_status_basic_flag";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "m_status";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "v_status_register";
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
$proto0["m_srcTableName"]="v_status_register";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_status_register = createSqlQuery_v_status_register();


	
				;

			

$tdatav_status_register[".sqlquery"] = $queryData_v_status_register;



$tdatav_status_register[".hasEvents"] = false;

?>