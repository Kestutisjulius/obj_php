<?php

class Tenisininkas
{
    private $id;
    private $name;
    private $ball = false;
    private static $player1;
    private static $player2;

    public function __construct()
    {
        $this->id = uniqid();
    }

    public function haveBall(){

    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setBall(bool $ball): void
    {
        $this->ball = $ball;
    }

    public function passBall(self $t){
        $this->ball = false;
    }
    public static function gameStart(){
          return  rand(0, 1) ? self::$player1 = 0 : self::$player2 = 1;
    }

}