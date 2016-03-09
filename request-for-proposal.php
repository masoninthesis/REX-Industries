<?php
/**
 * Template Name: Request for Proposal
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
    	<div class="rfp_cont">
        	<h1>REQUEST FOR PROPOSAL</h1>
            <div class="rfp_left">
            	<?php echo do_shortcode('[contact-form-7 id="262" title="Request for Proposal"]'); ?>
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
