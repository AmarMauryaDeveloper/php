<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" cellspacing="0">
    <tr>
      <td width="21%" >Categry Name </td>
      <td width="1%">:</td>
      <td width="78%"><input name="t1" type="text" id="t1"/></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Save" style="background-color:#2A00FF;color:#FFFBF0;"/></td>
      <td>:</td>
      <td><?php
	  			mysql_connect('localhost','root','');
				mysql_select_db('phpdb'); 
	  			if(isset($_POST['S']))
				{
				$q=mysql_query("insert into cat values('','".$_POST['t1']."')");
				if($q>0)
				{
					echo"Record inserted secussfully";
				}
				}
	  ?></td>
    </tr>
	<tr>
	<td><table width="100%" border="1" cellspacing="0" bgcolor="pink">
      <tr>
        <td>CategryId</td>
        <td>CategryName</td>
      </tr>
	  <?php
	  		$q=mysql_query("select * from cat");
			while($a=mysql_fetch_array($q))
			{
			echo"<tr>
        <td>$a[0]</td>
        <td>$a[1]</td>
      </tr>	";
	  }
	  ?>
      
    </table></td>
	</tr>
  </table>
</form>
</body>
</html>
