<?php

/**
 * To create new Post Types, you have to instanciate the PostTypesManager
*/
$typeManager = new \WPAS\Types\PostTypesManager([ 'namespace' => 'Rigo\\Types\\' ]);

/**
 * Then, start adding your types one by one.
*/
$typeManager->newType(['type' => 'course', 'class' => 'Course'])->register();

$typeManager->newType([
    'type'=> 'order', 
    'class' => 'Order', 
    'options' => [
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => ['post_tag']
        ]
    ])->register();
    
$typeManager->newType([
    'type'=> 'appointment', 
    'class' => 'Appointment', 
    'options' => [
        'supports' => ['title', 'editor', 'thumbnail'],
        'taxonomies' => ['post_tag']
        ]
    ])->register();