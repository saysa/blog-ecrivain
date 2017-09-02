<?php

namespace app\Controller;

use app\Entity\Post;
use app\Repository\PostRepository;
use Framework\Controller;

class BlogController extends Controller {

	public function indexAction() {

		$dm    = new PostRepository();
		$posts = $dm->getList();
		$this->_view->set( "posts", $posts );
	}

	public function addAction() {

		if ( filter_has_var( INPUT_POST, 'submit' ) ) {

			$dm = new PostRepository();
			$dm->add( new Post( array(
				"title"   => filter_input( INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS ),
				"lead"    => filter_input( INPUT_POST, 'lead', FILTER_SANITIZE_SPECIAL_CHARS ),
				"content" => filter_input( INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS ),
				"author"  => filter_input( INPUT_POST, 'author', FILTER_SANITIZE_SPECIAL_CHARS ),
			) ) );
		}
	}

	public function editAction( $id ) {

		$dm = new PostRepository();
		if ( $post = $dm->get( $id ) ) {

		} else {
			// TODO : handle error
		}
	}
}