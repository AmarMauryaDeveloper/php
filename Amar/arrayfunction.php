<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Array</title>
</head>
<?php
	$cars = array(
		0 => "car1",
		1 => "car2",
		2 => "car3",
		3 => "car4",
		4 => "car5",
		5 => "car6",
	);
	$x = 5;
	/*if (is_array($cars))
	var_dump(is_array($cars));
	{
		echo "cars is an array";
	}
	 else{
	 	echo"cars is not an array";
	 }*/
	 echo array_search('car2' , $cars);
	
	echo "<pre>";
    print_r($cars);
    echo "</pre>";
?>
<body>
</body>
</html>
