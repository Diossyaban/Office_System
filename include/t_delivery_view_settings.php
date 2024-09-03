<?php
$tdatat_delivery_view = array();
$tdatat_delivery_view[".searchableFields"] = array();
$tdatat_delivery_view[".ShortName"] = "t_delivery_view";
$tdatat_delivery_view[".OwnerID"] = "";
$tdatat_delivery_view[".OriginalTable"] = "t_delivery";


$tdatat_delivery_view[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatat_delivery_view[".originalPagesByType"] = $tdatat_delivery_view[".pagesByType"];
$tdatat_delivery_view[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_view[".originalPages"] = $tdatat_delivery_view[".pages"];
$tdatat_delivery_view[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatat_delivery_view[".originalDefaultPages"] = $tdatat_delivery_view[".defaultPages"];

//	field labels
$fieldLabelst_delivery_view = array();
$fieldToolTipst_delivery_view = array();
$pageTitlest_delivery_view = array();
$placeHolderst_delivery_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_view["English"] = array();
	$fieldToolTipst_delivery_view["English"] = array();
	$placeHolderst_delivery_view["English"] = array();
	$pageTitlest_delivery_view["English"] = array();
	$fieldLabelst_delivery_view["English"]["status"] = "Status";
	$fieldToolTipst_delivery_view["English"]["status"] = "";
	$placeHolderst_delivery_view["English"]["status"] = "";
	$fieldLabelst_delivery_view["English"]["t_register_status"] = "T Register Status";
	$fieldToolTipst_delivery_view["English"]["t_register_status"] = "";
	$placeHolderst_delivery_view["English"]["t_register_status"] = "";
	if (count($fieldToolTipst_delivery_view["English"]))
		$tdatat_delivery_view[".isUseToolTips"] = true;
}


	$tdatat_delivery_view[".NCSearch"] = true;

	$tdatat_delivery_view[".ChartRefreshTime"] = 0;


$tdatat_delivery_view[".shortTableName"] = "t_delivery_view";
$tdatat_delivery_view[".nSecOptions"] = 0;

$tdatat_delivery_view[".mainTableOwnerID"] = "";
$tdatat_delivery_view[".entityType"] = 3;
$tdatat_delivery_view[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_view[".strOriginalTableName"] = "t_delivery";

	



$tdatat_delivery_view[".showAddInPopup"] = false;

$tdatat_delivery_view[".showEditInPopup"] = false;

$tdatat_delivery_view[".showViewInPopup"] = false;

$tdatat_delivery_view[".listAjax"] = false;
//	temporary
//$tdatat_delivery_view[".listAjax"] = false;

	$tdatat_delivery_view[".audit"] = false;

	$tdatat_delivery_view[".locking"] = false;


$pages = $tdatat_delivery_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_view[".edit"] = true;
	$tdatat_delivery_view[".afterEditAction"] = 1;
	$tdatat_delivery_view[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_view[".add"] = true;
$tdatat_delivery_view[".afterAddAction"] = 1;
$tdatat_delivery_view[".closePopupAfterAdd"] = 1;
$tdatat_delivery_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_view[".list"] = true;
}



$tdatat_delivery_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_view[".printFriendly"] = true;
}



$tdatat_delivery_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_view[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_delivery_view[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_view[".buttonsAdded"] = false;

$tdatat_delivery_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_view[".isUseTimeForSearch"] = false;


$tdatat_delivery_view[".badgeColor"] = "CFAE83";


$tdatat_delivery_view[".allSearchFields"] = array();
$tdatat_delivery_view[".filterFields"] = array();
$tdatat_delivery_view[".requiredSearchFields"] = array();

$tdatat_delivery_view[".googleLikeFields"] = array();
$tdatat_delivery_view[".googleLikeFields"][] = "t_register_status";
$tdatat_delivery_view[".googleLikeFields"][] = "status";



$tdatat_delivery_view[".tableType"] = "chart";

$tdatat_delivery_view[".printerPageOrientation"] = 0;
$tdatat_delivery_view[".nPrinterPageScale"] = 100;

$tdatat_delivery_view[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_view[".geocodingEnabled"] = false;



// chart settings
$tdatat_delivery_view[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "";
$tdatat_delivery_view[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_view[".orderindexes"] = array();


$tdatat_delivery_view[".sqlHead"] = "SELECT t_register.t_register_status,  m_status.status";
$tdatat_delivery_view[".sqlFrom"] = "FROM t_register    INNER JOIN m_status ON t_register.t_register_status = m_status.m_status_id";
$tdatat_delivery_view[".sqlWhereExpr"] = "t_register.t_register_doc_user = ':session.userid'";
$tdatat_delivery_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_view[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_view[".highlightSearchResults"] = true;

$tableKeyst_delivery_view = array();
$tdatat_delivery_view[".Keys"] = $tableKeyst_delivery_view;


$tdatat_delivery_view[".hideMobileList"] = array();




//	t_register_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_register_status";
	$fdata["GoodName"] = "t_register_status";
	$fdata["ownerTable"] = "t_register";
	$fdata["Label"] = GetFieldLabel("t_delivery_view","t_register_status");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_register_status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register.t_register_status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatat_delivery_view["t_register_status"] = $fdata;
		$tdatat_delivery_view[".searchableFields"][] = "t_register_status";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("t_delivery_view","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_status.status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatat_delivery_view["status"] = $fdata;
		$tdatat_delivery_view[".searchableFields"][] = "status";

$tdatat_delivery_view[".groupChart"] = true;
$tdatat_delivery_view[".chartLabelInterval"] = 0;
$tdatat_delivery_view[".chartLabelField"] = "status";
$tdatat_delivery_view[".chartSeries"] = array();
$tdatat_delivery_view[".chartSeries"][] = array(
	"field" => "t_register_status",
	"total" => "COUNT"
);
	$tdatat_delivery_view[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">t_delivery_view</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatat_delivery_view[".chartXml"] .= '<attr value="0">
			<attr value="name">t_register_status</attr>';
	$tdatat_delivery_view[".chartXml"] .= '</attr>';
	$tdatat_delivery_view[".chartXml"] .= '<attr value="1">
		<attr value="name">status</attr>
	</attr>';
	$tdatat_delivery_view[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatat_delivery_view[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
<attr value="foot">'.xmlencode("").'</attr>
<attr value="y_axis_label">'.xmlencode("t_location_id").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">true</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatat_delivery_view[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatat_delivery_view[".chartXml"] .= '<attr value="0">
		<attr value="name">t_register_status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("t_delivery_view","t_register_status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatat_delivery_view[".chartXml"] .= '<attr value="1">
		<attr value="name">status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("t_delivery_view","status")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatat_delivery_view[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">t_delivery_view</attr>
<attr value="short_table_name">t_delivery_view</attr>
</attr>

</chart>';

$tables_data["t_delivery_view"]=&$tdatat_delivery_view;
$field_labels["t_delivery_view"] = &$fieldLabelst_delivery_view;
$fieldToolTips["t_delivery_view"] = &$fieldToolTipst_delivery_view;
$placeHolders["t_delivery_view"] = &$placeHolderst_delivery_view;
$page_titles["t_delivery_view"] = &$pageTitlest_delivery_view;


changeTextControlsToDate( "t_delivery_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_register.t_register_status,  m_status.status";
$proto0["m_strFrom"] = "FROM t_register    INNER JOIN m_status ON t_register.t_register_status = m_status.m_status_id";
$proto0["m_strWhere"] = "t_register.t_register_doc_user = ':session.userid'";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_register.t_register_doc_user = ':session.userid'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "t_register_doc_user",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_delivery_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= ':session.userid'";
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
	"m_strName" => "t_register_status",
	"m_strTable" => "t_register",
	"m_srcTableName" => "t_delivery_view"
));

$proto6["m_sql"] = "t_register.t_register_status";
$proto6["m_srcTableName"] = "t_delivery_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "m_status",
	"m_srcTableName" => "t_delivery_view"
));

$proto8["m_sql"] = "m_status.status";
$proto8["m_srcTableName"] = "t_delivery_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "t_register";
$proto11["m_srcTableName"] = "t_delivery_view";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "t_register_id";
$proto11["m_columns"][] = "t_register_id_x";
$proto11["m_columns"][] = "t_register_no";
$proto11["m_columns"][] = "t_register_date";
$proto11["m_columns"][] = "t_register_source";
$proto11["m_columns"][] = "t_register_location_id";
$proto11["m_columns"][] = "t_register_transfer_fl";
$proto11["m_columns"][] = "t_register_transfer_location_id";
$proto11["m_columns"][] = "t_register_transfer_date";
$proto11["m_columns"][] = "t_register_transfer_courier";
$proto11["m_columns"][] = "t_register_doc_from";
$proto11["m_columns"][] = "t_register_doc_owner";
$proto11["m_columns"][] = "t_register_doc_user";
$proto11["m_columns"][] = "t_register_images";
$proto11["m_columns"][] = "t_register_note";
$proto11["m_columns"][] = "t_register_status";
$proto11["m_columns"][] = "add_user";
$proto11["m_columns"][] = "add_date";
$proto11["m_columns"][] = "edit_user";
$proto11["m_columns"][] = "edit_date";
$proto11["m_columns"][] = "nomor";
$proto11["m_columns"][] = "digit";
$proto11["m_columns"][] = "add_sign_user";
$proto11["m_columns"][] = "add_sign_date";
$proto11["m_columns"][] = "add_sign_fl";
$proto11["m_columns"][] = "last_user";
$proto11["m_columns"][] = "last_date";
$proto11["m_columns"][] = "t_register_feedback_date";
$proto11["m_columns"][] = "t_register_feedback_time";
$proto11["m_columns"][] = "t_register_feedback_signature";
$proto11["m_columns"][] = "t_register_feedback_takephoto";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "t_register";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "t_delivery_view";
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
												$proto14=array();
$proto14["m_link"] = "SQLL_INNERJOIN";
			$proto15=array();
$proto15["m_strName"] = "m_status";
$proto15["m_srcTableName"] = "t_delivery_view";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_status_id";
$proto15["m_columns"][] = "status";
$proto15["m_columns"][] = "m_status_desc";
$proto15["m_columns"][] = "m_status_basic_flag";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN m_status ON t_register.t_register_status = m_status.m_status_id";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "t_delivery_view";
$proto16=array();
$proto16["m_sql"] = "m_status.m_status_id = t_register.t_register_status";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "t_delivery_view"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= t_register.t_register_status";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_view = createSqlQuery_t_delivery_view();


	
				;

		

$tdatat_delivery_view[".sqlquery"] = $queryData_t_delivery_view;



$tdatat_delivery_view[".hasEvents"] = false;

?>