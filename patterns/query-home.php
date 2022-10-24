<?php
/**
 * Title: Query Default on home
 * Slug: cormorant/query-home
 * Categories: cormorant-query
 * Description: One column
 * Keywords: cormorant
 * Block Types: core/query core/post-title core/post-featured-image core/query-pagination
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 1.0.0
 */
?>
<!-- wp:query {"queryId":11,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"tagName":"section","displayLayout":{"type":"flex","columns":2},"align":"full","className":"is-style-cormorant-solid-line-query-foreground","layout":{"type":"default"}} -->
<section class="wp-block-query alignfull is-style-cormorant-solid-line-query-foreground"><!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group"><!-- wp:post-template -->
		<!-- wp:group {"tagName":"article","layout":{"type":"constrained"}} -->
		<article class="wp-block-group"><!-- wp:post-featured-image {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /-->

			<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|s"}}},"fontSize":"2-xl"} /-->

			<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"var:preset|spacing|s","right":"0","bottom":"0","left":"0"}}},"fontSize":"s"} /--></article>
		<!-- /wp:group -->
		<!-- /wp:post-template --></div>
	<!-- /wp:group -->

	<!-- wp:query-pagination {"className":"is-style-cormorant-foreground-block-pagination is-style-cormorant-block-pagination-foreground","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"tiny"} /-->

	<!-- wp:query-pagination-numbers /-->

	<!-- wp:query-pagination-next {"fontSize":"tiny"} /-->
	<!-- /wp:query-pagination --></section>
<!-- /wp:query -->
