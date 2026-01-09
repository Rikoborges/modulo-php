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

    // GETTERS
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

    // SETTER assurance
    public function setAssure(bool $etat): void {
        $this->assure = $etat;
        $this->message = $etat
            ? "Le véhicule est maintenant assuré."
            : "Le véhicule n'est plus assuré.";
    }

    // 
    public function repeindre($nouvelleCouleur): bool {
        if (!isset($nouvelleCouleur)) {
            $this->message = "Aucune couleur fournie.";
            return false;
        }

        if ($nouvelleCouleur === $this->couleur) {
            $this->message = "Merci pour ce rafraîchissement de peinture !";
            return true;
        }

        $this->couleur = $nouvelleCouleur;
        $this->message = "Merci, votre voiture est maintenant repeinte en {$nouvelleCouleur}.";
        return true;
    }

    // 
    public function mettreEssence(float $quantite): float {
        if ($quantite <= 0) {
            $this->message = "Quantité invalide.";
            return $this->niveauEssence;
        }

        if ($this->niveauEssence + $quantite > $this->capaciteReservoir) {
            $this->message = "Trop de carburant ajouté ! Réservoir débordé.";
            return $this->niveauEssence;
        }

        $this->niveauEssence += $quantite;
        $this->message = "Merci, le véhicule a maintenant {$this->niveauEssence} litres d'essence.";
        return $this->niveauEssence;
    }
        
      public function seDeplacer(float $distance, float $vitesse): float {
        if (!isset ($distance) || !isset ($vitesse) || $distance  <= 0 || $vitesse <= 0) {
            $this->message = "Parametre invalide deplacemmnet.";
            return false;
        }
        //
        $conso100 = 0;

        if ($vitesse < 50){
            $conso100 = 10;
        }elseif ($vitesse <=90){
            $conso100 = 5;
        }elseif ($vitesse <=130){
            $conso100 = 8;
        }else {
            $conso100 = 12;
        }
        //
        $consommation = ($conso100 / 100) * $distance;

        if ($consommation > $this->niveauEssence) {
        $this->message = "Trajet impossible : carburant insuffisant pour parcourir $distance km à $vitesse km/h.";
        return false;
    }
        $this->niveauEssence -= $consommation;
    $this->message = "Trajet effectué : $distance km à $vitesse km/h. Consommation : $consommation L. Essence restante : {$this->niveauEssence} L.";
    return true;
}
//toString

public function __toString(): string {
    return sprintf(
        " %s - %s - %d cv - %.1f L d'essence",
        $this->immatriculation,
        ucfirst($this->couleur),
        $this->puissance,
        $this->niveauEssence
    );
}

//


private ?Personne $conducteur = null;

// Setter pour le conducteur
public function setConducteur(Personne $conducteur): void {
    $this->conducteur = $conducteur;
}

// Getter pour le nom du conducteur
public function getConducteurNom(): string {
    return $this->conducteur ? $this->conducteur->getNom() : "Aucun conducteur";
}


}
?>