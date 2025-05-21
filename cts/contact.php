<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Design/css/bootstrap.min.css">
</head>
<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="100%" border="1" cellspacing="0">
    <tr>
      <td><?php include('header.php');?></td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0" style="background:#AA9F55">
        <tr>
          <td width="15%">User Name </td>
          <td width="3%">:</td>
          <td width="82%"><label>
            <input name="t1" type="text" id="t1" />
          </label></td>
        </tr>
        <tr>
          <td>Contact Number </td>
          <td>:</td>
          <td><label>
            <input name="t2" type="text" id="t2" />
          </label></td>
	  </tr>
        <tr>
          <td>Email Id </td>
          <td>:</td>
          <td><label>
            <input name="t3" type="email" id="t3" />
          </label></td>
        </tr>
        <tr>
          <td>Purpose</td>
          <td>:</td>
          <td><label>
            <input name="t4" type="text" id="t4" />
          </label></td>
        </tr>
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td><label>
            <input name="t5" type="text" id="t5" />
          </label></td>
        </tr>
        <tr>
          <td><label>
            <input name="G" type="submit" id="G" value="Go" class="btn btn-success" style="width:100px"/>
          </label></td>
          <td>&nbsp;</td>
          <td><?php
		  			mysql_connect('localhost','root','');
					mysql_select_db('cts');
					if(isset($_POST['G']))
					{
					$q=mysql_query("insert into contact values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$_POST['t5']."')");
					if($q>0)
					{
						
						echo"Record inserted sucessfully";
					}
					}
		  ?></td>
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
