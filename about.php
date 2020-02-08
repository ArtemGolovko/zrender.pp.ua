<?php
$path = pathinfo($_SERVER['REQUEST_URI']);
$title = "auto";
require( dirname( __FILE__ ) . '/loader.php');
require( TEKA . '/header.php');
require( TEKA . '/body-header.php');
?>
        <div class="row">
            <div class="col-12 col-lg-8 col-md-8 col-sm-12 mx-auto">
                <h1 class="text-center"><strong>General</strong></h1>
                <p class="text-center"><strong>Origins</strong></p>
                <p class="text-center">The project old name is "old project". it is a site that
                 I am trying to write myself using all my knowledge. 
                Before installing WordPress, 
                I did the same and for this I chose the name"<strong>Odl Project</strong>".
                Now I don't have WordPress, becase I reneme my host from 
                artemusg.freedomain.thehost.com.ua to zrender.pp.ua.</p>
                <p class="text-center"><strong>Style</strong></p>
                <p class="text-center">I use bootstrap to work with css.</p>
                <h1 class="text-center"><strong>Open code</strong></h1>
                <p class="text-center"><strong>Style</strong></p>
                <p class="text-center">
                    <a href="<?php echo HTML_TEKA . '/style.css'; ?>" target="blank_">style.css</a></p>
                <p class="text-center"><strong>JavaScript</strong></p>
                <p class="text-center">
                    <a href="<?php echo HTML_TEKA . '/functions.js'; ?>" target="blank_">functions.js</a></p>
                <p class="text-center"><strong>PHP</strong></p>
                <p class="text-center">index.php</p>
                <?php
                highlight_string(file_get_contents(TEKA . '/index.php'));
                ?>
                <br/>
                <p class="text-center">loader.php</p>
                <?php
                highlight_string(file_get_contents(TEKA . '/loader.php'));
                ?>
                <br/>
                <p class="text-center">header.php</p>
                <?php
                highlight_string(file_get_contents(TEKA . '/header.php'));
                ?>
                <br/>
                <p class="text-center">body-header.php</p>
                <?php
                highlight_string(file_get_contents(TEKA . '/body-header.php'));
                ?>
                <br/>
                <p class="text-center">end.php</p>
                <?php
                highlight_string(file_get_contents(TEKA . '/end.php'));
                ?>
                <br/>
                <p class="text-center">about.php</p>
                <?php
                highlight_string(file_get_contents(TEKA . '/about.php'));
                ?>
                <br/>
                <p class="text-center">games.php</p>
                <?php
                highlight_string(file_get_contents(TEKA . '/games.php'));
                ?>
                <br/>
            </div>
        </div>
    </body>
</html>