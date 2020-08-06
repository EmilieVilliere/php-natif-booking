<?php 

require "model/model.php";

if(isset($_POST['u_name']) && isset($_POST['u_email'])) {

    if(!empty($_POST['u_name']) && !empty($_POST['u_email'])) {

        $data = array(

            $_POST['u_name'],
            $_POST['u_email'],
            $_POST['u_password'],
        );

        createUser($data);
    }
}

require "view/viewSignUp.php";