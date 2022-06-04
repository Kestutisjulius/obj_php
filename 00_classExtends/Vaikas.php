<?php

class Vaikas extends Tevas
{
    protected $posakis = 'bla bla';
    static public $posakis2 = 'aik seneli...'; //overridina

    public function betvarke(){
        echo '<h3>betvarke</h3>';
    }
//    public function pasaka(){
//        echo '<h4> skrolinu tik tok</h4>';
//        echo "<h4>$this->posakis </h4>";
//    }
}