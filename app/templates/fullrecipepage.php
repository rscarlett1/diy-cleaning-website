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

        <h1><?= $fullrecipepage['title'] ?> </h1>
        <p><?= $fullrecipepage['description'] ?></p>
        <p><?= $fullrecipepage['method'] ?></p>


      <img img class="img-responsive" src="<?= $item['image'] ?>" alt="...">
      
      <div class="caption">

        

        <p>Posted By:<?= $fullrecipepage['first_name'].' '.$fullrecipepage['last_name'] ?></p>
        
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div> 
<!-- endforeach -->
</div>

<section> 

  <h2>Comments: (7)</h2>

  h1>Comments: (<?= count($allComments) ?>)</h1>

  <form action="index.php?page=fullrecipepage&recipe_id=<?= $_GET['recipe_id'] ?>" method="post">
    
    <label for="comment">Please write a comment: </label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>

    <?= isset($commentMessage) ? $commentNameMessage : '' ?>

    <input type="submit" name="new-comment" value="Submit">

    <?= isset($recipeCommentMessage) ? $recipeCommentMessage : '' ?>

  </form>

  <?php foreach($allComments as $comment): ?>

    <article> 
        <p><?= $comment['comment'] ?> </p>
        <small>Written by: <?= $comment['author'] ?></small>

    </article>


  <?php endforeach ?>

</section> 