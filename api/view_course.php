<?php 
    if(isset($_POST["course_id"])) {
        include("dbconnection.php");

        require '../function.php';
    
        $db = new DatabaseClass();
    
        $course_id = $_POST["course_id"];
        $getData = $db->select('select * from course where course_id = ? ', array($course_id));
        ?>
        <div class="row">
            <div class="card-body card-block">
                <form action="?page=course" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="course_id"  value="<?php echo $getData[0]["course_id"] ?>">
                    <div class="form-group">
                        <label for="inputIsInvalid" class=" form-control-label">Description</label>
                        <input type="text" id="inputIsInvalid" class="form-control" name="descriptions"  value="<?php echo $getData[0]["descriptions"] ?>">
                    </div>
                    <div class="form-group">
                        <label for="inputIsInvalid" class=" form-control-label">Code</label>
                        <input type="text" id="inputIsInvalid" class="form-control" name="code"  value="<?php echo $getData[0]["code"] ?>">
                    </div>
                    <div class="form-group">
                        <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="update_course" value="save us"/>
                    </div>
                </form>
            </div>
        </div>
        <?php
    } else{
    ?>
    <div class="row">
        <div class="card-body card-block">
            <form action="?page=course" method="POST" enctype="multipart/form-data" >
                <input type="hidden" name="event_id" value="">
                <div class="form-group">
                    <label for="inputIsInvalid" class=" form-control-label">Description</label>
                    <input type="text" id="inputIsInvalid" class="form-control" name="descriptions" required >
                </div>
                <div class="form-group">
                    <label for="inputIsInvalid" class=" form-control-label">Code</label>
                    <input type="text" id="inputIsInvalid" class="form-control" name="code"required >
                </div>
                <div class="form-group">
                    <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="add_new_course" value="save us"/>
                </div>
            </form>
        </div>
    </div>
            
    <?php
    }
?>
