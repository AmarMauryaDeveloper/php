<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</head>

<body>
<form id="form1" name="form1" method="POST" action="" enctype="multipart/form-data">
<table width="100%" cellspacing="o" border="0">
<tr>
<td><?php include('Aheader.php');?></td>
</tr>
<tr>
<td height="px" valign="top">
<?php
		mysql_connect('localhost','root','');
		mysql_select_db('cts');
		
		$q=mysql_query("select * from missingvaluble");
		while($a=mysql_fetch_array($q))
		{
		echo "";
		}
		
		?>
<table width="100%" border="1" cellspacing="0">
  <tr>
    <td width=""><div align="center">MVId </div></td>
    <td width=""><div align="center">ValubleName</div></td>
    <td width=""><div align="center">Valuble type</div></td>
	<td width=""><div align="center">Price</div></td>
    <td width=""><div align="center">Any suspect</div></td>
	<td width=""><div align="center">Complainer Email id</div></td>
	<td width=""><div align="center">Any Reword</div></td>
	<td width=""><div align="center">Contact Number</div></td>
	<td width=""><div align="center">Address</div></td>
	<td width=""><div align="center">Details</div></td>
	<td width=""><div align="center">complain date and time</div></td>
	<td width=""><div align="center">Status</div></td>
  </tr>
  <?php
  $r=mysql_query("select * from missingvaluble");
  while($a=mysql_fetch_array($r))
  {
  echo "<tr>
  <td>$a[0]</td>
  <td>$a[1]</td>
  <td>$a[2]</td>
  <td>$a[3]</td>
  <td>$a[4]</td>
  <td>$a[5]</td>
  <td>$a[6]</td>
  <td>$a[7]</td>
  <td>$a[8]</td>
  <td>$a[9]</td>
  <td>$a[10]</td>
  <td>$a[11]</td>
  </tr>";
  }
  ?>
</table>
</td>
</tr>
<tr>
<td><?php include('footer.php');?></td>
</tr>
</table>
</form>
</body>
</html>
