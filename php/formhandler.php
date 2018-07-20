<?php
	$user = $_POST['username'];
	$userSecure = htmlspecialchars($user);
	
	$style = "<link rel=\"stylesheet\" href=\"animations.css\"";
	
	echo "<html><title>YOTE'D</title>$style<p><div class=\"rb2 large\"><b><i>GET YOTE'D,</i></b></div>$userSecure</p></html>";
?>
