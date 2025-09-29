<?php
// Kontrollojmë nëse të dhënat janë dërguar me POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Marrim vlerat dhe pastrojmë hyrjen
    $euro = filter_input(INPUT_POST, "euro", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $rate = filter_input(INPUT_POST, "rate", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    // Kontrollojmë nëse vlerat janë numra
    if (is_numeric($euro) && is_numeric($rate)) {
        $converted = $euro * $rate;
        echo "<h2>Shuma e konvertuar në Lek (ALL): " . number_format($converted, 2) . " Lekë</h2>";
    } else {
        echo "<h2>Ju lutem shkruani vetëm numra të vlefshëm!</h2>";
    }

} else {
    echo "<h2>Nuk keni futur të dhëna!</h2>";
}
?>