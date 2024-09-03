<?php
$tdatam_participant_type = array();
$tdatam_participant_type[".searchableFields"] = array();
$tdatam_participant_type[".ShortName"] = "m_participant_type";
$tdatam_participant_type[".OwnerID"] = "";
$tdatam_participant_type[".OriginalTable"] = "m_participant_type";


$tdatam_participant_type[".pagesByType"] = my_json_decode( "{}" );
$tdatam_participant_type[".originalPagesByType"] = $tdatam_participant_type[".pagesByType"];
$tdatam_participant_type[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_participant_type[".originalPages"] = $tdatam_participant_type[".pages"];
$tdatam_participant_type[".defaultPages"] = my_json_decode( "{}" );
$tdatam_participant_type[".originalDefaultPages"] = $tdatam_participant_type[".defaultPages"];

//	field labels
$fieldLabelsm_participant_type = array();
$fieldToolTipsm_participant_type = array();
$pageTitlesm_participant_type = array();
$placeHoldersm_participant_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_participant_type["English"] = array();
	$fieldToolTipsm_participant_type["English"] = array();
	$placeHoldersm_participant_type["English"] = array();
	$pageTitlesm_participant_type["English"] = array();
	$fieldLabelsm_participant_type["English"]["ID"] = "ID";
	$fieldToolTipsm_participant_type["English"]["ID"] = "";
	$placeHoldersm_participant_type["English"]["ID"] = "";
	$fieldLabelsm_participant_type["English"]["Type"] = "Type";
	$fieldToolTipsm_participant_type["English"]["Type"] = "";
	$placeHoldersm_participant_type["English"]["Type"] = "";
	if (count($fieldToolTipsm_participant_type["English"]))
		$tdatam_participant_type[".isUseToolTips"] = true;
}


	$tdatam_participant_type[".NCSearch"] = true;



$tdatam_participant_type[".shortTableName"] = "m_participant_type";
$tdatam_participant_type[".nSecOptions"] = 0;

$tdatam_participant_type[".mainTableOwnerID"] = "";
$tdatam_participant_type[".entityType"] = 0;
$tdatam_participant_type[".connId"] = "u736239518tsundbat154412412";


$tdatam_participant_type[".strOriginalTableName"] = "m_participant_type";

	



$tdatam_participant_type[".showAddInPopup"] = false;

$tdatam_participant_type[".showEditInPopup"] = false;

$tdatam_participant_type[".showViewInPopup"] = false;

$tdatam_participant_type[".listAjax"] = false;
//	temporary
//$tdatam_participant_type[".listAjax"] = false;

	$tdatam_participant_type[".audit"] = false;

	$tdatam_participant_type[".locking"] = false;


$pages = $tdatam_participant_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_participant_type[".edit"] = true;
	$tdatam_participant_type[".afterEditAction"] = 1;
	$tdatam_participant_type[".closePopupAfterEdit"] = 1;
	$tdatam_participant_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_participant_type[".add"] = true;
$tdatam_participant_type[".afterAddAction"] = 1;
$tdatam_participant_type[".closePopupAfterAdd"] = 1;
$tdatam_participant_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_participant_type[".list"] = true;
}



$tdatam_participant_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_participant_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_participant_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_participant_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_participant_type[".printFriendly"] = true;
}



$tdatam_participant_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_participant_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_participant_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_participant_type[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_participant_type[".ajaxCodeSnippetAdded"] = false;

$tdatam_participant_type[".buttonsAdded"] = false;

$tdatam_participant_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_participant_type[".isUseTimeForSearch"] = false;


$tdatam_participant_type[".badgeColor"] = "E8926F";


$tdatam_participant_type[".allSearchFields"] = array();
$tdatam_participant_type[".filterFields"] = array();
$tdatam_participant_type[".requiredSearchFields"] = array();

$tdatam_participant_type[".googleLikeFields"] = array();
$tdatam_participant_type[".googleLikeFields"][] = "ID";
$tdatam_participant_type[".googleLikeFields"][] = "Type";



$tdatam_participant_type[".tableType"] = "list";

$tdatam_participant_type[".printerPageOrientation"] = 0;
$tdatam_participant_type[".nPrinterPageScale"] = 100;

$tdatam_participant_type[".nPrinterSplitRecords"] = 40;

$tdatam_participant_type[".geocodingEnabled"] = false;










$tdatam_participant_type[".pageSize"] = 20;

$tdatam_participant_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_participant_type[".strOrderBy"] = $tstrOrderBy;

$tdatam_participant_type[".orderindexes"] = array();


$tdatam_participant_type[".sqlHead"] = "SELECT ID,  	`Type`";
$tdatam_participant_type[".sqlFrom"] = "FROM m_participant_type";
$tdatam_participant_type[".sqlWhereExpr"] = "";
$tdatam_participant_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_participant_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_participant_type[".arrGroupsPerPage"] = $arrGPP;

$tdatam_participant_type[".highlightSearchResults"] = true;

$tableKeysm_participant_type = array();
$tableKeysm_participant_type[] = "ID";
$tdatam_participant_type[".Keys"] = $tableKeysm_participant_type;


$tdatam_participant_type[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "m_participant_type";
	$fdata["Label"] = GetFieldLabel("m_participant_type","ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatam_participant_type["ID"] = $fdata;
		$tdatam_participant_type[".searchableFields"][] = "ID";
//	Type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Type";
	$fdata["GoodName"] = "Type";
	$fdata["ownerTable"] = "m_participant_type";
	$fdata["Label"] = GetFieldLabel("m_participant_type","Type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Type";

		$fdata["sourceSingle"] = "Type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Type`";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatam_participant_type["Type"] = $fdata;
		$tdatam_participant_type[".searchableFields"][] = "Type";


$tables_data["m_participant_type"]=&$tdatam_participant_type;
$field_labels["m_participant_type"] = &$fieldLabelsm_participant_type;
$fieldToolTips["m_participant_type"] = &$fieldToolTipsm_participant_type;
$placeHolders["m_participant_type"] = &$placeHoldersm_participant_type;
$page_titles["m_participant_type"] = &$pageTitlesm_participant_type;


changeTextControlsToDate( "m_participant_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_participant_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_participant_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_participant_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	`Type`";
$proto0["m_strFrom"] = "FROM m_participant_type";
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
	"m_strName" => "ID",
	"m_strTable" => "m_participant_type",
	"m_srcTableName" => "m_participant_type"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "m_participant_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Type",
	"m_strTable" => "m_participant_type",
	"m_srcTableName" => "m_participant_type"
));

$proto8["m_sql"] = "`Type`";
$proto8["m_srcTableName"] = "m_participant_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "m_participant_type";
$proto11["m_srcTableName"] = "m_participant_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "ID";
$proto11["m_columns"][] = "Type";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "m_participant_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "m_participant_type";
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
$proto0["m_srcTableName"]="m_participant_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_participant_type = createSqlQuery_m_participant_type();


	
				;

		

$tdatam_participant_type[".sqlquery"] = $queryData_m_participant_type;



$tdatam_participant_type[".hasEvents"] = false;

?>