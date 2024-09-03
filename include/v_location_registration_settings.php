<?php
$tdatav_location_registration = array();
$tdatav_location_registration[".searchableFields"] = array();
$tdatav_location_registration[".ShortName"] = "v_location_registration";
$tdatav_location_registration[".OwnerID"] = "";
$tdatav_location_registration[".OriginalTable"] = "t_register";


$tdatav_location_registration[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatav_location_registration[".originalPagesByType"] = $tdatav_location_registration[".pagesByType"];
$tdatav_location_registration[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatav_location_registration[".originalPages"] = $tdatav_location_registration[".pages"];
$tdatav_location_registration[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatav_location_registration[".originalDefaultPages"] = $tdatav_location_registration[".defaultPages"];

//	field labels
$fieldLabelsv_location_registration = array();
$fieldToolTipsv_location_registration = array();
$pageTitlesv_location_registration = array();
$placeHoldersv_location_registration = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsv_location_registration["English"] = array();
	$fieldToolTipsv_location_registration["English"] = array();
	$placeHoldersv_location_registration["English"] = array();
	$pageTitlesv_location_registration["English"] = array();
	$fieldLabelsv_location_registration["English"]["username"] = "Username";
	$fieldToolTipsv_location_registration["English"]["username"] = "";
	$placeHoldersv_location_registration["English"]["username"] = "";
	$fieldLabelsv_location_registration["English"]["m_location_name"] = "M Location Name";
	$fieldToolTipsv_location_registration["English"]["m_location_name"] = "";
	$placeHoldersv_location_registration["English"]["m_location_name"] = "";
	$fieldLabelsv_location_registration["English"]["m_location_address"] = "M Location Address";
	$fieldToolTipsv_location_registration["English"]["m_location_address"] = "";
	$placeHoldersv_location_registration["English"]["m_location_address"] = "";
	$fieldLabelsv_location_registration["English"]["m_location_kabupaten"] = "M Location Kabupaten";
	$fieldToolTipsv_location_registration["English"]["m_location_kabupaten"] = "";
	$placeHoldersv_location_registration["English"]["m_location_kabupaten"] = "";
	$fieldLabelsv_location_registration["English"]["id"] = "Id";
	$fieldToolTipsv_location_registration["English"]["id"] = "";
	$placeHoldersv_location_registration["English"]["id"] = "";
	if (count($fieldToolTipsv_location_registration["English"]))
		$tdatav_location_registration[".isUseToolTips"] = true;
}


	$tdatav_location_registration[".NCSearch"] = true;



$tdatav_location_registration[".shortTableName"] = "v_location_registration";
$tdatav_location_registration[".nSecOptions"] = 0;

$tdatav_location_registration[".mainTableOwnerID"] = "";
$tdatav_location_registration[".entityType"] = 1;
$tdatav_location_registration[".connId"] = "u736239518tsundbat154412412";


$tdatav_location_registration[".strOriginalTableName"] = "t_register";

	



$tdatav_location_registration[".showAddInPopup"] = false;

$tdatav_location_registration[".showEditInPopup"] = false;

$tdatav_location_registration[".showViewInPopup"] = false;

$tdatav_location_registration[".listAjax"] = false;
//	temporary
//$tdatav_location_registration[".listAjax"] = false;

	$tdatav_location_registration[".audit"] = false;

	$tdatav_location_registration[".locking"] = false;


$pages = $tdatav_location_registration[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatav_location_registration[".edit"] = true;
	$tdatav_location_registration[".afterEditAction"] = 1;
	$tdatav_location_registration[".closePopupAfterEdit"] = 1;
	$tdatav_location_registration[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatav_location_registration[".add"] = true;
$tdatav_location_registration[".afterAddAction"] = 1;
$tdatav_location_registration[".closePopupAfterAdd"] = 1;
$tdatav_location_registration[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatav_location_registration[".list"] = true;
}



$tdatav_location_registration[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatav_location_registration[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatav_location_registration[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatav_location_registration[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatav_location_registration[".printFriendly"] = true;
}



$tdatav_location_registration[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatav_location_registration[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatav_location_registration[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatav_location_registration[".isUseAjaxSuggest"] = true;



																																																			

$tdatav_location_registration[".ajaxCodeSnippetAdded"] = false;

$tdatav_location_registration[".buttonsAdded"] = false;

$tdatav_location_registration[".addPageEvents"] = false;

// use timepicker for search panel
$tdatav_location_registration[".isUseTimeForSearch"] = false;


$tdatav_location_registration[".badgeColor"] = "778899";


$tdatav_location_registration[".allSearchFields"] = array();
$tdatav_location_registration[".filterFields"] = array();
$tdatav_location_registration[".requiredSearchFields"] = array();

$tdatav_location_registration[".googleLikeFields"] = array();
$tdatav_location_registration[".googleLikeFields"][] = "m_location_name";
$tdatav_location_registration[".googleLikeFields"][] = "m_location_address";
$tdatav_location_registration[".googleLikeFields"][] = "m_location_kabupaten";
$tdatav_location_registration[".googleLikeFields"][] = "username";
$tdatav_location_registration[".googleLikeFields"][] = "id";



$tdatav_location_registration[".tableType"] = "list";

$tdatav_location_registration[".printerPageOrientation"] = 0;
$tdatav_location_registration[".nPrinterPageScale"] = 100;

$tdatav_location_registration[".nPrinterSplitRecords"] = 40;

$tdatav_location_registration[".geocodingEnabled"] = false;










$tdatav_location_registration[".pageSize"] = 20;

$tdatav_location_registration[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatav_location_registration[".strOrderBy"] = $tstrOrderBy;

$tdatav_location_registration[".orderindexes"] = array();


$tdatav_location_registration[".sqlHead"] = "select m_location_office.m_location_name,  m_location_office.m_location_address,  m_location_office.m_location_kabupaten,  t_register_mapping.username,  m_location_office.id";
$tdatav_location_registration[".sqlFrom"] = "FROM t_register_mapping  INNER JOIN m_location_office ON t_register_mapping.location_id = m_location_office.id";
$tdatav_location_registration[".sqlWhereExpr"] = "t_register_mapping.username=':session.UserID'";
$tdatav_location_registration[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatav_location_registration[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatav_location_registration[".arrGroupsPerPage"] = $arrGPP;

$tdatav_location_registration[".highlightSearchResults"] = true;

$tableKeysv_location_registration = array();
$tdatav_location_registration[".Keys"] = $tableKeysv_location_registration;


$tdatav_location_registration[".hideMobileList"] = array();




//	m_location_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_location_name";
	$fdata["GoodName"] = "m_location_name";
	$fdata["ownerTable"] = "m_location_office";
	$fdata["Label"] = GetFieldLabel("v_location_registration","m_location_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_location_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_location_office.m_location_name";

	
	
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


	$tdatav_location_registration["m_location_name"] = $fdata;
		$tdatav_location_registration[".searchableFields"][] = "m_location_name";
//	m_location_address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_location_address";
	$fdata["GoodName"] = "m_location_address";
	$fdata["ownerTable"] = "m_location_office";
	$fdata["Label"] = GetFieldLabel("v_location_registration","m_location_address");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_location_address";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_location_office.m_location_address";

	
	
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


	$tdatav_location_registration["m_location_address"] = $fdata;
		$tdatav_location_registration[".searchableFields"][] = "m_location_address";
//	m_location_kabupaten
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_location_kabupaten";
	$fdata["GoodName"] = "m_location_kabupaten";
	$fdata["ownerTable"] = "m_location_office";
	$fdata["Label"] = GetFieldLabel("v_location_registration","m_location_kabupaten");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_location_kabupaten";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_location_office.m_location_kabupaten";

	
	
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


	$tdatav_location_registration["m_location_kabupaten"] = $fdata;
		$tdatav_location_registration[".searchableFields"][] = "m_location_kabupaten";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "t_register_mapping";
	$fdata["Label"] = GetFieldLabel("v_location_registration","username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_register_mapping.username";

	
	
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


	$tdatav_location_registration["username"] = $fdata;
		$tdatav_location_registration[".searchableFields"][] = "username";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_location_office";
	$fdata["Label"] = GetFieldLabel("v_location_registration","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_location_office.id";

	
	
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


	$tdatav_location_registration["id"] = $fdata;
		$tdatav_location_registration[".searchableFields"][] = "id";


$tables_data["v_location_registration"]=&$tdatav_location_registration;
$field_labels["v_location_registration"] = &$fieldLabelsv_location_registration;
$fieldToolTips["v_location_registration"] = &$fieldToolTipsv_location_registration;
$placeHolders["v_location_registration"] = &$placeHoldersv_location_registration;
$page_titles["v_location_registration"] = &$pageTitlesv_location_registration;


changeTextControlsToDate( "v_location_registration" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["v_location_registration"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["v_location_registration"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_v_location_registration()
{
$proto0=array();
$proto0["m_strHead"] = "select";
$proto0["m_strFieldList"] = "m_location_office.m_location_name,  m_location_office.m_location_address,  m_location_office.m_location_kabupaten,  t_register_mapping.username,  m_location_office.id";
$proto0["m_strFrom"] = "FROM t_register_mapping  INNER JOIN m_location_office ON t_register_mapping.location_id = m_location_office.id";
$proto0["m_strWhere"] = "t_register_mapping.username=':session.UserID'";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "t_register_mapping.username=':session.UserID'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "t_register_mapping",
	"m_srcTableName" => "v_location_registration"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=':session.UserID'";
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
	"m_strName" => "m_location_name",
	"m_strTable" => "m_location_office",
	"m_srcTableName" => "v_location_registration"
));

$proto6["m_sql"] = "m_location_office.m_location_name";
$proto6["m_srcTableName"] = "v_location_registration";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_location_address",
	"m_strTable" => "m_location_office",
	"m_srcTableName" => "v_location_registration"
));

$proto8["m_sql"] = "m_location_office.m_location_address";
$proto8["m_srcTableName"] = "v_location_registration";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_location_kabupaten",
	"m_strTable" => "m_location_office",
	"m_srcTableName" => "v_location_registration"
));

$proto10["m_sql"] = "m_location_office.m_location_kabupaten";
$proto10["m_srcTableName"] = "v_location_registration";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "t_register_mapping",
	"m_srcTableName" => "v_location_registration"
));

$proto12["m_sql"] = "t_register_mapping.username";
$proto12["m_srcTableName"] = "v_location_registration";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "m_location_office",
	"m_srcTableName" => "v_location_registration"
));

$proto14["m_sql"] = "m_location_office.id";
$proto14["m_srcTableName"] = "v_location_registration";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "t_register_mapping";
$proto17["m_srcTableName"] = "v_location_registration";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "t_register_mapping_id";
$proto17["m_columns"][] = "username";
$proto17["m_columns"][] = "location_id";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "t_register_mapping";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "v_location_registration";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
												$proto20=array();
$proto20["m_link"] = "SQLL_INNERJOIN";
			$proto21=array();
$proto21["m_strName"] = "m_location_office";
$proto21["m_srcTableName"] = "v_location_registration";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "m_location_name";
$proto21["m_columns"][] = "m_location_address";
$proto21["m_columns"][] = "m_location_kabupaten";
$proto21["m_columns"][] = "m_location_provinsi";
$proto21["m_columns"][] = "is_active";
$proto21["m_columns"][] = "is_delete";
$proto21["m_columns"][] = "deleted_date";
$proto21["m_columns"][] = "created_date";
$proto21["m_columns"][] = "created_by";
$proto21["m_columns"][] = "last_update_by";
$proto21["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "INNER JOIN m_location_office ON t_register_mapping.location_id = m_location_office.id";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "v_location_registration";
$proto22=array();
$proto22["m_sql"] = "m_location_office.id = t_register_mapping.location_id";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "m_location_office",
	"m_srcTableName" => "v_location_registration"
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "= t_register_mapping.location_id";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="v_location_registration";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_v_location_registration = createSqlQuery_v_location_registration();


	
				;

					

$tdatav_location_registration[".sqlquery"] = $queryData_v_location_registration;



$tdatav_location_registration[".hasEvents"] = false;

?>