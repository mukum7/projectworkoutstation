<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage T
 * @since 
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">

<style>
	
/*********************** Demo - 16 *******************/
.box16{text-align:center;color:#fff;position:relative}
.box16 .box-content,.box16:after{width:100%;position:absolute;left:0}
.box16:after{content:"";height:100%;background:linear-gradient(to bottom,rgba(0,0,0,0) 0,rgba(0,0,0,.08) 69%,rgba(0,0,0,.76) 100%);top:0;transition:all .5s ease 0s}
.box16 .post,.box16 .title{transform:translateY(145px);transition:all .4s cubic-bezier(.13,.62,.81,.91) 0s}
.box16:hover:after{background:linear-gradient(to bottom,rgba(0,0,0,.01) 0,rgba(0,0,0,.09) 11%,rgba(0,0,0,.12) 13%,rgba(0,0,0,.19) 20%,rgba(0,0,0,.29) 28%,rgba(0,0,0,.29) 29%,rgba(0,0,0,.42) 38%,rgba(0,0,0,.46) 43%,rgba(0,0,0,.53) 47%,rgba(0,0,0,.75) 69%,rgba(0,0,0,.87) 84%,rgba(0,0,0,.98) 99%,rgba(0,0,0,.94) 100%)}
.box16 img{width:100%;height:auto}
.box16 .box-content{padding:20px;margin-bottom:20px;bottom:0;z-index:1}
.box16 .title{font-size:22px;font-weight:700;text-transform:uppercase;margin:0 0 10px}
.box16 .post{display:block;padding:8px 0;font-size:15px}
.box16 .social li a,.box17 .icon li a{border-radius:50%;font-size:20px;color:#fff}
.box16:hover .post,.box16:hover .title{transform:translateY(0)}
.box16 .social{list-style:none;padding:0 0 5px;margin:40px 0 25px;opacity:0;position:relative;transform:perspective(500px) rotateX(-90deg) rotateY(0) rotateZ(0);transition:all .6s cubic-bezier(0,0,.58,1) 0s}
.box16:hover .social{opacity:1;transform:perspective(500px) rotateX(0) rotateY(0) rotateZ(0)}
.box16 .social:before{content:"";width:50px;height:2px;background:#fff;margin:0 auto;position:absolute;top:-23px;left:0;right:0}
.box16 .social li{display:inline-block}
.box16 .social li a{display:block;width:40px;height:40px;line-height:40px;background:#6d3795;margin-right:10px;transition:all .3s ease 0s}
.box17 .icon li,.box17 .icon li a{display:inline-block}
.box16 .social li a:hover{background:#bea041}
.box16 .social li:last-child a{margin-right:0}
@media only screen and (max-width:990px){.box16{margin-bottom:30px}
}


</style>



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container_fluid">
	


	<!-- nav menu for header -->

	
		<!-- Begin nav menu -->

			<nav class="navbar navbar-expand-md fixed-top top-nav bg-dark" role="navigation">

				<div class="col-md-12" style="padding: 12px;">
					<div class="row">
						<div class="col-md-4">
							<div class="col-md-12">
							<div class="row">
								<div class="col-md-4"><?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?></div>
								<div class="col-md-8"><h6 style="padding-top: 12px; font-weight: bolder; font-size: 18px;"><span style="color: white;">The</span><br><span style="color: blue;">Workout</span><br><span style="color: orange;">Station</span></h6></div>
							</div>
							</div>	

							
							

						</div>
						<div class="align-self-center">
								<div class="col-md-8">
							

							    <!-- Brand and toggle get grouped for better mobile display -->
								    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
								        <span class="navbar-toggler-icon"></span>
								    </button>
							    
							   
							        <?php
							        wp_nav_menu( array(
							            'theme_location' => 'primary', // Defined when registering the menu
							            'depth'          => 2,
							            'container'      => 'div',
							            'container_class' => 'collapse navbar-collapse',
							            'container_id'    => 'bs-example-navbar-collapse-1',
							            'menu_class'      => 'navbar-nav mr-auto',
							            'walker'         => new WP_Bootstrap_Navwalker(), // This controls the display of the Bootstrap Navbar
							            'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback', // For menu fallback
							        ) );
							        ?>
							    </div>

						</div>

					</div>
				</div>
			</nav>







       
       
   