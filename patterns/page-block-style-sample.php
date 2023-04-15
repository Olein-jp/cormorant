<?php
/**
 * Title: Demo - Block Style Sample
 * Slug: cormorant/page-block-style-sample
 * Categories: cormorant-page
 * Description: You can check all block styles in this page.
 * Keywords: cormorant
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:heading {"textAlign":"left","className":"is-style-default"} -->
<h2 class="wp-block-heading has-text-align-left is-style-default">Headings</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"backgroundColor":"wild-sand"} -->
<p class="has-wild-sand-background-color has-background">You can change stripe/dot/dash color by changing text color.</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"is-style-cormorant-striped-heading"} -->
<h3 class="wp-block-heading is-style-cormorant-striped-heading">Striped</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"textColor":"primary","className":"is-style-cormorant-striped-heading"} -->
<h4 class="wp-block-heading is-style-cormorant-striped-heading has-primary-color has-text-color">Primary color</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"textColor":"secondary","className":"is-style-cormorant-striped-heading"} -->
<h4 class="wp-block-heading is-style-cormorant-striped-heading has-secondary-color has-text-color">Secondary color</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"is-style-cormorant-dotted-heading"} -->
<h3 class="wp-block-heading is-style-cormorant-dotted-heading">Dotted</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"textColor":"tertiary","className":"is-style-cormorant-dotted-heading"} -->
<h4 class="wp-block-heading is-style-cormorant-dotted-heading has-tertiary-color has-text-color">Tertiary color</h4>
<!-- /wp:heading -->

<!-- wp:heading {"level":3,"className":"is-style-cormorant-dotted-heading"} -->
<h3 class="wp-block-heading is-style-cormorant-dotted-heading">Dashed</h3>
<!-- /wp:heading -->

<!-- wp:heading {"level":4,"textColor":"quaternary","className":"is-style-cormorant-dashed-heading"} -->
<h4 class="wp-block-heading is-style-cormorant-dashed-heading has-quaternary-color has-text-color">Quaterary color</h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left">Buttons</h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}},"color":{"gradient":"linear-gradient(167deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%)"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background:linear-gradient(167deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-filled-square-button-base"} -->
		<div class="wp-block-button is-style-cormorant-filled-square-button-base"><a class="wp-block-button__link wp-element-button">Base Filled</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-filled-square-button-contrast"} -->
		<div class="wp-block-button is-style-cormorant-filled-square-button-contrast"><a class="wp-block-button__link wp-element-button">Base Filled</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-filled-square-button-primary"} -->
		<div class="wp-block-button is-style-cormorant-filled-square-button-primary"><a class="wp-block-button__link wp-element-button">Primary Filled</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-filled-square-button-secondary"} -->
		<div class="wp-block-button is-style-cormorant-filled-square-button-secondary"><a class="wp-block-button__link wp-element-button">Secondary Filled</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-filled-square-button-tertiary"} -->
		<div class="wp-block-button is-style-cormorant-filled-square-button-tertiary"><a class="wp-block-button__link wp-element-button">Tertiary Filled</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-filled-square-button-quaternary"} -->
		<div class="wp-block-button is-style-cormorant-filled-square-button-quaternary"><a class="wp-block-button__link wp-element-button">Quaternary Filled</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|m","right":"var:preset|spacing|m","bottom":"var:preset|spacing|m","left":"var:preset|spacing|m"}}},"gradient":"contrast-to-base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-to-base-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--m);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--m);padding-left:var(--wp--preset--spacing--m)"><!-- wp:buttons -->
	<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-cormorant-outline-square-button-base"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-base"><a class="wp-block-button__link wp-element-button">Base Outline</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outline-square-button-contrast"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-contrast"><a class="wp-block-button__link wp-element-button">Base Outline</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outline-square-button-primary"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-primary"><a class="wp-block-button__link wp-element-button">Primary Outline</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outline-square-button-secondary"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-secondary"><a class="wp-block-button__link wp-element-button">Secondary Outline</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outline-square-button-tertiary"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-tertiary"><a class="wp-block-button__link wp-element-button">Tertiary Outline</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-cormorant-outline-square-button-quaternary"} -->
		<div class="wp-block-button is-style-cormorant-outline-square-button-quaternary"><a class="wp-block-button__link wp-element-button">Quaternary Outline</a></div>
		<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left">Images</h2>
<!-- /wp:heading -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Solid Shadow</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":2179,"sizeSlug":"large","linkDestination":"none","className":"is-style-cormorant-solid-shadow-image"} -->
<figure class="wp-block-image size-large is-style-cormorant-solid-shadow-image"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="" class="wp-image-2179"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Blur Shadow</h3>
<!-- /wp:heading -->

<!-- wp:image {"id":2179,"sizeSlug":"large","linkDestination":"none","className":"is-style-cormorant-blur-shadow-image"} -->
<figure class="wp-block-image size-large is-style-cormorant-blur-shadow-image"><img src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_FOKZ3FZEKE.jpg'; ?>" alt="" class="wp-image-2179"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left">Groups</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"backgroundColor":"wild-sand"} -->
<p class="has-wild-sand-background-color has-background">You can change Solid/Blur Shadow's color by changing text color.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"is-style-cormorant-solid-shadow-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-cormorant-solid-shadow-group"><!-- wp:paragraph -->
	<p>Solid Shadow</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-cormorant-blur-shadow-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-cormorant-blur-shadow-group"><!-- wp:paragraph -->
	<p>Blur Shadow</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left">Post Navigation Links</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"className":"is-style-cormorant-blur-shadow-query","layout":{"type":"default"}} -->
	<div class="wp-block-query is-style-cormorant-blur-shadow-query"><!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Square</h3>
		<!-- /wp:heading -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","className":"is-style-cormorant-block-pagination-foreground is-style-cormorant-block-pagination","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"fontSize":"xs"} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:spacer {"height":"40px"} -->
		<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:heading {"level":3} -->
		<h3 class="wp-block-heading">Circle</h3>
		<!-- /wp:heading -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","className":"is-style-cormorant-block-pagination-primary is-style-cormorant-circle-pagination","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"fontSize":"xs"} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination --></div>
	<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left">Gradients</h2>
<!-- /wp:heading -->

<!-- wp:group {"textColor":"contrast","gradient":"base-to-contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-base-to-contrast-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Foreground to Background</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"base-to-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-base-to-primary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Foreground to Primary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"base-to-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-base-to-secondary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Foreground to Secondary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"base-to-tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-base-to-tertiary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Foreground to Tertiary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"base-to-quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-base-to-quaternary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Foreground to Quaternary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"contrast-to-base","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-contrast-to-base-gradient-background has-text-color has-background"><!-- wp:paragraph {"textColor":"foreground"} -->
	<p class="has-foreground-color has-text-color">Background to Foreground</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"contrast-to-primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-contrast-to-primary-gradient-background has-text-color has-background"><!-- wp:paragraph {"textColor":"foreground"} -->
	<p class="has-foreground-color has-text-color">Background to Primary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"contrast-to-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-contrast-to-secondary-gradient-background has-text-color has-background"><!-- wp:paragraph {"textColor":"foreground"} -->
	<p class="has-foreground-color has-text-color">Background to Secondary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"contrast-to-tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-contrast-to-tertiary-gradient-background has-text-color has-background"><!-- wp:paragraph {"textColor":"foreground"} -->
	<p class="has-foreground-color has-text-color">Background to Tertiary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"contrast-to-quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-contrast-to-quaternary-gradient-background has-text-color has-background"><!-- wp:paragraph {"textColor":"foreground"} -->
	<p class="has-foreground-color has-text-color">Background to Quatenary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-base","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-base-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Primary to Foreground</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-contrast-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Primary to Background</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-secondary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Primary to Secondary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-tertiary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Primary to Tertinary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-quaternary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Primary to Quaternary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"secondary-to-base","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-secondary-to-base-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Secondary to Foreground</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"secondary-to-contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-secondary-to-contrast-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Secondary to Background</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-secondary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Secondary to Primary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"secondary-to-tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-secondary-to-tertiary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Secondary to Tertinary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"secondary-to-quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-secondary-to-quaternary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Secondary to Quaternary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"tertiary-to-base","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-tertiary-to-base-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Tertiary to Foreground</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"tertiary-to-contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-tertiary-to-contrast-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Tertiary to Background</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-tertiary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Tertiary to Primary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"tertiary-to-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-tertiary-to-secondary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Tertiary to Secondary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"tertiary-to-quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-tertiary-to-quaternary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Tertiary to Quaternary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"quaternary-to-base","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-quaternary-to-base-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Quaternary to Foreground</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"quaternary-to-contrast","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-quaternary-to-contrast-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Quaternary to Background</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"contrast","gradient":"primary-to-quaternary","layout":{"type":"default"}} -->
<div class="wp-block-group has-contrast-color has-primary-to-quaternary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Quaternary to Primary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"quaternary-to-secondary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-quaternary-to-secondary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Quaternary to Secondary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"textColor":"background","gradient":"quaternary-to-tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-background-color has-quaternary-to-tertiary-gradient-background has-text-color has-background"><!-- wp:paragraph -->
	<p>Quaternary to Tertiary</p>
	<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"left"} -->
<h2 class="wp-block-heading has-text-align-left">Duotones</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"backgroundColor":"wild-sand"} -->
<p class="has-wild-sand-background-color has-background">Duotone is set up in WordPress 6.1 with a filter consisting of CSS custom property values derived from the <code>theme.json</code>, which is the base of the theme, so that overriding the color palette from Global Style will not change it.</p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#333333","#ffffff"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Foreground to Background</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#333333","#024059"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Foreground and Primary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#333333","#F2CB05"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Foreground and Secondary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#333333","#048ABF"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Foreground and Tertiary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#333333","#F29057"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Foreground and Quaternary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Background and Foreground</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#ffffff","#024059"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Background and Primary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#ffffff","#F2CB05"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Background and Secondary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#ffffff","#048ABF"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Background and Tertiary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#ffffff","#F29057"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Background and Quaternary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#024059","#333333"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Primary and Foreground</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#024059","#ffffff"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Primary and Background</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#024059","#F2CB05"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Primary and Secondary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#024059","#048ABF"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Primary and Tertiary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#024059","#F29057"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Primary and Quaternary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F2CB05","#333333"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Secondary and Foreground</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F2CB05","#ffffff"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Secondary and Background</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F2CB05","#024059"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Secondary and Primary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F2CB05","#048ABF"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Secondary and Tertiary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F2CB05","#F29057"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Secondary and Quaternary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#048ABF","#333333"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Tertiary and Foreground</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#048ABF","#ffffff"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Tertiary and Background</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#048ABF","#024059"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Tertiary and Primary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#048ABF","#F2CB05"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Tertiary and Secondary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#048ABF","#F29057"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Tertiary and Quaternary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F29057","#333333"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Quaternary and Foreground</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F29057","#ffffff"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-2-xl-font-size">Quaternary and Background</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F29057","#024059"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Quaternary and Primary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F29057","#F2CB05"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Quaternary and Secondary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>","id":2178,"dimRatio":0,"minHeight":200,"isDark":false,"style":{"color":{"duotone":["#F29057","#048ABF"]}}} -->
<div class="wp-block-cover is-light" style="min-height:200px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2178" alt="Sample Image" src="<?php echo esc_url( get_template_directory_uri() ) . '/assets/images/StockSnap_3NQ5V9WW0G.jpg'; ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","textColor":"background","fontSize":"2-xl"} -->
		<p class="has-text-align-center has-background-color has-text-color has-2-xl-font-size">Quaternary and Tertiary</p>
		<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
