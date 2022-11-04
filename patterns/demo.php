<?php
/**
 * Title: Demo
 * Slug: cormorant/demo
 * Categories: cormorant-page
 * Description: First visible parts
 * Keywords: cormorant
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>","id":2180,"dimRatio":50,"overlayColor":"primary","focalPoint":{"x":0.37,"y":0.34},"minHeight":60,"minHeightUnit":"vh","align":"full","className":"negative-margin-left-s negative-margin-right-s","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-cover alignfull negative-margin-left-s negative-margin-right-s" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;min-height:60vh"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2180" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_MDRPL8PT36.jpg'; ?>" style="object-position:37% 34%" data-object-fit="cover" data-object-position="37% 34%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","style":{"typography":{"lineHeight":"1.3"}},"fontSize":"5-xl"} -->
			<p class="has-text-align-center has-5-xl-font-size" style="line-height:1.3"><strong>Cormorant</strong>,<br>the Block Theme<br>for enjoy Full Site Editing.</p>
			<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover -->

	<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|m"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--m)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|m","bottom":"var:preset|spacing|m"}}}} -->
		<h2 class="has-text-align-center" style="padding-top:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m)">Bundled Styles</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|s","left":"var:preset|spacing|s"}}}} -->
		<div class="wp-block-columns alignfull" style="padding-right:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"level":3,"className":"is-style-cormorant-striped-heading-primary","fontSize":"l"} -->
				<h3 class="is-style-cormorant-striped-heading-primary has-l-font-size">Heading Styles</h3>
				<!-- /wp:heading -->

				<!-- wp:heading {"level":3,"className":"is-style-cormorant-dotted-heading-secondary","fontSize":"l"} -->
				<h3 class="is-style-cormorant-dotted-heading-secondary has-l-font-size">Heading Styles</h3>
				<!-- /wp:heading -->

				<!-- wp:heading {"level":3,"className":"is-style-cormorant-dashed-heading-tertiary","fontSize":"l"} -->
				<h3 class="is-style-cormorant-dashed-heading-tertiary has-l-font-size">Heading Styles</h3>
				<!-- /wp:heading -->

				<!-- wp:separator {"className":"is-style-cormorant-striped-separator-foreground"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-cormorant-striped-separator-foreground"/>
				<!-- /wp:separator -->

				<!-- wp:separator {"className":"is-style-cormorant-dotted-separator-tertiary"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-cormorant-dotted-separator-tertiary"/>
				<!-- /wp:separator -->

				<!-- wp:separator {"className":"is-style-cormorant-dashed-separator-quaternary"} -->
				<hr class="wp-block-separator has-alpha-channel-opacity is-style-cormorant-dashed-separator-quaternary"/>
				<!-- /wp:separator -->

				<!-- wp:code {"className":"is-style-cormorant-code-primary"} -->
				<pre class="wp-block-code is-style-cormorant-code-primary"><code>/*
code is poetry.
*/</code></pre>
				<!-- /wp:code -->

				<!-- wp:code {"className":"is-style-cormorant-code-secondary"} -->
				<pre class="wp-block-code is-style-cormorant-code-secondary"><code>/*
code is poetry.
*/</code></pre>
				<!-- /wp:code --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":2179,"sizeSlug":"large","linkDestination":"none","className":"is-style-cormorant-striped-background-image-primary"} -->
				<figure class="wp-block-image size-large is-style-cormorant-striped-background-image-primary"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2179"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":2179,"sizeSlug":"large","linkDestination":"none","className":"is-style-cormorant-striped-background-image-secondary"} -->
				<figure class="wp-block-image size-large is-style-cormorant-striped-background-image-secondary"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2179"/></figure>
				<!-- /wp:image -->

				<!-- wp:image {"id":2179,"sizeSlug":"large","linkDestination":"none","className":"is-style-cormorant-striped-background-image-quaternary"} -->
				<figure class="wp-block-image size-large is-style-cormorant-striped-background-image-quaternary"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'cormorant' ); ?>" class="wp-image-2179"/></figure>
				<!-- /wp:image --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
				<div class="wp-block-buttons"><!-- wp:button {"width":100,"className":"is-style-cormorant-filled-square-button-foreground"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-filled-square-button-foreground"><a class="wp-block-button__link wp-element-button">Click me!</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"className":"is-style-cormorant-filled-square-button-primary"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-filled-square-button-primary"><a class="wp-block-button__link wp-element-button">Click me!</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"className":"is-style-cormorant-outline-square-button-secondary"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-outline-square-button-secondary"><a class="wp-block-button__link wp-element-button">Click me!</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"className":"is-style-cormorant-outline-square-button-tertiary"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-outline-square-button-tertiary"><a class="wp-block-button__link wp-element-button">Click me!</a></div>
					<!-- /wp:button -->

					<!-- wp:button {"width":100,"className":"is-style-cormorant-outline-square-button-quaternary"} -->
					<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-cormorant-outline-square-button-quaternary"><a class="wp-block-button__link wp-element-button">Click me!</a></div>
					<!-- /wp:button --></div>
				<!-- /wp:buttons -->

				<!-- wp:group {"className":"is-style-cormorant-solid-shadow-group-primary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group is-style-cormorant-solid-shadow-group-primary"><!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Ligula orci condimentum duis urna porttitor sed</p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-cormorant-solid-shadow-group-tertiary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group is-style-cormorant-solid-shadow-group-tertiary"><!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Ligula orci condimentum duis urna porttitor sed</p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-cormorant-blur-shadow-group-secondary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group is-style-cormorant-blur-shadow-group-secondary"><!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Ligula orci condimentum duis urna porttitor sed</p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-cormorant-blur-shadow-group-quaternary","layout":{"type":"constrained"}} -->
				<div class="wp-block-group is-style-cormorant-blur-shadow-group-quaternary"><!-- wp:paragraph {"align":"center"} -->
					<p class="has-text-align-center">Ligula orci condimentum duis urna porttitor sed</p>
					<!-- /wp:paragraph --></div>
				<!-- /wp:group --></div>
			<!-- /wp:column --></div>
		<!-- /wp:columns --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
