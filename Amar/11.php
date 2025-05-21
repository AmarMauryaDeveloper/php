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
      <td width="20%" height="23">Enter Firwst Number </td>
      <td width="2%">:</td>
      <td width="78%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="hem" /></td>
      <td>&nbsp;</td>
      <td><?php
	   		if(isset ($_POST['S']))
			{
				$r=$_POST['t1'];
				$hem=pi()*pow($r,2);
				echo "Area of a hemisphere=$hem";
			}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
