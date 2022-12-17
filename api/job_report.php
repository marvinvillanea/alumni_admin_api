<?php
if(isset($_POST['data']))
{
    parse_str($_POST['data'], $data);
   
    include("dbconnection.php");

    require '../function.php';
    $db = new DatabaseClass();


    // echo "<pre>";
    //     var_dump($data);
    // echo "</pre>";  

    // group by 

    // if($data["time_type"] == "all" && $data["company_name"] == "all"  && $data["status_type"] == "all"  && $data["course_id"] == "all" && $data["type_day"] == "all" )  {

    // }
    $statement = "";
    $header = "(select descriptions from course where course_id = jb.course_id) as course_name";
    $headr_table = ["course"];
    $data_row_table = ["course_name"];

    if($data["course_id"] != "all") { 
        $statement = " where course_id = ".$data["course_id"];
    }

    $where_statment = "where course_id in (select course_id from course  ".$statement." )  ";
    $group_by = "group by course_id";
    if($data["time_type"] != "all" ) {
        $where_statment .= "and time_type = '".$data["time_type"]."' ";
        $group_by .= ", time_type";
        $header .= " , time_type";
        array_push($data_row_table,"time_type");
        array_push($headr_table,"time type");
    }

    if($data["company_name"] != "all" ) {
        $where_statment .= "and company_name = '".$data["company_name"]."' ";
        $group_by .= ", company_name";
        $header .= " , company_name";
        array_push($data_row_table,"company_name");
        array_push($headr_table,"company name");
    }

    if($data["status_type"] == "active" ) {
        $where_statment .= "and expired_date > now() ";
    }
    if($data["status_type"] == "expired" ) {
         $where_statment .= "and expired_date < now() ";
    }

     if($data["type_day"] != "all" ) {
         if($data["type_day"] == "month") {
            $where_statment .= "and month(CONVERT_TZ(created_at, '+00:00', '+08:00')) = month('".$data["month"]."-01') ";
         } elseif($data["type_day"] == "between") {
            $where_statment .= "and CONVERT_TZ(created_at, '+00:00', '+08:00') between  '".$data["from"]."' and '".$data["to"]."' ";
         }
    }

    array_push($data_row_table,"total_job");
    array_push($headr_table,"total");
    // echo $header."<br>";
    // echo $where_statment."<br>";
    // echo $group_by."<br>";

    $sql = "select ".$header.", count(*) total_job from job jb ".$where_statment." ".$group_by." ";

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
                    <!-- <th>date</th>
                    <th>order ID</th>
                    <th>name</th>
                    <th class="text-right">price</th>
                    <th class="text-right">quantity</th>
                    <th class="text-right">total</th> -->
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
