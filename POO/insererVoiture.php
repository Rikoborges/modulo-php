<?php
require_once 'db.php';         
require_once 'voiture.php';    
require_once 'index.php';     

$voiture = new Voiture();      

// 
$voiture->setImmatriculation($_POST['immatriculation']);
$voiture->setCouleur($_POST['couleur']);
// 

$pdo = DB::connect(); 

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

echo "✅ Voiture insérée avec succès.";
