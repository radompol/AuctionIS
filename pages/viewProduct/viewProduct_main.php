<?php
//GET HERE THROUGH POST YOUR ITEM_ID
if (isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
}

?>
<div class="container">
    <h5><i onclick="to_dashboard()" class="cursor-pointer fa fa-arrow-left" aria-hidden="true">BACK</i></h5>
    <div class="row">
        <div class="card  col-sm-12 col-md-8 col-lg-8">

            <div class="card-body">
                <h5 class="card-title ">ITEM BIDDING</h5>
                <p class="card-text primary_text text-center title_item">EXAMPLE ITEM 1</p>
                <table>

                    <tbody>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Remaining Time: </td>
                            <td>00:00:00</td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">Starting Bid: </td>
                            <td> <span style="font-size: 20px;font-weight:bold">&#8369; 3000.00</span> </td>
                        </tr>
                        <tr>

                            <td colspan="4">Item Description: </td>
                            <td>
                                <p class="m-0">This is an example text to be displayed as a description to test if the display is working as predicted by the developer</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="exampleImage.jpg" class="w-100 d-block" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img src="exampleImage.jpg" class="w-100 d-block" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img src="exampleImage.jpg" class="w-100 d-block" alt="Third slide">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="row">
                    <table>
                        <tbody>
                            <tr>
                                <td> <button class="btn primary_bg form-control">Place Bid</button></td>
                                <td> <input class="form-control" type="numbers" placeholder="Enter Bid Amount" /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="card shadow col-sm-12 col-md-4 col-lg-4 ">
            <!-- <img style="align-self: center;" src="exampleImage.jpg" class="card-img-top card-image-viewing" alt="Card image"> -->
            <div class="card-body">
                <h5 class="card-title ">ITEM BIDDER LIST</h5>
                <hr>
                <div class="table-responsive">
                    <table class="table table-responsive table-borderless">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name </th>
                                <th>Bid</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>xx231</td>
                                <td>user example Name</td>
                                <td>&#8369; 3000.00</td>
                            </tr>
                            <tr>
                                <td>x214231</td>
                                <td>user example Name</td>
                                <td>&#8369; 3500.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

    </div>


</div>