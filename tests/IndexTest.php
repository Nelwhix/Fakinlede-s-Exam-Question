<?php

require 'vendor/autoload.php';

use function Nelwhix\FakinledeExam\countEachLetterOccurrence;

it('counts the letters in a string', function (string $statement, array $expected) {
    $array = countEachLetterOccurrence($statement);

    expect($array)->toBe($expected);
})->with([
    ["Indomie", ["i" => 2, "n" => 1, "d" => 1, "o" => 1, "m" => 1, "e" => 1,]],
    ["Nelson", ["n" => 2, "e" => 1, "l" => 1, "s" => 1, "o" => 1,]],
    ["Array", ["a" => 2, "r" => 2, "y" => 1]],
    ["I love my mum so much she is my superhero", ["i" => 2, "l" => 1, "o" => 3, "v" => 1, "e" => 4, "m" => 5, "y" => 2,
        "u" => 3, "s" => 4, "c" => 1, "h" => 3, "p" => 1, "r" => 2,]],
]);
