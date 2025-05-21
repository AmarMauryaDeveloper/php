<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<style>


.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px red, -13px -13px 20px yellow,13px 13px 20px red;
}
.wrapper:hover{
color:#FFFFFF;
background:linear-gradient(red,orange,black);
}
.logo img {
    width: 20%;
    height: 60px;
	margin-left:115px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600px;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px yellow;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,-3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 1.5rem;
    color: #03A9F4;
}




</style>
</head>
<body>
<div><?php  include('header.php'); ?></div>
<form id="form1" name="form1" method="POST" action="" enctype="multipart/form-data">
<div class="wrapper">
        <div class="logo">
            <img src="photo/download (1).png" alt="">
        </div>
        <div class="text-center mt-4 name">
            Admin Login
        </div>
        
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="t1" id="email-id" placeholder="Email-id">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="t2" id="pwd" placeholder="Password">
            </div>
          
            <input name="s" type="submit" id="s" value="Login" class="btn btn-primary" />
            <div class="text-center fs-6">
            <a href="#">Forget password?</a> or <a href="#">Sign up</a>
			</div>
		<?php
	  mysql_connect('localhost','root','');
	  mysql_select_db('cts');
	  if(isset($_POST['s']))
	  {
	  $q=mysql_query("select * from alogin where EmailId='".$_POST['t1']."' and Password='".$_POST['t2']."'");
	   if($q>0)
	  {
	  header("location:Admin/home.php");
	  }
	  else
	  {
	  echo"Enter valid EmailId and Password";
	  }
	  }
	  ?>
  </div>
	
	 <div><?php include('footer.php');  ?></div>
	 </form>
</body>
</html>
