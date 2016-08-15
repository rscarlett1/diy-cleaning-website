<?php 

    $this->layout ('master', [
        'title'=>'Recipes page',
        'desc'=>'A list of various cleaning recipes for each area of your house'
    ]); 


    
?>


<?php var_dump($recipes); ?>



<div class="container">
 <h1>How to clean <u><?=$_GET['type'] ?></u></h1>
 <div class="row">
  <!-- foreach Loop -->
  <?php foreach($recipes as $recipe): ?>
  <div class=" col-xs-12 col-sm-6 col-md-4">
    <div class="thumbnail">
      <img img class="img-responsive" src="img/post-images/post1.jpg" alt="...">
      <div class="caption">
        <h2> <?= $recipe['title'] ?></h2>
        <p><?= $recipes['description'] ?></p>
       <a href="#" class="btn btn-default" role="button">Read More</a></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div> 
<!-- endforeach -->
</div> 
 

































