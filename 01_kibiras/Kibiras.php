<?php

class Kibiras
{
    protected $akmenuKiekis;

    public function pridetiAkmenu($kiekis){
        $this->akmenuKiekis +=$kiekis;
    }
    public function prideti1Akmeni(){
        $this->akmenuKiekis ++;
    }
    public function kiekPririnkta(){
        echo $this->akmenuKiekis;
    }
}