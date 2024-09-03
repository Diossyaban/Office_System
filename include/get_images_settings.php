<?php
$tdataget_images = array();
$tdataget_images[".searchableFields"] = array();
$tdataget_images[".ShortName"] = "get_images";
$tdataget_images[".OwnerID"] = "";
$tdataget_images[".OriginalTable"] = "get_images";


$tdataget_images[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdataget_images[".originalPagesByType"] = $tdataget_images[".pagesByType"];
$tdataget_images[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdataget_images[".originalPages"] = $tdataget_images[".pages"];
$tdataget_images[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdataget_images[".originalDefaultPages"] = $tdataget_images[".defaultPages"];

//	field labels
$fieldLabelsget_images = array();
$fieldToolTipsget_images = array();
$pageTitlesget_images = array();
$placeHoldersget_images = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsget_images["English"] = array();
	$fieldToolTipsget_images["English"] = array();
	$placeHoldersget_images["English"] = array();
	$pageTitlesget_images["English"] = array();
	$fieldLabelsget_images["English"]["t_delivery_feedback_id"] = "T Delivery Feedback Id";
	$fieldToolTipsget_images["English"]["t_delivery_feedback_id"] = "";
	$placeHoldersget_images["English"]["t_delivery_feedback_id"] = "";
	$fieldLabelsget_images["English"]["imagesname"] = "Imagesname";
	$fieldToolTipsget_images["English"]["imagesname"] = "";
	$placeHoldersget_images["English"]["imagesname"] = "";
	$fieldLabelsget_images["English"]["signname"] = "Signname";
	$fieldToolTipsget_images["English"]["signname"] = "";
	$placeHoldersget_images["English"]["signname"] = "";
	if (count($fieldToolTipsget_images["English"]))
		$tdataget_images[".isUseToolTips"] = true;
}


	$tdataget_images[".NCSearch"] = true;



$tdataget_images[".shortTableName"] = "get_images";
$tdataget_images[".nSecOptions"] = 0;

$tdataget_images[".mainTableOwnerID"] = "";
$tdataget_images[".entityType"] = 0;
$tdataget_images[".connId"] = "u736239518tsundbat154412412";


$tdataget_images[".strOriginalTableName"] = "get_images";

	



$tdataget_images[".showAddInPopup"] = false;

$tdataget_images[".showEditInPopup"] = false;

$tdataget_images[".showViewInPopup"] = false;

$tdataget_images[".listAjax"] = false;
//	temporary
//$tdataget_images[".listAjax"] = false;

	$tdataget_images[".audit"] = false;

	$tdataget_images[".locking"] = false;


$pages = $tdataget_images[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataget_images[".edit"] = true;
	$tdataget_images[".afterEditAction"] = 1;
	$tdataget_images[".closePopupAfterEdit"] = 1;
	$tdataget_images[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataget_images[".add"] = true;
$tdataget_images[".afterAddAction"] = 1;
$tdataget_images[".closePopupAfterAdd"] = 1;
$tdataget_images[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataget_images[".list"] = true;
}



$tdataget_images[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataget_images[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataget_images[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataget_images[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataget_images[".printFriendly"] = true;
}



$tdataget_images[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataget_images[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataget_images[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataget_images[".isUseAjaxSuggest"] = true;



																																																			

$tdataget_images[".ajaxCodeSnippetAdded"] = false;

$tdataget_images[".buttonsAdded"] = false;

$tdataget_images[".addPageEvents"] = false;

// use timepicker for search panel
$tdataget_images[".isUseTimeForSearch"] = false;


$tdataget_images[".badgeColor"] = "CD853F";


$tdataget_images[".allSearchFields"] = array();
$tdataget_images[".filterFields"] = array();
$tdataget_images[".requiredSearchFields"] = array();

$tdataget_images[".googleLikeFields"] = array();
$tdataget_images[".googleLikeFields"][] = "t_delivery_feedback_id";
$tdataget_images[".googleLikeFields"][] = "imagesname";
$tdataget_images[".googleLikeFields"][] = "signname";



$tdataget_images[".tableType"] = "list";

$tdataget_images[".printerPageOrientation"] = 0;
$tdataget_images[".nPrinterPageScale"] = 100;

$tdataget_images[".nPrinterSplitRecords"] = 40;

$tdataget_images[".geocodingEnabled"] = false;










$tdataget_images[".pageSize"] = 20;

$tdataget_images[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataget_images[".strOrderBy"] = $tstrOrderBy;

$tdataget_images[".orderindexes"] = array();


$tdataget_images[".sqlHead"] = "SELECT t_delivery_feedback_id,  	imagesname,  	signname";
$tdataget_images[".sqlFrom"] = "FROM get_images";
$tdataget_images[".sqlWhereExpr"] = "";
$tdataget_images[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataget_images[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataget_images[".arrGroupsPerPage"] = $arrGPP;

$tdataget_images[".highlightSearchResults"] = true;

$tableKeysget_images = array();
$tdataget_images[".Keys"] = $tableKeysget_images;


$tdataget_images[".hideMobileList"] = array();




//	t_delivery_feedback_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_feedback_id";
	$fdata["GoodName"] = "t_delivery_feedback_id";
	$fdata["ownerTable"] = "get_images";
	$fdata["Label"] = GetFieldLabel("get_images","t_delivery_feedback_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_feedback_id";

		$fdata["sourceSingle"] = "t_delivery_feedback_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_feedback_id";

	
	
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


	$tdataget_images["t_delivery_feedback_id"] = $fdata;
		$tdataget_images[".searchableFields"][] = "t_delivery_feedback_id";
//	imagesname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "imagesname";
	$fdata["GoodName"] = "imagesname";
	$fdata["ownerTable"] = "get_images";
	$fdata["Label"] = GetFieldLabel("get_images","imagesname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "imagesname";

		$fdata["sourceSingle"] = "imagesname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "imagesname";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataget_images["imagesname"] = $fdata;
		$tdataget_images[".searchableFields"][] = "imagesname";
//	signname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "signname";
	$fdata["GoodName"] = "signname";
	$fdata["ownerTable"] = "get_images";
	$fdata["Label"] = GetFieldLabel("get_images","signname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "signname";

		$fdata["sourceSingle"] = "signname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "signname";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataget_images["signname"] = $fdata;
		$tdataget_images[".searchableFields"][] = "signname";


$tables_data["get_images"]=&$tdataget_images;
$field_labels["get_images"] = &$fieldLabelsget_images;
$fieldToolTips["get_images"] = &$fieldToolTipsget_images;
$placeHolders["get_images"] = &$placeHoldersget_images;
$page_titles["get_images"] = &$pageTitlesget_images;


changeTextControlsToDate( "get_images" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["get_images"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["get_images"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_get_images()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery_feedback_id,  	imagesname,  	signname";
$proto0["m_strFrom"] = "FROM get_images";
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
	"m_strName" => "t_delivery_feedback_id",
	"m_strTable" => "get_images",
	"m_srcTableName" => "get_images"
));

$proto6["m_sql"] = "t_delivery_feedback_id";
$proto6["m_srcTableName"] = "get_images";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "imagesname",
	"m_strTable" => "get_images",
	"m_srcTableName" => "get_images"
));

$proto8["m_sql"] = "imagesname";
$proto8["m_srcTableName"] = "get_images";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "signname",
	"m_strTable" => "get_images",
	"m_srcTableName" => "get_images"
));

$proto10["m_sql"] = "signname";
$proto10["m_srcTableName"] = "get_images";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "get_images";
$proto13["m_srcTableName"] = "get_images";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "t_delivery_feedback_id";
$proto13["m_columns"][] = "imagesname";
$proto13["m_columns"][] = "signname";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "get_images";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "get_images";
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
$proto0["m_srcTableName"]="get_images";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_get_images = createSqlQuery_get_images();


	
				;

			

$tdataget_images[".sqlquery"] = $queryData_get_images;



$tdataget_images[".hasEvents"] = false;

?>