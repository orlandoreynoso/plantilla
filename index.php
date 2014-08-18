<?php

//$breadcrumbstart = '<a href="'.WB_URL.'">Inicio: </a> ';
$moredetails = '<h3>M&aacute;s detalles:</h3>';

// ..Redirigir si este archivo se llama directamente en el navegador
if(!defined('WB_URL')) {
	header('Location: ../index.php');
	exit(0);
}  
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
		<title><?php page_title(' - ', '[WEBSITE_TITLE][SPACER][PAGE_TITLE]'); ?></title>
		<link rel="shortcut icon" href="<?php echo WB_URL; ?>/media/recursos/favicon.ico" type="image/x-icon"/>		
		<meta name="description" content="<?php  page_description(); ?>" />
		<meta name="keywords" content="<?php  page_keywords(); ?>" />	
	
	
	
	<link rel="Stylesheet" href="<?php  echo TEMPLATE_DIR; ?>/css/pageY.css" />
  
   	<link rel='stylesheet' type='text/css' href='<?php  echo TEMPLATE_DIR; ?>/css/menu.css' />
	
	<link rel="stylesheet" href="<?php  echo TEMPLATE_DIR; ?>/css/comprar.css">	
    
	<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>

	<script type='text/javascript' src='<?php  echo TEMPLATE_DIR; ?>/js/menu_jquery.js'></script>

	  <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    <link rel='stylesheet' id='camera-css' href="<?php  echo TEMPLATE_DIR; ?>/css/camera.css" type='text/css' media='all'> 
    <style>
	
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 1000px;
			width: 100%;
		}
	</style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //		Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////--> 
    
    <script type='text/javascript' src="<?php  echo TEMPLATE_DIR; ?>/scripts/jquery.min.js"></script>
    <script type='text/javascript' src="<?php  echo TEMPLATE_DIR; ?>/scripts/jquery.mobile.customized.min.js"></script>
    <script type='text/javascript' src="<?php  echo TEMPLATE_DIR; ?>/scripts/jquery.easing.1.3.js"></script> 
    <script type='text/javascript' src="<?php  echo TEMPLATE_DIR; ?>/scripts/camera.min.js"></script> 
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				height: '250px',
				loader: 'bar',
				thumbnails: true		
				
			});
/*
			jQuery('#camera_wrap_2').camera({
				height: '250px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			}); */
		});
	</script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24221639-1']);
	  _gaq.push(['_trackPageview']);
	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>	

</head>

<?php 
	/* Buffering content 1
	ob_start();		
	page_content(1);
	$page_content_1 = ob_get_contents();
	ob_end_clean();
	
	Breadcrumbs */
	ob_start();  
	show_menu2(0, SM2_ROOT, SM2_CURR, SM2_CRUMB, '<span class="[class]"> &raquo; [a][menu_title]</a></span>', '', '', '', ''.$breadcrumbstart.' Usted esta aqu&iacute;&nbsp;  &raquo; <span class="[class]">[a][menu_title]</a>&nbsp;</span>');
	$breadcrumbs=ob_get_contents(); 
	ob_end_clean();
	
	
?>

<body>

	
        <div id='root'>
         <div class='box' id='izquierda'>
           <div class='box' id='cuadroLogo'>
            <div class='box' id='logo'><a href="<?php echo WB_URL; ?>/"><img src="<?php echo WB_URL;?>/media/logo.png" width="112" height="82" /></a></div>
                    <div class='box' id='slogan'>
                    <div id="titulo-slogan">
                    <a href="<?php echo WB_URL; ?>/">
                    <h1>Cocodrilo, S.A</h1>
                    <h2>De todo en electr&oacute;nica</h2>
                    </a>
                    </div>  					
					</div>
                </div>
				
                <div class='box' id='lista-productos'>
					<div id="titulo_general" class="titulo01"><h1>FACEBOOK</h1></div>
                    <div class="face_comboni"><?php section_ID(19); ?></div>
                </div>                    
                <div class='box' id='lista-productos'>
					<div id="titulo_general" class="titulo01"><h1>TWITTER</h1></div>					
                    <div class="face_comboni"><?php section_ID(20); ?></div>					
                    <div id="lista01" class="icon-arrow-right"><?php  //section_ID(100); ?></div>
					<div class='box' id='fb'></div>
					<div class='box' id='tw'></div>					
                </div>

            </div>
			
            <div class='box' id='derecha'>
                <div class='box' id='menu'>
					<nav id='cssmenu'>
					<?php  show_menu2(1, SM2_ROOT, SM2_ALL, SM2_ALL,SM2_ALL,"\n</li>",'<ul>',false,false,'<ul>'); ?> 
					</nav>
				</div>
                <div class='box' id='slider'>
				
				<!-- SLIDER -->
				
	<div class="fluid_container">

        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
            <div data-thumb="<?php echo WB_URL; ?>/media/slides/thumbs/banner01.jpg" data-src="<?php echo WB_URL; ?>/media/slides/publicidad1.jpg">
                <!-- div class="camera_caption fadeFromBottom">
                    Camera is a responsive/adaptive slideshow. <em>Try to resize the browser window</em>
                </div -->
            </div>
            <div data-thumb="<?php echo WB_URL; ?>/media/slides/thumbs/banner02.jpg" data-src="<?php echo WB_URL; ?>/media/slides/publicidad2.jpg">
                <!-- div class="camera_caption fadeFromBottom">
                    It uses a light version of jQuery mobile, <em>navigate the slides by swiping with your fingers</em>
                </div -->
            </div>
            <div data-thumb="<?php echo WB_URL; ?>/media/slides/thumbs/banner03.jpg" data-src="<?php echo WB_URL; ?>/media/slides/publicidad3.jpg">
                <!-- div class="camera_caption fadeFromBottom">
                    <em>It's completely free</em> (even if a donation is appreciated)
                </div -->
            </div>

        </div><!-- #camera_wrap_1 -->

   
    </div><!-- .fluid_container -->
    
    <div style="clear:both; display:block;"></div>					
				<!-- ENDS SLIDER -->					
			
				</div>
				
				<div class='box' id='bienvenida'>
					<div class="breadcrumbs">
						<div id="mapeo">&nbsp;<?php echo $breadcrumbs; ?></div>
					</div>					
					<h1>BIENVENIDOS</h1>
				</div>
				
                <div class='box' id='cuadro_cuadros'>				
                <div class='box' id="cuadro_buscar">
                	<div id="titulo_general" class="titulo01"><h1>BUSCAR<span class="tit_buscar"></span></h1></div>
                	<div id="texto01"><?php section_ID(84); ?></div>
					<div class="search">
					  <?php if(SHOW_SEARCH) { ?>
					  <form action="<?php echo WB_URL.'/search/index'.PAGE_EXTENSION; ?>" method="post">
					  <span class="field"><input class="field" value="Buscar:" onfocus="if (this.value == 'Buscar:') this.value = '';" onblur="if (this.value == '') this.value = 'Buscar:';" type="text" name="string" /></span>
					  <input class="search-btn" name="Cerca2" type="submit"  id="Cerca2" value="<?php if(isset($TEXT['SUBMIT'])) { echo $TEXT['SEARCH'];} else { echo ' '; } ?>" />
					  </form>
					  <?php } ?>
					</div> 	
                </div>
				
                <div class='box' id='cuadro_tiendas'>
                <div id="titulo_general" class="titulo01"><h1>TIENDAS</h1></div>
				<div id="texto01" class="enlace"><?php section_ID(85); ?></div>	
                </div>
				
                <div class='box' id='cuadro_redes'>
                <div id="titulo_general"  class="titulo01"><h1>REDES SOCIALES</h1></div>				
				<div id="texto01">
				<?php section_ID(4); ?>
				<!-- social-bar -->
				<ul id="social-bar">
					<li class="facebook"><a href="https://www.facebook.com/CocodriloCablesyAccesorios"  title="cocodrilosa.com" ></a></li>
					<li class="twitter"><a href="https://twitter.com/CocodriloSA"  title="cocodrilosa.com" ></a></li>					
				</ul>
				<!-- ENDS social-bar -->				
				</div>
				</div>
				</div>
				
                <div style="clear:both; height:12px;"></div>
				<div class='box' id='cuadro_mapeo'>
					<div id="compartir">    
					<p>Compartir  &raquo;</p> 					
					<!-- AddThis Button BEGIN -->
					<div class="addthis_toolbox addthis_default_style ">
					<a class="addthis_button_preferred_1"></a>
					<a class="addthis_button_preferred_2"></a>
					<a class="addthis_button_preferred_3"></a>
					<a class="addthis_button_preferred_4"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
					</div>
					<script type="text/javascript">var addthis_config = {"data_track_clickback":true};</script>
					<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4def925768ffe7cc"></script>
					<!-- AddThis Button END -->
					</div>				
				</div>					
				
				<div class='box' id='caja01'>
					<?php  page_content(); ?>    
				</div>
				
            </div>



			
        </div>			

<div class='box' id='footer'>
<div class='box' id='direccion'>
<p>Central: 5ta avenida 11-63 Zona 9 | Tel: (502) 2331 - 7222   |  Fax: (502) 2362 - 7884</p>
<p>Sala No. 1: Calzada Roosevelt 13-10 zona 2 de mixco</p>
<p>C.C. San Jeronimo - Local No. 4 | Tel: (502) 2250 - 5671 | (502) 2250 - 7675 </p>
</div>			
<p>Desarrollado por: <a href="www.orlandoreynoso.com">orlandoreynoso</a></p>
</div>
		
</body>
</html>