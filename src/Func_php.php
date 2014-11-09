<?php

namespace Func_php;


class Func_php
{

    public static function multiply($array)
    {
        if (empty($array))
            return 0;
        else
            return self::multiply_util($array);
    }

    public static function multiply_util($array)
    {
        if (empty($array))
            return 1;
        else
            return $array[0]*self::multiply_util(array_slice($array, 1));
    }

    public static function sum($array) {
    if (empty($array))
        return 0;
    else
        return $array[0] + self::sum(array_slice($array, 1));
    }

}
