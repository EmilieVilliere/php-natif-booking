<?php

function getBdd() {

    $bdd = new PDO('mysql:host=localhost;dbname=booking;charset=utf8', 'root', '');
    return $bdd;
}

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

// Users

function createUser($data) {

    $bdd = getBdd();
    $create = $bdd->prepare("INSERT INTO t_users (u_name, u_email, u_password) VALUES (?, ?, ?)");
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