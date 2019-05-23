<?php
/**
 * Displays site credit.
 *
 * @package Primer
 * @since   1.0.0
 */

?>

<div class="site-info-text">

	<?php

	$beian_info = sprintf(' [<a href="http://www.miitbeian.gov.cn/" target="_blank">浙ICP备18022130号-2</a>]');
	/**
	 * Filter the footer copyright text.
	 *
	 * @since 1.5.0
	 *
	 * @var string
	 */
	$copyright_text = (string) apply_filters( 'primer_copyright_text', get_theme_mod( 'copyright_text', sprintf(
		/* translators: 1. copyright symbol, 2. year, 3. site title */
		esc_html__( 'Copyright %1$s %2$d %3$s', 'primer' ),
		'&copy;',
		date( 'Y' ),
		get_bloginfo( 'blogname' )
	) ) );

	echo wp_kses_post( $copyright_text . $beian_info );

	/**
	 * Filter the footer author credit display.
	 *
	 * @since 1.0.0
	 *
	 * @var bool
	 */
	if ( (bool) apply_filters( 'primer_author_credit', true ) ) {

		if ( $copyright_text ) {

			echo ' &mdash; ';

		}

		$theme = wp_get_theme();

		printf(
			/* translators: 1. theme name link, 2. theme author link */
			esc_html__( '%1$s WordPress theme by %2$s', 'primer' ),
			esc_html( $theme->get( 'Name' ) ),
			sprintf(
				'<a href="%s" rel="author nofollow">%s</a>',
				esc_url( $theme->get( 'AuthorURI' ) ),
				esc_html( $theme->get( 'Author' ) )
			)
		);

	}

	?>

</div>
