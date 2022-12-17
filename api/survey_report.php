<div class="row">
    <?php 
        include("dbconnection.php");

        require '../function.php';
        $db = new DatabaseClass();
         if(isset($_POST["id"]) && isset($_POST["course_id"]) && isset($_POST["year"]) && isset($_POST["age"])   ) {
            $id = $_POST["id"];
            $course_id = $_POST["course_id"];
            $year = $_POST["year"];
            $age = $_POST["age"];

            $andddd = ' ';
            if($course_id != 'all') {
                $andddd .= 'and course_id = '.$course_id;
            }

            $andddd .=' ';
            if($year != 'all') {
                $andddd .= 'and sy_id = '.$year;
            }

            $andddd .=' ';
            if($age != 'all') {
                $andddd .= 'and age = "'.$age.'" ';
            }
          
         }

        

        $data = $db->select('select * from survey where survey_id = '.$_POST["id"].' order by descriptions asc');
        if(count($data) > 0){

            foreach ($data as $key => $value) {
               $survey_id = $value["survey_id"];
               $descriptions = $value["descriptions"];

               $sql = 'select bullet_id, descriptions, ( case when total_count is NULL then 0 ELSE total_count END ) tota_alumni_survey FROM bullet_survey  LEFT JOIN  
        (SELECT ae.bullet_id, COUNT(ae.bullet_id) AS total_count FROM survey_information INNER JOIN alumni_evulation ae USING(survey_info_id) WHERE ae.bullet_id IN ( SELECT bullet_id FROM bullet_survey WHERE survey_id = '.$survey_id.'  ) '.$andddd.' GROUP BY ae.bullet_id ) AS survey_count USING(bullet_id) WHERE survey_id = '.$survey_id.' ';
               $data2 = $db->select($sql);
                
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