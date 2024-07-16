  <div class="row my-2 ">
      <div class="col-12">
          <div class="card my-1">
              <div class="card-body bg-light">
                  <div class="row ">
                      <div class="col-sm-12 col-md-4 col-lg-4">
                          <img src="exampleImage.jpg" class="card-image-viewing">
                      </div>
                      <div class="col-sm-12 col-md-4 col-lg-6">
                          <p class="my-0">Item Name: <b>Bike Original White</b> </p>
                          <p class="my-0">Currently Winning Bidder:<b> Bidder 1</b> </p>
                          <p class="my-0">Highest Bid Price: <b> &#8369; 20,000</b></p>
                          <p class="my-3 text-sizing">Time Remaining: <b>
                                  <div id="timer3" class="timer_design text_space title_item"> 00 :00 :00</div>
                              </b></p>
                      </div>
                      <div class="col-sm-12 col-md-4 col-lg-2 ">


                          <button onclick="viewhandler_myAuction('5')" class="btn primary_bg m-2 rounded-pill text-white btn_set form-control">View Auction</button>
                      </div>
                  </div>

              </div>
          </div>
          <div class="card my-1">
              <div class="card-body bg-light">
                  <div class="row ">
                      <div class="col-sm-12 col-md-4 col-lg-4">
                          <img src="exampleImage.jpg" class="card-image-viewing">
                      </div>
                      <div class="col-sm-12 col-md-4 col-lg-6">
                          <p class="my-0">Item Name: <b>Bike Original White</b> </p>
                          <p class="my-0">Currently Winning Bidder:<b> Bidder 1</b> </p>
                          <p class="my-0">Highest Bid Price: <b> &#8369; 20,000</b></p>
                          <p class="my-3 text-sizing">Time Remaining: <b>
                                  <div id="timer4" class="timer_design text_space title_item"> 00 :00 :00</div>
                              </b></p>
                      </div>
                      <div class="col-sm-12 col-md-4 col-lg-2 ">


                          <button onclick="viewhandler_myAuction('5')" class="btn primary_bg m-2 rounded-pill text-white btn_set form-control">View Auction</button>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>
  <script>
      $(document).ready(function() {

          new Timer('timer3', 3, 30, 10).startTimer();
          new Timer('timer4', 3, 30, 10).startTimer();
      });

      function viewhandler_myAuction(item_id) {

          $.post("pages/myauction/components/viewAuction.php", {
                  item_id,

              },
              function(data) {
                  $("#contents").html(data);
              }

          );
      }
  </script>