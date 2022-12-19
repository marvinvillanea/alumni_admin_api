<?php
if(isset($_POST['data']))
{
    parse_str($_POST['data'], $data);
   
    include("dbconnection.php");

    require '../function.php';
    $db = new DatabaseClass();

    $statement = "";
    $header = "(select descriptions from course where course_id = jb.course_id) as course_name";
    $headr_table = ["course"];
    $data_row_table = ["course_name"];

    if($data["course_id"] != "all") { 
        $statement = " where course_id = ".$data["course_id"];
    }

    $where_statment = "where course_id in (select course_id from course  ".$statement." )  ";
    $group_by = "group by course_id";
    if($data["age"] != "all" ) {
        $where_statment .= "and age = '".$data["age"]."' ";
        $group_by .= ", age";
        $header .= " , age";
        array_push($data_row_table,"age");
        array_push($headr_table,"age");
    }

    if($data["sex"] != "all" ) {
        $where_statment .= "and sex = '".$data["sex"]."' ";
        $group_by .= ", sex";
        $header .= " , sex";
        array_push($data_row_table,"sex");
        array_push($headr_table,"sex");
    }

    if($data["civil"] != "all" ) {
        $where_statment .= "and civil_status = '".$data["civil"]."' ";
        $group_by .= ", civil_status";
        $header .= " , civil_status";
        array_push($data_row_table,"civil_status");
        array_push($headr_table,"civil status");
    }

    if($data["year_graduated"] != "all" ) {
        $where_statment .= "and sy_id = '".$data["year_graduated"]."' ";
        $group_by .= ", sy_id";
        $header .= " , sy_id";
        array_push($data_row_table,"sy_id");
        array_push($headr_table,"year graduated");
    }

    array_push($data_row_table,"total_alumni");
    array_push($headr_table,"total alumni");
    // echo $header."<br>";
    // echo $where_statment."<br>";
    // echo $group_by."<br>";

    $sql = "select ".$header.", count(*) total_alumni from survey_information jb ".$where_statment." ".$group_by." ";

    $data2 = $db->select($sql);




    if(count($data2) == 0) {
        ?>
        <div class="col">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                  
                    <tbody>
                        <tr>
                            <td colspan="6">No data found</td>
                        </tr>
                       
                    </tbody>
                </table>
            </div>
        </div>
        <?php
    } else {

        ?>

<div class="col">
    <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
             <thead>
                <tr>
                    
                    <?php

                    foreach ($headr_table as $value) {
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
                                foreach ($data_row_table as  $td) {
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
?>
