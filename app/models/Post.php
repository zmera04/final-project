<?php
namespace app\models;

//using the database class namespace
use app\core\Database;

class Post
{
    use Database;

    public function savePost($data)
    {
        $query = 'INSERT INTO contactMe(firstName, lastName, email, message) VALUES(:firstName, :lastName, :email, :message)';
        return $this->queryWithParams($query, ['firstName'=>$data['firstName'], 'lastName'=>$data['lastName'], 'email'=>$data['email'], 'message'=> $data['message']]);
    }
}
?>