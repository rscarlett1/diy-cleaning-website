<?php 

	$this->layout('master', [
		'title'=>'Your account',
		'desc'=>'Change your contact deails'
	]);

?>

<main>


<article>
	<div class="row container">
    	<div class="col-xs-12 image-align-center" id="">
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
	</div>
</div>	
</article>

<article>
  <div class="row container">
    <div class="col-xs-12" id="kitchen-posts">
    	
    	<form action="index.php?page=account" method="post" name="new-recipe" id="recipe-post" enctype="multipart/form-data">

    		<h1>Upload Your Own DIY Cleaning Recipes</h1>
    		<div>
    			<label for="title">Title: </label>
    			<input type="text" name="recipe-title" id="kitch-title">
    		</div>
    	
			<div>
				<label for"desc">Description</label>
				<textarea name="recipe-desc" cols"5" rows="10"></textarea>
			</div>

			<div>
				<label for"desc">Method</label>
				<textarea name="recipe-methods" cols"80" rows="10"></textarea>
			</div>


			<div>
    			<input type="file" name="recipe-image" id="kitc-image">
			</div>

			

			<input type="submit" name="submit-recipe" value="Submit">

    	</form>
    </div>	
</div>
</article>
