<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Order extends BasePostType{
    function initialize(){
        add_action('acf/init', array($this, 'add_local_fields'));
    }
    function add_local_fields() {
            
            acf_add_local_field_group(array(
            	'key' => 'new_order',
            	'title' => 'Orders',
            	'fields' => array (
            	    array (
            			'key' => 'progress',
            			'label' => 'Progress',
            			'name' => 'progress',
            			'type' => 'select',
            			'choices' => array(
            			    '' => '0%',
            			    'w-25' => '25%',
            			    'w-50' => '50%',
            			    'w-75' => '75%',
            			    'w-100' => '100%',
            			    ),
            		),
            		array (
            			'key' => 'the_subject',
            			'label' => 'Subject',
            			'name' => 'subject',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'the_comment',
            			'label' => 'Comment',
            			'name' => 'comment',
            			'type' => 'textarea',
            		),
            		array (
            			'key' => 'boat_make',
            			'label' => 'Boat Make',
            			'name' => 'boatMake',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'boat_model',
            			'label' => 'Boat Model',
            			'name' => 'boatModel',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'boat_length',
            			'label' => 'Boat Length',
            			'name' => 'boatLength',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'hull_id',
            			'label' => 'Hull ID',
            			'name' => 'hullID',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'number_of_engines',
            			'label' => 'Number of Engines',
            			'name' => 'numberOfEngines',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'engine_year',
            			'label' => 'Engine Year',
            			'name' => 'engineYear',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'engine_model',
            			'label' => 'Engine Model',
            			'name' => 'engineModel',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'engine_hp',
            			'label' => 'Engine Horse Power',
            			'name' => 'engineHP',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'engine_ID',
            			'label' => 'Engine ID',
            			'name' => 'engineID',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'engine_serial',
            			'label' => 'Engine Serial',
            			'name' => 'engineSerial',
            			'type' => 'text',
            		)
            	),
            	'location' => array (
            		array (
            			array (
            				'param' => 'post_type',
            				'operator' => '==',
            				'value' => 'order',
            			),
            		),
            	),
            ));
    }
}

?>