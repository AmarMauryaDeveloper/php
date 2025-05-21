<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
$age =68;
 // 	$age=22;
	//if($age>=18)
	//{
		//echo"Yes you can vote";
	//}
	//elseif($age==17){
	//echo"Please wait one more year";
	//}
	//elseif($age == 16){
		//	echo"Please wait two more year";
	//}
	//else{
		//	echo "You cannot vote";
	//}
	// nested if-else
	if($age>=18)
	{
		if($age<66)
		{
			echo"Yes you can vote";
		}
		else{
				echo"You cannot vote anymore";
		}
		}
		else{
				echo"You cannot vote";
		}
	
?>
</body>
</html>
