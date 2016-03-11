<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="main">

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

	/*

	 * Print the <title> tag based on what is being viewed.

	 */

	global $page, $paged;



	wp_title( '|', true, 'right' );



	// Add the blog name.

	bloginfo( 'name' );



	// Add the blog description for the home/front page.

	$site_description = get_bloginfo( 'description', 'display' );

	if ( $site_description && ( is_home() || is_front_page() ) )

		echo " | $site_description";



	// Add a page number if necessary:

	if ( $paged >= 2 || $page >= 2 )

		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );



	?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ).'?'.rand(0,10000); ?>" />

<link href="<?php bloginfo('stylesheet_directory'); ?>/css/dd.css" rel="stylesheet" type="text/css">

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">



<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.1.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ypSlideOutMenusC.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tools.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.dd.js"></script>

<script type="text/javascript">

$(document).ready(function() {

try {

   oHandler = $(".mydds").msDropDown().data("dd");

   //oHandler.visible(true);

   //alert($.msDropDown.version);

   //$.msDropDown.create("body select");

   $("#ver").html($.msDropDown.version);

   } catch(e) {

		   alert("Error: "+e.message);

   }



   $("input[type=file]").filestyle({

     image: "<?php bloginfo('template_url'); ?>/img/browse_btn.jpg",

     imageheight : 27,

     imagewidth : 72,

     width : 135

 });



});

</script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.filestyle.js"></script>

<script type="text/javascript">

	new ypSlideOutMenu("menu1", "down", 400, 35, 225, 233)

	ypSlideOutMenu.writeCSS();

</script>

<script type="text/javascript">

$(document).ready(function(){

	$('ul.tabs li').hover(function(){

		var index = $(this).index();

		$('ul.tabs li').removeClass('current');

		$(this).addClass('current');

		$('.tab_content .panes').hide();

		$('.tab_content .panes').eq(index).show();

	});

	$('.nav ul li.service').mouseover(function(){

			$(this).addClass('hover');

			ypSlideOutMenu.showMenu('menu1');

		});

		$('#menu1Container').mouseleave(function(){

			$('.nav ul li').removeClass('hover');



		});

$('.nav ul li.service').mouseleave(function(){

		ypSlideOutMenu.hideMenu('menu1');

		$('.nav ul li').removeClass('hover');

	});

});

</script>













<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php

	/* We add some JavaScript to pages with the comment form

	 * to support sites with threaded comments (when in use).

	 */

	if ( is_singular() && get_option( 'thread_comments' ) )

		wp_enqueue_script( 'comment-reply' );



	/* Always have wp_head() just before the closing </head>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to add elements to <head> such

	 * as styles, scripts, and meta tags.

	 */

	wp_head();

?>

</head>



<body>

<div id="wrapper"><!--start Wrapper-->

	<div id="header"><!--start Header-->

    	<div class="nav">

        	<!--<ul>

            	<li><a href="#">HOME</a></li>

                <li><a href="#" onMouseOver="" onMouseOut="ypSlideOutMenu.hideMenu('menu1')">SERVICES &amp; CAPABILITIES</a></li>

                <li><a href="#">ABOUT</a></li>

                <li><a href="#">CONTACT</a></li>

            </ul>-->



			<?php wp_nav_menu( array('menu' => 'header-nav', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>



            <div class="clear"></div>







        </div>

        <div class="header_right"><?php dynamic_sidebar('call'); ?></div>

        <div class="clear"></div>

        <div class="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt=""></a></div>



<?php if(is_Home()){ ?>



        <div class="logo_txt"><?php dynamic_sidebar('logo text'); ?></div>

<?php }else{ ?>



<?php } ?>

        <!--start drop menu-->

        <div class="dropmenu" id="menu1Container">

        <div id="menu1Content">

            <?php /*<div class="dropmenu_nav">

                <!--<ul class="tabs">

                    <li><a href="#">ENERGY</a></li>

                    <li><a href="#">POWER</a></li>

                    <li><a href="#">MINING</a></li>

                    <li><a href="#">CUSTOM</a></li>

                </ul>-->

				<?php wp_nav_menu( array('menu' => 'tabs', 'menu_id' => '',  'menu_class' => 'tabs', 'container' => ''  )); ?>

                <div class="clear"></div>

            </div> */?>



            <div class="tab_content">



             <div class="dropmenu_list panes" style="display:block;">

                <!--<ul>

                    <li><a href="#">CNC Plasma / Oxy Fuel Cutting</a></li>

                    <li><a href="#">CNC Punching / Punch Press</a></li>

                    <li><a href="#">Finishing / Powder Coating</a></li>

                </ul>-->

				<?php wp_nav_menu( array('menu' => 'services-capabilities', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>

            </div>

            <?php /*

            <div class="dropmenu_list panes" style="display:block;">

                <!--<ul>

                    <li><a href="#">CNC Plasma / Oxy Fuel Cutting</a></li>

                    <li><a href="#">CNC Punching / Punch Press</a></li>

                    <li><a href="#">Finishing / Powder Coating</a></li>

                </ul>-->

				<?php wp_nav_menu( array('menu' => 'dropmenu_list_one', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>

            </div>



            <div class="dropmenu_list panes">

                <!--<ul>

                    <li><a href="#">CNC Plasma / Oxy Fuel Cutting</a></li>

                    <li><a href="#">CNC Punching / Punch Press</a></li>

                    <li><a href="#">Finishing / Powder Coating</a></li>

                    <li><a href="#">Drilling &amp; Tapping</a></li>

                    <li><a href="#">Press Brake Forming - Bending</a></li>

                </ul>-->

				<?php wp_nav_menu( array('menu' => 'dropmenu_list_two', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>

            </div>



            <div class="dropmenu_list panes">

                <!--<ul>

                    <li><a href="#">Finishing / Powder Coating</a></li>

                    <li><a href="#">Drilling &amp; Tapping</a></li>

                    <li><a href="#">Press Brake Forming - Bending</a></li>

                    <li><a href="#">Rolling - Including Angle Rolling</a></li>

                    <li><a href="#">Welding</a></li>

                    <li><a href="#">Sawing</a></li>

                </ul>-->

				<?php wp_nav_menu( array('menu' => 'dropmenu_list_three', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>

            </div>



            <div class="dropmenu_list panes">

                <!--<ul>

                    <li><a href="#">CNC Plasma / Oxy Fuel Cutting</a></li>

                    <li><a href="#">CNC Punching / Punch Press</a></li>

                    <li><a href="#">Finishing / Powder Coating</a></li>

                    <li><a href="#">Drilling &amp; Tapping</a></li>

                    <li><a href="#">Press Brake Forming - Bending</a></li>

                    <li><a href="#">Rolling - Including Angle Rolling</a></li>

                    <li><a href="#">Welding</a></li>

                    <li><a href="#">Sawing</a></li>

                </ul>-->

				<?php wp_nav_menu( array('menu' => 'dropmenu_list_four', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>

            </div> */ ?>

            </div>

        </div>

        </div>

		<!--end drop menu-->

    </div><!--end Header-->
