<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php $pageType = 'port' ?>
	<?php include '../var.php'; ?>
	<?php
		$title = 'web &amp; css';
		include('../layout/meta.php');
	?>
	<?php include '../layout/includes.php'; ?>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#single_1").fancybox({
				helpers: {
					title : {
						type : 'float'
					}
				}
			});
		});			
	</script>
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
					<h1 class="remove-bottom" style="margin-top: 20px; float:left;"><?php echo $title ?> @ blurrMedia</h1>
					<h6 id="hideME2" style="font-size:11px; position:relative; top:34px; left:10px; line-height:15px">Need a website created? Have an existing site you would like to make changes to?<br />Feel free to <a href="<?php echo $contactUrl ?>">contact me</a> for questions (or even a quote).</h6>
					<div class="clear"></div>
					<p id="showME2" style="font-size:11px">Need a website created? Have an existing site you would like to make changes to? Feel free to <a href="<?php echo $contactUrl ?>">contact me</a> for questions (or even a quote).</p>
					<div class="pageTitle_divider"></div>
				</div>
				
				<div class="ten columns right_divider">
					<h5>[whats currently going on]</h5>
					
					<p style="margin-top:10px"><strong>iFurn.com</strong><br />
						&bull; Currently in the process of a 3+ year overhaul of iFurn.com (and its niche sites)
					</p>					
					<img src="<?php echo $portImagesUrl ?>web/ifurn.png" alt="" style="margin:4px 0 10px; width:100%; border:1px solid #ddd" /><br />
					<p>
						iFurn is a Wichita based eCommerce company (one of several under my current employer, Norris E-Commerce Management, Inc.) that has had a web presence since 1997. I came on board in &prime;07 and in late 2009 started the long process of taking the site in a more modern direction. This process involved an almost complete code overhaul. The site is now controlled by a scalable framework (disabled for now), as well as more controls for pesky IE instances.
						<br /><br />
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iFurn_2007.jpg" title="iFurn.com, circa 2007" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iFurn_2007_m.jpg" alt="iFurn.com" width="98" height="150" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iFurn_2009.jpg" title="iFurn.com, circa 2009" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iFurn_2009_m.jpg" alt="iFurn.com" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iFurn_2012.jpg" title="iFurn.com, circa 2012" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iFurn_2012_m.jpg" alt="iFurn.com" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iFurn_cat_2007.jpg" title="iFurn.com Category Page, circa 2007" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iFurn_cat_2007_m.jpg" alt="iFurn.com Category Page" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iFurn_cat_2012.jpg" title="iFurn.com Category Page, circa 2012" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iFurn_cat_2012_m.jpg" alt="iFurn.com Category Page" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iFurn_cat_prod_2007.jpg" title="iFurn.com Category Product Page, circa 2007" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iFurn_cat_prod_2007_m.jpg" alt="iFurn.com Category Product Page" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iF_cat_2012.jpg" title="iFurn.com Category Product Page, circa 2012" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iF_cat_2012_m.jpg" alt="iFurn.com Category Product Page" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iF_prod_2007.jpg" title="iFurn.com Product Page, circa 2007" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iF_prod_2007_m.jpg" alt="iFurn.com Product Page" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
						<a class="fancybox" rel="gallery1" href="<?php echo $portImagesUrl ?>web/iF_prod_2012.jpg" title="iFurn.com Product Page, circa 2012" style="text-decoration:none;">
							<img src="<?php echo $portImagesUrl ?>web/iF_prod_2012_m.jpg" alt="iFurn.com Product Page" width="98" height="150px" style="border:1px solid #ddd;" border="0" />
						</a>
					</p>
					
					<hr />
					
					<p style="margin-top:10px"><strong>iFurn.com Newsletters (Desktop &amp; Mobile)</strong><br />
						&bull; Design eMail Newsletter Campaigns<br />
						&bull; Manage eMail Newsletter Campaigns<br />
						<img src="<?php echo $portImagesUrl ?>web/newsletter.png" alt="" style="margin:4px 0 10px; width:100%; border:1px solid #ddd" /><br />
						Since 2007 iFurn.com has reached out to its customers via eMail marketing. As of Fall 2012, iFurn decided to take a new approach and started serving a responsive eMail newsletter. This allowed our customers the chance to read and keep up with deals from their mobile device.
					</p>	
					<div id="showME" class="Sectiondivider2"></div>
				</div>
				
				<div class="five columns" style="margin-bottom:10px">
					<h5>[other examples]</h5>
				</div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/barralBright.jpg" title="Barrel Bright - teaser site (html &amp; CSS) <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/barralBright.jpg" alt="" style="width:100%" />
					</a>
				</div>			

				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/tads.jpg" title="Tads Locker Room - teaser site (html &amp; CSS) <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/tads.jpg" alt="" style="width:100%" />
					</a>
				</div>			
				
				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/proLawn.jpg" title="ProLawn - teaser site (html &amp; CSS) <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/proLawn.jpg" alt="" style="width:100%" />
					</a>
				</div>			

				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/acrossTimePage.jpg" title="Across Time &amp; Page - teaser site (html &amp; CSS) <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/acrossTimePage.jpg" alt="" style="width:100%" />
					</a>
				</div>			

				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/beyondIssue.jpg" title="Beyond Issue - eMail Newsletter Template (html &amp; CSS) <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/beyondIssue.jpg" alt="" style="width:100%" />
					</a>
				</div>			

				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/jtLiquor.jpg" title="JT's Liquor (Wordpress Customization & Integration) <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/jtLiquor.jpg" alt="" style="width:100%" />
					</a>
				</div>			

				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/energyGuard.jpg" title="Energy Guard (html &amp; CSS) CSS <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/energyGuard.jpg" alt="" style="width:100%" />
					</a>
				</div>			

				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/smils_lg.jpg" title="Smiles Dentistry (html &amp; CSS) CSS <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/smils_lg.jpg" alt="" style="width:100%" />
					</a>
				</div>			

				<div id="showME" class="Sectiondivider2"></div>
				
				<div class="three columns" style="padding-lefT:0; margin-left:0; margin-bottom:10px;">
					<a class="fancybox port_image" rel="gallery2" href="<?php echo $portImagesUrl ?>web/wichitINpersonBlog.jpg" title="Wichita In Person blog (Wordpress Customization to Match Web Site) CSS <?php echo $designFinePrint ?>">
						<img src="<?php echo $portImagesUrl ?>web/wichitINpersonBlog.jpg" alt="" style="width:100%" />
					</a>
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