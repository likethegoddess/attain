<?php
/**
 * Title: 404
 * Slug: attain/404
 * Inserter: no
 */
?>
<!-- wp:spacer {"height":"var(--wp--preset--spacing--30)"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"level":1} -->
<h1><?php echo esc_html_e( '404', 'Error code for a webpage that is not found.', 'attain' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"default"},"style":{"spacing":{"margin":{"top":"5px"}}}} -->
<div class="wp-block-group" style="margin-top:5px">
	<!-- wp:paragraph -->
	<p><?php echo esc_html_e( 'This page could not be found. Maybe try a search?', 'Message to convey that a webpage could not be found', 'attain' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:search {"label":"<?php echo esc_html_e( 'Search', 'label', 'attain' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'attain' ); ?>","showLabel":false,"width":100,"widthUnit":"%","buttonText":"<?php esc_attr_e( 'Search', 'attain' ); ?>","buttonUseIcon":true,"align":"center"} /-->
</div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"var(--wp--preset--spacing--70)"} -->
<div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
