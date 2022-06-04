<?php
require __DIR__.'./Senelis.php';
require __DIR__.'./Tevas.php';
require __DIR__.'./Vaikas.php';

$vaikas = new Vaikas();
$vaikas->betvarke();
$vaikas->tvarka();
$vaikas->pasaka();
//$vaikas->posakis; //protected
