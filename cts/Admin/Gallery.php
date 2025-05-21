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
    <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td width="16%">Criminal Name </td>
          <td width="2%">:</td>
          <td width="82%"><label>
            <input name="t1" type="text" id="t1" />
          </label></td>
        </tr>
        <tr>
          <td>Reword</td>
          <td>:</td>
          <td><label>
            <input name="t2" type="text" id="t2" />
          </label></td>
        </tr>
        <tr>
          <td>Aflete by </td>
          <td>:</td>
          <td><label>
            <input name="t3" type="text" id="t3" />
          </label></td>
        </tr>
        <tr>
          <td>Joined Year </td>
          <td>:</td>
          <td><label>
            <input name="t4" type="text" id="t4" />
          </label></td>
        </tr>
        <tr>
          <td>Profile Photo </td>
          <td>:</td>
          <td><input name="t5" type="file" id="t5" /></td>
        </tr>
        <tr>
          <td><label>
            <input name="S" type="submit" id="S" value="Submit" />
          </label></td>
          <td>&nbsp;</td>
          <td>
		  <?php
						mysql_connect('localhost','root','');
						mysql_select_db('cts');
						if(isset($_POST['S']))
						{
						   $p=$_FILES['t5']['name'];
							$t=$_FILES['t5']['tmp_name'];
							$l="Gpho/";
							move_uploaded_file($t,$l.$p);
							$q=mysql_query("insert into gallery values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$p."')");
							
						}
				?>		  </td>
        </tr>
      </table></td>
    </tr>
	<tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td>GALLERY ID</td>
          <td>CRIMANL NAME</td>
          <td>REWORD</td>
          <td>AFLATED BY</td>
          <td>JOYIND YEAR</td>
          <td>PROFILE PHOTO</td>
		  <td> 	 	 
		  		<?php 
					mysql_connect('localhost','root','');
					mysql_select_db('cts');
					$v=mysql_query("select * from gallery");
		while($c=mysql_fetch_array($v))
		{
			echo"<tr>
        <td>$c[0]</td>
        <td>$c[1]</td>
        <td>$c[2]</td>
        <td>$c[3]</td>
	    <td>$c[4]</td>
    	<td><img src='../Admin/Gpho/$c[5]' height='200px' width='200px'/></td>
      </tr>";
		}
	  ?>
		  </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><?php include('Footer.php');?></td>
    </tr>
  </table>
</form>
</body>
</html>
