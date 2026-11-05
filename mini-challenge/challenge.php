<?php

function displayWelcome(){
    echo "welcome to the mini challenge";
}

$grade1 = 60;
$grade2 = 80;
$grade3 = 90;
function calculateAverageGrades($grade1, $grade2, $grade3){
    $average = round(($grade1 + $grade2 + $grade3) / 3);
    return $average;
}

$averageOutside = calculateAverageGrades($grade1, $grade2, $grade3);


function getGrade($averageOutside){
    if ($averageOutside >= 90){
        echo "A";
    } elseif ($averageOutside >= 80){
        echo "B";
    } elseif ($averageOutside >= 70){
        echo "C";
    } elseif ($averageOutside >= 60){
        echo "D";
    } else {
        echo "F";
    } 
}



echo "<br>";
displayWelcome();
echo "<br>";
echo $grade1,$grade2,$grade3;
echo "<br>";

getGrade($averageOutside);
echo "<br>";

echo gettype($averageOutside);

echo "<br>";

echo var_dump($averageOutside);




?>