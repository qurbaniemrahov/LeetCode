<?php 
class Solution { 
    function plusOne($digits) {
        $a = '';
        for ($i = 0; $i < count($digits); $i++) {
            $a .= $digits[$i]; 
        }
        $c = (int)$a + 1;
        // Convert $c to an array of digits
        $result = str_split((string)$c);

        return $result;
    }
}

$digits = [1,2,3];
$solution = new Solution();
$result = $solution->plusOne($digits);
echo "[" . implode(", ", $result) . "]";
?>

