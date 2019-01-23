<?php
$Array = array(
    array(3,9,43,122,64,200),
    array(33,4,105,644,124),
    array(8,51,21,555)
);
$index1 = 0;
$index2 = 0;

function findMax($Array){
    $max = $Array[0][0];
    for ($i = 0; $i < count($Array); $i++){
        for ($j = 0; $j < count($Array[$i]); $j++){
            if ($Array[$i][$j] > $max){
                $max = $Array[$i][$j];
                $index1 = $i;
                $index2 = $j;
            }
        }
    }
    return $max . " ở vị trí " . "[".$index1."]"."[".$index2."]";
}

echo "<h1>".findMax($Array)."</h1>";
?>