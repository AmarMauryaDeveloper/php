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
      <td width="26%">Enter First Number </td>
      <td width="2%">:</td>
      <td width="72%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Enter Second Number </td>
      <td>:</td>
      <td><input name="t2" type="text" id="t2" /></td>
    </tr>
    <tr>
      <td>Enter third Number </td>
      <td>:</td>
      <td><input name="t3" type="text" id="t3" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="aot" /></td>
      <td>&nbsp;</td>
      <td>
	  <?php
	  if(isset($_POST['S']))
	  {
	  	$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=$_POST['t3'];
		$s=($a+$b+$c)/2;
		$aot= sqrt($s*($s-$a)*($s-$b)*($s-$c));
		echo "Area of Triangle=$aot";
	  }
	  ?>
	  </td>
    </tr>
  </table>
</form>
</body>
</html>
