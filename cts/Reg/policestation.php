<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data" >
   <table width="100%" border="" cellspacing="0" style="background:#2A7FAA">
    <tr>
      <td><?php include('header.php');?></td>
    </tr>
    <tr>
      <td>
	  		<table colspan="3"><table width="100%" border="1" cellspacing="0">
      <tr>
        <td>Police Stastion Id </td>
		<td>Chaukil Charge</td>
		<td>COG Number</td>
        <td> Agent Name</td>
        <td>Agent Contact Number 1</td>
		<td>Agent Contact Number 2</td>
		<td>Agent Email Id</td>
	 	<td>Thana Prabhari</td>
		<td>Address</td>
		<td>Pincode</td>
		<td>Police Stastion Photo</td>
      <td>
	
        <?php
	  mysql_connect('localhost','root','');
	  mysql_select_db('cts');
	  	$v=mysql_query("select * from policeststion");
		while($c=mysql_fetch_array($v))
		{
			echo"<tr>
        <td>$c[0]</td>
        <td>$c[1]</td>
        <td>$c[2]</td>
        <td>$c[3]</td>
	    <td>$c[4]</td>
	    <td>$c[5]</td>
		<td>$c[6]</td>
	    <td>$c[7]</td>
		<td>$c[8]</td>
    	<td>$c[9]</td>
		<td><img src='../Admin/gphoto/$c[10]' height='200px' width='200px'/></td>
      </tr>";
		}
	  ?>
	  </td>
	  </tr>
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

