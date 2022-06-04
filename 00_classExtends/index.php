<?php
spl_autoload_register(function ($class){
    require __DIR__.'/'.$class.'.php';
});

$vaikas = new Vaikas();
$vaikas->betvarke();
$vaikas->tvarka();
$vaikas->pasaka();
//$vaikas->posakis; //protected
