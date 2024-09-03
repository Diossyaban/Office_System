<?php
$tdatasiganture = array();
$tdatasiganture[".searchableFields"] = array();
$tdatasiganture[".ShortName"] = "siganture";
$tdatasiganture[".OwnerID"] = "";
$tdatasiganture[".OriginalTable"] = "t_letter";


$tdatasiganture[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasiganture[".originalPagesByType"] = $tdatasiganture[".pagesByType"];
$tdatasiganture[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasiganture[".originalPages"] = $tdatasiganture[".pages"];
$tdatasiganture[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasiganture[".originalDefaultPages"] = $tdatasiganture[".defaultPages"];

//	field labels
$fieldLabelssiganture = array();
$fieldToolTipssiganture = array();
$pageTitlessiganture = array();
$placeHolderssiganture = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssiganture["English"] = array();
	$fieldToolTipssiganture["English"] = array();
	$placeHolderssiganture["English"] = array();
	$pageTitlessiganture["English"] = array();
	$fieldLabelssiganture["English"]["m_template_id"] = "M Template Id";
	$fieldToolTipssiganture["English"]["m_template_id"] = "";
	$placeHolderssiganture["English"]["m_template_id"] = "";
	$fieldLabelssiganture["English"]["m_position_siganture_id"] = "M Position Siganture Id";
	$fieldToolTipssiganture["English"]["m_position_siganture_id"] = "";
	$placeHolderssiganture["English"]["m_position_siganture_id"] = "";
	$fieldLabelssiganture["English"]["m_position_siganture_name"] = "M Position Siganture Name";
	$fieldToolTipssiganture["English"]["m_position_siganture_name"] = "";
	$placeHolderssiganture["English"]["m_position_siganture_name"] = "";
	if (count($fieldToolTipssiganture["English"]))
		$tdatasiganture[".isUseToolTips"] = true;
}


	$tdatasiganture[".NCSearch"] = true;



$tdatasiganture[".shortTableName"] = "siganture";
$tdatasiganture[".nSecOptions"] = 0;

$tdatasiganture[".mainTableOwnerID"] = "";
$tdatasiganture[".entityType"] = 1;
$tdatasiganture[".connId"] = "u736239518tsundbat154412412";


$tdatasiganture[".strOriginalTableName"] = "t_letter";

	



$tdatasiganture[".showAddInPopup"] = false;

$tdatasiganture[".showEditInPopup"] = false;

$tdatasiganture[".showViewInPopup"] = false;

$tdatasiganture[".listAjax"] = false;
//	temporary
//$tdatasiganture[".listAjax"] = false;

	$tdatasiganture[".audit"] = true;

	$tdatasiganture[".locking"] = false;


$pages = $tdatasiganture[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasiganture[".edit"] = true;
	$tdatasiganture[".afterEditAction"] = 1;
	$tdatasiganture[".closePopupAfterEdit"] = 1;
	$tdatasiganture[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasiganture[".add"] = true;
$tdatasiganture[".afterAddAction"] = 1;
$tdatasiganture[".closePopupAfterAdd"] = 1;
$tdatasiganture[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasiganture[".list"] = true;
}



$tdatasiganture[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasiganture[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasiganture[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasiganture[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasiganture[".printFriendly"] = true;
}



$tdatasiganture[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasiganture[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasiganture[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasiganture[".isUseAjaxSuggest"] = true;



																																																			

$tdatasiganture[".ajaxCodeSnippetAdded"] = false;

$tdatasiganture[".buttonsAdded"] = false;

$tdatasiganture[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasiganture[".isUseTimeForSearch"] = false;


$tdatasiganture[".badgeColor"] = "1E90FF";


$tdatasiganture[".allSearchFields"] = array();
$tdatasiganture[".filterFields"] = array();
$tdatasiganture[".requiredSearchFields"] = array();

$tdatasiganture[".googleLikeFields"] = array();
$tdatasiganture[".googleLikeFields"][] = "m_position_siganture_id";
$tdatasiganture[".googleLikeFields"][] = "m_position_siganture_name";
$tdatasiganture[".googleLikeFields"][] = "m_template_id";



$tdatasiganture[".tableType"] = "list";

$tdatasiganture[".printerPageOrientation"] = 0;
$tdatasiganture[".nPrinterPageScale"] = 100;

$tdatasiganture[".nPrinterSplitRecords"] = 40;

$tdatasiganture[".geocodingEnabled"] = false;










$tdatasiganture[".pageSize"] = 20;

$tdatasiganture[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasiganture[".strOrderBy"] = $tstrOrderBy;

$tdatasiganture[".orderindexes"] = array();


$tdatasiganture[".sqlHead"] = "SELECT DISTINCT m_position_siganture.m_position_siganture_id,  m_position_siganture.m_position_siganture_name,  m_mapping_letter.m_template_id";
$tdatasiganture[".sqlFrom"] = "FROM m_mapping_letter  INNER JOIN m_position_siganture ON m_mapping_letter.m_signature_id = m_position_siganture.m_position_siganture_id";
$tdatasiganture[".sqlWhereExpr"] = "";
$tdatasiganture[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasiganture[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasiganture[".arrGroupsPerPage"] = $arrGPP;

$tdatasiganture[".highlightSearchResults"] = true;

$tableKeyssiganture = array();
$tdatasiganture[".Keys"] = $tableKeyssiganture;


$tdatasiganture[".hideMobileList"] = array();




//	m_position_siganture_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_position_siganture_id";
	$fdata["GoodName"] = "m_position_siganture_id";
	$fdata["ownerTable"] = "m_position_siganture";
	$fdata["Label"] = GetFieldLabel("Siganture","m_position_siganture_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_position_siganture_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_position_siganture.m_position_siganture_id";

	
	
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


	$tdatasiganture["m_position_siganture_id"] = $fdata;
		$tdatasiganture[".searchableFields"][] = "m_position_siganture_id";
//	m_position_siganture_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_position_siganture_name";
	$fdata["GoodName"] = "m_position_siganture_name";
	$fdata["ownerTable"] = "m_position_siganture";
	$fdata["Label"] = GetFieldLabel("Siganture","m_position_siganture_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_position_siganture_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_position_siganture.m_position_siganture_name";

	
	
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


	$tdatasiganture["m_position_siganture_name"] = $fdata;
		$tdatasiganture[".searchableFields"][] = "m_position_siganture_name";
//	m_template_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_template_id";
	$fdata["GoodName"] = "m_template_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("Siganture","m_template_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_template_id";

		$fdata["sourceSingle"] = "m_template_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_letter.m_template_id";

	
	
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


	$tdatasiganture["m_template_id"] = $fdata;
		$tdatasiganture[".searchableFields"][] = "m_template_id";


$tables_data["Siganture"]=&$tdatasiganture;
$field_labels["Siganture"] = &$fieldLabelssiganture;
$fieldToolTips["Siganture"] = &$fieldToolTipssiganture;
$placeHolders["Siganture"] = &$placeHolderssiganture;
$page_titles["Siganture"] = &$pageTitlessiganture;


changeTextControlsToDate( "Siganture" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Siganture"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Siganture"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_siganture()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "m_position_siganture.m_position_siganture_id,  m_position_siganture.m_position_siganture_name,  m_mapping_letter.m_template_id";
$proto0["m_strFrom"] = "FROM m_mapping_letter  INNER JOIN m_position_siganture ON m_mapping_letter.m_signature_id = m_position_siganture.m_position_siganture_id";
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
	"m_strName" => "m_position_siganture_id",
	"m_strTable" => "m_position_siganture",
	"m_srcTableName" => "Siganture"
));

$proto6["m_sql"] = "m_position_siganture.m_position_siganture_id";
$proto6["m_srcTableName"] = "Siganture";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_position_siganture_name",
	"m_strTable" => "m_position_siganture",
	"m_srcTableName" => "Siganture"
));

$proto8["m_sql"] = "m_position_siganture.m_position_siganture_name";
$proto8["m_srcTableName"] = "Siganture";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_template_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "Siganture"
));

$proto10["m_sql"] = "m_mapping_letter.m_template_id";
$proto10["m_srcTableName"] = "Siganture";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "m_mapping_letter";
$proto13["m_srcTableName"] = "Siganture";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "m_category_id";
$proto13["m_columns"][] = "m_type_id";
$proto13["m_columns"][] = "m_division_id";
$proto13["m_columns"][] = "m_work_unit_id";
$proto13["m_columns"][] = "m_template_id";
$proto13["m_columns"][] = "is_active";
$proto13["m_columns"][] = "m_language_id";
$proto13["m_columns"][] = "deleted_date";
$proto13["m_columns"][] = "created_date";
$proto13["m_columns"][] = "created_by";
$proto13["m_columns"][] = "last_update_by";
$proto13["m_columns"][] = "last_update_date";
$proto13["m_columns"][] = "m_signature_id";
$proto13["m_columns"][] = "template_file";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "m_mapping_letter";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "Siganture";
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
												$proto16=array();
$proto16["m_link"] = "SQLL_INNERJOIN";
			$proto17=array();
$proto17["m_strName"] = "m_position_siganture";
$proto17["m_srcTableName"] = "Siganture";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "m_position_siganture_id";
$proto17["m_columns"][] = "m_position_siganture_name";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "INNER JOIN m_position_siganture ON m_mapping_letter.m_signature_id = m_position_siganture.m_position_siganture_id";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "Siganture";
$proto18=array();
$proto18["m_sql"] = "m_position_siganture.m_position_siganture_id = m_mapping_letter.m_signature_id";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_position_siganture_id",
	"m_strTable" => "m_position_siganture",
	"m_srcTableName" => "Siganture"
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "= m_mapping_letter.m_signature_id";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Siganture";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_siganture = createSqlQuery_siganture();


	
				;

			

$tdatasiganture[".sqlquery"] = $queryData_siganture;



$tdatasiganture[".hasEvents"] = false;

?>