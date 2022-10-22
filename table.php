

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">Alumni List</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <div class="rs-select2--light rs-select2--md">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--light rs-select2--sm">
                            <select class="js-select2" name="time">
                                <option selected="selected">Today</option>
                                <option value="">3 Days</option>
                                <option value="">1 Week</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                    </div>
                    <div class="table-data__tool-right">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <i class="zmdi zmdi-plus"></i>add item</button>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                            <select class="js-select2" name="type">
                                <option selected="selected">Export</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
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
                                $user_to_verify = $db->select("SELECT * FROM users where status = 1 and user_type = 2");
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
           
