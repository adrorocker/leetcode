<?php

class Solution
{
    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($numbers, $target)
    {
        $indexes = null;
        $maxIndex = count($numbers);

        for ($i = 0; $i < $maxIndex; $i++) {
            if ($indexes) {
                break;
            }
            for ($j = $i+1; $j < $maxIndex; $j++) {
                if ($numbers[$i] + $numbers[$j] === $target) {
                    $indexes = [$i+1, $j+1];
                    break;
                }
                if ($numbers[$i] + $numbers[$j] > $target) {
                    $maxIndex = $j;
                }
            }
        }

        return $indexes;
    }
}
