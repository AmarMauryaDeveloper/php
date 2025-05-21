<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body style="background:red;">
<table width="100%" border="0" cellspacing="0">
<tr><td><?php include('header.php'); ?></td></tr>
<tr><td height="400px" valign="top" style="background-color:#CCCC66;">
<?php
		mysql_connect('localhost','root','');
		mysql_select_db('cts');
		
		$q=mysql_query("select * from news");
		while($a=mysql_fetch_array($q))
		{
		echo "";
		}
		
		?>
<table width="100%" border="1" cellspacing="0" style="color:black; font-size:larger;">
  <tr>
    <td width=""><div align="center">News Id </div></td>
    <td width=""><div align="center">News Title</div></td>
    <td width=""><div align="center">Details</div></td>
    <td width=""><div align="center">Post date and time</div></td>
  </tr>
  <?php
  $r=mysql_query("select * from news");
  while($a=mysql_fetch_array($r))
  {
  echo "<tr>
  <td>$a[0]</td>
  <td>$a[1]</td>
  <td>$a[2]</td>
  <td>$a[3]</td>
  </tr>";
  }
  ?>
</table>
</td></tr>
<tr><td><?php include('footer.php'); ?></td></tr>
</table>
</body>
</html>
