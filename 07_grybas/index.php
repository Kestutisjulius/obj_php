<?php
require __DIR__.'./Krepsys.php';
require __DIR__.'./Grybas.php';


function grybauti(){
    $grybuVnt = 0;
    $gerasGrybas = 0;
    $grybuKg = 0;
    while (Krepsys::DYDIS >= $grybuKg){
        $grybuVnt++;
        $grybas = new Grybas();
        if ($grybas->getValgomas() && (!$grybas->getSukirmijes())){
            $gerasGrybas++;
            $grybuKg += $grybas->getSvoris();

        }
    }
    $grybuKg -= $grybas->getSvoris();
    $gerasGrybas--;
    return 'aptikta '.$grybuVnt.' grybu, ir surinkta '.$grybuKg.' kg. sveiku grybu: '.$gerasGrybas.'vnt';
}
echo grybauti();

