<?php
namespace app\models;

//using the database class namespace
use app\core\Database;

class Post
{
    use Database;

    public function savePost($data)
    {
        $query = 'select * from resume';
        return $this->fetchAll($query);
    }
}
?>