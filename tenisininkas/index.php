<?php
require __DIR__.'./Tenisininkas.php';
echo 'tenisininkas';
echo '<br>';
$tenisininkas = new Tenisininkas();
$tenisininkas1 = new Tenisininkas();
print_r($tenisininkas);
echo '<br>';
print_r($tenisininkas1);
echo '<br>';
print_r(Tenisininkas::gameStart());