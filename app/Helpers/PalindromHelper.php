<?php

namespace App\Helpers;

class PalindromHelper
{
    public static function isPalindrom(string $text): bool
    {
        $cleaned = strtolower(str_replace(' ', '', $text));
        return $cleaned === strrev($cleaned);
    }
}
