<?php

namespace App;

use App\Exceptions\DbException;

/**
 * класс для работы с базой данных
 * реализован паттерн ORM
 * @package App
 */
class Db
{
    protected $dbh;

    /**
     * Подключаемся к базе данных
     * @throws DbException
     */
    public function __construct()
    {

        $instance = Config::getInstance();
        $config = $instance->data;

        $dsn = $config['db'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'];
        try {
            $this->dbh = new \PDO($dsn, $config['user'], $config['password']);

        } catch (\PDOException $ex) {
            throw new DbException('Нет соединения с БД');
        }

    }

    /**
     * выполняет запрос и возращает данные, преобразованные в обЪекты
     * @param string $sql
     * @param array $params
     * @param string $class
     * @return array
     * @throws DbException
     */
    public function query(string $sql, array $params = [], $class = \stdClass::class)
    {
        try {
            $sth = $this->dbh->prepare($sql);

        } catch (\PDOException $ex) {
            throw new DbException('Ошибка в запросе');
        }

        $sth->execute($params);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    /**
     * выполняет запрос и возвращает true либо false в зависимости от того, удалось ли выполнение
     * @param string $query
     * @param array $params
     * @return bool
     * @throws DbException
     */
    public function  execute(string $query, array $params=[])
    {
        try {
            $sth = $this->dbh->prepare($query);

        } catch (\PDOException $ex) {
            throw new DbException('Ошибка в запросе');
        }

        return $sth->execute($params);

    }

    /**
     * возвращает последнее вставленное id
     * @return string
     */
    public function lastId()
    {
        return $this->dbh->lastInsertId();
    }

    /**
     * выполняет запрос и возращает данные, преобразованные в обЪекты
     * используется генератор
     * @param string $sql
     * @param array $params
     * @param string $class
     * @return \Generator
     * @throws DbException
     */
    public function queryEach(string $sql, array $params = [], $class = \stdClass::class)
    {
        try {
            $sth = $this->dbh->prepare($sql);

        } catch (\PDOException $ex) {
            throw new DbException('Ошибка в запросе');
        }

        $sth->execute($params);
        $sth->setFetchMode(\PDO::FETCH_CLASS, $class);

        $one =$sth->fetch();
        while (false != $one) {
            yield $one;
            $one =$sth->fetch();
        }

    }

}