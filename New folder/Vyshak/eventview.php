<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title>
<style type="text/css">
<!--
.style1 {color: #336699}
.style3 {
	font-weight: bold;
	font-size: 18px;
}
.style4 {font-size: 18px}
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
	<h3>Welcome Admin - View Event 
         
          <a href="ahome.php"><input type="button"  id="submit" value="Home" > </a>
          <a href="changestatus.php"><input type="button"  id="submit" value="Change Status" > </a>
                  <a href="logout.php"><input type="button"  id="logs" value="Log-out" > </a></h3>
	</td>
  </table>
         <table width="717" height="80" border="1" bordercolor="#000000">
<tr>
                   <td width="331" height="36"><div align="center" class="style1 style4">                     <strong>Event Name</strong></div></td>
      <td width="309"><div align="center">                     <span class="style1 style3"><strong>Year</strong></span></div></td>
                   <td width="338"><div align="center">                     <span class="style5 style1 style4"><strong>Status</strong></span></div></td>
           </tr>
                 
                 <?php
				 $qry1="select * from event";
					$res1=mysql_query($qry1);
                 while($r1=mysql_fetch_array($res1))
				 {
				 ?>
                 <tr>
				 	<td height="36"><?php echo $r1["ename"]; ?></td>
                   <td><?php echo $r1["year"]; ?></td>
                   <td><?php echo $r1["status"]; ?></td>
                   </tr>
                   <?php
				   
				 }
				 ?>
                 
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
