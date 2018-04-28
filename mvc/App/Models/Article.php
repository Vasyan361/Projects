<?php

namespace App\Models;

use App\Db;
use App\Errors;
use App\Exceptions\ErrorsExceptions;
use App\Model;

/**
 * модель новости
 * @property $author
 */
class Article extends Model
{

    protected static $table = 'news';

    public $title;
    public $lead;
    public $author_id;

    /**
     * связывает модель новсстей и модель авторов
     * @param $name
     * @return mixed|null
     * @throws \App\Exceptions\DbException
     * @throws \App\Exceptions\Http404Exception
     */
    public function __get($name)
    {
        if ('author' ==  $name && isset($this->author_id)) {
            return Author::findById($this->author_id);
        } else {
            return null;
        }
    }

    public function __isset($name) // согласно документации Twig этот метод необходим, чтобы нормально работал метод __get($name)
    {
        if ('author' ==  $name) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * возвращает последние новости
     * @return array|bool
     * @throws \App\Exceptions\DbException
     */
    public static function lastNews()
    {
        $db = new Db();
        $sql = 'SELECT * FROM news ORDER BY id DESC LIMIT 3';
        $data = $db->query($sql, [], self::class);

        if (!empty($data)) {
            return $data;
        } else {
            return false;
        }
    }


    /**
     * Валидация данных
     * @param array $data
     * @return ErrorsExceptions
     */
    public function validation(array $data)
    {
        $errors = new ErrorsExceptions();

        if (isset($data['title']) && strlen($data['title']) < 10) {
            $errors->add(new \Exception('Слишком короткий Заголовок'));
        }

        if (isset($data['lead']) && strlen($data['lead']) < 30) {
            $errors->add(new \Exception('Слишком короткая статья'));
        }

        return $errors;
    }


}