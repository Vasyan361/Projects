<?php

namespace App\Controllers;

use App\Controller;
use App\Exceptions\Http404Exception;
use App\Models\Article;

/**
 * конроллер страницы новостей
 * @package App\Controllers
 */
class Index extends Controller
{

    protected function actionDefault()
    {
        $this->twigView->news = Article::lastNews();
        $this->twigView->display(__DIR__ . '/../Templates/News/Default.php');
    }

    protected function actionOne()
    {
        if (!empty($_GET['id'])) {
            $this->twigView->article = Article::findById($_GET['id']);
            $this->twigView->display(__DIR__ . '/../Templates/News/One.php');

        } else {
            throw new Http404Exception('Такая страниц не найдена');
        }
    }

}