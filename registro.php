<?php
require_once 'config/config.php';
require_once 'public/controllers/RegistroController.php';

$registroController = new RegistroController($pdo);

//Criar registro
if (isset($_POST['email']) && ($_POST['senha']) && ($_POST['usuario'])) {
    $registroController->criarRegistro(
        $_POST['email'],
        password_hash($_POST["senha"], PASSWORD_BCRYPT),
        $_POST['usuario']);
        header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Registros</title>
</head>
<body>
    <h1>Registre-se</h1>
    <form method="post">
        <input type="text" name="usuario" placeholder="Nome de Usuário"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <input type="password" name="senha" placeholder="Senha"><br><br>
        <button type="submit">Registrar</button>
</form>
<br><a href="login.php"><button>Logar</button></a>
</body>
</html>