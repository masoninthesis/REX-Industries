<?php

/**

 * The template for displaying the footer.

 *

 * Contains the closing of the id=main div and all content

 * after.  Calls sidebar-footer.php for bottom widgets.

 *

 * @package WordPress

 * @subpackage Twenty_Ten

 * @since Twenty Ten 1.0

 */

?>

<div id="footer"><!--start Footer-->















	<div class="request_btn"><?php dynamic_sidebar('Request For Proposal'); ?></div>













    <div class="clear"></div>

    <div class="footer_nav">

    	<!--<h2>SERVICES &amp; CAPABILITIES</h2>

        <ul>

        	<li><a href="#">CNC Plasma &amp; Oxy Fuel Cutting</a></li>

            <li><a href="#">Rolling &amp; Angle Rolling</a></li>

            <li><a href="#">Press Brake Forming &amp; Bending</a></li>

            <li><a href="#">Sawing</a></li>

            <li><a href="#">CNC Punching &amp; Punch Press</a></li>

            <li><a href="#">Finishing &amp; Powder Coating</a></li>

            <li><a href="#">Drilling &amp; Tapping</a></li>

            <li><a href="#">Welding</a></li>

        </ul>-->

		<?php dynamic_sidebar('SERVICES & CAPABILITIES'); ?>



    </div>

    

    <div class="footer_nav footer_nav2">

    	<!--<h2>CATEGORIES</h2>

        <ul>

        	<li><a href="#">Energy</a></li>

            <li><a href="#">Power</a></li>

            <li><a href="#">Mining</a></li>

            <li><a href="#">Custom</a></li>

        </ul>-->

		<?php dynamic_sidebar('CATEGORIES'); ?>

    </div>

    

    <div class="footer_nav footer_nav3">

    	<!--<h2>COMPANY</h2>

        <ul>

        	<li><a href="#">About</a></li>

            <li><a href="#">Contact</a></li>

        </ul>-->

		<?php dynamic_sidebar('COMPANY'); ?>

    </div>

    

    <div class="footer_nav footer_nav3">

    	<?php dynamic_sidebar('contact us'); ?>

    </div>

    <div class=" clrflt"></div>

    

    <div class="copyright"><?php dynamic_sidebar('copyright'); ?></div>

</div><!--end Footer-->



<?php

	/* Always have wp_footer() just before the closing </body>

	 * tag of your theme, or you will break many plugins, which

	 * generally use this hook to reference JavaScript files.

	 */



	wp_footer();

?>

</body>

</html>

