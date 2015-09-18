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
				var title = prompt('Event Title of Your Travel Plan:');
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
					start: '2015-08-31',
					end: '2015-09-02',
					overlap: false,
					rendering: 'background',
					color: '#ff9f89'
				},
				
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

<?php
$theme = "";
$place = "";
$startdate = "";
$enddate = "";
$budget = "";
$max_participants = "";
$placetovisit ="";
$thingstobuy ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   $theme = $_POST["theme"];
   $place = $_POST["place"];
   $startdate = $_POST["startdate"];
   $enddate = $_POST["enddate"];
   $budget = $_POST["budget"];
   $max_participants = $_POST["max_participants"];
   $placetovisit = $_POST["placetovisit"];
   $thingstobuy = $_POST["thingstobuy"];
}
?>

<table>
<td valign="top">
<br><br>
<?php
// define variables and set to empty values
$name = "xiao wang";
$email = "wang@gmail.com";
$gender = "male";
$nationality = "Japanese";
$birthday = "1993-03-03";

?>

<?php
echo "<h2>User Info:</h2>";
echo $name;
echo "<br><br>";
echo $email;
echo "<br><br>";
echo $nationality;
echo "<br><br>";
echo $birthday;
echo "<br><br>";
echo $gender;
echo "<br><br>";
?>


<form action="sendInv.php" method="post">

<h2>Invite your friends!</h2>

<div class="information">
<div class="container">

<form action="sendInv.php" method="post">

<input type="submit" name="invitefriends" value="Invite Your Friends!"> 


</form>

</td>


<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>

<td>
<div id='calendar'></div>
</td>
<td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>"> 

<h2>Plan Now to Enjoy Your Japan!</h2>


<div class="information">
<div class="container">


<table>

  <tr>
    <td>Travel Theme</td>
    <td><input name="theme" type="text"></td>
  </tr>

  <tr>
    <td>Destinations</td>
    <td><input name="place" type="text"></td>
  </tr>

<tr>
<td>Departure</td>
<td><select name='startdate' style='width:172px'>
<optgroup label='Undecided'>
<optgroup label='Sep'>
<option value='2015-09-17'>2015/09/17</option>
<option value='2015-09-18'>2015/09/18</option>
<option value='2015-09-19'>2015/09/19</option>
<option value='2015-09-20'>2015/09/20</option>
<option value='2015-09-21'>2015/09/21</option>
</optgroup></td>
</tr><br>

<tr>
<td>Return</td>
<td><select name='enddate' style='width:172px'>
<optgroup label='Undecided'>
<optgroup label='Sep'>
<option value='2015-09-18'>2015/09/18</option>
<option value='2015-09-19'>2015/09/19</option>
<option value='2015-09-20'>2015/09/20</option>
<option value='2015-09-21'>2015/09/21</option>
<option value='2015-09-17'>2015/09/22</option>
</optgroup></td>
</tr>

<!--
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
-->

<tr>
    <td>Budget</td>
    <td><input id="Budget" name="budget" type="text"></td>
</tr>

<tr>
    <td>Max Attendee</td>
    <td><input id="attendee" name="max_participants" type="text"></td>
</tr>
    

</table>
<br><br>
Place to Visit:
	<br>
    <textarea name="placetovisit" rows="5" type="textarea"></textarea>

	
	<br>
	<br>
  Things to Buy:
  <br>
    <textarea name="thingstobuy" rows="5" type="textarea" ></textarea>


</div>
</div> 



<p>
<input type="submit" name="submit" value="Finish My Plan !"> 
</p>
</form>

<br><br><br>

<?php
echo "<h2>Travel Plan:</h2>";
echo 'Travel Theme: '.$theme;
echo "<br><br>";
echo 'Destinations: '.$place;
echo "<br><br>";
echo 'Departure: '.$startdate;
echo "<br><br>";
echo 'Return: '.$enddate;
echo "<br><br>";
echo 'Budget: '.$budget;
echo "<br><br>";
echo 'Max Attendants: '.$max_participants;
echo "<br><br>";
echo 'Places to Visit: ';
echo "<br><br>";
echo $placetovisit;
echo "<br><br>";
echo 'Things to Buy:';
echo "<br><br>";
echo $thingstobuy;
echo "<br><br>";
?>

</td>


</table>


</body>
</html>