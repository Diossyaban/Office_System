<?php
$tdatat_delivery_expedition_view = array();
$tdatat_delivery_expedition_view[".searchableFields"] = array();
$tdatat_delivery_expedition_view[".ShortName"] = "t_delivery_expedition_view";
$tdatat_delivery_expedition_view[".OwnerID"] = "";
$tdatat_delivery_expedition_view[".OriginalTable"] = "t_delivery_expedition";


$tdatat_delivery_expedition_view[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatat_delivery_expedition_view[".originalPagesByType"] = $tdatat_delivery_expedition_view[".pagesByType"];
$tdatat_delivery_expedition_view[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatat_delivery_expedition_view[".originalPages"] = $tdatat_delivery_expedition_view[".pages"];
$tdatat_delivery_expedition_view[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatat_delivery_expedition_view[".originalDefaultPages"] = $tdatat_delivery_expedition_view[".defaultPages"];

//	field labels
$fieldLabelst_delivery_expedition_view = array();
$fieldToolTipst_delivery_expedition_view = array();
$pageTitlest_delivery_expedition_view = array();
$placeHolderst_delivery_expedition_view = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_delivery_expedition_view["English"] = array();
	$fieldToolTipst_delivery_expedition_view["English"] = array();
	$placeHolderst_delivery_expedition_view["English"] = array();
	$pageTitlest_delivery_expedition_view["English"] = array();
	$fieldLabelst_delivery_expedition_view["English"]["t_delivery_expedition"] = "T Delivery Expedition";
	$fieldToolTipst_delivery_expedition_view["English"]["t_delivery_expedition"] = "";
	$placeHolderst_delivery_expedition_view["English"]["t_delivery_expedition"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["t_delivery_id"] = "T Delivery Id";
	$fieldToolTipst_delivery_expedition_view["English"]["t_delivery_id"] = "";
	$placeHolderst_delivery_expedition_view["English"]["t_delivery_id"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["t_delivery_expedition_name"] = "Expedition Name";
	$fieldToolTipst_delivery_expedition_view["English"]["t_delivery_expedition_name"] = "";
	$placeHolderst_delivery_expedition_view["English"]["t_delivery_expedition_name"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["t_delivery_expedition_type"] = "Type";
	$fieldToolTipst_delivery_expedition_view["English"]["t_delivery_expedition_type"] = "";
	$placeHolderst_delivery_expedition_view["English"]["t_delivery_expedition_type"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["t_delivery_expedition_awb"] = "Airway Bill Number (AWB)";
	$fieldToolTipst_delivery_expedition_view["English"]["t_delivery_expedition_awb"] = "";
	$placeHolderst_delivery_expedition_view["English"]["t_delivery_expedition_awb"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["add_user"] = "Add User";
	$fieldToolTipst_delivery_expedition_view["English"]["add_user"] = "";
	$placeHolderst_delivery_expedition_view["English"]["add_user"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["add_date"] = "Add Date";
	$fieldToolTipst_delivery_expedition_view["English"]["add_date"] = "";
	$placeHolderst_delivery_expedition_view["English"]["add_date"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_delivery_expedition_view["English"]["edit_user"] = "";
	$placeHolderst_delivery_expedition_view["English"]["edit_user"] = "";
	$fieldLabelst_delivery_expedition_view["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_delivery_expedition_view["English"]["edit_date"] = "";
	$placeHolderst_delivery_expedition_view["English"]["edit_date"] = "";
	$pageTitlest_delivery_expedition_view["English"]["list"] = "";
	if (count($fieldToolTipst_delivery_expedition_view["English"]))
		$tdatat_delivery_expedition_view[".isUseToolTips"] = true;
}


	$tdatat_delivery_expedition_view[".NCSearch"] = true;



$tdatat_delivery_expedition_view[".shortTableName"] = "t_delivery_expedition_view";
$tdatat_delivery_expedition_view[".nSecOptions"] = 0;

$tdatat_delivery_expedition_view[".mainTableOwnerID"] = "";
$tdatat_delivery_expedition_view[".entityType"] = 1;
$tdatat_delivery_expedition_view[".connId"] = "u736239518tsundbat154412412";


$tdatat_delivery_expedition_view[".strOriginalTableName"] = "t_delivery_expedition";

	



$tdatat_delivery_expedition_view[".showAddInPopup"] = false;

$tdatat_delivery_expedition_view[".showEditInPopup"] = false;

$tdatat_delivery_expedition_view[".showViewInPopup"] = false;

$tdatat_delivery_expedition_view[".listAjax"] = false;
//	temporary
//$tdatat_delivery_expedition_view[".listAjax"] = false;

	$tdatat_delivery_expedition_view[".audit"] = false;

	$tdatat_delivery_expedition_view[".locking"] = false;


$pages = $tdatat_delivery_expedition_view[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_delivery_expedition_view[".edit"] = true;
	$tdatat_delivery_expedition_view[".afterEditAction"] = 1;
	$tdatat_delivery_expedition_view[".closePopupAfterEdit"] = 1;
	$tdatat_delivery_expedition_view[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_delivery_expedition_view[".add"] = true;
$tdatat_delivery_expedition_view[".afterAddAction"] = 1;
$tdatat_delivery_expedition_view[".closePopupAfterAdd"] = 1;
$tdatat_delivery_expedition_view[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_delivery_expedition_view[".list"] = true;
}



$tdatat_delivery_expedition_view[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_delivery_expedition_view[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_delivery_expedition_view[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_delivery_expedition_view[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_delivery_expedition_view[".printFriendly"] = true;
}



$tdatat_delivery_expedition_view[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_delivery_expedition_view[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_delivery_expedition_view[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_delivery_expedition_view[".isUseAjaxSuggest"] = true;



																																																																																																						

$tdatat_delivery_expedition_view[".ajaxCodeSnippetAdded"] = false;

$tdatat_delivery_expedition_view[".buttonsAdded"] = false;

$tdatat_delivery_expedition_view[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_delivery_expedition_view[".isUseTimeForSearch"] = false;


$tdatat_delivery_expedition_view[".badgeColor"] = "cd5c5c";


$tdatat_delivery_expedition_view[".allSearchFields"] = array();
$tdatat_delivery_expedition_view[".filterFields"] = array();
$tdatat_delivery_expedition_view[".requiredSearchFields"] = array();

$tdatat_delivery_expedition_view[".googleLikeFields"] = array();
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "t_delivery_expedition";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "t_delivery_id";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "t_delivery_expedition_name";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "t_delivery_expedition_type";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "t_delivery_expedition_awb";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "add_user";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "add_date";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "edit_user";
$tdatat_delivery_expedition_view[".googleLikeFields"][] = "edit_date";



$tdatat_delivery_expedition_view[".tableType"] = "list";

$tdatat_delivery_expedition_view[".printerPageOrientation"] = 0;
$tdatat_delivery_expedition_view[".nPrinterPageScale"] = 100;

$tdatat_delivery_expedition_view[".nPrinterSplitRecords"] = 40;

$tdatat_delivery_expedition_view[".geocodingEnabled"] = false;










$tdatat_delivery_expedition_view[".pageSize"] = 20;

$tdatat_delivery_expedition_view[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_delivery_expedition_view[".strOrderBy"] = $tstrOrderBy;

$tdatat_delivery_expedition_view[".orderindexes"] = array();


$tdatat_delivery_expedition_view[".sqlHead"] = "SELECT t_delivery_expedition,  	t_delivery_id,  	t_delivery_expedition_name,  	t_delivery_expedition_type,  	t_delivery_expedition_awb,  	add_user,  	add_date,  	edit_user,  	edit_date";
$tdatat_delivery_expedition_view[".sqlFrom"] = "FROM t_delivery_expedition";
$tdatat_delivery_expedition_view[".sqlWhereExpr"] = "";
$tdatat_delivery_expedition_view[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_delivery_expedition_view[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_delivery_expedition_view[".arrGroupsPerPage"] = $arrGPP;

$tdatat_delivery_expedition_view[".highlightSearchResults"] = true;

$tableKeyst_delivery_expedition_view = array();
$tableKeyst_delivery_expedition_view[] = "t_delivery_expedition";
$tdatat_delivery_expedition_view[".Keys"] = $tableKeyst_delivery_expedition_view;


$tdatat_delivery_expedition_view[".hideMobileList"] = array();




//	t_delivery_expedition
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_delivery_expedition";
	$fdata["GoodName"] = "t_delivery_expedition";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","t_delivery_expedition");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_delivery_expedition";

		$fdata["sourceSingle"] = "t_delivery_expedition";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_expedition";

	
	
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


	$tdatat_delivery_expedition_view["t_delivery_expedition"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "t_delivery_expedition";
//	t_delivery_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_delivery_id";
	$fdata["GoodName"] = "t_delivery_id";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","t_delivery_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_delivery_id";

		$fdata["sourceSingle"] = "t_delivery_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_id";

	
	
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


	$tdatat_delivery_expedition_view["t_delivery_id"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "t_delivery_id";
//	t_delivery_expedition_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_delivery_expedition_name";
	$fdata["GoodName"] = "t_delivery_expedition_name";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","t_delivery_expedition_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_expedition_name";

		$fdata["sourceSingle"] = "t_delivery_expedition_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_expedition_name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatat_delivery_expedition_view["t_delivery_expedition_name"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "t_delivery_expedition_name";
//	t_delivery_expedition_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_delivery_expedition_type";
	$fdata["GoodName"] = "t_delivery_expedition_type";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","t_delivery_expedition_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_expedition_type";

		$fdata["sourceSingle"] = "t_delivery_expedition_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_expedition_type";

	
	
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


	$tdatat_delivery_expedition_view["t_delivery_expedition_type"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "t_delivery_expedition_type";
//	t_delivery_expedition_awb
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_delivery_expedition_awb";
	$fdata["GoodName"] = "t_delivery_expedition_awb";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","t_delivery_expedition_awb");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_delivery_expedition_awb";

		$fdata["sourceSingle"] = "t_delivery_expedition_awb";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_delivery_expedition_awb";

	
	
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


	$tdatat_delivery_expedition_view["t_delivery_expedition_awb"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "t_delivery_expedition_awb";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","add_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "add_user";

		$fdata["sourceSingle"] = "add_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_user";

	
	
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


	$tdatat_delivery_expedition_view["add_user"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_delivery_expedition_view["add_date"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","edit_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "edit_user";

		$fdata["sourceSingle"] = "edit_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_user";

	
	
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


	$tdatat_delivery_expedition_view["edit_user"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_delivery_expedition";
	$fdata["Label"] = GetFieldLabel("t_delivery_expedition_view","edit_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatat_delivery_expedition_view["edit_date"] = $fdata;
		$tdatat_delivery_expedition_view[".searchableFields"][] = "edit_date";


$tables_data["t_delivery_expedition_view"]=&$tdatat_delivery_expedition_view;
$field_labels["t_delivery_expedition_view"] = &$fieldLabelst_delivery_expedition_view;
$fieldToolTips["t_delivery_expedition_view"] = &$fieldToolTipst_delivery_expedition_view;
$placeHolders["t_delivery_expedition_view"] = &$placeHolderst_delivery_expedition_view;
$page_titles["t_delivery_expedition_view"] = &$pageTitlest_delivery_expedition_view;


changeTextControlsToDate( "t_delivery_expedition_view" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_delivery_expedition_view"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_delivery_expedition_view"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="t_delivery";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="t_delivery";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "t_delivery";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["t_delivery_expedition_view"][0] = $masterParams;
				$masterTablesData["t_delivery_expedition_view"][0]["masterKeys"] = array();
	$masterTablesData["t_delivery_expedition_view"][0]["masterKeys"][]="t_delivery_id";
				$masterTablesData["t_delivery_expedition_view"][0]["detailKeys"] = array();
	$masterTablesData["t_delivery_expedition_view"][0]["detailKeys"][]="t_delivery_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_delivery_expedition_view()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_delivery_expedition,  	t_delivery_id,  	t_delivery_expedition_name,  	t_delivery_expedition_type,  	t_delivery_expedition_awb,  	add_user,  	add_date,  	edit_user,  	edit_date";
$proto0["m_strFrom"] = "FROM t_delivery_expedition";
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
	"m_strName" => "t_delivery_expedition",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto6["m_sql"] = "t_delivery_expedition";
$proto6["m_srcTableName"] = "t_delivery_expedition_view";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_id",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto8["m_sql"] = "t_delivery_id";
$proto8["m_srcTableName"] = "t_delivery_expedition_view";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_expedition_name",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto10["m_sql"] = "t_delivery_expedition_name";
$proto10["m_srcTableName"] = "t_delivery_expedition_view";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_expedition_type",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto12["m_sql"] = "t_delivery_expedition_type";
$proto12["m_srcTableName"] = "t_delivery_expedition_view";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_delivery_expedition_awb",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto14["m_sql"] = "t_delivery_expedition_awb";
$proto14["m_srcTableName"] = "t_delivery_expedition_view";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto16["m_sql"] = "add_user";
$proto16["m_srcTableName"] = "t_delivery_expedition_view";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto18["m_sql"] = "add_date";
$proto18["m_srcTableName"] = "t_delivery_expedition_view";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto20["m_sql"] = "edit_user";
$proto20["m_srcTableName"] = "t_delivery_expedition_view";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_delivery_expedition",
	"m_srcTableName" => "t_delivery_expedition_view"
));

$proto22["m_sql"] = "edit_date";
$proto22["m_srcTableName"] = "t_delivery_expedition_view";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "t_delivery_expedition";
$proto25["m_srcTableName"] = "t_delivery_expedition_view";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "t_delivery_expedition";
$proto25["m_columns"][] = "t_delivery_id";
$proto25["m_columns"][] = "t_delivery_expedition_name";
$proto25["m_columns"][] = "t_delivery_expedition_type";
$proto25["m_columns"][] = "t_delivery_expedition_awb";
$proto25["m_columns"][] = "add_user";
$proto25["m_columns"][] = "add_date";
$proto25["m_columns"][] = "edit_user";
$proto25["m_columns"][] = "edit_date";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "t_delivery_expedition";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "t_delivery_expedition_view";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_delivery_expedition_view";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_delivery_expedition_view = createSqlQuery_t_delivery_expedition_view();


	
				;

									

$tdatat_delivery_expedition_view[".sqlquery"] = $queryData_t_delivery_expedition_view;



$tdatat_delivery_expedition_view[".hasEvents"] = false;

?>