<?php


function db() {
    //set your configs here
    $host = "127.5.96.3";
    $user = "wisdom";
    $db = "zuriphp";
    $password = "";
    $conn = mysqli_connect($host, $user, $password, $db);
    if(!$conn){
        echo "<script> alert('Error connecting to the database') </script>";
    }
    return $conn;

}