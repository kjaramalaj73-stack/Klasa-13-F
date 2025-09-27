<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Marrim të dhënat nga forma
    $euro = $_POST["euro"];
    $kursi = $_POST["kursi"];

    // Siguri bazë (pastrim të dhënash)
    $euro = htmlspecialchars($euro);
    $kursi = htmlspecialchars($kursi);

    // Llogaritja
    $lek = $euro * $kursi;

    echo "<h1>Rezultati i Këmbimit</h1>";
    echo "<p>Shuma në EURO: <b>$euro €</b></p>";
    echo "<p>Kursi i këmbimit: <b>$kursi</b></p>";
    echo "<p><b>Shuma e konvertuar në LEK (ALL): $lek Lekë</b></p>";

    echo "<br><a href='index7.html'>Kthehu mbrapa</a>";
} else {
    echo "Nuk keni futur të dhëna!";
}
?>