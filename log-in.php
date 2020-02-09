<?php
require( dirname( __FILE__ ) . '/loader.php');
$title = 'log';
require( TEKA . '/header.php');
require( TEKA . '/body-header.php');
?>
<!--<script src="<?php //echo HTML_TEKA . '/client-js/log.js' ?>"></script>-->
    <div class="row">
      <div class="col-12 col-lg-6 col-md-8 col-sm-12 mx-auto">
        <form id="log">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="pass" type="password" class="form-control" id="exampleInputPassword1" required>
          </div>
          <button type="submit" class="btn btn-primary">Log in</button>
        </form>
      </div>
    </div>
  </body>
</html>