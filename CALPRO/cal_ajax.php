<?php
//require_once("include/dbcommon.php"); // DataBase PHPRunner
require_once(realpath(dirname(__FILE__) . '/../include/dbcommon.php'));

// Require our Event class and datetime utilities
require_once(realpath(dirname(__FILE__) . '/../fullcalendar/php/utils.php'));

// Short-circuit if the client did not give us a date range.
if (!isset($_GET['start']) || !isset($_GET['end'])) {
    die("Please provide a date range.");
}

// Parse the start/end parameters.
$range_start = parseDateTime($_GET['start']);
$range_end = parseDateTime($_GET['end']);

// Parse the timeZone parameter if it is present.
$time_zone = null;
if (isset($_GET['timeZone'])) {
    $time_zone = new DateTimeZone($_GET['timeZone']);
}
$start = substr($_GET['start'], 0, 10) . ' 00:00:00'; 
$end   = substr($_GET['end'], 0, 10) . ' 00:00:00';

switch ($_SESSION['option_calendar']) {
    case 'carbook':
        $sql = "SELECT 
            a.t_booking_id id, 
            a.t_booking_user name, 
            a.m_vehicle_id vehicle_id, 
            CONCAT(a.m_vehicle_driver, ' - ', b.m_vehicle_name) resource, 
            a.t_booking_from_date start_date, 
            a.t_booking_to_date end_date, 
            'green' color
        FROM 
            t_booking a
        INNER JOIN 
            m_vehicle b ON b.m_vehicle_id = a.m_vehicle_id
        WHERE 
            a.t_booking_from_date >= '$start' 
            AND a.t_booking_to_date < '$end'";

        break;


    case 'meeting':
    $sql = "SELECT 
                a.t_meeting_id id, 
                a.t_meeting_user name, 
                a.t_meeting_roomid room_id, 
                b.m_meeting_room_name resource, 
                a.t_meeting_desc description, 
                a.t_meeting_from_date start_date, 
                a.t_meeting_to_date end_date, 
                a.meet_approve approve,            
                'green' color
            FROM 
                t_meeting_book a
            INNER JOIN 
                m_meeting_room b ON b.id = a.t_meeting_roomid
            WHERE 
                a.t_meeting_from_date >= '$start' 
                AND a.t_meeting_to_date < '$end'
                AND a.meet_approve = 1";
    break;

                          

}

$resql = db_query($sql, $conn);

// Accumulate an output array of event data arrays.
$output_arrays = array();

while ($data = db_fetch_array($resql)) {
    $output_arrays[] = array(
        'id' => $data['id'],
        'title' => $data['name'] . ' (' . $data['resource'] . ')', // Adding the resource name to the title
        'description' => $data['description'],
        'start' => $data['start_date'],
        'end' => $data['end_date'],
        'vehicle' => isset($data['vehicle_id']) ? $data['vehicle_id'] : '',
        'room' => $data['resource'],
        'color' => $data['color']
    );
}

// Send JSON to the client.
echo json_encode($output_arrays);
?>
