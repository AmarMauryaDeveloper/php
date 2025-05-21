<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.me{
		background:linear-gradient(red,gray, blue);
		color: #FFDF55;
		font-size:78pt;
		width:200px;
		text-align:center;
}
</style>
</head>

<body>
<table class="me" width="100%"border="0">
<tr>
<td>
Registion
</td>
</tr>
</table>

<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0" cellspacing="0">
    <tr>
      <td width="13%">User Name </td>
      <td width="2%">:</td>
      <td width="85%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input name="t2" type="password" id="t2" /></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>:</td>
      <td><p>
        <label>
          <input type="radio" name="t3" value="Male" />
          Male</label>
        <label>
          <input type="radio" name="t3" value="Female" />
          Female</label>
      </p></td>
    </tr>
    <tr>
      <td>Email Id </td>
      <td>:</td>
      <td><input name="t4" type="text" id="t4" /></td>
    </tr>
    <tr>
      <td>Pin Code </td>
      <td>:</td>
      <td><input name="t5" type="text" id="t5" /></td>
    </tr>
    <tr>
      <td>Living Ststus </td>
      <td>:</td>
      <td><span class="style2">
        <label>
        <select name="t6" id="t6">
          <option>[-Select-]</option>
          <option>High Class</option>
          <option>Midle Class</option>
          <option>Lower Class</option>
          <option>Uper Midle Class</option>
          <option> Uper Lower Class</option>
        </select>
        </label>
      </span></td>
    </tr>
    <tr>
      <td>H qualification </td>
      <td>:</td>
      <td><label>
        <select name="t7" id="t7">
          <option>[-Select-]</option>
		  <option>Pg</option>
		  <option>B.A</option>
		  <option>Phd</option>
		  <option>12th</option>
		  <option>10th</option>
		  <option>8th</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Contact No </td>
      <td>:</td>
      <td><input name="t8" type="text" id="t8" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>:</td>
      <td><textarea name="t9" id="t9"></textarea></td>
    </tr>
    <tr>
      <td>DOB</td>
      <td>:</td>
      <td><input name="t10" type="text" id="t10" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Singup" /></td>
      <td>&nbsp;</td>
      <td>
	  <?php
	  		mysql_connect('localhost','root','');
			mysql_select_db('phpdb');
			if(isset($_POST['S']))
			{
$q=mysql_query("insert into reg values('".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."',".$_POST['t5'].",'".$_POST['t6']."','".$_POST['t7']."',".$_POST['t8'].",'".$_POST['t9']."','".$_POST['t10']."')");
			$r=mysql_query("insert into login values('".$_POST['t4']."','".$_POST['t2']."')");
			if($r>0)
			{
					header("Location:Login.php");
			}
			}
	  ?>      </td>
    </tr>
  </table>
</form>
</body>
</html>
