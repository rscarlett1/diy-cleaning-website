<?php 

    $this->layout ('master', [
        'title'=>'Edit comment page',
        'desc'=>'Edit your comments on this page'
    ]); 
?>


	<form class="form-group" action="index.php?page=edit-comments&id=<?= $_GET['id']?>" method="post">
	
		<h1>Edit your comment</h1>
		<label for="comment">Comment: </label>
		<textarea name="comment" id="comment" cols="30" rows="10"><?= $comment ?></textarea>

		<input type="submit" name="edit-comment" value="Submit your changes">
	</form>	