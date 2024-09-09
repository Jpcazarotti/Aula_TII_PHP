<?php
session_start();

// Definindo a senha do usuário (em uma aplicação real, isso deve vir de um banco de dados)
$correct_username = 'user';
$correct_password = 'password123';

// Verifica se o usuário já está logado
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header('Location: dashboard.php');
    exit();
}

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Verifica as credenciais
    if ($username === $correct_username && $password === $correct_password) {
        // Cria uma sessão para o usuário
        $_SESSION['loggedin'] = true;
        
        // Define um cookie de sessão com flags de segurança
        setcookie('user', $username, time() + 3600, "/", "", true, true);
        
        header('Location: dashboard.php');
        exit();
    } else {
        echo 'Credenciais inválidas!';
    }
}
?>

<form method="post" action="">
    <label for="username">Usuário:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Entrar">
</form>