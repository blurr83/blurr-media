<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php $pageType = 'index' ?>
	<?php 
		include 'layout/meta.php'; 
		include 'var.php';
		include 'layout/includes.php'; 
	?>
</head>
<body>
	<div id="wrap">
		<div id="main">
			<div class="navMainControl">
				<div class="container">
					<?php include("layout/nav.php"); ?>
				</div>
			</div>
			
			<div class="container pageTitle">
				<div class="sixteen columns">
					<h1 class="remove-bottom" style="margin-top: 20px">blurrMEDIA</h1>
					<h5>the personal portfolio of ben lymer</h5>
					<div class="pageTitle_divider"></div>
				</div>
				<?php /*	
				<div class="sixteen columns">
					<div class="flexslider" style="margin-bottom:12px">
						<ul class="slides">
							<li>
								<img src="http://placehold.it/940x200&text=Slide1" style="max-width:100%; width:100%; display:inline-block" />
								<p class="flex-caption" style="padding:0; margin:0; height:13px">Captions and cupcakes. Winning combination.</p>
							</li>
							<li>
								<img src="http://placehold.it/940x200&text=Slide2" style="max-width:100%; width:100%; display:inline-block" />
							</li>
							<li>
								<img src="http://placehold.it/940x200&text=Slide3" style="max-width:100%; width:100%; display:inline-block" />
							</li>
						</ul>
					</div>		
				</div>
				*/ ?>
				<div class="eight columns" style="padding-right:0; margin-right:0; ">
					<h3>a few things about ben lymer:</h3>
					<p>
						<?php echo $aboutMeText ?>
					</p>
		
					<h3>quick links:</h3>
					<p>
						<a href="<?php echo $url ?>/resume" title="View Resume">Resume</a> | 
						<a href="http://www.linkedin.com/in/benlymer" title="LinkeIN profile" target="_blank">LinkedIn</a> | 
						<?php /*<a href="" title="doYouBuzz Resume">doYouBuzz Resume</a> | 
						<a href="" title="Vimeo Account">Vimeo Account</a> | 
						*/ ?>
						<a href="https://plus.google.com/101430098950576088983/about"title="google Profile" target="_blank">google Profile</a> |
						<a href="http://www.youtube.com/user/lymerb" title="YouTube Account" target="_blank" title="YouTube Videos">YouTube</a>						
					</p>				
					
				</div>
				<div class="eight columns" style="border-left:1px solid #C4C7CF;padding-left:15px; margin-right:0;">
					<h3>current employment:</h3>
					<?php echo $currentJob ?>
				</div>
			</div>
		</div>
	</div>
	
	<div id="footer">
		<div class="footContainer">
			<div class="container">
				<?php include 'layout/footer.php'; ?>
			</div>
		</div>
	</div>
</body>
</html>