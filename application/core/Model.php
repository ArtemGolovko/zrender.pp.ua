<?php

namespace application\core;

use application\core\Libler;


abstract class Model {

	public $db;

	public $libler;
	
	public function __construct() {
		$this->libler = new Libler;

		$this->db = $this->libler->loadlib('Db')->instance();
	}

}