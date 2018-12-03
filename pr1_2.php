<!DOCTYPE html>
<html>

	<head> 	
		<meta charset="utf-8">
		<title> If 6 </title> 
	</head> 

	<body> 	
	
		<?php 
			$a = $_POST["a_"]; 
			$b = $_POST["b_"]; 
			
			if ($a > $b) 		
				echo "Большее число = $a";
			
			else {
				if ($a < $b)
					echo "Большее число = $b";
				else 
					echo "Числа равны";
			}
		?>
			
	</body> 
	
</html>




