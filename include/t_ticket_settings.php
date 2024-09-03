<?php
$tdatat_ticket = array();
$tdatat_ticket[".searchableFields"] = array();
$tdatat_ticket[".ShortName"] = "t_ticket";
$tdatat_ticket[".OwnerID"] = "";
$tdatat_ticket[".OriginalTable"] = "t_ticket";


$tdatat_ticket[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatat_ticket[".originalPagesByType"] = $tdatat_ticket[".pagesByType"];
$tdatat_ticket[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatat_ticket[".originalPages"] = $tdatat_ticket[".pages"];
$tdatat_ticket[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatat_ticket[".originalDefaultPages"] = $tdatat_ticket[".defaultPages"];

//	field labels
$fieldLabelst_ticket = array();
$fieldToolTipst_ticket = array();
$pageTitlest_ticket = array();
$placeHolderst_ticket = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelst_ticket["English"] = array();
	$fieldToolTipst_ticket["English"] = array();
	$placeHolderst_ticket["English"] = array();
	$pageTitlest_ticket["English"] = array();
	$fieldLabelst_ticket["English"]["ticketId"] = "Ticket Id";
	$fieldToolTipst_ticket["English"]["ticketId"] = "";
	$placeHolderst_ticket["English"]["ticketId"] = "";
	$fieldLabelst_ticket["English"]["ticketNo"] = "Register No";
	$fieldToolTipst_ticket["English"]["ticketNo"] = "";
	$placeHolderst_ticket["English"]["ticketNo"] = "";
	$fieldLabelst_ticket["English"]["urut"] = "Urut";
	$fieldToolTipst_ticket["English"]["urut"] = "";
	$placeHolderst_ticket["English"]["urut"] = "";
	$fieldLabelst_ticket["English"]["ticketFrom"] = "From";
	$fieldToolTipst_ticket["English"]["ticketFrom"] = "";
	$placeHolderst_ticket["English"]["ticketFrom"] = "";
	$fieldLabelst_ticket["English"]["assignTo"] = "Assign To";
	$fieldToolTipst_ticket["English"]["assignTo"] = "";
	$placeHolderst_ticket["English"]["assignTo"] = "";
	$fieldLabelst_ticket["English"]["catId"] = "Category";
	$fieldToolTipst_ticket["English"]["catId"] = "";
	$placeHolderst_ticket["English"]["catId"] = "";
	$fieldLabelst_ticket["English"]["catSubId"] = "Sub Category";
	$fieldToolTipst_ticket["English"]["catSubId"] = "";
	$placeHolderst_ticket["English"]["catSubId"] = "";
	$fieldLabelst_ticket["English"]["orgId"] = "Org Id";
	$fieldToolTipst_ticket["English"]["orgId"] = "";
	$placeHolderst_ticket["English"]["orgId"] = "";
	$fieldLabelst_ticket["English"]["ticketDate"] = "Ticket Date";
	$fieldToolTipst_ticket["English"]["ticketDate"] = "";
	$placeHolderst_ticket["English"]["ticketDate"] = "";
	$fieldLabelst_ticket["English"]["ticketDateProcess"] = "Ticket Date Process";
	$fieldToolTipst_ticket["English"]["ticketDateProcess"] = "";
	$placeHolderst_ticket["English"]["ticketDateProcess"] = "";
	$fieldLabelst_ticket["English"]["ticketDateDone"] = "Ticket Date Done";
	$fieldToolTipst_ticket["English"]["ticketDateDone"] = "";
	$placeHolderst_ticket["English"]["ticketDateDone"] = "";
	$fieldLabelst_ticket["English"]["subject"] = "Subject/ Issue";
	$fieldToolTipst_ticket["English"]["subject"] = "";
	$placeHolderst_ticket["English"]["subject"] = "";
	$fieldLabelst_ticket["English"]["status"] = "Status";
	$fieldToolTipst_ticket["English"]["status"] = "";
	$placeHolderst_ticket["English"]["status"] = "";
	$fieldLabelst_ticket["English"]["createBy"] = "Create By";
	$fieldToolTipst_ticket["English"]["createBy"] = "";
	$placeHolderst_ticket["English"]["createBy"] = "";
	$fieldLabelst_ticket["English"]["lastUser"] = "Last User";
	$fieldToolTipst_ticket["English"]["lastUser"] = "";
	$placeHolderst_ticket["English"]["lastUser"] = "";
	$fieldLabelst_ticket["English"]["fileUpl"] = "File Upl";
	$fieldToolTipst_ticket["English"]["fileUpl"] = "";
	$placeHolderst_ticket["English"]["fileUpl"] = "";
	$fieldLabelst_ticket["English"]["priority"] = "Priority";
	$fieldToolTipst_ticket["English"]["priority"] = "";
	$placeHolderst_ticket["English"]["priority"] = "";
	$fieldLabelst_ticket["English"]["duration"] = "Duration";
	$fieldToolTipst_ticket["English"]["duration"] = "";
	$placeHolderst_ticket["English"]["duration"] = "";
	if (count($fieldToolTipst_ticket["English"]))
		$tdatat_ticket[".isUseToolTips"] = true;
}


	$tdatat_ticket[".NCSearch"] = true;



$tdatat_ticket[".shortTableName"] = "t_ticket";
$tdatat_ticket[".nSecOptions"] = 0;

$tdatat_ticket[".mainTableOwnerID"] = "";
$tdatat_ticket[".entityType"] = 0;
$tdatat_ticket[".connId"] = "u736239518tsundbat154412412";


$tdatat_ticket[".strOriginalTableName"] = "t_ticket";

	



$tdatat_ticket[".showAddInPopup"] = false;

$tdatat_ticket[".showEditInPopup"] = false;

$tdatat_ticket[".showViewInPopup"] = false;

$tdatat_ticket[".listAjax"] = false;
//	temporary
//$tdatat_ticket[".listAjax"] = false;

	$tdatat_ticket[".audit"] = false;

	$tdatat_ticket[".locking"] = false;


$pages = $tdatat_ticket[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatat_ticket[".edit"] = true;
	$tdatat_ticket[".afterEditAction"] = 1;
	$tdatat_ticket[".closePopupAfterEdit"] = 1;
	$tdatat_ticket[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatat_ticket[".add"] = true;
$tdatat_ticket[".afterAddAction"] = 1;
$tdatat_ticket[".closePopupAfterAdd"] = 1;
$tdatat_ticket[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatat_ticket[".list"] = true;
}



$tdatat_ticket[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatat_ticket[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatat_ticket[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatat_ticket[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatat_ticket[".printFriendly"] = true;
}



$tdatat_ticket[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatat_ticket[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatat_ticket[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatat_ticket[".isUseAjaxSuggest"] = true;



																																																			

$tdatat_ticket[".ajaxCodeSnippetAdded"] = false;

$tdatat_ticket[".buttonsAdded"] = false;

$tdatat_ticket[".addPageEvents"] = false;

// use timepicker for search panel
$tdatat_ticket[".isUseTimeForSearch"] = false;


$tdatat_ticket[".badgeColor"] = "DC143C";


$tdatat_ticket[".allSearchFields"] = array();
$tdatat_ticket[".filterFields"] = array();
$tdatat_ticket[".requiredSearchFields"] = array();

$tdatat_ticket[".googleLikeFields"] = array();
$tdatat_ticket[".googleLikeFields"][] = "ticketId";
$tdatat_ticket[".googleLikeFields"][] = "ticketNo";
$tdatat_ticket[".googleLikeFields"][] = "urut";
$tdatat_ticket[".googleLikeFields"][] = "ticketFrom";
$tdatat_ticket[".googleLikeFields"][] = "assignTo";
$tdatat_ticket[".googleLikeFields"][] = "catId";
$tdatat_ticket[".googleLikeFields"][] = "catSubId";
$tdatat_ticket[".googleLikeFields"][] = "orgId";
$tdatat_ticket[".googleLikeFields"][] = "ticketDate";
$tdatat_ticket[".googleLikeFields"][] = "ticketDateProcess";
$tdatat_ticket[".googleLikeFields"][] = "ticketDateDone";
$tdatat_ticket[".googleLikeFields"][] = "subject";
$tdatat_ticket[".googleLikeFields"][] = "status";
$tdatat_ticket[".googleLikeFields"][] = "createBy";
$tdatat_ticket[".googleLikeFields"][] = "lastUser";
$tdatat_ticket[".googleLikeFields"][] = "fileUpl";
$tdatat_ticket[".googleLikeFields"][] = "priority";
$tdatat_ticket[".googleLikeFields"][] = "duration";



$tdatat_ticket[".tableType"] = "list";

$tdatat_ticket[".printerPageOrientation"] = 0;
$tdatat_ticket[".nPrinterPageScale"] = 100;

$tdatat_ticket[".nPrinterSplitRecords"] = 40;

$tdatat_ticket[".geocodingEnabled"] = false;




$tdatat_ticket[".isDisplayLoading"] = true;






$tdatat_ticket[".pageSize"] = 20;

$tdatat_ticket[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatat_ticket[".strOrderBy"] = $tstrOrderBy;

$tdatat_ticket[".orderindexes"] = array();


$tdatat_ticket[".sqlHead"] = "SELECT ticketId,  ticketNo,  urut,  ticketFrom,  assignTo,  catId,  catSubId,  orgId,  ticketDate,  ticketDateProcess,  ticketDateDone,  subject,  status,  createBy,  lastUser,  fileUpl,  priority,  duration";
$tdatat_ticket[".sqlFrom"] = "FROM t_ticket";
$tdatat_ticket[".sqlWhereExpr"] = "(lastUser =':session.UserID') OR (createBy =':session.UserID')";
$tdatat_ticket[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatat_ticket[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatat_ticket[".arrGroupsPerPage"] = $arrGPP;

$tdatat_ticket[".highlightSearchResults"] = true;

$tableKeyst_ticket = array();
$tableKeyst_ticket[] = "ticketId";
$tdatat_ticket[".Keys"] = $tableKeyst_ticket;


$tdatat_ticket[".hideMobileList"] = array();




//	ticketId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ticketId";
	$fdata["GoodName"] = "ticketId";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","ticketId");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ticketId";

		$fdata["sourceSingle"] = "ticketId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketId";

	
	
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


	$tdatat_ticket["ticketId"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "ticketId";
//	ticketNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ticketNo";
	$fdata["GoodName"] = "ticketNo";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","ticketNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ticketNo";

		$fdata["sourceSingle"] = "ticketNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketNo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatat_ticket["ticketNo"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "ticketNo";
//	urut
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "urut";
	$fdata["GoodName"] = "urut";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","urut");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "urut";

		$fdata["sourceSingle"] = "urut";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "urut";

	
	
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


	$tdatat_ticket["urut"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "urut";
//	ticketFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "ticketFrom";
	$fdata["GoodName"] = "ticketFrom";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","ticketFrom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ticketFrom";

		$fdata["sourceSingle"] = "ticketFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketFrom";

	
	
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


	$tdatat_ticket["ticketFrom"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "ticketFrom";
//	assignTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "assignTo";
	$fdata["GoodName"] = "assignTo";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","assignTo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "assignTo";

		$fdata["sourceSingle"] = "assignTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "assignTo";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatat_ticket["assignTo"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "assignTo";
//	catId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "catId";
	$fdata["GoodName"] = "catId";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","catId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "catId";

		$fdata["sourceSingle"] = "catId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catId";

	
	
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
	$edata["LookupTable"] = "m_ticket_category";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "catId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "catName";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "catSubId";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatat_ticket["catId"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "catId";
//	catSubId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "catSubId";
	$fdata["GoodName"] = "catSubId";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","catSubId");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "catSubId";

		$fdata["sourceSingle"] = "catSubId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "catSubId";

	
	
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
	$edata["LookupTable"] = "m_ticket_subcategory";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "subCatId";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "subCatName";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "catId", "lookup" => "catId" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatat_ticket["catSubId"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "catSubId";
//	orgId
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "orgId";
	$fdata["GoodName"] = "orgId";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","orgId");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "orgId";

		$fdata["sourceSingle"] = "orgId";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "orgId";

	
	
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
			$edata["EditParams"].= " maxlength=12";

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


	$tdatat_ticket["orgId"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "orgId";
//	ticketDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "ticketDate";
	$fdata["GoodName"] = "ticketDate";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","ticketDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "ticketDate";

		$fdata["sourceSingle"] = "ticketDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketDate";

	
	
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


	$tdatat_ticket["ticketDate"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "ticketDate";
//	ticketDateProcess
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "ticketDateProcess";
	$fdata["GoodName"] = "ticketDateProcess";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","ticketDateProcess");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "ticketDateProcess";

		$fdata["sourceSingle"] = "ticketDateProcess";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketDateProcess";

	
	
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


	$tdatat_ticket["ticketDateProcess"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "ticketDateProcess";
//	ticketDateDone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ticketDateDone";
	$fdata["GoodName"] = "ticketDateDone";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","ticketDateDone");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "ticketDateDone";

		$fdata["sourceSingle"] = "ticketDateDone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ticketDateDone";

	
	
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


	$tdatat_ticket["ticketDateDone"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "ticketDateDone";
//	subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "subject";
	$fdata["GoodName"] = "subject";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","subject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "subject";

		$fdata["sourceSingle"] = "subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "subject";

	
	
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
			$edata["EditParams"].= " maxlength=5000";

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


	$tdatat_ticket["subject"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "subject";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
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


	$tdatat_ticket["status"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "status";
//	createBy
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "createBy";
	$fdata["GoodName"] = "createBy";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","createBy");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "createBy";

		$fdata["sourceSingle"] = "createBy";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "createBy";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatat_ticket["createBy"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "createBy";
//	lastUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "lastUser";
	$fdata["GoodName"] = "lastUser";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","lastUser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lastUser";

		$fdata["sourceSingle"] = "lastUser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lastUser";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatat_ticket["lastUser"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "lastUser";
//	fileUpl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fileUpl";
	$fdata["GoodName"] = "fileUpl";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","fileUpl");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "fileUpl";

		$fdata["sourceSingle"] = "fileUpl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fileUpl";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatat_ticket["fileUpl"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "fileUpl";
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","priority");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "priority";

		$fdata["sourceSingle"] = "priority";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priority";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatat_ticket["priority"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "priority";
//	duration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "duration";
	$fdata["GoodName"] = "duration";
	$fdata["ownerTable"] = "t_ticket";
	$fdata["Label"] = GetFieldLabel("t_ticket","duration");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "duration";

		$fdata["sourceSingle"] = "duration";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "duration";

	
	
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


	$tdatat_ticket["duration"] = $fdata;
		$tdatat_ticket[".searchableFields"][] = "duration";


$tables_data["t_ticket"]=&$tdatat_ticket;
$field_labels["t_ticket"] = &$fieldLabelst_ticket;
$fieldToolTips["t_ticket"] = &$fieldToolTipst_ticket;
$placeHolders["t_ticket"] = &$placeHolderst_ticket;
$page_titles["t_ticket"] = &$pageTitlest_ticket;


changeTextControlsToDate( "t_ticket" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["t_ticket"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["t_ticket"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_t_ticket()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ticketId,  ticketNo,  urut,  ticketFrom,  assignTo,  catId,  catSubId,  orgId,  ticketDate,  ticketDateProcess,  ticketDateDone,  subject,  status,  createBy,  lastUser,  fileUpl,  priority,  duration";
$proto0["m_strFrom"] = "FROM t_ticket";
$proto0["m_strWhere"] = "(lastUser =':session.UserID') OR (createBy =':session.UserID')";
$proto0["m_strOrderBy"] = "";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "(lastUser =':session.UserID') OR (createBy =':session.UserID')";
$proto2["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(lastUser =':session.UserID') OR (createBy =':session.UserID')"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
						$proto4=array();
$proto4["m_sql"] = "lastUser =':session.UserID'";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "lastUser",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "=':session.UserID'";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = true;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

			$proto2["m_contained"][]=$obj;
						$proto6=array();
$proto6["m_sql"] = "createBy =':session.UserID'";
$proto6["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "createBy",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto6["m_column"]=$obj;
$proto6["m_contained"] = array();
$proto6["m_strCase"] = "=':session.UserID'";
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
	"m_strName" => "ticketId",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto10["m_sql"] = "ticketId";
$proto10["m_srcTableName"] = "t_ticket";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketNo",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto12["m_sql"] = "ticketNo";
$proto12["m_srcTableName"] = "t_ticket";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "urut",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto14["m_sql"] = "urut";
$proto14["m_srcTableName"] = "t_ticket";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketFrom",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto16["m_sql"] = "ticketFrom";
$proto16["m_srcTableName"] = "t_ticket";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "assignTo",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto18["m_sql"] = "assignTo";
$proto18["m_srcTableName"] = "t_ticket";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "catId",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto20["m_sql"] = "catId";
$proto20["m_srcTableName"] = "t_ticket";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "catSubId",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto22["m_sql"] = "catSubId";
$proto22["m_srcTableName"] = "t_ticket";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "orgId",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto24["m_sql"] = "orgId";
$proto24["m_srcTableName"] = "t_ticket";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketDate",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto26["m_sql"] = "ticketDate";
$proto26["m_srcTableName"] = "t_ticket";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketDateProcess",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto28["m_sql"] = "ticketDateProcess";
$proto28["m_srcTableName"] = "t_ticket";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "ticketDateDone",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto30["m_sql"] = "ticketDateDone";
$proto30["m_srcTableName"] = "t_ticket";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "subject",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto32["m_sql"] = "subject";
$proto32["m_srcTableName"] = "t_ticket";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto34["m_sql"] = "status";
$proto34["m_srcTableName"] = "t_ticket";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "createBy",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto36["m_sql"] = "createBy";
$proto36["m_srcTableName"] = "t_ticket";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "lastUser",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto38["m_sql"] = "lastUser";
$proto38["m_srcTableName"] = "t_ticket";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "fileUpl",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto40["m_sql"] = "fileUpl";
$proto40["m_srcTableName"] = "t_ticket";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto42["m_sql"] = "priority";
$proto42["m_srcTableName"] = "t_ticket";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "duration",
	"m_strTable" => "t_ticket",
	"m_srcTableName" => "t_ticket"
));

$proto44["m_sql"] = "duration";
$proto44["m_srcTableName"] = "t_ticket";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "t_ticket";
$proto47["m_srcTableName"] = "t_ticket";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "ticketId";
$proto47["m_columns"][] = "ticketNo";
$proto47["m_columns"][] = "urut";
$proto47["m_columns"][] = "ticketFrom";
$proto47["m_columns"][] = "assignTo";
$proto47["m_columns"][] = "catId";
$proto47["m_columns"][] = "catSubId";
$proto47["m_columns"][] = "orgId";
$proto47["m_columns"][] = "ticketDate";
$proto47["m_columns"][] = "ticketDateProcess";
$proto47["m_columns"][] = "ticketDateDone";
$proto47["m_columns"][] = "subject";
$proto47["m_columns"][] = "status";
$proto47["m_columns"][] = "createBy";
$proto47["m_columns"][] = "lastUser";
$proto47["m_columns"][] = "fileUpl";
$proto47["m_columns"][] = "priority";
$proto47["m_columns"][] = "duration";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "t_ticket";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "t_ticket";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="t_ticket";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_t_ticket = createSqlQuery_t_ticket();


	
				;

																		

$tdatat_ticket[".sqlquery"] = $queryData_t_ticket;



$tdatat_ticket[".hasEvents"] = false;

?>