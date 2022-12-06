<?php 
   
    include("dbconnection.php");

    require '../function.php';

    $db = new DatabaseClass();
    try {
        #param [user_id]
        extract($_POST);
        $data = $db->Select("select u.created_at, pf.first_name, pf.middle_name, pf.last_name , u.email, c.descriptions,s.sy, pf.contact_no, pf.address,pf.image
        from users u 
        inner join personal_info pf using(user_id) 
        inner join course c using(course_id) 
        inner join sy s using(sy_id) 
        where u.user_id =  ?", array($user_id));
			
       
        // $json_encode = json_encode($data[0]);
        $div2 = '
        <center> <img src="'.$data[0]['image'].'" style="width:180px; border-radius: 50px;" /></center>
        <br><hr>
        Date Time Created: <b>'.$data[0]['created_at'].'</b> <br><hr>
        Full Name: <b>'.ucfirst($data[0]['last_name']).', '.ucfirst($data[0]['first_name']).'</b> <br><hr>
        Email: <b>'.$data[0]['email'].'</b> <br><hr>
        Course: <b>'.ucwords($data[0]['descriptions']).'</b> <br><hr>
        School Year: <b>'.$data[0]['sy'].'</b> <br><hr>
        Contact #: <b>'.$data[0]['contact_no'].'</b> <br><hr>
        Address: <b>'.$data[0]['address'].'</b> <br><hr>
        ';

        $div = '<div id="parcel_details"><div class="modal-body">'.$div2.'</div><div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        </div></div>';
        echo $div;
	
    } catch(\Exception $e) {
        echo "FAILED";
    }



?>