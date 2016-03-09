<?php
/**
 * Template Name: Tell us about your project
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
include (TEMPLATEPATH . '/header.php'); ?>
<?php while (have_posts()): the_post(); ?>
    <div class="banner_inner"><!--start Banner Inner-->
        <img src="<?php echo get_post_meta($post->ID, 'thumb', true) ?>" alt="">
        <span><?php echo get_post_meta($post->ID, 'value', true) ?></span>
    </div><!--end Banner Inner-->
<?php endwhile;
wp_reset_query(); ?>
    <div class="content"><!--start Content-->
	<div class="rfp_cont">
	    <h1><?php the_title(); ?></h1>	    
	    <div class="rfp_left">
		<?php the_content(); ?>
	    </div>
	    <div class="rfp_right">
		<div class="rfp_right_top">
		    <h2></h2>
    <?php dynamic_sidebar('American'); ?>
		</div>
		<strong><?php dynamic_sidebar('call'); ?></strong>
	    </div>
	    <div class="clear"></div>
	</div>
    </div><!--end Content-->
</div><!--end Wrapper-->
<?php get_footer(); ?>