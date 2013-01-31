<?php 
	$page = basename($_SERVER['REQUEST_URI']); 
	if ($page == '/') {
    	$page = "index.php";
    }
?>
<div class="sixteen columns">
	<ul id="nav">
		<li style="color:#C8C8C8; padding: 0 10px; line-height: 25px; opacity:0.5">blurrMEDIA:menu user$</li>
		<li<?php if ($pageType == "index") echo ' class="selected"'; ?>><a href="<?php echo $url ?>">home</a></li>
		<li<?php if ($title == "resume") echo ' class="selected"'; ?>><a href="<?php echo $url ?>/resume">resume</a></li>	
		<li<?php if ($title == "web &amp; css") echo ' class="selected"'; ?>><a href="<?php echo $url ?>/web">web</a></li>		
		<li<?php if ($title == "videos") echo ' class="selected"'; ?>><a href="<?php echo $url ?>/video">video</a></li>			
		<li<?php if ($title == "design") echo ' class="selected"'; ?>><a href="<?php echo $url ?>/design">design</a></li>				
		<li<?php if ($title == "contact") echo ' class="selected"'; ?>><a href="<?php echo $url ?>/contact">contact</a></li>				
	</ul>
</div>
