<!DOCTYPE html>
<html>
<head>
	<title>Dokument zamówienia</title>
</head>
<body>
	<h1>Twoje zamówienie:</h1>
	<p>Procesor: <?php echo $_POST["procesor"]; ?></p>
	<p>RAM: <?php echo $_POST["ram"]; ?></p>
	<p>Dysk twardy: <?php echo $_POST["dysk"]; ?></p>
	<p>Karta graficzna: <?php echo $_POST["grafika"]; ?></p>
	
	<?php
		$zamowienie = "Procesor: " . $_POST["procesor"] . "\n";
		$zamowienie .= "RAM: " . $_POST["ram"] . "\n";
		$zamowienie .= "Dysk twardy: " . $_POST["dysk"] . "\n";
		$zamowienie .= "Karta graficzna: " . $_POST["grafika"] . "\n";
		
		$plik = fopen("zamowienie.txt", "w");
		fwrite($plik, $zamowienie);
		fclose($plik);
	?>
</body>
</html>
