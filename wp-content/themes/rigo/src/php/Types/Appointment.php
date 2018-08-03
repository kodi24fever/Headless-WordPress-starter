<?php
namespace Rigo\Types;
    
use WPAS\Types\BasePostType;

class Appointment extends BasePostType{
    function initialize(){
        add_action('acf/init', array($this, 'add_local_fields'));
    }
    function add_local_fields() {
            
            acf_add_local_field_group(array(
            	'key' => 'new_appointment',
            	'title' => 'Appointments',
            	'fields' => array (
            		array (
            			'key' => 'the_date',
            			'label' => 'Date',
            			'name' => 'date',
            			'type' => 'datepicker',
            		),
            		array (
            			'key' => 'the_time',
            			'label' => 'Time',
            			'name' => 'time',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'user_appointment',
            			'label' => 'User Appointment',
            			'name' => 'userAppointment',
            			'type' => 'text',
            		),
            		array (
            			'key' => 'notes',
            			'label' => 'Appointment Notes',
            			'name' => 'appointmentNotes',
            			'type' => 'textarea',
            		)
            	),
            	'location' => array (
            		array (
            			array (
            				'param' => 'post_type',
            				'operator' => '==',
            				'value' => 'appointment',
            			),
            		),
            	),
            ));
    }
}

?>