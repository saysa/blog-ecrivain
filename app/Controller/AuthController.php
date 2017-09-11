<?php

namespace app\Controller;

use Framework\Controller;
use Framework\View;
use Helper\Auth;

class AuthController extends Controller {

	public function __construct() {
		parent::__construct();

		$this->_layoutView = new View( array(
			"file" => "layouts/admin.html.twig",
		) );
	}

	public function loginAction() {

		if ( filter_has_var( INPUT_POST, 'submit' ) ) {

			$auth = new Auth();

			$login    = filter_input( INPUT_POST, 'login' );
			$password = filter_input( INPUT_POST, 'password' );

			if ( ! $auth->validate( $login, $password ) ) {
				if ( $auth->getErrorLogin() ) {
					$this->_actionView->set( "login_error", "Merci de saisir votre nom d'utilisateur" );
				}

				if ( $auth->getErrorPassword() ) {
					$this->_actionView->set( "password_error", "Merci de saisir votre mot de passe" );
				}
			}
		}
	}
}