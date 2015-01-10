<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8"/>
			<title><?= $blog_title?></title>

			<link type="text/css" rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.css">
			<link type="text/css" rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">	
		<body>
		<div class="main-nav">
		</div>
		<div class="container">
			<div class="row">
				<?php
						foreach($posts as $post){
						echo "<div class=\"posts col-md-12\">";
						echo "<h1>".$post->title."</h1><hr style=\"position:relative; top:-20px;\"/>";
						 echo $post->content;
						 echo "<div style=\"color:#ccc;font-size:14px;display:inline;\" class=\"date\">posted".$post->date."</div></div>";
					}
				
				?>
			</div>
		 </div>
		</body>
	</html>