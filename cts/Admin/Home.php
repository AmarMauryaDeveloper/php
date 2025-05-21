<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="Design/css/bootstrap.min.css">
<style>
	.he{
		border:5px solid red; 
		border-radius:50px 50px 50px 50px;
		padding:5px 5px 5px 5px;
		width:200px;
		
	}
	.me{
		border-radius:100%;
		border:10px solid #0000FF;	
	}
</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="1" cellspacing="0">
    <tr>
      <td><?php include('Header.php')?></td>
    </tr>
    <tr>
      <td><table width="100%" border="1" cellspacing="0">
        <tr>
          <td style="background:black"; width="33%"><br/>
		     <center><a class="he" href="Home.php">Home .</a><br /></br></br>
		       <a class="he" href="Gallery.php">Gallery</a><br /></br></br>
		      <a class="he" href="policeStation.php">PolicStation</a><br /></br></br>
		      <a class="he" href="CrimeComplain.php">CrimeComplain</a><br /></br></br>
			  <a class="he" href="Missingvalvable.php">MissingValvable</a></center><br />
		  </td>
          <td style="background:black;"width="33%">
		   <center><img class="me" src="image/CTS_Logo.webp" height="200px"width="200px"/></center>
		  </td>
          <td style="background:black"; width="33%"><br/>
		     <center><a class="he" href="faq.php">Faq . .</a><br /></br></br>
		     <a class="he" href="News.php">News . .</a><br /></br></br>
		     <a class="he" href="Contatus.php">Contatus</a><br /></br></br>
			 <a class="he" href="Missingperson.php">MissingPerson</a><br /></br></br>
			 <a class="he" href="GeneralComplan.php">GeneralComplan</a></center><br/>
		  </td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><?php include('Footer.php')?></td>
    </tr>
  </table>
</form>
</body>
</html>
