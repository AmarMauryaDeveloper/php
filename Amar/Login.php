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
      <td width="10%">Email Id </td>
      <td width="2%">:</td>
      <td width="88%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input name="t2" type="text" id="t2" /></td>
    </tr>
    <tr>
      <td><input name="L" type="submit" id="L" value="Login" /></td>
      <td>&nbsp;</td>
      <td><?php
	  			mysql_connect('localhost','root','');
				mysql_select_db('phpdb');
				if(isset($_POST['L']))
				{
					$r=mysql_query("select * from login where EmaiId='".$_POST['t1']."' and Password='".$_POST['t2']."'");
					if($r>0)
					{
						header("Location:cat.php");
					}
				}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
