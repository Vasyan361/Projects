<?php

namespace App;

/**
 * Класс для создания таблицы админ-панели
 * @package App
 */
class AdminDataTable
{
    protected $model;
    protected $func;
    protected $view;

    /**
     * на вход получаем массив моделей и функций
     * AdminDataTable constructor.
     * @param $model
     * @param array $func
     */
    public function __construct($model, array $func)
    {
        $this->model = $model;
        $this->func = $func;
        $this->view = new View();
    }

    /**
     * применяем функции к каждой модели
     * @param $template
     */
    public function render($template)
    {
        $cell = [];

        foreach ($this->model as $index => $line) {
            foreach ($this->func as $key => $column) {
                $cell[$index][$key] = $column($line);
            }
        }

        $this->view->items = $cell;
        $this->view->display($template);
    }

}