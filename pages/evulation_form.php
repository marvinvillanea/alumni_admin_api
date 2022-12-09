<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPC - Alumni Survey</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
    .stepwizard-step p {
        margin-top: 10px;
    }
    .stepwizard-row {
        display: table-row;
    }
    .stepwizard {
        display: table;
        width: 100%;
        position: relative;
    }
    .stepwizard-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }
    .stepwizard-row:before {
        top: 14px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;
    }
    .stepwizard-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }
    .btn-circle {
        width: 30px;
        height: 30px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
    .modal-body {
        /* max-height: calc(100vh - 210px); */
        overflow-y: auto;
    }
    .modal-dialog {
        min-width: 70%;
    }
   </style>
</head>
<body>
<div id="modalUser" class="modal " data-backdrop="static" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="false" >
     <div class="modal-dialog">
       <div class="modal-content">
         <div class="modal-header">
             <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
           <div class="stepwizard" >
             <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step">
                 <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
               </div>
               <?php
                 $getSurveyNO = $db->Select("select * from survey order by created_at asc");
                 if(count($getSurveyNO) > 0) {
                    $n = 1;
                    foreach ($getSurveyNO as $key => $value) {
                        $n++;
                        ?>
                        <div class="stepwizard-step">
                            <a href="#step-<?php echo $n ?>" type="button" class="btn btn-default btn-circle" disabled="disabled"><?php echo $n ?></a>
                        </div>
                        <?php
                    }
                 } 
               ?>
                
             </div>
           </div>
         </div>
         <div class="modal-body">
           <div class="container" style="width:100%;">



              <form  id="evulation_alumni" >
                <?php
                    // $select_departments = mysqli_query($con,"SELECT `department` FROM `tbl_company` GROUP BY `department`");    
                ?>
              <input type="hidden" name="token" value="<?php echo isset($_GET["token"]) ? $_GET["token"] : '' ?>">
               <div class="row setup-content" id="step-1">
                 <div class="col-md-12 ">
                   <div class="col-md-12">
                        <!--    EQUESTIONNAIRE  -->
                     <h3>Basic Information</h3> 
                     <div class="form-group">
                       <label class="control-label">Full Name: <?php echo $fullname ?></label>
                       
                     </div>
                     <div class="form-group">
                       <label class="control-label">Age</label>
                       <select class="form-control" name="age" required="required" >
                          <option value="" disabled selected> -- Select Age Range -- </option>
                          <option value="22-25">22-25</option>
                          <option value="26-30">26-30</option>
                          <option value="31-40">31-40</option>
                      </select>
                     </div>
                     <div class="form-group">
                       <label class="control-label">Sex</label>
                       <select class="form-control" name="sex" required="required" >
                          <option value="" disabled selected> -- Select Sex -- </option>
                          <option value="M">Male</option>
                          <option value="F">Female</option>
                        </select>
                     </div>
                     <div class="form-group">
                       <label class="control-label">Civil Status</label>
                       <select class="form-control" name="civil_status" required="required" >
                          <option value="" disabled selected> -- Select Civil Status -- </option>
                          <option value="M">Married</option>
                          <option value="S">Single</option>
                          <option value="w">Widow</option>
                        </select>
                     </div>
                     <div class="form-group">
                       <label class="control-label">Present Office Address</label>
                       <input required="required" class="form-control" placeholder="Enter Address" type="text" name="office_address" value="">
                     </div>
                     <div class="form-group">
                       <label class="control-label">Year Graduated</label>
                       <select class="form-control" name="year_graduated" required="required" >
                       <?php 
                        $sy = $db->select("SELECT * FROM sy order by sy desc");
                        if(count($sy) > 0){
                            ?>
                             <option value="" disabled selected> -- Select Year Graduated -- </option>
                            <?php
                            foreach ($sy as $key => $value) {
                                ?>
                                <option value="<?php echo $value["sy_id"];  ?>" > <?php echo $value["sy"]; ?> </option>
                                <?php
                            }
                            
                        } else {
                            ?>
                            <option value="" disabled selected> -- No data Found -- </option>
                            <?php
                        }
                       ?>
                        </select>
                     </div>
                     <div class="form-group">
                       <label class="control-label">Course Taken</label>
                       <select class="form-control" name="course_taken" required="required" >
                       <?php 
                        $sy = $db->select("SELECT * FROM course order by descriptions asc");
                        if(count($sy) > 0){
                            ?>
                             <option value="" disabled selected> -- Select Year Graduated -- </option>
                            <?php
                            foreach ($sy as $key => $value) {
                                ?>
                                <option value="<?php echo $value["course_id"];  ?>" > <?php echo $value["code"]." - ".ucwords( $value["descriptions"]); ?> </option>
                                <?php
                            }
                            
                        } else {
                            ?>
                            <option value="" disabled selected> -- No data Found -- </option>
                            <?php
                        }
                       ?>
                        </select>
                     </div>
                  
                   </div>
                   <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                 </div>
               </div>
                
               <?php
                 $getSurveyNO = $db->Select("select * from survey order by created_at asc");
                 if(count($getSurveyNO) > 0) {
                    $n = 1;
                    $total = $n + count($getSurveyNO);
                    foreach ($getSurveyNO as $key => $value) {
                        $n++;
                        ?>
                        <div class="row setup-content" id="step-<?php echo $n?>">
                            <div class="col-xs-12">
                            <div class="col-md-12">
                                <h3> <?php echo $value["descriptions"]; ?></h3>
                                <div class="form-group">
                                    <label class="control-label">List:</label>
                                    <select class="form-control" name="bullet_survey[]" required="required" >
                                    <?php 
                                        $listed = $db->Select('select * from bullet_survey where survey_id = ?', array($value['survey_id']));
                                        if(count($listed) > 0) {
                                            ?>
                                            <option value="" disabled selected> -- Select Year Graduated -- </option>
                                        <?php
                                            foreach ($listed as $key => $value) {
                                            ?>
                                            <option value="<?php echo $value["bullet_id"] ?>" > <?php echo $value["descriptions"] ?> </option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option value="" disabled selected> -- No data Found -- </option>
                                            <?php
                                        }
                                    ?>
                                    </select>
                                </div>
                                <button class="btn btn-primary prevBtn btn-lg pull-left" type="button">Back</button>
                                
                                <?php 
                                    if($n == $total) {
                                        ?>
                                         <button class="btn btn-primary pull-right" type="submit"  name="submit_details" onclick="submitData()">Save</button>
                                        <?php
                                    } else {
                                        ?>
                                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                                        <?php
                                    }
                                ?>
                                
                            </div>
                            </div>
                        </div>
                        <?php
                    }
                 } 
               ?>

             </form>


           </div>
         </div>
         <div class="modal-footer">
         </div>
       </div>
       <!-- /.modal-content -->
     </div>
     <!-- /.modal-dialog -->
   </div>

       
</body>
</html>


<script type="text/javascript">
// $('#modalUser').show()
    $('#modalUser').modal('show');
$(document).ready(function() {

  var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn'),
    allPrevBtn = $('.prevBtn');

  allWells.hide();

  navListItems.click(function(e) {
    e.preventDefault();
    var $target = $($(this).attr('href')),
      $item = $(this);

   if (!$item.hasClass('disabled')) {
      navListItems.removeClass('btn-primary').addClass('btn-default');
      $item.addClass('btn-primary');
      allWells.hide();
      $target.show();
      $target.find('input:eq(0)').focus();
    }
  });

  allPrevBtn.click(function() {
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

    prevStepWizard.trigger('click');
  });

  allNextBtn.click(function() {
    var curStep = $(this).closest(".setup-content"),
      curStepBtn = curStep.attr("id"),
      nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
      curInputs = curStep.find("input[type='text'],input[type='url']"),
      isValid = true;

    $(".form-group").removeClass("has-error");
    for (var i = 0; i < curInputs.length; i++) {
      if (!curInputs[i].validity.valid) {
        isValid = false;
        $(curInputs[i]).closest(".form-group").addClass("has-error");
      }
    }

    if (isValid)
      nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');
});


function submitData(){
    var str = $( "#evulation_alumni" ).serialize();
    $.post("create_evulation.php",{str}, function(data) 
    { 
        // location.reload(true); 
    }
    );
    alert('CONFIRM');
}
</script>