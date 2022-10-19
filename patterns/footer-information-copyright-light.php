<?php
/**
 * Title: Information and Copyright light
 * Slug: cormorant/footer-information-copyright-light
 * Categories: cormorant-footer
 * Description: Information and Copyright colored light
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/site-title, core/header, core/list
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"tagName":"footer","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"backgroundColor":"background","textColor":"foreground","layout":{"type":"default"}} -->
<footer class="wp-block-group alignfull has-foreground-color has-background-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"100px"}}}} -->
	<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"level":4,"fontSize":"xl"} -->
			<h4 class="has-xl-font-size"><strong>Footer title</strong></h4>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"s"} -->
			<p class="has-s-font-size">Ullamcorper etiam senectus sapien lectus molestie volutpat phasellus cursus convallis vulputate ac feugiat lacus congue, eros lacinia sagittis in ultricies adipiscing quis risus maximus mollis vehicula</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"foreground","style":{"border":{"radius":"0px"}},"className":"is-style-cormorant-foreground-outline-square-button","fontSize":"s"} -->
				<div class="wp-block-button has-custom-font-size is-style-cormorant-foreground-outline-square-button has-s-font-size"><a class="wp-block-button__link has-foreground-background-color has-background wp-element-button" style="border-radius:0px">More Details</a></div>
				<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
		<!-- /wp:column -->

		<!-- wp:column {"layout":{"type":"default"}} -->
		<div class="wp-block-column"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"0","left":"0"}}}} -->
			<div class="wp-block-columns"><!-- wp:column -->
				<div class="wp-block-column"><!-- wp:heading {"level":5,"fontSize":"m"} -->
					<h5 class="has-m-font-size"><strong>About Us</strong></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"s"} -->
					<ul class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:list-item -->
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
				<div class="wp-block-column"><!-- wp:heading {"level":5,"fontSize":"m"} -->
					<h5 class="has-m-font-size"><strong>Services</strong></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"s"} -->
					<ul class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:list-item -->
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
				<div class="wp-block-column"><!-- wp:heading {"level":5,"fontSize":"m"} -->
					<h5 class="has-m-font-size"><strong>Contact</strong></h5>
					<!-- /wp:heading -->

					<!-- wp:list {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"s"} -->
					<ul class="has-s-font-size" style="margin-top:var(--wp--preset--spacing--x-small)"><!-- wp:list-item -->
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
		<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"xs"} -->
			<p class="has-xs-font-size">©️</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"isLink":false,"fontSize":"xs"} /--></div>
		<!-- /wp:group --></div>
	<!-- /wp:group --></footer>
<!-- /wp:group -->
