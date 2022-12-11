<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();

   
    try {
       
        $event_id = $_POST["event_id"];
        $getData = $db->select('select * from events where event_id = ? ', array($event_id));
        ?>
         
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
            
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>Create Event</strong> Form
                        </div>
                        <div class="card-body card-block">
                            <form action="?page=events" method="POST" enctype="multipart/form-data" >
                                <input type="hidden" name="event_id" value="<?php echo $getData[0]["event_id"] ?>">
                                <div class="form-group">
                                    <img src="<?php echo $getData[0]["banner"] ?>" width="700" />
                                </div>
                                <div class="form-group">
                                    <label for="photo" class=" form-control-label">Upload Image</label>
                                    <input type="file" name="photo" id="preview_photo"  class="form-control" style="border:none!important;" >
                                </div>
                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">Event Name</label>
                                    <input type="text" id="inputIsInvalid" class="form-control" name="event_name" value="<?php echo $getData[0]["event_name"] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">When</label>
                                    <input type="datetime-local" id="inputIsInvalid" class="form-control" name="when" value="<?php echo $getData[0]["when"] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">Where</label>
                                    <input type="text" id="inputIsInvalid" class="form-control" name="where" value="<?php echo $getData[0]["where"] ?>">
                                </div>

                                <div class="form-group">
                                    <label for="desciptions" class="form-control-label">Descriptions</label>
                                    <textarea id="desciptions" name="desciptions" rows="15" cols="50" class="form-control" ><?php echo $getData[0]["desciptions"] ?></textarea>
                                </div>

                                <div class="form-group">
                                    <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="updated_event" value="save us"/>
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