<?php 

    $this->layout ('master', [
        'title'=>'Edit comment page',
        'desc'=>'Edit your comments on this page'
    ]); 
?>


	<form class="form-group" action="<?= $_SERVER['REQUEST_URI'] ?>" method="post">
	
		<h1>Edit your comment</h1>
		<label for="comment">Comment: </label>
		<textarea name="comment" id="comment" cols="30" rows="10"><?= $comment ?></textarea>
		
		<?= isset($commentError) ? $commentError : '' ?>

		<input type="submit" name="edit-comment" value="Submit your changes">
	</form>	
