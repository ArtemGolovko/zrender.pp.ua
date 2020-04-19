<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  
  function debug ($var) {
    echo "<pre>\n";
    var_dump($var);
    echo "</pre>\n<hr>\n";
  }
  
  function colorCode ($str) {
    highlight_string($str);
    echo "\n<hr>\n";
  }
  
  function fprint ($str) {
    echo "$str\n<hr>\n";
  }

  $routes = [];
  $attr;
  $xml = simplexml_load_file('file.xml');
  foreach ($xml as $route) {
    $attr = $route->attributes();
    $routes[(string) $attr['path']] = ['controller' => (string) $attr['controller'], 'action' => (string) $attr['action']];
  }
  unset($attr);
  ?>
  <?php foreach($routes as $path => $params): ?>
<pre>
<b><?=$path?></b>:
    Controller: <b><?=$params['controller']?></b>
    Action: <b><?=$params['action']?></b>
</pre>
  <?php endforeach; ?>
  
  