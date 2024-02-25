<?php

function addUser($database, $email, $password, $name, $birthday) {
    $birthday = date('Y-m-d', strtotime($birthday));
    $sql = "INSERT INTO membres VALUES (NULL, '$email', '$password', '$name', '$birthday')";
    mysqli_query($database, $sql);
}

function getID($database, $email)
{
    $sql = "SELECT idMembre FROM membres WHERE email = '$email' LIMIT 1";
    $query = mysqli_query($database, $sql);
    if($rep = mysqli_fetch_assoc($query)) {
        $res = $rep['idMembre'];
        mysqli_free_result($query);
        return $res;
    }
    return -1;
}

function getUser($database, $id) {
    $res = array();
    $sql = "SELECT * FROM membres WHERE idMembre = '$id' LIMIT 1";
    $query = mysqli_query($database, $sql);
    if($rep = mysqli_fetch_assoc($query))
        $res = $rep;
    return $res;
}

function isTruePassword($database, $email, $password) {
    if ($info = getUser($database, getID($database, $email)))
        if($info['motDePasse'] == $password)
            return true;
    return false;
}

function userList($database, $start, $num, $condition) {
    $res = array();
    $sql = "SELECT * FROM membres WHERE $condition ORDER BY nom, email LIMIT $start, $num";
    $query = mysqli_query($database, $sql);
    if($rep = mysqli_fetch_all($query))
        $res = $rep;
    return $res;
}

function sentRequest($database, $userID1, $userID2) {
    $sql = "SELECT * FROM amis WHERE idMembre1=$userID1 AND idMembre2=$userID2";
    $query = mysqli_query($database, $sql);
    if(!empty(mysqli_fetch_all($query)) and $userID1 != $userID2)
        return !isFriend($database, $userID1, $userID2);
    return false ;
}

function sendRequest($database, $userID1, $userID2) {
    $sql = "INSERT INTO amis VALUES ($userID1, $userID2, NOW(), NULL)";
    mysqli_query($database, $sql);
}

function removeRequest($database, $userID1, $userID2) {
    $sql = "DELETE FROM amis WHERE idMembre1=$userID1 AND idMembre2=$userID2";
    mysqli_query($database, $sql);
}

function acceptRequest($database, $userID1, $userID2) {
    $sql = "UPDATE amis SET dateHeureAcceptation=NOW() WHERE idMembre1=$userID2 AND idMembre2=$userID1";
    mysqli_query($database, $sql);
}

function isFriend($database, $userID1, $userID2) {
    $sql = "SELECT * FROM amis WHERE ((idMembre1=$userID1 AND idMembre2=$userID2) OR (idMembre1=$userID2 AND idMembre2=$userID1)) AND dateHeureAcceptation IS NOT NULL";
    $query = mysqli_query($database, $sql);
    if(!empty(mysqli_fetch_all($query)))
        return true;
    return false;
}

function haveRequestFrom($database, $userID1, $userID2) {
    return sentRequest($database, $userID2, $userID1);
}
