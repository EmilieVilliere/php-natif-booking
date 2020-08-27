<?php

session_start();

require "Model/Model.php";

// fonction de comparaison entre l'entrée et la bdd
function checkUsers($data) {

    $email = $data[0]; 
    $password = $data[1];
    $infos = getUsers($email); 

    if($infos["u_password"] === md5($password)) {
      return $infos;
    }
    else {
      return false;
    }
  }

// vérification et redirection
if(isset($_GET["u_email"]) && !empty($_GET["u_email"])) {

    $infos = array($_GET["u_email"], $_GET["u_password"]);
    $logged = checkUsers($infos); 
    
    if(!empty($logged) && is_array($logged)) {  
     
      $_SESSION['id'] = $logged['id'];
      $_SESSION['u_role'] = $logged['u_role'];

        require "view/viewHome.php";

    } else {

        require "view/viewSignIn.php";

    }
}
