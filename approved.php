

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                 <!-- DATA TABLE -->
                 <h3 class="title-5 m-b-35">Alumni | Approved</h3>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>name</th>
                                    <th>course</th>
                                    <th>School year</th>
                                    <th>date</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $user_to_verify = $db->select("
                                    SELECT 
                                    *,
                                    concat(last_name, ', ', first_name) as fullname,
                                    (SELECT concat(code,' - ', descriptions ) FROM course where course_id = pi.course_id ) as code,
                                    (SELECT sy FROM sy where sy_id = pi.sy_id ) as sy,
                                    case when user_status = 0 then 'Active' else 'Unable' end as type,
                                    case when user_status = 0 then 'Unable' else 'Active' end as stat
                                    FROM users
                                    inner join personal_info pi using (user_id)
                                    where status = 1 and user_type = 2");
                                    if(count($user_to_verify) > 0){
                                        foreach ($user_to_verify as $key => $value) {
                                            ?>
                                            <tr class="tr-shadow">
                                                <td><?php echo ucwords($value["fullname"]); ?></td>
                                                <td>
                                                    <span class="block-email"><?php echo $value["code"]; ?></span>
                                                </td>
                                                <td>
                                                    <span class="block-email"><?php echo $value["sy"]; ?></span>
                                                </td>
                                                <td><?php echo $value["created_at"]; ?></td>
                                                <td>
                                                    <span class="status--process"><?php echo $value["type"] ?></span>
                                                </td>
                                                <td>
                                                <button type="button" class="btn btn-outline-danger" id="<?php echo $value["user_id"] ?>" name="<?php echo $value["stat"] ?>" onclick="updateUserStatus(this.id, this.name)" >
                                                    <!-- <i class="fa fa-ban" aria-hidden="true"></i>&nbsp;  -->
                                                    <?php echo $value["stat"] ?> 
                                                   
                                                </button>
                                                <button type="button" class="btn btn-outline-primary" id="<?php echo $value["user_id"] ?>" onclick="showModal(this.id)">
                                                    <!-- <i class="fa fa-eye"></i>&nbsp;  -->
                                                    View
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
  function showModal(user_id,name){
    //    $('#scrollmodal').toggle();
    //    alert('dafdaf');
        $('#scrollmodal').modal('show')
        $('#parcel_no_value').remove();
        $('#parcel_details').remove();

        $('#pacel_no').append('<span id="parcel_no_value">User ID #: '+ user_id +'</span>');
        // $('#parcel_modal_body').append('<div id="parcel_details">Name: Marvin villanea</div>');
        $.post(
            "api/getUsersDetailsView.php",
            {user_id: user_id},
            function(data){ 
                // location.reload(true); 
                $('#parcel_modal_body').append(data);
            }
        );
    }

    function updateUserStatus(user_id, name) 
    {
        $.post("api/updateUserStatus.php",{user_id: user_id, name: name}, function(data) 
        { 
            location.reload(true); 
        }
        );
    }
</script>