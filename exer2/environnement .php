<?php
date_default_timezone_set("Europe/Paris"); // Define timezone

echo "<h2>Informations sur le serveur</h2>";
echo "<p>En ce " . date("d F Y") . ", sur le serveur <strong>" . $_SERVER['SERVER_NAME'] . "</strong>, il est <strong>" . date("H:i") . "</strong>.</p>";

echo "<h3>Variables HTTP serveur</h3>";
echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Nom</th><th>Valeur</th></tr>";

// Lista de variáveis que queremos mostrar
$vars = [
    'SERVER_NAME', 'SERVER_SOFTWARE', 'SERVER_PROTOCOL',
    'REQUEST_METHOD', 'HTTP_USER_AGENT'
];

foreach ($vars as $var) {
    echo "<tr><td>$var</td><td>{$_SERVER[$var]}</td></tr>";
}

echo "</table>";
?>

