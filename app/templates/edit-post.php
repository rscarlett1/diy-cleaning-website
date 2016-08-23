<?php 

    $this->layout ('master', [
        'title'=>'Edit recipe post',
        'desc'=>'Edit the post page that you uploaded to the webpage'
    ]); 
?>
<? var_dump($post); ?>
article>
	<div class="container">
	  <div class="row">
	    <div class="col-xs-12" id="kitchen-posts">
	    	
	    		<form action="<?= $_SERVER['REQUEST_URL'] ?>" method="post" name="edit-post" id="edit-post" enctype="multipart/form-data"> 

	    		<h2 class="upload-header">Edit Your Recipe <?= htmlentities($post['title']) ?></h2>
		    		<div class="form-group">
		    			<label for="title">Title: </label>
		    			<input  class="form-control" type="text" name="title" id="title" value="<?= $post['title'] ?>">
		    			<?= isset($titleMessage) ? $titleMessage : '' ?>

		    		</div>
		    	
					<div class="form-group">
						<label for"desc">Description</label>
						<textarea  class="form-control" id="desc" name="desc" cols"5" rows="10"><?= $post['description'] ?></textarea>
						<?= isset($descMessage) ? $descMessage : '' ?>
					</div>

					<div class="form-group">
						<label for"method">Method</label>
						<textarea  class="form-control" name="recipe-methods" cols"80" rows="10"><?= $post['method'] ?></textarea>
						<?= isset($methodMessage) ? $methodMessage : '' ?>
					</div>

					


					<div class="form-group">
						<img src="img/uploads/recipes/<?= $post['image'] ?>" name="image" for="image">
						<input type="file" name="image">

		    			
		    			<?= isset($imageMessage) ? $imageMessage : '' ?>
					</div>

					
					<div class="form-group">
					<input class="btn btn-default" type="submit" name="edit-post" value="Submit">
					<?= isset($recipeUploadMessage) ? $recipeUploadMessage : '' ?>
					</div>
				</form>
	    	</div>	
		</div>
	</div>
</article>