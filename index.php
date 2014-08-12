<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DrupalSummerSchool</title>
	<link rel="stylesheet" href="stylesheets/app.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/scripts.js"></script>
</head>
<body>
	<a name="top" id="top"></a>
	
	<div id="header">
		<div class="mainwrapper">
			<div class="logo"><a href="/dss/">DrSummSch</a></div>
			<?php include('_includes/menu.html'); ?>
		</div>
	</div>
	
	<div class="mainwrapper" id="content-body">
		<?php include('_includes/about.html'); ?>
		<?php include('_includes/services.html'); ?>
		<div class="clear"></div>
		<?php include('_includes/contact.html'); ?>
		<div class="clear"></div>
	</div>

	<div id="footer">
		<div class="mainwrapper">
			<?php include('_includes/menu.html'); ?>
			<p class="copyrights">&copy 2014</p>	
		</div>
	</div>
	<a href="#top" id="gotop"><img src="img/up.png" alt="&#8593; Top"></a>
</body>
</html>