<?php
    include_once "config.php";

    $user_array = array(
        "alan" => array(
            "username" => "alan",
            "password" => "alan123",
            "carGameScore" => null, 
            "ASGameScore" => null, 
            "user_type" => 2,
            "is_active" => 1, 
            "image_url" => picture1.png

        ),
        "max" => array(
            "username" => "max",
            "password" => "max123",
            "carGameScore" => null, 
            "ASGameScore" => null, 
            "user_type" => 2,
            "is_active" => 1, 
            "image_url" => picture2.png
        ),
        "langston" => array(
            "username" => "langston",
            "password" => "langston123",
            "carGameScore" => null, 
            "ASGameScore" => null, 
            "user_type" => 2,
            "is_active" => 1, 
            "image_url" => picture3.png
        ),
        "xi" => array(
            "username" => "xi",
            "password" => "xi123",
            "carGameScore" => null, 
            "ASGameScore" => null, 
            "user_type" => 1,
            "is_active" => 0, 
            "image_url" => picture4.png
        ),
        
    );
    echo json_encode($user_array);
   // print_r($user_array);


?>