<?php
namespace app\controllers;

use app\models\Resume;

class ResumeController
{
    public function getResume()
    {
        $ResumeModel = new Resume();
        $resume = $ResumeModel->fetchResume();
        include $resume;
        exit();
    }
}
?>