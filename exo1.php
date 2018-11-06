<head>
</head>

<body style="text-align: center; font-size: 50px;">
<br>
<?php
	
	if( !isset($_GET['op']) || !isset($_GET['x']) || !isset($_GET['y'])){
		
		echo "<h1> INCORRECT OR INCOMPLETE DATA </h1>";
		exit();
		
	}
	
	$x = $_GET['x'];
	$y = $_GET['y'];
	
	switch($_GET['op'])
	{
		case 'sum':
			$result = $x + $y;
			echo "<h1> $x + $y = $result </h1>";
			break;
		
		case 'substract':
			$result = $x - $y;
			echo "<h1> $x - $y = $result </h1>";
			break;
		
		case 'multiply':
			$result = $x * $y;
			echo "<h1> $x * $y = $result </h1>";
			break;
		
		case 'divide':
			if($y ==0)
				echo "<h1> division by 0 imposible </h1>";
			else
			{
				$result = $x/$y;
				echo "<h1> $x/$y = $result </h1>";
			}
			break;
			
		default: 
			$op = $_GET['op'];
			echo "<h1> unrecognise operation: $op </h1>";
	}
	
?>
</br>
</body>
	