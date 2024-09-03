<?php
$tdatam_language = array();
$tdatam_language[".searchableFields"] = array();
$tdatam_language[".ShortName"] = "m_language";
$tdatam_language[".OwnerID"] = "";
$tdatam_language[".OriginalTable"] = "m_language";


$tdatam_language[".pagesByType"] = my_json_decode( "{}" );
$tdatam_language[".originalPagesByType"] = $tdatam_language[".pagesByType"];
$tdatam_language[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_language[".originalPages"] = $tdatam_language[".pages"];
$tdatam_language[".defaultPages"] = my_json_decode( "{}" );
$tdatam_language[".originalDefaultPages"] = $tdatam_language[".defaultPages"];

//	field labels
$fieldLabelsm_language = array();
$fieldToolTipsm_language = array();
$pageTitlesm_language = array();
$placeHoldersm_language = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_language["English"] = array();
	$fieldToolTipsm_language["English"] = array();
	$placeHoldersm_language["English"] = array();
	$pageTitlesm_language["English"] = array();
	$fieldLabelsm_language["English"]["m_language_id"] = "M Language Id";
	$fieldToolTipsm_language["English"]["m_language_id"] = "";
	$placeHoldersm_language["English"]["m_language_id"] = "";
	$fieldLabelsm_language["English"]["m_language_code"] = "M Language Code";
	$fieldToolTipsm_language["English"]["m_language_code"] = "";
	$placeHoldersm_language["English"]["m_language_code"] = "";
	$fieldLabelsm_language["English"]["m_language_name"] = "M Language Name";
	$fieldToolTipsm_language["English"]["m_language_name"] = "";
	$placeHoldersm_language["English"]["m_language_name"] = "";
	if (count($fieldToolTipsm_language["English"]))
		$tdatam_language[".isUseToolTips"] = true;
}


	$tdatam_language[".NCSearch"] = true;


	$tdatam_language[".scrollGridBody"] = true;

$tdatam_language[".shortTableName"] = "m_language";
$tdatam_language[".nSecOptions"] = 0;

$tdatam_language[".mainTableOwnerID"] = "";
$tdatam_language[".entityType"] = 0;
$tdatam_language[".connId"] = "u736239518tsundbat154412412";


$tdatam_language[".strOriginalTableName"] = "m_language";

	



$tdatam_language[".showAddInPopup"] = false;

$tdatam_language[".showEditInPopup"] = false;

$tdatam_language[".showViewInPopup"] = false;

$tdatam_language[".listAjax"] = false;
//	temporary
//$tdatam_language[".listAjax"] = false;

	$tdatam_language[".audit"] = true;

	$tdatam_language[".locking"] = false;


$pages = $tdatam_language[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_language[".edit"] = true;
	$tdatam_language[".afterEditAction"] = 1;
	$tdatam_language[".closePopupAfterEdit"] = 1;
	$tdatam_language[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_language[".add"] = true;
$tdatam_language[".afterAddAction"] = 1;
$tdatam_language[".closePopupAfterAdd"] = 1;
$tdatam_language[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_language[".list"] = true;
}



$tdatam_language[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_language[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_language[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_language[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_language[".printFriendly"] = true;
}



$tdatam_language[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_language[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_language[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_language[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_language[".ajaxCodeSnippetAdded"] = false;

$tdatam_language[".buttonsAdded"] = false;

$tdatam_language[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_language[".isUseTimeForSearch"] = false;


$tdatam_language[".badgeColor"] = "6493EA";


$tdatam_language[".allSearchFields"] = array();
$tdatam_language[".filterFields"] = array();
$tdatam_language[".requiredSearchFields"] = array();

$tdatam_language[".googleLikeFields"] = array();
$tdatam_language[".googleLikeFields"][] = "m_language_id";
$tdatam_language[".googleLikeFields"][] = "m_language_code";
$tdatam_language[".googleLikeFields"][] = "m_language_name";



$tdatam_language[".tableType"] = "list";

$tdatam_language[".printerPageOrientation"] = 0;
$tdatam_language[".nPrinterPageScale"] = 100;

$tdatam_language[".nPrinterSplitRecords"] = 40;

$tdatam_language[".geocodingEnabled"] = false;










$tdatam_language[".pageSize"] = 20;

$tdatam_language[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_language[".strOrderBy"] = $tstrOrderBy;

$tdatam_language[".orderindexes"] = array();


$tdatam_language[".sqlHead"] = "SELECT m_language_id,  	m_language_code,  	m_language_name";
$tdatam_language[".sqlFrom"] = "FROM m_language";
$tdatam_language[".sqlWhereExpr"] = "";
$tdatam_language[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_language[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_language[".arrGroupsPerPage"] = $arrGPP;

$tdatam_language[".highlightSearchResults"] = true;

$tableKeysm_language = array();
$tableKeysm_language[] = "m_language_id";
$tdatam_language[".Keys"] = $tableKeysm_language;


$tdatam_language[".hideMobileList"] = array();




//	m_language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_language_id";
	$fdata["GoodName"] = "m_language_id";
	$fdata["ownerTable"] = "m_language";
	$fdata["Label"] = GetFieldLabel("m_language","m_language_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_language_id";

		$fdata["sourceSingle"] = "m_language_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_language_id";

	
	
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


	$tdatam_language["m_language_id"] = $fdata;
		$tdatam_language[".searchableFields"][] = "m_language_id";
//	m_language_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_language_code";
	$fdata["GoodName"] = "m_language_code";
	$fdata["ownerTable"] = "m_language";
	$fdata["Label"] = GetFieldLabel("m_language","m_language_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_language_code";

		$fdata["sourceSingle"] = "m_language_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_language_code";

	
	
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


	$tdatam_language["m_language_code"] = $fdata;
		$tdatam_language[".searchableFields"][] = "m_language_code";
//	m_language_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_language_name";
	$fdata["GoodName"] = "m_language_name";
	$fdata["ownerTable"] = "m_language";
	$fdata["Label"] = GetFieldLabel("m_language","m_language_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_language_name";

		$fdata["sourceSingle"] = "m_language_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_language_name";

	
	
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


	$tdatam_language["m_language_name"] = $fdata;
		$tdatam_language[".searchableFields"][] = "m_language_name";


$tables_data["m_language"]=&$tdatam_language;
$field_labels["m_language"] = &$fieldLabelsm_language;
$fieldToolTips["m_language"] = &$fieldToolTipsm_language;
$placeHolders["m_language"] = &$placeHoldersm_language;
$page_titles["m_language"] = &$pageTitlesm_language;


changeTextControlsToDate( "m_language" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_language"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_language"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_language()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_language_id,  	m_language_code,  	m_language_name";
$proto0["m_strFrom"] = "FROM m_language";
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
	"m_strName" => "m_language_id",
	"m_strTable" => "m_language",
	"m_srcTableName" => "m_language"
));

$proto6["m_sql"] = "m_language_id";
$proto6["m_srcTableName"] = "m_language";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_language_code",
	"m_strTable" => "m_language",
	"m_srcTableName" => "m_language"
));

$proto8["m_sql"] = "m_language_code";
$proto8["m_srcTableName"] = "m_language";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_language_name",
	"m_strTable" => "m_language",
	"m_srcTableName" => "m_language"
));

$proto10["m_sql"] = "m_language_name";
$proto10["m_srcTableName"] = "m_language";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_language";
$proto13["m_srcTableName"] = "m_language";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_language_id";
$proto13["m_columns"][] = "m_language_code";
$proto13["m_columns"][] = "m_language_name";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_language";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_language";
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
$proto0["m_srcTableName"]="m_language";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_language = createSqlQuery_m_language();


	
				;

			

$tdatam_language[".sqlquery"] = $queryData_m_language;



$tdatam_language[".hasEvents"] = false;

?>