<?php

namespace Brain\Games\Calc;

use Brain\Engine;

function calc(): void
{
    $gamesCount = 3;
    $description = "What is the result of the expression?";
    $data = [];

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

        $data[] = [$output, $correctAnswer];
    }

    Engine\engine($description, $data);
}
