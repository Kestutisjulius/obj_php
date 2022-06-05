<?php
require __DIR__.'./Pinigine.php';
echo '<pre>';

$pinigine = new Pinigine();
$pinigine->ideti(2);
$pinigine->ideti(1);
$pinigine->ideti(3);
$pinigine->ideti(5);
$pinigine->skaiciuoti();
echo '<br>';
echo $pinigine->getCountMetaliniai().' yra metaliniu pinigu';
echo '<br>';
echo $pinigine->getCountPopieriniai().' yra Popieriniu pinigu';