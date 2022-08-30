<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "zimzmigh_0667", "123456$$", "zimzmigh_0667");
if ($mysqli == false) {
    print("error");
} else {

    $InputValue = $_POST["value"];
    $item = $_POST["item"];
    $id = $_SESSION["id"];

    $mysqli->query("UPDATE `users` SET `$item`='$InputValue' WHERE `$id`='$id'");

    $_SESSION[$item] = $inputValue;
    
}