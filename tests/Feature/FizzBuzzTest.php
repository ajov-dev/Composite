<?php

namespace Tests\Feature;

use App\Services\FizzBuzz;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FizzBuzzTest extends TestCase
{
    public function test_get_1_when_item_is_1(): void
    {
        $factory = new FizzBuzz();

        $items = range(1, 1);

        $response = $factory->listItems($items);

        $this->assertEquals(1, $response[0]);
    }

    public function test_get_Fizz_when_item_is_3(): void
    {
        $factory = new FizzBuzz();

        $items = range(1, 3);

        $response = $factory->listItems($items);

        $this->assertEquals('Fizz', $response[2]);
    }

    public function test_get_Buzz_when_item_is_5(): void
    {
        $factory = new FizzBuzz();

        $items = range(1, 5);

        $response = $factory->listItems($items);

        $this->assertEquals("Buzz", $response[4]);
    }

    public function test_get_FizzBuzz_when_item_is_5_x_3_x_1(): void
    {
        $factory = new FizzBuzz();

        $items = range(1, 15);

        $response = $factory->listItems($items);

        $this->assertEquals('FizzBuzz', $response[14]);
    }

    // data providers

    /**
     * @dataProvider numbers
     * @param int $number
     * @param $expected
     */
    public function test_get_number_when_item_is_number(int $number, $expected): void
    {
        $factory = new FizzBuzz();

        $response = $factory->listItems(range(1, 15));

        $this->assertEquals($expected, $response[$number - 1]);
    }

    public static function numbers(): array
    {
        return [
            [1, 1],
            [2, 2],
            [3, 'Fizz'],
            [4, 4],
            [5, 'Buzz'],
            [6, 'Fizz'],
            [7, 7],
            [8, 8],
            [9, 'Fizz'],
            [10, 'Buzz'],
            [11, 11],
            [12, 'Fizz'],
            [13, 13],
            [14, 14],
            [15, 'FizzBuzz'],
        ];
    }
}
