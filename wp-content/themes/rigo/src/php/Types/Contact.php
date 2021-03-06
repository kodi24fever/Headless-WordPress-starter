<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Contact extends BasePostType{
    function initialize(){
        add_action('acf/init', array($this, 'add_local_fields'));
    }
    function add_local_fields() {
            
            acf_add_local_field_group(array(
            	'key' => 'contact',
            	'title' => 'Contact',
            	'fields' => array (
            		array (
            			'key' => 'first_name',
            			'label' => 'First Name',
            			'name' => 'first_name',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'last_name',
            			'label' => 'Last Name',
            			'name' => 'last_name',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'user_email',
            			'label' => 'User Email',
            			'name' => 'user_email',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'comments',
            			'label' => 'User Comments',
            			'name' => 'comments',
            			'type' => 'textarea',
            		)
            	),
            	'location' => array (
            		array (
            			array (
            				'param' => 'post_type',
            				'operator' => '==',
            				'value' => 'contact',
            			),
            		),
            	),
            ));
    }
}

?>