<?php
$tdatamypage_tmail = array();
$tdatamypage_tmail[".searchableFields"] = array();
$tdatamypage_tmail[".ShortName"] = "mypage_tmail";
$tdatamypage_tmail[".OwnerID"] = "";
$tdatamypage_tmail[".OriginalTable"] = "m_mypage";


$tdatamypage_tmail[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatamypage_tmail[".originalPagesByType"] = $tdatamypage_tmail[".pagesByType"];
$tdatamypage_tmail[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatamypage_tmail[".originalPages"] = $tdatamypage_tmail[".pages"];
$tdatamypage_tmail[".defaultPages"] = my_json_decode( "{\"search\":\"search\",\"view\":\"view\"}" );
$tdatamypage_tmail[".originalDefaultPages"] = $tdatamypage_tmail[".defaultPages"];

//	field labels
$fieldLabelsmypage_tmail = array();
$fieldToolTipsmypage_tmail = array();
$pageTitlesmypage_tmail = array();
$placeHoldersmypage_tmail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmypage_tmail["English"] = array();
	$fieldToolTipsmypage_tmail["English"] = array();
	$placeHoldersmypage_tmail["English"] = array();
	$pageTitlesmypage_tmail["English"] = array();
	$fieldLabelsmypage_tmail["English"]["m_mypage_id"] = "M Mypage Id";
	$fieldToolTipsmypage_tmail["English"]["m_mypage_id"] = "";
	$placeHoldersmypage_tmail["English"]["m_mypage_id"] = "";
	$fieldLabelsmypage_tmail["English"]["m_mypage_name"] = "In Mail";
	$fieldToolTipsmypage_tmail["English"]["m_mypage_name"] = "";
	$placeHoldersmypage_tmail["English"]["m_mypage_name"] = "";
	$fieldLabelsmypage_tmail["English"]["m_mypage_modul"] = "M Mypage Modul";
	$fieldToolTipsmypage_tmail["English"]["m_mypage_modul"] = "";
	$placeHoldersmypage_tmail["English"]["m_mypage_modul"] = "";
	if (count($fieldToolTipsmypage_tmail["English"]))
		$tdatamypage_tmail[".isUseToolTips"] = true;
}


	$tdatamypage_tmail[".NCSearch"] = true;



$tdatamypage_tmail[".shortTableName"] = "mypage_tmail";
$tdatamypage_tmail[".nSecOptions"] = 0;

$tdatamypage_tmail[".mainTableOwnerID"] = "";
$tdatamypage_tmail[".entityType"] = 1;
$tdatamypage_tmail[".connId"] = "u736239518tsundbat154412412";


$tdatamypage_tmail[".strOriginalTableName"] = "m_mypage";

	



$tdatamypage_tmail[".showAddInPopup"] = false;

$tdatamypage_tmail[".showEditInPopup"] = false;

$tdatamypage_tmail[".showViewInPopup"] = false;

$tdatamypage_tmail[".listAjax"] = false;
//	temporary
//$tdatamypage_tmail[".listAjax"] = false;

	$tdatamypage_tmail[".audit"] = false;

	$tdatamypage_tmail[".locking"] = false;


$pages = $tdatamypage_tmail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamypage_tmail[".edit"] = true;
	$tdatamypage_tmail[".afterEditAction"] = 1;
	$tdatamypage_tmail[".closePopupAfterEdit"] = 1;
	$tdatamypage_tmail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamypage_tmail[".add"] = true;
$tdatamypage_tmail[".afterAddAction"] = 1;
$tdatamypage_tmail[".closePopupAfterAdd"] = 1;
$tdatamypage_tmail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamypage_tmail[".list"] = true;
}



$tdatamypage_tmail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamypage_tmail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamypage_tmail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamypage_tmail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamypage_tmail[".printFriendly"] = true;
}



$tdatamypage_tmail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamypage_tmail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamypage_tmail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamypage_tmail[".isUseAjaxSuggest"] = true;



																																																			

$tdatamypage_tmail[".ajaxCodeSnippetAdded"] = false;

$tdatamypage_tmail[".buttonsAdded"] = false;

$tdatamypage_tmail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamypage_tmail[".isUseTimeForSearch"] = false;


$tdatamypage_tmail[".badgeColor"] = "DC143C";


$tdatamypage_tmail[".allSearchFields"] = array();
$tdatamypage_tmail[".filterFields"] = array();
$tdatamypage_tmail[".requiredSearchFields"] = array();

$tdatamypage_tmail[".googleLikeFields"] = array();
$tdatamypage_tmail[".googleLikeFields"][] = "m_mypage_id";
$tdatamypage_tmail[".googleLikeFields"][] = "m_mypage_name";
$tdatamypage_tmail[".googleLikeFields"][] = "m_mypage_modul";



$tdatamypage_tmail[".tableType"] = "list";

$tdatamypage_tmail[".printerPageOrientation"] = 0;
$tdatamypage_tmail[".nPrinterPageScale"] = 100;

$tdatamypage_tmail[".nPrinterSplitRecords"] = 40;

$tdatamypage_tmail[".geocodingEnabled"] = false;










$tdatamypage_tmail[".pageSize"] = 20;

$tdatamypage_tmail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamypage_tmail[".strOrderBy"] = $tstrOrderBy;

$tdatamypage_tmail[".orderindexes"] = array();


$tdatamypage_tmail[".sqlHead"] = "SELECT m_mypage_id,  	m_mypage_name,  	m_mypage_modul";
$tdatamypage_tmail[".sqlFrom"] = "FROM m_mypage";
$tdatamypage_tmail[".sqlWhereExpr"] = "m_mypage_id = 1";
$tdatamypage_tmail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamypage_tmail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamypage_tmail[".arrGroupsPerPage"] = $arrGPP;

$tdatamypage_tmail[".highlightSearchResults"] = true;

$tableKeysmypage_tmail = array();
$tableKeysmypage_tmail[] = "m_mypage_id";
$tdatamypage_tmail[".Keys"] = $tableKeysmypage_tmail;


$tdatamypage_tmail[".hideMobileList"] = array();




//	m_mypage_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_mypage_id";
	$fdata["GoodName"] = "m_mypage_id";
	$fdata["ownerTable"] = "m_mypage";
	$fdata["Label"] = GetFieldLabel("mypage_tmail","m_mypage_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_mypage_id";

		$fdata["sourceSingle"] = "m_mypage_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mypage_id";

	
	
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


	$tdatamypage_tmail["m_mypage_id"] = $fdata;
		$tdatamypage_tmail[".searchableFields"][] = "m_mypage_id";
//	m_mypage_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_mypage_name";
	$fdata["GoodName"] = "m_mypage_name";
	$fdata["ownerTable"] = "m_mypage";
	$fdata["Label"] = GetFieldLabel("mypage_tmail","m_mypage_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_mypage_name";

		$fdata["sourceSingle"] = "m_mypage_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mypage_name";

	
	
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


	$tdatamypage_tmail["m_mypage_name"] = $fdata;
		$tdatamypage_tmail[".searchableFields"][] = "m_mypage_name";
//	m_mypage_modul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_mypage_modul";
	$fdata["GoodName"] = "m_mypage_modul";
	$fdata["ownerTable"] = "m_mypage";
	$fdata["Label"] = GetFieldLabel("mypage_tmail","m_mypage_modul");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_mypage_modul";

		$fdata["sourceSingle"] = "m_mypage_modul";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mypage_modul";

	
	
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


	$tdatamypage_tmail["m_mypage_modul"] = $fdata;
		$tdatamypage_tmail[".searchableFields"][] = "m_mypage_modul";


$tables_data["mypage_tmail"]=&$tdatamypage_tmail;
$field_labels["mypage_tmail"] = &$fieldLabelsmypage_tmail;
$fieldToolTips["mypage_tmail"] = &$fieldToolTipsmypage_tmail;
$placeHolders["mypage_tmail"] = &$placeHoldersmypage_tmail;
$page_titles["mypage_tmail"] = &$pageTitlesmypage_tmail;


changeTextControlsToDate( "mypage_tmail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mypage_tmail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mypage_tmail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mypage_tmail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_mypage_id,  	m_mypage_name,  	m_mypage_modul";
$proto0["m_strFrom"] = "FROM m_mypage";
$proto0["m_strWhere"] = "m_mypage_id = 1";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "m_mypage_id = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_mypage_id",
	"m_strTable" => "m_mypage",
	"m_srcTableName" => "mypage_tmail"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_strName" => "m_mypage_id",
	"m_strTable" => "m_mypage",
	"m_srcTableName" => "mypage_tmail"
));

$proto6["m_sql"] = "m_mypage_id";
$proto6["m_srcTableName"] = "mypage_tmail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_mypage_name",
	"m_strTable" => "m_mypage",
	"m_srcTableName" => "mypage_tmail"
));

$proto8["m_sql"] = "m_mypage_name";
$proto8["m_srcTableName"] = "mypage_tmail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_mypage_modul",
	"m_strTable" => "m_mypage",
	"m_srcTableName" => "mypage_tmail"
));

$proto10["m_sql"] = "m_mypage_modul";
$proto10["m_srcTableName"] = "mypage_tmail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_mypage";
$proto13["m_srcTableName"] = "mypage_tmail";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_mypage_id";
$proto13["m_columns"][] = "m_mypage_name";
$proto13["m_columns"][] = "m_mypage_modul";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_mypage";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "mypage_tmail";
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
$proto0["m_srcTableName"]="mypage_tmail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mypage_tmail = createSqlQuery_mypage_tmail();


	
				;

			

$tdatamypage_tmail[".sqlquery"] = $queryData_mypage_tmail;



$tdatamypage_tmail[".hasEvents"] = false;

?>