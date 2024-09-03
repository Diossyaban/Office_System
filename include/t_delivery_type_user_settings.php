<?php
$tdatat_delivery_type_user = array();
$tdatat_delivery_type_user[".searchableFields"] = array();
$tdatat_delivery_type_user[".ShortName"] = "t_delivery_type_user";
$tdatat_delivery_type_user[".OwnerID"] = "";
$tdatat_delivery_type_user[".OriginalTable"] = "t_delivery";


$tdatat_delivery_type_user[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatat_delivery_type_user[".originalPagesByType"] = $tdatat_delivery_type_user[".pagesByType"];
$tdatat_delivery_type_user[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_type_user[".originalPages"] = $tdatat_delivery_type_user[".pages"];
$tdatat_delivery_type_user[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatat_delivery_type_user[".originalDefaultPages"] = $tdatat_delivery_type_user[".defaultPages"];

//	field labels
$fieldLabelst_delivery_type_user = array();
$fieldToolTipst_delivery_type_user = array();
$pageTitlest_delivery_type_user = array();
$placeHolderst_delivery_type_user = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_type_user["English"] = array();
	$fieldToolTipst_delivery_type_user["English"] = array();
	$placeHolderst_delivery_type_user["English"] = array();
	$pageTitlest_delivery_type_user["English"] = array();
	$fieldLabelst_delivery_type_user["English"]["t_delivery_date"] = "Out Mail Date";
	$fieldToolTipst_delivery_type_user["English"]["t_delivery_date"] = "";
	$placeHolderst_delivery_type_user["English"]["t_delivery_date"] = "";
	$fieldLabelst_delivery_type_user["English"]["t_delivery_type"] = "Out Mail Type";
	$fieldToolTipst_delivery_type_user["English"]["t_delivery_type"] = "";
	$placeHolderst_delivery_type_user["English"]["t_delivery_type"] = "";
	$fieldLabelst_delivery_type_user["English"]["jumlah"] = "Count";
	$fieldToolTipst_delivery_type_user["English"]["jumlah"] = "";
	$placeHolderst_delivery_type_user["English"]["jumlah"] = "";
	if (count($fieldToolTipst_delivery_type_user["English"]))
		$tdatat_delivery_type_user[".isUseToolTips"] = true;
}


	$tdatat_delivery_type_user[".NCSearch"] = true;



$tdatat_delivery_type_user[".shortTableName"] = "t_delivery_type_user";
$tdatat_delivery_type_user[".nSecOptions"] = 0;

$tdatat_delivery_type_user[".mainTableOwnerID"] = "";
$tdatat_delivery_type_user[".entityType"] = 1;
$tdatat_delivery_type_user[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_type_user[".strOriginalTableName"] = "t_delivery";

	



$tdatat_delivery_type_user[".showAddInPopup"] = false;

$tdatat_delivery_type_user[".showEditInPopup"] = false;

$tdatat_delivery_type_user[".showViewInPopup"] = false;

$tdatat_delivery_type_user[".listAjax"] = false;
//	temporary
//$tdatat_delivery_type_user[".listAjax"] = false;

	$tdatat_delivery_type_user[".audit"] = false;

	$tdatat_delivery_type_user[".locking"] = false;


$pages = $tdatat_delivery_type_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_type_user[".edit"] = true;
	$tdatat_delivery_type_user[".afterEditAction"] = 1;
	$tdatat_delivery_type_user[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_type_user[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_type_user[".add"] = true;
$tdatat_delivery_type_user[".afterAddAction"] = 1;
$tdatat_delivery_type_user[".closePopupAfterAdd"] = 1;
$tdatat_delivery_type_user[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_type_user[".list"] = true;
}



$tdatat_delivery_type_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_type_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_type_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_type_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_type_user[".printFriendly"] = true;
}



$tdatat_delivery_type_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_type_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_type_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_type_user[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_delivery_type_user[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_type_user[".buttonsAdded"] = false;

$tdatat_delivery_type_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_type_user[".isUseTimeForSearch"] = false;


$tdatat_delivery_type_user[".badgeColor"] = "DB7093";


$tdatat_delivery_type_user[".allSearchFields"] = array();
$tdatat_delivery_type_user[".filterFields"] = array();
$tdatat_delivery_type_user[".requiredSearchFields"] = array();

$tdatat_delivery_type_user[".googleLikeFields"] = array();
$tdatat_delivery_type_user[".googleLikeFields"][] = "jumlah";
$tdatat_delivery_type_user[".googleLikeFields"][] = "t_delivery_type";
$tdatat_delivery_type_user[".googleLikeFields"][] = "t_delivery_date";



$tdatat_delivery_type_user[".tableType"] = "list";

$tdatat_delivery_type_user[".printerPageOrientation"] = 0;
$tdatat_delivery_type_user[".nPrinterPageScale"] = 100;

$tdatat_delivery_type_user[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_type_user[".geocodingEnabled"] = false;










$tdatat_delivery_type_user[".pageSize"] = 20;

$tdatat_delivery_type_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery_type_user[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_type_user[".orderindexes"] = array();


$tdatat_delivery_type_user[".sqlHead"] = "SELECT COUNT(t_delivery_type) AS jumlah,  t_delivery_type,  t_delivery_date";
$tdatat_delivery_type_user[".sqlFrom"] = "FROM t_delivery";
$tdatat_delivery_type_user[".sqlWhereExpr"] = "";
$tdatat_delivery_type_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_type_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_type_user[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_type_user[".highlightSearchResults"] = true;

$tableKeyst_delivery_type_user = array();
$tdatat_delivery_type_user[".Keys"] = $tableKeyst_delivery_type_user;


$tdatat_delivery_type_user[".hideMobileList"] = array();




//	jumlah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "jumlah";
	$fdata["GoodName"] = "jumlah";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_delivery_type_user","jumlah");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "jumlah";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(t_delivery_type)";

	
	
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


	$tdatat_delivery_type_user["jumlah"] = $fdata;
		$tdatat_delivery_type_user[".searchableFields"][] = "jumlah";
//	t_delivery_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_type";
	$fdata["GoodName"] = "t_delivery_type";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_type_user","t_delivery_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_type";

		$fdata["sourceSingle"] = "t_delivery_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_type";

	
	
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


	$tdatat_delivery_type_user["t_delivery_type"] = $fdata;
		$tdatat_delivery_type_user[".searchableFields"][] = "t_delivery_type";
//	t_delivery_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_date";
	$fdata["GoodName"] = "t_delivery_date";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("t_delivery_type_user","t_delivery_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_delivery_date";

		$fdata["sourceSingle"] = "t_delivery_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_delivery_type_user["t_delivery_date"] = $fdata;
		$tdatat_delivery_type_user[".searchableFields"][] = "t_delivery_date";


$tables_data["t_delivery_type_user"]=&$tdatat_delivery_type_user;
$field_labels["t_delivery_type_user"] = &$fieldLabelst_delivery_type_user;
$fieldToolTips["t_delivery_type_user"] = &$fieldToolTipst_delivery_type_user;
$placeHolders["t_delivery_type_user"] = &$placeHolderst_delivery_type_user;
$page_titles["t_delivery_type_user"] = &$pageTitlest_delivery_type_user;


changeTextControlsToDate( "t_delivery_type_user" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_type_user"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_type_user"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_type_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COUNT(t_delivery_type) AS jumlah,  t_delivery_type,  t_delivery_date";
$proto0["m_strFrom"] = "FROM t_delivery";
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
			$proto7=array();
$proto7["m_functiontype"] = "SQLF_COUNT";
$proto7["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "t_delivery_type",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_type_user"
));

$proto7["m_arguments"][]=$obj;
$proto7["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto7);

$proto6["m_sql"] = "COUNT(t_delivery_type)";
$proto6["m_srcTableName"] = "t_delivery_type_user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "jumlah";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_type",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_type_user"
));

$proto9["m_sql"] = "t_delivery_type";
$proto9["m_srcTableName"] = "t_delivery_type_user";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_date",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_type_user"
));

$proto11["m_sql"] = "t_delivery_date";
$proto11["m_srcTableName"] = "t_delivery_type_user";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "t_delivery";
$proto14["m_srcTableName"] = "t_delivery_type_user";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "t_delivery_id";
$proto14["m_columns"][] = "t_delivery_token";
$proto14["m_columns"][] = "t_delivery_no";
$proto14["m_columns"][] = "t_delivery_date";
$proto14["m_columns"][] = "t_delivery_type";
$proto14["m_columns"][] = "t_location_id";
$proto14["m_columns"][] = "t_select_table_text";
$proto14["m_columns"][] = "t_delivery_to_table";
$proto14["m_columns"][] = "t_delivery_to_text";
$proto14["m_columns"][] = "t_delivery_address";
$proto14["m_columns"][] = "t_delivery_desc";
$proto14["m_columns"][] = "t_delivery_status";
$proto14["m_columns"][] = "add_user";
$proto14["m_columns"][] = "add_date";
$proto14["m_columns"][] = "edit_user";
$proto14["m_columns"][] = "edit_date";
$proto14["m_columns"][] = "process_user";
$proto14["m_columns"][] = "process_date";
$proto14["m_columns"][] = "t_delivery_category_code";
$proto14["m_columns"][] = "last_user";
$proto14["m_columns"][] = "last_date";
$proto14["m_columns"][] = "nomor";
$proto14["m_columns"][] = "nomorurut";
$proto14["m_columns"][] = "t_delivery_location_address";
$proto14["m_columns"][] = "get_fl";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "t_delivery";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "t_delivery_type_user";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto17=array();
						$obj = new SQLField(array(
	"m_strName" => "t_delivery_type",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "t_delivery_type_user"
));

$proto17["m_column"]=$obj;
$obj = new SQLGroupByItem($proto17);

$proto0["m_groupby"][]=$obj;
												$proto19=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_delivery_date DESC"
));

$proto19["m_column"]=$obj;
$obj = new SQLGroupByItem($proto19);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery_type_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_type_user = createSqlQuery_t_delivery_type_user();


	
				;

			

$tdatat_delivery_type_user[".sqlquery"] = $queryData_t_delivery_type_user;



$tdatat_delivery_type_user[".hasEvents"] = false;

?>