<?php
require_once '../../connection.php';
session_start();
$userID = $_SESSION['id_user'];
$getUserDetails = $conn->prepare('SELECT a.*  from users_db a where a.id=?;');
$getUserDetails->execute([$userID]);
$getUserDetails_ = $getUserDetails->fetch();
?>
<div class="container my-3 ">
    <h3>MY <span class="primary_text">AUCTIONS</span></h3>

    <?php if ($getUserDetails_['account_status'] == 0) : ?>
        <div class="d-flex">
            <h4 class="mx-2">UNVERIFIED</h4>
            <p class="m-0">Not yet verified? </p>
            <!-- //NEW ADDED MODAL FOR VERIFICATION controler -->
            <button type="button" class="btn text-white primary_bg  m-2 btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#modalId">
                Verify Now
            </button>
        </div>

    <?php else : ?>
        <button type="button" data-bs-toggle="modal" data-bs-target="#modalId" class="btn primary_bg text-white"> <i class="fa fa-plus-circle text-white" aria-hidden="true"></i> AUCTION ITEM</button>
    <?php endif ?>
</div>



<div id="auction_display" class="container">
    <!-- CONTENTS HERE -->
</div>




<!-- //Modal -->
<!-- //NEW ADDED MODAL FOR VERIFICATION -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg modal-static" role="document">
        <div class="modal-content">
            <div class="modal-header primary_bg">
                <h5 class="modal-title text-white" id="modalTitleId">ACCOUNT VERIFICATION</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="text-center"> <b>ENTER TWO GOVERNMENT-ISSUED IDENTIFICATION (ID)</b> </p>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p>
                            List of Accepted ID:
                        <ul>
                            <li>ID TYPE 1</li>
                            <li>ID TYPE 2</li>
                            <li>ID TYPE 3</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label> Front (Government ID #1)</label>
                        <input type="file" class="form-control" />
                        <label> Back (Government ID #1)</label>
                        <input type="file" class="form-control" />
                        <label>Name</label>
                        <input type="text" placeholder="Enter Name" class="form-control" />
                    </div>
                </div>
                <p class="text-center"> <b>SECONDARY IDENTIFICATION CARD</b> </p>
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p>
                            List of Accepted ID:
                        <ul>
                            <li>ID TYPE 1</li>
                            <li>ID TYPE 2</li>
                            <li>ID TYPE 3</li>
                        </ul>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <label> Front (Government ID #2)</label>
                        <input type="file" class="form-control" />
                        <label> Back (Government ID #2)</label>
                        <input type="file" class="form-control" />
                        <label>Name</label>
                        <input type="text" placeholder="Enter Name" class="form-control" />
                    </div>
                </div>
                <label>ENTER OTP CODE </label>
                <input type="text" placeholder="Enter XXXXX" class="form-control" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn primary_bg text-white">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header primary_bg">
                <h5 class="modal-title  text-white" id="modalTitleId">Auction An Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <table class="table table-borderless">
                    <!-- //Put ID in input, text-area tags -->
                    <tbody>
                        <tr>
                            <td>
                                <label>Item Name</label>
                                <input class="form-control" type="text" placeholder="Enter Item Name" />
                            </td>
                            <td>
                                <label>Pictures/Proof</label>
                                <input class="form-control" type="file" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Item Description</label>
                                <textarea class="form-control" rows="10" cols="20" placeholder="Enter Description"></textarea>
                            </td>
                            <td>
                                <img src="exampleImage.jpg" class="card-image-viewing">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Asking Price</label>
                                <input class="form-control" type="number" placeholder="Enter Asking Price" />
                            </td>
                            <td>
                                <label>Ending Date and Time</label>
                                <input class=" form-control" type="date" />
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn primary_bg text-white">Auction Now</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
</script>






<script>
    $(document).ready(function() {
        fetchData()
    });

    function fetchData() {

        $.post("pages/myauction/components/fetchMylist.php", {

            },
            function(data) {
                $('#auction_display').html(data)
            }

        );
    }


    function Timer(id, hours, minutes, seconds) {
        this.id = id;
        this.hours = hours;
        this.minutes = minutes;
        this.seconds = seconds;
        this.timerInterval = null;
    }

    // Set initial time for a specific timer
    Timer.prototype.setTime = function() {
        this.updateTimerDisplay();
    };

    // Start the timer for a specific timer
    Timer.prototype.startTimer = function() {
        this.setTime();
        this.timerInterval = setInterval(this.updateTimer.bind(this), 1000);
    };

    // Stop the timer for a specific timer
    Timer.prototype.stopTimer = function() {
        clearInterval(this.timerInterval);
    };

    // Update the timer display for a specific timer
    Timer.prototype.updateTimer = function() {
        this.seconds++;
        if (this.seconds >= 60) {
            this.seconds = 0;
            this.minutes++;
            if (this.minutes >= 60) {
                this.minutes = 0;
                this.hours++;
            }
        }

        this.updateTimerDisplay();
    };

    // Update the timer display element for a specific timer
    Timer.prototype.updateTimerDisplay = function() {
        const formattedTime = this.formatTime(this.hours) + ':' + this.formatTime(this.minutes) + ':' + this.formatTime(this.seconds);
        document.getElementById(this.id).textContent = formattedTime;
    };

    // Format time with leading zeros
    Timer.prototype.formatTime = function(time) {
        return time < 10 ? '0' + time : time;
    };
</script>