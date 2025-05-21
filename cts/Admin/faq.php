<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
  <table width="100%" border="1" cellspacing="0">
    <tr>
      <td><?php  include('Header.php');?></td>
    </tr>
    <tr style="background-color:#7FDFFF">
      <td><table width="100%" border="1" cellspacing="0">
        <tr >
          <td width="18%">Question</td>
          <td width="2%">:</td>
          <td width="80%"><textarea name="t1" id="t1"></textarea></td>
          <td colspan="3"><label>*If you want to delkete and updatete then insert here FAQID below textbox </label></td>
          </tr>
        <tr>
          <td>Answer</td>
          <td>:</td>
          <td><textarea name="t2" id="t2"></textarea></td>
          <td width="80%">FAQID</td>
          <td width="80%">:</td>
          <td width="80%"><label>
          <input name="t3" type="text" id="t3" />
</label></td>
        </tr>
        <tr>
          <td><label>
            <input name="S" type="submit" id="S" value="Save" class="btn btn-success" />
            <input name="u" type="submit" id="u" value="Update" class="btn btn-primary" />
            <input name="d" type="submit" id="d" value="Delete"  class="btn btn-danger"/>
          </label></td>
          <td>&nbsp;</td>
          <td><?php
						mysql_connect('localhost','root','');
						mysql_select_db('cts');
						if(isset($_POST['S']))
						{
							$q=mysql_query("insert into faq values('','".$_POST['t1']."','".$_POST['t2']."')");
							if($q>0)
							{
								echo"Record inserted successfully";
							}
						}
							if(isset($_POST['u']))
							{
							$q=mysql_query("update faq question='".$_POST['t1']."', answer='".$_POST['t2']."' where faq_id=".$_POST['t3']."");
							 if($q>0)
							  {
							    echo"Record update successfully";
							  }
							}
							if(isset($_POST['d']))
								{
									$q=mysql_query("delete from faq where faq_id=".$_POST['t3']."");
									if($q>0)
										{
											echo"Record delete successfully";
										}
								}
						
				?></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><?php  include('Footer.php');?></td>
    </tr>
  </table>
</form>
</body>
</html>
