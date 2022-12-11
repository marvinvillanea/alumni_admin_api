<?php

if(isset($_POST["update_jobs"])){
    updateJob($db);
} 
?>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Job List</h3>
              
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Logo</th>
                                <th>Company Name</th>
                                <th>Job Title</th>
                                <th>Salary Range</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sy = $db->select("SELECT * FROM job order by created_at desc");
                                if(count($sy) > 0){
                                    foreach ($sy as $key => $value) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td><?php echo $value["job_id"]; ?></td>
                                            <td>
                                                <span class="block-email"><image src="<?php echo $value["job_image"]; ?>" width="60"></span>
                                            </td>
                                            <td><?php echo $value["company_name"]; ?></td>
                                            <td><?php echo $value["job_title"]; ?></td>
                                            <td><?php echo $value["min_salary"] . ' - '. $value["max_salary"] ; ?></td>
                                            <td><?php echo $value["created_at"]; ?></td>
                                            <td>
                                            <button class="btn btn-outline-danger" id="<?php echo $value["job_id"] ?>" onclick="showMOdalDelete(this.id)" >
                                            <i class="fa fa-trash" style="font-size:24px" ></i>
                                            </button> | 
                                            <button class="btn btn-outline-primary"id="<?php echo $value["job_id"] ?>" onclick="showModalViewJob(this.id)" >
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
    function showMOdalDelete(jobid){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();
        $('#pacel_no').append('<span id="parcel_no_value">JOB ID #: '+ jobid +'</span>');
        $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">Are you sure you want to delete this JOB ID : '+jobid +'</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button><button type="button" class="btn btn-warning" onclick="deleteJob('+jobid+')">Confirmed</button></div></div>');
    }

    function deleteJob(jobid){
        $.post(
            "api/deletejob.php",
            {jobid: jobid},
            function(data){ 
                location.reload(true); 
            }
        );
    }

    function showModalViewJob(jobid){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">JOB ID #: '+ jobid +'</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/view_details_job.php",
            {jobid: jobid},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">'+data +'</div><div class="modal-footer"></div></div>');
            }
        );
    }
</script>