<?php
$tdatam_ticket_category = array();
$tdatam_ticket_category[".searchableFields"] = array();
$tdatam_ticket_category[".ShortName"] = "m_ticket_category";
$tdatam_ticket_category[".OwnerID"] = "";
$tdatam_ticket_category[".OriginalTable"] = "m_ticket_category";


$tdatam_ticket_category[".pagesByType"] = my_json_decode( "{}" );
$tdatam_ticket_category[".originalPagesByType"] = $tdatam_ticket_category[".pagesByType"];
$tdatam_ticket_category[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_ticket_category[".originalPages"] = $tdatam_ticket_category[".pages"];
$tdatam_ticket_category[".defaultPages"] = my_json_decode( "{}" );
$tdatam_ticket_category[".originalDefaultPages"] = $tdatam_ticket_category[".defaultPages"];

//	field labels
$fieldLabelsm_ticket_category = array();
$fieldToolTipsm_ticket_category = array();
$pageTitlesm_ticket_category = array();
$placeHoldersm_ticket_category = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_ticket_category["English"] = array();
	$fieldToolTipsm_ticket_category["English"] = array();
	$placeHoldersm_ticket_category["English"] = array();
	$pageTitlesm_ticket_category["English"] = array();
	$fieldLabelsm_ticket_category["English"]["catId"] = "Cat Id";
	$fieldToolTipsm_ticket_category["English"]["catId"] = "";
	$placeHoldersm_ticket_category["English"]["catId"] = "";
	$fieldLabelsm_ticket_category["English"]["catName"] = "Cat Name";
	$fieldToolTipsm_ticket_category["English"]["catName"] = "";
	$placeHoldersm_ticket_category["English"]["catName"] = "";
	$fieldLabelsm_ticket_category["English"]["catEmail"] = "Cat Email";
	$fieldToolTipsm_ticket_category["English"]["catEmail"] = "";
	$placeHoldersm_ticket_category["English"]["catEmail"] = "";
	$fieldLabelsm_ticket_category["English"]["isActive"] = "Is Active";
	$fieldToolTipsm_ticket_category["English"]["isActive"] = "";
	$placeHoldersm_ticket_category["English"]["isActive"] = "";
	if (count($fieldToolTipsm_ticket_category["English"]))
		$tdatam_ticket_category[".isUseToolTips"] = true;
}


	$tdatam_ticket_category[".NCSearch"] = true;



$tdatam_ticket_category[".shortTableName"] = "m_ticket_category";
$tdatam_ticket_category[".nSecOptions"] = 0;

$tdatam_ticket_category[".mainTableOwnerID"] = "";
$tdatam_ticket_category[".entityType"] = 0;
$tdatam_ticket_category[".connId"] = "u736239518tsundbat154412412";


$tdatam_ticket_category[".strOriginalTableName"] = "m_ticket_category";

	



$tdatam_ticket_category[".showAddInPopup"] = false;

$tdatam_ticket_category[".showEditInPopup"] = false;

$tdatam_ticket_category[".showViewInPopup"] = false;

$tdatam_ticket_category[".listAjax"] = false;
//	temporary
//$tdatam_ticket_category[".listAjax"] = false;

	$tdatam_ticket_category[".audit"] = false;

	$tdatam_ticket_category[".locking"] = false;


$pages = $tdatam_ticket_category[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_ticket_category[".edit"] = true;
	$tdatam_ticket_category[".afterEditAction"] = 1;
	$tdatam_ticket_category[".closePopupAfterEdit"] = 1;
	$tdatam_ticket_category[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_ticket_category[".add"] = true;
$tdatam_ticket_category[".afterAddAction"] = 1;
$tdatam_ticket_category[".closePopupAfterAdd"] = 1;
$tdatam_ticket_category[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_ticket_category[".list"] = true;
}



$tdatam_ticket_category[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_ticket_category[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_ticket_category[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_ticket_category[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_ticket_category[".printFriendly"] = true;
}



$tdatam_ticket_category[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_ticket_category[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_ticket_category[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_ticket_category[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_ticket_category[".ajaxCodeSnippetAdded"] = false;

$tdatam_ticket_category[".buttonsAdded"] = false;

$tdatam_ticket_category[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_ticket_category[".isUseTimeForSearch"] = false;


$tdatam_ticket_category[".badgeColor"] = "7B68EE";


$tdatam_ticket_category[".allSearchFields"] = array();
$tdatam_ticket_category[".filterFields"] = array();
$tdatam_ticket_category[".requiredSearchFields"] = array();

$tdatam_ticket_category[".googleLikeFields"] = array();
$tdatam_ticket_category[".googleLikeFields"][] = "catId";
$tdatam_ticket_category[".googleLikeFields"][] = "catName";
$tdatam_ticket_category[".googleLikeFields"][] = "catEmail";
$tdatam_ticket_category[".googleLikeFields"][] = "isActive";



$tdatam_ticket_category[".tableType"] = "list";

$tdatam_ticket_category[".printerPageOrientation"] = 0;
$tdatam_ticket_category[".nPrinterPageScale"] = 100;

$tdatam_ticket_category[".nPrinterSplitRecords"] = 40;

$tdatam_ticket_category[".geocodingEnabled"] = false;










$tdatam_ticket_category[".pageSize"] = 20;

$tdatam_ticket_category[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_ticket_category[".strOrderBy"] = $tstrOrderBy;

$tdatam_ticket_category[".orderindexes"] = array();


$tdatam_ticket_category[".sqlHead"] = "SELECT catId,  	catName,  	catEmail,  	isActive";
$tdatam_ticket_category[".sqlFrom"] = "FROM m_ticket_category";
$tdatam_ticket_category[".sqlWhereExpr"] = "";
$tdatam_ticket_category[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_ticket_category[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_ticket_category[".arrGroupsPerPage"] = $arrGPP;

$tdatam_ticket_category[".highlightSearchResults"] = true;

$tableKeysm_ticket_category = array();
$tableKeysm_ticket_category[] = "catId";
$tdatam_ticket_category[".Keys"] = $tableKeysm_ticket_category;


$tdatam_ticket_category[".hideMobileList"] = array();




//	catId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "catId";
	$fdata["GoodName"] = "catId";
	$fdata["ownerTable"] = "m_ticket_category";
	$fdata["Label"] = GetFieldLabel("m_ticket_category","catId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatam_ticket_category["catId"] = $fdata;
		$tdatam_ticket_category[".searchableFields"][] = "catId";
//	catName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "catName";
	$fdata["GoodName"] = "catName";
	$fdata["ownerTable"] = "m_ticket_category";
	$fdata["Label"] = GetFieldLabel("m_ticket_category","catName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "catName";

		$fdata["sourceSingle"] = "catName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catName";

	
	
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


	$tdatam_ticket_category["catName"] = $fdata;
		$tdatam_ticket_category[".searchableFields"][] = "catName";
//	catEmail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "catEmail";
	$fdata["GoodName"] = "catEmail";
	$fdata["ownerTable"] = "m_ticket_category";
	$fdata["Label"] = GetFieldLabel("m_ticket_category","catEmail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "catEmail";

		$fdata["sourceSingle"] = "catEmail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catEmail";

	
	
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


	$tdatam_ticket_category["catEmail"] = $fdata;
		$tdatam_ticket_category[".searchableFields"][] = "catEmail";
//	isActive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "isActive";
	$fdata["GoodName"] = "isActive";
	$fdata["ownerTable"] = "m_ticket_category";
	$fdata["Label"] = GetFieldLabel("m_ticket_category","isActive");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "isActive";

		$fdata["sourceSingle"] = "isActive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isActive";

	
	
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


	$tdatam_ticket_category["isActive"] = $fdata;
		$tdatam_ticket_category[".searchableFields"][] = "isActive";


$tables_data["m_ticket_category"]=&$tdatam_ticket_category;
$field_labels["m_ticket_category"] = &$fieldLabelsm_ticket_category;
$fieldToolTips["m_ticket_category"] = &$fieldToolTipsm_ticket_category;
$placeHolders["m_ticket_category"] = &$placeHoldersm_ticket_category;
$page_titles["m_ticket_category"] = &$pageTitlesm_ticket_category;


changeTextControlsToDate( "m_ticket_category" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_ticket_category"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_ticket_category"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_ticket_category()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "catId,  	catName,  	catEmail,  	isActive";
$proto0["m_strFrom"] = "FROM m_ticket_category";
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
	"m_strName" => "catId",
	"m_strTable" => "m_ticket_category",
	"m_srcTableName" => "m_ticket_category"
));

$proto6["m_sql"] = "catId";
$proto6["m_srcTableName"] = "m_ticket_category";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "catName",
	"m_strTable" => "m_ticket_category",
	"m_srcTableName" => "m_ticket_category"
));

$proto8["m_sql"] = "catName";
$proto8["m_srcTableName"] = "m_ticket_category";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "catEmail",
	"m_strTable" => "m_ticket_category",
	"m_srcTableName" => "m_ticket_category"
));

$proto10["m_sql"] = "catEmail";
$proto10["m_srcTableName"] = "m_ticket_category";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "isActive",
	"m_strTable" => "m_ticket_category",
	"m_srcTableName" => "m_ticket_category"
));

$proto12["m_sql"] = "isActive";
$proto12["m_srcTableName"] = "m_ticket_category";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_ticket_category";
$proto15["m_srcTableName"] = "m_ticket_category";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "catId";
$proto15["m_columns"][] = "catName";
$proto15["m_columns"][] = "catEmail";
$proto15["m_columns"][] = "isActive";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_ticket_category";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "m_ticket_category";
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
$proto0["m_srcTableName"]="m_ticket_category";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_ticket_category = createSqlQuery_m_ticket_category();


	
				;

				

$tdatam_ticket_category[".sqlquery"] = $queryData_m_ticket_category;



$tdatam_ticket_category[".hasEvents"] = false;

?>