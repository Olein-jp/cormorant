<?php
/**
 * Title: Profile 2 Columns
 * Slug: cormorant/profile/2-col
 * Categories: cormorant-profile
 * Description: Simple layout 2 columns profile
 * Keywords: cormorant
 * Block Types: core/group, core/image, core/paragraph, core/social-icons, core/heading
 *
 * @author Koji Kuno
 * @package cormorant
 * @since 3.0.0
 */
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
	<div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"55%","style":{"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l);flex-basis:55%"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-09.jpg' ); ?>","id":3205,"dimRatio":0,"focalPoint":{"x":0.44,"y":0.13},"minHeight":600,"minHeightUnit":"px","contentPosition":"bottom center","isDark":false,"layout":{"type":"constrained"}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-center" style="min-height:600px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-3205" alt="WordPress 100%GPL Block Theme Cormorant Sample Image 09" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/cormorant-sample-09.jpg' ); ?>" style="object-position:44% 13%" data-object-fit="cover" data-object-position="44% 13%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs","padding":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs","left":"var:preset|spacing|m","right":"var:preset|spacing|m"}},"color":{"background":"#ffffff87"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
					<div class="wp-block-group has-background" style="background-color:#ffffff87;padding-top:var(--wp--preset--spacing--xs);padding-right:var(--wp--preset--spacing--m);padding-bottom:var(--wp--preset--spacing--xs);padding-left:var(--wp--preset--spacing--m)"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
						<h3 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e( 'Edward Smith', 'cormorant' ); ?></h3>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|xs","right":"var:preset|spacing|xs"}}},"backgroundColor":"base","textColor":"secondary","fontSize":"xs"} -->
						<p class="has-text-align-center has-secondary-color has-base-background-color has-text-color has-background has-xs-font-size" style="padding-top:0;padding-right:var(--wp--preset--spacing--xs);padding-bottom:0;padding-left:var(--wp--preset--spacing--xs)"><strong><?php esc_html_e( 'Chief Director', 'cormorant' ); ?></strong></p>
						<!-- /wp:paragraph -->

						<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#ffffff","iconBackgroundColor":"base","iconBackgroundColorValue":"#333333","size":"has-small-icon-size","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xs"}}},"className":"is-style-default","layout":{"type":"flex","justifyContent":"center"}} -->
						<ul class="wp-block-social-links has-small-icon-size has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

							<!-- wp:social-link {"url":"#","service":"facebook"} /-->

							<!-- wp:social-link {"url":"#","service":"instagram"} /-->

							<!-- wp:social-link {"url":"#","service":"chain"} /--></ul>
						<!-- /wp:social-links --></div>
					<!-- /wp:group --></div></div>
			<!-- /wp:cover --></div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"45%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"gradient":"linear-gradient(152deg,rgb(80,80,80) 1%,rgb(51,51,51) 100%)"}},"textColor":"contrast"} -->
		<div class="wp-block-column is-vertically-aligned-center has-contrast-color has-text-color has-background" style="background:linear-gradient(152deg,rgb(80,80,80) 1%,rgb(51,51,51) 100%);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:45%"><!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|l","bottom":"var:preset|spacing|l","left":"var:preset|spacing|l","right":"var:preset|spacing|l"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--l);padding-right:var(--wp--preset--spacing--l);padding-bottom:var(--wp--preset--spacing--l);padding-left:var(--wp--preset--spacing--l)"><!-- wp:heading -->
				<h2 class="wp-block-heading"><?php esc_html_e( 'Hi, I\'m Edward.', 'cormorant' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'I am a professional with a passion for design and creativity. My career has been built on a wealth of experience and success, but I am always looking for new challenges and growth.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'My design philosophy is to combine user experience with aesthetics. With a deep understanding of user needs and objectives, I seek designs that they find inspiring and delightful. By working with the team under my direction, I aim to ensure that design is integrated with business strategy and delivers a powerful brand experience.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'I have exceptional leadership skills and am adept at leading teams to shape creative ideas. I also place great importance on maximising individual talents through collaboration and communication. I always strive to provide a positive environment and create opportunities for team members to grow and express themselves.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'My background includes experience working on a diverse range of projects. I have worked as a design lead in a wide range of industries, from global companies to start-ups. These experiences have given me the knowledge of how to work with teams to realise their vision and deliver results.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"fontSize":"xs"} -->
				<p class="has-xs-font-size"><?php esc_html_e( 'I would be delighted to be part of your design department to help you continue to deliver great results. Please do not hesitate to contact me.', 'cormorant' ); ?></p>
				<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
		<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
<!-- /wp:group -->