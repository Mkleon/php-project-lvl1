<?php

namespace Brain\Games;

use Brain\Engine;

function even(): void
{
    $gamesCount = 3;
    $description = 'Answer "yes" if the number is even, otherwise answer "no".';
    $data = [];

    for ($i = 1; $i <= $gamesCount; $i++) {
        $number = rand(1, 99);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        $data[] = [$number, $correctAnswer];
    }

    Engine\engine($description, $data);
}
