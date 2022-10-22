<!-- MAIN CONTENT-->
<div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-wrap">
                        <h2 class="title-1">Dashboard</h2>
                        <!-- <button class="au-btn au-btn-icon au-btn--blue">
                            <i class="zmdi zmdi-plus"></i>add item</button> -->
                    </div>
                </div>
            </div>
            <div class="row m-t-25">
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c1">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>0</h2>
                                    <span>members online</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart1"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c2">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-account-o"></i>
                                </div>
                                <div class="text">
                                    <h2>0</h2>
                                    <span>total registered</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c3">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                                <div class="text">
                                    <h2>0</h2>
                                    <span>job offered</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="overview-item overview-item--c4">
                        <div class="overview__inner">
                            <div class="overview-box clearfix">
                                <div class="icon">
                                    <i class="zmdi zmdi-calendar-note"></i>
                                </div>
                                <div class="text">
                                    <h2>0</h2>
                                    <span>total jobs today</span>
                                </div>
                            </div>
                            <div class="overview-chart">
                                <canvas id="widgetChart4"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="au-card recent-report">
                        <div class="au-card-inner">
                            <h3 class="title-2">recent reports</h3>
                            <div class="chart-info">
                                <div class="chart-info__left">
                                    <div class="chart-note">
                                        <span class="dot dot--blue"></span>
                                        <span>products</span>
                                    </div>
                                    <div class="chart-note mr-0">
                                        <span class="dot dot--green"></span>
                                        <span>services</span>
                                    </div>
                                </div>
                                <div class="chart-info__right">
                                    <div class="chart-statis">
                                        <span class="index incre">
                                            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                                        <span class="label">products</span>
                                    </div>
                                    <div class="chart-statis mr-0">
                                        <span class="index decre">
                                            <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                                        <span class="label">services</span>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-report__chart">
                                <canvas id="recent-rep-chart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="au-card chart-percent-card">
                        <div class="au-card-inner">
                            <h3 class="title-2 tm-b-5">char by %</h3>
                            <div class="row no-gutters">
                                <div class="col-xl-6">
                                    <div class="chart-note-wrap">
                                        <div class="chart-note mr-0 d-block">
                                            <span class="dot dot--blue"></span>
                                            <span>products</span>
                                        </div>
                                        <div class="chart-note mr-0 d-block">
                                            <span class="dot dot--red"></span>
                                            <span>services</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="percent-chart">
                                        <canvas id="percent-chart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Student Confirmation</h3>
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
                                    $user_to_verify = $db->select("SELECT * FROM users where status = 0 and user_type = 2");
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
                                                    <span class="status--process">Pending</span>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-warning" id="<?php echo $value["user_id"] ?>" onclick="updateStatus(this.id, this.name)">
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

            <!-- <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
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