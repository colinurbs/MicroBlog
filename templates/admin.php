<?php include('includes/header.php');?>		
	<body>
	<div class="container">
	<div class="row">
		<div class="post col-md-12">
			<div class="btn-group" role="group">
				<a class="btn btn-default" href="/">Home</a>
				<a class="btn btn-default" href="/new">New</a>
			</div>
		</div>
	
	</div>
	<?php
		foreach($posts as $post):;
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
					<a href="/single/<?=$post->id;?>"><?=$post->title;?></a>
				</h1>
				<?=$post->content;?>
				</div>
		<?php endforeach; ?>
	 </div>
<?php include('includes/footer.php');?>