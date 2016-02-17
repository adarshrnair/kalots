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

$qry="select * from event";
$res=mysql_query($qry);
 $i=0;
						  while($r=mysql_fetch_array($res))
						  {
						  $asd[$i]=$r['ename'];
						  $i++;
						  }
$rows = mysql_num_rows($res);				
				 
if(isset($_POST['Submit']))
{
	$stat=$_REQUEST['sta'];
	$eve=$_REQUEST['eve'];
	$query="update event set status='$stat' where ename='$eve'";
	$quer="delete from student_personal where event='$eve'";
	if(mysql_query($query))
	{
		if($stat==0)
		{
			mysql_query($quer);
			?><script type="text/javascript">alert("Successfully Changed and remove");</script><?php
		}
		else if($stat==1) 
		{
			?><script type="text/javascript">alert("Successfully Changed");</script><?php
		}
	}
	else
	{
		?><script type="text/javascript">alert("Sorry, Error occured in status changing");</script><?php
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
         
          <a href="ahome.php">
          <input type="button"  id="submit" value="Home" >
</a><a href="logout.php">
<input type="button"  id="logs" value="Log-out" > </a></h3>
	</td>
  </table>
  <table width="200" border="0">
    <tr>
             <td width="491"><div align="right">Event : </div></td>
             <td width="493"><label>
               <div align="left">
                 <select name="eve" id="eve">
                 <option>Select</option>
                 <?php
                 $arrlength = count($asd);
						for($x=0;$x<$arrlength;$x++) 
						{				 ?>
                            <option value="<?php echo $asd[$x]?>"><?php echo $asd[$x]?></option>
							<?php } ?>
                 </select>
               </div>
      </label></td>
           </tr>
           <tr>
             <td height="69"><div align="right">Status : </div></td>
             <td><label>
               <div align="left">
                 <select name="sta" id="sta">
                   <option>Select</option>
                   <option value="1">Active</option>
                   <option value="0">Inactive</option>
                 </select>
                 <label></label>
               </div>
             </label></td>
           </tr>
           <tr>
             <td height="52">&nbsp;</td>
             <td><label>
               <div align="left">
                 
                          <input type="submit" name="Submit" id="Submit" value="Submit"  >
                        
               </div>
             </label></td>
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
