<?php
/**
 *
 * The default template for displaying content
 * @since 1.0
 * @version 1.2.0
 *
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<?php webuild_post_thumbnail(); ?>
		<div class="col-md-12">
			<?php webuild_full_top_meta( $post ); ?>
		</div>
		<div class="col-md-12">
			<div class="border">
				<?php
				if ( ! is_single() ) : ?>
					<div class="post-excerpt entry-summary"><?php global $apro_options; echo sin_excerpt($apro_options['excerpt-length']); ?></div><!-- /entry-summary -->
				<?php else : ?>
					<div
						class="post-excerpt entry-content"><?php the_content( esc_html__( 'Read More', 'webuild' ) ); ?></div><!-- /entry-content -->
					<?php webuild_post_tags(); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php do_action( 'webuild_post_format_content_after', $post ); ?>
</article>
<!-- /post-standard -->