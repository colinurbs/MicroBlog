<?php include('includes/header.php');?>
	<body>
	<div class="main-nav">
	</div>
	<div class="container">
	<div class="row">
		<h1 class="site-title">
			
		</h1>
	</div>
		<div class="row">
			<?php include('includes/sidebar.php');?>
			<?php
				foreach($posts as $post)
				{
					echo "<div class=\"post col-md-8\"><div class=\"date\">".$post->date."</div>";
					echo "<h1><a href=\"/single/".$post->id."\">".$post->title."</a></h1>";
					echo $post->content;
					echo "</div>";
					
				}
			?>
		</div>
	 </div>
<?php include('includes/footer.php');?>