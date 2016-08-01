<!DOCTYPE html>

<html lang="en-nz">

<head>
		<meta charset="utf8">

		<title><?= $title ?></title>

		<meta name="description" content="<?= $desc ?>">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" href="css/styles.css">

		<link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">

		<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<div class="container-fluid">
	<nav>
			<div class="row" id="logo">

			
				<div class= "col-md-4" >
					<a href="home.html"><img src="img/logo.png" height="125" width="500"></a>
				</div>

				<div class="col-md-4">
					<div id="follow-us">
					<p><strong>Follow Us On:</strong></p>	
					</div>

					<div id="icon">
						<i class="fa fa-facebook-official" aria-hidden="true"></i>
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<i class="fa fa-pinterest-square" aria-hidden="true"></i>
						<i class="fa fa-google-plus-square" aria-hidden="true"></i>
					</div>

					<form id="search" class="navbar-form navbar-left" role="search">
				        <div class="form-group">
				          <input type="text" class="form-control" placeholder="Search">
				        </div>
				    </form>
				</div>

				<div class="col-md-4">
				
					<div>
						<p><a href "" data-toggle="modal" data-target=".signup-modal">
						<img id="triangle" src="img/trianglepng.png" width="175" height="200" alt=""></a></p>
					</div>

					<div>
						<button id="member" type="button" class="btn btn-primary" data-toggle="modal" data-target=".login-modal">Membership Login</button>
					</div>
				</div>
			</div>

		<div class="row container">
			<div class="navbar">
		    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      
			      <ul class="nav navbar-nav">
			        <li class="diy-menu"><a href="home.html">Home<span class="sr-only">(current)</span></a></li>
			        <li class="diy-menu"><a href="about-us.html">About Us</a></li>
			        <!-- <li class="active diy-menu"><a href="">What Would You Like To Clean</a></li> -->
					
					      <li class="dropdown nav navbar-nav">
				          <a href="wwylrc.html" class="dropdown-toggle diy-menu" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">What Would You Like To Clean<span class="caret"></span></a>
				          <ul class="dropdown-menu">
				            <li class="diy-menu"><a href="wwyltc.html">Kitchen</a></li>
				            <li class="diy-menu"><a href="wwyltc.html">Laundry</a></li>
				            <li class="diy-menu"><a href="wwyltc.html">Bathroom and Toilet</a></li>
				            <li class="diy-menu"><a href="wwyltc.html">Garage</a></li>
				          </ul>
				        </li>

				      <li class="diy-menu"><a href="contact-us.html">Contact Us</a></li>
			      </ul>
			    </div>   	      
			</div>
		</div>
	</nav>



</main>

<?php echo $this->section('content') ?>

<footer>	

	<div class="row fluid-container" id="footer-background">
			
		<div class= "col-md-4 container">
			<div class="why-change" id="address">
						<address>
							  <strong>DIY Home Cleaning</strong><br>
							  129 California Drive<br>
							 Totara Park<br>
							  <abbr title="Phone">Ph:</abbr> (04) 456-7890
						</address>

						<address>
							  <strong>Email:</strong><br>
							  <a href="mailto:#">diycleaning@gmail.com</a>
						</address>
			</div>
		</div>

	<div class="col-md-4 container">
		<div id="navigate">
						<ul class="list-unstyled">
			  			<li><strong>Navigate Our Website</strong></li>
			  			<br>
			  			<li><a href="wwyltc.html">What Would You Like To Clean</a></li>
			  			<li><a href="about-us.html">About Us</a></li>
			  			<li><a href="contact-us.html">Contact Us</a></li>
			  			<li><a href="#">Archived Posts</a></li>
			  			<li><a href="#">Terms and Conditions</a></li>
						</ul>	
		</div>
	</div>

		<div class= "col-md-4 container">
			<div id="subscribe">
						<form>
							<div>
								<strong>Subscribe To Our Newsletter</strong><br><br>
							</div>

							<div class="form-group">
							    <label for="exampleInputEmail1">Email address:</label>
							    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
							</div>

							 <div class="form-group">
							    <label for="exampleInputPassword1">First Name:</label>
							    <input type="first-name" class="form-control" id="exampleInputPassword1" placeholder="First Name">
							</div>

							  <div class="form-group">
							    <label for="exampleInputPassword1">Last Name:</label>
							    <input type="last-name" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
							</div>
							  
							  <button type="submit" >Subscribe</button>
						</form>
			</div>
		</div>
	</div>
</footer>
		
<!-- Large modal -->


<div class="modal fade bs-example-modal-lg login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    	<form id="drop-box" action="login.php?page=login" method="post">
    		<h2>Log In</h2>

		  <div class="enter-details">
		    <label><b>Username</b></label>
		    <input type="text" placeholder="Enter Username" name="uname" required>

		    <label><b>Password</b></label>
		    <input type="password" placeholder="Enter Password" name="psw" required>

		    <button type="submit">Login</button>
		    <input type="checkbox" checked="checked"> Remember me
		  </div>

		  <div class="enter-details">
		    <button type="button" class="cancelbtn">Cancel</button>
		    <span class="psw">Forgot <a href="#">password?</a></span>
		  </div>
		</form>
      
    </div>
  </div>
</div>

<div class="modal fade bs-example-modal-lg signup-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

     <form id="sign-up-padding" action="sign-up.php?page=signup" method="post">

     	<h2>Sign Up</h2>
     	<div class="form-group">
		    <label for="first-name">First Name</label>
		    <input type="text" class="form-control" id="first name" placeholder="First Name">
		  </div>

		  <div class="form-group">
		    <label for="first-name">Last Name</label>
		    <input type="text" class="form-control" id="first name" placeholder="First Name">
		  </div>


		  <div class="form-group">
		    <label for="exampleInputEmail1"> Your Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  
		  <button type="submit" class="btn btn-default">Submit</button>
	</form>
    </div>
  </div>
</div>








<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('.carousel').carousel();
</script>
</body>
</html>