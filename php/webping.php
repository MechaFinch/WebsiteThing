<?php
	$plainIP = $_GET["ipaddr"];
	
	$ip = escapeshellcmd($plainIP);
	
	$responce = "<html><title>THE RESULTS</title><link rel=\"stylesheet\" href=\"animations.css\"><h2 class=\"rb1\">The R E S U L T S</h2><p>" . 
	/*this is dangerous be careful af*/shell_exec("ping -c 5 -i 0.2 -w 1 $ip")
	 . "</p></html>";
	
	echo $responce
?>
