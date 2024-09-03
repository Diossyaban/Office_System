<?php
$tdatatype = array();
$tdatatype[".searchableFields"] = array();
$tdatatype[".ShortName"] = "type";
$tdatatype[".OwnerID"] = "";
$tdatatype[".OriginalTable"] = "Tsun_uggroups";


$tdatatype[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatype[".originalPagesByType"] = $tdatatype[".pagesByType"];
$tdatatype[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatype[".originalPages"] = $tdatatype[".pages"];
$tdatatype[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatype[".originalDefaultPages"] = $tdatatype[".defaultPages"];

//	field labels
$fieldLabelstype = array();
$fieldToolTipstype = array();
$pageTitlestype = array();
$placeHolderstype = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstype["English"] = array();
	$fieldToolTipstype["English"] = array();
	$placeHolderstype["English"] = array();
	$pageTitlestype["English"] = array();
	$fieldLabelstype["English"]["m_type_id"] = "M Type Id";
	$fieldToolTipstype["English"]["m_type_id"] = "";
	$placeHolderstype["English"]["m_type_id"] = "";
	$fieldLabelstype["English"]["m_type_name"] = "M Type Name";
	$fieldToolTipstype["English"]["m_type_name"] = "";
	$placeHolderstype["English"]["m_type_name"] = "";
	$fieldLabelstype["English"]["m_category_id"] = "M Category Id";
	$fieldToolTipstype["English"]["m_category_id"] = "";
	$placeHolderstype["English"]["m_category_id"] = "";
	if (count($fieldToolTipstype["English"]))
		$tdatatype[".isUseToolTips"] = true;
}


	$tdatatype[".NCSearch"] = true;


	$tdatatype[".scrollGridBody"] = true;

$tdatatype[".shortTableName"] = "type";
$tdatatype[".nSecOptions"] = 0;

$tdatatype[".mainTableOwnerID"] = "";
$tdatatype[".entityType"] = 1;
$tdatatype[".connId"] = "u736239518tsundbat154412412";


$tdatatype[".strOriginalTableName"] = "Tsun_uggroups";

	



$tdatatype[".showAddInPopup"] = false;

$tdatatype[".showEditInPopup"] = false;

$tdatatype[".showViewInPopup"] = false;

$tdatatype[".listAjax"] = false;
//	temporary
//$tdatatype[".listAjax"] = false;

	$tdatatype[".audit"] = true;

	$tdatatype[".locking"] = false;


$pages = $tdatatype[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatype[".edit"] = true;
	$tdatatype[".afterEditAction"] = 1;
	$tdatatype[".closePopupAfterEdit"] = 1;
	$tdatatype[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatype[".add"] = true;
$tdatatype[".afterAddAction"] = 1;
$tdatatype[".closePopupAfterAdd"] = 1;
$tdatatype[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatype[".list"] = true;
}



$tdatatype[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatype[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatype[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatype[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatype[".printFriendly"] = true;
}



$tdatatype[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatype[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatype[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatype[".isUseAjaxSuggest"] = true;



																																																			

$tdatatype[".ajaxCodeSnippetAdded"] = false;

$tdatatype[".buttonsAdded"] = false;

$tdatatype[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatype[".isUseTimeForSearch"] = false;


$tdatatype[".badgeColor"] = "D2AF80";


$tdatatype[".allSearchFields"] = array();
$tdatatype[".filterFields"] = array();
$tdatatype[".requiredSearchFields"] = array();

$tdatatype[".googleLikeFields"] = array();
$tdatatype[".googleLikeFields"][] = "m_type_id";
$tdatatype[".googleLikeFields"][] = "m_type_name";
$tdatatype[".googleLikeFields"][] = "m_category_id";



$tdatatype[".tableType"] = "list";

$tdatatype[".printerPageOrientation"] = 0;
$tdatatype[".nPrinterPageScale"] = 100;

$tdatatype[".nPrinterSplitRecords"] = 40;

$tdatatype[".geocodingEnabled"] = false;










$tdatatype[".pageSize"] = 20;

$tdatatype[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatype[".strOrderBy"] = $tstrOrderBy;

$tdatatype[".orderindexes"] = array();


$tdatatype[".sqlHead"] = "SELECT DISTINCT m_mapping_letter.m_type_id,  m_type.m_type_name,  m_mapping_letter.m_category_id";
$tdatatype[".sqlFrom"] = "FROM m_mapping_letter  INNER JOIN m_type ON m_mapping_letter.m_type_id = m_type.m_type_id";
$tdatatype[".sqlWhereExpr"] = "";
$tdatatype[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatype[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatype[".arrGroupsPerPage"] = $arrGPP;

$tdatatype[".highlightSearchResults"] = true;

$tableKeystype = array();
$tdatatype[".Keys"] = $tableKeystype;


$tdatatype[".hideMobileList"] = array();




//	m_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_type_id";
	$fdata["GoodName"] = "m_type_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("Type","m_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_letter.m_type_id";

	
	
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


	$tdatatype["m_type_id"] = $fdata;
		$tdatatype[".searchableFields"][] = "m_type_id";
//	m_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_type_name";
	$fdata["GoodName"] = "m_type_name";
	$fdata["ownerTable"] = "m_type";
	$fdata["Label"] = GetFieldLabel("Type","m_type_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_type_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_type.m_type_name";

	
	
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


	$tdatatype["m_type_name"] = $fdata;
		$tdatatype[".searchableFields"][] = "m_type_name";
//	m_category_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_category_id";
	$fdata["GoodName"] = "m_category_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("Type","m_category_id");
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


	$tdatatype["m_category_id"] = $fdata;
		$tdatatype[".searchableFields"][] = "m_category_id";


$tables_data["Type"]=&$tdatatype;
$field_labels["Type"] = &$fieldLabelstype;
$fieldToolTips["Type"] = &$fieldToolTipstype;
$placeHolders["Type"] = &$placeHolderstype;
$page_titles["Type"] = &$pageTitlestype;


changeTextControlsToDate( "Type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "m_mapping_letter.m_type_id,  m_type.m_type_name,  m_mapping_letter.m_category_id";
$proto0["m_strFrom"] = "FROM m_mapping_letter  INNER JOIN m_type ON m_mapping_letter.m_type_id = m_type.m_type_id";
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
	"m_strName" => "m_type_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "Type"
));

$proto6["m_sql"] = "m_mapping_letter.m_type_id";
$proto6["m_srcTableName"] = "Type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_type_name",
	"m_strTable" => "m_type",
	"m_srcTableName" => "Type"
));

$proto8["m_sql"] = "m_type.m_type_name";
$proto8["m_srcTableName"] = "Type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "Type"
));

$proto10["m_sql"] = "m_mapping_letter.m_category_id";
$proto10["m_srcTableName"] = "Type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_mapping_letter";
$proto13["m_srcTableName"] = "Type";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "m_category_id";
$proto13["m_columns"][] = "m_type_id";
$proto13["m_columns"][] = "m_division_id";
$proto13["m_columns"][] = "m_work_unit_id";
$proto13["m_columns"][] = "m_template_id";
$proto13["m_columns"][] = "is_active";
$proto13["m_columns"][] = "m_language_id";
$proto13["m_columns"][] = "deleted_date";
$proto13["m_columns"][] = "created_date";
$proto13["m_columns"][] = "created_by";
$proto13["m_columns"][] = "last_update_by";
$proto13["m_columns"][] = "last_update_date";
$proto13["m_columns"][] = "m_signature_id";
$proto13["m_columns"][] = "template_file";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_mapping_letter";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Type";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "m_type";
$proto17["m_srcTableName"] = "Type";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "m_type_id";
$proto17["m_columns"][] = "m_category_Id";
$proto17["m_columns"][] = "m_type_name";
$proto17["m_columns"][] = "m_type_fl";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN m_type ON m_mapping_letter.m_type_id = m_type.m_type_id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Type";
$proto18=array();
$proto18["m_sql"] = "m_type.m_type_id = m_mapping_letter.m_type_id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_type_id",
	"m_strTable" => "m_type",
	"m_srcTableName" => "Type"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= m_mapping_letter.m_type_id";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_type = createSqlQuery_type();


	
				;

			

$tdatatype[".sqlquery"] = $queryData_type;



$tdatatype[".hasEvents"] = false;

?>