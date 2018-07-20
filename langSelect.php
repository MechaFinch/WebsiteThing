<?php
	$language = htmlspecialchars($_GET['lang']);
	
	//Change to if/elseif block that returns the greeting to $result
	$lang = strtolower($language);
	$title = strtoupper($language);
	$result = "Language not found: $language.<ul><div class=\"rb2\">Availible languages:</div><li>English</li><li>French</li><li>Spanish</li></ul>";
	
	if($lang == "english" || $lang == "en"){
		$result = "Hello!";
	} elseif($lang == "french" || $lang == "fr"){
		$result = "Bonjour!";
	} elseif($lang == "spanish" || $lang == "es"){
		$result = "Hola!";
	}
	
	echo "<html><link rel=\"stylesheet\" href=\"animations.css\"><title>$title</title><style>body{background:lightblue}</style>$result</html>";
	//include $language;
?>
