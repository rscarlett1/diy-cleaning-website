<!DOCTYPE html>

<?php foreach($allKitchenRecipes as $kitchenrecipes) ?>
<article class="kitchen-recipes">
  <div class="row container">
    <div class="col-xs-4 image-align-center" id="kitchen-recipes">
      <img src="<?= $kitchenrecipes['image']?>" alt="">
      <h1 class="image-align-center"><?= $kitchenrecipes['title']?></h1>

      <p><?= $kitchenrecipes['description']?></p>

      <a href="#"><button>Click Here</button></a>
    </div>  
  </div>
</article>
<?php endforeach ?>




