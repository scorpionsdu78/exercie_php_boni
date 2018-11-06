<head>
</head>

<body style="text-align: center; font-size: 50px;">
<br>

<form action="exo2.php" method="get">
name: <input type="text" name="name">
<input type="submit">
</form>

<?php
	
	$file = "ami.txt";
	//fwrite($file, "ceci est un test\n");
	
	$name = "world";
	
	if(isset($_GET['name'])){
		
		$name = $_GET['name'];
		$name = "$name \n";
		file_put_contents($file, $name,FILE_APPEND);
	
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