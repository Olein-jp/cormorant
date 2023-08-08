<?php
/**
 * Title: Big Header FAQ
 * Slug: cormorant/faq/big-header
 * Categories: cormorant-faq
 * Description: FAQ has big header
 * Keywords: cormorant
 * Block Types: core/group, core/paragraph, core/heading, core/columns
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|3-xl","bottom":"var:preset|spacing|3-xl","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}}},"layout":{"type":"constrained","wideSize":"","contentSize":""}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--3-xl);padding-right:var(--wp--preset--spacing--xs);padding-bottom:var(--wp--preset--spacing--3-xl);padding-left:var(--wp--preset--spacing--xs)"><!-- wp:heading {"fontSize":"4-xl"} -->
		<h2 class="wp-block-heading has-4-xl-font-size"><?php esc_html_e( 'FAQs', 'cormorant' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php esc_html_e( 'The following is a list of questions and answers that are frequently asked by actual customers.<br>If you have any further questions, please contact us at any time.', 'cormorant' ); ?></p>
		<!-- /wp:paragraph --></div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|2-xl","bottom":"var:preset|spacing|2-xl"},"blockGap":"0"}},"backgroundColor":"wild-sand","layout":{"type":"constrained","wideSize":""}} -->
	<div class="wp-block-group has-wild-sand-background-color has-background" style="padding-top:var(--wp--preset--spacing--2-xl);padding-bottom:var(--wp--preset--spacing--2-xl)"><!-- wp:details {"summary":"<?php esc_html_e( 'How can I make a purchase?', 'cormorant' ); ?>","style":{"border":{"top":{"width":"2px"},"bottom":{"width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}}},"fontSize":"m"} -->
		<details class="wp-block-details has-m-font-size" style="border-top-width:2px;border-bottom-width:2px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'How can I make a purchase?', 'cormorant' ); ?></summary><!-- wp:paragraph -->
			<p><?php esc_html_e( 'Our products can be easily purchased on our website. Simply visit the product page and add the product to your cart. Then proceed to checkout and enter your payment details. Once your order is confirmed, you will receive an order confirmation and tracking number via email.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_html_e( 'Can I return or exchange the goods?', 'cormorant' ); ?>","style":{"border":{"bottom":{"width":"2px"},"right":{},"left":{}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}}},"fontSize":"m"} -->
		<details class="wp-block-details has-m-font-size" style="border-bottom-width:2px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'Can I return or exchange the goods?', 'cormorant' ); ?></summary><!-- wp:paragraph {"placeholder":"「/」を入力して非表示ブロックを追加する"} -->
			<p><?php esc_html_e( 'Yes, we accept returns and exchanges of unused and unopened products within 14 days of receipt. Please refer to our returns policy for detailed procedures.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_html_e( 'How can I get support?', 'cormorant' ); ?>","style":{"border":{"bottom":{"width":"2px"},"right":{},"left":{}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}}},"fontSize":"m"} -->
		<details class="wp-block-details has-m-font-size" style="border-bottom-width:2px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'How can I get support?', 'cormorant' ); ?></summary><!-- wp:paragraph {"placeholder":"「/」を入力して非表示ブロックを追加する"} -->
			<p><?php esc_html_e( 'You can contact us by phone or email with any support queries or issues. You can also find frequently asked questions and answers on our website. Please check the FAQs and feel free to contact us if you cannot find a solution.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_html_e( 'How long does it take for delivery?', 'cormorant' ); ?>","style":{"border":{"bottom":{"width":"2px"},"right":{},"left":{}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}}},"fontSize":"m"} -->
		<details class="wp-block-details has-m-font-size" style="border-bottom-width:2px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'How long does it take for delivery?', 'cormorant' ); ?></summary><!-- wp:paragraph {"placeholder":"「/」を入力して非表示ブロックを追加する"} -->
			<p><?php esc_html_e( 'Normally, orders are dispatched within 2-5 working days after confirmation of the order. This may vary depending on the delivery area and product availability, but we will provide you with a tracking number so that you can track the status of your delivery.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></details>
		<!-- /wp:details -->

		<!-- wp:details {"summary":"<?php esc_html_e( 'What payment methods are available?', 'cormorant' ); ?>","style":{"border":{"bottom":{"width":"2px"},"right":{},"left":{}},"spacing":{"padding":{"top":"var:preset|spacing|s","bottom":"var:preset|spacing|s","left":"var:preset|spacing|s","right":"var:preset|spacing|s"}}},"fontSize":"m"} -->
		<details class="wp-block-details has-m-font-size" style="border-bottom-width:2px;padding-top:var(--wp--preset--spacing--s);padding-right:var(--wp--preset--spacing--s);padding-bottom:var(--wp--preset--spacing--s);padding-left:var(--wp--preset--spacing--s)"><summary><?php esc_html_e( 'What payment methods are available?', 'cormorant' ); ?></summary><!-- wp:paragraph {"placeholder":"「/」を入力して非表示ブロックを追加する"} -->
			<p><?php esc_html_e( 'Several payment methods are available, including credit card, debit card and PayPal. You can select your preferred payment method on the online checkout page. Security measures are in place to guarantee secure payments.', 'cormorant' ); ?></p>
			<!-- /wp:paragraph --></details>
		<!-- /wp:details --></div>
	<!-- /wp:group --></div>
<!-- /wp:group -->
