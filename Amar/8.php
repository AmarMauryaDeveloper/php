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
      <td width="24%">Enter value of radies </td>
      <td width="1%">:</td>
      <td width="75%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td><input name="c" type="submit" id="c" value="aoc" />
      <input name="cir" type="submit" id="cir" value="circofesnce" /></td>
      <td>&nbsp;</td>
      <td>
	  <?php
	  		if(isset($_POST['c']))
			{
				$r=$_POST['t1'];
				$aoc=pi()*pow($r,2);
				echo "Area of crical=$aoc";
			}
			if(isset($_POST['cir']))
			{
				$r=$_POST['t1'];
				$cir=2*pi()*$r;
				echo "ciirfance=$cir";
			}
	  ?>
	  </td>
    </tr>
  </table>
</form>
</body>
</html>
