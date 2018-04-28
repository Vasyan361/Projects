<?php

namespace App;

/**
 * интерфейс для валидации данных
 * @package App
 */
interface Validation
{

    public function validation(array $data);

}