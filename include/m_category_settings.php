<?php
$tdatam_category = array();
$tdatam_category[".searchableFields"] = array();
$tdatam_category[".ShortName"] = "m_category";
$tdatam_category[".OwnerID"] = "";
$tdatam_category[".OriginalTable"] = "m_category";


$tdatam_category[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_category[".originalPagesByType"] = $tdatam_category[".pagesByType"];
$tdatam_category[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_category[".originalPages"] = $tdatam_category[".pages"];
$tdatam_category[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_category[".originalDefaultPages"] = $tdatam_category[".defaultPages"];

//	field labels
$fieldLabelsm_category = array();
$fieldToolTipsm_category = array();
$pageTitlesm_category = array();
$placeHoldersm_category = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_category["English"] = array();
	$fieldToolTipsm_category["English"] = array();
	$placeHoldersm_category["English"] = array();
	$pageTitlesm_category["English"] = array();
	$fieldLabelsm_category["English"]["m_category_id"] = "M Category Id";
	$fieldToolTipsm_category["English"]["m_category_id"] = "";
	$placeHoldersm_category["English"]["m_category_id"] = "";
	$fieldLabelsm_category["English"]["m_category_code"] = "Category Code";
	$fieldToolTipsm_category["English"]["m_category_code"] = "";
	$placeHoldersm_category["English"]["m_category_code"] = "";
	$fieldLabelsm_category["English"]["m_category_name"] = "Category Name";
	$fieldToolTipsm_category["English"]["m_category_name"] = "";
	$placeHoldersm_category["English"]["m_category_name"] = "";
	$fieldLabelsm_category["English"]["m_category_fl"] = "is Active";
	$fieldToolTipsm_category["English"]["m_category_fl"] = "";
	$placeHoldersm_category["English"]["m_category_fl"] = "";
	$pageTitlesm_category["English"]["add"] = "Add new";
	$pageTitlesm_category["English"]["edit"] = "Edit [{%m_category_id}]";
	if (count($fieldToolTipsm_category["English"]))
		$tdatam_category[".isUseToolTips"] = true;
}


	$tdatam_category[".NCSearch"] = true;


	$tdatam_category[".scrollGridBody"] = true;

$tdatam_category[".shortTableName"] = "m_category";
$tdatam_category[".nSecOptions"] = 0;

$tdatam_category[".mainTableOwnerID"] = "";
$tdatam_category[".entityType"] = 0;
$tdatam_category[".connId"] = "u736239518tsundbat154412412";


$tdatam_category[".strOriginalTableName"] = "m_category";

	



$tdatam_category[".showAddInPopup"] = false;

$tdatam_category[".showEditInPopup"] = false;

$tdatam_category[".showViewInPopup"] = false;

$tdatam_category[".listAjax"] = false;
//	temporary
//$tdatam_category[".listAjax"] = false;

	$tdatam_category[".audit"] = true;

	$tdatam_category[".locking"] = false;


$pages = $tdatam_category[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_category[".edit"] = true;
	$tdatam_category[".afterEditAction"] = 1;
	$tdatam_category[".closePopupAfterEdit"] = 1;
	$tdatam_category[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_category[".add"] = true;
$tdatam_category[".afterAddAction"] = 1;
$tdatam_category[".closePopupAfterAdd"] = 1;
$tdatam_category[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_category[".list"] = true;
}



$tdatam_category[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_category[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_category[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_category[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_category[".printFriendly"] = true;
}



$tdatam_category[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_category[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_category[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_category[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_category[".ajaxCodeSnippetAdded"] = false;

$tdatam_category[".buttonsAdded"] = false;

$tdatam_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_category[".isUseTimeForSearch"] = false;


$tdatam_category[".badgeColor"] = "4169E1";


$tdatam_category[".allSearchFields"] = array();
$tdatam_category[".filterFields"] = array();
$tdatam_category[".requiredSearchFields"] = array();

$tdatam_category[".googleLikeFields"] = array();
$tdatam_category[".googleLikeFields"][] = "m_category_id";
$tdatam_category[".googleLikeFields"][] = "m_category_code";
$tdatam_category[".googleLikeFields"][] = "m_category_name";
$tdatam_category[".googleLikeFields"][] = "m_category_fl";



$tdatam_category[".tableType"] = "list";

$tdatam_category[".printerPageOrientation"] = 0;
$tdatam_category[".nPrinterPageScale"] = 100;

$tdatam_category[".nPrinterSplitRecords"] = 40;

$tdatam_category[".geocodingEnabled"] = false;










$tdatam_category[".pageSize"] = 20;

$tdatam_category[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_category[".strOrderBy"] = $tstrOrderBy;

$tdatam_category[".orderindexes"] = array();


$tdatam_category[".sqlHead"] = "SELECT m_category_id,  	m_category_code,  	m_category_name,  	m_category_fl";
$tdatam_category[".sqlFrom"] = "FROM m_category";
$tdatam_category[".sqlWhereExpr"] = "";
$tdatam_category[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_category[".arrGroupsPerPage"] = $arrGPP;

$tdatam_category[".highlightSearchResults"] = true;

$tableKeysm_category = array();
$tableKeysm_category[] = "m_category_id";
$tdatam_category[".Keys"] = $tableKeysm_category;


$tdatam_category[".hideMobileList"] = array();




//	m_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_category_id";
	$fdata["GoodName"] = "m_category_id";
	$fdata["ownerTable"] = "m_category";
	$fdata["Label"] = GetFieldLabel("m_category","m_category_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_category_id";

		$fdata["sourceSingle"] = "m_category_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_id";

	
	
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


	$tdatam_category["m_category_id"] = $fdata;
		$tdatam_category[".searchableFields"][] = "m_category_id";
//	m_category_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_category_code";
	$fdata["GoodName"] = "m_category_code";
	$fdata["ownerTable"] = "m_category";
	$fdata["Label"] = GetFieldLabel("m_category","m_category_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_category_code";

		$fdata["sourceSingle"] = "m_category_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_code";

	
	
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
			$edata["EditParams"].= " maxlength=5";

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


	$tdatam_category["m_category_code"] = $fdata;
		$tdatam_category[".searchableFields"][] = "m_category_code";
//	m_category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_category_name";
	$fdata["GoodName"] = "m_category_name";
	$fdata["ownerTable"] = "m_category";
	$fdata["Label"] = GetFieldLabel("m_category","m_category_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_category_name";

		$fdata["sourceSingle"] = "m_category_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_name";

	
	
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


	$tdatam_category["m_category_name"] = $fdata;
		$tdatam_category[".searchableFields"][] = "m_category_name";
//	m_category_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_category_fl";
	$fdata["GoodName"] = "m_category_fl";
	$fdata["ownerTable"] = "m_category";
	$fdata["Label"] = GetFieldLabel("m_category","m_category_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_category_fl";

		$fdata["sourceSingle"] = "m_category_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_fl";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

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


	$tdatam_category["m_category_fl"] = $fdata;
		$tdatam_category[".searchableFields"][] = "m_category_fl";


$tables_data["m_category"]=&$tdatam_category;
$field_labels["m_category"] = &$fieldLabelsm_category;
$fieldToolTips["m_category"] = &$fieldToolTipsm_category;
$placeHolders["m_category"] = &$placeHoldersm_category;
$page_titles["m_category"] = &$pageTitlesm_category;


changeTextControlsToDate( "m_category" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_category"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_category"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_category_id,  	m_category_code,  	m_category_name,  	m_category_fl";
$proto0["m_strFrom"] = "FROM m_category";
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
	"m_strName" => "m_category_id",
	"m_strTable" => "m_category",
	"m_srcTableName" => "m_category"
));

$proto6["m_sql"] = "m_category_id";
$proto6["m_srcTableName"] = "m_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_code",
	"m_strTable" => "m_category",
	"m_srcTableName" => "m_category"
));

$proto8["m_sql"] = "m_category_code";
$proto8["m_srcTableName"] = "m_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_name",
	"m_strTable" => "m_category",
	"m_srcTableName" => "m_category"
));

$proto10["m_sql"] = "m_category_name";
$proto10["m_srcTableName"] = "m_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_fl",
	"m_strTable" => "m_category",
	"m_srcTableName" => "m_category"
));

$proto12["m_sql"] = "m_category_fl";
$proto12["m_srcTableName"] = "m_category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_category";
$proto15["m_srcTableName"] = "m_category";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_category_id";
$proto15["m_columns"][] = "m_category_code";
$proto15["m_columns"][] = "m_category_name";
$proto15["m_columns"][] = "m_category_fl";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_category";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "m_category";
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
$proto0["m_srcTableName"]="m_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_category = createSqlQuery_m_category();


	
				;

				

$tdatam_category[".sqlquery"] = $queryData_m_category;



$tdatam_category[".hasEvents"] = false;

?>