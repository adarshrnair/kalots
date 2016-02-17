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

$qry="select * from program";
$res=mysql_query($qry);
 $i=0;
						  while($r=mysql_fetch_array($res))
						  {
						  	if($r['type']=='group')
							{
						  		$asd[$i]=$r['name'];
						  		$i++;
							}
						  }
$rows = mysql_num_rows($res);
$uid=$_SESSION['uname'];

$qry2="select * from student_personal where id='$uid'";
$res2=mysql_query($qry2);
$r2=mysql_fetch_array($res2);
$hou=$r2['house'];

if(isset($_POST['Submit']))
{
$gname=$_REQUEST['gnam'];
$pname=$_REQUEST['pnam'];
$qry1="insert into groupevents(gname,house,pname)values('$gname','$hou','$pname')";
if(mysql_query($qry1))
{
	 ?><script>alert("Successfully Registered");</script><?php header("location:addmember.php");
}
else
{
	?><script>alert("error occured");</script><?php
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

     
         <table width="200" border="0">
         <tr>
           <td height="48">&nbsp;</td>
         </tr>
           <tr>
             <td width="494" height="54"><div align="right">Group Name : </div></td>
             <td width="496"><label>
               <div align="left">
                  <input type="text" name="gnam" id="gnam">
                 </div>
             </label></td>
           </tr>
           <tr>
             <td height="52"><div align="right">Program Name : </div></td>
             <td><label>
               <div align="left">
                  <select name="pnam" id="pnam">
                  <option value="-">Select</option>
                          <?php
						 
						 
                           if($rows)
				 {
				 $arrlength = count($asd);
						for($x = 0; $x <  $arrlength; $x++) {
     						
							
				 ?>
                            <option value=" <?php echo $asd[$x] ?> "> <?php echo $asd[$x] ?> </option>
							<?php
							}} ?>
                 </select>
                 </div>
             </label></td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td>&nbsp;</td>
           </tr>
           <tr>
             <td>&nbsp;</td>
             <td><label>
               <div align="left">
                 <input type="submit" name="Submit" id="Submit" value="Add Members" >
                 </div>
             </label></td>
           </tr>
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
