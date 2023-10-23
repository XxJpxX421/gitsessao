<?php
require_once 'C:\xampp\htdocs\gitsessao\public\model\RegistroModel.php';

class RegistroController {
    private $registroModel;

    public function __construct($pdo) {
        $this->registroModel = new registroModel($pdo);
    }

    public function criarRegistro($email, $senha, $usuario) {
        $this->registroModel->criarRegistro($email, $senha, $usuario);
    }

        public function listarRegistros() {
        return $this->registroModel->listarRegistros();
    }

    public function exibirListaRegistros() {
        $registros = $this->registroModel->listarRegistros();
        include 'views/registros/lista.php';
    }

    public function atualizarRegistros($id_usuario, $email, $senha, $usuario) {
        $this->registroModel->atualizarRegistros($id_usuario, $email, $senha, $usuario);
    }

    public function excluirRegistro($id_usuario) {
        $this->registroModel->excluirRegistro($id_usuario);
    }
}

?>