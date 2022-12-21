<?php

namespace Nelwhix\FakinledeExam;

    function countLetterOccurrence(string $letter, string $statement): int  {
        $stringLength = strlen($statement);

        $count = 0;

        for ($i = 0; $i < $stringLength; $i++) {
            if ($statement[$i] == $letter) {
                $count++;
            }
        }

        return $count;
    }

    function countEachLetterOccurrence(string $statement): array {
        // Turn all characters to lowercase and strip whitespaces
        $statement = strtolower($statement);
        $statement = str_replace(" ", "", $statement);

        $countArray = [];
        $stringLength = strlen($statement);

        for ($i = 0; $i < $stringLength; $i++) {
            if (in_array($statement[$i], array_keys($countArray))) {
                continue;
            }

            $count = countLetterOccurrence($statement[$i], $statement);

            $countArray[$statement[$i]] = $count;
        }

        return $countArray;
    }

