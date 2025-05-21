<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
  <style>
            #he{
                background: linear-gradient(red,gray, blue);
                    height:200px;
                    text-align:center;
                    font-weight: bolder;
                    font-size: 72pt;
                    color: white;
                    text-shadow: 0 0 10px white,0 0 15px green,0 0 20px cyan;
            }
			#me{
				background:#AADFFF;
				color:white;
				
			}
        </style>
    </head>
    <body>
        <table border="0" width="100%" cellspacing="0"/>
                <tr>
                    <td id="he">
                        TEXT BOUNBING
                    </td>
                </tr>
<form id="form1" name="form1" method="post" action="">
  <table id="me" width="100%" border="1" cellspacing="0">
    <tr>
      <td width="11%">ProdId</td>
      <td width="2%">:</td>
      <td width="87%"><input name="t1" type="text" id="t1" />
      <input name="S" type="submit" id="S" value="Go" /></td>
    </tr>
    <tr>
      <td colspan="3">
	  <?php
	  	if(isset($_POST['S']))
		{
			mysql_connect('localhost','root','');
			mysql_select_db('phpdb');
			$q=mysql_query("select * from prod where prodId=".$_POST['t1']."");
			while($a=mysql_fetch_array($q))
			{
			echo "<table>
					<tr>
						<td>Prodect Id </td>
						<td>:</td>
						<td>$a[0]</td>
					</tr>
					<tr>
						<td>Name</td>
						<td>:</td>
						<td>$a[1]</td>
					</tr>
					<tr>
						<td>Prise</td>
						<td>:</td>
						<td>$a[2]</td>
					</tr>
					<tr>
						<td>Categray Name</td>
						<td>:</td>
						<td>$a[3]</td>
					</tr>
					<tr>
						<td>Prodect Photo</td>
						<td>:</td>
						<td><img src='pho/$a[4]' height='200px' width='200px'/></td>
					</tr>
			</table>";
			}
		}
	  ?>
	  </td>
    </tr>
  </table>
</form>
</body>
</html>
