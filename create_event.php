<?php 
 $message = "";
 if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]  == "POST") {

    addEvent($db);
    
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
                            <strong>Create Event</strong> Form
                        </div>
                        <div class="card-body card-block">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>?page=create_event" method="POST" enctype="multipart/form-data" >
                                <div class="form-group">
                                    <label for="photo" class=" form-control-label">Upload Image</label>
                                    <input type="file" name="photo" id="preview_photo"  class="form-control" style="border:none!important;" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">Event Name</label>
                                    <input type="text" id="inputIsInvalid" class="form-control" name="event_name" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">When</label>
                                    <input type="datetime-local" id="inputIsInvalid" class="form-control" name="when" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputIsInvalid" class=" form-control-label">Where</label>
                                    <input type="text" id="inputIsInvalid" class="form-control" name="where" required>
                                </div>

                                <div class="form-group">
                                    <label for="descriptions" class="form-control-label">Descriptions</label>
                                    <textarea id="descriptions" name="descriptions" rows="15" cols="50" class="form-control" required></textarea>
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
           
