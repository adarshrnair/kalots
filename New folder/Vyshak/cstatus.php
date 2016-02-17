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


$que="select * from event";
$reque=mysql_query($que);
$rows = mysql_num_rows($reque);
$i=0;
						  while($quere=mysql_fetch_array($reque))
						  {
						  $asd[$i]=$quere['ename'];
						  $asd2[$i]=$quere['year'];
						  $i++;
						  }
						  
						  
if(isset($_POST['Submit']))
{
$enam=$_REQUEST['ev'];
$stat=$_REQUEST['st'];
echo $status;
echo $ename;
$qry1="update event set status='$stat' where ename='$enam'";
if(mysql_query($qry1))
{
	?>
    <script>alert("Successfully changed");</script><?php   
    
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
	<h3>Welcome Admin - Change Status 
         
          <a href="ahome.php"><input type="button"  id="submit" value="Home" > </a>
          <a href="cstatus.php"><input type="button"  id="submit" value="Change Status" > </a>
                  <a href="logout.php"><input type="button"  id="logs" value="Log-out" > </a></h3>
	</td>
  </table>
  <table>
 <tr>
	<td height="66">
	<h3>Event : 
	  <label>
	  <select name="ev" id="ev">
        <option>Select</option>
        
        <?php
						 
				 $arrlength = count($asd);
						for($x = 0; $x <  $arrlength; $x++) {
     						
							
				 ?><option value=" <?php echo $asd[$x] ?> "><?php echo $asd[$x] ?> </option>
        <?php
							} ?>
            </select>
	  </label>
	</h3>	</td>
 
 <tr>
	<td>
	<h3>Status: 
	  <label>
	  <select name="st" id="st">
	    <option>Select</option>
	    <option value="1">Active</option>
	    <option value="0">Inactive</option>
	    </select>
	  </label>
	</h3>
	</td>
 
 <tr>
	<td>
	<h3>
	  <label>
	  <input type="submit" name="submit" id="Submit" value="Submit">
	  </label>
	</h3>	</td>
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
