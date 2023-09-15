<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <card class="card-header bg-secondary text-white">
            Cadastre-se
        </card>
        <div class="card-body">
            <form name="cadastrar" method="POST" action="<?php echo URL?>/usuarios/cadastrar">
                <div class="form-group">
                    <label for="nome">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" name="nome" id="nome" value="<?php echo $dados['nome']?>" class="form-control <?php if(isset($dados['nome_erro'])){echo $dados['nome_erro'] ? 'is-invalid' : '';}; ?>">
                    <div class="invalid-feedback">
                        <?= $dados['nome_erro'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">E-mail: <sup class="text-danger">*</sup></label>
                    <input type="text" class="form-control <?php if(isset($dados['email_erro'])){echo $dados['email_erro'] ? 'is-invalid' : '';}; ?>" name="email" id="email" value="<?php echo $dados['email']?>">
                    <div class="invalid-feedback">
                        <?= $dados['email_erro'] ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="senha">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" class="form-control <?php if(isset($dados['senha_erro'])){echo $dados['senha_erro'] ? 'is-invalid' : '';}; ?>" name="senha" id="senha"  >
                    <div class="invalid-feedback">
                        <?= $dados['senha_erro'] ?>
                    </div>
                    
                </div>

                <div class="form-group">
                    <label for="confirmar_senha">Confirmar a Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" class="form-control <?php if(isset($dados['confirmar_senha_erro'])){echo $dados['confirmar_senha_erro'] ? 'is-invalid' : '';}; ?>" name="confirmar_senha" id="confirmar_senha">
                    <div class="invalid-feedback">
                        <?= $dados['confirmar_senha_erro'] ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Cadastrar" class="btn btn-info btn-block">
                    </div>
                    <div class="col-md-6">
    	                <a href="#">Voce ja tem uma conta? Faca login</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>