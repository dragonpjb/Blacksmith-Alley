<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Geometry</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/geometry.css" />
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
            <h1>Geometric formulas</h1>
				<p>Here are some geometric formulas and diagrams that are helpful when laying out projects.</p>
			</div><!--l-1-->
			
			<div id="r-1" class="col-2 right">
				<?php
					include "php/ref_lst.php";
				?> 
			</div><!--r-1-->
		</div><!--level-1-->
		
		<div id="level-2" class="level">
			<h2>How to divide a circle</h2>
			<p><img src="images/divide_circle.png" alt="diagram of a circle divided into equal parts"/></p>
			<p><a href="pdf/circle_divider.pdf"><img src="images/pdf_icon.png" alt="diagram of a circle divided into equal parts"/> Click here for printable PDF.</a></p>
		</div><!--level-2-->	
		
		<div id="level-3" class="level">
			<h2>General Formulas</h2>
			<p><img src="images/formula.png" alt=""/></p>
			<p><a href="pdf/formula.pdf"><img src="images/pdf_icon.png" alt=""/> Click here for printable PDF.</a></p>
		</div><!--level-3-->		
		
		<!--<div id="level-4" class="level">
			<h2></h2>
			<p><a href="#"><img src="images/pdf_icon.png" alt="diagram of a circle divided into equal parts"/> Click here for printable PDF.</a></p>
		</div>level-4-->		
			
		<!--<div id="level-5" class="level">
			<h2></h2>
		</div>level-5-->		


	</div><!--content_main-->

	<?php
        include "php/site_info.php";
	?>

</div><!--wrapper-->
</body>
</html>
