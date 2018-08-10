<?php
namespace Rigo\Controller;

use Rigo\Types\Order;
use WP_REST_Response;

class OrdersController{
    
    public function getAllOrders(){
        $query = Order::all(['post_status' => 'publish' ]);
        
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
    
    
    public function submitOrder($request){
        $data = $request->get_json_params();
        //print_r($data);
        //die;
        
        $my_post = array(
            'post_title' => '',
            'post_content'  => '',
            'post_status' => 'publish',
            'post_type'  => 'order',
            'meta_input' => array(
                'subject' => $data["subject"],
                'comment' => $data["comment"],
                'boatMake' => $data["boatMake"],
                'boatModel' => $data["boatModel"],
                'boatLength' => $data["boatLength"],
                'hullID' => $data["hullID"],
                'numberOfEngines' => $data["numberOfEngines"],
                'engineYear' => $data["engineYear"],
                'engineModel' => $data["engineModel"],
                'engineHP' => $data["engineHP"],
                'engineID' => $data["engineID"],
                'engineSerial' => $data["engineSerial"]
                )
        );
        
        $chair = wp_insert_post($my_post);
        
        if($chair !== 0){
            return new WP_REST_Response(
                array(
                    "code" => "success",
                    "message" => "successfully created"
                ), 200);
        }else{
            return new WP_REST_Response(
                array(
                    "code"=>"error",
                    "message" => "something went wrong while inserting"
                ), 500);
            }
        }
}
?>