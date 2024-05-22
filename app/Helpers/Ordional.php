<?php

namespace App\Helpers;

trait Ordional
{
    public static function ordinalConverter($value)
    {
        $number = intval($value);
        $suffix = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];
        $ordinal = ($number % 100 >= 11 && $number % 100 <= 13) ? 'th' : $suffix[$number % 10];
        $combined = $number . $ordinal;
        $separated = $number . ' ' . $ordinal;
        return [
            'combined' => $combined,
            'number' => $number,
            'ordinal' => $ordinal
        ];
    }
}
