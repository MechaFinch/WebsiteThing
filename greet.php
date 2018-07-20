<?php
	setcookie("secretvalue", "413");
	
	$user = htmlspecialchars($_GET['user']);
	
	echo "<html><title>HELLO</title><link rel=\"stylesheet\" href=\"animations.css\"/><h2 class=\"rb2 large\">Hello, <h2>$user</html>";
?>
