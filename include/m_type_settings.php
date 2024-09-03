<?php
$tdatam_type = array();
$tdatam_type[".searchableFields"] = array();
$tdatam_type[".ShortName"] = "m_type";
$tdatam_type[".OwnerID"] = "";
$tdatam_type[".OriginalTable"] = "m_type";


$tdatam_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_type[".originalPagesByType"] = $tdatam_type[".pagesByType"];
$tdatam_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_type[".originalPages"] = $tdatam_type[".pages"];
$tdatam_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_type[".originalDefaultPages"] = $tdatam_type[".defaultPages"];

//	field labels
$fieldLabelsm_type = array();
$fieldToolTipsm_type = array();
$pageTitlesm_type = array();
$placeHoldersm_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_type["English"] = array();
	$fieldToolTipsm_type["English"] = array();
	$placeHoldersm_type["English"] = array();
	$pageTitlesm_type["English"] = array();
	$fieldLabelsm_type["English"]["m_type_id"] = "M Type Id";
	$fieldToolTipsm_type["English"]["m_type_id"] = "";
	$placeHoldersm_type["English"]["m_type_id"] = "";
	$fieldLabelsm_type["English"]["m_category_Id"] = "M Category Id";
	$fieldToolTipsm_type["English"]["m_category_Id"] = "";
	$placeHoldersm_type["English"]["m_category_Id"] = "";
	$fieldLabelsm_type["English"]["m_type_name"] = "Type Name";
	$fieldToolTipsm_type["English"]["m_type_name"] = "";
	$placeHoldersm_type["English"]["m_type_name"] = "";
	$fieldLabelsm_type["English"]["m_type_fl"] = "is Active";
	$fieldToolTipsm_type["English"]["m_type_fl"] = "";
	$placeHoldersm_type["English"]["m_type_fl"] = "";
	$pageTitlesm_type["English"]["add"] = "Add new";
	$pageTitlesm_type["English"]["edit"] = "Edit [{%m_type_id}]";
	$pageTitlesm_type["English"]["view"] = "Type {%m_type_id}";
	if (count($fieldToolTipsm_type["English"]))
		$tdatam_type[".isUseToolTips"] = true;
}


	$tdatam_type[".NCSearch"] = true;


	$tdatam_type[".scrollGridBody"] = true;

$tdatam_type[".shortTableName"] = "m_type";
$tdatam_type[".nSecOptions"] = 0;

$tdatam_type[".mainTableOwnerID"] = "";
$tdatam_type[".entityType"] = 0;
$tdatam_type[".connId"] = "u736239518tsundbat154412412";


$tdatam_type[".strOriginalTableName"] = "m_type";

	



$tdatam_type[".showAddInPopup"] = false;

$tdatam_type[".showEditInPopup"] = false;

$tdatam_type[".showViewInPopup"] = false;

$tdatam_type[".listAjax"] = false;
//	temporary
//$tdatam_type[".listAjax"] = false;

	$tdatam_type[".audit"] = true;

	$tdatam_type[".locking"] = false;


$pages = $tdatam_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_type[".edit"] = true;
	$tdatam_type[".afterEditAction"] = 1;
	$tdatam_type[".closePopupAfterEdit"] = 1;
	$tdatam_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_type[".add"] = true;
$tdatam_type[".afterAddAction"] = 1;
$tdatam_type[".closePopupAfterAdd"] = 1;
$tdatam_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_type[".list"] = true;
}



$tdatam_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_type[".printFriendly"] = true;
}



$tdatam_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_type[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_type[".ajaxCodeSnippetAdded"] = false;

$tdatam_type[".buttonsAdded"] = false;

$tdatam_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_type[".isUseTimeForSearch"] = false;


$tdatam_type[".badgeColor"] = "D2AF80";


$tdatam_type[".allSearchFields"] = array();
$tdatam_type[".filterFields"] = array();
$tdatam_type[".requiredSearchFields"] = array();

$tdatam_type[".googleLikeFields"] = array();
$tdatam_type[".googleLikeFields"][] = "m_type_id";
$tdatam_type[".googleLikeFields"][] = "m_category_Id";
$tdatam_type[".googleLikeFields"][] = "m_type_name";
$tdatam_type[".googleLikeFields"][] = "m_type_fl";



$tdatam_type[".tableType"] = "list";

$tdatam_type[".printerPageOrientation"] = 0;
$tdatam_type[".nPrinterPageScale"] = 100;

$tdatam_type[".nPrinterSplitRecords"] = 40;

$tdatam_type[".geocodingEnabled"] = false;










$tdatam_type[".pageSize"] = 20;

$tdatam_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_type[".strOrderBy"] = $tstrOrderBy;

$tdatam_type[".orderindexes"] = array();


$tdatam_type[".sqlHead"] = "SELECT m_type_id,  	m_category_Id,  	m_type_name,  	m_type_fl";
$tdatam_type[".sqlFrom"] = "FROM m_type";
$tdatam_type[".sqlWhereExpr"] = "";
$tdatam_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_type[".arrGroupsPerPage"] = $arrGPP;

$tdatam_type[".highlightSearchResults"] = true;

$tableKeysm_type = array();
$tableKeysm_type[] = "m_type_id";
$tdatam_type[".Keys"] = $tableKeysm_type;


$tdatam_type[".hideMobileList"] = array();




//	m_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_type_id";
	$fdata["GoodName"] = "m_type_id";
	$fdata["ownerTable"] = "m_type";
	$fdata["Label"] = GetFieldLabel("m_type","m_type_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_type_id";

		$fdata["sourceSingle"] = "m_type_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_type_id";

	
	
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


	$tdatam_type["m_type_id"] = $fdata;
		$tdatam_type[".searchableFields"][] = "m_type_id";
//	m_category_Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_category_Id";
	$fdata["GoodName"] = "m_category_Id";
	$fdata["ownerTable"] = "m_type";
	$fdata["Label"] = GetFieldLabel("m_type","m_category_Id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_category_Id";

		$fdata["sourceSingle"] = "m_category_Id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_category_Id";

	
	
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


	$tdatam_type["m_category_Id"] = $fdata;
		$tdatam_type[".searchableFields"][] = "m_category_Id";
//	m_type_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_type_name";
	$fdata["GoodName"] = "m_type_name";
	$fdata["ownerTable"] = "m_type";
	$fdata["Label"] = GetFieldLabel("m_type","m_type_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_type_name";

		$fdata["sourceSingle"] = "m_type_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_type_name";

	
	
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


	$tdatam_type["m_type_name"] = $fdata;
		$tdatam_type[".searchableFields"][] = "m_type_name";
//	m_type_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_type_fl";
	$fdata["GoodName"] = "m_type_fl";
	$fdata["ownerTable"] = "m_type";
	$fdata["Label"] = GetFieldLabel("m_type","m_type_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_type_fl";

		$fdata["sourceSingle"] = "m_type_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_type_fl";

	
	
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


	$tdatam_type["m_type_fl"] = $fdata;
		$tdatam_type[".searchableFields"][] = "m_type_fl";


$tables_data["m_type"]=&$tdatam_type;
$field_labels["m_type"] = &$fieldLabelsm_type;
$fieldToolTips["m_type"] = &$fieldToolTipsm_type;
$placeHolders["m_type"] = &$placeHoldersm_type;
$page_titles["m_type"] = &$pageTitlesm_type;


changeTextControlsToDate( "m_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_type_id,  	m_category_Id,  	m_type_name,  	m_type_fl";
$proto0["m_strFrom"] = "FROM m_type";
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
	"m_strTable" => "m_type",
	"m_srcTableName" => "m_type"
));

$proto6["m_sql"] = "m_type_id";
$proto6["m_srcTableName"] = "m_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_category_Id",
	"m_strTable" => "m_type",
	"m_srcTableName" => "m_type"
));

$proto8["m_sql"] = "m_category_Id";
$proto8["m_srcTableName"] = "m_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_type_name",
	"m_strTable" => "m_type",
	"m_srcTableName" => "m_type"
));

$proto10["m_sql"] = "m_type_name";
$proto10["m_srcTableName"] = "m_type";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_type_fl",
	"m_strTable" => "m_type",
	"m_srcTableName" => "m_type"
));

$proto12["m_sql"] = "m_type_fl";
$proto12["m_srcTableName"] = "m_type";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_type";
$proto15["m_srcTableName"] = "m_type";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_type_id";
$proto15["m_columns"][] = "m_category_Id";
$proto15["m_columns"][] = "m_type_name";
$proto15["m_columns"][] = "m_type_fl";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_type";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "m_type";
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
$proto0["m_srcTableName"]="m_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_type = createSqlQuery_m_type();


	
				;

				

$tdatam_type[".sqlquery"] = $queryData_m_type;



$tdatam_type[".hasEvents"] = false;

?>