<?php
/**
 * Template Name: service & capabilities
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
              <div class="textwidget">CELEBRATING<br> <span>
                <!-- COMPANY BIRTHDAY SCRIPT -->
                <?php
                //date in mm/dd/yyyy format; or it can be in other formats as well
                $birthDate = "1/1/1937";
                //explode the date to get month, day and year
                $birthDate = explode("/", $birthDate);
                //get age from date or birthdate
                $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
                ? ((date("Y") - $birthDate[2]) - 1)
                : (date("Y") - $birthDate[2]));
                echo "" . $age;
                ?>
                YEARS</span> OF AMERICAN MANUFACTURING
              </div>
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

                <div class="cont_link">
                	<!--<ul class="fltleft">
                    	<li><a href="#">CNC Plasma / Oxy Fuel Cutting </a></li>
                        <li><a href="#">Rolling – Including Angle Rolling</a></li>
                        <li><a href="#">Press Brake Forming – Bending</a></li>
                        <li><a href="#">Sawing</a></li>
                    </ul>-->
                    <?php wp_nav_menu( array('menu' => 'SERVICES_ONE', 'menu_id' => '',  'menu_class' => 'fltleft', 'container' => ''  )); ?>
                    <!--<ul class="fltright">
                    	<li><a href="#">CNC Plasma / Oxy Fuel Cutting </a></li>
                        <li><a href="#">Rolling – Including Angle Rolling</a></li>
                        <li><a href="#">Press Brake Forming – Bending</a></li>
                        <li><a href="#">Sawing</a></li>
                    </ul>-->
					<?php wp_nav_menu( array('menu' => 'SERVICES_TWO', 'menu_id' => '',  'menu_class' => 'fltright', 'container' => ''  )); ?>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div><!--end Content-->
</div><!--end Wrapper-->

<?php get_footer(); ?>
