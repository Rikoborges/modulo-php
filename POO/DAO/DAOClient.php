<?php
require_once '../ENTITES/EntiteClient.php';
require_once '../Connect.php';

class DAOClient {

    private PDO $pdo;

    public function __construct() {
        $this->pdo = Connect::connect();
    }

    public function selectAll(): array {
        $clients = [];

        try {
            $stmt = $this->pdo->query(
                "SELECT * FROM client ORDER BY nom ASC"
            );

            while ($ligne = $stmt->fetch()) {
                $client = new EntiteClient();

                $client->setNom($ligne['nom']);
                $client->setPrenom($ligne['prenom']);
                $client->setEmail($ligne['email']);
                $client->setDateNaissance($ligne['dateNaissance']);
                $client->setDateInscription($ligne['dateInscription']);

                $clients[] = $client;
            }

        } catch (PDOException $e) {
            throw new PDOException(
                'Erreur de connexion à la base de données',
                0,
                $e
            );
        }

        return $clients;
    }
}
