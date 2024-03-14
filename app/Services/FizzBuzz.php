<?php

namespace App\Services;

class FizzBuzz
{
    public function listItems(array $items): array
    {

        $items = array_map(function ($item) {
            if ($this->isFizzBuzzFor($item)) {
                return "FizzBuzz";
            }

            if ($this->isFizzFor($item)) {
                return "Fizz";
            }

            if ($this->isBuzzFor($item)) {
                return "Buzz";
            }

            return $item;

        }, $items);

        return $items;
    }

    private function isFizzBuzzFor(int $item): bool
    {
        return $item % 3 === 0 && $item % 5 === 0;
    }

    public function isFizzFor(int $number): bool
    {
        return $number % 3 === 0;
    }

    public function isBuzzFor(int $number): bool
    {
        return $number % 5 === 0;
    }
}
