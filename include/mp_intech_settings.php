<?php
require_once(getabspath("classes/cipherer.php"));



$tdatamp_intech = array();
$tdatamp_intech[".ShortName"] = "mp_intech";

$tdatamp_intech[".pagesByType"] = my_json_decode( "{\"dashboard\":[\"dashboard\"]}" );
$tdatamp_intech[".originalPagesByType"] = $tdatamp_intech[".pagesByType"];
$tdatamp_intech[".pages"] = types2pages( my_json_decode( "{\"dashboard\":[\"dashboard\"]}" ) );
$tdatamp_intech[".originalPages"] = $tdatamp_intech[".pages"];
$tdatamp_intech[".defaultPages"] = my_json_decode( "{\"dashboard\":\"dashboard\"}" );
$tdatamp_intech[".originalDefaultPages"] = $tdatamp_intech[".defaultPages"];


//	field labels
$fieldLabelsmp_intech = array();
$pageTitlesmp_intech = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmp_intech["English"] = array();
}

/*
//	search fields
$tdatamp_intech[".searchFields"] = array();

// all search fields
$tdatamp_intech[".allSearchFields"] = array();

// good like search fields
$tdatamp_intech[".googleLikeFields"] = array();
*/

/*
$tdatamp_intech[".dashElements"] = array();

*/
$tdatamp_intech[".shortTableName"] = "mp_intech";
$tdatamp_intech[".entityType"] = 4;




$tdatamp_intech[".hasEvents"] = false;


$tdatamp_intech[".tableType"] = "dashboard";


										
$tdatamp_intech[".addPageEvents"] = false;

$tdatamp_intech[".isUseAjaxSuggest"] = true;

$tables_data["mp_intech"]=&$tdatamp_intech;
$field_labels["mp_intech"] = &$fieldLabelsmp_intech;
$page_titles["mp_intech"] = &$pageTitlesmp_intech;

?>