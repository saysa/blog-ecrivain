<?php

namespace Helper;

class Auth {

	protected $_error_login;
	protected $_error_password;

	/**
	 * @return mixed
	 */
	public function getErrorLogin() {
		return $this->_error_login;
	}

	/**
	 * @param mixed $error_login
	 */
	public function setErrorLogin( $error_login ) {
		$this->_error_login = $error_login;
	}

	/**
	 * @return mixed
	 */
	public function getErrorPassword() {
		return $this->_error_password;
	}

	/**
	 * @param mixed $error_password
	 */
	public function setErrorPassword( $error_password ) {
		$this->_error_password = $error_password;
	}
}