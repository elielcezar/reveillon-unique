<?php session_start();?>
<?php
//If the form is submitted
if(isset($_POST['submit'])) {

    //Check to make sure that the name field is not empty
    if(trim($_POST['contactname']) == '') {
        $hasError = true;
    } else {
        $name = trim($_POST['contactname']);
    }   

    //Check to make sure sure that a valid email address is submitted
    if(trim($_POST['email']) == '')  {
        $hasError = true;
    } else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

    //Check to make sure comments were entered
    if(trim($_POST['message']) == '') {
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['message']));
        } else {
            $comments = trim($_POST['message']);
        }
    }

    //If there is no error, send the email
    if(!isset($hasError)) {        

        $emailTo = "elielcezar@gmail.com";

        $subject = "[Reveillon Unique] - Contato Pelo Site";       

        $body = "Nome: $name \nEmail: $email \n\nMensagem:\n $comments";

        $headers = "From: [Reveillon Unique] - Contato Pelo Site <".$emailTo.">" . "\r\n" . "Reply-To:" . $email;

        mail($emailTo, $subject, $body, $headers);

        $emailSent = true; 

        $_SESSION['mensagem']="ok";      
      
    }   

}
?>
<!DOCTYPE html>
<html>
	<head>
 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Reveillon Unique</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
<link href="css/contador.css" rel="stylesheet">

<link href="css/geral.css" rel="stylesheet">

<!--[if lt IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome-ie7.min.css" rel="stylesheet">
	<![endif]-->
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->

</head>
<body data-spy="scroll" data-target=".navbar">

	
<nav id="topnav" class="navbar navbar-fixed-top navbar-default" role="navigation">
    <div class="container">       
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>   
    </div>
   
    <div class="collapse navbar-collapse navbar-ex1-collapse">    
       <ul id="menu-principal" class="nav navbar-nav">
          <li class="active"><a href="#topo">Home</a></li>
          <li><a data-toggle="pill" href="#evento">O Evento</a></li>
          <li><a data-toggle="pill" href="#atracoes">Atrações</a></li>           
          <li><a data-toggle="pill" href="#fotos">Fotos</a></li>
          <li><a data-toggle="pill" href="#contato">Contato</a></li> 
          <li><a data-toggle="pill" href="#comochegar">Como Chegar</a></li>
          <li class="facebook"><a href="https://www.facebook.com/ReveillonUnique?fref=ts" target="_blank">Facebook</a></li>                     
          <li class="instagram"><a href="http://instagram.com/reveillonunique" target="_blank">Instagram</a></li>
      </ul>  

   </div><!-- /.navbar-collapse --> 
 
  </div>  
</nav>


<div class="wrapper">

<!-- HEADER --> 
<section id="topo">
		<div class="container">

      <div class="logo">        
         <img src="img/reveillon_unique.png" class="img-responsive" />
      </div>  

      <!--img src="img/aba01.png" class="img-responsive aba"/-->

		</div>
</section>
<!-- / HEADER -->


<!--  SECTION-1 -->  
<section id="evento">
    <div class="container">  
         
          <!--div class="logos">
            <div class="row">
                <div class="col-sm-6 logo1"><img src="img/logo_bobz.png" class="img-responsive logo-bobz" /></div>
                <div class="col-sm-6 logo2"><img src="img/logo_manati.png" class="img-responsive logo-manati" /></div>
            </div>
          </div-->

          <div class="row">  
             <img src="img/slogan4.png" class="img-responsive aba"/>
          </div>       

        
     </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-1 -->


<!--  SECTION-2 -->  
<section id="atracoes">
    <div class="container">
        
            <div class="row">                                
                <h3>Sounded by <br/> <strong>DJ Papagaio &amp; <br /> Breno Morais (Sax)</strong></h3>           
            </div>

            <div class="row releases">                

              <div class="col-sm-5 papagaio">
                <div class="foto-perfil"><img src="img/papagaio.png" class="img-responsive" /></div>
                <p>Quase 30 anos de experiência e muita versatilidade. É essa trajetória que o DJ Papagaio leva para as pistas como um dos principais nomes da música eletrônica no Rio de Janeiro.</p>                
                <p>Desde 2001, Papagaio une as batidas eletrônicas com instrumentos acústicos em live sessions de sucesso. Desde a primeira experiência, junto com o percussionista Ricardo Siri para um projeto da Bacardi até performances atuais ao lado do saxofonista Breno Morais, o DJ se reinventa em projetos como o A.pair.2.play em parceria com Donatinho e Metaux, com Rodrigo Sha, que rendeu a faixa “Sueste Beach”, uma homenagem à Fernando de Noronha.</p>
                <!--iframe width="100%" height="315" src="//www.youtube.com/embed/fFdYnjCTTjE" frameborder="0" allowfullscreen></iframe-->
                <a class="botao" href="https://www.youtube.com/watch?v=fFdYnjCTTjE" target="_blank">Conheça o som do DJ Papagaio</a>
              </div>

              <div class="col-sm-5 breno">
                <div class="foto-perfil"><img src="img/breno.png" class="img-responsive" /></div>
                <p>Do chorinho à house music, passando pelo jazz, samba e MPB em quatro tempos. Se há uma palavra que define o trabalho do saxofonista e flautista Breno Morais, é versatilidade. Atuando como músico há 20 anos, Morais mescla uma gama de projetos que, juntos, traduzem as influências mais variadas.</p>                
                <p>Envolvido com música desde sempre, a vontade de explorar novas vertentes demarca um novo momento na carreira do músico, denotando caminhos experimentais em uma trajetória já de muita experiência. Fôlego é o que não falta!</p>
                <br />
                <br />
                <a class="botao" href="https://soundcloud.com/brenomorais" target="_blank">Conheça o som de Breno Morais</a>
                <!--iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/10163151&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe-->
              </div>

            </div>
       
	   </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-2 -->

<!--  SECTION-4 -->  
<section id="fotos">
    <div class="container"> 

          <h3>Conheça o Local</h3> 

            <div class="row">            
                
                <div class="col-sm-3"><a class="fancybox" rel="galleria" href="img/img_001.jpg"><img src="img/thumb_001.jpg" class="img-responsive" /></a></div>
                <div class="col-sm-3"><a class="fancybox" rel="galleria" href="img/img_002.jpg"><img src="img/thumb_002.jpg" class="img-responsive" /></a></div>
                <div class="col-sm-3"><a class="fancybox" rel="galleria" href="img/img_003.jpg"><img src="img/thumb_003.jpg" class="img-responsive" /></a></div>
                <div class="col-sm-3"><a class="fancybox" rel="galleria" href="img/img_004.jpg"><img src="img/thumb_004.jpg" class="img-responsive" /></a></div>
                <div class="col-sm-3"><a class="fancybox" rel="galleria" href="img/img_005.jpg"><img src="img/thumb_005.jpg" class="img-responsive" /></a></div>
                <div class="col-sm-3"><a class="fancybox" rel="galleria" href="img/img_006.jpg"><img src="img/thumb_006.jpg" class="img-responsive" /></a></div>

                
           
            </div>       
        
     </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-4 -->


<section id="drinks">

  <div class="container">
        <img src="img/drinks.png" class="img-responsive" />
        <h3>DRINKS COM VODKA BELVEDERE, VEUVE CLICQUOT E WHISKY OLD PARR!</h3>
  </div>

</section>


<section id="contagem">

  <div class="container">
        <h3>Faltam</h3>
        <div class="contador">  
          <div class="demo6"></div>
        </div>
  </div>

</section>

<!--  SECTION-3 -->  
<section id="contato">
    <div class="container">  

                  <div id="contact-wrapper">

                    <h3>Informações e Ingressos:</h3>  

                    <div class="mensagens">

                    <?php if(isset($hasError)) { //If errors are found ?>
                                <span class="error">Por favor, preencha todos os campos.</span>
                            <?php } ?>                                      

                            <?php if(isset($_SESSION['mensagem'])) { //If email is sent ?>
                                <div class="mensagemForm">
                                    <span><strong>Mensagem enviada com sucesso!</strong></span><br />
                                    <span>Obrigado por entrar em contato. Sua mensagem será respondida o mais rápido possível.</span>
                                </div>
                            <?php } ?>

                            <?php unset($_SESSION['mensagem']); ?>                 
                    </div>

                    <div class="row">
                       <div class="col-sm-6">
                          <div class="info">   
                              <p><strong>BobZ Boutique Resort:</strong> <br />86 8103 6907 ou 11 96066 7600 </p>
                              <p><strong>Pousada Manati:</strong><br /> 86 3369-8100 / 8165-1205 / 9827-3619 </p>
                              <p><strong>Contato:</strong><br /> euvou@reveillonunique.com.br</p>
                          </div>
                      </div>

                      <div class="col-sm-6">                            

                            <form method="post" action="http://reveillonunique.com.br/site/#contato" method="post" id="contactform">
                                <div class="nome">                                    
                                      <input type="text" size="50" name="contactname" id="contactname" value="" class="required" placeholder="Nome" />                                   
                                </div>

                                <div class="email">                                    
                                    <input type="text" size="50" name="email" id="email" value="" class="required email" placeholder="Email" />
                                </div>                                            

                                <div class="mensagem">                                    
                                    <textarea rows="5" cols="50" name="message" id="message" class="required" placeholder="Mensagem"></textarea>
                                </div>
                                <input type="submit" value="Enviar" name="submit" class="submit" />
                            </form>

                        


                      </div>
                     
                  </div>           
              </div>              
      </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-3 -->






<!--  SECTION-5 -->  
<section id="comochegar">  
    <h3>Como Chegar</h3>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15938.576563255863!2d-41.38421276462989!3d-2.918292119885384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ec05bfc98b9a9f%3A0xaf7fd780f980919d!2sBarrinha+-+PI!5e0!3m2!1spt-BR!2sbr!4v1416505442367" width="100%" height="400" frameborder="0" style="border:0"></iframe>
</section>
<!-- / SECTION-5 -->



 
      
<!-- FOOTER -->
<footer id="footer">
		<div class="container">	

      <div class="row">
         <p>Reveillon Unique - Todos os direitos reservados </p>
      </div>

		</div>
</footer>
<!-- / FOOTER -->


</div><!-- wrapper -->


   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.nicescroll.min.js" type="text/javascript" ></script>
<script src="js/jquery.parallax-1.1.3.js" type="text/javascript" ></script>
<script src="js/jquery.localscroll-1.2.7-min.js" type="text/javascript" ></script>
<script src="js/jquery.scrollTo-1.4.6-min.js" type="text/javascript" ></script>


<script src="sites/all/themes/famacor2014/js/geral.js" type="text/javascript"></script>


<script type="text/javascript" src="js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.js?v=2.1.5"></script>


<script type="text/javascript" src="js/dscountdown.js"></script>

  
<script>
$(document).ready(function(){

  $('.fancybox').fancybox();

	$('#topnav').localScroll({offset: {top:0}});

	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	/*$('#Section-2').parallax("1%", 1);
	$('#Section-3').parallax("90%", 1);
  $('#Section-4').parallax("1%", 1);
  $('#Section-5').parallax("200%", 1);*/  

})
</script>


<!-- NICE Scroll plugin -->
<script>
	$(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#000"});
  }
);
</script>


<script>
//hide menu after click on mobile
$('.navbar .nav > li > a').click(function(){
		$('.navbar-collapse.navbar-ex1-collapse.in').removeClass('in').addClass('collapse').css('height', '0');
});
</script>


<script>
jQuery(document).ready(function($){
$('.demo6').dsCountDown({
  endDate: new Date("December 31, 2014 23:59:59"),
  titleDays: 'Dias',
  titleHours: 'Horas',
  titleMinutes: 'Minutos',
  titleSeconds: 'Segundos'
  });
});
</script>


<script src="js/jquery.inview.js"></script>
<!--[if !IE]><!-->
<script src="js/custom_inview.js"></script>
<!--<![endif]--> 

</body>
</html>