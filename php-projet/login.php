<?php
session_start();

// Inclui o cabeçalho
include __DIR__ . '/includes/header.php';
?>

<h2>Connexion</h2>

<!-- Formulário simples de login -->
<form method="post" action="traitement.php">
    <label>
        Nom :
        <input type="text" name="nom" required>
    </label>
    <br><br>
    <button type="submit">Connexion</button>
</form>

<?php
// Inclui o rodapé
include __DIR__ . '/includes/footer.php';
?>
