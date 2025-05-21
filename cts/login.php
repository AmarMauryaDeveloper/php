 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
  <link rel="stylesheet" type="text/css" href="Design/css/bootstrap.min.css">
 <style>
 .container{
   background-color:#17d8e2;
   border-radius:5px;
   box-shadow:0px 0px 10px rgba(0, 0, 0, 0.1);
    padding:20px;
    width:300px;
   }

  .lo {
   display: flex;
   flex-direction: column;
  }

  .co{
    text-align: center;
    margin-bottom: 20px;
   }

  .for {
     display: flex;
     flex-direction: column;
      margin-bottom: 15px;
      }

  label {
   margin-bottom: 5px;
   } 

   input[type="email"],
   input[type="password"] {
    padding: 10px;
     border: 1px solid #ccc;
     border-radius: 5px;
   }
  .me {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
   }
  .me:hover {
    background-color:#233e5a;
   }
  </style>
</head>
<body>
<form class="lo" action="#" enctype="multipart/form-data" method="post" with="100%">
<div><?php include('header.php')?></div>
  <div class="container">
      <h1 class="co">Login</h1>
      <div class="for">
        <label for="email">Email ID:</label>
         <input type="email" id="email" name="t1" id="t1">
      </div>
      <div class="for">
        <label for="password">Password:</label>
          <input type="password" id="password" name="t2" id="t2">
      </div>
      <div>
       <input type="submit" value="Login" name="L" id="L" class="me">
        <?php
         mysql_connect('localhost','root','');
        mysql_select_db('cts');
           if(isset($_POST['L']))
         {
          $r=mysql_query("select * from login where EmaiId='".$_POST['t1']."' and Password='".$_POST['t2']."'");
         if($r>0)
        {
         session_start();
         $_SESSION["ei"]=$_POST['t1'];
         header("location:reg");
        }
		else
		{
		echo"please valid email-id and paasword";
		}
      }
     ?>
	 </div>
	 </div>
    </form>
	 <div><?php include('footer.php');?></div>
</body>
</html>