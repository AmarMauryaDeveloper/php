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
          <td width="10%">Title</td>
          <td width="2%">:</td>
          <td width="88%"><label>
            <input name="t1" type="text" id="t1" />
          </label></td>
        </tr>
        <tr>
          <td>Detail</td>
          <td>:</td>
          <td><label>
            <textarea name="t2" id="t2"></textarea>
          </label></td>
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
							$q=mysql_query("insert into news values('','".$_POST['t1']."','".$_POST['t2']."')");
							{
								echo"inserted Values";
							}
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
