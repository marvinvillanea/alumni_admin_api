<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();
    try {
        #param [user_id]
        extract($_POST);
        $data = $db->Select("select * from bullet_survey where survey_id = ?", array($user_id));
        $div2 = "<ul style='padding-left:30px'>";
        if(count($data) > 0) {
            foreach ($data as $key => $value) {
                $div2 .= "<li style='padding:10px;'>".$value["descriptions"] . "</li>";
            }
            $div2 .= "</ul>";
        } else {
           $div2 = 'No Bullet List';
        }
        $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div></div>';
        echo $div;
	
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>