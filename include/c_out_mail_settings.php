<?php
$tdatac_out_mail = array();
$tdatac_out_mail[".searchableFields"] = array();
$tdatac_out_mail[".ShortName"] = "c_out_mail";
$tdatac_out_mail[".OwnerID"] = "";
$tdatac_out_mail[".OriginalTable"] = "t_delivery";


$tdatac_out_mail[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatac_out_mail[".originalPagesByType"] = $tdatac_out_mail[".pagesByType"];
$tdatac_out_mail[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatac_out_mail[".originalPages"] = $tdatac_out_mail[".pages"];
$tdatac_out_mail[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatac_out_mail[".originalDefaultPages"] = $tdatac_out_mail[".defaultPages"];

//	field labels
$fieldLabelsc_out_mail = array();
$fieldToolTipsc_out_mail = array();
$pageTitlesc_out_mail = array();
$placeHoldersc_out_mail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsc_out_mail["English"] = array();
	$fieldToolTipsc_out_mail["English"] = array();
	$placeHoldersc_out_mail["English"] = array();
	$pageTitlesc_out_mail["English"] = array();
	$fieldLabelsc_out_mail["English"]["status"] = "Status";
	$fieldToolTipsc_out_mail["English"]["status"] = "";
	$placeHoldersc_out_mail["English"]["status"] = "";
	$fieldLabelsc_out_mail["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipsc_out_mail["English"]["t_delivery_id"] = "";
	$placeHoldersc_out_mail["English"]["t_delivery_id"] = "";
	if (count($fieldToolTipsc_out_mail["English"]))
		$tdatac_out_mail[".isUseToolTips"] = true;
}


	$tdatac_out_mail[".NCSearch"] = true;

	$tdatac_out_mail[".ChartRefreshTime"] = 0;


$tdatac_out_mail[".shortTableName"] = "c_out_mail";
$tdatac_out_mail[".nSecOptions"] = 0;

$tdatac_out_mail[".mainTableOwnerID"] = "";
$tdatac_out_mail[".entityType"] = 3;
$tdatac_out_mail[".connId"] = "u736239518tsundbat154412412";


$tdatac_out_mail[".strOriginalTableName"] = "t_delivery";

	



$tdatac_out_mail[".showAddInPopup"] = false;

$tdatac_out_mail[".showEditInPopup"] = false;

$tdatac_out_mail[".showViewInPopup"] = false;

$tdatac_out_mail[".listAjax"] = false;
//	temporary
//$tdatac_out_mail[".listAjax"] = false;

	$tdatac_out_mail[".audit"] = false;

	$tdatac_out_mail[".locking"] = false;


$pages = $tdatac_out_mail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatac_out_mail[".edit"] = true;
	$tdatac_out_mail[".afterEditAction"] = 1;
	$tdatac_out_mail[".closePopupAfterEdit"] = 1;
	$tdatac_out_mail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatac_out_mail[".add"] = true;
$tdatac_out_mail[".afterAddAction"] = 1;
$tdatac_out_mail[".closePopupAfterAdd"] = 1;
$tdatac_out_mail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatac_out_mail[".list"] = true;
}



$tdatac_out_mail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatac_out_mail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatac_out_mail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatac_out_mail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatac_out_mail[".printFriendly"] = true;
}



$tdatac_out_mail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatac_out_mail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatac_out_mail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatac_out_mail[".isUseAjaxSuggest"] = true;



																																																			

$tdatac_out_mail[".ajaxCodeSnippetAdded"] = false;

$tdatac_out_mail[".buttonsAdded"] = false;

$tdatac_out_mail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatac_out_mail[".isUseTimeForSearch"] = false;


$tdatac_out_mail[".badgeColor"] = "EDCA00";


$tdatac_out_mail[".allSearchFields"] = array();
$tdatac_out_mail[".filterFields"] = array();
$tdatac_out_mail[".requiredSearchFields"] = array();

$tdatac_out_mail[".googleLikeFields"] = array();
$tdatac_out_mail[".googleLikeFields"][] = "status";
$tdatac_out_mail[".googleLikeFields"][] = "t_delivery_id";



$tdatac_out_mail[".tableType"] = "chart";

$tdatac_out_mail[".printerPageOrientation"] = 0;
$tdatac_out_mail[".nPrinterPageScale"] = 100;

$tdatac_out_mail[".nPrinterSplitRecords"] = 40;

$tdatac_out_mail[".geocodingEnabled"] = false;



// chart settings
$tdatac_out_mail[".chartType"] = "2DDoughnut";
// end of chart settings








$tstrOrderBy = "";
$tdatac_out_mail[".strOrderBy"] = $tstrOrderBy;

$tdatac_out_mail[".orderindexes"] = array();


$tdatac_out_mail[".sqlHead"] = "SELECT m_status.status,  t_delivery.t_delivery_id";
$tdatac_out_mail[".sqlFrom"] = "FROM t_delivery  INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id";
$tdatac_out_mail[".sqlWhereExpr"] = "(t_delivery.add_user =':session.userid')";
$tdatac_out_mail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatac_out_mail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatac_out_mail[".arrGroupsPerPage"] = $arrGPP;

$tdatac_out_mail[".highlightSearchResults"] = true;

$tableKeysc_out_mail = array();
$tdatac_out_mail[".Keys"] = $tableKeysc_out_mail;


$tdatac_out_mail[".hideMobileList"] = array();




//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "m_status";
	$fdata["Label"] = GetFieldLabel("c_out_mail","status");
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


	$tdatac_out_mail["status"] = $fdata;
		$tdatac_out_mail[".searchableFields"][] = "status";
//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery";
	$fdata["Label"] = GetFieldLabel("c_out_mail","t_delivery_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_id";

		$fdata["sourceSingle"] = "t_delivery_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery.t_delivery_id";

	
	
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


	$tdatac_out_mail["t_delivery_id"] = $fdata;
		$tdatac_out_mail[".searchableFields"][] = "t_delivery_id";

$tdatac_out_mail[".groupChart"] = true;
$tdatac_out_mail[".chartLabelInterval"] = 0;
$tdatac_out_mail[".chartLabelField"] = "status";
$tdatac_out_mail[".chartSeries"] = array();
$tdatac_out_mail[".chartSeries"][] = array(
	"field" => "t_delivery_id",
	"total" => "COUNT"
);
	$tdatac_out_mail[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">c_out_mail</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_doughnut</attr>
		</attr>

		<attr value="parameters">';
	$tdatac_out_mail[".chartXml"] .= '<attr value="0">
			<attr value="name">t_delivery_id</attr>';
	$tdatac_out_mail[".chartXml"] .= '</attr>';
	$tdatac_out_mail[".chartXml"] .= '<attr value="1">
		<attr value="name">status</attr>
	</attr>';
	$tdatac_out_mail[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatac_out_mail[".chartXml"] .= '<attr value="head">'.xmlencode("").'</attr>
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
$tdatac_out_mail[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatac_out_mail[".chartXml"] .= '<attr value="0">
		<attr value="name">status</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("c_out_mail","status")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatac_out_mail[".chartXml"] .= '<attr value="1">
		<attr value="name">t_delivery_id</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("c_out_mail","t_delivery_id")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatac_out_mail[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">c_out_mail</attr>
<attr value="short_table_name">c_out_mail</attr>
</attr>

</chart>';

$tables_data["c_out_mail"]=&$tdatac_out_mail;
$field_labels["c_out_mail"] = &$fieldLabelsc_out_mail;
$fieldToolTips["c_out_mail"] = &$fieldToolTipsc_out_mail;
$placeHolders["c_out_mail"] = &$placeHoldersc_out_mail;
$page_titles["c_out_mail"] = &$pageTitlesc_out_mail;


changeTextControlsToDate( "c_out_mail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["c_out_mail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["c_out_mail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_c_out_mail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_status.status,  t_delivery.t_delivery_id";
$proto0["m_strFrom"] = "FROM t_delivery  INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id";
$proto0["m_strWhere"] = "(t_delivery.add_user =':session.userid')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_delivery.add_user =':session.userid'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "c_out_mail"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=':session.userid'";
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
	"m_strName" => "status",
	"m_strTable" => "m_status",
	"m_srcTableName" => "c_out_mail"
));

$proto6["m_sql"] = "m_status.status";
$proto6["m_srcTableName"] = "c_out_mail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery",
	"m_srcTableName" => "c_out_mail"
));

$proto8["m_sql"] = "t_delivery.t_delivery_id";
$proto8["m_srcTableName"] = "c_out_mail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "t_delivery";
$proto11["m_srcTableName"] = "c_out_mail";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "t_delivery_id";
$proto11["m_columns"][] = "t_delivery_token";
$proto11["m_columns"][] = "t_delivery_no";
$proto11["m_columns"][] = "t_delivery_date";
$proto11["m_columns"][] = "t_delivery_type";
$proto11["m_columns"][] = "t_location_id";
$proto11["m_columns"][] = "t_select_table_text";
$proto11["m_columns"][] = "t_delivery_to_table";
$proto11["m_columns"][] = "t_delivery_to_text";
$proto11["m_columns"][] = "t_delivery_address";
$proto11["m_columns"][] = "t_delivery_desc";
$proto11["m_columns"][] = "t_delivery_status";
$proto11["m_columns"][] = "add_user";
$proto11["m_columns"][] = "add_date";
$proto11["m_columns"][] = "edit_user";
$proto11["m_columns"][] = "edit_date";
$proto11["m_columns"][] = "process_user";
$proto11["m_columns"][] = "process_date";
$proto11["m_columns"][] = "t_delivery_category_code";
$proto11["m_columns"][] = "last_user";
$proto11["m_columns"][] = "last_date";
$proto11["m_columns"][] = "nomor";
$proto11["m_columns"][] = "nomorurut";
$proto11["m_columns"][] = "t_delivery_location_address";
$proto11["m_columns"][] = "get_fl";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "t_delivery";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "c_out_mail";
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
$proto15["m_srcTableName"] = "c_out_mail";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_status_id";
$proto15["m_columns"][] = "status";
$proto15["m_columns"][] = "m_status_desc";
$proto15["m_columns"][] = "m_status_basic_flag";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "INNER JOIN m_status ON t_delivery.t_delivery_status = m_status.m_status_id";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "c_out_mail";
$proto16=array();
$proto16["m_sql"] = "m_status.m_status_id = t_delivery.t_delivery_status";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_status_id",
	"m_strTable" => "m_status",
	"m_srcTableName" => "c_out_mail"
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "= t_delivery.t_delivery_status";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="c_out_mail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_c_out_mail = createSqlQuery_c_out_mail();


	
				;

		

$tdatac_out_mail[".sqlquery"] = $queryData_c_out_mail;



$tdatac_out_mail[".hasEvents"] = false;

?>