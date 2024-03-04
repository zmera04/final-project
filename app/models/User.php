<?php

namespace app\models;

class User
{
    public function getAllUsers() {
        //in future this will come from the database
        return [
            [
                'id' => '1',
                'name' => 'pinecone'
            ],
            [
                'id' => '2',
                'name' => 'nathan'
            ]
        ];
    }
}