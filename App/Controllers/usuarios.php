<?php
class Usuarios extends Controller{
    public function cadastrar(){
        // Vai fazer uma verificação se o cadastro está certo
        $formulario = filter_input_array(
            INPUT_POST, ['nome'=>FILTER_SANITIZE_SPECIAL_CHARS, //Para sanitizar entradas como o nome, evitando a execução de código malicioso
            'email'=>FILTER_SANITIZE_SPECIAL_CHARS, //Para garantir que o email seja válido
            'senha'=>FILTER_DEFAULT,
            'confirma_senha'=>FILTER_DEFAULT]);
        /*
        echo $_POST['nome'];
        echo $_POST['email'];
        echo $_POST['senha'];
        */
        $this->view('usuarios/cadastrar');
    }//Fim do Cadastrar
}// Fim da classe Cadastrar
?>