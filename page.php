<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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
    	<div class="sidebar">
        	<div class="side_nav">
            	<!--<ul>
                	<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic1.jpg" alt=""><span><em>ENERGY</em></span></a></li>
                    <li class="icon2"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic2.jpg" alt=""><span><em>POWER</em></span></a></li>
                    <li class="icon3"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic3.jpg" alt=""><span><em>MINING</em></span></a></li>
                    <li class="icon4"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic4.jpg" alt=""><span><em>CUSTOM</em></span></a></li>
                </ul>-->
				<?php wp_nav_menu( array('menu' => 'side_nav', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>
            </div>
            <div class="question">
            	<?php dynamic_sidebar('QUESTIONS'); ?>
            </div>
            
            <div class="celebration">
            	<?php dynamic_sidebar('CELEBRATING'); ?>
            </div>
        </div>
        
        <div class="category_cont">
        	<div class="energy_cont">

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
        </div>
        <div class="clear"></div>
    </div><!--end Content-->
</div><!--end Wrapper-->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
