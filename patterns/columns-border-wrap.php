<?php
/**
 * Title: Border Wrap Columns
 * Slug: cormorant/columns-border-wrap
 * Categories: cormorant-columns
 * Description: Wrap columns with border
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/buttons, core/heading, core/columns
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 2.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:columns {"align":"wide","className":"is-style-cormorant-column-border-wrap-base is-style-cormorant-columns-border-wrap-base"} -->
	<div class="wp-block-columns alignwide is-style-cormorant-column-border-wrap-base is-style-cormorant-columns-border-wrap-base"><!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"}},"border":{"width":"1px"}}} -->
		<div class="wp-block-column" style="border-width:1px;padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
			<h3 class="wp-block-heading has-2-xl-font-size"><?php echo esc_attr__( 'How to change color', 'cormorant' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_attr__( 'The border colour can be changed <strong>by changing the text colour of the column.</strong> Libero fames porttitor eget primis turpis sollicitudin orci et dis urna augue, himenaeos felis semper non tempor fusce nam sit elit rhoncus.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-primary-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-primary-filled-square-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php echo esc_attr__( 'Learn More', 'cormorant' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"}},"border":{"width":"1px"}}} -->
		<div class="wp-block-column" style="border-width:1px;padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)"><!-- wp:heading {"level":3,"fontSize":"2-xl"} -->
			<h3 class="wp-block-heading has-2-xl-font-size"><?php echo esc_attr__( 'How to change color', 'cormorant' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php echo esc_attr__( 'The border colour can be changed <strong>by changing the text colour of the column.</strong> Libero fames porttitor eget primis turpis sollicitudin orci et dis urna augue, himenaeos felis semper non tempor fusce nam sit elit rhoncus.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-primary-filled-square-button"} -->
				<div class="wp-block-button is-style-cormorant-primary-filled-square-button"><a class="wp-block-button__link wp-element-button" style="border-radius:0px"><?php echo esc_attr__( 'Learn More', 'cormorant' ); ?></a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->