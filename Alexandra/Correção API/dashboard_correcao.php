<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login_correcao.php');
    exit();
}

// Regenera o ID da sessão para aumentar a segurança
session_regenerate_id(true);

// Verifica se o cookie existe
if (!isset($_COOKIE['user']) || $_COOKIE['user'] !== $_SESSION['username']) {
    echo 'Você não está autenticado!';
    exit();
}

// Sanitiza a saída para prevenir XSS
$user = htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8');
echo "Bem-vindo ao painel de controle, $user!";
?>

<a href="logout_correcao.php">Sair</a>