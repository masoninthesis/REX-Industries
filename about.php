<?php
/**
 * Template Name: about
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<?php 
while(have_posts()): the_post();
?>

    <div class="banner_inner"><!--start Banner Inner-->
        <img src="<?php echo get_post_meta($post->ID, 'thumb', true) ?>" alt="">
        <span><?php echo get_post_meta($post->ID, 'value', true) ?></span>
    </div><!--end Banner Inner-->


<?php
endwhile;
wp_reset_query();
?>
    
    <div class="content"><!--start Content-->
    	<div class="about_top">


<?php
while(have_posts()): the_post();
?>


        	<?php the_post_thumbnail('full'); ?>
            <h1><?php the_title(); ?></h1>
            	<?php the_content(); ?>

<?php
endwhile;
wp_reset_query();
?>


            <div class="clear"></div>
        </div>
        
        <div class="cont_link">
            <!--<ul class="about_link1 fltleft">
                <li><a href="#">CNC Plasma / Oxy Fuel Cutting </a></li>
                <li><a href="#">Rolling – Including Angle Rolling</a></li>
            </ul>-->
            <?php wp_nav_menu( array('menu' => 'about_one', 'menu_id' => '',  'menu_class' => 'about_link1 fltleft', 'container' => ''  )); ?>
            <!--<ul class="about_link1 fltleft">
                <li><a href="#">Press Brake Forming – Bending</a></li>
                <li><a href="#">Drilling &amp; Tapping</a></li>
            </ul>-->
            <?php wp_nav_menu( array('menu' => 'about_two', 'menu_id' => '',  'menu_class' => 'about_link1 fltleft', 'container' => ''  )); ?>
            <!--<ul class="about_link2 fltleft">
                <li><a href="#">CNC Punching / Punch Press</a></li>
                <li><a href="#">Finishing / Powder CoatinG</a></li>
            </ul>-->
            <?php wp_nav_menu( array('menu' => 'about_three', 'menu_id' => '',  'menu_class' => 'about_link2 fltleft', 'container' => ''  )); ?>
            <!--<ul class="about_link3 fltleft">
                <li><a href="#">Sawing</a></li>
                <li><a href="#">Welding</a></li>
            </ul>-->
            <?php wp_nav_menu( array('menu' => 'about_four', 'menu_id' => '',  'menu_class' => 'about_link3 fltleft', 'container' => ''  )); ?>
            <div class="clear"></div>
        </div>
    </div><!--end Content-->
</div><!--end Wrapper-->

<?php get_footer(); ?>
