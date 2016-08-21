<?php 

    $this->layout ('master', [
        'title'=>'Recipe page',
        'desc'=>'A recipe how to make the cleaner'
    ]); 


    
?>


<main>


<div class="container">
  <div class="row">
      <!-- foreach Loop -->
      <?php foreach($fullrecipepage as $fullrecipepage): ?>
          <div class=" col-xs-12 col-sm-12 col-md-12">
            <div class="thumbnail">

            <h1><?= htmlentities($fullrecipepage['title']) ?> </h1>
            <p><?= htmlentities($fullrecipepage['description']) ?></p>
            <p><?= htmlentities($fullrecipepage['method']) ?></p>

            <img img class="img-responsive" src="<?= $fullrecipepage['image'] ?>" alt="...">
      
            <div class="caption">
                <p>Posted By:<?= htmlentities($fullrecipepage['first_name'].' '.$fullrecipepage['last_name']) ?></p>
            </div>
        </div>
      </div>
  </div> 
      <?php endforeach; ?>
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>
 <?php var_dump($allComments) ?>

<section>
    <div class="container">
      <div class="row">
           <div class=" col-xs-12 col-sm-12 col-md-12"> 
              

                <form class="form-group" action="index.php?page=fullrecipepage&recipe_id=<?= $_GET['recipe_id'] ?>" method="post">
                <h2>Comments: (<?= count($allComments) ?>)</h2>
                  
                  <div class="form-group">
                    <label for="comment">Please write a comment: </label>
                    <textarea name="comment" id="comment" cols="30" rows="5"></textarea>
                  </div>

                    <?= isset($commentMessage) ? $commentNameMessage : '' ?>

                    <input type="submit" name="new-comment" value="Submit">

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
                        if( $_SESSION['user_id'] == $comment['user_id'] ){
                          // Yes! This user owns the comment!
                          echo 'Delete';
                          echo '<a href="index.php?page=edit-comments&id='.$comment['id'].'">Edit</a>';
                        }

                      }

                    ?>
                </article>
                
                <?php endforeach ?>
            </div>
        </div> 
    </div>
</section> 

