<?php 

    $this->layout ('master', [
        'title'=>'DIY Home Cleaning Sections to Clean Details',
        'desc'=>'Find the suitable diy recipe for the area you would like to clean'
    ]) 

?>

<?php foreach($allKitchenRecipes as $kitchenrecipes) ?>
<article class="kitchen-recipes">
  <div class="row container">
    <div class="col-xs-4 image-align-center" id="kitchen-recipes">
    	
    	<form action="index.php?page=recipes" method="post" enctype="multipart/form-data">

    		<h1>Kitchen DIY Cleaning Recipes</h1>
    		<div>
    			<label for="title">Title: </label>
    			<input type="text" name="kitc-title" id="kitch-title">
    		</div>
    	
			<div>
				<label for"desc">Description</label>
				<textarea name="kitchen-desc" cols"30"  rows="10"></textarea>
			</div>

			<div>
				<label for="title">Title: </label>
    			<input type="file" name="kitc-image" id="kitc-image">
				
			</div>

			<input type="submit" name="submit-kit-details" value="Submit">

    	</form>
      
      




