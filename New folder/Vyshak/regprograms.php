<html>
    <?php
	session_start();
	if(isset($_SESSION['uname']))
	{
	
?>
<title> Home </title><head>
<link rel ="stylesheet" type = "text/css" href = "style.css">

</head>
    <body>

 <?php
$con=mysql_connect("localhost","root","");
mysql_select_db("db_kalotsavam",$con);
$un=$_SESSION['uname'];
$query="select * from student_personal where id='$un'";
$res=mysql_query($query);
$r=mysql_fetch_array($res);

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
	<h3> Registered Programs</h3>
	</td>
  </table>
     
          <table>
                    <tr>
                      <td width="494"><div align="right"><strong><em>Event Name :</em></strong></div></td>
                      <td width="494"><div align="left">
                        <label></label>
                      <?php echo $r['event'] ;?></div></td>
                    </tr></table>
<table width="683" height="28" border="0" align="center">

            <tr>
              <td width="495" height="24"><div align="right"><strong><em>Solo program 1 : </em></strong></div></td>
                    <td width="495"><div align="left"><?php echo $r['sp1'] ;?>
                      <label>
                    </div>
                    <div align="left">
                          <label></label>
                    </div>
              </label></td>
                   </tr></table>
<table>
                    <tr>
                      <td width="494"><div align="right"><strong><em>Solo program 2 :</em></strong></div></td>
                      <td width="494"><div align="left">
                        <label></label>
                      <?php echo $r['sp2'] ;?></div></td>
                    </tr></table>
  <table>
                    <tr>
                      <td width="494"><div align="right"><strong><em>Solo program 3 :</em></strong></div></td>
                      <td width="494"><div align="left">
                        <label></label>
                      <?php echo $r['sp3'] ;?></div></td>
  </tr></table>
  <table>
                    <tr>
                      <td width="494"><div align="right"><strong><em>Group event :</em></strong></div></td>
                      <td width="494"><div align="left">
                        <label></label>
                      <?php echo $r['gp'] ;?></div></td>
                    </tr></table>
                    
                   

	
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
