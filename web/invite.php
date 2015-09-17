
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel="stylesheet" href="css.css" media="screen" />
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
<h1><?php echo 'LP Invitation Page' ?></h1>
<form action="sendInv.php" method="post">
	<table>
		<tr>
			<td>Recipient Email</td>
			<td><br/><input type="text" name="Recipient" size="25" value="" /><br/><br/></td>
		</tr>
		<tr>
			<td>Plan</td>
			<td><select name="Plan">
			  <option value="0"><?php echo'&#60;Please Select&#62;' ?></option>
			  <option value="PLAN001">Kyoto Traditional Spots</option>
			  <option value="PLAN002">Hokkaido Hot Springs</option>
			  <option value="PLAN003">Okinawa Beach</option>
			</select><br/><br/></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="Title" size="25" value="" /><br/><br/></td>
		</tr>
		<tr>
			<td>Message</td>
			<td><textarea rows="4" cols="50" name="Message"></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><br/><input type="submit" value="Invite" /><br/><br/></td>
		</tr>
		<tr>
			<td>Social Media</td>
			<td>
				<div class="fb-send" data-href="http://hotel.travel.rakuten.co.jp/hinfo/?f_no=19756"></div>&nbsp;&nbsp;&nbsp;
				<div class="fb-share-button" data-href="http://hotel.travel.rakuten.co.jp/hinfo/?f_no=19756" data-layout="button_count"></div><br/>
			</td>
		</tr>
	</table><br/>
</form>

<div id="fb-root"></div>

</body>