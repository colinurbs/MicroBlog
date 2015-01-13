<?php include('includes/header.php');?>		
	<body>
	<div class="main-nav">
	<a href="/">Home</a>&nbsp|&nbsp<a href="/new">New</a>
	</div>
	<div class="container">
	<?php
		foreach($posts as $post):
			?>
			<div class="post col-md-8">
				<div style="float:right;" class="btn-group" role="group">
					<a class="btn btn-default" href="/edit/<?=$post->id;?>">Edit</a>
					<a class="btn btn-default" href="/delete/<?=$post->id;?>">Delete</a>
				</div>
				<div class="date">
					<?=$post->date;?>
				</div>
				<h1>
					<a href="/single/"<?=$post->id;?>"><?=$post->title; ?></a>
				</h1>
				<?= $post->content;?>
				</div>
		<?php endforeach; ?>
	?>
	 </div>
<?php include('includes/footer.php');?>