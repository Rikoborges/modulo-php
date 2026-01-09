<?php
session_start();
include __DIR__ . '/includes/header.php';
?>

<div class="text-center">
  <h2 class="mb-4">Bienvenue sur Le Sereni Spa</h2>

  <?php if (isset($_SESSION['nom'])): ?>
    <p class="lead">Bonjour <strong><?= htmlspecialchars($_SESSION['nom']) ?></strong> !</p>
    <a href="accueil.php" class="btn btn-outline-primary m-2">Espace Client</a>
    <a href="logout.php" class="btn btn-outline-danger m-2">Se déconnecter</a>
  <?php else: ?>
    <p class="lead">Connectez-vous pour accéder à votre espace bien-être.</p>
    <a href="login.php" class="btn btn-success">Se connecter</a>
  <?php endif; ?>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
