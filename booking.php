<?php 

require "model/model.php";

if(isset($_POST['b_title']) && isset($_POST['b_description'])) {

    if(!empty($_POST['b_title']) && !empty($_POST['b_description'])) {

        $data = array(

            $_POST['b_title'],
            $_POST['b_subtitle'],
            $_POST['b_description'],
            $_POST['b_city'],
            $_POST['b_surface'],
            $_POST['b_price'],
            $_POST['b_swim'],
            $_POST['b_image_1'],
            $_POST['b_image_2'],
            $_POST['b_image_3']
        );

        createBooking($data);
    }

}


require "view/viewBooking.php";