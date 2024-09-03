<?php
global $conn;

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
 * ----------Currently unused ------------------
$_SESSION['nav_start'];
$_SESSION['nav_end']
 * ----------------------------------------------
 */

// $site       = $_SESSION['config'][array_search('URL', array_column($_SESSION['config'], 'name'))][value].'/';
// $ajax_mes   = $_SESSION['config'][array_search('MEETINGS_AJAX', array_column($_SESSION['config'], 'name'))][value].'?';

$now = substr(now(), 0, 10);
//$uris = $_SERVER['REQUEST_URI'];
//$uris = str_replace("list", "view", $uri)."?editid1=";

//var_dump($uris);
//print_r($uri);

switch ($_SESSION['option_calendar']) {
    case 'carbook':
        $uris = 't_booking_view.php?editid1=';
        $addUrl = 't_booking_add.php';
        break;
    case 'meeting':
        $uris = 't_meeting_book_view.php?editid1=';
        $addUrl = 't_meeting_book_add.php';
        break;
}

$str1 = <<<EOD
 <style>
    html, body {
      margin: 0;
      padding: 0;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    }
    #calendar {
      max-width: 900px;
      margin: 40px auto;
    }
  </style>

<meta charset='utf-8' />
<link href='fullcalendar/packages/core/main.css' rel='stylesheet' />
<link href='fullcalendar/packages/daygrid/main.css' rel='stylesheet' />
<link href='fullcalendar/packages/timegrid/main.css' rel='stylesheet' />
<link href='fullcalendar/packages/list/main.css' rel='stylesheet' />
<script src='fullcalendar/packages/core/main.js'></script>
<script src='fullcalendar/packages/interaction/main.js'></script>
<script src='fullcalendar/packages/daygrid/main.js'></script>
<script src='fullcalendar/packages/timegrid/main.js'></script>
<script src='fullcalendar/packages/list/main.js'></script>
<script src='fullcalendar/packages/core/locales-all.min.js'></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: ['interaction', 'dayGrid', 'timeGrid', 'list'],
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
            },
            // defaultView: 'dayGridMonth',
            //defaultDate: '$now',
            timeZone: 'local', // the default 'local' (unnecessary to specify)
            //locale: initialLocaleCode,
            businessHours: {
                // days of week. an array of zero-based day of week integers (0=Sunday)
                daysOfWeek: [1, 2, 3, 4, 5], // Monday - Friday
                startTime: '08:00', // a start time (08am in this example)
                endTime: '18:00', // an end time (6pm in this example)
            },
            selectable: true,
            selectHelper: true,
            select: function(info) {
                var datex = info.startStr;
                var url = "$addUrl?datestart=" + info.startStr.substring(0, 19) + "&dateend=" + info.endStr.substring(0, 19);
                var header = '<h2 data-itemtype="view_header" data-itemid="view_header" data-pageid="10">Add New</h2>';
                var footer = '<a href="#" onclick="window.win.close();return false;">Close window</a>';
                window.popup = Runner.displayPopup({
                    url: url,
                    width: 1000,  // Adjusted width
                    height: 650,  // Adjusted height
                    header: header,
                    footer: footer
                });
            },
            weekNumbers: true,
            weekNumbersWithinDays: true,
            weekNumberCalculation: 'ISO',
            editable: true,
            navLinks: true, // can click day/week names to navigate views
            eventLimit: true, // allow "more" link when too many events
            eventClick: function(info) {
                var meeting = info.event.id;
                var url = '$uris' + meeting;
                var header = '<h2 data-itemtype="view_header" data-itemid="view_header" data-pageid="10">' + 'Meeting: ' + meeting + '</h2>';
                window.popup = Runner.displayPopup({
                    url: url,
                    width: 1000,  // Adjusted width
                    height: 650,  // Adjusted height
                    header: header
                });
            },
            events: {
                url: 'CALPRO/cal_ajax.php'
            }
        });
        calendar.render();
    });
</script>
<div id='calendar'></div>

EOD;

echo $str1;
?>
