<?php
use Meska\Lokys\Vaikas;
require __DIR__.'./vendor/autoload.php';

//require __DIR__.'./Senelis.php';
//require __DIR__.'./Tevas.php';
//require __DIR__.'./Vaikas.php';
//spl_autoload_register(function ($class){
//    require __DIR__.'/'.$class.'.php';
//});

$vaikas = new Vaikas();
$vaikas->betvarke();
$vaikas->tvarka();
$vaikas->pasaka();
//$vaikas->posakis; //protected
