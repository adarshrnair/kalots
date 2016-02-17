<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title><head>
<link rel ="stylesheet" type = "text/css" href = "style.css">


</head>
    <body>

 <?php
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);
$msg="";
if(isset($_POST['Submit']))
{
$un=$_SESSION['uname'];
$h=$_REQUEST['h'];
$id=$_REQUEST['id'];
$query="select * from student where id='$id' and house='$h'";
$result=mysql_query($query);
$r=mysql_fetch_array($result);						  
$idi=$r['id'];
$hou=$r['house'];



if($idi==$id)
{
$qry="update tb_login set value=2 where id='$id'";
if(mysql_query($qry))
{
$_SESSION['pwd']=$nwpwd;
?><script type="text/javascript">alert("Successfully Set Caption ");</script><?php
 
}
else
{
 ?><script type="text/javascript">alert("Error occured in updation, try later");</script><?php
}
}
else
{
 ?><script type="text/javascript">alert("id missmatch");</script><?php
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
	<h3>Set Caption</h3>
	</td>
  </table>
     
          
                 <table width="683" height="28" border="0" align="center">
            <tr>
              <td width="495" height="24"><div align="right"><strong><em>House</em></strong></div></td>
                    <td width="495"><label>
                      <div align="left">
                        <label>
                        <select name="h" id="h">
                          <option value="1">Select</option>
                          <option value="Anandamayi">Anandamayi</option>
                          <option value="Chinmayi">Chinmayi</option>
                          <option value="Jyothirmayi">Jyothirmayi</option>
                          <option value="Amritamayi">Amritamayi</option>
                        </select>
                        </label>
                      </div>
              </label></td>
                   </tr></table>
<table>
                    <tr>
                      <td width="494"><div align="right"><strong><em>Student id</em></strong></div></td>
                      <td width="494"><div align="left">
                        <input name="id" type="text" id="id" />
                      </div></td>
                    </tr></table>
                    
                    <table>
                    <tr>
                      <td width="494">&nbsp;</td>
                      <td width="494"><label>
                        <div align="left">
                        <input type="submit" name="Submit" id="Submit" value="Set Caption" >  
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
