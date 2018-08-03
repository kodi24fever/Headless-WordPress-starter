<?php
namespace Rigo\Controller;

use Rigo\Types\Appointment;

class AppointmentController{
    
    public function setAppointment(){
        $query = Appointment::all([ 'status' => 'publish' ]);
        
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
        		
        		//Include the Meta Tags and Values
        		$query->post->meta_keys = get_post_meta($query->post->ID);
        		foreach($query->post->meta_keys as $key => $value){
        		    $query->post->meta_keys[$key] = maybe_unserialize($value[0]);
        		}
        		//Include the Featured Image
        		$query->post->thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $query->post->ID ), "large" );
        	}
        	/* Restore original Post Data */
        	wp_reset_postdata();
        }
        
        return $query->posts;
    }
}
?>