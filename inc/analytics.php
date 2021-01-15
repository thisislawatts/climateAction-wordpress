<?php
/**
 * All the analytics we're adding through the code in one place (hopefully!)
 */

add_action( 'wp_head', 'cat_google_analytics', 10 );

function cat_google_analytics() {
	?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142312056-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-142312056-1');
	</script>

	<?php
}
