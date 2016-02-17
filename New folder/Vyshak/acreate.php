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
-->
</style><head>
    
    

<link rel ="stylesheet" type = "text/css" href = "style.css">
</head>
<body>
<?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);
if(isset($_POST['Submit']))
{
$ename=$_REQUEST['ename'];
$eyear=$_REQUEST['eyear'];

$qry1="INSERT INTO event(`ename`, `status`, `year`) VALUES ('$ename','1','$eyear')";
if(mysql_query($qry1))
{
	?>
    <script>alert("Successfully Registered");</script><?php 
    
        header("location:aimp.php");
    
    
}
else
{
 ?><script>alert("Sorry,An error occured");</script><?php
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
	<h3>Welcome Admin - Create Event 
        
                  <a href="ahome.php"><input type="button"  id="submit" value="Back" > </a> 
                  <a href="eventview.php"><input type="button"  id="submit" value="View Events" > </a>
                  <a href="logout.php"><input type="button"  id="logs" value="Log-out" > </a></h3>
	</td>
    </table>
         <table width="200" border="0">
           <tr>
             <td width="495"><div align="right"><span class="style1">Event Name :</span></div></td>
             <td width="495"><label>
             <div align="left">
               <input type="text" name="ename" id="ename">
             </div>
             </label></td>
           </tr>
           <tr>
             <td height="61"><div align="right"><span class="style1">Year :</span></div></td>
             <td><label>
             <div align="left">
               <select name="eyear" id="eyear">
                 <option>Select</option>
                 <option value="2016">2016</option>
                 <option value="2017">2017</option>
                 <option value="2018">2018</option>
                 <option value="2019">2019</option>
                 <option value="2020">2020</option>
                 <option value="2021">2021</option>
                 <option value="2022">2022</option>
                 <option value="2023">2023</option>
                 <option value="2024">2024</option>
                 <option value="2025">2025</option>
               </select>
             </div>
             </label></td>
           </tr>
           <tr>
             <td height="45">&nbsp;</td>
             <td><label>
               <div align="left">
                 <input type="submit" name="Submit" id="Submit" value="Submit">
               </div>
             </label></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
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
<?php
}
else
{
 header("location:index.php");
}
?>
</html>
