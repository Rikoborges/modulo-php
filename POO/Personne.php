<?php
class Personne {
    private string $nom;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function __toString(): string {
        return " Conducteur : " . $this->nom;
    }
}