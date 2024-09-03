<?php
$tdatatemplate = array();
$tdatatemplate[".searchableFields"] = array();
$tdatatemplate[".ShortName"] = "template";
$tdatatemplate[".OwnerID"] = "";
$tdatatemplate[".OriginalTable"] = "m_asuransi";


$tdatatemplate[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatatemplate[".originalPagesByType"] = $tdatatemplate[".pagesByType"];
$tdatatemplate[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatatemplate[".originalPages"] = $tdatatemplate[".pages"];
$tdatatemplate[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatatemplate[".originalDefaultPages"] = $tdatatemplate[".defaultPages"];

//	field labels
$fieldLabelstemplate = array();
$fieldToolTipstemplate = array();
$pageTitlestemplate = array();
$placeHolderstemplate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstemplate["English"] = array();
	$fieldToolTipstemplate["English"] = array();
	$placeHolderstemplate["English"] = array();
	$pageTitlestemplate["English"] = array();
	$fieldLabelstemplate["English"]["m_template_id"] = "M Template Id";
	$fieldToolTipstemplate["English"]["m_template_id"] = "";
	$placeHolderstemplate["English"]["m_template_id"] = "";
	$fieldLabelstemplate["English"]["m_type_id"] = "M Type Id";
	$fieldToolTipstemplate["English"]["m_type_id"] = "";
	$placeHolderstemplate["English"]["m_type_id"] = "";
	$fieldLabelstemplate["English"]["template_name"] = "Template Name";
	$fieldToolTipstemplate["English"]["template_name"] = "";
	$placeHolderstemplate["English"]["template_name"] = "";
	$fieldLabelstemplate["English"]["m_letter_pic"] = "M Letter Pic";
	$fieldToolTipstemplate["English"]["m_letter_pic"] = "";
	$placeHolderstemplate["English"]["m_letter_pic"] = "";
	if (count($fieldToolTipstemplate["English"]))
		$tdatatemplate[".isUseToolTips"] = true;
}


	$tdatatemplate[".NCSearch"] = true;


	$tdatatemplate[".scrollGridBody"] = true;

$tdatatemplate[".shortTableName"] = "template";
$tdatatemplate[".nSecOptions"] = 0;

$tdatatemplate[".mainTableOwnerID"] = "";
$tdatatemplate[".entityType"] = 1;
$tdatatemplate[".connId"] = "u736239518tsundbat154412412";


$tdatatemplate[".strOriginalTableName"] = "m_asuransi";

	



$tdatatemplate[".showAddInPopup"] = false;

$tdatatemplate[".showEditInPopup"] = false;

$tdatatemplate[".showViewInPopup"] = false;

$tdatatemplate[".listAjax"] = false;
//	temporary
//$tdatatemplate[".listAjax"] = false;

	$tdatatemplate[".audit"] = true;

	$tdatatemplate[".locking"] = false;


$pages = $tdatatemplate[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatemplate[".edit"] = true;
	$tdatatemplate[".afterEditAction"] = 1;
	$tdatatemplate[".closePopupAfterEdit"] = 1;
	$tdatatemplate[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatemplate[".add"] = true;
$tdatatemplate[".afterAddAction"] = 1;
$tdatatemplate[".closePopupAfterAdd"] = 1;
$tdatatemplate[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatemplate[".list"] = true;
}



$tdatatemplate[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatemplate[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatemplate[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatemplate[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatemplate[".printFriendly"] = true;
}



$tdatatemplate[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatemplate[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatemplate[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatemplate[".isUseAjaxSuggest"] = true;



																																																			

$tdatatemplate[".ajaxCodeSnippetAdded"] = false;

$tdatatemplate[".buttonsAdded"] = false;

$tdatatemplate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatemplate[".isUseTimeForSearch"] = false;


$tdatatemplate[".badgeColor"] = "D2AF80";


$tdatatemplate[".allSearchFields"] = array();
$tdatatemplate[".filterFields"] = array();
$tdatatemplate[".requiredSearchFields"] = array();

$tdatatemplate[".googleLikeFields"] = array();
$tdatatemplate[".googleLikeFields"][] = "m_template_id";
$tdatatemplate[".googleLikeFields"][] = "m_type_id";
$tdatatemplate[".googleLikeFields"][] = "template_name";
$tdatatemplate[".googleLikeFields"][] = "m_letter_pic";



$tdatatemplate[".tableType"] = "list";

$tdatatemplate[".printerPageOrientation"] = 0;
$tdatatemplate[".nPrinterPageScale"] = 100;

$tdatatemplate[".nPrinterSplitRecords"] = 40;

$tdatatemplate[".geocodingEnabled"] = false;










$tdatatemplate[".pageSize"] = 20;

$tdatatemplate[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatemplate[".strOrderBy"] = $tstrOrderBy;

$tdatatemplate[".orderindexes"] = array();


$tdatatemplate[".sqlHead"] = "SELECT DISTINCT m_mapping_letter.m_template_id,  m_mapping_letter.m_type_id,  m_template.template_name,  m_mapping_letter_pic.m_letter_pic";
$tdatatemplate[".sqlFrom"] = "FROM m_mapping_letter  INNER JOIN m_template ON m_mapping_letter.m_template_id = m_template.m_template_id  INNER JOIN m_mapping_letter_pic ON m_mapping_letter.id = m_mapping_letter_pic.m_mapping_letter_id";
$tdatatemplate[".sqlWhereExpr"] = "";
$tdatatemplate[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatemplate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatemplate[".arrGroupsPerPage"] = $arrGPP;

$tdatatemplate[".highlightSearchResults"] = true;

$tableKeystemplate = array();
$tdatatemplate[".Keys"] = $tableKeystemplate;


$tdatatemplate[".hideMobileList"] = array();




//	m_template_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_template_id";
	$fdata["GoodName"] = "m_template_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("template","m_template_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_template_id";

	
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


	$tdatatemplate["m_template_id"] = $fdata;
		$tdatatemplate[".searchableFields"][] = "m_template_id";
//	m_type_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_type_id";
	$fdata["GoodName"] = "m_type_id";
	$fdata["ownerTable"] = "m_mapping_letter";
	$fdata["Label"] = GetFieldLabel("template","m_type_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_type_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_letter.m_type_id";

	
	
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


	$tdatatemplate["m_type_id"] = $fdata;
		$tdatatemplate[".searchableFields"][] = "m_type_id";
//	template_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "template_name";
	$fdata["GoodName"] = "template_name";
	$fdata["ownerTable"] = "m_template";
	$fdata["Label"] = GetFieldLabel("template","template_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "template_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_template.template_name";

	
	
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


	$tdatatemplate["template_name"] = $fdata;
		$tdatatemplate[".searchableFields"][] = "template_name";
//	m_letter_pic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_letter_pic";
	$fdata["GoodName"] = "m_letter_pic";
	$fdata["ownerTable"] = "m_mapping_letter_pic";
	$fdata["Label"] = GetFieldLabel("template","m_letter_pic");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_letter_pic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_letter_pic.m_letter_pic";

	
	
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


	$tdatatemplate["m_letter_pic"] = $fdata;
		$tdatatemplate[".searchableFields"][] = "m_letter_pic";


$tables_data["template"]=&$tdatatemplate;
$field_labels["template"] = &$fieldLabelstemplate;
$fieldToolTips["template"] = &$fieldToolTipstemplate;
$placeHolders["template"] = &$placeHolderstemplate;
$page_titles["template"] = &$pageTitlestemplate;


changeTextControlsToDate( "template" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["template"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["template"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_template()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT DISTINCT";
$proto0["m_strFieldList"] = "m_mapping_letter.m_template_id,  m_mapping_letter.m_type_id,  m_template.template_name,  m_mapping_letter_pic.m_letter_pic";
$proto0["m_strFrom"] = "FROM m_mapping_letter  INNER JOIN m_template ON m_mapping_letter.m_template_id = m_template.m_template_id  INNER JOIN m_mapping_letter_pic ON m_mapping_letter.id = m_mapping_letter_pic.m_mapping_letter_id";
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
	"m_strName" => "m_template_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "template"
));

$proto6["m_sql"] = "m_mapping_letter.m_template_id";
$proto6["m_srcTableName"] = "template";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_type_id",
	"m_strTable" => "m_mapping_letter",
	"m_srcTableName" => "template"
));

$proto8["m_sql"] = "m_mapping_letter.m_type_id";
$proto8["m_srcTableName"] = "template";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "template_name",
	"m_strTable" => "m_template",
	"m_srcTableName" => "template"
));

$proto10["m_sql"] = "m_template.template_name";
$proto10["m_srcTableName"] = "template";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_letter_pic",
	"m_strTable" => "m_mapping_letter_pic",
	"m_srcTableName" => "template"
));

$proto12["m_sql"] = "m_mapping_letter_pic.m_letter_pic";
$proto12["m_srcTableName"] = "template";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_mapping_letter";
$proto15["m_srcTableName"] = "template";
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
$proto14["m_srcTableName"] = "template";
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
$proto19["m_strName"] = "m_template";
$proto19["m_srcTableName"] = "template";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "m_template_id";
$proto19["m_columns"][] = "m_type_id";
$proto19["m_columns"][] = "template_name";
$proto19["m_columns"][] = "template_master";
$proto19["m_columns"][] = "template_language";
$proto19["m_columns"][] = "m_template_fl";
$proto19["m_columns"][] = "template_signature";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN m_template ON m_mapping_letter.m_template_id = m_template.m_template_id";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "template";
$proto20=array();
$proto20["m_sql"] = "m_template.m_template_id = m_mapping_letter.m_template_id";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_template_id",
	"m_strTable" => "m_template",
	"m_srcTableName" => "template"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= m_mapping_letter.m_template_id";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
												$proto22=array();
$proto22["m_link"] = "SQLL_INNERJOIN";
			$proto23=array();
$proto23["m_strName"] = "m_mapping_letter_pic";
$proto23["m_srcTableName"] = "template";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "m_mapping_pic_id";
$proto23["m_columns"][] = "m_letter_pic";
$proto23["m_columns"][] = "m_mapping_letter_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "INNER JOIN m_mapping_letter_pic ON m_mapping_letter.id = m_mapping_letter_pic.m_mapping_letter_id";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "template";
$proto24=array();
$proto24["m_sql"] = "m_mapping_letter_pic.m_mapping_letter_id = m_mapping_letter.id";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_mapping_letter_id",
	"m_strTable" => "m_mapping_letter_pic",
	"m_srcTableName" => "template"
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "= m_mapping_letter.id";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="template";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_template = createSqlQuery_template();


	
				;

				

$tdatatemplate[".sqlquery"] = $queryData_template;



include_once(getabspath("include/template_events.php"));
$tdatatemplate[".hasEvents"] = true;

?>