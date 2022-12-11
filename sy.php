<?php
if(isset($_POST["add_new"])) {
    addNewSY($db);
}

if(isset($_POST["update"])){
    updateSY($db);
}
?>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">School Year &nbsp;&nbsp; <button class="btn btn-outline-danger" onclick="add_sy()" >
                <i class="fa fa-plus" style="font-size:24px"></i></td> </button></h3> 
              
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>School Year</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sy = $db->select("SELECT * FROM sy order by sy desc");
                                if(count($sy) > 0){
                                    foreach ($sy as $key => $value) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td><?php echo $value["sy_id"]; ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $value["sy"]; ?></span>
                                            </td>
                                            <td><?php echo $value["created_at"]; ?></td>
                                            <td>
                                            <button class="btn btn-outline-danger" id="<?php echo $value["sy_id"] ?>" onclick="showMOdalDelete(this.id)" >
                                            <i class="fa fa-trash" style="font-size:24px" ></i>
                                            </button> | 
                                            <button class="btn btn-outline-primary"id="<?php echo $value["sy_id"] ?>" onclick="showModalViewJob(this.id)" >
                                            <i class="fa fa-edit" style="font-size:24px"></i></td>
                                            </button>
                                        </tr>
                                        <?php
                                    }
                                    
                                } else {
                                    ?>
                                    <tr class="tr-shadow">
                                        <td colspan="7">
                                            No data found!
                                        </td>
                                    </tr>
                                    <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
</div>
           

<!-- modal scroll -->
<div class="modal fade" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="scrollmodalLabel" >
                    <div id="pacel_no">
                         <span id="parcel_no_value"></span>
                    </div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="parcel_modal_body">
                <div id="parcel_details"></div>
            </div>
           
        </div>
    </div>
</div>

<script type="text/javascript">
    function add_sy(){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Add School Year</span>');
        $.post(
            "api/view_school_year.php",
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">'+data +'</div><div class="modal-footer"></div></div>');
            }
        );
    }

    function showMOdalDelete(sy_id){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();
        $('#pacel_no').append('<span id="parcel_no_value">SY ID #: '+ sy_id +'</span>');
        $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">Are you sure you want to delete this SY ID : '+sy_id +'</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button><button type="button" class="btn btn-warning" onclick="deleteJob('+sy_id+')">Confirmed</button></div></div>');
    }
    function deleteJob(sy_id){
        $.post(
            "api/delete_sy.php",
            {sy_id: sy_id},
            function(data){ 
                location.reload(true); 
            }
        );
    }

    function showModalViewJob(sy_id){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">SY ID #: '+ sy_id +'</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/view_school_year.php",
            {sy_id: sy_id},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">'+data +'</div><div class="modal-footer"></div></div>');
            }
        );
    }
</script>