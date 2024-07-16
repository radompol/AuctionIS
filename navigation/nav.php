<?php
session_start()
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">AUCTION<span style="color:#D6482c">HOUSE</span> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php if ($_SESSION['access'] == 0) : ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a onclick="to_dashboard()" style="cursor: pointer;" class="nav-link active " aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="to_myauction()" style="cursor: pointer;" class="nav-link active " aria-current="page">My Auction</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="to_mybids()" style="cursor: pointer;" class="nav-link active " aria-current="page">My Bids</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="to_aboutus()" style="cursor: pointer;" class="nav-link active " aria-current="page">About Us</a>
                    </li>

                </ul>
                <ul class="navbar-nav justify-content-end ">
                    <li>
                        <form class="d-flex">
                            <button class="btn text-white primary_bg" type="submit">Search</button>
                            <input class="form-control me-2" type="search" placeholder="Search item here" aria-label="Search">

                        </form>
                    </li>
                    <li style="padding-top: 0px;" class=" btn-group ">
                        <a id=" triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;" class="nav-link  "><i class="fa fa-user" style="color:black; background-color:grey; padding:10px; border-radius: 650px;" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="triggerId">
                            <li class="dropdown-item"><a onclick="to_portfolio()" type="button" class="dropdown-item">Profile</a></li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a onclick="logout()" type="button" class="dropdown-item">Logout</a></li>

                        </ul>
                    </li>
                </ul>
            <?php else : ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- <li class="nav-item">
                        <a onclick="to_dashboard()" style="cursor: pointer;" class="nav-link active " aria-current="page">Dashboard</a>
                    </li> -->
                    <li class="nav-item">
                        <a onclick="to_userVerification()" style="cursor: pointer;" class="nav-link active " aria-current="page">User Verification</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="to_itemVerification()" style="cursor: pointer;" class="nav-link active " aria-current="page">Item Verification</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="to_transactionHistory()" style="cursor: pointer;" class="nav-link active " aria-current="page">Transaction History</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="to_reports()" style="cursor: pointer;" class="nav-link active " aria-current="page">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="to_pending()" style="cursor: pointer;" class="nav-link active " aria-current="page">Pending</a>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end ">
                    <li>
                        <form class="d-flex">
                            <button class="btn text-white primary_bg" type="submit">Search</button>
                            <input class="form-control me-2" type="search" placeholder="Search item here" aria-label="Search">

                        </form>
                    </li>
                    <li style="padding-top: 0px;" class=" btn-group ">
                        <a id=" triggerId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="cursor: pointer;" class="nav-link  "><i class="fa fa-user" style="color:black; background-color:grey; padding:10px; border-radius: 650px;" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="triggerId">
                            <li class="dropdown-item disabled">ADMIN</li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a onclick="logout()" type="button" class="dropdown-item">Logout</a></li>

                        </ul>
                    </li>
                </ul>
            <?php endif ?>







        </div>
    </div>
</nav>
<script>
    $(document).ready(function() {
        //to_myauction()
        //to_mybids()
        // // to_aboutus()
        // to_pending()
    });
</script>