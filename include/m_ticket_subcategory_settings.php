<?php
$tdatam_ticket_subcategory = array();
$tdatam_ticket_subcategory[".searchableFields"] = array();
$tdatam_ticket_subcategory[".ShortName"] = "m_ticket_subcategory";
$tdatam_ticket_subcategory[".OwnerID"] = "";
$tdatam_ticket_subcategory[".OriginalTable"] = "m_ticket_subcategory";


$tdatam_ticket_subcategory[".pagesByType"] = my_json_decode( "{}" );
$tdatam_ticket_subcategory[".originalPagesByType"] = $tdatam_ticket_subcategory[".pagesByType"];
$tdatam_ticket_subcategory[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_ticket_subcategory[".originalPages"] = $tdatam_ticket_subcategory[".pages"];
$tdatam_ticket_subcategory[".defaultPages"] = my_json_decode( "{}" );
$tdatam_ticket_subcategory[".originalDefaultPages"] = $tdatam_ticket_subcategory[".defaultPages"];

//	field labels
$fieldLabelsm_ticket_subcategory = array();
$fieldToolTipsm_ticket_subcategory = array();
$pageTitlesm_ticket_subcategory = array();
$placeHoldersm_ticket_subcategory = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_ticket_subcategory["English"] = array();
	$fieldToolTipsm_ticket_subcategory["English"] = array();
	$placeHoldersm_ticket_subcategory["English"] = array();
	$pageTitlesm_ticket_subcategory["English"] = array();
	$fieldLabelsm_ticket_subcategory["English"]["subCatId"] = "Sub Cat Id";
	$fieldToolTipsm_ticket_subcategory["English"]["subCatId"] = "";
	$placeHoldersm_ticket_subcategory["English"]["subCatId"] = "";
	$fieldLabelsm_ticket_subcategory["English"]["catId"] = "Cat Id";
	$fieldToolTipsm_ticket_subcategory["English"]["catId"] = "";
	$placeHoldersm_ticket_subcategory["English"]["catId"] = "";
	$fieldLabelsm_ticket_subcategory["English"]["subCatName"] = "Sub Cat Name";
	$fieldToolTipsm_ticket_subcategory["English"]["subCatName"] = "";
	$placeHoldersm_ticket_subcategory["English"]["subCatName"] = "";
	if (count($fieldToolTipsm_ticket_subcategory["English"]))
		$tdatam_ticket_subcategory[".isUseToolTips"] = true;
}


	$tdatam_ticket_subcategory[".NCSearch"] = true;



$tdatam_ticket_subcategory[".shortTableName"] = "m_ticket_subcategory";
$tdatam_ticket_subcategory[".nSecOptions"] = 0;

$tdatam_ticket_subcategory[".mainTableOwnerID"] = "";
$tdatam_ticket_subcategory[".entityType"] = 0;
$tdatam_ticket_subcategory[".connId"] = "u736239518tsundbat154412412";


$tdatam_ticket_subcategory[".strOriginalTableName"] = "m_ticket_subcategory";

	



$tdatam_ticket_subcategory[".showAddInPopup"] = false;

$tdatam_ticket_subcategory[".showEditInPopup"] = false;

$tdatam_ticket_subcategory[".showViewInPopup"] = false;

$tdatam_ticket_subcategory[".listAjax"] = false;
//	temporary
//$tdatam_ticket_subcategory[".listAjax"] = false;

	$tdatam_ticket_subcategory[".audit"] = false;

	$tdatam_ticket_subcategory[".locking"] = false;


$pages = $tdatam_ticket_subcategory[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_ticket_subcategory[".edit"] = true;
	$tdatam_ticket_subcategory[".afterEditAction"] = 1;
	$tdatam_ticket_subcategory[".closePopupAfterEdit"] = 1;
	$tdatam_ticket_subcategory[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_ticket_subcategory[".add"] = true;
$tdatam_ticket_subcategory[".afterAddAction"] = 1;
$tdatam_ticket_subcategory[".closePopupAfterAdd"] = 1;
$tdatam_ticket_subcategory[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_ticket_subcategory[".list"] = true;
}



$tdatam_ticket_subcategory[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_ticket_subcategory[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_ticket_subcategory[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_ticket_subcategory[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_ticket_subcategory[".printFriendly"] = true;
}



$tdatam_ticket_subcategory[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_ticket_subcategory[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_ticket_subcategory[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_ticket_subcategory[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_ticket_subcategory[".ajaxCodeSnippetAdded"] = false;

$tdatam_ticket_subcategory[".buttonsAdded"] = false;

$tdatam_ticket_subcategory[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_ticket_subcategory[".isUseTimeForSearch"] = false;


$tdatam_ticket_subcategory[".badgeColor"] = "D2691E";


$tdatam_ticket_subcategory[".allSearchFields"] = array();
$tdatam_ticket_subcategory[".filterFields"] = array();
$tdatam_ticket_subcategory[".requiredSearchFields"] = array();

$tdatam_ticket_subcategory[".googleLikeFields"] = array();
$tdatam_ticket_subcategory[".googleLikeFields"][] = "subCatId";
$tdatam_ticket_subcategory[".googleLikeFields"][] = "catId";
$tdatam_ticket_subcategory[".googleLikeFields"][] = "subCatName";



$tdatam_ticket_subcategory[".tableType"] = "list";

$tdatam_ticket_subcategory[".printerPageOrientation"] = 0;
$tdatam_ticket_subcategory[".nPrinterPageScale"] = 100;

$tdatam_ticket_subcategory[".nPrinterSplitRecords"] = 40;

$tdatam_ticket_subcategory[".geocodingEnabled"] = false;










$tdatam_ticket_subcategory[".pageSize"] = 20;

$tdatam_ticket_subcategory[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_ticket_subcategory[".strOrderBy"] = $tstrOrderBy;

$tdatam_ticket_subcategory[".orderindexes"] = array();


$tdatam_ticket_subcategory[".sqlHead"] = "SELECT subCatId,  	catId,  	subCatName";
$tdatam_ticket_subcategory[".sqlFrom"] = "FROM m_ticket_subcategory";
$tdatam_ticket_subcategory[".sqlWhereExpr"] = "";
$tdatam_ticket_subcategory[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_ticket_subcategory[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_ticket_subcategory[".arrGroupsPerPage"] = $arrGPP;

$tdatam_ticket_subcategory[".highlightSearchResults"] = true;

$tableKeysm_ticket_subcategory = array();
$tableKeysm_ticket_subcategory[] = "subCatId";
$tdatam_ticket_subcategory[".Keys"] = $tableKeysm_ticket_subcategory;


$tdatam_ticket_subcategory[".hideMobileList"] = array();




//	subCatId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "subCatId";
	$fdata["GoodName"] = "subCatId";
	$fdata["ownerTable"] = "m_ticket_subcategory";
	$fdata["Label"] = GetFieldLabel("m_ticket_subcategory","subCatId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "subCatId";

		$fdata["sourceSingle"] = "subCatId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subCatId";

	
	
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


	$tdatam_ticket_subcategory["subCatId"] = $fdata;
		$tdatam_ticket_subcategory[".searchableFields"][] = "subCatId";
//	catId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "catId";
	$fdata["GoodName"] = "catId";
	$fdata["ownerTable"] = "m_ticket_subcategory";
	$fdata["Label"] = GetFieldLabel("m_ticket_subcategory","catId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "catId";

		$fdata["sourceSingle"] = "catId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catId";

	
	
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


	$tdatam_ticket_subcategory["catId"] = $fdata;
		$tdatam_ticket_subcategory[".searchableFields"][] = "catId";
//	subCatName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "subCatName";
	$fdata["GoodName"] = "subCatName";
	$fdata["ownerTable"] = "m_ticket_subcategory";
	$fdata["Label"] = GetFieldLabel("m_ticket_subcategory","subCatName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subCatName";

		$fdata["sourceSingle"] = "subCatName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subCatName";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatam_ticket_subcategory["subCatName"] = $fdata;
		$tdatam_ticket_subcategory[".searchableFields"][] = "subCatName";


$tables_data["m_ticket_subcategory"]=&$tdatam_ticket_subcategory;
$field_labels["m_ticket_subcategory"] = &$fieldLabelsm_ticket_subcategory;
$fieldToolTips["m_ticket_subcategory"] = &$fieldToolTipsm_ticket_subcategory;
$placeHolders["m_ticket_subcategory"] = &$placeHoldersm_ticket_subcategory;
$page_titles["m_ticket_subcategory"] = &$pageTitlesm_ticket_subcategory;


changeTextControlsToDate( "m_ticket_subcategory" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_ticket_subcategory"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_ticket_subcategory"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_ticket_subcategory()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "subCatId,  	catId,  	subCatName";
$proto0["m_strFrom"] = "FROM m_ticket_subcategory";
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
	"m_strName" => "subCatId",
	"m_strTable" => "m_ticket_subcategory",
	"m_srcTableName" => "m_ticket_subcategory"
));

$proto6["m_sql"] = "subCatId";
$proto6["m_srcTableName"] = "m_ticket_subcategory";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "catId",
	"m_strTable" => "m_ticket_subcategory",
	"m_srcTableName" => "m_ticket_subcategory"
));

$proto8["m_sql"] = "catId";
$proto8["m_srcTableName"] = "m_ticket_subcategory";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "subCatName",
	"m_strTable" => "m_ticket_subcategory",
	"m_srcTableName" => "m_ticket_subcategory"
));

$proto10["m_sql"] = "subCatName";
$proto10["m_srcTableName"] = "m_ticket_subcategory";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_ticket_subcategory";
$proto13["m_srcTableName"] = "m_ticket_subcategory";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "subCatId";
$proto13["m_columns"][] = "catId";
$proto13["m_columns"][] = "subCatName";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_ticket_subcategory";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_ticket_subcategory";
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
$proto0["m_srcTableName"]="m_ticket_subcategory";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_ticket_subcategory = createSqlQuery_m_ticket_subcategory();


	
				;

			

$tdatam_ticket_subcategory[".sqlquery"] = $queryData_m_ticket_subcategory;



$tdatam_ticket_subcategory[".hasEvents"] = false;

?>