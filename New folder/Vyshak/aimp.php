<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title>
<style type="text/css">
<!--
.style3 {
	color: #336699;
	font-weight: bold;
}
-->
</style><head>
<link rel ="stylesheet" type = "text/css" href = "style.css">
</head>
    <body>
    <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);


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
	<h3>Welcome Admin 
        
                  <a href="ahome.php"><input type="button"  id="submit" value="Back" > </a> 
                  <a href="eventview.php"><input type="button"  id="submit" value="View Events" > </a>
                  <a href="logout.php"><input type="button"  id="logs" value="Log-out" > </a></h3>
	</td>
    </table>
    <table>
 <tr>
	<td>
                  <H3>
                    UPLOAD STUDENT DATA 
                    </H3> 

	</td>
    </table>
         <table>
 <tr>
	<td>
                 <iframe src ="uploadstud.php"></iframe> 

	</td>
    </table>
        <table>
 <tr>
	<td>
                  <H3>
                    UPLOAD PROGRAM DATA 
                    </H3> 

	</td>
    </table>
         <table>
 <tr>
	<td>
                 <iframe src ="uploadprog.php"></iframe> 

	</td>
    </table>
             <table>
 <tr>
	<td>
                  

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
