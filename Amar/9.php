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
      <td width="23%">Enter Fiest Numner </td>
      <td width="2%">:</td>
      <td width="75%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Enter Second Number </td>
      <td>:</td>
      <td><input name="t2" type="text" id="t2" /></td>
    </tr>
    <tr>
      <td><input name="s" type="submit" id="s" value="rec" /></td>
      <td>&nbsp;</td>
      <td><?php
	  		if(isset($_POST['s']))
			{
				$l=$_POST['t1'];
				$b=$_POST['t2'];
				$rec=sqrt(pow($l,2)+pow($b,2));
				echo "Diagonal of rectangle=$rec";
			}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
