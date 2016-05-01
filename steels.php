<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Steels</title>
	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/steels.css" />
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
				<h1>Types of Steel</h1>
				<p>Selecting the proper steel for a project is important. There are an almost endless number of different steels to choose from. This short list of some common steels and their properties should make it a little easier.
				</p>
			</div><!--title_block-->

			<div id="r-1" class="col-2 right">
				<?php
					include "php/ref_lst.php";
				?>
			</div><!--r-1-->
		</div><!--level-1-->
		
		<div id="level-2" class="level">
				<?php			
                	$db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
					mysql_select_db('pb0612_blacksmithing', $db);// select database
					$sql = "SELECT * FROM steels ORDER BY name";//squ command
					$result = mysql_query($sql, $db);//send MySQL query
					$x = 1;//counter
					while($row = mysql_fetch_array($result))// Loops untill the end of the array
					{
						
						$test = $x % 2;
						
						if($test == 1)
							{echo "<div id='".$row['name']."' class='col-steel left'>";}
						else
							{echo"<div id='".$row['name']."' class='col-steel right'>";}
					
						echo	
							"<h2>".$row['name']."</h2>".
								"<p>Hardness: ".$row['hardness']."</p>".
								"<ul class='left'>".
									"<li class='vrt_lst'>C: ".$row['carbon']."%</li>".
									"<li class='vrt_lst'>Mn: ".$row['Mn']."%</li>".
									"<li class='vrt_lst'>Cr: ".$row['Cr']."%</li>".
									"<li class='vrt_lst'>Ni: ".$row['Ni']."%</li>".
								"</ul>".
								"<ul class='right'>".	
									"<li class='vrt_lst'>V: ".$row['V']."%</li>".
									"<li class='vrt_lst'>Mo: ".$row['Mo']."%</li>".
									"<li class='vrt_lst'>W: ".$row['W']."%</li>".
									"<li class='vrt_lst'>Co: ".$row['Co']."%</li>".
								"</ul>".
								"<p class='clear'>".$row[about]."</p>".
						"</div>";	
						$x++;
					}
                ?>
		</div><!--level-2-->		
	</div><!--content_main-->
	<?php
        include "php/site_info.php";
	?>
</div><!--wrapper-->
</body>
</html>