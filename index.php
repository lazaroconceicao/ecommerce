<?php
session_start();
require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("functions.php");
require_once("vendor\hcodebr\php-classes\src\Page.php");
require_once("vendor\hcodebr\php-classes\src\Model.php");
require_once("vendor\hcodebr\php-classes\src\DB\Sql.php");
require_once("vendor\hcodebr\php-classes\src\Model\Product.php");
require_once("vendor\hcodebr\php-classes\src\Model\Cart.php");

require_once("site.php");
require_once("admin.php");
require_once("admin-users.php");
require_once("admin-categories.php");
require_once("admin-products.php");


$app->run();

 ?>