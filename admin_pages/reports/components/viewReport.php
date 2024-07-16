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
                        <label><b>REPORTER INFO</b></label>
                        <hr>
                        <table>

                            <tbody>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Date Reported: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">09/20/23</span> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Reporter ID: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">xx1231412</span> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Username: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">Example user 1</span> </td>
                                </tr>
                                <tr>
                                    <td colspan="4">Reason: </td>
                                    <td class="shadow">
                                        <span style="font-size: 15px;">
                                            <p>This is an example text created by the developer to the description based on how the developer perceive it would look like.</p>
                                        </span>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>
                    <div class="col border">
                        <label><b>REPORTED INFO</b></label>
                        <hr>
                        <table>

                            <tbody>

                                <tr>
                                    <td colspan="4">Reported ID: </td>
                                    <td class="shadow">
                                    <td> <span style="font-size: 15px;font-weight:bold">xx1231412</span> </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Username: </td>
                                    <td> <span style="font-size: 15px;font-weight:bold">Example user 1</span> </td>
                                </tr>
                                <tr>
                                    <td colspan="2"></td>
                                    <td colspan="2">Reported Count: </td>
                                    <!-- // can objects or div here to represent the count but better naung number lang -->
                                    <td>
                                        <div style="width:20px" class="bg-danger rounded-circle text-white text-center">
                                            3
                                        </div>
                                    </td>
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
                                <td> <button onclick="approveAuction()" class="btn primary_bg form-control text-white">Report User</button></td>
                                <td> <button onclick="denyAuction()" class="btn btn-danger form-control text-white">Cancel Report</button></td>

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
        alert('Cancelled successfully!')
    }

    function approveAuction() {
        alert('Reported successfully!')
    }

    function cancelAuction() {
        alert('Disabled successfully!')
    }
    D
</script>