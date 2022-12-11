<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="container">
  <!-- <form > -->

  <form action="?token=<?php echo isset($_GET["token"]) ? $_GET["token"] : 'no token' ?>" method="POST" enctype="multipart/form-data" >
  <input type="hidden" name="user_id" value="<?php echo $data[0]["user_id"] ?>">
  <div class="form-group" >
        <img src="<?php echo $data[0]["image"] ?>" width="200" style="display:flex;margin:0px auto;" />
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Upload New Profile</label>
      </div>
      <div class="col-75">
        <input type="file" name="photo" id="preview_photo"  class="form-control" style="border:none!important;" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="first_name" placeholder="<?php echo $data[0]["first_name"]?>" value="<?php echo $data[0]["first_name"]?>">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="last_name" placeholder="<?php echo $data[0]["last_name"]?>" value="<?php echo $data[0]["last_name"]?>" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="mname">Middle Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="mname" name="middle_name" placeholder="<?php echo $data[0]["middle_name"]?>" value="<?php echo $data[0]["middle_name"]?>" >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cnumber">Contact No.</label>
      </div>
      <div class="col-75">
        <input type="text" id="cnumber" name="contact_no" placeholder="<?php echo $data[0]["contact_no"]?>" value="<?php echo $data[0]["contact_no"]?>" >
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="address">Current Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="address" name="address" placeholder="<?php echo $data[0]["address"]?>" value="<?php echo $data[0]["address"]?>" >
      </div>
    </div>
    <div class="row" style="margin-top:20px">
      <input  class="au-btn au-btn--block au-btn--green m-b-20" type="submit" style="background:linear-gradient(90deg, rgb(120 7 7) 0%, rgb(253 29 29) 100%)" name="update" value="save us"/>
    </div>
  </form>
</div>

</body>
</html>
