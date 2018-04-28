<?php

namespace App\Controllers;

use App\Controller;

/**
 * контроллер вывода сообщений об ошибках
 * @package App\Controllers
 */
class Errors extends Controller
{

    protected function actionDefault()
    {
        $this->view->display(__DIR__ . '/../Templates/Errors/Default.php');
    }

}