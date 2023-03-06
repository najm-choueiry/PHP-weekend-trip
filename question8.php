<!-- 
    A GET API that returns your current location. The location should be fetched automatically.

    CHAT GPT
 -->

 <?php
//if latitude and longitude are submitted
if (!empty($_GET['latitude']) && !empty($_GET['longitude'])) {
    //send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' . trim($_GET['latitude']) . ',' . trim($_GET['longitude']) . '&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;

    //if request status is successful
    if ($status == "OK") {
        //get address from json data
        $location = $data->results[0]->formatted_address;
    } else {
        $location = '';
    }

    //return address to ajax 
    echo json_encode($location);
}
?>