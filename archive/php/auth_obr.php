<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
$mysqli = mysqli_connect("localhost", "zimzmigh_0667", "123456$$", "zimzmigh_0667");
if ($mysqli == false) {
    print("error");
} else {

$email = trim(mb_strtolower($_POST["email"]));
$pass = trim($_POST["pass"]);

$result = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email'");
$result = $result->fetch_assoc();

if (password_verify($pass,$result["pass"])) {
    echo "ok";
    $_SESSION["name"] = $result["name"];
    $_SESSION["lastname"] = $result["lastname"];
    $_SESSION["email"] = $result["email"];
    $_SESSION["id"] = $result["id"];
} else {
    echo "user_not_found";
}

// var_dump($result["pass"]);

// if ($result->num_rows == 0) {
//     echo "Пользователя нет";
// } else {
//     echo "ok";
// }
}