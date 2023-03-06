<!-- 
    A GET API that takes a string and returns a new string with reversed numbers in that string.The string might not contain numbers. 
 -->

 <?php

$string = $_GET['string'];
function reverseNumbersInString($str)
{
    $str = str_split($str);
    $start = 0;
    $end = count($str) - 1;
    $regex = '/[0-9]/';
    while ($start < $end) {
        if (!preg_match($regex, $str[$start])) {
            $start++;
            continue;
        }
        if (!preg_match($regex, $str[$end])) {
            $end--;
            continue;
        }
        $tmp = $str[$start];
        $str[$start] = $str[$end];
        $str[$end] = $tmp;
        $start++;
        $end--;
    }

    return implode('', $str);
}
;
$response["Reversed Numbers in String"] = reverseNumbersInString($string);
echo json_encode($response);

?>