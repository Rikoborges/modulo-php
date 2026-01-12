<?php
require_once 'connexion.php';
require_once 'index.php';

$host = 'localhost';
$db   = 'ParcAuto';k
$user = 'root';
$pass = ''; 
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

//
$sql = "INSERT INTO voiture (
    immatriculation, couleur, poids, puissance, capaciteReservoir, niveauEssence, nbPlaces, assure, message
) VALUES (
    :immatriculation, :couleur, :poids, :puissance, :capaciteReservoir, :niveauEssence, :nbPlaces, :assure, :message
)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'immatriculation'     => $voiture->getImmatriculation(),
    'couleur'             => $voiture->getCouleur(),
    'poids'               => $voiture->getPoids(),
    'puissance'           => $voiture->getPuissance(),
    'capaciteReservoir'   => $voiture->getCapaciteReservoir(),
    'niveauEssence'       => $voiture->getNiveauEssence(),
    'nbPlaces'            => $voiture->getNbPlaces(),
    'assure'              => $voiture->estAssure(),
    'message'             => $voiture->getMessage()
]);

try {
    $pdo = new PDO($dsn, $user, $pass);
    // 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
    exit;
}
?>
   