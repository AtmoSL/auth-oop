<?php

namespace service;

class Validator
{
    protected static function isEmpty(array $array):bool
    {
        foreach ($array as $value) {
            if (empty($value)) return true;
        }
        return false;
    }
}