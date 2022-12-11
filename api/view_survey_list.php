<div class="row">
        <div class="card-body card-block">
            <form action="?page=list_of_survey" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="inputIsInvalid" class=" form-control-label">Add List</label>
                    <input type="hidden" id="inputIsInvalid" class="form-control" name="survey_id" value="<?php echo isset($_POST["survey_id"]) ? $_POST["survey_id"] : 'none' ?>" >
                    <input type="text" id="inputIsInvalid" class="form-control" name="descriptions" required >
                </div>
                <div class="form-group">
                    <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="add_new_list" value="save us"/>
                </div>
            </form>
        </div>
    </div>