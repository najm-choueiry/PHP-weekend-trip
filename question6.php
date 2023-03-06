<!-- 
    A POST API that accepts a string. First, move the first set of consonants (one or more) to the end of the word. Second, add “ay” to the end of the word. For example, the word “banana” would become “ananabay.”
 -->

 <?php


function ay_consonant($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $consonants = '';
    $i = 0;
    while ($i < strlen($str) && !in_array($str[$i], $vowels)) {
        $consonants .= $str[$i];
        $i++;
    }
    if ($i == 0) {
        $result = $str . 'ay';
    } else {
        $result = substr($str, $i) . $consonants . 'ay';
    }
    return $result;
}

echo json_encode(ay_consonant($_POST['str']))
    ?>