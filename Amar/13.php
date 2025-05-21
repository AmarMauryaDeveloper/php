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
      <td width="20%">Enter Distance for Mile </td>
      <td width="1%">:</td>
      <td width="79%"><input type="text" name="t1" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="convert to km" /></td>
      <td>&nbsp;</td>
      <td><?php 
	  		if(isset($_POST['S']))
			{
				$c=$_POST['t1'];
				$km=$c*3;
				echo "Distanc into km=$km";
			}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
