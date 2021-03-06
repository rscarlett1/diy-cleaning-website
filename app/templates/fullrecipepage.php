<?php 

    $this->layout ('master', [
        'title'=>'Recipe page',
        'desc'=>'A recipe how to make the cleaner'
    ]); 


    
?>


<main>
<?php var_dump($fullrecipepage) ?>

<div class="container">
  <div class="row">
      <!-- foreach Loop -->
      <?php foreach($fullrecipepage as $fullrecipepage): ?>
          <div class=" col-xs-12 col-sm-12 col-md-12">
            <div class="thumbnail">

            <h1 class="comments-padding" id="full-recipe-heading"><?= htmlentities($fullrecipepage['title']) ?> </h1>
            <p class="comments-padding"><?= htmlentities($fullrecipepage['description']) ?></p>
            <p class="comments-padding"><?= htmlentities($fullrecipepage['method']) ?></p>

            <img img class="img-responsive" src="img/uploads/recipes/<?= $fullrecipepage['image'] ?>" alt="...">
      
            <div class="caption">
              <ul>
                <li><strong>Posted By: </strong><?= htmlentities($fullrecipepage['first_name'].' '.$fullrecipepage['last_name']) ?></li>
                <?php

                  if( isset($_SESSION['user_id']) ) {

                    if( $_SESSION['user_id'] == $fullrecipepage['user_id'] ){
                      // You own post!
                    ?>
            <li>
              <a href="index.php?page=edit-post&id=<?= $_GET['recipe_id'] ?>">Edit</a>
            </li>

            <li>
              <button class="delete-post">Delete</button></a>
              
                <div class="delete-post-options">
                  <a href= "<?= $_SERVER['REQUEST_URI'] ?>&delete">Yes</a> / <button>No</button>
                </div>

            </li>
                    <?php
                  }

              }

            ?>
          </ul>
            </div>
        </div>
      </div>
  </div> 
      <?php endforeach; ?>
  </div>

 <?php var_dump($allComments) ?>

<section>
    <div class="container">
      <div class="row">
         <div class=" col-xs-12 col-sm-12 col-md-12"> 
            <form class="form-group" action="index.php?page=fullrecipepage&recipe_id=<?= $_GET['recipe_id'] ?>" method="post">
            
              <h2 id="full-recipe-heading">Comments: (<?= count($allComments) ?>)</h2>
              
                <div class="form-group comments-padding">
                  <label for="comment">Please write a comment: </label>
                  <textarea class="form-control" name="comment" id="comment" cols="30" rows="5"></textarea>
                </div>

                <?= isset($commentMessage) ? $commentNameMessage : '' ?>
              
                <div>
                  <input class="btn btn-default" type="submit" name="new-comment" value="Submit">
                </div>

                <?= isset($recipeCommentMessage) ? $recipeCommentMessage : '' ?>
            </form>




            <?php foreach($allComments as $comment): ?>

            <article> 
                <p><?= htmlentities($comment['comment']) ?> </p>
                <small>Written by: <?= htmlentities($comment['author']) ?></small>

                <?php
                // Is the visitor logged in?
                if( isset($_SESSION['user_id']) ) {

                // Does this user own the comment?
                if( $_SESSION['user_id'] == $comment['user_id'] || $_SESSION['privilege'] == 'admin' ){
                  
                  ?>
                    <li>
                      <a href="index.php?page=edit-comments&id=<?= $_GET['recipe_id'] ?>">Edit</a>
                    </li>

                    <li>
                      <button class="delete-post">Delete</button></a>
                      
                        <div class="delete-post-options">
                          <a href= "<?= $_SERVER['REQUEST_URI'] ?>&deleteComment&commentid=<?=$comment['id']?>">Yes</a> / <button>No</button>
                        </div>

                    </li>
                    <?php

                  }

                }

              ?>

            </article>
                
                <?php endforeach ?>
            </div>
        </div> 
    </div>
</section>

<script>
  

  // Wait for all the stuff to be ready
  $(document).ready(function(){


    //When the user clicks on the delete button
    $('.delete-post, .delete-post-options button').click(function(){

     // Toggle the visibility of the controls
     $('.delete-post-options').toggle();

    });

  });

</script>




