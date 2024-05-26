<?php 
class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
  
    function mySqrt($x) {
        $num = 0;
        while ($num * $num <= $x) {
            $num++;
        }
        return $num - 1;
    }
}

$x = 8;
$solution = new Solution();
$result = $solution->mySqrt($x);
echo $result;


?>

