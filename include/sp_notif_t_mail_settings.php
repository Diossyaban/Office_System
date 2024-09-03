<?php
$tdatasp_notif_t_mail = array();
$tdatasp_notif_t_mail[".searchableFields"] = array();
$tdatasp_notif_t_mail[".ShortName"] = "sp_notif_t_mail";
$tdatasp_notif_t_mail[".OwnerID"] = "";
$tdatasp_notif_t_mail[".OriginalTable"] = "sp_disposition_flow";


$tdatasp_notif_t_mail[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatasp_notif_t_mail[".originalPagesByType"] = $tdatasp_notif_t_mail[".pagesByType"];
$tdatasp_notif_t_mail[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatasp_notif_t_mail[".originalPages"] = $tdatasp_notif_t_mail[".pages"];
$tdatasp_notif_t_mail[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatasp_notif_t_mail[".originalDefaultPages"] = $tdatasp_notif_t_mail[".defaultPages"];

//	field labels
$fieldLabelssp_notif_t_mail = array();
$fieldToolTipssp_notif_t_mail = array();
$pageTitlessp_notif_t_mail = array();
$placeHolderssp_notif_t_mail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssp_notif_t_mail["English"] = array();
	$fieldToolTipssp_notif_t_mail["English"] = array();
	$placeHolderssp_notif_t_mail["English"] = array();
	$pageTitlessp_notif_t_mail["English"] = array();
	$fieldLabelssp_notif_t_mail["English"]["kodeuser"] = "Kodeuser";
	$fieldToolTipssp_notif_t_mail["English"]["kodeuser"] = "";
	$placeHolderssp_notif_t_mail["English"]["kodeuser"] = "";
	$fieldLabelssp_notif_t_mail["English"]["nama"] = "Nama";
	$fieldToolTipssp_notif_t_mail["English"]["nama"] = "";
	$placeHolderssp_notif_t_mail["English"]["nama"] = "";
	$fieldLabelssp_notif_t_mail["English"]["id"] = "Id";
	$fieldToolTipssp_notif_t_mail["English"]["id"] = "";
	$placeHolderssp_notif_t_mail["English"]["id"] = "";
	$fieldLabelssp_notif_t_mail["English"]["message"] = "Message";
	$fieldToolTipssp_notif_t_mail["English"]["message"] = "";
	$placeHolderssp_notif_t_mail["English"]["message"] = "";
	$fieldLabelssp_notif_t_mail["English"]["user"] = "User";
	$fieldToolTipssp_notif_t_mail["English"]["user"] = "";
	$placeHolderssp_notif_t_mail["English"]["user"] = "";
	$fieldLabelssp_notif_t_mail["English"]["provider"] = "Provider";
	$fieldToolTipssp_notif_t_mail["English"]["provider"] = "";
	$placeHolderssp_notif_t_mail["English"]["provider"] = "";
	$fieldLabelssp_notif_t_mail["English"]["title"] = "Title";
	$fieldToolTipssp_notif_t_mail["English"]["title"] = "";
	$placeHolderssp_notif_t_mail["English"]["title"] = "";
	$fieldLabelssp_notif_t_mail["English"]["url"] = "Url";
	$fieldToolTipssp_notif_t_mail["English"]["url"] = "";
	$placeHolderssp_notif_t_mail["English"]["url"] = "";
	$fieldLabelssp_notif_t_mail["English"]["icon"] = "Icon";
	$fieldToolTipssp_notif_t_mail["English"]["icon"] = "";
	$placeHolderssp_notif_t_mail["English"]["icon"] = "";
	$fieldLabelssp_notif_t_mail["English"]["created"] = "Created";
	$fieldToolTipssp_notif_t_mail["English"]["created"] = "";
	$placeHolderssp_notif_t_mail["English"]["created"] = "";
	$fieldLabelssp_notif_t_mail["English"]["expire"] = "Expire";
	$fieldToolTipssp_notif_t_mail["English"]["expire"] = "";
	$placeHolderssp_notif_t_mail["English"]["expire"] = "";
	$fieldLabelssp_notif_t_mail["English"]["type"] = "Type";
	$fieldToolTipssp_notif_t_mail["English"]["type"] = "";
	$placeHolderssp_notif_t_mail["English"]["type"] = "";
	$fieldLabelssp_notif_t_mail["English"]["group"] = "Group";
	$fieldToolTipssp_notif_t_mail["English"]["group"] = "";
	$placeHolderssp_notif_t_mail["English"]["group"] = "";
	if (count($fieldToolTipssp_notif_t_mail["English"]))
		$tdatasp_notif_t_mail[".isUseToolTips"] = true;
}


	$tdatasp_notif_t_mail[".NCSearch"] = true;



$tdatasp_notif_t_mail[".shortTableName"] = "sp_notif_t_mail";
$tdatasp_notif_t_mail[".nSecOptions"] = 0;

$tdatasp_notif_t_mail[".mainTableOwnerID"] = "";
$tdatasp_notif_t_mail[".entityType"] = 6;
$tdatasp_notif_t_mail[".connId"] = "u736239518tsundbat154412412";


$tdatasp_notif_t_mail[".strOriginalTableName"] = "sp_disposition_flow";

	



$tdatasp_notif_t_mail[".showAddInPopup"] = false;

$tdatasp_notif_t_mail[".showEditInPopup"] = false;

$tdatasp_notif_t_mail[".showViewInPopup"] = false;

$tdatasp_notif_t_mail[".listAjax"] = false;
//	temporary
//$tdatasp_notif_t_mail[".listAjax"] = false;

	$tdatasp_notif_t_mail[".audit"] = false;

	$tdatasp_notif_t_mail[".locking"] = false;


$pages = $tdatasp_notif_t_mail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasp_notif_t_mail[".edit"] = true;
	$tdatasp_notif_t_mail[".afterEditAction"] = 1;
	$tdatasp_notif_t_mail[".closePopupAfterEdit"] = 1;
	$tdatasp_notif_t_mail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasp_notif_t_mail[".add"] = true;
$tdatasp_notif_t_mail[".afterAddAction"] = 1;
$tdatasp_notif_t_mail[".closePopupAfterAdd"] = 1;
$tdatasp_notif_t_mail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasp_notif_t_mail[".list"] = true;
}



$tdatasp_notif_t_mail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasp_notif_t_mail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasp_notif_t_mail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasp_notif_t_mail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasp_notif_t_mail[".printFriendly"] = true;
}



$tdatasp_notif_t_mail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasp_notif_t_mail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasp_notif_t_mail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasp_notif_t_mail[".isUseAjaxSuggest"] = false;



																																																			

$tdatasp_notif_t_mail[".ajaxCodeSnippetAdded"] = false;

$tdatasp_notif_t_mail[".buttonsAdded"] = false;

$tdatasp_notif_t_mail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasp_notif_t_mail[".isUseTimeForSearch"] = false;


$tdatasp_notif_t_mail[".badgeColor"] = "8FBC8B";


$tdatasp_notif_t_mail[".allSearchFields"] = array();
$tdatasp_notif_t_mail[".filterFields"] = array();
$tdatasp_notif_t_mail[".requiredSearchFields"] = array();

$tdatasp_notif_t_mail[".googleLikeFields"] = array();
$tdatasp_notif_t_mail[".googleLikeFields"][] = "kodeuser";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "nama";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "id";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "message";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "user";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "provider";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "title";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "url";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "icon";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "created";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "expire";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "type";
$tdatasp_notif_t_mail[".googleLikeFields"][] = "group";




$tdatasp_notif_t_mail[".printerPageOrientation"] = 0;
$tdatasp_notif_t_mail[".nPrinterPageScale"] = 100;

$tdatasp_notif_t_mail[".nPrinterSplitRecords"] = 40;

$tdatasp_notif_t_mail[".geocodingEnabled"] = false;










$tdatasp_notif_t_mail[".pageSize"] = 20;

$tdatasp_notif_t_mail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasp_notif_t_mail[".strOrderBy"] = $tstrOrderBy;

$tdatasp_notif_t_mail[".orderindexes"] = array();


$tdatasp_notif_t_mail[".sqlHead"] = "";
$tdatasp_notif_t_mail[".sqlFrom"] = "";
$tdatasp_notif_t_mail[".sqlWhereExpr"] = "";
$tdatasp_notif_t_mail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasp_notif_t_mail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasp_notif_t_mail[".arrGroupsPerPage"] = $arrGPP;

$tdatasp_notif_t_mail[".highlightSearchResults"] = true;

$tableKeyssp_notif_t_mail = array();
$tableKeyssp_notif_t_mail[] = "kodeuser";
$tdatasp_notif_t_mail[".Keys"] = $tableKeyssp_notif_t_mail;


$tdatasp_notif_t_mail[".hideMobileList"] = array();




//	kodeuser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "kodeuser";
	$fdata["GoodName"] = "kodeuser";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","kodeuser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "kodeuser";

	
		$fdata["FullName"] = "kodeuser";

	
	
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


	$tdatasp_notif_t_mail["kodeuser"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "kodeuser";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

	
		$fdata["FullName"] = "nama";

	
	
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


	$tdatasp_notif_t_mail["nama"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "nama";
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id";

	
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


	$tdatasp_notif_t_mail["id"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "id";
//	message
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "message";
	$fdata["GoodName"] = "message";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","message");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "message";

	
		$fdata["FullName"] = "message";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasp_notif_t_mail["message"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "message";
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "user";

	
		$fdata["FullName"] = "user";

	
	
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


	$tdatasp_notif_t_mail["user"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "user";
//	provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "provider";
	$fdata["GoodName"] = "provider";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "provider";

	
		$fdata["FullName"] = "provider";

	
	
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


	$tdatasp_notif_t_mail["provider"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "provider";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

	
		$fdata["FullName"] = "title";

	
	
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


	$tdatasp_notif_t_mail["title"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "title";
//	url
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "url";
	$fdata["GoodName"] = "url";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","url");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "url";

	
		$fdata["FullName"] = "url";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatasp_notif_t_mail["url"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "url";
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","icon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "icon";

	
		$fdata["FullName"] = "icon";

	
	
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


	$tdatasp_notif_t_mail["icon"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "icon";
//	created
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "created";
	$fdata["GoodName"] = "created";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","created");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created";

	
		$fdata["FullName"] = "created";

	
	
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


	$tdatasp_notif_t_mail["created"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "created";
//	expire
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "expire";
	$fdata["GoodName"] = "expire";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","expire");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "expire";

	
		$fdata["FullName"] = "expire";

	
	
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


	$tdatasp_notif_t_mail["expire"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "expire";
//	type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "type";
	$fdata["GoodName"] = "type";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "type";

	
		$fdata["FullName"] = "type";

	
	
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


	$tdatasp_notif_t_mail["type"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "type";
//	group
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "group";
	$fdata["GoodName"] = "group";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sp_notif_t_mail","group");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "group";

	
		$fdata["FullName"] = "group";

	
	
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


	$tdatasp_notif_t_mail["group"] = $fdata;
		$tdatasp_notif_t_mail[".searchableFields"][] = "group";


$tables_data["sp_notif_t_mail"]=&$tdatasp_notif_t_mail;
$field_labels["sp_notif_t_mail"] = &$fieldLabelssp_notif_t_mail;
$fieldToolTips["sp_notif_t_mail"] = &$fieldToolTipssp_notif_t_mail;
$placeHolders["sp_notif_t_mail"] = &$placeHolderssp_notif_t_mail;
$page_titles["sp_notif_t_mail"] = &$pageTitlessp_notif_t_mail;


changeTextControlsToDate( "sp_notif_t_mail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sp_notif_t_mail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sp_notif_t_mail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/sp_notif_t_mail_ops.php" ) );



	
				;

													

$tdatasp_notif_t_mail[".sqlquery"] = $queryData_sp_notif_t_mail;



$tdatasp_notif_t_mail[".hasEvents"] = false;

?>