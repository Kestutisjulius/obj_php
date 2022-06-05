<?php

class Pinigine
{
    private $popieriniai;
    private $metaliniai;
    private $countMetaliniai;
    private $countPopieriniai;

    public function ideti($kiekis){
        if (2>=$kiekis){
            $this->metaliniai += $kiekis;
            $this->countMetaliniai++;
        }else{
            $this->popieriniai += $kiekis;
            $this->countPopieriniai++;
        }
    }
    public function skaiciuoti(){
        echo $this->popieriniai.' popieriniais'.'<br>'.$this->metaliniai.' metaliniais';
    }

    public function getCountMetaliniai()
    {
        return $this->countMetaliniai;
    }

    public function getCountPopieriniai()
    {
        return $this->countPopieriniai;
    }

}