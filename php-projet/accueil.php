<?php
session_start(); // Démarrer la session

// Vérifier si l'utilisateur est connecté (sinon, redirection)
if (!isset($_SESSION['nom'])) {
    header('Location: login.php');
    exit();
}

// Inclure l'en-tête HTML
include __DIR__ . '/includes/header.php';
?>

<h2>Page protégée</h2>

<!-- Afficher le nom de l'utilisateur connecté -->
<p>Bonjour <?= htmlspecialchars($_SESSION['nom']) ?> !</p>

<!-- Lien pour se déconnecter -->
<p><a href="logout.php">Se déconnecter</a></p>

<?php
// Inclure le pied de page HTML
include __DIR__ . '/includes/footer.php';
?>
