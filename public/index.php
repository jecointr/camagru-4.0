<?php
// public/index.php

echo "<h1>Bienvenue sur Camagru</h1>";
echo "<p>Serveur web : OK</p>";

// Test rapide de connexion DB (sera supprimé plus tard)
// On lit le .env manuellement car on n'a pas de lib externe
$env = parse_ini_file(__DIR__ . '/../.env');

try {
    $pdo = new PDO($env['DB_DSN'], $env['DB_USER'], $env['DB_PASSWORD']);
    echo "<p>Connexion Database : <span style='color:green'>OK</span></p>";
} catch (PDOException $e) {
    echo "<p>Connexion Database : <span style='color:red'>ERREUR</span> (" . $e->getMessage() . ")</p>";
}
?>