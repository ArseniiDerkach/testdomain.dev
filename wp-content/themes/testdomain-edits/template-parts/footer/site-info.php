<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="contact-us">
	<div class="desktop-only">Call Us: 0987654321</div>
	<div class="mobile-only"><a href="tel:0987654321">Call Us</a></div>
	<div class="desktop-only">Email: <a href="mailto:testdomain@mail.to">testdomain@mail.to</a></div>
	<div class="mobile-only"><a href="mailto:testdomain@mail.to">Email Us</a></div>
	<div><a href="#" class="btn-contact">Contact Us</a></div>
	<div class="contact-popup">
		<div class="close">&times;</div>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita assumenda aliquid inventore ab ex deserunt alias culpa eaque quae. Harum quod voluptas voluptatibus unde laboriosam quo rem repellendus obcaecati ipsa?
	</div>
</div>
<div class="site-info">
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'twentyseventeen' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentyseventeen' ), 'WordPress' ); ?></a>
</div><!-- .site-info -->
