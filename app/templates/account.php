<?php 

	$this->layout('master', [
		'title'=>'Your account',
		'desc'=>'Change your contact deails'
	]);

?>

<main>


<article>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 image-align-center" id="">
				<h1 id="heading-acc">Account Profile</h1>

					<form action="index.php?page=account" id="account-details" method="post">
		 				<div class="row container">
			    			<div class="col-xs-12 image-align-center" >	
				
								<h2>Update your contact details</h2>

								<div class="form-group">
									<label for="">First Name: </label>
									<input class="form-control" type="text" name="first-name" value="<?= isset($_POST['update-contact']) ? $_POST['first-name'] : '' ?>">
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
								<?= isset($postMessage) ? $postMessage : '' ?>
							</div>
						</div>	
					</form>
			</div>
		</div>
	</div>	
</article>

<article>
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12" id="kitchen-posts">
	    	
	    		<form action="index.php?page=account" method="post" name="new-recipe" id="recipe-post" enctype="multipart/form-data">

	    		<h2 class="upload-header">Upload Your Own DIY Cleaning Recipes</h2>
			    		<div>
			    			<label for="title">Title: </label>
			    			<input type="text" name="recipe-title" id="recipe-title">
			    			<?= isset($titleMessage) ? $titleMessage : '' ?>

			    		</div>
			    	
						<div>
							<label for"desc">Description</label>
							<textarea name="recipe-desc" cols"5" rows="10"></textarea>
							<?= isset($descMessage) ? $descMessage : '' ?>
						</div>

						<div>
							<label for"method">Method</label>
							<textarea name="recipe-methods" cols"80" rows="10"></textarea>
							<?= isset($methodMessage) ? $methodMessage : '' ?>
						</div>


						<div id="image-recipe-upload">
							<label for="image">Image</label>
			    			<input type="file" name="recipe-image" id="image">
						</div>

						
						<div>
						<input type="submit" name="submit-recipe" value="Submit">
						</div>

	    		</form>
	    	</div>	
		</div>
	</div>
</article>
