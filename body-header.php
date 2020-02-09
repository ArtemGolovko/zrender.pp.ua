  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c3f7fa;">
      <a class="navbar-brand" href="#" style="font-weight: blod;" >Menu</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent" >
        <ul class="navbar-nav mr-auto" >
          <li class="nav-item ">
            <a class="nav-link" href="<?php echo HTML_TEKA . '/'; ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="<?php echo HTML_TEKA . '/games.php' ?>" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Games
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Python</a>
              <a class="dropdown-item" href="#">JavaScript</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="<?php echo HTML_TEKA . '/games.php' ?>">All</a>
            </div>
          </li>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Forum <span class="sr-only">(current)</span></a>
          </li>
    
    	  <li class="nav-item">
            <a class="nav-link" href="<?php echo HTML_TEKA . '/log-in.php' ?>">Log in <span class="sr-only">(current)</span></a>
          </li>
    	  <li class="nav-item">
            <a class="nav-link" href="<?php echo HTML_TEKA . '/sign-up.php' ?>">Sign up <span class="sr-only">(current)</span></a>
          </li>
    	  <li class="nav-item">
            <a class="nav-link" href="<?php echo HTML_TEKA . '/about.php' ?>">About <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div> 
    </nav>
