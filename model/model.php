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