<div class="section__content section__content--p30">
    <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
                <h6 class="title-5 m-b-10">Alumni Report</h6> 
                <!-- END DATA TABLE -->
            </div>
        </div>
        <form method="post" id="datasent">
        <div class="row">
            <div class="col col-lg-2">
                <h6 class="m-b-10">Age:</h6> 
                <select class="form-control" name="age" id="age" onchange="clearSelect();">
                    <option value="all" selected > ALL </option>
                    <option value="22-25">22-25</option>
                    <option value="26-30">26-30</option>
                    <option value="31-40">31-40</option>
                </select>
            </div>
            <div class="col col-lg-2">
                <h6 class="m-b-10">Sex:</h6> 
                <select class="form-control" name="sex" id="sex" onchange="clearSelect();">
                    <option value="all" selected > ALL </option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div class="col col-lg-2">
                <h6 class="m-b-10">Civil Status:</h6> 
                <select class="form-control" name="civil" id="civil" onchange="clearSelect();">
                    <option value="all" selected > ALL </option>
                    <option value="M">Married</option>
                    <option value="S">Single</option>
                    <option value="w">Widow</option>
                </select>
            </div>
            <div class="col col-lg-2">
                <h6 class="m-b-10">Year Graduated:</h6> 
                <select class="form-control" name="year_graduated" id="year_graduated"  onchange="clearSelect();">
                <?php 
                $sy = $db->select("SELECT * FROM sy order by sy desc");
                if(count($sy) > 0){
                    ?>
                       <option value="all" selected > ALL </option>
                    <?php
                    foreach ($sy as $key => $value) {
                        ?>
                        <option value="<?php echo $value["sy_id"];  ?>" > <?php echo $value["sy"]; ?> </option>
                        <?php
                    }
                    
                } else {
                    ?>
                    <option disabled selected> -- No data Found -- </option>
                    <?php
                }
                ?>
                </select>
            </div>
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
                            <option disabled >--NO DATA AVAILABLE--</option>
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
        $('#daaaatta').remove();
        var arraydata = $('#datasent').serialize();
        $.post(
            "api/alumni_report.php",
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