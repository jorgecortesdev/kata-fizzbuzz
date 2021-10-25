<?php

namespace App;

class FizzBuzz
{
    public function run(int $start = 1, int $end = 100): string
    {
        $result = '';
        foreach (range($start, $end) as $number) {
            if ($number % 3 === 0 && $number % 5 === 0) {
                $result .= "fizzbuzz\n";
            } elseif ($number % 3 === 0) {
                $result .= "fizz\n";
            } elseif ($number % 5 === 0) {
                $result .= "buzz\n";
            } else {
                $result .= "$number\n";
            }
        }

        return $result;
    }
}