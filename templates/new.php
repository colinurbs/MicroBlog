<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8"/>
			<title>Slim Framework for PHP 5</title>
			<link type="text/css" rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.css">
			<link type="text/css" rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap-theme.css">		
		<body>
		<div class="main-nav">
		<a href="/">Home</a>
		</div>
		<div class="container">
			<div class="row">
				
				<h2>New Post</h2>
				<form action="/new" method ="post">
				<label>Title<br /><input type="text" name="title" id="title"/></label></form><br />
				 <label>Content<br /><textarea id="content" name="content" cols="86" rows ="20"></textarea></label>
					
					</br>
					<input type="submit" value="Submit"/>
				 </form>
			 </div>
		 </div>
		</body>
	</html>