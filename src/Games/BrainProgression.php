<?php

namespace Brain\Games\Progression;

use Brain\Engine;

function createProgression(int $length, int $firstItem, int $step): array
{
    $result = [];

    for ($i = 0, $currentValue = $firstItem; $i < $length; $i++, $currentValue += $step) {
        $result[] = $currentValue;
    }

    return $result;
}

function progression(): void
{
    $gamesCount = 3;
    $description = 'What number is missing in the progression?';
    $data = [];

    $progressionLength = rand(5, 10);

    for ($i = 1; $i <= $gamesCount; $i++) {
        $hideIndex = rand(0, $progressionLength - 1);
        $step = rand(1, 5);
        $firstItem = rand(1, 10);

        $progression = createProgression($progressionLength, $firstItem, $step);

        $progressionWithHideItem = $progression;
        $progressionWithHideItem[$hideIndex] = '..';

        $output = implode(' ', $progressionWithHideItem);
        $correctAnswer = $progression[$hideIndex];

        $data[] = [$output, $correctAnswer];
    }

    Engine\engine($description, $data);
}
