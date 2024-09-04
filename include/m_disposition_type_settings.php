<?php
$tdatam_disposition_type = array();
$tdatam_disposition_type[".searchableFields"] = array();
$tdatam_disposition_type[".ShortName"] = "m_disposition_type";
$tdatam_disposition_type[".OwnerID"] = "";
$tdatam_disposition_type[".OriginalTable"] = "m_disposition_type";


$tdatam_disposition_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_disposition_type[".originalPagesByType"] = $tdatam_disposition_type[".pagesByType"];
$tdatam_disposition_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_disposition_type[".originalPages"] = $tdatam_disposition_type[".pages"];
$tdatam_disposition_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_disposition_type[".originalDefaultPages"] = $tdatam_disposition_type[".defaultPages"];

//	field labels
$fieldLabelsm_disposition_type = array();
$fieldToolTipsm_disposition_type = array();
$pageTitlesm_disposition_type = array();
$placeHoldersm_disposition_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_disposition_type["English"] = array();
	$fieldToolTipsm_disposition_type["English"] = array();
	$placeHoldersm_disposition_type["English"] = array();
	$pageTitlesm_disposition_type["English"] = array();
	$fieldLabelsm_disposition_type["English"]["m_disposition_type_id"] = "M Disposition Type Id";
	$fieldToolTipsm_disposition_type["English"]["m_disposition_type_id"] = "";
	$placeHoldersm_disposition_type["English"]["m_disposition_type_id"] = "";
	$fieldLabelsm_disposition_type["English"]["m_disposition_type_name"] = "M Disposition Type Name";
	$fieldToolTipsm_disposition_type["English"]["m_disposition_type_name"] = "";
	$placeHoldersm_disposition_type["English"]["m_disposition_type_name"] = "";
	if (count($fieldToolTipsm_disposition_type["English"]))
		$tdatam_disposition_type[".isUseToolTips"] = true;
}


	$tdatam_disposition_type[".NCSearch"] = true;



$tdatam_disposition_type[".shortTableName"] = "m_disposition_type";
$tdatam_disposition_type[".nSecOptions"] = 0;

$tdatam_disposition_type[".mainTableOwnerID"] = "";
$tdatam_disposition_type[".entityType"] = 0;
$tdatam_disposition_type[".connId"] = "u736239518tsundbat154412412";


$tdatam_disposition_type[".strOriginalTableName"] = "m_disposition_type";

	



$tdatam_disposition_type[".showAddInPopup"] = false;

$tdatam_disposition_type[".showEditInPopup"] = false;

$tdatam_disposition_type[".showViewInPopup"] = false;

$tdatam_disposition_type[".listAjax"] = false;
//	temporary
//$tdatam_disposition_type[".listAjax"] = false;

	$tdatam_disposition_type[".audit"] = false;

	$tdatam_disposition_type[".locking"] = false;


$pages = $tdatam_disposition_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_disposition_type[".edit"] = true;
	$tdatam_disposition_type[".afterEditAction"] = 1;
	$tdatam_disposition_type[".closePopupAfterEdit"] = 1;
	$tdatam_disposition_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_disposition_type[".add"] = true;
$tdatam_disposition_type[".afterAddAction"] = 1;
$tdatam_disposition_type[".closePopupAfterAdd"] = 1;
$tdatam_disposition_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_disposition_type[".list"] = true;
}



$tdatam_disposition_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_disposition_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_disposition_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_disposition_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_disposition_type[".printFriendly"] = true;
}



$tdatam_disposition_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_disposition_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_disposition_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_disposition_type[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_disposition_type[".ajaxCodeSnippetAdded"] = false;

$tdatam_disposition_type[".buttonsAdded"] = false;

$tdatam_disposition_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_disposition_type[".isUseTimeForSearch"] = false;


$tdatam_disposition_type[".badgeColor"] = "B22222";


$tdatam_disposition_type[".allSearchFields"] = array();
$tdatam_disposition_type[".filterFields"] = array();
$tdatam_disposition_type[".requiredSearchFields"] = array();

$tdatam_disposition_type[".googleLikeFields"] = array();
$tdatam_disposition_type[".googleLikeFields"][] = "m_disposition_type_id";
$tdatam_disposition_type[".googleLikeFields"][] = "m_disposition_type_name";



$tdatam_disposition_type[".tableType"] = "list";

$tdatam_disposition_type[".printerPageOrientation"] = 0;
$tdatam_disposition_type[".nPrinterPageScale"] = 100;

$tdatam_disposition_type[".nPrinterSplitRecords"] = 40;

$tdatam_disposition_type[".geocodingEnabled"] = false;










$tdatam_disposition_type[".pageSize"] = 20;

$tdatam_disposition_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_disposition_type[".strOrderBy"] = $tstrOrderBy;

$tdatam_disposition_type[".orderindexes"] = array();


$tdatam_disposition_type[".sqlHead"] = "SELECT m_disposition_type_id,  	m_disposition_type_name";
$tdatam_disposition_type[".sqlFrom"] = "FROM m_disposition_type";
$tdatam_disposition_type[".sqlWhereExpr"] = "";
$tdatam_disposition_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_disposition_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_disposition_type[".arrGroupsPerPage"] = $arrGPP;

$tdatam_disposition_type[".highlightSearchResults"] = true;

$tableKeysm_disposition_type = array();
$tableKeysm_disposition_type[] = "m_disposition_type_id";
$tdatam_disposition_type[".Keys"] = $tableKeysm_disposition_type;


$tdatam_disposition_type[".hideMobileList"] = array();




//	m_disposition_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_disposition_type_id";
	$fdata["GoodName"] = "m_disposition_type_id";
	$fdata["ownerTable"] = "m_disposition_type";
	$fdata["Label"] = GetFieldLabel("m_disposition_type","m_disposition_type_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_disposition_type_id";

		$fdata["sourceSingle"] = "m_disposition_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_disposition_type_id";

	
	
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


	$tdatam_disposition_type["m_disposition_type_id"] = $fdata;
		$tdatam_disposition_type[".searchableFields"][] = "m_disposition_type_id";
//	m_disposition_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_disposition_type_name";
	$fdata["GoodName"] = "m_disposition_type_name";
	$fdata["ownerTable"] = "m_disposition_type";
	$fdata["Label"] = GetFieldLabel("m_disposition_type","m_disposition_type_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_disposition_type_name";

		$fdata["sourceSingle"] = "m_disposition_type_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_disposition_type_name";

	
	
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


	$tdatam_disposition_type["m_disposition_type_name"] = $fdata;
		$tdatam_disposition_type[".searchableFields"][] = "m_disposition_type_name";


$tables_data["m_disposition_type"]=&$tdatam_disposition_type;
$field_labels["m_disposition_type"] = &$fieldLabelsm_disposition_type;
$fieldToolTips["m_disposition_type"] = &$fieldToolTipsm_disposition_type;
$placeHolders["m_disposition_type"] = &$placeHoldersm_disposition_type;
$page_titles["m_disposition_type"] = &$pageTitlesm_disposition_type;


changeTextControlsToDate( "m_disposition_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_disposition_type"] = array();
//	m_status
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_status";
		$detailsParam["dOriginalTable"] = "m_status";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_status";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_status");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["m_disposition_type"][$dIndex] = $detailsParam;

	
		$detailsTablesData["m_disposition_type"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["m_disposition_type"][$dIndex]["masterKeys"][]="m_disposition_type_name";

				$detailsTablesData["m_disposition_type"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["m_disposition_type"][$dIndex]["detailKeys"][]="m_status_desc";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_disposition_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_disposition_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_disposition_type_id,  	m_disposition_type_name";
$proto0["m_strFrom"] = "FROM m_disposition_type";
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
	"m_strName" => "m_disposition_type_id",
	"m_strTable" => "m_disposition_type",
	"m_srcTableName" => "m_disposition_type"
));

$proto6["m_sql"] = "m_disposition_type_id";
$proto6["m_srcTableName"] = "m_disposition_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_disposition_type_name",
	"m_strTable" => "m_disposition_type",
	"m_srcTableName" => "m_disposition_type"
));

$proto8["m_sql"] = "m_disposition_type_name";
$proto8["m_srcTableName"] = "m_disposition_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "m_disposition_type";
$proto11["m_srcTableName"] = "m_disposition_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "m_disposition_type_id";
$proto11["m_columns"][] = "m_disposition_type_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "m_disposition_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "m_disposition_type";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_disposition_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_disposition_type = createSqlQuery_m_disposition_type();


	
				;

		

$tdatam_disposition_type[".sqlquery"] = $queryData_m_disposition_type;



$tdatam_disposition_type[".hasEvents"] = false;

?>