<?php

class Senelis
{

    protected $posakis = 'va va, sakiau';
    static public $posakis2 = 'ot tu, gausi';

    public function pasaka(){
        echo '<h4> seku seku pasaka</h4>';
        echo "<h4>".self::$posakis2. "</h4>"; //senelio posakis neoverridinasi
        echo "<h4>".static::$posakis2. "</h4>"; //senelis gauna posaki is vaiko
    }
}