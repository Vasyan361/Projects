<?php

namespace App;

/**
 * очень простой логгер
 * Class Logger
 * @package App
 */
class Logger
{

    /**
     * записывает в текстоый файл информацию об ошибке
     * @param \Throwable $ex
     */
    public static function writeLog(\Throwable $ex)
    {
        $error = gmstrftime("%d %m %G %R") . ' Ошибка: ' . $ex->getMessage() . ' В файле: ' . $ex->getFile() .
            ' на строчке: ' . $ex->getLine() . PHP_EOL;
        file_put_contents(__DIR__ . '/../errors.txt', $error, FILE_APPEND);
    }

}