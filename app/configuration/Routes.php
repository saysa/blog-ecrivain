<?php

namespace app\configuration;

/**
 * Contains all the routes for the application
 *
 * Class Routes
 * @package app\configuration
 */
class Routes {

	public static $routes = array(
		array(
			"name"       => "home",
			"pattern"    => "",
			"controller" => "homepage",
			"action"     => "index",
		),
		array(
			"name"       => "blog",
			"pattern"    => "blog",
			"controller" => "blog",
			"action"     => "index",
		),
		array(
			"name"       => "add-a-blog-post",
			"pattern"    => "blog/add",
			"controller" => "blog",
			"action"     => "add",
		),
		array(
			"name"       => "edit-a-blog-post",
			"pattern"    => "blog/edit/:id",
			"controller" => "blog",
			"action"     => "edit",
		),
		array(
			"name"       => "delete-a-blog-post",
			"pattern"    => "blog/delete/:id",
			"controller" => "blog",
			"action"     => "delete",
		),
		array(
			"name"       => "show-a-blog-post",
			"pattern"    => "blog/:id",
			"controller" => "blog",
			"action"     => "show",
		),
		array(
			"name"       => "admin-login",
			"pattern"    => "_admin_/login",
			"controller" => "auth",
			"action"     => "login",
		),
	);
}