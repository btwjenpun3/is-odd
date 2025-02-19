<?php

namespace Kaia\IsOdd;

class IsOdd
{
    public static function check(int $number): bool
    {
        return $number % 2 !== 0;
    }
}
