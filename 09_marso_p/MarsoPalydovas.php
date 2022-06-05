<?php

class MarsoPalydovas
{
    public $id;
    static $count = 0;
    static private $title;

    private function __construct()
    {
        $this->id = rand(1,2);

    }

    static public function create($name){
        self::$count++;
        if (self::$count == 1){
            if ($name == 'Deimas' || $name == 'Fobas'){
            self::$title[] = $name;
            }
            else{
                echo '<h1 style="color: red">ner tokio Marso palydovo</h1>';
            }
        }
        if (self::$count == 2){
            if (self::$title[0] != $name && ($name == 'Deimas' || $name == 'Fobas')) {
            self::$title[] = $name;
            }
            else {
                echo '<h1 style="color: red">toks Marso palydovas jau sukurtas arba klaidingas vardas</h1>';
            }
        }
        if (self::$count > 2 ){
            return self::$title;
        }

        return self::$title;
    }
}