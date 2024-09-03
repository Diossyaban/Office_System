<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamp_ga = array();
$tdatamp_ga[".ShortName"] = "mp_ga";

$tdatamp_ga[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatamp_ga[".originalPagesByType"] = $tdatamp_ga[".pagesByType"];
$tdatamp_ga[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatamp_ga[".originalPages"] = $tdatamp_ga[".pages"];
$tdatamp_ga[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatamp_ga[".originalDefaultPages"] = $tdatamp_ga[".defaultPages"];


//	field labels
$fieldLabelsmp_ga = array();
$pageTitlesmp_ga = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmp_ga["English"] = array();
}

/*
//	search fields
$tdatamp_ga[".searchFields"] = array();

// all search fields
$tdatamp_ga[".allSearchFields"] = array();

// good like search fields
$tdatamp_ga[".googleLikeFields"] = array();
*/

/*
$tdatamp_ga[".dashElements"] = array();

*/
$tdatamp_ga[".shortTableName"] = "mp_ga";
$tdatamp_ga[".entityType"] = 4;




$tdatamp_ga[".hasEvents"] = false;


$tdatamp_ga[".tableType"] = "dashboard";


										
$tdatamp_ga[".addPageEvents"] = false;

$tdatamp_ga[".isUseAjaxSuggest"] = true;

$tables_data["mp_ga"]=&$tdatamp_ga;
$field_labels["mp_ga"] = &$fieldLabelsmp_ga;
$page_titles["mp_ga"] = &$pageTitlesmp_ga;

?>