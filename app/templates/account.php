<?php 

	$this->layout('master', [
		'title'=>'Your account',
		'desc'=>'Change your contact deails'
	]);

?>

<main>



<h1 id="heading-acc">Account Profile</h1>

<form action="index.php?page=account" id="account-details" method="post">
	 <div class="row container">
    		<div class="col-xs-12 image-align-center" >	
	
			<h2>Update your contact details</h2>

			<div>
			<label for="">First Name: </label>
			<input type="text" name="first-name" value="<?= isset($_POST['update-contact']) ? $_POST['first-name'] : '' ?>">
			</div>
			<br>                            

				<?= isset($firstNameMessage) ? $firstNameMessage : '' ?>

			<div>	
			<label for="">Last Name: </label>
			<input type="text" name="last-name" value="<?= isset($_POST['update-contact']) ? $_POST['last-name'] : '' ?>">
			</div>
			<br>

			
			<?= isset($lastNameMessage) ? $lastNameMessage : '' ?>

			<input type="submit" id="profile-button"class="button" name="update-contact" value="Update your details">
		</div>
	</div>	
</form>


