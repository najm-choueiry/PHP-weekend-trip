<!-- 
    A GET API that takes a string containing numbers separated by commas (2,3,5,1,0,6) and sort them using Selection Sort. Return the new sorted list using JSON.
 -->

<?php

function selection_sort(&$arr)
{
    for ($i = 0; $i < $len; $i++) {
        $min_index = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($arr[$j] < $arr[$min_index]) {
                $min_index = $j;
            }
        }

        // swap the minimum value to $ith node
        if ($arr[$i] > $arr[$min_index]) {
            $tmp = $arr[$i];
            $arr[$i] = $arr[$min_index];
            $arr[$min_index] = $tmp;
        }
    }
}



$response = [];

if (isset($_GET['numbers'])) {
    $numbers_str = $_GET['numbers'];
    $nums = explode(',', $numbers_str);
    foreach ($nums as $num) {
        if (!is_numeric($num)) {
            // echo json_encode(array('success' => false, 'message' => 'Invalid numbers format.'));
            echo json_encode($response['status'] = false, $response['message'] = "Invalid numbers format");
            exit();
        }
    }
    $sorted_nums = selection_sort($nums);
    echo json_encode(array('success' => true, 'sorted_numbers' => $sorted_nums));
} else {
    echo json_encode(array('success' => false, 'message' => 'Numbers parameter is missing.'));
}

?>