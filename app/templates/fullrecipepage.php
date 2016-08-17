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


      <a href="index.php?page=post&postid=<?= $item['user_id'] ?>"><img img class="img-responsive" src="<?= $item['image'] ?>" alt="..."></a>
      
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

  <h1>Comments: (7)</h1>

  <form action="index.php?page="></form>



</section> 