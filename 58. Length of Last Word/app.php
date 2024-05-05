<?php 
class Solution {

    /**
     * @param String 
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $trimmed = rtrim($s);
        $last_space_pos = strrpos($trimmed, ' ');
        
        if ($last_space_pos === false) {
            return strlen($trimmed);
        }
        
        return strlen(substr($trimmed, $last_space_pos + 1));
    }
    
}
    
$solution = new Solution();
$s = "fetch the last word from me ";
$result = $solution->lengthOfLastWord($s);
echo $result;

?>
