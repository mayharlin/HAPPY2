
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
<form action="home.php" method="post">
	<table>
		<tr>
			<td>Username</td>
			<td><br/><input type="text" name="User" size="25" value="" /><br/><br/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><br/><input type="password" name="UserPass" size="25" value="" /><br/><br/></td>
		</tr>
		<tr>
		<tr>
			<td>FullName</td>
			<td><br/><input type="text" name="FullName" size="25" value="" /><br/><br/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><br/><input type="text" name="UserPass" size="25" value="" /><br/><br/></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><br/><input type="text" name="UserPass" size="25" value="" /><br/><br/></td>
		</tr>
		<tr>
			<td></td>
			<td><br/><input type="submit" value="Login" /><br/><br/></td>
		</tr>
	</table><br/>
</form>

<div id="fb-root"></div>

</body>