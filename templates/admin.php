<?php include('includes/header.php');?>		
	<body>
	<div class="main-nav">
	<a href="/">Home</a>&nbsp|&nbsp<a href="/new">New</a>
	</div>
	<div class="container">
	<?php
		foreach($posts as $post){
			echo "<div class=\"posts col-md-12\">";
			echo "<h1><a href=\"/single/".$post->id."\">".$post->title."</a></h1><hr style=\"position:relative; top:-20px;\"/>";
			echo "<a href=\"/edit/".$post->id."\">Edit</a>&nbsp|&nbsp";
			echo "<a href=\"/delete/".$post->id."\">Delete</a>";
			echo $post->content;
			echo "<div style=\"color:#ccc;font-size:14px;display:inline;\" class=\"date\">posted".$post->date."</div></div>";
		}
	?>
	 </div>
<?php include('includes/footer.php');?>