<?php
return array(
	'_root_'  => 'contact/index',  // The default route
	'_404_'   => 'contact/404',    // The main 404 route
	'record'  => 'contact/record',
	'user'    => 'contact/user',
	'admin'   => 'contact/admin',
	'graph'   => 'contact/graph',
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);