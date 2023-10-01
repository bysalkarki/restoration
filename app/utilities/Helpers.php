<?php

namespace App\utilities;

class Helpers
{
    public static function getNumbersWord(int $number)
    {
        return match ($number) {
            2 => '-two',
            3 => '-three',
            4 => '-four',
            5 => '-five',
            default => '',
        };
    }
}
