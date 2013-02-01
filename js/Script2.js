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
			pause: 4800, 
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
			$.colorbox({width:"400px", inline:true, href:"#subscribe_popup"});
		}		
		$(".open_popup").colorbox({width:"400px", inline:true, href:"#subscribe_popup"});
 });

 /*face*/
     (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1&appId=363367323738372";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

/*gm*/
 window.___gcfg = {lang: 'es-419'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
