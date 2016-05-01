<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>News</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>

<body>
<div id="wrapper">
	<?php
		include "php/branding.php";
        include "php/nav_main.php";
		include "php/nav_sup.php";
	?>
	<div id="content_main">
		<div id="left" class="blog left">
			<div id="title" class="level" >
					<h1>Blacksmith Alley News</h1>
					<p>
					This page's purpose is to keep the the viewer informed and updated on any occurring changes and status updates.
					</p>
			</div><!--title-->
			
			<div id="l-1" class="left">
				<?php
					$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
		
					mysql_select_db('pb0612_blacksmithing', $db);// select database
														
					$sql = "SELECT * FROM news ORDER BY date";
					
					$result = mysql_query($sql, $db);
					
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
											
					echo 	"<h2> ".$row['title']. "</h2>".
							"<p>".$row['date']."</p>".
							"<p>".$row['body']."</p>".
									"<br/><br/>";
					}
				?>
			</div><!--l-1-->
		</div><!--left-->
	</div><!--content_main-->
	<?php
        include "php/site_info.php";
	?>
</div><!--wrapper-->
</body>
</html>