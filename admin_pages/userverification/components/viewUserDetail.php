<?php
//GET HERE THROUGH POST YOUR ITEM_ID
if (isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
}

?>
<div class="container">

    <div class="row">
        <div class="card  col-sm-12 col-md-12 col-lg-12">

            <div class="card-body">

                <!-- <p class="card-text primary_text text-center title_item">EXAMPLE ITEM 1</p> -->
                <div class="row">
                    <div class="col border">
                        <label><b>PERSONAL INFO</b></label>
                        <hr>
                        <table>

                            <tbody>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Account Created: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">June 9, 2023 10:30pm</span> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Email: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">example@gmail.com</span> </td>
                                </tr>
                                <tr>
                                    <td colspan="4">Username: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">Example user 1</span> </td>
                                </tr>
                                <tr>
                                    <!-- //Fetched by bday -->
                                    <td colspan="4">Age: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">32</span> </td>
                                </tr>
                                <tr>
                                    <!-- //Fetched by bday -->
                                    <td colspan="4">Contact: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">0975718232</span> </td>
                                </tr>
                                <tr>
                                    <!-- //Fetched by bday -->
                                    <td colspan="4">Address: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">0975718232</span> </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="col border">
                        <label><b>CREDENTIALS</b></label>
                        <hr>
                        <table>

                            <tbody>

                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Email: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">exampleImage1.png</span>
                                        <img src="exampleImage.jpg" class="card-image">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4">Username: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">exampleImage2.png</span> <img src="exampleImage.jpg" class="card-image"></td>
                                </tr>
                                <tr>
                                    <td colspan="4">Username: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">exampleImage3.png</span><img src="exampleImage.jpg" class="card-image"> </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>


                <div class="row">

                    <!-- //JUST PUT If STATEMENT HERE  -->
                    <!-- //IF AUCTION STATUS IS NOT POSTED -->
                    <table>
                        <tbody>
                            <tr>
                                <td> <button onclick="approveAuction()" class="btn primary_bg form-control text-white">Verify Account</button></td>
                                <td> <button onclick="denyAuction()" class="btn btn-danger form-control text-white">Disapprove Account</button></td>

                            </tr>
                        </tbody>
                    </table>

                    <!-- //ELSE IF AUCTION STATUS IS POSTED -->
                    <!-- <table>
                            <tbody>
                                <tr>
                                    <td> <button onclick="cancelAuction()" class="btn btn-danger form-control text-white">Account Disable</button></td>

                                  
                                </tr>
                            </tbody>
                        </table> -->

                </div>

            </div>
        </div>



    </div>


</div>
<script>
    function denyAuction() {
        alert('Disapproved successfully!')
    }

    function approveAuction() {
        alert('Verified successfully!')
    }

    function cancelAuction() {
        alert('Disabled successfully!')
    }
    D
</script>