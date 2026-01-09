<?php
class Voiture {
    private string $immatriculation;
    private string $couleur;
    private float $poids;
    private int $puissance;
    private float $capaciteReservoir;
    private int $nbPlaces;

    private float $niveauEssence = 5.0;
    private bool $assure = false;
    private string $message = "Bienvenue à bord !";

    public function __construct(
        string $immatriculation,
        string $couleur,
        float $poids,
        int $puissance,
        float $capaciteReservoir,
        int $nbPlaces
    ) {
        $this->immatriculation = $immatriculation;
        $this->couleur = $couleur;
        $this->poids = $poids;
        $this->puissance = $puissance;
        $this->capaciteReservoir = $capaciteReservoir;
        $this->nbPlaces = $nbPlaces;
    }

    // Getters
    public function getImmatriculation(): string {
        return $this->immatriculation;
    }

    public function getCouleur(): string {
        return $this->couleur;
    }

    public function getPoids(): float {
        return $this->poids;
    }

    public function getPuissance(): int {
        return $this->puissance;
    }

    public function getCapaciteReservoir(): float {
        return $this->capaciteReservoir;
    }

    public function getNbPlaces(): int {
        return $this->nbPlaces;
    }

    public function getNiveauEssence(): float {
        return $this->niveauEssence;
    }

    public function estAssure(): bool {
        return $this->assure;
    }

    public function getMessage(): string {
        return $this->message;
    }

    
    public function setAssure(bool $etat): void {
        $this->assure = $etat;
        $this->message = $etat
            ? "Le véhicule est maintenant assuré."
            : "Le véhicule n'est plus assuré.";
    }
}
?>
