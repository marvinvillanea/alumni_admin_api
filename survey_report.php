<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-10">Select Survey:&nbsp;&nbsp;  </h3> 
                <select class="form-control m-b-40" onchange="getval(this);">
                    <?php
                        $sy = $db->select("SELECT * FROM survey order by created_at asc");
                        if(count($sy) > 0){
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

        $.post(
            "api/survey_report.php",
            {id: sel.value},
            function(data){ 
                $('#show_data_table').append('<div id="daaaatta">'+data +'</div>');
            }
        );
    }
</script>