<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
	<?php include '../var.php'; ?>
	<?php
		$title = 'resume';
		include('../layout/meta.php');
	?>
	<?php include '../layout/includes.php'; ?>
	
	<style type="text/css">
    .container                                  { position: relative; width: 960px; margin: 0 auto; padding: 0; }
    .container .column,
    .container .columns                         { float: left; display: inline; margin-left: 10px; margin-right: 10px; }
    .row                                        { margin-bottom: 20px; }

    /* Nested Column Classes */
    .column.alpha, .columns.alpha               { margin-left: 0; }
    .column.omega, .columns.omega               { margin-right: 0; }

    /* Base Grid */
    .container .one.column,
    .container .one.columns                     { width: 40px;  }
    .container .two.columns                     { width: 100px; }
    .container .three.columns                   { width: 160px; }
    .container .four.columns                    { width: 220px; }
    .container .five.columns                    { width: 280px; }
    .container .six.columns                     { width: 340px; }
    .container .seven.columns                   { width: 400px; }
    .container .eight.columns                   { width: 460px; }
    .container .nine.columns                    { width: 520px; }
    .container .ten.columns                     { width: 580px; }
    .container .eleven.columns                  { width: 640px; }
    .container .twelve.columns                  { width: 700px; }
    .container .thirteen.columns                { width: 760px; }
    .container .fourteen.columns                { width: 820px; }
    .container .fifteen.columns                 { width: 880px; }
    .container .sixteen.columns                 { width: 940px; }

	</style>
	
	<script type="text/javascript">	
		function close_window() {
			if (confirm("Close Window?")) {
		    close();
		  }
		}
	</script>
	
</head>
<body>
	<div id="wrap">
		<div id="main">
			<div class="container pageTitle">
				<div class="ten columns">
					<h1 class="remove-bottom" style="margin-top:0; float:left;">the <?php echo $title ?> of ben lymer</h1>
					<h6 id="hideME2" style="font-size:11px; position:relative; top:3px; left:; line-height:15px; text-align:right"><a href="#" onclick="close_window();return false;">close</a></h6>
					<div class="clear"></div>
					<p id="showME2" style="font-size:11px"><a href="#" onclick="close_window();return false;">close</a></p>
					<div class="pageTitle_divider"></div>
				</div>

				<div class="seven columns" style="text-align:left; background:">
					<h5>[about]</h5>
						<p>
						<?php echo $aboutMeText ?>						</p>

					<div class="Sectiondivider2"></div>
					
					<h5>[employment history]</h5>
						<dl>
							<dt>
								2/12 – Present | <strong>Interactive Art Director @ Norris E-Commerce Management, Inc.</strong>
							</dt>
							<dd>
								<ul class="square" style="margin-top:3px">
									<li>Web site user interface (UIX):
										<ul>
											<li>CSS development/maintenance</li>
											<li>Front-end systems developer</li>
											<li>html development/maintenance</li>
											<li>Graphics design</li>
											<li>Sales promotions (banner creation, front-end deployment)</li>
										</ul>
									</li>
									<li>Email newsletters creation and deployment</li>
									<li>Print design (business cards, coupons)</li>
									<li>Interactive media: video/photo production</li>
								</ul>
							</dd>

							<dt>
								1/02 – Present | <strong>Freelance Web Developer, Videographer &amp; Designer @ blurrMEDIA [owner]</strong>
							</dt>
							<dd>
								<ul class="square" style="margin-top:3px">
									<li>Create Websites for local companies, as well as outsourced work from AD agencies</li>
									<li>Create motion graphics animations</li>
									<li>Author DVD&prime;s, capture/edit video for local artists &amp; weddings</li>
								</ul>
							</dd>
		
							<dt>
								3/07 – 2/12  | <strong>Sr. Graphics Designer @ Norris E-Commerce Management, Inc.</strong>
							</dt>
							<dd>
								<ul class="square" style="margin-top:3px">
									<li>Responsible for creation of Sale Banners</li>
									<li>Created and maintained static sale pages</li>
									<li>Created and maintained CSS and html pages</li>
									<li>Created eMail marketing templates and mailers</li>
								</ul>
							</dd>
		
							<dt>
								3/06 - 3/07  | <strong>Graphic Designer @ One Hour Picture Perfect</strong>
							</dt>
							<dd>
								<ul class="square" style="margin-top:3px">
									<li>Create logos. business cards, flyers, and more for customers</li>
									<li>Restore &amp; touchup old photographs</li>
									<li>Process &amp; Develop Black &amp; White Film</li>
									<li>Color Correct &amp; Print Customers 35mm Film, as well as Customers Digital Film</li>							
								</ul>
							</dd>
		
							<dt>
								1/03 - 3/07  | <strong>Graphic Designer @ KAKE-TV</strong>
							</dt>
							<dd>
								<ul class="square" style="margin-top:3px">
									<li>Responsible for creating graphics for Good Morning Kansas (local morning show)</li>
									<li>Running Chyron/ImageStore for shows</li>
									<li>Was chosen several times to help jump start new programing</li>
									<li>Designed/Maintain the KAKE Shop for the station to sell merchandise</li>
									<li>Edited 2 BTK Journey to Justice videos</li>
									<li>Often filled in as Camera Op, Audio Op &amp; numerous other positions</li>							
								</ul>
							</dd>
		
							<dt>
								6/01 - 5/03  | <strong>Head of Media Services, Edmund Stanley Library @ Friends University</strong>
							</dt>
							<dd>
								<ul class="square" style="margin-top:3px">
									<li>Responsible for purchasing new equipment and maintaining new and pre-existing equipment</li>
									<li>Created a new and easier to maintain database for all equipment</li>
									<li>Created an on-line database for instructors to use to check out equipment, and also included guides for equipment usage</li>
								</ul>
							</dd>
						</dl>
					
					<div class="Sectiondivider2"></div>
					
					<h5>[awards]</h5>												
						<ul class="square" style="margin-top:3px">
							<li> 2002 | <strong>Art Scholarship @ Friends University</strong></li>
							<li> 2002 | <strong>Davis Scholarship @ Friends University</strong></li>
							<li> 2001 | <strong>Imagine the Difference Scholarship @ Friends University</strong></li>
							<li> 2002 | <strong>Christian Leadership Award @ Pensacola Christian College</strong></li>
							<li> 96 - 01 | <strong>Who′s Who of American High School Students</strong></li>																				
						</ul>
		
					<div class="Sectiondivider2"></div>
								
					<h5>[references]</h5>	
						<p>Available on Request</p>		
				</div>

				<div id="" class="three columns" style="background:">
					<!--<h5>[objectives]</h5>-->
					<!--<h5>[qualifications]</h5>-->
					<h5>[contact info]</h5>
					<p style="line-height:18px">
						Ben Lymer<br />
						<small style="font-size:12px">1201 Berkeley Wichita, KS 67216<br />
						eMail: <a href="mailto:hello@blurr-media.com">hello@blurr-media.com</a><br />
						ph: <a href="tel:+1-316-290-9042">316-290-9042</a></small>
					</p>

					<div class="Sectiondivider2"></div>

					<h5>[education]</h5>									
						<dl>
							<dt>
								01 - 05 | <strong>Friends University</strong>
								<p style="margin:1px 0 3px 10px">
									Bachelors Degree in Art<br />
									<small>Graphics Design/Computer Graphics & Video</small>
								</p>
							</dt>
						</dl>
					
					<div class="Sectiondivider2"></div>
					
					<h5>[volunteer]</h5>
						<dl>
							<dt>
								1/05 - Present  | <strong>First MB Church</strong>
								<p style="margin:1px 0 3px 10px; font-style:oblique">Audio/Visual Department</p>
							</dt>
						</dl>
		
					<div class="Sectiondivider2"></div>
									
					<h5>[proficiencies]</h5>	
						<ul class="square" style="margin-top:3px">
							<li>Operating Systems/Hardware:
								<ul class="square" style="margin-top:3px">
									<li>Macintosh (OS 8 - Current)</li>
									<li>Windows (DOS to Current)</li>
									<li>Linux (Fedora, Ubuntu, CentOS)</li>
									<li>Silicon Graphics Machines</li>
									<li>Chyron</li>
									<li>Avid &amp; Avid Venue (D-Show System)</li>
									<li>Electronic Theatre Controls (ETC Consoles)</li>
								</ul>
							</li>
							<li>Code/Programming:
								<ul class="square" style="margin-top:3px">
									<li>HTML & xhtml (includes html 5)</li>
									<li>CSS (includes Sass language)</li>
									<li>PHP (Working Proficiency)</li>
									<li>Javascript (Working Proficiency)</li>
									<li>Flash</li>
									<li>UNIX & SVN (Subversion)</li>
									<li>AppleScript (Working Proficiency)</li>
									<li>SSH, ftp, sftp, curl, wget</li>
								</ul>
							</li>
							<li>Software:
								<ul class="square" style="margin-top:3px">
									<li>Adobe Photoshop, Illustrator, Acrobat Pro, Flash, After Effects, Premiere, InDesign, Dreamweaver</li>	
									<li>Coda</li>
									<li>Sublime</li>
									<li>TextMate</li>
									<li>Final Cut Pro</li>
									<li>Avid</li>
									<li>Maxon Cinema 4D XL</li>
									<li>Quark Xpress</li>
									<li>Bryce</li>
									<li>20-20 Technologies (Giza, Worksheet)</li>
									<li>ProPresenter</li>
									<li>ezWorship</li>
								</ul>
							</li>
							<li>Misc:
								<ul class="square" style="margin-top:3px">
									<li>Understanding of Network Infrastructure</li>
									<li>Ability to Diagnose & Repair Hardware Issues</li>
									<li>Cable Installations</li>
									<li>Home Theater Installations</li>
									<li>Conference Room Installations</li>
									<li>Live Streaming Setups</li>	
									<li>Stage Lighting</li>
									<li>Live Production</li>
									<li>Camera Operator</li>						
								</ul>
							</li>
						</ul>	
				</div>		
			</div>
		</div>
	</div>
</body>
</html>