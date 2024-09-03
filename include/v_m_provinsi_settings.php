<?php
$tdatav_m_provinsi = array();
$tdatav_m_provinsi[".searchableFields"] = array();
$tdatav_m_provinsi[".ShortName"] = "v_m_provinsi";
$tdatav_m_provinsi[".OwnerID"] = "";
$tdatav_m_provinsi[".OriginalTable"] = "t_delivery_address";


$tdatav_m_provinsi[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatav_m_provinsi[".originalPagesByType"] = $tdatav_m_provinsi[".pagesByType"];
$tdatav_m_provinsi[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatav_m_provinsi[".originalPages"] = $tdatav_m_provinsi[".pages"];
$tdatav_m_provinsi[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatav_m_provinsi[".originalDefaultPages"] = $tdatav_m_provinsi[".defaultPages"];

//	field labels
$fieldLabelsv_m_provinsi = array();
$fieldToolTipsv_m_provinsi = array();
$pageTitlesv_m_provinsi = array();
$placeHoldersv_m_provinsi = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_m_provinsi["English"] = array();
	$fieldToolTipsv_m_provinsi["English"] = array();
	$placeHoldersv_m_provinsi["English"] = array();
	$pageTitlesv_m_provinsi["English"] = array();
	$fieldLabelsv_m_provinsi["English"]["id"] = "Id";
	$fieldToolTipsv_m_provinsi["English"]["id"] = "";
	$placeHoldersv_m_provinsi["English"]["id"] = "";
	$fieldLabelsv_m_provinsi["English"]["m_provinsi_nama"] = "M Provinsi Nama";
	$fieldToolTipsv_m_provinsi["English"]["m_provinsi_nama"] = "";
	$placeHoldersv_m_provinsi["English"]["m_provinsi_nama"] = "";
	$fieldLabelsv_m_provinsi["English"]["m_provinsi_fl"] = "M Provinsi Fl";
	$fieldToolTipsv_m_provinsi["English"]["m_provinsi_fl"] = "";
	$placeHoldersv_m_provinsi["English"]["m_provinsi_fl"] = "";
	if (count($fieldToolTipsv_m_provinsi["English"]))
		$tdatav_m_provinsi[".isUseToolTips"] = true;
}


	$tdatav_m_provinsi[".NCSearch"] = true;



$tdatav_m_provinsi[".shortTableName"] = "v_m_provinsi";
$tdatav_m_provinsi[".nSecOptions"] = 0;

$tdatav_m_provinsi[".mainTableOwnerID"] = "";
$tdatav_m_provinsi[".entityType"] = 1;
$tdatav_m_provinsi[".connId"] = "u736239518tsundbat154412412";


$tdatav_m_provinsi[".strOriginalTableName"] = "t_delivery_address";

	



$tdatav_m_provinsi[".showAddInPopup"] = false;

$tdatav_m_provinsi[".showEditInPopup"] = false;

$tdatav_m_provinsi[".showViewInPopup"] = false;

$tdatav_m_provinsi[".listAjax"] = false;
//	temporary
//$tdatav_m_provinsi[".listAjax"] = false;

	$tdatav_m_provinsi[".audit"] = false;

	$tdatav_m_provinsi[".locking"] = false;


$pages = $tdatav_m_provinsi[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_m_provinsi[".edit"] = true;
	$tdatav_m_provinsi[".afterEditAction"] = 1;
	$tdatav_m_provinsi[".closePopupAfterEdit"] = 1;
	$tdatav_m_provinsi[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_m_provinsi[".add"] = true;
$tdatav_m_provinsi[".afterAddAction"] = 1;
$tdatav_m_provinsi[".closePopupAfterAdd"] = 1;
$tdatav_m_provinsi[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_m_provinsi[".list"] = true;
}



$tdatav_m_provinsi[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_m_provinsi[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_m_provinsi[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_m_provinsi[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_m_provinsi[".printFriendly"] = true;
}



$tdatav_m_provinsi[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_m_provinsi[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_m_provinsi[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_m_provinsi[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_m_provinsi[".ajaxCodeSnippetAdded"] = false;

$tdatav_m_provinsi[".buttonsAdded"] = false;

$tdatav_m_provinsi[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_m_provinsi[".isUseTimeForSearch"] = false;


$tdatav_m_provinsi[".badgeColor"] = "D2AF80";


$tdatav_m_provinsi[".allSearchFields"] = array();
$tdatav_m_provinsi[".filterFields"] = array();
$tdatav_m_provinsi[".requiredSearchFields"] = array();

$tdatav_m_provinsi[".googleLikeFields"] = array();
$tdatav_m_provinsi[".googleLikeFields"][] = "id";
$tdatav_m_provinsi[".googleLikeFields"][] = "m_provinsi_nama";
$tdatav_m_provinsi[".googleLikeFields"][] = "m_provinsi_fl";



$tdatav_m_provinsi[".tableType"] = "list";

$tdatav_m_provinsi[".printerPageOrientation"] = 0;
$tdatav_m_provinsi[".nPrinterPageScale"] = 100;

$tdatav_m_provinsi[".nPrinterSplitRecords"] = 40;

$tdatav_m_provinsi[".geocodingEnabled"] = false;










$tdatav_m_provinsi[".pageSize"] = 20;

$tdatav_m_provinsi[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_m_provinsi[".strOrderBy"] = $tstrOrderBy;

$tdatav_m_provinsi[".orderindexes"] = array();


$tdatav_m_provinsi[".sqlHead"] = "SELECT id,  m_provinsi_nama,  m_provinsi_fl";
$tdatav_m_provinsi[".sqlFrom"] = "FROM m_provinsi";
$tdatav_m_provinsi[".sqlWhereExpr"] = "";
$tdatav_m_provinsi[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_m_provinsi[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_m_provinsi[".arrGroupsPerPage"] = $arrGPP;

$tdatav_m_provinsi[".highlightSearchResults"] = true;

$tableKeysv_m_provinsi = array();
$tdatav_m_provinsi[".Keys"] = $tableKeysv_m_provinsi;


$tdatav_m_provinsi[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_provinsi";
	$fdata["Label"] = GetFieldLabel("v_m_provinsi","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatav_m_provinsi["id"] = $fdata;
		$tdatav_m_provinsi[".searchableFields"][] = "id";
//	m_provinsi_nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_provinsi_nama";
	$fdata["GoodName"] = "m_provinsi_nama";
	$fdata["ownerTable"] = "m_provinsi";
	$fdata["Label"] = GetFieldLabel("v_m_provinsi","m_provinsi_nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_provinsi_nama";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_provinsi_nama";

	
	
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


	$tdatav_m_provinsi["m_provinsi_nama"] = $fdata;
		$tdatav_m_provinsi[".searchableFields"][] = "m_provinsi_nama";
//	m_provinsi_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_provinsi_fl";
	$fdata["GoodName"] = "m_provinsi_fl";
	$fdata["ownerTable"] = "m_provinsi";
	$fdata["Label"] = GetFieldLabel("v_m_provinsi","m_provinsi_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_provinsi_fl";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_provinsi_fl";

	
	
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


	$tdatav_m_provinsi["m_provinsi_fl"] = $fdata;
		$tdatav_m_provinsi[".searchableFields"][] = "m_provinsi_fl";


$tables_data["v_m_provinsi"]=&$tdatav_m_provinsi;
$field_labels["v_m_provinsi"] = &$fieldLabelsv_m_provinsi;
$fieldToolTips["v_m_provinsi"] = &$fieldToolTipsv_m_provinsi;
$placeHolders["v_m_provinsi"] = &$placeHoldersv_m_provinsi;
$page_titles["v_m_provinsi"] = &$pageTitlesv_m_provinsi;


changeTextControlsToDate( "v_m_provinsi" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_m_provinsi"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_m_provinsi"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_m_provinsi()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  m_provinsi_nama,  m_provinsi_fl";
$proto0["m_strFrom"] = "FROM m_provinsi";
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
	"m_strName" => "id",
	"m_strTable" => "m_provinsi",
	"m_srcTableName" => "v_m_provinsi"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "v_m_provinsi";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_provinsi_nama",
	"m_strTable" => "m_provinsi",
	"m_srcTableName" => "v_m_provinsi"
));

$proto8["m_sql"] = "m_provinsi_nama";
$proto8["m_srcTableName"] = "v_m_provinsi";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_provinsi_fl",
	"m_strTable" => "m_provinsi",
	"m_srcTableName" => "v_m_provinsi"
));

$proto10["m_sql"] = "m_provinsi_fl";
$proto10["m_srcTableName"] = "v_m_provinsi";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_provinsi";
$proto13["m_srcTableName"] = "v_m_provinsi";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "m_provinsi_nama";
$proto13["m_columns"][] = "m_provinsi_fl";
$proto13["m_columns"][] = "is_active";
$proto13["m_columns"][] = "is_delete";
$proto13["m_columns"][] = "deleted_date";
$proto13["m_columns"][] = "created_date";
$proto13["m_columns"][] = "created_by";
$proto13["m_columns"][] = "last_update_by";
$proto13["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_provinsi";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "v_m_provinsi";
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
$proto0["m_srcTableName"]="v_m_provinsi";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_m_provinsi = createSqlQuery_v_m_provinsi();


	
				;

			

$tdatav_m_provinsi[".sqlquery"] = $queryData_v_m_provinsi;



$tdatav_m_provinsi[".hasEvents"] = false;

?>