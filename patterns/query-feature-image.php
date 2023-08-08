<?php
/**
 * Title: Feature Image Query
 * Slug: cormorant/query/feature-image
 * Categories: cormorant-query
 * Description: Post index with feature image
 * Keywords: cormorant
 * Block Types: core/query-loop
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0"><!-- wp:query {"queryId":11,"query":{"perPage":"9","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|l"}},"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"tagName":"section","style":{"spacing":{"blockGap":"var:preset|spacing|xs","margin":{"bottom":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
			<section class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--l)"><!-- wp:post-featured-image {"aspectRatio":"1"} /-->

				<!-- wp:group {"tagName":"aside","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"},"fontSize":"xs"} -->
				<aside class="wp-block-group has-xs-font-size"><!-- wp:post-date /-->

					<!-- wp:post-terms {"term":"category","className":"is-style-default","fontSize":"xs"} /-->

					<!-- wp:post-terms {"term":"post_tag","className":"is-style-default"} /--></aside>
				<!-- /wp:group -->

				<!-- wp:post-title {"isLink":true,"fontSize":"l"} /--></section>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"var:preset|spacing|xl"} -->
		<div style="height:var(--wp--preset--spacing--xl)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"className":"is-style-cormorant-circle-pagination","layout":{"type":"flex","justifyContent":"center"},"fontSize":"s"} -->
		<!-- wp:query-pagination-previous {"fontSize":"xs"} /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next {"fontSize":"xs"} /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
		<p class="has-text-align-center">No posted yet.</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
	<!-- /wp:query --></div>
<!-- /wp:group -->