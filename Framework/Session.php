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

	public function __destruct() {
		session_commit();
	}
}