<?php
$tdatam_payment_term = array();
$tdatam_payment_term[".searchableFields"] = array();
$tdatam_payment_term[".ShortName"] = "m_payment_term";
$tdatam_payment_term[".OwnerID"] = "";
$tdatam_payment_term[".OriginalTable"] = "m_payment_term";


$tdatam_payment_term[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatam_payment_term[".originalPagesByType"] = $tdatam_payment_term[".pagesByType"];
$tdatam_payment_term[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatam_payment_term[".originalPages"] = $tdatam_payment_term[".pages"];
$tdatam_payment_term[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatam_payment_term[".originalDefaultPages"] = $tdatam_payment_term[".defaultPages"];

//	field labels
$fieldLabelsm_payment_term = array();
$fieldToolTipsm_payment_term = array();
$pageTitlesm_payment_term = array();
$placeHoldersm_payment_term = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_payment_term["English"] = array();
	$fieldToolTipsm_payment_term["English"] = array();
	$placeHoldersm_payment_term["English"] = array();
	$pageTitlesm_payment_term["English"] = array();
	$fieldLabelsm_payment_term["English"]["m_payment_term_paid_day"] = "If Paid Within";
	$fieldToolTipsm_payment_term["English"]["m_payment_term_paid_day"] = "";
	$placeHoldersm_payment_term["English"]["m_payment_term_paid_day"] = "";
	$fieldLabelsm_payment_term["English"]["m_payment_term_discaount"] = "Will Get Discount";
	$fieldToolTipsm_payment_term["English"]["m_payment_term_discaount"] = "";
	$placeHoldersm_payment_term["English"]["m_payment_term_discaount"] = "";
	$fieldLabelsm_payment_term["English"]["m_payment_term_due_day"] = "Due Period";
	$fieldToolTipsm_payment_term["English"]["m_payment_term_due_day"] = "";
	$placeHoldersm_payment_term["English"]["m_payment_term_due_day"] = "";
	$fieldLabelsm_payment_term["English"]["m_payment_term_noted"] = "Noted";
	$fieldToolTipsm_payment_term["English"]["m_payment_term_noted"] = "";
	$placeHoldersm_payment_term["English"]["m_payment_term_noted"] = "";
	$fieldLabelsm_payment_term["English"]["m_payment_term_id"] = "M Payment Term Id";
	$fieldToolTipsm_payment_term["English"]["m_payment_term_id"] = "";
	$placeHoldersm_payment_term["English"]["m_payment_term_id"] = "";
	if (count($fieldToolTipsm_payment_term["English"]))
		$tdatam_payment_term[".isUseToolTips"] = true;
}


	$tdatam_payment_term[".NCSearch"] = true;



$tdatam_payment_term[".shortTableName"] = "m_payment_term";
$tdatam_payment_term[".nSecOptions"] = 0;

$tdatam_payment_term[".mainTableOwnerID"] = "";
$tdatam_payment_term[".entityType"] = 0;
$tdatam_payment_term[".connId"] = "u736239518tsundbat154412412";


$tdatam_payment_term[".strOriginalTableName"] = "m_payment_term";

	



$tdatam_payment_term[".showAddInPopup"] = false;

$tdatam_payment_term[".showEditInPopup"] = false;

$tdatam_payment_term[".showViewInPopup"] = false;

$tdatam_payment_term[".listAjax"] = false;
//	temporary
//$tdatam_payment_term[".listAjax"] = false;

	$tdatam_payment_term[".audit"] = false;

	$tdatam_payment_term[".locking"] = false;


$pages = $tdatam_payment_term[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_payment_term[".edit"] = true;
	$tdatam_payment_term[".afterEditAction"] = 1;
	$tdatam_payment_term[".closePopupAfterEdit"] = 1;
	$tdatam_payment_term[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_payment_term[".add"] = true;
$tdatam_payment_term[".afterAddAction"] = 1;
$tdatam_payment_term[".closePopupAfterAdd"] = 1;
$tdatam_payment_term[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_payment_term[".list"] = true;
}



$tdatam_payment_term[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_payment_term[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_payment_term[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_payment_term[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_payment_term[".printFriendly"] = true;
}



$tdatam_payment_term[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_payment_term[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_payment_term[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_payment_term[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_payment_term[".ajaxCodeSnippetAdded"] = false;

$tdatam_payment_term[".buttonsAdded"] = false;

$tdatam_payment_term[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_payment_term[".isUseTimeForSearch"] = false;


$tdatam_payment_term[".badgeColor"] = "CD853F";


$tdatam_payment_term[".allSearchFields"] = array();
$tdatam_payment_term[".filterFields"] = array();
$tdatam_payment_term[".requiredSearchFields"] = array();

$tdatam_payment_term[".googleLikeFields"] = array();
$tdatam_payment_term[".googleLikeFields"][] = "m_payment_term_paid_day";
$tdatam_payment_term[".googleLikeFields"][] = "m_payment_term_discaount";
$tdatam_payment_term[".googleLikeFields"][] = "m_payment_term_due_day";
$tdatam_payment_term[".googleLikeFields"][] = "m_payment_term_noted";
$tdatam_payment_term[".googleLikeFields"][] = "m_payment_term_id";



$tdatam_payment_term[".tableType"] = "list";

$tdatam_payment_term[".printerPageOrientation"] = 0;
$tdatam_payment_term[".nPrinterPageScale"] = 100;

$tdatam_payment_term[".nPrinterSplitRecords"] = 40;

$tdatam_payment_term[".geocodingEnabled"] = false;










$tdatam_payment_term[".pageSize"] = 20;

$tdatam_payment_term[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_payment_term[".strOrderBy"] = $tstrOrderBy;

$tdatam_payment_term[".orderindexes"] = array();


$tdatam_payment_term[".sqlHead"] = "SELECT m_payment_term_paid_day,  m_payment_term_discaount,  m_payment_term_due_day,  m_payment_term_noted,  m_payment_term_id";
$tdatam_payment_term[".sqlFrom"] = "FROM m_payment_term";
$tdatam_payment_term[".sqlWhereExpr"] = "";
$tdatam_payment_term[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_payment_term[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_payment_term[".arrGroupsPerPage"] = $arrGPP;

$tdatam_payment_term[".highlightSearchResults"] = true;

$tableKeysm_payment_term = array();
$tableKeysm_payment_term[] = "m_payment_term_id";
$tdatam_payment_term[".Keys"] = $tableKeysm_payment_term;


$tdatam_payment_term[".hideMobileList"] = array();




//	m_payment_term_paid_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_payment_term_paid_day";
	$fdata["GoodName"] = "m_payment_term_paid_day";
	$fdata["ownerTable"] = "m_payment_term";
	$fdata["Label"] = GetFieldLabel("m_payment_term","m_payment_term_paid_day");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_payment_term_paid_day";

		$fdata["sourceSingle"] = "m_payment_term_paid_day";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_payment_term_paid_day";

	
	
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


	$tdatam_payment_term["m_payment_term_paid_day"] = $fdata;
		$tdatam_payment_term[".searchableFields"][] = "m_payment_term_paid_day";
//	m_payment_term_discaount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "m_payment_term_discaount";
	$fdata["GoodName"] = "m_payment_term_discaount";
	$fdata["ownerTable"] = "m_payment_term";
	$fdata["Label"] = GetFieldLabel("m_payment_term","m_payment_term_discaount");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_payment_term_discaount";

		$fdata["sourceSingle"] = "m_payment_term_discaount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_payment_term_discaount";

	
	
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


	$tdatam_payment_term["m_payment_term_discaount"] = $fdata;
		$tdatam_payment_term[".searchableFields"][] = "m_payment_term_discaount";
//	m_payment_term_due_day
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "m_payment_term_due_day";
	$fdata["GoodName"] = "m_payment_term_due_day";
	$fdata["ownerTable"] = "m_payment_term";
	$fdata["Label"] = GetFieldLabel("m_payment_term","m_payment_term_due_day");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_payment_term_due_day";

		$fdata["sourceSingle"] = "m_payment_term_due_day";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_payment_term_due_day";

	
	
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


	$tdatam_payment_term["m_payment_term_due_day"] = $fdata;
		$tdatam_payment_term[".searchableFields"][] = "m_payment_term_due_day";
//	m_payment_term_noted
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "m_payment_term_noted";
	$fdata["GoodName"] = "m_payment_term_noted";
	$fdata["ownerTable"] = "m_payment_term";
	$fdata["Label"] = GetFieldLabel("m_payment_term","m_payment_term_noted");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_payment_term_noted";

		$fdata["sourceSingle"] = "m_payment_term_noted";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_payment_term_noted";

	
	
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


	$tdatam_payment_term["m_payment_term_noted"] = $fdata;
		$tdatam_payment_term[".searchableFields"][] = "m_payment_term_noted";
//	m_payment_term_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_payment_term_id";
	$fdata["GoodName"] = "m_payment_term_id";
	$fdata["ownerTable"] = "m_payment_term";
	$fdata["Label"] = GetFieldLabel("m_payment_term","m_payment_term_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_payment_term_id";

		$fdata["sourceSingle"] = "m_payment_term_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_payment_term_id";

	
	
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


	$tdatam_payment_term["m_payment_term_id"] = $fdata;
		$tdatam_payment_term[".searchableFields"][] = "m_payment_term_id";


$tables_data["m_payment_term"]=&$tdatam_payment_term;
$field_labels["m_payment_term"] = &$fieldLabelsm_payment_term;
$fieldToolTips["m_payment_term"] = &$fieldToolTipsm_payment_term;
$placeHolders["m_payment_term"] = &$placeHoldersm_payment_term;
$page_titles["m_payment_term"] = &$pageTitlesm_payment_term;


changeTextControlsToDate( "m_payment_term" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_payment_term"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_payment_term"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_payment_term()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_payment_term_paid_day,  m_payment_term_discaount,  m_payment_term_due_day,  m_payment_term_noted,  m_payment_term_id";
$proto0["m_strFrom"] = "FROM m_payment_term";
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
	"m_strName" => "m_payment_term_paid_day",
	"m_strTable" => "m_payment_term",
	"m_srcTableName" => "m_payment_term"
));

$proto6["m_sql"] = "m_payment_term_paid_day";
$proto6["m_srcTableName"] = "m_payment_term";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "m_payment_term_discaount",
	"m_strTable" => "m_payment_term",
	"m_srcTableName" => "m_payment_term"
));

$proto8["m_sql"] = "m_payment_term_discaount";
$proto8["m_srcTableName"] = "m_payment_term";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "m_payment_term_due_day",
	"m_strTable" => "m_payment_term",
	"m_srcTableName" => "m_payment_term"
));

$proto10["m_sql"] = "m_payment_term_due_day";
$proto10["m_srcTableName"] = "m_payment_term";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "m_payment_term_noted",
	"m_strTable" => "m_payment_term",
	"m_srcTableName" => "m_payment_term"
));

$proto12["m_sql"] = "m_payment_term_noted";
$proto12["m_srcTableName"] = "m_payment_term";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_payment_term_id",
	"m_strTable" => "m_payment_term",
	"m_srcTableName" => "m_payment_term"
));

$proto14["m_sql"] = "m_payment_term_id";
$proto14["m_srcTableName"] = "m_payment_term";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "m_payment_term";
$proto17["m_srcTableName"] = "m_payment_term";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "m_payment_term_id";
$proto17["m_columns"][] = "m_payment_term_paid_day";
$proto17["m_columns"][] = "m_payment_term_discaount";
$proto17["m_columns"][] = "m_payment_term_due_day";
$proto17["m_columns"][] = "m_payment_term_noted";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "m_payment_term";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "m_payment_term";
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
$proto0["m_srcTableName"]="m_payment_term";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_payment_term = createSqlQuery_m_payment_term();


	
				;

					

$tdatam_payment_term[".sqlquery"] = $queryData_m_payment_term;



$tdatam_payment_term[".hasEvents"] = false;

?>