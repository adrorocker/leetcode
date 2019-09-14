<?php
/**
 * Definition for a singly-linked list.
 * class ListNode
 * {
 *      public $val = 0;
 *
 *      public $next = null;
 *
 *      function __construct($val)
 *      {
 *          $this->val = $val;
 *      }
 * }
 */
class Solution
{
    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers($l1, $l2)
    {
        $c = 0;
        $end = false;
        $container = [];
        while (!$end) {
            list($sum, $c) = $this->add($l1->val, $l2->val, $c);
            $container[] = $sum;

            $l1 = $l1->next;
            $l2 = $l2->next;

            if ($l1 == null && $l2 == null) {
                if ($c !== 0) {
                    $container[] = $c;
                }
                $end = true;
            }
        }

        $container = array_reverse($container);

        $next = null;

        foreach ($container as $val) {
            $node = new ListNode($val);
            $node->next = $next;

            $next = $node;
        }

        return $next;
    }

    protected function add($a, $b, $c)
    {
        $sum = $a + $b + $c;
        $c = $sum % 10;
        if ($sum === $c) {
            $c = 0;
        } elseif ($sum >= 10) {
            $sum = $sum - 10;
            $c = 1;
        }

        return [$sum, $c];
    }
}
