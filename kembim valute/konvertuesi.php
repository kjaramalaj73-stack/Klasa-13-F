<!DOCTYPE html>
<html lang="sq">
<head>
<meta charset="UTF-8">
<title>Këmbim Valutore</title>
</head>
<body>
	<?php
	include ("file i php.php");
	?>
<h2>Këmbimi i valutës nga Euro në Lek</h2>
<form action="kembim.php" method="post">
<label for="euro">Shuma në Euro:</label>
<input type="number" step="0.01" name="euro" id="euro" required>
<br><br>

<label for="koeficienti">Koefiçenti i këmbimit:</label>
<input type="number" step="0.01" name="koeficienti" id="koeficienti" required>
<br><br>

<button type="submit">Konverto</button>
</form>
</body>
</html>
