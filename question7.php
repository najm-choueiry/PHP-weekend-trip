<!-- 
    A GET API to retrieve your IP address.  CCHAT GPT
 -->
 <?php
header('Content-Type: application/json');

$ip_address = $_SERVER['REMOTE_ADDR'];

$response = array(
    'ip_address' => $ip_address
);

echo json_encode($response);
?>