<?php

namespace app\controllers;

use app\models\Post;

class PostController
{
    public function validatePost($inputData) {
        $errors = [];
        $firstName = $inputData['firstName'];
        $lastName = $inputData['lastName'];
        $email = $inputData['email'];
        $message = $inputData['message'];

//NEED TO COMPLETE

        if ($title) {
            $title = htmlspecialchars($title, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($title) < 2) {
                $errors['titleShort'] = 'title is too short';
            }
        } else {
            $errors['titleRequired'] = 'title is required';
        }

        if ($description) {
            $description = htmlspecialchars($description, ENT_QUOTES|ENT_HTML5, 'UTF-8', true);
            if (strlen($description) < 2) {
                $errors['descriptionShort'] = 'description is too short';
            }
        } else {
            $errors['descriptionRequired'] = 'description is required';
        }

        if (count($errors)) {
            http_response_code(400);
            echo json_encode($errors);
            exit();
        }
        return [
            'title' => $title,
            'description' => $description,
        ];
    }

    public function savePost()
    {
        $inputData = [
            'firstName' => $_POST['firstName'] ? $_POST['firstName'] : false,
            'lastName' => $_POST['lastName'] ? $_POST['lastName'] : false,
            'email' => $_POST['email'] ? $_POST['email'] : false,
            'message' => $_POST['message'] ? $_POST['message'] : false
        ];

        //$postData = $this->validatePost($inputData);

        $postModel = new Post();
        $postStatus = $postModel->savePost($inputData);
        
        http_response_code(200);
        echo json_encode([
            'success' => true
        ]);
        exit();
    }
}
?>