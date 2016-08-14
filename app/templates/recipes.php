<?php 

    $this->layout ('master', [
        'title'=>'Recipes page',
        'desc'=>'A list of various cleaning recipes for each area of your house'
    ]) 

?>



    <div class="container">

        <div class="row">
            
            <div class="col-xs-6 col-md-4">
                <img src="img/post-images/post1.jpg" height="250" width="450">
            </div>
        </div>

     </div>   

     <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-4 post-background">

                <h2>Title</h2>
                <p>Description</p>
            </div>
        </div>
    <div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-4 post-background">
                
                <p>Method</p>
            </div>
        </div>
    <div>

    <div class="container">

        <div class="row">

            <div id="advertising" class="col-xs-6 col-md-4">
                <img src="img/advertising/green-works.jpeg" height="250" width="350" >
            </div>
        </div>
    </div> 

































<article class="kitchen-recipes">

    <div class="container">

        <div class="row">
            <div class="col-xs-4 image-align-center" id="kitchen-recipes">
    	
            	<form action="index.php?page=recipes" method="post" enctype="multipart/form-data">

            		<h1>Kitchen DIY Cleaning Recipes</h1>

            		<div class="form-group">
            			<label for="title">Title: </label>
            			<input class="form-control" type="text" name="kitc-title" id="kitch-title">
            		</div>
            	
        			<div class="form-group">
        				<label for"desc">Description</label>
        				<textarea class="form-control" name="kitchen-desc" cols"30"  rows="10"></textarea>
        			</div>

        			<div class="form-group">
        				<label for="title">Title: </label>
            			<input class="form-control" type="file" name="kitc-image" id="kitc-image">
        				
        			</div>

        			<input type="submit" name="submit-kit-details" value="Submit">

            	</form>
            </div>
      
        </div>      
    </div> 
<article>

<?php 

  $this->layout('master', [
    'title'=>'Content stream',
    'desc'=>'The latest posts from people you follow and categories you like'
  ]);

?>

<body id="stream-page">

    <?= $this->insert('nav') ?>

    <nav class="row expanded">
      <div class="columns large-10">

        <form action="index.php?page=search" method="post">
          <div class="input-group">
            <a href="" class="input-group-label">Test</a>
            <input type="search" name="search" placeholder="Search" class="input-group-field">
            <div class="input-group-button">
              <input type="submit" class="button secondary">
            </div>
          </div>
        </form>

      </div>
      <div class="columns large-2" id="account-bar">
        <a href="index.php?page=account" class="button secondary">
          <img src="http://placehold.it/16" alt="">
          Your Name
        </a>
        <a class="button secondary">
          <i class="fa fa-comment-o" aria-hidden="true"></i>
        </a>
      </div>
    </nav>

    <div id="grid" class="">

      <?php foreach($allPosts as $item): ?>
      <article class="grid-item">
        
        <a href="index.php?page=post&postid=<?= $item['id'] ?>">
          <img src="img/uploads/stream/<?= $item['image'] ?>" alt="">
        </a>

        <div class="grid-content">
          <a href="" class="button alert save"><i class="fa fa-thumb-tack" aria-hidden="true"></i> Save</a>
          <a href="" class="button secondary heart"><i class="fa fa-heart" aria-hidden="true"></i></a>

          <h1>
            <a href="index.php?page=post&postid=<?= $item['id'] ?>">
            <?= htmlentities($item['title']) ?>
            </a>
          </h1>

          <a href=""><i class="fa fa-thumb-tack" aria-hidden="true"></i> 15</a>
          <a href=""><i class="fa fa-heart" aria-hidden="true"></i> 3</a>
          <div class="media-object">
            <div class="media-object-section">
              <img src="http://placeimg.com/32/32/people">
            </div>
            <div class="media-object-section">
              <a href="">Owner ID: <?= $item['user_id'] ?> </a>
              <a href="">Board name</a>
            </div>
          </div>
        </div>
      </article>
    <?php endforeach ?>

    </div>
