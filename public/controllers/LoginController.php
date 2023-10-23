<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];


$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
$stmt->execute([$usuario]);
$user = $stmt->fetch();

if ($user && password_verify($senha, $user['senha'])) {
    $_SESSION['usuario'] = $usuario;
    header('Location: dashboard.php');
    } else {
        echo "<script>alert('Login falhou. Verifique suas
        credenciais.')</script>";
    }
}
?>