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
                                <th>Event Name</th>
                                <th>When</th>
                                <th>Where</th>
                                <th>Descriptions</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sy = $db->select("SELECT *, (case when status = 1 then 'DONE' else 'ACTIVE' end ) as status_event FROM events order by created_at desc");
                                if(count($sy) > 0){
                                    foreach ($sy as $key => $value) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td><?php echo $value["event_id"]; ?></td>
                                            <td>
                                                <span class="block-email"><image src="<?php echo $value["banner"]; ?>" width="60"></span>
                                            </td>
                                            <td><?php echo $value["event_name"]; ?></td>
                                            <td><?php echo $value["when"]; ?></td>
                                            <td><?php echo $value["where"]; ?></td>
                                            <td><?php echo $value["desciptions"]; ?></td>
                                            <td><span style="<?php echo  ($value["status_event"] == 'ACTIVE')? 'color:green' : 'color:red'; ?>"><?php echo $value["status_event"]; ?></span></td>
                                            <td><i class="fa fa-trash" style="font-size:24px" ></i> | <i class="fa fa-edit" style="font-size:24px"></i></td>
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
           
