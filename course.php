<?php
if(isset($_POST["add_new_course"])) {
    addNewCourse($db);
}

if(isset($_POST["update_course"])){
    updateCourse($db);
}
?>
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Course List &nbsp;&nbsp; <button class="btn btn-outline-danger" tooltip="Add Course" onclick="addcourse()" >
                <i class="fa fa-plus" style="font-size:24px"></i></td> </button></h3> 
              
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Code</th>
                                <th>Descriptions</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $course = $db->select("SELECT * FROM course order by descriptions asc");
                                if(count($course) > 0){
                                    foreach ($course as $key => $value) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td><?php echo $value["course_id"]; ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $value["code"]; ?></span>
                                            </td>
                                            <td><?php echo ucwords($value["descriptions"]); ?></td>
                                            <td><?php echo $value["created_at"]; ?></td>
                                            <td>
                                            <button class="btn btn-outline-danger" id="<?php echo $value["course_id"] ?>" onclick="showMOdalDelete(this.id)" >
                                            <i class="fa fa-trash" style="font-size:24px" ></i>
                                            </button> | 
                                            <button class="btn btn-outline-primary"id="<?php echo $value["course_id"] ?>" onclick="showModalViewJob(this.id)" >
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
<!--                         
        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                </div>
            </div>
        </div> -->
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
    function addcourse(){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Add Course</span>');
        $.post(
            "api/view_course.php",
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">'+data +'</div><div class="modal-footer"></div></div>');
            }
        );
    }

    function showMOdalDelete(course_id){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();
        $('#pacel_no').append('<span id="parcel_no_value">COURSE ID #: '+ course_id +'</span>');
        $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">Are you sure you want to delete this COURSE ID : '+course_id +'</div><div class="modal-footer"><button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button><button type="button" class="btn btn-warning" onclick="deleteJob('+course_id+')">Confirmed</button></div></div>');
    }
    function deleteJob(course_id){
        $.post(
            "api/delete_course.php",
            {course_id: course_id},
            function(data){ 
                location.reload(true); 
            }
        );
    }

    function showModalViewJob(course_id){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">COURSE ID #: '+ course_id +'</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/view_course.php",
            {course_id: course_id},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">'+data +'</div><div class="modal-footer"></div></div>');
            }
        );
    }
</script>