<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title>
<head>
<link rel ="stylesheet" type = "text/css" href = "style.css">
<script type="text/javascript">
function valid()
{
var u=document.forms["form1"]["cpass"].value;
if(u==null||u=="")
{
alert("you must be enter the current password");
return false;
}
var p=document.forms["form1"]["npass"].value;
if(p==null||p=="")
{
alert("enter the new password");
return false;
}
var n1=document.forms["form1"]["conpass"].value;
if(p!=n1)
{
 alert("Password missmatch");
 return false;
}
}
</script>

</head>
    <body>

 <?php
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);
$msg="";
if(isset($_POST['Submit']))
{
$un=$_SESSION['uname'];
$pwd1=$_REQUEST['cpass'];
$nwpwd=$_REQUEST['npass'];
$c=$_REQUEST['conpass'];
$query="select * from tb_login where id='$un'";
$result=mysql_query($query);
$r=mysql_fetch_array($result);
$pwd=$r['password'];
if($pwd1==$pwd)
{
$qry="update tb_login set password='$nwpwd' where id='$un'";
if(mysql_query($qry))
{
$_SESSION['pwd']=$nwpwd;
?><script type="text/javascript">alert("Successfully Password Changed");</script><?php
 
}
else
{
 ?><script type="text/javascript">alert("Error occured, try later");</script><?php
}
}
else
{
 ?><script type="text/javascript">alert("password missmatch");</script><?php
}
}
?>

<form id="form1" name="form1" method="post" action="">
<table>
<tr>
	<td>
		 
		<h1>
		AMRITAKALOTSAVAM
		</h1>
		
	</td>
	<td>
	<img id = "m" src = "logo.png">
	</td>
	
</tr>

</table>
<table>
 <tr>
	<td>
	<h3>Change Password</h3>
	</td>
  </table>
     
          
                 <table width="683" height="28" border="0" align="center">
            <tr>
                      <td width="495" height="24"><div align="right"><b><i>Current  password </i></b></div></td>
                    <td width="495"><label>
                        <div align="left">
                          <input name="cpass" type="text" id="cpass" />
                    </div>
              </label></td>
                   </tr></table>
<table>
                    <tr>
                      <td width="494"><div align="right"><b><i>New password </i></b></div></td>
                      <td width="494"><div align="left">
                        <input name="npass" type="text" id="npass" />
                      </div></td>
                    </tr></table>
                    <table>
                    <tr>
                      <td width="494"><div align="right"><b><i>Confirm password</i></b></div></td>
                      <td width="494"><div align="left">
                        <input name="conpass" type="text" id="conpass" />
                      </div></td>
                    </tr></table>
                    <table>
                    <tr>
                      <td width="494">&nbsp;</td>
                      <td width="494"><label>
                        <div align="left">
                        <input type="submit" name="Submit" id="Submit" value="Ok" onClick="return valid()" >  
                      </div>
                      </label></td>
                    </tr>
        </table>

	
             <table>
 <tr>
	<td>
                  <p>&nbsp;</p>
                  <a href="ahome.php">
                  <input type="button"  id="b4" value="Home" > 
                  
                  <a href="logout.php">
                  <input type="button"  id="log" value="Log-out" > 
                  </a>
                    
      </td>
    </table>
                   
                 
    
    <table>    
         <tr>
             <td>
                
                  <p> &copy; Amritakalotsavam 2016 </p>
                   
             </td>
        </tr>
</table>
   

    </form>
</body>
<?php
}
else
{
 header("location:index.php");
}
?>
</html>
