<?php

namespace Nelwhix\FakinledeExam;

    function countLetterOccurence(string $letter, string $statement): int  {
        $statement = strtolower($statement);
        $stringLength = strlen($statement);

        $count = 0;

        for ($i = 0; $i < $stringLength; $i++) {
            if ($statement[$i] == $letter) {
                $count++;
            }
        }

        return $count;
    }

    function countEachLetterOccurence(string $statement): array {
        $countArray = [];

        for ($i = 0; $i < strlen($statement); $i++) {
            if (in_array($statement[$i], array_keys($countArray))) {
                continue;
            }

            $count = countLetterOccurence($statement[$i], $statement);

            $countArray[$statement[$i]] = $count;
        }

        return $countArray;
    }

    var_dump(countEachLetterOccurence("indomie"));

