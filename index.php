<?php

// if (isset($_SESSION['id'])) {
//     echo ("<script>window.location.href = 'login.php';</script>");
//     exit();
// }
// CHECK IF USERID IS SET
session_start();
if (!isset($_SESSION['id_user'])) {
    unset($_SESSION['id_user']);
    unset($_SESSION['access']);
    //var_dump($_SESSION['id']);
    echo ("<script>localStorage.clear();window.location.href = 'login.php';</script>");
    // var_dump($_SESSION['id']);
    //    echo ("<script>localStorage.clear();window.location.href = 'login.php';</script>");
}

// CHECK IF USERID EXIST IN DB
// $userid =  base64_decode($_SESSION['nbscisuserid']);
// $selPersonel = $conn->prepare('SELECT count(personelId) as cnt from tblpersonnel2 where personelId = ?');
// $selPersonel->execute([$userid]);
// $pdetails = $selPersonel->fetch();
// if ($pdetails['cnt'] == 0) {
// echo ("<script>localStorage.clear();window.location.href = './pages/login/login_main.php';</script>");
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Auction House</title>
</head>

<body>
    <div id="nav_content">

    </div>
    <div id="contents">

    </div>
    <!-- ------SCRIPTS---------- -->
    <script src="assets/js/jquery-3.6.3.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <?php if ($_SESSION['access'] == 0) : ?>
        <script src="assets/js/global.js"></script>
    <?php else : ?>
        <script src="assets/js/globalAdmin.js"></script>
    <?php endif ?>
    <script src="assets/js/logout.js"></script>
</body>

</html>