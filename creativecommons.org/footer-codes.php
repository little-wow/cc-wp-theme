	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    var j = $.noConflict();
    </script>

	<!-- scripts concatenated and minified via build script -->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/script.js"></script>
	<!-- end scripts -->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
			 chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<?php include 'google-analytics.php'; ?>
