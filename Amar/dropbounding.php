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
      <td width="11%">Prod Id </td>
      <td width="1%">:</td>
      <td width="88%"><select name="t1" id="t1">
        <option>[-Select-]</option>
		<?php
		mysql_connect('localhost','root','');
		mysql_select_db('phpdb');
		$x=mysql_query("select * from prod");
		while($a=mysql_fetch_array($x))
		{
			echo"<option>$a[0]</option>";
		}
										
		?>
            </select></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Go" /></td>
      <td>&nbsp;</td>
      <td>
	  			<tr>
					<td colspan="3">
								<?php
										
										if(isset($_POST['S']))
										{
										$q=mysql_query("select * from prod where prodId=".$_POST['t1']."");
										while($b=mysql_fetch_array($q))
										{
										if($q>0)
										{
											echo "<table>
															<tr>
																<td>Prod Id</td>
																<td>:</td>
																<td>$b[0]</td>
															</tr>
															<tr>
																<td>Name</td>
																<td>:</td>
																<td>$b[1]</td>
															</tr>
															<tr>
																<td>Prise</td>
																<td>:</td>
																<td>$b[2]</td>
															</tr>
															<tr>
																<td>Categry Name</td>
																<td>:</td>
																<td>$b[3]</td>
															</tr>
															<tr>
																<td>Photo</td>
																<td>:</td>
																<td><img src='Pho/$b[4]' height='200px' width='200px'></td>
															</tr>
											</table>";
										}
										}
										}
								?>					
						</td>
				</tr>
	     </td>
    </tr>
  </table>
</form>
</body>
</html>
