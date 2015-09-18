<?php 
$conn_string = "host=ec2-54-204-25-54.compute-1.amazonaws.com ";
$conn_string .= "port=5432 dbname=d3j0nm9qghk5i6 user=etbyqbciasiion password= 2VoBZqhhBM1drFQtYCfltP434T";
$dbconn = pg_connect($conn_string);
$query = 'SELECT max(userid) FROM public.user';
$rs = pg_query($dbconn, $query) or die("Cannot execute query: $query\n");

while ($row = pg_fetch_row($rs)) $input_userid = $row[0];
echo $row[0];

?>

<!DOCTYPE html>
<!-- xxxxxxxxx -->
 <html lang="en" class="no-js"> 
    <head>
        <meta charset="UTF-8" />
       
        <title>Sign Up Form</title>

        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="home.php">
                    <strong>&laquo; Back to homepage </strong>
                </a>
                <span class="right">
                   <a href=" http://www.rakuten.co.jp/">
                        <strong>Go to Rakuten</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1>Start Now to Enjoy Your <span>Japan</span></h1>
				<nav class="codrops-demos">
					<span>Experience a new Japan you have never seen before by clicking <strong>"Join Us"</strong></span>

				</nav>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="register.php" autocomplete="on" method="post"> 
                                <h1>Sign up</h1> 
                                <p> 
                                    <label for="usermail" class="umail" data-icon="u" > Email address </label>
                                    <input id="usermail" name="usermail" required="required" type="text" placeholder="mymail@mail.com"/>
                                </p>
								
								<p> 
                                    <label for="username" class="uname" data-icon="u" > Your username </label>
                                    <input id="username" name="username" required="required" type="text" placeholder="myusername"/>
                                </p>
								
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="Enter a password longer than 8 characters" /> 
                                </p>
								
								<p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Confirm password </label>
                                    <input id="password" name="passwordconf" required="required" type="password" placeholder="Please confirm your password" /> 
                                </p>
								
								<p> 
                                    <label for="Age" class="Age" data-icon="u"> Your age </label>
                                    <input id="Age" name="Age" required="required" type="Age" placeholder="" /> 
                                </p>


<p>
<label for='Gender'>Gender</label>
<select id='Gender' name='gender'>
<optgroup>
<option value='Male'>Male</option>
<option value='Female'>Female</option>
</optgroup>
</select>


<label for='Nationality'>Nationality</label>
<select id='Nationality' name='nationality'>
<optgroup label='Asia'>
<option value='China'>China</option>
<option value='Indoneisa'>Indonesia</option>
<option value='Korea'>Korea</option>
<option value='India'>India</option>
</optgroup>

<optgroup label='Europe'>
<option value='France'>France</option>
<option value='Germany'>Germany</option>
</optgroup>

<optgroup label='North America'>
<option value='USA'>USA</option>
<option value='Canada'>Canada</option>
</optgroup>
</select>
</p>

                      <p class="to_register button"> 
                                    <input type="submit" value="Join us" /> 
								</p>
                                <p class="change_link"> 
									<? 
										if (isset($_GET['ref'])) $invitors = $_GET['ref'];
										else $invitors = 1;
										$query2 = "SELECT username FROM public.user WHERE userid = " . $invitors . ";"; 
										$rs2 = pg_query($dbconn, $query2) or die("Cannot execute query: $query\n");
										while ($row2 = pg_fetch_row($rs2)) echo 'YOU GET INVITE BY ' . $row2[0];
									?>
									Already a member ?
									<a href="#tologin" class="to_register"> Go and log in </a>
								</p>
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
		
		<?php
			
		
			$input_userid += 1;
			$input_user = $_POST['username'];
			$input_password = $_POST['password'];
			$input_national = $_POST['nationality'];
			
			if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['nationality']))
			{
				$query = "INSERT INTO public.user(userid, username, birthdate, password, national)" ;
				$query .= "VALUES(" . $input_userid . ", '" . $input_user . "', CURRENT_DATE, '" . $input_password . "', '" . $input_national . "')";
				//print_r($query);
				pg_query($dbconn, $query);
			}
			
		?>
		
    </body>

</html>