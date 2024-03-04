<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Post;
use Twig\Error\Error;

class MainController extends Controller
{

    public function homepage()
    {

        include '../public/assets/views/main/homepage.php';
    }

    public function notFound()
    {
    }

}