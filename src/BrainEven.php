<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    $gamesCount = 3;

    line('Welcome to the Brain Games!');

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line('Answer "yes" if the number is even, otherwise answer "no".');

    for ($i = 1; $i <= $gamesCount; $i++) {
        $number = rand(1, 99);
        $correctAnswer = $number % 2 === 0 ? 'yes' : 'no';

        line("Question: %s", $number);

        $answer = prompt("Your answer");

        if ($correctAnswer === $answer) {
            line("Correct!");
            continue;
        }

        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
        return;
    }

    line("Congratulations, %s!", $name);
}
