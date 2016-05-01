  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Stock Sizes</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/home.css" />
</head>

<body>
<div id="wrapper">
	<?php
		include "php/branding.php";		
        include "php/nav_main.php";
		include "php/nav_sup.php";
	?>
	<div id="content_main">
		<div id="level-1" class="level">
			<div id="title_block" class="left">
				<h1>Stock Sizes</h1>
				<p>Choosing the material size to start with can save a lot of time and frustration, but stock sizes tend to be confusing. This list should make life easier. 
				</p>
			</div><!--title_block-->
			
			<div id="r-1" class="col-2 right">
				<?php
					include "php/ref_lst.php";
				?>
			</div><!--r-1-->
		</div><!--level-1-->

		<?php
			include "php/steel-gauge-chart.php";
		?>
	</div><!--content_main-->
	<?php
        include "php/site_info.php";
	?>
</div><!--wrapper-->
</body>
</html>
