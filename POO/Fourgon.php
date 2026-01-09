<?php
require_once 'Voiture.php';

class Fourgon extends Voiture {
    private float $volume;

    public function __construct(
        string $immatriculation,
        string $couleur,
        float $poids,
        int $puissance,
        float $capaciteReservoir,
        int $nbPlaces,
        float $volume
    ) {
        parent::__construct($immatriculation, $couleur, $poids, $puissance, $capaciteReservoir, $nbPlaces);
        $this->volume = $volume;
    }

    public function getVolume(): float {
        return $this->volume;
    }

    public function __toString(): string {
        return parent::__toString() . " - Fourgon de {$this->volume} m³";
    }
}
?>