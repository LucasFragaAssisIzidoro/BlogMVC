<div class="container p-5">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-5"><?php echo APP_NOME ?></h1>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae quia labore voluptas quis officiis eum inventore, amet vero totam laudantium harum perferendis obcaecati, aliquid rem libero odio, sapiente nemo dolorem? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem blanditiis numquam provident vero impedit itaque autem assumenda fugiat excepturi dolor cum tenetur sit asperiores, error laudantium dolorum minima aspernatur. Vitaem</p>
        </div>
        <div class="col-md-4 text-center">
            <div class="img-fluid logo">
                <img src="<?php echo URL?>/public/img/" alt="<?php echo APP_NOME ?>" class="rounded-circle" tittle="<?php echo APP_NOME ?>">
            </div>
        </div>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo URL?>/public/img/gato.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="<?php echo URL?>/public/img/gato.jpg"alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="<?php echo URL?>/public/img/gato.jpg"alt="New York">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</div>