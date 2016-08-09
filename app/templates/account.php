<?php 

	$this->layout('master', [
		'title'=>'Your account',
		'desc'=>'Change your contact deails'
	]);

?>

<main>

<?= $this->insert('nav') ?>

<h1>Account Details</h1>

<form action="index.php?page=account" method="post">
	 <div class="row container">
    		<div class="col-xs-12 image-align-center" id="">	
	
				<h2>Update your contact details</h2>

				<label for="">First Name: </label>
				<input type="text" name="first-name" value="<?= isset($_POST['update-contact']) ? $_POST['first-name'] : '' ?>">                                

				<?= isset($firstNameMessage) ? $firstNameMessage : '' ?>

			<label for="">Last Name: </label>
			<input type="text" name="last-name" value="<?= isset($_POST['update-contact']) ? $_POST['last-name'] : '' ?>">

			
			<?= isset($lastNameMessage) ? $lastNameMessage : '' ?>

			<input type="submit" class="button" name="update-contact" value="Update your name">
		</div>
	</div>	
</form>


