<?php

namespace service;

class Model
{
    static string $table;
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
}