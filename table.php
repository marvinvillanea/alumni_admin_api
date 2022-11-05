

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Alumni List</h3>
              
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>
                                    <label class="au-checkbox">
                                        <input type="checkbox">
                                        <span class="au-checkmark"></span>
                                    </label>
                                </th>
                                <th>name</th>
                                <th>email</th>
                                <th>date</th>
                                <th>status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $user_to_verify = $db->select("SELECT * FROM users where status = 1 and user_type = 2 ");
                                if(count($user_to_verify) > 0){
                                    foreach ($user_to_verify as $key => $value) {
                                        ?>
                                        <tr class="tr-shadow">
                                            <td>
                                                <label class="au-checkbox">
                                                    <input type="checkbox">
                                                    <span class="au-checkmark"></span>
                                                </label>
                                            </td>
                                            <td><?php echo $value["username"]; ?></td>
                                            <td>
                                                <span class="block-email"><?php echo $value["email"]; ?></span>
                                            </td>
                                            <td><?php echo $value["created_at"]; ?></td>
                                            <td>
                                                <span class="status--process">Active</span>
                                            </td>
                                            <td>
                                                <!-- <button type="button" class="btn btn-outline-warning" id="<?php echo $value["user_id"] ?>" onclick="updateStatus(this.id, this.name)">
                                                    <i class="fa fa-map-marker"></i>&nbsp; Confirm</button> -->
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
           
