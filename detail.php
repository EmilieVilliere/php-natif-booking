<?php

session_start();

require "model/model.php";

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $details = getDetails($id);

    if ($details->rowCount() == 1) {

        $n = $details->fetch();
        $b_title = $n['b_title'];
        $b_subtitle = $n['b_subtitle'];
        $b_description = $n['b_description'];
        $b_city = $n['b_city'];
        $b_surface = $n['b_surface'];
        $b_price = $n['b_price'];
        $b_type = $n['b_type'];
        $b_swim = $n['b_swim'];
        $b_image_1 = $n['b_image_1'];
        $b_image_2 = $n['b_image_2'];
        $b_image_3 = $n['b_image_3'];
    }
}

require "view/viewDetail.php";
