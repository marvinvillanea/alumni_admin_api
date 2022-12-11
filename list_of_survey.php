<?php

if(isset($_POST["add_new"])) {
    addQuestion($db);
}
if(isset($_POST["add_new_list"])) {
    addQuestionList($db);
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
                <h3 class="title-5 m-b-35">List of Survey &nbsp;&nbsp; <button class="btn btn-outline-danger" onclick="add_survey()" >
                <i class="fa fa-plus" style="font-size:24px"></i></td> </button></h3> 

                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descriptions</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sy = $db->select("SELECT * FROM survey order by created_at asc");
                                if(count($sy) > 0){
                                    foreach ($sy as $key => $value) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td><?php echo $value["survey_id"]; ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $value["descriptions"]; ?></span>
                                            </td>
                                            <td>
                                                <?php echo $value["created_at"]; ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary" id="<?php echo $value["survey_id"] ?>" name="<?php echo $value["descriptions"] ?>" onclick="showModal(this.id,this.name)">
                                                    View List
                                                </button>
                                                <button type="button" class="btn btn-outline-primary" id="<?php echo $value["survey_id"] ?>" name="<?php echo $value["descriptions"] ?>" onclick="addList(this.id,this.name)">
                                                    Add List
                                                </button>
                                            </td>
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
  function showModal(user_id,name){
    //    $('#scrollmodal').toggle();
    //    alert('dafdaf');
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">'+ name +'</span>');
        $.post(
            "api/getsurvey_bullet.php",
            {user_id: user_id},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append(data);
            }
        );
    }

    function add_survey(){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Add Question</span>');
        $.post(
            "api/view_survey.php",
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">'+data +'</div><div class="modal-footer"></div></div>');
            }
        );
    }

    function addList(survey_id, name){
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">Add List</span>');
        $.post(
            "api/view_survey_list.php",
            {survey_id: survey_id},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append('<div id="parcel_details"><div class="modal-body">'+data +'</div><div class="modal-footer"></div></div>');
            }
        );
    }
</script>