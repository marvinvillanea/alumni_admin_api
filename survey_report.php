<div class="section__content section__content--p30">
    <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
                <h6 class="title-5 m-b-10">Survey Report</h6> 
                <!-- END DATA TABLE -->
            </div>
        </div>
        <div class="row">
          <div class="col col-lg-3">
            <h6 class="m-b-10">Course:</h6> 
            <select class="form-control" name="course_id" id="course_id" onchange="clearSelect();">
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
          <div class="col col-lg-2">
            <h6 class="m-b-10">Year Graduated:</h6> 
            <select class="form-control" name="year_graduated" id="year_graduated" onchange="clearSelect();">
            <?php
                $sy = $db->select("SELECT * FROM sy order by sy desc");
                if(count($sy) > 0){
                    ?>
                    <option value="all">ALL</option>
                    <?php
                    foreach ($sy as $key => $value) {
                        ?>
                        <option value="<?php echo $value["sy_id"]; ?>"><?php echo ucwords($value["sy"]); ?></option>
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
            <h6 class="m-b-10">Age Range:</h6> 
            <select class="form-control" name="age_range" id="age_range" onchange="clearSelect();">
                <option value="all" > ALL </option>
                <option value="22-25">22-25</option>
                <option value="26-30">26-30</option>
                <option value="31-40">31-40</option>
            </select>
          </div>
          <div class="col">
            <h6 class="m-b-10">Select Survey:</h6> 
           <select class="form-control m-b-40" id="selectedDeafult" onchange="getval(this);">
                    <?php
                        $sy = $db->select("SELECT * FROM survey order by created_at asc");
                        if(count($sy) > 0){
                            echo "<option value='empty' disabled selected> -- Select Survey -- </option>";
                            echo "<option value='all' > ALL </option>";
                            foreach ($sy as $key => $value) {
                                ?>
                                <option value="<?php echo $value["survey_id"]; ?>"><?php echo $value["descriptions"]; ?></option>
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
        var course_Id = $("#course_id").val();
        var year = $("#year_graduated").val();
        var age = $("#age_range").val(); 
        var survey_id = sel.value;

        $.post(
            "api/survey_report.php",
            {id: survey_id, course_id : course_Id, year : year , age : age},
            function(data){ 
                $('#show_data_table').append('<div id="daaaatta">'+data +'</div>');
            }
        );
    }

    function clearSelect(){
        $('#selectedDeafult  option[value="empty"]').prop("selected", true);
    }
</script>