<?php
$tdatat_booking = array();
$tdatat_booking[".searchableFields"] = array();
$tdatat_booking[".ShortName"] = "t_booking";
$tdatat_booking[".OwnerID"] = "";
$tdatat_booking[".OriginalTable"] = "t_booking";


$tdatat_booking[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_booking[".originalPagesByType"] = $tdatat_booking[".pagesByType"];
$tdatat_booking[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_booking[".originalPages"] = $tdatat_booking[".pages"];
$tdatat_booking[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_booking[".originalDefaultPages"] = $tdatat_booking[".defaultPages"];

//	field labels
$fieldLabelst_booking = array();
$fieldToolTipst_booking = array();
$pageTitlest_booking = array();
$placeHolderst_booking = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_booking["English"] = array();
	$fieldToolTipst_booking["English"] = array();
	$placeHolderst_booking["English"] = array();
	$pageTitlest_booking["English"] = array();
	$fieldLabelst_booking["English"]["t_booking_id"] = "T Booking Id";
	$fieldToolTipst_booking["English"]["t_booking_id"] = "";
	$placeHolderst_booking["English"]["t_booking_id"] = "";
	$fieldLabelst_booking["English"]["t_booking_no"] = "T Booking No";
	$fieldToolTipst_booking["English"]["t_booking_no"] = "";
	$placeHolderst_booking["English"]["t_booking_no"] = "";
	$fieldLabelst_booking["English"]["t_booking_from_date"] = "To Date";
	$fieldToolTipst_booking["English"]["t_booking_from_date"] = "";
	$placeHolderst_booking["English"]["t_booking_from_date"] = "";
	$fieldLabelst_booking["English"]["t_booking_to_date"] = "";
	$fieldToolTipst_booking["English"]["t_booking_to_date"] = "";
	$placeHolderst_booking["English"]["t_booking_to_date"] = "";
	$fieldLabelst_booking["English"]["t_booking_from_time"] = "From Time";
	$fieldToolTipst_booking["English"]["t_booking_from_time"] = "";
	$placeHolderst_booking["English"]["t_booking_from_time"] = "";
	$fieldLabelst_booking["English"]["t_booking_to_time"] = "To Time";
	$fieldToolTipst_booking["English"]["t_booking_to_time"] = "";
	$placeHolderst_booking["English"]["t_booking_to_time"] = "";
	$fieldLabelst_booking["English"]["t_booking_destination"] = "Address";
	$fieldToolTipst_booking["English"]["t_booking_destination"] = "";
	$placeHolderst_booking["English"]["t_booking_destination"] = "";
	$fieldLabelst_booking["English"]["t_booking_remarks"] = "Remarks";
	$fieldToolTipst_booking["English"]["t_booking_remarks"] = "";
	$placeHolderst_booking["English"]["t_booking_remarks"] = "";
	$fieldLabelst_booking["English"]["add_user"] = "Add User";
	$fieldToolTipst_booking["English"]["add_user"] = "";
	$placeHolderst_booking["English"]["add_user"] = "";
	$fieldLabelst_booking["English"]["add_date"] = "Add Date";
	$fieldToolTipst_booking["English"]["add_date"] = "";
	$placeHolderst_booking["English"]["add_date"] = "";
	$fieldLabelst_booking["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_booking["English"]["edit_user"] = "";
	$placeHolderst_booking["English"]["edit_user"] = "";
	$fieldLabelst_booking["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_booking["English"]["edit_date"] = "";
	$placeHolderst_booking["English"]["edit_date"] = "";
	$fieldLabelst_booking["English"]["t_booking_status"] = "T Booking Status";
	$fieldToolTipst_booking["English"]["t_booking_status"] = "";
	$placeHolderst_booking["English"]["t_booking_status"] = "";
	$fieldLabelst_booking["English"]["m_vehicle_id"] = "Vehicle";
	$fieldToolTipst_booking["English"]["m_vehicle_id"] = "";
	$placeHolderst_booking["English"]["m_vehicle_id"] = "";
	$fieldLabelst_booking["English"]["t_booking_user"] = "Order By ";
	$fieldToolTipst_booking["English"]["t_booking_user"] = "";
	$placeHolderst_booking["English"]["t_booking_user"] = "";
	$fieldLabelst_booking["English"]["m_vehicle_driver"] = "Driver";
	$fieldToolTipst_booking["English"]["m_vehicle_driver"] = "";
	$placeHolderst_booking["English"]["m_vehicle_driver"] = "";
	$fieldLabelst_booking["English"]["Voucher"] = "Voucher";
	$fieldToolTipst_booking["English"]["Voucher"] = "";
	$placeHolderst_booking["English"]["Voucher"] = "";
	$fieldLabelst_booking["English"]["flag"] = "Flag";
	$fieldToolTipst_booking["English"]["flag"] = "";
	$placeHolderst_booking["English"]["flag"] = "";
	$fieldLabelst_booking["English"]["fr_date"] = "Day";
	$fieldToolTipst_booking["English"]["fr_date"] = "";
	$placeHolderst_booking["English"]["fr_date"] = "";
	$fieldLabelst_booking["English"]["to_dt"] = "End";
	$fieldToolTipst_booking["English"]["to_dt"] = "";
	$placeHolderst_booking["English"]["to_dt"] = "";
	$pageTitlest_booking["English"]["add"] = "";
	$pageTitlest_booking["English"]["edit"] = "";
	$pageTitlest_booking["English"]["view"] = "";
	if (count($fieldToolTipst_booking["English"]))
		$tdatat_booking[".isUseToolTips"] = true;
}


	$tdatat_booking[".NCSearch"] = true;



$tdatat_booking[".shortTableName"] = "t_booking";
$tdatat_booking[".nSecOptions"] = 0;

$tdatat_booking[".mainTableOwnerID"] = "";
$tdatat_booking[".entityType"] = 0;
$tdatat_booking[".connId"] = "u736239518tsundbat154412412";


$tdatat_booking[".strOriginalTableName"] = "t_booking";

	



$tdatat_booking[".showAddInPopup"] = false;

$tdatat_booking[".showEditInPopup"] = false;

$tdatat_booking[".showViewInPopup"] = false;

$tdatat_booking[".listAjax"] = false;
//	temporary
//$tdatat_booking[".listAjax"] = false;

	$tdatat_booking[".audit"] = false;

	$tdatat_booking[".locking"] = false;


$pages = $tdatat_booking[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_booking[".edit"] = true;
	$tdatat_booking[".afterEditAction"] = 1;
	$tdatat_booking[".closePopupAfterEdit"] = 1;
	$tdatat_booking[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_booking[".add"] = true;
$tdatat_booking[".afterAddAction"] = 3;
$tdatat_booking[".closePopupAfterAdd"] = 1;
$tdatat_booking[".afterAddActionDetTable"] = "m_disposition";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_booking[".list"] = true;
}



$tdatat_booking[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_booking[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_booking[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_booking[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_booking[".printFriendly"] = true;
}



$tdatat_booking[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_booking[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_booking[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_booking[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_booking[".ajaxCodeSnippetAdded"] = false;

$tdatat_booking[".buttonsAdded"] = false;

$tdatat_booking[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_booking[".isUseTimeForSearch"] = false;


$tdatat_booking[".badgeColor"] = "DB7093";


$tdatat_booking[".allSearchFields"] = array();
$tdatat_booking[".filterFields"] = array();
$tdatat_booking[".requiredSearchFields"] = array();

$tdatat_booking[".googleLikeFields"] = array();
$tdatat_booking[".googleLikeFields"][] = "t_booking_id";
$tdatat_booking[".googleLikeFields"][] = "t_booking_no";
$tdatat_booking[".googleLikeFields"][] = "t_booking_from_date";
$tdatat_booking[".googleLikeFields"][] = "t_booking_to_date";
$tdatat_booking[".googleLikeFields"][] = "t_booking_from_time";
$tdatat_booking[".googleLikeFields"][] = "t_booking_to_time";
$tdatat_booking[".googleLikeFields"][] = "t_booking_destination";
$tdatat_booking[".googleLikeFields"][] = "t_booking_remarks";
$tdatat_booking[".googleLikeFields"][] = "add_user";
$tdatat_booking[".googleLikeFields"][] = "add_date";
$tdatat_booking[".googleLikeFields"][] = "edit_user";
$tdatat_booking[".googleLikeFields"][] = "edit_date";
$tdatat_booking[".googleLikeFields"][] = "t_booking_status";
$tdatat_booking[".googleLikeFields"][] = "m_vehicle_id";
$tdatat_booking[".googleLikeFields"][] = "fr_date";
$tdatat_booking[".googleLikeFields"][] = "to_dt";
$tdatat_booking[".googleLikeFields"][] = "t_booking_user";
$tdatat_booking[".googleLikeFields"][] = "m_vehicle_driver";
$tdatat_booking[".googleLikeFields"][] = "Voucher";
$tdatat_booking[".googleLikeFields"][] = "flag";



$tdatat_booking[".tableType"] = "list";

$tdatat_booking[".printerPageOrientation"] = 0;
$tdatat_booking[".nPrinterPageScale"] = 100;

$tdatat_booking[".nPrinterSplitRecords"] = 40;

$tdatat_booking[".geocodingEnabled"] = false;










$tdatat_booking[".pageSize"] = 20;

$tdatat_booking[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_booking[".strOrderBy"] = $tstrOrderBy;

$tdatat_booking[".orderindexes"] = array();


$tdatat_booking[".sqlHead"] = "SELECT t_booking_id,  t_booking_no,  t_booking_from_date,  t_booking_to_date,  t_booking_from_time,  t_booking_to_time,  t_booking_destination,  t_booking_remarks,  add_user,  add_date,  edit_user,  edit_date,  t_booking_status,  m_vehicle_id,  DATE(t_booking_from_date) AS fr_date,  DATE(t_booking_to_date) AS to_dt,  t_booking_user,  m_vehicle_driver,  Voucher,  flag";
$tdatat_booking[".sqlFrom"] = "FROM t_booking";
$tdatat_booking[".sqlWhereExpr"] = "";
$tdatat_booking[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_booking[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_booking[".arrGroupsPerPage"] = $arrGPP;

$tdatat_booking[".highlightSearchResults"] = true;

$tableKeyst_booking = array();
$tableKeyst_booking[] = "t_booking_id";
$tdatat_booking[".Keys"] = $tableKeyst_booking;


$tdatat_booking[".hideMobileList"] = array();




//	t_booking_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_booking_id";
	$fdata["GoodName"] = "t_booking_id";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_id");
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


	$tdatat_booking["t_booking_id"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_id";
//	t_booking_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_booking_no";
	$fdata["GoodName"] = "t_booking_no";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_no");
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


	$tdatat_booking["t_booking_no"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_no";
//	t_booking_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_booking_from_date";
	$fdata["GoodName"] = "t_booking_from_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_from_date");
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


	$tdatat_booking["t_booking_from_date"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_from_date";
//	t_booking_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_booking_to_date";
	$fdata["GoodName"] = "t_booking_to_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_to_date");
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


	$tdatat_booking["t_booking_to_date"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_to_date";
//	t_booking_from_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_booking_from_time";
	$fdata["GoodName"] = "t_booking_from_time";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_from_time");
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


	$tdatat_booking["t_booking_from_time"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_from_time";
//	t_booking_to_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_booking_to_time";
	$fdata["GoodName"] = "t_booking_to_time";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_to_time");
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


	$tdatat_booking["t_booking_to_time"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_to_time";
//	t_booking_destination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_booking_destination";
	$fdata["GoodName"] = "t_booking_destination";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_destination");
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


	$tdatat_booking["t_booking_destination"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_destination";
//	t_booking_remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_booking_remarks";
	$fdata["GoodName"] = "t_booking_remarks";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_remarks");
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


	$tdatat_booking["t_booking_remarks"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_remarks";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","add_user");
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


	$tdatat_booking["add_user"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","add_date");
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


	$tdatat_booking["add_date"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","edit_user");
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


	$tdatat_booking["edit_user"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","edit_date");
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


	$tdatat_booking["edit_date"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "edit_date";
//	t_booking_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_booking_status";
	$fdata["GoodName"] = "t_booking_status";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_status");
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


	$tdatat_booking["t_booking_status"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_status";
//	m_vehicle_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "m_vehicle_id";
	$fdata["GoodName"] = "m_vehicle_id";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","m_vehicle_id");
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


	$tdatat_booking["m_vehicle_id"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "m_vehicle_id";
//	fr_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fr_date";
	$fdata["GoodName"] = "fr_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_booking","fr_date");
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


	$tdatat_booking["fr_date"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "fr_date";
//	to_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "to_dt";
	$fdata["GoodName"] = "to_dt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_booking","to_dt");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "to_dt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_booking_to_date)";

	
	
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


	$tdatat_booking["to_dt"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "to_dt";
//	t_booking_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "t_booking_user";
	$fdata["GoodName"] = "t_booking_user";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","t_booking_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_booking_user";

		$fdata["sourceSingle"] = "t_booking_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_booking_user";

	
	
			
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


	$tdatat_booking["t_booking_user"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "t_booking_user";
//	m_vehicle_driver
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "m_vehicle_driver";
	$fdata["GoodName"] = "m_vehicle_driver";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","m_vehicle_driver");
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


	$tdatat_booking["m_vehicle_driver"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "m_vehicle_driver";
//	Voucher
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Voucher";
	$fdata["GoodName"] = "Voucher";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","Voucher");
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


	$tdatat_booking["Voucher"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "Voucher";
//	flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "flag";
	$fdata["GoodName"] = "flag";
	$fdata["ownerTable"] = "t_booking";
	$fdata["Label"] = GetFieldLabel("t_booking","flag");
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


	$tdatat_booking["flag"] = $fdata;
		$tdatat_booking[".searchableFields"][] = "flag";


$tables_data["t_booking"]=&$tdatat_booking;
$field_labels["t_booking"] = &$fieldLabelst_booking;
$fieldToolTips["t_booking"] = &$fieldToolTipst_booking;
$placeHolders["t_booking"] = &$placeHolderst_booking;
$page_titles["t_booking"] = &$pageTitlest_booking;


changeTextControlsToDate( "t_booking" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_booking"] = array();
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


		
	$detailsTablesData["t_booking"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_booking"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_booking"][$dIndex]["masterKeys"][]="t_booking_id";

				$detailsTablesData["t_booking"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_booking"][$dIndex]["detailKeys"][]="t_disposition_no";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_booking"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_booking()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_booking_id,  t_booking_no,  t_booking_from_date,  t_booking_to_date,  t_booking_from_time,  t_booking_to_time,  t_booking_destination,  t_booking_remarks,  add_user,  add_date,  edit_user,  edit_date,  t_booking_status,  m_vehicle_id,  DATE(t_booking_from_date) AS fr_date,  DATE(t_booking_to_date) AS to_dt,  t_booking_user,  m_vehicle_driver,  Voucher,  flag";
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
	"m_srcTableName" => "t_booking"
));

$proto6["m_sql"] = "t_booking_id";
$proto6["m_srcTableName"] = "t_booking";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_no",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto8["m_sql"] = "t_booking_no";
$proto8["m_srcTableName"] = "t_booking";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_from_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto10["m_sql"] = "t_booking_from_date";
$proto10["m_srcTableName"] = "t_booking";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_to_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto12["m_sql"] = "t_booking_to_date";
$proto12["m_srcTableName"] = "t_booking";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_from_time",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto14["m_sql"] = "t_booking_from_time";
$proto14["m_srcTableName"] = "t_booking";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_to_time",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto16["m_sql"] = "t_booking_to_time";
$proto16["m_srcTableName"] = "t_booking";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_destination",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto18["m_sql"] = "t_booking_destination";
$proto18["m_srcTableName"] = "t_booking";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_remarks",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto20["m_sql"] = "t_booking_remarks";
$proto20["m_srcTableName"] = "t_booking";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto22["m_sql"] = "add_user";
$proto22["m_srcTableName"] = "t_booking";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto24["m_sql"] = "add_date";
$proto24["m_srcTableName"] = "t_booking";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto26["m_sql"] = "edit_user";
$proto26["m_srcTableName"] = "t_booking";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto28["m_sql"] = "edit_date";
$proto28["m_srcTableName"] = "t_booking";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_status",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto30["m_sql"] = "t_booking_status";
$proto30["m_srcTableName"] = "t_booking";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_id",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto32["m_sql"] = "m_vehicle_id";
$proto32["m_srcTableName"] = "t_booking";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$proto35=array();
$proto35["m_functiontype"] = "SQLF_CUSTOM";
$proto35["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_booking_from_date"
));

$proto35["m_arguments"][]=$obj;
$proto35["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto35);

$proto34["m_sql"] = "DATE(t_booking_from_date)";
$proto34["m_srcTableName"] = "t_booking";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "fr_date";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$proto38=array();
$proto38["m_functiontype"] = "SQLF_CUSTOM";
$proto38["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_booking_to_date"
));

$proto38["m_arguments"][]=$obj;
$proto38["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto38);

$proto37["m_sql"] = "DATE(t_booking_to_date)";
$proto37["m_srcTableName"] = "t_booking";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "to_dt";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "t_booking_user",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto40["m_sql"] = "t_booking_user";
$proto40["m_srcTableName"] = "t_booking";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "m_vehicle_driver",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto42["m_sql"] = "m_vehicle_driver";
$proto42["m_srcTableName"] = "t_booking";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Voucher",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto44["m_sql"] = "Voucher";
$proto44["m_srcTableName"] = "t_booking";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "flag",
	"m_strTable" => "t_booking",
	"m_srcTableName" => "t_booking"
));

$proto46["m_sql"] = "flag";
$proto46["m_srcTableName"] = "t_booking";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "t_booking";
$proto49["m_srcTableName"] = "t_booking";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "t_booking_id";
$proto49["m_columns"][] = "t_booking_no";
$proto49["m_columns"][] = "t_booking_from_date";
$proto49["m_columns"][] = "t_booking_to_date";
$proto49["m_columns"][] = "t_booking_from_time";
$proto49["m_columns"][] = "t_booking_to_time";
$proto49["m_columns"][] = "t_booking_destination";
$proto49["m_columns"][] = "t_booking_remarks";
$proto49["m_columns"][] = "add_user";
$proto49["m_columns"][] = "add_date";
$proto49["m_columns"][] = "edit_user";
$proto49["m_columns"][] = "edit_date";
$proto49["m_columns"][] = "t_booking_status";
$proto49["m_columns"][] = "m_vehicle_id";
$proto49["m_columns"][] = "t_booking_user";
$proto49["m_columns"][] = "m_vehicle_driver";
$proto49["m_columns"][] = "Voucher";
$proto49["m_columns"][] = "flag";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "t_booking";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "t_booking";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_booking";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_booking = createSqlQuery_t_booking();


	
				;

																				

$tdatat_booking[".sqlquery"] = $queryData_t_booking;



include_once(getabspath("include/t_booking_events.php"));
$tdatat_booking[".hasEvents"] = true;

?>