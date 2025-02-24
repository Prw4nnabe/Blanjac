<?php

/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (! defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>

<head>
	<?php astra_head_top(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-KFR3S9WF');
	</script>
	<!-- End Google Tag Manager -->
	<?php
	if (apply_filters('astra_header_profile_gmpg_link', true)) {
	?>
		<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php
	}
	?>
	<?php wp_head(); ?>
	<?php astra_head_bottom(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
	<?php astra_body_top(); ?>
	<?php wp_body_open(); ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KFR3S9WF"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<a
		class="skip-link screen-reader-text"
		href="#content"
		title="<?php echo esc_attr(astra_default_strings('string-header-skip-link', false)); ?>">
		<?php echo esc_html(astra_default_strings('string-header-skip-link', false)); ?>
	</a>

	<div
		<?php
		echo wp_kses_post(
			astra_attr(
				'site',
				array(
					'id'    => 'page',
					'class' => 'hfeed site',
				)
			)
		);
		?>>
		<?php
		astra_header_before();

		astra_header();

		astra_header_after();

		astra_content_before();
		?>
		<div id="content" class="site-content">