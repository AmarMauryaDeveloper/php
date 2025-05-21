<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="100%" border="1" cellspacing="0">
    <tr>
      <td><?php include('Header.php');?></td>
    </tr>
    <tr style="background:#FFFF55">
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td>MissingPersonId</td>
          <td>MissingPerson Name</td>
          <td>MissingPerson Contact Number</td>
          <td>MissingPerson Aadharcard Number</td>
          <td>Lastview Location</td>
          <td>Body Maek</td>
          <td>Body colour</td>
          <td>D O B</td>
          <td>Rewoed</td>
          <td>Complaner Email Id</td>
          <td>Complan Date Time</td>
          <td>Address</td>
          <td>MissingPerson Photo</td>
          <td>Status</td>
          <td>
		  <?php
		  		 mysql_connect('localhost','root','');
	  mysql_select_db('cts');
	  	$ss=mysql_query("select * from mp");
		while($c=mysql_fetch_array($ss))
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
		<td>$c[10]</td>
		<td>$c[11]</td>
		<td><img src='../Reg/mmp/$c[12]' height='200px' width='200px'/></td>
		<td>$c[13]</td>
      </tr>";
		}
		  ?>
		  </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><?php include('footer.php');?></td>
    </tr>
  </table>
</form>
</body>
</html>
