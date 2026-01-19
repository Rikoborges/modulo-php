<?php
require_once 'db.php';
$pdo = DB::connect();


class DB {
    private static ?PDO $pdo = null;

    public static function connect(): PDO {
        if (self::$pdo === null) {
            $config = new configDB(__DIR__ . '/Resources/Conf/config.conf');

            $dsn = "mysql:host={$config->getHote()};port={$config->getPort()};dbname={$config->getDBName()};charset=utf8mb4";

            try {
                self::$pdo = new PDO(
                    $dsn,
                    $config->getUser(),
                    $config->getPass(),
                    [
                        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES => false
                    ]
                );
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
