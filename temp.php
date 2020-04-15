
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>





<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'test' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$test_description = get_bloginfo( 'description', 'display' );
			if ( $test_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $test_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'test' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">




	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'test' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'test' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'test' ), 'test', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->





	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->







	//wp_enqueue_script( 'test-stickyfill.min.js', get_template_directory_uri() . '/assets/libs/sticky-sidebar/stickyfill.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-sticky-sidebar.min.js', get_template_directory_uri() . '/assets/libs/sticky-sidebar/sticky-sidebar.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-sticky-sidebar.js', get_template_directory_uri() . '/assets/libs/sticky-sidebar/sticky-sidebar.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.sticky-sidebar.min.js', get_template_directory_uri() . '/assets/libs/sticky-sidebar/jquery.sticky-sidebar.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.sticky-sidebar.js.map', get_template_directory_uri() . '/assets/libs/sticky-sidebar/jquery.sticky-sidebar.js.map', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.sticky-sidebar.js', get_template_directory_uri() . '/assets/libs/sticky-sidebar/jquery.sticky-sidebar.js', array(), '20151215', true );



    //wp_enqueue_script( 'test-jquery.countTo.js', get_template_directory_uri() . '/assets/libs/count/jquery.countTo.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-simple-lightbox.min.js', get_template_directory_uri() . '/assets/libs/gallery/simple-lightbox.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery-migrate-1.4.1.min.js', get_template_directory_uri() . '/assets/libs/jquery/dist/jquery-migrate-1.4.1.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery-ui-1.10.4.custom.min.js', get_template_directory_uri() . '/assets/libs/jquery/dist/jquery-ui-1.10.4.custom.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.min.js', get_template_directory_uri() . '/assets/libs/jquery/dist/jquery.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.slim.min.js', get_template_directory_uri() . '/assets/libs/jquery/dist/jquery.slim.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-scrollax.min.js', get_template_directory_uri() . '/assets/libs/parallax/scrollax.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-picturefill.min.js', get_template_directory_uri() . '/assets/libs/picturefill/picturefill.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.mCustomScrollbar.min.js', get_template_directory_uri() . '/assets/libs/scroll/jquery.mCustomScrollbar.min.js', array(), '20151215', true );


	//wp_enqueue_script( 'test-jquery.mCustomScrollbar.js', get_template_directory_uri() . '/assets/libs/scroll/jquery.mCustomScrollbar.js', array(), '20151215', true );






	//wp_enqueue_script( 'test-common.js', get_template_directory_uri() . '/assets/js/common.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-swiper.esm.bundle.js', get_template_directory_uri() . '/assets/libs/swiper/dist/js/swiper.esm.bundle.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-swiper.esm.js', get_template_directory_uri() . '/assets/libs/swiper/dist/js/swiper.esm.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-swiper.js', get_template_directory_uri() . '/assets/libs/swiper/dist/js/swiper.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-swiper.min.js', get_template_directory_uri() . '/assets/libs/swiper/dist/js/swiper.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-swiper.min.js.map', get_template_directory_uri() . '/assets/libs/swiper/dist/js/swiper.min.js.map', array(), '20151215', true );

	//wp_enqueue_script( 'test-banner.js', get_template_directory_uri() . '/assets/libs/swiper/dist/scripts/banner.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-build-config.js', get_template_directory_uri() . '/assets/libs/swiper/dist/scripts/build-config.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-build-js.js', get_template_directory_uri() . '/assets/libs/swiper/dist/scripts/build-js.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-build-less.js', get_template_directory_uri() . '/assets/libs/swiper/dist/scripts/build-less.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-gulpfile.js', get_template_directory_uri() . '/assets/libs/swiper/dist/scripts/gulpfile.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-browser.js', get_template_directory_uri() . '/assets/libs/swiper/src/modules/browser/browser.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-device.js', get_template_directory_uri() . '/assets/libs/swiper/src/modules/device/device.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-observer.js', get_template_directory_uri() . '/assets/libs/swiper/src/modules/observer/observer.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-resize.js', get_template_directory_uri() . '/assets/libs/swiper/src/modules/resize/resize.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-support.js', get_template_directory_uri() . '/assets/libs/swiper/src/modules/support/support.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-browser.js', get_template_directory_uri() . '/assets/libs/swiper/src/utils/browser.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-class.js', get_template_directory_uri() . '/assets/libs/swiper/src/utils/class.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-device.js', get_template_directory_uri() . '/assets/libs/swiper/src/utils/device.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-dom.js', get_template_directory_uri() . '/assets/libs/swiper/src/utils/dom.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-support.js', get_template_directory_uri() . '/assets/libs/swiper/src/utils/support.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-utils.js', get_template_directory_uri() . '/assets/libs/swiper/src/utils/utils.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-swiper.js', get_template_directory_uri() . '/assets/libs/swiper/src/swiper.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-eslintrc.js', get_template_directory_uri() . '/assets/libs/swiper/src/eslintrc.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-bower.json', get_template_directory_uri() . '/assets/libs/swiper/src/bower.json', array(), '20151215', true );

	//wp_enqueue_script( 'test-gulpfile.js', get_template_directory_uri() . '/assets/libs/swiper/src/gulpfile.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-package.js', get_template_directory_uri() . '/assets/libs/swiper/src/package.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-package.json', get_template_directory_uri() . '/assets/libs/swiper/src/package.json', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.basictable.min.js', get_template_directory_uri() . '/assets/libs/table/jquery.basictable.min.js', array(), '20151215', true );

	//wp_enqueue_script( 'test-jquery.basictable.min.js', get_template_directory_uri() . '/assets/libs/table/jquery.basictable.min.js', array(), '20151215', true );



wp_enqueue_style( 'test-alert.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_alert.scss' );
	wp_enqueue_style( 'test-background-variant', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_background-variant.scss' );
	wp_enqueue_style( 'test-badge.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_badge.scss' );
	wp_enqueue_style( 'test-border-radius.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_border-radius.scss' );
	wp_enqueue_style( 'test-box-shadow.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_box-shadow.scss' );
	wp_enqueue_style( 'test-breakpoints.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_breakpoints.scss' );
	wp_enqueue_style( 'test-buttons.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_buttons.scss' );
	wp_enqueue_style( 'test-caret.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_caret.scss' );
	wp_enqueue_style( 'test-clearfix.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_clearfix.scss' );
	wp_enqueue_style( 'test-float.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_float.scss' );
	wp_enqueue_style( 'test-forms.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_forms.scss' );
	wp_enqueue_style( 'test-gradients.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_gradients.scss' );
	wp_enqueue_style( 'test-grid-framework.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_grid-framework.scss' );
	wp_enqueue_style( 'test-grid.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_grid.scss' );
	wp_enqueue_style( 'test-hover.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_hover.scss' );
	wp_enqueue_style( 'test-image.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_image.scss' );
	wp_enqueue_style( 'test-list-group.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_list-group.scss' );
	wp_enqueue_style( 'test-lists.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_lists.scss' );
	wp_enqueue_style( 'test-nav-divider.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_nav-divider.scss' );
	wp_enqueue_style( 'test-navbar-align.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_navbar-align.scss' );
	wp_enqueue_style( 'test-pagination.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_pagination.scss' );
	wp_enqueue_style( 'test-reset-text.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_reset-text.scss' );
	wp_enqueue_style( 'test-resize.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_resize.scss' );
	wp_enqueue_style( 'test-screen-reader.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_screen-reader.scss' );
	wp_enqueue_style( 'test-size.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_size.scss' );
	wp_enqueue_style( 'test-table-row.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_table-row.scss' );
	wp_enqueue_style( 'test-text-emphasis.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_text-emphasis.scss' );
	wp_enqueue_style( 'test-text-hide.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_text-hide.scss' );
	wp_enqueue_style( 'test-text-truncate.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_text-truncate.scss' );
	wp_enqueue_style( 'test-transition.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_transition.scss' );
	wp_enqueue_style( 'test-visibility.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/mixins/_visibility.scss' );

	wp_enqueue_style( 'test-align.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_align.scss' );
	wp_enqueue_style( 'test-background.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_background.scss' );
	wp_enqueue_style( 'test-borders.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_borders.scss' );
	wp_enqueue_style( 'test-clearfix.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_clearfix.scss' );
	wp_enqueue_style( 'test-display.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_display.scss' );
	wp_enqueue_style( 'test-embed.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_embed.scss' );
	wp_enqueue_style( 'test-flex.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_flex.scss' );
	wp_enqueue_style( 'test-float.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_float.scss' );
	wp_enqueue_style( 'test-position.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_position.scss' );
	wp_enqueue_style( 'test-screenreaders.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_screenreaders.scss' );
	wp_enqueue_style( 'test-sizing.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_sizing.scss' );
	wp_enqueue_style( 'test-spacing.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_spacing.scss' );
	wp_enqueue_style( 'test-text.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_text.scss' );
	wp_enqueue_style( 'test-visibility.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/utilities/_visibility.scss' );

	wp_enqueue_style( 'test-alert.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_alert.scss' );
	wp_enqueue_style( 'test-badge.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_badge.scss' );
	wp_enqueue_style( 'test-breadcrumb.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_breadcrumb.scss' );
	wp_enqueue_style( 'test-button-group.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_button-group.scss' );
	wp_enqueue_style( 'test-buttons.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_buttons.scss' );
	wp_enqueue_style( 'test-card.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_card.scss' );
	wp_enqueue_style( 'test-carousel.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_carousel.scss' );
	wp_enqueue_style( 'test-close.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_close.scss' );
	wp_enqueue_style( 'test-code.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_code.scss' );
	wp_enqueue_style( 'test-custom-forms.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_custom-forms.scss' );
	wp_enqueue_style( 'test-dropdown.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_dropdown.scss' );
	wp_enqueue_style( 'test-forms.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_forms.scss' );
	wp_enqueue_style( 'test-functions.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_functions.scss' );
	wp_enqueue_style( 'test-grid.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_grid.scss' );
	wp_enqueue_style( 'test-images.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_images.scss' );
	wp_enqueue_style( 'test-input-group.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_input-group.scss' );
	wp_enqueue_style( 'test-jumbotron.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_jumbotron.scss' );
	wp_enqueue_style( 'test-list-group.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_list-group.scss' );
	wp_enqueue_style( 'test-media.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_media.scss' );
	wp_enqueue_style( 'test-mixins.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_mixins.scss' );
	wp_enqueue_style( 'test-modal.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_modal.scss' );
	wp_enqueue_style( 'test-nav.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_nav.scss' );
	wp_enqueue_style( 'test-navbar.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_navbar.scss' );
	wp_enqueue_style( 'test-pagination.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_pagination.scss' );
	wp_enqueue_style( 'test-popover.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_popover.scss' );
	wp_enqueue_style( 'test-print.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_print.scss' );
	wp_enqueue_style( 'test-progress.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_progress.scss' );
	wp_enqueue_style( 'test-reboot.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_reboot.scss' );
	wp_enqueue_style( 'test-root.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_root.scss' );
	wp_enqueue_style( 'test-tables.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_tables.scss' );
	wp_enqueue_style( 'test-tooltip.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_tooltip.scss' );
	wp_enqueue_style( 'test-transitions.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_transitions.scss' );
	wp_enqueue_style( 'test-type.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_type.scss' );
	wp_enqueue_style( 'test-utilities.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_utilities.scss' );
	wp_enqueue_style( 'test-variables.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_variables.scss' );
	wp_enqueue_style( 'test-bootstrap-grid.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_bootstrap-grid.scss' );
	wp_enqueue_style( 'test-bootstrap-reboot.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_bootstrap-reboot.scss' );
	wp_enqueue_style( 'test-bootstrap.scss', get_stylesheet_uri() . '/assets/libs/bootstrap/scss/_bootstrap.scss' );
	wp_enqueue_style( 'test-simplelightbox.min.css', get_stylesheet_uri() . '/assets/libs/gallery/simplelightbox.min.css' );
	wp_enqueue_style( 'test-jquery.mCustomScrollbar.min.css', get_stylesheet_uri() . '/assets/libs/scroll/jquery.mCustomScrollbar.min.css' );

	wp_enqueue_style( 'test-swiper.css', get_stylesheet_uri() . '/assets/libs/swiper/dist/css/swiper.css' );
	wp_enqueue_style( 'test-swiper.min.css', get_stylesheet_uri() . '/assets/libs/swiper/dist/css/swiper.min.css' );

	wp_enqueue_style( 'test-a11y.less', get_stylesheet_uri() . '/assets/libs/swiper/src/components/a11y.less' );
	wp_enqueue_style( 'test-a11y.scss', get_stylesheet_uri() . '/assets/libs/swiper/src/components/a11y.scss' );
	wp_enqueue_style( 'test-mixins.less', get_stylesheet_uri() . '/assets/libs/swiper/src/less/mixins.less' );
	wp_enqueue_style( 'test-resize.less', get_stylesheet_uri() . '/assets/libs/swiper/src/modules/resize/resize.less' );
	wp_enqueue_style( 'test-functions.scss', get_stylesheet_uri() . '/assets/libs/swiper/src/scss/functions.scss' );

	wp_enqueue_style( 'test-tooltipster-sideTip-borderless.min.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster/sideTip/tooltipster-sideTip-borderless.min.css' );
	wp_enqueue_style( 'test-tooltipster-sideTip-light.min.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster/sideTip/tooltipster-sideTip-light.min.css' );
	wp_enqueue_style( 'test-tooltipster-sideTip-punk.min.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster/sideTip/tooltipster-sideTip-punk.min.css' );

	wp_enqueue_style( 'test-tooltipster-sideTip-shadow.min.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster/sideTip/tooltipster-sideTip-shadow.min.css' );
	

	wp_enqueue_style( 'test-tooltipster.bundle.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster.bundle.css' );

	wp_enqueue_style( 'test-tooltipster.bundle.min.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster.bundle.min.css' );

	wp_enqueue_style( 'test-tooltipster.main.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster.main.css' );

	wp_enqueue_style( 'test-tooltipster.main.min.css', get_stylesheet_uri() . '/assets/libs/tooltip/dist/css/plugins/tooltipster.main.min.css' );

	wp_enqueue_style( 'test-media.sass', get_stylesheet_uri() . '/assets/sass/_media.sass' );

	wp_enqueue_style( 'test-main.sass', get_stylesheet_uri() . '/assets/sass/main.sass' );
	