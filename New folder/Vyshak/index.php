<html>
<title> Home </title>
<head>
<link rel ="stylesheet" type = "text/css" href = "style.css">
    <script type="text/javascript">
function valid()
{
var u=document.forms["form1"]["uname"].value;
if(u==null||u=="")
{
alert("Username/Password incorrect");
return false;
}
var p=document.forms["form1"]["pass"].value;
if(p==null||p=="")
{
alert("Username/Password incorrect");
return false;
}
}
</script> 
</head>
    <body>
    <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);
if(isset($_POST['Submit']))
{
  $user=$_REQUEST['uname'];
  $psw=$_REQUEST['pass'];
  $qry="select * from tb_login
      where id='$user' and password='$psw' ";
  $res=mysql_query($qry);
   if($res==NULL)
  {
    ?><script type="text/javascript">alert("Username/password incorrect");</script><?php
  }
  else
  {
  if($u=mysql_fetch_array($res))
  {
   session_start();
 $_SESSION['uname']=$_REQUEST['uname'];
 $_SESSION['pass']=$_REQUEST['pass']; 
  if($u['value']==5)
  {
    header("location:ahome.php");
  }  
  
  else if($u['value']==1)
  {
    header("location:uhome.php");
  }
 else if($u['value']==2)
  {
    header("location:chome.php");
  }
}
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
	<h3><u>LOG-IN</u></h3>
	</td>
    </table>
     <table>
 <tr>
	<td>
	<h3>User name : <input type="text" name="uname" id="uname"></h3>
	</td>
    </table>
    <table>
 <tr>
	<td>
	<h3>Password : <input type="password" name="pass" id = "pass"></h3>
	</td>
    </table>     
<table>    
         <tr>
             <td>
                 <br>
                
                    &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;                     &nbsp;&nbsp;&nbsp;&nbsp;
                 <input type="submit" name="Submit" id="Submit" value="Login" onClick="return valid()" >   
                <a href="register.php"><input type="button"  id="Submit" value="Register" > </a>  </h3>
             </td>
        </tr>
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
</html>
