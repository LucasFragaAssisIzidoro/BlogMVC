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
            <?php foreach ($dados['posts'] as $post): ?>
                <div class="card my-5">
                    <div class="card-header">
                        <p><?= $post->titulo ?></p> 
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?= $post->texto ?></p>
                        <a href="<?= URL.'/posts/ver/'.$post->postId?>" class="btn btn-primary float-right">Ler Mais</a>
                    </div>
                    <div class="card-footer text-muted float-left">
                        Escrito por : <?=$post->nome_usuario ?> em <?= Valida::validarData($post->dataPost)?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    
</div>