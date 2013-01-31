	<meta charset="utf-8">
	<?php echo '<title>'; 
		if(isset($title)) echo $title;
		else echo 'blurrMEDIA, the personal portfolio of ben lymer [Web Developer, CSS Guru, Videographer...]'; //a default in case you forge to put in $title
		echo ' @ blurrMEDIA, the personal portfolio of ben lymer [Web Developer, CSS Guru, Videographer...]</title>';
	?>	
	<meta name="description" content="blurr media is Ben Lymer, a freelance web/graphics designer in Wichita,KS" />
	<meta name="keywords" content="web design, design, video, wichita, kansas, ben lymer, benjamin lymer, email" />
	<meta name="author" content="ben lymer">
	<?php if ($title == 'web &amp; css'): ?><meta name="robots" content="noindex, nofollow, noarchive, noimageindex, nosnippet"><?php endif ?>
	
