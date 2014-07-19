<!DOCTYPE html>
<html>
	<head>
		<title>Breaking News - The Western Australian</title>
		<link rel="stylesheet" type="text/css" href="http://djw.net.au/lp/the-west-breaking/reset.css"> <!-- "Reset" the CSS -->
		<link rel="stylesheet" type="text/css" href="http://djw.net.au/lp/the-west-breaking/style.css"> <!-- Grab the styling -->
	</head>

	<body>
		<?php if (date('H') > 2 && date("H") < 5) { $edition = 'Early Edition'; } else if (date("H") < 12) { $edition = 'Morning Edition'; } else if (date('H') > 11 && date("H") < 18) { $edition = 'Afternoon Edition'; } else if(date('H') > 17) { $edition = 'Evening Edition'; } ?>
		<header>
			<img src="http://djw.net.au/lp/the-west-breaking/thick_line.png" class="thick-line" width="384" height="5">
			<img src="http://djw.net.au/lp/the-west-breaking/the-western-australian-logo.png" class="logo" width="384" height="150">
			<span class="subtitle"><b>HEADLINES</b> <?php echo $edition; ?>, <?php echo date('jS M Y'); ?></span>
			<img src="http://djw.net.au/lp/the-west-breaking/thick_line.png" class="thick-line" width="384" height="5">
		</header>

		<section id="content">