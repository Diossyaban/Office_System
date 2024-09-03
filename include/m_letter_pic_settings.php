<?php
$tdatam_letter_pic = array();
$tdatam_letter_pic[".searchableFields"] = array();
$tdatam_letter_pic[".ShortName"] = "m_letter_pic";
$tdatam_letter_pic[".OwnerID"] = "";
$tdatam_letter_pic[".OriginalTable"] = "m_letter_pic";


$tdatam_letter_pic[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"]}" );
$tdatam_letter_pic[".originalPagesByType"] = $tdatam_letter_pic[".pagesByType"];
$tdatam_letter_pic[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"]}" ) );
$tdatam_letter_pic[".originalPages"] = $tdatam_letter_pic[".pages"];
$tdatam_letter_pic[".defaultPages"] = my_json_decode( "{\"list\":\"list\"}" );
$tdatam_letter_pic[".originalDefaultPages"] = $tdatam_letter_pic[".defaultPages"];

//	field labels
$fieldLabelsm_letter_pic = array();
$fieldToolTipsm_letter_pic = array();
$pageTitlesm_letter_pic = array();
$placeHoldersm_letter_pic = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_letter_pic["English"] = array();
	$fieldToolTipsm_letter_pic["English"] = array();
	$placeHoldersm_letter_pic["English"] = array();
	$pageTitlesm_letter_pic["English"] = array();
	$fieldLabelsm_letter_pic["English"]["m_letter_pic"] = "M Letter Pic";
	$fieldToolTipsm_letter_pic["English"]["m_letter_pic"] = "";
	$placeHoldersm_letter_pic["English"]["m_letter_pic"] = "";
	$fieldLabelsm_letter_pic["English"]["pic_name"] = "Name";
	$fieldToolTipsm_letter_pic["English"]["pic_name"] = "";
	$placeHoldersm_letter_pic["English"]["pic_name"] = "";
	$fieldLabelsm_letter_pic["English"]["pic_title_ind"] = "Pic Title Ind";
	$fieldToolTipsm_letter_pic["English"]["pic_title_ind"] = "";
	$placeHoldersm_letter_pic["English"]["pic_title_ind"] = "";
	$fieldLabelsm_letter_pic["English"]["pic_title_eng"] = "Title";
	$fieldToolTipsm_letter_pic["English"]["pic_title_eng"] = "";
	$placeHoldersm_letter_pic["English"]["pic_title_eng"] = "";
	$fieldLabelsm_letter_pic["English"]["m_letter_fl"] = "M Letter Fl";
	$fieldToolTipsm_letter_pic["English"]["m_letter_fl"] = "";
	$placeHoldersm_letter_pic["English"]["m_letter_fl"] = "";
	$fieldLabelsm_letter_pic["English"]["m_letter_username"] = "M Letter Username";
	$fieldToolTipsm_letter_pic["English"]["m_letter_username"] = "";
	$placeHoldersm_letter_pic["English"]["m_letter_username"] = "";
	$fieldLabelsm_letter_pic["English"]["m_letter_picno"] = "Sign No.";
	$fieldToolTipsm_letter_pic["English"]["m_letter_picno"] = "";
	$placeHoldersm_letter_pic["English"]["m_letter_picno"] = "";
	if (count($fieldToolTipsm_letter_pic["English"]))
		$tdatam_letter_pic[".isUseToolTips"] = true;
}


	$tdatam_letter_pic[".NCSearch"] = true;



$tdatam_letter_pic[".shortTableName"] = "m_letter_pic";
$tdatam_letter_pic[".nSecOptions"] = 0;

$tdatam_letter_pic[".mainTableOwnerID"] = "";
$tdatam_letter_pic[".entityType"] = 0;
$tdatam_letter_pic[".connId"] = "u736239518tsundbat154412412";


$tdatam_letter_pic[".strOriginalTableName"] = "m_letter_pic";

	



$tdatam_letter_pic[".showAddInPopup"] = false;

$tdatam_letter_pic[".showEditInPopup"] = false;

$tdatam_letter_pic[".showViewInPopup"] = false;

$tdatam_letter_pic[".listAjax"] = false;
//	temporary
//$tdatam_letter_pic[".listAjax"] = false;

	$tdatam_letter_pic[".audit"] = false;

	$tdatam_letter_pic[".locking"] = false;


$pages = $tdatam_letter_pic[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_letter_pic[".edit"] = true;
	$tdatam_letter_pic[".afterEditAction"] = 1;
	$tdatam_letter_pic[".closePopupAfterEdit"] = 1;
	$tdatam_letter_pic[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_letter_pic[".add"] = true;
$tdatam_letter_pic[".afterAddAction"] = 1;
$tdatam_letter_pic[".closePopupAfterAdd"] = 1;
$tdatam_letter_pic[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_letter_pic[".list"] = true;
}



$tdatam_letter_pic[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_letter_pic[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_letter_pic[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_letter_pic[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_letter_pic[".printFriendly"] = true;
}



$tdatam_letter_pic[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_letter_pic[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_letter_pic[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_letter_pic[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_letter_pic[".ajaxCodeSnippetAdded"] = false;

$tdatam_letter_pic[".buttonsAdded"] = false;

$tdatam_letter_pic[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_letter_pic[".isUseTimeForSearch"] = false;


$tdatam_letter_pic[".badgeColor"] = "4682B4";


$tdatam_letter_pic[".allSearchFields"] = array();
$tdatam_letter_pic[".filterFields"] = array();
$tdatam_letter_pic[".requiredSearchFields"] = array();

$tdatam_letter_pic[".googleLikeFields"] = array();
$tdatam_letter_pic[".googleLikeFields"][] = "m_letter_pic";
$tdatam_letter_pic[".googleLikeFields"][] = "pic_name";
$tdatam_letter_pic[".googleLikeFields"][] = "pic_title_ind";
$tdatam_letter_pic[".googleLikeFields"][] = "pic_title_eng";
$tdatam_letter_pic[".googleLikeFields"][] = "m_letter_fl";
$tdatam_letter_pic[".googleLikeFields"][] = "m_letter_username";
$tdatam_letter_pic[".googleLikeFields"][] = "m_letter_picno";



$tdatam_letter_pic[".tableType"] = "list";

$tdatam_letter_pic[".printerPageOrientation"] = 0;
$tdatam_letter_pic[".nPrinterPageScale"] = 100;

$tdatam_letter_pic[".nPrinterSplitRecords"] = 40;

$tdatam_letter_pic[".geocodingEnabled"] = false;










$tdatam_letter_pic[".pageSize"] = 20;

$tdatam_letter_pic[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY m_letter_picno";
$tdatam_letter_pic[".strOrderBy"] = $tstrOrderBy;

$tdatam_letter_pic[".orderindexes"] = array();
	$tdatam_letter_pic[".orderindexes"][] = array(7, (1 ? "ASC" : "DESC"), "m_letter_picno");



$tdatam_letter_pic[".sqlHead"] = "SELECT m_letter_pic,  pic_name,  pic_title_ind,  pic_title_eng,  m_letter_fl,  m_letter_username,  m_letter_picno";
$tdatam_letter_pic[".sqlFrom"] = "FROM m_letter_pic";
$tdatam_letter_pic[".sqlWhereExpr"] = "m_letter_fl=1";
$tdatam_letter_pic[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_letter_pic[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_letter_pic[".arrGroupsPerPage"] = $arrGPP;

$tdatam_letter_pic[".highlightSearchResults"] = true;

$tableKeysm_letter_pic = array();
$tableKeysm_letter_pic[] = "m_letter_pic";
$tdatam_letter_pic[".Keys"] = $tableKeysm_letter_pic;


$tdatam_letter_pic[".hideMobileList"] = array();




//	m_letter_pic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_letter_pic";
	$fdata["GoodName"] = "m_letter_pic";
	$fdata["ownerTable"] = "m_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_letter_pic","m_letter_pic");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_letter_pic";

		$fdata["sourceSingle"] = "m_letter_pic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_letter_pic";

	
	
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


	$tdatam_letter_pic["m_letter_pic"] = $fdata;
		$tdatam_letter_pic[".searchableFields"][] = "m_letter_pic";
//	pic_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "pic_name";
	$fdata["GoodName"] = "pic_name";
	$fdata["ownerTable"] = "m_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_letter_pic","pic_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_name";

		$fdata["sourceSingle"] = "pic_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_name";

	
	
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


	$tdatam_letter_pic["pic_name"] = $fdata;
		$tdatam_letter_pic[".searchableFields"][] = "pic_name";
//	pic_title_ind
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "pic_title_ind";
	$fdata["GoodName"] = "pic_title_ind";
	$fdata["ownerTable"] = "m_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_letter_pic","pic_title_ind");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_title_ind";

		$fdata["sourceSingle"] = "pic_title_ind";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_title_ind";

	
	
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


	$tdatam_letter_pic["pic_title_ind"] = $fdata;
		$tdatam_letter_pic[".searchableFields"][] = "pic_title_ind";
//	pic_title_eng
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "pic_title_eng";
	$fdata["GoodName"] = "pic_title_eng";
	$fdata["ownerTable"] = "m_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_letter_pic","pic_title_eng");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pic_title_eng";

		$fdata["sourceSingle"] = "pic_title_eng";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pic_title_eng";

	
	
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


	$tdatam_letter_pic["pic_title_eng"] = $fdata;
		$tdatam_letter_pic[".searchableFields"][] = "pic_title_eng";
//	m_letter_fl
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "m_letter_fl";
	$fdata["GoodName"] = "m_letter_fl";
	$fdata["ownerTable"] = "m_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_letter_pic","m_letter_fl");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "m_letter_fl";

		$fdata["sourceSingle"] = "m_letter_fl";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_letter_fl";

	
	
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


	$tdatam_letter_pic["m_letter_fl"] = $fdata;
		$tdatam_letter_pic[".searchableFields"][] = "m_letter_fl";
//	m_letter_username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "m_letter_username";
	$fdata["GoodName"] = "m_letter_username";
	$fdata["ownerTable"] = "m_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_letter_pic","m_letter_username");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_letter_username";

		$fdata["sourceSingle"] = "m_letter_username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_letter_username";

	
	
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


	$tdatam_letter_pic["m_letter_username"] = $fdata;
		$tdatam_letter_pic[".searchableFields"][] = "m_letter_username";
//	m_letter_picno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "m_letter_picno";
	$fdata["GoodName"] = "m_letter_picno";
	$fdata["ownerTable"] = "m_letter_pic";
	$fdata["Label"] = GetFieldLabel("m_letter_pic","m_letter_picno");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "m_letter_picno";

		$fdata["sourceSingle"] = "m_letter_picno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_letter_picno";

	
	
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


	$tdatam_letter_pic["m_letter_picno"] = $fdata;
		$tdatam_letter_pic[".searchableFields"][] = "m_letter_picno";


$tables_data["m_letter_pic"]=&$tdatam_letter_pic;
$field_labels["m_letter_pic"] = &$fieldLabelsm_letter_pic;
$fieldToolTips["m_letter_pic"] = &$fieldToolTipsm_letter_pic;
$placeHolders["m_letter_pic"] = &$placeHoldersm_letter_pic;
$page_titles["m_letter_pic"] = &$pageTitlesm_letter_pic;


changeTextControlsToDate( "m_letter_pic" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_letter_pic"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_letter_pic"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_letter_pic()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_letter_pic,  pic_name,  pic_title_ind,  pic_title_eng,  m_letter_fl,  m_letter_username,  m_letter_picno";
$proto0["m_strFrom"] = "FROM m_letter_pic";
$proto0["m_strWhere"] = "m_letter_fl=1";
$proto0["m_strOrderBy"] = "ORDER BY m_letter_picno";
	
				;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "m_letter_fl=1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "m_letter_fl",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "=1";
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
	"m_strName" => "m_letter_pic",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto6["m_sql"] = "m_letter_pic";
$proto6["m_srcTableName"] = "m_letter_pic";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_name",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto8["m_sql"] = "pic_name";
$proto8["m_srcTableName"] = "m_letter_pic";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_title_ind",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto10["m_sql"] = "pic_title_ind";
$proto10["m_srcTableName"] = "m_letter_pic";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "pic_title_eng",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto12["m_sql"] = "pic_title_eng";
$proto12["m_srcTableName"] = "m_letter_pic";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "m_letter_fl",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto14["m_sql"] = "m_letter_fl";
$proto14["m_srcTableName"] = "m_letter_pic";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "m_letter_username",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto16["m_sql"] = "m_letter_username";
$proto16["m_srcTableName"] = "m_letter_pic";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "m_letter_picno",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto18["m_sql"] = "m_letter_picno";
$proto18["m_srcTableName"] = "m_letter_pic";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "m_letter_pic";
$proto21["m_srcTableName"] = "m_letter_pic";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "m_letter_pic";
$proto21["m_columns"][] = "pic_name";
$proto21["m_columns"][] = "pic_title_ind";
$proto21["m_columns"][] = "pic_title_eng";
$proto21["m_columns"][] = "m_letter_fl";
$proto21["m_columns"][] = "m_letter_username";
$proto21["m_columns"][] = "m_letter_picno";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "m_letter_pic";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "m_letter_pic";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "m_letter_picno",
	"m_strTable" => "m_letter_pic",
	"m_srcTableName" => "m_letter_pic"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 1;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="m_letter_pic";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_letter_pic = createSqlQuery_m_letter_pic();


	
				;

							

$tdatam_letter_pic[".sqlquery"] = $queryData_m_letter_pic;



$tdatam_letter_pic[".hasEvents"] = false;

?>