<?php

namespace app\Entity;

use Framework\Entity;

class User extends Entity {

	private $_id;
	private $_login;
	private $_password;

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->_id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId( $id ) {
		$this->_id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getLogin() {
		return $this->_login;
	}

	/**
	 * @param mixed $login
	 */
	public function setLogin( $login ) {
		$this->_login = $login;
	}

	/**
	 * @return mixed
	 */
	public function getPassword() {
		return $this->_password;
	}

	/**
	 * @param mixed $password
	 */
	public function setPassword( $password ) {
		$this->_password = $password;
	}
}