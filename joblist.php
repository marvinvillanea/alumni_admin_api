<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">School Year</h3>
              
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
           
