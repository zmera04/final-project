<?php
    require_once "../app/core/Database.php";
    require_once "../app/models/Post.php";
    require_once "../app/models/Resume.php";
    require_once "../app/controllers/PostController.php";
    require_once "../app/controllers/ResumeController.php";
    
    //set our env variables
    $env = parse_ini_file('../.env');
    require '../app/core/config.php';
    
    use app\controllers\PostController;
    use app\controllers\ResumeController;
    
    $uri = strtok($_SERVER["REQUEST_URI"], '?');  
    $uriArray = explode("/", $uri);

    if($uri === '/' && $_SERVER['REQUEST_METHOD'] === 'POST')
    {
        $contactController = new PostController();
        $contactController->savePost();
    }
    if($uri === '/resume' && $_SERVER['REQUEST_METHOD'] === 'GET')
    {
        $contactController = new ResumeController();
        $contactController->getResume();
    }

    if($uri === '/' && $_SERVER['REQUEST_METHOD'] === 'GET')
    {
        include "../public/assets/views/homepage.html";
    }
?>