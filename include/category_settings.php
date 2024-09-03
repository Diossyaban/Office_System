<?php
$tdatacategory = array();
$tdatacategory[".searchableFields"] = array();
$tdatacategory[".ShortName"] = "category";
$tdatacategory[".OwnerID"] = "";
$tdatacategory[".OriginalTable"] = "Tsun_uggroups";


$tdatacategory[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatacategory[".originalPagesByType"] = $tdatacategory[".pagesByType"];
$tdatacategory[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatacategory[".originalPages"] = $tdatacategory[".pages"];
$tdatacategory[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatacategory[".originalDefaultPages"] = $tdatacategory[".defaultPages"];

//	field labels
$fieldLabelscategory = array();
$fieldToolTipscategory = array();
$pageTitlescategory = array();
$placeHolderscategory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscategory["English"] = array();
	$fieldToolTipscategory["English"] = array();
	$placeHolderscategory["English"] = array();
	$pageTitlescategory["English"] = array();
	$fieldLabelscategory["English"]["m_category_id"] = "M Category Id";
	$fieldToolTipscategory["English"]["m_category_id"] = "";
	$placeHolderscategory["English"]["m_category_id"] = "";
	$fieldLabelscategory["English"]["m_category_name"] = "M Category Name";
	$fieldToolTipscategory["English"]["m_category_name"] = "";
	$placeHolderscategory["English"]["m_category_name"] = "";
	if (count($fieldToolTipscategory["English"]))
		$tdatacategory[".isUseToolTips"] = true;
}


	$tdatacategory[".NCSearch"] = true;


	$tdatacategory[".scrollGridBody"] = true;

$tdatacategory[".shortTableName"] = "category";
$tdatacategory[".nSecOptions"] = 0;

$tdatacategory[".mainTableOwnerID"] = "";
$tdatacategory[".entityType"] = 1;
$tdatacategory[".connId"] = "u736239518tsundbat154412412";


$tdatacategory[".strOriginalTableName"] = "Tsun_uggroups";

	



$tdatacategory[".showAddInPopup"] = false;

$tdatacategory[".showEditInPopup"] = false;

$tdatacategory[".showViewInPopup"] = false;

$tdatacategory[".listAjax"] = false;
//	temporary
//$tdatacategory[".listAjax"] = false;

	$tdatacategory[".audit"] = true;

	$tdatacategory[".locking"] = false;


$pages = $tdatacategory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacategory[".edit"] = true;
	$tdatacategory[".afterEditAction"] = 1;
	$tdatacategory[".closePopupAfterEdit"] = 1;
	$tdatacategory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacategory[".add"] = true;
$tdatacategory[".afterAddAction"] = 1;
$tdatacategory[".closePopupAfterAdd"] = 1;
$tdatacategory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacategory[".list"] = true;
}



$tdatacategory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacategory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacategory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacategory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacategory[".printFriendly"] = true;
}



$tdatacategory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacategory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacategory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacategory[".isUseAjaxSuggest"] = true;



																																																			

$tdatacategory[".ajaxCodeSnippetAdded"] = false;

$tdatacategory[".buttonsAdded"] = false;

$tdatacategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategory[".isUseTimeForSearch"] = false;


$tdatacategory[".badgeColor"] = "E67349";


$tdatacategory[".allSearchFields"] = array();
$tdatacategory[".filterFields"] = array();
$tdatacategory[".requiredSearchFields"] = array();

$tdatacategory[".googleLikeFields"] = array();
$tdatacategory[".googleLikeFields"][] = "m_category_id";
$tdatacategory[".googleLikeFields"][] = "m_category_name";



$tdatacategory[".tableType"] = "list";

$tdatacategory[".printerPageOrientation"] = 0;
$tdatacategory[".nPrinterPageScale"] = 100;

$tdatacategory[".nPrinterSplitRecords"] = 40;

$tdatacategory[".geocodingEnabled"] = false;










$tdatacategory[".pageSize"] = 20;

$tdatacategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacategory[".strOrderBy"] = $tstrOrderBy;

$tdatacategory[".orderindexes"] = array();


$tdatacategory[".sqlHead"] = "SELECT DISTINCT m_mapping_letter.m_category_id,  m_category.m_category_name";
$tdatacategory[".sqlFrom"] = "FROM m_mapping_letter  INNER JOIN m_category ON m_mapping_letter.m_category_id = m_category.m_category_id";
$tdatacategory[".sqlWhereExpr"] = "";
$tdatacategory[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatacategory[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategory[".arrGroupsPerPage"] = $arrGPP;

$tdatacategory[".highlightSearchResults"] = true;

$tableKeyscategory = array();
$tdatacategory[".Keys"] = $tableKeyscategory;


$tdatacategory[".hideMobileList"] = array();




//	m_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_category_id";
	$fdata["GoodName"] = "m_category_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("Category","m_category_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_category_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_letter.m_category_id";

	
	
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


	$tdatacategory["m_category_id"] = $fdata;
		$tdatacategory[".searchableFields"][] = "m_category_id";
//	m_category_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_category_name";
	$fdata["GoodName"] = "m_category_name";
	$fdata["ownerTable"] = "m_category";
	$fdata["Label"] = GetFieldLabel("Category","m_category_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_category_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category.m_category_name";

	
	
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


	$tdatacategory["m_category_name"] = $fdata;
		$tdatacategory[".searchableFields"][] = "m_category_name";


$tables_data["Category"]=&$tdatacategory;
$field_labels["Category"] = &$fieldLabelscategory;
$fieldToolTips["Category"] = &$fieldToolTipscategory;
$placeHolders["Category"] = &$placeHolderscategory;
$page_titles["Category"] = &$pageTitlescategory;


changeTextControlsToDate( "Category" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Category"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Category"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "m_mapping_letter.m_category_id,  m_category.m_category_name";
$proto0["m_strFrom"] = "FROM m_mapping_letter  INNER JOIN m_category ON m_mapping_letter.m_category_id = m_category.m_category_id";
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
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "Category"
));

$proto6["m_sql"] = "m_mapping_letter.m_category_id";
$proto6["m_srcTableName"] = "Category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_name",
	"m_strTable" => "m_category",
	"m_srcTableName" => "Category"
));

$proto8["m_sql"] = "m_category.m_category_name";
$proto8["m_srcTableName"] = "Category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "m_mapping_letter";
$proto11["m_srcTableName"] = "Category";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "m_category_id";
$proto11["m_columns"][] = "m_type_id";
$proto11["m_columns"][] = "m_division_id";
$proto11["m_columns"][] = "m_work_unit_id";
$proto11["m_columns"][] = "m_template_id";
$proto11["m_columns"][] = "is_active";
$proto11["m_columns"][] = "m_language_id";
$proto11["m_columns"][] = "deleted_date";
$proto11["m_columns"][] = "created_date";
$proto11["m_columns"][] = "created_by";
$proto11["m_columns"][] = "last_update_by";
$proto11["m_columns"][] = "last_update_date";
$proto11["m_columns"][] = "m_signature_id";
$proto11["m_columns"][] = "template_file";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "m_mapping_letter";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "Category";
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
												$proto14=array();
$proto14["m_link"] = "SQLL_INNERJOIN";
			$proto15=array();
$proto15["m_strName"] = "m_category";
$proto15["m_srcTableName"] = "Category";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_category_id";
$proto15["m_columns"][] = "m_category_code";
$proto15["m_columns"][] = "m_category_name";
$proto15["m_columns"][] = "m_category_fl";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN m_category ON m_mapping_letter.m_category_id = m_category.m_category_id";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Category";
$proto16=array();
$proto16["m_sql"] = "m_category.m_category_id = m_mapping_letter.m_category_id";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_category_id",
	"m_strTable" => "m_category",
	"m_srcTableName" => "Category"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= m_mapping_letter.m_category_id";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_category = createSqlQuery_category();


	
				;

		

$tdatacategory[".sqlquery"] = $queryData_category;



$tdatacategory[".hasEvents"] = false;

?>