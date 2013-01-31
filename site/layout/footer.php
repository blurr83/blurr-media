<?php function auto_copyright($year = 'auto'){ ?>
   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
<?php } ?>
<div id="" class="thirteen columns" style="color:#E1E1E1; text-align:left; font-size:12px;padding-top:3px;">
	&copy;<?php auto_copyright('2003');  // 2003 - Current ?>  Ben Lymer (blurrMEDIA)
	<div id="showME" style="float:right; margin-top:-2px">
		<a href="http://www.linkedin.com/in/benlymer" title="View My LinkedIN Profile" target="_blank"><img src="<?php echo $url ?>/images/linkedin.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:1px" /></a>
		<a href="" title="View My Videos on YouTube" target="_blank"><img src="<?php echo $url ?>/images/youtube.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:1px" /></a>
		<a href="" title="View My Videos on Vimeo" target="_blank"><img src="<?php echo $url ?>/images/vimeo.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:1px" /></a>		
	</div>
</div>

<div id="hideME" class="three columns" style="text-align:right;">
	<?php /* 
	<a href="" title="Visit Facebook" target="_blank"><img src="../images/facebook.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:5px" /></a>
	<a href="" title="Follow on Twitter" target="_blank"><img src="../images/twitter.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:5px" /></a>
	*/ ?>
	<a href="http://www.linkedin.com/in/benlymer" title="View My LinkedIN Profile" target="_blank"><img src="<?php echo $url ?>/images/linkedin.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:5px" /></a>
	<a href="https://plus.google.com/101430098950576088983/" title="Follow on google+" target="_blank"><img src="<?php echo $url ?>/images/googlePLus.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:5px" /></a>
	<a href="http://www.youtube.com/user/lymerb" title="View My Videos on YouTube" target="_blank"><img src="<?php echo $url ?>/images/youtube.png" align="middle" style="display:inline-block; position:relative; top:4px; padding-right:3px" /></a>		
	<a href="" title="View My Videos on Vimeo" target="_blank"><img src="<?php echo $url ?>/images/vimeo.png" align="middle" style="display:inline-block; position:relative; top:4px" /></a>	
</div>

<div id="itemscope" itemscope itemtype="http://schema.org/Person">
  <meta itemprop="name" content="Ben Lymer" />
  <span itemscope itemtype="http://schema.org/Organization">
  	<meta itemprop="name" content="blurrMEDIA" />
  </span>
  <meta itemprop="jobTitle" content="Freelance Web Developer, Videographer & CSS Guru" />  
  <meta itemprop="description" content="Freelance Web Developer, Videographer & CSS Guru who is always looking for opportunities to strecth the limits of CSS and html5" />  
  <meta itemprop="worksFor" content="Myself & Norris E-Commerce Management, Inc" />   
  <span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
	  <meta itemprop="streetAddress" content="1201 Berkeley" />   
	  <meta itemprop="addressLocality" content="Wichita" />   
	  <meta itemprop="addressRegion" content="KS" />   
	  <meta itemprop="postalCode" content="67216" />
  	  <meta itemprop="addressCountry" content="United States" />   
  </span>
  <meta itemprop="telephone" content="316-290-9042" />   
  <meta itemprop="email" content="hello@blurr-media.com" />   
  <meta itemprop="url" content="http://www.blurr-media.com" />   
  <meta itemprop="image" content="http://www.blurr-media.com/images/me.jpg" />   
</div> 