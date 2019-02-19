<html>

	<head>
	
		<title>In-Class Task 8</title>
		
	</head>

	<body>
	
		<header>
		
			In-Class 8
			
			<h3> Welcome to online survey for Conestoga cafe</h3>		
			<p> please select you favourite menu and then click submit button. Once you click submit button we will display what you have selected</p>
		
		</header>
		
		<form action="survey.php" method="post">		
			
		<?php
		
		$item = array('Conestoga Casserole', 'Conestoga Sandwich', 'Conestoga Pie', 'Grilled Conestoga', 'Conestoga Surprise');
		
			for($i = 0; $i < 5; $i++)
			
			{
				echo "<input type = 'checkbox' name ='preference[]' value = '$item[$i]'>$item[$i]<br>";
			}
			
			
		?>
	
			<input type="submit" name = "submit" value="Click to Submit">
			<input type="reset" name = "reset" value="Erase and Restart">
		</form>			
	
	</body>
	
	<hr>
	
	<footer align = "center">
	
		Prepared By: Archana Lohani<br>
		Group: 18
	
	</footer>
	
</html>



