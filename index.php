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

        $headers = "From: [M2E] - Contato Pelo Site <".$emailTo.">" . "\r\n" . "Reply-To:" . $email;

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
<!--link rel="shortcut icon" href="http://famacorseguros.com.br/sites/default/files/favicon.png" type="image/png" /-->
<title>Reveillon Unique</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/bootstrap-theme.min.css" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
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
          <li><a data-toggle="pill" href="#contato">Contato</a></li> 
          <li><a data-toggle="pill" href="#fotos">Fotos</a></li>
          <li><a data-toggle="pill" href="#comochegar">Como Chegar</a></li>           
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

      <img src="img/aba01.png" class="img-responsive aba"/>

		</div>
</section>
<!-- / HEADER -->


<!--  SECTION-1 -->  
<section id="evento">
    <div class="container">  
         
          <div class="logos">
            <div class="row">
                <div class="col-sm-6 logo1"><img src="img/logo_bobz.png" class="img-responsive logo-bobz" /></div>
                <div class="col-sm-6 logo2"><img src="img/logo_manati.png" class="img-responsive logo-manati" /></div>
            </div>
          </div>

          <div class="row">  
              <h3>O reveillon exclusivo da Barra grande!</h3>                                
          </div>       

        
     </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-1 -->


<!--  SECTION-2 -->  
<section id="atracoes">
    <div class="container">
        
            <div class="row">                
                <img src="img/papagaio_breno.png" class="img-responsive" />
                <h3>Sounded by DJ Papagaio &amp; Breno Morais (Sax)</h3>           
            </div>

            <div class="row releases">                

              <div class="col-sm-5 papagaio">
                <p>Quase 30 anos de experiência e muita versatilidade. É essa trajetória que o DJ Papagaio leva para as pistas como um dos principais nomes da música eletrônica no Rio de Janeiro.</p>                
                <p>Desde 2001, Papagaio une as batidas eletrônicas com instrumentos acústicos em live sessions de sucesso. Desde a primeira experiência, junto com o percussionista Ricardo Siri para um projeto da Bacardi até performances atuais ao lado do saxofonista Breno Morais, o DJ se reinventa em projetos como o A.pair.2.play em parceria com Donatinho e Metaux, com Rodrigo Sha, que rendeu a faixa “Sueste Beach”, uma homenagem à Fernando de Noronha.</p>
              </div>

              <div class="col-sm-2 breno"></div>

              <div class="col-sm-5 breno">
                <p>Do chorinho à house music, passando pelo jazz, samba e MPB em quatro tempos. Se há uma palavra que define o trabalho do saxofonista e flautista Breno Morais, é versatilidade. Atuando como músico há 20 anos, Morais mescla uma gama de projetos que, juntos, traduzem as influências mais variadas.</p>
                <p>Breno quer mais é experimentar e vivenciar a música em toda a sua plenitude – e o alicerce é a qualidade. “Essa coisa de trabalhar com vários estilos parte do lidar com músicas e ideias boas, sempre buscando transmitir uma vibe bacana”, conta.</p>
                <p>Envolvido com música desde sempre, a vontade de explorar novas vertentes demarca um novo momento na carreira do músico, denotando caminhos experimentais em uma trajetória já de muita experiência. Fôlego é o que não falta!</p>
              </div>

            </div>
       
	   </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-2 -->


<!--  SECTION-3 -->  
<section id="contato">
    <div class="container">        
            <div class="row">

                  <div id="contact-wrapper">

                    <h1>Solicite já a sua Reserva!</h1>

                    <?php if(isset($hasError)) { //If errors are found ?>
                        <p class="error">Por favor, preencha todos os campos.</p>
                    <?php } ?>                                      

                    <?php if(isset($_SESSION['mensagem'])) { //If email is sent ?>
                        <div class="mensagemForm">
                            <p><strong>Mensagem enviada com sucesso!</strong></p>
                            <p>Obrigado por entrar em contato. Sua mensagem será respondida o mais rápido possível.</p>
                        </div>
                    <?php } ?>

                    <?php unset($_SESSION['mensagem']); ?>

                    <form method="post" action="http://reveillonunique.com.br/site/#contato" method="post" id="contactform">
                        <div class="nome">
                            <label for="name"><strong>Nome:</strong></label>
                            <input type="text" size="50" name="contactname" id="contactname" value="" class="required" />
                        </div>

                        <div class="email">
                            <label for="email"><strong>Email:</strong></label>
                            <input type="text" size="50" name="email" id="email" value="" class="required email" />
                        </div>                                            

                        <div class="mensagem">
                            <label for="message"><strong>Mensagem:</strong></label>
                            <textarea rows="5" cols="50" name="message" id="message" class="required"></textarea>
                        </div>
                        <input type="submit" value="Enviar" name="submit" class="submit" />
                    </form>

                </div>           
            </div>              
     </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-3 -->


<!--  SECTION-4 -->  
<section id="fotos">
    <div class="container">
        <div class="wrapper">      
            <div class="row">
                
                <h1>Fotos</h1>
           
            </div>       
        </div><!-- line --> 
     </div><!-- / CONTAINER-->
</section>
<!-- / SECTION-4 -->


<!--  SECTION-5 -->  
<section id="comochegar">        
           
                
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15938.576563255863!2d-41.38421276462989!3d-2.918292119885384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ec05bfc98b9a9f%3A0xaf7fd780f980919d!2sBarrinha+-+PI!5e0!3m2!1spt-BR!2sbr!4v1416505442367" width="100%" height="600" frameborder="0" style="border:0"></iframe>
           
           
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

<script>
jQuery(document).ready(function(){
	jQuery('#topnav').localScroll({offset: {top:0}});

	//.parallax(xPosition, speedFactor, outerHeight) options:
	//xPosition - Horizontal position of the element
	//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
	//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
	
	jQuery('#Section-2').parallax("1%", 1);
	jQuery('#Section-3').parallax("90%", 1);
  jQuery('#Section-4').parallax("1%", 1);
  jQuery('#Section-5').parallax("200%", 1);
  jQuery('#Section-6').parallax("1%", 1);


})
</script>
<!-- NICE Scroll plugin -->

<script>
	jQuery(document).ready(
  function() {  
    jQuery("html").niceScroll({cursorcolor:"#000"});
  }
);
</script>

<script>
//hide menu after click on mobile
jQuery('.navbar .nav > li > a').click(function(){
		jQuery('.navbar-collapse.navbar-ex1-collapse.in').removeClass('in').addClass('collapse').css('height', '0');

		});
</script>

<script src="js/jquery.inview.js"></script>
<!--[if !IE]><!-->
<script src="js/custom_inview.js"></script>
<!--<![endif]--> 

</body>
</html>