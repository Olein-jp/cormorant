<?php
/**
 * Title: Query Eyecatch Tiles
 * Slug: cormorant/query/eyecatch-tiles
 * Categories: cormorant-query
 * Description: text on large eyecatch image
 * Keywords: cormorant
 * Block Types: core/query-loop
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:query {"queryId":28,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-query alignfull"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"className":"is-style-cormorant-post-template-big-image is-style-cormorant-post-template-eyecatch-tiles","layout":{"type":"grid","columnCount":4}} -->
		<!-- wp:cover {"useFeaturedImage":true,"dimRatio":0,"minHeight":30,"minHeightUnit":"vh","isDark":false,"style":{"color":{"duotone":"unset"},"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|xs"}},"textColor":"contrast","layout":{"type":"constrained"}} -->
		<div class="wp-block-cover is-light has-contrast-color has-text-color" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l);min-height:30vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:post-date {"fontSize":"xs"} /-->

					<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|wild-sand"}}}}},"fontSize":"l"} /--></div>
				<!-- /wp:group --></div></div>
		<!-- /wp:cover -->
		<!-- /wp:post-template -->

		<!-- wp:spacer {"height":"50px"} -->
		<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"className":"is-style-cormorant-circle-pagination","layout":{"type":"flex","justifyContent":"center"},"fontSize":"xs"} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center","placeholder":"クエリーが結果を返さない場合に表示するテキスト、またはブロックを追加してください。"} -->
		<p class="has-text-align-center">No posted yet...</p>
		<!-- /wp:paragraph -->
		<!-- /wp:query-no-results --></div>
	<!-- /wp:query --></div>
<!-- /wp:group -->