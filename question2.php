<?php

function selection_sort($nums) {
    $len = count($nums);
    for ($i = 0; $i < $len; $i++) {
        $min_idx = $i;
        for ($j = $i + 1; $j < $len; $j++) {
            if ($nums[$j] < $nums[$min_idx]) {
                $min_idx = $j;
            }
        }
        $temp = $nums[$i];
        $nums[$i] = $nums[$min_idx];
        $nums[$min_idx] = $temp;
    }
    return $nums;
}

$response = [];

if (isset($_GET['numbers'])) {
    $numbers_str = $_GET['numbers'];
    $nums = explode(',', $numbers_str);
    foreach ($nums as $num) {
        if (!is_numeric($num)) {
            // echo json_encode(array('success' => false, 'message' => 'Invalid numbers format.'));
            echo json_encode($response['status'] = false , $response ['message'] = "Invalid numbers format");
            exit();
        }
    }
    $sorted_nums = selection_sort($nums);
    echo json_encode(array('success' => true, 'sorted_numbers' => $sorted_nums));
} else {
    echo json_encode(array('success' => false, 'message' => 'Numbers parameter is missing.'));
}

?>
