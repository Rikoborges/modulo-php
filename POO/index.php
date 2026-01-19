<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voiture - Test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<div class="container">
    <h1> Ma Voiture</h1>

    <?php
    require_once 'Voiture.php';
    require_once 'Personne.php';
    

    $conducteur = new Personne("Dominic Toretto");
    $voiture = new Voiture("AB-123-CD", "Blue", 1420.5, 90, 50.0, 5);
    $voiture->setAssure(true);
    $voiture->setConducteur($conducteur);
    //

   
  
    ?>

    <section class="voiture-info">
        <h2> Informations techniques</h2>
        <ul>
            <li><strong>Immatriculation :</strong> <?= $voiture->getImmatriculation() ?></li>
            <li><strong>Couleur :</strong> <?= $voiture->getCouleur() ?></li>
            <li><strong>Poids :</strong> <?= $voiture->getPoids() ?> kg</li>
            <li><strong>Puissance :</strong> <?= $voiture->getPuissance() ?> cv</li>
            <li><strong>Réservoir :</strong> <?= $voiture->getCapaciteReservoir() ?> L</li>
            <li><strong>Places :</strong> <?= $voiture->getNbPlaces() ?></li>
            <li><strong>Niveau d'essence :</strong> <?= $voiture->getNiveauEssence() ?> L</li>
            <li><strong>Assuré :</strong> <?= $voiture->estAssure() ? "Oui" : "Non" ?></li>
            <li><strong>Conducteur :</strong> <?= $voiture->getConducteurNom() ?></li>
        </ul>
    </section>

    <section class="actions">
        <h2>🛠️ Actions</h2>

        <?php
        $voiture->repeindre("Rouge");
        echo "<p>" . $voiture->getMessage() . "</p>";

        $voiture->repeindre("Rouge");
        echo "<p>" . $voiture->getMessage() . "</p>";

        $voiture->mettreEssence(10);
        echo "<p>" . $voiture->getMessage() . "</p>";

        $voiture->mettreEssence(100);
        echo "<p>" . $voiture->getMessage() . "</p>";

        $voiture->seDeplacer(60, 45);
        echo "<p>" . $voiture->getMessage() . "</p>";

        $voiture->seDeplacer(100, 80);
        echo "<p>" . $voiture->getMessage() . "</p>";

        $voiture->seDeplacer(200, 150);
        echo "<p>" . $voiture->getMessage() . "</p>";
        ?>
    </section>

    <section class="resume">
        <h2> Résumé</h2>
        <p><?= $voiture ?></p> 
    </section>

    <section class="debug">
        <h2> Debug</h2>
        <pre><?php var_dump($voiture); ?></pre>
    </section>
</div>

</body>
</html>