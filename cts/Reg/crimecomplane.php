<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-1ZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9s+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="../Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
function checkPassword() {
    let password = document.getElementById("password").value;
    let confirmpassword = document.getElementById("confirm-password").value;
    console.log(password, confirm - password);
    let message = document.getElementById("message");
    if (password.length != 0) {
      if (password == confirmpassword) {
        message.textContent = "Password match";
        message.style.color = "#00FF00"
      } else {
        message.textContent = "Password does not match";
        message.style.color = "#FF0000";
      }
    }
    else {
      alert("All details are compulsory. Please fill all details.");
      message.textContent = "";
    }
  }

  var uploadField = document.getElementById("myfile");

uploadField.onchange = function() {
    if(this.files[0].size > 102400){
       alert("File is too big! File size should be 100kb.");
       this.value = "";
    };
};
</script>
<style>

* {
  margin: 0;
  padding: 0;
  padding-bottom: 2px;
  box-sizing: border-box;
  font-family: 'Montserrat', sans-serif;
}

body {
	
	background-size: 400% 400%;
	animation: gradient 15s ease infinite;
	height: 100vh;
 
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
}

.wrapper {
  max-width: 650px;
  width: 100%;
  background: white;
  margin: 50px auto;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
  padding: 30px;
  border-radius: 1em;
  border-width: 4px;
  border-style: solid;
  border-image: linear-gradient(to top left, #fe1e50 0%, #282881 100%) 1;
}

.wrapper .title {
  font-size: 28px;
  font-weight: 900;
  margin-bottom: 25px;
  color: #fe1e50;
  text-transform: uppercase;
  text-align: center;
}

.wrapper .form {
  width: 100%;

}

.wrapper .form .inputfield {
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}

.wrapper .form .inputfield label {
  width: 200px;
  color: darkred;
  margin-right: 10px;
  font-size: 14px;
  font-weight: bold;
}

.wrapper .form .inputfield .input,
.wrapper .form .inputfield .textarea {
  width: 100%;
  outline: none;
  border: 1px solid #fe1e50;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

.wrapper .form .inputfield .textarea {
  width: 100%;
  height: 125px;
  resize: none;
}

.wrapper .form .inputfield .custom_select {
  position: relative;
  width: 100%;
  height: 37px;
}

.wrapper .form .inputfield .custom_select:before {
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #fe1e50 transparent transparent transparent;
  pointer-events: none;
}

.wrapper .form .inputfield .custom_select select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #fe1e50;
  border-radius: 3px;
}

.wrapper .form .inputfield .input:focus,
.wrapper .form .inputfield .textarea:focus,
.wrapper .form .inputfield .custom_select select:focus {
  border: 1px solid #282881;
}

.wrapper .form .inputfield p {
  font-size: 14px;
}

.wrapper .form .inputfield .check {
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}

.wrapper .form .inputfield .check input[type="checkbox"] {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.wrapper .form .inputfield .check .checkmark {
  width: 15px;
  height: 15px;
  border: 1px solid #fe1e50;
  display: block;
  position: relative;
}

.wrapper .form .inputfield .check .checkmark:before {
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark {
  background: #282881;
}

.wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark:before {
  display: block;
}

.wrapper .form .inputfield .btn {
  width: 40%;
  padding: 8px 10px;
  font-size: 15px;
  font-weight: bold;
  border: 0px;
  background: linear-gradient(to bottom right, #fe1e50 0%, #282881 100%);
  color: #fff;
  cursor: pointer;
  border-radius: 3px;
  outline: none;
}

.wrapper .form .inputfield .btn:hover {
  background: linear-gradient(to top left, #fe1e50 0%, #282881 100%);

}

.wrapper .form .inputfield:last-child {
  margin-bottom: 0;
}

@media (max-width:420px) {
  .wrapper .form .inputfield {
    flex-direction: column;
    align-items: flex-start;
  }

  .wrapper .form .inputfield label {
    margin-bottom: 5px;
  }

  .wrapper .form .inputfield.terms {
    flex-direction: row;
  }

  #btn, #gender{
    flex-direction: row;
    align-items: flex-start;
  }
  #hobbies{
    display:inline-block;
    width: 30%;
    
  }
  
}

#radio {
  margin: 0 10px 0 10px;
}

#btn,
#phone-codes {
  display: flex;
  justify-content: space-evenly;
}

#phone-codes {
  width: 20%;
  height: 37px;

}

.hobbies {
  position: relative;
  display: contents;
  justify-content: flex-start;
}

#phone-number {
  width: 83%;
}

#message {
  font-size: 14px;
  margin: 2px 0;
  display: inline-block;
  color: black;
  padding: 5px 150px;
}

#name {
  text-transform: capitalize;
}
#file-size{
  color: #fe1e50;
}
</style>
</head>

<body style="background-color:red;">
<form id="form1" name="form1" method="POST" action="" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="0">
<tr>
<td><?php include('regheader.php'); ?></td>
</tr>
<tr>
<td height="400px" valign="top" style="background:#CCFF33;"> 

<div class="wrapper" style="background:#CCFF99;">
    <div class="title">Crime Complain Form
    </div>
      <div class="form">

        <div class="inputfield">
          <label>Crime Type :</label>
          <div class="custom_select">
            <select id="" name="t1" required>
              <option value="">--Select crime type--</option>
              <option>muder</option>
              <option>chori</option>
              <option>simagling</option>
              <option>supari</option>
              <option>firouti</option>
			  </select>
			  </div>
			  </div>
        <div class="inputfield">
          <label>Title :</label>
          <input type="text" class="input" name="t2" placeholder="title">
        </div>

        <div class="inputfield">
          <label for="">Any Suspect :</label>
          <input type="text" class="input" name="t3" placeholder="Any suspect">
        </div>

        <div class="inputfield">
          <label for="">Any Proof :</label>
          <input type="upload" class="input" name="t4" placeholder="Any proof" />
        </div>

        <div class="inputfield">
          <label>Crime Location</label>
          <input type="text" class="input" name="t5" placeholder="Crime location">
        </div>

        <div class="inputfield">
          <label>Involbe Person :</label>
          <input type="text" class="input"  name="t6" placeholder="Involbe Person">
        </div>

        <div class="inputfield">
          <label>Hide Your Identity :</label>
          <input type="text" onkeyup='check()' class="input" name="t7" placeholder="Hide Your Identity">
        </div>

        <p id="message"></p>

        <div class="inputfield">
          <label for="">Contact Number :</label>
          <div class="custom-select" id="phone-codes">
            <select id="phone-code">
              <option value="+91">+91</option>
			  <option value="+92">+92</option>
            </select>
          </div>
          <input type="tel" class="input" name="t8" placeholder="Enter your phone number">
        </div>

        <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="t9" id="" cols="30" rows="5" placeholder="Enter your address"
            pattern="^[a-zA-Z][a-zA-Z0-9-_.]{5,12}$" maxlength="100" required></textarea>
        </div>

        

        <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" name="check" value="Declared" required>
            <span class="checkmark"></span>
          </label>
          <p>I hereby declare that the above information provided is true and correct.</p>
        </div>

        <div class="inputfield" required>
          <div data-netlify-recaptcha="true"></div>
        </div>

        <div class="inputfield btns" id="btn">
          <input type="submit" value="Register" class="btn" onclick="checkPassword()" name="r">
          <button type="reset" value="Reset" class="btn">Reset</button>
        </div>
 <?php
	  mysql_connect('localhost','root','');
	  mysql_select_db('cts');
	  if(isset($_POST['r']))
	  {
	  session_start();
	 $q=mysql_query("insert into crimecomplain values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4'].     
	  "','".$_POST['t5']."','".$_POST['t6']."','".$_POST['t7']."','".$_POST['t8']."','".$_POST['t9']."','".$_SESSION["ei"]."',
	 '".date('Y-m-d H:i:s')."','0')");
	  if($q>0)
	  {
	  echo"recored inserted";
	  }
	  }
	  ?>	 
      </div>
    
  </div>
<?php
		mysql_connect('localhost','root','');
		mysql_select_db('cts');
		
		$q=mysql_query("select * from crimecomplain");
		while($a=mysql_fetch_array($q))
		{
		echo "";
		}
		
		?>
<table width="100%" border="1" cellspacing="0" style="font-size:larger;">
  <tr>
    <td width=""><div align="center">CCId </div></td>
    <td width=""><div align="center">Crime Type</div></td>
    <td width=""><div align="center">title</div></td>
    <td width=""><div align="center">Any suspect</div></td>
    <td width=""><div align="center">Any proof</div></td>
	<td width=""><div align="center">Crime location</div></td>
	<td width=""><div align="center">Invlobe person</div></td>
	<td width=""><div align="center">hide your Identity</div></td>
	<td width=""><div align="center">Contact Number</div></td>
	<td width=""><div align="center">Address</div></td>
	<td width=""><div align="center">Complainer Email id</div></td>
	<td width=""><div align="center">complain date and time</div></td>
	<td width=""><div align="center">Status</div></td>
  </tr>
  <?php
  session_start();
  $r=mysql_query("select * from crimecomplain where complineremailid='".$_SESSION["ei"]."'");
  while($a=mysql_fetch_array($r))
  {
  echo "<tr>
  <td>$a[0]</td>
  <td>$a[1]</td>
  <td>$a[2]</td>
  <td>$a[3]</td>
  <td>$a[4]</td>
  <td>$a[5]</td>
  <td>$a[6]</td>
  <td>$a[7]</td>
  <td>$a[8]</td>
  <td>$a[9]</td>
  <td>$a[10]</td>
  <td>$a[11]</td>
  <td>$a[12]</td>
  </tr>";
  }
  ?>
</table>

</td>
</tr>
<tr>
<td><?php include('regfooter.php');?></td>
</tr>
</table>
</form>
</body>
</html>
