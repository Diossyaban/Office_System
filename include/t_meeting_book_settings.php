<?php
$tdatat_meeting_book = array();
$tdatat_meeting_book[".searchableFields"] = array();
$tdatat_meeting_book[".ShortName"] = "t_meeting_book";
$tdatat_meeting_book[".OwnerID"] = "";
$tdatat_meeting_book[".OriginalTable"] = "t_meeting_book";


$tdatat_meeting_book[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatat_meeting_book[".originalPagesByType"] = $tdatat_meeting_book[".pagesByType"];
$tdatat_meeting_book[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatat_meeting_book[".originalPages"] = $tdatat_meeting_book[".pages"];
$tdatat_meeting_book[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatat_meeting_book[".originalDefaultPages"] = $tdatat_meeting_book[".defaultPages"];

//	field labels
$fieldLabelst_meeting_book = array();
$fieldToolTipst_meeting_book = array();
$pageTitlest_meeting_book = array();
$placeHolderst_meeting_book = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_meeting_book["English"] = array();
	$fieldToolTipst_meeting_book["English"] = array();
	$placeHolderst_meeting_book["English"] = array();
	$pageTitlest_meeting_book["English"] = array();
	$fieldLabelst_meeting_book["English"]["t_meeting_id"] = "T Meeting Id";
	$fieldToolTipst_meeting_book["English"]["t_meeting_id"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_id"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_roomid"] = "Room";
	$fieldToolTipst_meeting_book["English"]["t_meeting_roomid"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_roomid"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_no"] = "T Meeting No";
	$fieldToolTipst_meeting_book["English"]["t_meeting_no"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_no"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_user"] = "Reserver";
	$fieldToolTipst_meeting_book["English"]["t_meeting_user"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_user"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_desc"] = "Description";
	$fieldToolTipst_meeting_book["English"]["t_meeting_desc"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_desc"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_from_date"] = "Meeting hours";
	$fieldToolTipst_meeting_book["English"]["t_meeting_from_date"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_from_date"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_to_date"] = "To";
	$fieldToolTipst_meeting_book["English"]["t_meeting_to_date"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_to_date"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_from_time"] = "T Meeting From Time";
	$fieldToolTipst_meeting_book["English"]["t_meeting_from_time"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_from_time"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_to_time"] = "T Meeting To Time";
	$fieldToolTipst_meeting_book["English"]["t_meeting_to_time"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_to_time"] = "";
	$fieldLabelst_meeting_book["English"]["user_participant_list"] = "Participant";
	$fieldToolTipst_meeting_book["English"]["user_participant_list"] = "";
	$placeHolderst_meeting_book["English"]["user_participant_list"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_participant_type"] = "Participant Type";
	$fieldToolTipst_meeting_book["English"]["t_meeting_participant_type"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_participant_type"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_total_participant"] = "Amount of Participant  ";
	$fieldToolTipst_meeting_book["English"]["t_meeting_total_participant"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_total_participant"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_isminuman"] = "T Meeting Isminuman";
	$fieldToolTipst_meeting_book["English"]["t_meeting_isminuman"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_isminuman"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_issnack"] = "T Meeting Issnack";
	$fieldToolTipst_meeting_book["English"]["t_meeting_issnack"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_issnack"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_ismakan"] = "T Meeting Ismakan";
	$fieldToolTipst_meeting_book["English"]["t_meeting_ismakan"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_ismakan"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_recurring_flag"] = "T Meeting Recurring Flag";
	$fieldToolTipst_meeting_book["English"]["t_meeting_recurring_flag"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_recurring_flag"] = "";
	$fieldLabelst_meeting_book["English"]["t_meeting_status"] = "T Meeting Status";
	$fieldToolTipst_meeting_book["English"]["t_meeting_status"] = "";
	$placeHolderst_meeting_book["English"]["t_meeting_status"] = "";
	$fieldLabelst_meeting_book["English"]["add_user"] = "Add User";
	$fieldToolTipst_meeting_book["English"]["add_user"] = "";
	$placeHolderst_meeting_book["English"]["add_user"] = "";
	$fieldLabelst_meeting_book["English"]["add_date"] = "Add Date";
	$fieldToolTipst_meeting_book["English"]["add_date"] = "";
	$placeHolderst_meeting_book["English"]["add_date"] = "";
	$fieldLabelst_meeting_book["English"]["edit_user"] = "Edit User";
	$fieldToolTipst_meeting_book["English"]["edit_user"] = "";
	$placeHolderst_meeting_book["English"]["edit_user"] = "";
	$fieldLabelst_meeting_book["English"]["edit_date"] = "Edit Date";
	$fieldToolTipst_meeting_book["English"]["edit_date"] = "";
	$placeHolderst_meeting_book["English"]["edit_date"] = "";
	$fieldLabelst_meeting_book["English"]["fr_date"] = "Date";
	$fieldToolTipst_meeting_book["English"]["fr_date"] = "";
	$placeHolderst_meeting_book["English"]["fr_date"] = "";
	$fieldLabelst_meeting_book["English"]["to_dt"] = "To Dt";
	$fieldToolTipst_meeting_book["English"]["to_dt"] = "";
	$placeHolderst_meeting_book["English"]["to_dt"] = "";
	$fieldLabelst_meeting_book["English"]["fr_time"] = "Fr Time";
	$fieldToolTipst_meeting_book["English"]["fr_time"] = "";
	$placeHolderst_meeting_book["English"]["fr_time"] = "";
	$fieldLabelst_meeting_book["English"]["to_time"] = "To Time";
	$fieldToolTipst_meeting_book["English"]["to_time"] = "";
	$placeHolderst_meeting_book["English"]["to_time"] = "";
	$fieldLabelst_meeting_book["English"]["meet_approve"] = "Meet Approve";
	$fieldToolTipst_meeting_book["English"]["meet_approve"] = "";
	$placeHolderst_meeting_book["English"]["meet_approve"] = "";
	$pageTitlest_meeting_book["English"]["add"] = "Room Reservation";
	$pageTitlest_meeting_book["English"]["edit"] = "Room Reservation";
	if (count($fieldToolTipst_meeting_book["English"]))
		$tdatat_meeting_book[".isUseToolTips"] = true;
}


	$tdatat_meeting_book[".NCSearch"] = true;



$tdatat_meeting_book[".shortTableName"] = "t_meeting_book";
$tdatat_meeting_book[".nSecOptions"] = 0;

$tdatat_meeting_book[".mainTableOwnerID"] = "";
$tdatat_meeting_book[".entityType"] = 0;
$tdatat_meeting_book[".connId"] = "u736239518tsundbat154412412";


$tdatat_meeting_book[".strOriginalTableName"] = "t_meeting_book";

	



$tdatat_meeting_book[".showAddInPopup"] = false;

$tdatat_meeting_book[".showEditInPopup"] = false;

$tdatat_meeting_book[".showViewInPopup"] = false;

$tdatat_meeting_book[".listAjax"] = false;
//	temporary
//$tdatat_meeting_book[".listAjax"] = false;

	$tdatat_meeting_book[".audit"] = false;

	$tdatat_meeting_book[".locking"] = false;


$pages = $tdatat_meeting_book[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_meeting_book[".edit"] = true;
	$tdatat_meeting_book[".afterEditAction"] = 1;
	$tdatat_meeting_book[".closePopupAfterEdit"] = 1;
	$tdatat_meeting_book[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_meeting_book[".add"] = true;
$tdatat_meeting_book[".afterAddAction"] = 1;
$tdatat_meeting_book[".closePopupAfterAdd"] = 1;
$tdatat_meeting_book[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_meeting_book[".list"] = true;
}



$tdatat_meeting_book[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_meeting_book[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_meeting_book[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_meeting_book[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_meeting_book[".printFriendly"] = true;
}



$tdatat_meeting_book[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_meeting_book[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_meeting_book[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_meeting_book[".isUseAjaxSuggest"] = true;



																																												
								

$tdatat_meeting_book[".ajaxCodeSnippetAdded"] = false;

$tdatat_meeting_book[".buttonsAdded"] = true;

$tdatat_meeting_book[".addPageEvents"] = true;

// use timepicker for search panel
$tdatat_meeting_book[".isUseTimeForSearch"] = false;


$tdatat_meeting_book[".badgeColor"] = "B22222";


$tdatat_meeting_book[".allSearchFields"] = array();
$tdatat_meeting_book[".filterFields"] = array();
$tdatat_meeting_book[".requiredSearchFields"] = array();

$tdatat_meeting_book[".googleLikeFields"] = array();
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_id";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_roomid";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_no";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_user";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_desc";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_from_date";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_to_date";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_from_time";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_to_time";
$tdatat_meeting_book[".googleLikeFields"][] = "user_participant_list";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_participant_type";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_total_participant";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_isminuman";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_issnack";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_ismakan";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_recurring_flag";
$tdatat_meeting_book[".googleLikeFields"][] = "t_meeting_status";
$tdatat_meeting_book[".googleLikeFields"][] = "add_user";
$tdatat_meeting_book[".googleLikeFields"][] = "add_date";
$tdatat_meeting_book[".googleLikeFields"][] = "edit_user";
$tdatat_meeting_book[".googleLikeFields"][] = "edit_date";
$tdatat_meeting_book[".googleLikeFields"][] = "fr_date";
$tdatat_meeting_book[".googleLikeFields"][] = "to_dt";
$tdatat_meeting_book[".googleLikeFields"][] = "fr_time";
$tdatat_meeting_book[".googleLikeFields"][] = "to_time";
$tdatat_meeting_book[".googleLikeFields"][] = "meet_approve";



$tdatat_meeting_book[".tableType"] = "list";

$tdatat_meeting_book[".printerPageOrientation"] = 0;
$tdatat_meeting_book[".nPrinterPageScale"] = 100;

$tdatat_meeting_book[".nPrinterSplitRecords"] = 40;

$tdatat_meeting_book[".geocodingEnabled"] = false;




$tdatat_meeting_book[".isDisplayLoading"] = true;






$tdatat_meeting_book[".pageSize"] = 20;

$tdatat_meeting_book[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_meeting_book[".strOrderBy"] = $tstrOrderBy;

$tdatat_meeting_book[".orderindexes"] = array();


$tdatat_meeting_book[".sqlHead"] = "SELECT t_meeting_id,  t_meeting_roomid,  t_meeting_no,  t_meeting_user,  t_meeting_desc,  t_meeting_from_date,  t_meeting_to_date,  t_meeting_from_time,  t_meeting_to_time,  user_participant_list,  t_meeting_participant_type,  t_meeting_total_participant,  t_meeting_isminuman,  t_meeting_issnack,  t_meeting_ismakan,  t_meeting_recurring_flag,  t_meeting_status,  add_user,  add_date,  edit_user,  edit_date,  DATE(t_meeting_from_date) AS fr_date,  DATE(t_meeting_to_date) AS to_dt,  TIME(t_meeting_from_date) AS fr_time,  TIME(t_meeting_to_date) AS to_time,  meet_approve";
$tdatat_meeting_book[".sqlFrom"] = "FROM t_meeting_book";
$tdatat_meeting_book[".sqlWhereExpr"] = "(add_user = ':session.UserID')  AND (meet_approve =1)";
$tdatat_meeting_book[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_meeting_book[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_meeting_book[".arrGroupsPerPage"] = $arrGPP;

$tdatat_meeting_book[".highlightSearchResults"] = true;

$tableKeyst_meeting_book = array();
$tableKeyst_meeting_book[] = "t_meeting_id";
$tdatat_meeting_book[".Keys"] = $tableKeyst_meeting_book;


$tdatat_meeting_book[".hideMobileList"] = array();




//	t_meeting_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "t_meeting_id";
	$fdata["GoodName"] = "t_meeting_id";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "t_meeting_id";

		$fdata["sourceSingle"] = "t_meeting_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_id";

	
	
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


	$tdatat_meeting_book["t_meeting_id"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_id";
//	t_meeting_roomid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "t_meeting_roomid";
	$fdata["GoodName"] = "t_meeting_roomid";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_roomid");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_roomid";

		$fdata["sourceSingle"] = "t_meeting_roomid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_roomid";

	
	
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
	$edata["LookupTable"] = "m_meeting_room";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
			$edata["LookupUnique"] = true;

	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "m_meeting_room_name";

				$edata["LookupWhere"] = "(capacity = 18 AND :session.peserta > 10) OR  (capacity = 12 AND :session.peserta > 6 AND :session.peserta <= 12) OR  (capacity = 6 AND :session.peserta > 2 AND :session.peserta <= 6) OR  (capacity = 4 AND :session.peserta <= 4)";


	
	$edata["LookupOrderBy"] = "m_meeting_room_name";

	
	
	
	

	
	
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


	$tdatat_meeting_book["t_meeting_roomid"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_roomid";
//	t_meeting_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "t_meeting_no";
	$fdata["GoodName"] = "t_meeting_no";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_no";

		$fdata["sourceSingle"] = "t_meeting_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_no";

	
	
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


	$tdatat_meeting_book["t_meeting_no"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_no";
//	t_meeting_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "t_meeting_user";
	$fdata["GoodName"] = "t_meeting_user";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_user";

		$fdata["sourceSingle"] = "t_meeting_user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_user";

	
	
			
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

	
		
	$edata["LinkField"] = "username";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fullname";

				$edata["LookupWhere"] = "is_active =1";


	
	$edata["LookupOrderBy"] = "fullname";

	
	
	
	

	
	
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


	$tdatat_meeting_book["t_meeting_user"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_user";
//	t_meeting_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "t_meeting_desc";
	$fdata["GoodName"] = "t_meeting_desc";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_desc";

		$fdata["sourceSingle"] = "t_meeting_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_desc";

	
	
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


	$tdatat_meeting_book["t_meeting_desc"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_desc";
//	t_meeting_from_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "t_meeting_from_date";
	$fdata["GoodName"] = "t_meeting_from_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_from_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_meeting_from_date";

		$fdata["sourceSingle"] = "t_meeting_from_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_from_date";

	
	
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
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



	
	
	
	
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


	$tdatat_meeting_book["t_meeting_from_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_from_date";
//	t_meeting_to_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "t_meeting_to_date";
	$fdata["GoodName"] = "t_meeting_to_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_to_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "t_meeting_to_date";

		$fdata["sourceSingle"] = "t_meeting_to_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_to_date";

	
	
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
	$edata["weekdays"] = "[1,2,3,4,5]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
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


	$tdatat_meeting_book["t_meeting_to_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_to_date";
//	t_meeting_from_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "t_meeting_from_time";
	$fdata["GoodName"] = "t_meeting_from_time";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_from_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "t_meeting_from_time";

		$fdata["sourceSingle"] = "t_meeting_from_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_from_time";

	
	
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


	$tdatat_meeting_book["t_meeting_from_time"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_from_time";
//	t_meeting_to_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "t_meeting_to_time";
	$fdata["GoodName"] = "t_meeting_to_time";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_to_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "t_meeting_to_time";

		$fdata["sourceSingle"] = "t_meeting_to_time";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_to_time";

	
	
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


	$tdatat_meeting_book["t_meeting_to_time"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_to_time";
//	user_participant_list
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "user_participant_list";
	$fdata["GoodName"] = "user_participant_list";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","user_participant_list");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user_participant_list";

		$fdata["sourceSingle"] = "user_participant_list";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "user_participant_list";

	
	
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
	$edata["LookupTable"] = "View";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "t_employee_email_company";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "t_employee_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

	
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


	$tdatat_meeting_book["user_participant_list"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "user_participant_list";
//	t_meeting_participant_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "t_meeting_participant_type";
	$fdata["GoodName"] = "t_meeting_participant_type";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_participant_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_participant_type";

		$fdata["sourceSingle"] = "t_meeting_participant_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_participant_type";

	
	
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
	$edata["LookupTable"] = "m_participant_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "Type";

	

	
	$edata["LookupOrderBy"] = "ID";

	
	
	
	

	
	
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


	$tdatat_meeting_book["t_meeting_participant_type"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_participant_type";
//	t_meeting_total_participant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "t_meeting_total_participant";
	$fdata["GoodName"] = "t_meeting_total_participant";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_total_participant");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_total_participant";

		$fdata["sourceSingle"] = "t_meeting_total_participant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_total_participant";

	
	
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


	
		$eventsData = array();
	$eventsData[] = array( "name" => "t_meeting_total_participant_event", "type" => "change" );
	$edata["fieldEvents"] = $eventsData;




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


	$tdatat_meeting_book["t_meeting_total_participant"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_total_participant";
//	t_meeting_isminuman
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "t_meeting_isminuman";
	$fdata["GoodName"] = "t_meeting_isminuman";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_isminuman");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_isminuman";

		$fdata["sourceSingle"] = "t_meeting_isminuman";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_isminuman";

	
	
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


	$tdatat_meeting_book["t_meeting_isminuman"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_isminuman";
//	t_meeting_issnack
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "t_meeting_issnack";
	$fdata["GoodName"] = "t_meeting_issnack";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_issnack");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_issnack";

		$fdata["sourceSingle"] = "t_meeting_issnack";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_issnack";

	
	
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


	$tdatat_meeting_book["t_meeting_issnack"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_issnack";
//	t_meeting_ismakan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "t_meeting_ismakan";
	$fdata["GoodName"] = "t_meeting_ismakan";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_ismakan");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_ismakan";

		$fdata["sourceSingle"] = "t_meeting_ismakan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_ismakan";

	
	
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


	$tdatat_meeting_book["t_meeting_ismakan"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_ismakan";
//	t_meeting_recurring_flag
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "t_meeting_recurring_flag";
	$fdata["GoodName"] = "t_meeting_recurring_flag";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_recurring_flag");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "t_meeting_recurring_flag";

		$fdata["sourceSingle"] = "t_meeting_recurring_flag";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_recurring_flag";

	
	
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


	$tdatat_meeting_book["t_meeting_recurring_flag"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_recurring_flag";
//	t_meeting_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "t_meeting_status";
	$fdata["GoodName"] = "t_meeting_status";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","t_meeting_status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "t_meeting_status";

		$fdata["sourceSingle"] = "t_meeting_status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "t_meeting_status";

	
	
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


	$tdatat_meeting_book["t_meeting_status"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "t_meeting_status";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","add_user");
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


	$tdatat_meeting_book["add_user"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","add_date");
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


	$tdatat_meeting_book["add_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","edit_user");
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


	$tdatat_meeting_book["edit_user"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","edit_date");
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


	$tdatat_meeting_book["edit_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "edit_date";
//	fr_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "fr_date";
	$fdata["GoodName"] = "fr_date";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","fr_date");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fr_date";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_meeting_from_date)";

	
	
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


	$tdatat_meeting_book["fr_date"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "fr_date";
//	to_dt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "to_dt";
	$fdata["GoodName"] = "to_dt";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","to_dt");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "to_dt";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DATE(t_meeting_to_date)";

	
	
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


	$tdatat_meeting_book["to_dt"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "to_dt";
//	fr_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "fr_time";
	$fdata["GoodName"] = "fr_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","fr_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "fr_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIME(t_meeting_from_date)";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatat_meeting_book["fr_time"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "fr_time";
//	to_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "to_time";
	$fdata["GoodName"] = "to_time";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","to_time");
	$fdata["FieldType"] = 134;


	
	
			

		$fdata["strField"] = "to_time";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIME(t_meeting_to_date)";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatat_meeting_book["to_time"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "to_time";
//	meet_approve
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "meet_approve";
	$fdata["GoodName"] = "meet_approve";
	$fdata["ownerTable"] = "t_meeting_book";
	$fdata["Label"] = GetFieldLabel("t_meeting_book","meet_approve");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "meet_approve";

		$fdata["sourceSingle"] = "meet_approve";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "meet_approve";

	
	
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

	$edata = array("EditFormat" => "Readonly");

	
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


	$tdatat_meeting_book["meet_approve"] = $fdata;
		$tdatat_meeting_book[".searchableFields"][] = "meet_approve";


$tables_data["t_meeting_book"]=&$tdatat_meeting_book;
$field_labels["t_meeting_book"] = &$fieldLabelst_meeting_book;
$fieldToolTips["t_meeting_book"] = &$fieldToolTipst_meeting_book;
$placeHolders["t_meeting_book"] = &$placeHolderst_meeting_book;
$page_titles["t_meeting_book"] = &$pageTitlest_meeting_book;


changeTextControlsToDate( "t_meeting_book" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_meeting_book"] = array();
//	m_meeting_room
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="m_meeting_room";
		$detailsParam["dOriginalTable"] = "m_meeting_room";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "m_meeting_room";
	$detailsParam["dCaptionTable"] = GetTableCaption("m_meeting_room");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["t_meeting_book"][$dIndex] = $detailsParam;

	
		$detailsTablesData["t_meeting_book"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["t_meeting_book"][$dIndex]["masterKeys"][]="t_meeting_roomid";

				$detailsTablesData["t_meeting_book"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["t_meeting_book"][$dIndex]["detailKeys"][]="m_meeting_room_name";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_meeting_book"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_meeting_book()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "t_meeting_id,  t_meeting_roomid,  t_meeting_no,  t_meeting_user,  t_meeting_desc,  t_meeting_from_date,  t_meeting_to_date,  t_meeting_from_time,  t_meeting_to_time,  user_participant_list,  t_meeting_participant_type,  t_meeting_total_participant,  t_meeting_isminuman,  t_meeting_issnack,  t_meeting_ismakan,  t_meeting_recurring_flag,  t_meeting_status,  add_user,  add_date,  edit_user,  edit_date,  DATE(t_meeting_from_date) AS fr_date,  DATE(t_meeting_to_date) AS to_dt,  TIME(t_meeting_from_date) AS fr_time,  TIME(t_meeting_to_date) AS to_time,  meet_approve";
$proto0["m_strFrom"] = "FROM t_meeting_book";
$proto0["m_strWhere"] = "(add_user = ':session.UserID')  AND (meet_approve =1)";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(add_user = ':session.UserID')  AND (meet_approve =1)";
$proto2["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(add_user = ':session.UserID')  AND (meet_approve =1)"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "add_user = ':session.UserID'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "= ':session.UserID'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "meet_approve =1";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "meet_approve",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=1";
$proto6["m_havingmode"] = false;
$proto6["m_inBrackets"] = true;
$proto6["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto6);

			$proto2["m_contained"][]=$obj;
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto8=array();
$proto8["m_sql"] = "";
$proto8["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto8["m_column"]=$obj;
$proto8["m_contained"] = array();
$proto8["m_strCase"] = "";
$proto8["m_havingmode"] = false;
$proto8["m_inBrackets"] = false;
$proto8["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto8);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_id",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto10["m_sql"] = "t_meeting_id";
$proto10["m_srcTableName"] = "t_meeting_book";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_roomid",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto12["m_sql"] = "t_meeting_roomid";
$proto12["m_srcTableName"] = "t_meeting_book";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_no",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto14["m_sql"] = "t_meeting_no";
$proto14["m_srcTableName"] = "t_meeting_book";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_user",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto16["m_sql"] = "t_meeting_user";
$proto16["m_srcTableName"] = "t_meeting_book";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_desc",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto18["m_sql"] = "t_meeting_desc";
$proto18["m_srcTableName"] = "t_meeting_book";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_from_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto20["m_sql"] = "t_meeting_from_date";
$proto20["m_srcTableName"] = "t_meeting_book";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_to_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto22["m_sql"] = "t_meeting_to_date";
$proto22["m_srcTableName"] = "t_meeting_book";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_from_time",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto24["m_sql"] = "t_meeting_from_time";
$proto24["m_srcTableName"] = "t_meeting_book";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_to_time",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto26["m_sql"] = "t_meeting_to_time";
$proto26["m_srcTableName"] = "t_meeting_book";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "user_participant_list",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto28["m_sql"] = "user_participant_list";
$proto28["m_srcTableName"] = "t_meeting_book";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_participant_type",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto30["m_sql"] = "t_meeting_participant_type";
$proto30["m_srcTableName"] = "t_meeting_book";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_total_participant",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto32["m_sql"] = "t_meeting_total_participant";
$proto32["m_srcTableName"] = "t_meeting_book";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_isminuman",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto34["m_sql"] = "t_meeting_isminuman";
$proto34["m_srcTableName"] = "t_meeting_book";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_issnack",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto36["m_sql"] = "t_meeting_issnack";
$proto36["m_srcTableName"] = "t_meeting_book";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_ismakan",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto38["m_sql"] = "t_meeting_ismakan";
$proto38["m_srcTableName"] = "t_meeting_book";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_recurring_flag",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto40["m_sql"] = "t_meeting_recurring_flag";
$proto40["m_srcTableName"] = "t_meeting_book";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "t_meeting_status",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto42["m_sql"] = "t_meeting_status";
$proto42["m_srcTableName"] = "t_meeting_book";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto44["m_sql"] = "add_user";
$proto44["m_srcTableName"] = "t_meeting_book";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto46["m_sql"] = "add_date";
$proto46["m_srcTableName"] = "t_meeting_book";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto48["m_sql"] = "edit_user";
$proto48["m_srcTableName"] = "t_meeting_book";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto50["m_sql"] = "edit_date";
$proto50["m_srcTableName"] = "t_meeting_book";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$proto53=array();
$proto53["m_functiontype"] = "SQLF_CUSTOM";
$proto53["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_from_date"
));

$proto53["m_arguments"][]=$obj;
$proto53["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto53);

$proto52["m_sql"] = "DATE(t_meeting_from_date)";
$proto52["m_srcTableName"] = "t_meeting_book";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "fr_date";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$proto56=array();
$proto56["m_functiontype"] = "SQLF_CUSTOM";
$proto56["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_to_date"
));

$proto56["m_arguments"][]=$obj;
$proto56["m_strFunctionName"] = "DATE";
$obj = new SQLFunctionCall($proto56);

$proto55["m_sql"] = "DATE(t_meeting_to_date)";
$proto55["m_srcTableName"] = "t_meeting_book";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "to_dt";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$proto59=array();
$proto59["m_functiontype"] = "SQLF_CUSTOM";
$proto59["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_from_date"
));

$proto59["m_arguments"][]=$obj;
$proto59["m_strFunctionName"] = "TIME";
$obj = new SQLFunctionCall($proto59);

$proto58["m_sql"] = "TIME(t_meeting_from_date)";
$proto58["m_srcTableName"] = "t_meeting_book";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "fr_time";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$proto62=array();
$proto62["m_functiontype"] = "SQLF_CUSTOM";
$proto62["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "t_meeting_to_date"
));

$proto62["m_arguments"][]=$obj;
$proto62["m_strFunctionName"] = "TIME";
$obj = new SQLFunctionCall($proto62);

$proto61["m_sql"] = "TIME(t_meeting_to_date)";
$proto61["m_srcTableName"] = "t_meeting_book";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "to_time";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "meet_approve",
	"m_strTable" => "t_meeting_book",
	"m_srcTableName" => "t_meeting_book"
));

$proto64["m_sql"] = "meet_approve";
$proto64["m_srcTableName"] = "t_meeting_book";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto66=array();
$proto66["m_link"] = "SQLL_MAIN";
			$proto67=array();
$proto67["m_strName"] = "t_meeting_book";
$proto67["m_srcTableName"] = "t_meeting_book";
$proto67["m_columns"] = array();
$proto67["m_columns"][] = "t_meeting_id";
$proto67["m_columns"][] = "t_meeting_roomid";
$proto67["m_columns"][] = "t_meeting_no";
$proto67["m_columns"][] = "t_meeting_user";
$proto67["m_columns"][] = "t_meeting_desc";
$proto67["m_columns"][] = "t_meeting_from_date";
$proto67["m_columns"][] = "t_meeting_to_date";
$proto67["m_columns"][] = "t_meeting_from_time";
$proto67["m_columns"][] = "t_meeting_to_time";
$proto67["m_columns"][] = "user_participant_list";
$proto67["m_columns"][] = "t_meeting_participant_type";
$proto67["m_columns"][] = "t_meeting_total_participant";
$proto67["m_columns"][] = "t_meeting_isminuman";
$proto67["m_columns"][] = "t_meeting_issnack";
$proto67["m_columns"][] = "t_meeting_ismakan";
$proto67["m_columns"][] = "t_meeting_recurring_flag";
$proto67["m_columns"][] = "t_meeting_status";
$proto67["m_columns"][] = "add_user";
$proto67["m_columns"][] = "add_date";
$proto67["m_columns"][] = "edit_user";
$proto67["m_columns"][] = "edit_date";
$proto67["m_columns"][] = "meet_approve";
$obj = new SQLTable($proto67);

$proto66["m_table"] = $obj;
$proto66["m_sql"] = "t_meeting_book";
$proto66["m_alias"] = "";
$proto66["m_srcTableName"] = "t_meeting_book";
$proto68=array();
$proto68["m_sql"] = "";
$proto68["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto68["m_column"]=$obj;
$proto68["m_contained"] = array();
$proto68["m_strCase"] = "";
$proto68["m_havingmode"] = false;
$proto68["m_inBrackets"] = false;
$proto68["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto68);

$proto66["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto66);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_meeting_book";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_meeting_book = createSqlQuery_t_meeting_book();


	
				;

																										

$tdatat_meeting_book[".sqlquery"] = $queryData_t_meeting_book;



include_once(getabspath("include/t_meeting_book_events.php"));
$tdatat_meeting_book[".hasEvents"] = true;

?>