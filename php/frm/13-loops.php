<?php
include '../includes/header.php';

$i = 0;


while ($i < 10) {
    echo $i . "<br/>";
    $i++;
}

echo "<br/>";

$ll = 100;

do {
    echo $ll . "<br/>";
    $ll++;
} while ($ll < 150);


//for loop
for ($i = 0; $i < 350; $i++) {
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo $i . " - fizz  bus" . "<br/>";
    } else if ($i % 3 === 0) {
        echo $i .  " - fizz <br/>";
    } else if ($i % 5 === 0) {
        echo $i .  " - buzz <br/>";
    }
}

include '../includes/footer.php';
