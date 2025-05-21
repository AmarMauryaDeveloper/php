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
      <td width="23%">Enter any number find days and month </td>
      <td width="1%">:</td>
      <td width="76%"><input name="t1" type="text" id="t1" /></td>
    </tr>
    <tr>
      <td><input name="S" type="submit" id="S" value="Fiind days &amp; month" /></td>
      <td>&nbsp;</td>
      <td><?php
	  			if(isset($_POST['S']))
				{
			$a=$_POST['t1'];
			switch($a)
			{
				case 1;
				echo"Sunday"."<br/>"."January";
				break;
				case 2;
				echo"Monday"."<br/>"." February";
				break;
				case 3;
				echo"Tuesday"."<br/>"."March";
				break;
				case 4;
				echo"Wednesday"."<br/>"."April";
				break;
				case 5;
				echo"Thersday"."<br/>"."May";
				break;
				case 6;
				echo"Friday"."<br>"."June";
				break;
				case 7;
				echo"satarday"."<br/>"."July";
				break;
				case 8;
				echo"Agust";
				break;
				case 9;
				echo"September";
				break;
				case 10;
				echo"October";
				break;
				case 11;
				echo "November";
				break;
				case 12;
				echo"Decomber";
				break;
				default;
				echo "Enter valid number your option is wrong";
				break;
				}
			
			}
	  ?></td>
    </tr>
  </table>
</form>
</body>
</html>
