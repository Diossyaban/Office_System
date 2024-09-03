<?php
require_once(getabspath("classes/cipherer.php"));



$tdatahome = array();
$tdatahome[".ShortName"] = "home";

$tdatahome[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatahome[".originalPagesByType"] = $tdatahome[".pagesByType"];
$tdatahome[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatahome[".originalPages"] = $tdatahome[".pages"];
$tdatahome[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatahome[".originalDefaultPages"] = $tdatahome[".defaultPages"];


//	field labels
$fieldLabelshome = array();
$pageTitleshome = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelshome["English"] = array();
}

/*
//	search fields
$tdatahome[".searchFields"] = array();

// all search fields
$tdatahome[".allSearchFields"] = array();

// good like search fields
$tdatahome[".googleLikeFields"] = array();
*/

/*
$tdatahome[".dashElements"] = array();

*/
$tdatahome[".shortTableName"] = "home";
$tdatahome[".entityType"] = 4;












include_once(getabspath("include/home_events.php"));
$tdatahome[".hasEvents"] = true;


$tdatahome[".tableType"] = "dashboard";


										
$tdatahome[".addPageEvents"] = false;

$tdatahome[".isUseAjaxSuggest"] = true;

$tables_data["home"]=&$tdatahome;
$field_labels["home"] = &$fieldLabelshome;
$page_titles["home"] = &$pageTitleshome;

?>