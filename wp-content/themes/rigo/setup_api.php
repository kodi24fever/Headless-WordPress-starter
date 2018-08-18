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


/******USER CREATION ENDPOINT
*/
$api->get([ 'path' => '/createUser', 'controller' => 'CreateUserController:getUser' ]);
$api->put([ 'path' => '/createUser', 'controller' => 'CreateUserController:createUser' ]);

//*******************/

$api->get([ 'path' => '/orders', 'controller' => 'OrdersController:getAllOrders']);
$api->put([ 'path' => '/orders', 'controller' => 'OrdersController:submitOrder' ]);

$api->get([ 'path' => '/appointments', 'controller' => 'AppointmentController:setAppointment' ]);

/****       CREATING METHODS FOR CONTACT FORMS       *************************************/
$api->get([ 'path' => '/contact',
            'controller' => 'ContactController:getContactForm'
            // to hide api endpoint 'capability' => 'activate_plugins' 
        ]);
        
$api->put([ 'path' => '/contact', 'controller' => 'ContactController:createContactForm' ]);




$api->get([ 'path' => '/gallery', 'controller' => 'GalleryController:getGallery' ]);
