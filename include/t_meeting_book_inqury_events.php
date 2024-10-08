<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_t_meeting_book_inqury  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;

		$this->events["AfterAdd"]=true;

		$this->events["ProcessValuesAdd"]=true;



	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$message, $inline, $pageObject)
{

		$type_participant = $values['t_meeting_participant_type'];
$room = $values['t_meeting_roomid'];
$start_time = $values['t_meeting_from_date'];
$end_time = $values['t_meeting_to_date'];
$rs = DB::Query("SELECT * FROM m_meeting_room WHERE id = " . $room);
$roomData = $rs->fetchAssoc();
$values['meet_approve'] = 1;  

if ($room == 1) {
    $values['meet_approve'] = 0;  
}

if ($roomData) {
    $roomName = '';
    if ($room == 2) {
        $roomName = "Edelweiss 1";
    } elseif ($room == 3) {
        $roomName = "Edelweiss 2";
    } elseif ($room == 4) {
        $roomName = "Edelweiss 1 & 2";
    }

    if (($type_participant == 1 && !$roomData['internal']) || ($type_participant == 2 && !$roomData['external'])) {
        $message = "The selected room ($roomName) does not support the participant type.";
        return false;
    }

    $rs = DB::Query("SELECT * FROM t_meeting_book WHERE t_meeting_roomid = " . $room . " AND (t_meeting_from_date < '" . $end_time . "' AND t_meeting_to_date > '" . $start_time . "')");
    $existingMeeting = $rs->fetchAssoc();

    if ($existingMeeting) {
        $message = "The selected room ($roomName) is already booked for the specified time range.";
        return false;
    }

    if (strtotime($end_time) <= strtotime($start_time)) {
        $message = "The end time must be after the start time.";
        return false;
    }

    if ($room == 2 || $room == 3) {
        $rs = DB::Query("SELECT * FROM t_meeting_book WHERE t_meeting_roomid = 4 AND (t_meeting_from_date < '" . $end_time . "' AND t_meeting_to_date > '" . $start_time . "')");
        $conflictMeeting = $rs->fetchAssoc();

        if ($conflictMeeting) {
            $message = "Room Edelweiss 1 & 2 is already booked at this time. You cannot book Room " . $roomName . ".";
            return false;
        }
    } elseif ($room == 4) {
        $rs = DB::Query("SELECT * FROM t_meeting_book WHERE t_meeting_roomid IN (2, 3) AND (t_meeting_from_date < '" . $end_time . "' AND t_meeting_to_date > '" . $start_time . "')");
        $conflictMeeting = $rs->fetchAssoc();

        if ($conflictMeeting) {
            $message = "Edelweiss 1 or 2 is already booked at this time. You cannot book Room " . $roomName . ".";
            return false;
        }
    }
} else {
    $message = "The selected room is invalid.";
    return false;
}

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
$roomId = $values['t_meeting_roomid'];
$meet = $values['meet_approve'];  
$roomName = '';

switch ($roomId) {
    case 6:
        $roomName = 'Lavender';
        break;
    case 2:
        $roomName = 'Edelweiss 1';
        break;
    case 3:
        $roomName = 'Edelweiss 2';
        break;
    case 4:
        $roomName = 'Edelweiss 1 & 2';
        break;
    case 7:
        $roomName = 'Lotus';
        break;
    case 5:
        $roomName = 'Lily';
        break;
    case 1:
        $roomName = 'Wijaya Kusuma';
        break;
    default:
        $roomName = 'Unknown Room';
        break;
}

if ($meet == 1) {
    $message = "You have a meeting invitation from " . $values["t_meeting_user"];
    $title = "[T-Meeting] " . $disposisi . " Meeting Notification " . $values["t_meeting_desc"];
    $icon = "fa-envelope";
    $url = "t_meeting_book_view.php?editid1=" . $values['t_meeting_id'];
    $expire = 1440;
    $newWindow = false;
    $from = "no-reply@talisman.co.id";
    $subject = "[T-Meeting] Notification";

    $participants = explode(',', $values["user_participant_list"]);

    foreach ($participants as $participant) {
        $participant = trim($participant);

        $permissions = str_replace('@talisman.co.id', '', $participant);
        addNotification($message, $title, $icon, $url, $expire, $permissions, $newWindow);

        $email = $participant;
        $msg = "
        Anda diundang untuk menghadiri pertemuan \n
        Oleh            : " . $values['t_meeting_user'] . "\n
        Perihal         : " . $values['t_meeting_desc'] . "\n
        Jam Mulai       : " . $values['t_meeting_from_date'] . "\n
        Jam Selesai     : " . $values['t_meeting_to_date'] . "\n
        Ruangan         : " . $roomName . "\n
        Jumlah Peserta  : " . $values['t_meeting_total_participant'] . "\n
        Peserta         : " . $values['user_participant_list'] . "\n
        \n
        Catatan: Dimohon untuk menginformasikan kepada resepsionis jika anda telah selesai menggunakan ruang meeting tersebut.\n
        \n
        Terima kasih,\n
        \n
        no-reply@talisman.co.id
        ";

        $ret = runner_mail(array('to' => $email, 'cc' => $cc, 'subject' => $subject, 'body' => $msg, 'from' => $from));
        if (!$ret["mailed"]) {
            echo $ret["message"];
        }
    }
} elseif ($meet == 0) {
    $message = "You have Notification to approval booking Room Wijaya Kusuma from " . $values["t_meeting_user"];
    $title = "[T-Meeting] " . $disposisi . " Meeting Notification " . $values["t_meeting_desc"];
    $icon = "fa-envelope";
    $url = "t_meeting_book_view1_list.php";
    $expire = 1440;
    $newWindow = false;
    $from = "no-reply@talisman.co.id";
    $subject = "[T-Meeting] Notification";
    
    // Noti annie
    $permissions = "ichwaldi.dios";
    addNotification($message, $title, $icon, $url, $expire, $permissions, $newWindow);
    // email annie
    $email = "ichwaldi.dios@talisman.co.id";
    $msg = "
    Anda memiliki permintaan persetujuan untuk memesan ruang Wijaya Kusuma \n
    Pemohon         : " . $values['t_meeting_user'] . "\n
    Perihal         : " . $values['t_meeting_desc'] . "\n
    Waktu Mulai     : " . $values['t_meeting_from_date'] . "\n
    Waktu Selesai   : " . $values['t_meeting_to_date'] . "\n
    Ruangan         : " . $roomName . "\n
    Jumlah Peserta  : " . $values['t_meeting_total_participant'] . "\n
    Daftar Peserta  : " . $values['user_participant_list'] . "\n
    \n
    Catatan: Mohon informasikan kepada resepsionis apabila Anda telah selesai menggunakan ruang meeting tersebut.\n
    \n
    Terima kasih atas perhatian dan kerjasamanya.\n
    \n
    no-reply@talisman.co.id
    ";

    $ret = runner_mail(array('to' => $email, 'cc' => $cc, 'subject' => $subject, 'body' => $msg, 'from' => $from));
    if (!$ret["mailed"]) {
        echo $ret["message"];
    }
}

;
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Process record values
function ProcessValuesAdd(&$values, $pageObject)
{

		




$tz = 'Asia/Jakarta';

$strdt=$_GET['datestart'];
$frdt = new DateTime($strdt, new DateTimeZone($tz));
$strdt2 = $frdt->format('Y-m-d G:i:s');

$frdt = date( "Y-m-d H:i:s", strtotime($strdt2)) ;
$frtime = date( "H:i:s", strtotime($strdt2)) ;

$values['t_meeting_from_date'] = $frdt;
$values['t_meeting_to_date'] = $frtime;

$enddt=$_GET['dateend'];
$todt = new DateTime($enddt, new DateTimeZone($tz));
$enddt2 = $todt->format('Y-m-d G:i:s');

$todt = date( "Y-m-d H:i:s", strtotime($enddt2)) ;
$totime = date( "H:i:s", strtotime($enddt2)) ;

$values['t_meeting_to_date'] = $todt;
$values['to_time'] = $totime;



;
} // function ProcessValuesAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>