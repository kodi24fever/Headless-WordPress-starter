<?php
namespace Rigo\Controller;

use Rigo\Types\CreateUser;

class CreateUserController{
    
    public function createUser($request){
        $data = $request->get_json_params();
        //print_r($data);
        //die;
        
        
        /*$user_name = $data["username"];
        $random_password = $data["password"];
        $user_email = $data["email"];*/
        
        $newUser = array(
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_email' => $data['email'],
            'user_login' => $data['username'],
            'user_pass' => $data['password']
            );
        
        
        
        $user_id = username_exists( $data['username']);
        if ( !$user_id and email_exists($data['email']) == false ) {
            $user_id = wp_insert_user ( $newUser);
        } else {
            $random_password = __('User already exists.  Password inherited.');
        }
    }
    
    
}
?>