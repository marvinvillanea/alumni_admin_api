<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();

   
    try {
       
        $job_id = $_POST["jobid"];
        $getData = $db->select('select * from job where job_id = ? ', array($job_id));
        ?>
    
            <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Posting Jobs</strong> Form
                            </div>
                            <div class="card-body card-block">
                                <form action="?page=joblist" method="POST" enctype="multipart/form-data"  id="formSerial">
                                    <input type="hidden" name="job_id" value="<?php echo $getData[0]["job_id"] ?>">
                                    <div class="form-group">
                                        <img src="<?php echo $getData[0]["job_image"] ?>" width="700" />
                                    </div>
                                    <div class="form-group">
                                        <label for="photo" class=" form-control-label">Upload New Logo</label>
                                        <input type="file" name="photo" id="preview_photo"  class="form-control" style="border:none!important;">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputIsInvalid" class=" form-control-label">Comapny Name</label>
                                        <input type="text" id="inputIsInvalid" class="form-control" name="company_name" value="<?php echo $getData[0]["company_name"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputIsInvalid" class=" form-control-label">Job Title</label>
                                        <input type="text" id="inputIsInvalid" class="form-control" name="job_title" value="<?php echo $getData[0]["job_title"] ?>">
                                    </div>

                                    <div class="form-group">
                                        <label for="inputIsInvalid" class=" form-control-label">Course</label>
                                        <select name="course" id="course" class="form-control">
                                            <?php
                                                $sy = $db->select("SELECT * FROM course order by descriptions desc");
                                                if(count($sy) > 0){
                                                    $select = "";
                                                    foreach ($sy as $key => $value) {
                                                        $select = "";
                                                        if($getData[0]["course_id"] == $value["course_id"]) {
                                                            $select = "selected";
                                                        }
                                                        ?>
                                                        <option value="<?php echo $value["course_id"] ?>" <?php echo $select ?>><?php echo $value["code"]." - ".ucwords($value["descriptions"]) ?></option>
                                                        <?php
                                                    }
                                                    
                                                } else {
                                                    ?>
                                                    <option value="NO_DATA">No Data Available</option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="job_description" class="form-control-label">Job Descriptions</label>
                                        <textarea id="job_description" name="job_description" rows="15" cols="50" class="form-control" ><?php echo $getData[0]["job_descriptions"] ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="minimum" class="form-control-label" required>Minimum Salary</label>
                                        <input type="number" id="minimum" class="form-control" name="min"  value="<?php echo $getData[0]["min_salary"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="max" class="form-control-label" required>Maximum Salary</label>
                                        <input type="number" id="max" class="form-control"  name="max" value="<?php echo $getData[0]["max_salary"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputIsInvalid" class=" form-control-label">Type</label>
                                        <select name="type_time" id="type" class="form-control" >
                                        <option value="Full-Time">Full-Time</option>
                                        <option value="Part-Time">Part-Time</option>
                                        <option value="Freelancer">Freelancer</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="max" class="form-control-label" >Address</label>
                                        <input type="text"  class="form-control"  name="address" value="<?php echo $getData[0]["address"] ?>">
                                    </div>
                                    <div class="form-group">
                                        <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="update_jobs" value="save us"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>	
                </div>
            </div>
                

        <?php
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>