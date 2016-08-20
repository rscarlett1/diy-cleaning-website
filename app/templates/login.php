<?php $this->layout('master') ?>

<main>

<div  class="row container">
    <div class="col-xs-12">
      <form id="login-form" action="index.php?page=login" method="post">
        <h1>Login</h1>

        <button type="button" class="btn btn-primary">Facebook</button>
        <button type="button" class="btn btn-success">Google</button>

       <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="<?= isset($_POST['login']) ? $_POST['email'] : '' ?>">
        </div>

        <?php if( isset ($emailMessage) ):  ?>
        <p> <?= $emailMessage ?></p>
        <?php endif ?>

        

        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>

        <?php if( isset ($loginMessage) ):  ?>

        <p> <?= $loginMessage ?></p>
      <?php endif ?>
      <input type="submit" value="Login" name="login" class="btn btn-default">
    </form>
  </div>
</div>

  
