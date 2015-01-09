<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8"/>
			<title>Slim Framework for PHP 5</title>
			<link type="text/css" rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.css">
			<link type="text/css" rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">		
		<body>
		<div class="main-nav">
		<a href="/">Home</a>&nbsp|&nbsp<a href="/new">New</a>
		</div>
		<div class="container">
		<?php
				foreach($posts as $post){
				
			
				echo "<hr/><div class=\"posts\">";
					echo "<a href=\"/edit/".$post->date."\">Edit</a>&nbsp|&nbsp";
					echo "<a href=\"/delete/".$post->date."\">Delete</a>";
						 echo $post->content;
				echo "</div>";
			}
		
		?>
		 </div>
		</body>
	</html>