<?php

namespace Framework;

class Session {

	protected $_prefix = "app_";

	public function __construct() {
		session_start();
	}

	public function __destruct() {
		session_commit();
	}
}