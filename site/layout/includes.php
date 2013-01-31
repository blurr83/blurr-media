	<!--css-->
	<link rel="stylesheet" href="<?php echo $url ?>/stylesheets/base.css">
	<link rel="stylesheet" href="<?php echo $url ?>/stylesheets/skeleton.css">
	<link rel="stylesheet" href="<?php echo $url ?>/stylesheets/layout.css">
	<?php if ($pageType == 'index'): ?><link rel="stylesheet" href="<?php echo $url ?>/stylesheets/flexslider.css" type="text/css"><?php endif ?>			
	<?php if ($pageType == 'port'): ?><link rel="stylesheet" href="<?php echo $url ?>/stylesheets/jquery.fancybox.css" type="text/css" media="screen" /><?php endif ?>

	<!--js-->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/js/tinynav.min.js" type="text/javascript"></script>
	<?php if ($pageType == 'index'): ?><script src="<?php echo $url ?>/js/jquery.flexslider.js" type="text/javascript"></script><?php endif ?>			
	<?php if ($pageType == 'port'): ?><script src="<?php echo $url ?>/js/jquery.fancybox.pack.js" type="text/javascript"></script><?php endif ?>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="<?php echo $url ?>/images/favicon1.ico">
	<link rel="apple-touch-icon" href="<?php echo $url ?>/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $url ?>/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $url ?>/images/apple-touch-icon-114x114.png">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://plus.google.com/115959377458130913091" rel="publisher" />
	<meta name="google-site-verification" content="VI5USWNvLiv_gef9cQlTEARJuO-FZK-UXlUzl7Dc6JY" />
	<script type="text/javascript">
	  $(function () {
	    $("#nav").tinyNav({
		    active: 'selected', // String: Set the "active" class
		    header: 'Navigation' // String: Specify text for "header" and show header instead of the active item
		});
	  });
	</script>

	<?php if ($pageType == 'port'): ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
	<?php endif ?>


	<!--[if !IE 7]>
	<style type="text/css">
		#wrap {display:table;height:100%}
	</style>
	<![endif]-->