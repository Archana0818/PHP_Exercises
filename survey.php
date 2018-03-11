<html>
	<head></head>
	<body>
<?php

if(!isset($_POST['submit']))
{
	echo "please select an option and then click submit button<br>";
	echo "<a href = 'InClass8.php'>CLICK HERE</a>to go back to survey page";
}

else if(!isset($_POST['preference']))
{
	echo "please select an option and then click submit button<br>";
	echo "<a href = 'InClass8.php'>CLICK HERE</a>to go back to survey page";
}

else
{
	$userSelection = $_POST['preference'];
	echo "Thank you for participating in the survey<br>";
	echo "Your favourite items:<br><br>";
	foreach($userSelection as $item)
	{
		echo $item. "<br>";
	}
}
?>
	</body>

</html>