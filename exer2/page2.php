<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prenom'])) {
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['heure'] = date("H:i:s");
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Page 2 - Session</title>
    <style>
        body {
            background: #f0f4f8;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .panel {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 300px;
            text-align: center;
        }
        a {
            display: block;
            margin-top: 1rem;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="panel">
        <h2>Informations</h2>
        <?php if (isset($_SESSION['prenom']) && isset($_SESSION['heure'])): ?>
            <p>Bonjour <strong><?= htmlspecialchars($_SESSION['prenom']) ?></strong> !</p>
            <p>Heure d'entrée : <strong><?= $_SESSION['heure'] ?></strong></p>
        <?php else: ?>
            <p>Aucune donnée trouvée.</p>
        <?php endif; ?>
        <a href="page1.php">Retour</a>
    </div>
</body>
</html>
