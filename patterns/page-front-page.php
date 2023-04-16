<?php
/**
 * Title: Demo - Front Page
 * Slug: cormorant/page-front-page
 * Categories: cormorant-page
 * Description: Front Page Content
 * Keywords: cormorant
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 2.0.3
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>","id":2180,"dimRatio":0,"focalPoint":{"x":0.34,"y":0.32},"minHeight":50,"minHeightUnit":"vh","align":"full","className":"negative-margin-left-s negative-margin-right-s","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"},"margin":{"bottom":"0"}},"color":{"duotone":["#024059","#ffffff"]}}} -->
	<div class="wp-block-cover alignfull negative-margin-left-s negative-margin-right-s" style="margin-bottom:0;padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m);min-height:50vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2180" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" style="object-position:34% 32%" data-object-fit="cover" data-object-position="34% 32%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"lineHeight":"1.2"}},"fontSize":"4-xl"} -->
			<p class="has-text-align-center has-4-xl-font-size" style="line-height:1.2"><strong>Cormorant,<br>the Block Theme.</strong></p>
			<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"},"margin":{"top":"0"},"blockGap":"0"}},"textColor":"contrast","gradient":"base-to-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-base-to-primary-gradient-background has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
			<h2 class="wp-block-heading">Heading<br>Scalling</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"xs"} -->
			<p class="has-xs-font-size">Web mixed minor third and mejor third scaling.<br>And including fluid typography.</p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="line-height:1">Heading 1</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"lineHeight":"1"}}} -->
			<h2 class="wp-block-heading has-text-align-center" style="line-height:1">Heading 2</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"lineHeight":"1"}}} -->
			<h3 class="wp-block-heading has-text-align-center" style="line-height:1">Heading 3</h3>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"lineHeight":"1"}}} -->
			<h4 class="wp-block-heading has-text-align-center" style="line-height:1">Heading 4</h4>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":5,"style":{"typography":{"lineHeight":"1"}}} -->
			<h5 class="wp-block-heading has-text-align-center" style="line-height:1">Heading 5</h5>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"lineHeight":"1"}}} -->
			<h6 class="wp-block-heading has-text-align-center" style="line-height:1">Heading 6</h6>
			<!-- /wp:heading --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"},"margin":{"top":"0"},"blockGap":"0"}},"textColor":"contrast","gradient":"secondary-to-base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-contrast-color has-secondary-to-base-gradient-background has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading -->
			<h2 class="wp-block-heading">Font sizes<br>Scalling</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"fontSize":"xs"} -->
			<p class="has-xs-font-size">Web mixed minor third and mejor third scaling.<br>And including fluid typography.</p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"4-xl"} -->
			<p class="has-text-align-center has-4-xl-font-size" style="line-height:.6">Font Size 4 XL</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"3-xl"} -->
			<p class="has-text-align-center has-3-xl-font-size" style="line-height:.6">Font Size 3 XL</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"2-xl"} -->
			<p class="has-text-align-center has-2-xl-font-size" style="line-height:.6">Font Size 2 XL</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"xl"} -->
			<p class="has-text-align-center has-xl-font-size" style="line-height:.6">Font Size XL</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"l"} -->
			<p class="has-text-align-center has-l-font-size" style="line-height:.6">Font Size L</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"m"} -->
			<p class="has-text-align-center has-m-font-size" style="line-height:.6">Font Size M</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"s"} -->
			<p class="has-text-align-center has-s-font-size" style="line-height:.6">Font Size S</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":".6"}},"fontSize":"xs"} -->
			<p class="has-text-align-center has-xs-font-size" style="line-height:.6">Font Size XS</p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xl"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center">News</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
			<p class="has-text-align-center has-xs-font-size">Ante malesuada litora pellentesque ullamcorper platea arcu class <br>parturient fermentum, suspendisse amet purus  orci.</p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-template -->
			<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|s"}},"layout":{"type":"constrained"}} -->
			<section class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--xl)"><!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"var:preset|spacing|s"},"typography":{"fontSize":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<aside class="wp-block-group" style="font-size:12px"><!-- wp:post-date /-->

					<!-- wp:post-terms {"term":"category","separator":"","className":"is-style-cormorant-post-terms-square"} /--></aside>
				<!-- /wp:group -->

				<!-- wp:post-title {"isLink":true,"fontSize":"m"} /--></section>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
		<!-- /wp:group -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
		<p class="has-text-align-center">No posted yet.</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
	<!-- /wp:query -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-outline-square-button-base"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-base"><a class="wp-block-button__link wp-element-button" href="#">Read more...</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}},"border":{"width":"1px"}},"borderColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group has-border-color has-base-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><strong>Contact us</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Diam elit magnis faucibus arcu duis pulvinar malesuada placerat aenean cubilia purus risus sem, luctus in dictum himenaeos urna id commodo sollicitudin iaculis cursus per. Habitant tortor non nascetur lacus enim rutrum fringilla vivamus integer litora vitae nostra</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
		<div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button {"backgroundColor":"background","className":"is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base","fontSize":"xs"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base has-xs-font-size"><a class="wp-block-button__link has-background-background-color has-background wp-element-button">Contact Us</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:group {"layout":{"type":"default"}} -->
	<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|2-xl"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:heading {"textAlign":"center"} -->
			<h2 class="wp-block-heading has-text-align-center">News</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"xs"} -->
			<p class="has-text-align-center has-xs-font-size">Ante malesuada litora pellentesque ullamcorper platea arcu class <br>parturient fermentum, suspendisse amet purus  orci.</p>
			<!-- /wp:paragraph --></div>
		<!-- /wp:group --></div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":11,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-template -->
			<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"},"blockGap":"var:preset|spacing|s"}},"layout":{"type":"constrained"}} -->
			<section class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--xl)"><!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"var:preset|spacing|s"},"typography":{"fontSize":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<aside class="wp-block-group" style="font-size:12px"><!-- wp:post-date /-->

					<!-- wp:post-terms {"term":"category","separator":"","className":"is-style-cormorant-post-terms-square"} /--></aside>
				<!-- /wp:group -->

				<!-- wp:post-title {"isLink":true,"fontSize":"m"} /--></section>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
		<!-- /wp:group -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
		<p class="has-text-align-center">No posted yet.</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
	<!-- /wp:query -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-outline-square-button-base"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-base"><a class="wp-block-button__link wp-element-button" href="#">Read more...</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"0","padding":{"top":"var:preset|spacing|4-xl","bottom":"var:preset|spacing|4-xl"}}},"textColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-text-color" style="padding-top:var(--wp--preset--spacing--4-xl);padding-bottom:var(--wp--preset--spacing--4-xl)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|xl","right":"var:preset|spacing|xl","bottom":"var:preset|spacing|xl","left":"var:preset|spacing|xl"}},"border":{"width":"1px"}},"borderColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
	<div class="wp-block-group has-border-color has-base-border-color" style="border-width:1px;padding-top:var(--wp--preset--spacing--xl);padding-right:var(--wp--preset--spacing--xl);padding-bottom:var(--wp--preset--spacing--xl);padding-left:var(--wp--preset--spacing--xl)"><!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading"><strong>Contact us</strong></h3>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Diam elit magnis faucibus arcu duis pulvinar malesuada placerat aenean cubilia purus risus sem, luctus in dictum himenaeos urna id commodo sollicitudin iaculis cursus per. Habitant tortor non nascetur lacus enim rutrum fringilla vivamus integer litora vitae nostra</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"0"}},"fontSize":"medium"} -->
		<div class="wp-block-buttons has-custom-font-size has-medium-font-size"><!-- wp:button {"backgroundColor":"background","className":"is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base","fontSize":"xs"} -->
			<div class="wp-block-button has-custom-font-size is-style-cormorant-background-outline-square-button is-style-cormorant-filled-square-button-base has-xs-font-size"><a class="wp-block-button__link has-background-background-color has-background wp-element-button">Contact Us</a></div>
			<!-- /wp:button --></div>
		<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->