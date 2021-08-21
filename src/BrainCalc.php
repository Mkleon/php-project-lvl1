<?php

namespace Brain\Games\Calc;

use function cli\line;
use function cli\prompt;

function calc()
{
    $gamesCount = 3;

    line('Welcome to the Brain Games!');

    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line("What is the result of the expression?");

    for ($i = 1; $i <= $gamesCount; $i++) {
        $operations = "+-*";

        $operator = $operations[rand(0, 2)];
        $operand1 = rand(1, 9);
        $operand2 = rand(1, 9);

        switch ($operator) {
            case '+':
                $output = "{$operand1} + {$operand2}";
                $correctAnswer = $operand1 + $operand2;
                break;
            case '-':
                $output = "{$operand1} - {$operand2}";
                $correctAnswer = $operand1 - $operand2;
                break;
            case '*':
                $output = "{$operand1} * {$operand2}";
                $correctAnswer = $operand1 * $operand2;
                break;
        }

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
