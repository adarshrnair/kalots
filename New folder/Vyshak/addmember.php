<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title>
    <style type="text/css">
<!--
.style1 {
	color: #000000;
	font-size: 18px;
}
.style3 {color: #000000}
.style5 {color: #000000; font-size: 18px; font-weight: bold; }
-->
    </style>
    <head>
<link rel ="stylesheet" type = "text/css" href = "style.css">
</head>
    <body>
    <?php 
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);

$uid=$_SESSION['uname'];

$qry2="select * from student_personal where id='$uid'";
$res2=mysql_query($qry2);
$r2=mysql_fetch_array($res2);
$hou=$r2['house'];

$qry3="select * from student_personal where house='$hou'";
$res3=mysql_query($qry3);

$query="select * from groupevents where house='$hou'";
$result=mysql_query($query);
 $i=0;
						  while($re=mysql_fetch_array($result))
						  {
						  	
						  		$asd[$i]=$re['gname'];
						  		$i++;
							
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
     <h3> ADD STUDENTS</h3>

	</td>
    </table>
         <table>
            <tr>
                
             
	<td>Group Name : 
        <select name="cn">
          <option>Select</option>
                      <?php
						 
						 

				 $arrlength = count($asd);
						for($x = 0; $x <  $arrlength; $x++) {
     						
							
				 ?>
                            <option value=" <?php echo $asd[$x] ?> "> <?php echo $asd[$x] ?> </option>
							<?php
							} ?>
        </select> <label></label>           </td>
            </tr>
    
 <tr>
    </table>
    
        
             
<table width="200" border="1" bordercolor="#000000">
                 <tr>
                   <td width="43" height="43"><span class="style3 style1"><strong></strong></span></td>
                   <td width="106"><span class="style1 style3"><strong>Id</strong></span></td>
                   <td width="101"><span class="style5">Name</span></td>
                   <td width="195"><span class="style5">Batch</span></td>
                   <td width="98"><span class="style5">Department</span></td>
                 </tr>
                 
                 <?php

                 while($r3=mysql_fetch_array($res3))
				 {
				 	$rid=$r3['id'];
				 	$qry1="select * from student where id='$rid'";
					$res1=mysql_query($qry1);
					$r1=mysql_fetch_array($res1);
					if($r1['id']==$r3['id'])
					{
				 ?>
                 <tr>
				 	<td height="35"><label>
				 	  <input type="checkbox" name="<?php $r1["id"] ?>" id="checkbox" value="">
				 	</label></td>
                   <td><?php echo $r1["id"]; ?></td>
                   <td><?php echo $r1["name"]; ?></td>
                   <td><?php echo $r1["batch"]; ?></td>
                   <td><?php echo $r1["department"]; ?></td>
    </tr>
                   <?php
				 }}
				 
				 
				 
				 
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
                 
               </table>            
             <table>
 <tr>
	<td height="72"><label>
	  <input type="submit" name="Submit" id="Submit" value="Add" >
	</label></td>
 </tr>
    </table>
                   
       <table>
 <tr>
	<td>
                  <p>&nbsp;</p>
                  <a href="chome.php">
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
