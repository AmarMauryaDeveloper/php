<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="../Design/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="../Design/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
			 user_name: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    }
                }
            },
			 user_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    }
                }
            },
			confirm_password: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please confirm your Password'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                  stringLength: {
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            },
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
</script>
<style>
#success_message{ display: none;}
</style>
</head>

<body style="background:red;">
<table width="100%" border="0" cellspacing="0">
<tr>
<td><?php include('regheader.php'); ?></td>
</tr>
<tr>
<td height="400px" valign="top" style="background-color:#99FF33; font-size:larger;">

 <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration for Genral Complain</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Complain Title :</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="t1" placeholder="complain title" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Details :</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="t2" placeholder="Details" class="form-control"  type="text">
    </div>
  </div>
</div>

   <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="t3" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Contact No.</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="t4" placeholder="+91 " class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" name="s" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
	
 <?php
	  mysql_connect('localhost','root','');
	  mysql_select_db('cts');
	  if(isset($_POST['s']))
	  {
	  session_start();
	 $q=mysql_query("insert into gernalcomplain values('','".$_POST['t1']."','".$_POST['t2']."','".$_POST['t3']."','".$_POST['t4'].     
	  "','".date('Y-m-d H:i:s')."','0')");
	  if($q>0)
	  {
	  echo"recored inserted";
	  }
	  }
	  ?>	 
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
 <?php
		mysql_connect('localhost','root','');
		mysql_select_db('cts');
		
		$q=mysql_query("select * from gernalcomplain");
		while($a=mysql_fetch_array($q))
		{
		echo "";
		}
		
		?>
<table width="100%" border="1" cellspacing="0">
  <tr>
    <td width=""><div align="center">GCId </div></td>
    <td width=""><div align="center">Complaintitle</div></td>
    <td width=""><div align="center">detail</div></td>
    <td width=""><div align="center">Complainer email id</div></td>
    <td width=""><div align="center">contact Noumber</div></td>
	<td width=""><div align="center">Complain date and time</div></td>
	<td width=""><div align="center">status</div></td>
  </tr>
  <?php
  session_start();
  $r=mysql_query("select * from gernalcomplain");
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
</body>
</html>
