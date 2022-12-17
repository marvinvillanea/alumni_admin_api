<div class="section__content section__content--p30">
    <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
                <h6 class="title-5 m-b-10">Job Report</h6> 
                <!-- END DATA TABLE -->
            </div>
        </div>
        <form method="post" id="datasent">
        <div class="row">
            <div class="col col-lg-2">
            <h6 class="m-b-10">Type:</h6> 
            <select class="form-control" name="time_type" id="time_type" onchange="clearSelect();">
                   <option value="all">ALL</option>
                   <option value="Full-Time">Full-Time</option>
                   <option value="Part-Time">Part-Time</option>
                   <option value="Freelancer">Freelancer</option>
            </select>
          </div>
          <div class="col col-lg-2">
            <h6 class="m-b-10">Company:</h6> 
            <select class="form-control" name="company_name" id="company_name" onchange="clearSelect();">
            <?php
                $sy = $db->select("SELECT company_name FROM job group by company_name order by company_name asc");
                if(count($sy) > 0){
                    ?>
                    <option value="all">ALL</option>
                    <?php
                    foreach ($sy as $key => $value) {
                        ?>
                        <option value="<?php echo $value["company_name"]; ?>"><?php echo ucwords($value["company_name"]); ?></option>
                        <?php
                    }
                    
                } else {
                    ?>
                    <option>--NO DATA AVAILABLE--</option>
                    <?php
                }
            ?>
            </select>
          </div>
          <div class="col col-lg-2">
            <h6 class="m-b-10">Status:</h6> 
            <select class="form-control" name="status_type" id="status_type" onchange="clearSelect();">
                <option value="all" > ALL </option>
                <option value="active">Active</option>
                <option value="expired">Expired</option>
            </select>
           </div>
           <div class="col col-lg-2">
            <h6 class="m-b-10">Type Date:</h6> 
           <select class="form-control m-b-40" name="type_day" id="type_day" onchange="chnageINputtime(this);">
                <option value="all" > ALL </option>
                <option value="month">Month</option>
                <option value="between">Between</option>
            </select>
           </div>

           <!-- between -->
            <div class="col col-lg-2 between_input_stlye" style="display: none;">
                <h6 class="m-b-10">FROM:</h6> 
                <input type="datetime-local" name="from" class="form-control" onchange="clearSelect();">
            </div>
            <div class="col col-lg-2 between_input_stlye" style="display: none;">
                <h6 class="m-b-10">TO:</h6> 
                <input type="datetime-local" name="to"  class="form-control" onchange="clearSelect();">
            </div>

           <!-- END between -->


            <!-- MONTH -->
            <div class="col col-lg-2"id="month_input_stlye" style="display: none;">
                <h6 class="m-b-10">MONTH:</h6> 
                <input type="month" name="month" class="form-control" onchange="clearSelect();">
            </div>

           <!-- END MONTH -->

            <div class="col m-b-40">
                <h6 class="m-b-10">Course:</h6> 
                <select class="form-control" name="course_id" id="course_id" onchange="getval(this)" >
                    <option value="disable" disabled selected>-- Select Course --</option>
                    <?php
                        $sy = $db->select("SELECT * FROM course order by descriptions asc");
                        if(count($sy) > 0){
                            ?>
                            <option value="all">ALL</option>
                            <?php
                            foreach ($sy as $key => $value) {
                                ?>
                                <option value="<?php echo $value["course_id"]; ?>"><?php echo $value["code"]." - ".ucwords($value["descriptions"]); ?></option>
                                <?php
                            }
                            
                        } else {
                            ?>
                            <option>--NO DATA AVAILABLE--</option>
                            <?php
                        }
                    ?>
                </select>
            </div>
                 

        </div>
        </form>  
        <div class="row">
            <div class="col-md-12">

                 <div id="show_data_table">
                    <div id="daaaatta">
                            
                    </div>

                </div>

                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>
</div>
         
<script type="text/javascript">
   
    function getval(sel)
    {
        // alert(sel.value);
     
        $('#daaaatta').remove();
        // var course_Id = $("#course_id").val();
        // var company_name = $("#company_name").val();
        // var status_type = $("#status_type").val();
        // var type_day = $("#type_day").val();
        // var course_Id = $("#course_id").val();
        // var course_Id = $("#course_id").val();

        // var year = $("#year_graduated").val();
        // var age = $("#age_range").val(); 
        // var survey_id = sel.value;

        var arraydata = $('#datasent').serialize();
        $.post(
            "api/job_report.php",
            {data: arraydata},
            function(data){ 
                $('#show_data_table').append('<div id="daaaatta">'+data +'</div>');
            }
        );
    }

    function clearSelect(){
        $('#course_id  option[value="disable"]').prop("selected", true);
    }

    function chnageINputtime(type_report){
        $('#course_id  option[value="disable"]').prop("selected", true);
        $('#month_input_stlye').hide();
        $('.between_input_stlye').hide();
        if(type_report.value == "month") {
            $('#month_input_stlye').show();
        } else if(type_report.value == "between") {
            $('.between_input_stlye').show();
        }
    }
</script>