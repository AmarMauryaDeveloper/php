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
      <td width="15%">Enter First Number </td>
      <td width="2%">:</td>
      <td width="83%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Enter Scoand Number</td>
      <td>:</td>
      <td><input name="t2" type="text" id="t2" /></td>
    </tr>
    <tr>
      <td>Enter Thirad Number</td>
      <td>:</td>
      <td><input name="t3" type="text" id="t3" /></td>
    </tr>
    <tr>
      <td>Enter FourthNumber</td>
      <td>:</td>
      <td><input name="t4" type="text" id="t4" /></td>
    </tr>
    <tr>
      <td height="47">Enter Fivth Number</td>
      <td>:</td>
      <td><input name="t5" type="text" id="t5" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Get Result" /></td>
      <td>&nbsp;</td>
      <td><?php
	  			if(isset($_POST['S']))
				{
					$a=$_POST['t1'];
					$b=$_POST['t2'];
					$c=$_POST['t3'];
					$d=$_POST['t4'];
					$e=$_POST['t5'];
					$avg=($a+$b+$c+$d+$e)/5;
					if($avg>=75 && $avg<=100)
					{
						echo"you Pass With Honer & your ganing % = $avg %";
					}
					else if($avg>=60 && $avg<75)
					{
							echo"you Pass With 1st divigen & your ganing % = $avg %";
					}
					else if($avg>=50 && $avg<60)
					{
							echo"you Pass With 2nd divigen & your ganing % = $avg %";
					}
					else if($avg>=33 && $avg<50)
					{
							echo"you Pass With 3rd divison & your ganing % = $avg %";
					}
					else
					{
						echo"you Fail  & your ganing % = $avg %";
					}
				}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
