<?php

namespace Brain\Games\Prime;

use Brain\Engine;

function isPrime($number): bool
{
    for ($i = 2, $end = ceil($number / 2); $i <= $end; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

function prime(): void
{
    $gamesCount = 3;
    $description = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $data = [];

    for ($i = 1; $i <= $gamesCount; $i++) {
        $number = rand(1, 99);
        $correctAnswer = isPrime($number) ? 'yes' : 'no';

        $data[] = [$number, $correctAnswer];
    }

    Engine\engine($description, $data);
}
