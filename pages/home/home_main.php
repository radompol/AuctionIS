<?php
require_once '../../connection.php';
session_start();
$userID = $_SESSION['id_user'];
$getUserDetails = $conn->prepare('SELECT a.*  from users_db a where a.id=?;');
$getUserDetails->execute([$userID]);
$getUserDetails_ = $getUserDetails->fetch();
?>
<div class="container">
    <h1>WELCOME! <span class="primary_text"><b><?php echo $getUserDetails_['lastname'] . ', ' . $getUserDetails_['firstname']; ?></b></span></h1>
    <?php if ($getUserDetails_['account_status'] == 0) : ?>
        <div class="d-flex">
            <h4 class="mx-2">UNVERIFIED</h4>
            <p class="m-0">Not yet verified? </p>
            <!-- //NEW ADDED MODAL FOR VERIFICATION controler -->
            <button type="button" class="btn text-white primary_bg  m-2 btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#modalId">
                Verify Now
            </button>
        </div>
    <?php endif ?>
    <div id="items_diplay_0">
        <!-- CONTENTS HERE -->
    </div>



</div>

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


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
</script>

<script>
    $(document).ready(function() {

        fetchData()

    });

    function fetchData() {

        $.post("pages/home/components/fetchAuctionItems.php", {},
            function(data) {
                $('#items_diplay_0').html(data)
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