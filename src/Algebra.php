<?php
/**
 * Created by PhpStorm.
 * User: Mark
 * Date: 5/13/18
 * Time: 10:00 AM
 */

namespace MPT\Math;


class Algebra
{
    public static function srss(array $values)
    {
        $sumOfSquares = 0;
        foreach ($values as $value)
        {
            $sumOfSquares += pow($value, 2);
        }
        return sqrt($sumOfSquares);
    }
} 