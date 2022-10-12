<?php
/**
 * Title: Two Columns
 * Slug: cormorant/query-2-col
 * Categories: cormorant-query
 * Description: Two columns
 * Keywords: cormorant
 * Block Types:
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":1,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"displayLayout":{"type":"flex","columns":2},"layout":{"type":"default"}} -->
	<div class="wp-block-query"><!-- wp:group {"tagName":"header","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","right":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l"},"blockGap":"var:preset|spacing|s"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
		<header class="wp-block-group" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)"><!-- wp:query-title {"type":"archive","textAlign":"center","fontSize":"4-xl"} /-->

			<!-- wp:term-description {"textAlign":"center","fontSize":"s"} /--></header>
		<!-- /wp:group -->

		<!-- wp:post-template -->
		<!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
		<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"width":"100%","style":{"color":{"duotone":"unset"}}} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"10px"}}},"fontSize":"3-xl"} /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group"><!-- wp:post-terms {"term":"category","separator":"  ","fontSize":"xs"} /-->

				<!-- wp:post-date {"displayType":"modified","fontSize":"xs"} /--></div>
			<!-- /wp:group --></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

		<!-- wp:spacer {"height":"5rem"} -->
		<div style="height:5rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","className":"is-style-cormorant-block-pagination-foreground","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"fontSize":"xs"} -->
		<!-- wp:query-pagination-previous /-->

		<!-- wp:query-pagination-numbers /-->

		<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->

		<!-- wp:spacer {"height":"5rem"} -->
		<div style="height:5rem" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer --></div>
	<!-- /wp:query --></div>
<!-- /wp:group -->
