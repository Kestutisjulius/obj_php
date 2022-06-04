<?php

class Pinigine
{
    private $popieriniai;
    private $metaliniai;

    public function ideti($kiekis){
        if (2>=$kiekis){
            $this->metaliniai += $kiekis;
        }else{
            $this->popieriniai += $kiekis;
        }
    }
    public function skaiciuoti(){
        echo $this->popieriniai.' popieriniai'.'<br>'.$this->metaliniai.' metaliniai';
    }
}