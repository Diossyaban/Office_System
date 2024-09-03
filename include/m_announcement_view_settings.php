<?php
$tdatam_announcement_view = array();
$tdatam_announcement_view[".searchableFields"] = array();
$tdatam_announcement_view[".ShortName"] = "m_announcement_view";
$tdatam_announcement_view[".OwnerID"] = "";
$tdatam_announcement_view[".OriginalTable"] = "m_announcement_view";


$tdatam_announcement_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_announcement_view[".originalPagesByType"] = $tdatam_announcement_view[".pagesByType"];
$tdatam_announcement_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_announcement_view[".originalPages"] = $tdatam_announcement_view[".pages"];
$tdatam_announcement_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_announcement_view[".originalDefaultPages"] = $tdatam_announcement_view[".defaultPages"];

//	field labels
$fieldLabelsm_announcement_view = array();
$fieldToolTipsm_announcement_view = array();
$pageTitlesm_announcement_view = array();
$placeHoldersm_announcement_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_announcement_view["English"] = array();
	$fieldToolTipsm_announcement_view["English"] = array();
	$placeHoldersm_announcement_view["English"] = array();
	$pageTitlesm_announcement_view["English"] = array();
	$fieldLabelsm_announcement_view["English"]["m_announcement_view_id"] = "M Announcement View Id";
	$fieldToolTipsm_announcement_view["English"]["m_announcement_view_id"] = "";
	$placeHoldersm_announcement_view["English"]["m_announcement_view_id"] = "";
	$fieldLabelsm_announcement_view["English"]["m_announcement_id"] = "M Announcement Id";
	$fieldToolTipsm_announcement_view["English"]["m_announcement_id"] = "";
	$placeHoldersm_announcement_view["English"]["m_announcement_id"] = "";
	$fieldLabelsm_announcement_view["English"]["username"] = "Username";
	$fieldToolTipsm_announcement_view["English"]["username"] = "";
	$placeHoldersm_announcement_view["English"]["username"] = "";
	$fieldLabelsm_announcement_view["English"]["view_date"] = "View Date";
	$fieldToolTipsm_announcement_view["English"]["view_date"] = "";
	$placeHoldersm_announcement_view["English"]["view_date"] = "";
	if (count($fieldToolTipsm_announcement_view["English"]))
		$tdatam_announcement_view[".isUseToolTips"] = true;
}


	$tdatam_announcement_view[".NCSearch"] = true;



$tdatam_announcement_view[".shortTableName"] = "m_announcement_view";
$tdatam_announcement_view[".nSecOptions"] = 0;

$tdatam_announcement_view[".mainTableOwnerID"] = "";
$tdatam_announcement_view[".entityType"] = 0;
$tdatam_announcement_view[".connId"] = "u736239518tsundbat154412412";


$tdatam_announcement_view[".strOriginalTableName"] = "m_announcement_view";

	



$tdatam_announcement_view[".showAddInPopup"] = false;

$tdatam_announcement_view[".showEditInPopup"] = false;

$tdatam_announcement_view[".showViewInPopup"] = false;

$tdatam_announcement_view[".listAjax"] = false;
//	temporary
//$tdatam_announcement_view[".listAjax"] = false;

	$tdatam_announcement_view[".audit"] = false;

	$tdatam_announcement_view[".locking"] = false;


$pages = $tdatam_announcement_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_announcement_view[".edit"] = true;
	$tdatam_announcement_view[".afterEditAction"] = 1;
	$tdatam_announcement_view[".closePopupAfterEdit"] = 1;
	$tdatam_announcement_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_announcement_view[".add"] = true;
$tdatam_announcement_view[".afterAddAction"] = 1;
$tdatam_announcement_view[".closePopupAfterAdd"] = 1;
$tdatam_announcement_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_announcement_view[".list"] = true;
}



$tdatam_announcement_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_announcement_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_announcement_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_announcement_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_announcement_view[".printFriendly"] = true;
}



$tdatam_announcement_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_announcement_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_announcement_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_announcement_view[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_announcement_view[".ajaxCodeSnippetAdded"] = false;

$tdatam_announcement_view[".buttonsAdded"] = false;

$tdatam_announcement_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_announcement_view[".isUseTimeForSearch"] = false;


$tdatam_announcement_view[".badgeColor"] = "DAA520";


$tdatam_announcement_view[".allSearchFields"] = array();
$tdatam_announcement_view[".filterFields"] = array();
$tdatam_announcement_view[".requiredSearchFields"] = array();

$tdatam_announcement_view[".googleLikeFields"] = array();
$tdatam_announcement_view[".googleLikeFields"][] = "m_announcement_view_id";
$tdatam_announcement_view[".googleLikeFields"][] = "m_announcement_id";
$tdatam_announcement_view[".googleLikeFields"][] = "username";
$tdatam_announcement_view[".googleLikeFields"][] = "view_date";



$tdatam_announcement_view[".tableType"] = "list";

$tdatam_announcement_view[".printerPageOrientation"] = 0;
$tdatam_announcement_view[".nPrinterPageScale"] = 100;

$tdatam_announcement_view[".nPrinterSplitRecords"] = 40;

$tdatam_announcement_view[".geocodingEnabled"] = false;










$tdatam_announcement_view[".pageSize"] = 20;

$tdatam_announcement_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_announcement_view[".strOrderBy"] = $tstrOrderBy;

$tdatam_announcement_view[".orderindexes"] = array();


$tdatam_announcement_view[".sqlHead"] = "SELECT m_announcement_view_id,  	m_announcement_id,  	username,  	view_date";
$tdatam_announcement_view[".sqlFrom"] = "FROM m_announcement_view";
$tdatam_announcement_view[".sqlWhereExpr"] = "";
$tdatam_announcement_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_announcement_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_announcement_view[".arrGroupsPerPage"] = $arrGPP;

$tdatam_announcement_view[".highlightSearchResults"] = true;

$tableKeysm_announcement_view = array();
$tableKeysm_announcement_view[] = "m_announcement_view_id";
$tdatam_announcement_view[".Keys"] = $tableKeysm_announcement_view;


$tdatam_announcement_view[".hideMobileList"] = array();




//	m_announcement_view_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_announcement_view_id";
	$fdata["GoodName"] = "m_announcement_view_id";
	$fdata["ownerTable"] = "m_announcement_view";
	$fdata["Label"] = GetFieldLabel("m_announcement_view","m_announcement_view_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_announcement_view_id";

		$fdata["sourceSingle"] = "m_announcement_view_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_announcement_view_id";

	
	
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


	$tdatam_announcement_view["m_announcement_view_id"] = $fdata;
		$tdatam_announcement_view[".searchableFields"][] = "m_announcement_view_id";
//	m_announcement_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_announcement_id";
	$fdata["GoodName"] = "m_announcement_id";
	$fdata["ownerTable"] = "m_announcement_view";
	$fdata["Label"] = GetFieldLabel("m_announcement_view","m_announcement_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_announcement_id";

		$fdata["sourceSingle"] = "m_announcement_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_announcement_id";

	
	
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


	$tdatam_announcement_view["m_announcement_id"] = $fdata;
		$tdatam_announcement_view[".searchableFields"][] = "m_announcement_id";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "m_announcement_view";
	$fdata["Label"] = GetFieldLabel("m_announcement_view","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

		$fdata["sourceSingle"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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


	$tdatam_announcement_view["username"] = $fdata;
		$tdatam_announcement_view[".searchableFields"][] = "username";
//	view_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "view_date";
	$fdata["GoodName"] = "view_date";
	$fdata["ownerTable"] = "m_announcement_view";
	$fdata["Label"] = GetFieldLabel("m_announcement_view","view_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "view_date";

		$fdata["sourceSingle"] = "view_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "view_date";

	
	
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


	$tdatam_announcement_view["view_date"] = $fdata;
		$tdatam_announcement_view[".searchableFields"][] = "view_date";


$tables_data["m_announcement_view"]=&$tdatam_announcement_view;
$field_labels["m_announcement_view"] = &$fieldLabelsm_announcement_view;
$fieldToolTips["m_announcement_view"] = &$fieldToolTipsm_announcement_view;
$placeHolders["m_announcement_view"] = &$placeHoldersm_announcement_view;
$page_titles["m_announcement_view"] = &$pageTitlesm_announcement_view;


changeTextControlsToDate( "m_announcement_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_announcement_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_announcement_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_announcement_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_announcement_view_id,  	m_announcement_id,  	username,  	view_date";
$proto0["m_strFrom"] = "FROM m_announcement_view";
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
	"m_strName" => "m_announcement_view_id",
	"m_strTable" => "m_announcement_view",
	"m_srcTableName" => "m_announcement_view"
));

$proto6["m_sql"] = "m_announcement_view_id";
$proto6["m_srcTableName"] = "m_announcement_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_announcement_id",
	"m_strTable" => "m_announcement_view",
	"m_srcTableName" => "m_announcement_view"
));

$proto8["m_sql"] = "m_announcement_id";
$proto8["m_srcTableName"] = "m_announcement_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "m_announcement_view",
	"m_srcTableName" => "m_announcement_view"
));

$proto10["m_sql"] = "username";
$proto10["m_srcTableName"] = "m_announcement_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "view_date",
	"m_strTable" => "m_announcement_view",
	"m_srcTableName" => "m_announcement_view"
));

$proto12["m_sql"] = "view_date";
$proto12["m_srcTableName"] = "m_announcement_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_announcement_view";
$proto15["m_srcTableName"] = "m_announcement_view";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_announcement_view_id";
$proto15["m_columns"][] = "m_announcement_id";
$proto15["m_columns"][] = "username";
$proto15["m_columns"][] = "view_date";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_announcement_view";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "m_announcement_view";
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
$proto0["m_srcTableName"]="m_announcement_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_announcement_view = createSqlQuery_m_announcement_view();


	
				;

				

$tdatam_announcement_view[".sqlquery"] = $queryData_m_announcement_view;



$tdatam_announcement_view[".hasEvents"] = false;

?>