<DOCTYPE html>
<html>
<head>
		<?php
		wp_head();
		?>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<title> EJERCICIO DE MAQUETACIÓN</title>

</head>

<body>
<div class="clear" ></div>

	<div id="bgheader">
		
		
		<div id="container"> 
			<div class="menu-header">
			<?php wp_nav_menu( 
			array( 'theme_location' => 'top-nav' , 'container_class' => 'menu-header' )); ?>
			</div><!--end menu-->
		</div><!--end container-->
	</div> <!--end bgheader-->

	<div id="container">
		<div class="logo">
				<img  src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>
		<hr>
		<small>Just another WordPress Site</small>
		<hr>

		</div> <!--end logo-->
	</div><!--end container-->
		
	</div> <!--end id=header-->

	
