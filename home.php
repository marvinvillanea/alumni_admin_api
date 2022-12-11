<?php 
    $getHomeDashDAta = "select (select COUNT(*) FROM users WHERE STATUS = 1 AND user_status = 0) AS member_active, (select COUNT(*) FROM users) AS total_registered, (select COUNT(*) FROM job) AS total_jobs, 
    (select COUNT(*) FROM job WHERE DATE(created_at) = DATE(NOW())) AS total_jobs_today";
    $getHomeDashDAta = $db->select($getHomeDashDAta);
 
?>
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
                                    <h2><?php  echo $getHomeDashDAta[0]["member_active"]  ?></h2>
                                    <span>members active</span>
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
                                    <h2><?php  echo $getHomeDashDAta[0]["total_registered"]  ?></h2>
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
                                    <h2><?php  echo $getHomeDashDAta[0]["total_jobs"]  ?></h2>
                                    <span>total job offered</span>
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
                                    <h2><?php  echo $getHomeDashDAta[0]["total_jobs_today"]  ?></h2>
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
                <?php 
                    $data = $db->select('select * from survey order by descriptions asc');
                    if(count($data) > 0){

                        foreach ($data as $key => $value) {
                           $survey_id = $value["survey_id"];
                           $descriptions = $value["descriptions"];

                           $data2 = $db->select('select * , (SELECT COUNT(*) FROM alumni_evulation WHERE bullet_id = bs.bullet_id ) AS tota_alumni_survey from bullet_survey bs where survey_id = '.$survey_id.' order by descriptions asc');
                            
                           if(count($data2)) {
                            ?>
                            <div class="col-lg-6">
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-30">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <h4 style="color:white"><?php echo ucwords($descriptions) ?></h4>    
                                            <table class="table table-top-countries">
                                                <tbody>
                                                <?php 
                                                       foreach ($data2 as $key => $value) {
                                                            $bullet_id = $value["bullet_id"];
                                                            $list_descriptions = $value["descriptions"];
                                                            $tota_alumni_survey = $value["tota_alumni_survey"];
                                                            ?>
                                                                <tr>
                                                                    <td><?php echo $list_descriptions ?></td>
                                                                    <td class="text-right"><?php echo $tota_alumni_survey ?></td>
                                                                </tr>
                                                            <?php
                                                       }
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php
                           } 
                        }
                        

                    }
                ?>

            </div>


        </div>
    </div>
</div>
<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
<script type="text/javascript">
//   function updateStatus(user_id, name) 
//   {
//     $.post("api/confirmation.php",{user_id: user_id, name: name}, function(data) 
//     { 
//         location.reload(true); 
//     }
//     );
//   }
</script>