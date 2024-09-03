<?php
$tdatam_courier = array();
$tdatam_courier[".searchableFields"] = array();
$tdatam_courier[".ShortName"] = "m_courier";
$tdatam_courier[".OwnerID"] = "";
$tdatam_courier[".OriginalTable"] = "m_courier";


$tdatam_courier[".pagesByType"] = my_json_decode( "{}" );
$tdatam_courier[".originalPagesByType"] = $tdatam_courier[".pagesByType"];
$tdatam_courier[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_courier[".originalPages"] = $tdatam_courier[".pages"];
$tdatam_courier[".defaultPages"] = my_json_decode( "{}" );
$tdatam_courier[".originalDefaultPages"] = $tdatam_courier[".defaultPages"];

//	field labels
$fieldLabelsm_courier = array();
$fieldToolTipsm_courier = array();
$pageTitlesm_courier = array();
$placeHoldersm_courier = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_courier["English"] = array();
	$fieldToolTipsm_courier["English"] = array();
	$placeHoldersm_courier["English"] = array();
	$pageTitlesm_courier["English"] = array();
	$fieldLabelsm_courier["English"]["m_courier_id"] = "M Courier Id";
	$fieldToolTipsm_courier["English"]["m_courier_id"] = "";
	$placeHoldersm_courier["English"]["m_courier_id"] = "";
	$fieldLabelsm_courier["English"]["m_courier_name"] = "M Courier Name";
	$fieldToolTipsm_courier["English"]["m_courier_name"] = "";
	$placeHoldersm_courier["English"]["m_courier_name"] = "";
	$fieldLabelsm_courier["English"]["m_courier_username"] = "M Courier Username";
	$fieldToolTipsm_courier["English"]["m_courier_username"] = "";
	$placeHoldersm_courier["English"]["m_courier_username"] = "";
	if (count($fieldToolTipsm_courier["English"]))
		$tdatam_courier[".isUseToolTips"] = true;
}


	$tdatam_courier[".NCSearch"] = true;



$tdatam_courier[".shortTableName"] = "m_courier";
$tdatam_courier[".nSecOptions"] = 0;

$tdatam_courier[".mainTableOwnerID"] = "";
$tdatam_courier[".entityType"] = 0;
$tdatam_courier[".connId"] = "u736239518tsundbat154412412";


$tdatam_courier[".strOriginalTableName"] = "m_courier";

	



$tdatam_courier[".showAddInPopup"] = false;

$tdatam_courier[".showEditInPopup"] = false;

$tdatam_courier[".showViewInPopup"] = false;

$tdatam_courier[".listAjax"] = false;
//	temporary
//$tdatam_courier[".listAjax"] = false;

	$tdatam_courier[".audit"] = false;

	$tdatam_courier[".locking"] = false;


$pages = $tdatam_courier[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_courier[".edit"] = true;
	$tdatam_courier[".afterEditAction"] = 1;
	$tdatam_courier[".closePopupAfterEdit"] = 1;
	$tdatam_courier[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_courier[".add"] = true;
$tdatam_courier[".afterAddAction"] = 1;
$tdatam_courier[".closePopupAfterAdd"] = 1;
$tdatam_courier[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_courier[".list"] = true;
}



$tdatam_courier[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_courier[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_courier[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_courier[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_courier[".printFriendly"] = true;
}



$tdatam_courier[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_courier[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_courier[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_courier[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_courier[".ajaxCodeSnippetAdded"] = false;

$tdatam_courier[".buttonsAdded"] = false;

$tdatam_courier[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_courier[".isUseTimeForSearch"] = false;


$tdatam_courier[".badgeColor"] = "D2AF80";


$tdatam_courier[".allSearchFields"] = array();
$tdatam_courier[".filterFields"] = array();
$tdatam_courier[".requiredSearchFields"] = array();

$tdatam_courier[".googleLikeFields"] = array();
$tdatam_courier[".googleLikeFields"][] = "m_courier_id";
$tdatam_courier[".googleLikeFields"][] = "m_courier_name";
$tdatam_courier[".googleLikeFields"][] = "m_courier_username";



$tdatam_courier[".tableType"] = "list";

$tdatam_courier[".printerPageOrientation"] = 0;
$tdatam_courier[".nPrinterPageScale"] = 100;

$tdatam_courier[".nPrinterSplitRecords"] = 40;

$tdatam_courier[".geocodingEnabled"] = false;










$tdatam_courier[".pageSize"] = 20;

$tdatam_courier[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_courier[".strOrderBy"] = $tstrOrderBy;

$tdatam_courier[".orderindexes"] = array();


$tdatam_courier[".sqlHead"] = "SELECT m_courier_id,  	m_courier_name,  	m_courier_username";
$tdatam_courier[".sqlFrom"] = "FROM m_courier";
$tdatam_courier[".sqlWhereExpr"] = "";
$tdatam_courier[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_courier[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_courier[".arrGroupsPerPage"] = $arrGPP;

$tdatam_courier[".highlightSearchResults"] = true;

$tableKeysm_courier = array();
$tableKeysm_courier[] = "m_courier_id";
$tdatam_courier[".Keys"] = $tableKeysm_courier;


$tdatam_courier[".hideMobileList"] = array();




//	m_courier_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_courier_id";
	$fdata["GoodName"] = "m_courier_id";
	$fdata["ownerTable"] = "m_courier";
	$fdata["Label"] = GetFieldLabel("m_courier","m_courier_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_courier_id";

		$fdata["sourceSingle"] = "m_courier_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_courier_id";

	
	
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


	$tdatam_courier["m_courier_id"] = $fdata;
		$tdatam_courier[".searchableFields"][] = "m_courier_id";
//	m_courier_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_courier_name";
	$fdata["GoodName"] = "m_courier_name";
	$fdata["ownerTable"] = "m_courier";
	$fdata["Label"] = GetFieldLabel("m_courier","m_courier_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_courier_name";

		$fdata["sourceSingle"] = "m_courier_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_courier_name";

	
	
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


	$tdatam_courier["m_courier_name"] = $fdata;
		$tdatam_courier[".searchableFields"][] = "m_courier_name";
//	m_courier_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_courier_username";
	$fdata["GoodName"] = "m_courier_username";
	$fdata["ownerTable"] = "m_courier";
	$fdata["Label"] = GetFieldLabel("m_courier","m_courier_username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_courier_username";

		$fdata["sourceSingle"] = "m_courier_username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_courier_username";

	
	
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


	$tdatam_courier["m_courier_username"] = $fdata;
		$tdatam_courier[".searchableFields"][] = "m_courier_username";


$tables_data["m_courier"]=&$tdatam_courier;
$field_labels["m_courier"] = &$fieldLabelsm_courier;
$fieldToolTips["m_courier"] = &$fieldToolTipsm_courier;
$placeHolders["m_courier"] = &$placeHoldersm_courier;
$page_titles["m_courier"] = &$pageTitlesm_courier;


changeTextControlsToDate( "m_courier" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_courier"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_courier"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_courier()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_courier_id,  	m_courier_name,  	m_courier_username";
$proto0["m_strFrom"] = "FROM m_courier";
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
	"m_strName" => "m_courier_id",
	"m_strTable" => "m_courier",
	"m_srcTableName" => "m_courier"
));

$proto6["m_sql"] = "m_courier_id";
$proto6["m_srcTableName"] = "m_courier";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_courier_name",
	"m_strTable" => "m_courier",
	"m_srcTableName" => "m_courier"
));

$proto8["m_sql"] = "m_courier_name";
$proto8["m_srcTableName"] = "m_courier";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_courier_username",
	"m_strTable" => "m_courier",
	"m_srcTableName" => "m_courier"
));

$proto10["m_sql"] = "m_courier_username";
$proto10["m_srcTableName"] = "m_courier";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_courier";
$proto13["m_srcTableName"] = "m_courier";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_courier_id";
$proto13["m_columns"][] = "m_courier_name";
$proto13["m_columns"][] = "m_courier_username";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_courier";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_courier";
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
$proto0["m_srcTableName"]="m_courier";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_courier = createSqlQuery_m_courier();


	
				;

			

$tdatam_courier[".sqlquery"] = $queryData_m_courier;



$tdatam_courier[".hasEvents"] = false;

?>