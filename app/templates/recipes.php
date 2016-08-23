<?php 

    $this->layout ('master', [
        'title'=>'Recipes page',
        'desc'=>'A list of various cleaning recipes for each area of your house'
    ]); 


    
?>


<?php var_dump($recipes); ?>



<div class="container">


 

 <h1><a href="index.php?page=recipes&recipesid=<?= $recipe['recipe_id'] ?>">How to clean <u><?=$_GET['type'] ?></u><a></h1>

 <div class="row">
  <!-- foreach Loop -->
  <?php foreach($recipes as $recipe): ?>
  <div class=" col-xs-12 col-sm-6 col-md-4">
    <div class="thumbnail">

      <a href="index.php?page=fullrecipepage&recipesid=<?= $recipe['recipe_id'] ?>"><img src="img/uploads/recipes/<?= $recipe['image'] ?>" class="img-responsive" src="<?= $recipe['image'] ?>" alt="..."></a>
      

      <div class="caption">

        <h2> <?= htmlentities($recipe['title']) ?></h2>
        <p><?= htmlentities($recipe['description']) ?></p>
        <p>Posted By:<?= htmlentities($recipe['first_name'].' '.$recipe['last_name']) ?></p>

       <a href="index.php?page=fullrecipepage&recipe_id=<?= $recipe['recipe_id'] ?>" class="btn btn-default" role="button">Read More</a></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div> 
<!-- endforeach -->
</div> 
 

































