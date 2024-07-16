<?php

$item_id = $_GET['item_id'];
session_start();
if (!isset($_SESSION['id_user'])) {
    unset($_SESSION['id_user']);
    //var_dump($_SESSION['id']);
    echo ("<script>localStorage.clear();window.location.href = 'login.php';</script>");
    // var_dump($_SESSION['id']);
    //    echo ("<script>localStorage.clear();window.location.href = 'login.php';</script>");
}
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
    <script>
        $(document).ready(function() {
            to_Navigation()
            to_viewBidItem('<?php echo $item_id ?>')
        });

        function to_viewBidItem(item_id) {
            $.post("pages/viewProduct/viewProduct_main.php", {
                item_id
            }, function(data) {
                $("#contents").html(data);
            });
        }

        function to_Navigation() {
            $.post("navigation/nav.php", {}, function(data) {
                $("#nav_content").html(data);
            });
        }
    </script>

</body>

</html>