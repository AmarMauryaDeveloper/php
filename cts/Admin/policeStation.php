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
      <td><table width="100%" border="1" cellspacing="0" style="background:#FF9F55">
        <tr>
          <td width="17%">Chauki Incharge </td>
          <td width="2%">:</td>
          <td width="81%"><label>
             <input type="text" name="t1" type="text" id="t1" />
          </label></td>
        </tr>
        <tr>
          <td>COG Number </td>
          <td>:</td>
          <td><label>
            <input type="text" name="t2" type="text" id="t2" />
          </label></td>
        </tr>
        <tr>
          <td>Agent Name </td>
          <td>:</td>
          <td><label>
            <input type="text" name="t3" type="text" id="t3" />
          </label></td>
        </tr>
        <tr>
          <td>Agent Contact No1 </td>
          <td>:</td>
          <td><label>
             <input type="text" name="t4" type="text" id="t4" />
          </label></td>
        </tr>
        <tr>
          <td>Agent Contacr No2 </td>
          <td>:</td>
          <td><label>
            <input type="text" name="t5" type="text" id="t5" />
          </label></td>
        </tr>
        <tr>
          <td>Agent Email_Id </td>
          <td>:</td>
          <td><label>
		   <input type="text" name="t6" type="email" id="t6" />
          </label></td>
        </tr>
        <tr>
          <td>Thana Prabhari </td>
          <td>:</td>
          <td><label>
            <input type="text" name="t7" type="text" id="t7" />
          </label></td>
        </tr>
        <tr>
          <td>Address</td>
          <td>:</td>
          <td><label>
            <textarea type="text" name="t8" id="t8"></textarea>
          </label></td>
        </tr>
        <tr>
          <td>Pin Code </td>
          <td>:</td>
          <td><label>
             <input type="text" name="t9" type="text" id="t9" />
          </label></td>
        </tr>
        <tr>
          <td>Police station Photo </td>
          <td>:</td>
          <td><label>
             <input type="file" name="t10" type="text" id="t10" />
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
						    $p=$_FILES['t10']['name'];
							$t=$_FILES['t10']['tmp_name'];
							$l="gphoto/";
							move_uploaded_file($t,$l.$p);
						$q=mysql_query("insert into policeststion values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$_POST['t5']."','".$_POST['t6']."','".$_POST['t7']."','".$_POST['t8']."','".$_POST['t9']."','".$p."')");
						if($q>0)
						{
							echo"Record inserted Successfuly";
						}
					}
		  ?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
	 <tr>
      <td>
	  		<table colspan="3"><table width="100%" border="1" cellspacing="0" style="background:#D49FAA">
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
		<td><img src='gphoto/$c[10]' height='200px' width='200px'/></td>
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
