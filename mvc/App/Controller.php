<?php

namespace App;

/**
 * Базовый класс контроллера
 * @package App
 */
abstract class Controller
{

    protected $view;
    protected $twigView;

    /**
     * указываем зависимости от view
     */
    public function __construct()
    {
        $this->view = new View();
        $this->twigView = new TwigView();
    }

    /**
     * проверяет права доступа к странице
     * @return bool
     */
    protected function acsess()
    {
        return true; // в простейшем случае метод всегда возвращает true, но здесь можно сделать сложную проверку
        // в том числе, является ли пользователь админом. Поэтому создавать другую точку входа для админа считаю нецелосообразно.
    }

    /**
     * метод вызывает нужный экшн в зависимости от запроса клиента
     * @param string $name
     */
    public function action(string $name)
    {
        $method = 'action' . $name;

        if ($this->acsess()) {
            $this->$method();
        } else {
            http_response_code(403);
            die();
        }

    }

}