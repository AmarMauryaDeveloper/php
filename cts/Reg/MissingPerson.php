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
          <td width="24%">Missing Person Name </td>
          <td width="2%">:</td>
          <td width="74%"><label>
            <input name="t1" type="text" id="t1" />
          </label></td>
        </tr>
        <tr>
          <td>Missing Person Contact Number </td>
          <td>:</td>
          <td><label>
            <input name="t2" type="text" id="t2" />
          </label></td>
        </tr>
        <tr>
          <td>Missing Person Aadharcard Number </td>
          <td>:</td>
          <td><label>
            <input name="t3" type="text" id="t3" />
          </label></td>
        </tr>
        <tr>
          <td>Last View Location </td>
          <td>:</td>
          <td><label>
            <input name="t4" type="text" id="t4" />
          </label></td>
        </tr>
        <tr>
          <td>Body Mark </td>
          <td>:</td>
          <td><label>
            <input name="t5" type="text" id="t5" />
          </label></td>
        </tr>
        <tr>
          <td>Body Color </td>
          <td>:</td>
          <td><label>
            <input name="t6" type="text" id="t6" />
          </label></td>
        </tr>
        <tr>
          <td>Reword</td>
          <td>:</td>
          <td><label>
            <input name="t7" type="text" id="t7" />
          </label></td>
        </tr>
        <tr>
          <td>D O B </td>
          <td>:</td>
          <td><label>
            <input name="t8" type="text" id="t8" />
          </label></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td><label>
             <textarea name="t11" id="t11"></textarea>
          </label></td>
        </tr>
        <tr>
          <td>Missing Person Photo </td>
          <td>:</td>
          <td><label>
            <input name="t12" type="file" id="t12" />
          </label></td>
        </tr>
       
        <tr>
          <td><label>
            <input name="S" type="submit" id="S" value="Save" />
          </label></td>
          <td>&nbsp;</td>
          <td><?php
		  			mysql_connect('localhost','root','');
					mysql_select_db('cts');
					if(isset($_POST['S']))
					{
					 session_start();
					 $p=$_FILES['t12']['name'];
					 $t=$_FILES['t12']['tmp_name'];
					 $l="mp/";
				     move_uploaded_file($t,$l.$p);
					$q=mysql_query("insert into mp values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$_POST['t5']."','".$_POST['t6']."','".$_POST['t7']."','".$_POST['t8']."','".$_SESSION["ei"]."','".date('Y-m-d H:i:s')."','".$_POST['t11']."','".$p."','0')");
				     if($q>0)
				      {
							echo"Record inserted successfully";
				      }
				   }	
		  ?></td>
        </tr>
      </table>
	  </td>
    </tr>
		 <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td>MP Id</td>
          <td>MP Name</td>
          <td>MP Contact Number</td>
          <td>MP Aadharcard Number</td>
          <td>Lastview Location</td>
          <td>Body Maek</td>
          <td>Body colour</td>
          <td>D O B</td>
          <td>Rewoed</td>
          <td>Complaner Email Id</td>
          <td>Complan Date Time</td>
          <td>Address</td>
          <td>MP Photo</td>
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
		<td><img src='mmp/$c[12]' height='200px' width='200px'/></td>
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
