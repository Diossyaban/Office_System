<?php
$tdatamembers = array();
$tdatamembers[".searchableFields"] = array();
$tdatamembers[".ShortName"] = "members";
$tdatamembers[".OwnerID"] = "";
$tdatamembers[".OriginalTable"] = "Tsun_uggroups";


$tdatamembers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatamembers[".originalPagesByType"] = $tdatamembers[".pagesByType"];
$tdatamembers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatamembers[".originalPages"] = $tdatamembers[".pages"];
$tdatamembers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatamembers[".originalDefaultPages"] = $tdatamembers[".defaultPages"];

//	field labels
$fieldLabelsmembers = array();
$fieldToolTipsmembers = array();
$pageTitlesmembers = array();
$placeHoldersmembers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmembers["English"] = array();
	$fieldToolTipsmembers["English"] = array();
	$placeHoldersmembers["English"] = array();
	$pageTitlesmembers["English"] = array();
	$fieldLabelsmembers["English"]["by_employee_username"] = "By Employee Username";
	$fieldToolTipsmembers["English"]["by_employee_username"] = "";
	$placeHoldersmembers["English"]["by_employee_username"] = "";
	$fieldLabelsmembers["English"]["by_employee_fullname"] = "By Employee Fullname";
	$fieldToolTipsmembers["English"]["by_employee_fullname"] = "";
	$placeHoldersmembers["English"]["by_employee_fullname"] = "";
	$fieldLabelsmembers["English"]["by_employee_email"] = "By Employee Email";
	$fieldToolTipsmembers["English"]["by_employee_email"] = "";
	$placeHoldersmembers["English"]["by_employee_email"] = "";
	$fieldLabelsmembers["English"]["userpic"] = "Userpic";
	$fieldToolTipsmembers["English"]["userpic"] = "";
	$placeHoldersmembers["English"]["userpic"] = "";
	if (count($fieldToolTipsmembers["English"]))
		$tdatamembers[".isUseToolTips"] = true;
}


	$tdatamembers[".NCSearch"] = true;



$tdatamembers[".shortTableName"] = "members";
$tdatamembers[".nSecOptions"] = 0;

$tdatamembers[".mainTableOwnerID"] = "";
$tdatamembers[".entityType"] = 1;
$tdatamembers[".connId"] = "u736239518tsundbat154412412";


$tdatamembers[".strOriginalTableName"] = "Tsun_uggroups";

	



$tdatamembers[".showAddInPopup"] = false;

$tdatamembers[".showEditInPopup"] = false;

$tdatamembers[".showViewInPopup"] = false;

$tdatamembers[".listAjax"] = false;
//	temporary
//$tdatamembers[".listAjax"] = false;

	$tdatamembers[".audit"] = false;

	$tdatamembers[".locking"] = false;


$pages = $tdatamembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamembers[".edit"] = true;
	$tdatamembers[".afterEditAction"] = 1;
	$tdatamembers[".closePopupAfterEdit"] = 1;
	$tdatamembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamembers[".add"] = true;
$tdatamembers[".afterAddAction"] = 1;
$tdatamembers[".closePopupAfterAdd"] = 1;
$tdatamembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamembers[".list"] = true;
}



$tdatamembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamembers[".printFriendly"] = true;
}



$tdatamembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamembers[".isUseAjaxSuggest"] = true;



																																																			

$tdatamembers[".ajaxCodeSnippetAdded"] = false;

$tdatamembers[".buttonsAdded"] = false;

$tdatamembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamembers[".isUseTimeForSearch"] = false;


$tdatamembers[".badgeColor"] = "6493EA";


$tdatamembers[".allSearchFields"] = array();
$tdatamembers[".filterFields"] = array();
$tdatamembers[".requiredSearchFields"] = array();

$tdatamembers[".googleLikeFields"] = array();
$tdatamembers[".googleLikeFields"][] = "by_employee_username";
$tdatamembers[".googleLikeFields"][] = "by_employee_fullname";
$tdatamembers[".googleLikeFields"][] = "by_employee_email";



$tdatamembers[".tableType"] = "list";

$tdatamembers[".printerPageOrientation"] = 0;
$tdatamembers[".nPrinterPageScale"] = 100;

$tdatamembers[".nPrinterSplitRecords"] = 40;

$tdatamembers[".geocodingEnabled"] = false;










$tdatamembers[".pageSize"] = 20;

$tdatamembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamembers[".strOrderBy"] = $tstrOrderBy;

$tdatamembers[".orderindexes"] = array();


$tdatamembers[".sqlHead"] = "select  distinct m_mapping_disposition.by_employee_username,  m_mapping_disposition.by_employee_fullname,  m_mapping_disposition.by_employee_email,  m_login.userpic";
$tdatamembers[".sqlFrom"] = "FROM m_mapping_disposition  INNER JOIN m_login ON m_mapping_disposition.by_employee_username = m_login.username";
$tdatamembers[".sqlWhereExpr"] = "(m_mapping_disposition.m_division_id in (SELECT  m_mapping_disposition.m_division_id    FROM m_mapping_disposition    WHERE m_mapping_disposition.by_employee_username = ':session.UserID'))";
$tdatamembers[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatamembers[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamembers[".arrGroupsPerPage"] = $arrGPP;

$tdatamembers[".highlightSearchResults"] = true;

$tableKeysmembers = array();
$tdatamembers[".Keys"] = $tableKeysmembers;


$tdatamembers[".hideMobileList"] = array();




//	by_employee_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "by_employee_username";
	$fdata["GoodName"] = "by_employee_username";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("members","by_employee_username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_disposition.by_employee_username";

	
	
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


	$tdatamembers["by_employee_username"] = $fdata;
		$tdatamembers[".searchableFields"][] = "by_employee_username";
//	by_employee_fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "by_employee_fullname";
	$fdata["GoodName"] = "by_employee_fullname";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("members","by_employee_fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_disposition.by_employee_fullname";

	
	
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


	$tdatamembers["by_employee_fullname"] = $fdata;
		$tdatamembers[".searchableFields"][] = "by_employee_fullname";
//	by_employee_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "by_employee_email";
	$fdata["GoodName"] = "by_employee_email";
	$fdata["ownerTable"] = "m_mapping_disposition";
	$fdata["Label"] = GetFieldLabel("members","by_employee_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "by_employee_email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_mapping_disposition.by_employee_email";

	
	
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


	$tdatamembers["by_employee_email"] = $fdata;
		$tdatamembers[".searchableFields"][] = "by_employee_email";
//	userpic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "userpic";
	$fdata["GoodName"] = "userpic";
	$fdata["ownerTable"] = "m_login";
	$fdata["Label"] = GetFieldLabel("members","userpic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "userpic";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_login.userpic";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files/employee/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 100;
	$vdata["ImageHeight"] = 100;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatamembers["userpic"] = $fdata;
	

$tables_data["members"]=&$tdatamembers;
$field_labels["members"] = &$fieldLabelsmembers;
$fieldToolTips["members"] = &$fieldToolTipsmembers;
$placeHolders["members"] = &$placeHoldersmembers;
$page_titles["members"] = &$pageTitlesmembers;


changeTextControlsToDate( "members" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["members"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["members"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_members()
{
$proto0=array();
$proto0["m_strHead"] = "select  distinct";
$proto0["m_strFieldList"] = "m_mapping_disposition.by_employee_username,  m_mapping_disposition.by_employee_fullname,  m_mapping_disposition.by_employee_email,  m_login.userpic";
$proto0["m_strFrom"] = "FROM m_mapping_disposition  INNER JOIN m_login ON m_mapping_disposition.by_employee_username = m_login.username";
$proto0["m_strWhere"] = "(m_mapping_disposition.m_division_id in (SELECT  m_mapping_disposition.m_division_id    FROM m_mapping_disposition    WHERE m_mapping_disposition.by_employee_username = ':session.UserID'))";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "m_mapping_disposition.m_division_id in (SELECT  m_mapping_disposition.m_division_id    FROM m_mapping_disposition    WHERE m_mapping_disposition.by_employee_username = ':session.UserID')";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_division_id",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "members"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "in (SELECT  m_mapping_disposition.m_division_id    FROM m_mapping_disposition    WHERE m_mapping_disposition.by_employee_username = ':session.UserID')";
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
	"m_strName" => "by_employee_username",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "members"
));

$proto6["m_sql"] = "m_mapping_disposition.by_employee_username";
$proto6["m_srcTableName"] = "members";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "by_employee_fullname",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "members"
));

$proto8["m_sql"] = "m_mapping_disposition.by_employee_fullname";
$proto8["m_srcTableName"] = "members";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "by_employee_email",
	"m_strTable" => "m_mapping_disposition",
	"m_srcTableName" => "members"
));

$proto10["m_sql"] = "m_mapping_disposition.by_employee_email";
$proto10["m_srcTableName"] = "members";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "userpic",
	"m_strTable" => "m_login",
	"m_srcTableName" => "members"
));

$proto12["m_sql"] = "m_login.userpic";
$proto12["m_srcTableName"] = "members";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "m_mapping_disposition";
$proto15["m_srcTableName"] = "members";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "m_mapping_disposition_id";
$proto15["m_columns"][] = "m_division_id";
$proto15["m_columns"][] = "m_work_unit_id";
$proto15["m_columns"][] = "pic_employee_username";
$proto15["m_columns"][] = "pic_employee_id";
$proto15["m_columns"][] = "pic_employee_fullname";
$proto15["m_columns"][] = "pic_employee_level";
$proto15["m_columns"][] = "pic_employee_email";
$proto15["m_columns"][] = "by_employee_username";
$proto15["m_columns"][] = "by_employee_id";
$proto15["m_columns"][] = "by_employee_fullname";
$proto15["m_columns"][] = "by_employee_level";
$proto15["m_columns"][] = "by_employee_email";
$proto15["m_columns"][] = "m_mapping_disposition_fl";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "m_mapping_disposition";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "members";
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
$proto19["m_strName"] = "m_login";
$proto19["m_srcTableName"] = "members";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "username";
$proto19["m_columns"][] = "password";
$proto19["m_columns"][] = "fullname";
$proto19["m_columns"][] = "email";
$proto19["m_columns"][] = "isactive";
$proto19["m_columns"][] = "add_user";
$proto19["m_columns"][] = "add_date";
$proto19["m_columns"][] = "edit_user";
$proto19["m_columns"][] = "edit_date";
$proto19["m_columns"][] = "ext_security_id";
$proto19["m_columns"][] = "m_employee_id";
$proto19["m_columns"][] = "last_login_date";
$proto19["m_columns"][] = "apikey";
$proto19["m_columns"][] = "is_active";
$proto19["m_columns"][] = "is_delete";
$proto19["m_columns"][] = "deleted_date";
$proto19["m_columns"][] = "created_date";
$proto19["m_columns"][] = "created_by";
$proto19["m_columns"][] = "last_update_by";
$proto19["m_columns"][] = "last_update_date";
$proto19["m_columns"][] = "userpic";
$proto19["m_columns"][] = "url_calender";
$proto19["m_columns"][] = "two_factor";
$proto19["m_columns"][] = "totp";
$proto19["m_columns"][] = "reset_token";
$proto19["m_columns"][] = "reset_date";
$proto19["m_columns"][] = "phone";
$proto19["m_columns"][] = "login_type";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "INNER JOIN m_login ON m_mapping_disposition.by_employee_username = m_login.username";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "members";
$proto20=array();
$proto20["m_sql"] = "m_login.username = m_mapping_disposition.by_employee_username";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "m_login",
	"m_srcTableName" => "members"
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "= m_mapping_disposition.by_employee_username";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="members";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_members = createSqlQuery_members();


	
				;

				

$tdatamembers[".sqlquery"] = $queryData_members;



$tdatamembers[".hasEvents"] = false;

?>