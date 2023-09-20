<?php

namespace service;

class Model
{
    static string $table;

    /**
     * Создание поля в таблице
     * @param $data
     * @return void
     */
    public static function create($data)
    {
        $table = static::$table;

        $fields = "";
        $values = "";

        $countElements = count($data);
        $counter = 0;

        foreach ($data as $field => $value) {
            $counter++;
            $fields .= "`" . $field . "`" . (($counter != $countElements) ? ", " : "");
            $values .= "'" . $value . "'" . (($counter != $countElements) ? ", " : "");
        }

        $sql = "INSERT INTO `$table` ($fields) VALUES ($values)";

        DataBase::query($sql);
    }

    /**
     * Получение объектов из таблицы по условию
     * @param array $where
     * @param $fields
     * @return mixed
     */
    public static function where(array $where, $fields = ["*"])
    {
        $table = static::$table;
        $whereStr = '';

        if($fields===["*"]){
            $fieldsSTR = "*";
        }else{
            $fieldsSTR = " " . $table . "." . implode(",", $fields);
        }


        foreach ($where as $whereField => $whereValue) {
            $whereStr .= static::$table . "." . $whereField . "= '" . $whereValue . "'". (($whereValue != end($where)) ? " AND " : "");
        }

        $sql = "SELECT " . $fieldsSTR . " FROM " . static::$table . " WHERE " . $whereStr ;

        $stmt = DataBase::query($sql);


        return $stmt->fetchAll(\PDO::FETCH_CLASS);
    }
}