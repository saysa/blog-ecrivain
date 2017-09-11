<?php

namespace app\Controller;

use Framework\Controller;
use Framework\View;

class AuthController extends Controller {

	public function __construct() {
		parent::__construct();

		$this->_layoutView = new View( array(
			"file" => "layouts/admin.html.twig",
		) );
	}

	public function loginAction() {

	}
}