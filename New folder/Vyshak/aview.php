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
if(isset($_POST['Submit']))
{
$cn=$_REQUEST['cn'];

$qry="select * from student_personal where house='$cn'";
$res=mysql_query($qry);
$rows = mysql_num_rows($res);
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
     <h3> VIEW STUDENT DETAILS</h3>

	</td>
    </table>
         <table>
            <tr>
                
             
	<td>
             House name 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                      <select name="cn">
                        <option value="0">Select</option>
                        <option value="Amritamayi">Amritamayi</option>
                        <option value="Anandamayi">Anandamayi</option>
                        <option value="Chinmayi">Chinmayi</option>
                        <option value="Jyothirmayi">Jyothirmayi</option>
                      </select> <label>
                      <input type="submit" name="Submit" id="Submit" value="Ok">
                      </label>           </td>
            </tr>
    
 <tr>
    </table>
    
        
             
<table width="200" border="1" bordercolor="#000000">
                 <tr>
                   <td width="43"><span class="style3 style1"><strong>Id</strong></span></td>
                   <td width="106"><span class="style1 style3"><strong>Name</strong></span></td>
                   <td width="101"><span class="style5">Batch</span></td>
                   <td width="195"><span class="style5">Department</span></td>
                   <td width="98"><span class="style5">H / D</span></td>
                   <td width="111"><span class="style5">House</span></td>
                   <td width="96"><span class="style5">Email</span></td>
                   <td width="88"><span class="style5">Mobile</span></td>
                   <td width="23"><span class="style5">sp1</span></td>
                   <td width="17"><span class="style5">sp2</span></td>
                   <td width="20"><span class="style5">sp3</span></td>
                   <td width="26"><span class="style5">gp</span></td>
                 </tr>
                 
                 <?php
				 if($rows)
				 {
                 while($r=mysql_fetch_array($res))
				 {
				 	$rid=$r['id'];
				 	$qry1="select * from student where id='$rid'";
					$res1=mysql_query($qry1);
					$r1=mysql_fetch_array($res1);
					if($r1['id']==$r['id'])
					{
				 ?>
                 <tr>
				 	<td><?php echo $r["id"]; ?></td>
                   <td><?php echo $r1["name"]; ?></td>
                   <td><?php echo $r1["batch"]; ?></td>
                   <td><?php echo $r1["department"]; ?></td>
                   <td><?php echo $r["dorh"]; ?></td>
                   <td><?php echo $r["house"]; ?></td>
                   <td><?php echo $r["email"]; ?></td>
                   <td><?php echo $r["mobile"]; ?></td>
                   <td><?php echo $r["sp1"]; ?></td>
                   <td><?php echo $r["sp2"]; ?></td>
                   <td><?php echo $r["sp3"]; ?></td>
                   <td><?php echo $r["gp"]; ?></td>
                   </tr>
                   <?php
				   }
				 }
				 }
				 ?>
                 
               </table>            
             <table>
 <tr>
	<td>
                  

	</td>
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
