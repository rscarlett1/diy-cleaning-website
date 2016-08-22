<!-- When you are Logged Out -->
<?php if(!isset($_SESSION['user_id'])): ?>
<div>
	<p><a href "" data-toggle="modal" data-target=".signup-modal">
	<img id="triangle" src="img/trianglepng.png" width="175" height="200" alt=""></a></p>
</div>

<div>
	<a href="index.php?page=login"><button id="member" type="button" class="btn btn-primary" data-toggle="modal" data-target=".login-modal">Membership Login</button></a>
</div>

<ul>
	<li>
		<a href="index.php?page=home=">Home</a>
	</li>


	<li>
		<a href="index.php?page=about-us">About Us</a>
	</li>

	<li>
		<a href="index.php?page=what-to-clean">What Would You Like To Clean</a>
	</li>

	<li>
		<a href="index.php?page=contact-us">Contact Us</a>
	</li>
</ul>





<!-- When you are Logged in  -->
<?php else: ?>


	<a href="index.php?page=logout"><button id="member" type="button" class="btn btn-primary" >Logout</button></a>
	
	<a href="index.php?page=account"><button id="member" type="button" class="btn btn-primary">My Account</button></a>

<?php endif; ?>