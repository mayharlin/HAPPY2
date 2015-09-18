<!DOCTYPE html>
<html>

<head>
<title>Let's plan together!</title>
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="invite.css" media="screen" />
<title><?php echo 'LP Invite Page' ?></title>
<script src="jquery.min.js"></script>
<script src="jquery-simple-pagination-plugin.js"></script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

</head>

<body>
<center>

<h1>Invite your friends!</h1>

<div class="information">
<div class="container">

<form action="sendInv.php" method="post">
<table>
  <tr>
    <td>Email Address</td>
    <td><input id="Email" name="Recipient" type="text" style="width:200px"></td>
  </tr>


 <tr>
    <td>Theme</td>
    <td><input id="Theme" name="Title" type="text" style="width:200px"></td>
  </tr>


 <tr>
    <td>Comment</td>
	<td><textarea id="Comment" rows="4" cols="50" name="Message" style="width:300px;height:100px"></textarea></td>
  </tr>

	<tr>
			<td>Social Media</td>
			<td>
				<div class="fb-send" data-href="https://ancient-badlands-4414.herokuapp.com/register.php"></div>&nbsp;&nbsp;&nbsp;
				<div class="fb-share-button" data-href="https://ancient-badlands-4414.herokuapp.com/register.php" data-layout="button_count"></div><br/>
			</td>
	</tr>
  
</table>




<label for='Plans'>Plans</label>
<select id='Plans' name='Plan'>
	
<optgroup label='Sep.'>
    <option value='PLAN001'>Plan 1</option>
    <option value='PLAN001'>Plan 2</option>
    <option value='PLAN001'>Plan 3</option>
    <option value='PLAN001'>Plan 4</option>
</optgroup>

<optgroup label='Oct.'>
    <option value='PLAN002'>Plan 1</option>
    <option value='PLAN002'>Plan 2</option>
</optgroup>

<optgroup label='Dec.'>
    <option value='PLAN003'>Plan 1</option>
    <option value='PLAN003'>Plan 2</option>
</optgroup>

</select>


</div>
</div> 



<p>
<button type='submit'>send</button>
</p>

<p>
<button type='submit'>Back to Homepage</button>
</p>
</form>

<div id="fb-root"></div>

</body>
</center>
</html>
