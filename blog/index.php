<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Swagblogg </title>
	<link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<?php

	include_once("data.php"); 

	foreach($data as $key => $value) {

	echo" <article class=\"ram\">
		<h1>" . $value["title"] . "</h1>
		<h2><a target=\"_blank\" href=\"https://www.akademibokhandeln.se\">" . $value["author"] . "</a></h2>
		<p>" . $value["message"] . "</p>
	</div>
	</article>";

	}


?>
<main> 
</main>
</body>
</html>