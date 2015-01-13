<?php
require 'vendor/autoload.php';
use Sunra\PhpSimple\HtmlDomParser;


$app = new \Slim\Slim(array(
	'templates.path' => './templates'
));

// home
$app->get('/', function () use ($app) {

	
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


//new item processing
$app->post('/new', function () use ($app) {
	$data = json_decode(file_get_contents("posts.json"));
	$parse = new Parsedown();

	$data[] = array('id'=>count($data)+1, 'content'=>$parse->text($_POST['content']), 'date'=> date('m/y/d'), 'title'=>$_POST['title']);

	$fp = fopen('posts.json', 'w');
	fwrite($fp, json_encode($data));
	fclose($fp);
	$app->response->redirect($app->urlFor('home'), 303);
	});

//delete

$app->get('/delete/:id+', function ($id) use ($app) {
	$data = json_decode(file_get_contents("posts.json"));
	$temp = array();
	foreach ($data as $post) {
		if($post->id != $id[0]){

			$temp[] = $post;
		}
	}
	$fp = fopen('posts.json', 'w');
	fwrite($fp, json_encode($temp));
	fclose($fp);
	$app->response->redirect($app->urlFor('admin'), 303);
});

//admin view
$app->get('/admin', function () use ($app) {
	$data = json_decode(file_get_contents("posts.json"));
	$app->render('admin.php', array('posts' => $data));

})->name("admin");

//new item form
$app->get('/new', function () use ($app) {
	$app->render('new.php');

});


$app->run();
?>