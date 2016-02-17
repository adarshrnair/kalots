<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title><head>
<link rel ="stylesheet" type = "text/css" href = "style.css">
<script type="text/javascript">

</script>

</head>
    <body>

 <?php
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);
$qry="select * from program";
$res=mysql_query($qry);
 $i=0;
						  while($r=mysql_fetch_array($res))
						  {
						  	if($r['type']=='single')
							{
						  		$asd[$i]=$r['name'];
						  		$i++;
							}
						  }
$rows = mysql_num_rows($res);
$rows2=$rows;
$rows3=$rows;
if(isset($_POST['Submit']))
{
$un=$_SESSION['uname'];
$sp1=$_REQUEST['sp1'];
$sp2=$_REQUEST['sp2'];
$sp3=$_REQUEST['sp3'];
$query="update student_personal set sp1='$sp1',sp2='$sp2',sp3='$sp3' where id='$un'";

if($sp1!="-")
{

if($sp1==$sp2)
{
	?><script type="text/javascript">alert("sorry,solo program 1 and 2 are same,please take different");</script><?php
}
else if($sp2==$sp3)
{
	?><script type="text/javascript">alert("sorry,solo program 2 and 3 are same,please take different");</script><?php
}
else if($sp1==$sp3)
{
	?><script type="text/javascript">alert("sorry,solo program 1 and 3 are same,please take different");</script><?php
}

else
{
if(mysql_query($query))
{
?><script type="text/javascript">alert("Successfully Registered");</script><?php
}
else
{
 ?><script type="text/javascript">alert("Error occured, try later");</script><?php
}}}
else{  ?><script type="text/javascript">alert("sorry,not selected anything or solo program1 is not selected");</script><?php }
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
	<h3>Program Registration</h3>
	</td>
  </table>
     
          
<table width="683" height="28" border="0" align="center">
            <tr>
              <td width="495" height="24"><div align="right"><strong><em>Solo program 1 </em></strong></div></td>
                    <td width="495"><label>
                        <div align="left">
                          <label>
                          
                          <select name="sp1" id="select">
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
                          </label>
                    </div>
              </label></td>
                   </tr></table>
<table>
                    <tr>
                      <td width="494"><div align="right"><strong><em>Solo program 2 </em></strong></div></td>
                      <td width="494"><div align="left">
                        <label>
                        <select name="sp2" id="select2">
                          <option value="--">Select</option>
                           <?php
                           if($rows2)
				 {
                 $arrlength = count($asd);
						for($x = 0; $x <  $arrlength; $x++) {
     						
							
				 ?>
                            <option value=" <?php echo $asd[$x] ?> "> <?php echo $asd[$x] ?> </option>
							<?php
							}} ?>
                                                </select>
                        </label>
                      </div></td>
                    </tr></table>
<table>
                    <tr>
                      <td width="494"><div align="right"><strong><em>Solo program 3</em></strong></div></td>
                      <td width="494"><div align="left">
                        <label>
                        <select name="sp3" id="select3">
                        <option value="---">Select</option>
                             <?php
                           if($rows3)
				 {
                 $arrlength = count($asd);
						for($x = 0; $x <  $arrlength; $x++) {
     						
							
				 ?>
                            <option value=" <?php echo $asd[$x] ?> "> <?php echo $asd[$x] ?> </option>
							<?php
							}} ?>
                        
                        </select>
                        </label>
                      </div></td>
                    </tr></table>
                    
                    <table>
                    <tr>
                      <td width="494">&nbsp;</td>
                      <td width="494"><label>
                        <div align="left">
                          <input type="submit" name="Submit" id="Submit" value="Ok" onClick="return valid()" >
                        </div>
                      </label></td>
                    </tr>
        </table>

	
  <table>
 <tr>
	<td>
                  <p>&nbsp;</p>
                  <a href="uhome.php">
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
