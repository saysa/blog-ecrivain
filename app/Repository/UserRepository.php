<?php

namespace app\Repository;

use app\Entity\User;
use Framework\Entity;
use Framework\Repository;

class UserRepository extends Repository {

	public function getList() {
		$posts = array();

		/** @var \PDO $pdo */
		$pdo = $this->_pdo;
		/** @var \PDOStatement $st */
		$st = $pdo->query( 'SELECT id, login, password, created, modified FROM user' );

		while ( $donnees = $st->fetch( \PDO::FETCH_ASSOC ) ) {
			$posts[] = new User( $donnees );
		}

		return $posts;
	}

	public function add( Entity $user ) {
		// TODO: Implement add() method.
	}

	public function get( $id ) {
		// TODO: Implement get() method.
	}

	public function update( Entity $form ) {
		// TODO: Implement update() method.
	}

	public function delete( Entity $form ) {
		// TODO: Implement delete() method.
	}
}