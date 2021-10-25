<?php

namespace Tests;

use App\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    /** @test */
    public function it_say_fizz_if_the_number_is_divisible_by_3()
    {
        $app = new FizzBuzz();
        $this->assertEquals("1\n2\nfizz\n", $app->run(1, 3));
    }

    /** @test */
    public function it_say_buzz_if_the_number_is_divisible_by_5()
    {
        $app = new FizzBuzz();
        $this->assertEquals("1\n2\nfizz\n4\nbuzz\n", $app->run(1, 5));
    }

    /** @test */
    public function it_say_fizzbuzz_if_the_number_is_divisible_by_3_and_5()
    {
        $app = new FizzBuzz();
        $this->assertEquals("13\n14\nfizzbuzz\n", $app->run(13, 15));
    }
}