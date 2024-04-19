<?php
namespace app\controllers;

use app\models\Resume;

class ResumeController
{
    public function getResume()
    {
        $ResumeModel = new Resume();
        $result = $ResumeModel->fetchResume();
        
        echo json_encode($result);
    }
}
?>