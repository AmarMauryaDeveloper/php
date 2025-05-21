<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
		#me{
			 background: linear-gradient(blue,cyan,blue);
                    height:200px;
                    text-align:center;
                    font-weight: bolder;
                    font-size: 80pt;
                    color: black;
                    text-shadow: 0 0 20px green, 0 20px pink,0 0 20px red;
		}
</style>
</head>
<body>
<table id="me" width="100%" cellspacing="0">
		<tr>
			<td>STUDENT </td>
		</tr>
</table>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" cellspacing="0">
    <tr>
      <td width="15%">Student Id </td>
      <td width="1%">:</td>
      <td width="84%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><input name="t2" type="text" id="t2" />
        <label>
        <input name="se" type="submit" id="se" value="Submit" />
      </label></td>
    </tr>
    <tr>
      <td>Branch</td>
      <td>:</td>
      <td><input name="t3" type="text" id="t3" /></td>
    </tr>
    <tr>
      <td>RollNo</td>
      <td>:</td>
      <td><input name="t4" type="text" id="t4" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Save" />
      <input name="D" type="submit" id="D" value="Delete" />
      <input name="U" type="submit" id="U" value="Update" /></td>
      <td>&nbsp;</td>
      <td><?php
	  			mysql_connect('localhost','root','');
				mysql_select_db('phpdb');
	  			if(isset($_POST['S']))
				{
					$q=mysql_query("insert into std values(".$_POST['t1'].",'".$_POST['t2']."','".$_POST['t3']."',".$_POST['t4'].")");
					if($q>0)
					{
						echo"Record inserted Successfully";
					}
				}
				if(isset($_POST['D']))
				{
					$q=mysql_query("delete from std where stdId=".$_POST['t1']."");
					if($q>0)
					{
						echo "Record deleted successfully";
					}
				}
				if(isset($_POST['U']))
				{
					$q=mysql_query("update std set name='".$_POST['t2']."',branch='".$_POST['t3']."',rollNo=".$_POST['t4']." where StdId=".$_POST['t1']."");
					if($q>0)
					{
						echo "Record Changed successfully";
					}
				}
				
				
				
	  ?></td>
    </tr>
	<tr>
	<table colspan="3"><table width="100%" border="0" cellspacing="0">
      <tr>
        <td>StudentId </td>
        <td>Name</td>
        <td> branch </td>
        <td>RollNo</td>
      </tr>
	  <?php
	  if(isset($_POST['se']))
	  {
	  	$ss=mysql_query("select * from std where Name like '%".$_POST['t2']."%'");
		while($c=mysql_fetch_array($ss))
		{
			echo"<tr>
        <td>$c[0]</td>
        <td>$c[1]</td>
        <td>$c[2]</td>
        <td>$c[3]</td>
      </tr>";
		}
	  }
	  else
	  {
	  		$q=mysql_query("select * from std");
			while($a=mysql_fetch_array($q))
			{
			echo"<tr>
        <td>$a[0]</td>
        <td>$a[1]</td>
        <td>$a[2]</td>
        <td>$a[3]</td>
      </tr>";
			}
		}
	  ?>
      
    </table></td>
	</tr>
  </table>
</form>
</body>
</html>
