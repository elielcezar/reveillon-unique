/* HOME */
var janela = $(window).width();



if(janela > 767){


/*--- Topo ----------------------------------------------------------------------*/

 $('#topo .logo').css('opacity','0');        

    $('#topo .logo').one('inview', function (event, visible) {
          if (visible) {        
            $(this).addClass('animated zoomIn').css('opacity','1');   
          }
      });  


    $('#topo .seta img').mouseenter(function(){
      $(this).addClass('animated pulse');
    });  

    $('#topo .seta img').mouseleave(function(){
      $(this).removeClass('animated pulse');
    });  

    
    
/*--- Section 1 -----------------------------------------------------------------*/

    $('.fundacao .conteudo, .fundacao .circulo, .estados .conteudo, .estados .circulo, .qualificacao .conteudo, .qualificacao .circulo').css('opacity','0');        
        
        $('#Section-1 .line').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('open delay12');   
            } else{
              $(this).removeClass('open');   
            }
        });  
        $('.fundacao .conteudo').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn delay4').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay4').css('opacity','0');   
            }
        });    
        $('.fundacao .circulo').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated bounceIn delay8').css('opacity','1');    
            } else{
              $(this).removeClass('animated bounceIn delay8').css('opacity','0');   
            }
        });   

        $('.estados .conteudo').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated bounceIn delay4').css('opacity','1');   
            } else {
              $(this).removeClass('animated bounceIn delay4').css('opacity','0');   
            }
        });    
        $('.estados .circulo').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated bounceIn delay8').css('opacity','1');   
            } else{
               $(this).removeClass('animated bounceIn delay8').css('opacity','0');    
            }
        });   

        $('.qualificacao .conteudo').one('inview', function (event, visible) {
            if (visible) {        
              $(this).addClass('animated bounceIn delay4').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay4').css('opacity','0');   
            }
        });    
        $('.qualificacao .circulo').one('inview', function (event, visible) {
            if (visible) {            
              $(this).addClass('animated bounceIn delay8').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay8').css('opacity','0');   
            }
        }); 



/*--- Section 2 -----------------------------------------------------------------*/

    $('#Section-2 ul.seguros li').css('opacity','0');                
       
        $('#Section-2 ul.seguros li.automovel').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay2').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay2').css('opacity','0');   
            }
        }); 

        $('#Section-2 ul.seguros li.motocicleta').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay4').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay4').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.residencial').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay6').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay6').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.empresarial').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay8').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay8').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.condominio').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay12').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay12').css('opacity','0');   
            }
        });       

        $('#Section-2 ul.seguros li.nautico').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay2').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay2').css('opacity','0');   
            }
        }); 

        $('#Section-2 ul.seguros li.equipamentos').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay4').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay4').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.transporte').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay6').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay6').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.garantia').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay8').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay8').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.rcdo').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay12').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay12').css('opacity','0');   
            }
        });       
        
         $('#Section-2 ul.seguros li.vida').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay2').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay2').css('opacity','0');   
            }
        }); 

        $('#Section-2 ul.seguros li.saude').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay4').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay4').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.previdencia').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay6').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay6').css('opacity','0');   
            }
        });    

        $('#Section-2 ul.seguros li.viagem').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated zoomIn delay8').css('opacity','1');   
            } else{
              $(this).removeClass('animated zoomIn delay8').css('opacity','0');   
            }
        });    


/*--- Section 3 -----------------------------------------------------------------*/

    $('#Section-3 li, #Section-3 img').css('opacity','0');    

        $('#Section-3 img').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn').css('opacity','0');   
            }
        });             
       
        /*$('#Section-3 li.seguradoras').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated fadeInRight delay2').css('opacity','1');   
            } else{
              $(this).removeClass('animated fadeInRight delay2').css('opacity','0');   
            }
        }); 

        $('#Section-3 li.taxas').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated fadeInRight delay6').css('opacity','1');   
            } else{
              $(this).removeClass('animated fadeInRight delay6').css('opacity','0');   
            }
        }); 

        $('#Section-3 li.parcerias').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated fadeInRight delay12').css('opacity','1');   
            } else{
              $(this).removeClass('animated fadeInRight delay12').css('opacity','0');   
            }
        }); */

/*--- Section 4 -----------------------------------------------------------------*/

    $('#Section-4 li, #Section-4 img').css('opacity','0');                


      $('#Section-4 .img-sede').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated fadeInUp').css('opacity','1');   
            } else{
              $(this).removeClass('animated fadeInUp').css('opacity','0');   
            }
        }); 
       
        $('#Section-4 .p004').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn delay2').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay2').css('opacity','0');   
            }
        }); 

        $('#Section-4 .p005').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn delay6').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay6').css('opacity','0');   
            }
        }); 

        $('#Section-4 .p006').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn delay12').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay12').css('opacity','0');   
            }
        }); 
       
/*--- Section 5 -----------------------------------------------------------------*/

    $('#Section-5 li, #Section-5 img').css('opacity','0');                

     $('#Section-5 img').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn').css('opacity','0');   
            }
        }); 
       
        $('#Section-5 li.balcao').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated fadeInRight').css('opacity','1');   
            } else{
              $(this).removeClass('animated fadeInRight').css('opacity','0');   
            }
        });        

        $('#Section-5 li.apolices').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated fadeInRight delay2').css('opacity','1');   
            } else{
              $(this).removeClass('animated fadeInRight delay2').css('opacity','0');   
            }
        }); 

        $('#Section-5 li.carteirinha').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated fadeInRight delay4').css('opacity','1');   
            } else{
              $(this).removeClass('animated fadeInRight delay4').css('opacity','0');   
            }
        }); 

         $('#Section-5 .p007').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn delay8').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay8').css('opacity','0');   
            }
        }); 

         $('#Section-5 .p008').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn delay10').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay10').css('opacity','0');   
            }
        }); 

         $('#Section-5 .p009').one('inview', function (event, isInView) {
            if (isInView) {        
              $(this).addClass('animated bounceIn delay12').css('opacity','1');   
            } else{
              $(this).removeClass('animated bounceIn delay12').css('opacity','0');   
            }
        }); 
       

        
}
