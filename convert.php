<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $shuma = $_POST["shuma"];
    $monedha_origjinale = $_POST["monedha_origjinale"];
    $monedha_destinacion = $_POST["monedha_destinacion"];
    $kursi = $_POST["kursi"]; 

    $shuma = htmlspecialchars($shuma);
    $monedha_origjinale = htmlspecialchars($monedha_origjinale);
    $monedha_destinacion = htmlspecialchars($monedha_destinacion);
    $kursi = htmlspecialchars($kursi);

    
    $rezultati = $shuma * $kursi;
    $rezultati = round($rezultati, 2);

    echo "<h1>Rezultati i Këmbimit</h1>";
    echo "<p>Shuma origjinale: <b>$shuma $monedha_origjinale</b></p>";
    echo "<p>Kursi i këmbimit: <b>$kursi</b></p>";
    echo "<p>Shuma e konvertuar në <b>$monedha_destinacion</b>: <b>$rezultati $monedha_destinacion</b></p>";

    echo "<br><a href='index.html'>Kthehu mbrapa</a>";

} else {
    echo "Nuk keni futur të dhëna!";
}
?>
