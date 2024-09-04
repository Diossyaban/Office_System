<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_m_disposition  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeMoveNextList"]=true;

		$this->events["BeforeProcessRowList"]=true;


		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		$lastUser = $data['t_disposition_to'];

if ($lastUser) {
    $pageObject->showItem("add", $recordId);
} else {
    $pageObject->hideItem("add", $recordId);
}

;
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: Before record processed
function BeforeProcessRowList(&$data, $pageObject)
{

		$userName = $_SESSION["userId"];
$pageObject->hideItem("delete");
$lastUser = $data['t_disposition_to'];

if ($lastUser) {
	$pageObject->showItem("add");
}else{
	$pageObject->hideItem("add");
}
// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;
} // function BeforeProcessRowList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y-m-d G:i:s');
$values['t_disposition_from_date'] = $timestamp;
$values['t_disposition_to_date'] = $timestamp;

$values['t_disposition_type'] = 6;




return true;
;
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$ticketId = $values['t_disposition_no'];
$disposisi = $values['t_disposition_status'];
$tglInput = $values['t_disposition_from_date'];
$idDispo = $values['t_disposition_id'];
$dispo = $values['t_disposition_from'];
$bookingid = $values['t_booking_id'];
$statusText = '';

//tag html tabel di php dalam format echo php 
$rs = DB::Query("SELECT * FROM t_booking WHERE t_booking_id = '$ticketId'");
$data = $rs->fetchAssoc();
if($data) {
    $t_booking_destination = $data['t_booking_destination'];
    $t_booking_remarks = $data['t_booking_remarks'];
    $t_booking_user = $data['t_booking_user'];

} else {
}
switch ($disposisi) {
    case 41:
        $statusText = 'Draft';
        break;
    case 42:
        $statusText = 'Follow Up';
        break;
    case 43:
        $statusText = 'Approve';
        break;
    case 44:
        $statusText = 'Decline';
        break;
    case 45:
        $statusText = 'Cancelled';
        break;
    default:
        $statusText = 'Unknown Status';
        break;
}

$message = "You receive a disposition from " . $dispo;
$title = "[T-Booking] Booking Notification";
$icon = "fa-envelope";
$url = "t_booking_view.php?editid1=" . $ticketId;
$expire = 1440;
$newWindow = false;

if ($disposisi == 43) {
		
    $sql = "UPDATE t_booking SET flag = 1 WHERE t_booking_id = " . $ticketId;
    CustomQuery($sql);
		
    $permissions = $values["t_disposition_to"] . ",selvia.apriyani";
    addNotification($message, $title, $icon, $url, $expire, $permissions, $newWindow);
    $from = "no-reply@talisman.co.id";
    $msgTo = "Dear " . $values["t_disposition_to"] . ",\n\n" .
             "You have received a disposition from Booking Application with the following details:\n\n" .
             "From              : " . $t_booking_user . "\n" .    
             "Disposition Status: " . $statusText . "\n" .
             "Disposition Date  : " . $tglInput . "\n\n" .
             "Disposition Description: " . $values['t_disposition_desc'] . "\n\n" .
             "Thank you,\n";
    $subjectTo = "[T-Booking] Disposition Notification";
    $emailTo = $values['t_disposition_to'] . "@talisman.co.id";
    $retTo = runner_mail(array('to' => $emailTo, 'subject' => $subjectTo, 'body' => $msgTo, 'from' => $from));
    if (!$retTo["mailed"]) {
        echo $retTo["message"];
    }
$msgGA = "Dear Selvia Apriyani,\n\n" .
         "You have a car reservation that has been approved with the following details:\n\n" .
         "From              : " . $dispo . "\n" .    
         "Status: " . $statusText . "\n" .
         "Disposition Date  : " . $tglInput . "\n\n" .
         "Address  : " . $t_booking_destination . "\n" .
         "Remarks  : " . $t_booking_remarks . "\n\n" .
         "Remarks  : " . $t_booking_remarks . "\n\n" .
         "Thank you,\n";
    $subjectGA = "[T-Booking] Booking Notification";
    $emailGA = "ichwaldi.dios@talisman.co.id";
    $retGA = runner_mail(array('to' => $emailGA, 'subject' => $subjectGA, 'body' => $msgGA, 'from' => $from));
    if (!$retGA["mailed"]) {
        echo $retGA["message"];
    }
} else {
    $permissions = $values["t_disposition_to"];
    addNotification($message, $title, $icon, $url, $expire, $permissions, $newWindow);

    $from = "no-reply@talisman.co.id";
    $msg = "Dear " . $values["t_disposition_to"] . ",\n\n" .
           "You have received a disposition from Booking Application with the following details:\n\n" .
           "From              : " . $dispo . "\n" .    
           "Disposition Status: " . $statusText . "\n" .
           "Disposition Date  : " . $tglInput . "\n\n" .
           "Disposition Description: " . $values['t_disposition_desc'] . "\n\n" .
           "Thank you,\n";
    $subject = "[T-Booking] Disposition Notification";
    $email = $values['t_disposition_to'] . "@talisman.co.id";
    $ret = runner_mail(array('to' => $email, 'subject' => $subject, 'body' => $msg, 'from' => $from));
    if (!$ret["mailed"]) {
        echo $ret["message"];
    }
}

;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		// Get Local Date Time
$tz = 'Asia/Jakarta';
$dt = new DateTime("now", new DateTimeZone($tz));
$timestamp = $dt->format('Y-m-d G:i:s');
$data = array();
$data["t_disposition_from"] = $userData = Security::getUserName();
DB::Insert("m_disposition", $data );
$_SESSION["t_booking_id"] = $values['t_disposition_no'];

// Place event code here.
// Use "Add Action" button to add code snippets.
;
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>