<?php
$tdatam_division = array();
$tdatam_division[".searchableFields"] = array();
$tdatam_division[".ShortName"] = "m_division";
$tdatam_division[".OwnerID"] = "";
$tdatam_division[".OriginalTable"] = "m_division";


$tdatam_division[".pagesByType"] = my_json_decode( "{}" );
$tdatam_division[".originalPagesByType"] = $tdatam_division[".pagesByType"];
$tdatam_division[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_division[".originalPages"] = $tdatam_division[".pages"];
$tdatam_division[".defaultPages"] = my_json_decode( "{}" );
$tdatam_division[".originalDefaultPages"] = $tdatam_division[".defaultPages"];

//	field labels
$fieldLabelsm_division = array();
$fieldToolTipsm_division = array();
$pageTitlesm_division = array();
$placeHoldersm_division = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_division["English"] = array();
	$fieldToolTipsm_division["English"] = array();
	$placeHoldersm_division["English"] = array();
	$pageTitlesm_division["English"] = array();
	$fieldLabelsm_division["English"]["m_division_id"] = "M Division Id";
	$fieldToolTipsm_division["English"]["m_division_id"] = "";
	$placeHoldersm_division["English"]["m_division_id"] = "";
	$fieldLabelsm_division["English"]["m_division_name"] = "M Division Name";
	$fieldToolTipsm_division["English"]["m_division_name"] = "";
	$placeHoldersm_division["English"]["m_division_name"] = "";
	$fieldLabelsm_division["English"]["office_location_id"] = "Office Location Id";
	$fieldToolTipsm_division["English"]["office_location_id"] = "";
	$placeHoldersm_division["English"]["office_location_id"] = "";
	$fieldLabelsm_division["English"]["m_division_fl"] = "M Division Fl";
	$fieldToolTipsm_division["English"]["m_division_fl"] = "";
	$placeHoldersm_division["English"]["m_division_fl"] = "";
	$fieldLabelsm_division["English"]["m_division_no"] = "M Division No";
	$fieldToolTipsm_division["English"]["m_division_no"] = "";
	$placeHoldersm_division["English"]["m_division_no"] = "";
	if (count($fieldToolTipsm_division["English"]))
		$tdatam_division[".isUseToolTips"] = true;
}


	$tdatam_division[".NCSearch"] = true;



$tdatam_division[".shortTableName"] = "m_division";
$tdatam_division[".nSecOptions"] = 0;

$tdatam_division[".mainTableOwnerID"] = "";
$tdatam_division[".entityType"] = 0;
$tdatam_division[".connId"] = "u736239518tsundbat154412412";


$tdatam_division[".strOriginalTableName"] = "m_division";

	



$tdatam_division[".showAddInPopup"] = false;

$tdatam_division[".showEditInPopup"] = false;

$tdatam_division[".showViewInPopup"] = false;

$tdatam_division[".listAjax"] = false;
//	temporary
//$tdatam_division[".listAjax"] = false;

	$tdatam_division[".audit"] = false;

	$tdatam_division[".locking"] = false;


$pages = $tdatam_division[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_division[".edit"] = true;
	$tdatam_division[".afterEditAction"] = 1;
	$tdatam_division[".closePopupAfterEdit"] = 1;
	$tdatam_division[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_division[".add"] = true;
$tdatam_division[".afterAddAction"] = 1;
$tdatam_division[".closePopupAfterAdd"] = 1;
$tdatam_division[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_division[".list"] = true;
}



$tdatam_division[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_division[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_division[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_division[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_division[".printFriendly"] = true;
}



$tdatam_division[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_division[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_division[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_division[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_division[".ajaxCodeSnippetAdded"] = false;

$tdatam_division[".buttonsAdded"] = false;

$tdatam_division[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_division[".isUseTimeForSearch"] = false;


$tdatam_division[".badgeColor"] = "DAA520";


$tdatam_division[".allSearchFields"] = array();
$tdatam_division[".filterFields"] = array();
$tdatam_division[".requiredSearchFields"] = array();

$tdatam_division[".googleLikeFields"] = array();
$tdatam_division[".googleLikeFields"][] = "m_division_id";
$tdatam_division[".googleLikeFields"][] = "m_division_name";
$tdatam_division[".googleLikeFields"][] = "office_location_id";
$tdatam_division[".googleLikeFields"][] = "m_division_fl";
$tdatam_division[".googleLikeFields"][] = "m_division_no";



$tdatam_division[".tableType"] = "list";

$tdatam_division[".printerPageOrientation"] = 0;
$tdatam_division[".nPrinterPageScale"] = 100;

$tdatam_division[".nPrinterSplitRecords"] = 40;

$tdatam_division[".geocodingEnabled"] = false;










$tdatam_division[".pageSize"] = 20;

$tdatam_division[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_division[".strOrderBy"] = $tstrOrderBy;

$tdatam_division[".orderindexes"] = array();


$tdatam_division[".sqlHead"] = "SELECT m_division_id,  	m_division_name,  	office_location_id,  	m_division_fl,  	m_division_no";
$tdatam_division[".sqlFrom"] = "FROM m_division";
$tdatam_division[".sqlWhereExpr"] = "";
$tdatam_division[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_division[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_division[".arrGroupsPerPage"] = $arrGPP;

$tdatam_division[".highlightSearchResults"] = true;

$tableKeysm_division = array();
$tableKeysm_division[] = "m_division_id";
$tdatam_division[".Keys"] = $tableKeysm_division;


$tdatam_division[".hideMobileList"] = array();




//	m_division_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_division_id";
	$fdata["GoodName"] = "m_division_id";
	$fdata["ownerTable"] = "m_division";
	$fdata["Label"] = GetFieldLabel("m_division","m_division_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_division_id";

		$fdata["sourceSingle"] = "m_division_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_division_id";

	
	
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


	$tdatam_division["m_division_id"] = $fdata;
		$tdatam_division[".searchableFields"][] = "m_division_id";
//	m_division_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_division_name";
	$fdata["GoodName"] = "m_division_name";
	$fdata["ownerTable"] = "m_division";
	$fdata["Label"] = GetFieldLabel("m_division","m_division_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_division_name";

		$fdata["sourceSingle"] = "m_division_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_division_name";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdatam_division["m_division_name"] = $fdata;
		$tdatam_division[".searchableFields"][] = "m_division_name";
//	office_location_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "office_location_id";
	$fdata["GoodName"] = "office_location_id";
	$fdata["ownerTable"] = "m_division";
	$fdata["Label"] = GetFieldLabel("m_division","office_location_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "office_location_id";

		$fdata["sourceSingle"] = "office_location_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "office_location_id";

	
	
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


	$tdatam_division["office_location_id"] = $fdata;
		$tdatam_division[".searchableFields"][] = "office_location_id";
//	m_division_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_division_fl";
	$fdata["GoodName"] = "m_division_fl";
	$fdata["ownerTable"] = "m_division";
	$fdata["Label"] = GetFieldLabel("m_division","m_division_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_division_fl";

		$fdata["sourceSingle"] = "m_division_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_division_fl";

	
	
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


	$tdatam_division["m_division_fl"] = $fdata;
		$tdatam_division[".searchableFields"][] = "m_division_fl";
//	m_division_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_division_no";
	$fdata["GoodName"] = "m_division_no";
	$fdata["ownerTable"] = "m_division";
	$fdata["Label"] = GetFieldLabel("m_division","m_division_no");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_division_no";

		$fdata["sourceSingle"] = "m_division_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_division_no";

	
	
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


	$tdatam_division["m_division_no"] = $fdata;
		$tdatam_division[".searchableFields"][] = "m_division_no";


$tables_data["m_division"]=&$tdatam_division;
$field_labels["m_division"] = &$fieldLabelsm_division;
$fieldToolTips["m_division"] = &$fieldToolTipsm_division;
$placeHolders["m_division"] = &$placeHoldersm_division;
$page_titles["m_division"] = &$pageTitlesm_division;


changeTextControlsToDate( "m_division" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_division"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_division"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_division()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_division_id,  	m_division_name,  	office_location_id,  	m_division_fl,  	m_division_no";
$proto0["m_strFrom"] = "FROM m_division";
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
	"m_strName" => "m_division_id",
	"m_strTable" => "m_division",
	"m_srcTableName" => "m_division"
));

$proto6["m_sql"] = "m_division_id";
$proto6["m_srcTableName"] = "m_division";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_division_name",
	"m_strTable" => "m_division",
	"m_srcTableName" => "m_division"
));

$proto8["m_sql"] = "m_division_name";
$proto8["m_srcTableName"] = "m_division";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "office_location_id",
	"m_strTable" => "m_division",
	"m_srcTableName" => "m_division"
));

$proto10["m_sql"] = "office_location_id";
$proto10["m_srcTableName"] = "m_division";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_division_fl",
	"m_strTable" => "m_division",
	"m_srcTableName" => "m_division"
));

$proto12["m_sql"] = "m_division_fl";
$proto12["m_srcTableName"] = "m_division";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_division_no",
	"m_strTable" => "m_division",
	"m_srcTableName" => "m_division"
));

$proto14["m_sql"] = "m_division_no";
$proto14["m_srcTableName"] = "m_division";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "m_division";
$proto17["m_srcTableName"] = "m_division";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "m_division_id";
$proto17["m_columns"][] = "m_division_name";
$proto17["m_columns"][] = "office_location_id";
$proto17["m_columns"][] = "m_division_fl";
$proto17["m_columns"][] = "m_division_no";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "m_division";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "m_division";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_division";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_division = createSqlQuery_m_division();


	
				;

					

$tdatam_division[".sqlquery"] = $queryData_m_division;



$tdatam_division[".hasEvents"] = false;

?>