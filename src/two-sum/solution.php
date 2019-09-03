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
        $hashMap = [];

        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];

            if (isset($hashMap[$complement])) {
                return [$hashMap[$complement], $i];
            }

            $hashMap[$nums[$i]] = $i;
        }

        throw new \Exception("No two sum solution", 500);
    }
}
