<html>
    <head>
        <title>Lista de Registros</title>
</head>
<body>
    <h1>Lista de Registros</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Senha</th>
            <th>Nome de Usuário</th>
</tr>
<?php 
foreach ($registros as $registro): ?>
    <tr>
        <td><?php echo $registro['id_usuario']; ?></td>
        <td><?php echo $registro['email']; ?></td>
        <td><?php echo $registro['senha']; ?></td>
        <td><?php echo $registro['usuario']; ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>