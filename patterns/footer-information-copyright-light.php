<?php
/**
 * Title: Information and Copyright light
 * Slug: cormorant/footer-information-copyright-light
 * Categories: cormorant-footer
 * Description: Information and Copyright styled light
 * Block Types: core/group, core/paragraph, core/site-title, core/header, core/list
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|x-small"}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4,"fontSize":"extra-large"} -->
			<h4 class="has-extra-large-font-size"><strong>Footer title</strong></h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}}} -->
			<p style="margin-top:0">Ullamcorper etiam senectus sapien lectus molestie volutpat phasellus cursus convallis vulputate ac feugiat lacus congue, eros lacinia sagittis in ultricies adipiscing quis risus maximus mollis vehicula</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:button {"backgroundColor":"foreground","textColor":"background","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"var:preset|spacing|small","right":"var:preset|spacing|small"}}},"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background wp-element-button" style="border-radius:0px;padding-top:10px;padding-right:var(--wp--preset--spacing--small);padding-bottom:10px;padding-left:var(--wp--preset--spacing--small)">More Details</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"layout":{"type":"default"}} -->
		<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
					<h5 class="has-medium-font-size"><strong>About Us</strong></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"tiny"} -->
					<ul class="has-tiny-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item --></ul>
					<!-- /wp:list --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
					<h5 class="has-medium-font-size"><strong>Services</strong></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"tiny"} -->
					<ul class="has-tiny-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item --></ul>
					<!-- /wp:list --></div>
				<!-- /wp:column -->

				<!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"level":5,"fontSize":"medium"} -->
					<h5 class="has-medium-font-size"><strong>Contact</strong></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"tiny"} -->
					<ul class="has-tiny-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item -->

						<!-- wp:list-item -->
						<li>Menu Item</li>
						<!-- /wp:list-item --></ul>
					<!-- /wp:list --></div>
				<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"fontSize":"tiny"} -->
	<div class="wp-block-group has-tiny-font-size"><!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
		<div class="wp-block-group"><!-- wp:paragraph -->
			<p>©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"tiny"} /--></div>
		<!-- /wp:group --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
