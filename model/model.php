<?php

// Call bdd

function getBdd() {

    $bdd = new PDO('mysql:host=localhost;dbname=booking;charset=utf8', 'root', '');
    return $bdd;
}

// Booking

function getArticles() {

    $bdd = getBdd();
    $result = $bdd->query("SELECT * FROM t_booking");
    return $result;
}

function getDetails($id) {

    $bdd = getBdd();
    $detail = $bdd->prepare("SELECT * FROM t_booking WHERE id = ?");
    $detail->execute(array($id));

    return $detail;
}

function createBooking($data) {

    $bdd = getBdd();
    $query = $bdd->prepare("INSERT INTO t_booking (b_title, b_subtitle, b_description, b_city, b_surface, b_swim, b_image_1, b_image_2, b_image_3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $query->execute(array($data));
}

// Users

function createUser($data) {

    $bdd = getBdd();
    $create = $bdd->prepare("INSERT INTO t_users (u_name, u_email, u_password, u_role) VALUES (?, ?, ?, 0)");
    $create->execute($data);
}

function getUsers($data) {

    $bdd = getBdd();
    $users = $bdd->prepare("SELECT * FROM t_users WHERE u_email=?");
    $users->execute(array($data));

    if($users->rowCount() == 1) {

        return $users->fetch();
    
    } else {
        
        return false;
    }
}
