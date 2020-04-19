<?php
require( dirname( __FILE__ ) . '/loader.php');
$title = 'up';
require( TEKA . '/header.php');
require( TEKA . '/body-header.php');
?>
    <div class="row">
      <div class="col-12 col-lg-6 col-md-8 col-sm-12 mx-auto">

        <form method="POST">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1 0" aria-describedby="emailHelp" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1 1" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Repead password</label>
            <input name="repass" type="password" class="form-control" id="exampleInputPassword1 2" required>
          </div>
          <button type="submit" class="btn btn-primary">Sign up</button>
        </form>
      </div>
    </div> 
  </body>
</html>