<?php
require 'vendor/autoload.php';
use Sunra\PhpSimple\HtmlDomParser;

<<<<<<< HEAD
=======


>>>>>>> 7d48aa6bf1344e10c602e4d23e0b145378376c9c
$app = new \Slim\Slim(array(
    'templates.path' => './templates'
));

// home
$app->get('/', function () use ($app) {
<<<<<<< HEAD
	
	$data = json_decode(file_get_contents("posts.json"));
	$app->render('home.php', array('posts' => $data));
})->name("home");

$app->get('/single/:id+', function ($id) use ($app) {
	$data = json_decode(file_get_contents("posts.json"));
	foreach($data as $post){
		if($post->id == $id[0]){
			$app->render('single.php', array('post' => $post));
		}
	}
})->name("single");

=======
		$blog_title = "Yurt Life";
		$data = json_decode(file_get_contents("posts.json"));
		$app->render('home.php', array('blog_title'=> $blog_title,'posts' => $data));
})->name("home");

>>>>>>> 7d48aa6bf1344e10c602e4d23e0b145378376c9c
//new item processing
$app->post('/new', function () use ($app) {
	$data = json_decode(file_get_contents("posts.json"));
	$parse = new Parsedown();
<<<<<<< HEAD
	$data[] = array('id'=>count($data)+1, 'content'=>$parse->text($_POST['content']), 'date'=> date('m/y/d'), 'title'=>$_POST['title']);
=======
	$data[] = array('content'=>$parse->text($_POST['content']), 'date'=> date('m/y/d'), 'title'=>$_POST['title']);
	
>>>>>>> 7d48aa6bf1344e10c602e4d23e0b145378376c9c
	$fp = fopen('posts.json', 'w');
	fwrite($fp, json_encode($data));
	fclose($fp);
	$app->response->redirect($app->urlFor('home'), 303);
	});

//delete
<<<<<<< HEAD
$app->get('/delete/:id+', function ($id) use ($app) {
	$data = json_decode(file_get_contents("posts.json"));
	$temp = array();
	foreach ($data as $post) {
		if($post->id != $id[0]){
=======
$app->get('/delete/:link+', function ($link) use ($app) {
	if(is_array($link)){
		$link = implode("/", $link);
	}
	echo $link;
	$data = json_decode(file_get_contents("posts.json"));
	$temp = array();

	foreach ($data as $post) {
		if($post->link !== $link){
>>>>>>> 7d48aa6bf1344e10c602e4d23e0b145378376c9c
			$temp[] = $post;
		}
	}
	$fp = fopen('posts.json', 'w');
	fwrite($fp, json_encode($temp));
	fclose($fp);
<<<<<<< HEAD
=======
	echo "done";
>>>>>>> 7d48aa6bf1344e10c602e4d23e0b145378376c9c
	$app->response->redirect($app->urlFor('admin'), 303);
});

//admin view
$app->get('/admin', function () use ($app) {
	$data = json_decode(file_get_contents("posts.json"));
	$app->render('admin.php', array('posts' => $data));
<<<<<<< HEAD
})->name("admin");

//new item form
$app->get('/new', function () use ($app) {
	$app->render('new.php');
=======
})->name("admin");;

//new item form
$app->get('/new', function () use ($app) {
$app->render('new.php');
>>>>>>> 7d48aa6bf1344e10c602e4d23e0b145378376c9c
});



$app->run();
?>