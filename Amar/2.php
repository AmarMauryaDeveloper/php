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
      <td width="27%">Enter First Number </td>
      <td width="2%">:</td>
      <td width="71%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td>Enter Second Number </td>
      <td>:</td>
      <td><input name="t2" type="text" id="t2" /></td>
    </tr>
    <tr>
      <td><input name="p" type="submit" id="p" value="+" />
      <input name="s" type="submit" id="s" value="-" />
      <input name="m" type="submit" id="m" value="x" />
      <input name="d" type="submit" id="d" value="/" /></td>
      <td>&nbsp;</td>
      <td>
	  <?php
	  	if(isset($_POST['p']))
		{
			$a=$_POST['t1'];
			$b=$_POST['t2'];
			$c=$a+$b;
			echo "$a+$b=$c";
		}
		if(isset($_POST['s']))
		{
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=$a-$b;
		echo "$a-$b=$c";
		}
		if(isset($_POST['m']))
		{
		$a=$_POST['t1'];
		$b=$_POST['t2'];
		$c=$a*$b;
		echo "$a x $b=$c";
		}
		if(isset($_POST['d']))
 			{
				$a=$_POST['t1'];
				$b=$_POST['t2'];
				$c=$a/$b;
				echo "$a / $b=$c";
			}
	  ?></td>
    </tr>
  </table>
</form>
</body>

</html>
