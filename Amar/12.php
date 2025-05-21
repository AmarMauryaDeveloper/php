<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" cellspacing="0">
    <tr>
      <td width="15%">Enter First Number </td>
      <td width="2%">:</td>
      <td width="83%"><input type="text" name="t1" /></td>
    </tr>
    <tr>
      <td>Enter Second Number </td>
      <td>:</td>
      <td><input type="text" name="t2" /></td>
    </tr>
    <tr>
      <td>Enter Thierd Number </td>
      <td>:</td>
      <td><input type="text" name="t3" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="cub" /></td>
      <td>&nbsp;</td>
      <td><?php
	  			if(isset($_POST['S']))
				{
					$l=$_POST['t1'];
					$b=$_POST['t2'];
					$h=$_POST['t3'];
					$cub=2*($l+$b)*$h;
					echo "Surface Srea of a Cuboid=$cub";
				}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
