<?php

namespace Framework;

class Session {

	protected $_prefix = "app_";

	public function __construct() {
		session_start();
	}

	/**
	 * Get a Session variable by key
	 *
	 * @param $key
	 * @param null $default
	 *
	 * @return null | mixed
	 */
	public function get( $key, $default = null ) {

		if ( isset( $_SESSION[ $this->_prefix . $key ] ) ) {
			return $_SESSION[ $this->_prefix . $key ];
		}

		return $default;
	}

	/**
	 * Set a Session variable
	 *
	 * @param $key
	 * @param $value
	 *
	 * @return $this
	 */
	public function set( $key, $value ) {
		$_SESSION[ $this->_prefix . $key ] = $value;

		return $this;
	}

	public function __destruct() {
		session_commit();
	}
}