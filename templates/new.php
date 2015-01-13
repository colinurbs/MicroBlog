<?php include('includes/header.php');?>
	<body>
	<div class="main-nav">
	<a href="/">Home</a>
	</div>
	<div class="container">
		<div class="row">
			
			<h2>New Post</h2>
			<form action="/new" method ="post">
			<label>Title<br /><input type="text" name="title" id="title"/></label><br/>
			<label>Content<br /><textarea id="content" name="content" cols="86" rows ="20"></textarea></label>
				
				</br>
				<input type="submit" value="Submit"/>
			 </form>
		 </div>
	 </div>
<?php include('includes/footer.php');?>