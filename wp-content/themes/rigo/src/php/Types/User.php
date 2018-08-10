<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class User extends BasePostType{
    function initialize(){
        add_action('acf/init', array($this, 'add_local_fields'));
    }
    function add_local_fields() {
            
            acf_add_local_field_group(array(
            	'key' => 'user',
            	'title' => 'All Users',
            	'fields' => array (
            	    array (
            			'key' => 'user_name',
            			'label' => 'Username',
            			'name' => 'user_name',
            			'type' => 'text',
            		),
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
            			'key' => 'password',
            			'label' => 'Your Password',
            			'name' => 'password',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'user_email',
            			'label' => 'User Email',
            			'name' => 'user_email',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'address',
            			'label' => 'Address',
            			'name' => 'address',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'phone',
            			'label' => 'Phone',
            			'name' => 'phone',
            			'type' => 'text',
            		)
            	),
            	'location' => array (
            		array (
            			array (
            				'param' => 'post_type',
            				'operator' => '==',
            				'value' => 'user',
            			),
            		),
            	),
            ));
    }
}

?>