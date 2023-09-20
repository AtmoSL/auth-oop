<?php

namespace service;

class Validator
{
    protected static function isEmpty(array $array): bool
    {
        foreach ($array as $value) {
            if (empty($value)) return true;
        }
        return false;
    }

    protected static function isOnlyLetters($field):bool
    {
        if (preg_match('/^[\p{Cyrillic}\p{Latin}]+$/u', $field)) {
            return true;
        }

        return false;
    }
}