<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Test de la classe Voiture</title>
</head>
<body>

<h1>Test de la classe Voiture</h1>

<?php
// Inclui a classe Voiture
require_once 'Voiture.php';

// Cria uma instância da classe Voiture
$maVoiture = new Voiture(
    "AB-123-CD",    // immatriculation
    "Rouge",        // couleur
    1420.5,         // poids (kg)
    90,             // puissance (cv)
    50.0,           // capacité du réservoir (litres)
    5               // nombre de places
);

// Atualiza o estado de seguro
$maVoiture->setAssure(true);

// Exibe as informações
echo "<ul>";
echo "<li>Immatriculation : " . $maVoiture->getImmatriculation() . "</li>";
echo "<li>Couleur : " . $maVoiture->getCouleur() . "</li>";
echo "<li>Poids : " . $maVoiture->getPoids() . " kg</li>";
echo "<li>Puissance : " . $maVoiture->getPuissance() . " cv</li>";
echo "<li>Capacité du réservoir : " . $maVoiture->getCapaciteReservoir() . " L</li>";
echo "<li>Nombre de places : " . $maVoiture->getNbPlaces() . "</li>";
echo "<li>Niveau d'essence : " . $maVoiture->getNiveauEssence() . " L</li>";
echo "<li>Message : " . $maVoiture->getMessage() . "</li>";
echo "</ul>";

// Debug com var_dump()
echo "<h2>var_dump() de l'objet :</h2>";
echo "<pre>";
var_dump($maVoiture);
echo "</pre>";
?>

</body>
</html>
