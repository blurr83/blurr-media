<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php include '../var.php'; ?>
	<?php
		$title = 'contact';
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
					<h1 class="remove-bottom" style="margin-top: 20px"><?php echo $title ?> blurrMedia</h1>
					<div class="pageTitle_divider"></div>
				</div>
		
				<div class="sixteen columns" style="text-align:left; background:">
					<img src="http://www.blurr-media.com/images/me.jpg" width="80" height="78" align="left" style="text-align:right; padding-right:5px; padding-bottom:px"/>
					<p>
						Ben Lymer<br />
						1201 Berkeley Wichita, KS 67216<br />
						eMail: <a href="<?php echo $contactUrl ?>">hello@blurr-media.com</a><br />
						ph: <a href="tel:+1-316-290-9042">316-290-9042</a>
						<br />
					</p>
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