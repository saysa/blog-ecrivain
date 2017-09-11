<?php

namespace Helper;

class Auth {

	protected $_error_login;
	protected $_error_password;

	/**
	 * Validator
	 *
	 * @param $login
	 * @param $password
	 *
	 * @return bool
	 */
	public function validate( $login, $password ) {

		if ( empty( trim( $login ) ) ) {

			$this->setErrorLogin( true );
		}

		if ( empty( trim( $password ) ) ) {
			$this->setErrorPassword( true );
		}

		if ( $this->getErrorLogin() || $this->getErrorPassword() ) {
			return false;
		}

		return true;
	}

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