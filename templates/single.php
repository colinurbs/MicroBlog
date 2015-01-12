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
			<?php
				echo "<div class=\"posts col-md-12\">";
				echo "<h1><a href=\"/single/".$post->id."\">".$post->title."</a></h1><hr style=\"position:relative; top:-20px;\"/>";
				echo $post->content;
				echo "<div style=\"color:#ccc;font-size:14px;display:inline;\" class=\"date\">posted".$post->date."</div></div>";
			?>
			<div class="posts col-md-12">
			<br/><br />
			<?php include('includes/comments.php');?>
			</div>
		</div>
	 </div>
<?php include('includes/footer.php');?>