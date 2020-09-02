<?php 

require "model/model.php";

// register image 1
if(!empty($_POST)) {
    
    $bdd = getBdd();
    $lastId = $bdd->query('SELECT MAX(id) FROM t_booking');
    $lastId = $lastId->fetch();
    $lastId = $lastId[0] + 1;

    if(isset($_FILES["b_image_1"])) {

        $infosFile = pathinfo($_FILES["b_image_1"]["name"]);
        $ext = $infosFile["extension"];
        $filename = $infosFile["filename"];

        for($i=0; $i < strlen($filename); $i++) {

            $newFilename = "";
            if(preg_match("/([a-z])/", $filename[$i])) {

                $newFilename .= $filename[$i];
                echo $newFilename;
            }
        }
    
        $image_name_1 = $lastId . "-" . $newFilename . "." . $ext;
    
        move_uploaded_file($_FILES['b_image_1']['tmp_name'], "images/" . $image_name_1);

    }


   

}

if(isset($_POST['b_title']) && isset($_POST['b_description'])) {

    if(!empty($_POST['b_title']) && !empty($_POST['b_description'])) {

        $b_swim = $_POST['b_swim'];

        if($b_swim == null) {
            $b_swim = "0";
        } else {
            $b_swim = "1";
        }

        $data = array(

            $_POST['b_title'],
            $_POST['b_subtitle'],
            $_POST['b_description'],
            $_POST['b_city'],
            $_POST['b_surface'],
            $_POST['b_price'],
            $_POST['b_type'],
            $b_swim,
            $image_name_1,
            $_POST['b_image_2'],
            $_POST['b_image_3']
        );

        var_dump($data);

        // createBooking($data);
    }

}


require "view/viewBooking.php";