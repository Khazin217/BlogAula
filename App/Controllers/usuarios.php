<?php
    class Usuarios extends Controller{
    
        public function __construct(){
            $this->$UsuarioModel = $this->model('Usuario');
        }

        public function cadastrar(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);
        if (isset($formulario)) :
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' => trim($formulario['email']),
                'senha' => trim($formulario['senha']),
                'confirma_senha' => trim($formulario['confirma_senha']),
            ];

            if (in_array("", $formulario)) :
                if (empty($formulario['nome'])) :
                    $dados['nome_erro'] = 'Preencha o campo nome';
                endif;
                if (empty($formulario['email'])) :
                    $dados['email_erro'] = 'Preencha o campo e-mail';
                endif;
                if (empty($formulario['senha'])) :
                    $dados['senha_erro'] = 'Preencha o campo senha';
                endif;

                if (empty($formulario['confirma_senha'])) :
                    $dados['confirma_senha_erro'] = 'Confirme a Senha';
                endif;

                // Parte de Validação de Senha
            else:
                if(checa::checarNome($formulario['nome'])):
                    $dados['nome_erro'] = 'O Nome informado é Inválido';
                elseif(checa::checarEmail($formulario['email'])):
                    $dados['email_erro'] = 'O E-mail informado é Invalido';
                elseif(strlen($formulario['senha']) < 6) :
                    $dados['senha_erro'] = 'A senha deve ter no minimo 6 caracteres';
                elseif($formulario['senha'] != $formulario['confirma_senha']) :
                    $dados['confirma_senha_erro'] = 'As senhas são diferentes';
                else:
                    $dados['senha'] = password_hash($formulario['senha'], PASSWORD_DEFAULT);
                    if($this->usuarioModel->armazenar($dados)):
                        echo 'Cadastro realizado com sucesso<hr>';
                    else:
                        die("Erro ao armazenar o usuario no banco de dados");
                    echo 'Pode cadastrar os dados<hr>';
                endif;
            endif;
            // echo 'Senha Original: ' .$formulario['senha']. "<hr>";
            // echo 'Senha MDS: ' .md5($formulario)['senha']. "<hr>";
            // echo '<hr>';
            // $senha_segura = password_hash($formulario['senha'], PASSWORD_DEFAULT);
            // echo 'senha hash: '.$senha_segura. "<hr>";
            var_dump($formulario);
        else:
            $dados = [
                'nome' => '',
                'email' => '',
                'senha' => '',
                'confirma_senha' => '',
            ];
        endif;
        $this->view('usuarios/cadastrar', $dados);
    }
}