<?php

namespace Brain\Engine;

use function cli\line;
use function cli\prompt;

function engine($description, $data)
{
    line('Welcome to the Brain Games!');

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("%s", $description);

    foreach ($data as $item) {
        [$output, $correctAnswer] = $item;

        line("Question: %s", $output);

        $answer = prompt("Your answer");

        if ((string) $correctAnswer === $answer) {
            line("Correct!");
            continue;
        }

        line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
        line("Let's try again, %s!", $name);
        return;
    }

    line("Congratulations, %s!", $name);
}
