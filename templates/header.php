<div id="top"></div>

<a href="index.php">
  <img src="imagens/icons/logo-junta.png" class="fixed-top z-index-front-f" width="225" />
</a>


<nav id="header" class="navbar navbar-expand-lg fixed-top navbar-light bg-md-opacity-white-70 bg-xs-transparent">
  <div class="container-fluid">

      <button class="outline-0 shadow circle p-3 mr-2 fs-29 mt-3 navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> 
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <?php if($_SERVER['REQUEST_URI'] == "/majesan/" || $_SERVER['REQUEST_URI'] == "/majesan/index.php") { ?>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="#top">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="#about-us">Quem somos</a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="#projetos">Projetos</a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="#servicos">Serviços</a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="#contato">Contato</a>
          </li>
        </ul>

        <?php } else { ?>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="index.php#top">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="index.php#about-us">Quem somos</a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="index.php#projetos">Projetos</a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="index.php#servicos">Serviços</a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="index.php#clientes">Clientes</a>
          </li>
          <li class="nav-item ls-1 varela-500 p-1">
            <a class="nav-link scroll" href="index.php#contato">Contato</a>
          </li>
        </ul>

        <?php } ?>

      </div>
  </div> 
</nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100 max-h-md-600" src="imagens/slides/1.jpg" alt="First slide">
          <div class="carousel-caption">
            <div class="strike">
                <span class="fs-md-40 fs-xs-20 weight-700">&nbsp;BEM VINDO A MAJESAN! &nbsp; </span>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 max-h-md-600" src="imagens/slides/2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100 max-h-md-600" src="imagens/slides/3.jpg" alt="Third slide">
        </div>
      </div>
  
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>