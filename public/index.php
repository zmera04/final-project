<?php

require_once '../app/core/init.php';
require_once '../app/core/routes.php';

use app\core\Router;

require_once __DIR__ . '/helpers.php';

$router = new Router($routes);

?>

<?=
vite('main.js');
$router->serveRoute();
?>
