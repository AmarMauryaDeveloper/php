<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style>
label {
    font-weight: 600;
    color: #666;
}
body {
  background: #f1f1f1;
}
.box8{
  box-shadow: 0px 0px 5px 1px #999;
}
.mx-t3{
  margin-top: -2rem;
  margin-bottom:inherit;
}
</style>
</head>

<body style="background:red;">
<form id="form1" name="form1" method="POST" action="" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0">
<tr>
<td><?php include('regheader.php'); ?></td>
</tr>
<tr>
<td height="400px" valign="top" style="background:#99CC33;"> 
<div class="container mt-3">
  <div class="row jumbotron box8">
      <div class="col-sm-12 mx-t3 mb-4">
        <h2 class="text-center text-info">Register for Missing Valuable</h2>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-f">Missing valuable Name :</label>
        <input type="text" class="form-control" name="t1" id="name-f" placeholder="Missing valuable name" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="name-l">Missing valuable Type :</label>
        <select class="form-control browser-default custom-select" name="t2">
		<option value="">--Select your Missing valuable Type--</option>
          <option>Gold</option>
          <option>Bike</option>
          <option>Money</option>
        </select>
      </div>
      <div class="col-sm-6 form-group">
        <label for="email">Missing valuable Price :</label>
        <input type="text" class="form-control" name="t3" id="email" placeholder="Price" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-1">Any Suspeact :</label>
        <input type="text" class="form-control" name="t4" id="" placeholder="any suspect" required>
      </div>
     
      <div class="col-sm-6 form-group">
        <label for="State">Any Reword :</label>
        <input type="text" class="form-control" name="t6" id="" placeholder="Reward" required>
      </div>
     
      <div class="col-sm-6 form-group">
        <label for="Country">Contact No :</label>
      <input type="text" class="form-control" name="t7" id="" placeholder="contact no" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address">Address :</label>
        <input type="textarea" name="t8" class="form-control" id="" placeholder="address" required>
      </div>
      <div class="col-sm-6 form-group">
        <label for="details">Details :</label>
        <input type="text" name="t9" class="form-control" id="Date" placeholder="details" required>
      </div>
     
      
    
      <div class="col-sm-12">
        <input type="checkbox" class="form-check d-inline" id="chb" required><label for="chb" class="form-check-label">&nbsp;I accept           all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
        <input class="btn btn-primary float-right" type="submit" name="s">
		
		
      </div>
 <?php
	  mysql_connect('localhost','root','');
	  mysql_select_db('cts');
	  if(isset($_POST['s']))
	  {
	  session_start();
	 $q=mysql_query("insert into missingvaluble values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4'].      
	 "','".$_POST['t5']."','".$_POST['t6']."','".$_POST['t7']."','".$_POST['t8']."','".$_POST['t9']."',
	 '".date('Y-m-d H:i:s')."','0')");
	  if($q>0)
	  {
	  echo"recored inserted";
	  }
	  }
	  ?>	 
    </div>
</div>
</td>
</tr>
<?php
		mysql_connect('localhost','root','');
		mysql_select_db('cts');
		
		$q=mysql_query("select * from missingvaluble");
		while($a=mysql_fetch_array($q))
		{
		echo "";
		}
		
		?>
<table width="100%" border="1" cellspacing="0" style="background:#33FF00; font-size:larger;">
  <tr>
    <td width=""><div align="center">MVId </div></td>
    <td width=""><div align="center">ValubleName</div></td>
    <td width=""><div align="center">Valuble type</div></td>
	<td width=""><div align="center">Price</div></td>
    <td width=""><div align="center">Any suspect</div></td>
	<td width=""><div align="center">Complainer Email id</div></td>
	<td width=""><div align="center">Any Reword</div></td>
	<td width=""><div align="center">Contact Number</div></td>
	<td width=""><div align="center">Address</div></td>
	<td width=""><div align="center">Details</div></td>
	<td width=""><div align="center">complain date and time</div></td>
	<td width=""><div align="center">Status</div></td>
  </tr>
  <?php
  session_start();
  $r=mysql_query("select * from missingvaluble");
  while($a=mysql_fetch_array($r))
  {
  echo "<tr>
  <td>$a[0]</td>
  <td>$a[1]</td>
  <td>$a[2]</td>
  <td>$a[3]</td>
  <td>$a[4]</td>
  <td>$a[5]</td>
  <td>$a[6]</td>
  <td>$a[7]</td>
  <td>$a[8]</td>
  <td>$a[9]</td>
  <td>$a[10]</td>
  <td>$a[11]</td>
  </tr>";
  }
  ?>
</table>
<tr>
<td><?php include('regfooter.php');?></td>
</tr>
</table>
</form>
</body>
</html>
