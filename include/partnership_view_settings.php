<?php
$tdatapartnership_view = array();
$tdatapartnership_view[".searchableFields"] = array();
$tdatapartnership_view[".ShortName"] = "partnership_view";
$tdatapartnership_view[".OwnerID"] = "";
$tdatapartnership_view[".OriginalTable"] = "m_client_profile";


$tdatapartnership_view[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapartnership_view[".originalPagesByType"] = $tdatapartnership_view[".pagesByType"];
$tdatapartnership_view[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapartnership_view[".originalPages"] = $tdatapartnership_view[".pages"];
$tdatapartnership_view[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapartnership_view[".originalDefaultPages"] = $tdatapartnership_view[".defaultPages"];

//	field labels
$fieldLabelspartnership_view = array();
$fieldToolTipspartnership_view = array();
$pageTitlespartnership_view = array();
$placeHolderspartnership_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspartnership_view["English"] = array();
	$fieldToolTipspartnership_view["English"] = array();
	$placeHolderspartnership_view["English"] = array();
	$pageTitlespartnership_view["English"] = array();
	$fieldLabelspartnership_view["English"]["id"] = "Id";
	$fieldToolTipspartnership_view["English"]["id"] = "";
	$placeHolderspartnership_view["English"]["id"] = "";
	$fieldLabelspartnership_view["English"]["producer_name"] = "Producer Name";
	$fieldToolTipspartnership_view["English"]["producer_name"] = "";
	$placeHolderspartnership_view["English"]["producer_name"] = "";
	if (count($fieldToolTipspartnership_view["English"]))
		$tdatapartnership_view[".isUseToolTips"] = true;
}


	$tdatapartnership_view[".NCSearch"] = true;



$tdatapartnership_view[".shortTableName"] = "partnership_view";
$tdatapartnership_view[".nSecOptions"] = 0;

$tdatapartnership_view[".mainTableOwnerID"] = "";
$tdatapartnership_view[".entityType"] = 1;
$tdatapartnership_view[".connId"] = "u736239518tsundbat154412412";


$tdatapartnership_view[".strOriginalTableName"] = "m_client_profile";

	



$tdatapartnership_view[".showAddInPopup"] = false;

$tdatapartnership_view[".showEditInPopup"] = false;

$tdatapartnership_view[".showViewInPopup"] = false;

$tdatapartnership_view[".listAjax"] = false;
//	temporary
//$tdatapartnership_view[".listAjax"] = false;

	$tdatapartnership_view[".audit"] = false;

	$tdatapartnership_view[".locking"] = false;


$pages = $tdatapartnership_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapartnership_view[".edit"] = true;
	$tdatapartnership_view[".afterEditAction"] = 1;
	$tdatapartnership_view[".closePopupAfterEdit"] = 1;
	$tdatapartnership_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapartnership_view[".add"] = true;
$tdatapartnership_view[".afterAddAction"] = 1;
$tdatapartnership_view[".closePopupAfterAdd"] = 1;
$tdatapartnership_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapartnership_view[".list"] = true;
}



$tdatapartnership_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapartnership_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapartnership_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapartnership_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapartnership_view[".printFriendly"] = true;
}



$tdatapartnership_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapartnership_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapartnership_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapartnership_view[".isUseAjaxSuggest"] = true;



																																																			

$tdatapartnership_view[".ajaxCodeSnippetAdded"] = false;

$tdatapartnership_view[".buttonsAdded"] = false;

$tdatapartnership_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapartnership_view[".isUseTimeForSearch"] = false;


$tdatapartnership_view[".badgeColor"] = "6493EA";


$tdatapartnership_view[".allSearchFields"] = array();
$tdatapartnership_view[".filterFields"] = array();
$tdatapartnership_view[".requiredSearchFields"] = array();

$tdatapartnership_view[".googleLikeFields"] = array();
$tdatapartnership_view[".googleLikeFields"][] = "id";
$tdatapartnership_view[".googleLikeFields"][] = "producer_name";



$tdatapartnership_view[".tableType"] = "list";

$tdatapartnership_view[".printerPageOrientation"] = 0;
$tdatapartnership_view[".nPrinterPageScale"] = 100;

$tdatapartnership_view[".nPrinterSplitRecords"] = 40;

$tdatapartnership_view[".geocodingEnabled"] = false;










$tdatapartnership_view[".pageSize"] = 20;

$tdatapartnership_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapartnership_view[".strOrderBy"] = $tstrOrderBy;

$tdatapartnership_view[".orderindexes"] = array();


$tdatapartnership_view[".sqlHead"] = "SELECT id,  producer_name";
$tdatapartnership_view[".sqlFrom"] = "FROM m_producer";
$tdatapartnership_view[".sqlWhereExpr"] = "(producer_type_id =6)";
$tdatapartnership_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapartnership_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapartnership_view[".arrGroupsPerPage"] = $arrGPP;

$tdatapartnership_view[".highlightSearchResults"] = true;

$tableKeyspartnership_view = array();
$tableKeyspartnership_view[] = "id";
$tdatapartnership_view[".Keys"] = $tableKeyspartnership_view;


$tdatapartnership_view[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("partnership_view","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdatapartnership_view["id"] = $fdata;
		$tdatapartnership_view[".searchableFields"][] = "id";
//	producer_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "producer_name";
	$fdata["GoodName"] = "producer_name";
	$fdata["ownerTable"] = "m_producer";
	$fdata["Label"] = GetFieldLabel("partnership_view","producer_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "producer_name";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "producer_name";

	
	
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


	$tdatapartnership_view["producer_name"] = $fdata;
		$tdatapartnership_view[".searchableFields"][] = "producer_name";


$tables_data["partnership_view"]=&$tdatapartnership_view;
$field_labels["partnership_view"] = &$fieldLabelspartnership_view;
$fieldToolTips["partnership_view"] = &$fieldToolTipspartnership_view;
$placeHolders["partnership_view"] = &$placeHolderspartnership_view;
$page_titles["partnership_view"] = &$pageTitlespartnership_view;


changeTextControlsToDate( "partnership_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["partnership_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["partnership_view"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_partnership_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  producer_name";
$proto0["m_strFrom"] = "FROM m_producer";
$proto0["m_strWhere"] = "(producer_type_id =6)";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "producer_type_id =6";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "producer_type_id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "partnership_view"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=6";
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
	"m_strName" => "id",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "partnership_view"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "partnership_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "producer_name",
	"m_strTable" => "m_producer",
	"m_srcTableName" => "partnership_view"
));

$proto8["m_sql"] = "producer_name";
$proto8["m_srcTableName"] = "partnership_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "m_producer";
$proto11["m_srcTableName"] = "partnership_view";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "user_id_tsun";
$proto11["m_columns"][] = "producer_name";
$proto11["m_columns"][] = "producer_category_id";
$proto11["m_columns"][] = "producer_type_id";
$proto11["m_columns"][] = "producer_domestic_type_id";
$proto11["m_columns"][] = "producer_overseas_type_id";
$proto11["m_columns"][] = "producer_network_association";
$proto11["m_columns"][] = "producer_network_company_name";
$proto11["m_columns"][] = "producer_gender";
$proto11["m_columns"][] = "dob_place";
$proto11["m_columns"][] = "dob_date";
$proto11["m_columns"][] = "address_street";
$proto11["m_columns"][] = "address_description";
$proto11["m_columns"][] = "address_postal_code";
$proto11["m_columns"][] = "address_region_id";
$proto11["m_columns"][] = "address_city_id";
$proto11["m_columns"][] = "address_province_id";
$proto11["m_columns"][] = "address_country_id";
$proto11["m_columns"][] = "establishment_country_id";
$proto11["m_columns"][] = "establishment_date";
$proto11["m_columns"][] = "licence_nib";
$proto11["m_columns"][] = "tax_number";
$proto11["m_columns"][] = "tax_name";
$proto11["m_columns"][] = "pic_name";
$proto11["m_columns"][] = "pic_phone_number";
$proto11["m_columns"][] = "agreement_number";
$proto11["m_columns"][] = "agreement_period_start";
$proto11["m_columns"][] = "agreement_period_end";
$proto11["m_columns"][] = "bank_id";
$proto11["m_columns"][] = "bank_swift_code";
$proto11["m_columns"][] = "bank_account_number";
$proto11["m_columns"][] = "is_active";
$proto11["m_columns"][] = "is_delete";
$proto11["m_columns"][] = "deleted_date";
$proto11["m_columns"][] = "created_by";
$proto11["m_columns"][] = "created_date";
$proto11["m_columns"][] = "last_update_by";
$proto11["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "m_producer";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "partnership_view";
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
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="partnership_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_partnership_view = createSqlQuery_partnership_view();


	
				;

		

$tdatapartnership_view[".sqlquery"] = $queryData_partnership_view;



$tdatapartnership_view[".hasEvents"] = false;

?>