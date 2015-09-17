<?php

$conn_string = "host=ec2-54-204-25-54.compute-1.amazonaws.com ";
$conn_string .= "port=5432 dbname=d3j0nm9qghk5i6 user=etbyqbciasiion password= 2VoBZqhhBM1drFQtYCfltP434T";
$dbconn = pg_connect($conn_string);
$query = 'SELECT planname, place, startdate, enddate, budget, max_attendance, placetovisit, thingstobuy, FROM public.user where userid=2;';
$plans = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");


echo '<div class="plans" style="hidden">' . $plans . "</div>";
?>

<!DOCTYPE html>
<html>

<head>
<title>Calendar</title>
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">

<meta charset='utf-8' />
<link href='./css/fullcalendar.css' rel='stylesheet' />
<link href='./css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='./lib/moment.min.js'></script>
<script src='./lib/jquery.min.js'></script>
<script src='./fullcalendar.min.js'></script>
<script>

	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2015-09-18',
			selectable: true,
			selectHelper: true,
			select: function(start, end) {
				var title = prompt('Event Title:');
				var eventData;
				if (title) {
					eventData = {
						title: title,
						start: start,
						end: end
					};
					$('#calendar').fullCalendar('renderEvent', eventData, true); // stick? = true
				}
				$('#calendar').fullCalendar('unselect');
			},
			
			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},
			editable: true,
			businessHours: true, // display business hours
			eventLimit: true, // allow "more" link when too many events
			events: [
				{
					title: 'Busy: All Day',
					start: '2015-09-03'
				},
				{
					title: 'Travel To Kyoto',
					start: '2015-09-05',
					end: '2015-09-07'
				},
				{
					id: 999,
					title: 'Seminar',
					start: '2015-09-09T10:00:00'
				},
				{
					id: 999,
					title: 'Class',
					start: '2015-09-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2015-09-18',
					end: '2015-09-19'
				},
				{
					title: 'Meeting',
					start: '2015-09-22T10:30:00',
					end: '2015-09-22T12:30:00'
				},
				{
					title: 'Lunch With Yang',
					start: '2015-09-12T11:00:00'
				},
				{
					title: 'Dinner With Bo',
					start: '2015-09-26T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2015-09-12T19:00:00'
				},
				{
					title: 'Rakuten Sell',
					url: 'http://www.rakuten.co.jp/',
					start: '2015-09-28'
				},
				
				// red areas where no events can be dropped
				{
					start: '2015-09-29',
					end: '2015-10-04',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
			]
		});
		
	});

</script>
<style>

	body {
		margin: 40px 10px;
		padding: 0;
		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
		font-size: 14px;
	}

	#calendar {
		max-width: 1100px;
		margin: 0 auto;
	}

</style>
</head>



<body>

<table>



<td>
<div id='calendar'></div>
</td>

<td>

<form action="#" method="post">

<center>


<h2>Plan Now to Enjoy Your Japan!</h2>


<div class="information">
<div class="container">


<table>

  <tr>
    <td>Travel Theme</td>
    <td><input id="Theme" name="Theme" type="text"></td>
  </tr>

  <tr>
    <td>Destinations</td>
    <td><input id="Destination" name="Destination" type="text"></td>
  </tr>

<tr>
<td><label for='date'>Departure </label></td>
<td><select id='date' name='date' style='width:172px'>
<optgroup label='Undecided'>
<optgroup label='Sep'>
<option value='now'>2015/09/17</option>
<option value='p1'>2015/09/18</option>
<option value='p2'>2015/09/19</option>
<option value='p3'>2015/09/20</option>
<option value='p4'>2015/09/21</option>
</optgroup></td>
</tr><br>

<tr>
<td><label for='date'>Return </label></td>
<td><select id='date' name='date' style='width:172px'>
<optgroup label='Undecided'>
<optgroup label='Sep'>
<option value='now'>2015/09/17</option>
<option value='p1'>2015/09/18</option>
<option value='p2'>2015/09/19</option>
<option value='p3'>2015/09/20</option>
<option value='p3'>2015/09/21</option>
</optgroup></td>
</tr>


<tr>
<td>Transportation</td>
<td><select id='Transportation' name='Transportation' style='width:172px'>
<optgroup>
<option value='1'>By Air</option>
<option value='2'>By Ship</option>
<option value='3'>By Car</option>
<option value='4'>By Train</option>
<option value='5'>By Walk</option>
</optgroup></td>
  </tr>

<tr>
    <td>Budget</td>
    <td><input id="Budget" name="Budget" type="text"></td>
</tr>

<tr>
    <td>Max Attendee</td>
    <td><input id="attendee" name="attendee" type="text"></td>
</tr>


<tr>
<td><label for='Gender'>Gender </label></td>
<td><select id='Gender' name='Gender' style='width:172px'>
<optgroup>
<option value='1'>Male Only</option>
<option value='2'>Female Only</option>
<option value='3'>Both OK</option>
</optgroup></td>
</tr>


 <tr>
    <td>Description</td>
    <td><input id="description" name="description" type="textarea"></td>
  </tr>

</table>


</div>
</div> 

</form>

<p>
<button type='submit'>Finish My Plan !</button>
</p>



</center>


</td>


</table>


</body>
</html>