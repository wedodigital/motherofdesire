<?php
/**
 * Testimonials content.
 *
 * @since presscore 1.0
 */

// File Security Check
if ( ! defined( 'ABSPATH' ) ) { exit; }
?>

<?php do_action('presscore_before_post'); ?>

<div class="testimonial-item">
	<?php get_template_part( 'content', 'template-testimonials' ); ?>
</div>

<?php do_action('presscore_after_post'); ?>