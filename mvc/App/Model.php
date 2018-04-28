<?php

namespace App;

use App\Exceptions\ErrorsExceptions;
use App\Exceptions\Http404Exception;

/**
 * базовый класс моделей
 * реализован паттерн Active Record
 * Class Model
 * @package App
 */
abstract class Model implements Validation
{

    protected static $table = null;

    public $id;

    /**
     * Возврощает все записи в таблицы
     * @return \Generator
     * @throws Exceptions\DbException
     */
    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table;
        return $db->queryEach($sql, [], static::class);
    }

    /**
     * возвращает запись из таблицы по первичному ключу
     * @param int $id
     * @return mixed
     * @throws Exceptions\DbException
     * @throws Http404Exception
     */
    public static function findById(int $id)
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
        $data = $db->query($sql, [':id' => $id], static::class);

        if (!empty($data)) {
            return $data[0];
        } else {
            throw new Http404Exception('Такая страниц не найдена');
        }
    }

    /**
     * обновление записи в таблице
     * @throws Exceptions\DbException
     */
    public function update()
    {
        $fields = get_object_vars($this);
        $sets = [];
        $data = [];

        foreach ($fields as $name => $value) {
            $data[':' . $name] = $value;
            if ('id' == $name) {
                continue;
            }
            $sets[] = $name . '=:' . $name;
        }

        $sql = '
        UPDATE ' . static::$table . '
        SET ' . implode(', ', $sets) . '
        WHERE id=:id';

        $db = new Db();
        $db->execute($sql, $data);
    }

    /**
     * вставка новой записи в таблицу
     * @throws Exceptions\DbException
     */
    public function insert()
    {
        $fields = get_object_vars($this);
        $sets = [];
        $key = [];
        $data = [];

        foreach ($fields as $name => $value) {
            $data[':' . $name] = $value;
            $sets[] =$name;
            $key[] = ':' . $name;
        }

        $sql = '
        INSERT INTO ' . static::$table . ' (' . implode(', ', $sets) . '
        ) VALUES (' . implode(', ', $key) . ')';
        $db = new Db();
        $db->execute($sql, $data);
    }

    /**
     * выбирает что надо сделать: вставить или обновить запись в таблице
     * @throws Exceptions\DbException
     */
    public function save()
    {
        if (null == $this->id) {
            $this->insert();
        } else {
            $this->update();
        }
    }

    /**
     * удаляет запись в таблице
     * @throws Exceptions\DbException
     */
    public function delete()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id=:id';

        $db = new Db();
        $db->execute($sql, [':id' => $this->id]);
        $this->id = $db->lastId();
    }

    /**
     * заполняет свойства модели данными из массива и проводит волидацию данных
     * реализован паттерн мультиисключения
     * @param array $data
     */
    public  function fill(array $data)
    {
        if (isset($data['id']) && '' == $data['id']) {
            unset($data['id']);
        }

        $errors = $this->validation($data);

        if (!$errors->empty()) { //если есть исключения то выбрасываем их
            throw $errors;
        }

        foreach ($data as $key => $value) {
            $this->$key = $value;
        } // заполняем свойства значениями
    }



}