<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamp_helpdesk = array();
$tdatamp_helpdesk[".ShortName"] = "mp_helpdesk";

$tdatamp_helpdesk[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatamp_helpdesk[".originalPagesByType"] = $tdatamp_helpdesk[".pagesByType"];
$tdatamp_helpdesk[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatamp_helpdesk[".originalPages"] = $tdatamp_helpdesk[".pages"];
$tdatamp_helpdesk[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatamp_helpdesk[".originalDefaultPages"] = $tdatamp_helpdesk[".defaultPages"];


//	field labels
$fieldLabelsmp_helpdesk = array();
$pageTitlesmp_helpdesk = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmp_helpdesk["English"] = array();
}

/*
//	search fields
$tdatamp_helpdesk[".searchFields"] = array();

// all search fields
$tdatamp_helpdesk[".allSearchFields"] = array();

// good like search fields
$tdatamp_helpdesk[".googleLikeFields"] = array();
*/

/*
$tdatamp_helpdesk[".dashElements"] = array();

*/
$tdatamp_helpdesk[".shortTableName"] = "mp_helpdesk";
$tdatamp_helpdesk[".entityType"] = 4;




$tdatamp_helpdesk[".hasEvents"] = false;


$tdatamp_helpdesk[".tableType"] = "dashboard";


										
$tdatamp_helpdesk[".addPageEvents"] = false;

$tdatamp_helpdesk[".isUseAjaxSuggest"] = true;

$tables_data["mp_helpdesk"]=&$tdatamp_helpdesk;
$field_labels["mp_helpdesk"] = &$fieldLabelsmp_helpdesk;
$page_titles["mp_helpdesk"] = &$pageTitlesmp_helpdesk;

?>