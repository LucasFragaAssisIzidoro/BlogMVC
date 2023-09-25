<div class="container my-5">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo URL ?>/posts">Posts</a></li>
            <li class="breadcrumb-item active" aria-current="page"><a><?= $dados['post']->titulo ?></a></li>
        </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <p>
                <?= $dados['post']->titulo ?>
            </p>
        </div>
        <div class="card-body">
            <p class="card-text">
                <?= $dados['post']->texto ?>
            </p>
        </div>
        <div class="card-footer text-muted float-left">
            Escrito por :
            <?= $dados['usuario']->nome_usuario ?> em
            <?= Valida::validarData($dados['post']->data_criacao) ?>
            <?php if ($dados['post']->id_usuario == $_SESSION['usuario_id']) : ?>
            <div class="text-center">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="<?= URL . '/posts/editar/' . $dados['post']->id_post ?>" class="btn btn-sm btn-primary">Editar Post</a>
                    </li>
                    <li class="list-inline-item">
                        <form action="<?= URL . '/posts/deletar/' . $dados['post']->id_post ?>" method="POST">
                            <input type="submit" class="btn btn-sm btn-danger" value="Deletar">
                        </form>
                    </li>
                </ul>
            </div>
            <?php endif ?>
        </div>
    </div>
</div>