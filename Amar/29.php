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
      <td width="17%">Enter Any Number Find Table </td>
      <td width="2%">:</td>
      <td width="81%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Get Table" /></td>
      <td>&nbsp;</td>
      <td><?php
	  			if(isset($_POST['t1']))
				{
					$a=$_POST['t1'];
					{
							$i=1;
							do {
								echo ($a*$i)."</br>";
								$i++;
							}
							while($i<=10);
					}
				}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
