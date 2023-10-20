<?php
require_once 'config/config.php';
require_once 'controllers/RegistroController.php';

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
        <input type="text" name="usuario" placeholder="Nome de Usuário">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit">Registrar</button>
</form>

</body>
</html>