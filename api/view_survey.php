<?php 
    if(isset($_POST["sy_id"])) {
        include("dbconnection.php");

        require '../function.php';
    
        $db = new DatabaseClass();
    
        $sy_id = $_POST["sy_id"];
        $getData = $db->select('select * from sy where sy_id = ? ', array($sy_id));
        ?>
        <div class="row">
            <div class="card-body card-block">
                <form action="?page=sy" method="POST" enctype="multipart/form-data" >
                    <input type="hidden" name="sy_id"  value="<?php echo $getData[0]["sy_id"] ?>">
                    <div class="form-group">
                        <label for="inputIsInvalid" class=" form-control-label">School Year</label>
                        <input type="text" id="inputIsInvalid" class="form-control" name="sy"  value="<?php echo $getData[0]["sy"] ?>">
                    </div>
                    <div class="form-group">
                        <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="update" value="save us"/>
                    </div>
                </form>
            </div>
        </div>
        <?php
    } else{
    ?>
    <div class="row">
        <div class="card-body card-block">
            <form action="?page=list_of_survey" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="inputIsInvalid" class=" form-control-label">Question</label>
                    <input type="text" id="inputIsInvalid" class="form-control" name="descriptions" required >
                </div>
                <div class="form-group">
                    <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="add_new" value="save us"/>
                </div>
            </form>
        </div>
    </div>
            
    <?php
    }
?>
