<?php if(!isset($_SESSION['id'])): ?>
<div>
	<p><a href "" data-toggle="modal" data-target=".signup-modal">
	<img id="triangle" src="img/trianglepng.png" width="175" height="200" alt=""></a></p>
</div>

<div>
	<a href="index.php?page=login"><button id="member" type="button" class="btn btn-primary" data-toggle="modal" data-target=".login-modal">Membership Login</button></a>
</div>
<?php else: ?>

	<button id="member" type="button" class="btn btn-primary" href="index.php?=home">Logout</button>
	<button id="member" type="button" class="btn btn-primary" href="index.php?=account">My Account</button>

<!-- 	<ul>
		<li>
			<a href="index.php?page=account">Your Account</a>
		</li>
		<li>
			<a href="index.php?page=logout>">Logout</a>
		</li>
	</ul> -->
<?php endif; ?>