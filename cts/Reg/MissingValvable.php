<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="100%" border="" cellspacing="0">
    <tr>
      <td><?php include('header.php');?></td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td width="20%">Valvable Name</td>
          <td width="2%">:</td>
          <td width="78%"><label>
            <input name="t1" type="text" id="t1" />
          </label></td>
        </tr>
        <tr>
          <td>Valvable Type </td>
          <td>:</td>
          <td><label>
            <input name="t2" type="radio" value="gold" />Gold
            <input name="t2" type="radio" value="silver"/>Silver
            <input name="t2" type="radio" value="vichal" />Vichal
            <input name="t2" type="radio" value="Electronic Devices" />Electronic Devices
            <input name="t2" type="radio" value="dimend" />Dimend
            <input name="t2" type="radio" value="other" />Other
          </label></td>
        </tr>
        <tr>
          <td>Prise</td>
          <td>:</td>
          <td><label>
            <input name="t3" type="text" id="t3" />
          </label></td>
        </tr>
        <tr>
          <td>Any Suspect </td>
          <td>:</td>
          <td><label>
            <input name="t4" type="text" id="t4" />
          </label></td>
        </tr>
       
        <tr>
          <td>Any Reword </td>
          <td>:</td>
          <td><label>
            <input name="t6" type="text" id="t6" />
          </label></td>
        </tr>
        <tr>
          <td>Contact Number </td>
          <td>:</td>
          <td><label>
            <input name="t7" type="text" id="t7" />
          </label></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td><textarea name="t8" id="t8"></textarea></td>
        </tr>
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td><label>
            <input name="t9" type="text" id="t9" />
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
				    $q=mysql_query("insert into mv values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$_SESSION["ei"]."','".$_POST['t6']."','".$_POST['t7']."','".$_POST['t8']."','".$_POST['t9']."','".date('y-m-d H:i:s')."','0')");
					{
						echo"successfully";
					}
				   
				   }
		  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
	 <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td>Missing Valvable Id</td>
          <td>Valvable Name</td>
		  <td>Valvable Type</td>
		  <td>Prise</td>
		  <td>Any Suspect</td>
		  <td>Complainer Email Id</td>
		  <td>Any Reword</td>
		  <td>Contact Number</td>
		  <td>Address</td>
		  <td>Detail</td>
		  <td>Complainer Date Time</td>
		  <td>Statues</td>
		  <td>
          <?php
	  mysql_connect('localhost','root','');
	  mysql_select_db('cts');
	  	$ss=mysql_query("select * from mv");
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
      </tr>";
		}
	  ?>
		  </td>
        </tr>
      </table>
	  </td>
    </tr>
      <td><?php include('footer.php');?></td>
    </tr>
  </table>
</form>
</body>
</html>
