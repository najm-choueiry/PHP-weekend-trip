<?php

$string = $_GET['string'];

function palindrome($string)
{
    $left = 0;
    $right = strlen($string) - 1;
    $palindrome = 0;

    while ($left < $right) {
        if ($string[$right] != $string[$left]) {
            $palindrome = 1;
            break;
        }
        $left++;
        $right--;
    }

    if ($palindrome == 0) {
        echo json_encode($response["string"] = "It is Palindrome");
    } else {
        echo json_encode($response["string"] = "It is not Palindrome");
    }
}

palindrome($string);

?>