<?php 

namespace application\core;

use application\lib\config\AutoloadInterface;

class Libler  
{
    protected $path = "application\\lib";

    public function loadlib($name) : ?AutoloadInterface
    {
        $name = $this->path.'\\'.$name.'Lib\\Autoload';
        if(class_exists($name)) {
            if ($this->checkInterface($name)) {
              return new $name;
            }
            return null;
          }
          return null;
    }

    public function checkInterface ($class) 
    {
        $interfaces = class_implements($class);
        return in_array("application\\lib\\config\\AutoloadInterface", $interfaces);
    }
}
