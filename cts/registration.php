<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <title>Untitled Document</title>
</head>
<style>

</style>
</head>

<body>
  <div>
    <?php include('header.php');?>
  </div>
  <center><h2 class="h2">Registration</h2></center>

  <form action="" >
    <div class="container bg-yellow ">
      <div class="row">
        <div class="col"><label for="name">User Name:</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your name">
        </div>
        <div class="col"><label for="name">Password:</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your Password">
        </div>
        <div class="w-100"></div>
        <div class="col"><label for="name">Email:</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your Email">
        </div>
        <div class="col"><label for="name">Contact Number:</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your Contact Number">
        </div>
        <div class="w-100"></div>
        <div class="col"><label for="name">pincode :</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your pincode">
        </div>
        <div class="col"><label for="name">D.O.B:</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your D.O.B">
        </div>
        <div class="w-100"></div>
        <div class="col"><label for="name">H_Qualification:</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your H_Qualification">
        </div>
        <div class="col"><label for="name">Aadharcard Number:</label>
          <input type="text" id="name" class="form-control" name="t1" required
            placeholder="Enter your Aadharcard Number">
        </div>
        <div class="w-100"></div>
        <div class="col"><label for="name">Profile Photo</label>
          <input type="file" id="name" class="form-control" name="t1" required placeholder="Enter your name">
        </div>
        <div class="col"><label for="name">Address:</label>
          <input type="text" id="name" class="form-control" name="t1" required placeholder="Enter your Address ">
        </div>
        
        </div>
        <div class="w-100"></div>
        <div class="col"><div class="col"><label for="gender">Gender</label><br>
            <input type="radio" id="gender" name="t3" required value="mail">Male
            <input type="radio" id="gender" name="t3" required value="femail">Female
          </div>
        <div class="col"><label for="name"></label>
          <input type="submit" id="name" class="form-control btn btn-primary" name="t1" required placeholder="Enter your Password">
        </div>
      </div>
    </div>
  </form>
</body>
<?php
mysql_connect('localhost', 'root', '');
mysql_select_db('cts');
if (isset($_POST['S'])) {
  $p = $_FILES['t11']['name'];
  $t = $_FILES['t11']['tmp_name'];
  $l = "pho/";
  move_uploaded_file($t, $l . $p);
  $q = mysql_query("insert into reg values('','" . $_POST['t1'] . "','" . $_POST['t2'] . "','" . $_POST['t3'] . "','" . $_POST['t4'] . "','" . $_POST['t5'] . "','" . $_POST['t6'] . "','" . $_POST['t7'] . "','" . $_POST['t8'] . "','" . $_POST['t9'] . "','" . $_POST['t10'] . "','" . $p . "')");
  $r = mysql_query("inshert into login values('" . $_POST['t4'] . "','" . $_POST['t2'] . "')");
  if ($q > 0) {
    header("location:login.php");
  }

}
?>

</html>