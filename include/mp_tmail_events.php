<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_mp_tmail  extends eventsBase
{
	function __construct()
	{
	// fill list of events

	}

//	handlers


		// dashboatd snippets function
	function event_mp_tmail_snippet( &$header, &$icon )
	{
		require "myCode/timeline.htm";;
	}
		// dashboatd snippets function
	function event_mp_tmail_snippet3( &$header, &$icon )
	{
		$header = "Total Out Mail";
$userData = Security::getUserName();
$rs2 = DB::Query("call sp_total_documents('".$userData."')");
$data2 = $rs2->fetchAssoc();
echo '<span style="font-size: 26px;font-weight:bold;"> ' .number_format($data2["total"]).  '</span>';
;
	}
		// dashboatd snippets function
	function event_mp_tmail_snippet4( &$header, &$icon )
	{
		$header = "Total In Mail";
$userData = Security::getUserName();
$rs2 = DB::Query("call sp_total_inmail_documents('".$userData."')");
$data2 = $rs2->fetchAssoc();
echo '<span style="font-size: 26px;font-weight:bold;"> ' .number_format($data2["total"]).  '</span>';
;
	}
		// dashboatd snippets function
	function event_mp_tmail_snippet5( &$header, &$icon )
	{
		$header = "Address Books";
$userData = Security::getUserName();
$rs2 = DB::Query("call sp_total_documents('".$userData."')");
$data2 = $rs2->fetchAssoc();
echo '<span style="font-size: 26px;font-weight:bold;"> ' .number_format($data2["total"]).  '</span>';
;
	}
		// dashboatd snippets function
	function event_mp_tmail_snippet6( &$header, &$icon )
	{
		$header = "Your header here";
echo "Your text here";;
	}
		// dashboatd snippets function
	function event_mp_tmail_snippet9( &$header, &$icon )
	{
		$header = "Quick Shortcuts";
echo "<a class='btn btn-default btn-lg btn-block' href='t_delivery_address_list.php' role='button'>Address Books</a><a role='button' class='btn btn-default btn-lg btn-block' href='t_in_mail_list.php'>In Mail List</a><a role='button' href='t_delivery_add.php' class='btn btn-default btn-lg btn-block'>Out Mail Registration</a><button type='button' class='btn btn-default btn-lg btn-block'>Reporting</button>";


;
	}
		// dashboard marker icon function
	function event_t_delivery_feedback_view_map_markericon( &$icon )
	{
		$icon = "images/menuicons/motorcycle_15303325.png";;
	}
		// dashboard marker icon function
	function event_t_delivery_feedback_view_map_locationicon( &$icon )
	{
		$icon = "images/menuicons/motorcycle_15303325.png";;
	}

}
?>