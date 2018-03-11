<html>
	<head>
		<title>In-Class Task 7</title>
	</head>

		<body>
			<header>
				In-Class 7 : Guess The Secrect Number
			</header>
			<br>
			<br>
			<main>
			<?php
			if (isset($_POST['submit']))
				
				{
					$secretNumber = 9;
					$guess = $_POST['guess'];
					
					switch ($guess)
					{
						case 1:
							echo 'You selected the wrong number' ;
							break;
						case 2:
							echo 'You selected the wrong number' ;
							break;
						case 3:
							echo 'You selected the wrong number' ;
							break;
						case 4:
							echo 'You selected the wrong number' ;
							break;
						case 5:
							echo 'You selected the wrong number' ;
							break;
						case 6:
							echo 'You selected the wrong number' ;
							break;
						case 7:
							echo 'You selected the wrong number' ;
							break;
						case 8:
							echo 'You selected the wrong number' ;
							break;
						case 9:
							echo 'Congratulations you guessed the correct number. Secret number is 9';
							break;
						default:
							echo "something is wrong";
							
					}
				}
			else
			{
				echo 'First you select the number and then click the button named Guess';
			}
			?>
			
			
		</main>
			
	
	</body>
	
</html>



