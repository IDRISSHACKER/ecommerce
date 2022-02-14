<?php
session_start();

require "./../app/Articles.php";
require "./../controllers/Articles.controller.php";

require "./../app/Users.php";
require "./../controllers/Users.controller.php";

require "./../controllers/Card.controller.php";

$ROOT = dirname(__DIR__);

$articles = Articles::getArticles();

$title = "Ecommerce";

$template = 1;

if (!empty($_GET['view'])) {

	$view = $_GET['view'];
} else {

	$view = "home";
}

ob_start();

if ($view === "home") {

	require $ROOT . "/resources/views/home.view.php";
} elseif ($view === "article") {

	require $ROOT . "/resources/views/article.view.php";
} elseif ($view === "admin-upload") {
	ArticleController::uploadArticle();
	require $ROOT . "/resources/views/admin/upload.view.php";
} elseif ($view === "login") {
	UsersController::login();
	require $ROOT . "/resources/views/auth/login.view.php";
} elseif ($view === "logOut") {
	UsersController::signOut();
} elseif ($view === "addCard") {
	CardController::addCard();
} else {
	require $ROOT . "/resources/views/home.view.php";
}

$view = ob_get_clean();

if ($template === 1) {

	require $ROOT . "/resources/views/templates/master.view.php";
} else {

	require $ROOT . "/resources/views/templates/app.view.php";
}
