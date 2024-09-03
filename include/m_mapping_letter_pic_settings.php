<?php
$tdatam_mapping_letter_pic = array();
$tdatam_mapping_letter_pic[".searchableFields"] = array();
$tdatam_mapping_letter_pic[".ShortName"] = "m_mapping_letter_pic";
$tdatam_mapping_letter_pic[".OwnerID"] = "";
$tdatam_mapping_letter_pic[".OriginalTable"] = "m_mapping_letter_pic";


$tdatam_mapping_letter_pic[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_mapping_letter_pic[".originalPagesByType"] = $tdatam_mapping_letter_pic[".pagesByType"];
$tdatam_mapping_letter_pic[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_mapping_letter_pic[".originalPages"] = $tdatam_mapping_letter_pic[".pages"];
$tdatam_mapping_letter_pic[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_mapping_letter_pic[".originalDefaultPages"] = $tdatam_mapping_letter_pic[".defaultPages"];

//	field labels
$fieldLabelsm_mapping_letter_pic = array();
$fieldToolTipsm_mapping_letter_pic = array();
$pageTitlesm_mapping_letter_pic = array();
$placeHoldersm_mapping_letter_pic = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_mapping_letter_pic["English"] = array();
	$fieldToolTipsm_mapping_letter_pic["English"] = array();
	$placeHoldersm_mapping_letter_pic["English"] = array();
	$pageTitlesm_mapping_letter_pic["English"] = array();
	$fieldLabelsm_mapping_letter_pic["English"]["m_mapping_pic_id"] = "M Mapping Pic Id";
	$fieldToolTipsm_mapping_letter_pic["English"]["m_mapping_pic_id"] = "";
	$placeHoldersm_mapping_letter_pic["English"]["m_mapping_pic_id"] = "";
	$fieldLabelsm_mapping_letter_pic["English"]["m_letter_pic"] = "Username";
	$fieldToolTipsm_mapping_letter_pic["English"]["m_letter_pic"] = "";
	$placeHoldersm_mapping_letter_pic["English"]["m_letter_pic"] = "";
	$fieldLabelsm_mapping_letter_pic["English"]["m_mapping_letter_id"] = "M Mapping Letter Id";
	$fieldToolTipsm_mapping_letter_pic["English"]["m_mapping_letter_id"] = "";
	$placeHoldersm_mapping_letter_pic["English"]["m_mapping_letter_id"] = "";
	$pageTitlesm_mapping_letter_pic["English"]["list"] = "";
	if (count($fieldToolTipsm_mapping_letter_pic["English"]))
		$tdatam_mapping_letter_pic[".isUseToolTips"] = true;
}


	$tdatam_mapping_letter_pic[".NCSearch"] = true;


	$tdatam_mapping_letter_pic[".scrollGridBody"] = true;

$tdatam_mapping_letter_pic[".shortTableName"] = "m_mapping_letter_pic";
$tdatam_mapping_letter_pic[".nSecOptions"] = 0;

$tdatam_mapping_letter_pic[".mainTableOwnerID"] = "";
$tdatam_mapping_letter_pic[".entityType"] = 0;
$tdatam_mapping_letter_pic[".connId"] = "u736239518tsundbat154412412";


$tdatam_mapping_letter_pic[".strOriginalTableName"] = "m_mapping_letter_pic";

	



$tdatam_mapping_letter_pic[".showAddInPopup"] = false;

$tdatam_mapping_letter_pic[".showEditInPopup"] = false;

$tdatam_mapping_letter_pic[".showViewInPopup"] = false;

$tdatam_mapping_letter_pic[".listAjax"] = false;
//	temporary
//$tdatam_mapping_letter_pic[".listAjax"] = false;

	$tdatam_mapping_letter_pic[".audit"] = true;

	$tdatam_mapping_letter_pic[".locking"] = false;


$pages = $tdatam_mapping_letter_pic[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_mapping_letter_pic[".edit"] = true;
	$tdatam_mapping_letter_pic[".afterEditAction"] = 1;
	$tdatam_mapping_letter_pic[".closePopupAfterEdit"] = 1;
	$tdatam_mapping_letter_pic[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_mapping_letter_pic[".add"] = true;
$tdatam_mapping_letter_pic[".afterAddAction"] = 1;
$tdatam_mapping_letter_pic[".closePopupAfterAdd"] = 1;
$tdatam_mapping_letter_pic[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_mapping_letter_pic[".list"] = true;
}



$tdatam_mapping_letter_pic[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_mapping_letter_pic[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_mapping_letter_pic[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_mapping_letter_pic[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_mapping_letter_pic[".printFriendly"] = true;
}



$tdatam_mapping_letter_pic[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_mapping_letter_pic[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_mapping_letter_pic[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_mapping_letter_pic[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatam_mapping_letter_pic[".ajaxCodeSnippetAdded"] = false;

$tdatam_mapping_letter_pic[".buttonsAdded"] = false;

$tdatam_mapping_letter_pic[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_mapping_letter_pic[".isUseTimeForSearch"] = false;


$tdatam_mapping_letter_pic[".badgeColor"] = "e07878";


$tdatam_mapping_letter_pic[".allSearchFields"] = array();
$tdatam_mapping_letter_pic[".filterFields"] = array();
$tdatam_mapping_letter_pic[".requiredSearchFields"] = array();

$tdatam_mapping_letter_pic[".googleLikeFields"] = array();
$tdatam_mapping_letter_pic[".googleLikeFields"][] = "m_mapping_pic_id";
$tdatam_mapping_letter_pic[".googleLikeFields"][] = "m_letter_pic";
$tdatam_mapping_letter_pic[".googleLikeFields"][] = "m_mapping_letter_id";



$tdatam_mapping_letter_pic[".tableType"] = "list";

$tdatam_mapping_letter_pic[".printerPageOrientation"] = 0;
$tdatam_mapping_letter_pic[".nPrinterPageScale"] = 100;

$tdatam_mapping_letter_pic[".nPrinterSplitRecords"] = 40;

$tdatam_mapping_letter_pic[".geocodingEnabled"] = false;










$tdatam_mapping_letter_pic[".pageSize"] = 20;

$tdatam_mapping_letter_pic[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_mapping_letter_pic[".strOrderBy"] = $tstrOrderBy;

$tdatam_mapping_letter_pic[".orderindexes"] = array();


$tdatam_mapping_letter_pic[".sqlHead"] = "SELECT m_mapping_pic_id,  	m_letter_pic,  	m_mapping_letter_id";
$tdatam_mapping_letter_pic[".sqlFrom"] = "FROM m_mapping_letter_pic";
$tdatam_mapping_letter_pic[".sqlWhereExpr"] = "";
$tdatam_mapping_letter_pic[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_mapping_letter_pic[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_mapping_letter_pic[".arrGroupsPerPage"] = $arrGPP;

$tdatam_mapping_letter_pic[".highlightSearchResults"] = true;

$tableKeysm_mapping_letter_pic = array();
$tableKeysm_mapping_letter_pic[] = "m_mapping_pic_id";
$tdatam_mapping_letter_pic[".Keys"] = $tableKeysm_mapping_letter_pic;


$tdatam_mapping_letter_pic[".hideMobileList"] = array();




//	m_mapping_pic_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_mapping_pic_id";
	$fdata["GoodName"] = "m_mapping_pic_id";
	$fdata["ownerTable"] = "m_mapping_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter_pic","m_mapping_pic_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_mapping_pic_id";

		$fdata["sourceSingle"] = "m_mapping_pic_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_pic_id";

	
	
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


	$tdatam_mapping_letter_pic["m_mapping_pic_id"] = $fdata;
		$tdatam_mapping_letter_pic[".searchableFields"][] = "m_mapping_pic_id";
//	m_letter_pic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_letter_pic";
	$fdata["GoodName"] = "m_letter_pic";
	$fdata["ownerTable"] = "m_mapping_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter_pic","m_letter_pic");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_letter_pic";

		$fdata["sourceSingle"] = "m_letter_pic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_letter_pic";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_login";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ext_security_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatam_mapping_letter_pic["m_letter_pic"] = $fdata;
		$tdatam_mapping_letter_pic[".searchableFields"][] = "m_letter_pic";
//	m_mapping_letter_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_mapping_letter_id";
	$fdata["GoodName"] = "m_mapping_letter_id";
	$fdata["ownerTable"] = "m_mapping_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_mapping_letter_pic","m_mapping_letter_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_mapping_letter_id";

		$fdata["sourceSingle"] = "m_mapping_letter_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_letter_id";

	
	
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


	$tdatam_mapping_letter_pic["m_mapping_letter_id"] = $fdata;
		$tdatam_mapping_letter_pic[".searchableFields"][] = "m_mapping_letter_id";


$tables_data["m_mapping_letter_pic"]=&$tdatam_mapping_letter_pic;
$field_labels["m_mapping_letter_pic"] = &$fieldLabelsm_mapping_letter_pic;
$fieldToolTips["m_mapping_letter_pic"] = &$fieldToolTipsm_mapping_letter_pic;
$placeHolders["m_mapping_letter_pic"] = &$placeHoldersm_mapping_letter_pic;
$page_titles["m_mapping_letter_pic"] = &$pageTitlesm_mapping_letter_pic;


changeTextControlsToDate( "m_mapping_letter_pic" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_mapping_letter_pic"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_mapping_letter_pic"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="m_mapping_letter";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="m_mapping_letter";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "m_mapping_letter";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["m_mapping_letter_pic"][0] = $masterParams;
				$masterTablesData["m_mapping_letter_pic"][0]["masterKeys"] = array();
	$masterTablesData["m_mapping_letter_pic"][0]["masterKeys"][]="id";
				$masterTablesData["m_mapping_letter_pic"][0]["detailKeys"] = array();
	$masterTablesData["m_mapping_letter_pic"][0]["detailKeys"][]="m_mapping_letter_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_mapping_letter_pic()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_mapping_pic_id,  	m_letter_pic,  	m_mapping_letter_id";
$proto0["m_strFrom"] = "FROM m_mapping_letter_pic";
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
	"m_strName" => "m_mapping_pic_id",
	"m_strTable" => "m_mapping_letter_pic",
	"m_srcTableName" => "m_mapping_letter_pic"
));

$proto6["m_sql"] = "m_mapping_pic_id";
$proto6["m_srcTableName"] = "m_mapping_letter_pic";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_letter_pic",
	"m_strTable" => "m_mapping_letter_pic",
	"m_srcTableName" => "m_mapping_letter_pic"
));

$proto8["m_sql"] = "m_letter_pic";
$proto8["m_srcTableName"] = "m_mapping_letter_pic";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_mapping_letter_id",
	"m_strTable" => "m_mapping_letter_pic",
	"m_srcTableName" => "m_mapping_letter_pic"
));

$proto10["m_sql"] = "m_mapping_letter_id";
$proto10["m_srcTableName"] = "m_mapping_letter_pic";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_mapping_letter_pic";
$proto13["m_srcTableName"] = "m_mapping_letter_pic";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "m_mapping_pic_id";
$proto13["m_columns"][] = "m_letter_pic";
$proto13["m_columns"][] = "m_mapping_letter_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_mapping_letter_pic";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "m_mapping_letter_pic";
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
$proto0["m_srcTableName"]="m_mapping_letter_pic";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_mapping_letter_pic = createSqlQuery_m_mapping_letter_pic();


	
				;

			

$tdatam_mapping_letter_pic[".sqlquery"] = $queryData_m_mapping_letter_pic;



include_once(getabspath("include/m_mapping_letter_pic_events.php"));
$tdatam_mapping_letter_pic[".hasEvents"] = true;

?>