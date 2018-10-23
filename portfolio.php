<!doctype html>
<html lang="pt-br">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="author" content="DMX WEB SOLUTIONS">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index, follow">

    <title>MAJESAN</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <link rel="shortcut icon" href="images/logotipo.png">

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


    <section class="mt-85 mb-85" id="portfolio">
        <hr>
        <h2 id="titleProjeto" align="center" class="varela fs-50">
            <span class="text-e58712">Portfólio</span>
        </h2>
        <hr class="mt-2 mb-4" />


        <div class="container">
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="click shadow img-portfolio w-100 h-min-200 rounded-2" style="background-image: url('imagens/portfolio/haddock/2.jpeg');" data-link="recepcao-hotel-mj">
                <div class="d-flex">
                  <div class="bg-opacity-orange-hot-04 w-min-50 h-min-200">
                      <p class="text-shadow text-xs-center mt-xs-75 mt-md-2 ml-2 align-bottom fs-17 ls-1 text-white varela">
                        HADDOCK<br>BUSINESS
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="click shadow img-portfolio w-100 h-min-200 rounded-2" style="background-image: url('imagens/portfolio/americana_s/5.jpeg');" data-link="recepcao-hotel-mj">
                <div class="d-flex">
                  <div class="bg-opacity-orange-hot-04 w-min-50 h-min-200">
                      <p class="text-shadow text-xs-center mt-xs-50 mt-md-2 ml-2 align-bottom fs-17 ls-1 text-white varela">
                        AMERICANA<br>AVENUE
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="click shadow img-portfolio w-100 h-min-200 rounded-2" style="background-image: url('imagens/portfolio/botafogo/10.jpeg');" data-link="recepcao-hotel-mj">
                <div class="d-flex flex-row">
                  <div class="bg-opacity-orange-hot-04 w-min-50 h-min-200">
                      <p class="text-shadow text-xs-center mt-xs-50 mt-md-2 ml-2 align-bottom fs-17 ls-1 text-white varela">
                        BOTAFOGO<br>TRADE<br>CENTER
                      </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>


    <div id="modal-gallery" class="z-index-front-ff modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <img id="img-zoom" class="img-fluid">
            <figcaption class="figure-caption legenda ml-2 p-1" id="legenda">
                
            </figcaption>

            <a href="#" class="mr-2 fs-20 text-danger p-fixed right-0" data-dismiss="modal">
                <i class="fa fa-window-close"></i>
            </a>

            <div class="modal-footer d-flex justify-content-center">
                <button class="click-previous btn bg-209b9b z-index-front-ff">
                    <i class="fa fa-step-backward"></i> 
                </button>
                <button class="click-next btn bg-209b9b">
                    <i class="fa fa-step-forward"></i>
                </button>
            </div>

        </div>
      </div>
    </div>


    <?php include 'templates/footer.php'; ?>


    <?php if($_GET['pasta'] != null) { ?>

      <script>    

          count = 1;
          pasta = "<?php echo $_GET['pasta']; ?>";

          $("#img-zoom").attr('src','imagens/portfolio/'+pasta+'/'+count+'.jpg'); 

                
          if(pasta == "haddock") {
                  
            legenda.innerHTML = "HADDOCK BUSINESS | Foto: " + count;  
                
          }

          if(pasta == "americana_s") {
                  
            legenda.innerHTML = "AMERICANA AVENUE | Foto: " + count;  
                      
          }
          if(pasta == "haddock") {
                  
            legenda.innerHTML = "BOTAFOGO TRADE CENTER | Foto: " + count;  
                      
          }

          $('#modal-gallery').modal('show'); 

          window.scrollTo(0,285);

      </script>

    <?php } ?>


    <script>

        var pasta;
        var count;

        var limiteRecepcaoHotelMj = 3;
        var legenda = document.getElementById("legenda");

        $(document).ready(function() { 

            window.scrollTo(0,285);
            

            $(".click").click(function(e) { 
                e.preventDefault();            

                count = 1;
                pasta = $(this).attr("data-link");

                $("#img-zoom").attr('src','imagens/portfolio/'+pasta+'/'+count+'.jpg'); 

                
                if(pasta == "recepcao-hotel-mj") {
                  
                  legenda.innerHTML = "Recepção Hotel MJ | Foto: " + count;  
                
                }


                $('#modal-gallery').modal('show'); 

            });


            $(".click-next").click(function() {


                if(count < limiteRecepcaoHotelMj) {
                    
                    count++;
                }

                console.log(count);

            });
            $(".click-previous").click(function() {

                count--;

                if(count <= 1) {

                    count = 1;
                }

                console.log(count);

            });


            $(".click-next , .click-previous").click(function() {

              if(pasta == "recepcao-hotel-mj") {

                  $("#img-zoom").attr('src','imagens/portfolio/'+pasta+'/'+count+'.jpg');

                  legenda.innerHTML = "Recepção Hotel MJ | Foto: " + count;  
              }

            });

        });

    </script>

  </body>
</html>