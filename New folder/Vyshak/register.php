<html>
<title> Home </title>
<style type="text/css">
<!--
.style2 {color: #336699}
-->
</style>
<head>
<link rel ="stylesheet" type = "text/css" href = "style.css">
<script type="text/javascript">
function valid()
{
	var n=document.forms["form1"]["uid"].value;
	if(n==null||n=="")
	{
		alert("Register number is required");
		return false;
	}
	var em=document.forms["form1"]["umail"].value;
	if(em==null||em=="")
	{
		alert("E-mail is required");
		return false;
	}
	var pattern=/([a-zA-Z0-9_\-\.])+\@([a-zA-Z0-9_\-\.])+\.([a-zA-Z]{2,4}$)/g;
	var result=em.match(pattern);
	if(result)
	{
	}
	else
	{
		alert("The email is not valid");
		return false;
	}
	var p=document.forms["form1"]["upass"].value;
	if(p==null||p=="")
	{
		alert("Password is required");
		return false;
	}
	var cp=document.forms["form1"]["ucpass"].value;
	if(cp==null||cp=="")
	{
		alert("confirm password is required");
		return false;
	}
	if(p!=cp)
	{
		alert("Password and Confirm_password are not same");
		return false;
	}

	
}
</script> 
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
						  	if($quere['status']==1)
							{
						  		$asd[$i]=$quere['ename'];
						  		$asd2[$i]=$quere['year'];
						  		$i++;
							}	
						  }

if(isset($_POST['Submit']))
{
$eve=$_REQUEST['event'];
$uid=$_REQUEST['uid'];
$p=$_REQUEST['upass'];
$cp=$_REQUEST['ucpass'];
$um=$_REQUEST['umail'];
$umo=$_REQUEST['umobile'];
$dorh=$_REQUEST['udorh'];
$value=1;
$qry1="insert into tb_login(id,password,value)values('$uid','$p','$value')";
$qry="select * from student where id='$uid'";
$res=mysql_query($qry);
$r=mysql_fetch_array($res);
$rs=$r['id'];
$hou=$r['house'];
if($rs==$uid)
{
    if(mysql_query($qry1))
    {

        $qry2="insert into student_personal(event,id,house,email,mobile,dorh)
        values('$eve','$uid','$hou','$um','$umo','$dorh')";
            if(mysql_query($qry2))
            {
	           ?><script>alert("Successfully Registered");</script><?php header("location:uhome.php");

            }
            else
            {
                ?><script>alert("Sorry,An error occured insert student");</script><?php
            }
    }
    else
    {
        ?><script>alert("Sorry,An error occured login");</script><?php
    }
}
     else
    {
        ?><script>alert("Sorry, invalid register number");</script><?php
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
	<h3><u>Student Registration</u></h3>
	</td>
    </table>
     <table width="200" border="0">
       <tr>
         <td><h3><span class="style2">Event Name</span> :
             <label>
             <select name="event" id="event">
               <option>Select</option>
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
             </label>
         </h3></td>
       </tr>
     </table>
  <table>
 <tr>
	<td>
	<h3>Register No : <input type="text" name="uid" ></h3>
	</td>
    </table>
    <table>
 <tr>
	<td>
	<h3>Password : <input type="password" name="upass"></h3>
	</td>
    </table>
        <table>
 <tr>
	<td>
	<h3>Confirm : <input type="password" name="ucpass"></h3>
	</td>
    </table>
         <table>
 <tr>
	<td>
	<h3>E-mail : <input type="text" name="umail" ></h3>
	</td>
    </table>
    <table>
             <table>
 <tr>
	<td>
	<h3>Mobile no : <input type="text" name="umobile" ></h3>
	</td>
    </table>
             <table>
 <tr>
	<td>
	<h3>Day Scholar or Hosteler :  <select id ="b6" name="udorh">
                    <option value="Dayscholar">D</option>
                    <option value="Hosteler">H</option>
                    </select></h3>
	</td>
    </table>
    <table>
    <table>
<table>    
         <tr>
             <td>
                 <br>
                
                  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                  <input type="submit" name="Submit" id="logg" value="Register" onClick="return valid()" >
                <br>
                 <br>
                <a href="index.php"><input type="button"  id="log" value="Quit" > </a>  </h3>             </td>
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
</html>
