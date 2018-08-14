<?php
namespace Rigo\Controller;
use Rigo\Types\Gallery;
class GalleryController{
    
    public function getGallery(){
        $query = Gallery::all(['post_status' => 'publish' ]);
        
        if ( $query->have_posts() ) {
        	while ( $query->have_posts() ) {
        		$query->the_post();
        		
        		//Include the Meta Tags and Values
        		$query->post->meta_keys = get_post_meta($query->post->ID);
        		foreach($query->post->meta_keys as $key => $value){
        		    $query->post->meta_keys[$key] = maybe_unserialize($value[0]);
        		}
        		//Include my image
        		$query->post->url = wp_get_attachment_image_src( $query->post->photo, 'large');
        		$query->post->url = $query->post->url[0];
        	}
        	/* Restore original Post Data */
        	wp_reset_postdata();
        }
        
        return $query->posts;
    }
}
?>