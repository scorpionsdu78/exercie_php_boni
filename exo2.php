<head>
</head>

<body style="text-align: center; font-size: 50px;">
<br>

<form action="exo2.php" method="get">
name: <input type="text" name="name">
<input type="submit">
</form>

<?php
	
	$file = fopen("ami.txt", "a");
	//fwrite($file, "ceci est un test\n");
	
	$name = "world";
	
	if(isset($_GET['name'])){
		
		$name = $_GET['name'];
		fwrite($file, "$name \n" );
		
		fclose($file);
	
		$file = fopen("ami.txt","r");
	
		while(!feof($file))	
		{
			echo fgets($file)."<br>";
			
		}
		fclose($file);
		
	}
	
	
	
	
	
?>
</br>
</body>