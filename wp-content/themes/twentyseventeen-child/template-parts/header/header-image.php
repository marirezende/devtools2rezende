<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<!-- I moved the logo from here to the navigation-top.php, since I wanted it fixed in my nav bar -->

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
    
    <div class="custom-header-media">
		<?php the_custom_header_markup(); ?>
	</div>

</div><!-- .custom-header -->
