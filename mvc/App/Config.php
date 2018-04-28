<?php

namespace App;

/**
 * возрацает параматры подключения к базе данных
 * реализован паттерн singleton
 * @package App
 */
class Config
{

    protected static $instance = null;

    public $data;

    /**
     * делаем конструктор закрытым, чтобы невозможно было просто так создать объект
     */
    protected function __construct()
    {
        $this->data = include __DIR__ . '/../config.php';
    }

    /**
     * метод считает количество объектов этого класса и возращает только единственный экземпляр
     * @return Config|null
     */
    public static function getInstance()
    {
        if (null == self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}