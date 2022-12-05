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
           
