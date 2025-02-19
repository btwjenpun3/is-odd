<?php

class IsOdd
{
    public function isOdd(int $number): bool
    {
        return $number % 2 !== 0;
    }
}