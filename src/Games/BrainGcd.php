<?php

namespace Brain\Games\Gcd;

use Brain\Engine;

function findGcd(int $a, int $b): int
{
    if ($a === $b) {
        return $a;
    }

    $diff = $a - $b;

    return $diff > 0 ? findGcd($diff, $b) : findGcd($a, abs($diff));
}

function gcd(): void
{
    $gamesCount = 3;
    $description = 'Find the greatest common divisor of given numbers.';
    $data = [];

    for ($i = 1; $i <= $gamesCount; $i++) {
        $number1 = rand(1, 99);
        $number2 = rand(1, 99);

        $output = "{$number1} {$number2}";
        $correctAnswer = findGcd($number1, $number2);

        $data[] = [$output, $correctAnswer];
    }

    Engine\engine($description, $data);
}
