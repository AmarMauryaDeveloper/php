<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<style>
.header a {
  float: left;
  color: black;
  line-height: 20px;
}

.header a.logo {
  font-size: 25px;
  margin-top:5px;
  margin-bottom:5px;
  
}
.header-right {
  float: right;
}
.navbar {
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 5px 5px;
  }
.subnav {
  float: left;
}

.subnav .subnavbtn {
  font-size: 10px;  
  color: white;
  padding: 5px 5px;
  background-color: inherit;
  margin-top:3px;
  margin-bottom:3px;
 
  
  }
.navbar a:hover, .subnav:hover .subnavbtn {
color:red;
  background-color:yellow;
}
.he{
background:linear-gradient(red,orange,black);
font-size:72pt;
font-weight:bolder;
height:200px;
width:100%;
color:#99ff66;
text-align:center;
margin:auto;
text-shadow:1px 1px 1px #919191,1px 2px 1px #919191,1px 3px 1px #919191,1px 4px 1px #919191,1px 1px 5px #919191,1px 6px 1px #919191,
1px 18px 3px rgba(16,16,16,8.4);
}
</style>
</head>

<body>
<div class="header">
<div class="navbar">
 <a href="#default" class="logo">Crime Tracking System</a>
  <div class="header-right">
  <div class="subnav">
    <button class="subnavbtn"><a href="reghome.php">Home</a></button>
    </div> 
  <div class="subnav">
    <button class="subnavbtn"><a href="about.php">About</a></button>
    </div> 
	<div class="subnav">
    <button class="subnavbtn"><a href="Policestation.php">PoliceStation</a></button>
  </div>
  <div class="subnav">
  <button class="subnavbtn"> <a href="generalcomp.php">Gernalcomplain</a></button>
  </div>
  <div class="subnav">
 <button class="subnavbtn"><a href="crimecomplane.php">Crimecomplain</a></button>
   </div>
  <div class="subnav">
    <button class="subnavbtn"><a href="missingvariable.php">Missingvaluable</a></button>
  </div>
  <div class="subnav">
    <button class="subnavbtn"><a href="missingperson.php">Missingperson</a></button>
  </div>
  <div class="subnav">
    <button class="subnavbtn"><a href="../home.php">Logout</a></button>
  </div>
  
</div>
</div>
</div>
<div class="he">CRIME TRACKING SYSTEM<div>
</body>
</html>
