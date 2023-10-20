<?php
class RegistroModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    //Método para criar registro
    public function criarRegistro($email, $senha, $usuario) {
        $sql = "INSERT INTO usuarios (email, senha, usuario) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email, $senha, $usuario]);
    }

    //Model para listar registros
    public function listarRegistros() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
    //Model para atualizar registros
    public function atualizarRegistros($id_usuario, $email, $senha, $usuario) {
        $sql = "UPDATE usuarios SET email = ?, senha = ?, usuario = ? WHERE id_usuario = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$email, $senha, $usuario, $id_usuario]);
}
    //Model para excluir registro
    public function excluirRegistro($id_usuario) {
        $sql = "DELETE FROM registro WHERE id_usuario = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_usuario]);
    }
}
?>