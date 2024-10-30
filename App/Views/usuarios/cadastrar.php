<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-header">
            Cadastra-se
        </div>
        <div class="card-body">
            <p class="card-text">
                <small>
                    Preencha o formulário abaixo para fazer o seu cadastro
                </small>
            </p>

            <form name="cadastrar" method="POST" action="<?=URL?>/usuarios/cadastrar" class="mt-4">
                <div class="form-group">
                    <label for='nome'>Nome: <sup class='text-danger'>*</sup></label>
                    <input type='text' name='nome' id='nome' class='form-control' require value='<?=$dados['nome']?>' class='form-control <?=$dados ['nome_erro'] ? 'is-invalid' : '' ?>'>
                <div class='invalid-feedback'>
                    <?$dados ['nome_erro']?>
                </div>
                </div>
                <div class="form-group">
                    <label for='email'>Email: <sup class='text-danger'>*</sup></label>
                    <input type='email' name='email' id='email' class='form-control' require value='<?=$dados['email']?>' class='form-control <?=$dados ['email_erro'] ? 'is-invalid' : '' ?>'>
                <div class='invalid-feedback'>
                    <?$dados ['email_erro']?>
                </div>
                </div>
                <div class="form-group">
                    <label for='senha'>Senha: <sup class='text-danger'>*</sup></label>
                    <input type='senha' name='senha' id='senha' class='form-control' require value='<?=$dados['senha']?>' class='form-control <?=$dados ['senha_erro'] ? 'is-invalid' : '' ?>'>
                <div class='invalid-feedback'>
                    <?$dados ['senha_erro']?>
                </div>
                </div>
                <div class="form-group">
                    <label for='confirma_senha'>Confirma Senha: <sup class='text-danger'>*</sup></label>
                    <input type='confirma_senha' name='confirma_senha' id='confirma_senha' class='form-control' require value='<?=$dados['confirma_senha']?>' class='form-control <?=$dados ['confirma_senha_erro'] ? 'is-invalid' : '' ?>'>
                <div class='invalid-feedback'>
                    <?$dados ['senha_erro']?>
                </div>
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                </div>
                <div class="col">
                    <a href="#">Você tem uma conta? Faça login</a>
                </div>
            </form>
        </div>
    </div>
</div>