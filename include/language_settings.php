<?php
$tdatalanguage = array();
$tdatalanguage[".searchableFields"] = array();
$tdatalanguage[".ShortName"] = "language";
$tdatalanguage[".OwnerID"] = "";
$tdatalanguage[".OriginalTable"] = "t_letter";


$tdatalanguage[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatalanguage[".originalPagesByType"] = $tdatalanguage[".pagesByType"];
$tdatalanguage[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatalanguage[".originalPages"] = $tdatalanguage[".pages"];
$tdatalanguage[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatalanguage[".originalDefaultPages"] = $tdatalanguage[".defaultPages"];

//	field labels
$fieldLabelslanguage = array();
$fieldToolTipslanguage = array();
$pageTitleslanguage = array();
$placeHolderslanguage = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslanguage["English"] = array();
	$fieldToolTipslanguage["English"] = array();
	$placeHolderslanguage["English"] = array();
	$pageTitleslanguage["English"] = array();
	$fieldLabelslanguage["English"]["m_template_id"] = "M Template Id";
	$fieldToolTipslanguage["English"]["m_template_id"] = "";
	$placeHolderslanguage["English"]["m_template_id"] = "";
	$fieldLabelslanguage["English"]["m_language_code"] = "M Language Code";
	$fieldToolTipslanguage["English"]["m_language_code"] = "";
	$placeHolderslanguage["English"]["m_language_code"] = "";
	$fieldLabelslanguage["English"]["m_language_id"] = "M Language Id";
	$fieldToolTipslanguage["English"]["m_language_id"] = "";
	$placeHolderslanguage["English"]["m_language_id"] = "";
	$fieldLabelslanguage["English"]["m_language_name"] = "M Language Name";
	$fieldToolTipslanguage["English"]["m_language_name"] = "";
	$placeHolderslanguage["English"]["m_language_name"] = "";
	if (count($fieldToolTipslanguage["English"]))
		$tdatalanguage[".isUseToolTips"] = true;
}


	$tdatalanguage[".NCSearch"] = true;



$tdatalanguage[".shortTableName"] = "language";
$tdatalanguage[".nSecOptions"] = 0;

$tdatalanguage[".mainTableOwnerID"] = "";
$tdatalanguage[".entityType"] = 1;
$tdatalanguage[".connId"] = "u736239518tsundbat154412412";


$tdatalanguage[".strOriginalTableName"] = "t_letter";

	



$tdatalanguage[".showAddInPopup"] = false;

$tdatalanguage[".showEditInPopup"] = false;

$tdatalanguage[".showViewInPopup"] = false;

$tdatalanguage[".listAjax"] = false;
//	temporary
//$tdatalanguage[".listAjax"] = false;

	$tdatalanguage[".audit"] = true;

	$tdatalanguage[".locking"] = false;


$pages = $tdatalanguage[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalanguage[".edit"] = true;
	$tdatalanguage[".afterEditAction"] = 1;
	$tdatalanguage[".closePopupAfterEdit"] = 1;
	$tdatalanguage[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalanguage[".add"] = true;
$tdatalanguage[".afterAddAction"] = 1;
$tdatalanguage[".closePopupAfterAdd"] = 1;
$tdatalanguage[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalanguage[".list"] = true;
}



$tdatalanguage[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalanguage[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalanguage[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalanguage[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalanguage[".printFriendly"] = true;
}



$tdatalanguage[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalanguage[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalanguage[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalanguage[".isUseAjaxSuggest"] = true;



																																																			

$tdatalanguage[".ajaxCodeSnippetAdded"] = false;

$tdatalanguage[".buttonsAdded"] = false;

$tdatalanguage[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalanguage[".isUseTimeForSearch"] = false;


$tdatalanguage[".badgeColor"] = "7B68EE";


$tdatalanguage[".allSearchFields"] = array();
$tdatalanguage[".filterFields"] = array();
$tdatalanguage[".requiredSearchFields"] = array();

$tdatalanguage[".googleLikeFields"] = array();
$tdatalanguage[".googleLikeFields"][] = "m_language_code";
$tdatalanguage[".googleLikeFields"][] = "m_language_id";
$tdatalanguage[".googleLikeFields"][] = "m_template_id";
$tdatalanguage[".googleLikeFields"][] = "m_language_name";



$tdatalanguage[".tableType"] = "list";

$tdatalanguage[".printerPageOrientation"] = 0;
$tdatalanguage[".nPrinterPageScale"] = 100;

$tdatalanguage[".nPrinterSplitRecords"] = 40;

$tdatalanguage[".geocodingEnabled"] = false;










$tdatalanguage[".pageSize"] = 20;

$tdatalanguage[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalanguage[".strOrderBy"] = $tstrOrderBy;

$tdatalanguage[".orderindexes"] = array();


$tdatalanguage[".sqlHead"] = "SELECT DISTINCT m_language.m_language_code,  m_language.m_language_id,  m_mapping_letter.m_template_id,  m_language.m_language_name";
$tdatalanguage[".sqlFrom"] = "FROM m_mapping_letter  INNER JOIN m_language ON m_mapping_letter.m_language_id = m_language.m_language_id";
$tdatalanguage[".sqlWhereExpr"] = "";
$tdatalanguage[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalanguage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalanguage[".arrGroupsPerPage"] = $arrGPP;

$tdatalanguage[".highlightSearchResults"] = true;

$tableKeyslanguage = array();
$tdatalanguage[".Keys"] = $tableKeyslanguage;


$tdatalanguage[".hideMobileList"] = array();




//	m_language_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_language_code";
	$fdata["GoodName"] = "m_language_code";
	$fdata["ownerTable"] = "m_language";
	$fdata["Label"] = GetFieldLabel("Language","m_language_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_language_code";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_language.m_language_code";

	
	
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


	$tdatalanguage["m_language_code"] = $fdata;
		$tdatalanguage[".searchableFields"][] = "m_language_code";
//	m_language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_language_id";
	$fdata["GoodName"] = "m_language_id";
	$fdata["ownerTable"] = "m_language";
	$fdata["Label"] = GetFieldLabel("Language","m_language_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_language_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_language.m_language_id";

	
	
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


	$tdatalanguage["m_language_id"] = $fdata;
		$tdatalanguage[".searchableFields"][] = "m_language_id";
//	m_template_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_template_id";
	$fdata["GoodName"] = "m_template_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("Language","m_template_id");
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


	$tdatalanguage["m_template_id"] = $fdata;
		$tdatalanguage[".searchableFields"][] = "m_template_id";
//	m_language_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_language_name";
	$fdata["GoodName"] = "m_language_name";
	$fdata["ownerTable"] = "m_language";
	$fdata["Label"] = GetFieldLabel("Language","m_language_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_language_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_language.m_language_name";

	
	
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


	$tdatalanguage["m_language_name"] = $fdata;
		$tdatalanguage[".searchableFields"][] = "m_language_name";


$tables_data["Language"]=&$tdatalanguage;
$field_labels["Language"] = &$fieldLabelslanguage;
$fieldToolTips["Language"] = &$fieldToolTipslanguage;
$placeHolders["Language"] = &$placeHolderslanguage;
$page_titles["Language"] = &$pageTitleslanguage;


changeTextControlsToDate( "Language" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Language"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Language"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_language()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "m_language.m_language_code,  m_language.m_language_id,  m_mapping_letter.m_template_id,  m_language.m_language_name";
$proto0["m_strFrom"] = "FROM m_mapping_letter  INNER JOIN m_language ON m_mapping_letter.m_language_id = m_language.m_language_id";
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
	"m_strName" => "m_language_code",
	"m_strTable" => "m_language",
	"m_srcTableName" => "Language"
));

$proto6["m_sql"] = "m_language.m_language_code";
$proto6["m_srcTableName"] = "Language";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_language_id",
	"m_strTable" => "m_language",
	"m_srcTableName" => "Language"
));

$proto8["m_sql"] = "m_language.m_language_id";
$proto8["m_srcTableName"] = "Language";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_template_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "Language"
));

$proto10["m_sql"] = "m_mapping_letter.m_template_id";
$proto10["m_srcTableName"] = "Language";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_language_name",
	"m_strTable" => "m_language",
	"m_srcTableName" => "Language"
));

$proto12["m_sql"] = "m_language.m_language_name";
$proto12["m_srcTableName"] = "Language";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_mapping_letter";
$proto15["m_srcTableName"] = "Language";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "m_category_id";
$proto15["m_columns"][] = "m_type_id";
$proto15["m_columns"][] = "m_division_id";
$proto15["m_columns"][] = "m_work_unit_id";
$proto15["m_columns"][] = "m_template_id";
$proto15["m_columns"][] = "is_active";
$proto15["m_columns"][] = "m_language_id";
$proto15["m_columns"][] = "deleted_date";
$proto15["m_columns"][] = "created_date";
$proto15["m_columns"][] = "created_by";
$proto15["m_columns"][] = "last_update_by";
$proto15["m_columns"][] = "last_update_date";
$proto15["m_columns"][] = "m_signature_id";
$proto15["m_columns"][] = "template_file";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_mapping_letter";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "Language";
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
												$proto18=array();
$proto18["m_link"] = "SQLL_INNERJOIN";
			$proto19=array();
$proto19["m_strName"] = "m_language";
$proto19["m_srcTableName"] = "Language";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "m_language_id";
$proto19["m_columns"][] = "m_language_code";
$proto19["m_columns"][] = "m_language_name";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN m_language ON m_mapping_letter.m_language_id = m_language.m_language_id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "Language";
$proto20=array();
$proto20["m_sql"] = "m_language.m_language_id = m_mapping_letter.m_language_id";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_language_id",
	"m_strTable" => "m_language",
	"m_srcTableName" => "Language"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= m_mapping_letter.m_language_id";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Language";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_language = createSqlQuery_language();


	
				;

				

$tdatalanguage[".sqlquery"] = $queryData_language;



$tdatalanguage[".hasEvents"] = false;

?>