<?php

namespace BrainGames\Even;

use function \cli\line;
use function \cli\prompt;

function even()
{
    line("Welcome to the Brain Games!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $name = prompt('May I have your name?');
    line("Hello,%s", $name);
    $count = 0;
    while ($count < 3) {
        $num = rand(1, 100);
        $answer = prompt("Question: {$num}");
        if ($num % 2 === 0 && $answer === 'yes') {
            line("Correct!");
            $count++;
        } elseif ($num % 2 !== 0 && $answer === 'no') {
            line("Correct!");
            $count++;
        } elseif ($num % 2 === 0 && $answer === 'no') {
            line("'no' is wrong answer ;(. Correct answer was 'yes'.
                Let's try again, {$name}!");
            break;
        } elseif ($num % 2 !== 0 && $answer === 'yes') {
            line("'yes' is wrong answer ;(. Correct answer was 'no'.
                Let's try again, {$name}!");
            break;
        } elseif ($answer !== 'yes' || $answer !== 'no') {
            line("'{$answer}' is wrong answer ;(.
                Let's ty again, {$name}!");
            break;
        }
    }
    if ($count === 3) {
        line("Congratulations, {$name}!");
    } else {
        return;
    }
}
