<?php

require_once '../connection.php';
//   email: $("#inloginemail").val(),
//       pass: $("#inloginpass").val(),
$email = $_POST['email'];
$password = $_POST['pass'];
// $checkUser = $conn->prepare('SELECT a.id,count(a.id) as cnt from users_db a ');
$checkUser = $conn->prepare('SELECT a.id,a.access,count(a.id) as cnt from users_db a where a.email=? and a.password=?;');
$checkUser->execute([$email, $password]);
$checkUser_ = $checkUser->fetch();

if ($checkUser_['cnt'] > 0) {
    session_start();
    $_SESSION['id_user'] =
        $checkUser_['id'];
    $_SESSION['access'] =  $checkUser_['access'];
    echo 'success';
}
