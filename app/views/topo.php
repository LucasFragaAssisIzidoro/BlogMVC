<header class="bg-dark">
    <div class="container">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <a href="<?php echo URL?>" class="navbar-brand">Lucas</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="<?php echo URL?>/paginas/home" class="nav-link" data-tooltip ="tooltip" tittle = "Pagina Inicial">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo URL?>/paginas/sobre" class="nav-link" data-tooltip ="tooltip" tittle = "Sobre nós">Sobre Nós </a>
                    </li>
                </ul>
                <?php if(isset($_SESSION['usuario_id'])):?>
                    <span class="navbar-text">
                        <p><?php echo "Olá ".$_SESSION['usuario_nome']."!"; ?> </p>
                        <a class="btn btn-sm btn-danger" href="<?php echo URL?>/usuarios/sair">Sair</a>
                    </span>
                <?php else : ?> 
                    <span class="navbar-text">
                        <a href="<?php echo URL?>/usuarios/cadastrar" class="btn btn-info" data-tooltip="tooltip" tittle = "Cadastre-se"> Cadastre-se</a>
                        <a href="<?php echo URL?>/usuarios/login"class="btn btn-info" data-tooltip="tooltip" tittle = "Login"> Login</a>
                    </span>
                <?php endif; ?> 
            </div>
        </nav>
    </div>
</header>
