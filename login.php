<?php
include 'config/config.php';
include 'public/controllers/LoginController.php';
session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="usuario" placeholder="Nome de Usuario"required><br>
        <input type="password" name="senha" placeholder="Senha"required><br>
        <br><input type="submit" value="Entrar"><br>
    </form>
    <br><a href="registro.php"><button>Registre-se</button></a>
</body>
</html>