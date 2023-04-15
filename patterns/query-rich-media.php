<?php
/**
 * Title: Query Rich Media
 * Slug: cormorant/query-rich-media
 * Categories: cormorant-query
 * Description: Rich media design with image and text
 * Keywords: cormorant
 * Block Types: core/query-loop
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
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

	<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
	<div class="wp-block-query"><!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:post-template {"align":"wide"} -->
			<!-- wp:post-featured-image {"isLink":true,"style":{"color":{"duotone":"unset"},"spacing":{"margin":{"bottom":"var:preset|spacing|s"}}}} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|s","top":"0"}}},"fontSize":"l"} /-->

			<!-- wp:group {"style":{"typography":{"fontSize":"12px"},"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"top"}} -->
			<div class="wp-block-group" style="font-size:12px"><!-- wp:post-date {"displayType":"modified","style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"xs"} /-->

				<!-- wp:post-terms {"term":"category","separator":"","style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-cormorant-post-terms-square"} /--></div>
			<!-- /wp:group -->
			<!-- /wp:post-template --></div>
		<!-- /wp:group -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","placeholder":"クエリが結果を返さない場合に表示するテキスト、またはブロックを追加してください。"} -->
		<p class="has-text-align-center">No posted yet.</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
	<!-- /wp:query --></div>
<!-- /wp:group -->
