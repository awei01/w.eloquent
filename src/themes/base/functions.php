<?php
/**
 * Default
 */




add_action( 'brain_loaded', function() {

	Brain\Routes::add( '/route/{name}/{page}', 'some_route', 1, array(
		'requirements' => array( 'name' => '[a-zA-Z-_]+', 'page' => '.+' ),
		'methods' => array( 'GET' ),
		'defaults' => array( 'page' => '1', 'foo' => 'bar' ),
	) )
	->bindToMethod('Controller', 'index');

});



class Controller {


	public function index($args, $request)
	{
//		dd($args);
	}
}
