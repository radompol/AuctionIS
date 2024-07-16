<?php
require_once '../../../connection.php';

// Example Fetching
// $fetchItems = $conn->prepare("SELECT a.* from item_db a ");
// $fetchItems->execute([]);
// $fetchItems_ = $fetchItems->fetchAll();
?>

<div class="row ">

    <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card">
            <div class="card-body  ">
                <h6 class="card-title text-center">ITEM NUMBER 1</h6>
                <img src="exampleImage.jpg" class="card-image">
            </div>
            <label class="text-center primary_text"><i>Remaining Time</i></label>
            <div id="timer0" class="timer_design"> 00:00:00</div>
            <p class="mx-0 my-1 text-center">Example Item description that describe the item</p>
            <label class="text-center primary_text"><i>Starting Bid</i></label>
            <span style="font-size:15px;" class="mx-0 my-1 text-center">&#8369; 20,000</span>
            <button onclick="viewhandler('2')" class="btn primary_bg m-2 rounded-pill text-white">View</button>
        </div>

    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card">
            <div class="card-body  ">
                <h6 class="card-titltest1234e text-center">ITEM NUMBER 1</h6>
                <img src="exampleImage.jpg" class="card-image">
            </div>
            <label class="text-center primary_text"><i>Remaining Time</i></label>
            <div id="timer1" class="timer_design"> 00:00:00</div>
            <p class="mx-0 my-1 text-center">Example Item description that describe the item</p>
            <label class="text-center primary_text"><i>Starting Bid</i></label>
            <span style="font-size:15px;" class="mx-0 my-1 text-center">&#8369; 20,000</span>
            <button onclick="viewhandler('3')" class="btn primary_bg m-2 rounded-pill text-white">View</button>
        </div>

    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card">
            <div class="card-body  ">
                <h6 class="card-title text-center">ITEM NUMBER 1</h6>
                <img src="exampleImage.jpg" class="card-image">
            </div>
            <label class="text-center primary_text"><i>Remaining Time</i></label>
            <div id="timer2" class="timer_design"> 00:00:00</div>
            <p class="mx-0 my-1 text-center">Example Item description that describe the item</p>
            <label class="text-center primary_text"><i>Starting Bid</i></label>
            <span style="font-size:15px;" class="mx-0 my-1 text-center">&#8369; 20,000</span>
            <button onclick="viewhandler('4')" class="btn primary_bg m-2 rounded-pill text-white">View</button>
        </div>

    </div>
    <div class="col-sm-12 col-md-3 col-lg-3">
        <div class="card">
            <div class="card-body  ">
                <h6 class="card-title text-center">ITEM NUMBER 1</h6>
                <img src="exampleImage.jpg" class="card-image">
            </div>
            <label class="text-center primary_text"><i>Remaining Time</i></label>
            <div id="timer3" class="timer_design"> 00:00:00</div>
            <p class="mx-0 my-1 text-center">Example Item description that describe the item</p>
            <label class="text-center primary_text"><i>Starting Bid</i></label>
            <span style="font-size:15px;" class="mx-0 my-1 text-center">&#8369; 20,000</span>
            <button onclick="viewhandler('5')" class="btn primary_bg m-2 rounded-pill text-white">View</button>
        </div>

    </div>



</div>
<script>
    $(document).ready(function() {

        new Timer('timer1', 3, 30, 10).startTimer();
        new Timer('timer0', 2, 30, 10).startTimer();
    });

    function viewhandler(item_id) {

        $.post("pages/viewProduct/viewProduct_main.php", {
                item_id
            },
            function(data) {
                $("#contents").html(data);
            }

        );
    }
</script>