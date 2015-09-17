<?php 

$conn_string = "host=ec2-54-204-25-54.compute-1.amazonaws.com ";
$conn_string .= "port=5432 dbname=d3j0nm9qghk5i6 user=etbyqbciasiion password= 2VoBZqhhBM1drFQtYCfltP434T";
$dbconn = pg_connect($conn_string);

print_r($dbconn);


$query = 'SELECT username, birthdate, national, email, "password", phone FROM public.user LIMIT 1;'; 

$rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");

?>

<!DOCTYPE html>
<html>

<head>
<title>Profile</title>
<link rel="stylesheet" href="css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>

<body>
<center>
<form action="#" method="post">

<h1>Porfile</h1>

<div class="information">
<div class="container">

<?php while ($row = pg_fetch_row($rs)): ?>
<table>
  <tr>
    <td>Name</td>
    <td><input id="Name" name="Name" type="text" style="width:200px" value="<?php $row[0]; ?>"></td>
  </tr>
	
  <tr>
    <td>Birthday</td>
    <td><input id="Birthday" name="Birthday" type="text" style="width:200px" value="<?php $row[1]; ?>"></td>
  </tr>
	
  <tr>
    <td>Nationality</td>
    <td><input id="nationality" name="Nationality" type="text" style="width:200px" value="<?php $row[2]; ?>"></td>
  </tr>
		
  <tr>
    <td>Email Address</td>
    <td><input id="Email" name="Email" type="text" style="width:200px" value="<?php $row[0]; ?>@rakuten.co.jp"></td>
  </tr>

	<tr>
    <td>Password</td>
    <td><input id="Password" name="Password" type="text" style="width:200px" value="<?php $row[4]; ?>"></td>
  </tr>

  <tr>
    <td>Phone</td>
    <td><input id="Theme" name="Phone" type="text" style="width:200px" value="<?php $row[5]; ?>"></td>
  </tr>

</table>
<?php endwhile; ?>

</div>
</div> 

<button type='submit' style = 'margin-right: 20px' >Modify</button>
<button type='submit'>Save</button>


</form>




<div class="information">
<div class="container">
<div class = "row">

<div class = "col-md-6">								
 <div class="thumbnail">
	<h1>Current Plans</h1>
  <table>
    <tr>
    <td>Plan 1</td>
    <td>><a href="http://www.rakuten.co.jp">xxx</a></td>
  </tr>
	
  <tr>
    <td>Plan 2</td>
    <td>><a href="http://www.rakuten.co.jp">yyy</a></td>
  </tr>
	
  <tr>
    <td>PLan 3</td>
    <td>><a href="http://www.rakuten.co.jp">zzz</a></td>
  </tr>
  </table>
 </div>
</div>
                
<div class = "col-md-6">
 <div class="thumbnail">
	<h1>Past Plans</h1>
  <table>
  <tr>
    <td>Plan 1</td>
    <td>><a href="http://www.rakuten.co.jp">xxx</a></td>
  </tr>
	
  <tr>
    <td>Plan 2</td>
    <td>><a href="http://www.rakuten.co.jp">yyy</a></td>
  </tr>
	
  <tr>
    <td>PLan 3</td>
    <td>><a href="http://www.rakuten.co.jp">zzz</a></td>
  </tr>

  </table>                      
 </div>
</div>
 </div>
</div>
</div>


<div class="information">
<div class="container">
<h1>Box of Benefits</h1>
  <table>
    <tr>
    <td>Benefit 1</td>
    <td>><a href="http://www.rakuten.co.jp">xxx</a></td>
  </tr>
	
  <tr>
    <td>Benefit 2</td>
    <td>><a href="http://www.rakuten.co.jp">yyy</a></td>
  </tr>
	
  <tr>
    <td>Benefit 3</td>
    <td>><a href="http://www.rakuten.co.jp">zzz</a></td>
  </tr>
  </table>
</div>
</div>

</body>
</center>
</html>
