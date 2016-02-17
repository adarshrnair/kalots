<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title>
<head>
<link rel ="stylesheet" type = "text/css" href = "style.css">
</head>
    <body>
    <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);
$uid=$_SESSION['uname'];

$qry="select * from student where id='$uid'";
$res=mysql_query($qry);
$r=mysql_fetch_array($res);
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
	<h3><u><?php echo "Welcome ".$r['name'] ;?></u></h3>
	</td>
    </table>
     
         <table>
 <tr>
	<td>
                  <a href="cgroups.php"><input type="button"  id="b4" value="Add Groups" > 
                  </a> 

	</td>
    </table>
         <table>
 <tr>
	<td>
                  <a href="#"><input type="button"  id="b4" value="View Students" > 
                  </a>

	</td>
    </table>
             <table>
 <tr>
	<td>
                  <a href="capchangepass.php"><input type="button"  id="b4" value="Change Password" > 
                  </a>

	</td>
    </table>
             <table>
 <tr>
	<td>
                  <a href="logout.php"><input type="button"  id="log" value="Log-out" > </a>

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
