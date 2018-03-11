<html>
	<head>
		<title>In-Class Task 7</title>
	</head>

	<body>
		<header>
		
			In-Class 7 : Guess The Secrect Number
			<h2> Guess the secrect Number</h2>
			<p>Select any number you want and then click submit. Once you click submit we will tell you know if that is the secrect number or not</p>
		
		</header>
			<form action="CheckGuess.php" method="post">
		<?php
			for ($i = 1; $i<=9 ; $i++)
				{
		?>
					
			<input type="radio" name="guess" id="guess<?php echo $i;?>" value="1">
			<label for="guess<?php echo $i;?>"><?php echo $i;?></label>
			
		<?php
			}
		?>
		<br><br>
		<input type="submit" name = "submit" value="Guess">
			
		</form>
		
		
	
	</body>
	
</html>



