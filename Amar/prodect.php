<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style>
.he{
	background-color:#00DFFF;
}
</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table class="he" width="100%" border="1" cellspacing="0">
    <tr>
      <td width="12%">ProdId</td>
      <td width="1%">:</td>
      <td width="87%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Name</td>
      <td>:</td>
      <td><input name="t2" type="text" id="t2" />
      <label>
      <input name="Se" type="submit" id="Se" value="Submit" />
      </label></td>
    </tr>
    <tr>
      <td>Prise</td>
      <td>:</td>
      <td><input name="t3" type="text" id="t3" /></td>
    </tr>
    <tr>
      <td>CategryName</td>
      <td>:</td>
      <td><select name="t4" id="t4">
        <option>[-Select-]</option>
		<?php
		      mysql_connect('localhost','root','');
       		  mysql_select_db('phpdb');
			  $x=mysql_query("select * from cat");
			  while($b=mysql_fetch_array($x))
			{
				echo"<option>$b[1]</option>";
			}	
		?>
      </select>      </td>
    </tr>
    <tr>
      <td>Detail</td>
      <td>:</td>
      <td><input name="t5" type="file" id="t5" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Save" /></td>
      <td>&nbsp;</td>
      <td><?php
	  			
				if(isset($_POST['S']))
				{
					$p=$_FILES['t5']['name'];
					$t=$_FILES['t5']['tmp_name'];
					$l="pho/";
					move_uploaded_file($t,$l.$p);
					$q=mysql_query("insert into prod values(".$_POST['t1'].",'".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4']."','".$p."')");
					if($q>0)
					{
						echo"Record instred successfully";
					}
				}
				
	  ?></td>
    </tr>
	<tr><?php
	  if(isset($_POST['Se']))
	  {
	  	$ss=mysql_query("select * from prod where Name like '%".$_POST['t2']."%'");
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
	  		$q=mysql_query("select * from prod");
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
		<td colspan="3">
		 <table width="100%" border="1" cellspacing="0">
          <tr>
            <td>ProdectId</td>
            <td>Name</td>
            <td>Prise</td>
            <td>CategryName</td>
            <td>Photo</td>
          </tr>
		  <?php
		  			$q=mysql_query("select * from prod");
					while($b=mysql_fetch_array($q))
					{
						echo"<tr>
            <td>$b[0]</td>
            <td>$b[1]</td>
            <td>$b[2]</td>
            <td>$b[3]</td>
            <td><img src='pho/$b[4]' height='200px' width='200px'/></td>
          </tr>";
					}
		  ?>
        </table></td>
	</tr>
  </table>
</form>
</body>
</html>
