<!DOCTYPE html>
<html>

  <head>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/shift.css" rel="stylesheet">
		<link rel="stylesheet" href="http://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css">
    <link rel="stylesheet" href="home.css">  
  </head>

  <body>

		<!-- navigation -->
    <div class="nav">
        <div class="container">
            <ul class= "pull-right">
                  <li><a href="http://www.rakuten.co.jp">Sign Up</a></li>
                  <li><a href="login.php">Log In</a></li>
                  <li><a href="faq.php">FAQ</a></li> 
            </ul>
        </div>

	      <!-- Searching -->
		    <div class = "searching">
					  <div class = "container">
			          <form action="travel.php" method="post">
                      Searching: <input type="text" name="genre" keyword="fname" />
                      <input type="submit" value="Submit" />
                </form>
						</div>
		    </div>
    </div>

		<!-- Title/ Theme of page -->
    <div class="jumbotron">
        <div class="container">
					  <h1> Let's plan! </h1>
            <p>Enjoy your travel with friends in Japan! </p>
            <a href="">Learn More</a>
        </div>
    </div> 




    <!-- calendar and plans -->
		<div class ="calendar_plans">
        <div class = "container"> 
            <div class = "row">
              <div class = "col-md-10">								
                <div class="thumbnail">
									      <h1>Travel Calendar</h1>
                        <a href="http://www.rakuten.co.jp"></a>
												<img src="http://calendars.vertex42.com/images/perpetual-calendar-screenshot.gif" >
                    </div>    
                </div>
                
                <div class = "col-md-10">
                    <div class="thumbnail">
										    <h1>Travel Plans</h1>
                        <img src="http://goo.gl/0Kd7UO" >
                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="Ad">
	      <div class="container">
		        <div class = "row">
	              <div class= "col-md-4">
			              <h3>Travel service of Rakuten</h3>
		               	<p>Here we provide many kind of service for making your trip easier!</p>
			              <p><a href="#">See how to travel by using Rakuten</a></p>
	              </div>
		            <div class = "col-md-4">
			              <h3>Advertisement 1</h3>
			              <p>Renting out your unused space could pay your bills or fund your next vacation.</p>
			              <p><a href="#">Learn more about hosting</a></p>
		            </div>
		            <div class = "col-md-4">
			              <h3>Advertisement 2</h3>
			              <p>From Verified ID to our worldwide customer support team, we've got your back.</p>
			              <p><a href="#">Learn about trust at Airbnb</a></p>
		            </div>
	          </div>
	      </div>
		</div>

		
  </body>
</html>












