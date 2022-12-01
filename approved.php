

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
                                    case when status_user = 1 then 'Active' else 'Inactive' end as type
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
                                                <button type="button" class="btn btn-outline-danger" id="<?php echo $value["user_id"] ?>" name="reject" onclick="updateStatus(this.id, this.name)">
                                                        <i class="fa fa-map-marker"></i>&nbsp; Reject</button>
                                                    <button type="button" class="btn btn-outline-warning" id="<?php echo $value["user_id"] ?>"  name="confirm" onclick="updateStatus(this.id, this.name)">
                                                        <i class="fa fa-map-marker"></i>&nbsp; Confirm</button>
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
           
<script type="text/javascript">
  function updateStatus(user_id, name) 
  {
    $.post("api/confirmation.php",{user_id: user_id, name: name}, function(data) 
    { 
        location.reload(true); 
    }
    );
  }
</script>