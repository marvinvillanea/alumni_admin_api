<?php 
 $message = "";
 if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {
 //    updateUSerProfile($db);
    if(addJobsDescriptions($db)){
         $message = "Successfuly Update";
        
    }

     header('location:index.php?page=pending');
     // echo "<pre>";
     //     var_dump($_POST);    
     // echo "</pre>";
 }
?>

<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
              
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Posting Jobs</strong> Form
                        </div>
                        <div class="card-body card-block">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>?page=postingjobs" method="POST" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="photo" class=" form-control-label">Upload Image</label>
                                    <input type="file" name="photo" id="preview_photo"  class="form-control" style="border:none!important;" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">Job Title</label>
                                    <input type="text" id="inputIsInvalid" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">Course</label>
                                    <select name="course" id="course" class="form-control" required>
                                        <?php
                                            $sy = $db->select("SELECT * FROM course order by descriptions desc");
                                            if(count($sy) > 0){
                                                foreach ($sy as $key => $value) {
                                                    ?>
                                                <option value="<?php echo $value["course_id"] ?>"><?php echo $value["code"]." - ".ucwords($value["descriptions"]) ?></option>
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
                                    <textarea id="job_description" name="job_description" rows="15" cols="50" class="form-control" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="minimum" class="form-control-label" required>Minimum Salary</label>
                                    <input type="number" id="minimum" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="max" class="form-control-label" required>Maximum Salary</label>
                                    <input type="number" id="max" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="submit" value="save us"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</div>
           
