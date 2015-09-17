<?php 

$conn_string = "host=ec2-54-204-25-54.compute-1.amazonaws.com ";
$conn_string .= "port=5432 dbname=d3j0nm9qghk5i6 user=etbyqbciasiion password= 2VoBZqhhBM1drFQtYCfltP434T";
$dbconn = pg_connect($conn_string);

print_r($dbconn);


$query = 'SELECT username, "password", birthdate, address, phone FROM public.user LIMIT 5;'; 

$rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");

?>


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
	<?php while ($row = pg_fetch_row($rs)): ?>
	<table>
		<tr>
			<td>Username</td>
			<td><br/><input type="text" name="User" size="25" value="<?php echo $row[0]; ?>" /><br/><br/></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><br/><input type="password" name="UserPass" size="25" value="<?php echo $row[1]; ?>" /><br/><br/></td>
		</tr>
		<tr>
		<tr>
			<td>FullName</td>
			<td><br/><input type="text" name="FullName" size="25" value="<?php echo $row[0] . ' ' . $row[0]; ?>" /><br/><br/></td>
		</tr>
		<tr>
			<td>Birth Day</td>
			<td><br/><input type="text" name="Birthdate" size="25" value="<?php echo $row[2]; ?>" /><br/><br/></td>
		</tr>
		<tr>
			<td>Address</td>
			<td><br/><input type="text" name="Address" size="25" value="<?php echo $row[3]; ?>" /><br/><br/></td>
		</tr>
		<tr>
			<td>Phone</td>
			<td><br/><input type="text" name="Phone" size="25" value="<?php echo $row[4]; ?>" /><br/><br/></td>
		</tr>
		
		<tr>
			<td></td>
			<td><br/><input type="submit" value="Login" /><br/><br/></td>
		</tr>
	</table><br/>
	<?php endwhile; ?>
</form>

<div id="fb-root"></div>

</body>