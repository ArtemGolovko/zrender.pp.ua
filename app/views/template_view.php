<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,  shrink-to-fit=no">
    <title><?=$title?></title>
    <link rel="stylesheet" href="/src/css/bootstrap.min.css">
    <script src="/src/js/jquery-3.4.1.min.js"></script>
    <script src="/scr/js/popper.min.js"></script>
    <script src="/src/js/bootstrap.min.js"></script>
    <!-- <script src="/src/js/ajax-update.js"></script> -->
    <script>
$(document).ready(function(){
	$("a").click(function (e) {
    		//e.preventdefault();
    		var url = $(this).attr("href");
    		$.ajax({
        		url: url,
        		type: "post",
        		success: function (result) {
            			var doc = new DOMParser().parseFromString(result, 'text/html');
            			document.head.innerHTML = doc.head.innerHTML;
            			document.body.innerHTML = doc.body.innerHTML;
       			},
        		error: () => alert("error")
    		});
   		return false;
	});
});
    </script>
</head>
<body>
    <div class="row d-flex justify-content-md-center">
        <div class="col-md-8 border-left border-right rounded" style="background-color: #f7f7f7; padding: 0px; margin-top: 1%;">
            <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #c3f7fa;">
                <a class="navbar-brand" href="#" style="font-weight: bold;">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                      <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown ">
                      <a class="nav-link dropdown-toggle" href="/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Games
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Python</a>
                        <a class="dropdown-item" href="#">JavaScript</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/">All</a>
                      </div>
                    </li>
                    
                    <li class="nav-item ">
                      <a class="nav-link" href="#">Forum <span class="sr-only">(current)</span></a>
                    </li>
              
                      <li class="nav-item">
                      <a class="nav-link" href="/">Log in <span class="sr-only">(current)</span></a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="/">Sign up <span class="sr-only">(current)</span></a>
                    </li>
                      <li class="nav-item">
                      <a class="nav-link" href="/portfolio">About <span class="sr-only">(current)</span></a>
                    </li>
                  </ul>
                </div> 
              </nav>
              <div class="row" style="padding-left: 30px; padding-right: 30px; margin-top: 1%;margin-bottom: 1%;">
                  <div class="col-md-3" style="padding: 0px;">
                    <div class="border rounded border-gray" style="background-color: lightgray;">
                        <h3>POSTS</h3>
                        <ul>
                            <li>Lorem ipsum dolor sit amet.</li>
                            <li>Lorem ipsum dolor sit amet.</li>
                        </ul>
                    </div>
                  </div>
                  <div class="col" style="border: solid 2px darkgray; border-radius: 5px; margin-left: 1%;">
                    <?php include 'app/views/'.$content_view; ?>
                  </div>
              </div>
              <footer>
                  <div class="row border-top" style="margin-left: 30px;margin-right: 30px;">
                      <div class="col"><p>email: Lorem.</p>
                        <p>65465695</p>
                        <p>Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="col">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, ratione possimus magnam fuga a corrupti molestiae sapiente dolores obcaecati maxime impedit est unde deleniti ea temporibus eum autem officiis quod.
                    </div>
                  </div>
              </footer>
        </div>
    </div>
    <div style="background-color: #fff; text-align: center;">
        ZRENDER©
    </div>
</body>
</html>