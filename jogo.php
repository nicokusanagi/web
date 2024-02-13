<?php
$numero = rand(1, 100);
$attempts = 0;
do {
    $attempt = readline("Insert your number: ");
    $attempts++;
    if ($attempt < $numero) {
        echo "try a higher number.\n";
    } elseif ($attempt > $numero) {
        echo "try a lower number.\n";
    } else echo "Jackpot\n";
} while ($attempt != $numero);
echo ("\nyou got it on $attempts attempts.");
