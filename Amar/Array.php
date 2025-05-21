<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<?php
		//index array
		$aar1 = array("car1","car2","car3");
		$arr1[3] =array("car4");	
		{
		//associate arry
		$arr2 = array(
			'name' => 'Bhagirath Giri',
			'Company' => 'Wscube tech',
			'age' => 21,
			'ststus' => true,
		);
			$arr2['test'] = "testing";
			//mult daimnsal
						$arr2 = array(
			'name' => 'Bhagirath Giri',
			'Company' => 'Wscube tech',
			'contact' => array("1236547","741125852239*9"),
			'age' => 21,
			'ststus' => true,
		);
			$arr2['test'] = "testing";
			
			$arr3 = [
			1,
			2,
			3,
			4,
			5,
			6,
			7,
			8,
			9
		];
			echo "<pre>";
			print_r($arr3);
			echo "</pre>";
		}
		
?>
</body>
</html>
