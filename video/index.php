<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php $pageType = 'port' ?>
	<?php include '../var.php'; ?>
	<?php
		$title = 'videos';
		include('../layout/meta.php');
	?>
	<?php include '../layout/includes.php'; ?>
</head>
<body>
	<div id="wrap">
		<div id="main">
			<div class="navMainControl">
				<div class="container">
					<?php include("../layout/nav.php"); ?>
				</div>
			</div>
			
			<div class="container pageTitle">
				<div class="sixteen columns">
					<h1 class="remove-bottom" style="margin-top: 20px"><?php echo $title ?> @ blurrMedia</h1>
					<div class="pageTitle_divider"></div>
				</div>
				
				<div class="sixteen columns">
				</div>

				<div class="eight columns protItems">
					<iframe width="100%" height="318" src="http://www.youtube.com/embed/-vuA2doZb8U?rel=0" frameborder="0" allowfullscreen></iframe> <!--450-->
					<p><a href="http://www.youtube.com/watch?v=-vuA2doZb8U" target="_blank" title="2007 Demo Reel">2007 Demo Reel</a></p>
				</div>
				<div class="eight columns protItems">
					<iframe width="100%" height="318" src="http://www.youtube.com/embed/qLdS9iM0QM8?rel=0" frameborder="0" allowfullscreen></iframe>
					<p><a href="http://www.youtube.com/watch?v=qLdS9iM0QM8?rel=0" target="_blank" title="BTK Car Tracking">BTK Car Tracking</a></p>
				</div>
				<div class="eight columns protItems" style="margin-top:10px">
					<iframe width="100%" height="318" src="http://www.youtube.com/embed/wtNf25M8oEA?rel=0" frameborder="0" allowfullscreen></iframe>
					<p><a href="http://www.youtube.com/watch?v=wtNf25M8oEA?rel=0" target="_blank" title="BTK Subtitle Confession">BTK Subtitle Confession</a></p>
				</div>		
			</div>
		</div>
	</div>

	<div id="footer">
		<div class="footContainer">
			<div class="container">
				<?php include '../layout/footer.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>