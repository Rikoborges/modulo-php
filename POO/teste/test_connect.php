<?php
require_once 'Connect.php';

try {
    $pdo = Connect::connect();
    echo "✅ Conexão bem-sucedida com o banco de dados!";
} catch (PDOException $e) {
    echo "❌ Erro: " . $e->getMessage();
}
