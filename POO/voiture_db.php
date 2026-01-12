<?php
require_once 'connexion.php';
require_once 'Voiture.php';
require_once 'index.php';

function insererVoiture(PDO $pdo, Voiture $voiture): void {
    $sql = "INSERT INTO voiture (
        immatriculation, couleur, poids, puissance,
        capaciteReservoir, niveauEssence, nbPlaces, assure, message
    ) VALUES (
        :immatriculation, :couleur, :poids, :puissance,
        :capaciteReservoir, :niveauEssence, :nbPlaces, :assure, :message
    )";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'immatriculation'   => $voiture->getImmatriculation(),
        'couleur'           => $voiture->getCouleur(),
        'poids'             => $voiture->getPoids(),
        'puissance'         => $voiture->getPuissance(),
        'capaciteReservoir' => $voiture->getCapaciteReservoir(),
        'niveauEssence'     => $voiture->getNiveauEssence(),
        'nbPlaces'          => $voiture->getNbPlaces(),
        'assure'            => $voiture->estAssure(),
        'message'           => $voiture->getMessage()
    ]);
}

function updateVoiture(PDO $pdo, Voiture $voiture): void {
    $sql = "UPDATE voiture SET
        couleur = :couleur,
        poids = :poids,
        puissance = :puissance,
        capaciteReservoir = :capaciteReservoir,
        niveauEssence = :niveauEssence,
        nbPlaces = :nbPlaces,
        assure = :assure,
        message = :message
    WHERE immatriculation = :immatriculation";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'couleur'           => $voiture->getCouleur(),
        'poids'             => $voiture->getPoids(),
        'puissance'         => $voiture->getPuissance(),
        'capaciteReservoir' => $voiture->getCapaciteReservoir(),
        'niveauEssence'     => $voiture->getNiveauEssence(),
        'nbPlaces'          => $voiture->getNbPlaces(),
        'assure'            => $voiture->estAssure(),
        'message'           => $voiture->getMessage(),
        'immatriculation'   => $voiture->getImmatriculation()
    ]);
}
