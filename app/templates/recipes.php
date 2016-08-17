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

      <img img class="img-responsive" src="img/uploads/highres/<?= $post['image'] ?>" alt="...">


      <a href="index.php?page=fullrecipepage&recipesid=<?= $['recipe_id'] ?>"><img img class="img-responsive" src="<?= $item['image'] ?>" alt="..."></a>
      

      <div class="caption">

        <h2> <?= $recipe['title'] ?></h2>
        <p><?= $recipe['description'] ?></p>
        <p>Posted By:<?= $recipe['first_name'].' '.$recipe['last_name'] ?></p>

       <a href="index.php?page=fullrecipepage&recipe_id=<?= $recipe['recipe_id'] ?>" class="btn btn-default" role="button">Read More</a></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div> 
<!-- endforeach -->
</div> 
 

































