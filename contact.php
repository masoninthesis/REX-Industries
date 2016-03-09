<?php
/**
 * Template Name: contact
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
$google_map_address = get_post_meta($post->ID, 'google-map-address', true);
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
        	<h1>Questions or Comments?</h1>
            <div class="rfp_left">
            	<!--<form action="#">
                	<div class="rfp_form_top">
                    	<input name="" type="text" class="name_field fltleft" value="First Name*">
                        <input name="" type="text" class="name_field fltright" value="Last Name*">
                        <div class="clear"></div>
                        
                        <input name="" type="text" class="name_field fltleft" value="Title">
                        <input name="" type="text" class="name_field fltright" value="Company*">
                        <div class="clear"></div>
                        
                        <input name="" type="text" class="name_field fltleft" value="Address*">
                        <input name="" type="text" class="name_field fltright" value="Address 2">
                        <div class="clear"></div>
                        
                        <input name="" type="text" class="name_field fltleft" value="City*">
                        <div class="state_list">
                        	<select name="" class="state_list_bg mydds">
                            	<option>State*</option>
                                <option>State*</option>
                                <option>State*</option>
                            </select>
                        </div>
                        <input name="" type="text" class="zip_field fltright" value="Zip*">
                        <div class="clear"></div>
                        
                        <input name="" type="text" class="name_field fltleft" value="Work Phone*">
                        <input name="" type="text" class="name_field fltright" value="Email*">
                        <div class="clear"></div>
                    </div>
                    
                    <div class="rfp_form_btm">
                    	<div class="project_list">
                        	<select name="" class="project_list_bg mydds">-->
                            	<!--<option>Project Type?</option>
                                <option>Project Type?</option>
                                <option>Project Type?</option>
                            </select>
                        </div>
                        
                        <div class="browse_box">
                        	<input name="" type="file" class="browse">
                        </div>
                        <div class="clear"></div>
                        
                        <input name="" type="text" class="date_field fltleft" value="Approx. Start Date">
                        <input name="" type="text" class="date_field fltright" value="Approx. End Date">
                        <div class="clear"></div>
                        
                        <textarea name="" cols="10" rows="10" class="des_txtarea">Description</textarea>
                    </div>
                    
                    <div class="submit_area">
                    	<input name="" type="checkbox" value="" class="check_box">
                        <span>Is this a repeat project?</span>
                    	<input name="" type="button" class="submit_btn" value="">
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </form>-->
				<?php echo do_shortcode('[contact-form-7 id="263" title="Contact"]'); ?>
				<div class="googleMap">
				    <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;geocode=&amp;q=<?php echo str_replace(array('<br />',' '),'+',nl2br($google_map_address)); ?>&amp;aq=&amp;ie=UTF8&amp;hq=&amp;hnear=<?php echo str_replace(array('<br />',' '),'+',nl2br($google_map_address)); ?>&amp;t=m&amp;view=map&amp;z=14&amp;output=embed&iwloc=near"></iframe>
				</div>

            </div>
            
            <div class="rfp_right">
				
            	<div class="rfp_right_top">
					<h2></h2>
                	<?php dynamic_sidebar('contact us'); ?>
                </div>
                
                <strong><?php dynamic_sidebar('call'); ?></strong>
            </div>
            <div class="clear"></div>
        </div>
    </div><!--end Content-->
</div><!--end Wrapper-->

<?php get_footer(); ?>
