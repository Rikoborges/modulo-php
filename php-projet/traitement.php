<?php
session_start(); // Inicia a sessão

// Verifica se o nome foi enviado e não está vazio
if (!empty($_POST['nom'])) {
    $_SESSION['nom'] = $_POST['nom']; // Salva o nome na sessão
    header('Location: accueil.php');  // Redireciona para a página protegida
    exit();
} else {
    // Se o campo estiver vazio, volta para a tela de login
    header('Location: login.php');
    exit();
}
