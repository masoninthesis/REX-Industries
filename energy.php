<?php
/**
 * Template Name: energy
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

    <div class="banner_inner"><!--start Banner Inner-->
        <img src="<?php bloginfo('template_url'); ?>/img/banner_inner.jpg" alt="">
        <span>INDUSTRIAL STEEL MANUFACTURNG SINCE 1937</span>
    </div><!--end Banner Inner-->
    
    <div class="content"><!--start Content-->
    	<div class="sidebar">
        	<div class="side_nav">
            	<ul>
                	<li><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic1.jpg" alt=""><span><em>ENERGY</em></span></a></li>
                    <li class="icon2"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic2.jpg" alt=""><span><em>POWER</em></span></a></li>
                    <li class="icon3"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic3.jpg" alt=""><span><em>MINING</em></span></a></li>
                    <li class="icon4"><a href="#"><img src="<?php bloginfo('template_url'); ?>/img/side_nav_pic4.jpg" alt=""><span><em>CUSTOM</em></span></a></li>
                </ul>
            </div>
            <div class="question">
            	<h2>QUESTIONS?</h2>
                <p>OUR EXPERIENCED STAFF IS <br>HERE TO HELP.  <a href="#">CONTACT US</a>.</p>
            </div>
            
            <div class="celebration">
            	CELEBRATING<br> <span>77 YEARS</span> OF AMERICAN MANUFACTURING
            </div>
        </div>
        
        <div class="category_cont">
        	<div class="energy_cont">
            	<img src="<?php bloginfo('template_url'); ?>/img/energy_pic.jpg" alt="">
                <h1>ENERGY</h1>
                <p>We have over 77 years of experience servicing customers in the Refining, Petrochemical and Natural Gas industries. Our customers are focused in the Intermountain Region. Our vast experience
                and sophisticated CNC equipment allow Rex Industries to provide superb fabrications services to our loyal customers, many of which have done business with us for decades.</p>
                <p>Our customers include leading companies in every facet of the energy industry.  We provide custom fabrication services specializing in carbon steel, stainless steel and aluminum.</p>

            </div>
        </div>
        <div class="clear"></div>
    </div><!--end Content-->
</div><!--end Wrapper-->

<?php get_footer(); ?>
