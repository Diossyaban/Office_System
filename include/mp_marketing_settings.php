<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamp_marketing = array();
$tdatamp_marketing[".ShortName"] = "mp_marketing";

$tdatamp_marketing[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatamp_marketing[".originalPagesByType"] = $tdatamp_marketing[".pagesByType"];
$tdatamp_marketing[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatamp_marketing[".originalPages"] = $tdatamp_marketing[".pages"];
$tdatamp_marketing[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatamp_marketing[".originalDefaultPages"] = $tdatamp_marketing[".defaultPages"];


//	field labels
$fieldLabelsmp_marketing = array();
$pageTitlesmp_marketing = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmp_marketing["English"] = array();
}

/*
//	search fields
$tdatamp_marketing[".searchFields"] = array();

// all search fields
$tdatamp_marketing[".allSearchFields"] = array();

// good like search fields
$tdatamp_marketing[".googleLikeFields"] = array();
*/

/*
$tdatamp_marketing[".dashElements"] = array();

*/
$tdatamp_marketing[".shortTableName"] = "mp_marketing";
$tdatamp_marketing[".entityType"] = 4;




$tdatamp_marketing[".hasEvents"] = false;


$tdatamp_marketing[".tableType"] = "dashboard";


										
$tdatamp_marketing[".addPageEvents"] = false;

$tdatamp_marketing[".isUseAjaxSuggest"] = true;

$tables_data["mp_marketing"]=&$tdatamp_marketing;
$field_labels["mp_marketing"] = &$fieldLabelsmp_marketing;
$page_titles["mp_marketing"] = &$pageTitlesmp_marketing;

?>