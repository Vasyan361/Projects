<?php

namespace App;

/**
 * управляет установкой и чтением произвольных свойств объекта
 * Trait Magic
 * @package App
 */
trait Magic
{

    protected $data;

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __get($key)
    {
        return $this->data[$key];
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

}