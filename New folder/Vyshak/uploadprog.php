<html>
<head>	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-60962033-1', 'auto');
	  ga('send', 'pageview');

	</script>
</head>

<body>
    <div style="border:1px dashed #333333; width:300px; margin:0 auto; padding:10px;">
    
	<form name="import" method="post" enctype="multipart/form-data">
    	<input type="file" name="file" /><br />
        <input type="submit" name="submit" value="Submit" />
    </form>
<?php
	
	error_reporting(E_ALL ^ E_NOTICE);
    include ("connection.php");
	if(isset($_POST["submit"]))
	{
		$file = $_FILES['file']['tmp_name'];
		$handle = fopen($file, "r");
		$c = 0;
		while(($filesop = fgetcsv($handle, 1000, ",")) !== false)
		{
            $id = $filesop[0];
			$name = $filesop[1];
			$type = $filesop[2];
            $score = $filesop[3];
            $maxpart = $filesop[4];
        
            
			
			$sql = mysql_query("INSERT INTO program (pid, name, type, score, maxpart) VALUES ('$id','$name','$type','$score','$maxpart')");
			$c = $c + 1;
		
    }
			if($sql){
				echo "You database has imported successfully. You have inserted ". $c ." records";
			}else{
				echo "Sorry! There is some problem.";
			}
    }
	
?>
    
    </div>
    

</body>
</html>