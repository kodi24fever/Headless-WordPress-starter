<?php

/**
 * To create new API calls, you have to instanciate the API controller and start adding endpoints
*/
$api = new \WPAS\Controller\WPASAPIController([ 
    'version' => '1', 
    'application_name' => 'sample_api', 
    'namespace' => 'Rigo\\Controller\\' ,
    'allow-origin' => '*',
    'allow-methods' => 'GET,POST,PUT'
]);


/**
 * Then you can start adding each endpoint one by one
*/
$api->get([ 'path' => '/courses', 'controller' => 'SampleController:getDraftCourses' ]);
$api->get([ 'path' => '/orders', 'controller' => 'OrdersController:getAllOrders' ]);
$api->get([ 'path' => '/appointments', 'controller' => 'AppointmentController:setAppointment' ]);
