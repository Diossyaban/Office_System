<?php
$tdatam_announcement = array();
$tdatam_announcement[".searchableFields"] = array();
$tdatam_announcement[".ShortName"] = "m_announcement";
$tdatam_announcement[".OwnerID"] = "";
$tdatam_announcement[".OriginalTable"] = "m_announcement";


$tdatam_announcement[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatam_announcement[".originalPagesByType"] = $tdatam_announcement[".pagesByType"];
$tdatam_announcement[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatam_announcement[".originalPages"] = $tdatam_announcement[".pages"];
$tdatam_announcement[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatam_announcement[".originalDefaultPages"] = $tdatam_announcement[".defaultPages"];

//	field labels
$fieldLabelsm_announcement = array();
$fieldToolTipsm_announcement = array();
$pageTitlesm_announcement = array();
$placeHoldersm_announcement = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_announcement["English"] = array();
	$fieldToolTipsm_announcement["English"] = array();
	$placeHoldersm_announcement["English"] = array();
	$pageTitlesm_announcement["English"] = array();
	$fieldLabelsm_announcement["English"]["m_announcement"] = "M Announcement";
	$fieldToolTipsm_announcement["English"]["m_announcement"] = "";
	$placeHoldersm_announcement["English"]["m_announcement"] = "";
	$fieldLabelsm_announcement["English"]["announcement_subject"] = "Announcement Subject";
	$fieldToolTipsm_announcement["English"]["announcement_subject"] = "";
	$placeHoldersm_announcement["English"]["announcement_subject"] = "";
	$fieldLabelsm_announcement["English"]["announcement_desc"] = "Announcement Desc";
	$fieldToolTipsm_announcement["English"]["announcement_desc"] = "";
	$placeHoldersm_announcement["English"]["announcement_desc"] = "";
	$fieldLabelsm_announcement["English"]["announcement_file"] = "Announcement File";
	$fieldToolTipsm_announcement["English"]["announcement_file"] = "";
	$placeHoldersm_announcement["English"]["announcement_file"] = "";
	$fieldLabelsm_announcement["English"]["announcement_images"] = "Announcement Images";
	$fieldToolTipsm_announcement["English"]["announcement_images"] = "";
	$placeHoldersm_announcement["English"]["announcement_images"] = "";
	$fieldLabelsm_announcement["English"]["add_user"] = "Add User";
	$fieldToolTipsm_announcement["English"]["add_user"] = "";
	$placeHoldersm_announcement["English"]["add_user"] = "";
	$fieldLabelsm_announcement["English"]["add_date"] = "Date";
	$fieldToolTipsm_announcement["English"]["add_date"] = "";
	$placeHoldersm_announcement["English"]["add_date"] = "";
	$fieldLabelsm_announcement["English"]["edit_user"] = "Edit User";
	$fieldToolTipsm_announcement["English"]["edit_user"] = "";
	$placeHoldersm_announcement["English"]["edit_user"] = "";
	$fieldLabelsm_announcement["English"]["edit_date"] = "Lastupdated";
	$fieldToolTipsm_announcement["English"]["edit_date"] = "";
	$placeHoldersm_announcement["English"]["edit_date"] = "";
	$fieldLabelsm_announcement["English"]["announcement_star_periode"] = "Announcement Star Periode";
	$fieldToolTipsm_announcement["English"]["announcement_star_periode"] = "";
	$placeHoldersm_announcement["English"]["announcement_star_periode"] = "";
	$fieldLabelsm_announcement["English"]["announcement_end_periode"] = "Announcement End Periode";
	$fieldToolTipsm_announcement["English"]["announcement_end_periode"] = "";
	$placeHoldersm_announcement["English"]["announcement_end_periode"] = "";
	$fieldLabelsm_announcement["English"]["announcement_active"] = "Active";
	$fieldToolTipsm_announcement["English"]["announcement_active"] = "";
	$placeHoldersm_announcement["English"]["announcement_active"] = "";
	if (count($fieldToolTipsm_announcement["English"]))
		$tdatam_announcement[".isUseToolTips"] = true;
}


	$tdatam_announcement[".NCSearch"] = true;



$tdatam_announcement[".shortTableName"] = "m_announcement";
$tdatam_announcement[".nSecOptions"] = 0;

$tdatam_announcement[".mainTableOwnerID"] = "";
$tdatam_announcement[".entityType"] = 0;
$tdatam_announcement[".connId"] = "u736239518tsundbat154412412";


$tdatam_announcement[".strOriginalTableName"] = "m_announcement";

	



$tdatam_announcement[".showAddInPopup"] = false;

$tdatam_announcement[".showEditInPopup"] = false;

$tdatam_announcement[".showViewInPopup"] = false;

$tdatam_announcement[".listAjax"] = false;
//	temporary
//$tdatam_announcement[".listAjax"] = false;

	$tdatam_announcement[".audit"] = false;

	$tdatam_announcement[".locking"] = false;


$pages = $tdatam_announcement[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_announcement[".edit"] = true;
	$tdatam_announcement[".afterEditAction"] = 1;
	$tdatam_announcement[".closePopupAfterEdit"] = 1;
	$tdatam_announcement[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_announcement[".add"] = true;
$tdatam_announcement[".afterAddAction"] = 1;
$tdatam_announcement[".closePopupAfterAdd"] = 1;
$tdatam_announcement[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_announcement[".list"] = true;
}



$tdatam_announcement[".strSortControlSettingsJSON"] = "";

$tdatam_announcement[".strClickActionJSON"] = "{\"fields\":{\"add_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"add_user\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"announcement_active\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"announcement_desc\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"announcement_end_periode\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"announcement_file\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"announcement_images\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"announcement_star_periode\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"announcement_subject\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"edit_date\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"edit_user\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}},\"m_announcement\":{\"action\":\"noaction\",\"codeData\":{\"snippet\":\"\"},\"gridData\":{},\"openData\":{}}},\"row\":{\"action\":\"open\",\"codeData\":{},\"gridData\":{\"action\":\"checkbox\",\"table\":null},\"openData\":{\"how\":\"goto\",\"page\":\"view\",\"table\":null,\"url\":\"\"}}}";



if( $pages[PAGE_VIEW] ) {
$tdatam_announcement[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_announcement[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_announcement[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_announcement[".printFriendly"] = true;
}



$tdatam_announcement[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_announcement[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_announcement[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_announcement[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_announcement[".ajaxCodeSnippetAdded"] = false;

$tdatam_announcement[".buttonsAdded"] = false;

$tdatam_announcement[".addPageEvents"] = true;

// use timepicker for search panel
$tdatam_announcement[".isUseTimeForSearch"] = false;


$tdatam_announcement[".badgeColor"] = "EDCA00";


$tdatam_announcement[".allSearchFields"] = array();
$tdatam_announcement[".filterFields"] = array();
$tdatam_announcement[".requiredSearchFields"] = array();

$tdatam_announcement[".googleLikeFields"] = array();
$tdatam_announcement[".googleLikeFields"][] = "m_announcement";
$tdatam_announcement[".googleLikeFields"][] = "announcement_subject";
$tdatam_announcement[".googleLikeFields"][] = "announcement_desc";
$tdatam_announcement[".googleLikeFields"][] = "announcement_file";
$tdatam_announcement[".googleLikeFields"][] = "announcement_images";
$tdatam_announcement[".googleLikeFields"][] = "add_user";
$tdatam_announcement[".googleLikeFields"][] = "add_date";
$tdatam_announcement[".googleLikeFields"][] = "edit_user";
$tdatam_announcement[".googleLikeFields"][] = "edit_date";
$tdatam_announcement[".googleLikeFields"][] = "announcement_star_periode";
$tdatam_announcement[".googleLikeFields"][] = "announcement_end_periode";
$tdatam_announcement[".googleLikeFields"][] = "announcement_active";



$tdatam_announcement[".tableType"] = "list";

$tdatam_announcement[".printerPageOrientation"] = 0;
$tdatam_announcement[".nPrinterPageScale"] = 100;

$tdatam_announcement[".nPrinterSplitRecords"] = 40;

$tdatam_announcement[".geocodingEnabled"] = false;










$tdatam_announcement[".pageSize"] = 20;

$tdatam_announcement[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_announcement[".strOrderBy"] = $tstrOrderBy;

$tdatam_announcement[".orderindexes"] = array();


$tdatam_announcement[".sqlHead"] = "SELECT m_announcement,  	announcement_subject,  	announcement_desc,  	announcement_file,  	announcement_images,  	add_user,  	add_date,  	edit_user,  	edit_date,  	announcement_star_periode,  	announcement_end_periode,  	announcement_active";
$tdatam_announcement[".sqlFrom"] = "FROM m_announcement";
$tdatam_announcement[".sqlWhereExpr"] = "";
$tdatam_announcement[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_announcement[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_announcement[".arrGroupsPerPage"] = $arrGPP;

$tdatam_announcement[".highlightSearchResults"] = true;

$tableKeysm_announcement = array();
$tableKeysm_announcement[] = "m_announcement";
$tdatam_announcement[".Keys"] = $tableKeysm_announcement;


$tdatam_announcement[".hideMobileList"] = array();




//	m_announcement
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "m_announcement";
	$fdata["GoodName"] = "m_announcement";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","m_announcement");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "m_announcement";

		$fdata["sourceSingle"] = "m_announcement";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "m_announcement";

	
	
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


	$tdatam_announcement["m_announcement"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "m_announcement";
//	announcement_subject
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "announcement_subject";
	$fdata["GoodName"] = "announcement_subject";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","announcement_subject");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "announcement_subject";

		$fdata["sourceSingle"] = "announcement_subject";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "announcement_subject";

	
	
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


	$tdatam_announcement["announcement_subject"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "announcement_subject";
//	announcement_desc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "announcement_desc";
	$fdata["GoodName"] = "announcement_desc";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","announcement_desc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "announcement_desc";

		$fdata["sourceSingle"] = "announcement_desc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "announcement_desc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "HTML");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
		$edata["UseRTE"] = true;

	
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


	$tdatam_announcement["announcement_desc"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "announcement_desc";
//	announcement_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "announcement_file";
	$fdata["GoodName"] = "announcement_file";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","announcement_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "announcement_file";

		$fdata["sourceSingle"] = "announcement_file";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "announcement_file";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
						$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
			$vdata["DisplayPDF"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatam_announcement["announcement_file"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "announcement_file";
//	announcement_images
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "announcement_images";
	$fdata["GoodName"] = "announcement_images";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","announcement_images");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "announcement_images";

		$fdata["sourceSingle"] = "announcement_images";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "announcement_images";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ImageWidth"] = 60;
	$vdata["ImageHeight"] = 60;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 3;
	$vdata["captionField"] = "announcement_subject";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
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


	$tdatam_announcement["announcement_images"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "announcement_images";
//	add_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "add_user";
	$fdata["GoodName"] = "add_user";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","add_user");
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


	$tdatam_announcement["add_user"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "add_user";
//	add_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "add_date";
	$fdata["GoodName"] = "add_date";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","add_date");
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


	$tdatam_announcement["add_date"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "add_date";
//	edit_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "edit_user";
	$fdata["GoodName"] = "edit_user";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","edit_user");
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


	$tdatam_announcement["edit_user"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "edit_user";
//	edit_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "edit_date";
	$fdata["GoodName"] = "edit_date";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","edit_date");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 5;
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


	$tdatam_announcement["edit_date"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "edit_date";
//	announcement_star_periode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "announcement_star_periode";
	$fdata["GoodName"] = "announcement_star_periode";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","announcement_star_periode");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "announcement_star_periode";

		$fdata["sourceSingle"] = "announcement_star_periode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "announcement_star_periode";

	
	
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


	$tdatam_announcement["announcement_star_periode"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "announcement_star_periode";
//	announcement_end_periode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "announcement_end_periode";
	$fdata["GoodName"] = "announcement_end_periode";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","announcement_end_periode");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "announcement_end_periode";

		$fdata["sourceSingle"] = "announcement_end_periode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "announcement_end_periode";

	
	
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


	$tdatam_announcement["announcement_end_periode"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "announcement_end_periode";
//	announcement_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "announcement_active";
	$fdata["GoodName"] = "announcement_active";
	$fdata["ownerTable"] = "m_announcement";
	$fdata["Label"] = GetFieldLabel("m_announcement","announcement_active");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "announcement_active";

		$fdata["sourceSingle"] = "announcement_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "announcement_active";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
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


	$tdatam_announcement["announcement_active"] = $fdata;
		$tdatam_announcement[".searchableFields"][] = "announcement_active";


$tables_data["m_announcement"]=&$tdatam_announcement;
$field_labels["m_announcement"] = &$fieldLabelsm_announcement;
$fieldToolTips["m_announcement"] = &$fieldToolTipsm_announcement;
$placeHolders["m_announcement"] = &$placeHoldersm_announcement;
$page_titles["m_announcement"] = &$pageTitlesm_announcement;


changeTextControlsToDate( "m_announcement" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_announcement"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_announcement"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_announcement()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "m_announcement,  	announcement_subject,  	announcement_desc,  	announcement_file,  	announcement_images,  	add_user,  	add_date,  	edit_user,  	edit_date,  	announcement_star_periode,  	announcement_end_periode,  	announcement_active";
$proto0["m_strFrom"] = "FROM m_announcement";
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
	"m_strName" => "m_announcement",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto6["m_sql"] = "m_announcement";
$proto6["m_srcTableName"] = "m_announcement";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "announcement_subject",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto8["m_sql"] = "announcement_subject";
$proto8["m_srcTableName"] = "m_announcement";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "announcement_desc",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto10["m_sql"] = "announcement_desc";
$proto10["m_srcTableName"] = "m_announcement";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "announcement_file",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto12["m_sql"] = "announcement_file";
$proto12["m_srcTableName"] = "m_announcement";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "announcement_images",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto14["m_sql"] = "announcement_images";
$proto14["m_srcTableName"] = "m_announcement";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "add_user",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto16["m_sql"] = "add_user";
$proto16["m_srcTableName"] = "m_announcement";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "add_date",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto18["m_sql"] = "add_date";
$proto18["m_srcTableName"] = "m_announcement";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_user",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto20["m_sql"] = "edit_user";
$proto20["m_srcTableName"] = "m_announcement";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "edit_date",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto22["m_sql"] = "edit_date";
$proto22["m_srcTableName"] = "m_announcement";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "announcement_star_periode",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto24["m_sql"] = "announcement_star_periode";
$proto24["m_srcTableName"] = "m_announcement";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "announcement_end_periode",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto26["m_sql"] = "announcement_end_periode";
$proto26["m_srcTableName"] = "m_announcement";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "announcement_active",
	"m_strTable" => "m_announcement",
	"m_srcTableName" => "m_announcement"
));

$proto28["m_sql"] = "announcement_active";
$proto28["m_srcTableName"] = "m_announcement";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "m_announcement";
$proto31["m_srcTableName"] = "m_announcement";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "m_announcement";
$proto31["m_columns"][] = "announcement_subject";
$proto31["m_columns"][] = "announcement_desc";
$proto31["m_columns"][] = "announcement_file";
$proto31["m_columns"][] = "announcement_images";
$proto31["m_columns"][] = "add_user";
$proto31["m_columns"][] = "add_date";
$proto31["m_columns"][] = "edit_user";
$proto31["m_columns"][] = "edit_date";
$proto31["m_columns"][] = "announcement_star_periode";
$proto31["m_columns"][] = "announcement_end_periode";
$proto31["m_columns"][] = "announcement_active";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "m_announcement";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "m_announcement";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_announcement";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_announcement = createSqlQuery_m_announcement();


	
				;

												

$tdatam_announcement[".sqlquery"] = $queryData_m_announcement;



include_once(getabspath("include/m_announcement_events.php"));
$tdatam_announcement[".hasEvents"] = true;

?>