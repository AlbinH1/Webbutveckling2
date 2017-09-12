<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>php intro</title>
</head>
<body>

	<form action="exempel.php" method="POST">
	<input type="text" name="message"> <br>
	<select name="names">
		<option value="Günther"> Günther </option>
		<option	value="calleB"> CalleB </option>
		</select> </br>
	<input type="submit" name="submit">
</form>
<?php

echo "<pre>" . print_r ($_POST, 1) . "</pre>";
	
    if(isset($_POST["message"])) {
		echo htmlentities($_POST["message"]);
    }

?>
</body>
</html>
