<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage REX-industries
 * @since REX-industries 1.0
 */

get_header(); ?>

      <div style="height:300px;width:100%;background:url('http://www.rexindustries.com/wp-content/uploads/2016/03/slide3.jpg');">
        <div class="banner_info"><?php the_title(); ?>
          <div class="click_here"><a href="<?php echo get_permalink(140); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ourservices.png" alt="Our Services"></a>learn more about</div>
        </div>
      </div>
        	<?php //the_post_thumbnail('full'); ?>
            <!-- <div class="banner_info"><?php the_title(); ?>
            	<div class="click_here"><a href="<?php echo get_permalink(140); ?>"><img src="<?php bloginfo('template_url'); ?>/img/ourservices.png" alt="Our Services"></a>learn more about</div>
            </div> -->
        <div class="banner_thumb">
        <h1 class="prohecttitle">SELECT A PROJECT CATEGORY</h1>
        	<!-- <ul>
            	<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/thumb_pic1.jpg" alt=""><span><em>Energy</em></span></a></li>
              <li class="icon2"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/thumb_pic2.jpg" alt=""><span><em>POWER</em></span></a></li>
              <li class="icon3"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/thumb_pic3.jpg" alt=""><span><em>MINING</em></span></a></li>
              <li class="nomrgn icon4"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/thumb_pic4.jpg" alt=""><span><em>CUSTOM</em></span></a></li>
          </ul> -->
			<?php wp_nav_menu( array('menu' => 'home-nav', 'menu_id' => '',  'menu_class' => '', 'container' => ''  )); ?>
            <div class="clear"></div>
        </div>
    </div><!--end Banner-->

    <div class="content" id="wrapper"><!--start Content-->
    <div class="clientlogo"><?php dynamic_sidebar('clientlogo'); ?></div>
    <div class="want"><?php dynamic_sidebar('home-right-widget'); ?> </div>
    <div class="clear"></div>
    	<div class="content_left">
            <?php dynamic_sidebar('home-left-widget'); ?>
        </div>

        <div class="content_left cont_right">
            <?php dynamic_sidebar('ourservices'); ?>
        </div>
        <div class="clear"></div>
    </div><!--end Content-->
</div><!--end Wrapper-->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
