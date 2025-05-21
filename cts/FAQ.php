<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style>
.container{
background:#00FF66;
height:400px;
font-size:20px;
}
</style>
</head>

<body>
<div><?php include('header.php');?></div>
<div>

<?php
		mysql_connect('localhost','root','');
		mysql_select_db('cts');
		
		$q=mysql_query("select * from faq");
		while($a=mysql_fetch_array($q))
		{
		echo "";
		}
		
		?>
<table width="100%" border="1" cellspacing="0" style="background-color:#CCFF33; font-size:x-large;">
  <tr>
    <td width=""><div align="center">FAQ-Id </div></td>
    <td width=""><div align="center">Question</div></td>
    <td width=""><div align="center">Answer</div></td>
  </tr>
  <?php
  $r=mysql_query("select * from faq");
  while($a=mysql_fetch_array($r))
  {
  echo "<tr>
  <td>$a[0]</td>
  <td>$a[1]</td>
  <td>$a[2]</td>
  </tr>";
  }
  ?>
</table>

</div>
<div><?php include('footer.php');?></div>
</body>
</html>
