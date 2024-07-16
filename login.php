<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_SESSION['id_user'])) {

    echo "<script>window.location.href = 'index.php';</script>";
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Auction House</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body class="primary_bg ">
    <div class="bg-white ">
        <div class="container ">
            <h1>AUCTION<span class="primary_text ">HOUSE</span></h1>
        </div>
    </div>
    <div class="container ">


        <div class="row login_style ">
            <!-- <div class="col-sm-12 col-md-6 col-lg-6  ">
                <div class="design-inside ">
                    <div class="logo">
                        <img src="exampleImage.jpg" class="card-image">
                    </div>


                </div>

            </div> -->
            <div class="col-sm-12 col-md-6 col-lg-4 ">
                <div class="border design-inside bg-white  rounded-3">
                    <div class="logo">
                        <!-- <img src="logo.png" alt="Logo"> -->
                    </div>
                    <div class="justify-conten-center bg-success" id="alert-container"></div>

                    <form id="login-form">
                        <div class="mb-3">
                            <label for="username" class="form-label">Email</label>
                            <input placeholder="Enter Email" id="username_text" type="text" name="username" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="pass_text" placeholder="Enter Password" type="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <button id="loginbtnID" type="submit" class="btn primary_bg text-white form-control"> LOGIN</button>
                        </div>
                        <!-- MODAL FOR REGISTRATION  CONTROLLER-->
                        <p for="password" class="form-label">Not registered yet? <a data-bs-toggle="modal" data-bs-target="#modalId4" class="text-primary cursor-pointer">Register Here!</a></p>
                        <div id="error-message" class="text-danger">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- MODAL FOR REGISTRATION -->
    <div class="modal fade" id="modalId4" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header primary_bg">
                    <h5 class="modal-title text-white" id="modalTitleId">REGISTER ACCOUNT</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <label for="">
                        <img src="exampleImage.jpg" class="card-image round">
                    </label>
                    <label>PROFILE PICTURE</label>
                    <input type="file" class="form-control" /> -->
                    <label>NAME</label>
                    <input class="form-control" type="text" placeholder="Enter your name here" />
                    <label>Email</label>
                    <input class="form-control" type="email" placeholder="Enter your email here" />
                    <label>Password</label>
                    <input class="form-control" type="password" placeholder="Enter your password here" />
                    <label>Re-Type Password</label>
                    <input class="form-control" type="password" placeholder="Enter your password here" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn text-white primary_bg">REGISTER</button>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.3.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/login_action.js"></script>
</body>

</html>