<?php session_start(); // Isto é para o retorno de Success do envio do Email. ?>

<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="DMX WEB SOLUTIONS">
    <meta name="description" content="">
    <meta name="keywords" content="majesan, majesan arquitetura">
    <meta name="robots" content="index, follow">

    <title>MAJESAN - Arquitetura</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="shortcut icon" href="imagens/icons/fav.png">

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/util.css">
    <link rel="stylesheet" href="css/index.css">

    <!-- FONTS  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 

    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Varela+Round:200,300,400,500,600,700,800" rel="stylesheet">

    <title>Hello, world!</title>

  </head>
  <body>


  <?php include 'templates/header.php'; ?>

  <?php include 'components/Sobre.php'; ?>  


    <section class="d-md-none mt-xs-50">
        <hr>
        <h2 id="titleProjeto" align="center" class="varela fs-50">
            <span class="text-e58712">Projetos</span>
            em Destaque
        </h2>
        <hr class="mt-2 mb-4" />


        <div class="container">
          <div class="row">
            <div class="col-md-3 mb-3">
              <div class="click-portfolio shadow img-portfolio w-100 h-min-200 rounded-2" style="background-image: url('imagens/index/port1.jpg');" data-link="recepcao-hotel-mj">
                <div class="d-flex">
                  <div class="bg-opacity-orange-hot-04 w-min-50 h-min-200">
                      <p class="text-shadow text-xs-center mt-xs-75 mt-md-2 ml-2 align-bottom fs-17 ls-1 text-white varela">
                        RECEPÇÃO<br>HOTEL MJ
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="click-portfolio shadow img-portfolio w-100 h-min-200 rounded-2" style="background-image: url('imagens/index/port2.jpg');">
                <div class="d-flex">
                  <div class="bg-opacity-orange-hot-04 w-min-50 h-min-200">
                      <p class="text-shadow text-xs-center mt-xs-50 mt-md-2 ml-2 align-bottom fs-17 ls-1 text-white varela">
                        RECEPÇÃO<br>EDIFÍCIO<br>COMEC
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="click-portfolio shadow img-portfolio w-100 h-min-200 rounded-2" style="background-image: url('imagens/index/port3.jpg');">
                <div class="d-flex flex-row">
                  <div class="bg-opacity-orange-hot-04 w-min-50 h-min-200">
                      <p class="text-shadow text-xs-center mt-xs-50 mt-md-2 ml-2 align-bottom fs-17 ls-1 text-white varela">
                        SALA DE<br>ESPERA<br>IND.
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <div class="click-portfolio shadow img-portfolio w-100 h-min-200 rounded-2" style="background-image: url('imagens/index/port4.jpg');">
                <div class="d-flex">
                  <div class="bg-opacity-orange-hot-04 w-min-50 h-min-200">
                      <p class="text-shadow text-xs-center mt-xs-75 mt-md-2 ml-2 align-bottom fs-17 ls-1 text-white varela">
                        IMAGINE<br>STOUREG
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section id="projetos" class="mt-md-85 mt-xs-5 pb-4">

        <div class="d-md-flex justify-content-center"> 

          <div class="w-100" style="background-image: url('imagens/index/projetos.jpg'); background-size: 100% 100%;"></div>

          <div class="bg-gray w-100 p-5">
            <h2 class="text-white raleway-300">Projetos</h2> <hr class="mt-0 border-opacity-white-70" />

            <p class="raleway-400 mt-5 mb-5 ls-05 text-light">
                Nossos projetos são focados em melhoria na qualidade de vida e funcionalidade do ambiente e clientes. Podendo ainda ser aplicado à diferentes tipos de ambientes e de necessidades, como residenciais, comerciais e corporativos.
            </p>
            <button id="projeto-btn-saibamais" onclick="javascript:location.href='portfolio.php?pasta='" id="projeto-btn-saibamais" class="text-white border border-light p-3 raleway-500 ls-1 bg-transparent cursor-pointer" style="display:none;">
                Veja todo o nosso portfólio
            </button>
          </div>

        </div>

    </section>

    <div id="servicos"></div>
    <section>
        <div class="container mt-5">

          <hr>

          <h2 id="titleService" align="center" class="varela fs-50" style="display: none;">
              <span class="text-e58712">4</span> 
              formas de <span class="text-e58712">Soluções</span> para você
          </h2>

          <hr class="mt-2 mb-5" />

            <div class="row" align="center">

                <div class="col-md-3">
                  <div class="box-options mb-5" id="opt1" style="display: none;">

                    <img src="imagens/index/opt1.jpg" class="rounded-circle shadow" width="175" height="175">

                    <p class="raleway-600 mt-4">
                      PROJETOS
                    </p>
                    
                    <div class="border-e2891b w-35px mb-3"></div>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box-options mb-5" id="opt2" style="display: none;">

                    <img src="imagens/index/opt2.jpg" class="rounded-circle shadow" width="175" height="175">

                    <p class="raleway-600 mt-4">MANUTENÇÃO RESIDENCIAL</p>

                    <div class="border-e2891b w-35px mb-3"></div>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box-options mb-5" id="opt3" style="display: none;">

                    <img src="imagens/index/opt3.jpg" class="rounded-circle shadow" width="175" height="175">

                    <p class="raleway-600 mt-4">GERENCIAMENTO DE OBRAS</p>

                    <div class="border-e2891b w-35px mb-3"></div>

                  </div>
                </div>
                <div class="col-md-3">
                  <div class="box-options mb-5" id="opt4" style="display: none;">

                    <img src="imagens/index/opt4.jpg" class="rounded-circle shadow" width="175" height="175">

                    <p class="raleway-600 mt-4">OBRAS E REFORMAS EM GERAL</p>

                    <div class="border-e2891b w-35px mb-3"></div>

                  </div>
                </div>

            </div>
        </div>
    </section>

    <section>
      <div class="border-top jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">

                <div class="col-md-8">

                  <p class="text-white text-shadow text-xs-center" id="jumb-text" style="margin-left:-350px;">
                    <span class="varela fs-md-50 fs-xs-25 d-block">Descubra sua melhor cara</span>
                    <span class="varela fs-md-60 fs-xs-30">Para sua construção!</span>
                  </p>
                        
                </div>
                <div class="col-md-4 mt--15">

                  <div align="center" id="jumb-right" style="display: none;">
                      <hr class="border-opacity-white-70 d-md-none" />
                            
                      <p class="text-shadow varela text-white fs-md-30 fs-xs-22 mb-4">
                        Entre em contato e conheça o nosso trabalho!
                      </p>

                      <button href="#contato" class="scroll text-white bg-opacity-orange-04 bg-hover-opacity-orange-1 rounded-5 border-ff8c00 border-red pt-3 pb-2 pl-5 pr-5 varela-800 text-shadow ls-1 fs-md-25 cursor-pointer">FALE CONOSCO</button>
                  </div>

                </div>
            </div>
        </div>
      </div>
    </section> 

    <section id="contato" class="bg-272833 pt-5 pb-4 mt--35">
        <div class="container mb-5">

            <h4 class="display-5 raleway-400 mb-1 ls-1 text-white">Fale Conosco</h4> 
            <hr class="mt-0 border-opacity-white-10" />

            <div class="row">
                <div class="col-md-6 mb-xs-5">

                  <?php
                      if(isset($_SESSION['status'])){
                          echo $_SESSION['status'];
                          unset($_SESSION['status']);
                      }
                  ?>

                    <form method="POST" action="processar_contato.php">

                        <input type="text" name="nome" class="mb-2 form-control p-2" placeholder="Digite seu nome" required>

                        <input type="email" name="email" class="mb-2 form-control p-2" placeholder="Digite seu email" required>

                        <textarea name="mensagem" class="mb-2 h-min-150 form-control p-2" placeholder="Digite sua mensagem"></textarea>

                        <input type="submit" name="btnEnvia" class="mt-1 btn bg-opacity-orange-04 bg-hover-opacity-orange-1 text-white p-2 varela-500 ls-1" value="Enviar" required>

                    </form>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!4v1529417364664!6m8!1m7!1sqsii_RzjgSlmf7Es63qmrg!2m2!1d-22.91863644195145!2d-43.21300529400988!3f342.4108914328013!4f25.257912162495643!5f0.5982666050585547" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>


    <?php include 'templates/footer.php'; ?>
    
  </body>
</html>