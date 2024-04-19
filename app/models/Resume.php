<?php
namespace app\models;

//using the database class namespace
use app\core\Database;

class Resume
{
    use Database;

    public function fetchResume()
    {
        $query = 'SELECT source FROM `RESUME` WHERE id=1';
        return $this->fetchAll($query);
    }
}
?>