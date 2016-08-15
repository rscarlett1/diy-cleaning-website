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

        <div class="col-xs-12 col-md-6 col-lg-4">
            <img class="img-responsive" src="img/post-images/post1.jpg" >
        </div>
        <!-- endforeach -->
    </div>

 </div>   
 

































