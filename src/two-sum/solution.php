<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target)
    {
        $indexes = null;

        for ($i = 0; $i < count($nums); $i++) {
            if ($indexes) {
                break;
            }
            for ($j = 0; $j < count($nums); $j++) {
                if ($i === $j) {
                    continue;
                }
                if ($nums[$i] + $nums[$j] === $target) {
                    $indexes = [$i,$j];
                    break;
                }
            }
        }

        return $indexes;
    }
}
