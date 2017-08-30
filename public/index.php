<?php

define( "APP_PATH", dirname( dirname( __FILE__ ) ) );

try {

	require( "../Framework/Core.php" );
	Framework\Core::initialize();

	$config = yaml_parse( file_get_contents( APP_PATH . "/app/configuration/config.yml" ) );

	$router = new \Framework\Router( array(
		"url" => trim( $_SERVER['REQUEST_URI'], "/" ),
	) );
	\Framework\Registry::set( "router", $router );
	foreach ( \app\configuration\Routes::$routes as $route ) {
		$router->addRoute( new \Framework\Route( $route ) );
	}

	$router->dispatch();

} catch ( Exception $e ) {

	header( "Content-type: text/html" );
	echo "An error occurred. " . $e->getMessage();
	exit;
}