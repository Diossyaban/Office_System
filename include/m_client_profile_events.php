<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_m_client_profile  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeShowAdd"]=true;

		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before display
function BeforeShowAdd(&$xt, &$templatefile, $pageObject)
{

		

// Place event code here.
// Use "Add Action" button to add code snippets.
$pageObject->hideItem("integrated_edit_field43");
$pageObject->hideItem("integrated_edit_field44");
$pageObject->hideItem("integrated_edit_field45");
;
} // function BeforeShowAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		

function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

$userData = Security::getUserName();

// Get Local Date Time
	$tz = 'Asia/Jakarta';
	$dt = new DateTime("now", new DateTimeZone($tz));
	$timestamp = $dt->format('Y-m-d h:i:s');
	$tahun = $dt->format("y");
	$bulan = $dt->format("m");
	$tanggal = $dt->format("d");

$values["add_user"] = $userData;
$values["add_date"] = $timestamp;
$values["client_no"] = generateRandomString();

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		CustomQuery("call sp_m_client_profile_new_flow(".$values["id"].")");

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>