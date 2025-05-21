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
          <td width="18%">Crime Type </td>
          <td width="2%">:</td>
          <td width="80%"><label>
            <input name="t1" type="radio" value="murder" />Mudder
            <input name="t1" type="radio" value="rape" />Rape
            <input name="t1" type="radio" value="raubbering" />Raubbering
            <input name="t1" type="radio" value="kidnaping" />Kidnaping
            <input name="t1" type="radio" value="dovery" />Dovery
            <input name="t1" type="radio" value="rpsycho killer" />Psycho killer
            <input name="t1" type="radio" value="ransom" />Ransom
          </label></td>
        </tr>
        <tr>
          <td>Title</td>
          <td>:</td>
          <td><label>
            <input name="t2" type="text" id="t2" />
          </label></td>
        </tr>
        <tr>
          <td>Any Supect </td>
          <td>:</td>
          <td><label>
            <input name="t3" type="text" id="t3" />
          </label></td>
        </tr>
        <tr>
          <td>Any Proof </td>
          <td>:</td>
          <td><label>
            <input name="t4" type="text" id="t4" />
          </label></td>
        </tr>
        <tr>
          <td>Crime Location </td>
          <td>:</td>
          <td><label>
            <input name="t5" type="text" id="t5" />
          </label></td>
        </tr>
        <tr>
          <td>Involve Person</td>
          <td>:</td>
          <td><label>
            <input name="t6" type="text" id="t6" />
          </label></td>
        </tr>
        <tr>
          <td>Hide Your Identity</td>
          <td>:</td>
          <td><label>
            <input name="t7" type="radio" value="radiobutton" />
          Yes 
          <input name="t7" type="radio" value="radiobutton" />
          No</label></td>
        </tr>
        <tr>
          <td>Contact Number </td>
          <td>:</td>
          <td><label>
            <input name="t8" type="text" id="t8" />
          </label></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td><label>
            <input name="t9" type="text" id="t9" />
          </label></td>
        </tr>
       <tr><td>
            <input name="S" type="submit" id="S" value="Submit" />
          </label></td>
          <td>&nbsp;</td>
          <td><?php
		  				mysql_connect('localhost','root','');
						mysql_select_db('cts');
						if(isset($_POST['S']))
						{
						session_start();
						$q=mysql_query("insert into crimecomplain values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$_POST['t5']."','".$_POST['t6']."','".$_POST['t7']."','".$_POST['t8']."','".$_POST['t9']."','".$_SESSION['ei']."','".date('Y-m-d H-i-s')."','0')");
					if($q>0)
					{
						echo"successfully";
					}		
						}
		  ?>
       </td>
        </tr>
      </table></td>
    </tr>
	<tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td>CrimeComplain Id</td>
          <td>CrimeType</td>
          <td>Title</td>
          <td>Any Suspect</td>
          <td>Any Proof</td>
          <td>Crime Location</td>
          <td>InvolvePerson</td>
          <td>HideYourIdenty</td>
          <td>Contact Number</td>
          <td>Address</td>
          <td>Complerner Email Id</td>
          <td>Compline Date Time</td>
          <td>Status</td>
          <td>
		  		<?php
					 mysql_connect('localhost','root','');
	                 mysql_select_db('cts');
	               	$ss=mysql_query("select * from crimecomplain");
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
		              <td>$c[12]</td>
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
