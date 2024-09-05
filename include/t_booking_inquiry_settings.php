<?php
$tdatat_booking_inquiry = array();
$tdatat_booking_inquiry[".searchableFields"] = array();
$tdatat_booking_inquiry[".ShortName"] = "t_booking_inquiry";
$tdatat_booking_inquiry[".OwnerID"] = "";
$tdatat_booking_inquiry[".OriginalTable"] = "t_booking";


$tdatat_booking_inquiry[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_booking_inquiry[".originalPagesByType"] = $tdatat_booking_inquiry[".pagesByType"];
$tdatat_booking_inquiry[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_booking_inquiry[".originalPages"] = $tdatat_booking_inquiry[".pages"];
$tdatat_booking_inquiry[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_booking_inquiry[".originalDefaultPages"] = $tdatat_booking_inquiry[".defaultPages"];

//	field labels
$fieldLabelst_booking_inquiry = array();
$fieldToolTipst_booking_inquiry = array();
$pageTitlest_booking_inquiry = array();
$placeHolderst_booking_inquiry = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_booking_inquiry["English"] = array();
	$fieldToolTipst_booking_inquiry["English"] = array();
	$placeHolderst_booking_inquiry["English"] = array();
	$pageTitlest_booking_inquiry["English"] = array();
	$fieldLabelst_booking_inquiry["English"]["t_booking_id"] = "T Booking Id";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_id"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_id"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_no"] = "T Booking No";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_no"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_no"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_from_date"] = "To Date";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_from_date"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_from_date"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_to_date"] = "";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_to_date"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_to_date"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_from_time"] = "T Booking From Time";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_from_time"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_from_time"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_to_time"] = "T Booking To Time";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_to_time"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_to_time"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_destination"] = "Address";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_destination"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_destination"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_remarks"] = "Remarks";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_remarks"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_remarks"] = "";
	$fieldLabelst_booking_inquiry["English"]["add_user"] = "Add User";
	$fieldToolTipst_booking_inquiry["English"]["add_user"] = "";
	$placeHolderst_booking_inquiry["English"]["add_user"] = "";
	$fieldLabelst_booking_inquiry["English"]["add_date"] = "Add Date";
	$fieldToolTipst_booking_inquiry["English"]["add_date"] = "";
	$placeHolderst_booking_inquiry["English"]["add_date"] = "";
	$fieldLabelst_booking_inquiry["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_booking_inquiry["English"]["edit_user"] = "";
	$placeHolderst_booking_inquiry["English"]["edit_user"] = "";
	$fieldLabelst_booking_inquiry["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_booking_inquiry["English"]["edit_date"] = "";
	$placeHolderst_booking_inquiry["English"]["edit_date"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_status"] = "T Booking Status";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_status"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_status"] = "";
	$fieldLabelst_booking_inquiry["English"]["m_vehicle_id"] = "Vehicle";
	$fieldToolTipst_booking_inquiry["English"]["m_vehicle_id"] = "";
	$placeHolderst_booking_inquiry["English"]["m_vehicle_id"] = "";
	$fieldLabelst_booking_inquiry["English"]["t_booking_user"] = "Order by";
	$fieldToolTipst_booking_inquiry["English"]["t_booking_user"] = "";
	$placeHolderst_booking_inquiry["English"]["t_booking_user"] = "";
	$fieldLabelst_booking_inquiry["English"]["m_vehicle_driver"] = "Driver";
	$fieldToolTipst_booking_inquiry["English"]["m_vehicle_driver"] = "";
	$placeHolderst_booking_inquiry["English"]["m_vehicle_driver"] = "";
	$fieldLabelst_booking_inquiry["English"]["Voucher"] = "Voucher";
	$fieldToolTipst_booking_inquiry["English"]["Voucher"] = "";
	$placeHolderst_booking_inquiry["English"]["Voucher"] = "";
	$fieldLabelst_booking_inquiry["English"]["flag"] = "Flag";
	$fieldToolTipst_booking_inquiry["English"]["flag"] = "";
	$placeHolderst_booking_inquiry["English"]["flag"] = "";
	$fieldLabelst_booking_inquiry["English"]["fr_date"] = "Day";
	$fieldToolTipst_booking_inquiry["English"]["fr_date"] = "";
	$placeHolderst_booking_inquiry["English"]["fr_date"] = "";
	if (count($fieldToolTipst_booking_inquiry["English"]))
		$tdatat_booking_inquiry[".isUseToolTips"] = true;
}


	$tdatat_booking_inquiry[".NCSearch"] = true;



$tdatat_booking_inquiry[".shortTableName"] = "t_booking_inquiry";
$tdatat_booking_inquiry[".nSecOptions"] = 0;

$tdatat_booking_inquiry[".mainTableOwnerID"] = "";
$tdatat_booking_inquiry[".entityType"] = 1;
$tdatat_booking_inquiry[".connId"] = "u736239518tsundbat154412412";


$tdatat_booking_inquiry[".strOriginalTableName"] = "t_booking";

	



$tdatat_booking_inquiry[".showAddInPopup"] = false;

$tdatat_booking_inquiry[".showEditInPopup"] = false;

$tdatat_booking_inquiry[".showViewInPopup"] = false;

$tdatat_booking_inquiry[".listAjax"] = false;
//	temporary
//$tdatat_booking_inquiry[".listAjax"] = false;

	$tdatat_booking_inquiry[".audit"] = false;

	$tdatat_booking_inquiry[".locking"] = false;


$pages = $tdatat_booking_inquiry[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_booking_inquiry[".edit"] = true;
	$tdatat_booking_inquiry[".afterEditAction"] = 1;
	$tdatat_booking_inquiry[".closePopupAfterEdit"] = 1;
	$tdatat_booking_inquiry[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_booking_inquiry[".add"] = true;
$tdatat_booking_inquiry[".afterAddAction"] = 1;
$tdatat_booking_inquiry[".closePopupAfterAdd"] = 1;
$tdatat_booking_inquiry[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_booking_inquiry[".list"] = true;
}



$tdatat_booking_inquiry[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_booking_inquiry[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_booking_inquiry[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_booking_inquiry[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_booking_inquiry[".printFriendly"] = true;
}



$tdatat_booking_inquiry[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_booking_inquiry[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_booking_inquiry[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_booking_inquiry[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_booking_inquiry[".ajaxCodeSnippetAdded"] = false;

$tdatat_booking_inquiry[".buttonsAdded"] = false;

$tdatat_booking_inquiry[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_booking_inquiry[".isUseTimeForSearch"] = false;


$tdatat_booking_inquiry[".badgeColor"] = "EDCA00";


$tdatat_booking_inquiry[".allSearchFields"] = array();
$tdatat_booking_inquiry[".filterFields"] = array();
$tdatat_booking_inquiry[".requiredSearchFields"] = array();

$tdatat_booking_inquiry[".googleLikeFields"] = array();
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_id";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_no";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_from_date";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_to_date";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_from_time";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_to_time";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_destination";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_remarks";
$tdatat_booking_inquiry[".googleLikeFields"][] = "add_user";
$tdatat_booking_inquiry[".googleLikeFields"][] = "add_date";
$tdatat_booking_inquiry[".googleLikeFields"][] = "edit_user";
$tdatat_booking_inquiry[".googleLikeFields"][] = "edit_date";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_status";
$tdatat_booking_inquiry[".googleLikeFields"][] = "m_vehicle_id";
$tdatat_booking_inquiry[".googleLikeFields"][] = "t_booking_user";
$tdatat_booking_inquiry[".googleLikeFields"][] = "m_vehicle_driver";
$tdatat_booking_inquiry[".googleLikeFields"][] = "Voucher";
$tdatat_booking_inquiry[".googleLikeFields"][] = "fr_date";
$tdatat_booking_inquiry[".googleLikeFields"][] = "flag";



$tdatat_booking_inquiry[".tableType"] = "list";

$tdatat_booking_inquiry[".printerPageOrientation"] = 0;
$tdatat_booking_inquiry[".nPrinterPageScale"] = 100;

$tdatat_booking_inquiry[".nPrinterSplitRecords"] = 40;

$tdatat_booking_inquiry[".geocodingEnabled"] = false;










$tdatat_booking_inquiry[".pageSize"] = 20;

$tdatat_booking_inquiry[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_booking_inquiry[".strOrderBy"] = $tstrOrderBy;

$tdatat_booking_inquiry[".orderindexes"] = array();


$tdatat_booking_inquiry[".sqlHead"] = "SELECT t_booking_id,  t_booking_no,  t_booking_from_date,  t_booking_to_date,  t_booking_from_time,  t_booking_to_time,  t_booking_destination,  t_booking_remarks,  add_user,  add_date,  edit_user,  edit_date,  t_booking_status,  m_vehicle_id,  t_booking_user,  m_vehicle_driver,  Voucher,  DATE(t_booking_from_date) AS fr_date,  flag";
$tdatat_booking_inquiry[".sqlFrom"] = "FROM t_booking";
$tdatat_booking_inquiry[".sqlWhereExpr"] = "";
$tdatat_booking_inquiry[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_booking_inquiry[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_booking_inquiry[".arrGroupsPerPage"] = $arrGPP;

$tdatat_booking_inquiry[".highlightSearchResults"] = true;

$tableKeyst_booking_inquiry = array();
$tableKeyst_booking_inquiry[] = "t_booking_id";
$tdatat_booking_inquiry[".Keys"] = $tableKeyst_booking_inquiry;


$tdatat_booking_inquiry[".hideMobileList"] = array();




//	t_booking_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_booking_id";
	$fdata["GoodName"] = "t_booking_id";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_booking_id";

		$fdata["sourceSingle"] = "t_booking_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_id";

	
	
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


	$tdatat_booking_inquiry["t_booking_id"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_id";
//	t_booking_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_booking_no";
	$fdata["GoodName"] = "t_booking_no";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_no";

		$fdata["sourceSingle"] = "t_booking_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_no";

	
	
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


	$tdatat_booking_inquiry["t_booking_no"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_no";
//	t_booking_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_booking_from_date";
	$fdata["GoodName"] = "t_booking_from_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_from_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_booking_from_date";

		$fdata["sourceSingle"] = "t_booking_from_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_from_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatat_booking_inquiry["t_booking_from_date"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_from_date";
//	t_booking_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_booking_to_date";
	$fdata["GoodName"] = "t_booking_to_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_to_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_booking_to_date";

		$fdata["sourceSingle"] = "t_booking_to_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_to_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatat_booking_inquiry["t_booking_to_date"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_to_date";
//	t_booking_from_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_booking_from_time";
	$fdata["GoodName"] = "t_booking_from_time";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_from_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "t_booking_from_time";

		$fdata["sourceSingle"] = "t_booking_from_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_from_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatat_booking_inquiry["t_booking_from_time"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_from_time";
//	t_booking_to_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_booking_to_time";
	$fdata["GoodName"] = "t_booking_to_time";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_to_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "t_booking_to_time";

		$fdata["sourceSingle"] = "t_booking_to_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_to_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Time");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["timeFormatData"] = array(
		"showSeconds" => false,
		"showDaysInTotals" => false,
		"timeFormat" => 0
	);
	$vdata["timeFormatData"]["showSeconds"] = true;
	$vdata["timeFormatData"]["showDaysInTotals"] = true;

		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatat_booking_inquiry["t_booking_to_time"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_to_time";
//	t_booking_destination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_booking_destination";
	$fdata["GoodName"] = "t_booking_destination";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_destination");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_destination";

		$fdata["sourceSingle"] = "t_booking_destination";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_destination";

	
	
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


	$tdatat_booking_inquiry["t_booking_destination"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_destination";
//	t_booking_remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_booking_remarks";
	$fdata["GoodName"] = "t_booking_remarks";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_remarks");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_remarks";

		$fdata["sourceSingle"] = "t_booking_remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_remarks";

	
	
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


	$tdatat_booking_inquiry["t_booking_remarks"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_remarks";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","add_user");
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


	$tdatat_booking_inquiry["add_user"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","add_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "add_date";

		$fdata["sourceSingle"] = "add_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "add_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatat_booking_inquiry["add_date"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","edit_user");
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


	$tdatat_booking_inquiry["edit_user"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","edit_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "edit_date";

		$fdata["sourceSingle"] = "edit_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "edit_date";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatat_booking_inquiry["edit_date"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "edit_date";
//	t_booking_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_booking_status";
	$fdata["GoodName"] = "t_booking_status";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_status";

		$fdata["sourceSingle"] = "t_booking_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_status";

	
	
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


	$tdatat_booking_inquiry["t_booking_status"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_status";
//	m_vehicle_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "m_vehicle_id";
	$fdata["GoodName"] = "m_vehicle_id";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","m_vehicle_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_vehicle_id";

		$fdata["sourceSingle"] = "m_vehicle_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_vehicle";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "m_vehicle_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_vehicle_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatat_booking_inquiry["m_vehicle_id"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "m_vehicle_id";
//	t_booking_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_booking_user";
	$fdata["GoodName"] = "t_booking_user";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","t_booking_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_user";

		$fdata["sourceSingle"] = "t_booking_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_user";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "m_login";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "email";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "username";

	

	
	$edata["LookupOrderBy"] = "username";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
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


	$tdatat_booking_inquiry["t_booking_user"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "t_booking_user";
//	m_vehicle_driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "m_vehicle_driver";
	$fdata["GoodName"] = "m_vehicle_driver";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","m_vehicle_driver");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_vehicle_driver";

		$fdata["sourceSingle"] = "m_vehicle_driver";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_vehicle_driver";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatat_booking_inquiry["m_vehicle_driver"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "m_vehicle_driver";
//	Voucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Voucher";
	$fdata["GoodName"] = "Voucher";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","Voucher");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Voucher";

		$fdata["sourceSingle"] = "Voucher";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Voucher";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatat_booking_inquiry["Voucher"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "Voucher";
//	fr_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "fr_date";
	$fdata["GoodName"] = "fr_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","fr_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fr_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_booking_from_date)";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatat_booking_inquiry["fr_date"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "fr_date";
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking_inquiry","flag");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "flag";

		$fdata["sourceSingle"] = "flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "flag";

	
	
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


	$tdatat_booking_inquiry["flag"] = $fdata;
		$tdatat_booking_inquiry[".searchableFields"][] = "flag";


$tables_data["t_booking_inquiry"]=&$tdatat_booking_inquiry;
$field_labels["t_booking_inquiry"] = &$fieldLabelst_booking_inquiry;
$fieldToolTips["t_booking_inquiry"] = &$fieldToolTipst_booking_inquiry;
$placeHolders["t_booking_inquiry"] = &$placeHolderst_booking_inquiry;
$page_titles["t_booking_inquiry"] = &$pageTitlest_booking_inquiry;


changeTextControlsToDate( "t_booking_inquiry" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_booking_inquiry"] = array();
//	m_disposition
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_disposition";
		$detailsParam["dOriginalTable"] = "m_disposition";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_disposition";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_disposition");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_booking_inquiry"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_booking_inquiry"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_booking_inquiry"][$dIndex]["masterKeys"][]="t_booking_id";

				$detailsTablesData["t_booking_inquiry"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_booking_inquiry"][$dIndex]["detailKeys"][]="t_disposition_no";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_booking_inquiry"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_booking_inquiry()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_booking_id,  t_booking_no,  t_booking_from_date,  t_booking_to_date,  t_booking_from_time,  t_booking_to_time,  t_booking_destination,  t_booking_remarks,  add_user,  add_date,  edit_user,  edit_date,  t_booking_status,  m_vehicle_id,  t_booking_user,  m_vehicle_driver,  Voucher,  DATE(t_booking_from_date) AS fr_date,  flag";
$proto0["m_strFrom"] = "FROM t_booking";
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
	"m_strName" => "t_booking_id",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto6["m_sql"] = "t_booking_id";
$proto6["m_srcTableName"] = "t_booking_inquiry";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_no",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto8["m_sql"] = "t_booking_no";
$proto8["m_srcTableName"] = "t_booking_inquiry";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_from_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto10["m_sql"] = "t_booking_from_date";
$proto10["m_srcTableName"] = "t_booking_inquiry";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_to_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto12["m_sql"] = "t_booking_to_date";
$proto12["m_srcTableName"] = "t_booking_inquiry";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_from_time",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto14["m_sql"] = "t_booking_from_time";
$proto14["m_srcTableName"] = "t_booking_inquiry";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_to_time",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto16["m_sql"] = "t_booking_to_time";
$proto16["m_srcTableName"] = "t_booking_inquiry";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_destination",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto18["m_sql"] = "t_booking_destination";
$proto18["m_srcTableName"] = "t_booking_inquiry";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_remarks",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto20["m_sql"] = "t_booking_remarks";
$proto20["m_srcTableName"] = "t_booking_inquiry";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto22["m_sql"] = "add_user";
$proto22["m_srcTableName"] = "t_booking_inquiry";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto24["m_sql"] = "add_date";
$proto24["m_srcTableName"] = "t_booking_inquiry";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto26["m_sql"] = "edit_user";
$proto26["m_srcTableName"] = "t_booking_inquiry";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto28["m_sql"] = "edit_date";
$proto28["m_srcTableName"] = "t_booking_inquiry";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_status",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto30["m_sql"] = "t_booking_status";
$proto30["m_srcTableName"] = "t_booking_inquiry";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_id",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto32["m_sql"] = "m_vehicle_id";
$proto32["m_srcTableName"] = "t_booking_inquiry";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_user",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto34["m_sql"] = "t_booking_user";
$proto34["m_srcTableName"] = "t_booking_inquiry";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_driver",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto36["m_sql"] = "m_vehicle_driver";
$proto36["m_srcTableName"] = "t_booking_inquiry";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Voucher",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto38["m_sql"] = "Voucher";
$proto38["m_srcTableName"] = "t_booking_inquiry";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_booking_from_date"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto41);

$proto40["m_sql"] = "DATE(t_booking_from_date)";
$proto40["m_srcTableName"] = "t_booking_inquiry";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "fr_date";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking_inquiry"
));

$proto43["m_sql"] = "flag";
$proto43["m_srcTableName"] = "t_booking_inquiry";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strName"] = "t_booking";
$proto46["m_srcTableName"] = "t_booking_inquiry";
$proto46["m_columns"] = array();
$proto46["m_columns"][] = "t_booking_id";
$proto46["m_columns"][] = "t_booking_no";
$proto46["m_columns"][] = "t_booking_from_date";
$proto46["m_columns"][] = "t_booking_to_date";
$proto46["m_columns"][] = "t_booking_from_time";
$proto46["m_columns"][] = "t_booking_to_time";
$proto46["m_columns"][] = "t_booking_destination";
$proto46["m_columns"][] = "t_booking_remarks";
$proto46["m_columns"][] = "add_user";
$proto46["m_columns"][] = "add_date";
$proto46["m_columns"][] = "edit_user";
$proto46["m_columns"][] = "edit_date";
$proto46["m_columns"][] = "t_booking_status";
$proto46["m_columns"][] = "m_vehicle_id";
$proto46["m_columns"][] = "t_booking_user";
$proto46["m_columns"][] = "m_vehicle_driver";
$proto46["m_columns"][] = "Voucher";
$proto46["m_columns"][] = "flag";
$obj = new SQLTable($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "t_booking";
$proto45["m_alias"] = "";
$proto45["m_srcTableName"] = "t_booking_inquiry";
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_booking_inquiry";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_booking_inquiry = createSqlQuery_t_booking_inquiry();


	
				;

																			

$tdatat_booking_inquiry[".sqlquery"] = $queryData_t_booking_inquiry;



$tdatat_booking_inquiry[".hasEvents"] = false;

?>