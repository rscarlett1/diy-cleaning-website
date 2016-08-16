<?php 

    $this->layout ('master', [
        'title'=>'Recipes page',
        'desc'=>'A list of various cleaning recipes for each area of your house'
    ]); 


    
?>


<?php var_dump($recipes); ?>



<div class="container">

 <h1>How to clean</h1>
 <div class="row">
  <!-- foreach Loop -->
  <?php foreach($recipes as $recipe): ?>
  <div class=" col-xs-12 col-sm-12 col-md-12">
    <div class="thumbnail">

      <a href="index.php?page=post&postid=<?= $item['user_id'] ?>"><img img class="img-responsive" src="<?= $item['image'] ?>" alt="..."></a>
      
      <div class="caption">

        <h2> <?= $recipe['title'] ?></h2>
        <p><?= $recipe['description'] ?></p>
        <p><?= $recipe['method'] ?></p>

        <p>Posted By:<?= $recipe['first_name'].' '.$recipe['last_name'] ?></p>
        
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div> 
<!-- endforeach -->
</div> 