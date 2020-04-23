<?php

namespace application\lib\DbLib;

use application\lib\config\AutoloadInterface;
use application\lib\DbLib\Db;

class Autoload  implements AutoloadInterface
{
    public function instance()
    {
        return new Db;
    }
}