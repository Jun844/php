<?php
function sum(){
    $result = 0;
    for($i = 1; $i <=10; $i++){
        $result +=$i;
    }
    return $result;
}
echo sum();
echo "\n";



function sum01($max) {
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }

    return $result;
}

echo sum01(100);
echo "\n";
?>

