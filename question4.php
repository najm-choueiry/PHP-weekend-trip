<!-- 
    A POST API that takes the user's year of birth and returns if the age is prime and even or not.
 -->

 <?php

$year = $_POST['year'];
$age = 2023 - $year;

function prime_age($number)
{
    for ($x = 2; $x < $number; $x++) {
        if ($number % $x == 0) {
            return 0;
        }
    }
    return 1;
}
function even_age($number)
{
    if ($number % 2 == 0) {
        return 0;
    }
    return 1;
}
$prime = prime_age($age);
$even = even_age($age);

if ($prime == 1 & $even == 0) {
    echo json_encode($response["Age"] = "prime and even");
} else {
    echo json_encode($response["Age"] = "not prime or not even");
}

?>