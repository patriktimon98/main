<!DOCTYPE html>
<html>

	<head> 	
		<meta charset="utf-8">
		<title> Begin 6 </title> 
	</head> 

	<body> 	
	
		<?php 
			$a = $_POST["a_"]; 
			$b = $_POST["b_"]; 
			$c = $_POST["c_"]; 
			
			$v = $a * $b * $c;
			$s = 2 * ($a * $b + $b * $c + $a * $c);
			
			echo "Объём V = $v; <br>";
			echo "Площадь поверхности S = $s.";
		?>
			
	</body> 
	
</html>




