<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1, IE=9"> 
 <meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1"/>
 <meta name="description" content="Plataforma de Aprendisaje ">
 <meta property="og:title" content="Bookpro-v" />
 <meta property="og:type" content="education virtual" />
 <meta property="og:url" content="http://Bookpro-v.es"/>
 <meta property="og:image" content="img/logog.png" />
 <meta property="og:site_name" content="Bookpro-v.es" />
<title>Bookpro-v</title>
 <link rel="shortcut icon" href="img/favicon.ico" />
 <link rel="stylesheet" href="css/stylo.css">
 <!--[if lt IE 9]>
 <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
 <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
 <![endif]--> 
<link href="css/jflow.style.css" type="text/css" rel="stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Rye' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="js/jflow.plus.min.js" type="text/javascript"></script>
<link media="screen" rel="stylesheet"  href="css/colorbox.css" />
<script  src="js/colorbox.js"></script>  
<script type="text/javascript">
/*galeria*/
	$(document).ready(function(){
	    $("#myController").jFlow({
			controller: ".jFlowControl", 
			slideWrapper : "#jFlowSlider", 
			slides: "#mySlides",  
	    	selectedWrapper: "jFlowSelected",  			
			effect: "flow", 
			width: "100%",  
			height: "400px",  
			duration: 300,  		
			pause: 5000, 
			prev: ".jFlowPrev", 
			next: ".jFlowNext", 
			auto: true
    });
});
/*entrar*/
$("document").ready(function (){ 
       // load the overlay
        if (document.cookie.indexOf('visited=true') == -1) {
			var fifteenDays = 1000*60*60*24*15;
			var expires = new Date((new Date()).valueOf() + fifteenDays);
			document.cookie = "visited=true;expires=" + expires.toUTCString();
			$.colorbox({width:"580px", inline:true, href:"#subscribe_popup"});
		}		
		$(".open_popup").colorbox({width:"400px", inline:true, href:"#subscribe_popup"});
 });
</script>
    </head>
    <body  id="style-1">
       <article id="Mone">
        <div id="Monebar"></div>
            <section id="Monelogo">
                <img src="img/logog.png" alt="bookpro-v">
            </section>
            <section id="Monetitulo">
            <h1><span>B</span>ookpro-v</h1>
            </section>
            <section id="MoneEnRe">
                <div id="Entra"><a href="#" class="open_popup" title="Entrar">ENTRAR</a></div>
                <div id="Nuevo"><a href="#" title="Nuevo">NUEVO</a></div>
                <div style='display:none'>
                    <div id='subscribe_popup' style='padding:10px;'>
                        <form action="#" method="post">
                        <h2>Iniciar sesión</h2>
                        <h3>Inicia con alguna de tus cuentas:</h3>
                        <div class="inset"><p>
                        <a href="#f" title="facebook" id="Mfb">
                          <label>Facebook</label>
                          <a href="#f"  id="circlef"></a></a></p>
                        <p><a href="#t" title="Twitter" id="Mtw"><label>Twitter</label>
                        <a href="#t" id="circlet"></a></a></p>
                        <p><a href="#p" title="plus" id="Mpl"><label>Plus&nbsp;&nbsp;Mas</label>
                         <a href="#p" id="circlep"></a></a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </section>
       </article>
       <article id="Mtwo">  
           <section id="MtwoLetras">
               <span>Aprende <b>YA!!!</b></span>
           </section>
           <section id="MtwoLogo">
              <article id="logo">
                <div id="wrap">
	            <div id="A">
                <div id="logo-a">B</div>	
	            </div>
                 </div>
	        </article>              
           </section>
           <section id="MtwoRedes">
               <div class="button" id="face">                  
                   <a href="#"><img src="img/facebook-icon2.png" alt="facebook"/><em>Like It</em></a>  
                   <div id="fb" class="fb-like" data-href="http://localhost:49235/index1.html#" data-send="false" data-layout="button_count" data-width="100%" data-show-faces="false"></div>                
                   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=363367323738372";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
               </div>

               <div class="button" id="twitter"> 
                <a href="#"><img src="img/twitter-icon2.png" alt="twitter"><em>Tweet It</em></a>  
                   <div id="tw"><a href="https://twitter.com/share" class="twitter-share-button" data-via="MJPlayV" data-lang="es">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div> 
               </div>
               <div class="button" id="plus">
                <a href="#"><img src="img/google-plus-icon2.png" alt="plus"><em>Plus It</em></a>  
                   <div id="pl">
                       <!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium"></div>

<!-- Place this tag after the last +1 button tag. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'es-419'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
                   </div>
               </div>
           </section>
       </article>
        <article id="Mthree">
            <div id="sliderContainer">
    <div id="mySlides">
      <div id="slide1" class="slide"> <img src="images/jflow-sample-slide1.jpg" alt="Slide 1 jFlow Plus" />
        <div class="slideContent">
          <h3><a href="#">ir a </a>titulo</h3>
           <p><a href="#">ir a </a>contenido</p>
        </div>
      </div>
      <div id="slide2" class="slide"> <img src="images/jflow-sample-slide2.jpg" alt="Slide 2 jFlow Plus" />
        <div class="slideContent">
          <h3><a href="#">ir a </a>titulo</h3>
           <p><a href="#">ir a </a>contenido</p>
        </div>
      </div>
      <div id="slide3" class="slide"> <img src="images/jflow-sample-slide3.jpg" alt="Slide 3 jFlow Plus" />
        <div class="slideContent">
          <h3><a href="#">ir a </a>titulo</h3>
          <p><a href="#">ir a </a>contenido</p>
        </div>
      </div>
      <div id="slide4" class="slide"> <img src="images/jflow-sample-slide4.jpg" alt="Slide 3 jFlow Plus" />
        <div class="slideContent">
          <h3><a href="#">ir a </a>titulo</h3>
           <p><a href="#">ir a </a>contenido</p>
        </div>
      </div>
    </div>
    <div id="myController"> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
        <span class="jFlowControl"></span> 
    </div>
    <div class="jFlowPrev"></div>
    <div class="jFlowNext"></div>
  </div>
       </article>
 <article id="Mfour">
     <section class="bbuton" id="QS">
     <a href="#" title="">
    <div id="background">
    <div id="fonr"><span></span></div>
       <P>QUIENES SOMOS</P>
    <div id="fonl"><span></span></div>
    </div>
     </a>
     </section>
     <section class="bbuton" id="bone">
          <a href="#" title="">
         <div id="background">
    <div id="fonr"><span></span></div>
        <P>NUESTROS CURSOS</P>
    <div id="fonl"><span></span></div>
    </div></a></section>
     <section class="bbuton" id="btwo">
          <a href="#" title="">
         <div id="background">
    <div id="fonr"><span></span></div>
        <P>PRUEBA GRATIS</P>
    <div id="fonl"><span></span></div>
    </div></a></section>
     <section class="bbuton" id="bthree">
          <a href="#" title="">
         <div id="background">
    <div id="fonr"><span></span></div>
         <P>NUESTRAS CUENTAS</P>
    <div id="fonl"><span></span></div>
    </div></a></section>
     <section class="bbuton" id="bfour">
          <a href="#" title="">
         <div id="background">
    <div id="fonr"><span></span></div>
        <P>MAS CONTENIDO</P>
    <div id="fonl"><span></span></div>
    </div></a></section>
 </article>
<article  id="MUP">
<div id="cuerpp"></div>
    <p><em>&copy;</em>2012 &#8211; BOOKPRO-V, un proyecto de <a target='_blank' href='https://twitter.com/#!/MJPlayV'>MJPlay-V</a> y de <a target='_blank' href='http://twitter.com/aprobecomar'>Aprobe</a>. El nombre y logo de BOOKPRO-V son marcas registradas.</p>
<div id="ponebar"></div>
    <div id="img"><a id="mj" href="http://mjplay-v.16mb.com/" target='_blank'><img src="img/LOGO.jpg" alt="MJplay-V"></a>
	<a id="ap" href="http://www.aprobe.com.ar/" target='_blank'><img src="img/aprobelogo1.png" alt="Aprobe"></a></li></div> 
</article>
    </body>
</html>