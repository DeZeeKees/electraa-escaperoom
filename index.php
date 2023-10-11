<?php
require "./include.php";
use Lib\Router;

$router = new Router(__DIR__);

//index page
$router->define_route("/", "main.php");
$router->define_route("", "main.php");

$router->define_route("/video", "video_page.php");

$router->define_route("/admin", "admin.php");
$router->define_route("/admin/login", "login.php");

$router->define_route("/edit_number", "temp_create.php");

$router->start();
?>