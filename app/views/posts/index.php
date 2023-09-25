<div class="container py-5">
<?php echo Sessao::mensagem('post');?>
    <div class="card">
        <div class="card-header bg-info">
            POSTAGENS
            <div class="float-right">
                <a href="<?=URL?>/posts/cadastrar" class="btn btn-primary">Escrever</a>
            </div>
        </div>
        <div class="card-body">    
            <p>Listas Posts</p>
        </div>
    </div>
    
</div>