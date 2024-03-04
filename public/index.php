<?php

require_once '../app/core/init.php';

use app\core\Router;

require_once __DIR__ . '/helpers.php';

$router = new Router();

?>

<?=
vite('main.js');
$router->serveRoute();
?>
