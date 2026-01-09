<?php
session_start(); // Démarre la session

session_unset(); // Supprime toutes les variables de session
session_destroy(); // Détruit complètement la session

// Redirige vers la page d'accueil
header('Location: index.php');
exit();
