<?php
$tdatam_employee = array();
$tdatam_employee[".searchableFields"] = array();
$tdatam_employee[".ShortName"] = "m_employee";
$tdatam_employee[".OwnerID"] = "";
$tdatam_employee[".OriginalTable"] = "m_employee";


$tdatam_employee[".pagesByType"] = my_json_decode( "{}" );
$tdatam_employee[".originalPagesByType"] = $tdatam_employee[".pagesByType"];
$tdatam_employee[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdatam_employee[".originalPages"] = $tdatam_employee[".pages"];
$tdatam_employee[".defaultPages"] = my_json_decode( "{}" );
$tdatam_employee[".originalDefaultPages"] = $tdatam_employee[".defaultPages"];

//	field labels
$fieldLabelsm_employee = array();
$fieldToolTipsm_employee = array();
$pageTitlesm_employee = array();
$placeHoldersm_employee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsm_employee["English"] = array();
	$fieldToolTipsm_employee["English"] = array();
	$placeHoldersm_employee["English"] = array();
	$pageTitlesm_employee["English"] = array();
	$fieldLabelsm_employee["English"]["id"] = "Id";
	$fieldToolTipsm_employee["English"]["id"] = "";
	$placeHoldersm_employee["English"]["id"] = "";
	$fieldLabelsm_employee["English"]["prid"] = "Prid";
	$fieldToolTipsm_employee["English"]["prid"] = "";
	$placeHoldersm_employee["English"]["prid"] = "";
	$fieldLabelsm_employee["English"]["comid"] = "Comid";
	$fieldToolTipsm_employee["English"]["comid"] = "";
	$placeHoldersm_employee["English"]["comid"] = "";
	$fieldLabelsm_employee["English"]["nik"] = "Nik";
	$fieldToolTipsm_employee["English"]["nik"] = "";
	$placeHoldersm_employee["English"]["nik"] = "";
	$fieldLabelsm_employee["English"]["nama"] = "Nama";
	$fieldToolTipsm_employee["English"]["nama"] = "";
	$placeHoldersm_employee["English"]["nama"] = "";
	$fieldLabelsm_employee["English"]["email"] = "Email";
	$fieldToolTipsm_employee["English"]["email"] = "";
	$placeHoldersm_employee["English"]["email"] = "";
	$fieldLabelsm_employee["English"]["position"] = "Position";
	$fieldToolTipsm_employee["English"]["position"] = "";
	$placeHoldersm_employee["English"]["position"] = "";
	$fieldLabelsm_employee["English"]["norekbca"] = "Norekbca";
	$fieldToolTipsm_employee["English"]["norekbca"] = "";
	$placeHoldersm_employee["English"]["norekbca"] = "";
	$fieldLabelsm_employee["English"]["secdate"] = "Secdate";
	$fieldToolTipsm_employee["English"]["secdate"] = "";
	$placeHoldersm_employee["English"]["secdate"] = "";
	$fieldLabelsm_employee["English"]["secuser"] = "Secuser";
	$fieldToolTipsm_employee["English"]["secuser"] = "";
	$placeHoldersm_employee["English"]["secuser"] = "";
	$fieldLabelsm_employee["English"]["gender"] = "Gender";
	$fieldToolTipsm_employee["English"]["gender"] = "";
	$placeHoldersm_employee["English"]["gender"] = "";
	$fieldLabelsm_employee["English"]["agama"] = "Agama";
	$fieldToolTipsm_employee["English"]["agama"] = "";
	$placeHoldersm_employee["English"]["agama"] = "";
	$fieldLabelsm_employee["English"]["birthplace"] = "Birthplace";
	$fieldToolTipsm_employee["English"]["birthplace"] = "";
	$placeHoldersm_employee["English"]["birthplace"] = "";
	$fieldLabelsm_employee["English"]["birthday"] = "Birthday";
	$fieldToolTipsm_employee["English"]["birthday"] = "";
	$placeHoldersm_employee["English"]["birthday"] = "";
	$fieldLabelsm_employee["English"]["noktp"] = "Noktp";
	$fieldToolTipsm_employee["English"]["noktp"] = "";
	$placeHoldersm_employee["English"]["noktp"] = "";
	$fieldLabelsm_employee["English"]["nokk"] = "Nokk";
	$fieldToolTipsm_employee["English"]["nokk"] = "";
	$placeHoldersm_employee["English"]["nokk"] = "";
	$fieldLabelsm_employee["English"]["nohp"] = "Nohp";
	$fieldToolTipsm_employee["English"]["nohp"] = "";
	$placeHoldersm_employee["English"]["nohp"] = "";
	$fieldLabelsm_employee["English"]["emailpribadi"] = "Emailpribadi";
	$fieldToolTipsm_employee["English"]["emailpribadi"] = "";
	$placeHoldersm_employee["English"]["emailpribadi"] = "";
	$fieldLabelsm_employee["English"]["alamatktp"] = "Alamatktp";
	$fieldToolTipsm_employee["English"]["alamatktp"] = "";
	$placeHoldersm_employee["English"]["alamatktp"] = "";
	$fieldLabelsm_employee["English"]["alamatdom"] = "Alamatdom";
	$fieldToolTipsm_employee["English"]["alamatdom"] = "";
	$placeHoldersm_employee["English"]["alamatdom"] = "";
	$fieldLabelsm_employee["English"]["datejoin"] = "Datejoin";
	$fieldToolTipsm_employee["English"]["datejoin"] = "";
	$placeHoldersm_employee["English"]["datejoin"] = "";
	$fieldLabelsm_employee["English"]["dateangkat"] = "Dateangkat";
	$fieldToolTipsm_employee["English"]["dateangkat"] = "";
	$placeHoldersm_employee["English"]["dateangkat"] = "";
	$fieldLabelsm_employee["English"]["isaktif"] = "Isaktif";
	$fieldToolTipsm_employee["English"]["isaktif"] = "";
	$placeHoldersm_employee["English"]["isaktif"] = "";
	$fieldLabelsm_employee["English"]["nonpwp"] = "Nonpwp";
	$fieldToolTipsm_employee["English"]["nonpwp"] = "";
	$placeHoldersm_employee["English"]["nonpwp"] = "";
	$fieldLabelsm_employee["English"]["npbjpskes"] = "Npbjpskes";
	$fieldToolTipsm_employee["English"]["npbjpskes"] = "";
	$placeHoldersm_employee["English"]["npbjpskes"] = "";
	$fieldLabelsm_employee["English"]["nobpjstk"] = "Nobpjstk";
	$fieldToolTipsm_employee["English"]["nobpjstk"] = "";
	$placeHoldersm_employee["English"]["nobpjstk"] = "";
	$fieldLabelsm_employee["English"]["nopaspor"] = "Nopaspor";
	$fieldToolTipsm_employee["English"]["nopaspor"] = "";
	$placeHoldersm_employee["English"]["nopaspor"] = "";
	$fieldLabelsm_employee["English"]["statustax"] = "Statustax";
	$fieldToolTipsm_employee["English"]["statustax"] = "";
	$placeHoldersm_employee["English"]["statustax"] = "";
	$fieldLabelsm_employee["English"]["daruratnama"] = "Daruratnama";
	$fieldToolTipsm_employee["English"]["daruratnama"] = "";
	$placeHoldersm_employee["English"]["daruratnama"] = "";
	$fieldLabelsm_employee["English"]["darurathub"] = "Darurathub";
	$fieldToolTipsm_employee["English"]["darurathub"] = "";
	$placeHoldersm_employee["English"]["darurathub"] = "";
	$fieldLabelsm_employee["English"]["darurattelp"] = "Darurattelp";
	$fieldToolTipsm_employee["English"]["darurattelp"] = "";
	$placeHoldersm_employee["English"]["darurattelp"] = "";
	$fieldLabelsm_employee["English"]["userid"] = "Userid";
	$fieldToolTipsm_employee["English"]["userid"] = "";
	$placeHoldersm_employee["English"]["userid"] = "";
	$fieldLabelsm_employee["English"]["level"] = "Level";
	$fieldToolTipsm_employee["English"]["level"] = "";
	$placeHoldersm_employee["English"]["level"] = "";
	$fieldLabelsm_employee["English"]["uprid"] = "Uprid";
	$fieldToolTipsm_employee["English"]["uprid"] = "";
	$placeHoldersm_employee["English"]["uprid"] = "";
	$fieldLabelsm_employee["English"]["statuskawin"] = "Statuskawin";
	$fieldToolTipsm_employee["English"]["statuskawin"] = "";
	$placeHoldersm_employee["English"]["statuskawin"] = "";
	$fieldLabelsm_employee["English"]["jmlanak"] = "Jmlanak";
	$fieldToolTipsm_employee["English"]["jmlanak"] = "";
	$placeHoldersm_employee["English"]["jmlanak"] = "";
	$fieldLabelsm_employee["English"]["noasuransi"] = "Noasuransi";
	$fieldToolTipsm_employee["English"]["noasuransi"] = "";
	$placeHoldersm_employee["English"]["noasuransi"] = "";
	$fieldLabelsm_employee["English"]["nopks"] = "Nopks";
	$fieldToolTipsm_employee["English"]["nopks"] = "";
	$placeHoldersm_employee["English"]["nopks"] = "";
	$fieldLabelsm_employee["English"]["dpks"] = "Dpks";
	$fieldToolTipsm_employee["English"]["dpks"] = "";
	$placeHoldersm_employee["English"]["dpks"] = "";
	$fieldLabelsm_employee["English"]["handler"] = "Handler";
	$fieldToolTipsm_employee["English"]["handler"] = "";
	$placeHoldersm_employee["English"]["handler"] = "";
	$fieldLabelsm_employee["English"]["is_active"] = "Is Active";
	$fieldToolTipsm_employee["English"]["is_active"] = "";
	$placeHoldersm_employee["English"]["is_active"] = "";
	$fieldLabelsm_employee["English"]["is_delete"] = "Is Delete";
	$fieldToolTipsm_employee["English"]["is_delete"] = "";
	$placeHoldersm_employee["English"]["is_delete"] = "";
	$fieldLabelsm_employee["English"]["deleted_date"] = "Deleted Date";
	$fieldToolTipsm_employee["English"]["deleted_date"] = "";
	$placeHoldersm_employee["English"]["deleted_date"] = "";
	$fieldLabelsm_employee["English"]["created_date"] = "Created Date";
	$fieldToolTipsm_employee["English"]["created_date"] = "";
	$placeHoldersm_employee["English"]["created_date"] = "";
	$fieldLabelsm_employee["English"]["created_by"] = "Created By";
	$fieldToolTipsm_employee["English"]["created_by"] = "";
	$placeHoldersm_employee["English"]["created_by"] = "";
	$fieldLabelsm_employee["English"]["last_update_by"] = "Last Update By";
	$fieldToolTipsm_employee["English"]["last_update_by"] = "";
	$placeHoldersm_employee["English"]["last_update_by"] = "";
	$fieldLabelsm_employee["English"]["last_update_date"] = "Last Update Date";
	$fieldToolTipsm_employee["English"]["last_update_date"] = "";
	$placeHoldersm_employee["English"]["last_update_date"] = "";
	if (count($fieldToolTipsm_employee["English"]))
		$tdatam_employee[".isUseToolTips"] = true;
}


	$tdatam_employee[".NCSearch"] = true;



$tdatam_employee[".shortTableName"] = "m_employee";
$tdatam_employee[".nSecOptions"] = 0;

$tdatam_employee[".mainTableOwnerID"] = "";
$tdatam_employee[".entityType"] = 0;
$tdatam_employee[".connId"] = "u736239518tsundbat154412412";


$tdatam_employee[".strOriginalTableName"] = "m_employee";

	



$tdatam_employee[".showAddInPopup"] = false;

$tdatam_employee[".showEditInPopup"] = false;

$tdatam_employee[".showViewInPopup"] = false;

$tdatam_employee[".listAjax"] = false;
//	temporary
//$tdatam_employee[".listAjax"] = false;

	$tdatam_employee[".audit"] = false;

	$tdatam_employee[".locking"] = false;


$pages = $tdatam_employee[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatam_employee[".edit"] = true;
	$tdatam_employee[".afterEditAction"] = 1;
	$tdatam_employee[".closePopupAfterEdit"] = 1;
	$tdatam_employee[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatam_employee[".add"] = true;
$tdatam_employee[".afterAddAction"] = 1;
$tdatam_employee[".closePopupAfterAdd"] = 1;
$tdatam_employee[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatam_employee[".list"] = true;
}



$tdatam_employee[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatam_employee[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatam_employee[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatam_employee[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatam_employee[".printFriendly"] = true;
}



$tdatam_employee[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatam_employee[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatam_employee[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatam_employee[".isUseAjaxSuggest"] = true;



																																																			

$tdatam_employee[".ajaxCodeSnippetAdded"] = false;

$tdatam_employee[".buttonsAdded"] = false;

$tdatam_employee[".addPageEvents"] = false;

// use timepicker for search panel
$tdatam_employee[".isUseTimeForSearch"] = false;


$tdatam_employee[".badgeColor"] = "D2691E";


$tdatam_employee[".allSearchFields"] = array();
$tdatam_employee[".filterFields"] = array();
$tdatam_employee[".requiredSearchFields"] = array();

$tdatam_employee[".googleLikeFields"] = array();
$tdatam_employee[".googleLikeFields"][] = "id";
$tdatam_employee[".googleLikeFields"][] = "prid";
$tdatam_employee[".googleLikeFields"][] = "comid";
$tdatam_employee[".googleLikeFields"][] = "nik";
$tdatam_employee[".googleLikeFields"][] = "nama";
$tdatam_employee[".googleLikeFields"][] = "email";
$tdatam_employee[".googleLikeFields"][] = "position";
$tdatam_employee[".googleLikeFields"][] = "norekbca";
$tdatam_employee[".googleLikeFields"][] = "secdate";
$tdatam_employee[".googleLikeFields"][] = "secuser";
$tdatam_employee[".googleLikeFields"][] = "gender";
$tdatam_employee[".googleLikeFields"][] = "agama";
$tdatam_employee[".googleLikeFields"][] = "birthplace";
$tdatam_employee[".googleLikeFields"][] = "birthday";
$tdatam_employee[".googleLikeFields"][] = "noktp";
$tdatam_employee[".googleLikeFields"][] = "nokk";
$tdatam_employee[".googleLikeFields"][] = "nohp";
$tdatam_employee[".googleLikeFields"][] = "emailpribadi";
$tdatam_employee[".googleLikeFields"][] = "alamatktp";
$tdatam_employee[".googleLikeFields"][] = "alamatdom";
$tdatam_employee[".googleLikeFields"][] = "datejoin";
$tdatam_employee[".googleLikeFields"][] = "dateangkat";
$tdatam_employee[".googleLikeFields"][] = "isaktif";
$tdatam_employee[".googleLikeFields"][] = "nonpwp";
$tdatam_employee[".googleLikeFields"][] = "npbjpskes";
$tdatam_employee[".googleLikeFields"][] = "nobpjstk";
$tdatam_employee[".googleLikeFields"][] = "nopaspor";
$tdatam_employee[".googleLikeFields"][] = "statustax";
$tdatam_employee[".googleLikeFields"][] = "daruratnama";
$tdatam_employee[".googleLikeFields"][] = "darurathub";
$tdatam_employee[".googleLikeFields"][] = "darurattelp";
$tdatam_employee[".googleLikeFields"][] = "userid";
$tdatam_employee[".googleLikeFields"][] = "level";
$tdatam_employee[".googleLikeFields"][] = "uprid";
$tdatam_employee[".googleLikeFields"][] = "statuskawin";
$tdatam_employee[".googleLikeFields"][] = "jmlanak";
$tdatam_employee[".googleLikeFields"][] = "noasuransi";
$tdatam_employee[".googleLikeFields"][] = "nopks";
$tdatam_employee[".googleLikeFields"][] = "dpks";
$tdatam_employee[".googleLikeFields"][] = "handler";
$tdatam_employee[".googleLikeFields"][] = "is_active";
$tdatam_employee[".googleLikeFields"][] = "is_delete";
$tdatam_employee[".googleLikeFields"][] = "deleted_date";
$tdatam_employee[".googleLikeFields"][] = "created_date";
$tdatam_employee[".googleLikeFields"][] = "created_by";
$tdatam_employee[".googleLikeFields"][] = "last_update_by";
$tdatam_employee[".googleLikeFields"][] = "last_update_date";



$tdatam_employee[".tableType"] = "list";

$tdatam_employee[".printerPageOrientation"] = 0;
$tdatam_employee[".nPrinterPageScale"] = 100;

$tdatam_employee[".nPrinterSplitRecords"] = 40;

$tdatam_employee[".geocodingEnabled"] = false;










$tdatam_employee[".pageSize"] = 20;

$tdatam_employee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatam_employee[".strOrderBy"] = $tstrOrderBy;

$tdatam_employee[".orderindexes"] = array();


$tdatam_employee[".sqlHead"] = "SELECT id,  	prid,  	comid,  	nik,  	nama,  	email,  	`position`,  	norekbca,  	secdate,  	secuser,  	gender,  	agama,  	birthplace,  	birthday,  	noktp,  	nokk,  	nohp,  	emailpribadi,  	alamatktp,  	alamatdom,  	datejoin,  	dateangkat,  	isaktif,  	nonpwp,  	npbjpskes,  	nobpjstk,  	nopaspor,  	statustax,  	daruratnama,  	darurathub,  	darurattelp,  	userid,  	`level`,  	uprid,  	statuskawin,  	jmlanak,  	noasuransi,  	nopks,  	dpks,  	handler,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$tdatam_employee[".sqlFrom"] = "FROM m_employee";
$tdatam_employee[".sqlWhereExpr"] = "";
$tdatam_employee[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatam_employee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatam_employee[".arrGroupsPerPage"] = $arrGPP;

$tdatam_employee[".highlightSearchResults"] = true;

$tableKeysm_employee = array();
$tableKeysm_employee[] = "id";
$tdatam_employee[".Keys"] = $tableKeysm_employee;


$tdatam_employee[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","id");
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


	$tdatam_employee["id"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "id";
//	prid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "prid";
	$fdata["GoodName"] = "prid";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","prid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "prid";

		$fdata["sourceSingle"] = "prid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prid";

	
	
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


	$tdatam_employee["prid"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "prid";
//	comid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "comid";
	$fdata["GoodName"] = "comid";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","comid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "comid";

		$fdata["sourceSingle"] = "comid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comid";

	
	
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


	$tdatam_employee["comid"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "comid";
//	nik
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nik";
	$fdata["GoodName"] = "nik";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nik");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nik";

		$fdata["sourceSingle"] = "nik";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nik";

	
	
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


	$tdatam_employee["nik"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nik";
//	nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "nama";
	$fdata["GoodName"] = "nama";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nama";

		$fdata["sourceSingle"] = "nama";

		$fdata["isSQLExpression"] = true;
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatam_employee["nama"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nama";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "email";

		$fdata["sourceSingle"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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


	$tdatam_employee["email"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "email";
//	position
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "position";
	$fdata["GoodName"] = "position";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","position");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "position";

		$fdata["sourceSingle"] = "position";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`position`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatam_employee["position"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "position";
//	norekbca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "norekbca";
	$fdata["GoodName"] = "norekbca";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","norekbca");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "norekbca";

		$fdata["sourceSingle"] = "norekbca";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "norekbca";

	
	
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


	$tdatam_employee["norekbca"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "norekbca";
//	secdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "secdate";
	$fdata["GoodName"] = "secdate";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","secdate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "secdate";

		$fdata["sourceSingle"] = "secdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "secdate";

	
	
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


	$tdatam_employee["secdate"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "secdate";
//	secuser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "secuser";
	$fdata["GoodName"] = "secuser";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","secuser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "secuser";

		$fdata["sourceSingle"] = "secuser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "secuser";

	
	
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


	$tdatam_employee["secuser"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "secuser";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gender";

		$fdata["sourceSingle"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";

	
	
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
			$edata["EditParams"].= " maxlength=1";

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


	$tdatam_employee["gender"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "gender";
//	agama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "agama";
	$fdata["GoodName"] = "agama";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","agama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "agama";

		$fdata["sourceSingle"] = "agama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "agama";

	
	
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


	$tdatam_employee["agama"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "agama";
//	birthplace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "birthplace";
	$fdata["GoodName"] = "birthplace";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","birthplace");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "birthplace";

		$fdata["sourceSingle"] = "birthplace";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birthplace";

	
	
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


	$tdatam_employee["birthplace"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "birthplace";
//	birthday
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "birthday";
	$fdata["GoodName"] = "birthday";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","birthday");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "birthday";

		$fdata["sourceSingle"] = "birthday";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birthday";

	
	
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


	$tdatam_employee["birthday"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "birthday";
//	noktp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "noktp";
	$fdata["GoodName"] = "noktp";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","noktp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "noktp";

		$fdata["sourceSingle"] = "noktp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noktp";

	
	
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


	$tdatam_employee["noktp"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "noktp";
//	nokk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "nokk";
	$fdata["GoodName"] = "nokk";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nokk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nokk";

		$fdata["sourceSingle"] = "nokk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nokk";

	
	
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


	$tdatam_employee["nokk"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nokk";
//	nohp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nohp";
	$fdata["GoodName"] = "nohp";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nohp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nohp";

		$fdata["sourceSingle"] = "nohp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nohp";

	
	
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


	$tdatam_employee["nohp"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nohp";
//	emailpribadi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "emailpribadi";
	$fdata["GoodName"] = "emailpribadi";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","emailpribadi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "emailpribadi";

		$fdata["sourceSingle"] = "emailpribadi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emailpribadi";

	
	
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


	$tdatam_employee["emailpribadi"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "emailpribadi";
//	alamatktp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "alamatktp";
	$fdata["GoodName"] = "alamatktp";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","alamatktp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alamatktp";

		$fdata["sourceSingle"] = "alamatktp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alamatktp";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatam_employee["alamatktp"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "alamatktp";
//	alamatdom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "alamatdom";
	$fdata["GoodName"] = "alamatdom";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","alamatdom");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "alamatdom";

		$fdata["sourceSingle"] = "alamatdom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "alamatdom";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatam_employee["alamatdom"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "alamatdom";
//	datejoin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "datejoin";
	$fdata["GoodName"] = "datejoin";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","datejoin");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "datejoin";

		$fdata["sourceSingle"] = "datejoin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datejoin";

	
	
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


	$tdatam_employee["datejoin"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "datejoin";
//	dateangkat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "dateangkat";
	$fdata["GoodName"] = "dateangkat";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","dateangkat");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "dateangkat";

		$fdata["sourceSingle"] = "dateangkat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateangkat";

	
	
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


	$tdatam_employee["dateangkat"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "dateangkat";
//	isaktif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "isaktif";
	$fdata["GoodName"] = "isaktif";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","isaktif");
	$fdata["FieldType"] = 13;


	
	
			

		$fdata["strField"] = "isaktif";

		$fdata["sourceSingle"] = "isaktif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isaktif";

	
	
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


	$tdatam_employee["isaktif"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "isaktif";
//	nonpwp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "nonpwp";
	$fdata["GoodName"] = "nonpwp";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nonpwp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nonpwp";

		$fdata["sourceSingle"] = "nonpwp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nonpwp";

	
	
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


	$tdatam_employee["nonpwp"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nonpwp";
//	npbjpskes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "npbjpskes";
	$fdata["GoodName"] = "npbjpskes";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","npbjpskes");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "npbjpskes";

		$fdata["sourceSingle"] = "npbjpskes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "npbjpskes";

	
	
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


	$tdatam_employee["npbjpskes"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "npbjpskes";
//	nobpjstk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "nobpjstk";
	$fdata["GoodName"] = "nobpjstk";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nobpjstk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nobpjstk";

		$fdata["sourceSingle"] = "nobpjstk";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nobpjstk";

	
	
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


	$tdatam_employee["nobpjstk"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nobpjstk";
//	nopaspor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "nopaspor";
	$fdata["GoodName"] = "nopaspor";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nopaspor");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nopaspor";

		$fdata["sourceSingle"] = "nopaspor";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nopaspor";

	
	
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


	$tdatam_employee["nopaspor"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nopaspor";
//	statustax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "statustax";
	$fdata["GoodName"] = "statustax";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","statustax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statustax";

		$fdata["sourceSingle"] = "statustax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statustax";

	
	
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
			$edata["EditParams"].= " maxlength=3";

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


	$tdatam_employee["statustax"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "statustax";
//	daruratnama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "daruratnama";
	$fdata["GoodName"] = "daruratnama";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","daruratnama");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "daruratnama";

		$fdata["sourceSingle"] = "daruratnama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "daruratnama";

	
	
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


	$tdatam_employee["daruratnama"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "daruratnama";
//	darurathub
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "darurathub";
	$fdata["GoodName"] = "darurathub";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","darurathub");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "darurathub";

		$fdata["sourceSingle"] = "darurathub";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "darurathub";

	
	
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


	$tdatam_employee["darurathub"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "darurathub";
//	darurattelp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "darurattelp";
	$fdata["GoodName"] = "darurattelp";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","darurattelp");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "darurattelp";

		$fdata["sourceSingle"] = "darurattelp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "darurattelp";

	
	
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


	$tdatam_employee["darurattelp"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "darurattelp";
//	userid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "userid";
	$fdata["GoodName"] = "userid";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","userid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userid";

		$fdata["sourceSingle"] = "userid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userid";

	
	
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


	$tdatam_employee["userid"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "userid";
//	level
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "level";
	$fdata["GoodName"] = "level";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","level");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "level";

		$fdata["sourceSingle"] = "level";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`level`";

	
	
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdatam_employee["level"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "level";
//	uprid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "uprid";
	$fdata["GoodName"] = "uprid";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","uprid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uprid";

		$fdata["sourceSingle"] = "uprid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uprid";

	
	
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


	$tdatam_employee["uprid"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "uprid";
//	statuskawin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "statuskawin";
	$fdata["GoodName"] = "statuskawin";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","statuskawin");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "statuskawin";

		$fdata["sourceSingle"] = "statuskawin";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "statuskawin";

	
	
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


	$tdatam_employee["statuskawin"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "statuskawin";
//	jmlanak
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "jmlanak";
	$fdata["GoodName"] = "jmlanak";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","jmlanak");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "jmlanak";

		$fdata["sourceSingle"] = "jmlanak";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jmlanak";

	
	
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


	$tdatam_employee["jmlanak"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "jmlanak";
//	noasuransi
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "noasuransi";
	$fdata["GoodName"] = "noasuransi";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","noasuransi");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "noasuransi";

		$fdata["sourceSingle"] = "noasuransi";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "noasuransi";

	
	
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


	$tdatam_employee["noasuransi"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "noasuransi";
//	nopks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "nopks";
	$fdata["GoodName"] = "nopks";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","nopks");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nopks";

		$fdata["sourceSingle"] = "nopks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nopks";

	
	
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


	$tdatam_employee["nopks"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "nopks";
//	dpks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "dpks";
	$fdata["GoodName"] = "dpks";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","dpks");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "dpks";

		$fdata["sourceSingle"] = "dpks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dpks";

	
	
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


	$tdatam_employee["dpks"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "dpks";
//	handler
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "handler";
	$fdata["GoodName"] = "handler";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","handler");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "handler";

		$fdata["sourceSingle"] = "handler";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "handler";

	
	
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


	$tdatam_employee["handler"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "handler";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatam_employee["is_active"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "is_active";
//	is_delete
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "is_delete";
	$fdata["GoodName"] = "is_delete";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","is_delete");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_delete";

		$fdata["sourceSingle"] = "is_delete";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_delete";

	
	
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


	$tdatam_employee["is_delete"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "is_delete";
//	deleted_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "deleted_date";
	$fdata["GoodName"] = "deleted_date";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","deleted_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "deleted_date";

		$fdata["sourceSingle"] = "deleted_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "deleted_date";

	
	
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


	$tdatam_employee["deleted_date"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "deleted_date";
//	created_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "created_date";
	$fdata["GoodName"] = "created_date";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","created_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_date";

		$fdata["sourceSingle"] = "created_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_date";

	
	
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


	$tdatam_employee["created_date"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "created_date";
//	created_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "created_by";
	$fdata["GoodName"] = "created_by";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","created_by");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "created_by";

		$fdata["sourceSingle"] = "created_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_by";

	
	
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


	$tdatam_employee["created_by"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "created_by";
//	last_update_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "last_update_by";
	$fdata["GoodName"] = "last_update_by";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","last_update_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "last_update_by";

		$fdata["sourceSingle"] = "last_update_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_by";

	
	
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


	$tdatam_employee["last_update_by"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "last_update_by";
//	last_update_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "last_update_date";
	$fdata["GoodName"] = "last_update_date";
	$fdata["ownerTable"] = "m_employee";
	$fdata["Label"] = GetFieldLabel("m_employee","last_update_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "last_update_date";

		$fdata["sourceSingle"] = "last_update_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "last_update_date";

	
	
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


	$tdatam_employee["last_update_date"] = $fdata;
		$tdatam_employee[".searchableFields"][] = "last_update_date";


$tables_data["m_employee"]=&$tdatam_employee;
$field_labels["m_employee"] = &$fieldLabelsm_employee;
$fieldToolTips["m_employee"] = &$fieldToolTipsm_employee;
$placeHolders["m_employee"] = &$placeHoldersm_employee;
$page_titles["m_employee"] = &$pageTitlesm_employee;


changeTextControlsToDate( "m_employee" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["m_employee"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["m_employee"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_m_employee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	prid,  	comid,  	nik,  	nama,  	email,  	`position`,  	norekbca,  	secdate,  	secuser,  	gender,  	agama,  	birthplace,  	birthday,  	noktp,  	nokk,  	nohp,  	emailpribadi,  	alamatktp,  	alamatdom,  	datejoin,  	dateangkat,  	isaktif,  	nonpwp,  	npbjpskes,  	nobpjstk,  	nopaspor,  	statustax,  	daruratnama,  	darurathub,  	darurattelp,  	userid,  	`level`,  	uprid,  	statuskawin,  	jmlanak,  	noasuransi,  	nopks,  	dpks,  	handler,  	is_active,  	is_delete,  	deleted_date,  	created_date,  	created_by,  	last_update_by,  	last_update_date";
$proto0["m_strFrom"] = "FROM m_employee";
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
	"m_strName" => "id",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "m_employee";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "prid",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto8["m_sql"] = "prid";
$proto8["m_srcTableName"] = "m_employee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "comid",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto10["m_sql"] = "comid";
$proto10["m_srcTableName"] = "m_employee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nik",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto12["m_sql"] = "nik";
$proto12["m_srcTableName"] = "m_employee";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "nama",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto14["m_sql"] = "nama";
$proto14["m_srcTableName"] = "m_employee";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto16["m_sql"] = "email";
$proto16["m_srcTableName"] = "m_employee";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "position",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto18["m_sql"] = "`position`";
$proto18["m_srcTableName"] = "m_employee";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "norekbca",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto20["m_sql"] = "norekbca";
$proto20["m_srcTableName"] = "m_employee";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "secdate",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto22["m_sql"] = "secdate";
$proto22["m_srcTableName"] = "m_employee";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "secuser",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto24["m_sql"] = "secuser";
$proto24["m_srcTableName"] = "m_employee";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto26["m_sql"] = "gender";
$proto26["m_srcTableName"] = "m_employee";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "agama",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto28["m_sql"] = "agama";
$proto28["m_srcTableName"] = "m_employee";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "birthplace",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto30["m_sql"] = "birthplace";
$proto30["m_srcTableName"] = "m_employee";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "birthday",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto32["m_sql"] = "birthday";
$proto32["m_srcTableName"] = "m_employee";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "noktp",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto34["m_sql"] = "noktp";
$proto34["m_srcTableName"] = "m_employee";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "nokk",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto36["m_sql"] = "nokk";
$proto36["m_srcTableName"] = "m_employee";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nohp",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto38["m_sql"] = "nohp";
$proto38["m_srcTableName"] = "m_employee";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "emailpribadi",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto40["m_sql"] = "emailpribadi";
$proto40["m_srcTableName"] = "m_employee";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "alamatktp",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto42["m_sql"] = "alamatktp";
$proto42["m_srcTableName"] = "m_employee";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "alamatdom",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto44["m_sql"] = "alamatdom";
$proto44["m_srcTableName"] = "m_employee";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "datejoin",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto46["m_sql"] = "datejoin";
$proto46["m_srcTableName"] = "m_employee";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "dateangkat",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto48["m_sql"] = "dateangkat";
$proto48["m_srcTableName"] = "m_employee";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "isaktif",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto50["m_sql"] = "isaktif";
$proto50["m_srcTableName"] = "m_employee";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "nonpwp",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto52["m_sql"] = "nonpwp";
$proto52["m_srcTableName"] = "m_employee";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "npbjpskes",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto54["m_sql"] = "npbjpskes";
$proto54["m_srcTableName"] = "m_employee";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "nobpjstk",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto56["m_sql"] = "nobpjstk";
$proto56["m_srcTableName"] = "m_employee";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "nopaspor",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto58["m_sql"] = "nopaspor";
$proto58["m_srcTableName"] = "m_employee";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "statustax",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto60["m_sql"] = "statustax";
$proto60["m_srcTableName"] = "m_employee";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "daruratnama",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto62["m_sql"] = "daruratnama";
$proto62["m_srcTableName"] = "m_employee";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "darurathub",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto64["m_sql"] = "darurathub";
$proto64["m_srcTableName"] = "m_employee";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "darurattelp",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto66["m_sql"] = "darurattelp";
$proto66["m_srcTableName"] = "m_employee";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "userid",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto68["m_sql"] = "userid";
$proto68["m_srcTableName"] = "m_employee";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "level",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto70["m_sql"] = "`level`";
$proto70["m_srcTableName"] = "m_employee";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "uprid",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto72["m_sql"] = "uprid";
$proto72["m_srcTableName"] = "m_employee";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "statuskawin",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto74["m_sql"] = "statuskawin";
$proto74["m_srcTableName"] = "m_employee";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "jmlanak",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto76["m_sql"] = "jmlanak";
$proto76["m_srcTableName"] = "m_employee";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "noasuransi",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto78["m_sql"] = "noasuransi";
$proto78["m_srcTableName"] = "m_employee";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "nopks",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto80["m_sql"] = "nopks";
$proto80["m_srcTableName"] = "m_employee";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "dpks",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto82["m_sql"] = "dpks";
$proto82["m_srcTableName"] = "m_employee";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "handler",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto84["m_sql"] = "handler";
$proto84["m_srcTableName"] = "m_employee";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto86["m_sql"] = "is_active";
$proto86["m_srcTableName"] = "m_employee";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "is_delete",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto88["m_sql"] = "is_delete";
$proto88["m_srcTableName"] = "m_employee";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "deleted_date",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto90["m_sql"] = "deleted_date";
$proto90["m_srcTableName"] = "m_employee";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "created_date",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto92["m_sql"] = "created_date";
$proto92["m_srcTableName"] = "m_employee";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "created_by",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto94["m_sql"] = "created_by";
$proto94["m_srcTableName"] = "m_employee";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_by",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto96["m_sql"] = "last_update_by";
$proto96["m_srcTableName"] = "m_employee";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "last_update_date",
	"m_strTable" => "m_employee",
	"m_srcTableName" => "m_employee"
));

$proto98["m_sql"] = "last_update_date";
$proto98["m_srcTableName"] = "m_employee";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto100=array();
$proto100["m_link"] = "SQLL_MAIN";
			$proto101=array();
$proto101["m_strName"] = "m_employee";
$proto101["m_srcTableName"] = "m_employee";
$proto101["m_columns"] = array();
$proto101["m_columns"][] = "id";
$proto101["m_columns"][] = "prid";
$proto101["m_columns"][] = "comid";
$proto101["m_columns"][] = "nik";
$proto101["m_columns"][] = "nama";
$proto101["m_columns"][] = "email";
$proto101["m_columns"][] = "position";
$proto101["m_columns"][] = "norekbca";
$proto101["m_columns"][] = "secdate";
$proto101["m_columns"][] = "secuser";
$proto101["m_columns"][] = "gender";
$proto101["m_columns"][] = "agama";
$proto101["m_columns"][] = "birthplace";
$proto101["m_columns"][] = "birthday";
$proto101["m_columns"][] = "noktp";
$proto101["m_columns"][] = "nokk";
$proto101["m_columns"][] = "nohp";
$proto101["m_columns"][] = "emailpribadi";
$proto101["m_columns"][] = "alamatktp";
$proto101["m_columns"][] = "alamatdom";
$proto101["m_columns"][] = "datejoin";
$proto101["m_columns"][] = "dateangkat";
$proto101["m_columns"][] = "isaktif";
$proto101["m_columns"][] = "nonpwp";
$proto101["m_columns"][] = "npbjpskes";
$proto101["m_columns"][] = "nobpjstk";
$proto101["m_columns"][] = "nopaspor";
$proto101["m_columns"][] = "statustax";
$proto101["m_columns"][] = "daruratnama";
$proto101["m_columns"][] = "darurathub";
$proto101["m_columns"][] = "darurattelp";
$proto101["m_columns"][] = "userid";
$proto101["m_columns"][] = "level";
$proto101["m_columns"][] = "uprid";
$proto101["m_columns"][] = "statuskawin";
$proto101["m_columns"][] = "jmlanak";
$proto101["m_columns"][] = "noasuransi";
$proto101["m_columns"][] = "nopks";
$proto101["m_columns"][] = "dpks";
$proto101["m_columns"][] = "handler";
$proto101["m_columns"][] = "is_active";
$proto101["m_columns"][] = "is_delete";
$proto101["m_columns"][] = "deleted_date";
$proto101["m_columns"][] = "created_date";
$proto101["m_columns"][] = "created_by";
$proto101["m_columns"][] = "last_update_by";
$proto101["m_columns"][] = "last_update_date";
$obj = new SQLTable($proto101);

$proto100["m_table"] = $obj;
$proto100["m_sql"] = "m_employee";
$proto100["m_alias"] = "";
$proto100["m_srcTableName"] = "m_employee";
$proto102=array();
$proto102["m_sql"] = "";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto100["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto100);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="m_employee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_m_employee = createSqlQuery_m_employee();


	
				;

																																															

$tdatam_employee[".sqlquery"] = $queryData_m_employee;



$tdatam_employee[".hasEvents"] = false;

?>