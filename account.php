<?php 

session_start();

require "model/model.php";

$u_name = "";
$u_firstname = "";
$u_phone = "";
$u_email = "";
$u_password = "";
$u_role = "";

if(!empty($_POST['u_email']) && !empty($_POST['u_password'])) {

    $id = $_SESSION['id'];

    $data = array(
        
        $_POST['u_name'],
        $_POST['u_firstname'],
        $_POST['u_phone'],
        $_POST['u_email'],
        md5($_POST['u_password']),
        $_POST['u_role'],
        $id,

    );

    updateUser($data);
}


if(isset($_GET['id'])) {

    $id = $_GET['id'];
    $infosAccount = getInfosAccount($id);

    if($infosAccount->rowCount() == 1) {

        $n = $infosAccount->fetch();
        $u_name = $n['u_name'];
        $u_firstname = $n['u_firstname'];
        $u_phone = $n['u_phone'];
        $u_email = $n['u_email'];
        $u_password = $n['u_password'];
        $u_role = $n['u_role'];
    }
}


require "view/viewAccount.php";
