<?php
$tdatam_status = array();
$tdatam_status[".searchableFields"] = array();
$tdatam_status[".ShortName"] = "m_status";
$tdatam_status[".OwnerID"] = "";
$tdatam_status[".OriginalTable"] = "m_status";


$tdatam_status[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_status[".originalPagesByType"] = $tdatam_status[".pagesByType"];
$tdatam_status[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_status[".originalPages"] = $tdatam_status[".pages"];
$tdatam_status[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_status[".originalDefaultPages"] = $tdatam_status[".defaultPages"];

//	field labels
$fieldLabelsm_status = array();
$fieldToolTipsm_status = array();
$pageTitlesm_status = array();
$placeHoldersm_status = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_status["English"] = array();
	$fieldToolTipsm_status["English"] = array();
	$placeHoldersm_status["English"] = array();
	$pageTitlesm_status["English"] = array();
	$fieldLabelsm_status["English"]["m_status_id"] = "M Status Id";
	$fieldToolTipsm_status["English"]["m_status_id"] = "";
	$placeHoldersm_status["English"]["m_status_id"] = "";
	$fieldLabelsm_status["English"]["status"] = "Status";
	$fieldToolTipsm_status["English"]["status"] = "";
	$placeHoldersm_status["English"]["status"] = "";
	$fieldLabelsm_status["English"]["m_status_desc"] = "M Status Desc";
	$fieldToolTipsm_status["English"]["m_status_desc"] = "";
	$placeHoldersm_status["English"]["m_status_desc"] = "";
	$fieldLabelsm_status["English"]["m_status_basic_flag"] = "M Status Basic Flag";
	$fieldToolTipsm_status["English"]["m_status_basic_flag"] = "";
	$placeHoldersm_status["English"]["m_status_basic_flag"] = "";
	if (count($fieldToolTipsm_status["English"]))
		$tdatam_status[".isUseToolTips"] = true;
}


	$tdatam_status[".NCSearch"] = true;



$tdatam_status[".shortTableName"] = "m_status";
$tdatam_status[".nSecOptions"] = 0;

$tdatam_status[".mainTableOwnerID"] = "";
$tdatam_status[".entityType"] = 0;
$tdatam_status[".connId"] = "u736239518tsundbat154412412";


$tdatam_status[".strOriginalTableName"] = "m_status";

	



$tdatam_status[".showAddInPopup"] = false;

$tdatam_status[".showEditInPopup"] = false;

$tdatam_status[".showViewInPopup"] = false;

$tdatam_status[".listAjax"] = false;
//	temporary
//$tdatam_status[".listAjax"] = false;

	$tdatam_status[".audit"] = false;

	$tdatam_status[".locking"] = false;


$pages = $tdatam_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_status[".edit"] = true;
	$tdatam_status[".afterEditAction"] = 1;
	$tdatam_status[".closePopupAfterEdit"] = 1;
	$tdatam_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_status[".add"] = true;
$tdatam_status[".afterAddAction"] = 1;
$tdatam_status[".closePopupAfterAdd"] = 1;
$tdatam_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_status[".list"] = true;
}



$tdatam_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_status[".printFriendly"] = true;
}



$tdatam_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_status[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatam_status[".ajaxCodeSnippetAdded"] = false;

$tdatam_status[".buttonsAdded"] = false;

$tdatam_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_status[".isUseTimeForSearch"] = false;


$tdatam_status[".badgeColor"] = "e8926f";


$tdatam_status[".allSearchFields"] = array();
$tdatam_status[".filterFields"] = array();
$tdatam_status[".requiredSearchFields"] = array();

$tdatam_status[".googleLikeFields"] = array();
$tdatam_status[".googleLikeFields"][] = "m_status_id";
$tdatam_status[".googleLikeFields"][] = "status";
$tdatam_status[".googleLikeFields"][] = "m_status_desc";
$tdatam_status[".googleLikeFields"][] = "m_status_basic_flag";



$tdatam_status[".tableType"] = "list";

$tdatam_status[".printerPageOrientation"] = 0;
$tdatam_status[".nPrinterPageScale"] = 100;

$tdatam_status[".nPrinterSplitRecords"] = 40;

$tdatam_status[".geocodingEnabled"] = false;










$tdatam_status[".pageSize"] = 20;

$tdatam_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_status[".strOrderBy"] = $tstrOrderBy;

$tdatam_status[".orderindexes"] = array();


$tdatam_status[".sqlHead"] = "SELECT m_status_id,  	status,  	m_status_desc,  	m_status_basic_flag";
$tdatam_status[".sqlFrom"] = "FROM m_status";
$tdatam_status[".sqlWhereExpr"] = "";
$tdatam_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_status[".arrGroupsPerPage"] = $arrGPP;

$tdatam_status[".highlightSearchResults"] = true;

$tableKeysm_status = array();
$tableKeysm_status[] = "m_status_id";
$tdatam_status[".Keys"] = $tableKeysm_status;


$tdatam_status[".hideMobileList"] = array();




//	m_status_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_status_id";
	$fdata["GoodName"] = "m_status_id";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("m_status","m_status_id");
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


	$tdatam_status["m_status_id"] = $fdata;
		$tdatam_status[".searchableFields"][] = "m_status_id";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("m_status","status");
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


	$tdatam_status["status"] = $fdata;
		$tdatam_status[".searchableFields"][] = "status";
//	m_status_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_status_desc";
	$fdata["GoodName"] = "m_status_desc";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("m_status","m_status_desc");
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


	$tdatam_status["m_status_desc"] = $fdata;
		$tdatam_status[".searchableFields"][] = "m_status_desc";
//	m_status_basic_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_status_basic_flag";
	$fdata["GoodName"] = "m_status_basic_flag";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("m_status","m_status_basic_flag");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_status_basic_flag";

		$fdata["sourceSingle"] = "m_status_basic_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_status_basic_flag";

	
	
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


	$tdatam_status["m_status_basic_flag"] = $fdata;
		$tdatam_status[".searchableFields"][] = "m_status_basic_flag";


$tables_data["m_status"]=&$tdatam_status;
$field_labels["m_status"] = &$fieldLabelsm_status;
$fieldToolTips["m_status"] = &$fieldToolTipsm_status;
$placeHolders["m_status"] = &$placeHoldersm_status;
$page_titles["m_status"] = &$pageTitlesm_status;


changeTextControlsToDate( "m_status" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_status"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_status"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="m_disposition_type";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="m_disposition_type";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "m_disposition_type";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["m_status"][0] = $masterParams;
				$masterTablesData["m_status"][0]["masterKeys"] = array();
	$masterTablesData["m_status"][0]["masterKeys"][]="m_disposition_type_name";
				$masterTablesData["m_status"][0]["detailKeys"] = array();
	$masterTablesData["m_status"][0]["detailKeys"][]="m_status_desc";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_status_id,  	status,  	m_status_desc,  	m_status_basic_flag";
$proto0["m_strFrom"] = "FROM m_status";
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
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "m_status"
));

$proto6["m_sql"] = "m_status_id";
$proto6["m_srcTableName"] = "m_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "m_status",
	"m_srcTableName" => "m_status"
));

$proto8["m_sql"] = "status";
$proto8["m_srcTableName"] = "m_status";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_status_desc",
	"m_strTable" => "m_status",
	"m_srcTableName" => "m_status"
));

$proto10["m_sql"] = "m_status_desc";
$proto10["m_srcTableName"] = "m_status";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_status_basic_flag",
	"m_strTable" => "m_status",
	"m_srcTableName" => "m_status"
));

$proto12["m_sql"] = "m_status_basic_flag";
$proto12["m_srcTableName"] = "m_status";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_status";
$proto15["m_srcTableName"] = "m_status";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_status_id";
$proto15["m_columns"][] = "status";
$proto15["m_columns"][] = "m_status_desc";
$proto15["m_columns"][] = "m_status_basic_flag";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_status";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "m_status";
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
$proto0["m_srcTableName"]="m_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_status = createSqlQuery_m_status();


	
				;

				

$tdatam_status[".sqlquery"] = $queryData_m_status;



$tdatam_status[".hasEvents"] = false;

?>