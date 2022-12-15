<div class="row">
    <?php 
        include("dbconnection.php");

        require '../function.php';
        $db = new DatabaseClass();
        $data = $db->select('select * from survey where survey_id = '.$_POST["id"].' order by descriptions asc');
        if(count($data) > 0){

            foreach ($data as $key => $value) {
               $survey_id = $value["survey_id"];
               $descriptions = $value["descriptions"];

               $data2 = $db->select('select * , (SELECT COUNT(*) FROM alumni_evulation WHERE bullet_id = bs.bullet_id ) AS tota_alumni_survey from bullet_survey bs where survey_id = '.$survey_id.' order by descriptions asc');
                
               if(count($data2)) {
                ?>
                <div class="col-lg-12">
                    <div class="au-card au-card--bg-blue au-card-top-countries ">
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