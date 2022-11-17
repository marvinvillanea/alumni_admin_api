

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
           
