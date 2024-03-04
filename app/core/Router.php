<?php

namespace app\core;

use app\controllers\MainController;
use app\controllers\UserController;

class Router
{
    public $routeList = [
        'users' => [
            'controller' => UserController::class,
            'GET' => 'getUsers',
            'POST' => 'saveUsers'
        ],
        'view-users' => [
            'controller' => UserController::class,
            'GET' => 'getUsers',
        ]
    ];

    public function serveRoute() {
        $uriParse = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $method =  $_SERVER['REQUEST_METHOD'];

        if ($uriParse[0]) {
            $route = $this->routeList[$uriParse[0]];
            if ($route) {
                $controller = $route['controller'];
                $action = $route[$method];
                $controller = new $controller();
                $controller->$action();
            } else {
                $homepageController = new MainController();
                $homepageController->notFound();
            }
        } else {
            $homepageController = new MainController();
            $homepageController->homepage();
        }
    }
}