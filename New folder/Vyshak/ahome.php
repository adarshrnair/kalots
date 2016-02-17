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
	<h3><u>Welcome Admin</u></h3>
	</td>
    </table>
     <table>
 <tr>
	<td>
                  <a href="acreate.php"><input type="button"  id="b4" value="Create Event" > </a> 

	</td>
    </table>
         <table>
 <tr>
	<td>
                  <a href="aimp.php"><input type="button"  id="b4" value="Manage Data" > </a> 

	</td>
    </table>
         <table>
 <tr>
	<td>
                  <a href="aview.php"><input type="button"  id="b4" value="View Students" >
         </a>

	</td>
    </table>
             <table>
 <tr>
	<td>
                  <a href="assigncapt.php"><input type="button"  id="b4" value="Assign captain" > </a>

	</td>
    </table>
    <table>
 <tr>
	<td>
                  <a href="adchangepass.php"><input type="button"  id="b4" value="Change Password" > </a>

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
