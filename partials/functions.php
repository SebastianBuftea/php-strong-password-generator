<?php 
    function pass($num, $characters, $key_position){
        $password='';
        for( $i=0; $i<$num; $i++ ){
            $num_rand_character= rand(0, (strlen($characters[$key_position])-1));
            $password.= $characters[$key_position][$num_rand_character];
        }
        return $password;
    }

?>