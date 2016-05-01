  <?php //session_start();
	//$_SESSION['user'] = Billy;
	$key=$_GET['key'];
?> 
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Glossary</title> 
	
	<link rel="stylesheet" type="text/css" href="css/main.css" />
	<link rel="stylesheet" type="text/css" href="css/glossary.css" />
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
				<h1>Glossary</h1>
				<p>
					Metal working has a lot of unique terms. This glossary should make remembering them easier.
				</p>
			</div><!--title_block-->
			
			<div id="r-1" class="col-2 right">
				<?php
					include "php/ref_lst.php";
				?>
			</div><!--r-1-->
		</div><!--level-1-->
		
		<div id="sorter">
			<p>Sort Alphabetically</p>
			<ul>
				<li><a href="glossary.php?key=%">All</a></li>
				<li><a href="glossary.php?key=a%">A</a></li>
				<li><a href="glossary.php?key=b%">B</a></li>
				<li><a href="glossary.php?key=c%">C</a></li>
				<li><a href="glossary.php?key=d%">D</a></li>
				<li><a href="glossary.php?key=e%">E</a></li>
				<li><a href="glossary.php?key=f%">F</a></li>
				<li><a href="glossary.php?key=g%">G</a></li>
				<li><a href="glossary.php?key=h%">H</a></li>
				<li><a href="glossary.php?key=i%">I</a></li>
				<li><a href="glossary.php?key=j%">J</a></li>
				<li><a href="glossary.php?key=k%">K</a></li>
				<li><a href="glossary.php?key=l%">L</a></li>
				<li><a href="glossary.php?key=m%">M</a></li>
				<li><a href="glossary.php?key=n%">N</a></li>
				<li><a href="glossary.php?key=o%">O</a></li>
				<li><a href="glossary.php?key=p%">P</a></li>
				<li><a href="glossary.php?key=q%">Q</a></li>
				<li><a href="glossary.php?key=r%">R</a></li>
				<li><a href="glossary.php?key=s%">S</a></li>
				<li><a href="glossary.php?key=t%">T</a></li>
				<li><a href="glossary.php?key=u%">U</a></li>
				<li><a href="glossary.php?key=v%">V</a></li>
				<li><a href="glossary.php?key=w%">W</a></li>
				<li><a href="glossary.php?key=x%">X</a></li>
				<li><a href="glossary.php?key=y%">Y</a></li>
				<li><a href="glossary.php?key=z%">Z</a></li>
			</ul>
		</div>
		<div id="def_list">
			<?php
                $db = mysql_connect( 'localhost', 'pb0612_admin', 'haputRu5ar4t');//connect to server
        
				mysql_select_db('pb0612_blacksmithing', $db);// select database
					
				$sql = "SELECT * FROM `glossary` WHERE `word` LIKE '".$key. "' ORDER BY word";
					
				$result = mysql_query($sql, $db);
					
					
					
				while($row = mysql_fetch_array($result))// Loops untill the end of the array
				{
					
					echo	"<div class='definition'>
								<p class='def_name'>".$row['word'].": "."</p>".
								"<p class='def_body'>".$row['definition']."</p>
								</div>";
					}
					

			?>
		</div><!--def_list-->
	</div><!--content_main-->
	<div id="site_info">
		<address>
			<a href="http://www.dragonpjb.com">Dragon's Layer Design</a>, Inc.Copyright&copy; 2010 Updated: 4/2/2010
		</address>
	</div><!--site_info-->
</div><!--wrapper-->
</body>
</html> 
