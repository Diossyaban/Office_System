<?php
$tdatat_register_mapping = array();
$tdatat_register_mapping[".searchableFields"] = array();
$tdatat_register_mapping[".ShortName"] = "t_register_mapping";
$tdatat_register_mapping[".OwnerID"] = "";
$tdatat_register_mapping[".OriginalTable"] = "t_register_mapping";


$tdatat_register_mapping[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_register_mapping[".originalPagesByType"] = $tdatat_register_mapping[".pagesByType"];
$tdatat_register_mapping[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_register_mapping[".originalPages"] = $tdatat_register_mapping[".pages"];
$tdatat_register_mapping[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_register_mapping[".originalDefaultPages"] = $tdatat_register_mapping[".defaultPages"];

//	field labels
$fieldLabelst_register_mapping = array();
$fieldToolTipst_register_mapping = array();
$pageTitlest_register_mapping = array();
$placeHolderst_register_mapping = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_register_mapping["English"] = array();
	$fieldToolTipst_register_mapping["English"] = array();
	$placeHolderst_register_mapping["English"] = array();
	$pageTitlest_register_mapping["English"] = array();
	$fieldLabelst_register_mapping["English"]["t_register_mapping_id"] = "T Register Mapping Id";
	$fieldToolTipst_register_mapping["English"]["t_register_mapping_id"] = "";
	$placeHolderst_register_mapping["English"]["t_register_mapping_id"] = "";
	$fieldLabelst_register_mapping["English"]["username"] = "Username";
	$fieldToolTipst_register_mapping["English"]["username"] = "";
	$placeHolderst_register_mapping["English"]["username"] = "";
	$fieldLabelst_register_mapping["English"]["location_id"] = "Location Id";
	$fieldToolTipst_register_mapping["English"]["location_id"] = "";
	$placeHolderst_register_mapping["English"]["location_id"] = "";
	if (count($fieldToolTipst_register_mapping["English"]))
		$tdatat_register_mapping[".isUseToolTips"] = true;
}


	$tdatat_register_mapping[".NCSearch"] = true;



$tdatat_register_mapping[".shortTableName"] = "t_register_mapping";
$tdatat_register_mapping[".nSecOptions"] = 0;

$tdatat_register_mapping[".mainTableOwnerID"] = "";
$tdatat_register_mapping[".entityType"] = 0;
$tdatat_register_mapping[".connId"] = "u736239518tsundbat154412412";


$tdatat_register_mapping[".strOriginalTableName"] = "t_register_mapping";

	



$tdatat_register_mapping[".showAddInPopup"] = false;

$tdatat_register_mapping[".showEditInPopup"] = false;

$tdatat_register_mapping[".showViewInPopup"] = false;

$tdatat_register_mapping[".listAjax"] = false;
//	temporary
//$tdatat_register_mapping[".listAjax"] = false;

	$tdatat_register_mapping[".audit"] = false;

	$tdatat_register_mapping[".locking"] = false;


$pages = $tdatat_register_mapping[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_register_mapping[".edit"] = true;
	$tdatat_register_mapping[".afterEditAction"] = 1;
	$tdatat_register_mapping[".closePopupAfterEdit"] = 1;
	$tdatat_register_mapping[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_register_mapping[".add"] = true;
$tdatat_register_mapping[".afterAddAction"] = 1;
$tdatat_register_mapping[".closePopupAfterAdd"] = 1;
$tdatat_register_mapping[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_register_mapping[".list"] = true;
}



$tdatat_register_mapping[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_register_mapping[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_register_mapping[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_register_mapping[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_register_mapping[".printFriendly"] = true;
}



$tdatat_register_mapping[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_register_mapping[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_register_mapping[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_register_mapping[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_register_mapping[".ajaxCodeSnippetAdded"] = false;

$tdatat_register_mapping[".buttonsAdded"] = false;

$tdatat_register_mapping[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_register_mapping[".isUseTimeForSearch"] = false;


$tdatat_register_mapping[".badgeColor"] = "6B8E23";


$tdatat_register_mapping[".allSearchFields"] = array();
$tdatat_register_mapping[".filterFields"] = array();
$tdatat_register_mapping[".requiredSearchFields"] = array();

$tdatat_register_mapping[".googleLikeFields"] = array();
$tdatat_register_mapping[".googleLikeFields"][] = "t_register_mapping_id";
$tdatat_register_mapping[".googleLikeFields"][] = "username";
$tdatat_register_mapping[".googleLikeFields"][] = "location_id";



$tdatat_register_mapping[".tableType"] = "list";

$tdatat_register_mapping[".printerPageOrientation"] = 0;
$tdatat_register_mapping[".nPrinterPageScale"] = 100;

$tdatat_register_mapping[".nPrinterSplitRecords"] = 40;

$tdatat_register_mapping[".geocodingEnabled"] = false;










$tdatat_register_mapping[".pageSize"] = 20;

$tdatat_register_mapping[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_register_mapping[".strOrderBy"] = $tstrOrderBy;

$tdatat_register_mapping[".orderindexes"] = array();


$tdatat_register_mapping[".sqlHead"] = "SELECT t_register_mapping_id,  	username,  	location_id";
$tdatat_register_mapping[".sqlFrom"] = "FROM t_register_mapping";
$tdatat_register_mapping[".sqlWhereExpr"] = "";
$tdatat_register_mapping[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_register_mapping[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_register_mapping[".arrGroupsPerPage"] = $arrGPP;

$tdatat_register_mapping[".highlightSearchResults"] = true;

$tableKeyst_register_mapping = array();
$tableKeyst_register_mapping[] = "t_register_mapping_id";
$tdatat_register_mapping[".Keys"] = $tableKeyst_register_mapping;


$tdatat_register_mapping[".hideMobileList"] = array();




//	t_register_mapping_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_register_mapping_id";
	$fdata["GoodName"] = "t_register_mapping_id";
	$fdata["ownerTable"] = "t_register_mapping";
	$fdata["Label"] = GetFieldLabel("t_register_mapping","t_register_mapping_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_register_mapping_id";

		$fdata["sourceSingle"] = "t_register_mapping_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_mapping_id";

	
	
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


	$tdatat_register_mapping["t_register_mapping_id"] = $fdata;
		$tdatat_register_mapping[".searchableFields"][] = "t_register_mapping_id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "t_register_mapping";
	$fdata["Label"] = GetFieldLabel("t_register_mapping","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatat_register_mapping["username"] = $fdata;
		$tdatat_register_mapping[".searchableFields"][] = "username";
//	location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "location_id";
	$fdata["GoodName"] = "location_id";
	$fdata["ownerTable"] = "t_register_mapping";
	$fdata["Label"] = GetFieldLabel("t_register_mapping","location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "location_id";

		$fdata["sourceSingle"] = "location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "location_id";

	
	
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


	$tdatat_register_mapping["location_id"] = $fdata;
		$tdatat_register_mapping[".searchableFields"][] = "location_id";


$tables_data["t_register_mapping"]=&$tdatat_register_mapping;
$field_labels["t_register_mapping"] = &$fieldLabelst_register_mapping;
$fieldToolTips["t_register_mapping"] = &$fieldToolTipst_register_mapping;
$placeHolders["t_register_mapping"] = &$placeHolderst_register_mapping;
$page_titles["t_register_mapping"] = &$pageTitlest_register_mapping;


changeTextControlsToDate( "t_register_mapping" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_register_mapping"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_register_mapping"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_register_mapping()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_register_mapping_id,  	username,  	location_id";
$proto0["m_strFrom"] = "FROM t_register_mapping";
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
	"m_strName" => "t_register_mapping_id",
	"m_strTable" => "t_register_mapping",
	"m_srcTableName" => "t_register_mapping"
));

$proto6["m_sql"] = "t_register_mapping_id";
$proto6["m_srcTableName"] = "t_register_mapping";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "t_register_mapping",
	"m_srcTableName" => "t_register_mapping"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "t_register_mapping";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "location_id",
	"m_strTable" => "t_register_mapping",
	"m_srcTableName" => "t_register_mapping"
));

$proto10["m_sql"] = "location_id";
$proto10["m_srcTableName"] = "t_register_mapping";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "t_register_mapping";
$proto13["m_srcTableName"] = "t_register_mapping";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "t_register_mapping_id";
$proto13["m_columns"][] = "username";
$proto13["m_columns"][] = "location_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "t_register_mapping";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "t_register_mapping";
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
$proto0["m_srcTableName"]="t_register_mapping";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_register_mapping = createSqlQuery_t_register_mapping();


	
				;

			

$tdatat_register_mapping[".sqlquery"] = $queryData_t_register_mapping;



$tdatat_register_mapping[".hasEvents"] = false;

?>