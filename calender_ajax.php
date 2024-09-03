<?php
require_once("include/dbcommon.php"); // DataBase PHPRunner

/* Session variable
$_SESSION['project_id']
$_SESSION['project_name']
$_SESSION['option_calendar'] valor:  project | user | company | departament | meeting
$_SESSION['language']
$_SESSION['user_id']
$_SESSION['login'] 
$_SESSION['email'] 
$_SESSION['username']
$_SESSION['company_id']
$_SESSION['dept_id']
 * ----------------------------------------------
 */

// $site       = $_SESSION['config'][array_search('URL', array_column($_SESSION['config'], 'name'))][value].'/';
// $ajax_mes   = $_SESSION['config'][array_search('MEETINGS_AJAX', array_column($_SESSION['config'], 'name'))][value].'?';

// Require our Event class and datetime utilities
require 'fullcalendar/php/utils.php';

// Short-circuit if the client did not give us a date range.
if (!isset($_GET['start']) || !isset($_GET['end'])) {
  die("Please provide a date range.");
}

// Parse the start/end parameters.
// These are assumed to be ISO8601 strings with no time nor timeZone, like "2013-12-29".
// Since no timeZone will be present, they will parsed as UTC.
$range_start = parseDateTime($_GET['start']);
$range_end = parseDateTime($_GET['end']);

// Parse the timeZone parameter if it is present.
$time_zone = null;
if (isset($_GET['timeZone'])) {
  $time_zone = new DateTimeZone($_GET['timeZone']);
}
$start = substr($_GET['start'],0,10).' 00:00:00'; 
$end   = substr($_GET['end']  ,0,10).' 00:00:00';


switch ($_SESSION['option_calendar']) {
    case 'project':
        $sql = "SELECT idmeetings id , m.name, username resource, m.start_date, m.end_date, p.color_identifier color
                FROM meetings m
                join users on ( owner = user_id )
                join projects p on (projects_project_id = project_id)
                where projects_project_id =" . $_SESSION['project_id'] . " and  m.end_date >= '$start' and m.start_date < '$end'";
        break;
    case 'user':
        $sql = "SELECT distinct idmeetings id , m.name, username resource, m.start_date, m.end_date, p.color_identifier color
		FROM meetings m
		join projects p on (m.projects_project_id = p.project_id)
		join users_meetings um on (um.meetings_idmeetings = m.idmeetings)
		join users u on ( um.users_user_id = u.user_id )
		where u.user_id =" . $_SESSION['user_id'] . " and  m.end_date >= '$start' and m.start_date < '$end'";
        break;
    case 'company':
        $sql = "SELECT idmeetings id , m.name, username resource, m.start_date, m.end_date, p.color_identifier color
		FROM meetings m
		join users u on ( owner = user_id )
		join projects p on (m.projects_project_id = p.project_id)
		join companies c on (p.companies_company_id = c.company_id)
		where c.company_id =" . $_SESSION['company_id'] . " and  m.end_date >= '$start' and m.start_date < '$end'";
        break;
    case 'departament':
        $sql = "SELECT idmeetings id , m.name, username resource, m.start_date, m.end_date, p.color_identifier color
		FROM meetings m
		join users u on ( owner = user_id )
		join projects p on (m.projects_project_id = p.project_id)
		join departments d on (p.departments_dept_id = d.dept_id)
		where d.dept_id =" . $_SESSION['departament_id'] . " and  m.end_date >= '$start' and m.start_date < '$end'";
        break;
    case 'meeting':
        $sql = "SELECT idmeetings id , m.name, u.username resource, m.start_date, m.end_date, u.color_identifier color
		FROM meetings m
		join users_meetings um on (um.meetings_idmeetings = m.idmeetings)
		join users u on ( um.users_user_id = u.user_id )
		where idmeetings <>" . $_SESSION['meeting_id'] . " and  m.end_date >= '$start' and m.start_date < '$end'";
        break;
}
$resql = db_query($sql,$conn);
// Accumulate an output array of event data arrays.
$output_arrays = array();

while ($data = db_fetch_array($resql)){
$output_arrays[] = array(
    'id'=>$data['id'],
    'title'=>$data['name'],
    'resource'=>$data['resource'],
    'start'=>$data['start_date'],
    'end'=>$data['end_date'],
    'color'=>$data['color']);
    }


// Send JSON to the client.
// $str = json_encode($output_arrays);
echo json_encode($output_arrays);

?>