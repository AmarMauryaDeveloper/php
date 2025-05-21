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
      <td><?php include('header.php');?></td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td width="14%">Complain Title</td>
          <td width="2%">:</td>
          <td width="84%"><label>
            <input name="t1" type="text" id="t1" />
          </label></td>
        </tr>
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td><label>
            <input name="t2" type="text" id="t2" />
          </label></td>
        </tr>
       
        <tr>
          <td>Conplaner</td>
          <td>:</td>
          <td><label>
            <input name="t4" type="text" id="t4" />
          </label></td>
        </tr>
       
        <tr>
          <td><label>
            <input name="S" type="submit" id="S" value="Submit" />
          </label></td>
          <td>&nbsp;</td>
          <td><?php
		  			mysql_connect('localhost','root','');
					mysql_select_db('cts');
					if(isset($_POST['S']))
					{
						session_start();
						$q=mysql_query("insert into gc values('','".$_POST['t1']."','".$_POST['t2']."','".$_SESSION["ei"]."','".$_POST['t4']."','".date('y-m-d H:i:s')."','0')");
						if($q>0)
						{
							echo"intred successfully";
						}
					}
		  ?></td>
        </tr>
      </table></td>
    </tr>
		 </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td>General Complan Id</td>
          <td>Complaintitle</td>
          <td>Detail</td>
          <td>Complainr Email Id</td>
          <td>Conplaner</td>
          <td>Complain Date Time</td>
          <td>Status</td>
		  <td>
		  	<?php
				 mysql_connect('localhost','root','');
	             mysql_select_db('cts');
	         	$ss=mysql_query("select * from gc");
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
           </tr>";
		}
			?>
		  </td>
        </tr>
      </table></td>
    </tr>
    <tr>
    <tr>
      <td><?php include('footer.php')?></td>
    </tr>
  </table>
</form>
</body>
</html>
