<?php
class Solution {

   /**
     * @param Integer[] 
     * @param Integer 
     * @return Integer
     */
    function searchInsert($nums, $target) {
        $left = 0;
        $right = count($nums) - 1;
    
        while ($left <= $right) {
            $mid = $left + intval(($right - $left) / 2);
            if ($nums[$mid] == $target) {
                return $mid;
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return $left; 
    }
    
}

$nums = [1, 3, 5, 6];
$target = 5;

$solution = new Solution();
$result = $solution->searchInsert($nums, $target);
echo $result;



?>
