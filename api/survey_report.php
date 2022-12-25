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


            $where_survey = '';
            if($id != 'all') {
                $where_survey .= 'where survey_id = '.$_POST["id"];
            }

            $where_course_id = '';
            if($course_id != 'all') {
                $where_course_id .= 'where course_id = '.$course_id;
            }

            $where_sy_id = '';
            if($year != 'all') {
                $where_sy_id .= 'where sy_id = '.$year;
            }

            $get_age_range = array();
            if($age != 'all') {
                array_push($get_age_range, $age);
            }

                $get_code = $db->Select('select code,course_id from course '.$where_course_id.' ');
                $headers_table = array();
                $query_columnn = "";

                foreach ($get_code as $key => $value) {
                     array_push($headers_table, $value["code"]);
                     $query_columnn .= '( SELECT COUNT(*) FROM alumni_evulation WHERE bullet_id = bs.bullet_id AND user_id IN (SELECT user_id FROM personal_info WHERE course_id = '.$value["course_id"].' ) ) AS '.$value["code"].', ';
                }

                $get_sy = $db->Select('select sy_id,sy from sy  '.$where_sy_id.' ');

                foreach ($get_sy as $key => $value) {
                    array_push($headers_table, $value["sy"]);
                    $query_columnn .= '( SELECT COUNT(*) FROM alumni_evulation WHERE bullet_id = bs.bullet_id AND user_id IN (SELECT user_id FROM personal_info WHERE sy_id = '.$value["sy_id"].' ) ) AS `'.$value["sy"].'`, ';
                }

                foreach ($get_age_range as $value) {
                   array_push($headers_table, $value);
                   $query_columnn .= '( SELECT COUNT(*) FROM alumni_evulation WHERE bullet_id = bs.bullet_id AND survey_info_id IN (select survey_info_id from survey_information where age = "'.$value.'" ) ) AS `'.$value.'`, ';
                }


                $data = $db->select('select * from survey '.$where_survey.' order by descriptions asc');
                if(count($data) > 0){

                    foreach ($data as $key => $value) {
                       $survey_id = $value["survey_id"];
                       $descriptions = $value["descriptions"];

                       $sql = 'select survey_id, '.$query_columnn.' bullet_id, descriptions FROM bullet_survey bs  WHERE survey_id = (SELECT survey_id FROM survey WHERE survey_id = '.$survey_id.') ';
                       $data2 = $db->select($sql);
                        
                       if(count($data2)) {
                        ?>
                        <div class="col col-lg-12">
                            <div class="table-responsive table--no-card m-b-30">
                                <h3><?php echo ucwords($descriptions) ?></h3> 
                                <table class="table table-borderless table-striped table-earning">
                                     <thead>
                                        <tr>
                                            <th>Descriptions</th>
                                            <?php

                                            foreach ($headers_table as $value) {
                                                ?>
                                                <th><?php echo $value ?></th>
                                                <?php
                                            }

                                             ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                       foreach ($data2 as $key => $value) {
                                            ?>
                                                <tr>
                                                     <?php
                                                     echo "<td> ".$value["descriptions"]." </td>";
                                                        foreach ($headers_table as  $td) {
                                                           echo "<td> ".$value[$td]." </td>";
                                                        }
                                                      ?>
                                                </tr>
                                            <?php
                                       }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <?php
                       } 
                    }
                    
                }
          
         }

        

        
    ?>
</div>