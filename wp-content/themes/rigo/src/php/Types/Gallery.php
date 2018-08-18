<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;
class Gallery extends BasePostType{
    function initialize(){
        add_action('acf/init', array($this, 'add_local_fields'));
    }
    function add_local_fields() {
            
            acf_add_local_field_group(array(
                'post_content' => "[gallery size='full']",
            	'key' => 'gallery',
            	'title' => 'Gallery',
            	'fields' => array (
            		array (
            			'key' => 'photo',
            			'label' => 'Photo',
            			'name' => 'photo',
            			'type' => 'image',
            		),
            	),
            	'location' => array (
            		array (
            			array (
            				'param' => 'post_type',
            				'operator' => '==',
            				'value' => 'gallery',
            			),
            		),
            	),
            ));
    }
}