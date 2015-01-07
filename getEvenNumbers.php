<html>
 <head>
  <title>Get Even Numbers</title>
 </head>


	 <body>
	 	<form action="getEvenNumbers.php" method="post">
		 	<input type="text" name="n"/>
		 	<button type="submit">Submit! </button>
		</form>

			<?php 
				$num = $_POST["n"];
				if ($num % 2 <> 0){ 
					$num--;
				}
		 		for ($i = $num; $i > 0; $i= $i-2){
			 			echo "<p>" + $i + "</p>";
			 	} 
			 ?>
	 </body>
</html>