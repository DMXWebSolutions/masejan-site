// SCROLL 
        $('.scroll').on('click', function(event) {

            var target = $( $(this).attr('href') );

            if( target.length ) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top -65
                }, 500);
            }

            $("#navbarSupportedContent").removeClass('show');
        });

        $("#sidebar-logo").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });


        // Effect Text is typing
        var count = 0;
        var texto = "Materializar sonhos. Cuidar, Construir, Surpreender e Amar.";

        function digitar() {

          result = document.getElementById("is-typing");
          window.setTimeout(function() { inserir(texto[count]) }, 60);

        }
        function inserir(letra) {

          result.innerHTML += letra;
          count++;

          if(count >= 58) {
              $("#btn-conheca-nos").fadeIn('slow');
          }
  
          if(count < texto.length) {
            window.setTimeout(function() { inserir(texto[count]) }, 60);
          }
          
        }


     var isMobile = false;
     $(document).ready(function(){ 

        if ( $("#detect").css('display') == 'none' ){
            isMobile = true;
        } 

        if(isMobile == false) {
            $(".nav-link").css('color', '#222');
        } else {
           $(".nav-link").css('color','#222');
        }

        digitar();
        
     });

     $(document).scroll(function() { 

        var scroll = $(window).scrollTop();
        // console.log(scroll);  

        if ( $("#detect").css('display') == 'none' ){
            isMobile = true;
        } else {
          isMobile = false;
        }
        

        if(isMobile == false) {

          if($(window).scrollTop() >= 285){
            $("#img-quemsomos").addClass('d-none d-md-block');
            $("#img-quemsomos").fadeIn('slow'); 
          }

          if($(window).scrollTop() >= 850){
              $("#projeto-btn-saibamais").fadeIn('slow'); 
          }

          if($(window).scrollTop() >= 985){

              $("#titleService").slideDown();

              $("#opt1").delay("fast").fadeIn();
              $("#opt2").delay("slow").fadeIn();
              $("#opt3").delay(800).fadeIn();
              $("#opt4").delay(1000).fadeIn();

          }

          if($(window).scrollTop() >= 1500) {

            $("#jumb-right").fadeIn('slow');
            $("#jumb-text").animate({marginLeft: '0px'});
          }

          if($(window).scrollTop() >= 2000){
              $("#clientes-btn-saibamais").fadeIn('slow'); 
          }

        } else {
    
          if($(window).scrollTop() >= 1439){
              $("#projeto-btn-saibamais").fadeIn('slow'); 
          }
          if($(window).scrollTop() >= 3885){
              $("#clientes-btn-saibamais").fadeIn('slow'); 
          }

          if($(window).scrollTop() >= 1653){
              $("#titleService").slideDown();
              $("#opt1").delay(500).fadeIn();
          }
          if($(window).scrollTop() >= 2171){ 
              $("#opt2").delay(500).fadeIn();
          }
          if($(window).scrollTop() >= 2575){
              $("#opt3").delay(500).fadeIn(); 
          }
          if($(window).scrollTop() >= 3000){
              $("#opt4").delay(500).fadeIn();
          }


          if($(window).scrollTop() >= 4153) {
            // alert('ok') 
            $("#jumb-right").fadeIn('slow');
            $("#jumb-text").animate({marginLeft: '0px'});
          }


        }

    });


    $(".click-portfolio").click(function() {

        var link = $(this).attr("data-link"); 
        // location.href = 'portfolio.php#'+link; 
        location.href = 'portfolio.php?pasta='+link;

    });