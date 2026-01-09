<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $age = htmlspecialchars($_POST['age'] ?? '');

    
    if (isset($_POST['marie'])) {
        $situation = "marié(e)";
    } elseif (isset($_POST['veuf'])) {
        $situation = "veuf(ve)";
    } elseif (isset($_POST['celibataire'])) {
        $situation = "célibataire";
    } else {
        $situation = "non précisée";
    }

    
    $interets = $_POST['interets'] ?? [];
    $interetsString = !empty($interets) ? implode(", ", array_map('htmlspecialchars', $interets)) : "aucun intérêt";

    // Simulation de requête (exemple)
    $requete = "INSERT INTO utilisateurs (nom, age, situation, interets) 
                VALUES ('$nom', '$age', '$situation', '$interetsString');";

    // Affichage
    ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Merci</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                padding: 40px;
                text-align: center;
            }
            .gras {
                font-weight: bold;
                color: #333;
            }
        </style>
    </head>
    <body>
    <div>
        <h1>Merci à vous, <?php echo $nom; ?>.</h1>
        <p>
            Vous avez donc le bel âge de&nbsp;
            <span class="gras"><?php echo $age; ?></span>
            &nbsp;ans, vous êtes
            <span class="gras"><?php echo $situation; ?></span><br>
            et vous vous intéressez à&nbsp;
            <span class="gras"><?php echo $interetsString; ?></span>.
        </p>
        <p>
            Je m'empresse d'envoyer la requête : <br>
            <span class="gras"><?php echo $requete; ?></span><br>
            à notre base de données.
        </p>
    </div>
    </body>
    </html>
    <?php
} else {
    echo "<p>Aucune donnée reçue.</p>";
}
?>
