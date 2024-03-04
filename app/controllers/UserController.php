<?php

namespace app\controllers;
use app\core\Controller;
use app\models\User;

class UserController extends Controller
{
    public function getUsers()
    {
        $userModel = new User();

        header("Content-Type: application/json");
        echo json_encode($userModel->getAllUsers());
        exit();
    }

    public function saveUser() {

    }

    public function viewUsers() {
        
    }

}