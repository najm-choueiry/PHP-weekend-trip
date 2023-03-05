<!-- 
    A POST API that takes an email and password. Passwords should contain 8 characters minimum, one special character minimum, at least one upper case letter,  etc. An email should have also the email format: @, no dashes, a "dot" somewhere after the @. Return true or false in a JSON object
 -->

<?php


$email = $password = "";





if (empty($_POST["email"])) {
    $response["status"] = " email is required ";
} else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $response["status"] = 'Invalid email format.';
} else {
    $email = ($_POST["email"]);

    if (empty($_POST["password"])) {
        $response["status"] = " password is required ";
    } else if (strlen($_POST["password"]) < 8) {
        $response["status"] = " password should be >8 ";
    } else if (!preg_match('/[A-Z]/', $_POST["password"])) {

        $response["status"] = "Password should contain at least one uppercase letter";
    } else if (!preg_match('/[#$%^&*()+=\-\[\]\';,.\/{}|":<>?~\\\\]/', $password)) {
        $response["status"] = "Password should contain at least one special letter";
    } else {
        $password = ($_POST["password"]);
        $response["status"] = "success";
    }


}





echo json_encode($response);

?>