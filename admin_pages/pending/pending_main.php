<div class="container">
    <div class="card shadow my-2">
        <div class="card-head primary_bg">
            <h5 class="mx-2 text-white">PENDING TRANSACTION LIST</h5>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless table-striped">
                    <thead class="shadow">
                        <tr>
                            <th>Winner ID</th>
                            <th>Username</th>
                            <th>End Date</th>
                            <th>Item Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>xxxx23213</td>
                            <td>Example user</td>
                            <td>09/25/23</td>
                            <td>Item no 1 </td>
                            <td> <img src="exampleImage.jpg" class="card-image"></td>
                            <td>
                                <p onclick="fetchDetails(23)" data-bs-toggle="modal" data-bs-target="#modalId5" class="cursor-pointer"> <i style="font-size:20px" class="fa fa-eye text-success " aria-hidden="true"> </i> View</p>
                                <!-- <p class="cursor-pointer" onclick="to_remove()"> <i style="font-size:20px" class="fa fa-trash text-danger " aria-hidden="true"></i> Remove</p> -->


                            </td>
                        </tr>
                        <tr>
                            <td>xxxx23213</td>
                            <td>Example user</td>
                            <td>09/25/23</td>
                            <td>Item no 1 </td>
                            <td> <img src="exampleImage.jpg" class="card-image"></td>
                            <td>
                                <!-- //insert data index here -->
                                <p onclick="fetchDetails(23)" data-bs-toggle="modal" data-bs-target="#modalId5" class="cursor-pointer"> <i style="font-size:20px" class="fa fa-eye text-success " aria-hidden="true"> </i> View</p>
                                <!-- <p class="cursor-pointer" onclick="to_remove()"> <i style="font-size:20px" class="fa fa-trash text-danger " aria-hidden="true"></i> Remove</p> -->


                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>





<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="modalId5" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header primary_bg">
                <h5 class="modal-title text-white" id="modalTitleId">PENDING TRANSACTION DETAILS</h5>
                <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id='item_Details_disp'>
                    <!-- //Details here -->
                </div>
            </div>

        </div>
    </div>
</div>




<script>
    function to_remove() {
        alert('Item is removed from auction.')
    }

    function fetchDetails(item_id) {
        $.post("admin_pages/pending/components/viewItemDetail.php", {
                item_id
            },
            function(data) {
                $('#item_Details_disp').html(data)
            }

        );
    }
</script>